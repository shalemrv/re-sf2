<?php

/* MrsuhRealEstateBundle::Client/list.html.twig */
class __TwigTemplate_b62cb3d535e7b1caa4abcd7a0f919bc1953bb506f465a9a7706f5577d6a4b185 extends Twig_Template
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
        $__internal_cdbb82e364ff4d1824e25f9741617a6f506bdda21ffc3afc90269db9c1b996f5 = $this->env->getExtension("native_profiler");
        $__internal_cdbb82e364ff4d1824e25f9741617a6f506bdda21ffc3afc90269db9c1b996f5->enter($__internal_cdbb82e364ff4d1824e25f9741617a6f506bdda21ffc3afc90269db9c1b996f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MrsuhRealEstateBundle::Client/list.html.twig"));

        // line 1
        if (((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")) &&  !twig_test_empty($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "items", array())))) {
            // line 2
            echo "
    <table class=\"table table-bordered\">
        <tr class=\"text-center active\">
            <td><a href=\"##\" data-order=\"id\">#</a></td>
            <td><a href=\"##\" data-order=\"phone\">Номер телефона</a></td>
            <td><a href=\"##\" data-order=\"name\">ФИО</a></td>
            <td><a href=\"##\" data-order=\"create_time\">Создан</a></td>
            <td><a href=\"##\" data-order=\"update_time\">Обновлен</a></td>
            <td><a href=\"##\" data-order=\"hot\">Горячий клиент</a></td>
            <td><a href=\"##\" data-order=\"mortgage\">Ипотека</a></td>
            <td><a href=\"##\" data-order=\"status\">Статус</a></td>
            <td><a href=\"##\" data-order=\"user\">Специалист</a></td>
        </tr>

        ";
            // line 16
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "items", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
                // line 17
                echo "            ";
                if ((twig_constant("Mrsuh\\RealEstateBundle\\C::STATUS_CLIENT_IN_WORK") == $this->getAttribute($context["client"], "status", array()))) {
                    // line 18
                    echo "                ";
                    $context["clientStatus"] = "В работе";
                    // line 19
                    echo "                <tr class=\"success\">
            ";
                } elseif ((twig_constant("Mrsuh\\RealEstateBundle\\C::STATUS_CLIENT_TEMPORARY_SUSPENDED") == $this->getAttribute(                // line 20
$context["client"], "status", array()))) {
                    // line 21
                    echo "                ";
                    $context["clientStatus"] = "Временно приостановил поиск";
                    // line 22
                    echo "                <tr>
            ";
                } elseif ((twig_constant("Mrsuh\\RealEstateBundle\\C::STATUS_CLIENT_BOUGHT_WITH_US") == $this->getAttribute(                // line 23
$context["client"], "status", array()))) {
                    // line 24
                    echo "                ";
                    $context["clientStatus"] = "Купил а нашем агенстве";
                    // line 25
                    echo "                <tr>
            ";
                } elseif ((twig_constant("Mrsuh\\RealEstateBundle\\C::STATUS_CLIENT_BOUGHT_HIMSELF") == $this->getAttribute(                // line 26
$context["client"], "status", array()))) {
                    // line 27
                    echo "                ";
                    $context["clientStatus"] = "Купил самостоятельно";
                    // line 28
                    echo "                <tr>
            ";
                } elseif ((twig_constant("Mrsuh\\RealEstateBundle\\C::STATUS_CLIENT_BLACK_LIST") == $this->getAttribute(                // line 29
$context["client"], "status", array()))) {
                    // line 30
                    echo "                ";
                    $context["clientStatus"] = "Черный список";
                    // line 31
                    echo "                <tr class=\"danger\">
            ";
                } else {
                    // line 33
                    echo "                ";
                    $context["clientStatus"] = "";
                    // line 34
                    echo "                <tr>
            ";
                }
                // line 36
                echo "
            <td class=\"text-center\"><a href=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("client", array("id" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "id", array()), "html", null, true);
                echo "</a></td>
            <td class=\"text-center\"><a href=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("client", array("id" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "phone1", array()), "html", null, true);
                echo "</a></td>
            <td class=\"text-center\"><a href=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("client", array("id" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "name1", array()), "html", null, true);
                echo "</a></td>
            <td class=\"text-center\">";
                // line 40
                if ((null != $this->getAttribute($context["client"], "createTime", array()))) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["client"], "createTime", array()), "d.m.Y"), "html", null, true);
                }
                echo "</td>
            <td class=\"text-center\">";
                // line 41
                if ((null != $this->getAttribute($context["client"], "updateTime", array()))) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["client"], "updateTime", array()), "d.m.Y"), "html", null, true);
                }
                echo "</td>
            <td class=\"text-center\">";
                // line 42
                if ($this->getAttribute($context["client"], "hot", array())) {
                    echo "Да";
                } else {
                    echo "Нет";
                }
                echo "</td>
            <td class=\"text-center\">";
                // line 43
                if ($this->getAttribute($context["client"], "mortgage", array())) {
                    echo "Да";
                } else {
                    echo "Нет";
                }
                echo "</td>
            <td class=\"text-center\">";
                // line 44
                echo twig_escape_filter($this->env, (isset($context["clientStatus"]) ? $context["clientStatus"] : $this->getContext($context, "clientStatus")), "html", null, true);
                echo "</td>
            <td class=\"text-center\">";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["client"], "user", array()), "lastName", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["client"], "user", array()), "firstName", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["client"], "user", array()), "middleName", array()), "html", null, true);
                echo "</td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "    </table>

";
        }
        
        $__internal_cdbb82e364ff4d1824e25f9741617a6f506bdda21ffc3afc90269db9c1b996f5->leave($__internal_cdbb82e364ff4d1824e25f9741617a6f506bdda21ffc3afc90269db9c1b996f5_prof);

    }

    public function getTemplateName()
    {
        return "MrsuhRealEstateBundle::Client/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 48,  146 => 45,  142 => 44,  134 => 43,  126 => 42,  120 => 41,  114 => 40,  108 => 39,  102 => 38,  96 => 37,  93 => 36,  89 => 34,  86 => 33,  82 => 31,  79 => 30,  77 => 29,  74 => 28,  71 => 27,  69 => 26,  66 => 25,  63 => 24,  61 => 23,  58 => 22,  55 => 21,  53 => 20,  50 => 19,  47 => 18,  44 => 17,  40 => 16,  24 => 2,  22 => 1,);
    }
}
