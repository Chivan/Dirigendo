<?php

namespace Dirigendo\FrontEndBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
// these import the "@Route" and "@Template" annotations
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Dirigendo\FrontEndBundle\Business\Request;

class ServiceController extends Controller {

    /**
     * @Template()
     */
    public function serviceAction($serviceName) {
       $quotesRequest = new Request();
       $quotesRequest->setService($serviceName);

       $errors = $this->get('validator')->validate($quotesRequest);
       
       
       if (count($errors) > 0) {
            throw $this->createNotFoundException("The service does not exist.");
       }
       
        $form = $this->createFormBuilder($quotesRequest)
                ->add('location', 'neutron_autocomplete', array('label' => 'In de buurt van:',
                    'configs' => array(
                        'source' => $this->get('router')->generate('_findLocation', array(), true))))
                ->getForm();

        if ($request->getMethod() == 'POST') {
            $form->bindRequest($request);

            if ($form->isValid()) {
                
                $session = new Session();
                $session->set('quotesRequest', $quotesRequest);
                
                return $this->redirect($this->generateUrl('_serviceWithLocation', 
                        array('serviceName' => $quotesRequest->getService(), 'location' => $quotesRequest->getLocation())));
            } else {
                $errors = $form->getErrors();
            }

            if (isset($errors)) {
                return array('content' => $content,
                    'form' => $form->createView(),
                    'errors' => $errors,
                    'benefits' => $benefits
                );
            }
        }
        return array('content' => $content,
            'benefits' => $benefits,
            'form' => $form->createView()
        );
    }

    public function serviceWithLocationAction($serviceName, $location) {
        $service = $this->getDoctrine()->getRepository('DirigendoFrontEndBundle:Services')
                ->findOneBy(array('name' => $serviceName));

        $content = $this->getDoctrine()->getRepository('DirigendoFrontEndBundle:Servicepages')
                ->findOneBy(array('serviceid' => $service));

        $benefits = $this->getDoctrine()->getRepository('DirigendoFrontEndBundle:Servicebenefits')
                ->findBy(array('serviceid' => $service));

        $quotesRequest = new Request();
        $quotesRequest->setLocation($location);
        $quotesRequest->setService($serviceName);

        $errors = $this->get('validator')->validate($quotesRequest);
        if (count($errors) > 0) {
            throw $this->createNotFoundException("The service or location does not exist.");
        }

        return $this->render('DirigendoFrontEndBundle:Service:serviceWithLocationIframe.html.twig', 
              array('content' => $content,
                    'benefits' => $benefits,
                    'request' => $quotesRequest
                ));
    }

}
