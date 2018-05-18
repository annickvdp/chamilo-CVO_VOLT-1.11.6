<?php

/* default/course_progress/progress.tpl */
class __TwigTemplate_cbb4f3b0026ddcb9a27197bd10e8f8eeb9acd77897afcb9a1ea61ac1e3a2bbb1 extends Twig_Template
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
        echo (isset($context["actions"]) ? $context["actions"] : null);
        echo "
";
        // line 2
        echo (isset($context["message"]) ? $context["message"] : null);
        echo "
";
        // line 3
        echo (isset($context["flash_messages"]) ? $context["flash_messages"] : null);
        echo "
";
        // line 4
        if ( !twig_test_empty((isset($context["data"]) ? $context["data"] : null))) {
            // line 5
            $context["tutor"] = api_is_allowed_to_edit(false, true);
            // line 6
            echo "<div id=\"course-progress\" class=\"thematic\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"bar-progress\">
                <div class=\"pull-right\">
                    <div class=\"score-progress\">
                        <h3>";
            // line 12
            echo get_lang("Progress");
            echo ": <span id=\"div_result\">";
            echo (isset($context["score_progress"]) ? $context["score_progress"] : null);
            echo "</span> %</h3>
                    </div>
                </div>
            </div>
            <div class=\"table-responsive\">
                <table width=\"100%\" class=\"table table-hover\">
                    <tr>
                        <th style=\"width: 25%\">";
            // line 19
            echo get_lang("Thematic");
            echo "</th>
                        <th style=\"width: 40%\">";
            // line 20
            echo get_lang("ThematicPlan");
            echo "</th>
                        <th style=\"width: 35%\">";
            // line 21
            echo get_lang("ThematicAdvance");
            echo "</th>
                    </tr>
                    ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 24
                echo "                        <tr>
                            <td id=\"id-thematic-";
                // line 25
                echo $this->getAttribute($context["item"], "id", array());
                echo "\">
                                ";
                // line 26
                if (twig_test_empty((isset($context["session_star"]) ? $context["session_star"] : null))) {
                    // line 27
                    echo "                                    <h3>";
                    echo $this->getAttribute($context["item"], "title", array());
                    echo "</h3>
                                ";
                } else {
                    // line 29
                    echo "                                    <h3>";
                    echo $this->getAttribute($context["item"], "title", array());
                    echo " ";
                    echo (isset($context["session_star"]) ? $context["session_star"] : null);
                    echo "</h3>
                                ";
                }
                // line 31
                echo "                                ";
                echo $this->getAttribute($context["item"], "content", array());
                echo "
                                <div class=\"btn-group btn-group-sm\">
                                    ";
                // line 33
                echo $this->getAttribute($context["item"], "toolbar", array());
                echo "
                                </div>
                            </td>
                            <td>
                                ";
                // line 37
                if ((isset($context["tutor"]) ? $context["tutor"] : null)) {
                    // line 38
                    echo "                                <div class=\"pull-right\">
                                    <a title=\"";
                    // line 39
                    echo get_lang("EditThematicPlan");
                    echo "\" href=\"index.php?";
                    echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_cid_query", array());
                    echo "&origin=thematic_details&action=thematic_plan_list&thematic_id=";
                    echo $this->getAttribute($context["item"], "id", array());
                    echo "&width=700&height=500'\" class=\"btn btn-default\">
                                        <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
                                    </a>
                                </div>
                                ";
                }
                // line 44
                echo "                                <div class=\"thematic_plan_";
                echo $this->getAttribute($context["item"], "id", array());
                echo "\">
                                    ";
                // line 45
                if (twig_test_empty($this->getAttribute($context["item"], "thematic_plan", array()))) {
                    // line 46
                    echo "                                    <div class=\"alert-thematic\">
                                        <div class=\"alert alert-info\" role=\"alert\">";
                    // line 47
                    echo get_lang("StillDoNotHaveAThematicPlan");
                    echo "</div>
                                    </div>
                                    ";
                } else {
                    // line 50
                    echo "                                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "thematic_plan", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["subitem"]) {
                        // line 51
                        echo "                                        <h4>";
                        echo $this->getAttribute($context["subitem"], "title", array());
                        echo "</h4>
                                        <p>";
                        // line 52
                        echo $this->getAttribute($context["subitem"], "description", array());
                        echo "</p>
                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subitem'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 54
                    echo "                                    ";
                }
                // line 55
                echo "                                </div>
                            </td>
                            <td>
                                ";
                // line 58
                if ((isset($context["tutor"]) ? $context["tutor"] : null)) {
                    // line 59
                    echo "                                <div class=\"pull-right\">
                                    <a title=\"";
                    // line 60
                    echo get_lang("NewThematicAdvance");
                    echo "\" href=\"index.php?";
                    echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_cid_query", array());
                    echo "&action=thematic_advance_add&thematic_id=";
                    echo $this->getAttribute($context["item"], "id", array());
                    echo "\" class=\"btn btn-default\">
                                        <i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i>
                                    </a>
                                </div>
                                ";
                }
                // line 65
                echo "                                <div class=\"thematic-advance\">
                                <table width=\"100%\" class=\"table\">
                                ";
                // line 67
                if ( !twig_test_empty($this->getAttribute($context["item"], "thematic_advance", array()))) {
                    // line 68
                    echo "                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "thematic_advance", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["advance"]) {
                        // line 69
                        echo "                                <tr>
                                    <td style=\"width: 90%\" class=\"thematic_advance_content\" id=\"thematic_advance_content_id_";
                        // line 70
                        echo $this->getAttribute($context["advance"], "id", array());
                        echo "\">
                                        <div id=\"thematic_advance_";
                        // line 71
                        echo $this->getAttribute($context["advance"], "id", array());
                        echo "\">
                                        <strong>";
                        // line 72
                        echo Template::format_date($this->getAttribute($context["advance"], "start_date", array()));
                        echo "</strong>
                                        ";
                        // line 73
                        echo $this->getAttribute($context["advance"], "content", array());
                        echo "
                                        </div>
                                        ";
                        // line 75
                        if ((isset($context["tutor"]) ? $context["tutor"] : null)) {
                            // line 76
                            echo "                                            <div class=\"toolbar-actions\">
                                                <div id=\"thematic_advance_tools_";
                            // line 77
                            echo $this->getAttribute($context["advance"], "id", array());
                            echo "\" class=\"thematic_advance_actions\">
                                                    <div class=\"btn-group btn-group-sm\">
                                                        <a class=\"btn btn-default btn-sm\" href=\"index.php?";
                            // line 79
                            echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_cid_query", array());
                            echo "&action=thematic_advance_edit&thematic_id=";
                            echo $this->getAttribute($context["item"], "id", array());
                            echo "&thematic_advance_id=";
                            echo $this->getAttribute($context["advance"], "id", array());
                            echo "\" title=\"";
                            echo get_lang("Edit");
                            echo "\">
                                                            <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
                                                        </a>
                                                        <a class=\"btn btn-default btn-sm\" onclick=\"javascript:if(!confirm('";
                            // line 82
                            echo get_lang("AreYouSureToDelete");
                            echo "')) return false;\" href=\"index.php?";
                            echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_cid_query", array());
                            echo "&action=thematic_advance_delete&thematic_id=";
                            echo $this->getAttribute($context["item"], "id", array());
                            echo "&thematic_advance_id=";
                            echo $this->getAttribute($context["advance"], "id", array());
                            echo "\" title=\"";
                            echo get_lang("Delete");
                            echo "\">
                                                            <i class=\"fa fa-trash\" aria-hidden=\"true\"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        ";
                        }
                        // line 89
                        echo "                                        </div>
                                    </td>
                                    ";
                        // line 91
                        if (($this->getAttribute($context["advance"], "done_advance", array()) == 1)) {
                            // line 92
                            echo "                                        ";
                            $context["color"] = "background-color:#E5EDF9;";
                            // line 93
                            echo "                                    ";
                        } else {
                            // line 94
                            echo "                                        ";
                            $context["color"] = "background-color:#FFFFFF;";
                            // line 95
                            echo "                                    ";
                        }
                        // line 96
                        echo "                                    ";
                        if ((isset($context["tutor"]) ? $context["tutor"] : null)) {
                            // line 97
                            echo "                                        <td style=\"width: 10%; ";
                            echo (isset($context["color"]) ? $context["color"] : null);
                            echo "\" id=\"td_done_thematic_";
                            echo $this->getAttribute($context["advance"], "id", array());
                            echo "\">
                                        ";
                            // line 98
                            $context["check"] = "";
                            // line 99
                            echo "                                        ";
                            if (($this->getAttribute($context["item"], "last_done", array()) == $this->getAttribute($context["advance"], "id", array()))) {
                                // line 100
                                echo "                                            ";
                                $context["check"] = "checked";
                                // line 101
                                echo "                                        ";
                            }
                            // line 102
                            echo "                                        <center>
                                            <input type=\"radio\" class=\"done_thematic\" id=\"done_thematic_";
                            // line 103
                            echo $this->getAttribute($context["advance"], "id", array());
                            echo "\" name=\"done_thematic\" value=\"";
                            echo $this->getAttribute($context["advance"], "id", array());
                            echo "\" ";
                            echo (isset($context["check"]) ? $context["check"] : null);
                            echo " onclick=\"update_done_thematic_advance(this.value)\">
                                        </center>
                                    ";
                        } else {
                            // line 106
                            echo "                                        </td>
                                    ";
                        }
                        // line 108
                        echo "                                </tr>
                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advance'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 110
                    echo "                                ";
                } else {
                    // line 111
                    echo "                                    <div class=\"alert alert-info\" role=\"alert\">";
                    echo get_lang("ThereIsNoAThematicAdvance");
                    echo "</div>
                                ";
                }
                // line 113
                echo "                                </table>
                                </div>
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 118
            echo "
                </table>
            </div>
        </div>
    </div>
</div>
";
        } else {
            // line 125
            echo "    <div class=\"alert alert-info\" role=\"alert\">";
            echo get_lang("ThereIsNoAThematicSection");
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "default/course_progress/progress.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  346 => 125,  337 => 118,  327 => 113,  321 => 111,  318 => 110,  311 => 108,  307 => 106,  297 => 103,  294 => 102,  291 => 101,  288 => 100,  285 => 99,  283 => 98,  276 => 97,  273 => 96,  270 => 95,  267 => 94,  264 => 93,  261 => 92,  259 => 91,  255 => 89,  237 => 82,  225 => 79,  220 => 77,  217 => 76,  215 => 75,  210 => 73,  206 => 72,  202 => 71,  198 => 70,  195 => 69,  190 => 68,  188 => 67,  184 => 65,  172 => 60,  169 => 59,  167 => 58,  162 => 55,  159 => 54,  151 => 52,  146 => 51,  141 => 50,  135 => 47,  132 => 46,  130 => 45,  125 => 44,  113 => 39,  110 => 38,  108 => 37,  101 => 33,  95 => 31,  87 => 29,  81 => 27,  79 => 26,  75 => 25,  72 => 24,  68 => 23,  63 => 21,  59 => 20,  55 => 19,  43 => 12,  35 => 6,  33 => 5,  31 => 4,  27 => 3,  23 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/course_progress/progress.tpl", "C:\\wamp64\\www\\chamilo-CVO_VOLT-1.11.6\\main\\template\\default\\course_progress\\progress.tpl");
    }
}
