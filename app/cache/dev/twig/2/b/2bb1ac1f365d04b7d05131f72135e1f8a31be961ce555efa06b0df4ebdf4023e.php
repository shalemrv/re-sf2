<?php

/* MrsuhRealEstateBundle::layout.html.twig */
class __TwigTemplate_2bb1ac1f365d04b7d05131f72135e1f8a31be961ce555efa06b0df4ebdf4023e extends Twig_Template
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
        $__internal_6c7fb156b46ac47f1d6f1b1699ce85fa1af7dba464e9467eda704b7a32b9f09c = $this->env->getExtension("native_profiler");
        $__internal_6c7fb156b46ac47f1d6f1b1699ce85fa1af7dba464e9467eda704b7a32b9f09c->enter($__internal_6c7fb156b46ac47f1d6f1b1699ce85fa1af7dba464e9467eda704b7a32b9f09c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MrsuhRealEstateBundle::layout.html.twig"));

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
        
        $__internal_6c7fb156b46ac47f1d6f1b1699ce85fa1af7dba464e9467eda704b7a32b9f09c->leave($__internal_6c7fb156b46ac47f1d6f1b1699ce85fa1af7dba464e9467eda704b7a32b9f09c_prof);

    }

    // line 55
    public function block_content($context, array $blocks = array())
    {
        $__internal_e7d7c365bde22af1518fe06760c604da92ac5ec5421031884d0c906ec9ae914e = $this->env->getExtension("native_profiler");
        $__internal_e7d7c365bde22af1518fe06760c604da92ac5ec5421031884d0c906ec9ae914e->enter($__internal_e7d7c365bde22af1518fe06760c604da92ac5ec5421031884d0c906ec9ae914e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_e7d7c365bde22af1518fe06760c604da92ac5ec5421031884d0c906ec9ae914e->leave($__internal_e7d7c365bde22af1518fe06760c604da92ac5ec5421031884d0c906ec9ae914e_prof);

    }

    // line 68
    public function block_js($context, array $blocks = array())
    {
        $__internal_ba744ba7686a21400874973ec206262b6c701354b0aa75c24cc6aff2d0dc35b6 = $this->env->getExtension("native_profiler");
        $__internal_ba744ba7686a21400874973ec206262b6c701354b0aa75c24cc6aff2d0dc35b6->enter($__internal_ba744ba7686a21400874973ec206262b6c701354b0aa75c24cc6aff2d0dc35b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        
        $__internal_ba744ba7686a21400874973ec206262b6c701354b0aa75c24cc6aff2d0dc35b6->leave($__internal_ba744ba7686a21400874973ec206262b6c701354b0aa75c24cc6aff2d0dc35b6_prof);

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
