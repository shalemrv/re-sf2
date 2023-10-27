<?php

/* MrsuhRealEstateBundle:Default:sidebar.html.twig */
class __TwigTemplate_756a3b5192760a663d5283b11781b70caf7ae4e62b16960fd70c8ab9afbc379d extends Twig_Template
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
        $__internal_9849d2ddf5a4e3774454944120ab1ff0096ab22de2a78e45613808922b2eb318 = $this->env->getExtension("native_profiler");
        $__internal_9849d2ddf5a4e3774454944120ab1ff0096ab22de2a78e45613808922b2eb318->enter($__internal_9849d2ddf5a4e3774454944120ab1ff0096ab22de2a78e45613808922b2eb318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MrsuhRealEstateBundle:Default:sidebar.html.twig"));

        // line 1
        echo "<div id=\"sidebar-wrapper\">
    <ul class=\"sidebar-nav\" id=\"menu\">
        <li class=\"sidebar-brand\">
            <a href=\"#\">";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["username"]) ? $context["username"] : $this->getContext($context, "username")), "html", null, true);
        echo "</a>
        </li>
        <li>
            <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getUrl("profile");
        echo "\">Профиль</a>
        </li>
        <li><span><a href=\"#\" >Объявления</a></span>
            <ul ";
        // line 10
        if (((((((isset($context["path"]) ? $context["path"] : $this->getContext($context, "path")) == $this->env->getExtension('routing')->getPath("find_advert")) || ((isset($context["path"]) ? $context["path"] : $this->getContext($context, "path")) == $this->env->getExtension('routing')->getPath("create_advert"))) || ((isset($context["path"]) ? $context["path"] : $this->getContext($context, "path")) == $this->env->getExtension('routing')->getPath("find_advert_by_client"))) || ((isset($context["path"]) ? $context["path"] : $this->getContext($context, "path")) == $this->env->getExtension('routing')->getPath("change_user_advert_list"))) || ((isset($context["path"]) ? $context["path"] : $this->getContext($context, "path")) == $this->env->getExtension('routing')->getPath("advert")))) {
            echo " style=\"display: block;\" ";
        } else {
            echo " style=\"display: none;\" ";
        }
        echo ">
                <li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getUrl("find_advert");
        echo "\">Поиск объявления</a></li>
                <li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getUrl("create_advert");
        echo "\">Добавить объявление</a></li>
                ";
        // line 13
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            echo "<li><a href=\"";
            echo $this->env->getExtension('routing')->getUrl("change_user_advert_list");
            echo "\">Перенос объявлений</a></li>";
        }
        // line 14
        echo "            </ul>
        </li>
        <li><span><a href=\"#\">Клиенты</a></span>
            <ul  ";
        // line 17
        if (((((isset($context["path"]) ? $context["path"] : $this->getContext($context, "path")) == $this->env->getExtension('routing')->getPath("find_client")) || ((isset($context["path"]) ? $context["path"] : $this->getContext($context, "path")) == $this->env->getExtension('routing')->getPath("create_client"))) || ((isset($context["path"]) ? $context["path"] : $this->getContext($context, "path")) == $this->env->getExtension('routing')->getPath("client")))) {
            echo " style=\"display: block;\" ";
        } else {
            echo " style=\"display: none;\" ";
        }
        echo ">
                <li><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getUrl("find_client");
        echo "\">Поиск клиента</a></li>
                <li><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getUrl("create_client");
        echo "\">Добавить клиента</a></li>
            </ul>
        </li>

        ";
        // line 23
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 24
            echo "        <li><span><a href=\"#\">Пользователи</a></span>
            <ul  ";
            // line 25
            if (((((isset($context["path"]) ? $context["path"] : $this->getContext($context, "path")) == $this->env->getExtension('routing')->getPath("list_user")) || ((isset($context["path"]) ? $context["path"] : $this->getContext($context, "path")) == $this->env->getExtension('routing')->getPath("create_user"))) || ((isset($context["path"]) ? $context["path"] : $this->getContext($context, "path")) == $this->env->getExtension('routing')->getPath("user")))) {
                echo " style=\"display: block;\" ";
            } else {
                echo " style=\"display: none;\" ";
            }
            echo ">
                <li><a href=\"";
            // line 26
            echo $this->env->getExtension('routing')->getUrl("list_user");
            echo "\">Список пользователей</a></li>
                <li><a href=\"";
            // line 27
            echo $this->env->getExtension('routing')->getUrl("create_user");
            echo "\">Создать пользователя</a></li>
            </ul>
        </li>
        ";
        }
        // line 31
        echo "
        <li>
            <a href=\"##\" id=\"logout\">Выйти</a>
        </li>
    </ul>
</div>";
        
        $__internal_9849d2ddf5a4e3774454944120ab1ff0096ab22de2a78e45613808922b2eb318->leave($__internal_9849d2ddf5a4e3774454944120ab1ff0096ab22de2a78e45613808922b2eb318_prof);

    }

    public function getTemplateName()
    {
        return "MrsuhRealEstateBundle:Default:sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 31,  102 => 27,  98 => 26,  90 => 25,  87 => 24,  85 => 23,  78 => 19,  74 => 18,  66 => 17,  61 => 14,  55 => 13,  51 => 12,  47 => 11,  39 => 10,  33 => 7,  27 => 4,  22 => 1,);
    }
}
