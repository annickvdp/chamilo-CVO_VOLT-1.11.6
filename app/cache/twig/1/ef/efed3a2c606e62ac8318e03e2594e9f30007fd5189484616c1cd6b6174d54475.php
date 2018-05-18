<?php

/* default/course_progress/pdf_general_thematic.tpl */
class __TwigTemplate_7e085384ee314c224e2becc146ae974d5271ecd41c5bf27b75f4b834a947db63 extends Twig_Template
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
        echo "<table style=\"margin-top: 30px;\" class=\"full-width border-thin\">
    <thead>
        <tr>
            <th width=\"30%\" style=\"display:inline-block; padding: 10px; text-align: center; background-color: #E5E5E5;\">
                ";
        // line 5
        echo get_lang("Thematic");
        echo "
            </th>
            <th width=\"50%\" style=\"display:inline-block; padding: 10px; text-align: center; background-color: #E5E5E5;\">
                ";
        // line 8
        echo get_lang("ThematicPlan");
        echo "
            </th>
            <th width=\"20%\" style=\"display:inline-block; padding: 10px; text-align: center; background-color: #E5E5E5;\">
                ";
        // line 11
        echo get_lang("ThematicAdvance");
        echo "
           </th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 17
            echo "            <tr>
                <td>
                    <h4 style=\"margin-bottom: 10px;\">";
            // line 19
            echo $this->getAttribute($context["item"], "title", array());
            echo "</h4>
                    <br>
                    ";
            // line 21
            echo $this->getAttribute($context["item"], "content", array());
            echo "
                </td>
                <td>
                    ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "thematic_plan", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["plan"]) {
                // line 25
                echo "                        <br>
                        <h4 style=\"margin-bottom: 10px;\">";
                // line 26
                echo $this->getAttribute($context["plan"], "title", array());
                echo "</h4>
                        <br>
                        ";
                // line 28
                echo $this->getAttribute($context["plan"], "description", array());
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plan'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "                </td>
                <td>
                    ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "thematic_advance", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["advance"]) {
                // line 33
                echo "                        <br>
                        <h4 style=\"margin-bottom: 10px;\">
                            ";
                // line 35
                echo $this->getAttribute($context["advance"], "duration", array());
                echo " ";
                echo get_lang("MinHours");
                echo "
                        </h4>
                        ";
                // line 37
                echo api_convert_and_format_date($this->getAttribute($context["advance"], "start_date", array()), 2);
                echo "
                        <br>
                        ";
                // line 39
                echo $this->getAttribute($context["advance"], "content", array());
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advance'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "    </tbody>
</table>";
    }

    public function getTemplateName()
    {
        return "default/course_progress/pdf_general_thematic.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 44,  116 => 41,  108 => 39,  103 => 37,  96 => 35,  92 => 33,  88 => 32,  84 => 30,  76 => 28,  71 => 26,  68 => 25,  64 => 24,  58 => 21,  53 => 19,  49 => 17,  45 => 16,  37 => 11,  31 => 8,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/course_progress/pdf_general_thematic.tpl", "C:\\wamp64\\www\\chamilo-CVO_VOLT-1.11.6\\main\\template\\default\\course_progress\\pdf_general_thematic.tpl");
    }
}
