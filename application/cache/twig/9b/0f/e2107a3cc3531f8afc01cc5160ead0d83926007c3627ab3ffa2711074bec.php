<?php

/* layout-public-login.html */
class __TwigTemplate_9b0fe2107a3cc3531f8afc01cc5160ead0d83926007c3627ab3ffa2711074bec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'css' => array($this, 'block_css'),
            'content' => array($this, 'block_content'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 5
        $this->env->loadTemplate("layout-header-login.html")->display($context);
        // line 6
        echo "    ";
        $this->displayBlock('css', $context, $blocks);
        // line 7
        echo "</head>
<body>
    <div class=\"wrapper\">
        <div class=\"container\">

            ";
        // line 12
        $this->displayBlock('content', $context, $blocks);
        // line 13
        echo "
        </div>
    </div><!--/.wrapper-->
    
    ";
        // line 17
        $this->env->loadTemplate("layout-footer.html")->display($context);
        // line 18
        echo "    ";
        $this->displayBlock('js', $context, $blocks);
        // line 19
        echo "</body>
";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true);
    }

    // line 6
    public function block_css($context, array $blocks = array())
    {
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
    }

    // line 18
    public function block_js($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout-public-login.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 18,  73 => 12,  68 => 6,  62 => 4,  57 => 19,  54 => 18,  52 => 17,  46 => 13,  44 => 12,  37 => 7,  34 => 6,  28 => 4,  23 => 1,  42 => 8,  39 => 7,  32 => 5,  29 => 3,);
    }
}
