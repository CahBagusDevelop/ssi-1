<?php

/* layout-header-login.html */
class __TwigTemplate_9f71c27e1f636b60f6f1c3f128eacd78492321017900c5df2e50ec793dddf5f8 extends Twig_Template
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
        echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<link type=\"text/css\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, base_url("assets/bower_components/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link type=\"text/css\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, base_url("assets/bower_components/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link type=\"text/css\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["base_url_theme"]) ? $context["base_url_theme"] : null), "html", null, true);
        echo "css/theme.css\" rel=\"stylesheet\">
<link type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, base_url("assets/bower_components/Ionicons/css/ionicons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, base_url("assets/dist/css/AdminLTE.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, base_url("assets/plugins/iCheck/square/blue.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        // line 9
        echo (isset($context["comp_css"]) ? $context["comp_css"] : null);
        echo "
<link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["favicon_url"]) ? $context["favicon_url"] : null), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic\">
";
    }

    public function getTemplateName()
    {
        return "layout-header-login.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 10,  47 => 9,  43 => 8,  35 => 6,  31 => 5,  27 => 4,  19 => 1,  78 => 18,  73 => 12,  68 => 6,  62 => 4,  57 => 19,  54 => 18,  52 => 17,  46 => 13,  44 => 12,  37 => 7,  34 => 6,  28 => 4,  23 => 3,  42 => 8,  39 => 7,  32 => 5,  29 => 3,);
    }
}
