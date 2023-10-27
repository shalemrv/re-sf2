<?php

/* MrsuhRealEstateBundle:Security:login.html.twig */
class __TwigTemplate_cf603b11c4159c33f7be2370f3362b9503a2aa9de585145a742ee48c5d71789c extends Twig_Template
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
        $__internal_d057f5e854a3a800f1c656802dbc12c684be849135f695a63d6c291b22c439ed = $this->env->getExtension("native_profiler");
        $__internal_d057f5e854a3a800f1c656802dbc12c684be849135f695a63d6c291b22c439ed->enter($__internal_d057f5e854a3a800f1c656802dbc12c684be849135f695a63d6c291b22c439ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MrsuhRealEstateBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d057f5e854a3a800f1c656802dbc12c684be849135f695a63d6c291b22c439ed->leave($__internal_d057f5e854a3a800f1c656802dbc12c684be849135f695a63d6c291b22c439ed_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_69cb21c54c40238ad2fd0debc4a452ffd4fcc5d228e408543d67d637e5d5a102 = $this->env->getExtension("native_profiler");
        $__internal_69cb21c54c40238ad2fd0debc4a452ffd4fcc5d228e408543d67d637e5d5a102->enter($__internal_69cb21c54c40238ad2fd0debc4a452ffd4fcc5d228e408543d67d637e5d5a102_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_69cb21c54c40238ad2fd0debc4a452ffd4fcc5d228e408543d67d637e5d5a102->leave($__internal_69cb21c54c40238ad2fd0debc4a452ffd4fcc5d228e408543d67d637e5d5a102_prof);

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
