<?php

namespace Dirigendo\FrontEndBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
// these import the "@Route" and "@Template" annotations
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Dirigendo\FrontEndBundle\Services as Services;
use Dirigendo\FrontEndBundle\Entity;
use Dirigendo\FrontEndBundle\Business as Business;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller {

    /**
     * @Template()
     */
    public function indexAction(Request $request) {

        $content = $this->getDoctrine()->getRepository("DirigendoFrontEndBundle:Contentpages")
                ->findBy(array('name' => "Index"));

        $content = Services\ContentArrayBuilder::Build($content);

        $benefits = $this->getDoctrine()->getRepository("DirigendoFrontEndBundle:Indexbenefits")
                ->findAll();

        $quotesRequest = new Business\Request();

        $form = $this->createFormBuilder($quotesRequest)
                ->add('service', 'neutron_autocomplete', array('label' => 'Ik ben op zoek naar een:',
                    'configs' => array(
                        'source' => $this->get('router')->generate('_findService', array(), true))))
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

    /**
     * @Template()
     */
    public function overAction() {

        $content = $this->getDoctrine()->getRepository("DirigendoFrontEndBundle:Contentpages")
                ->findBy(array('name' => "Over"));

        $content = Services\ContentArrayBuilder::Build($content);


        return array('content' => $content
        );
    }

    /**
     * @Template()
     */
    public function deelnemenAction() {
        return array();
    }

    /**
     * @Template()
     */
    public function contactAction(Request $request) {
        // even vies tot we meerdere talen hebben.
        $request->setLocale("nl_NL");

        $content = $this->getDoctrine()->getRepository("DirigendoFrontEndBundle:Contentpages")
                ->findBy(array('name' => "Contact"));

        $content = Services\ContentArrayBuilder::Build($content);

        //form

        $contactForm = new Entity\Contactform();

        $form = $this->createFormBuilder($contactForm)
                ->add('firstname', 'text', array('label' => 'Voornaam'))
                ->add('lastname', 'text', array('label' => 'Achternaam'))
                ->add('email', 'email', array('label' => 'Email adres'))
                ->add('type', 'choice', array(
                    'choices' => array('question' => 'Vraag',
                        'remark' => 'Opmerking',
                        'complaint' => 'Klacht'),
                    'label' => 'Type'))
                ->add('message', 'textarea', array('label' => 'Bericht'))
                ->getForm();

        if ($request->getMethod() == 'POST') {
            $form->bindRequest($request);

            if ($form->isValid()) {

                //save form in database
                $em = $this->getDoctrine()->getManager();
                $em->persist($form->getData());
                $em->flush();

                //send email.
                $tenplatedMailer = $this->get("DirigendoFrontEndBundle.TemplatedEmailSender");
                $tenplatedMailer->SendTemplatedEmail("contactEmail.html.twig", "info@dirigendo.nl", "Contactform Dirigendo.nl", $form->getData());

                return $this->redirect($this->generateUrl('_contactThanks'));
            } else {
                $errors = $form->getErrors();
            }
        }

        if (isset($errors)) {
            return array('content' => $content,
                'form' => $form->createView(),
                'errors' => $errors
            );
        }

        return array('content' => $content,
            'form' => $form->createView()
        );
    }

    /**
     * @Template()
     */
    public function contactThanksAction() {
        $content = $this->getDoctrine()->getRepository("DirigendoFrontEndBundle:Contentpages")
                ->findBy(array('name' => "Contact"));

        $content = Services\ContentArrayBuilder::Build($content);

        return array('content' => $content);
    }

}
