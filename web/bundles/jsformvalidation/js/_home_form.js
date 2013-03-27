/**
 * This file is part of the JsFormValidationBundle.
 *
 * (c) Abhoryo <abhoryo@free.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */


var jsfv = new function () {
    function getComputeMessage(key, placeholders, number) {
        Translator.placeHolderPrefix = '{{ ';
        Translator.placeHolderSuffix = ' }}';
        // Default translations
        if (!Translator.has('validators:'+key)) {
            Translator.add('validators:'+key, key);
        }

        return Translator.get('validators:'+key, placeholders, number);
    }

    function isNotDefined(value) {
        return (typeof(value) == 'undefined' || null === value || '' === value);
    }

    function checkError(field, checkFunction, parameters, value) {
        field = jsfv.id(field);
        // Remove old errors of the field
        jsfv.removeErrors(field);        // Check the value
        errorMessage = checkFunction((value === undefined ? field : value), parameters);
        /*//  */

        if (errorMessage != true) {
        jsfv.addError(field, errorMessage);
            return false;
        }

        return true;
    }



function NotBlank(field, params)
{
    var value = field && field.nodeName ? $(field).val() : field;

    if (isNotDefined(value)) {
        return getComputeMessage(params.message);
    }

    return true;
}

function Service(field, params)
{
var fieldValue = field && field.nodeName ? $(field).val() : field;

if (isNotDefined(fieldValue)) {
return true;
}

fieldValue = String(fieldValue);

$.ajax({
url: '\x2Fapp.php\x2Fajax\x2FvalidateService\x2F?value=' + fieldValue,
async: false,
dataType: 'json',
success: function (response) {
   serviceValid = Boolean(response);
}
});


if(serviceValid == true )
{
return true;
}

return getComputeMessage(params.message);

}

function Location(field, params)
{
var fieldValue = field && field.nodeName ? $(field).val() : field;

if (isNotDefined(fieldValue)) {
return true;
}

fieldValue = String(fieldValue);

$.ajax({
url: '\x2Fapp.php\x2Fajax\x2FvalidateLocation\x2F?value=' + fieldValue,
async: false,
dataType: 'json',
success: function (response) {
   locationValid = Boolean(response);
}
});


if(locationValid == true )
{
return true;
}

return getComputeMessage(params.message);

}


    return {
        id: function (id) {
            return document.getElementById(id);
        },
        removeErrors: function (field) {
           var label = $("label[for='" + field.id + "']"); 
           if (label.attr("originalTitle") != undefined)
           {
           var originalTitle = label.attr("originalTitle");
           label.text(originalTitle);
           }
           label.removeClass("validationerror");
           $(field).removeClass("validationerror");
           $(field).addClass("validated");
        },
        addError: function (field, errorMessage) {
         var label = $("label[for='" + field.id + "']"); 
           if (label.text().indexOf(errorMessage) == -1)
           {
               
           label.attr("originalTitle", label.text());
           label.append(' ' + errorMessage);
           label.addClass("validationerror");
           }
           $(field).removeClass("validated");
           $(field).addClass("validationerror");

        },
        onEvent: function (field, eventType, handler) {
            if (typeof(field) == 'string') {
                field = jsfv.id(field);
            }
            $(field).bind(eventType, handler);
        },
        check_form_service: function() {
            var gv;
            result = true;
            result = result && checkError('form_service', NotBlank, {message:"This value should not be blank."} );
            result = result && checkError('form_service', Service, {message:"This is not a valid service name."} );
            return result;
        },
        check_form_location: function() {
            var gv;
            result = true;
            result = result && checkError('form_location', NotBlank, {message:"This value should not be blank."} );
            result = result && checkError('form_location', Location, {message:"This is not a valid city name or zipcode."} );
            return result;
        },
        onReady: function() {
            // On submit checks
            var form = jsfv.id('form');

            // Form exists ?
            if (form) {
                // Get the form
                if ( form.nodeName.toLowerCase() != 'form') {
                    form = jsfv.id('form__token').form;
                }

                jsfv.onEvent(form, 'submit', function() {
                    var gv, submitForm = true;
                    submitForm = jsfv.check_form_service() && submitForm;
                    submitForm = jsfv.check_form_location() && submitForm;
                    return submitForm;
                });
            }

            // On blur checks
            jsfv.onEvent('form_service', 'blur', jsfv.check_form_service);
            jsfv.onEvent('form_location', 'blur', jsfv.check_form_location);

        }
    };
}

$(jsfv.onReady);

