<?php

/* MrsuhRealEstateBundle:User:list_user.html.twig */
class __TwigTemplate_1e4baf4b3096be4006ef03c8348cd3b8c1fd792a9e1a4cf68b96b3103dab4120 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MrsuhRealEstateBundle::layout.html.twig", "MrsuhRealEstateBundle:User:list_user.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MrsuhRealEstateBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ca7ee68a268be16ec26def657e1e229cb8b0014a985a480457d7b1df28b88c45 = $this->env->getExtension("native_profiler");
        $__internal_ca7ee68a268be16ec26def657e1e229cb8b0014a985a480457d7b1df28b88c45->enter($__internal_ca7ee68a268be16ec26def657e1e229cb8b0014a985a480457d7b1df28b88c45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MrsuhRealEstateBundle:User:list_user.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca7ee68a268be16ec26def657e1e229cb8b0014a985a480457d7b1df28b88c45->leave($__internal_ca7ee68a268be16ec26def657e1e229cb8b0014a985a480457d7b1df28b88c45_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_5de5f17d5cfa7a84da232748b45debfdefff780f4f1c09fcb1306bd2543e0c3c = $this->env->getExtension("native_profiler");
        $__internal_5de5f17d5cfa7a84da232748b45debfdefff780f4f1c09fcb1306bd2543e0c3c->enter($__internal_5de5f17d5cfa7a84da232748b45debfdefff780f4f1c09fcb1306bd2543e0c3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "
    <table class=\"table table-bordered\">
        <tr class=\"text-center active\">
            <td>Логин</td>
            <td>Фамилия</td>
            <td>Имя</td>
            <td>Отчество</td>
            <td>Телефон</td>
            <td>Почтовый ящик</td>
        </tr>

        ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 15
            echo "            <tr>
                <td class=\"text-center\">   <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("user", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</a></td>
                <td class=\"text-center\">";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "lastName", array()), "html", null, true);
            echo "</td>
                <td class=\"text-center\">";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "firstName", array()), "html", null, true);
            echo "</td>
                <td class=\"text-center\">";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "middleName", array()), "html", null, true);
            echo "</td>
                <td class=\"text-center\">";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "phone", array()), "html", null, true);
            echo "</td>
                <td class=\"text-center\">";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "
    </table>

";
        
        $__internal_5de5f17d5cfa7a84da232748b45debfdefff780f4f1c09fcb1306bd2543e0c3c->leave($__internal_5de5f17d5cfa7a84da232748b45debfdefff780f4f1c09fcb1306bd2543e0c3c_prof);

    }

    public function getTemplateName()
    {
        return "MrsuhRealEstateBundle:User:list_user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 24,  82 => 21,  78 => 20,  74 => 19,  70 => 18,  66 => 17,  60 => 16,  57 => 15,  53 => 14,  40 => 3,  34 => 2,  11 => 1,);
    }
}
