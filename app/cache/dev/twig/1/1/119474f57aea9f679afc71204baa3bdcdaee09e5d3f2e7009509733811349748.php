<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_119474f57aea9f679afc71204baa3bdcdaee09e5d3f2e7009509733811349748 extends Twig_Template
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
        $__internal_1fc5e7498cbd1cad35dd22ed34082783449603569a11f0495e822c18aa678c55 = $this->env->getExtension("native_profiler");
        $__internal_1fc5e7498cbd1cad35dd22ed34082783449603569a11f0495e822c18aa678c55->enter($__internal_1fc5e7498cbd1cad35dd22ed34082783449603569a11f0495e822c18aa678c55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("TwigBundle:Exception:trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_1fc5e7498cbd1cad35dd22ed34082783449603569a11f0495e822c18aa678c55->leave($__internal_1fc5e7498cbd1cad35dd22ed34082783449603569a11f0495e822c18aa678c55_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
