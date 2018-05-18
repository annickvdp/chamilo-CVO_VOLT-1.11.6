<?php

/* default/blog/blog.tpl */
class __TwigTemplate_021c413d81fcf0778c2f671807386f76edc3a5fa7ef42dc0182712f8c5ea4323 extends Twig_Template
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
    <div class=\"col-md-3\">
        <div class=\"sidebar\">
            <div id=\"calendar-blog\" class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    ";
        // line 6
        echo get_lang("Calendar");
        echo "
                </div>
                <div class=\"panel-body\">
                    ";
        // line 9
        echo (isset($context["calendar"]) ? $context["calendar"] : null);
        echo "
                </div>
            </div>
            <div id=\"search-blog\" class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    ";
        // line 14
        echo get_lang("Search");
        echo "
                </div>
                <div class=\"panel-body\">
                    <form action=\"blog.php\" method=\"get\" enctype=\"multipart/form-data\">
                        <div class=\"form-group\">
                            <input type=\"hidden\" name=\"blog_id\" value=\"";
        // line 19
        echo (isset($context["id_blog"]) ? $context["id_blog"] : null);
        echo "\"/>
                            <input type=\"hidden\" name=\"action\" value=\"view_search_result\"/>
                            <input type=\"text\" class=\"form-control\" size=\"20\" name=\"q\" value=\"";
        // line 21
        echo (isset($context["search"]) ? $context["search"] : null);
        echo "\"/>
                        </div>
                        <button class=\"btn btn-default btn-block\" type=\"submit\">
                            <em class=\"fa fa-search\"></em> ";
        // line 24
        echo get_lang("Search");
        echo "
                        </button>
                    </form>
                </div>
            </div>
            <div id=\"task-blog\" class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    ";
        // line 31
        echo get_lang("MyTasks");
        echo "
                </div>
                <div class=\"panel-body\">
                    ";
        // line 34
        echo (isset($context["task"]) ? $context["task"] : null);
        echo "
                </div>
            </div>
        </div>
    </div>

    <div class=\"col-md-9\">
        <div class=\"blog\">
            <div id=\"blog-header\">
                ";
        // line 43
        if ( !(isset($context["search"]) ? $context["search"] : null)) {
            // line 44
            echo "                    <div class=\"title\">
                        <h1>";
            // line 45
            echo (isset($context["title"]) ? $context["title"] : null);
            echo "</h1>
                    </div>
                    <div class=\"description\">
                        ";
            // line 48
            echo (isset($context["description"]) ? $context["description"] : null);
            echo "
                    </div>
                ";
        } else {
            // line 51
            echo "                    <div class=\"title\">
                        <h1>";
            // line 52
            echo (isset($context["search"]) ? $context["search"] : null);
            echo "</h1>
                    </div>
                ";
        }
        // line 55
        echo "            </div>
            <div id=\"list-articles\">
                ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 58
            echo "                    <article id=\"post-";
            echo $this->getAttribute($context["item"], "id_post", array());
            echo "\" class=\"article-post\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-body\">
                                <h3 class=\"title-post\">
                                    <a href=\"";
            // line 62
            echo (((($this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_self", array()) . "?") . $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_cid_query", array())) . "&") . twig_urlencode_filter(array("action" => "view_post", "blog_id" => $this->getAttribute($context["item"], "id_blog", array()), "post_id" => $this->getAttribute($context["item"], "id_post", array()))));
            echo "#add_comment\"
                                       title=\"";
            // line 63
            echo $this->getAttribute($context["item"], "title", array());
            echo "\">";
            echo $this->getAttribute($context["item"], "title", array());
            echo "</a>
                                </h3>
                                <div class=\"info-post\">
                                    <span class=\"date\"><i class=\"fa fa-clock-o\"></i> ";
            // line 66
            echo $this->getAttribute($context["item"], "post_date", array());
            echo "</span>
                                    <span class='comments'>
                                        <i class=\"fa fa-comment-o\"></i> ";
            // line 68
            echo $this->getAttribute($context["item"], "n_comments", array());
            echo " ";
            echo get_lang("Comments");
            echo "
                                    </span>
                                    <span class=\"autor\"><i class=\"fa fa-user\"></i> ";
            // line 70
            echo $this->getAttribute($context["item"], "autor", array());
            echo "</span>
                                    <span class=\"score\"><i class=\"fa fa-star\"></i> ";
            // line 71
            echo $this->getAttribute($context["item"], "score_ranking", array());
            echo "</span>
                                </div>

                                ";
            // line 74
            if ($this->getAttribute($context["item"], "extract", array())) {
                // line 75
                echo "                                    <div id=\"post-extract-";
                echo $this->getAttribute($context["item"], "id_post", array());
                echo "\" class=\"show\">
                                        <p>
                                            ";
                // line 77
                echo $this->getAttribute($context["item"], "extract", array());
                echo "
                                            <button type=\"button\" class=\"btn btn-link btn-read-more\" data-id=\"";
                // line 78
                echo $this->getAttribute($context["item"], "id_post", array());
                echo "\">
                                                ";
                // line 79
                echo get_lang("ReadMore");
                echo "
                                            </button>
                                        </p>
                                    </div>
                                ";
            }
            // line 84
            echo "
                                <div id=\"post-content-";
            // line 85
            echo $this->getAttribute($context["item"], "id_post", array());
            echo "\" class=\"";
            echo (($this->getAttribute($context["item"], "extract", array())) ? ("hidden") : (""));
            echo "\">
                                    ";
            // line 86
            echo $this->getAttribute($context["item"], "content", array());
            echo "
                                </div>

                                ";
            // line 89
            if ($this->getAttribute($context["item"], "files", array())) {
                // line 90
                echo "                                    <div class=\"well well-sm files\">
                                        <i class=\"fa fa-paperclip\" aria-hidden=\"true\"></i>
                                        <a href=\"download.php?file=";
                // line 92
                echo $this->getAttribute($this->getAttribute($context["item"], "files", array()), "path", array());
                echo "\">";
                echo $this->getAttribute($this->getAttribute($context["item"], "files", array()), "filename", array());
                echo "</a>
                                    </div>
                                ";
            }
            // line 95
            echo "                            </div>
                        </div>
                    </article>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "            </div>
        </div>
    </div>
</div>
<script>
    \$(document).on('ready', function () {
        \$('.btn-read-more').on('click', function (e) {
            e.preventDefault();

            var postId = \$(this).data('id') || 0;

            if (!postId) {
                return;
            }

            \$('#post-extract-' + postId).removeClass('show').addClass('hidden');
            \$('#post-content-' + postId).removeClass('hidden').addClass('show');
        });
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "default/blog/blog.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 99,  216 => 95,  208 => 92,  204 => 90,  202 => 89,  196 => 86,  190 => 85,  187 => 84,  179 => 79,  175 => 78,  171 => 77,  165 => 75,  163 => 74,  157 => 71,  153 => 70,  146 => 68,  141 => 66,  133 => 63,  129 => 62,  121 => 58,  117 => 57,  113 => 55,  107 => 52,  104 => 51,  98 => 48,  92 => 45,  89 => 44,  87 => 43,  75 => 34,  69 => 31,  59 => 24,  53 => 21,  48 => 19,  40 => 14,  32 => 9,  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/blog/blog.tpl", "C:\\wamp64\\www\\chamilo-CVO_VOLT-1.11.6\\main\\template\\default\\blog\\blog.tpl");
    }
}
