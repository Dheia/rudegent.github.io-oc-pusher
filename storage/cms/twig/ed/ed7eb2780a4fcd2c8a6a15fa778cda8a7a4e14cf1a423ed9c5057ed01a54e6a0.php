<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* /Applications/MAMP/htdocs/test/themes/spotlayer/pages/dashboard/profile.htm */
class __TwigTemplate_191266ea244efa5fdc892b4899be08b535e234c2b547efb5e9f0f4d780729da7 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!--Begin::App-->
<div class=\"kt-grid kt-grid--desktop kt-grid--ver kt-grid--ver-desktop kt-app\">
    ";
        // line 3
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("profilemenu"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 4
        echo "
    <!--Begin:: App Content-->
    <div class=\"kt-grid__item kt-grid__item--fluid kt-app__content\">
        ";
        // line 7
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 7), "page", [], "any", false, false, false, 7))) {
            // line 8
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 8) == 51)) {
                // line 9
                echo "                <div class=\"row\">
                    <div class=\"col-xl-12\">
                        <!--begin:: Widgets/Order Statistics-->
                        <div class=\"kt-portlet kt-portlet--height-fluid\">
                            <div class=\"kt-portlet__head\">
                                <div class=\"kt-portlet__head-label\">
                                    <h3 class=\"kt-portlet__head-title\">";
                // line 15
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Orders Statistics"]);
                echo "</h3>
                                </div>
                            </div>
                            <div class=\"kt-portlet__body kt-portlet__body--fluid\">
                                <div class=\"kt-widget12\">
                                    <div class=\"kt-widget12__content\">
                                        <div class=\"kt-widget12__item\">
                                            <div class=\"kt-widget12__info\">
                                                <span class=\"kt-widget12__desc\">Annual Taxes EMS</span>
                                                <span class=\"kt-widget12__value\">\$400,000</span>
                                            </div>

                                            <div class=\"kt-widget12__info\">
                                                <span class=\"kt-widget12__desc\">Finance Review Date</span>
                                                <span class=\"kt-widget12__value\">July 24,2019</span>
                                            </div>
                                        </div>
                                        <div class=\"kt-widget12__item\">
                                            <div class=\"kt-widget12__info\">
                                                <span class=\"kt-widget12__desc\">Avarage Revenue</span>
                                                <span class=\"kt-widget12__value\">\$60M</span>
                                            </div>
                                            <div class=\"kt-widget12__info\">
                                                <span class=\"kt-widget12__desc\">Revenue Margin</span>
                                                <div class=\"kt-widget12__progress\">
                                                    <div class=\"progress kt-progress--sm\">
                                                        <div class=\"progress-bar kt-bg-brand\" role=\"progressbar\" style=\"width: 40%;\" aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                                    </div>
                                                    <span class=\"kt-widget12__stat\">
                                                        40%
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"kt-widget12__chart\" style=\"height:100px;\">
                                        <canvas id=\"kt_chart_order_statistics\"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end:: Widgets/Order Statistics-->
                    </div>
                </div>
            ";
            }
            // line 60
            echo "            <div class=\"row\">
                <div class=\"col-xl-6\">
                    <!--begin:: Widgets/Last Updates-->
                    <div class=\"kt-portlet kt-portlet--height-fluid\">
                        <div class=\"kt-portlet__head\">
                            <div class=\"kt-portlet__head-label\">
                                <h3 class=\"kt-portlet__head-title\">";
            // line 66
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Latest Updates"]);
            echo "</h3>
                            </div>
                        </div>
                        <div class=\"kt-portlet__body\">
                            <div class=\"kt-scroll\" data-scroll=\"true\" style=\"height: 300px\">
                                ";
            // line 71
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "activities", [], "any", false, false, false, 71), "orderBy", [0 => "id", 1 => "desc"], "method", false, false, false, 71), "take", [0 => 20], "method", false, false, false, 71));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["activity"]) {
                // line 72
                echo "                                    <!--begin::widget 12-->
                                    <div class=\"kt-widget4\">
                                        <div class=\"kt-widget4__item\">
                                            <span class=\"kt-widget4__icon\"><i class=\"flaticon-pie-chart-1 kt-font-info\"></i></span>
                                            <a href=\"#\" class=\"kt-widget4__title kt-widget4__title--light\">";
                // line 76
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activity"], "description", [], "any", false, false, false, 76), "html", null, true);
                echo "</a>
                                            <span class=\"kt-widget4__number kt-font-info\">#";
                // line 77
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activity"], "order_id", [], "any", false, false, false, 77), "html", null, true);
                echo "</span>
                                        </div>
                                    </div>
                                    <!--end::Widget 12-->
                                ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 82
                echo "                                    <div class=\"kt-notification\">
                                        <div class=\"kt-notification__item\">
                                            <div class=\"kt-notification__item-icon\">
                                                <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\" class=\"kt-svg-icon kt-svg-icon--brand\">
                                                    <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                                        <rect x=\"0\" y=\"0\" width=\"24\" height=\"24\"/>
                                                        <path d=\"M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z\" fill=\"#000000\"/>
                                                        <rect fill=\"#000000\" opacity=\"0.3\" transform=\"translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519) \" x=\"16.3255682\" y=\"2.94551858\" width=\"3\" height=\"18\" rx=\"1\"/>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class=\"kt-notification__item-details\">
                                                <div class=\"kt-notification__item-title\">
                                                    ";
                // line 95
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No activities found"]);
                echo ".
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo "                            </div>
                        </div>
                    </div>
                    <!--end:: Widgets/Last Updates-->
                </div>
                <div class=\"col-xl-6\">
                    <!--begin:: Widgets/Last Updates-->
                    <div class=\"kt-portlet kt-portlet--height-fluid\">
                        <div class=\"kt-portlet__head\">
                            <div class=\"kt-portlet__head-label\">
                                <h3 class=\"kt-portlet__head-title\">";
            // line 111
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Notifications"]);
            echo "</h3>
                            </div>
                        </div>
                        <div class=\"kt-portlet__body\">
                            <div class=\"kt-scroll\" data-scroll=\"true\" style=\"height: 300px\">
                                ";
            // line 116
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "notifications", [], "any", false, false, false, 116), "where", [0 => "read_at", 1 => null], "method", false, false, false, 116));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["notification"]) {
                // line 117
                echo "                                    <!--begin::widget 12-->
                                    <!--begin::widget 12-->
                                    <div class=\"kt-notification\">
                                        <a href=\"";
                // line 120
                echo url("dashboard/notifications");
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["notification"], "id", [], "any", false, false, false, 120), "html", null, true);
                echo "\" class=\"kt-notification__item\">
                                            <div class=\"kt-notification__item-icon\">
                                                <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\" class=\"kt-svg-icon kt-svg-icon--brand\">
                                                    <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                                        <rect x=\"0\" y=\"0\" width=\"24\" height=\"24\"/>
                                                        <path d=\"M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z\" fill=\"#000000\"/>
                                                        <rect fill=\"#000000\" opacity=\"0.3\" transform=\"translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519) \" x=\"16.3255682\" y=\"2.94551858\" width=\"3\" height=\"18\" rx=\"1\"/>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class=\"kt-notification__item-details\">
                                                <div class=\"kt-notification__item-title\">
                                                    ";
                // line 132
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["notification"], "body", [], "any", false, false, false, 132)]);
                echo "
                                                </div>
                                                <div class=\"kt-notification__item-time\">
                                                    ";
                // line 135
                if (call_user_func_array($this->env->getFilter('time_diff')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["notification"], "created_at", [], "any", false, false, false, 135)])) {
                    // line 136
                    echo "                                                        ";
                    echo call_user_func_array($this->env->getFilter('time_diff')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["notification"], "created_at", [], "any", false, false, false, 136)]);
                    echo "
                                                    ";
                } else {
                    // line 138
                    echo "                                                        ";
                    echo call_user_func_array($this->env->getFilter('time_diff')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["notification"], "created_at", [], "any", false, false, false, 138)]);
                    echo "
                                                    ";
                }
                // line 140
                echo "                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!--end::Widget 12-->
                                ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 146
                echo "                                    <div class=\"kt-notification\">
                                        <div class=\"kt-notification__item\">
                                            <div class=\"kt-notification__item-icon\">
                                                <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\" class=\"kt-svg-icon kt-svg-icon--brand\">
                                                    <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                                        <rect x=\"0\" y=\"0\" width=\"24\" height=\"24\"/>
                                                        <path d=\"M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z\" fill=\"#000000\"/>
                                                        <rect fill=\"#000000\" opacity=\"0.3\" transform=\"translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519) \" x=\"16.3255682\" y=\"2.94551858\" width=\"3\" height=\"18\" rx=\"1\"/>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class=\"kt-notification__item-details\">
                                                <div class=\"kt-notification__item-title\">
                                                    ";
                // line 159
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No new notifications found"]);
                echo ".
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 165
            echo "                            </div>
                        </div>
                    </div>
                    <!--end:: Widgets/Last Updates-->
                </div>
            </div>
        ";
        }
        // line 172
        echo "        ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 172), "page", [], "any", false, false, false, 172) == "edit")) {
            // line 173
            echo "            <div class=\"row\">
                <div class=\"col-xl-12\">
                    <div class=\"kt-portlet\">
                        <div class=\"kt-portlet__head\">
                            <div class=\"kt-portlet__head-label\">
                                <h3 class=\"kt-portlet__head-title\">";
            // line 178
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Personal Information"]);
            echo " <small>";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["update your personal informaiton"]);
            echo "</small></h3>
                            </div>
                        </div>

                        ";
            // line 182
            echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), ["ajax", "onSave", ["id" => "kt_form", "class" => "kt-form kt-form--label-right"]]);
            echo "
                            <div class=\"kt-portlet__body\">
                                <div class=\"kt-section kt-section--first\">
                                    <div class=\"kt-section__body\">
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 187
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Avatar"]);
            echo "</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                  <div class=\"kt-avatar kt-avatar--outline\" id=\"kt_user_avatar\">
                                                      ";
            // line 190
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["avatar"] ?? null) . "::image-single")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 191
            echo "                                                  </div>
                                            </div>
                                        </div>

                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 196
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Full Name"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                   <input type=\"text\" class=\"form-control\" name=\"name\" value=\"";
            // line 198
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "name", [], "any", false, false, false, 198), "html", null, true);
            echo "\" required />
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 202
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Email"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <input type=\"email\" class=\"form-control\" name=\"email\" value=\"";
            // line 204
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "email", [], "any", false, false, false, 204), "html", null, true);
            echo "\" required />
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 208
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Password"]);
            echo "</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <input type=\"password\" class=\"form-control\" name=\"password\" />
                                                <span class=\"text-muted\">";
            // line 211
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Only fill it if you need to change your password"]);
            echo "</span>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 215
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Password Confirmation"]);
            echo "</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <input type=\"password\" class=\"form-control\" name=\"password_confirmation\" />
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 221
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Mobile Number"]);
            echo "</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <input type=\"text\" class=\"form-control\" name=\"mobile\"  value=\"";
            // line 223
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "mobile", [], "any", false, false, false, 223), "html", null, true);
            echo "\"/>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 227
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Phone Number"]);
            echo "</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <input type=\"text\" class=\"form-control\" name=\"phone\"  value=\"";
            // line 229
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "phone", [], "any", false, false, false, 229), "html", null, true);
            echo "\"/>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 233
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Country"]);
            echo "</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <select class=\"form-control\" id=\"country_id\" data-live-search=\"true\" name=\"country_id\">
                                                    <option data-hidden=\"true\"></option>
                                                    ";
            // line 237
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                // line 238
                echo "                                                        <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["country"], "id", [], "any", false, false, false, 238), "html", null, true);
                echo "\" ";
                if ((($context["currentLang"] ?? null) != "en")) {
                    echo "data-subtext=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["country"], "lang", [0 => ($context["currentLang"] ?? null)], "method", false, false, false, 238), "name", [], "any", false, false, false, 238), "html", null, true);
                    echo " \"";
                }
                echo " ";
                if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "country_id", [], "any", false, false, false, 238) == twig_get_attribute($this->env, $this->source, $context["country"], "id", [], "any", false, false, false, 238))) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["country"], "lang", [0 => "en"], "method", false, false, false, 238), "name", [], "any", false, false, false, 238), "html", null, true);
                echo "</option>
                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 240
            echo "                                                </select>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 244
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Postal Code"]);
            echo "</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <input type=\"text\" class=\"form-control\" name=\"zip\"  value=\"";
            // line 246
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "zip", [], "any", false, false, false, 246), "html", null, true);
            echo "\"/>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 250
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["State / Region"]);
            echo "</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <select class=\"form-control state_id\" id=\"state_id\" title=\"";
            // line 252
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select country first"]);
            echo "\" name=\"state_id\" data-live-search=\"true\">
                                                    <option data-hidden=\"true\"></option>
                                                    ";
            // line 254
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["getList"] ?? null), "states", [0 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "state_id", [], "any", false, false, false, 254), 1 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "country_id", [], "any", false, false, false, 254)], "method", false, false, false, 254), "html", null, true);
            echo "
                                                </select>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 259
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["City"]);
            echo "</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <select class=\"form-control city\" id=\"city\" title=\"";
            // line 261
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select state first"]);
            echo "\" name=\"city\" data-live-search=\"true\">
                                                    <option data-hidden=\"true\"></option>
                                                    ";
            // line 263
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["getList"] ?? null), "cities", [0 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "city_id", [], "any", false, false, false, 263), 1 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "state_id", [], "any", false, false, false, 263)], "method", false, false, false, 263), "html", null, true);
            echo "
                                                </select>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 268
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Street Address"]);
            echo "</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <input type=\"text\" class=\"form-control\" name=\"street_addr\"  value=\"";
            // line 270
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "street_addr", [], "any", false, false, false, 270), "html", null, true);
            echo "\"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class=\"kt-portlet__foot\">
                                <div class=\"kt-form__actions\">
                                    <div class=\"row\">
                                        <div class=\"col-lg-3 col-xl-3\">
                                        </div>
                                        <div class=\"col-lg-9 col-xl-9\">
                                \t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">";
            // line 283
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Save"]);
            echo "</button>
                                \t\t\t\t\t<span class=\"kt-margin-left-10\">";
            // line 284
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["or"]);
            echo " <a href=\"";
            echo url("dashboard/account");
            echo "\" class=\"kt-link\">";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cancel"]);
            echo "</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        ";
            // line 289
            echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
            echo "
                    </div>
                </div>
            </div>
        ";
        }
        // line 294
        echo "        ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 294), "page", [], "any", false, false, false, 294) == "password")) {
            // line 295
            echo "            <div class=\"row\">
                <div class=\"col-xl-12\">
                    <div class=\"kt-portlet kt-portlet--height-fluid\">
                        <div class=\"kt-portlet__head\">
                            <div class=\"kt-portlet__head-label\">
                                <h3 class=\"kt-portlet__head-title\">";
            // line 300
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Change Password"]);
            echo "<small>";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["change or reset your account password"]);
            echo "</small></h3>
                            </div>
                        </div>
                        <form class=\"kt-form kt-form--label-right\">
                            <div class=\"kt-portlet__body\">
                                <div class=\"kt-section kt-section--first\">
                                    <div class=\"kt-section__body\">
                                        <div class=\"alert alert-solid-danger alert-bold fade show kt-margin-t-20 kt-margin-b-40\" role=\"alert\">
                                            <div class=\"alert-icon\"><i class=\"fa fa-exclamation-triangle\"></i></div>
                                            <div class=\"alert-text\">";
            // line 309
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Configure user passwords to expire periodically. Users will need warning that their passwords are going to expire"]);
            echo ", <br>";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["or they might inadvertently get locked out of the system"]);
            echo "!</div>
                                            <div class=\"alert-close\">
                                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                                    <span aria-hidden=\"true\"><i class=\"la la-close\"></i></span>
                                                </button>
                                            </div>
                                        </div>

                                        <div class=\"row\">
                                            <label class=\"col-xl-3\"></label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <h3 class=\"kt-section__title kt-section__title-sm\">";
            // line 320
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Change Or Recover Your Password"]);
            echo ":</h3>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 324
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Current Password"]);
            echo "</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <input type=\"password\" class=\"form-control\" name=\"old_password\" value=\"\" placeholder=\"";
            // line 326
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Current Password"]);
            echo "\">
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 330
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["New Password"]);
            echo "</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <input type=\"password\" class=\"form-control\" name=\"\"value=\"\" placeholder=\"";
            // line 332
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["New Password"]);
            echo "\">
                                            </div>
                                        </div>
                                        <div class=\"form-group form-group-last row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 336
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Verify Password"]);
            echo "</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <input type=\"password\" class=\"form-control\" value=\"\" placeholder=\"";
            // line 338
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Verify Password"]);
            echo "\">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"kt-portlet__foot\">
                                <div class=\"kt-form__actions\">
                                    <div class=\"row\">
                                        <div class=\"col-lg-3 col-xl-3\">
                                        </div>
                                        <div class=\"col-lg-9 col-xl-9\">
                                            <button type=\"reset\" class=\"btn btn-brand btn-bold\">";
            // line 350
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Change Password"]);
            echo "</button>&nbsp;
                                            <button type=\"reset\" class=\"btn btn-secondary\">";
            // line 351
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cancel"]);
            echo "</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        ";
        }
        // line 361
        echo "        ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 361), "page", [], "any", false, false, false, 361) == "addresses")) {
            // line 362
            echo "            <div class=\"row\">
                <div class=\"col-xl-12\">
                    <div class=\"kt-portlet kt-portlet--height-fluid\">
                        <div class=\"kt-portlet__head\">
                            <div class=\"kt-portlet__head-label\">
                                ";
            // line 367
            if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 367) == 5)) {
                // line 368
                echo "                                    <h3 class=\"kt-portlet__head-title\">";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Addresses"]);
                echo "<small>";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Your addresses that you will ship from or to"]);
                echo "</small></h3>
                                ";
            } else {
                // line 370
                echo "                                    <h3 class=\"kt-portlet__head-title\">";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Covered Areas"]);
                echo "<small>";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Your covered areas that you can deliver from or to"]);
                echo "</small></h3>
                                ";
            }
            // line 372
            echo "                            </div>
                        </div>
                        ";
            // line 374
            echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), ["ajax", "onPlaces", ["id" => "kt_form", "class" => "kt-form kt-form--label-right", "novalidate" => true]]);
            echo "
                            <div class=\"kt-portlet__body\">
                                <div class=\"kt-section kt-section--first\">
                                    <div class=\"kt-section__body\">
                                        ";
            // line 378
            if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 378) == 5)) {
                // line 379
                echo "                                            <div class=\"alert alert-solid-info alert-bold fade show kt-margin-t-20 kt-margin-b-40\" role=\"alert\">
                                                <div class=\"alert-icon\"><i class=\"fa fa-exclamation-triangle\"></i></div>
                                                <div class=\"alert-text\">";
                // line 381
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please be aware that your addresses pin on google maps is always very urgent for fast and accurate deliver for your shipments"]);
                echo "</div>
                                                <div class=\"alert-close\">
                                                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                                        <span aria-hidden=\"true\"><i class=\"la la-close\"></i></span>
                                                    </button>
                                                </div>
                                            </div>

                                            <div id=\"kt_repeater_addresses\">
                                                <div class=\"form-group form-group-last row\">
                                                    <div data-repeater-list=\"addresses\" class=\"col-lg-12\">
                                                        <div data-repeater-item class=\"align-items-center first-child\">
                                                            <div class=\"location\">
                                                                <div class=\"row\">
                                                                    <div class=\"form-group col-lg-5\">
                                                                        <label>";
                // line 396
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Address"]);
                echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                                        <input type=\"text\" class=\"form-control address street_addr\" data-location=\"route\" name=\"street_address\" required/>
                                                                        <input type=\"hidden\" class=\"form-control lat\" data-location=\"lat\" name=\"lat\" />
                                                                        <input type=\"hidden\" class=\"form-control lng\" data-location=\"lng\" name=\"lng\" />
                                                                        <input type=\"hidden\" class=\"form-control url\" data-location=\"url\" name=\"url\" />
                                                                    </div>
                                                                    <div class=\"form-group col-lg-4\">
                                                                        <label>";
                // line 403
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Country"]);
                echo "</label>
                                                                        <select class=\"form-control country_id\" data-location=\"country\" data-live-search=\"true\" name=\"country\">
                                                                            <option data-hidden=\"true\"></option>
                                                                            ";
                // line 406
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                    // line 407
                    echo "                                                                                <option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["country"], "id", [], "any", false, false, false, 407), "html", null, true);
                    echo "\" ";
                    if ((($context["currentLang"] ?? null) != "en")) {
                        echo "data-subtext=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["country"], "lang", [0 => ($context["currentLang"] ?? null)], "method", false, false, false, 407), "name", [], "any", false, false, false, 407), "html", null, true);
                        echo " \"";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["country"], "lang", [0 => "en"], "method", false, false, false, 407), "name", [], "any", false, false, false, 407), "html", null, true);
                    echo "</option>
                                                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 409
                echo "                                                                        </select>
                                                                    </div>
                                                                    <div class=\"form-group col-lg-3\">
                                                                        <label>";
                // line 412
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Postal Code"]);
                echo "</label>
                                                                        <input class=\"form-control postal_code\" type=\"text\" data-location=\"postal_code\" name=\"postal_code\" >
                                                                    </div>
                                                                </div>
                                                                <div class=\"row\">
                                                                    <div class=\"form-group col-lg-4\">
                                                                        <label>";
                // line 418
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["State / Region"]);
                echo "</label>
                                                                        <select class=\"form-control state_id\" data-location=\"administrative_area_level_1\" title=\"";
                // line 419
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select country first"]);
                echo "\" name=\"state\" data-live-search=\"true\">
                                                                            <option data-hidden=\"true\"></option>
                                                                            ";
                // line 421
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["states"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["state"]) {
                    // line 422
                    echo "                                                                                <option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["state"], "id", [], "any", false, false, false, 422), "html", null, true);
                    echo "\" ";
                    if ((($context["currentLang"] ?? null) != "en")) {
                        echo "data-subtext=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["state"], "lang", [0 => ($context["currentLang"] ?? null)], "method", false, false, false, 422), "name", [], "any", false, false, false, 422), "html", null, true);
                        echo "\"";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["state"], "lang", [0 => "en"], "method", false, false, false, 422), "name", [], "any", false, false, false, 422), "html", null, true);
                    echo "</option>
                                                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['state'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 424
                echo "                                                                        </select>
                                                                    </div>
                                                                    <div class=\"form-group col-lg-4\">
                                                                        <label>";
                // line 427
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["City"]);
                echo "</label>
                                                                        <select class=\"form-control city_id\" data-location=\"locality\" name=\"city\" title=\"";
                // line 428
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select state first"]);
                echo "\" data-live-search=\"true\">
                                                                            <option data-hidden=\"true\"></option>
                                                                            ";
                // line 430
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["cities"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["city"]) {
                    // line 431
                    echo "                                                                                <option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["city"], "id", [], "any", false, false, false, 431), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["city"], "name", [], "any", false, false, false, 431), "html", null, true);
                    echo "</option>
                                                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['city'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 433
                echo "                                                                        </select>
                                                                    </div>
                                                                    <div class=\"form-group col-lg-4\">
                                                                        <label>";
                // line 436
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["County"]);
                echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                                        <select class=\"form-control area_id\" data-location=\"sublocality\" name=\"county\" title=\"";
                // line 437
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select city first"]);
                echo "\" data-live-search=\"true\" required>
                                                                            <option data-hidden=\"true\"></option>
                                                                            ";
                // line 439
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["areas"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["county"]) {
                    // line 440
                    echo "                                                                                <option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["county"], "id", [], "any", false, false, false, 440), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["county"], "name", [], "any", false, false, false, 440), "html", null, true);
                    echo "</option>
                                                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['county'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 442
                echo "                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class=\"row\">
                                                                    <div class=\"form-group col-lg-12\">
                                                                        <label>";
                // line 447
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Google Map"]);
                echo "</label>
                                                                        <div class=\"col-sm-12 map_canvas\"></div>
                                                                        <span class=\"form-text text-muted\">";
                // line 449
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Change the pin to select the right location"]);
                echo "</span>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class=\"form-group row\">
                                                                <div class=\"col-md-3\">
                                                                    <a href=\"javascript:;\" data-repeater-delete=\"\" class=\"btn-sm btn btn-label-danger btn-bold kt-margin-t-25 delete_btn\">
                                                                        <i class=\"la la-trash-o\"></i>
                                                                        ";
                // line 458
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delete"]);
                echo "
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <script>
                                                            var lat = [];
                                                            var lng = [];
                                                        </script>
                                                        ";
                // line 467
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "addresses", [], "any", false, false, false, 467));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
                    // line 468
                    echo "                                                            <div data-repeater-item class=\"align-items-center\">
                                                                <div class=\"location\">
                                                                    <div class=\"row\">
                                                                        <div class=\"form-group col-lg-5\">
                                                                            <label>";
                    // line 472
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Address"]);
                    echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                                            <input type=\"text\" class=\"form-control address street_addr\" data-location=\"route\" name=\"street_address\" required value=\"";
                    // line 473
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "street", [], "any", false, false, false, 473), "html", null, true);
                    echo "\"/>
                                                                            <input type=\"hidden\" value=\"";
                    // line 474
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "lat", [], "any", false, false, false, 474), "html", null, true);
                    echo "\" class=\"form-control lat\" data-location=\"lat\" name=\"lat\" />
                                                                            <input type=\"hidden\" value=\"";
                    // line 475
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "lng", [], "any", false, false, false, 475), "html", null, true);
                    echo "\" class=\"form-control lng\" data-location=\"lng\" name=\"lng\" />
                                                                            <input type=\"hidden\" value=\"";
                    // line 476
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "url", [], "any", false, false, false, 476), "html", null, true);
                    echo "\" class=\"form-control url\" data-location=\"url\" name=\"url\" />
                                                                        </div>
                                                                        <div class=\"form-group col-lg-4\">
                                                                            <label>";
                    // line 479
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Country"]);
                    echo "</label>
                                                                            <select class=\"form-control country_id\" data-location=\"country\" data-live-search=\"true\" name=\"country\">
                                                                                <option data-hidden=\"true\"></option>
                                                                                ";
                    // line 482
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                        // line 483
                        echo "                                                                                    <option value=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["country"], "id", [], "any", false, false, false, 483), "html", null, true);
                        echo "\" ";
                        if ((($context["currentLang"] ?? null) != "en")) {
                            echo "data-subtext=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["country"], "lang", [0 => ($context["currentLang"] ?? null)], "method", false, false, false, 483), "name", [], "any", false, false, false, 483), "html", null, true);
                            echo "\"";
                        }
                        echo " ";
                        if ((twig_get_attribute($this->env, $this->source, $context["address"], "country", [], "any", false, false, false, 483) == twig_get_attribute($this->env, $this->source, $context["country"], "id", [], "any", false, false, false, 483))) {
                            echo "selected";
                        }
                        echo ">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["country"], "lang", [0 => "en"], "method", false, false, false, 483), "name", [], "any", false, false, false, 483), "html", null, true);
                        echo "</option>
                                                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 485
                    echo "                                                                            </select>
                                                                        </div>
                                                                        <div class=\"form-group col-lg-3\">
                                                                            <label>";
                    // line 488
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Postal Code"]);
                    echo "</label>
                                                                            <input class=\"form-control postal_code\" type=\"text\" data-location=\"postal_code\" value=\"";
                    // line 489
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "zipcode", [], "any", false, false, false, 489), "html", null, true);
                    echo "\"  name=\"postal_code\" >
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"row\">
                                                                        <div class=\"form-group col-lg-4\">
                                                                            <label>";
                    // line 494
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["State / Region"]);
                    echo "</label>
                                                                            <select class=\"form-control state_id\" data-location=\"administrative_area_level_1\" title=\"";
                    // line 495
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select country first"]);
                    echo "\" name=\"state\" data-live-search=\"true\">
                                                                                <option data-hidden=\"true\"></option>
                                                                                ";
                    // line 497
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["getData"] ?? null), "states", [0 => twig_get_attribute($this->env, $this->source, $context["address"], "state", [], "any", false, false, false, 497), 1 => twig_get_attribute($this->env, $this->source, $context["address"], "country", [], "any", false, false, false, 497)], "method", false, false, false, 497), "html", null, true);
                    echo "
                                                                            </select>
                                                                        </div>
                                                                        <div class=\"form-group col-lg-4\">
                                                                            <label>";
                    // line 501
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["City"]);
                    echo "</label>
                                                                            <select class=\"form-control city_id\" data-location=\"locality\" name=\"city\" title=\"";
                    // line 502
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select state first"]);
                    echo "\" data-live-search=\"true\">
                                                                                <option data-hidden=\"true\"></option>
                                                                                ";
                    // line 504
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["getData"] ?? null), "cities", [0 => twig_get_attribute($this->env, $this->source, $context["address"], "city", [], "any", false, false, false, 504), 1 => twig_get_attribute($this->env, $this->source, $context["address"], "state", [], "any", false, false, false, 504)], "method", false, false, false, 504), "html", null, true);
                    echo "
                                                                            </select>
                                                                        </div>
                                                                        <div class=\"form-group col-lg-4\">
                                                                            <label>";
                    // line 508
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["County"]);
                    echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                                            <select class=\"form-control area_id\" data-location=\"sublocality\" name=\"county\" title=\"";
                    // line 509
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select city first"]);
                    echo "\" data-live-search=\"true\" required>
                                                                                <option data-hidden=\"true\"></option>
                                                                                ";
                    // line 511
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["getData"] ?? null), "areas", [0 => twig_get_attribute($this->env, $this->source, $context["address"], "county", [], "any", false, false, false, 511), 1 => twig_get_attribute($this->env, $this->source, $context["address"], "city", [], "any", false, false, false, 511)], "method", false, false, false, 511), "html", null, true);
                    echo "
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"row\">
                                                                        <div class=\"form-group col-lg-12\">
                                                                            <label>";
                    // line 517
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Google Map"]);
                    echo "</label>
                                                                            <div class=\"col-sm-12 map_canvas\"></div>
                                                                            <span class=\"form-text text-muted\">";
                    // line 519
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Change the pin to select the right location"]);
                    echo "</span>
                                                                        </div>
                                                                    </div>
                                                                    <script>
                                                                        lat[";
                    // line 523
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 523), "html", null, true);
                    echo "] = ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "lat", [], "any", false, false, false, 523), "html", null, true);
                    echo ";
                                                                        lng[";
                    // line 524
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 524), "html", null, true);
                    echo "] = ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "lng", [], "any", false, false, false, 524), "html", null, true);
                    echo ";
                                                                    </script>
                                                                </div>

                                                                <div class=\"form-group row\">
                                                                    <div class=\"col-md-3\">
                                                                        <a href=\"javascript:;\" data-repeater-delete=\"\" class=\"btn-sm btn btn-label-danger btn-bold kt-margin-t-25 delete_btn\">
                                                                            <i class=\"la la-trash-o\"></i>
                                                                            ";
                    // line 532
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delete"]);
                    echo "
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 538
                echo "                                                    </div>
                                                 </div>
                                                 <div class=\"form-group form-group-last row\">
                                                     <label class=\"col-xl-12 col-form-label kt-align-right\">
                                                         <a href=\"javascript:;\" data-repeater-create=\"\" class=\"btn btn-bold btn-sm btn-label-brand\">
                                                             <i class=\"la la-plus\"></i> ";
                // line 543
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Add Another Address"]);
                echo "
                                                         </a>
                                                     </label>
                                                </div>
                                            </div>


                                        ";
            } else {
                // line 551
                echo "                                            <div class=\"alert alert-solid-info alert-bold fade show kt-margin-t-20 kt-margin-b-40\" role=\"alert\">
                                                <div class=\"alert-icon\"><i class=\"fa fa-exclamation-triangle\"></i></div>
                                                <div class=\"alert-text\">";
                // line 553
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please be aware that you will be assigned to those places orders"]);
                echo "</div>
                                                <div class=\"alert-close\">
                                                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                                        <span aria-hidden=\"true\"><i class=\"la la-close\"></i></span>
                                                    </button>
                                                </div>
                                            </div>


                                            <div id=\"kt_repeater_places\">
                                                <div class=\"form-group form-group-last row\">
                                                    <div data-repeater-list=\"addresses\" class=\"col-lg-12\">
                                                        <div data-repeater-item class=\"align-items-center first-child\">
                                                            <div class=\"form-group row\">
                                                                <label class=\"col-xl-3 col-lg-3 col-form-label\">";
                // line 567
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Place Type"]);
                echo "</label>
                                                                <div class=\"col-lg-9 col-xl-6\">
                                                                    <div class=\"kt-radio-list\">
                                                                        <label class=\"kt-radio kt-radio--bold kt-radio--dark\">
                                                                            <input type=\"radio\" name=\"type\" class=\"place_type\" value=\"1\" checked required> ";
                // line 571
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Countries"]);
                echo "
                                                                            <span></span>
                                                                        </label>
                                                                        <label class=\"kt-radio kt-radio--bold kt-radio--dark\">
                                                                            <input type=\"radio\" name=\"type\" class=\"place_type\" value=\"2\" required> ";
                // line 575
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["States"]);
                echo "
                                                                            <span></span>
                                                                        </label>
                                                                        <label class=\"kt-radio kt-radio--bold kt-radio--dark\">
                                                                            <input type=\"radio\" name=\"type\" class=\"place_type\" value=\"3\" required> ";
                // line 579
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cities"]);
                echo "
                                                                            <span></span>
                                                                        </label>
                                                                        <label class=\"kt-radio kt-radio--bold kt-radio--dark\">
                                                                            <input type=\"radio\" name=\"type\" class=\"place_type\" value=\"4\" required> ";
                // line 583
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Areas"]);
                echo "
                                                                            <span></span>
                                                                        </label>
                                            \t\t\t\t\t\t</div>
                                                                </div>
                                                            </div>
                                                            <div class=\"row type_1 type_container\">
                                                                <div class=\"form-group col-lg-12\">
                                                                    <label>";
                // line 591
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Country"]);
                echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></label>
                                                                    <select class=\"form-control country_from\" name=\"country\" data-live-search=\"true\" required>
                                                                        <option data-hidden=\"true\"></option>
                                                                        ";
                // line 594
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                    // line 595
                    echo "                                                                            <option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["country"], "id", [], "any", false, false, false, 595), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 595), "html", null, true);
                    echo "</option>
                                                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 597
                echo "                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class=\"row type_2 type_container kt-hidden\">
                                                                <div class=\"form-group col-lg-12\">
                                                                    <label>";
                // line 602
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["State"]);
                echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></label>
                                                                    <select class=\"form-control state_from\" name=\"state\" data-live-search=\"true\" required title=\"";
                // line 603
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select country first"]);
                echo "\">
                                                                        <option data-hidden=\"true\"></option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class=\"row type_3 type_container kt-hidden\">
                                                                <div class=\"form-group col-lg-12\">
                                                                    <label>";
                // line 610
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["City"]);
                echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></label>
                                                                    <select class=\"form-control city_from\" name=\"city\" data-live-search=\"true\" required title=\"";
                // line 611
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select state first"]);
                echo "\">
                                                                        <option data-hidden=\"true\"></option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class=\"row type_4 type_container kt-hidden\">
                                                                <div class=\"form-group col-lg-12\">
                                                                    <label>";
                // line 618
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Area"]);
                echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></label>
                                                                    <select class=\"form-control area_from\" name=\"area\" data-live-search=\"true\" required title=\"";
                // line 619
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select city first"]);
                echo "\">
                                                                        <option data-hidden=\"true\"></option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class=\"form-group row\">
                                                                <div class=\"col-md-3\">
                                                                    <a href=\"javascript:;\" data-repeater-delete=\"\" class=\"btn-sm btn btn-label-danger btn-bold kt-margin-t-25 delete_btn\">
                                                                        <i class=\"la la-trash-o\"></i>
                                                                        ";
                // line 629
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delete"]);
                echo "
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        ";
                // line 634
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "places", [], "any", false, false, false, 634));
                foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
                    // line 635
                    echo "                                                            <div data-repeater-item class=\"align-items-center prev_child\">
                                                                <div class=\"form-group row\">
                                                                    <label class=\"col-xl-3 col-lg-3 col-form-label\">";
                    // line 637
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Place Type"]);
                    echo "</label>
                                                                    <div class=\"col-lg-9 col-xl-6\">
                                                                        <div class=\"kt-radio-list\">
                                                                            <label class=\"kt-radio kt-radio--bold kt-radio--dark\">
                                                                                <input type=\"radio\" name=\"type\" class=\"place_type\" value=\"1\" ";
                    // line 641
                    if ((twig_get_attribute($this->env, $this->source, $context["address"], "type", [], "any", false, false, false, 641) == 1)) {
                        echo "checked";
                    }
                    echo " required> ";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Countries"]);
                    echo "
                                                                                <span></span>
                                                                            </label>
                                                                            <label class=\"kt-radio kt-radio--bold kt-radio--dark\">
                                                                                <input type=\"radio\" name=\"type\" class=\"place_type\" value=\"2\" ";
                    // line 645
                    if ((twig_get_attribute($this->env, $this->source, $context["address"], "type", [], "any", false, false, false, 645) == 2)) {
                        echo "checked";
                    }
                    echo " required> ";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["States"]);
                    echo "
                                                                                <span></span>
                                                                            </label>
                                                                            <label class=\"kt-radio kt-radio--bold kt-radio--dark\">
                                                                                <input type=\"radio\" name=\"type\" class=\"place_type\" value=\"3\" ";
                    // line 649
                    if ((twig_get_attribute($this->env, $this->source, $context["address"], "type", [], "any", false, false, false, 649) == 3)) {
                        echo "checked";
                    }
                    echo " required> ";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cities"]);
                    echo "
                                                                                <span></span>
                                                                            </label>
                                                                            <label class=\"kt-radio kt-radio--bold kt-radio--dark\">
                                                                                <input type=\"radio\" name=\"type\" class=\"place_type\" value=\"4\" ";
                    // line 653
                    if ((twig_get_attribute($this->env, $this->source, $context["address"], "type", [], "any", false, false, false, 653) == 4)) {
                        echo "checked";
                    }
                    echo " required> ";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Areas"]);
                    echo "
                                                                                <span></span>
                                                                            </label>
                                                \t\t\t\t\t\t</div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"row type_1 type_container\">
                                                                    <div class=\"form-group col-lg-12\">
                                                                        <label>";
                    // line 661
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Country"]);
                    echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></label>
                                                                        <select class=\"form-control country_from\" name=\"country\" data-live-search=\"true\" required>
                                                                            <option data-hidden=\"true\"></option>
                                                                            ";
                    // line 664
                    if ((twig_get_attribute($this->env, $this->source, $context["address"], "type", [], "any", false, false, false, 664) == 1)) {
                        // line 665
                        echo "                                                                                ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                            // line 666
                            echo "                                                                                    <option value=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["country"], "id", [], "any", false, false, false, 666), "html", null, true);
                            echo "\" ";
                            if ((twig_get_attribute($this->env, $this->source, $context["address"], "area", [], "any", false, false, false, 666) == twig_get_attribute($this->env, $this->source, $context["country"], "id", [], "any", false, false, false, 666))) {
                                echo "selected";
                            }
                            echo ">";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 666), "html", null, true);
                            echo "</option>
                                                                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 668
                        echo "                                                                            ";
                    } else {
                        // line 669
                        echo "                                                                                ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["getData"] ?? null), "countries", [0 => twig_get_attribute($this->env, $this->source, $context["address"], "area", [], "any", false, false, false, 669), 1 => twig_get_attribute($this->env, $this->source, $context["address"], "type", [], "any", false, false, false, 669)], "method", false, false, false, 669), "html", null, true);
                        echo "
                                                                            ";
                    }
                    // line 671
                    echo "                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class=\"row type_2 type_container ";
                    // line 674
                    if ((twig_get_attribute($this->env, $this->source, $context["address"], "type", [], "any", false, false, false, 674) == 1)) {
                        echo "kt-hidden";
                    }
                    echo "\">
                                                                    <div class=\"form-group col-lg-12\">
                                                                        <label>";
                    // line 676
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["State"]);
                    echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></label>
                                                                        <select class=\"form-control state_from\" name=\"state\" data-live-search=\"true\" required ";
                    // line 677
                    if ((twig_get_attribute($this->env, $this->source, $context["address"], "type", [], "any", false, false, false, 677) == 1)) {
                        echo "title=\"";
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select country first"]);
                        echo "\"";
                    }
                    echo ">
                                                                            <option data-hidden=\"true\"></option>
                                                                            ";
                    // line 679
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["getData"] ?? null), "states", [0 => twig_get_attribute($this->env, $this->source, $context["address"], "area", [], "any", false, false, false, 679), 1 => twig_get_attribute($this->env, $this->source, $context["address"], "type", [], "any", false, false, false, 679)], "method", false, false, false, 679), "html", null, true);
                    echo "
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class=\"row type_3 type_container ";
                    // line 683
                    if (((twig_get_attribute($this->env, $this->source, $context["address"], "type", [], "any", false, false, false, 683) == 2) || (twig_get_attribute($this->env, $this->source, $context["address"], "type", [], "any", false, false, false, 683) == 1))) {
                        echo "kt-hidden";
                    }
                    echo "\">
                                                                    <div class=\"form-group col-lg-12\">
                                                                        <label>";
                    // line 685
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["City"]);
                    echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></label>
                                                                        <select class=\"form-control city_from\" name=\"city\" data-live-search=\"true\" required  ";
                    // line 686
                    if (((twig_get_attribute($this->env, $this->source, $context["address"], "type", [], "any", false, false, false, 686) == 2) || (twig_get_attribute($this->env, $this->source, $context["address"], "type", [], "any", false, false, false, 686) == 1))) {
                        echo "title=\"";
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select state first"]);
                        echo "\"";
                    }
                    echo ">
                                                                            <option data-hidden=\"true\"></option>
                                                                            ";
                    // line 688
                    if (((twig_get_attribute($this->env, $this->source, $context["address"], "type", [], "any", false, false, false, 688) == 2) || (twig_get_attribute($this->env, $this->source, $context["address"], "type", [], "any", false, false, false, 688) == 3))) {
                        // line 689
                        echo "                                                                                ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["getData"] ?? null), "cities", [0 => twig_get_attribute($this->env, $this->source, $context["address"], "area", [], "any", false, false, false, 689), 1 => twig_get_attribute($this->env, $this->source, $context["address"], "type", [], "any", false, false, false, 689)], "method", false, false, false, 689), "html", null, true);
                        echo "
                                                                            ";
                    }
                    // line 691
                    echo "                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class=\"row type_4 type_container ";
                    // line 694
                    if ((((twig_get_attribute($this->env, $this->source, $context["address"], "type", [], "any", false, false, false, 694) == 3) || (twig_get_attribute($this->env, $this->source, $context["address"], "type", [], "any", false, false, false, 694) == 2)) || (twig_get_attribute($this->env, $this->source, $context["address"], "type", [], "any", false, false, false, 694) == 1))) {
                        echo "kt-hidden";
                    }
                    echo "\">
                                                                    <div class=\"form-group col-lg-12\">
                                                                        <label>";
                    // line 696
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Area"]);
                    echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></label>
                                                                        <select class=\"form-control area_from\" name=\"area\" data-live-search=\"true\" required ";
                    // line 697
                    if ((((twig_get_attribute($this->env, $this->source, $context["address"], "type", [], "any", false, false, false, 697) == 3) || (twig_get_attribute($this->env, $this->source, $context["address"], "type", [], "any", false, false, false, 697) == 2)) || (twig_get_attribute($this->env, $this->source, $context["address"], "type", [], "any", false, false, false, 697) == 1))) {
                        echo "title=\"";
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select city first"]);
                        echo "\"";
                    }
                    echo ">
                                                                            <option data-hidden=\"true\"></option>
                                                                            ";
                    // line 699
                    if (((twig_get_attribute($this->env, $this->source, $context["address"], "type", [], "any", false, false, false, 699) == 3) || (twig_get_attribute($this->env, $this->source, $context["address"], "type", [], "any", false, false, false, 699) == 4))) {
                        // line 700
                        echo "                                                                                ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["getData"] ?? null), "areas", [0 => twig_get_attribute($this->env, $this->source, $context["address"], "area", [], "any", false, false, false, 700), 1 => twig_get_attribute($this->env, $this->source, $context["address"], "type", [], "any", false, false, false, 700)], "method", false, false, false, 700), "html", null, true);
                        echo "
                                                                            ";
                    }
                    // line 702
                    echo "                                                                        </select>
                                                                    </div>
                                                                </div>


                                                                <div class=\"form-group row\">
                                                                    <div class=\"col-md-3\">
                                                                        <a href=\"javascript:;\" data-repeater-delete=\"\" class=\"btn-sm btn btn-label-danger btn-bold kt-margin-t-25 delete_btn\">
                                                                            <i class=\"la la-trash-o\"></i>
                                                                            ";
                    // line 711
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delete"]);
                    echo "
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 717
                echo "                                                    </div>
                                                 </div>
                                                 <div class=\"form-group form-group-last row\">
                                                     <label class=\"col-xl-12 col-lg-12 col-form-label kt-align-right\">
                                                         <a href=\"javascript:;\" data-repeater-create=\"\" class=\"btn btn-bold btn-sm btn-label-brand\">
                                                             <i class=\"la la-plus\"></i> ";
                // line 722
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Add Another Place"]);
                echo "
                                                         </a>
                                                     </label>
                                                </div>
                                            </div>
                                        ";
            }
            // line 728
            echo "                                    </div>
                                </div>
                            </div>
                            <div class=\"kt-portlet__foot\">
                                <div class=\"kt-form__actions\">
                                    <div class=\"row\">
                                        <div class=\"col-lg-3 col-xl-3\">
                                        </div>
                                        <div class=\"col-lg-9 col-xl-9\">
                                            <button type=\"submit\" class=\"btn btn-brand btn-bold\">";
            // line 737
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Save"]);
            echo "</button>&nbsp;
                                            <button type=\"reset\" class=\"btn btn-secondary\">";
            // line 738
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cancel"]);
            echo "</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        ";
            // line 743
            echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
            echo "
                    </div>
                </div>
            </div>
        ";
        }
        // line 748
        echo "        ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 748), "page", [], "any", false, false, false, 748) == "settings")) {
            // line 749
            echo "            <div class=\"row\">
                <div class=\"col-xl-12\">
                    <div class=\"kt-portlet kt-portlet--height-fluid\">
                        <div class=\"kt-portlet__head\">
                            <div class=\"kt-portlet__head-label\">
                                <h3 class=\"kt-portlet__head-title\">";
            // line 754
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Settings"]);
            echo " <small>";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["control when and how often system sends emails to you"]);
            echo "</small></h3>
                            </div>
                        </div>
                        <form class=\"kt-form kt-form--label-right\">
                            <div class=\"kt-portlet__body\">
                                <div class=\"kt-section kt-section--first\">
                                    <div class=\"kt-section__body\">
                                        <div class=\"row\">
                                            <label class=\"col-xl-3\"></label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <h3 class=\"kt-section__title kt-section__title-sm\">Setup Email Notification:</h3>
                                            </div>
                                        </div>
                                        <div class=\"form-group form-group-sm row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">Email Notification</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <span class=\"kt-switch\">
    \t\t\t\t\t\t\t\t\t\t\t    <label>
    \t\t\t\t\t\t\t\t\t\t\t\t    <input type=\"checkbox\" checked=\"checked\" name=\"email_notification_1\">
    \t\t\t\t\t\t\t\t\t\t\t    \t<span></span>
                                                    </label>
                                                </span>
                                            </div>
                                        </div>
                                        <div class=\"form-group form-group-last row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">Send Copy To Personal Email</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <span class=\"kt-switch\">
    \t\t\t\t\t\t\t\t\t\t\t\t<label>
    \t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"email_notification_2\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<span></span>
                                                    </label>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class=\"kt-separator kt-separator--border-dashed kt-separator--portlet-fit kt-separator--space-lg\"></div>

                                <div class=\"kt-section kt-section--first\">
                                    <div class=\"kt-section__body\">
                                        <div class=\"row\">
                                            <label class=\"col-xl-3\"></label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <h3 class=\"kt-section__title kt-section__title-sm\">Activity Related Emails:</h3>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">When To Email</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <div class=\"kt-checkbox-list\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\"> You have new notifications.
                                                        <span></span>
                                                    </label>
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\"> You're sent a direct message
                                                        <span></span>
                                                    </label>
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" checked=\"checked\"> Someone adds you as a connection
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"form-group form-group-last row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">When To Escalate Emails</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <div class=\"kt-checkbox-list\">
                                                    <label class=\"kt-checkbox kt-checkbox--brand\">
                                                        <input type=\"checkbox\"> Upon new order.
                                                        <span></span>
                                                    </label>
                                                    <label class=\"kt-checkbox kt-checkbox--brand\">
                                                        <input type=\"checkbox\"> New membership approval
                                                        <span></span>
                                                    </label>
                                                    <label class=\"kt-checkbox kt-checkbox--brand\">
                                                        <input type=\"checkbox\" checked=\"checked\"> Member registration
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class=\"kt-separator kt-separator--border-dashed kt-separator--portlet-fit kt-separator--space-lg\"></div>

                                <div class=\"kt-section kt-section--first\">
                                    <div class=\"kt-section__body\">
                                        <div class=\"row\">
                                            <label class=\"col-xl-3\"></label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <h3 class=\"kt-section__title kt-section__title-sm\">Updates From Keenthemes:</h3>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">Email You With</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <div class=\"kt-checkbox-list\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\"> News about Keenthemes products and feature updates
                                                        <span></span>
                                                    </label>
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\"> Tips on getting more out of Keen
                                                        <span></span>
                                                    </label>
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" checked=\"checked\"> Things you missed since you last logged into Keen
                                                        <span></span>
                                                    </label>
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" checked=\"checked\"> News about Metronic on partner products and other services
                                                        <span></span>
                                                    </label>
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" checked=\"checked\"> Tips on Metronic business products
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"kt-portlet__foot\">
                                <div class=\"kt-form__actions\">
                                    <div class=\"row\">
                                        <div class=\"col-lg-3 col-xl-3\">
                                        </div>
                                        <div class=\"col-lg-9 col-xl-9\">
                                            <button type=\"reset\" class=\"btn btn-brand btn-bold\">Change Password</button>&nbsp;
                                            <button type=\"reset\" class=\"btn btn-secondary\">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        ";
        }
        // line 900
        echo "    </div>
    <!--End:: App Content-->
</div>
<!--End::App-->


";
        // line 906
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('styles'        );
        // line 907
        echo "    <style>
        .map_canvas {
          height: 350px;
        }
    </style>
";
        // line 906
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
        // line 913
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 914
        echo "<script src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/admin/vendors/custom/geocomplete/jquery.geocomplete.js");
        echo "\" type=\"text/javascript\"></script>
<script src=\"https://maps.googleapis.com/maps/api/js?libraries=places&key=";
        // line 915
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "google", [], "any", false, false, false, 915), "map", [], "any", false, false, false, 915), "key", [], "any", false, false, false, 915), "html", null, true);
        echo "\"></script>
<script>
\"use strict\";
// Class definition
var KTUserProfile = function () {
\t// Base elements
\tvar avatar;
\tvar offcanvas;

\t// Private functions
\tvar initAside = function () {
\t\t// Mobile offcanvas for mobile mode
\t\toffcanvas = new KTOffcanvas('kt_user_profile_aside', {
            overlay: true,
            baseClass: 'kt-app__aside',
            closeBy: 'kt_user_profile_aside_close',
            toggleBy: 'kt_subheader_mobile_toggle'
        });
        \$('#kt_subheader_mobile_toggle').show();
\t}

\tvar initUserForm = function() {
\t\tavatar = new KTAvatar('kt_user_avatar');
\t}

\treturn {
\t\t// public functions
\t\tinit: function() {
\t\t\tinitAside();
\t\t\tinitUserForm();
\t\t}
\t};
}();

KTUtil.ready(function() {
\tKTUserProfile.init();

    ";
        // line 952
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 952), "page", [], "any", false, false, false, 952) == "edit")) {
            // line 953
            echo "        \$('body').on('changed.bs.select', '.country_id', function(e, clickedIndex, newValue, oldValue){
            var selected = \$(e.currentTarget).val();
            if(selected != ''){
                \$.request('onListstates', {
                    data: {id: selected},
                    success: function(data) {
                        \$('.state_id').selectpicker(\"destroy\");
                        \$('.state_id').attr('title', '";
            // line 960
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Nothing Selected"]);
            echo "');
                        \$('.state_id').html(data.html);
                        \$('.state_id').selectpicker(\"refresh\");
                    }
                });
            }
        });
        \$('body').on('changed.bs.select', '.state_id', function(e, clickedIndex, newValue, oldValue){
            var selected = \$(e.currentTarget).val();
            if(selected != ''){
                \$.request('onListcities', {
                    data: {id: selected},
                    success: function(data) {
                        \$('.city').selectpicker(\"destroy\");
                        \$('.city').attr('title', '";
            // line 974
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Nothing Selected"]);
            echo "');
                        \$('.city').html(data.html);
                        \$('.city').selectpicker(\"refresh\");
                    }
                });
            }
        });
    ";
        }
        // line 982
        echo "
    //if this.param.page == 'addresses' and user.role_id ==  5
    ";
        // line 984
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 984), "page", [], "any", false, false, false, 984) == "addresses")) {
            // line 985
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 985) == 5)) {
                // line 986
                echo "            \$(\"#kt_repeater_addresses\").repeater({
                initEmpty: false,
                show: function() {
                    var repeater_item = \$(this);
                    repeater_item.find('select').selectpicker('destroy');
                    repeater_item.on('changed.bs.select', '.country_id', function(e, clickedIndex, newValue, oldValue){
                        var selected = \$(e.currentTarget).val();
                        if(selected != ''){
                            \$.request('onListstates', {
                                data: {id: selected},
                                success: function(data) {
                                    repeater_item.find('.state_id').selectpicker(\"destroy\");
                                    repeater_item.find('.state_id').attr('title', '";
                // line 998
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Nothing Selected"]);
                echo "');
                                    repeater_item.find('.state_id').html(data.html);
                                    repeater_item.find('.state_id').selectpicker(\"refresh\");
                                }
                            });
                        }
                    });
                    repeater_item.on('changed.bs.select', '.state_id', function(e, clickedIndex, newValue, oldValue){
                        var selected = \$(e.currentTarget).val();
                        if(selected != ''){
                            \$.request('onListcities', {
                                data: {id: selected},
                                success: function(data) {
                                    repeater_item.find('.city').selectpicker(\"destroy\");
                                    repeater_item.find('.city').attr('title', '";
                // line 1012
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Nothing Selected"]);
                echo "');
                                    repeater_item.find('.city').html(data.html);
                                    repeater_item.find('.city').selectpicker(\"refresh\");
                                }
                            });
                        }
                    });
                    var map_canvas  = repeater_item.find(\".map_canvas\");
                    var map_data    = repeater_item.find(\".location\");
                    repeater_item.find(\".address\").geocomplete({
                        map: map_canvas,
                        mapOptions: {
                            zoom: 18
                        },
                        markerOptions: {
                            draggable: true
                        },
                        details: map_data,
                        detailsAttribute: \"data-location\",
                        autoselect: true,
                    });
                    repeater_item.find(\".address\").bind(\"geocode:dragged\", function(event, latLng){
                        repeater_item.find(\"input[data-location=lat]\").val(latLng.lat());
                        repeater_item.find(\"input[data-location=lng]\").val(latLng.lng());
                    });
                    repeater_item.slideDown();


                    repeater_item.on('changed.bs.select', '.country_id', function(e, clickedIndex, newValue, oldValue){
                        var selected = \$(e.currentTarget).val();
                        if(selected != ''){
                            \$.request('onListstates', {
                                data: {id: selected},
                                success: function(data) {
                                    repeater_item.find('.state_id').selectpicker(\"destroy\");
                                    repeater_item.find('.state_id').attr('title', '";
                // line 1047
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Nothing Selected"]);
                echo "');
                                    repeater_item.find('.state_id').html(data.html);
                                    repeater_item.find('.state_id').selectpicker(\"refresh\");
                                }
                            });
                        }
                    });
                    repeater_item.on('changed.bs.select', '.state_id', function(e, clickedIndex, newValue, oldValue){
                        var selected = \$(e.currentTarget).val();
                        if(selected != ''){
                            \$.request('onListcities', {
                                data: {id: selected},
                                success: function(data) {
                                    repeater_item.find('.city').selectpicker(\"destroy\");
                                    repeater_item.find('.city').attr('title', '";
                // line 1061
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Nothing Selected"]);
                echo "');
                                    repeater_item.find('.city').html(data.html);
                                    repeater_item.find('.city').selectpicker(\"refresh\");
                                }
                            });
                        }
                    });
                },
                hide: function(e) {
                    \$(this).slideUp(e);
                }
            });
            \$('.first-child').remove();
        ";
            } else {
                // line 1075
                echo "            \$(\"#kt_repeater_places\").repeater({
                initEmpty: false,
                show: function() {
                    var repeater_item = \$(this);
                    repeater_item.find('select').next('.dropdown-toggle').remove();
                    repeater_item.find('select').selectpicker('refresh');

                    repeater_item.on('change', '.place_type', function(){
                        repeater_item.find('.type_container').addClass('kt-hidden');
                        for (var i = \$(this).val(); i >= 1; i--) {
                            repeater_item.find('.type_'+i).removeClass('kt-hidden');
                        }
                    });

                    repeater_item.on('changed.bs.select', '.country_from', function(e, clickedIndex, newValue, oldValue){
                        var selected = \$(e.currentTarget).val();
                        if(selected != ''){
                            \$.request('onListstates', {
                                data: {id: selected},
                                success: function(data) {
                                    repeater_item.find('select.state_from').selectpicker(\"destroy\");
                                    repeater_item.find('select.state_from').attr('title', '";
                // line 1096
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Nothing Selected"]);
                echo "');
                                    repeater_item.find('select.state_from').html(data.html);
                                    repeater_item.find('select.state_from').selectpicker(\"refresh\");
                                }
                            });
                        }
                    });
                    repeater_item.on('changed.bs.select', '.country_to', function(e, clickedIndex, newValue, oldValue){
                        var selected = \$(e.currentTarget).val();
                        var parent = \$(e.currentTarget).parent().parent().parent().parent();
                        if(selected != ''){
                            \$.request('onListstates', {
                                data: {id: selected},
                                success: function(data) {
                                    repeater_item.find('select.state_to').selectpicker(\"destroy\");
                                    repeater_item.find('select.state_to').attr('title', '";
                // line 1111
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Nothing Selected"]);
                echo "');
                                    repeater_item.find('select.state_to').html(data.html);
                                    repeater_item.find('select.state_to').selectpicker(\"refresh\");
                                }
                            });
                        }
                    });
                    repeater_item.on('changed.bs.select', '.state_from', function(e, clickedIndex, newValue, oldValue){
                        var selected = \$(e.currentTarget).val();
                        if(selected != ''){
                            \$.request('onListcities', {
                                data: {id: selected},
                                success: function(data) {
                                    repeater_item.find('select.city_from').selectpicker(\"destroy\");
                                    repeater_item.find('select.city_from').attr('title', '";
                // line 1125
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Nothing Selected"]);
                echo "');
                                    repeater_item.find('select.city_from').html(data.html);
                                    repeater_item.find('select.city_from').selectpicker(\"refresh\");
                                }
                            });
                        }
                    });
                    repeater_item.on('changed.bs.select', '.state_to', function(e, clickedIndex, newValue, oldValue){
                        var selected = \$(e.currentTarget).val();
                        if(selected != ''){
                            \$.request('onListcities', {
                                data: {id: selected},
                                success: function(data) {
                                    repeater_item.find('select.city_to').selectpicker(\"destroy\");
                                    repeater_item.find('select.city_to').attr('title', '";
                // line 1139
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Nothing Selected"]);
                echo "');
                                    repeater_item.find('select.city_to').html(data.html);
                                    repeater_item.find('select.city_to').selectpicker(\"refresh\");
                                }
                            });
                        }
                    });
                    repeater_item.on('changed.bs.select', '.city_from', function(e, clickedIndex, newValue, oldValue){
                        var selected = \$(e.currentTarget).val();
                        if(selected != ''){
                            \$.request('onListareas', {
                                data: {id: selected},
                                success: function(data) {
                                    repeater_item.find('select.area_from').selectpicker(\"destroy\");
                                    repeater_item.find('select.area_from').attr('title', '";
                // line 1153
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Nothing Selected"]);
                echo "');
                                    repeater_item.find('select.area_from').html(data.html);
                                    repeater_item.find('select.area_from').selectpicker(\"refresh\");
                                }
                            });
                        }
                    });
                    repeater_item.on('changed.bs.select', '.city_to', function(e, clickedIndex, newValue, oldValue){
                        var selected = \$(e.currentTarget).val();
                        if(selected != ''){
                            \$.request('onListareas', {
                                data: {id: selected},
                                success: function(data) {
                                    repeater_item.find('select.area_to').selectpicker(\"destroy\");
                                    repeater_item.find('select.area_to').attr('title', '";
                // line 1167
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Nothing Selected"]);
                echo "');
                                    repeater_item.find('select.area_to').html(data.html);
                                    repeater_item.find('select.area_to').selectpicker(\"refresh\");
                                }
                            });
                        }
                    });
                    repeater_item.slideDown();
                },
                hide: function(e) {
                    \$(this).slideUp(e);
                }
            });
            \$('.first-child').remove();


            \$('.prev_child').on('change', '.place_type', function(){
                var parent = \$(this).parent().parent().parent().parent().parent();
                parent.find('.type_container').addClass('kt-hidden');
                for (var i = \$(this).val(); i >= 1; i--) {
                    parent.find('.type_'+i).removeClass('kt-hidden');
                }
            });

            \$('.prev_child').on('changed.bs.select', '.country_from', function(e, clickedIndex, newValue, oldValue){
                var selected = \$(e.currentTarget).val();
                var parent = \$(e.currentTarget).parent().parent().parent().parent();
                if(selected != ''){
                    \$.request('onListstates', {
                        data: {id: selected},
                        success: function(data) {
                            parent.find('select.state_from').selectpicker(\"destroy\");
                            parent.find('select.state_from').attr('title', '";
                // line 1199
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Nothing Selected"]);
                echo "');
                            parent.find('select.state_from').html(data.html);
                            parent.find('select.state_from').selectpicker(\"refresh\");
                        }
                    });
                }
            });
            \$('.prev_child').on('changed.bs.select', '.state_from', function(e, clickedIndex, newValue, oldValue){
                var selected = \$(e.currentTarget).val();
                var parent = \$(e.currentTarget).parent().parent().parent().parent();
                if(selected != ''){
                    \$.request('onListcities', {
                        data: {id: selected},
                        success: function(data) {
                            parent.find('select.city_from').selectpicker(\"destroy\");
                            parent.find('select.city_from').attr('title', '";
                // line 1214
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Nothing Selected"]);
                echo "');
                            parent.find('select.city_from').html(data.html);
                            parent.find('select.city_from').selectpicker(\"refresh\");
                        }
                    });
                }
            });
            \$('.prev_child').on('changed.bs.select', '.city_from', function(e, clickedIndex, newValue, oldValue){
                var selected = \$(e.currentTarget).val();
                var parent = \$(e.currentTarget).parent().parent().parent().parent();
                if(selected != ''){
                    \$.request('onListareas', {
                        data: {id: selected},
                        success: function(data) {
                            parent.find('select.area_from').selectpicker(\"destroy\");
                            parent.find('select.area_from').attr('title', '";
                // line 1229
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Nothing Selected"]);
                echo "');
                            parent.find('select.area_from').html(data.html);
                            parent.find('select.area_from').selectpicker(\"refresh\");
                        }
                    });
                }
            });
        ";
            }
            // line 1237
            echo "    ";
        }
        // line 1238
        echo "});
</script>
";
        // line 913
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/test/themes/spotlayer/pages/dashboard/profile.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2075 => 913,  2071 => 1238,  2068 => 1237,  2057 => 1229,  2039 => 1214,  2021 => 1199,  1986 => 1167,  1969 => 1153,  1952 => 1139,  1935 => 1125,  1918 => 1111,  1900 => 1096,  1877 => 1075,  1860 => 1061,  1843 => 1047,  1805 => 1012,  1788 => 998,  1774 => 986,  1771 => 985,  1769 => 984,  1765 => 982,  1754 => 974,  1737 => 960,  1728 => 953,  1726 => 952,  1686 => 915,  1681 => 914,  1679 => 913,  1677 => 906,  1670 => 907,  1668 => 906,  1660 => 900,  1509 => 754,  1502 => 749,  1499 => 748,  1491 => 743,  1483 => 738,  1479 => 737,  1468 => 728,  1459 => 722,  1452 => 717,  1440 => 711,  1429 => 702,  1423 => 700,  1421 => 699,  1412 => 697,  1408 => 696,  1401 => 694,  1396 => 691,  1390 => 689,  1388 => 688,  1379 => 686,  1375 => 685,  1368 => 683,  1361 => 679,  1352 => 677,  1348 => 676,  1341 => 674,  1336 => 671,  1330 => 669,  1327 => 668,  1312 => 666,  1307 => 665,  1305 => 664,  1299 => 661,  1284 => 653,  1273 => 649,  1262 => 645,  1251 => 641,  1244 => 637,  1240 => 635,  1236 => 634,  1228 => 629,  1215 => 619,  1211 => 618,  1201 => 611,  1197 => 610,  1187 => 603,  1183 => 602,  1176 => 597,  1165 => 595,  1161 => 594,  1155 => 591,  1144 => 583,  1137 => 579,  1130 => 575,  1123 => 571,  1116 => 567,  1099 => 553,  1095 => 551,  1084 => 543,  1077 => 538,  1057 => 532,  1044 => 524,  1038 => 523,  1031 => 519,  1026 => 517,  1017 => 511,  1012 => 509,  1008 => 508,  1001 => 504,  996 => 502,  992 => 501,  985 => 497,  980 => 495,  976 => 494,  968 => 489,  964 => 488,  959 => 485,  938 => 483,  934 => 482,  928 => 479,  922 => 476,  918 => 475,  914 => 474,  910 => 473,  906 => 472,  900 => 468,  883 => 467,  871 => 458,  859 => 449,  854 => 447,  847 => 442,  836 => 440,  832 => 439,  827 => 437,  823 => 436,  818 => 433,  807 => 431,  803 => 430,  798 => 428,  794 => 427,  789 => 424,  772 => 422,  768 => 421,  763 => 419,  759 => 418,  750 => 412,  745 => 409,  728 => 407,  724 => 406,  718 => 403,  708 => 396,  690 => 381,  686 => 379,  684 => 378,  677 => 374,  673 => 372,  665 => 370,  657 => 368,  655 => 367,  648 => 362,  645 => 361,  632 => 351,  628 => 350,  613 => 338,  608 => 336,  601 => 332,  596 => 330,  589 => 326,  584 => 324,  577 => 320,  561 => 309,  547 => 300,  540 => 295,  537 => 294,  529 => 289,  517 => 284,  513 => 283,  497 => 270,  492 => 268,  484 => 263,  479 => 261,  474 => 259,  466 => 254,  461 => 252,  456 => 250,  449 => 246,  444 => 244,  438 => 240,  417 => 238,  413 => 237,  406 => 233,  399 => 229,  394 => 227,  387 => 223,  382 => 221,  373 => 215,  366 => 211,  360 => 208,  353 => 204,  348 => 202,  341 => 198,  336 => 196,  329 => 191,  325 => 190,  319 => 187,  311 => 182,  302 => 178,  295 => 173,  292 => 172,  283 => 165,  271 => 159,  256 => 146,  246 => 140,  240 => 138,  234 => 136,  232 => 135,  226 => 132,  209 => 120,  204 => 117,  199 => 116,  191 => 111,  179 => 101,  167 => 95,  152 => 82,  142 => 77,  138 => 76,  132 => 72,  127 => 71,  119 => 66,  111 => 60,  63 => 15,  55 => 9,  52 => 8,  50 => 7,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!--Begin::App-->
<div class=\"kt-grid kt-grid--desktop kt-grid--ver kt-grid--ver-desktop kt-app\">
    {% partial 'profilemenu' %}

    <!--Begin:: App Content-->
    <div class=\"kt-grid__item kt-grid__item--fluid kt-app__content\">
        {% if this.param.page is empty %}
            {% if user.role_id ==  51 %}
                <div class=\"row\">
                    <div class=\"col-xl-12\">
                        <!--begin:: Widgets/Order Statistics-->
                        <div class=\"kt-portlet kt-portlet--height-fluid\">
                            <div class=\"kt-portlet__head\">
                                <div class=\"kt-portlet__head-label\">
                                    <h3 class=\"kt-portlet__head-title\">{{'Orders Statistics'|__}}</h3>
                                </div>
                            </div>
                            <div class=\"kt-portlet__body kt-portlet__body--fluid\">
                                <div class=\"kt-widget12\">
                                    <div class=\"kt-widget12__content\">
                                        <div class=\"kt-widget12__item\">
                                            <div class=\"kt-widget12__info\">
                                                <span class=\"kt-widget12__desc\">Annual Taxes EMS</span>
                                                <span class=\"kt-widget12__value\">\$400,000</span>
                                            </div>

                                            <div class=\"kt-widget12__info\">
                                                <span class=\"kt-widget12__desc\">Finance Review Date</span>
                                                <span class=\"kt-widget12__value\">July 24,2019</span>
                                            </div>
                                        </div>
                                        <div class=\"kt-widget12__item\">
                                            <div class=\"kt-widget12__info\">
                                                <span class=\"kt-widget12__desc\">Avarage Revenue</span>
                                                <span class=\"kt-widget12__value\">\$60M</span>
                                            </div>
                                            <div class=\"kt-widget12__info\">
                                                <span class=\"kt-widget12__desc\">Revenue Margin</span>
                                                <div class=\"kt-widget12__progress\">
                                                    <div class=\"progress kt-progress--sm\">
                                                        <div class=\"progress-bar kt-bg-brand\" role=\"progressbar\" style=\"width: 40%;\" aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                                    </div>
                                                    <span class=\"kt-widget12__stat\">
                                                        40%
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"kt-widget12__chart\" style=\"height:100px;\">
                                        <canvas id=\"kt_chart_order_statistics\"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end:: Widgets/Order Statistics-->
                    </div>
                </div>
            {% endif %}
            <div class=\"row\">
                <div class=\"col-xl-6\">
                    <!--begin:: Widgets/Last Updates-->
                    <div class=\"kt-portlet kt-portlet--height-fluid\">
                        <div class=\"kt-portlet__head\">
                            <div class=\"kt-portlet__head-label\">
                                <h3 class=\"kt-portlet__head-title\">{{'Latest Updates'|__}}</h3>
                            </div>
                        </div>
                        <div class=\"kt-portlet__body\">
                            <div class=\"kt-scroll\" data-scroll=\"true\" style=\"height: 300px\">
                                {% for activity in user.activities.orderBy('id','desc').take(20) %}
                                    <!--begin::widget 12-->
                                    <div class=\"kt-widget4\">
                                        <div class=\"kt-widget4__item\">
                                            <span class=\"kt-widget4__icon\"><i class=\"flaticon-pie-chart-1 kt-font-info\"></i></span>
                                            <a href=\"#\" class=\"kt-widget4__title kt-widget4__title--light\">{{activity.description}}</a>
                                            <span class=\"kt-widget4__number kt-font-info\">#{{activity.order_id}}</span>
                                        </div>
                                    </div>
                                    <!--end::Widget 12-->
                                {% else %}
                                    <div class=\"kt-notification\">
                                        <div class=\"kt-notification__item\">
                                            <div class=\"kt-notification__item-icon\">
                                                <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\" class=\"kt-svg-icon kt-svg-icon--brand\">
                                                    <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                                        <rect x=\"0\" y=\"0\" width=\"24\" height=\"24\"/>
                                                        <path d=\"M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z\" fill=\"#000000\"/>
                                                        <rect fill=\"#000000\" opacity=\"0.3\" transform=\"translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519) \" x=\"16.3255682\" y=\"2.94551858\" width=\"3\" height=\"18\" rx=\"1\"/>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class=\"kt-notification__item-details\">
                                                <div class=\"kt-notification__item-title\">
                                                    {{'No activities found'|__}}.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                {% endfor %}
                            </div>
                        </div>
                    </div>
                    <!--end:: Widgets/Last Updates-->
                </div>
                <div class=\"col-xl-6\">
                    <!--begin:: Widgets/Last Updates-->
                    <div class=\"kt-portlet kt-portlet--height-fluid\">
                        <div class=\"kt-portlet__head\">
                            <div class=\"kt-portlet__head-label\">
                                <h3 class=\"kt-portlet__head-title\">{{'Notifications'|__}}</h3>
                            </div>
                        </div>
                        <div class=\"kt-portlet__body\">
                            <div class=\"kt-scroll\" data-scroll=\"true\" style=\"height: 300px\">
                                {% for notification in user.notifications.where('read_at', null) %}
                                    <!--begin::widget 12-->
                                    <!--begin::widget 12-->
                                    <div class=\"kt-notification\">
                                        <a href=\"{{url('dashboard/notifications')}}/{{notification.id}}\" class=\"kt-notification__item\">
                                            <div class=\"kt-notification__item-icon\">
                                                <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\" class=\"kt-svg-icon kt-svg-icon--brand\">
                                                    <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                                        <rect x=\"0\" y=\"0\" width=\"24\" height=\"24\"/>
                                                        <path d=\"M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z\" fill=\"#000000\"/>
                                                        <rect fill=\"#000000\" opacity=\"0.3\" transform=\"translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519) \" x=\"16.3255682\" y=\"2.94551858\" width=\"3\" height=\"18\" rx=\"1\"/>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class=\"kt-notification__item-details\">
                                                <div class=\"kt-notification__item-title\">
                                                    {{notification.body|__}}
                                                </div>
                                                <div class=\"kt-notification__item-time\">
                                                    {% if notification.created_at|time_diff %}
                                                        {{notification.created_at|time_diff}}
                                                    {% else %}
                                                        {{notification.created_at|time_diff}}
                                                    {% endif %}
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!--end::Widget 12-->
                                {% else %}
                                    <div class=\"kt-notification\">
                                        <div class=\"kt-notification__item\">
                                            <div class=\"kt-notification__item-icon\">
                                                <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\" class=\"kt-svg-icon kt-svg-icon--brand\">
                                                    <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                                        <rect x=\"0\" y=\"0\" width=\"24\" height=\"24\"/>
                                                        <path d=\"M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z\" fill=\"#000000\"/>
                                                        <rect fill=\"#000000\" opacity=\"0.3\" transform=\"translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519) \" x=\"16.3255682\" y=\"2.94551858\" width=\"3\" height=\"18\" rx=\"1\"/>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class=\"kt-notification__item-details\">
                                                <div class=\"kt-notification__item-title\">
                                                    {{'No new notifications found'|__}}.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                {% endfor %}
                            </div>
                        </div>
                    </div>
                    <!--end:: Widgets/Last Updates-->
                </div>
            </div>
        {% endif %}
        {% if this.param.page == 'edit' %}
            <div class=\"row\">
                <div class=\"col-xl-12\">
                    <div class=\"kt-portlet\">
                        <div class=\"kt-portlet__head\">
                            <div class=\"kt-portlet__head-label\">
                                <h3 class=\"kt-portlet__head-title\">{{'Personal Information'|__}} <small>{{'update your personal informaiton'|__}}</small></h3>
                            </div>
                        </div>

                        {{ form_ajax('onSave', { id: 'kt_form', class:'kt-form kt-form--label-right' }) }}
                            <div class=\"kt-portlet__body\">
                                <div class=\"kt-section kt-section--first\">
                                    <div class=\"kt-section__body\">
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Avatar'|__}}</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                  <div class=\"kt-avatar kt-avatar--outline\" id=\"kt_user_avatar\">
                                                      {% partial avatar ~ '::image-single' %}
                                                  </div>
                                            </div>
                                        </div>

                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Full Name'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                   <input type=\"text\" class=\"form-control\" name=\"name\" value=\"{{item.name}}\" required />
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Email'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <input type=\"email\" class=\"form-control\" name=\"email\" value=\"{{item.email}}\" required />
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Password'|__}}</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <input type=\"password\" class=\"form-control\" name=\"password\" />
                                                <span class=\"text-muted\">{{'Only fill it if you need to change your password'|__}}</span>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Password Confirmation'|__}}</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <input type=\"password\" class=\"form-control\" name=\"password_confirmation\" />
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Mobile Number'|__}}</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <input type=\"text\" class=\"form-control\" name=\"mobile\"  value=\"{{item.mobile}}\"/>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Phone Number'|__}}</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <input type=\"text\" class=\"form-control\" name=\"phone\"  value=\"{{item.phone}}\"/>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Country'|__}}</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <select class=\"form-control\" id=\"country_id\" data-live-search=\"true\" name=\"country_id\">
                                                    <option data-hidden=\"true\"></option>
                                                    {% for country in countries %}
                                                        <option value=\"{{country.id}}\" {% if currentLang != 'en' %}data-subtext=\"{{country.lang(currentLang).name}} \"{% endif %} {% if item.country_id == country.id %}selected{% endif %}>{{country.lang('en').name}}</option>
                                                    {% endfor %}
                                                </select>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Postal Code'|__}}</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <input type=\"text\" class=\"form-control\" name=\"zip\"  value=\"{{item.zip}}\"/>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'State / Region'|__}}</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <select class=\"form-control state_id\" id=\"state_id\" title=\"{{'Please select country first'|__}}\" name=\"state_id\" data-live-search=\"true\">
                                                    <option data-hidden=\"true\"></option>
                                                    {{getList.states(item.state_id,item.country_id)}}
                                                </select>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'City'|__}}</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <select class=\"form-control city\" id=\"city\" title=\"{{'Please select state first'|__}}\" name=\"city\" data-live-search=\"true\">
                                                    <option data-hidden=\"true\"></option>
                                                    {{getList.cities(item.city_id,item.state_id)}}
                                                </select>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Street Address'|__}}</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <input type=\"text\" class=\"form-control\" name=\"street_addr\"  value=\"{{item.street_addr}}\"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class=\"kt-portlet__foot\">
                                <div class=\"kt-form__actions\">
                                    <div class=\"row\">
                                        <div class=\"col-lg-3 col-xl-3\">
                                        </div>
                                        <div class=\"col-lg-9 col-xl-9\">
                                \t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">{{'Save'|__}}</button>
                                \t\t\t\t\t<span class=\"kt-margin-left-10\">{{'or'|__}} <a href=\"{{url('dashboard/account')}}\" class=\"kt-link\">{{'Cancel'|__}}</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        {{ form_close() }}
                    </div>
                </div>
            </div>
        {% endif %}
        {% if this.param.page == 'password' %}
            <div class=\"row\">
                <div class=\"col-xl-12\">
                    <div class=\"kt-portlet kt-portlet--height-fluid\">
                        <div class=\"kt-portlet__head\">
                            <div class=\"kt-portlet__head-label\">
                                <h3 class=\"kt-portlet__head-title\">{{'Change Password'|__}}<small>{{'change or reset your account password'|__}}</small></h3>
                            </div>
                        </div>
                        <form class=\"kt-form kt-form--label-right\">
                            <div class=\"kt-portlet__body\">
                                <div class=\"kt-section kt-section--first\">
                                    <div class=\"kt-section__body\">
                                        <div class=\"alert alert-solid-danger alert-bold fade show kt-margin-t-20 kt-margin-b-40\" role=\"alert\">
                                            <div class=\"alert-icon\"><i class=\"fa fa-exclamation-triangle\"></i></div>
                                            <div class=\"alert-text\">{{'Configure user passwords to expire periodically. Users will need warning that their passwords are going to expire'|__}}, <br>{{'or they might inadvertently get locked out of the system'|__}}!</div>
                                            <div class=\"alert-close\">
                                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                                    <span aria-hidden=\"true\"><i class=\"la la-close\"></i></span>
                                                </button>
                                            </div>
                                        </div>

                                        <div class=\"row\">
                                            <label class=\"col-xl-3\"></label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <h3 class=\"kt-section__title kt-section__title-sm\">{{'Change Or Recover Your Password'|__}}:</h3>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Current Password'|__}}</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <input type=\"password\" class=\"form-control\" name=\"old_password\" value=\"\" placeholder=\"{{'Current Password'|__}}\">
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'New Password'|__}}</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <input type=\"password\" class=\"form-control\" name=\"\"value=\"\" placeholder=\"{{'New Password'|__}}\">
                                            </div>
                                        </div>
                                        <div class=\"form-group form-group-last row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Verify Password'|__}}</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <input type=\"password\" class=\"form-control\" value=\"\" placeholder=\"{{'Verify Password'|__}}\">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"kt-portlet__foot\">
                                <div class=\"kt-form__actions\">
                                    <div class=\"row\">
                                        <div class=\"col-lg-3 col-xl-3\">
                                        </div>
                                        <div class=\"col-lg-9 col-xl-9\">
                                            <button type=\"reset\" class=\"btn btn-brand btn-bold\">{{'Change Password'|__}}</button>&nbsp;
                                            <button type=\"reset\" class=\"btn btn-secondary\">{{'Cancel'|__}}</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        {% endif %}
        {% if this.param.page == 'addresses' %}
            <div class=\"row\">
                <div class=\"col-xl-12\">
                    <div class=\"kt-portlet kt-portlet--height-fluid\">
                        <div class=\"kt-portlet__head\">
                            <div class=\"kt-portlet__head-label\">
                                {% if user.role_id ==  5 %}
                                    <h3 class=\"kt-portlet__head-title\">{{'Addresses'|__}}<small>{{'Your addresses that you will ship from or to'|__}}</small></h3>
                                {% else %}
                                    <h3 class=\"kt-portlet__head-title\">{{'Covered Areas'|__}}<small>{{'Your covered areas that you can deliver from or to'|__}}</small></h3>
                                {% endif %}
                            </div>
                        </div>
                        {{ form_ajax('onPlaces', { id: 'kt_form', class:'kt-form kt-form--label-right', novalidate: true }) }}
                            <div class=\"kt-portlet__body\">
                                <div class=\"kt-section kt-section--first\">
                                    <div class=\"kt-section__body\">
                                        {% if user.role_id ==  5 %}
                                            <div class=\"alert alert-solid-info alert-bold fade show kt-margin-t-20 kt-margin-b-40\" role=\"alert\">
                                                <div class=\"alert-icon\"><i class=\"fa fa-exclamation-triangle\"></i></div>
                                                <div class=\"alert-text\">{{'Please be aware that your addresses pin on google maps is always very urgent for fast and accurate deliver for your shipments'|__}}</div>
                                                <div class=\"alert-close\">
                                                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                                        <span aria-hidden=\"true\"><i class=\"la la-close\"></i></span>
                                                    </button>
                                                </div>
                                            </div>

                                            <div id=\"kt_repeater_addresses\">
                                                <div class=\"form-group form-group-last row\">
                                                    <div data-repeater-list=\"addresses\" class=\"col-lg-12\">
                                                        <div data-repeater-item class=\"align-items-center first-child\">
                                                            <div class=\"location\">
                                                                <div class=\"row\">
                                                                    <div class=\"form-group col-lg-5\">
                                                                        <label>{{'Address'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                                        <input type=\"text\" class=\"form-control address street_addr\" data-location=\"route\" name=\"street_address\" required/>
                                                                        <input type=\"hidden\" class=\"form-control lat\" data-location=\"lat\" name=\"lat\" />
                                                                        <input type=\"hidden\" class=\"form-control lng\" data-location=\"lng\" name=\"lng\" />
                                                                        <input type=\"hidden\" class=\"form-control url\" data-location=\"url\" name=\"url\" />
                                                                    </div>
                                                                    <div class=\"form-group col-lg-4\">
                                                                        <label>{{'Country'|__}}</label>
                                                                        <select class=\"form-control country_id\" data-location=\"country\" data-live-search=\"true\" name=\"country\">
                                                                            <option data-hidden=\"true\"></option>
                                                                            {% for country in countries %}
                                                                                <option value=\"{{country.id}}\" {% if currentLang != 'en' %}data-subtext=\"{{country.lang(currentLang).name}} \"{% endif %}>{{country.lang('en').name}}</option>
                                                                            {% endfor %}
                                                                        </select>
                                                                    </div>
                                                                    <div class=\"form-group col-lg-3\">
                                                                        <label>{{'Postal Code'|__}}</label>
                                                                        <input class=\"form-control postal_code\" type=\"text\" data-location=\"postal_code\" name=\"postal_code\" >
                                                                    </div>
                                                                </div>
                                                                <div class=\"row\">
                                                                    <div class=\"form-group col-lg-4\">
                                                                        <label>{{'State / Region'|__}}</label>
                                                                        <select class=\"form-control state_id\" data-location=\"administrative_area_level_1\" title=\"{{'Please select country first'|__}}\" name=\"state\" data-live-search=\"true\">
                                                                            <option data-hidden=\"true\"></option>
                                                                            {% for state in states %}
                                                                                <option value=\"{{state.id}}\" {% if currentLang != 'en' %}data-subtext=\"{{state.lang(currentLang).name}}\"{% endif %}>{{state.lang('en').name}}</option>
                                                                            {% endfor %}
                                                                        </select>
                                                                    </div>
                                                                    <div class=\"form-group col-lg-4\">
                                                                        <label>{{'City'|__}}</label>
                                                                        <select class=\"form-control city_id\" data-location=\"locality\" name=\"city\" title=\"{{'Please select state first'|__}}\" data-live-search=\"true\">
                                                                            <option data-hidden=\"true\"></option>
                                                                            {% for city in cities %}
                                                                                <option value=\"{{city.id}}\">{{city.name}}</option>
                                                                            {% endfor %}
                                                                        </select>
                                                                    </div>
                                                                    <div class=\"form-group col-lg-4\">
                                                                        <label>{{'County'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                                        <select class=\"form-control area_id\" data-location=\"sublocality\" name=\"county\" title=\"{{'Please select city first'|__}}\" data-live-search=\"true\" required>
                                                                            <option data-hidden=\"true\"></option>
                                                                            {% for county in areas %}
                                                                                <option value=\"{{county.id}}\">{{county.name}}</option>
                                                                            {% endfor %}
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class=\"row\">
                                                                    <div class=\"form-group col-lg-12\">
                                                                        <label>{{'Google Map'|__}}</label>
                                                                        <div class=\"col-sm-12 map_canvas\"></div>
                                                                        <span class=\"form-text text-muted\">{{'Change the pin to select the right location'|__}}</span>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class=\"form-group row\">
                                                                <div class=\"col-md-3\">
                                                                    <a href=\"javascript:;\" data-repeater-delete=\"\" class=\"btn-sm btn btn-label-danger btn-bold kt-margin-t-25 delete_btn\">
                                                                        <i class=\"la la-trash-o\"></i>
                                                                        {{'Delete'|__}}
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <script>
                                                            var lat = [];
                                                            var lng = [];
                                                        </script>
                                                        {% for address in user.addresses %}
                                                            <div data-repeater-item class=\"align-items-center\">
                                                                <div class=\"location\">
                                                                    <div class=\"row\">
                                                                        <div class=\"form-group col-lg-5\">
                                                                            <label>{{'Address'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                                            <input type=\"text\" class=\"form-control address street_addr\" data-location=\"route\" name=\"street_address\" required value=\"{{address.street}}\"/>
                                                                            <input type=\"hidden\" value=\"{{address.lat}}\" class=\"form-control lat\" data-location=\"lat\" name=\"lat\" />
                                                                            <input type=\"hidden\" value=\"{{address.lng}}\" class=\"form-control lng\" data-location=\"lng\" name=\"lng\" />
                                                                            <input type=\"hidden\" value=\"{{address.url}}\" class=\"form-control url\" data-location=\"url\" name=\"url\" />
                                                                        </div>
                                                                        <div class=\"form-group col-lg-4\">
                                                                            <label>{{'Country'|__}}</label>
                                                                            <select class=\"form-control country_id\" data-location=\"country\" data-live-search=\"true\" name=\"country\">
                                                                                <option data-hidden=\"true\"></option>
                                                                                {% for country in countries %}
                                                                                    <option value=\"{{country.id}}\" {% if currentLang != 'en' %}data-subtext=\"{{country.lang(currentLang).name}}\"{% endif %} {% if address.country == country.id %}selected{% endif %}>{{country.lang('en').name}}</option>
                                                                                {% endfor %}
                                                                            </select>
                                                                        </div>
                                                                        <div class=\"form-group col-lg-3\">
                                                                            <label>{{'Postal Code'|__}}</label>
                                                                            <input class=\"form-control postal_code\" type=\"text\" data-location=\"postal_code\" value=\"{{address.zipcode}}\"  name=\"postal_code\" >
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"row\">
                                                                        <div class=\"form-group col-lg-4\">
                                                                            <label>{{'State / Region'|__}}</label>
                                                                            <select class=\"form-control state_id\" data-location=\"administrative_area_level_1\" title=\"{{'Please select country first'|__}}\" name=\"state\" data-live-search=\"true\">
                                                                                <option data-hidden=\"true\"></option>
                                                                                {{getData.states(address.state,address.country)}}
                                                                            </select>
                                                                        </div>
                                                                        <div class=\"form-group col-lg-4\">
                                                                            <label>{{'City'|__}}</label>
                                                                            <select class=\"form-control city_id\" data-location=\"locality\" name=\"city\" title=\"{{'Please select state first'|__}}\" data-live-search=\"true\">
                                                                                <option data-hidden=\"true\"></option>
                                                                                {{getData.cities(address.city,address.state)}}
                                                                            </select>
                                                                        </div>
                                                                        <div class=\"form-group col-lg-4\">
                                                                            <label>{{'County'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                                            <select class=\"form-control area_id\" data-location=\"sublocality\" name=\"county\" title=\"{{'Please select city first'|__}}\" data-live-search=\"true\" required>
                                                                                <option data-hidden=\"true\"></option>
                                                                                {{getData.areas(address.county,address.city)}}
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"row\">
                                                                        <div class=\"form-group col-lg-12\">
                                                                            <label>{{'Google Map'|__}}</label>
                                                                            <div class=\"col-sm-12 map_canvas\"></div>
                                                                            <span class=\"form-text text-muted\">{{'Change the pin to select the right location'|__}}</span>
                                                                        </div>
                                                                    </div>
                                                                    <script>
                                                                        lat[{{loop.index}}] = {{address.lat}};
                                                                        lng[{{loop.index}}] = {{address.lng}};
                                                                    </script>
                                                                </div>

                                                                <div class=\"form-group row\">
                                                                    <div class=\"col-md-3\">
                                                                        <a href=\"javascript:;\" data-repeater-delete=\"\" class=\"btn-sm btn btn-label-danger btn-bold kt-margin-t-25 delete_btn\">
                                                                            <i class=\"la la-trash-o\"></i>
                                                                            {{'Delete'|__}}
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        {% endfor %}
                                                    </div>
                                                 </div>
                                                 <div class=\"form-group form-group-last row\">
                                                     <label class=\"col-xl-12 col-form-label kt-align-right\">
                                                         <a href=\"javascript:;\" data-repeater-create=\"\" class=\"btn btn-bold btn-sm btn-label-brand\">
                                                             <i class=\"la la-plus\"></i> {{'Add Another Address'|__}}
                                                         </a>
                                                     </label>
                                                </div>
                                            </div>


                                        {% else %}
                                            <div class=\"alert alert-solid-info alert-bold fade show kt-margin-t-20 kt-margin-b-40\" role=\"alert\">
                                                <div class=\"alert-icon\"><i class=\"fa fa-exclamation-triangle\"></i></div>
                                                <div class=\"alert-text\">{{'Please be aware that you will be assigned to those places orders'|__}}</div>
                                                <div class=\"alert-close\">
                                                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                                        <span aria-hidden=\"true\"><i class=\"la la-close\"></i></span>
                                                    </button>
                                                </div>
                                            </div>


                                            <div id=\"kt_repeater_places\">
                                                <div class=\"form-group form-group-last row\">
                                                    <div data-repeater-list=\"addresses\" class=\"col-lg-12\">
                                                        <div data-repeater-item class=\"align-items-center first-child\">
                                                            <div class=\"form-group row\">
                                                                <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Place Type'|__}}</label>
                                                                <div class=\"col-lg-9 col-xl-6\">
                                                                    <div class=\"kt-radio-list\">
                                                                        <label class=\"kt-radio kt-radio--bold kt-radio--dark\">
                                                                            <input type=\"radio\" name=\"type\" class=\"place_type\" value=\"1\" checked required> {{\"Countries\"|__}}
                                                                            <span></span>
                                                                        </label>
                                                                        <label class=\"kt-radio kt-radio--bold kt-radio--dark\">
                                                                            <input type=\"radio\" name=\"type\" class=\"place_type\" value=\"2\" required> {{\"States\"|__}}
                                                                            <span></span>
                                                                        </label>
                                                                        <label class=\"kt-radio kt-radio--bold kt-radio--dark\">
                                                                            <input type=\"radio\" name=\"type\" class=\"place_type\" value=\"3\" required> {{\"Cities\"|__}}
                                                                            <span></span>
                                                                        </label>
                                                                        <label class=\"kt-radio kt-radio--bold kt-radio--dark\">
                                                                            <input type=\"radio\" name=\"type\" class=\"place_type\" value=\"4\" required> {{\"Areas\"|__}}
                                                                            <span></span>
                                                                        </label>
                                            \t\t\t\t\t\t</div>
                                                                </div>
                                                            </div>
                                                            <div class=\"row type_1 type_container\">
                                                                <div class=\"form-group col-lg-12\">
                                                                    <label>{{'Country'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></label>
                                                                    <select class=\"form-control country_from\" name=\"country\" data-live-search=\"true\" required>
                                                                        <option data-hidden=\"true\"></option>
                                                                        {% for country in countries %}
                                                                            <option value=\"{{country.id}}\">{{country.name}}</option>
                                                                        {% endfor %}
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class=\"row type_2 type_container kt-hidden\">
                                                                <div class=\"form-group col-lg-12\">
                                                                    <label>{{'State'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></label>
                                                                    <select class=\"form-control state_from\" name=\"state\" data-live-search=\"true\" required title=\"{{'Please select country first'|__}}\">
                                                                        <option data-hidden=\"true\"></option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class=\"row type_3 type_container kt-hidden\">
                                                                <div class=\"form-group col-lg-12\">
                                                                    <label>{{'City'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></label>
                                                                    <select class=\"form-control city_from\" name=\"city\" data-live-search=\"true\" required title=\"{{'Please select state first'|__}}\">
                                                                        <option data-hidden=\"true\"></option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class=\"row type_4 type_container kt-hidden\">
                                                                <div class=\"form-group col-lg-12\">
                                                                    <label>{{'Area'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></label>
                                                                    <select class=\"form-control area_from\" name=\"area\" data-live-search=\"true\" required title=\"{{'Please select city first'|__}}\">
                                                                        <option data-hidden=\"true\"></option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class=\"form-group row\">
                                                                <div class=\"col-md-3\">
                                                                    <a href=\"javascript:;\" data-repeater-delete=\"\" class=\"btn-sm btn btn-label-danger btn-bold kt-margin-t-25 delete_btn\">
                                                                        <i class=\"la la-trash-o\"></i>
                                                                        {{'Delete'|__}}
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        {% for address in user.places %}
                                                            <div data-repeater-item class=\"align-items-center prev_child\">
                                                                <div class=\"form-group row\">
                                                                    <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Place Type'|__}}</label>
                                                                    <div class=\"col-lg-9 col-xl-6\">
                                                                        <div class=\"kt-radio-list\">
                                                                            <label class=\"kt-radio kt-radio--bold kt-radio--dark\">
                                                                                <input type=\"radio\" name=\"type\" class=\"place_type\" value=\"1\" {% if address.type == 1 %}checked{% endif %} required> {{\"Countries\"|__}}
                                                                                <span></span>
                                                                            </label>
                                                                            <label class=\"kt-radio kt-radio--bold kt-radio--dark\">
                                                                                <input type=\"radio\" name=\"type\" class=\"place_type\" value=\"2\" {% if address.type == 2 %}checked{% endif %} required> {{\"States\"|__}}
                                                                                <span></span>
                                                                            </label>
                                                                            <label class=\"kt-radio kt-radio--bold kt-radio--dark\">
                                                                                <input type=\"radio\" name=\"type\" class=\"place_type\" value=\"3\" {% if address.type == 3 %}checked{% endif %} required> {{\"Cities\"|__}}
                                                                                <span></span>
                                                                            </label>
                                                                            <label class=\"kt-radio kt-radio--bold kt-radio--dark\">
                                                                                <input type=\"radio\" name=\"type\" class=\"place_type\" value=\"4\" {% if address.type == 4 %}checked{% endif %} required> {{\"Areas\"|__}}
                                                                                <span></span>
                                                                            </label>
                                                \t\t\t\t\t\t</div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"row type_1 type_container\">
                                                                    <div class=\"form-group col-lg-12\">
                                                                        <label>{{'Country'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></label>
                                                                        <select class=\"form-control country_from\" name=\"country\" data-live-search=\"true\" required>
                                                                            <option data-hidden=\"true\"></option>
                                                                            {% if address.type == 1 %}
                                                                                {% for country in countries %}
                                                                                    <option value=\"{{country.id}}\" {% if address.area == country.id %}selected{% endif %}>{{country.name}}</option>
                                                                                {% endfor %}
                                                                            {% else %}
                                                                                {{getData.countries(address.area,address.type)}}
                                                                            {% endif %}
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class=\"row type_2 type_container {% if address.type == 1 %}kt-hidden{% endif %}\">
                                                                    <div class=\"form-group col-lg-12\">
                                                                        <label>{{'State'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></label>
                                                                        <select class=\"form-control state_from\" name=\"state\" data-live-search=\"true\" required {% if address.type == 1 %}title=\"{{'Please select country first'|__}}\"{% endif %}>
                                                                            <option data-hidden=\"true\"></option>
                                                                            {{getData.states(address.area,address.type)}}
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class=\"row type_3 type_container {% if address.type == 2 or address.type == 1 %}kt-hidden{% endif %}\">
                                                                    <div class=\"form-group col-lg-12\">
                                                                        <label>{{'City'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></label>
                                                                        <select class=\"form-control city_from\" name=\"city\" data-live-search=\"true\" required  {% if address.type == 2 or address.type == 1 %}title=\"{{'Please select state first'|__}}\"{% endif %}>
                                                                            <option data-hidden=\"true\"></option>
                                                                            {% if address.type == 2 or address.type == 3 %}
                                                                                {{getData.cities(address.area,address.type)}}
                                                                            {% endif %}
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class=\"row type_4 type_container {% if address.type == 3 or address.type == 2 or address.type == 1 %}kt-hidden{% endif %}\">
                                                                    <div class=\"form-group col-lg-12\">
                                                                        <label>{{'Area'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></label>
                                                                        <select class=\"form-control area_from\" name=\"area\" data-live-search=\"true\" required {% if address.type == 3 or address.type == 2 or address.type == 1 %}title=\"{{'Please select city first'|__}}\"{% endif %}>
                                                                            <option data-hidden=\"true\"></option>
                                                                            {% if address.type == 3 or address.type == 4 %}
                                                                                {{getData.areas(address.area,address.type)}}
                                                                            {% endif %}
                                                                        </select>
                                                                    </div>
                                                                </div>


                                                                <div class=\"form-group row\">
                                                                    <div class=\"col-md-3\">
                                                                        <a href=\"javascript:;\" data-repeater-delete=\"\" class=\"btn-sm btn btn-label-danger btn-bold kt-margin-t-25 delete_btn\">
                                                                            <i class=\"la la-trash-o\"></i>
                                                                            {{'Delete'|__}}
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        {% endfor %}
                                                    </div>
                                                 </div>
                                                 <div class=\"form-group form-group-last row\">
                                                     <label class=\"col-xl-12 col-lg-12 col-form-label kt-align-right\">
                                                         <a href=\"javascript:;\" data-repeater-create=\"\" class=\"btn btn-bold btn-sm btn-label-brand\">
                                                             <i class=\"la la-plus\"></i> {{'Add Another Place'|__}}
                                                         </a>
                                                     </label>
                                                </div>
                                            </div>
                                        {% endif %}
                                    </div>
                                </div>
                            </div>
                            <div class=\"kt-portlet__foot\">
                                <div class=\"kt-form__actions\">
                                    <div class=\"row\">
                                        <div class=\"col-lg-3 col-xl-3\">
                                        </div>
                                        <div class=\"col-lg-9 col-xl-9\">
                                            <button type=\"submit\" class=\"btn btn-brand btn-bold\">{{'Save'|__}}</button>&nbsp;
                                            <button type=\"reset\" class=\"btn btn-secondary\">{{'Cancel'|__}}</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        {{ form_close() }}
                    </div>
                </div>
            </div>
        {% endif %}
        {% if this.param.page == 'settings' %}
            <div class=\"row\">
                <div class=\"col-xl-12\">
                    <div class=\"kt-portlet kt-portlet--height-fluid\">
                        <div class=\"kt-portlet__head\">
                            <div class=\"kt-portlet__head-label\">
                                <h3 class=\"kt-portlet__head-title\">{{'Settings'|__}} <small>{{'control when and how often system sends emails to you'|__}}</small></h3>
                            </div>
                        </div>
                        <form class=\"kt-form kt-form--label-right\">
                            <div class=\"kt-portlet__body\">
                                <div class=\"kt-section kt-section--first\">
                                    <div class=\"kt-section__body\">
                                        <div class=\"row\">
                                            <label class=\"col-xl-3\"></label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <h3 class=\"kt-section__title kt-section__title-sm\">Setup Email Notification:</h3>
                                            </div>
                                        </div>
                                        <div class=\"form-group form-group-sm row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">Email Notification</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <span class=\"kt-switch\">
    \t\t\t\t\t\t\t\t\t\t\t    <label>
    \t\t\t\t\t\t\t\t\t\t\t\t    <input type=\"checkbox\" checked=\"checked\" name=\"email_notification_1\">
    \t\t\t\t\t\t\t\t\t\t\t    \t<span></span>
                                                    </label>
                                                </span>
                                            </div>
                                        </div>
                                        <div class=\"form-group form-group-last row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">Send Copy To Personal Email</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <span class=\"kt-switch\">
    \t\t\t\t\t\t\t\t\t\t\t\t<label>
    \t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"email_notification_2\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<span></span>
                                                    </label>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class=\"kt-separator kt-separator--border-dashed kt-separator--portlet-fit kt-separator--space-lg\"></div>

                                <div class=\"kt-section kt-section--first\">
                                    <div class=\"kt-section__body\">
                                        <div class=\"row\">
                                            <label class=\"col-xl-3\"></label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <h3 class=\"kt-section__title kt-section__title-sm\">Activity Related Emails:</h3>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">When To Email</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <div class=\"kt-checkbox-list\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\"> You have new notifications.
                                                        <span></span>
                                                    </label>
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\"> You're sent a direct message
                                                        <span></span>
                                                    </label>
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" checked=\"checked\"> Someone adds you as a connection
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"form-group form-group-last row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">When To Escalate Emails</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <div class=\"kt-checkbox-list\">
                                                    <label class=\"kt-checkbox kt-checkbox--brand\">
                                                        <input type=\"checkbox\"> Upon new order.
                                                        <span></span>
                                                    </label>
                                                    <label class=\"kt-checkbox kt-checkbox--brand\">
                                                        <input type=\"checkbox\"> New membership approval
                                                        <span></span>
                                                    </label>
                                                    <label class=\"kt-checkbox kt-checkbox--brand\">
                                                        <input type=\"checkbox\" checked=\"checked\"> Member registration
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class=\"kt-separator kt-separator--border-dashed kt-separator--portlet-fit kt-separator--space-lg\"></div>

                                <div class=\"kt-section kt-section--first\">
                                    <div class=\"kt-section__body\">
                                        <div class=\"row\">
                                            <label class=\"col-xl-3\"></label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <h3 class=\"kt-section__title kt-section__title-sm\">Updates From Keenthemes:</h3>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">Email You With</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <div class=\"kt-checkbox-list\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\"> News about Keenthemes products and feature updates
                                                        <span></span>
                                                    </label>
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\"> Tips on getting more out of Keen
                                                        <span></span>
                                                    </label>
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" checked=\"checked\"> Things you missed since you last logged into Keen
                                                        <span></span>
                                                    </label>
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" checked=\"checked\"> News about Metronic on partner products and other services
                                                        <span></span>
                                                    </label>
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" checked=\"checked\"> Tips on Metronic business products
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"kt-portlet__foot\">
                                <div class=\"kt-form__actions\">
                                    <div class=\"row\">
                                        <div class=\"col-lg-3 col-xl-3\">
                                        </div>
                                        <div class=\"col-lg-9 col-xl-9\">
                                            <button type=\"reset\" class=\"btn btn-brand btn-bold\">Change Password</button>&nbsp;
                                            <button type=\"reset\" class=\"btn btn-secondary\">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        {% endif %}
    </div>
    <!--End:: App Content-->
</div>
<!--End::App-->


{% put styles %}
    <style>
        .map_canvas {
          height: 350px;
        }
    </style>
{% endput %}
{% put scripts %}
<script src=\"{{ 'assets/admin/vendors/custom/geocomplete/jquery.geocomplete.js'|theme }}\" type=\"text/javascript\"></script>
<script src=\"https://maps.googleapis.com/maps/api/js?libraries=places&key={{settings.google.map.key}}\"></script>
<script>
\"use strict\";
// Class definition
var KTUserProfile = function () {
\t// Base elements
\tvar avatar;
\tvar offcanvas;

\t// Private functions
\tvar initAside = function () {
\t\t// Mobile offcanvas for mobile mode
\t\toffcanvas = new KTOffcanvas('kt_user_profile_aside', {
            overlay: true,
            baseClass: 'kt-app__aside',
            closeBy: 'kt_user_profile_aside_close',
            toggleBy: 'kt_subheader_mobile_toggle'
        });
        \$('#kt_subheader_mobile_toggle').show();
\t}

\tvar initUserForm = function() {
\t\tavatar = new KTAvatar('kt_user_avatar');
\t}

\treturn {
\t\t// public functions
\t\tinit: function() {
\t\t\tinitAside();
\t\t\tinitUserForm();
\t\t}
\t};
}();

KTUtil.ready(function() {
\tKTUserProfile.init();

    {% if this.param.page == 'edit' %}
        \$('body').on('changed.bs.select', '.country_id', function(e, clickedIndex, newValue, oldValue){
            var selected = \$(e.currentTarget).val();
            if(selected != ''){
                \$.request('onListstates', {
                    data: {id: selected},
                    success: function(data) {
                        \$('.state_id').selectpicker(\"destroy\");
                        \$('.state_id').attr('title', '{{\"Nothing Selected\"|__}}');
                        \$('.state_id').html(data.html);
                        \$('.state_id').selectpicker(\"refresh\");
                    }
                });
            }
        });
        \$('body').on('changed.bs.select', '.state_id', function(e, clickedIndex, newValue, oldValue){
            var selected = \$(e.currentTarget).val();
            if(selected != ''){
                \$.request('onListcities', {
                    data: {id: selected},
                    success: function(data) {
                        \$('.city').selectpicker(\"destroy\");
                        \$('.city').attr('title', '{{\"Nothing Selected\"|__}}');
                        \$('.city').html(data.html);
                        \$('.city').selectpicker(\"refresh\");
                    }
                });
            }
        });
    {% endif %}

    //if this.param.page == 'addresses' and user.role_id ==  5
    {% if this.param.page == 'addresses' %}
        {% if user.role_id ==  5 %}
            \$(\"#kt_repeater_addresses\").repeater({
                initEmpty: false,
                show: function() {
                    var repeater_item = \$(this);
                    repeater_item.find('select').selectpicker('destroy');
                    repeater_item.on('changed.bs.select', '.country_id', function(e, clickedIndex, newValue, oldValue){
                        var selected = \$(e.currentTarget).val();
                        if(selected != ''){
                            \$.request('onListstates', {
                                data: {id: selected},
                                success: function(data) {
                                    repeater_item.find('.state_id').selectpicker(\"destroy\");
                                    repeater_item.find('.state_id').attr('title', '{{\"Nothing Selected\"|__}}');
                                    repeater_item.find('.state_id').html(data.html);
                                    repeater_item.find('.state_id').selectpicker(\"refresh\");
                                }
                            });
                        }
                    });
                    repeater_item.on('changed.bs.select', '.state_id', function(e, clickedIndex, newValue, oldValue){
                        var selected = \$(e.currentTarget).val();
                        if(selected != ''){
                            \$.request('onListcities', {
                                data: {id: selected},
                                success: function(data) {
                                    repeater_item.find('.city').selectpicker(\"destroy\");
                                    repeater_item.find('.city').attr('title', '{{\"Nothing Selected\"|__}}');
                                    repeater_item.find('.city').html(data.html);
                                    repeater_item.find('.city').selectpicker(\"refresh\");
                                }
                            });
                        }
                    });
                    var map_canvas  = repeater_item.find(\".map_canvas\");
                    var map_data    = repeater_item.find(\".location\");
                    repeater_item.find(\".address\").geocomplete({
                        map: map_canvas,
                        mapOptions: {
                            zoom: 18
                        },
                        markerOptions: {
                            draggable: true
                        },
                        details: map_data,
                        detailsAttribute: \"data-location\",
                        autoselect: true,
                    });
                    repeater_item.find(\".address\").bind(\"geocode:dragged\", function(event, latLng){
                        repeater_item.find(\"input[data-location=lat]\").val(latLng.lat());
                        repeater_item.find(\"input[data-location=lng]\").val(latLng.lng());
                    });
                    repeater_item.slideDown();


                    repeater_item.on('changed.bs.select', '.country_id', function(e, clickedIndex, newValue, oldValue){
                        var selected = \$(e.currentTarget).val();
                        if(selected != ''){
                            \$.request('onListstates', {
                                data: {id: selected},
                                success: function(data) {
                                    repeater_item.find('.state_id').selectpicker(\"destroy\");
                                    repeater_item.find('.state_id').attr('title', '{{\"Nothing Selected\"|__}}');
                                    repeater_item.find('.state_id').html(data.html);
                                    repeater_item.find('.state_id').selectpicker(\"refresh\");
                                }
                            });
                        }
                    });
                    repeater_item.on('changed.bs.select', '.state_id', function(e, clickedIndex, newValue, oldValue){
                        var selected = \$(e.currentTarget).val();
                        if(selected != ''){
                            \$.request('onListcities', {
                                data: {id: selected},
                                success: function(data) {
                                    repeater_item.find('.city').selectpicker(\"destroy\");
                                    repeater_item.find('.city').attr('title', '{{\"Nothing Selected\"|__}}');
                                    repeater_item.find('.city').html(data.html);
                                    repeater_item.find('.city').selectpicker(\"refresh\");
                                }
                            });
                        }
                    });
                },
                hide: function(e) {
                    \$(this).slideUp(e);
                }
            });
            \$('.first-child').remove();
        {% else %}
            \$(\"#kt_repeater_places\").repeater({
                initEmpty: false,
                show: function() {
                    var repeater_item = \$(this);
                    repeater_item.find('select').next('.dropdown-toggle').remove();
                    repeater_item.find('select').selectpicker('refresh');

                    repeater_item.on('change', '.place_type', function(){
                        repeater_item.find('.type_container').addClass('kt-hidden');
                        for (var i = \$(this).val(); i >= 1; i--) {
                            repeater_item.find('.type_'+i).removeClass('kt-hidden');
                        }
                    });

                    repeater_item.on('changed.bs.select', '.country_from', function(e, clickedIndex, newValue, oldValue){
                        var selected = \$(e.currentTarget).val();
                        if(selected != ''){
                            \$.request('onListstates', {
                                data: {id: selected},
                                success: function(data) {
                                    repeater_item.find('select.state_from').selectpicker(\"destroy\");
                                    repeater_item.find('select.state_from').attr('title', '{{\"Nothing Selected\"|__}}');
                                    repeater_item.find('select.state_from').html(data.html);
                                    repeater_item.find('select.state_from').selectpicker(\"refresh\");
                                }
                            });
                        }
                    });
                    repeater_item.on('changed.bs.select', '.country_to', function(e, clickedIndex, newValue, oldValue){
                        var selected = \$(e.currentTarget).val();
                        var parent = \$(e.currentTarget).parent().parent().parent().parent();
                        if(selected != ''){
                            \$.request('onListstates', {
                                data: {id: selected},
                                success: function(data) {
                                    repeater_item.find('select.state_to').selectpicker(\"destroy\");
                                    repeater_item.find('select.state_to').attr('title', '{{\"Nothing Selected\"|__}}');
                                    repeater_item.find('select.state_to').html(data.html);
                                    repeater_item.find('select.state_to').selectpicker(\"refresh\");
                                }
                            });
                        }
                    });
                    repeater_item.on('changed.bs.select', '.state_from', function(e, clickedIndex, newValue, oldValue){
                        var selected = \$(e.currentTarget).val();
                        if(selected != ''){
                            \$.request('onListcities', {
                                data: {id: selected},
                                success: function(data) {
                                    repeater_item.find('select.city_from').selectpicker(\"destroy\");
                                    repeater_item.find('select.city_from').attr('title', '{{\"Nothing Selected\"|__}}');
                                    repeater_item.find('select.city_from').html(data.html);
                                    repeater_item.find('select.city_from').selectpicker(\"refresh\");
                                }
                            });
                        }
                    });
                    repeater_item.on('changed.bs.select', '.state_to', function(e, clickedIndex, newValue, oldValue){
                        var selected = \$(e.currentTarget).val();
                        if(selected != ''){
                            \$.request('onListcities', {
                                data: {id: selected},
                                success: function(data) {
                                    repeater_item.find('select.city_to').selectpicker(\"destroy\");
                                    repeater_item.find('select.city_to').attr('title', '{{\"Nothing Selected\"|__}}');
                                    repeater_item.find('select.city_to').html(data.html);
                                    repeater_item.find('select.city_to').selectpicker(\"refresh\");
                                }
                            });
                        }
                    });
                    repeater_item.on('changed.bs.select', '.city_from', function(e, clickedIndex, newValue, oldValue){
                        var selected = \$(e.currentTarget).val();
                        if(selected != ''){
                            \$.request('onListareas', {
                                data: {id: selected},
                                success: function(data) {
                                    repeater_item.find('select.area_from').selectpicker(\"destroy\");
                                    repeater_item.find('select.area_from').attr('title', '{{\"Nothing Selected\"|__}}');
                                    repeater_item.find('select.area_from').html(data.html);
                                    repeater_item.find('select.area_from').selectpicker(\"refresh\");
                                }
                            });
                        }
                    });
                    repeater_item.on('changed.bs.select', '.city_to', function(e, clickedIndex, newValue, oldValue){
                        var selected = \$(e.currentTarget).val();
                        if(selected != ''){
                            \$.request('onListareas', {
                                data: {id: selected},
                                success: function(data) {
                                    repeater_item.find('select.area_to').selectpicker(\"destroy\");
                                    repeater_item.find('select.area_to').attr('title', '{{\"Nothing Selected\"|__}}');
                                    repeater_item.find('select.area_to').html(data.html);
                                    repeater_item.find('select.area_to').selectpicker(\"refresh\");
                                }
                            });
                        }
                    });
                    repeater_item.slideDown();
                },
                hide: function(e) {
                    \$(this).slideUp(e);
                }
            });
            \$('.first-child').remove();


            \$('.prev_child').on('change', '.place_type', function(){
                var parent = \$(this).parent().parent().parent().parent().parent();
                parent.find('.type_container').addClass('kt-hidden');
                for (var i = \$(this).val(); i >= 1; i--) {
                    parent.find('.type_'+i).removeClass('kt-hidden');
                }
            });

            \$('.prev_child').on('changed.bs.select', '.country_from', function(e, clickedIndex, newValue, oldValue){
                var selected = \$(e.currentTarget).val();
                var parent = \$(e.currentTarget).parent().parent().parent().parent();
                if(selected != ''){
                    \$.request('onListstates', {
                        data: {id: selected},
                        success: function(data) {
                            parent.find('select.state_from').selectpicker(\"destroy\");
                            parent.find('select.state_from').attr('title', '{{\"Nothing Selected\"|__}}');
                            parent.find('select.state_from').html(data.html);
                            parent.find('select.state_from').selectpicker(\"refresh\");
                        }
                    });
                }
            });
            \$('.prev_child').on('changed.bs.select', '.state_from', function(e, clickedIndex, newValue, oldValue){
                var selected = \$(e.currentTarget).val();
                var parent = \$(e.currentTarget).parent().parent().parent().parent();
                if(selected != ''){
                    \$.request('onListcities', {
                        data: {id: selected},
                        success: function(data) {
                            parent.find('select.city_from').selectpicker(\"destroy\");
                            parent.find('select.city_from').attr('title', '{{\"Nothing Selected\"|__}}');
                            parent.find('select.city_from').html(data.html);
                            parent.find('select.city_from').selectpicker(\"refresh\");
                        }
                    });
                }
            });
            \$('.prev_child').on('changed.bs.select', '.city_from', function(e, clickedIndex, newValue, oldValue){
                var selected = \$(e.currentTarget).val();
                var parent = \$(e.currentTarget).parent().parent().parent().parent();
                if(selected != ''){
                    \$.request('onListareas', {
                        data: {id: selected},
                        success: function(data) {
                            parent.find('select.area_from').selectpicker(\"destroy\");
                            parent.find('select.area_from').attr('title', '{{\"Nothing Selected\"|__}}');
                            parent.find('select.area_from').html(data.html);
                            parent.find('select.area_from').selectpicker(\"refresh\");
                        }
                    });
                }
            });
        {% endif %}
    {% endif %}
});
</script>
{% endput %}", "/Applications/MAMP/htdocs/test/themes/spotlayer/pages/dashboard/profile.htm", "");
    }
}
