<?php

/* default/layout/show_footer.tpl */
class __TwigTemplate_86732948b014dfbb60a5431be3f2c8b6a3d7d4a37fd86b1fb1f682e96a07374d extends Twig_Template
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
        echo "    ";
        if (((isset($context["show_footer"]) ? $context["show_footer"] : null) == true)) {
            // line 2
            echo "            </div>
        </section>
        ";
            // line 4
            $this->loadTemplate(((isset($context["template"]) ? $context["template"] : null) . "/layout/page_footer.tpl"), "default/layout/show_footer.tpl", 4)->display($context);
            // line 5
            echo "    ";
        }
        // line 6
        echo "    </div>
    ";
        // line 7
        $this->loadTemplate(((isset($context["template"]) ? $context["template"] : null) . "/layout/footer.js.tpl"), "default/layout/show_footer.tpl", 7)->display($context);
        // line 8
        echo "</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "default/layout/show_footer.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 8,  34 => 7,  31 => 6,  28 => 5,  26 => 4,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/layout/show_footer.tpl", "C:\\wamp64\\www\\chamilo-CVO_VOLT-1.11.6\\main\\template\\default\\layout\\show_footer.tpl");
    }
}
