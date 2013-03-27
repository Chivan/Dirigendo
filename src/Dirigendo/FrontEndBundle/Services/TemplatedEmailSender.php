<?php
namespace Dirigendo\FrontEndBundle\Services;

class TemplatedEmailSender {
    protected $mailer;
    protected $twig;
 
    public function __construct(\Swift_Mailer $mailer, \Twig_Environment $twig)
    {
        $this->mailer = $mailer;
        $this->twig = $twig;
        // TODO: Opnemen in config.
        $this->twig->setLoader( new \Twig_Loader_Filesystem(dirname(__FILE__).'/../Resources/emails'));
    }
    
    public function SendTemplatedEmail($template, $to, $subject, $data)
    {
        // Load the template in
        $templateContent = $this->twig->loadTemplate($template);
 
        // Render the whole template including any layouts etc
        $body = $templateContent->render(array("formData" => $data));
 
        // Send email
        $message = \Swift_Message::newInstance()
            ->setSubject($subject)
            ->setFrom("no-reply@dirigendo.nl")
            ->setTo($to)
            ->setBody($body, 'text/html')
        ;
        $this->mailer->send($message);
    }
}
?>
