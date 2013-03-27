<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Symfony\Component\HttpKernel\Log\LoggerInterface;

/**
 * appprodUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRoutes = array(
        '_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Dirigendo\\FrontEndBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),),
        '_findService' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Dirigendo\\FrontEndBundle\\Controller\\AjaxController::findServiceAction',    '_format' => 'json',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ajax/findService/',    ),  ),),
        '_findLocation' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Dirigendo\\FrontEndBundle\\Controller\\AjaxController::findLocationAction',    '_format' => 'json',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ajax/findLocation/',    ),  ),),
        '_validateService' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Dirigendo\\FrontEndBundle\\Controller\\AjaxController::validateServiceAction',    '_format' => 'json',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ajax/validateService/',    ),  ),),
        '_validateLocation' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Dirigendo\\FrontEndBundle\\Controller\\AjaxController::validateLocationAction',    '_format' => 'json',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ajax/validateLocation/',    ),  ),),
        '_over' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Dirigendo\\FrontEndBundle\\Controller\\DefaultController::overAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/over',    ),  ),),
        '_deelnemen' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Dirigendo\\FrontEndBundle\\Controller\\DefaultController::deelnemenAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/deelnemen',    ),  ),),
        '_contact' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Dirigendo\\FrontEndBundle\\Controller\\DefaultController::contactAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/contact',    ),  ),),
        '_contactThanks' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Dirigendo\\FrontEndBundle\\Controller\\DefaultController::contactThanksAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/contact/bedankt',    ),  ),),
        '_service' => array (  0 =>   array (    0 => 'serviceName',  ),  1 =>   array (    '_controller' => 'Dirigendo\\FrontEndBundle\\Controller\\ServiceController::serviceAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'serviceName',    ),  ),),
        '_serviceWithLocation' => array (  0 =>   array (    0 => 'serviceName',    1 => 'location',  ),  1 =>   array (    '_controller' => 'Dirigendo\\FrontEndBundle\\Controller\\ServiceController::serviceWithLocationAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'location',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'serviceName',    ),  ),),
        'apy_js_form_validation_unique_entity' => array (  0 =>   array (    0 => '_locale',    1 => '_format',  ),  1 =>   array (    '_controller' => 'jsfv.controller:uniqueEntityAction',    '_format' => 'json',  ),  2 =>   array (    '_format' => 'json',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'json',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '.',      2 => '[^\\.]+',      3 => '_locale',    ),    2 =>     array (      0 => 'text',      1 => '/jsfv/unique-entity',    ),  ),),
        'apy_js_form_validation_checkmx' => array (  0 =>   array (    0 => '_format',  ),  1 =>   array (    '_controller' => 'jsfv.controller:checkMxAction',    '_format' => 'json',  ),  2 =>   array (    '_format' => 'json',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'json',      3 => '_format',    ),    1 =>     array (      0 => 'text',      1 => '/jsfv/checkmx',    ),  ),),
        'bazinga_exposetranslation_js' => array (  0 =>   array (    0 => 'domain_name',    1 => '_locale',    2 => '_format',  ),  1 =>   array (    '_controller' => 'bazinga.exposetranslation.controller:exposeTranslationAction',    'domain_name' => 'messages',    '_format' => 'js',  ),  2 =>   array (    '_format' => 'js|json',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'js|json',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/\\.]+',      3 => '_locale',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'domain_name',    ),    3 =>     array (      0 => 'text',      1 => '/i18n',    ),  ),),
        'neutron_form_media_image_upload' => array (  0 =>   array (    0 => '_format',  ),  1 =>   array (    '_controller' => 'neutron_form.controller.image:uploadAction',    '_format' => 'json',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^\\.]+',      3 => '_format',    ),    1 =>     array (      0 => 'text',      1 => '/_neutron_form/image-upload',    ),  ),),
        'neutron_form_media_image_crop' => array (  0 =>   array (    0 => '_format',  ),  1 =>   array (    '_controller' => 'neutron_form.controller.image:cropAction',    '_format' => 'json',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^\\.]+',      3 => '_format',    ),    1 =>     array (      0 => 'text',      1 => '/_neutron_form/image-crop',    ),  ),),
        'neutron_form_media_image_rotate' => array (  0 =>   array (    0 => '_format',  ),  1 =>   array (    '_controller' => 'neutron_form.controller.image:rotateAction',    '_format' => 'json',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^\\.]+',      3 => '_format',    ),    1 =>     array (      0 => 'text',      1 => '/_neutron_form/image-rotate',    ),  ),),
        'neutron_form_media_image_reset' => array (  0 =>   array (    0 => '_format',  ),  1 =>   array (    '_controller' => 'neutron_form.controller.image:resetAction',    '_format' => 'json',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^\\.]+',      3 => '_format',    ),    1 =>     array (      0 => 'text',      1 => '/_neutron_form/image-reset',    ),  ),),
        'neutron_form_media_file_upload' => array (  0 =>   array (    0 => '_format',  ),  1 =>   array (    '_controller' => 'neutron_form.controller.file:uploadAction',    '_format' => 'json',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^\\.]+',      3 => '_format',    ),    1 =>     array (      0 => 'text',      1 => '/_neutron_form/file-upload',    ),  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Route "%s" does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }
}
