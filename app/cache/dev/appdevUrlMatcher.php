<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appdevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // _assetic_4691440
        if ($pathinfo === '/css/4691440.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '4691440',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_4691440',);
        }

        // _assetic_4691440_0
        if ($pathinfo === '/css/4691440_part_1_jquery-ui-1.10.2.custom_1.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '4691440',  'pos' => '0',  '_format' => 'css',  '_route' => '_assetic_4691440_0',);
        }

        // _assetic_4691440_1
        if ($pathinfo === '/css/4691440_part_1_main_style_2.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '4691440',  'pos' => '1',  '_format' => 'css',  '_route' => '_assetic_4691440_1',);
        }

        // _assetic_4691440_2
        if ($pathinfo === '/css/4691440_part_1_wt-rotator_3.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '4691440',  'pos' => '2',  '_format' => 'css',  '_route' => '_assetic_4691440_2',);
        }

        // _assetic_68f669d
        if ($pathinfo === '/js/68f669d.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '68f669d',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_68f669d',);
        }

        // _assetic_68f669d_0
        if ($pathinfo === '/js/68f669d_jquery_1.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '68f669d',  'pos' => '0',  '_format' => 'js',  '_route' => '_assetic_68f669d_0',);
        }

        // _assetic_68f669d_1
        if ($pathinfo === '/js/68f669d_Jquery-ui_2.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '68f669d',  'pos' => '1',  '_format' => 'js',  '_route' => '_assetic_68f669d_1',);
        }

        // _assetic_68f669d_2
        if ($pathinfo === '/js/68f669d_autocomplete_3.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '68f669d',  'pos' => '2',  '_format' => 'js',  '_route' => '_assetic_68f669d_2',);
        }

        // _wdt
        if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',)), array('_route' => '_wdt'));
        }

        if (0 === strpos($pathinfo, '/_profiler')) {
            // _profiler_search
            if ($pathinfo === '/_profiler/search') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  '_route' => '_profiler_search',);
            }

            // _profiler_purge
            if ($pathinfo === '/_profiler/purge') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  '_route' => '_profiler_purge',);
            }

            // _profiler_info
            if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::infoAction',)), array('_route' => '_profiler_info'));
            }

            // _profiler_import
            if ($pathinfo === '/_profiler/import') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  '_route' => '_profiler_import',);
            }

            // _profiler_export
            if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]+)\\.txt$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',)), array('_route' => '_profiler_export'));
            }

            // _profiler_phpinfo
            if ($pathinfo === '/_profiler/phpinfo') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::phpinfoAction',  '_route' => '_profiler_phpinfo',);
            }

            // _profiler_search_results
            if (preg_match('#^/_profiler/(?P<token>[^/]+)/search/results$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',)), array('_route' => '_profiler_search_results'));
            }

            // _profiler
            if (preg_match('#^/_profiler/(?P<token>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',)), array('_route' => '_profiler'));
            }

            // _profiler_redirect
            if (rtrim($pathinfo, '/') === '/_profiler') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_profiler_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => '_profiler_search_results',  'token' => 'empty',  'ip' => '',  'url' => '',  'method' => '',  'limit' => '10',  '_route' => '_profiler_redirect',);
            }

        }

        if (0 === strpos($pathinfo, '/_configurator')) {
            // _configurator_home
            if (rtrim($pathinfo, '/') === '/_configurator') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_configurator_home');
                }

                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
            }

            // _configurator_step
            if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',)), array('_route' => '_configurator_step'));
            }

            // _configurator_final
            if ($pathinfo === '/_configurator/final') {
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
            }

        }

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
