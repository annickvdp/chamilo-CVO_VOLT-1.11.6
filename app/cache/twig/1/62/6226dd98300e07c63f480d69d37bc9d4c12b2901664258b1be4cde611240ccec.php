<?php

/* default/layout/course_navigation.tpl */
class __TwigTemplate_1edd8bdf18a400ad63486b3bf6729a5cdb9d0d1a56f294aefb109e9bf8bdf899 extends Twig_Template
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
        // line 2
        if (((isset($context["show_header"]) ? $context["show_header"] : null) == true)) {
            // line 3
            echo "    ";
            if ( !(null === (isset($context["show_course_navigation_menu"]) ? $context["show_course_navigation_menu"] : null))) {
                // line 4
                echo "        <div class=\"nav-tools\">
            ";
                // line 5
                echo (isset($context["show_course_navigation_menu"]) ? $context["show_course_navigation_menu"] : null);
                echo "
        </div>
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "default/layout/course_navigation.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 5,  24 => 4,  21 => 3,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/layout/course_navigation.tpl", "C:\\wamp64\\www\\chamilo-CVO_VOLT-1.11.6\\main\\template\\default\\layout\\course_navigation.tpl");
    }
}
