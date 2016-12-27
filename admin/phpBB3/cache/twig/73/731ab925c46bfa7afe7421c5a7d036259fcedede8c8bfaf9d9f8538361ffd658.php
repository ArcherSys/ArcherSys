<?php

/* user_welcome.txt */
class __TwigTemplate_9ad766855cbe1cb7dd752a3b4f9462cef6b68b3a19f357b36474605f369d9ae0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "Subject: Welcome to \"";
        echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
        echo "\"

";
        // line 3
        echo (isset($context["WELCOME_MSG"]) ? $context["WELCOME_MSG"] : null);
        echo "

Please keep this email for your records. Your account information is as follows:

----------------------------
Username: ";
        // line 8
        echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
        echo "

Board URL: ";
        // line 10
        echo (isset($context["U_BOARD"]) ? $context["U_BOARD"] : null);
        echo "
----------------------------

Your password has been securely stored in our database and cannot be retrieved. In the event that it is forgotten, you will be able to reset it using the email address associated with your account.

Thank you for registering.

";
        // line 17
        echo (isset($context["EMAIL_SIG"]) ? $context["EMAIL_SIG"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "user_welcome.txt";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 17,  38 => 10,  33 => 8,  25 => 3,  19 => 1,);
    }
}
/* Subject: Welcome to "{SITENAME}"*/
/* */
/* {WELCOME_MSG}*/
/* */
/* Please keep this email for your records. Your account information is as follows:*/
/* */
/* ----------------------------*/
/* Username: {USERNAME}*/
/* */
/* Board URL: {U_BOARD}*/
/* ----------------------------*/
/* */
/* Your password has been securely stored in our database and cannot be retrieved. In the event that it is forgotten, you will be able to reset it using the email address associated with your account.*/
/* */
/* Thank you for registering.*/
/* */
/* {EMAIL_SIG}*/
/* */
