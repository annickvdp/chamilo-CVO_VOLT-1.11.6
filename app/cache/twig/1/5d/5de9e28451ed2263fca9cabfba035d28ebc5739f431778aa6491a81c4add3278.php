<?php

/* default/export/pdf_header.tpl */
class __TwigTemplate_81eb83b1257f4097484602ef3c99fe5f6820ab01d8e87df02a3daa5aaf12d8aa extends Twig_Template
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
        echo "<table border=\"0\" width=\"100%\" class=\"pdf-header\">
    <tr>
        <td width=\"30%\">
            ";
        // line 4
        echo (isset($context["organization"]) ? $context["organization"] : null);
        echo "
        </td>
        <td width=\"80%\" style=\"text-align: right; font-size: 12px; color: #666666;\">
            <strong>";
        // line 7
        echo (isset($context["teacher_name"]) ? $context["teacher_name"] : null);
        echo "</strong>
        </td>
    </tr>
</table>

";
    }

    public function getTemplateName()
    {
        return "default/export/pdf_header.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 7,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/export/pdf_header.tpl", "C:\\wamp64\\www\\chamilo-CVO_VOLT-1.11.6\\main\\template\\default\\export\\pdf_header.tpl");
    }
}
