<?php

/* default/layout/head.tpl */
class __TwigTemplate_1724152f8167dea959bfc193387598098b2a887a2c6bacdcbc426a1a966dbd1a extends Twig_Template
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
        echo "<meta charset=\"";
        echo (isset($context["system_charset"]) ? $context["system_charset"] : null);
        echo "\" />
<link href=\"https://chamilo.org/chamilo-lms/\" rel=\"help\" />
<link href=\"https://chamilo.org/the-association/\" rel=\"author\" />
<link href=\"https://www.gnu.org/licenses/gpl-3.0.en.html\" rel=\"license\" />
<!-- Force latest IE rendering engine or ChromeFrame if installed -->
<!--[if IE]>
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
<![endif]-->
";
        // line 9
        echo (isset($context["prefetch"]) ? $context["prefetch"] : null);
        echo "
";
        // line 10
        echo (isset($context["favico"]) ? $context["favico"] : null);
        echo "
<link rel=\"apple-touch-icon\" href=\"";
        // line 11
        echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web", array());
        echo "apple-touch-icon.png\" />
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\" />
<meta name=\"generator\" content=\"";
        // line 13
        echo $this->getAttribute((isset($context["_s"]) ? $context["_s"] : null), "software_name", array());
        echo " ";
        echo twig_slice($this->env, $this->getAttribute((isset($context["_s"]) ? $context["_s"] : null), "system_version", array()), 0, 1);
        echo "\" />
";
        // line 16
        echo "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<title>";
        // line 17
        echo (isset($context["title_string"]) ? $context["title_string"] : null);
        echo "</title>
";
        // line 18
        echo (isset($context["social_meta"]) ? $context["social_meta"] : null);
        echo "
";
        // line 19
        echo (isset($context["css_static_file_to_string"]) ? $context["css_static_file_to_string"] : null);
        echo "
";
        // line 20
        echo (isset($context["js_file_to_string"]) ? $context["js_file_to_string"] : null);
        echo "
";
        // line 21
        echo (isset($context["extra_headers"]) ? $context["extra_headers"] : null);
        echo "
<script>
/* Global chat variables */
var ajax_url = '";
        // line 24
        echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_ajax", array());
        echo "chat.ajax.php';
var online_button = '";
        // line 25
        echo (isset($context["online_button"]) ? $context["online_button"] : null);
        echo "';
var offline_button = '";
        // line 26
        echo (isset($context["offline_button"]) ? $context["offline_button"] : null);
        echo "';
var connect_lang = '";
        // line 27
        echo get_lang("ChatConnected");
        echo "';
var disconnect_lang = '";
        // line 28
        echo get_lang("ChatDisconnected");
        echo "';

var logOutUrl = '";
        // line 30
        echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_ajax", array());
        echo "course.ajax.php?a=course_logout';

\$(document).ready(function () {
    // Executes course logout when user close the browser tab/window
    \$(window).on('beforeunload', function () {
        // Logout of course just in case
        \$.ajax({
            url: logOutUrl,
            success: function (data) {
                return 1;
            }
        });
    });
});

</script>

";
        // line 47
        $this->loadTemplate(((isset($context["template"]) ? $context["template"] : null) . "/layout/header.js.tpl"), "default/layout/head.tpl", 47)->display($context);
        // line 48
        echo "
";
        // line 49
        echo (isset($context["css_custom_file_to_string"]) ? $context["css_custom_file_to_string"] : null);
        echo "
";
        // line 50
        echo (isset($context["css_style_print"]) ? $context["css_style_print"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/layout/head.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 50,  121 => 49,  118 => 48,  116 => 47,  96 => 30,  91 => 28,  87 => 27,  83 => 26,  79 => 25,  75 => 24,  69 => 21,  65 => 20,  61 => 19,  57 => 18,  53 => 17,  50 => 16,  44 => 13,  39 => 11,  35 => 10,  31 => 9,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/layout/head.tpl", "C:\\wamp64\\www\\chamilo-CVO_VOLT-1.11.6\\main\\template\\default\\layout\\head.tpl");
    }
}
