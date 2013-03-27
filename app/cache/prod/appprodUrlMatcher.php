<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appprodUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        // _home
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_home');
            }

            return array (  '_controller' => 'Dirigendo\\FrontEndBundle\\Controller\\DefaultController::indexAction',  '_route' => '_home',);
        }

        // _findService
        if (rtrim($pathinfo, '/') === '/ajax/findService') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_findService');
            }

            return array (  '_controller' => 'Dirigendo\\FrontEndBundle\\Controller\\AjaxController::findServiceAction',  '_format' => 'json',  '_route' => '_findService',);
        }

        // _findLocation
        if (rtrim($pathinfo, '/') === '/ajax/findLocation') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_findLocation');
            }

            return array (  '_controller' => 'Dirigendo\\FrontEndBundle\\Controller\\AjaxController::findLocationAction',  '_format' => 'json',  '_route' => '_findLocation',);
        }

        // _validateService
        if (rtrim($pathinfo, '/') === '/ajax/validateService') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_validateService');
            }

            return array (  '_controller' => 'Dirigendo\\FrontEndBundle\\Controller\\AjaxController::validateServiceAction',  '_format' => 'json',  '_route' => '_validateService',);
        }

        // _validateLocation
        if (rtrim($pathinfo, '/') === '/ajax/validateLocation') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_validateLocation');
            }

            return array (  '_controller' => 'Dirigendo\\FrontEndBundle\\Controller\\AjaxController::validateLocationAction',  '_format' => 'json',  '_route' => '_validateLocation',);
        }

        // _over
        if ($pathinfo === '/over') {
            return array (  '_controller' => 'Dirigendo\\FrontEndBundle\\Controller\\DefaultController::overAction',  '_route' => '_over',);
        }

        // _deelnemen
        if ($pathinfo === '/deelnemen') {
            return array (  '_controller' => 'Dirigendo\\FrontEndBundle\\Controller\\DefaultController::deelnemenAction',  '_route' => '_deelnemen',);
        }

        // _contact
        if ($pathinfo === '/contact') {
            return array (  '_controller' => 'Dirigendo\\FrontEndBundle\\Controller\\DefaultController::contactAction',  '_route' => '_contact',);
        }

        // _contactThanks
        if ($pathinfo === '/contact/bedankt') {
            return array (  '_controller' => 'Dirigendo\\FrontEndBundle\\Controller\\DefaultController::contactThanksAction',  '_route' => '_contactThanks',);
        }

        // _service
        if (preg_match('#^/(?P<serviceName>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Dirigendo\\FrontEndBundle\\Controller\\ServiceController::serviceAction',)), array('_route' => '_service'));
        }

        // _serviceWithLocation
        if (preg_match('#^/(?P<serviceName>[^/]+)/(?P<location>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Dirigendo\\FrontEndBundle\\Controller\\ServiceController::serviceWithLocationAction',)), array('_route' => '_serviceWithLocation'));
        }

        // apy_js_form_validation_unique_entity
        if (0 === strpos($pathinfo, '/jsfv/unique-entity') && preg_match('#^/jsfv/unique\\-entity\\.(?P<_locale>[^\\.]+)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'jsfv.controller:uniqueEntityAction',  '_format' => 'json',)), array('_route' => 'apy_js_form_validation_unique_entity'));
        }

        // apy_js_form_validation_checkmx
        if (0 === strpos($pathinfo, '/jsfv/checkmx') && preg_match('#^/jsfv/checkmx(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'jsfv.controller:checkMxAction',  '_format' => 'json',)), array('_route' => 'apy_js_form_validation_checkmx'));
        }

        // bazinga_exposetranslation_js
        if (0 === strpos($pathinfo, '/i18n') && preg_match('#^/i18n/(?P<domain_name>[^/]+)/(?P<_locale>[^/\\.]+)(?:\\.(?P<_format>js|json))?$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'bazinga.exposetranslation.controller:exposeTranslationAction',  'domain_name' => 'messages',  '_format' => 'js',)), array('_route' => 'bazinga_exposetranslation_js'));
        }

        // neutron_form_media_image_upload
        if (0 === strpos($pathinfo, '/_neutron_form/image-upload') && preg_match('#^/_neutron_form/image\\-upload(?:\\.(?P<_format>[^\\.]+))?$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'neutron_form.controller.image:uploadAction',  '_format' => 'json',)), array('_route' => 'neutron_form_media_image_upload'));
        }

        // neutron_form_media_image_crop
        if (0 === strpos($pathinfo, '/_neutron_form/image-crop') && preg_match('#^/_neutron_form/image\\-crop(?:\\.(?P<_format>[^\\.]+))?$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'neutron_form.controller.image:cropAction',  '_format' => 'json',)), array('_route' => 'neutron_form_media_image_crop'));
        }

        // neutron_form_media_image_rotate
        if (0 === strpos($pathinfo, '/_neutron_form/image-rotate') && preg_match('#^/_neutron_form/image\\-rotate(?:\\.(?P<_format>[^\\.]+))?$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'neutron_form.controller.image:rotateAction',  '_format' => 'json',)), array('_route' => 'neutron_form_media_image_rotate'));
        }

        // neutron_form_media_image_reset
        if (0 === strpos($pathinfo, '/_neutron_form/image-reset') && preg_match('#^/_neutron_form/image\\-reset(?:\\.(?P<_format>[^\\.]+))?$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'neutron_form.controller.image:resetAction',  '_format' => 'json',)), array('_route' => 'neutron_form_media_image_reset'));
        }

        // neutron_form_media_file_upload
        if (0 === strpos($pathinfo, '/_neutron_form/file-upload') && preg_match('#^/_neutron_form/file\\-upload(?:\\.(?P<_format>[^\\.]+))?$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'neutron_form.controller.file:uploadAction',  '_format' => 'json',)), array('_route' => 'neutron_form_media_file_upload'));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
