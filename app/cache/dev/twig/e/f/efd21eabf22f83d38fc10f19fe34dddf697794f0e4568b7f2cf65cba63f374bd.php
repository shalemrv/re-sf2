<?php

/* MrsuhRealEstateBundle:Security:login.html.twig */
class __TwigTemplate_efd21eabf22f83d38fc10f19fe34dddf697794f0e4568b7f2cf65cba63f374bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MrsuhRealEstateBundle::Security/layout.html.twig", "MrsuhRealEstateBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MrsuhRealEstateBundle::Security/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_de7fbad97640598ba6d86363ce049ef741892ad8daa4bafcd61ee6843d41da5b = $this->env->getExtension("native_profiler");
        $__internal_de7fbad97640598ba6d86363ce049ef741892ad8daa4bafcd61ee6843d41da5b->enter($__internal_de7fbad97640598ba6d86363ce049ef741892ad8daa4bafcd61ee6843d41da5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MrsuhRealEstateBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de7fbad97640598ba6d86363ce049ef741892ad8daa4bafcd61ee6843d41da5b->leave($__internal_de7fbad97640598ba6d86363ce049ef741892ad8daa4bafcd61ee6843d41da5b_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_7640604c7eb26b1cb56ce9ab515a39203662c2c4e2d7e8e143f975901869efec = $this->env->getExtension("native_profiler");
        $__internal_7640604c7eb26b1cb56ce9ab515a39203662c2c4e2d7e8e143f975901869efec->enter($__internal_7640604c7eb26b1cb56ce9ab515a39203662c2c4e2d7e8e143f975901869efec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    <form action=\"";
        echo $this->env->getExtension('routing')->getUrl("login_check");
        echo "\" method=\"POST\">

        <div class=\"form-group\">
            <label for=\"username\">Имя пользователя</label>
            <input type=\"text\" class=\"form-control\" id=\"username\"
                   name=\"_username\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\"
                   placeholder=\"имя пользователя\" required=\"true\" style=\"margin-bottom: 10px\"/>
            <label for=\"password\">Пароль</label>
            <input type=\"password\" class=\"form-control\" id=\"password\"
                   name=\"_password\" placeholder=\"пароль\"
                   required=\"true\" style=\"margin-bottom: 10px\"/>

            ";
        // line 15
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 16
            echo "                <div class=\"bg-danger\" style=\"margin-bottom: 10px\">Неверное имя пользователя или пароль</div>
            ";
        }
        // line 18
        echo "
            <input type=\"submit\" class=\"btn-primary form-control\" name=\"login\" value=\"войти\"/>
        </div>
    </form>
";
        
        $__internal_7640604c7eb26b1cb56ce9ab515a39203662c2c4e2d7e8e143f975901869efec->leave($__internal_7640604c7eb26b1cb56ce9ab515a39203662c2c4e2d7e8e143f975901869efec_prof);

    }

    public function getTemplateName()
    {
        return "MrsuhRealEstateBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 18,  61 => 16,  59 => 15,  49 => 8,  40 => 3,  34 => 2,  11 => 1,);
    }
}
