<?php

/* MrsuhRealEstateBundle::Advert/list.html.twig */
class __TwigTemplate_b8772f849cead87b83b0e81f5215aab511a77bcc3570df09ab5c7df074c21bbf extends Twig_Template
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
        $__internal_0fd50d81eead8803098d105d2208208c106e1ab78adc561f622b1cbdb8acb229 = $this->env->getExtension("native_profiler");
        $__internal_0fd50d81eead8803098d105d2208208c106e1ab78adc561f622b1cbdb8acb229->enter($__internal_0fd50d81eead8803098d105d2208208c106e1ab78adc561f622b1cbdb8acb229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MrsuhRealEstateBundle::Advert/list.html.twig"));

        // line 1
        if (((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")) &&  !twig_test_empty($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "items", array())))) {
            // line 2
            echo "
    <table class=\"table table-bordered\">
        <tr class=\"text-center\">
            <td><a href=\"##\" data-order=\"id\">#</a></td>
            <td>Фото</td>
            <td>Тип объекта</td>
            <td>
                <a href=\"##\" data-order=\"city\">Город</a> |
                <a href=\"##\" data-order=\"region\">Район</a> |
                Адрес |
                Описание
            </td>
            <td>Площадь</td>
            <td><a href=\"##\" data-order=\"price\">Цена</a></td>
            <td><a href=\"##\" data-order=\"status\">Статус</a></td>
            <td>
                <a href=\"##\" data-order=\"create_time\">Создано</a> |
                <a href=\"##\" data-order=\"update_time\">Обновлено</a> |
                <a href=\"##\" data-order=\"expire_time\">Истекает</a>
            </td>
        </tr>
        ";
            // line 23
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "items", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
                // line 24
                echo "            ";
                if ((twig_constant("Mrsuh\\RealEstateBundle\\C::STATUS_ADVERT_ACTIVE") == $this->getAttribute($context["advert"], "status", array()))) {
                    // line 25
                    echo "                <tr class=\"success\">
                ";
                    // line 26
                    $context["advertStatus"] = "активый";
                    // line 27
                    echo "            ";
                } elseif ((twig_constant("Mrsuh\\RealEstateBundle\\C::STATUS_ADVERT_NOT_ACTIVE") == $this->getAttribute($context["advert"], "status", array()))) {
                    // line 28
                    echo "                <tr>
                ";
                    // line 29
                    $context["advertStatus"] = "не активый";
                    // line 30
                    echo "            ";
                } elseif ((twig_constant("Mrsuh\\RealEstateBundle\\C::STATUS_ADVERT_DELETED") == $this->getAttribute($context["advert"], "status", array()))) {
                    // line 31
                    echo "                <tr class=\"danger\">
                ";
                    // line 32
                    $context["advertStatus"] = "архив";
                    // line 33
                    echo "            ";
                } elseif ((twig_constant("Mrsuh\\RealEstateBundle\\C::STATUS_ADVERT_NO_RESPONSE") == $this->getAttribute($context["advert"], "status", array()))) {
                    // line 34
                    echo "                <tr class=\"warning\">
                ";
                    // line 35
                    $context["advertStatus"] = "нет связи";
                    // line 36
                    echo "            ";
                } elseif ((twig_constant("Mrsuh\\RealEstateBundle\\C::STATUS_ADVERT_RECALL") == $this->getAttribute($context["advert"], "status", array()))) {
                    // line 37
                    echo "                <tr class=\"warning\">
                ";
                    // line 38
                    $context["advertStatus"] = "перезвонить";
                    // line 39
                    echo "            ";
                } else {
                    // line 40
                    echo "                <tr>
                ";
                    // line 41
                    $context["advertStatus"] = "";
                    // line 42
                    echo "            ";
                }
                // line 43
                echo "
            <td class=\"text-center\"><a href=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("advert", array("id" => $this->getAttribute($context["advert"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "id", array()), "html", null, true);
                echo "</a></td>
            <td class=\"img-responsive text-center\">
                ";
                // line 46
                if ((twig_first($this->env, $this->getAttribute($context["advert"], "getImg", array())) != null)) {
                    // line 47
                    echo "                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("advert", array("id" => $this->getAttribute($context["advert"], "id", array()))), "html", null, true);
                    echo "\">
                        <img src=\"";
                    // line 48
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute(twig_first($this->env, $this->getAttribute($context["advert"], "getImg", array())), "getMiniWebPath", array())), "html", null, true);
                    echo "\" style=\"max-width: 100px; height: 100px; border-radius: 10px;\"></a>
                ";
                } else {
                    // line 50
                    echo "                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("advert", array("id" => $this->getAttribute($context["advert"], "id", array()))), "html", null, true);
                    echo "\"><img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/real-estate.jpg"), "html", null, true);
                    echo "\" style=\"max-width: 100px; height: 100px; border-radius: 10px;\"></a>
                ";
                }
                // line 52
                echo "
            </td>
            <td class=\"text-center\">
                ";
                // line 55
                if ((twig_constant("Mrsuh\\RealEstateBundle\\C::OBJECT_TYPE_HOUSE") == $this->getAttribute($this->getAttribute($this->getAttribute($context["advert"], "object", array()), "type", array()), "name", array()))) {
                    // line 56
                    echo "                    ";
                    if ($this->getAttribute($this->getAttribute($context["advert"], "object", array()), "roomNumber", array())) {
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["advert"], "object", array()), "roomNumber", array()), "html", null, true);
                        echo "-к ";
                    }
                    // line 57
                    echo "                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["advert"], "object", array()), "type", array()), "name", array()), "html", null, true);
                    echo "<br>
                    ";
                    // line 58
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["advert"], "object", array()), "floor", array()), "html", null, true);
                    echo " / ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["advert"], "object", array()), "floors", array()), "html", null, true);
                    echo "-эт.  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["advert"], "object", array()), "wall", array()), "name", array()), "html", null, true);
                    echo " Дом
                ";
                } elseif ((twig_constant("Mrsuh\\RealEstateBundle\\C::OBJECT_TYPE_EARTH_AREA") == $this->getAttribute($this->getAttribute($this->getAttribute(                // line 59
$context["advert"], "object", array()), "type", array()), "name", array()))) {
                    // line 60
                    echo "                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["advert"], "object", array()), "type", array()), "name", array()), "html", null, true);
                    echo "
                ";
                } elseif ((twig_constant("Mrsuh\\RealEstateBundle\\C::OBJECT_TYPE_FLAT") == $this->getAttribute($this->getAttribute($this->getAttribute(                // line 61
$context["advert"], "object", array()), "type", array()), "name", array()))) {
                    // line 62
                    echo "                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["advert"], "object", array()), "type", array()), "name", array()), "html", null, true);
                    echo "
                ";
                } elseif ((twig_constant("Mrsuh\\RealEstateBundle\\C::OBJECT_TYPE_COMMERCE") == $this->getAttribute($this->getAttribute($this->getAttribute(                // line 63
$context["advert"], "object", array()), "type", array()), "name", array()))) {
                    // line 64
                    echo "                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["advert"], "object", array()), "type", array()), "name", array()), "html", null, true);
                    echo "
                ";
                } elseif ((twig_constant("Mrsuh\\RealEstateBundle\\C::OBJECT_TYPE_ROOM") == $this->getAttribute($this->getAttribute($this->getAttribute(                // line 65
$context["advert"], "object", array()), "type", array()), "name", array()))) {
                    // line 66
                    echo "                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["advert"], "object", array()), "type", array()), "name", array()), "html", null, true);
                    echo "
                ";
                }
                // line 68
                echo "            </td>
            <td class=\"text-center\">
                ";
                // line 70
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["advert"], "object", array()), "city", array()), "name", array()), "html", null, true);
                echo ",";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["advert"], "object", array()), "regionCity", array()), "name", array()), "html", null, true);
                echo ",<br>
                ";
                // line 71
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["advert"], "object", array()), "street", array()), "html", null, true);
                echo " ул";
                if ($this->getAttribute($this->getAttribute($context["advert"], "object", array()), "house", array())) {
                    echo ", ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["advert"], "object", array()), "house", array()), "html", null, true);
                }
                // line 72
                echo "            </td>
            <td class=\"text-center\">
                ";
                // line 74
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["advert"], "object", array()), "commonArea", array()), "html", null, true);
                echo " / ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["advert"], "object", array()), "liveArea", array()), "html", null, true);
                echo " / ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["advert"], "object", array()), "kitchenArea", array()), "html", null, true);
                echo "&nbsp;м<sup>2</sup>
            </td>
            <td class=\"text-center\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        ";
                // line 79
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["advert"], "price", array())), "html", null, true);
                echo "&nbsp;р
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        (";
                // line 84
                echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "meterPrice", array()), "html", null, true);
                echo "&nbsp;р/м<sup>2</sup>)
                    </div>
                </div>
            </td>
            <td class=\"text-center\">";
                // line 88
                echo twig_escape_filter($this->env, (isset($context["advertStatus"]) ? $context["advertStatus"] : $this->getContext($context, "advertStatus")), "html", null, true);
                echo "</td>
            <td class=\"text-center\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        ";
                // line 92
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["advert"], "user", array()), "lastName", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["advert"], "user", array()), "firstName", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["advert"], "user", array()), "middleName", array()), "html", null, true);
                echo "
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <b>Истекает:</b> ";
                // line 97
                if ((null != $this->getAttribute($context["advert"], "expireTime", array()))) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["advert"], "expireTime", array()), "d.m.Y"), "html", null, true);
                }
                // line 98
                echo "                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <b>Обновлено:</b> ";
                // line 102
                if ((null != $this->getAttribute($context["advert"], "updateTime", array()))) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["advert"], "updateTime", array()), "d.m.Y"), "html", null, true);
                }
                // line 103
                echo "                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <b>Создано:</b> ";
                // line 107
                if ((null != $this->getAttribute($context["advert"], "createTime", array()))) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["advert"], "createTime", array()), "d.m.Y"), "html", null, true);
                }
                // line 108
                echo "                    </div>
                </div>
            </td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 113
            echo "    </table>
";
        }
        // line 115
        echo "
";
        
        $__internal_0fd50d81eead8803098d105d2208208c106e1ab78adc561f622b1cbdb8acb229->leave($__internal_0fd50d81eead8803098d105d2208208c106e1ab78adc561f622b1cbdb8acb229_prof);

    }

    public function getTemplateName()
    {
        return "MrsuhRealEstateBundle::Advert/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  293 => 115,  289 => 113,  279 => 108,  275 => 107,  269 => 103,  265 => 102,  259 => 98,  255 => 97,  243 => 92,  236 => 88,  229 => 84,  221 => 79,  209 => 74,  205 => 72,  198 => 71,  192 => 70,  188 => 68,  182 => 66,  180 => 65,  175 => 64,  173 => 63,  168 => 62,  166 => 61,  161 => 60,  159 => 59,  151 => 58,  146 => 57,  139 => 56,  137 => 55,  132 => 52,  124 => 50,  119 => 48,  114 => 47,  112 => 46,  105 => 44,  102 => 43,  99 => 42,  97 => 41,  94 => 40,  91 => 39,  89 => 38,  86 => 37,  83 => 36,  81 => 35,  78 => 34,  75 => 33,  73 => 32,  70 => 31,  67 => 30,  65 => 29,  62 => 28,  59 => 27,  57 => 26,  54 => 25,  51 => 24,  47 => 23,  24 => 2,  22 => 1,);
    }
}
