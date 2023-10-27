<?php

/* MrsuhRealEstateBundle::Security/layout.html.twig */
class __TwigTemplate_4194233dced845fadda2a0e9bf88c397e0d19da62d7d90ca0ee6b24e0bece520 extends Twig_Template
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
        $__internal_e6dee3ba1a27e84a167c7c9b0c5ce301b4fea0cae0f49c2499a7fd60474be7d7 = $this->env->getExtension("native_profiler");
        $__internal_e6dee3ba1a27e84a167c7c9b0c5ce301b4fea0cae0f49c2499a7fd60474be7d7->enter($__internal_e6dee3ba1a27e84a167c7c9b0c5ce301b4fea0cae0f49c2499a7fd60474be7d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MrsuhRealEstateBundle::Security/layout.html.twig"));

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
        
        $__internal_e6dee3ba1a27e84a167c7c9b0c5ce301b4fea0cae0f49c2499a7fd60474be7d7->leave($__internal_e6dee3ba1a27e84a167c7c9b0c5ce301b4fea0cae0f49c2499a7fd60474be7d7_prof);

    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        $__internal_7c271be52ec0516f6820e2b359db9594d1e4775992d59bf3733f67b0eafe872c = $this->env->getExtension("native_profiler");
        $__internal_7c271be52ec0516f6820e2b359db9594d1e4775992d59bf3733f67b0eafe872c->enter($__internal_7c271be52ec0516f6820e2b359db9594d1e4775992d59bf3733f67b0eafe872c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_7c271be52ec0516f6820e2b359db9594d1e4775992d59bf3733f67b0eafe872c->leave($__internal_7c271be52ec0516f6820e2b359db9594d1e4775992d59bf3733f67b0eafe872c_prof);

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
