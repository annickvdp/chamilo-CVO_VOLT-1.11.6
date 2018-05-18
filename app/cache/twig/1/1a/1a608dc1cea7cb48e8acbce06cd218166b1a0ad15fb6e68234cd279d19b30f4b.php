<?php

/* default/export/pdf_footer.tpl */
class __TwigTemplate_147dc2e1f9a3ba8954a3746fb06eed9844610f7bbb3b629cc4acfd7d64f32e98 extends Twig_Template
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
        echo "<table border=\"0\" class=\"full-width border-top page-footer\">
    <tr>
        <td class=\"text-left\">
            <strong>";
        // line 4
        echo $this->getAttribute((isset($context["_s"]) ? $context["_s"] : null), "institution", array());
        echo "</strong>
        </td>
        <td class=\"text-right\">
            <strong>{PAGENO} / {nb}</strong>
        </td>
    </tr>
</table>
";
    }

    public function getTemplateName()
    {
        return "default/export/pdf_footer.tpl";
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
        return new Twig_Source("", "default/export/pdf_footer.tpl", "C:\\wamp64\\www\\chamilo-CVO_VOLT-1.11.6\\main\\template\\default\\export\\pdf_footer.tpl");
    }
}
