<?php

/* MrsuhRealEstateBundle::layout.html.twig */
class __TwigTemplate_86cdf9ff9f8a90e6e68f594ca2d8b02780f4eda3a941ea3afb364af6126a0d25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_40a8c4093ff570f03db24be68956b78c3fcbe8754862f7439b37bcbba8da6c70 = $this->env->getExtension("native_profiler");
        $__internal_40a8c4093ff570f03db24be68956b78c3fcbe8754862f7439b37bcbba8da6c70->enter($__internal_40a8c4093ff570f03db24be68956b78c3fcbe8754862f7439b37bcbba8da6c70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MrsuhRealEstateBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <title>Real estate agency</title>
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "?v=2\"/>
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css\">
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/sidebar.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <style>
        hr {
            margin-top: none;
            border: none; /* Убираем границу для браузера Firefox */
            color: #6f7d95; /* Цвет линии для остальных браузеров */
            background-color: #6f7d95; /* Цвет линии для браузера Firefox и Opera */
            height: 1px;
        }

        label {
            margin-bottom: 0px;
        }

        .btn-width {
            width: 200px;
        }

        .img:hover {
            -moz-box-shadow: 0 0 10px grey;
            -webkit-box-shadow: 0 0 10px grey;
            box-shadow: 0 0 10px grey;
        }
        .map-hide{
            position: absolute;
            left: -100%;
        }

    </style>
</head>
<body>

<div id=\"wrapper\">

    ";
        // line 44
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("MrsuhRealEstateBundle:Default:sidebar", array("path" => $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")))));
        echo "

    <div id=\"page-content-wrapper\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <h3><b>";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["pageName"]) ? $context["pageName"] : $this->getContext($context, "pageName")), "html", null, true);
        echo "</b></h3>
                    <hr>
                </div>
            </div>
            ";
        // line 54
        $this->loadTemplate("MrsuhRealEstateBundle::alert.html.twig", "MrsuhRealEstateBundle::layout.html.twig", 54)->display($context);
        echo "<br>
            ";
        // line 55
        $this->displayBlock('content', $context, $blocks);
        // line 56
        echo "        </div>
    </div>
</div>
</div>

</div>

<script src=\"//code.jquery.com/jquery-2.1.4.min.js\"></script>
<script src=\"//code.jquery.com/ui/1.11.4/jquery-ui.js\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js\"></script>
<script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/common.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/price.js"), "html", null, true);
        echo "\"></script>
";
        // line 68
        $this->displayBlock('js', $context, $blocks);
        // line 69
        echo "<script>
    \$(\"#menu-toggle\").click(function (e) {
        e.preventDefault();
        \$(\"#wrapper\").toggleClass(\"toggled\");
    });

    \$(\"#menu li span\").click(function () {
        \$(\"#menu ul:visible\").slideUp(\"normal\");
        if ((\$(this).next().is(\"ul\")) && (!\$(this).next().is(\":visible\"))) {
            \$(this).next().slideDown(\"normal\");
        }
    });

    var logout = \$('#logout');

    logout.click(function () {
        if (confirm('Вы уверены, что хотите выйти?')) {
            window.location.href = '";
        // line 86
        echo $this->env->getExtension('routing')->getUrl("logout");
        echo "';
        }
    });

</script>
</body>
</html>
";
        
        $__internal_40a8c4093ff570f03db24be68956b78c3fcbe8754862f7439b37bcbba8da6c70->leave($__internal_40a8c4093ff570f03db24be68956b78c3fcbe8754862f7439b37bcbba8da6c70_prof);

    }

    // line 55
    public function block_content($context, array $blocks = array())
    {
        $__internal_0f64c9db0ae59b1ddac46d59d05adcf725078938ec424d2ead69fd17cb678408 = $this->env->getExtension("native_profiler");
        $__internal_0f64c9db0ae59b1ddac46d59d05adcf725078938ec424d2ead69fd17cb678408->enter($__internal_0f64c9db0ae59b1ddac46d59d05adcf725078938ec424d2ead69fd17cb678408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_0f64c9db0ae59b1ddac46d59d05adcf725078938ec424d2ead69fd17cb678408->leave($__internal_0f64c9db0ae59b1ddac46d59d05adcf725078938ec424d2ead69fd17cb678408_prof);

    }

    // line 68
    public function block_js($context, array $blocks = array())
    {
        $__internal_e4e01c5efbe1da9ec737d3ce75759b1d89111abe2f8f4d1e55010d2dab3e982b = $this->env->getExtension("native_profiler");
        $__internal_e4e01c5efbe1da9ec737d3ce75759b1d89111abe2f8f4d1e55010d2dab3e982b->enter($__internal_e4e01c5efbe1da9ec737d3ce75759b1d89111abe2f8f4d1e55010d2dab3e982b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        
        $__internal_e4e01c5efbe1da9ec737d3ce75759b1d89111abe2f8f4d1e55010d2dab3e982b->leave($__internal_e4e01c5efbe1da9ec737d3ce75759b1d89111abe2f8f4d1e55010d2dab3e982b_prof);

    }

    public function getTemplateName()
    {
        return "MrsuhRealEstateBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 68,  153 => 55,  138 => 86,  119 => 69,  117 => 68,  113 => 67,  109 => 66,  97 => 56,  95 => 55,  91 => 54,  84 => 50,  75 => 44,  37 => 9,  31 => 6,  24 => 1,);
    }
}
