<?php

/* MrsuhRealEstateBundle::Security/layout.html.twig */
class __TwigTemplate_2deb9d07896b18ce3fdb9afcfcf25f6470c0876d04afdb1d9b59ce27d671022d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e513b84324fc086d858602317cb96c922c3e3e8ec11726e7f550c6e3621d13af = $this->env->getExtension("native_profiler");
        $__internal_e513b84324fc086d858602317cb96c922c3e3e8ec11726e7f550c6e3621d13af->enter($__internal_e513b84324fc086d858602317cb96c922c3e3e8ec11726e7f550c6e3621d13af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MrsuhRealEstateBundle::Security/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <title>Real estate agency</title>
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "?v=2\" />
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css\">
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/sidebar.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
</head>
<body>
<div class=\"container-fluid\">
    <div class=\"col-md-4 col-md-offset-4\" style=\"margin-top: 200px\">
        <div class=\"row\">
            <div class=\"col-md-10\">
                ";
        // line 16
        $this->displayBlock('content', $context, $blocks);
        // line 17
        echo "            </div>
        </div>
    </div>
</div>

<script src=\"//code.jquery.com/jquery-2.1.4.min.js\"></script>
<script src=\"//code.jquery.com/ui/1.11.4/jquery-ui.js\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js\"></script>
<script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/common.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/price.js"), "html", null, true);
        echo "\"></script>
</body>
</html>
";
        
        $__internal_e513b84324fc086d858602317cb96c922c3e3e8ec11726e7f550c6e3621d13af->leave($__internal_e513b84324fc086d858602317cb96c922c3e3e8ec11726e7f550c6e3621d13af_prof);

    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        $__internal_1d00f2b82ec56cc2d8e34d9bbe3215ab6d486e3794414a9d52e3d10dced2c9d8 = $this->env->getExtension("native_profiler");
        $__internal_1d00f2b82ec56cc2d8e34d9bbe3215ab6d486e3794414a9d52e3d10dced2c9d8->enter($__internal_1d00f2b82ec56cc2d8e34d9bbe3215ab6d486e3794414a9d52e3d10dced2c9d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_1d00f2b82ec56cc2d8e34d9bbe3215ab6d486e3794414a9d52e3d10dced2c9d8->leave($__internal_1d00f2b82ec56cc2d8e34d9bbe3215ab6d486e3794414a9d52e3d10dced2c9d8_prof);

    }

    public function getTemplateName()
    {
        return "MrsuhRealEstateBundle::Security/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 16,  62 => 26,  58 => 25,  48 => 17,  46 => 16,  36 => 9,  30 => 6,  23 => 1,);
    }
}
