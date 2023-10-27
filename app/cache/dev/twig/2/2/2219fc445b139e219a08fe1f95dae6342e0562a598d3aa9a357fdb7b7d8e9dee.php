<?php

/* MrsuhRealEstateBundle::Default/pagination.html.twig */
class __TwigTemplate_2219fc445b139e219a08fe1f95dae6342e0562a598d3aa9a357fdb7b7d8e9dee extends Twig_Template
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
        $__internal_a62171172b47387129d5c47fab3996bacc0436fe2f14901ae1c3a70d9deb27f5 = $this->env->getExtension("native_profiler");
        $__internal_a62171172b47387129d5c47fab3996bacc0436fe2f14901ae1c3a70d9deb27f5->enter($__internal_a62171172b47387129d5c47fab3996bacc0436fe2f14901ae1c3a70d9deb27f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MrsuhRealEstateBundle::Default/pagination.html.twig"));

        // line 1
        if ((((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")) &&  !twig_test_empty($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "items", array()))) && ($this->getAttribute($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "pagination", array()), "total_pages", array()) > 1))) {
            // line 2
            echo "
    <div class=\"row\">
        <div class=\"col-md-12\">
            <nav>
                <ul class=\"pagination\">
                    ";
            // line 7
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "pagination", array()), "pages", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 8
                echo "                        <li ";
                if (($this->getAttribute($context["page"], "index", array()) == $this->getAttribute($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "pagination", array()), "current_page", array()))) {
                    echo "class=\"active\"";
                }
                echo "><a href=\"##\" data-page=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "index", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "name", array()), "html", null, true);
                echo "</a></li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "                </ul>
            </nav>
        </div>
    </div>

";
        } elseif ((        // line 15
(isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")) && twig_test_empty($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "items", array())))) {
            // line 16
            echo "
    <b>Запрос не дал результатов...</b>

";
        }
        
        $__internal_a62171172b47387129d5c47fab3996bacc0436fe2f14901ae1c3a70d9deb27f5->leave($__internal_a62171172b47387129d5c47fab3996bacc0436fe2f14901ae1c3a70d9deb27f5_prof);

    }

    public function getTemplateName()
    {
        return "MrsuhRealEstateBundle::Default/pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 16,  57 => 15,  50 => 10,  35 => 8,  31 => 7,  24 => 2,  22 => 1,);
    }
}
