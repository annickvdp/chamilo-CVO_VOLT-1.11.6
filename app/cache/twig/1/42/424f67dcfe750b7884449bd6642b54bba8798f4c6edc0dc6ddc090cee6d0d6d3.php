<?php

/* default/layout/login_form.tpl */
class __TwigTemplate_72ff301ca1487a4726484741bd1cadf665eefffc85239fad1f9ab5298d71e155 extends Twig_Template
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
        if (($this->getAttribute((isset($context["_u"]) ? $context["_u"] : null), "logged", array()) == 0)) {
            // line 2
            echo "    ";
            if ((isset($context["login_form"]) ? $context["login_form"] : null)) {
                // line 3
                echo "        <div id=\"login_block\" class=\"panel panel-default\">
            <div class=\"panel-body\">
            ";
                // line 5
                echo (isset($context["login_language_form"]) ? $context["login_language_form"] : null);
                echo "
            ";
                // line 6
                if ( !(null === (isset($context["plugin_login_top"]) ? $context["plugin_login_top"] : null))) {
                    // line 7
                    echo "                <div id=\"plugin_login_top\">
                    ";
                    // line 8
                    echo (isset($context["plugin_login_top"]) ? $context["plugin_login_top"] : null);
                    echo "
                </div>
            ";
                }
                // line 11
                echo "
            ";
                // line 12
                echo (isset($context["login_failed"]) ? $context["login_failed"] : null);
                echo "
            ";
                // line 13
                echo (isset($context["login_form"]) ? $context["login_form"] : null);
                echo "

            ";
                // line 15
                if (((api_get_setting("allow_lostpassword") == "true") || (api_get_setting("allow_registration") == "true"))) {
                    // line 16
                    echo "                <ul class=\"nav nav-pills nav-stacked\">
                    ";
                    // line 17
                    if ((api_get_setting("allow_registration") != "false")) {
                        // line 18
                        echo "                        <li><a href=\"";
                        echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_main", array());
                        echo "auth/inscription.php\"> ";
                        echo get_lang("SignUp");
                        echo " </a></li>
                    ";
                    }
                    // line 20
                    echo "
                    ";
                    // line 21
                    if ((api_get_setting("allow_lostpassword") == "true")) {
                        // line 22
                        echo "                        <li><a href=\"";
                        echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_main", array());
                        echo "auth/lostPassword.php\"> ";
                        echo get_lang("LostPassword");
                        echo " </a></li>
                    ";
                    }
                    // line 24
                    echo "                </ul>
            ";
                }
                // line 26
                echo "
            ";
                // line 27
                if ( !(null === (isset($context["plugin_login_bottom"]) ? $context["plugin_login_bottom"] : null))) {
                    // line 28
                    echo "                <div id=\"plugin_login_bottom\">
                    ";
                    // line 29
                    echo (isset($context["plugin_login_bottom"]) ? $context["plugin_login_bottom"] : null);
                    echo "
                </div>
            ";
                }
                // line 32
                echo "            </div>
        </div>
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "default/layout/login_form.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 32,  95 => 29,  92 => 28,  90 => 27,  87 => 26,  83 => 24,  75 => 22,  73 => 21,  70 => 20,  62 => 18,  60 => 17,  57 => 16,  55 => 15,  50 => 13,  46 => 12,  43 => 11,  37 => 8,  34 => 7,  32 => 6,  28 => 5,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/layout/login_form.tpl", "C:\\wamp64\\www\\chamilo-CVO_VOLT-1.11.6\\main\\template\\default\\layout\\login_form.tpl");
    }
}
