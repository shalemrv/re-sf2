<?php

/* MrsuhRealEstateBundle:Client:find_client.html.twig */
class __TwigTemplate_eb4e28bc94b5bf5c1371919eb21349aa83af3d9d64e8dfdcc702d492deb339c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MrsuhRealEstateBundle::layout.html.twig", "MrsuhRealEstateBundle:Client:find_client.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MrsuhRealEstateBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1fe17d5a37f5402f5476f312aaf38792c84413bb1b7d3c2cdc0d131fab498275 = $this->env->getExtension("native_profiler");
        $__internal_1fe17d5a37f5402f5476f312aaf38792c84413bb1b7d3c2cdc0d131fab498275->enter($__internal_1fe17d5a37f5402f5476f312aaf38792c84413bb1b7d3c2cdc0d131fab498275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MrsuhRealEstateBundle:Client:find_client.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1fe17d5a37f5402f5476f312aaf38792c84413bb1b7d3c2cdc0d131fab498275->leave($__internal_1fe17d5a37f5402f5476f312aaf38792c84413bb1b7d3c2cdc0d131fab498275_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_6a2fad5ff637743756036eaf354015792b5d343f24c97f0474b17d65c85c4aed = $this->env->getExtension("native_profiler");
        $__internal_6a2fad5ff637743756036eaf354015792b5d343f24c97f0474b17d65c85c4aed->enter($__internal_6a2fad5ff637743756036eaf354015792b5d343f24c97f0474b17d65c85c4aed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    <div class=\"row\">
        <div class=\"col-md-2\">";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
        <div class=\"col-md-2\">";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "status", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
        <div class=\"col-md-2\">";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
        <div class=\"col-md-2\">";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit", array()), 'widget', array("attr" => array("class" => "btn btn-success btn-width")));
        echo "</div>
    </div>
    <br>
    <hr>

    <div class=\"row\">
        ";
        // line 14
        if (((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")) &&  !twig_test_empty($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "items", array())))) {
            // line 15
            echo "        <div class=\"col-md-8\"><b>Всего результатов:</b> ";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "items", array())), "html", null, true);
            echo "</div>
            <div class=\"col-md-2\"><b class=\"pull-right\">Показывать на странице:</b></div>
        <div class=\"col-md-2\">";
            // line 17
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pagination_items_on_page", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "</div>
        ";
        } else {
            // line 19
            echo "            <div class=\"col-md-1\">";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pagination_items_on_page", array()), 'widget', array("attr" => array("class" => "form-control", "style" => "display: none")));
            echo "</div>
        ";
        }
        // line 21
        echo "    </div>
    <br>

    ";
        // line 24
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    ";
        // line 26
        $this->loadTemplate("MrsuhRealEstateBundle::Client/list.html.twig", "MrsuhRealEstateBundle:Client:find_client.html.twig", 26)->display($context);
        // line 27
        echo "    ";
        $this->loadTemplate("MrsuhRealEstateBundle::Default/pagination.html.twig", "MrsuhRealEstateBundle:Client:find_client.html.twig", 27)->display($context);
        // line 28
        echo "
";
        
        $__internal_6a2fad5ff637743756036eaf354015792b5d343f24c97f0474b17d65c85c4aed->leave($__internal_6a2fad5ff637743756036eaf354015792b5d343f24c97f0474b17d65c85c4aed_prof);

    }

    // line 31
    public function block_js($context, array $blocks = array())
    {
        $__internal_d90a780b3f0f4d68f3e4bdb5572b946ed6cc19d9f0bc35a2fe8115b630e66490 = $this->env->getExtension("native_profiler");
        $__internal_d90a780b3f0f4d68f3e4bdb5572b946ed6cc19d9f0bc35a2fe8115b630e66490->enter($__internal_d90a780b3f0f4d68f3e4bdb5572b946ed6cc19d9f0bc35a2fe8115b630e66490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 32
        echo "    <script>
        \$(function(){

            var submit = function()
            {
                \$('[name=\"findClient\"]').submit();
            };

            order('findClient', [
                'id',
                'phone',
                'name',
                'create_time',
                'update_time',
                'hot',
                'mortgage',
                'status',
                'user'
            ], submit);

            var current_page = 1;
            var max_page = 1;

            ";
        // line 55
        if ((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination"))) {
            // line 56
            echo "            current_page = ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "pagination", array()), "current_page", array()), "html", null, true);
            echo ";
            max_page = ";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "pagination", array()), "total_pages", array()), "html", null, true);
            echo ";
            ";
        }
        // line 59
        echo "
            pagination('findClient', current_page, max_page, submit);

        });
    </script>
";
        
        $__internal_d90a780b3f0f4d68f3e4bdb5572b946ed6cc19d9f0bc35a2fe8115b630e66490->leave($__internal_d90a780b3f0f4d68f3e4bdb5572b946ed6cc19d9f0bc35a2fe8115b630e66490_prof);

    }

    public function getTemplateName()
    {
        return "MrsuhRealEstateBundle:Client:find_client.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 59,  148 => 57,  143 => 56,  141 => 55,  116 => 32,  110 => 31,  102 => 28,  99 => 27,  97 => 26,  92 => 24,  87 => 21,  81 => 19,  76 => 17,  70 => 15,  68 => 14,  59 => 8,  55 => 7,  51 => 6,  47 => 5,  41 => 3,  35 => 2,  11 => 1,);
    }
}
