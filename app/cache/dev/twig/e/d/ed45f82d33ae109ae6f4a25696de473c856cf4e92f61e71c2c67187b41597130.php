<?php

/* MrsuhRealEstateBundle:Client:client.html.twig */
class __TwigTemplate_ed45f82d33ae109ae6f4a25696de473c856cf4e92f61e71c2c67187b41597130 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MrsuhRealEstateBundle::layout.html.twig", "MrsuhRealEstateBundle:Client:client.html.twig", 1);
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
        $__internal_f8e8dead4ab504c8169b015947823c8bfd00390dd8a7d7dfb6cbf601c66d33ff = $this->env->getExtension("native_profiler");
        $__internal_f8e8dead4ab504c8169b015947823c8bfd00390dd8a7d7dfb6cbf601c66d33ff->enter($__internal_f8e8dead4ab504c8169b015947823c8bfd00390dd8a7d7dfb6cbf601c66d33ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MrsuhRealEstateBundle:Client:client.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8e8dead4ab504c8169b015947823c8bfd00390dd8a7d7dfb6cbf601c66d33ff->leave($__internal_f8e8dead4ab504c8169b015947823c8bfd00390dd8a7d7dfb6cbf601c66d33ff_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_98518ece04a327afe4b9a46738d8e911b8d1b4b7ffc4231c673321d2746aa837 = $this->env->getExtension("native_profiler");
        $__internal_98518ece04a327afe4b9a46738d8e911b8d1b4b7ffc4231c673321d2746aa837->enter($__internal_98518ece04a327afe4b9a46738d8e911b8d1b4b7ffc4231c673321d2746aa837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "
    ";
        // line 4
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    <div class=\"row\">
        <div class=\"col-md-2\"><label>Статус клиента</label></div>
        <div class=\"col-md-4\">";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "status", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
    </div>
    <br>
    <a href=\"##\"><b>Данные клиента</b></a>
    <hr>
    <div class=\"row\">
        <div class=\"col-md-2\"><label>ФИО 1*</label></div>
        <div class=\"col-md-4\">";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name1", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
        <div class=\"col-md-2\"><label>Номер телефона 1*</label></div>
        <div class=\"col-md-4\">";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone1", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
    </div>
    <br>

    <div class=\"row\">
        <div class=\"col-md-2\"><label>ФИО 2</label></div>
        <div class=\"col-md-4\">";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name2", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
        <div class=\"col-md-2\"><label>Номер телефона 2</label></div>
        <div class=\"col-md-4\">";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone2", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
    </div>
    <br>

    <div class=\"row\">
        <div class=\"col-md-2\"><label>ФИО 3</label></div>
        <div class=\"col-md-4\">";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name3", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
        <div class=\"col-md-2\"><label>Номер телефона 3</label></div>
        <div class=\"col-md-4\">";
        // line 32
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
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "object_type", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
            </div>
            <br>
            <div class=\"row\">
                <div class=\"col-md-6\"><label>Ипотека</label></div>
                <div class=\"col-md-6\">";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mortgage", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
            </div>
            <br>
            <div class=\"row\">
                <div class=\"col-md-6\"><label>Дата рождения клиента</label></div>
                <div class=\"col-md-6\">";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "birth_day", array()), 'widget', array("attr" => array("class" => "form-control", "readonly" => "readonly")));
        echo "</div>
            </div>
            <br>
            <div class=\"row\">
                <div class=\"col-md-6\"><label>Горячий клиент</label></div>
                <div class=\"col-md-6\">";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hot", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
            </div>
            <br>
        </div>

        <div class=\"col-md-3\">
            <div class=\"row\">
                <div class=\"col-md-4\"><label>Город</label></div>
                <div class=\"col-md-8\">";
        // line 64
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
                    <div id=\"editClient_region_city\" style=\"display: none;\"></div>
                    ";
        // line 76
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["regionsCity"]) ? $context["regionsCity"] : $this->getContext($context, "regionsCity")));
        foreach ($context['_seq'] as $context["id"] => $context["city"]) {
            // line 77
            echo "                        <div class=\"region_city\" id=\"region_city_";
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo "\"
                             ";
            // line 78
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "city", array()), "vars", array()), "value", array()) != $context["id"])) {
                echo "style=\"display: none;\"";
            }
            echo ">
                            ";
            // line 79
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($context["city"]);
            foreach ($context['_seq'] as $context["key"] => $context["name"]) {
                // line 80
                echo "                                <input type=\"checkbox\" id=\"editClient_region_city_";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\"
                                       name=\"editClient[region_city][";
                // line 81
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "]\"
                                       value=";
                // line 82
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo " ";
                if (twig_in_filter($context["key"], (isset($context["clientRegionsCity"]) ? $context["clientRegionsCity"] : $this->getContext($context, "clientRegionsCity")))) {
                    echo " checked ";
                }
                echo "> <label
                                    for=\"editClient_region_city_";
                // line 83
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "</label><br>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            echo "                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['city'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "                </div>
            </div>
        </div>


        <div class=\"col-md-5\">
            <div class=\"row\">
                <div class=\"col-md-4\"><label>Цена</label></div>
                <div class=\"col-md-4\">";
        // line 95
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "price_from", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
                <div class=\"col-md-4\">";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "price_to", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
            </div>
            <br>

            <div class=\"row\">
                <div class=\"col-md-4\"><label>Количество комнат</label></div>
                <div class=\"col-md-4\">";
        // line 102
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "room_from", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
                <div class=\"col-md-4\">";
        // line 103
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "room_to", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
            </div>
            <br>

            <div class=\"row\">
                <div class=\"col-md-4\"><label>Общая площадь</label></div>
                <div class=\"col-md-4\">";
        // line 109
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "common_area_from", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                <div class=\"col-md-4\">";
        // line 111
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "common_area_to", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
            </div>
            <br>

            <div class=\"row\">
                <div class=\"col-md-4\"><label>Жилая площадь</label></div>
                <div class=\"col-md-4\">";
        // line 117
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "live_area_from", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
                <div class=\"col-md-4\">";
        // line 118
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "live_area_to", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
            </div>
            <br>

            <div class=\"row\">
                <div class=\"col-md-4\"><label>Площадь кухни</label></div>
                <div class=\"col-md-4\">";
        // line 124
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "kitchen_area_from", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                <div class=\"col-md-4\">";
        // line 126
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "kitchen_area_to", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>
            <br>

            <div class=\"row\">
                <div class=\"col-md-4\"><label>Земельный участок</label></div>
                <div class=\"col-md-4\">";
        // line 133
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "section_area_from", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                <div class=\"col-md-4\">";
        // line 135
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "section_area_to", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>
            <br>

            <div class=\"row\">
                <div class=\"col-md-4\"><label>Этаж</label></div>
                <div class=\"col-md-4\">";
        // line 142
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "floor_from", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
                <div class=\"col-md-4\">";
        // line 143
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "floor_to", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
            </div>
            <br>

            <div class=\"row\">
                <div class=\"col-md-4\"><label>Этажность дома</label></div>
                <div class=\"col-md-4\">";
        // line 149
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "floors_from", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
                <div class=\"col-md-4\">";
        // line 150
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
        // line 158
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "comment", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
        </div>
    <br>
        <div class=\"row\">
            <div class=\"col-md-4\"><label>Просмотренные объявления</label></div>
            <div class=\"col-md-8\">";
        // line 163
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "reviewed_adverts", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>
        <br>
        <div class=\"row\">
            <div class=\"col-md-12\">
                ";
        // line 169
        if ( !twig_test_empty((isset($context["reviewedAdverts"]) ? $context["reviewedAdverts"] : $this->getContext($context, "reviewedAdverts")))) {
            // line 170
            echo "                    <table class=\"table table-bordered\">
                        <tr class=\"text-center active\">
                            <td>#</td>
                            <td>Дата создания</td>
                            <td>Специалист</td>
                        </tr>

                        ";
            // line 177
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["reviewedAdverts"]) ? $context["reviewedAdverts"] : $this->getContext($context, "reviewedAdverts")));
            foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
                // line 178
                echo "                            <tr class=\"text-center\">
                                <td><a href=\"";
                // line 179
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("advert", array("id" => $this->getAttribute($context["advert"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "id", array()), "html", null, true);
                echo "</a></td>
                                <td>";
                // line 180
                if ((null != $this->getAttribute($context["advert"], "createTime", array()))) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["advert"], "createTime", array()), "d.m.Y"), "html", null, true);
                }
                echo "</td>
                                <td>";
                // line 181
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["advert"], "user", array()), "lastName", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["advert"], "user", array()), "firstName", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["advert"], "user", array()), "middleName", array()), "html", null, true);
                echo "</td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 184
            echo "
                    </table>
                ";
        }
        // line 187
        echo "            </div>
        </div>
    <br>
    <hr>

    <div>
        <div class=\"row\">
            <div class=\"col-md-3\"><label>Пользователь</label></div>
            <div class=\"col-md-3\"><label>Время создания</label></div>
            <div class=\"col-md-3\"><label>Время обновления</label></div>
            <div class=\"col-md-3\"><label>Время показа</label></div>
        </div>
    </div>
    <div>
        <div class=\"row\">
            <div class=\"col-md-3\">";
        // line 202
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "user", array()), "lastName", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "user", array()), "firstName", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "user", array()), "middleName", array()), "html", null, true);
        echo "</div>
            <div class=\"col-md-3\"> ";
        // line 203
        if ((null != $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "createTime", array()))) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "createTime", array()), "d.m.Y"), "html", null, true);
        }
        echo "</div>
            <div class=\"col-md-3\"> ";
        // line 204
        if ((null != $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "updateTime", array()))) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "updateTime", array()), "d.m.Y"), "html", null, true);
        }
        echo "</div>
            <div class=\"col-md-3\"> ";
        // line 205
        if ((null != $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "showTime", array()))) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "showTime", array()), "d.m.Y"), "html", null, true);
        }
        echo "</div>
        </div>
    </div>
    <hr>
    <br>

    <button type=\"button\" class=\"btn btn-success btn-width\" id=\"submit_edit_client\">Cохранить</button>
    <a href=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("find_advert_by_client", array("clientId" => $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary btn-width\">Поиск поклиенту</a>

    ";
        // line 214
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit", array()), 'widget', array("attr" => array("hidden" => "true")));
        echo "
    ";
        // line 215
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_98518ece04a327afe4b9a46738d8e911b8d1b4b7ffc4231c673321d2746aa837->leave($__internal_98518ece04a327afe4b9a46738d8e911b8d1b4b7ffc4231c673321d2746aa837_prof);

    }

    // line 219
    public function block_js($context, array $blocks = array())
    {
        $__internal_9c7319b653f848ded0715ae70f64eaa3a445dc5b34d071b86c98609df07b1144 = $this->env->getExtension("native_profiler");
        $__internal_9c7319b653f848ded0715ae70f64eaa3a445dc5b34d071b86c98609df07b1144->enter($__internal_9c7319b653f848ded0715ae70f64eaa3a445dc5b34d071b86c98609df07b1144_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 220
        echo "    <script>
        \$(function () {
            var birth_date = \$('#editClient_birth_day');
            birth_date.datepicker({dateFormat: 'dd.mm.yy'});

            var region_city = \$('#editClient_region_city');

            var select_city = \$('#editClient_city');
            select_city.change(function () {
                set_region_city();
            });

            var submit = \$('#editClient_submit');
            var submit_button = \$('#submit_edit_client');

            var set_region_city = function () {
                \$('.region_city').hide();
                \$('#region_city_' + select_city.val()).show();
            };

            set_region_city();

            submit_button.click(function () {
                region_city.clone(\$('.region_city:visible input'));

                submit.click();
            });

            \$('#editClient_price_from').on('keyup', function(){
                myPriceFormat(\$(this));
            });

            \$('#editClient_price_to').on('keyup', function(){
                myPriceFormat(\$(this));
            });

            myPriceFormat(\$('#editClient_price_from'));
            myPriceFormat(\$('#editClient_price_to'));
        });
    </script>
";
        
        $__internal_9c7319b653f848ded0715ae70f64eaa3a445dc5b34d071b86c98609df07b1144->leave($__internal_9c7319b653f848ded0715ae70f64eaa3a445dc5b34d071b86c98609df07b1144_prof);

    }

    public function getTemplateName()
    {
        return "MrsuhRealEstateBundle:Client:client.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  468 => 220,  462 => 219,  452 => 215,  448 => 214,  443 => 212,  431 => 205,  425 => 204,  419 => 203,  411 => 202,  394 => 187,  389 => 184,  376 => 181,  370 => 180,  364 => 179,  361 => 178,  357 => 177,  348 => 170,  346 => 169,  337 => 163,  329 => 158,  318 => 150,  314 => 149,  305 => 143,  301 => 142,  291 => 135,  286 => 133,  276 => 126,  271 => 124,  262 => 118,  258 => 117,  249 => 111,  244 => 109,  235 => 103,  231 => 102,  222 => 96,  218 => 95,  208 => 87,  201 => 85,  191 => 83,  183 => 82,  179 => 81,  174 => 80,  170 => 79,  164 => 78,  159 => 77,  155 => 76,  140 => 64,  129 => 56,  121 => 51,  113 => 46,  105 => 41,  93 => 32,  88 => 30,  79 => 24,  74 => 22,  65 => 16,  60 => 14,  50 => 7,  44 => 4,  41 => 3,  35 => 2,  11 => 1,);
    }
}
