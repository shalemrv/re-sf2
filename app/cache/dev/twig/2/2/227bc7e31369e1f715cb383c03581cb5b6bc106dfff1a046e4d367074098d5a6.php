<?php

/* MrsuhRealEstateBundle:User:user.html.twig */
class __TwigTemplate_227bc7e31369e1f715cb383c03581cb5b6bc106dfff1a046e4d367074098d5a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MrsuhRealEstateBundle::layout.html.twig", "MrsuhRealEstateBundle:User:user.html.twig", 1);
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
        $__internal_85979241556bcae0d7837d843a73ae62d6488f943b07c339f94f84a813fff9ca = $this->env->getExtension("native_profiler");
        $__internal_85979241556bcae0d7837d843a73ae62d6488f943b07c339f94f84a813fff9ca->enter($__internal_85979241556bcae0d7837d843a73ae62d6488f943b07c339f94f84a813fff9ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MrsuhRealEstateBundle:User:user.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85979241556bcae0d7837d843a73ae62d6488f943b07c339f94f84a813fff9ca->leave($__internal_85979241556bcae0d7837d843a73ae62d6488f943b07c339f94f84a813fff9ca_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_19d7c7f61d67c2ce29f16220f377bf7b07f26f068acf2bb5e920fb3fcbe22f58 = $this->env->getExtension("native_profiler");
        $__internal_19d7c7f61d67c2ce29f16220f377bf7b07f26f068acf2bb5e920fb3fcbe22f58->enter($__internal_19d7c7f61d67c2ce29f16220f377bf7b07f26f068acf2bb5e920fb3fcbe22f58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    <div class=\"row\">
        <div class=\"col-md-6\">
            <br>
            <div class=\"row\">
                <div class=\"col-md-4\"><label>Логин*</label></div>
                <div class=\"col-md-8\">";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control", "readonly" => "readonly")));
        echo "</div>
            </div>
            <br>
            <div class=\"row\">
                <div class=\"col-md-4\"><label>Пароль</label></div>
                <div class=\"col-md-8\">";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
            </div>
            <br>
            <div class=\"row\">
                <div class=\"col-md-4\"><label>Фамилия</label></div>
                <div class=\"col-md-8\">";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "last_name", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
            </div>
            <br>
            <div class=\"row\">
                <div class=\"col-md-4\"><label>Имя</label></div>
                <div class=\"col-md-8\">";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "first_name", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
            </div>
            <br>
            <div class=\"row\">
                <div class=\"col-md-4\"><label>Отчество</label></div>
                <div class=\"col-md-8\">";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "middle_name", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
            </div>
            <br>
            <div class=\"row\">
                <div class=\"col-md-4\"><label>Телефон</label></div>
                <div class=\"col-md-8\">";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
            </div>
            <br>
            <div class=\"row\">
                <div class=\"col-md-4\"><label>Почтовый ящик*</label></div>
                <div class=\"col-md-8\">";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
            </div>
        </div>
    </div>
    <br>
    <div class=\"row\">
        <div class=\"col-md-6\">";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user_save", array()), 'widget', array("attr" => array("class" => "btn btn-success btn-width")));
        echo "
        ";
        // line 46
        if ( !(isset($context["self"]) ? $context["self"] : $this->getContext($context, "self"))) {
            // line 47
            echo "            <button type=\"button\" class=\"btn btn-danger btn-width pull-right\" id=\"delete_button\" >Удалить</button>
        ";
        }
        // line 49
        echo "        </div>

    ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user_delete", array()), 'widget', array("attr" => array("style" => "display: none;")));
        echo "
    ";
        // line 52
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_19d7c7f61d67c2ce29f16220f377bf7b07f26f068acf2bb5e920fb3fcbe22f58->leave($__internal_19d7c7f61d67c2ce29f16220f377bf7b07f26f068acf2bb5e920fb3fcbe22f58_prof);

    }

    // line 55
    public function block_js($context, array $blocks = array())
    {
        $__internal_a47a4bf5c6e06e457c66ffc7e7264e7f86b24b9f45a894b8371a241d08ad62a0 = $this->env->getExtension("native_profiler");
        $__internal_a47a4bf5c6e06e457c66ffc7e7264e7f86b24b9f45a894b8371a241d08ad62a0->enter($__internal_a47a4bf5c6e06e457c66ffc7e7264e7f86b24b9f45a894b8371a241d08ad62a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 56
        echo "    <script>

        var delete_button = \$('#delete_button');
        var delete_submit = \$('#editUser_user_delete');

        delete_button.click(function () {
            if (confirm('Вы уверены, что хотите удалить пользователя?')) {
                delete_submit.click();
            }
        });

    </script>
";
        
        $__internal_a47a4bf5c6e06e457c66ffc7e7264e7f86b24b9f45a894b8371a241d08ad62a0->leave($__internal_a47a4bf5c6e06e457c66ffc7e7264e7f86b24b9f45a894b8371a241d08ad62a0_prof);

    }

    public function getTemplateName()
    {
        return "MrsuhRealEstateBundle:User:user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 56,  135 => 55,  126 => 52,  122 => 51,  118 => 49,  114 => 47,  112 => 46,  108 => 45,  99 => 39,  91 => 34,  83 => 29,  75 => 24,  67 => 19,  59 => 14,  51 => 9,  41 => 3,  35 => 2,  11 => 1,);
    }
}
