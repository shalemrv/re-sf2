<?php

/* MrsuhRealEstateBundle:Client:create_client.html.twig */
class __TwigTemplate_424c40983a88c74bd56e1c6812374e7f5272bf093f923e54003293c20ce2db25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MrsuhRealEstateBundle::layout.html.twig", "MrsuhRealEstateBundle:Client:create_client.html.twig", 1);
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
        $__internal_65717115925503b29ce30db0e4c628ff38d7a7dc2dc37eddb5de011a66be63d8 = $this->env->getExtension("native_profiler");
        $__internal_65717115925503b29ce30db0e4c628ff38d7a7dc2dc37eddb5de011a66be63d8->enter($__internal_65717115925503b29ce30db0e4c628ff38d7a7dc2dc37eddb5de011a66be63d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MrsuhRealEstateBundle:Client:create_client.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65717115925503b29ce30db0e4c628ff38d7a7dc2dc37eddb5de011a66be63d8->leave($__internal_65717115925503b29ce30db0e4c628ff38d7a7dc2dc37eddb5de011a66be63d8_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_220cf6b0551c79170395c3a8c121c9cef8b6b50c8142e746cd6e712894be0712 = $this->env->getExtension("native_profiler");
        $__internal_220cf6b0551c79170395c3a8c121c9cef8b6b50c8142e746cd6e712894be0712->enter($__internal_220cf6b0551c79170395c3a8c121c9cef8b6b50c8142e746cd6e712894be0712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "
    ";
        // line 4
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

    <div class=\"row\">
        <div class=\"col-md-2\"><label>Статус клиента</label></div>
        <div class=\"col-md-4\">";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "status", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
    </div>
    <br>
    <a href=\"##\"><b>Данные клиента</b></a>
    <hr>
    <div class=\"row\">
        <div class=\"col-md-2\"><label>ФИО 1*</label></div>
        <div class=\"col-md-4\">";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name1", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
        <div class=\"col-md-2\"><label>Номер телефона 1*</label></div>
        <div class=\"col-md-4\">";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone1", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
    </div>
    <br>

    <div class=\"row\">
        <div class=\"col-md-2\"><label>ФИО 2</label></div>
        <div class=\"col-md-4\">";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name2", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
        <div class=\"col-md-2\"><label>Номер телефона 2</label></div>
        <div class=\"col-md-4\">";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone2", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
    </div>
    <br>

    <div class=\"row\">
        <div class=\"col-md-2\"><label>ФИО 3</label></div>
        <div class=\"col-md-4\">";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name3", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
        <div class=\"col-md-2\"><label>Номер телефона 3</label></div>
        <div class=\"col-md-4\">";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone3", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
    </div>
    <br>
    <a href=\"##\"><b>Характеристики</b></a>
    <hr>
    <div class=\"row\">
        <div class=\"col-md-4\">
            <div class=\"row\">
                <div class=\"col-md-6\"><label>Тип недвижимости</label></div>
                <div class=\"col-md-6\">";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "object_type", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
            </div>
            <br>
            <div class=\"row\">
                <div class=\"col-md-6\"><label>Ипотека</label></div>
                <div class=\"col-md-6\">";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mortgage", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
            </div>
            <br>
            <div class=\"row\">
                <div class=\"col-md-6\"><label>Дата рождения клиента</label></div>
                <div class=\"col-md-6\">";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "birth_day", array()), 'widget', array("attr" => array("class" => "form-control", "readonly" => "readonly")));
        echo "</div>
            </div>
            <br>
            <div class=\"row\">
                <div class=\"col-md-6\"><label>Горячий клиент</label></div>
                <div class=\"col-md-6\">";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hot", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
            </div>
            <br>
        </div>


        <div class=\"col-md-3\">
            <div class=\"row\">
                <div class=\"col-md-4\"><label>Город</label></div>
                <div class=\"col-md-8\">";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "city", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
            </div>
            <br>

            <div class=\"row\">
                <div class=\"col-md-12\"><label>Район города</label>
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div id=\"createClient_region_city\" style=\"display: none;\"></div>
                    ";
        // line 78
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["regionsCity"]) ? $context["regionsCity"] : $this->getContext($context, "regionsCity")));
        foreach ($context['_seq'] as $context["id"] => $context["city"]) {
            // line 79
            echo "                        <div class=\"region_city\" id=\"region_city_";
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo "\" style=\"display: none;\">
                            ";
            // line 80
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($context["city"]);
            foreach ($context['_seq'] as $context["key"] => $context["name"]) {
                // line 81
                echo "                                <input type=\"checkbox\" id=\"createClient_region_city_";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" name=\"createClient[region_city][";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "]\"  value=";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "> <label for=\"createClient_region_city_";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" >";
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "</label><br>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo "                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['city'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "                </div>
            </div>
        </div>


        <div class=\"col-md-5\">
            <div class=\"row\">
                <div class=\"col-md-4\"><label>Цена</label></div>
                <div class=\"col-md-4\">";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "price_from", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
                <div class=\"col-md-4\">";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "price_to", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
            </div>
            <br>

            <div class=\"row\">
                <div class=\"col-md-4\"><label>Количество комнат</label></div>
                <div class=\"col-md-4\">";
        // line 100
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "room_from", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
                <div class=\"col-md-4\">";
        // line 101
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "room_to", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
            </div>
            <br>

            <div class=\"row\">
                <div class=\"col-md-4\"><label>Общая площадь</label></div>
                <div class=\"col-md-4\">";
        // line 107
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "common_area_from", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                <div class=\"col-md-4\">";
        // line 109
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "common_area_to", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
            </div>
            <br>

            <div class=\"row\">
                <div class=\"col-md-4\"><label>Жилая площадь</label></div>
                <div class=\"col-md-4\">";
        // line 115
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "live_area_from", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
                <div class=\"col-md-4\">";
        // line 116
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "live_area_to", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
            </div>
            <br>

            <div class=\"row\">
                <div class=\"col-md-4\"><label>Площадь кухни</label></div>
                <div class=\"col-md-4\">";
        // line 122
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "kitchen_area_from", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                <div class=\"col-md-4\">";
        // line 124
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "kitchen_area_to", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>
            <br>

            <div class=\"row\">
                <div class=\"col-md-4\"><label>Земельный участок</label></div>
                <div class=\"col-md-4\">";
        // line 131
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "section_area_from", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                <div class=\"col-md-4\">";
        // line 133
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "section_area_to", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>
            <br>

            <div class=\"row\">
                <div class=\"col-md-4\"><label>Этаж</label></div>
                <div class=\"col-md-4\">";
        // line 140
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "floor_from", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
                <div class=\"col-md-4\">";
        // line 141
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "floor_to", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
            </div>
            <br>

            <div class=\"row\">
                <div class=\"col-md-4\"><label>Этажность дома</label></div>
                <div class=\"col-md-4\">";
        // line 147
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "floors_from", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
                <div class=\"col-md-4\">";
        // line 148
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "floors_to", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
            </div>
        </div>
    </div>
    <br>
    <hr>
    <div class=\"row\">
        <div class=\"col-md-4\"><label>Комментарии</label></div>
        <div class=\"col-md-8\">";
        // line 156
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "comment", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
    </div>
    <hr>
    <br>
    <button type=\"button\" class=\"btn btn-success btn-width\" id=\"submit_create_client\">Создать</button>

    ";
        // line 162
        $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "region_city", array()), "setRendered", array());
        // line 163
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit", array()), 'widget', array("attr" => array("hidden" => "true")));
        echo "
    ";
        // line 164
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_220cf6b0551c79170395c3a8c121c9cef8b6b50c8142e746cd6e712894be0712->leave($__internal_220cf6b0551c79170395c3a8c121c9cef8b6b50c8142e746cd6e712894be0712_prof);

    }

    // line 168
    public function block_js($context, array $blocks = array())
    {
        $__internal_5994ffd4c72aa2b780285ae2e3067f860700672d3a9eb701fa1cc7360d447f4f = $this->env->getExtension("native_profiler");
        $__internal_5994ffd4c72aa2b780285ae2e3067f860700672d3a9eb701fa1cc7360d447f4f->enter($__internal_5994ffd4c72aa2b780285ae2e3067f860700672d3a9eb701fa1cc7360d447f4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 169
        echo "    <script>
        \$(function(){
            var birth_date = \$('#createClient_birth_day');
            birth_date.datepicker({ dateFormat: 'dd.mm.yy' });

            var region_city = \$('#createClient_region_city');

            var select_city = \$('#createClient_city');
            select_city.change(function(){
                set_region_city();
            });

            var submit = \$('#createClient_submit');
            var submit_button = \$('#submit_create_client');

            var set_region_city = function()
            {
                \$('.region_city').hide();
                \$('#region_city_' + select_city.val()).show();
            };

            set_region_city();

            submit_button.click(function(){
                region_city.html(\$('.region_city:visible input'));
                submit.click();
            });

            \$('#createClient_price_from').on('keyup', function(){
                myPriceFormat(\$(this));
            });

            \$('#createClient_price_to').on('keyup', function(){
                myPriceFormat(\$(this));
            });
        });
    </script>
";
        
        $__internal_5994ffd4c72aa2b780285ae2e3067f860700672d3a9eb701fa1cc7360d447f4f->leave($__internal_5994ffd4c72aa2b780285ae2e3067f860700672d3a9eb701fa1cc7360d447f4f_prof);

    }

    public function getTemplateName()
    {
        return "MrsuhRealEstateBundle:Client:create_client.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  347 => 169,  341 => 168,  331 => 164,  326 => 163,  324 => 162,  315 => 156,  304 => 148,  300 => 147,  291 => 141,  287 => 140,  277 => 133,  272 => 131,  262 => 124,  257 => 122,  248 => 116,  244 => 115,  235 => 109,  230 => 107,  221 => 101,  217 => 100,  208 => 94,  204 => 93,  194 => 85,  187 => 83,  170 => 81,  166 => 80,  161 => 79,  157 => 78,  142 => 66,  130 => 57,  122 => 52,  114 => 47,  106 => 42,  94 => 33,  89 => 31,  80 => 25,  75 => 23,  66 => 17,  61 => 15,  51 => 8,  44 => 4,  41 => 3,  35 => 2,  11 => 1,);
    }
}
