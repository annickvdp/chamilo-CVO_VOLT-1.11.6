<?php

/* default/course_progress/layout.tpl */
class __TwigTemplate_9943cf0d85498a35abfd52c28f962666e66e48d736582c32ab5f1cbbe9d3c9fb extends Twig_Template
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
        echo "<div class=\"row\">
    <div class=\"col-md-12\">
        ";
        // line 3
        echo (isset($context["actions"]) ? $context["actions"] : null);
        echo "
        <div class=\"blog\">
            ";
        // line 5
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "default/course_progress/layout.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 5,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/course_progress/layout.tpl", "C:\\wamp64\\www\\chamilo-CVO_VOLT-1.11.6\\main\\template\\default\\course_progress\\layout.tpl");
    }
}
