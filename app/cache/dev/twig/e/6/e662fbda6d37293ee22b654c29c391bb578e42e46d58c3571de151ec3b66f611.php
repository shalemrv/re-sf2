<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_e662fbda6d37293ee22b654c29c391bb578e42e46d58c3571de151ec3b66f611 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8c16e488be0a974b8b547507df3ae1805db13d88615836b74e3bc564ae503531 = $this->env->getExtension("native_profiler");
        $__internal_8c16e488be0a974b8b547507df3ae1805db13d88615836b74e3bc564ae503531->enter($__internal_8c16e488be0a974b8b547507df3ae1805db13d88615836b74e3bc564ae503531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c16e488be0a974b8b547507df3ae1805db13d88615836b74e3bc564ae503531->leave($__internal_8c16e488be0a974b8b547507df3ae1805db13d88615836b74e3bc564ae503531_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_89b87961d398632fcd64d18f15f1e1f6d3cc0beba735334740309890da573c2f = $this->env->getExtension("native_profiler");
        $__internal_89b87961d398632fcd64d18f15f1e1f6d3cc0beba735334740309890da573c2f->enter($__internal_89b87961d398632fcd64d18f15f1e1f6d3cc0beba735334740309890da573c2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_89b87961d398632fcd64d18f15f1e1f6d3cc0beba735334740309890da573c2f->leave($__internal_89b87961d398632fcd64d18f15f1e1f6d3cc0beba735334740309890da573c2f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c6930a9d06d1ced720176e0d14643681224b6ba991baab4fbe04d9bde762223b = $this->env->getExtension("native_profiler");
        $__internal_c6930a9d06d1ced720176e0d14643681224b6ba991baab4fbe04d9bde762223b->enter($__internal_c6930a9d06d1ced720176e0d14643681224b6ba991baab4fbe04d9bde762223b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c6930a9d06d1ced720176e0d14643681224b6ba991baab4fbe04d9bde762223b->leave($__internal_c6930a9d06d1ced720176e0d14643681224b6ba991baab4fbe04d9bde762223b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_75577e13f11771009f9faa07c6ba4a92adfef349254a23b45c7acdcd9c3d5dfc = $this->env->getExtension("native_profiler");
        $__internal_75577e13f11771009f9faa07c6ba4a92adfef349254a23b45c7acdcd9c3d5dfc->enter($__internal_75577e13f11771009f9faa07c6ba4a92adfef349254a23b45c7acdcd9c3d5dfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_75577e13f11771009f9faa07c6ba4a92adfef349254a23b45c7acdcd9c3d5dfc->leave($__internal_75577e13f11771009f9faa07c6ba4a92adfef349254a23b45c7acdcd9c3d5dfc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
