<?php

/* MrsuhRealEstateBundle::alert.html.twig */
class __TwigTemplate_e529e18755c20cbbbf4002de480b1b5594cebade2f40c3640da2e9a648747354 extends Twig_Template
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
        $__internal_7df72c2dbea1f01c3285ddcc73b254c5064b2f9c930babd01619253dec02e403 = $this->env->getExtension("native_profiler");
        $__internal_7df72c2dbea1f01c3285ddcc73b254c5064b2f9c930babd01619253dec02e403->enter($__internal_7df72c2dbea1f01c3285ddcc73b254c5064b2f9c930babd01619253dec02e403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MrsuhRealEstateBundle::alert.html.twig"));

        // line 1
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 2
            echo "    <div class=\"bg-success\" style=\"height: 50px; padding-top: 15px; padding-left: 20px\"><b>";
            echo $context["flashMessage"];
            echo "</b></div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 5
            echo "    <div class=\"bg-info\" style=\"height: 50px; padding-top: 15px; padding-left: 20px\"><b>";
            echo $context["flashMessage"];
            echo "</b></div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "warning"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 8
            echo "    <div class=\"bg-warning\" style=\"height: 50px; padding-top: 15px; padding-left: 20px\"><b>";
            echo $context["flashMessage"];
            echo "</b></div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "danger"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 11
            echo "    <div class=\"bg-danger\" style=\"height: 50px; padding-top: 15px; padding-left: 20px\"><b>";
            echo $context["flashMessage"];
            echo "</b></div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_7df72c2dbea1f01c3285ddcc73b254c5064b2f9c930babd01619253dec02e403->leave($__internal_7df72c2dbea1f01c3285ddcc73b254c5064b2f9c930babd01619253dec02e403_prof);

    }

    public function getTemplateName()
    {
        return "MrsuhRealEstateBundle::alert.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 11,  61 => 10,  52 => 8,  48 => 7,  39 => 5,  35 => 4,  26 => 2,  22 => 1,);
    }
}
