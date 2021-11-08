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

/* /Applications/MAMP/htdocs/test/themes/spotlayer/pages/dashboard/update-client.htm */
class __TwigTemplate_b9ee84eddfb564d75267b70fd423d4ccb6c75d06bdf42e2db086c438a852451f extends \Twig\Template
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
        echo "<div class=\"kt-grid kt-grid--desktop kt-grid--ver-desktop  kt-inbox\" id=\"kt_inbox\">
    <!--Begin:: Inbox List-->
    <div class=\"kt-grid__item kt-grid__item--fluid    kt-portlet    kt-inbox__list kt-inbox__list--shown\" id=\"kt_inbox_list\">
        <div class=\"kt-portlet__head\">
    \t\t<div class=\"kt-portlet__head-label\">
    \t\t\t<h3 class=\"kt-portlet__head-title\">
    \t\t\t\t";
        // line 7
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 7), "title", [], "any", false, false, false, 7)]);
        echo "
    \t\t\t</h3>
    \t\t</div>
        </div>
        ";
        // line 11
        echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), ["ajax", "onSave", ["id" => "kt_form", "flash" => true, "class" => "kt_form"]]);
        echo "
            <div class=\"kt-portlet__body kt-portlet__body--fit-x kt-padding-r-20 kt-padding-l-20\">
                <div class=\"form-group form-group-last kt-hide\">
                    <div class=\"alert alert-danger kt_form_msg\" role=\"alert\">
                        <div class=\"alert-icon\"><i class=\"flaticon-warning\"></i></div>
                        <div class=\"alert-text\">
                            ";
        // line 17
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Oh snap! Change a few things up and try submitting again"]);
        echo ".
                        </div>
                        <div class=\"alert-close\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                <span aria-hidden=\"true\"><i class=\"la la-close\"></i></span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label class=\"col-xl-3 col-lg-3 col-form-label\">";
        // line 27
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Full Name"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                    <div class=\"col-lg-9 col-xl-6\">
    \t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"name\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "name", [], "any", false, false, false, 29), "html", null, true);
        echo "\" required />
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label class=\"col-xl-3 col-lg-3 col-form-label\">";
        // line 33
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Email"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                    <div class=\"col-lg-9 col-xl-6\">
    \t\t\t\t\t<input type=\"email\" class=\"form-control\" name=\"email\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "email", [], "any", false, false, false, 35), "html", null, true);
        echo "\" required />
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label class=\"col-xl-3 col-lg-3 col-form-label\">";
        // line 39
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Username"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                    <div class=\"col-lg-9 col-xl-6\">
    \t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"username\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "username", [], "any", false, false, false, 41), "html", null, true);
        echo "\" required />
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label class=\"col-xl-3 col-lg-3 col-form-label\">";
        // line 45
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Password"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                    <div class=\"col-lg-9 col-xl-6\">
    \t\t\t\t\t<input type=\"password\" class=\"form-control\" name=\"password\" />
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label class=\"col-xl-3 col-lg-3 col-form-label\">";
        // line 51
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Password Confirmation"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                    <div class=\"col-lg-9 col-xl-6\">
    \t\t\t\t\t<input type=\"password\" class=\"form-control\" name=\"password_confirmation\" />
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label class=\"col-xl-3 col-lg-3 col-form-label\">";
        // line 57
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Mobile Number"]);
        echo "</label>
                    <div class=\"col-lg-9 col-xl-6\">
    \t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"mobile\" value=\"";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "mobile", [], "any", false, false, false, 59), "html", null, true);
        echo "\"/>
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label class=\"col-xl-3 col-lg-3 col-form-label\">";
        // line 63
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Phone Number"]);
        echo "</label>
                    <div class=\"col-lg-9 col-xl-6\">
    \t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"phone\" value=\"";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "phone", [], "any", false, false, false, 65), "html", null, true);
        echo "\" />
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label class=\"col-xl-3 col-lg-3 col-form-label\">";
        // line 69
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Gender"]);
        echo "</label>
                    <div class=\"col-lg-9 col-xl-6\">
                        <div class=\"kt-radio-inline\">
\t\t\t\t\t\t\t<label class=\"kt-radio\">
\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"gender\" class=\"gender\" value=\"male\" ";
        // line 73
        if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "gender", [], "any", false, false, false, 73) == "male")) {
            echo "checked";
        }
        echo "> ";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Male"]);
        echo "
\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<label class=\"kt-radio\">
\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"gender\" class=\"gender\" value=\"female\" ";
        // line 77
        if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "gender", [], "any", false, false, false, 77) == "female")) {
            echo "checked";
        }
        echo "> ";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Female"]);
        echo "
\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>
                    </div>
                </div>
                <div class=\"form-group row\">
                    <h4 class=\"col-xl-12 kt-font-boldest\">";
        // line 84
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Addresses"]);
        echo "</h4>
                    <div class=\"col-lg-12\">

                        <div id=\"kt_repeater_addresses\">
                            <div class=\"form-group form-group-last row\">
                                <div data-repeater-list=\"addresses\" class=\"col-lg-12\">
                                    <div data-repeater-item class=\"align-items-center first-child\">
                                        <div class=\"location\">
                                            <div class=\"row\">
                                                <div class=\"form-group col-lg-6\">
                                                    <label>";
        // line 94
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Name"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                    <input type=\"text\" class=\"form-control\" name=\"name\" required/>
                                                </div>
                                                <div class=\"form-group col-lg-6\">
                                                    <label>";
        // line 98
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Default Address"]);
        echo "</label>
                                                    <div class=\"kt-radio-inline\">
                            \t\t\t\t\t\t\t<label class=\"kt-radio\">
                            \t\t\t\t\t\t\t\t<input type=\"radio\" name=\"default\" value=\"1\"> ";
        // line 101
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yes"]);
        echo "
                            \t\t\t\t\t\t\t\t<span></span>
                            \t\t\t\t\t\t\t</label>
                            \t\t\t\t\t\t\t<label class=\"kt-radio\">
                            \t\t\t\t\t\t\t\t<input type=\"radio\" name=\"default\" value=\"0\" checked> ";
        // line 105
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No"]);
        echo "
                            \t\t\t\t\t\t\t\t<span></span>
                            \t\t\t\t\t\t\t</label>
                            \t\t\t\t\t\t</div>
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"form-group col-lg-5\">
                                                    <label>";
        // line 113
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Address"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                    <input type=\"text\" class=\"form-control address street_addr\" data-location=\"route\" name=\"street_address\" required/>
                                                    <input type=\"hidden\" class=\"form-control lat\" data-location=\"lat\" name=\"lat\" />
                                                    <input type=\"hidden\" class=\"form-control lng\" data-location=\"lng\" name=\"lng\" />
                                                    <input type=\"hidden\" class=\"form-control url\" data-location=\"url\" name=\"url\" />
                                                </div>
                                                <div class=\"form-group col-lg-4\">
                                                    <label>";
        // line 120
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Country"]);
        echo "</label>
                                                    <select class=\"form-control country_id\" data-location=\"country\" data-live-search=\"true\" name=\"country\">
                                                        <option data-hidden=\"true\"></option>
                                                        ";
        // line 123
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 124
            echo "                                                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["country"], "id", [], "any", false, false, false, 124), "html", null, true);
            echo "\" ";
            if ((($context["currentLang"] ?? null) != "en")) {
                echo "data-subtext=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["country"], "lang", [0 => ($context["currentLang"] ?? null)], "method", false, false, false, 124), "name", [], "any", false, false, false, 124), "html", null, true);
                echo " \"";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["country"], "lang", [0 => "en"], "method", false, false, false, 124), "name", [], "any", false, false, false, 124), "html", null, true);
            echo "</option>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        echo "                                                    </select>
                                                </div>
                                                <div class=\"form-group col-lg-3\">
                                                    <label>";
        // line 129
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Postal Code"]);
        echo "</label>
                                                    <input class=\"form-control postal_code\" type=\"text\" data-location=\"postal_code\" name=\"postal_code\" >
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"form-group col-lg-4\">
                                                    <label>";
        // line 135
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["State / Region"]);
        echo "</label>
                                                    <select class=\"form-control state_id\" data-location=\"administrative_area_level_1\" title=\"";
        // line 136
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select country first"]);
        echo "\" name=\"state\" data-live-search=\"true\">
                                                        <option data-hidden=\"true\"></option>
                                                        ";
        // line 138
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["states"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["state"]) {
            // line 139
            echo "                                                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["state"], "id", [], "any", false, false, false, 139), "html", null, true);
            echo "\" ";
            if ((($context["currentLang"] ?? null) != "en")) {
                echo "data-subtext=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["state"], "lang", [0 => ($context["currentLang"] ?? null)], "method", false, false, false, 139), "name", [], "any", false, false, false, 139), "html", null, true);
                echo "\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["state"], "lang", [0 => "en"], "method", false, false, false, 139), "name", [], "any", false, false, false, 139), "html", null, true);
            echo "</option>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['state'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        echo "                                                    </select>
                                                </div>
                                                <div class=\"form-group col-lg-4\">
                                                    <label>";
        // line 144
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["City"]);
        echo "</label>
                                                    <select class=\"form-control city_id\" data-location=\"locality\" name=\"city\" title=\"";
        // line 145
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select state first"]);
        echo "\" data-live-search=\"true\">
                                                        <option data-hidden=\"true\"></option>
                                                        ";
        // line 147
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cities"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["city"]) {
            // line 148
            echo "                                                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["city"], "id", [], "any", false, false, false, 148), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["city"], "name", [], "any", false, false, false, 148), "html", null, true);
            echo "</option>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['city'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 150
        echo "                                                    </select>
                                                </div>
                                                <div class=\"form-group col-lg-4\">
                                                    <label>";
        // line 153
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["County"]);
        echo "</label>
                                                    <select class=\"form-control area_id\" data-location=\"sublocality\" name=\"county\" title=\"";
        // line 154
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select city first"]);
        echo "\" data-live-search=\"true\" >
                                                        <option data-hidden=\"true\"></option>
                                                        ";
        // line 156
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["areas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["county"]) {
            // line 157
            echo "                                                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["county"], "id", [], "any", false, false, false, 157), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["county"], "name", [], "any", false, false, false, 157), "html", null, true);
            echo "</option>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['county'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 159
        echo "                                                    </select>
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"form-group col-lg-12\">
                                                    <label>";
        // line 164
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Google Map"]);
        echo "</label>
                                                    <div class=\"col-sm-12 map_canvas\"></div>
                                                    <span class=\"form-text text-muted\">";
        // line 166
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
        // line 175
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
        // line 184
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "addresses", [], "any", false, false, false, 184));
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
            // line 185
            echo "                                        <div data-repeater-item class=\"align-items-center\">
                                            <input type=\"hidden\" name=\"id\" value=\"";
            // line 186
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "id", [], "any", false, false, false, 186), "html", null, true);
            echo "\" />
                                            <div class=\"location\">
                                                <div class=\"row\">
                                                    <div class=\"form-group col-lg-6\">
                                                        <label>";
            // line 190
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Name"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                        <input type=\"text\" class=\"form-control\" name=\"name\" value=\"";
            // line 191
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "name", [], "any", false, false, false, 191), "html", null, true);
            echo "\" required/>
                                                    </div>
                                                    <div class=\"form-group col-lg-6\">
                                                        <label>";
            // line 194
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Default Address"]);
            echo "</label>
                                                        <div class=\"kt-radio-inline\">
                                \t\t\t\t\t\t\t<label class=\"kt-radio\">
                                \t\t\t\t\t\t\t\t<input type=\"radio\" name=\"default\" value=\"1\" ";
            // line 197
            if ((twig_get_attribute($this->env, $this->source, $context["address"], "default", [], "any", false, false, false, 197) == 1)) {
                echo "checked";
            }
            echo "> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yes"]);
            echo "
                                \t\t\t\t\t\t\t\t<span></span>
                                \t\t\t\t\t\t\t</label>
                                \t\t\t\t\t\t\t<label class=\"kt-radio\">
                                \t\t\t\t\t\t\t\t<input type=\"radio\" name=\"default\" value=\"0\" ";
            // line 201
            if ((twig_get_attribute($this->env, $this->source, $context["address"], "default", [], "any", false, false, false, 201) == 0)) {
                echo "checked";
            }
            echo "> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No"]);
            echo "
                                \t\t\t\t\t\t\t\t<span></span>
                                \t\t\t\t\t\t\t</label>
                                \t\t\t\t\t\t</div>
                                                    </div>
                                                </div>
                                                <div class=\"row\">
                                                    <div class=\"form-group col-lg-5\">
                                                        <label>";
            // line 209
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Address"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                        <input type=\"text\" class=\"form-control address street_addr edit_address_";
            // line 210
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "id", [], "any", false, false, false, 210), "html", null, true);
            echo "\" data-location=\"route\" name=\"street_address\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "street", [], "any", false, false, false, 210), "html", null, true);
            echo "\" required/>
                                                        <input type=\"hidden\" class=\"form-control lat\" data-location=\"lat\" name=\"lat\" value=\"";
            // line 211
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "lat", [], "any", false, false, false, 211), "html", null, true);
            echo "\" />
                                                        <input type=\"hidden\" class=\"form-control lng\" data-location=\"lng\" name=\"lng\" value=\"";
            // line 212
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "lng", [], "any", false, false, false, 212), "html", null, true);
            echo "\" />
                                                        <input type=\"hidden\" class=\"form-control url\" data-location=\"url\" name=\"url\" value=\"";
            // line 213
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "url", [], "any", false, false, false, 213), "html", null, true);
            echo "\" />
                                                    </div>
                                                    <div class=\"form-group col-lg-4\">
                                                        <label>";
            // line 216
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Country"]);
            echo "</label>
                                                        <select class=\"form-control country_id\" data-location=\"country\" data-live-search=\"true\" name=\"country\">
                                                            <option data-hidden=\"true\"></option>
                                                            ";
            // line 219
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                // line 220
                echo "                                                                <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["country"], "id", [], "any", false, false, false, 220), "html", null, true);
                echo "\" ";
                if ((($context["currentLang"] ?? null) != "en")) {
                    echo "data-subtext=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["country"], "lang", [0 => ($context["currentLang"] ?? null)], "method", false, false, false, 220), "name", [], "any", false, false, false, 220), "html", null, true);
                    echo " \"";
                }
                echo " ";
                if ((twig_get_attribute($this->env, $this->source, $context["address"], "country", [], "any", false, false, false, 220) == twig_get_attribute($this->env, $this->source, $context["country"], "id", [], "any", false, false, false, 220))) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["country"], "lang", [0 => "en"], "method", false, false, false, 220), "name", [], "any", false, false, false, 220), "html", null, true);
                echo "</option>
                                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 222
            echo "                                                        </select>
                                                    </div>
                                                    <div class=\"form-group col-lg-3\">
                                                        <label>";
            // line 225
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Postal Code"]);
            echo "</label>
                                                        <input class=\"form-control postal_code\" type=\"text\" data-location=\"postal_code\" name=\"postal_code\" value=\"";
            // line 226
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "zipcode", [], "any", false, false, false, 226), "html", null, true);
            echo "\">
                                                    </div>
                                                </div>
                                                <div class=\"row\">
                                                    <div class=\"form-group col-lg-4\">
                                                        <label>";
            // line 231
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["State / Region"]);
            echo "</label>
                                                        <select class=\"form-control state_id\" data-location=\"administrative_area_level_1\" title=\"";
            // line 232
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select country first"]);
            echo "\" name=\"state\" data-live-search=\"true\">
                                                            <option data-hidden=\"true\"></option>
                                                            ";
            // line 234
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["getData"] ?? null), "states", [0 => twig_get_attribute($this->env, $this->source, $context["address"], "state", [], "any", false, false, false, 234), 1 => twig_get_attribute($this->env, $this->source, $context["address"], "country", [], "any", false, false, false, 234)], "method", false, false, false, 234), "html", null, true);
            echo "
                                                        </select>
                                                    </div>
                                                    <div class=\"form-group col-lg-4\">
                                                        <label>";
            // line 238
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["City"]);
            echo "</label>
                                                        <select class=\"form-control city_id\" data-location=\"locality\" name=\"city\" title=\"";
            // line 239
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select state first"]);
            echo "\" data-live-search=\"true\">
                                                            <option data-hidden=\"true\"></option>
                                                            ";
            // line 241
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["getData"] ?? null), "cities", [0 => twig_get_attribute($this->env, $this->source, $context["address"], "city", [], "any", false, false, false, 241), 1 => twig_get_attribute($this->env, $this->source, $context["address"], "state", [], "any", false, false, false, 241)], "method", false, false, false, 241), "html", null, true);
            echo "
                                                        </select>
                                                    </div>
                                                    <div class=\"form-group col-lg-4\">
                                                        <label>";
            // line 245
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["County"]);
            echo "</label>
                                                        <select class=\"form-control area_id\" data-location=\"sublocality\" name=\"county\" title=\"";
            // line 246
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select city first"]);
            echo "\" data-live-search=\"true\" >
                                                            <option data-hidden=\"true\"></option>
                                                            ";
            // line 248
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["getData"] ?? null), "areas", [0 => twig_get_attribute($this->env, $this->source, $context["address"], "county", [], "any", false, false, false, 248), 1 => twig_get_attribute($this->env, $this->source, $context["address"], "city", [], "any", false, false, false, 248)], "method", false, false, false, 248), "html", null, true);
            echo "
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class=\"row\">
                                                    <div class=\"form-group col-lg-12\">
                                                        <label>";
            // line 254
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Google Map"]);
            echo "</label>
                                                        <div class=\"col-sm-12 map_canvas map_canvas_";
            // line 255
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "id", [], "any", false, false, false, 255), "html", null, true);
            echo "\"></div>
                                                        <span class=\"form-text text-muted\">";
            // line 256
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Change the pin to select the right location"]);
            echo "</span>
                                                    </div>
                                                    <script>
                                                        lat[";
            // line 259
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 259), "html", null, true);
            echo "] = ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "lat", [], "any", false, false, false, 259), "html", null, true);
            echo ";
                                                        lng[";
            // line 260
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 260), "html", null, true);
            echo "] = ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "lng", [], "any", false, false, false, 260), "html", null, true);
            echo ";
                                                    </script>
                                                </div>
                                            </div>

                                            <div class=\"form-group row\">
                                                <div class=\"col-md-3\">
                                                    <a href=\"javascript:;\" data-repeater-delete=\"\" class=\"btn-sm btn btn-label-danger btn-bold kt-margin-t-25 delete_btn\">
                                                        <i class=\"la la-trash-o\"></i>
                                                        ";
            // line 269
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
        // line 275
        echo "                                </div>
                             </div>
                             <div class=\"form-group form-group-last row\">
                                 <label class=\"col-xl-12 col-form-label kt-align-right\">
                                     <a href=\"javascript:;\" data-repeater-create=\"\" class=\"btn btn-bold btn-sm btn-label-brand\">
                                         <i class=\"la la-plus\"></i> ";
        // line 280
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Add Another Address"]);
        echo "
                                     </a>
                                 </label>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
    \t\t<div class=\"kt-portlet__foot\">
    \t\t\t<div class=\"row\">
    \t\t\t\t<div class=\"col-lg-8\">
                    </div>
    \t\t\t\t<div class=\"col-lg-4\">
    \t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">";
        // line 294
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Save"]);
        echo "</button>
    \t\t\t\t\t<span class=\"kt-margin-left-10\">";
        // line 295
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["or"]);
        echo " <a href=\"";
        echo url("dashboard/clients");
        echo "\" class=\"kt-link\">";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cancel"]);
        echo "</a></span>
    \t\t\t\t</div>
    \t\t\t</div>
    \t\t</div>
    \t";
        // line 299
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
        echo "
    </div>
</div>


";
        // line 304
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('styles'        );
        // line 305
        echo "    <style>
        .map_canvas {
          height: 350px;
        }
    </style>
";
        // line 304
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
        // line 311
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 312
        echo "<script src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/admin/vendors/custom/geocomplete/jquery.geocomplete.js");
        echo "\" type=\"text/javascript\"></script>
<script src=\"https://maps.googleapis.com/maps/api/js?libraries=places&key=";
        // line 313
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "google", [], "any", false, false, false, 313), "map", [], "any", false, false, false, 313), "key", [], "any", false, false, false, 313), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
    \$( \".kt_form\" ).validate({
        // define validation rules
        /*
        rules: {
            digits: {
                required: true,
                digits: true,
                creditcard: true,
                phoneUS: true,
                required: true,
                minlength: 10,
                maxlength: 100
            },
        },
        */

        //display error alert on form submit
        invalidHandler: function(event, validator) {
            var alert = \$('.kt_form_msg');
            alert.removeClass('kt--hide').show();
            KTUtil.scrollTop();
        },

        submitHandler: function (form) {
            form[0].submit(); // submit the form
        }
    });

    var n = 0;

    ";
        // line 345
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "addresses", [], "any", false, false, false, 345));
        foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
            // line 346
            echo "    var map_canvas  = \$('.map_canvas_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "id", [], "any", false, false, false, 346), "html", null, true);
            echo "');
    var map_data    = \$(this).parent().find(\".location\");
        \$('.edit_address_";
            // line 348
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "id", [], "any", false, false, false, 348), "html", null, true);
            echo "').geocomplete({
            map: map_canvas,
            location: [";
            // line 350
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "lat", [], "any", false, false, false, 350), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "lng", [], "any", false, false, false, 350), "html", null, true);
            echo "],
            mapOptions: {
                zoom: 18
            },
            markerOptions: {
                draggable: true
            },
            details: map_data,
            detailsAttribute: \"data-location\"
        });
         \$(this).parent().find(\".edit_address_";
            // line 360
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "id", [], "any", false, false, false, 360), "html", null, true);
            echo "\").bind(\"geocode:dragged\", function(event, latLng){
             \$(this).parent().find(\"input.lat\").val(latLng.lat());
             \$(this).parent().find(\"input.lng\").val(latLng.lng());
        });
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 365
        echo "
    \$(\"#kt_repeater_addresses\").repeater({
        initEmpty: false,
        show: function() {
            var repeater_item = \$(this);
            repeater_item.find('select').selectpicker('destroy');
            repeater_item.find('select').selectpicker();
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
        // line 400
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
                            repeater_item.find('.city_id').selectpicker(\"destroy\");
                            repeater_item.find('.city_id').attr('title', '";
        // line 414
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Nothing Selected"]);
        echo "');
                            repeater_item.find('.city_id').html(data.html);
                            repeater_item.find('.city_id').selectpicker(\"refresh\");
                        }
                    });
                }
            });
            repeater_item.on('changed.bs.select', '.city_id', function(e, clickedIndex, newValue, oldValue){
                var selected = \$(e.currentTarget).val();
                if(selected != ''){
                    \$.request('onListareas', {
                        data: {id: selected},
                        success: function(data) {
                            repeater_item.find('.area_id').selectpicker(\"destroy\");
                            repeater_item.find('.area_id').attr('title', '";
        // line 428
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Nothing Selected"]);
        echo "');
                            repeater_item.find('.area_id').html(data.html);
                            repeater_item.find('.area_id').selectpicker(\"refresh\");
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
</script>
";
        // line 311
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/test/themes/spotlayer/pages/dashboard/update-client.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  877 => 311,  860 => 428,  843 => 414,  826 => 400,  789 => 365,  778 => 360,  763 => 350,  758 => 348,  752 => 346,  748 => 345,  713 => 313,  708 => 312,  706 => 311,  704 => 304,  697 => 305,  695 => 304,  687 => 299,  676 => 295,  672 => 294,  655 => 280,  648 => 275,  628 => 269,  614 => 260,  608 => 259,  602 => 256,  598 => 255,  594 => 254,  585 => 248,  580 => 246,  576 => 245,  569 => 241,  564 => 239,  560 => 238,  553 => 234,  548 => 232,  544 => 231,  536 => 226,  532 => 225,  527 => 222,  506 => 220,  502 => 219,  496 => 216,  490 => 213,  486 => 212,  482 => 211,  476 => 210,  472 => 209,  457 => 201,  446 => 197,  440 => 194,  434 => 191,  430 => 190,  423 => 186,  420 => 185,  403 => 184,  391 => 175,  379 => 166,  374 => 164,  367 => 159,  356 => 157,  352 => 156,  347 => 154,  343 => 153,  338 => 150,  327 => 148,  323 => 147,  318 => 145,  314 => 144,  309 => 141,  292 => 139,  288 => 138,  283 => 136,  279 => 135,  270 => 129,  265 => 126,  248 => 124,  244 => 123,  238 => 120,  228 => 113,  217 => 105,  210 => 101,  204 => 98,  197 => 94,  184 => 84,  170 => 77,  159 => 73,  152 => 69,  145 => 65,  140 => 63,  133 => 59,  128 => 57,  119 => 51,  110 => 45,  103 => 41,  98 => 39,  91 => 35,  86 => 33,  79 => 29,  74 => 27,  61 => 17,  52 => 11,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"kt-grid kt-grid--desktop kt-grid--ver-desktop  kt-inbox\" id=\"kt_inbox\">
    <!--Begin:: Inbox List-->
    <div class=\"kt-grid__item kt-grid__item--fluid    kt-portlet    kt-inbox__list kt-inbox__list--shown\" id=\"kt_inbox_list\">
        <div class=\"kt-portlet__head\">
    \t\t<div class=\"kt-portlet__head-label\">
    \t\t\t<h3 class=\"kt-portlet__head-title\">
    \t\t\t\t{{this.page.title|__}}
    \t\t\t</h3>
    \t\t</div>
        </div>
        {{ form_ajax('onSave', { id: 'kt_form', flash: true, class:'kt_form' }) }}
            <div class=\"kt-portlet__body kt-portlet__body--fit-x kt-padding-r-20 kt-padding-l-20\">
                <div class=\"form-group form-group-last kt-hide\">
                    <div class=\"alert alert-danger kt_form_msg\" role=\"alert\">
                        <div class=\"alert-icon\"><i class=\"flaticon-warning\"></i></div>
                        <div class=\"alert-text\">
                            {{'Oh snap! Change a few things up and try submitting again'|__}}.
                        </div>
                        <div class=\"alert-close\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                <span aria-hidden=\"true\"><i class=\"la la-close\"></i></span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Full Name'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                    <div class=\"col-lg-9 col-xl-6\">
    \t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"name\" value=\"{{item.name}}\" required />
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Email'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                    <div class=\"col-lg-9 col-xl-6\">
    \t\t\t\t\t<input type=\"email\" class=\"form-control\" name=\"email\" value=\"{{item.email}}\" required />
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Username'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                    <div class=\"col-lg-9 col-xl-6\">
    \t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"username\" value=\"{{item.username}}\" required />
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Password'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                    <div class=\"col-lg-9 col-xl-6\">
    \t\t\t\t\t<input type=\"password\" class=\"form-control\" name=\"password\" />
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Password Confirmation'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                    <div class=\"col-lg-9 col-xl-6\">
    \t\t\t\t\t<input type=\"password\" class=\"form-control\" name=\"password_confirmation\" />
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Mobile Number'|__}}</label>
                    <div class=\"col-lg-9 col-xl-6\">
    \t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"mobile\" value=\"{{item.mobile}}\"/>
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Phone Number'|__}}</label>
                    <div class=\"col-lg-9 col-xl-6\">
    \t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"phone\" value=\"{{item.phone}}\" />
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Gender'|__}}</label>
                    <div class=\"col-lg-9 col-xl-6\">
                        <div class=\"kt-radio-inline\">
\t\t\t\t\t\t\t<label class=\"kt-radio\">
\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"gender\" class=\"gender\" value=\"male\" {% if item.gender == 'male' %}checked{% endif %}> {{'Male'|__}}
\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<label class=\"kt-radio\">
\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"gender\" class=\"gender\" value=\"female\" {% if item.gender == 'female' %}checked{% endif %}> {{'Female'|__}}
\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>
                    </div>
                </div>
                <div class=\"form-group row\">
                    <h4 class=\"col-xl-12 kt-font-boldest\">{{'Addresses'|__}}</h4>
                    <div class=\"col-lg-12\">

                        <div id=\"kt_repeater_addresses\">
                            <div class=\"form-group form-group-last row\">
                                <div data-repeater-list=\"addresses\" class=\"col-lg-12\">
                                    <div data-repeater-item class=\"align-items-center first-child\">
                                        <div class=\"location\">
                                            <div class=\"row\">
                                                <div class=\"form-group col-lg-6\">
                                                    <label>{{'Name'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                    <input type=\"text\" class=\"form-control\" name=\"name\" required/>
                                                </div>
                                                <div class=\"form-group col-lg-6\">
                                                    <label>{{'Default Address'|__}}</label>
                                                    <div class=\"kt-radio-inline\">
                            \t\t\t\t\t\t\t<label class=\"kt-radio\">
                            \t\t\t\t\t\t\t\t<input type=\"radio\" name=\"default\" value=\"1\"> {{'Yes'|__}}
                            \t\t\t\t\t\t\t\t<span></span>
                            \t\t\t\t\t\t\t</label>
                            \t\t\t\t\t\t\t<label class=\"kt-radio\">
                            \t\t\t\t\t\t\t\t<input type=\"radio\" name=\"default\" value=\"0\" checked> {{'No'|__}}
                            \t\t\t\t\t\t\t\t<span></span>
                            \t\t\t\t\t\t\t</label>
                            \t\t\t\t\t\t</div>
                                                </div>
                                            </div>
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
                                                    <label>{{'County'|__}}</label>
                                                    <select class=\"form-control area_id\" data-location=\"sublocality\" name=\"county\" title=\"{{'Please select city first'|__}}\" data-live-search=\"true\" >
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
                                    {% for address in item.addresses %}
                                        <div data-repeater-item class=\"align-items-center\">
                                            <input type=\"hidden\" name=\"id\" value=\"{{address.id}}\" />
                                            <div class=\"location\">
                                                <div class=\"row\">
                                                    <div class=\"form-group col-lg-6\">
                                                        <label>{{'Name'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                        <input type=\"text\" class=\"form-control\" name=\"name\" value=\"{{address.name}}\" required/>
                                                    </div>
                                                    <div class=\"form-group col-lg-6\">
                                                        <label>{{'Default Address'|__}}</label>
                                                        <div class=\"kt-radio-inline\">
                                \t\t\t\t\t\t\t<label class=\"kt-radio\">
                                \t\t\t\t\t\t\t\t<input type=\"radio\" name=\"default\" value=\"1\" {% if address.default == 1 %}checked{% endif %}> {{'Yes'|__}}
                                \t\t\t\t\t\t\t\t<span></span>
                                \t\t\t\t\t\t\t</label>
                                \t\t\t\t\t\t\t<label class=\"kt-radio\">
                                \t\t\t\t\t\t\t\t<input type=\"radio\" name=\"default\" value=\"0\" {% if address.default == 0 %}checked{% endif %}> {{'No'|__}}
                                \t\t\t\t\t\t\t\t<span></span>
                                \t\t\t\t\t\t\t</label>
                                \t\t\t\t\t\t</div>
                                                    </div>
                                                </div>
                                                <div class=\"row\">
                                                    <div class=\"form-group col-lg-5\">
                                                        <label>{{'Address'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                        <input type=\"text\" class=\"form-control address street_addr edit_address_{{address.id}}\" data-location=\"route\" name=\"street_address\" value=\"{{address.street}}\" required/>
                                                        <input type=\"hidden\" class=\"form-control lat\" data-location=\"lat\" name=\"lat\" value=\"{{address.lat}}\" />
                                                        <input type=\"hidden\" class=\"form-control lng\" data-location=\"lng\" name=\"lng\" value=\"{{address.lng}}\" />
                                                        <input type=\"hidden\" class=\"form-control url\" data-location=\"url\" name=\"url\" value=\"{{address.url}}\" />
                                                    </div>
                                                    <div class=\"form-group col-lg-4\">
                                                        <label>{{'Country'|__}}</label>
                                                        <select class=\"form-control country_id\" data-location=\"country\" data-live-search=\"true\" name=\"country\">
                                                            <option data-hidden=\"true\"></option>
                                                            {% for country in countries %}
                                                                <option value=\"{{country.id}}\" {% if currentLang != 'en' %}data-subtext=\"{{country.lang(currentLang).name}} \"{% endif %} {% if address.country == country.id %}selected{% endif %}>{{country.lang('en').name}}</option>
                                                            {% endfor %}
                                                        </select>
                                                    </div>
                                                    <div class=\"form-group col-lg-3\">
                                                        <label>{{'Postal Code'|__}}</label>
                                                        <input class=\"form-control postal_code\" type=\"text\" data-location=\"postal_code\" name=\"postal_code\" value=\"{{address.zipcode}}\">
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
                                                        <label>{{'County'|__}}</label>
                                                        <select class=\"form-control area_id\" data-location=\"sublocality\" name=\"county\" title=\"{{'Please select city first'|__}}\" data-live-search=\"true\" >
                                                            <option data-hidden=\"true\"></option>
                                                            {{getData.areas(address.county,address.city)}}
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class=\"row\">
                                                    <div class=\"form-group col-lg-12\">
                                                        <label>{{'Google Map'|__}}</label>
                                                        <div class=\"col-sm-12 map_canvas map_canvas_{{address.id}}\"></div>
                                                        <span class=\"form-text text-muted\">{{'Change the pin to select the right location'|__}}</span>
                                                    </div>
                                                    <script>
                                                        lat[{{loop.index}}] = {{address.lat}};
                                                        lng[{{loop.index}}] = {{address.lng}};
                                                    </script>
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
                                 <label class=\"col-xl-12 col-form-label kt-align-right\">
                                     <a href=\"javascript:;\" data-repeater-create=\"\" class=\"btn btn-bold btn-sm btn-label-brand\">
                                         <i class=\"la la-plus\"></i> {{'Add Another Address'|__}}
                                     </a>
                                 </label>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
    \t\t<div class=\"kt-portlet__foot\">
    \t\t\t<div class=\"row\">
    \t\t\t\t<div class=\"col-lg-8\">
                    </div>
    \t\t\t\t<div class=\"col-lg-4\">
    \t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">{{'Save'|__}}</button>
    \t\t\t\t\t<span class=\"kt-margin-left-10\">{{'or'|__}} <a href=\"{{url('dashboard/clients')}}\" class=\"kt-link\">{{'Cancel'|__}}</a></span>
    \t\t\t\t</div>
    \t\t\t</div>
    \t\t</div>
    \t{{ form_close() }}
    </div>
</div>


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
<script type=\"text/javascript\">
    \$( \".kt_form\" ).validate({
        // define validation rules
        /*
        rules: {
            digits: {
                required: true,
                digits: true,
                creditcard: true,
                phoneUS: true,
                required: true,
                minlength: 10,
                maxlength: 100
            },
        },
        */

        //display error alert on form submit
        invalidHandler: function(event, validator) {
            var alert = \$('.kt_form_msg');
            alert.removeClass('kt--hide').show();
            KTUtil.scrollTop();
        },

        submitHandler: function (form) {
            form[0].submit(); // submit the form
        }
    });

    var n = 0;

    {% for address in item.addresses %}
    var map_canvas  = \$('.map_canvas_{{address.id}}');
    var map_data    = \$(this).parent().find(\".location\");
        \$('.edit_address_{{address.id}}').geocomplete({
            map: map_canvas,
            location: [{{address.lat}},{{address.lng}}],
            mapOptions: {
                zoom: 18
            },
            markerOptions: {
                draggable: true
            },
            details: map_data,
            detailsAttribute: \"data-location\"
        });
         \$(this).parent().find(\".edit_address_{{address.id}}\").bind(\"geocode:dragged\", function(event, latLng){
             \$(this).parent().find(\"input.lat\").val(latLng.lat());
             \$(this).parent().find(\"input.lng\").val(latLng.lng());
        });
    {% endfor %}

    \$(\"#kt_repeater_addresses\").repeater({
        initEmpty: false,
        show: function() {
            var repeater_item = \$(this);
            repeater_item.find('select').selectpicker('destroy');
            repeater_item.find('select').selectpicker();
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
                            repeater_item.find('.city_id').selectpicker(\"destroy\");
                            repeater_item.find('.city_id').attr('title', '{{\"Nothing Selected\"|__}}');
                            repeater_item.find('.city_id').html(data.html);
                            repeater_item.find('.city_id').selectpicker(\"refresh\");
                        }
                    });
                }
            });
            repeater_item.on('changed.bs.select', '.city_id', function(e, clickedIndex, newValue, oldValue){
                var selected = \$(e.currentTarget).val();
                if(selected != ''){
                    \$.request('onListareas', {
                        data: {id: selected},
                        success: function(data) {
                            repeater_item.find('.area_id').selectpicker(\"destroy\");
                            repeater_item.find('.area_id').attr('title', '{{\"Nothing Selected\"|__}}');
                            repeater_item.find('.area_id').html(data.html);
                            repeater_item.find('.area_id').selectpicker(\"refresh\");
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
</script>
{% endput %}", "/Applications/MAMP/htdocs/test/themes/spotlayer/pages/dashboard/update-client.htm", "");
    }
}
