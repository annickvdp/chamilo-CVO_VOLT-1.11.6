<?php

/* default/blog/layout.tpl */
class __TwigTemplate_af7c9a738c4c762061e836c9ecd35c91d31da9b7316d4ab6b198212b1edcb109 extends Twig_Template
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
        <div class=\"blog\">
            ";
        // line 4
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "default/blog/layout.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/blog/layout.tpl", "C:\\wamp64\\www\\chamilo-CVO_VOLT-1.11.6\\main\\template\\default\\blog\\layout.tpl");
    }
}
