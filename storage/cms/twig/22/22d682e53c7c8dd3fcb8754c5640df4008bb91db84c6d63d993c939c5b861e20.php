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

/* /Applications/MAMP/htdocs/MainFiles--/themes/spotlayer/pages/dashboard/order-edit.htm */
class __TwigTemplate_a95097374bc08c53f2a484d0615a1ba0ff60e88d4c4d676c5903b414aaf5f53a extends \Twig\Template
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
        echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), ["ajax", "onSave", ["success" => "created successfully!", "flash" => true, "class" => "kt_form"]]);
        echo "
<div class=\"row\">
    <div class=\"col-lg-12\">
        <div class=\"kt-portlet kt-portlet--mobile\">
            <div class=\"kt-portlet__head\">
                <div class=\"kt-portlet__head-label\">
                    <h3 class=\"kt-portlet__head-title\">
                        ";
        // line 8
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Shipment information"]);
        echo "
                    </h3>
                </div>
            </div>
            <div class=\"kt-portlet__body\">
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
                <div class=\"kt-section\">
                    <h3 class=\"kt-section__title kt-margin-b-20\">
                        ";
        // line 28
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Shipment Type"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span>
                    </h3>
                    <div class=\"kt-section__content\">
                        <div class=\"form-group form-group-last\">
                            <div class=\"row\">
                                <div class=\"col-lg-6\">
                                    <label class=\"kt-option\">
                                        <span class=\"kt-option__control\">
                                            <span class=\"kt-radio kt-radio--state-brand\">
                                                <input type=\"radio\" name=\"type\" id=\"type\" value=\"1\" ";
        // line 37
        if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "type", [], "any", false, false, false, 37) == 1)) {
            echo "checked";
        }
        echo " required>
                                                <span></span>
                                            </span>
                                        </span>
                                        <span class=\"kt-option__label\">
                                            <span class=\"kt-option__head\">
                                                <span class=\"kt-option__title\">
                                                    ";
        // line 44
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Pickup"]);
        echo "
                                                </span>
                                                <span class=\"kt-option__focus\"></span>
                                            </span>
                                            <span class=\"kt-option__body\">
                                                ";
        // line 49
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["For door to door delivery"]);
        echo "
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <div class=\"col-lg-6\">
                                    <label class=\"kt-option\">
                                        <span class=\"kt-option__control\">
                                            <span class=\"kt-radio kt-radio--state-brand\">
                                                <input type=\"radio\" name=\"type\" id=\"type\" value=\"2\" ";
        // line 58
        if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "type", [], "any", false, false, false, 58) == 2)) {
            echo "checked";
        }
        echo " required>
                                                <span></span>
                                            </span>
                                        </span>
                                        <span class=\"kt-option__label\">
                                            <span class=\"kt-option__head\">
                                                <span class=\"kt-option__title\">
                                                    ";
        // line 65
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Drop off"]);
        echo "
                                                </span>
                                                <span class=\"kt-option__focus\"></span>
                                            </span>
                                            <span class=\"kt-option__body\">
                                                ";
        // line 70
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["For delivery package from office directly"]);
        echo "
                                            </span>
                                        </span>
                                    </label>
                                </div>
                            </div>
                            <div class=\"form-text text-muted\"><!--must use this helper element to display error message for the options--></div>
                        </div>
                    </div>
                </div>
                <div class=\"kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit kt-margin-t-0\"></div>
                <div class=\"row\">
                    <div class=\"form-group col-lg-4\">
                        <label>";
        // line 83
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Package Type"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                        <select class=\"form-control\" name=\"packaging_id\" id=\"packaging_id\" data-live-search=\"true\" required>
                            <option data-hidden=\"true\"></option>
                            ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["packaging"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["package"]) {
            // line 87
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["package"], "id", [], "any", false, false, false, 87), "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "packaging_id", [], "any", false, false, false, 87) == twig_get_attribute($this->env, $this->source, $context["package"], "id", [], "any", false, false, false, 87))) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["package"], "name", [], "any", false, false, false, 87), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['package'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "                        </select>
                    </div>
                    <div class=\"form-group col-lg-4\">
                        <label>";
        // line 92
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Office"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                        <select class=\"form-control\" name=\"office_id\" required>
                            <option data-hidden=\"true\"></option>
                            ";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["offices"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["office"]) {
            // line 96
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["office"], "id", [], "any", false, false, false, 96), "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "office_id", [], "any", false, false, false, 96) == twig_get_attribute($this->env, $this->source, $context["office"], "id", [], "any", false, false, false, 96))) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["office"], "name", [], "any", false, false, false, 96), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['office'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "                        </select>
                    </div>
                    <div class=\"form-group col-lg-4\">
                        <label>";
        // line 101
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Shipping Date"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                        <div class=\"input-group date\">
                            <input type=\"text\" class=\"form-control date\" readonly=\"\" name=\"ship_date\" value=\"";
        // line 103
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "ship_date", [], "any", false, false, false, 103), twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "dateformat", [], "any", false, false, false, 103)), "html", null, true);
        echo "\">
                            <div class=\"input-group-append\">
                                <span class=\"input-group-text\">
                                    <i class=\"la la-calendar\"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"col-lg-12\">
        <div class=\"kt-portlet kt-portlet--mobile\">
            <div class=\"kt-portlet__head\">
\t\t\t\t<div class=\"kt-portlet__head-label\">
\t\t\t\t\t<h3 class=\"kt-portlet__head-title\">
\t\t\t\t\t\t";
        // line 120
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sender information"]);
        echo "
\t\t\t\t\t</h3>
\t\t\t\t</div>
\t\t\t</div>
            <div class=\"kt-portlet__body\">
                <div class=\"form-group form-group-last kt-hide\">
    \t\t\t\t<div class=\"alert alert-danger kt_form_msg\" role=\"alert\">
    \t\t\t\t\t<div class=\"alert-icon\"><i class=\"flaticon-warning\"></i></div>
    \t\t\t\t  \t<div class=\"alert-text\">
                            ";
        // line 129
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Oh snap! Change a few things up and try submitting again"]);
        echo ".
    \t\t\t\t\t</div>
    \t\t\t\t\t<div class=\"alert-close\">
    \t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
    \t\t\t\t\t    \t<span aria-hidden=\"true\"><i class=\"la la-close\"></i></span>
    \t\t\t\t\t  \t</button>
    \t\t\t\t\t</div>
    \t\t\t\t</div>
    \t\t\t</div>
                <div class=\"form-group row\">
                    <label>";
        // line 139
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sender"]);
        echo "/";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Client"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                    ";
        // line 140
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 140) == 5)) {
            // line 141
            echo "                        <input name=\"sender_id\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 141), "html", null, true);
            echo "\" type=\"hidden\" />
                        <input value=\"";
            // line 142
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, false, 142), "html", null, true);
            echo "\" type=\"text\" class=\"form-control\" disabled />
                    ";
        } else {
            // line 144
            echo "                        <select class=\"form-control clients\" name=\"sender_id\" id=\"sender_id\" required>
                            <option data-hidden=\"true\"></option>
                            <option value=\"";
            // line 146
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_id", [], "any", false, false, false, 146), "html", null, true);
            echo "\" selected>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender", [], "any", false, false, false, 146), "name", [], "any", false, false, false, 146), "html", null, true);
            echo "</option>
                            ";
            // line 147
            if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "client", 1 => "c"], "method", false, false, false, 147)) {
                // line 148
                echo "                                <option value=\"new\" data-icon=\"flaticon2-add\">";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Add New"]);
                echo "</option>
                            ";
            }
            // line 150
            echo "                        </select>
                        <span class=\"text-muted\">";
            // line 151
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Choose or add a new client that will send the package"]);
            echo "</span>
                    ";
        }
        // line 153
        echo "                </div>
                <div class=\"form-group row\">
                    <label>";
        // line 155
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sender Address"]);
        echo "/";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Client Address"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                    <select class=\"form-control sender_address_id\" name=\"sender_address_id\" id=\"sender_address_id\" data-live-search=\"true\" title=\"";
        // line 156
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select sender first"]);
        echo "\" required>
                        <option value=\"";
        // line 157
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_address_id", [], "any", false, false, false, 157), "html", null, true);
        echo "\" selected>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_address", [], "any", false, false, false, 157), "name", [], "any", false, false, false, 157), "html", null, true);
        echo "</option>
                        <option data-hidden=\"true\"></option>
                        ";
        // line 159
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 159) == 5)) {
            // line 160
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "addresses", [], "any", false, false, false, 160));
            foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
                // line 161
                echo "                                <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "id", [], "any", false, false, false, 161), "html", null, true);
                echo "\" ";
                if ((twig_get_attribute($this->env, $this->source, $context["address"], "default", [], "any", false, false, false, 161) == 1)) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "name", [], "any", false, false, false, 161), "html", null, true);
                echo "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 163
            echo "                            <option value=\"new\" data-icon=\"flaticon2-add\">";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Add New"]);
            echo "</option>
                        ";
        }
        // line 165
        echo "                    </select>
                </div>
                ";
        // line 167
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 167) != 5)) {
            // line 168
            echo "                    <div class=\"row kt-hidden\" id=\"addnewsender\">
                        <div class=\"kt-portlet kt-portlet--bordered kt-portlet--head--noborder kt-margin-b-0\">
            \t\t\t\t<div class=\"kt-portlet__head\">
            \t\t\t\t\t<div class=\"kt-portlet__head-label\">
            \t\t\t\t\t\t<h3 class=\"kt-portlet__head-title\">
            \t\t\t\t\t\t\t";
            // line 173
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Add a new client"]);
            echo "
            \t\t\t\t\t\t</h3>
            \t\t\t\t\t</div>
            \t\t\t\t</div>
            \t\t\t\t<div class=\"kt-portlet__body\">
                                <div class=\"row\">
                                    <div class=\"form-group col-lg-5\">
                                        <label>";
            // line 180
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Client Name"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                        <input type=\"text\" class=\"form-control name\" name=\"sender[name]\" required />
                                    </div>
                                    <div class=\"form-group col-lg-4\">
                                        <label>";
            // line 184
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Mobile"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                        <input type=\"text\" class=\"form-control mobile\" name=\"sender[mobile]\" required />
                                    </div>
                                    <div class=\"form-group col-lg-3\">
                                        <label>";
            // line 188
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Gender"]);
            echo "</label>
                                        <div class=\"kt-radio-inline\">
                \t\t\t\t\t\t\t<label class=\"kt-radio\">
                \t\t\t\t\t\t\t\t<input type=\"radio\" name=\"sender[gender]\" class=\"gender\" value=\"male\"> ";
            // line 191
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Male"]);
            echo "
                \t\t\t\t\t\t\t\t<span></span>
                \t\t\t\t\t\t\t</label>
                \t\t\t\t\t\t\t<label class=\"kt-radio\">
                \t\t\t\t\t\t\t\t<input type=\"radio\" name=\"sender[gender]\" class=\"gender\" value=\"female\"> ";
            // line 195
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Female"]);
            echo "
                \t\t\t\t\t\t\t\t<span></span>
                \t\t\t\t\t\t\t</label>
                \t\t\t\t\t\t</div>
                                    </div>
                                </div>
                                <div class=\"location-sender\">
                                    <div class=\"row\">
                                        <div class=\"form-group col-lg-5\">
                                            <label>";
            // line 204
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Address"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <input type=\"text\" class=\"form-control address street_addr\" data-sender=\"route\" name=\"sender[street_address]\"  rel=\"sender\" required/>
                                            <input type=\"hidden\" class=\"form-control lat\" data-sender=\"lat\" name=\"sender[lat]\" />
                                            <input type=\"hidden\" class=\"form-control lng\" data-sender=\"lng\" name=\"sender[lng]\" />
                                            <input type=\"hidden\" class=\"form-control url\" data-sender=\"url\" name=\"sender[url]\" />
                                        </div>
                                        <div class=\"form-group col-lg-4\">
                                            <label>";
            // line 211
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Country"]);
            echo "</label>
                                            <select class=\"form-control country_id\" data-sender=\"country\" data-live-search=\"true\" name=\"sender[country]\">
                                                <option data-hidden=\"true\"></option>
                                                ";
            // line 214
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                // line 215
                echo "                                                    <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["country"], "id", [], "any", false, false, false, 215), "html", null, true);
                echo "\" ";
                if ((($context["currentLang"] ?? null) != "en")) {
                    echo "data-subtext=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["country"], "lang", [0 => ($context["currentLang"] ?? null)], "method", false, false, false, 215), "name", [], "any", false, false, false, 215), "html", null, true);
                    echo "\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["country"], "lang", [0 => "en"], "method", false, false, false, 215), "name", [], "any", false, false, false, 215), "html", null, true);
                echo "</option>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 217
            echo "                                            </select>
                                        </div>
                                        <div class=\"form-group col-lg-3\">
                                            <label>";
            // line 220
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Postal Code"]);
            echo "</label>
                                            <input class=\"form-control postal_code\" type=\"text\" data-sender=\"postal_code\" name=\"sender[postal_code]\" >
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"form-group col-lg-4\">
                                            <label>";
            // line 226
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["State / Region"]);
            echo "</label>
                                            <select class=\"form-control state_id\" data-sender=\"administrative_area_level_1\" title=\"";
            // line 227
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select country first"]);
            echo "\" name=\"sender[state]\" data-live-search=\"true\">
                                                <option data-hidden=\"true\"></option>
                                                ";
            // line 229
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["states"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["state"]) {
                // line 230
                echo "                                                    <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["state"], "id", [], "any", false, false, false, 230), "html", null, true);
                echo "\" ";
                if ((($context["currentLang"] ?? null) != "en")) {
                    echo "data-subtext=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["state"], "lang", [0 => ($context["currentLang"] ?? null)], "method", false, false, false, 230), "name", [], "any", false, false, false, 230), "html", null, true);
                    echo "\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["state"], "lang", [0 => "en"], "method", false, false, false, 230), "name", [], "any", false, false, false, 230), "html", null, true);
                echo "</option>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['state'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 232
            echo "                                            </select>
                                        </div>
                                        <div class=\"form-group col-lg-4\">
                                            <label>";
            // line 235
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["City"]);
            echo "</label>
                                            <select class=\"form-control city_id\" data-sender=\"locality\" name=\"sender[city]\" title=\"";
            // line 236
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select state first"]);
            echo "\" data-live-search=\"true\">
                                                <option data-hidden=\"true\"></option>
                                                ";
            // line 238
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["cities"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["city"]) {
                // line 239
                echo "                                                    <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["city"], "id", [], "any", false, false, false, 239), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["city"], "name", [], "any", false, false, false, 239), "html", null, true);
                echo "</option>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['city'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 241
            echo "                                            </select>
                                        </div>
                                        <div class=\"form-group col-lg-4\">
                                            <label>";
            // line 244
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["County"]);
            echo "</label>
                                            <select class=\"form-control area_id\" data-sender=\"sublocality\" name=\"sender[county]\" title=\"";
            // line 245
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select city first"]);
            echo "\" data-live-search=\"true\">
                                                <option data-hidden=\"true\"></option>
                                                ";
            // line 247
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["areas"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["county"]) {
                // line 248
                echo "                                                    <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["county"], "id", [], "any", false, false, false, 248), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["county"], "name", [], "any", false, false, false, 248), "html", null, true);
                echo "</option>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['county'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 250
            echo "                                            </select>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"form-group col-lg-12\">
                                            <label>";
            // line 255
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Google Map"]);
            echo "</label>
                                            <div class=\"col-sm-12 map_canvas map_sender\"></div>
                                            <span class=\"form-text text-muted\">";
            // line 257
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Change the pin to select the right location"]);
            echo "</span>
                                        </div>
                                    </div>
                                    <div class=\"form-group row\">
                                        <label class=\"col-xl-3 col-lg-3 col-form-label\"></label>
                                        <div class=\"col-lg-9 col-xl-6\">
                                            <div class=\"kt-checkbox-single\">
                                                <label class=\"kt-checkbox\">
                                                    <input type=\"checkbox\" name=\"connect\" class=\"connect\" value=\"sender\"> ";
            // line 265
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Connect client"]);
            echo ": ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["create an account for the client"]);
            echo "
                                                    <span></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row align-items-center kt-hidden\" id=\"connect_sender\">
                                        <div class=\"col-md-4\">
                                            <div class=\"form-group kt-form__group--inline\">
                                                <div class=\"kt-form__label\">
                                                    <label class=\"col-form-label\">";
            // line 275
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Email"]);
            echo ":&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                </div>
                                                <div class=\"kt-form__control\">
                                                    <input type=\"text\" class=\"form-control email\" name=\"sender[email]\" required/>
                                                </div>
                                            </div>
                                            <div class=\"d-md-none kt-margin-b-10\"></div>
                                        </div>
                                        <div class=\"col-md-4\">
                                            <div class=\"form-group kt-form__group--inline\">
                                                <div class=\"kt-form__label\">
                                                    <label class=\"col-form-label\">";
            // line 286
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Username"]);
            echo ":&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                </div>
                                                <div class=\"kt-form__control\">
                                                    <input type=\"text\" class=\"form-control username\" name=\"sender[username]\" required>
                                                </div>
                                            </div>
                                            <div class=\"d-md-none kt-margin-b-10\"></div>
                                        </div>
                                        <div class=\"col-md-4\">
                                            <div class=\"form-group kt-form__group--inline\">
                                                <div class=\"kt-form__label\">
                                                    <label class=\"col-form-label\">";
            // line 297
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Password"]);
            echo ":&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                </div>
                                                <div class=\"kt-form__control\">
                                                    <input type=\"password\" class=\"form-control password\" name=\"sender[password]\" required>
                                                </div>
                                            </div>
                                            <div class=\"d-md-none kt-margin-b-10\"></div>
                                        </div>
                                    </div>
                                </div>
            \t\t\t\t</div>
                            <div class=\"kt-portlet__foot\">
                \t\t\t\t<div class=\"row align-items-center\">
                \t\t\t\t\t<div class=\"col-lg-12\">
                \t\t\t\t\t\t<button type=\"button\" class=\"btn btn-success save\">";
            // line 311
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Save"]);
            echo "</button>
                \t\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary cancel\">";
            // line 312
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cancel"]);
            echo "</button>
                \t\t\t\t\t</div>
                \t\t\t\t</div>
                \t\t\t</div>
            \t\t\t</div>
        \t\t\t</div>
                ";
        }
        // line 319
        echo "                <div class=\"row kt-hidden\" id=\"addnewsenderaddress\">
                    <div class=\"kt-portlet kt-portlet--bordered kt-portlet--head--noborder kt-margin-b-0\">
        \t\t\t\t<div class=\"kt-portlet__head\">
        \t\t\t\t\t<div class=\"kt-portlet__head-label\">
        \t\t\t\t\t\t<h3 class=\"kt-portlet__head-title\">
        \t\t\t\t\t\t\t";
        // line 324
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Add a new client address"]);
        echo "
        \t\t\t\t\t\t</h3>
        \t\t\t\t\t</div>
        \t\t\t\t</div>
        \t\t\t\t<div class=\"kt-portlet__body\">
                            <div class=\"location-senderaddress\">
                                <div class=\"row\">
                                    <div class=\"form-group col-lg-5\">
                                        <label>";
        // line 332
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Address"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                        <input type=\"text\" class=\"form-control address street_addr\" data-senderaddress=\"route\" name=\"senderaddress[street_address]\"  rel=\"senderaddress\" required/>
                                        <input type=\"hidden\" class=\"form-control lat\" data-senderaddress=\"lat\" name=\"senderaddress[lat]\" />
                                        <input type=\"hidden\" class=\"form-control lng\" data-senderaddress=\"lng\" name=\"senderaddress[lng]\" />
                                        <input type=\"hidden\" class=\"form-control url\" data-senderaddress=\"url\" name=\"senderaddress[url]\" />
                                    </div>
                                    <div class=\"form-group col-lg-4\">
                                        <label>";
        // line 339
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Country"]);
        echo "</label>
                                        <select class=\"form-control country_id\" data-senderaddress=\"country\" data-live-search=\"true\" name=\"senderaddress[country]\">
                                            <option data-hidden=\"true\"></option>
                                            ";
        // line 342
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 343
            echo "                                                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["country"], "id", [], "any", false, false, false, 343), "html", null, true);
            echo "\" ";
            if ((($context["currentLang"] ?? null) != "en")) {
                echo "data-subtext=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["country"], "lang", [0 => ($context["currentLang"] ?? null)], "method", false, false, false, 343), "name", [], "any", false, false, false, 343), "html", null, true);
                echo "\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["country"], "lang", [0 => "en"], "method", false, false, false, 343), "name", [], "any", false, false, false, 343), "html", null, true);
            echo "</option>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 345
        echo "                                        </select>
                                    </div>
                                    <div class=\"form-group col-lg-3\">
                                        <label>";
        // line 348
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Postal Code"]);
        echo "</label>
                                        <input class=\"form-control postal_code\" type=\"text\" data-sendsenderaddresser=\"postal_code\" name=\"senderaddress[postal_code]\" >
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"form-group col-lg-4\">
                                        <label>";
        // line 354
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["State / Region"]);
        echo "</label>
                                        <select class=\"form-control state_id\" data-senderaddress=\"administrative_area_level_1\" title=\"";
        // line 355
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select country first"]);
        echo "\" name=\"senderaddress[state]\" data-live-search=\"true\">
                                            <option data-hidden=\"true\"></option>
                                            ";
        // line 357
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["states"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["state"]) {
            // line 358
            echo "                                                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["state"], "id", [], "any", false, false, false, 358), "html", null, true);
            echo "\" ";
            if ((($context["currentLang"] ?? null) != "en")) {
                echo "data-subtext=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["state"], "lang", [0 => ($context["currentLang"] ?? null)], "method", false, false, false, 358), "name", [], "any", false, false, false, 358), "html", null, true);
                echo "\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["state"], "lang", [0 => "en"], "method", false, false, false, 358), "name", [], "any", false, false, false, 358), "html", null, true);
            echo "</option>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['state'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 360
        echo "                                        </select>
                                    </div>
                                    <div class=\"form-group col-lg-4\">
                                        <label>";
        // line 363
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["City"]);
        echo "</label>
                                        <select class=\"form-control city_id\" data-senderaddress=\"locality\" name=\"senderaddress[city]\" title=\"";
        // line 364
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select state first"]);
        echo "\" data-live-search=\"true\">
                                            <option data-hidden=\"true\"></option>
                                            ";
        // line 366
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cities"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["city"]) {
            // line 367
            echo "                                                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["city"], "id", [], "any", false, false, false, 367), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["city"], "name", [], "any", false, false, false, 367), "html", null, true);
            echo "</option>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['city'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 369
        echo "                                        </select>
                                    </div>
                                    <div class=\"form-group col-lg-4\">
                                        <label>";
        // line 372
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["County"]);
        echo "</label>
                                        <select class=\"form-control area_id\" data-senderaddress=\"sublocality\" name=\"senderaddress[county]\" title=\"";
        // line 373
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select city first"]);
        echo "\" data-live-search=\"true\" >
                                            <option data-hidden=\"true\"></option>
                                            ";
        // line 375
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["areas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["county"]) {
            // line 376
            echo "                                                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["county"], "id", [], "any", false, false, false, 376), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["county"], "name", [], "any", false, false, false, 376), "html", null, true);
            echo "</option>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['county'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 378
        echo "                                        </select>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"form-group col-lg-12\">
                                        <label>";
        // line 383
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Google Map"]);
        echo "</label>
                                        <div class=\"col-sm-12 map_canvas map_senderaddress\"></div>
                                        <span class=\"form-text text-muted\">";
        // line 385
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Change the pin to select the right location"]);
        echo "</span>
                                    </div>
                                </div>
                            </div>
        \t\t\t\t</div>
                        <div class=\"kt-portlet__foot\">
            \t\t\t\t<div class=\"row align-items-center\">
            \t\t\t\t\t<div class=\"col-lg-12\">
            \t\t\t\t\t\t<button type=\"button\" class=\"btn btn-success save\">";
        // line 393
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Save"]);
        echo "</button>
            \t\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary cancel\">";
        // line 394
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cancel"]);
        echo "</button>
            \t\t\t\t\t</div>
            \t\t\t\t</div>
            \t\t\t</div>
        \t\t\t</div>
    \t\t\t</div>
                <div class=\"kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit\"></div>
                <div class=\"form-group row\">
                    <label class=\"col-xl-3 col-lg-3 col-form-label\">";
        // line 402
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Payment Type"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                    <div class=\"col-lg-9 col-xl-6\">
                        <select class=\"form-control\" name=\"payment_type\" id=\"payment_type\" required>
                            <option data-hidden=\"true\"></option>
                            <option value=\"1\" ";
        // line 406
        if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payment_type", [], "any", false, false, false, 406) == 1)) {
            echo "selected";
        }
        echo ">";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Postpaid"]);
        echo " </option>
                            <option value=\"2\" ";
        // line 407
        if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payment_type", [], "any", false, false, false, 407) == 2)) {
            echo "selected";
        }
        echo ">";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Prepaid"]);
        echo " </option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"type_2 kt-hidden\">
            <div class=\"kt-portlet kt-portlet--mobile\">
                <div class=\"kt-portlet__head\">
    \t\t\t\t<div class=\"kt-portlet__head-label\">
    \t\t\t\t\t<h3 class=\"kt-portlet__head-title\">
    \t\t\t\t\t\t";
        // line 418
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Receiver information"]);
        echo "
    \t\t\t\t\t</h3>
    \t\t\t\t</div>
    \t\t\t</div>
                <div class=\"kt-portlet__body\">
                    <div class=\"form-group row\">
                        <label>";
        // line 424
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Receiver"]);
        echo "/";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Client"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                        <select class=\"form-control clients\" name=\"receiver_id\" id=\"receiver_id\" equired>
                            <option data-hidden=\"true\"></option>
                            <option value=\"";
        // line 427
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_id", [], "any", false, false, false, 427), "html", null, true);
        echo "\" selected>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver", [], "any", false, false, false, 427), "name", [], "any", false, false, false, 427), "html", null, true);
        echo "</option>
                            ";
        // line 428
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "client", 1 => "c"], "method", false, false, false, 428)) {
            // line 429
            echo "                                <option value=\"new\" data-icon=\"flaticon2-add\">";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Add New"]);
            echo "</option>
                            ";
        }
        // line 431
        echo "                        </select>
                        <span class=\"text-muted\">";
        // line 432
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Choose or add a new client that will receive the package"]);
        echo "</span>
                    </div>
                    <div class=\"form-group row\">
                        <label>";
        // line 435
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Receiver Address"]);
        echo "/";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Client Address"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                        <select class=\"form-control receiver_address_id\" name=\"receiver_address_id\" id=\"receiver_address_id\" data-live-search=\"true\" title=\"";
        // line 436
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select receiver first"]);
        echo "\" required>
                            <option value=\"";
        // line 437
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address_id", [], "any", false, false, false, 437), "html", null, true);
        echo "\" selected>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 437), "name", [], "any", false, false, false, 437), "html", null, true);
        echo "</option>
                            <option data-hidden=\"true\"></option>
                        </select>
                    </div>
                    <div class=\"row kt-hidden\" id=\"addnewreceiver\">
                        <div class=\"kt-portlet kt-portlet--bordered kt-portlet--head--noborder kt-margin-b-0\">
            \t\t\t\t<div class=\"kt-portlet__head\">
            \t\t\t\t\t<div class=\"kt-portlet__head-label\">
            \t\t\t\t\t\t<h3 class=\"kt-portlet__head-title\">
            \t\t\t\t\t\t\t";
        // line 446
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Add a new client"]);
        echo "
            \t\t\t\t\t\t</h3>
            \t\t\t\t\t</div>
            \t\t\t\t</div>
            \t\t\t\t<div class=\"kt-portlet__body\">
                                <div class=\"row\">
                                    <div class=\"form-group col-lg-5\">
                                        <label>";
        // line 453
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Client Name"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                        <input type=\"text\" class=\"form-control name\" name=\"receiver[name]\" required />
                                    </div>
                                    <div class=\"form-group col-lg-4\">
                                        <label>";
        // line 457
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Mobile"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                        <input type=\"text\" class=\"form-control mobile\" name=\"receiver[mobile]\" required />
                                    </div>
                                    <div class=\"form-group col-lg-3\">
                                        <label>";
        // line 461
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Gender"]);
        echo "</label>
                                        <div class=\"kt-radio-inline\">
                \t\t\t\t\t\t\t<label class=\"kt-radio\">
                \t\t\t\t\t\t\t\t<input type=\"radio\" name=\"receiver[gender]\" class=\"gender\" value=\"male\"> ";
        // line 464
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Male"]);
        echo "
                \t\t\t\t\t\t\t\t<span></span>
                \t\t\t\t\t\t\t</label>
                \t\t\t\t\t\t\t<label class=\"kt-radio\">
                \t\t\t\t\t\t\t\t<input type=\"radio\" name=\"receiver[gender]\" class=\"gender\" value=\"female\"> ";
        // line 468
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Female"]);
        echo "
                \t\t\t\t\t\t\t\t<span></span>
                \t\t\t\t\t\t\t</label>
                \t\t\t\t\t\t</div>
                                    </div>
                                </div>
                                <div class=\"location-receiver\">
                                    <div class=\"row\">
                                        <div class=\"form-group col-lg-5\">
                                            <label>";
        // line 477
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Address"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <input type=\"text\" class=\"form-control address street_addr\" data-receiver=\"route\" name=\"receiver[street_address]\"  rel=\"receiver\" required/>
                                            <input type=\"hidden\" class=\"form-control lat\" data-receiver=\"lat\" name=\"receiver[lat]\" />
                                            <input type=\"hidden\" class=\"form-control lng\" data-receiver=\"lng\" name=\"receiver[lng]\" />
                                            <input type=\"hidden\" class=\"form-control url\" data-receiver=\"url\" name=\"receiver[url]\" />
                                        </div>
                                        <div class=\"form-group col-lg-4\">
                                            <label>";
        // line 484
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Country"]);
        echo "</label>
                                            <select class=\"form-control country_id\" data-receiver=\"country\" data-live-search=\"true\" name=\"receiver[country]\">
                                                <option data-hidden=\"true\"></option>
                                                ";
        // line 487
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 488
            echo "                                                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["country"], "id", [], "any", false, false, false, 488), "html", null, true);
            echo "\" ";
            if ((($context["currentLang"] ?? null) != "en")) {
                echo "data-subtext=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["country"], "lang", [0 => ($context["currentLang"] ?? null)], "method", false, false, false, 488), "name", [], "any", false, false, false, 488), "html", null, true);
                echo "\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["country"], "lang", [0 => "en"], "method", false, false, false, 488), "name", [], "any", false, false, false, 488), "html", null, true);
            echo "</option>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 490
        echo "                                            </select>
                                        </div>
                                        <div class=\"form-group col-lg-3\">
                                            <label>";
        // line 493
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Postal Code"]);
        echo "</label>
                                            <input class=\"form-control postal_code\" type=\"text\" data-receiver=\"postal_code\" name=\"receiver[postal_code]\" >
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"form-group col-lg-4\">
                                            <label>";
        // line 499
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["State / Region"]);
        echo "</label>
                                            <select class=\"form-control state_id\" data-receiver=\"administrative_area_level_1\" title=\"";
        // line 500
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select country first"]);
        echo "\" name=\"receiver[state]\" data-live-search=\"true\">
                                                <option data-hidden=\"true\"></option>
                                                ";
        // line 502
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["states"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["state"]) {
            // line 503
            echo "                                                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["state"], "id", [], "any", false, false, false, 503), "html", null, true);
            echo "\" ";
            if ((($context["currentLang"] ?? null) != "en")) {
                echo "data-subtext=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["state"], "lang", [0 => ($context["currentLang"] ?? null)], "method", false, false, false, 503), "name", [], "any", false, false, false, 503), "html", null, true);
                echo "\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["state"], "lang", [0 => "en"], "method", false, false, false, 503), "name", [], "any", false, false, false, 503), "html", null, true);
            echo "</option>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['state'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 505
        echo "                                            </select>
                                        </div>
                                        <div class=\"form-group col-lg-4\">
                                            <label>";
        // line 508
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["City"]);
        echo "</label>
                                            <select class=\"form-control city_id\" data-receiver=\"locality\" name=\"receiver[city]\" title=\"";
        // line 509
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select state first"]);
        echo "\" data-live-search=\"true\">
                                                <option data-hidden=\"true\"></option>
                                                ";
        // line 511
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cities"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["city"]) {
            // line 512
            echo "                                                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["city"], "id", [], "any", false, false, false, 512), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["city"], "name", [], "any", false, false, false, 512), "html", null, true);
            echo "</option>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['city'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 514
        echo "                                            </select>
                                        </div>
                                        <div class=\"form-group col-lg-4\">
                                            <label>";
        // line 517
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["County"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <select class=\"form-control area_id\" data-receiver=\"sublocality\" name=\"receiver[county]\" title=\"";
        // line 518
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select city first"]);
        echo "\" data-live-search=\"true\">
                                                <option data-hidden=\"true\"></option>
                                                ";
        // line 520
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["areas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["county"]) {
            // line 521
            echo "                                                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["county"], "id", [], "any", false, false, false, 521), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["county"], "name", [], "any", false, false, false, 521), "html", null, true);
            echo "</option>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['county'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 523
        echo "                                            </select>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"form-group col-lg-12\">
                                            <label>";
        // line 528
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Google Map"]);
        echo "</label>
                                            <div class=\"col-sm-12 map_canvas map_receiver\"></div>
                                            <span class=\"form-text text-muted\">";
        // line 530
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Change the pin to select the right location"]);
        echo "</span>
                                        </div>
                                    </div>
                                    ";
        // line 533
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "client", 1 => "c"], "method", false, false, false, 533)) {
            // line 534
            echo "                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\"></label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"connect\" class=\"connect\" value=\"receiver\"> ";
            // line 539
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Connect client"]);
            echo ": ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["create an account for the client"]);
            echo "
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"row align-items-center kt-hidden\" id=\"connect_receiver\">
                                            <div class=\"col-md-4\">
                                                <div class=\"form-group kt-form__group--inline\">
                                                    <div class=\"kt-form__label\">
                                                        <label class=\"col-form-label\">";
            // line 549
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Email"]);
            echo ":&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                    </div>
                                                    <div class=\"kt-form__control\">
                                                        <input type=\"text\" class=\"form-control email\" name=\"receiver[email]\" required/>
                                                    </div>
                                                </div>
                                                <div class=\"d-md-none kt-margin-b-10\"></div>
                                            </div>
                                            <div class=\"col-md-4\">
                                                <div class=\"form-group kt-form__group--inline\">
                                                    <div class=\"kt-form__label\">
                                                        <label class=\"col-form-label\">";
            // line 560
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Username"]);
            echo ":&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                    </div>
                                                    <div class=\"kt-form__control\">
                                                        <input type=\"text\" class=\"form-control username\" name=\"receiver[username]\" required>
                                                    </div>
                                                </div>
                                                <div class=\"d-md-none kt-margin-b-10\"></div>
                                            </div>
                                            <div class=\"col-md-4\">
                                                <div class=\"form-group kt-form__group--inline\">
                                                    <div class=\"kt-form__label\">
                                                        <label class=\"col-form-label\">";
            // line 571
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Password"]);
            echo ":&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                    </div>
                                                    <div class=\"kt-form__control\">
                                                        <input type=\"password\" class=\"form-control password\" name=\"receiver[password]\" required>
                                                    </div>
                                                </div>
                                                <div class=\"d-md-none kt-margin-b-10\"></div>
                                            </div>
                                        </div>
                                    ";
        }
        // line 581
        echo "                                </div>
            \t\t\t\t</div>
                            <div class=\"kt-portlet__foot\">
                \t\t\t\t<div class=\"row align-items-center\">
                \t\t\t\t\t<div class=\"col-lg-12\">
                \t\t\t\t\t\t<button type=\"button\" class=\"btn btn-success save\">";
        // line 586
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Save"]);
        echo "</button>
                \t\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary cancel\">";
        // line 587
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cancel"]);
        echo "</button>
                \t\t\t\t\t</div>
                \t\t\t\t</div>
                \t\t\t</div>
            \t\t\t</div>
        \t\t\t</div>
                    <div class=\"row kt-hidden\" id=\"addnewreceiveraddress\">
                        <div class=\"kt-portlet kt-portlet--bordered kt-portlet--head--noborder kt-margin-b-0\">
            \t\t\t\t<div class=\"kt-portlet__head\">
            \t\t\t\t\t<div class=\"kt-portlet__head-label\">
            \t\t\t\t\t\t<h3 class=\"kt-portlet__head-title\">
            \t\t\t\t\t\t\t";
        // line 598
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Add a new client address"]);
        echo "
            \t\t\t\t\t\t</h3>
            \t\t\t\t\t</div>
            \t\t\t\t</div>
            \t\t\t\t<div class=\"kt-portlet__body\">
                                <div class=\"location-receiveraddress\">
                                    <div class=\"row\">
                                        <div class=\"form-group col-lg-5\">
                                            <label>";
        // line 606
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Address"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <input type=\"text\" class=\"form-control address street_addr\" data-receiveraddress=\"route\" name=\"receiveraddress[street_address]\"  rel=\"receiveraddress\" required/>
                                            <input type=\"hidden\" class=\"form-control lat\" data-receiveraddress=\"lat\" name=\"receiveraddress[lat]\" />
                                            <input type=\"hidden\" class=\"form-control lng\" data-receiveraddress=\"lng\" name=\"receiveraddress[lng]\" />
                                            <input type=\"hidden\" class=\"form-control url\" data-receiveraddress=\"url\" name=\"receiveraddress[url]\" />
                                        </div>
                                        <div class=\"form-group col-lg-4\">
                                            <label>";
        // line 613
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Country"]);
        echo "</label>
                                            <select class=\"form-control country_id\" data-receiveraddress=\"country\" data-live-search=\"true\" name=\"receiveraddress[country]\">
                                                <option data-hidden=\"true\"></option>
                                                ";
        // line 616
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 617
            echo "                                                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["country"], "id", [], "any", false, false, false, 617), "html", null, true);
            echo "\" ";
            if ((($context["currentLang"] ?? null) != "en")) {
                echo "data-subtext=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["country"], "lang", [0 => ($context["currentLang"] ?? null)], "method", false, false, false, 617), "name", [], "any", false, false, false, 617), "html", null, true);
                echo "\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["country"], "lang", [0 => "en"], "method", false, false, false, 617), "name", [], "any", false, false, false, 617), "html", null, true);
            echo "</option>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 619
        echo "                                            </select>
                                        </div>
                                        <div class=\"form-group col-lg-3\">
                                            <label>";
        // line 622
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Postal Code"]);
        echo "</label>
                                            <input class=\"form-control postal_code\" type=\"text\" data-sendreceiveraddresser=\"postal_code\" name=\"receiveraddress[postal_code]\" >
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"form-group col-lg-4\">
                                            <label>";
        // line 628
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["State / Region"]);
        echo "</label>
                                            <select class=\"form-control state_id\" data-receiveraddress=\"administrative_area_level_1\" title=\"";
        // line 629
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select country first"]);
        echo "\" name=\"receiveraddress[state]\" data-live-search=\"true\">
                                                <option data-hidden=\"true\"></option>
                                                ";
        // line 631
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["states"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["state"]) {
            // line 632
            echo "                                                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["state"], "id", [], "any", false, false, false, 632), "html", null, true);
            echo "\" ";
            if ((($context["currentLang"] ?? null) != "en")) {
                echo "data-subtext=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["state"], "lang", [0 => ($context["currentLang"] ?? null)], "method", false, false, false, 632), "name", [], "any", false, false, false, 632), "html", null, true);
                echo "\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["state"], "lang", [0 => "en"], "method", false, false, false, 632), "name", [], "any", false, false, false, 632), "html", null, true);
            echo "</option>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['state'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 634
        echo "                                            </select>
                                        </div>
                                        <div class=\"form-group col-lg-4\">
                                            <label>";
        // line 637
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["City"]);
        echo "</label>
                                            <select class=\"form-control city_id\" data-receiveraddress=\"locality\" name=\"receiveraddress[city]\" title=\"";
        // line 638
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select state first"]);
        echo "\" data-live-search=\"true\">
                                                <option data-hidden=\"true\"></option>
                                                ";
        // line 640
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cities"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["city"]) {
            // line 641
            echo "                                                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["city"], "id", [], "any", false, false, false, 641), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["city"], "name", [], "any", false, false, false, 641), "html", null, true);
            echo "</option>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['city'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 643
        echo "                                            </select>
                                        </div>
                                        <div class=\"form-group col-lg-4\">
                                            <label>";
        // line 646
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["County"]);
        echo "</label>
                                            <select class=\"form-control area_id\" data-receiveraddress=\"sublocality\" name=\"receiveraddress[county]\" title=\"";
        // line 647
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select city first"]);
        echo "\" data-live-search=\"true\">
                                                <option data-hidden=\"true\"></option>
                                                ";
        // line 649
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["areas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["county"]) {
            // line 650
            echo "                                                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["county"], "id", [], "any", false, false, false, 650), "html", null, true);
            echo "\" ";
            if ((($context["currentLang"] ?? null) != "en")) {
                echo "data-subtext=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["county"], "lang", [0 => ($context["currentLang"] ?? null)], "method", false, false, false, 650), "name", [], "any", false, false, false, 650), "html", null, true);
                echo "\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["county"], "lang", [0 => "en"], "method", false, false, false, 650), "name", [], "any", false, false, false, 650), "html", null, true);
            echo "</option>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['county'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 652
        echo "                                            </select>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"form-group col-lg-12\">
                                            <label>";
        // line 657
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Google Map"]);
        echo "</label>
                                            <div class=\"col-sm-12 map_canvas map_receiveraddress\"></div>
                                            <span class=\"form-text text-muted\">";
        // line 659
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Change the pin to select the right location"]);
        echo "</span>
                                        </div>
                                    </div>
                                </div>
            \t\t\t\t</div>
                            <div class=\"kt-portlet__foot\">
                \t\t\t\t<div class=\"row align-items-center\">
                \t\t\t\t\t<div class=\"col-lg-12\">
                \t\t\t\t\t\t<button type=\"button\" class=\"btn btn-success save\">";
        // line 667
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Save"]);
        echo "</button>
                \t\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary cancel\">";
        // line 668
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cancel"]);
        echo "</button>
                \t\t\t\t\t</div>
                \t\t\t\t</div>
                \t\t\t</div>
            \t\t\t</div>
        \t\t\t</div>
                    <div class=\"kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit\"></div>
                    <div class=\"form-group row\">
                        <label class=\"col-xl-3 col-lg-3 col-form-label\">";
        // line 676
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Return package cost"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                        <div class=\"col-lg-9 col-xl-6\">
                            <div class=\"kt-radio-inline\">
                                <label class=\"kt-radio\">
                                    <input type=\"radio\" name=\"return_defray\" class=\"return_defray\" value=\"1\" ";
        // line 680
        if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "return_defray", [], "any", false, false, false, 680) == 1)) {
            echo "checked";
        }
        echo " required> ";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yes"]);
        echo "
                                    <span></span>
                                </label>
                                <label class=\"kt-radio\">
                                    <input type=\"radio\" name=\"return_defray\" class=\"return_defray\" value=\"2\" ";
        // line 684
        if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "return_defray", [], "any", false, false, false, 684) == 2)) {
            echo "checked";
        }
        echo " required> ";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No"]);
        echo "
                                    <span></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class=\"form-group row ";
        // line 690
        if ((($context["return_defray"] ?? null) == 2)) {
            echo "kt-hidden";
        }
        echo " package_fee\">
                        <label class=\"col-xl-3 col-lg-3 col-form-label\">";
        // line 691
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Package Cost"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                        <div class=\"col-lg-9 col-xl-6\">
                            <div class=\"input-group\">
                                ";
        // line 694
        if ((twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "place_symbol_before", [], "any", false, false, false, 694) == 1)) {
            // line 695
            echo "                                    <div class=\"input-group-prepend\">
                                        <span class=\"input-group-text\">
                                            ";
            // line 697
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "currency_symbol", [], "any", false, false, false, 697), "html", null, true);
            echo "
                                        </span>
                                    </div>
                                ";
        }
        // line 701
        echo "                \t\t\t\t\t<input type=\"text\" class=\"form-control\" data-type='currency' name=\"package_fee\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "package_fee", [], "any", false, false, false, 701), "html", null, true);
        echo "\" required />
                                ";
        // line 702
        if ((twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "place_symbol_before", [], "any", false, false, false, 702) == 0)) {
            // line 703
            echo "                                    <div class=\"input-group-append\">
                                        <span class=\"input-group-text\">
                                            ";
            // line 705
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "currency_symbol", [], "any", false, false, false, 705), "html", null, true);
            echo "
                                        </span>
                                    </div>
                                ";
        }
        // line 709
        echo "                            </div>
                        </div>
                    </div>
                    ";
        // line 712
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 712) != 5)) {
            // line 713
            echo "                        <div class=\"form-group row ";
            if ((($context["return_defray"] ?? null) == 2)) {
                echo "kt-hidden";
            }
            echo " package_fee\">
                            <label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 714
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Return Shipment Cost"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            <div class=\"col-lg-9 col-xl-6\">
                                <div class=\"input-group\">
                                    ";
            // line 717
            if ((twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "place_symbol_before", [], "any", false, false, false, 717) == 1)) {
                // line 718
                echo "                                        <div class=\"input-group-prepend\">
                                            <span class=\"input-group-text\">
                                                ";
                // line 720
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "currency_symbol", [], "any", false, false, false, 720), "html", null, true);
                echo "
                                            </span>
                                        </div>
                                    ";
            }
            // line 724
            echo "                    \t\t\t\t\t<input type=\"text\" class=\"form-control\" data-type='currency' name=\"return_courier_fee\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "return_courier_fee", [], "any", false, false, false, 724), "html", null, true);
            echo "\" required />
                                    ";
            // line 725
            if ((twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "place_symbol_before", [], "any", false, false, false, 725) == 0)) {
                // line 726
                echo "                                        <div class=\"input-group-append\">
                                            <span class=\"input-group-text\">
                                                ";
                // line 728
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "currency_symbol", [], "any", false, false, false, 728), "html", null, true);
                echo "
                                            </span>
                                        </div>
                                    ";
            }
            // line 732
            echo "                                </div>
                            </div>
                        </div>
                    ";
        }
        // line 736
        echo "                    <div class=\"form-group row ";
        if ((($context["return_defray"] ?? null) == 2)) {
            echo "kt-hidden";
        }
        echo " package_fee\">
                        <label class=\"col-xl-3 col-lg-3 col-form-label\">";
        // line 737
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Return package fees responsiable"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                        <div class=\"col-lg-9 col-xl-6\">
                            <div class=\"kt-radio-inline\">
                                <label class=\"kt-radio\">
                                    <input type=\"radio\" name=\"return_package_fee\" value=\"1\" ";
        // line 741
        if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "return_package_fee", [], "any", false, false, false, 741) == 1)) {
            echo "checked";
        }
        echo " required> ";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Receiver"]);
        echo "
                                    <span></span>
                                </label>
                                <label class=\"kt-radio\">
                                    <input type=\"radio\" name=\"return_package_fee\" value=\"2\" ";
        // line 745
        if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "return_package_fee", [], "any", false, false, false, 745) == 2)) {
            echo "checked";
        }
        echo " required> ";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sender"]);
        echo "
                                    <span></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"row\">
    <div class=\"col-lg-12 type_1\">
        <div class=\"kt-portlet\">
            <div class=\"kt-portlet__head\">
\t\t\t\t<div class=\"kt-portlet__head-label\">
\t\t\t\t\t<h3 class=\"kt-portlet__head-title\">
\t\t\t\t\t\t";
        // line 762
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Shipment Details"]);
        echo "
\t\t\t\t\t</h3>
\t\t\t\t</div>
\t\t\t</div>
            <div class=\"kt-portlet__body\">
                <div class=\"form-group form-group-last kt-hide\">
    \t\t\t\t<div class=\"alert alert-danger kt_form_msg\" role=\"alert\">
    \t\t\t\t\t<div class=\"alert-icon\"><i class=\"flaticon-warning\"></i></div>
    \t\t\t\t  \t<div class=\"alert-text\">
                            ";
        // line 771
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Oh snap! Change a few things up and try submitting again"]);
        echo ".
    \t\t\t\t\t</div>
    \t\t\t\t\t<div class=\"alert-close\">
    \t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
    \t\t\t\t\t    \t<span aria-hidden=\"true\"><i class=\"la la-close\"></i></span>
    \t\t\t\t\t  \t</button>
    \t\t\t\t\t</div>
    \t\t\t\t</div>
    \t\t\t</div>
                <div class=\"kt-section\">
\t\t\t\t\t<h3 class=\"kt-section__title kt-margin-b-20\">
\t\t\t\t\t\t";
        // line 782
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Package Content"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span>
\t\t\t\t\t</h3>
\t\t\t\t\t<div class=\"kt-section__content\" id=\"kt_repeater_1\">
                        <div class=\"form-group form-group-last row\">
                            <div data-repeater-list=\"items\" class=\"col-lg-12\">
                                <div data-repeater-item class=\"align-items-center new\">
                                    <div class=\"form-group row\">
                                        <div class=\"col-md-4\">
                                            <div class=\"kt-form__group--inline\">
                                                <div class=\"kt-form__label\">
                                                    <label>";
        // line 792
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Category"]);
        echo ":</label>
                                                </div>
                                                <div class=\"kt-form__control\">
                                                    <select class=\"form-control selectpicker\" data-live-search=\"true\" name=\"category_id\" required>
                                                        <option data-hidden=\"true\"></option>
                                                        ";
        // line 797
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 798
            echo "                                                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 798), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 798), "html", null, true);
            echo "</option>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 800
        echo "                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-md-8\">
                                            <div class=\"kt-form__group--inline\">
                                                <div class=\"kt-form__label\">
                                                    <label class=\"kt-label m-label--single\">";
        // line 807
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Description"]);
        echo ":</label>
                                                </div>
                                                <div class=\"kt-form__control\">
                                                    <input type=\"text\" class=\"form-control\" name=\"description\">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"form-group row\">
                                        <div class=\"col-md-6\">
                                            <div class=\"kt-form__group--inline\">
                                                <div class=\"kt-form__label\">
                                                    <label class=\"kt-label m-label--single\">";
        // line 819
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Quantity"]);
        echo ":</label>
                                                </div>
                                                <div class=\"kt-form__control\">
                                                    <input type=\"text\" class=\"form-control bootstrap-touchspin-vertical-btn\" name=\"quantity\" value=\"1\">
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <div class=\"kt-form__group--inline\">
                                                <div class=\"kt-form__label\">
                                                    <label class=\"kt-label m-label--single\">";
        // line 829
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Weight"]);
        echo ":</label>
                                                </div>
                                                <div class=\"kt-form__control\">
                                                    <div class=\"input-group\">
                                \t\t\t\t\t\t<div class=\"input-group-prepend\"><span class=\"input-group-text\">";
        // line 833
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Kg"]);
        echo "</span></div>
                        \t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control bootstrap-touchspin-vertical-btn\" name=\"weight\">
                                \t\t\t\t\t</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"form-group row\">
                                        <div class=\"col-md-12\">
                                            <div class=\"kt-form__group--inline\">
                                                <div class=\"kt-form__label\">
                                                    <label class=\"kt-label m-label--single\">";
        // line 844
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Dimensions"]);
        echo "&nbsp;<i class=\"flaticon2-delivery-package\"></i>&nbsp;[";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Length"]);
        echo "&nbsp;x&nbsp;";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Width"]);
        echo "&nbsp;x&nbsp;";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Height"]);
        echo "] (";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["cm"]);
        echo "):</label>
                                                </div>
                                                <div class=\"kt-form__control\">
                                                    <div class=\"input-group\">
                        \t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
                                                            <span class=\"input-group-text\">
                                                                <input type=\"text\" class=\"form-control form-control-sm bootstrap-touchspin-vertical-btn\" name=\"length\" style=\"max-width: 100px;\">
                                                            </span>
                                                        </div>
                        \t\t\t\t\t\t\t\t<div class=\"input-group-prepend\"><span class=\"input-group-text\">x</span></div>
                        \t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
                                                            <span class=\"input-group-text\">
                                                                <input type=\"text\" class=\"form-control form-control-sm bootstrap-touchspin-vertical-btn\" name=\"width\" style=\"max-width: 100px;\">
                                                            </span>
                                                        </div>
                        \t\t\t\t\t\t\t\t<div class=\"input-group-prepend\"><span class=\"input-group-text\">x</span></div>
                        \t\t\t\t\t\t\t\t<div class=\"input-group-append\">
                                                            <span class=\"input-group-text\">
                                                                <input type=\"text\" class=\"form-control form-control-sm bootstrap-touchspin-vertical-btn\" name=\"height\" style=\"max-width: 100px;\">
                                                            </span>
                                                        </div>
                        \t\t\t\t\t\t\t</div>
                                                </div>
                                            </div>
                                            <div class=\"d-md-none kt-margin-b-10\"></div>
                                        </div>
                                    </div>
                                    <div class=\"form-group row\">
                                        <div class=\"col-md-3\">
                                            <a href=\"javascript:;\" data-repeater-delete=\"\" class=\"btn-sm btn btn-label-danger btn-bold kt-margin-t-25 delete_btn\">
                                                <i class=\"la la-trash-o\"></i>
                                                ";
        // line 875
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delete"]);
        echo "
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                ";
        // line 880
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "items", [], "any", false, false, false, 880));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 881
            echo "                                    <div data-repeater-item class=\"align-items-center\">
                                        <input type=\"hidden\" name=\"id\" value=\"";
            // line 882
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 882), "html", null, true);
            echo "\" />
                                        <div class=\"form-group row\">
                                            <div class=\"col-md-4\">
                                                <div class=\"kt-form__group--inline\">
                                                    <div class=\"kt-form__label\">
                                                        <label>";
            // line 887
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Category"]);
            echo ":</label>
                                                    </div>
                                                    <div class=\"kt-form__control\">
                                                        <select class=\"form-control selectpicker\" data-live-search=\"true\" name=\"category_id\" required>
                                                            <option data-hidden=\"true\"></option>
                                                            ";
            // line 892
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 893
                echo "                                                                <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 893), "html", null, true);
                echo "\" ";
                if ((twig_get_attribute($this->env, $this->source, $context["item"], "category_id", [], "any", false, false, false, 893) == twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 893))) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 893), "html", null, true);
                echo "</option>
                                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 895
            echo "                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col-md-8\">
                                                <div class=\"kt-form__group--inline\">
                                                    <div class=\"kt-form__label\">
                                                        <label class=\"kt-label m-label--single\">";
            // line 902
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Description"]);
            echo ":</label>
                                                    </div>
                                                    <div class=\"kt-form__control\">
                                                        <input type=\"text\" class=\"form-control\" name=\"description\" value=\"";
            // line 905
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 905), "html", null, true);
            echo "\">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <div class=\"col-md-6\">
                                                <div class=\"kt-form__group--inline\">
                                                    <div class=\"kt-form__label\">
                                                        <label class=\"kt-label m-label--single\">";
            // line 914
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Quantity"]);
            echo ":</label>
                                                    </div>
                                                    <div class=\"kt-form__control\">
                                                        <input type=\"text\" class=\"form-control bootstrap-touchspin-vertical-btn\" name=\"quantity\" value=\"";
            // line 917
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 917), "html", null, true);
            echo "\">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col-md-6\">
                                                <div class=\"kt-form__group--inline\">
                                                    <div class=\"kt-form__label\">
                                                        <label class=\"kt-label m-label--single\">";
            // line 924
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Weight"]);
            echo ":</label>
                                                    </div>
                                                    <div class=\"kt-form__control\">
                                                        <div class=\"input-group\">
                                    \t\t\t\t\t\t<div class=\"input-group-prepend\"><span class=\"input-group-text\">";
            // line 928
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Kg"]);
            echo "</span></div>
                            \t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control bootstrap-touchspin-vertical-btn\" name=\"weight\" value=\"";
            // line 929
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "weight", [], "any", false, false, false, 929), "html", null, true);
            echo "\">
                                    \t\t\t\t\t</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <div class=\"col-md-12\">
                                                <div class=\"kt-form__group--inline\">
                                                    <div class=\"kt-form__label\">
                                                        <label class=\"kt-label m-label--single\">";
            // line 939
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Dimensions"]);
            echo "&nbsp;<i class=\"flaticon2-delivery-package\"></i>&nbsp;[";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Length"]);
            echo "&nbsp;x&nbsp;";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Width"]);
            echo "&nbsp;x&nbsp;";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Height"]);
            echo "] (";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["cm"]);
            echo "):</label>
                                                    </div>
                                                    <div class=\"kt-form__control\">
                                                        <div class=\"input-group\">
                            \t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
                                                                <span class=\"input-group-text\">
                                                                    <input type=\"text\" class=\"form-control form-control-sm bootstrap-touchspin-vertical-btn\" name=\"length\" value=\"";
            // line 945
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "length", [], "any", false, false, false, 945), "html", null, true);
            echo "\" style=\"max-width: 100px;\">
                                                                </span>
                                                            </div>
                            \t\t\t\t\t\t\t\t<div class=\"input-group-prepend\"><span class=\"input-group-text\">x</span></div>
                            \t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
                                                                <span class=\"input-group-text\">
                                                                    <input type=\"text\" class=\"form-control form-control-sm bootstrap-touchspin-vertical-btn\" name=\"width\" value=\"";
            // line 951
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "width", [], "any", false, false, false, 951), "html", null, true);
            echo "\" style=\"max-width: 100px;\">
                                                                </span>
                                                            </div>
                            \t\t\t\t\t\t\t\t<div class=\"input-group-prepend\"><span class=\"input-group-text\">x</span></div>
                            \t\t\t\t\t\t\t\t<div class=\"input-group-append\">
                                                                <span class=\"input-group-text\">
                                                                    <input type=\"text\" class=\"form-control form-control-sm bootstrap-touchspin-vertical-btn\" name=\"height\" value=\"";
            // line 957
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "height", [], "any", false, false, false, 957), "html", null, true);
            echo "\" style=\"max-width: 100px;\">
                                                                </span>
                                                            </div>
                            \t\t\t\t\t\t\t</div>
                                                    </div>
                                                </div>
                                                <div class=\"d-md-none kt-margin-b-10\"></div>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <div class=\"col-md-3\">
                                                <a href=\"javascript:;\" data-repeater-delete=\"\" class=\"btn-sm btn btn-label-danger btn-bold kt-margin-t-25\">
                                                    <i class=\"la la-trash-o\"></i>
                                                    ";
            // line 970
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delete"]);
            echo "
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 976
        echo "                            </div>
                         </div>
                         <div class=\"form-group form-group-last row\">
                             <label class=\"col-xl-3 col-lg-3 col-form-label\">
                                 <a href=\"javascript:;\" data-repeater-create=\"\" class=\"btn btn-bold btn-sm btn-label-brand\">
                                     <i class=\"la la-plus\"></i> ";
        // line 981
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Add Item"]);
        echo "
                                 </a>
                             </label>
                        </div>
                    </div>
                </div>
                ";
        // line 987
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 987) != 5)) {
            // line 988
            echo "                    <div class=\"kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit\"></div>
                    <div class=\"kt-section\">
    \t\t\t\t\t<div class=\"kt-section__content\">
                            <div class=\"row\">
                                <div class=\"form-group col-lg-4\">
                                    <label>";
            // line 993
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Order Number"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                    <div class=\"input-group\">
                \t\t\t\t\t\t<div class=\"input-group-prepend\"><span class=\"input-group-text\">";
            // line 995
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "tracking", [], "any", false, false, false, 995), "prefix_order", [], "any", false, false, false, 995), "html", null, true);
            echo "</span></div>
                \t\t\t\t\t\t<input type=\"text\" class=\"form-control mask\" name=\"number\" value=\"";
            // line 996
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "number", [], "any", false, false, false, 996), "html", null, true);
            echo "\" aria-describedby=\"basic-addon1\">
                \t\t\t\t\t</div>
                                </div>
                                <div class=\"form-group col-lg-4\">
                                    <label>";
            // line 1000
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Tax"]);
            echo " & ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Duty"]);
            echo "</label>
                                    <div class=\"input-group\">
                \t\t\t\t\t\t<div class=\"input-group-prepend\"><span class=\"input-group-text\">%</span></div>
                \t\t\t\t\t\t<input type=\"text\" class=\"form-control bootstrap-touchspin-vertical-btn\" name=\"tax\" value=\"";
            // line 1003
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "tax", [], "any", false, false, false, 1003), "html", null, true);
            echo "\">
                \t\t\t\t\t</div>
                                </div>
                                <div class=\"form-group col-lg-4\">
                                    <label>";
            // line 1007
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Insurance"]);
            echo "</label>
                                    <div class=\"input-group\">
                \t\t\t\t\t\t<div class=\"input-group-prepend\"><span class=\"input-group-text\">%</span></div>
                \t\t\t\t\t\t<input type=\"text\" class=\"form-control bootstrap-touchspin-vertical-btn\" name=\"insurance\" value=\"";
            // line 1010
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "insurance", [], "any", false, false, false, 1010), "html", null, true);
            echo "\">
                \t\t\t\t\t</div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"form-group col-lg-4\">
                                    <label>";
            // line 1016
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Shipping Mode"]);
            echo "</label>
                                    <select class=\"form-control\" data-live-search=\"true\" name=\"mode_id\">
                                        <option data-hidden=\"true\"></option>
                                        ";
            // line 1019
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["modes"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["mode"]) {
                // line 1020
                echo "                                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mode"], "id", [], "any", false, false, false, 1020), "html", null, true);
                echo "\" ";
                if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "mode_id", [], "any", false, false, false, 1020) == twig_get_attribute($this->env, $this->source, $context["mode"], "id", [], "any", false, false, false, 1020))) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mode"], "name", [], "any", false, false, false, 1020), "html", null, true);
                echo "</option>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mode'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1022
            echo "                                    </select>
                                </div>
                                <div class=\"form-group col-lg-4\">
                                    <label>";
            // line 1025
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Customs Value"]);
            echo "</label>
                                    <input type=\"text\" class=\"form-control\" name=\"customs_value\" value=\"";
            // line 1026
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "customs_value", [], "any", false, false, false, 1026), "html", null, true);
            echo "\" aria-describedby=\"basic-addon1\">
                                </div>
                                <div class=\"form-group col-lg-4\">
                                    <label>";
            // line 1029
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Courier Company"]);
            echo "</label>
                                    <select class=\"form-control\" data-live-search=\"true\" name=\"courier_id\">
                                        <option data-hidden=\"true\"></option>
                                        ";
            // line 1032
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["couriers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["courier"]) {
                // line 1033
                echo "                                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["courier"], "id", [], "any", false, false, false, 1033), "html", null, true);
                echo "\" ";
                if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "courier_id", [], "any", false, false, false, 1033) == twig_get_attribute($this->env, $this->source, $context["courier"], "id", [], "any", false, false, false, 1033))) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["courier"], "name", [], "any", false, false, false, 1033), "html", null, true);
                echo "</option>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['courier'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1035
            echo "                                    </select>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"form-group col-lg-4\">
                                    <label>";
            // line 1040
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Shipping Fee"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                    <div class=\"input-group\">
                                        ";
            // line 1042
            if ((twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "place_symbol_before", [], "any", false, false, false, 1042) == 1)) {
                // line 1043
                echo "                                            <div class=\"input-group-prepend\">
                                                <span class=\"input-group-text\">
                                                    ";
                // line 1045
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "currency_symbol", [], "any", false, false, false, 1045), "html", null, true);
                echo "
                                                </span>
                                            </div>
                                        ";
            }
            // line 1049
            echo "                                        <input type=\"text\" class=\"form-control\" data-type='currency' name=\"courier_fee\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "courier_fee", [], "any", false, false, false, 1049), "html", null, true);
            echo "\" required>
                                        ";
            // line 1050
            if ((twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "place_symbol_before", [], "any", false, false, false, 1050) == 0)) {
                // line 1051
                echo "                                            <div class=\"input-group-append\">
                                                <span class=\"input-group-text\">
                                                    ";
                // line 1053
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "currency_symbol", [], "any", false, false, false, 1053), "html", null, true);
                echo "
                                                </span>
                                            </div>
                                        ";
            }
            // line 1057
            echo "                                    </div>
                                </div>
                                <div class=\"form-group col-lg-4\">
                                    <label>";
            // line 1060
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delivery Time"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                    <select class=\"form-control\" data-live-search=\"true\" name=\"delivery_time_id\" required>
                                        <option data-hidden=\"true\"></option>
                                        ";
            // line 1063
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["deliverytimes"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["deliverytime"]) {
                // line 1064
                echo "                                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["deliverytime"], "id", [], "any", false, false, false, 1064), "html", null, true);
                echo "\" ";
                if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "delivery_time_id", [], "any", false, false, false, 1064) == twig_get_attribute($this->env, $this->source, $context["deliverytime"], "id", [], "any", false, false, false, 1064))) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["deliverytime"], "name", [], "any", false, false, false, 1064), "html", null, true);
                echo "</option>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['deliverytime'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1066
            echo "                                    </select>
                                </div>
                                <div class=\"form-group col-lg-4\">
                                    <label>";
            // line 1069
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delivery Status"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                    <select class=\"form-control\" data-live-search=\"true\" name=\"status_id\" required>
                                        <option data-hidden=\"true\"></option>
                                        ";
            // line 1072
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["statuses"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
                // line 1073
                echo "                                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["status"], "id", [], "any", false, false, false, 1073), "html", null, true);
                echo "\" ";
                if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "status_id", [], "any", false, false, false, 1073) == twig_get_attribute($this->env, $this->source, $context["status"], "id", [], "any", false, false, false, 1073))) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["status"], "name", [], "any", false, false, false, 1073), "html", null, true);
                echo "</option>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['status'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1075
            echo "                                    </select>
                                </div>
                            </div>
                            ";
            // line 1078
            if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "assign", 1 => "c"], "method", false, false, false, 1078)) {
                // line 1079
                echo "                                <div class=\"form-group row kt-margin-t-20\">
                                    <label class=\"col-xl-3 col-lg-3 col-form-label\">";
                // line 1080
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Assign Employee"]);
                echo "</label>
                                    <div class=\"col-lg-9 col-xl-6\">
                                        <select class=\"form-control\" data-live-search=\"true\" name=\"assigned_id\">
                                            <option data-hidden=\"true\"></option>
                                            ";
                // line 1084
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["employees"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["employee"]) {
                    // line 1085
                    echo "                                                <option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "id", [], "any", false, false, false, 1085), "html", null, true);
                    echo "\" ";
                    if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "assigned_id", [], "any", false, false, false, 1085) == twig_get_attribute($this->env, $this->source, $context["employee"], "id", [], "any", false, false, false, 1085))) {
                        echo "selected";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "name", [], "any", false, false, false, 1085), "html", null, true);
                    echo "</option>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employee'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1087
                echo "                                        </select>
                                    </div>
                                </div>
                            ";
            }
            // line 1091
            echo "                        </div>
                    </div>
                ";
        }
        // line 1094
        echo "            </div>
        </div>
    </div>
</div>
<div class=\"row\">
    <div class=\"col-lg-12\">
        <div class=\"kt-portlet\">
            <div class=\"kt-portlet__foot\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <button type=\"submit\" class=\"btn btn-primary save\">";
        // line 1104
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Update"]);
        echo "</button>
                        <span class=\"kt-margin-left-10\">";
        // line 1105
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["or"]);
        echo " <a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 1105), "child_of", [], "any", false, false, false, 1105));
        echo "\" class=\"kt-link\">";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cancel"]);
        echo "</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        // line 1112
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
        echo "

";
        // line 1114
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('styles'        );
        // line 1115
        echo "    <style>
        .table-bordered tr td:first-child {
            width: 200px;
            font-weight: bold;
        }
        .map_canvas {
          height: 350px;
        }
        .filter-option-inner br {
            display: none;
        }
        .select2 {
            width: 100% !important;
        }
\t\t.select2-selection {
\t\t\tmin-height: 36px !important;
\t\t}
        #addnewsender,#addnewsenderaddress,#addnewreceiver,#addnewreceiveraddress{
            box-shadow: 0px 0px 2px 1px rgba(0,0,0,0.3);
        }
        .kt-portlet .kt-portlet__head .kt-portlet__head-label .kt-portlet__head-title {
            font-weight: 700;
        }
    </style>
";
        // line 1114
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
        // line 1140
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 1141
        echo "<script src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/admin/vendors/custom/geocomplete/jquery.geocomplete.js");
        echo "\" type=\"text/javascript\"></script>
<script src=\"https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyCjN-FapLWoOHL6QOnVcwjFmesRdCyUiAc\"></script>
<script type=\"text/javascript\">
KTUtil.ready(function () {
    \$( \".kt_form\" ).validate({
        ignore: \":hidden\",
        invalidHandler: function(event, validator) {
            var alert = \$('.kt_form_msg');
            alert.removeClass('kt--hide').show();
            KTUtil.scrollTop();
        }
    });

    function formatRepo(repo) {
        if (repo.loading) return repo.text;
        var markup = \"<div class='select2-result-repository clearfix'>\" +
                        \"<div class='select2-result-repository__meta'>\" +
                        \"<div class='select2-result-repository__title'>\" + repo.text + \"</div>\";
                        if (repo.mobile) {
                            markup += \"<div class='select2-result-repository__description'>\" + repo.mobile + \"</div>\";
                        }
                    markup += \"</div></div>\";
        return markup;
    }

    function formatRepoSelection(repo) {
        return repo.text || repo.id;
    }


    \$('body').on('click', '#type', function(e){
        var selected = \$(this).val();
        if(selected == 2){
            \$('.type_2').removeClass('kt-hidden');
            \$('.type_1').addClass('col-lg-6');
            \$('.type_1').removeClass('col-lg-12');
        }else{
            \$('.type_2').addClass('kt-hidden');
            \$('.type_1').removeClass('col-lg-6');
            \$('.type_1').addClass('col-lg-12');
        }
    });
    \$('body').on('change', '#sender_id', function(e, clickedIndex, newValue, oldValue){
        var selected = \$(e.currentTarget).val();
        if(selected == 'new'){
            \$('select.sender_address_id').html('').val('').selectpicker('refresh');
            \$('#addnewsender').removeClass('kt-hidden');
        }else if(selected != ''){
            \$('#addnewsender').addClass('kt-hidden');
            \$.request('onClientaddresses', {
                 data: {id: selected},
                 success: function(response, status, xhr, \$form) {
                     \$('select.sender_address_id').html(response.html).selectpicker('refresh');
                     \$('select.sender_address_id').val(response.default).selectpicker('refresh');
                     if(response.default == 'new'){
                         \$('#addnewsenderaddress').removeClass('kt-hidden');
                     }else if(selected != ''){
                         \$('#addnewsenderaddress').addClass('kt-hidden');
                     }
                 }
            });
        }
    });
    \$('body').on('click', '#addnewsender .save', function(e){
        e.preventDefault();
        var parent = \$('#addnewsender');
        var validation = 1;
        parent.find('input,select').each(function(){
            if(\$(this).is(':hidden')){
                return;
            }
            if(\$(this).valid() == false){
                validation = 0;
            }
        });

        if(validation){
            KTApp.blockPage({
                overlayColor: '#000000',
                type: 'v2',
                state: 'primary',
                message: '";
        // line 1222
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Processing, please wait"]);
        echo "...'
            });
            \$.request('onNewclient', {
                 data: {name: parent.find('.name').val(), mobile: parent.find('.mobile').val(), email: parent.find('.email').val(), gender: parent.find('.gender:checked').val(), street_addr: parent.find('.street_addr').val(), lat: parent.find('.lat').val(), lng: parent.find('.lng').val(), url: parent.find('.url').val(), area_id: parent.find('.area_id').find(\"option:selected\").val(), city_id: parent.find('.city_id').find(\"option:selected\").val(), postal_code: parent.find('.postal_code').val(), state_id: parent.find('.state_id').find(\"option:selected\").val(), country_id: parent.find('.country_id').find(\"option:selected\").val(), connect: parent.find('.connect:checked').val(), username: parent.find('.username').val(), password: parent.find('.password').val()},
                 error: function(response, status, xhr, \$form) {
                     swal.fire({
                         title: '";
        // line 1228
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Error!"]);
        echo "',
                         text: response.responseText,
                         type: 'error',
                         buttonsStyling: false,
                         confirmButtonText: '";
        // line 1232
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["OK"]);
        echo "',
                         confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                     });
                     KTApp.unblockPage();
                 },
                 success: function(response, status, xhr, \$form) {
                     var newOption = new Option(response.name, response.id, false, true);
                     \$('#sender_id').append(newOption).trigger('change');
                     \$('select.sender_address_id').html('<option value=\"'+response.address_id+'\">'+response.address_name+'</option>').selectpicker('refresh');
                     \$('select.sender_address_id').val(response.address_id).selectpicker('refresh');
                     KTApp.unblockPage();
                     parent.find('input,select').each(function(){
                         \$(this).val('');
                         \$(this).selectpicker('refresh');
                     });
                     \$('#addnewsender').addClass('kt-hidden');
                 }
            });
        }
    });
    \$('body').on('click', '#addnewsender .cancel', function(e){
        e.preventDefault();
        var newOption = new Option('', '', false, true);
        \$('#sender_id').append(newOption).trigger('change');
        \$('#addnewsender').addClass('kt-hidden');
    });

    \$('body').on('changed.bs.select', '.sender_address_id', function(e, clickedIndex, newValue, oldValue){
        var selected = \$(e.currentTarget).val();
        if(selected == 'new'){
            \$('#addnewsenderaddress').removeClass('kt-hidden');
        }else if(selected != ''){
            \$('#addnewsenderaddress').addClass('kt-hidden');
        }
    });
    \$('body').on('click', '#addnewsenderaddress .save', function(e){
        e.preventDefault();
        var parent = \$('#addnewsenderaddress');
        var validation = 1;
        parent.find('input,select').each(function(){
            if(\$(this).is(':hidden')){
                return;
            }
            if(\$(this).valid() == false){
                validation = 0;
            }
        });

        if(validation){
            KTApp.blockPage({
                overlayColor: '#000000',
                type: 'v2',
                state: 'primary',
                message: '";
        // line 1285
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Processing, please wait"]);
        echo "...'
            });
            \$.request('onNewclientaddress', {
                 data: {client_id: \$('#sender_id').val(), street_addr: parent.find('.street_addr').val(), lat: parent.find('.lat').val(), lng: parent.find('.lng').val(), url: parent.find('.url').val(), area_id: parent.find('.area_id').find(\"option:selected\").val(), city_id: parent.find('.city_id').find(\"option:selected\").val(), postal_code: parent.find('.postal_code').val(), state_id: parent.find('.state_id').find(\"option:selected\").val(), country_id: parent.find('.country_id').find(\"option:selected\").val()},
                 error: function(response, status, xhr, \$form) {
                     swal.fire({
                         title: '";
        // line 1291
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Error!"]);
        echo "',
                         text: response.responseText,
                         type: 'error',
                         buttonsStyling: false,
                         confirmButtonText: '";
        // line 1295
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["OK"]);
        echo "',
                         confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                     });
                     KTApp.unblockPage();
                 },
                 success: function(response, status, xhr, \$form) {
                     \$('select.sender_address_id').html(response.html).selectpicker('refresh');
                     \$('select.sender_address_id').val(response.default).selectpicker('refresh');
                     KTApp.unblockPage();
                     parent.find('input,select').each(function(){
                         \$(this).val('');
                         \$(this).selectpicker('refresh');
                     });
                     \$('#addnewsenderaddress').addClass('kt-hidden');
                 }
            });
        }
    });
    \$('body').on('click', '#addnewsenderaddress .cancel', function(e){
        e.preventDefault();
        \$('select.sender_address_id').val('').selectpicker('refresh');
        \$('#addnewsenderaddress').addClass('kt-hidden');
    });



    \$('body').on('change', '#receiver_id', function(e, clickedIndex, newValue, oldValue){
        var selected = \$(e.currentTarget).val();
        if(selected == 'new'){
            \$('select.receiver_address_id').html('').val('').selectpicker('refresh');
            \$('#addnewreceiver').removeClass('kt-hidden');
        }else if(selected != ''){
            \$('#addnewreceiver').addClass('kt-hidden');
            \$.request('onClientaddresses', {
                 data: {id: selected},
                 success: function(response, status, xhr, \$form) {
                     \$('select.receiver_address_id').html(response.html).selectpicker('refresh');
                     \$('select.receiver_address_id').val(response.default).selectpicker('refresh');
                     if(response.default == 'new'){
                         \$('#addnewreceiveraddress').removeClass('kt-hidden');
                     }else if(selected != ''){
                         \$('#addnewreceiveraddress').addClass('kt-hidden');
                     }
                 }
            });
        }
    });
    \$('body').on('click', '#addnewreceiver .save', function(e){
        e.preventDefault();
        var parent = \$('#addnewreceiver');
        var validation = 1;
        parent.find('input,select').each(function(){
            if(\$(this).is(':hidden')){
                return;
            }
            if(\$(this).valid() == false){
                validation = 0;
            }
        });

        if(validation){
            KTApp.blockPage({
                overlayColor: '#000000',
                type: 'v2',
                state: 'primary',
                message: '";
        // line 1360
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Processing, please wait"]);
        echo "...'
            });
            \$.request('onNewclient', {
                 data: {name: parent.find('.name').val(), mobile: parent.find('.mobile').val(), email: parent.find('.email').val(), gender: parent.find('.gender:checked').val(), street_addr: parent.find('.street_addr').val(), lat: parent.find('.lat').val(), lng: parent.find('.lng').val(), url: parent.find('.url').val(), area_id: parent.find('.area_id').find(\"option:selected\").val(), city_id: parent.find('.city_id').find(\"option:selected\").val(), postal_code: parent.find('.postal_code').val(), state_id: parent.find('.state_id').find(\"option:selected\").val(), country_id: parent.find('.country_id').find(\"option:selected\").val(), connect: parent.find('.connect:checked').val(), username: parent.find('.username').val(), password: parent.find('.password').val()},
                 error: function(response, status, xhr, \$form) {
                     swal.fire({
                         title: '";
        // line 1366
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Error!"]);
        echo "',
                         text: response.responseText,
                         type: 'error',
                         buttonsStyling: false,
                         confirmButtonText: '";
        // line 1370
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["OK"]);
        echo "',
                         confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                     });
                     KTApp.unblockPage();
                 },
                 success: function(response, status, xhr, \$form) {
                     var newOption = new Option(response.name, response.id, false, true);
                     \$('#receiver_id').append(newOption).trigger('change');
                     \$('select.receiver_address_id').html('<option value=\"'+response.address_id+'\">'+response.address_name+'</option>').selectpicker('refresh');
                     \$('select.receiver_address_id').val(response.address_id).selectpicker('refresh');
                     KTApp.unblockPage();
                     parent.find('input,select').each(function(){
                         \$(this).val('');
                         \$(this).selectpicker('refresh');
                     });
                     \$('#addnewreceiver').addClass('kt-hidden');
                 }
            });
        }
    });
    \$('body').on('click', '#addnewreceiver .cancel', function(e){
        e.preventDefault();
        var newOption = new Option('', '', false, true);
        \$('#receiver_id').append(newOption).trigger('change');
        \$('#addnewreceiver').addClass('kt-hidden');
    });

    \$('body').on('changed.bs.select', '.receiver_address_id', function(e, clickedIndex, newValue, oldValue){
        var selected = \$(e.currentTarget).val();
        if(selected == 'new'){
            \$('#addnewreceiveraddress').removeClass('kt-hidden');
        }else if(selected != ''){
            \$('#addnewreceiveraddress').addClass('kt-hidden');
        }
    });
    \$('body').on('click', '#addnewreceiveraddress .save', function(e){
        e.preventDefault();
        var parent = \$('#addnewreceiveraddress');
        var validation = 1;
        parent.find('input,select').each(function(){
            if(\$(this).is(':hidden')){
                return;
            }
            if(\$(this).valid() == false){
                validation = 0;
            }
        });

        if(validation){
            KTApp.blockPage({
                overlayColor: '#000000',
                type: 'v2',
                state: 'primary',
                message: '";
        // line 1423
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Processing, please wait"]);
        echo "...'
            });
            \$.request('onNewclientaddress', {
                 data: {client_id: \$('#receiver_id').val(), street_addr: parent.find('.street_addr').val(), lat: parent.find('.lat').val(), lng: parent.find('.lng').val(), url: parent.find('.url').val(), area_id: parent.find('.area_id').find(\"option:selected\").val(), city_id: parent.find('.city_id').find(\"option:selected\").val(), postal_code: parent.find('.postal_code').val(), state_id: parent.find('.state_id').find(\"option:selected\").val(), country_id: parent.find('.country_id').find(\"option:selected\").val()},
                 error: function(response, status, xhr, \$form) {
                     swal.fire({
                         title: '";
        // line 1429
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Error!"]);
        echo "',
                         text: response.responseText,
                         type: 'error',
                         buttonsStyling: false,
                         confirmButtonText: '";
        // line 1433
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["OK"]);
        echo "',
                         confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                     });
                     KTApp.unblockPage();
                 },
                 success: function(response, status, xhr, \$form) {
                     \$('select.receiver_address_id').html(response.html).selectpicker('refresh');
                     \$('select.receiver_address_id').val(response.default).selectpicker('refresh');
                     KTApp.unblockPage();
                     parent.find('input,select').each(function(){
                         \$(this).val('');
                         \$(this).selectpicker('refresh');
                     });
                     \$('#addnewreceiveraddress').addClass('kt-hidden');
                 }
            });
        }
    });
    \$('body').on('click', '#addnewreceiveraddress .cancel', function(e){
        e.preventDefault();
        \$('select.receiver_address_id').val('').selectpicker('refresh');
        \$('#addnewreceiveraddress').addClass('kt-hidden');
    });


    \$('body').on('changed.bs.select', '.country_id', function(e, clickedIndex, newValue, oldValue){
        var selected = \$(e.currentTarget).val();
        var parent = \$(e.currentTarget).parent().parent().parent().parent();
        if(selected != ''){
            \$.request('onListstates', {
                 data: {id: selected},
                 success: function(response, status, xhr, \$form) {
                      parent.find('select.state_id').selectpicker({title: '";
        // line 1465
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Select"]);
        echo "'}).selectpicker('refresh');
                      parent.find('select.state_id').html(response.html).selectpicker('refresh');
                 }
            });
       }
    });
    \$('body').on('changed.bs.select', '.state_id', function(e, clickedIndex, newValue, oldValue){
        var selected = \$(e.currentTarget).val();
        var parent = \$(e.currentTarget).parent().parent().parent().parent();
        if(selected != ''){
            \$.request('onListcities', {
                 data: {id: selected},
                 success: function(response, status, xhr, \$form) {
                      parent.find('select.city_id').selectpicker({title: '";
        // line 1478
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Select"]);
        echo "'}).selectpicker('refresh');
                      parent.find('select.city_id').html(response.html).selectpicker('refresh');
                 }
            });
       }
    });
    \$('body').on('changed.bs.select', '.city_id', function(e, clickedIndex, newValue, oldValue){
        var selected = \$(e.currentTarget).val();
        var parent = \$(e.currentTarget).parent().parent().parent().parent();
        if(selected != ''){
            \$.request('onListareas', {
                 data: {id: selected},
                 success: function(response, status, xhr, \$form) {
                      parent.find('select.area_id').selectpicker({title: '";
        // line 1491
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Select"]);
        echo "'}).selectpicker('refresh');
                      parent.find('select.area_id').html(response.html).selectpicker('refresh');
                 }
            });
       }
    });


    \$(\".clients\").select2({
        ";
        // line 1500
        if ((($context["currentLang"] ?? null) == "ar")) {
            // line 1501
            echo "            dir: \"rtl\",
        ";
        }
        // line 1503
        echo "        language: {
            errorLoading: function () {
                return \"";
        // line 1505
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["There is an error while searching"]);
        echo "...\";
            },
            inputTooLong: function (args) {
                return \"";
        // line 1508
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["You must enter less characters"]);
        echo "...\";
            },
            inputTooShort: function (args) {
                return \"";
        // line 1511
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["You must enter more characters"]);
        echo "...\";
            },
            loadingMore: function () {
                return \"";
        // line 1514
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Loading More"]);
        echo "...\";
            },
            maximumSelected: function (args) {
                return \"";
        // line 1517
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Maximum element has been selected"]);
        echo "...\";
            },
            noResults: function () {
                return \"";
        // line 1520
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No result found"]);
        echo "...\";
            },
            searching: function () {
                return \"";
        // line 1523
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Searching"]);
        echo "...\";
            }
        },
        placeholder: \"";
        // line 1526
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Search for client"]);
        echo "\",
        allowClear: true,
        ajax: {
            transport: function(params, success, failure) {
                var \$request = \$.request('onGetclients', {
                    data: params.data,
                })
                \$request.done(success)
                \$request.fail(failure)

                return \$request
            },
            dataType: 'json',
            processResults: function (response) {
                return {
                    results: response
                };
            },
            cache: true
        },
        escapeMarkup: function(markup) {
            return markup;
        },
        minimumInputLength: 0,
        templateResult: formatRepo,
        templateSelection: formatRepoSelection
    });
    \$('#kt_repeater_1').repeater({
        initEmpty: false,
        show: function () {
            \$(this).slideDown();
            \$('.selectpicker').selectpicker({
                noneSelectedText: '";
        // line 1558
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Nothing selected"]);
        echo "',
            });
            \$('.bootstrap-touchspin-vertical-btn').TouchSpin({
                buttondown_class: 'btn btn-secondary',
                buttonup_class: 'btn btn-secondary',
                verticalbuttons: true,
                verticalup: '<i class=\"la la-plus\"></i>',
                verticaldown: '<i class=\"la la-minus\"></i>'
            });
        },
        hide: function (deleteElement) {
            \$(this).slideUp(deleteElement);
        }
    });
    \$('#kt_repeater_1 .new .delete_btn').trigger('click');
    \$('.bootstrap-touchspin-vertical-btn').TouchSpin({
        buttondown_class: 'btn btn-secondary',
        buttonup_class: 'btn btn-secondary',
        verticalbuttons: true,
        verticalup: '<i class=\"la la-plus\"></i>',
        verticaldown: '<i class=\"la la-minus\"></i>'
    });

    \$('.address').each(function(){
        var address = \$(this);
        address.geocomplete({
            map: \".map_canvas.map_\"+address.attr('rel'),
            mapOptions: {
                zoom: 18
            },
            markerOptions: {
                draggable: true
            },
            details: \".location-\"+\$(this).attr('rel'),
            detailsAttribute: 'data-'+\$(this).attr('rel'),
            autoselect: true,
        });
        address.bind(\"geocode:dragged\", function(event, latLng){
            \$(\"input[data-\"+address.attr('rel')+\"=lat]\").val(latLng.lat());
            \$(\"input[data-\"+address.attr('rel')+\"=lng]\").val(latLng.lng());
        });

    });

    \$('body').on('click', '.connect', function(){
        if(\$(this).is(\":checked\")){
            \$('#connect_'+\$(this).val()).removeClass('kt-hidden');
        }else{
            \$('#connect_'+\$(this).val()).addClass('kt-hidden');
        }
    });
    \$('body').on('click', '.return_defray', function(){
        if(\$(this).val() == 1){
            \$('.package_fee').removeClass('kt-hidden');
        }else{
            \$('.package_fee').addClass('kt-hidden');
        }
    });
    \$(\".fees\").inputmask('999";
        // line 1616
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "thousand_separator", [], "any", false, false, false, 1616), "html", null, true);
        echo "999";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "thousand_separator", [], "any", false, false, false, 1616), "html", null, true);
        echo "999";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "decimal_point", [], "any", false, false, false, 1616), "html", null, true);
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range("1", twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "initbiz_money_fraction_digits", [], "any", false, false, false, 1616)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            echo "9";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "', {
        numericInput: true
    });
    \$('.mask').val(('";
        // line 1619
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range("1", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "tracking", [], "any", false, false, false, 1619), "numbers_order", [], "any", false, false, false, 1619)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            echo "0";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "' + ";
        echo twig_escape_filter($this->env, ($context["max"] ?? null), "html", null, true);
        echo ").slice(-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "tracking", [], "any", false, false, false, 1619), "numbers_order", [], "any", false, false, false, 1619), "html", null, true);
        echo "));
    \$(\"body\").on('keyup', '.mask', function(e){
        \$(this).val(('";
        // line 1621
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range("1", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "tracking", [], "any", false, false, false, 1621), "numbers_order", [], "any", false, false, false, 1621)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            echo "0";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "' + \$(this).val()).slice(-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "tracking", [], "any", false, false, false, 1621), "numbers_order", [], "any", false, false, false, 1621), "html", null, true);
        echo "));
    });
});
</script>
";
        // line 1140
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/MainFiles--/themes/spotlayer/pages/dashboard/order-edit.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2917 => 1140,  2901 => 1621,  2885 => 1619,  2867 => 1616,  2806 => 1558,  2771 => 1526,  2765 => 1523,  2759 => 1520,  2753 => 1517,  2747 => 1514,  2741 => 1511,  2735 => 1508,  2729 => 1505,  2725 => 1503,  2721 => 1501,  2719 => 1500,  2707 => 1491,  2691 => 1478,  2675 => 1465,  2640 => 1433,  2633 => 1429,  2624 => 1423,  2568 => 1370,  2561 => 1366,  2552 => 1360,  2484 => 1295,  2477 => 1291,  2468 => 1285,  2412 => 1232,  2405 => 1228,  2396 => 1222,  2311 => 1141,  2309 => 1140,  2307 => 1114,  2281 => 1115,  2279 => 1114,  2274 => 1112,  2260 => 1105,  2256 => 1104,  2244 => 1094,  2239 => 1091,  2233 => 1087,  2218 => 1085,  2214 => 1084,  2207 => 1080,  2204 => 1079,  2202 => 1078,  2197 => 1075,  2182 => 1073,  2178 => 1072,  2172 => 1069,  2167 => 1066,  2152 => 1064,  2148 => 1063,  2142 => 1060,  2137 => 1057,  2130 => 1053,  2126 => 1051,  2124 => 1050,  2119 => 1049,  2112 => 1045,  2108 => 1043,  2106 => 1042,  2101 => 1040,  2094 => 1035,  2079 => 1033,  2075 => 1032,  2069 => 1029,  2063 => 1026,  2059 => 1025,  2054 => 1022,  2039 => 1020,  2035 => 1019,  2029 => 1016,  2020 => 1010,  2014 => 1007,  2007 => 1003,  1999 => 1000,  1992 => 996,  1988 => 995,  1983 => 993,  1976 => 988,  1974 => 987,  1965 => 981,  1958 => 976,  1946 => 970,  1930 => 957,  1921 => 951,  1912 => 945,  1895 => 939,  1882 => 929,  1878 => 928,  1871 => 924,  1861 => 917,  1855 => 914,  1843 => 905,  1837 => 902,  1828 => 895,  1813 => 893,  1809 => 892,  1801 => 887,  1793 => 882,  1790 => 881,  1786 => 880,  1778 => 875,  1736 => 844,  1722 => 833,  1715 => 829,  1702 => 819,  1687 => 807,  1678 => 800,  1667 => 798,  1663 => 797,  1655 => 792,  1642 => 782,  1628 => 771,  1616 => 762,  1592 => 745,  1581 => 741,  1574 => 737,  1567 => 736,  1561 => 732,  1554 => 728,  1550 => 726,  1548 => 725,  1543 => 724,  1536 => 720,  1532 => 718,  1530 => 717,  1524 => 714,  1517 => 713,  1515 => 712,  1510 => 709,  1503 => 705,  1499 => 703,  1497 => 702,  1492 => 701,  1485 => 697,  1481 => 695,  1479 => 694,  1473 => 691,  1467 => 690,  1454 => 684,  1443 => 680,  1436 => 676,  1425 => 668,  1421 => 667,  1410 => 659,  1405 => 657,  1398 => 652,  1381 => 650,  1377 => 649,  1372 => 647,  1368 => 646,  1363 => 643,  1352 => 641,  1348 => 640,  1343 => 638,  1339 => 637,  1334 => 634,  1317 => 632,  1313 => 631,  1308 => 629,  1304 => 628,  1295 => 622,  1290 => 619,  1273 => 617,  1269 => 616,  1263 => 613,  1253 => 606,  1242 => 598,  1228 => 587,  1224 => 586,  1217 => 581,  1204 => 571,  1190 => 560,  1176 => 549,  1161 => 539,  1154 => 534,  1152 => 533,  1146 => 530,  1141 => 528,  1134 => 523,  1123 => 521,  1119 => 520,  1114 => 518,  1110 => 517,  1105 => 514,  1094 => 512,  1090 => 511,  1085 => 509,  1081 => 508,  1076 => 505,  1059 => 503,  1055 => 502,  1050 => 500,  1046 => 499,  1037 => 493,  1032 => 490,  1015 => 488,  1011 => 487,  1005 => 484,  995 => 477,  983 => 468,  976 => 464,  970 => 461,  963 => 457,  956 => 453,  946 => 446,  932 => 437,  928 => 436,  922 => 435,  916 => 432,  913 => 431,  907 => 429,  905 => 428,  899 => 427,  891 => 424,  882 => 418,  864 => 407,  856 => 406,  849 => 402,  838 => 394,  834 => 393,  823 => 385,  818 => 383,  811 => 378,  800 => 376,  796 => 375,  791 => 373,  787 => 372,  782 => 369,  771 => 367,  767 => 366,  762 => 364,  758 => 363,  753 => 360,  736 => 358,  732 => 357,  727 => 355,  723 => 354,  714 => 348,  709 => 345,  692 => 343,  688 => 342,  682 => 339,  672 => 332,  661 => 324,  654 => 319,  644 => 312,  640 => 311,  623 => 297,  609 => 286,  595 => 275,  580 => 265,  569 => 257,  564 => 255,  557 => 250,  546 => 248,  542 => 247,  537 => 245,  533 => 244,  528 => 241,  517 => 239,  513 => 238,  508 => 236,  504 => 235,  499 => 232,  482 => 230,  478 => 229,  473 => 227,  469 => 226,  460 => 220,  455 => 217,  438 => 215,  434 => 214,  428 => 211,  418 => 204,  406 => 195,  399 => 191,  393 => 188,  386 => 184,  379 => 180,  369 => 173,  362 => 168,  360 => 167,  356 => 165,  350 => 163,  335 => 161,  330 => 160,  328 => 159,  321 => 157,  317 => 156,  311 => 155,  307 => 153,  302 => 151,  299 => 150,  293 => 148,  291 => 147,  285 => 146,  281 => 144,  276 => 142,  271 => 141,  269 => 140,  263 => 139,  250 => 129,  238 => 120,  218 => 103,  213 => 101,  208 => 98,  193 => 96,  189 => 95,  183 => 92,  178 => 89,  163 => 87,  159 => 86,  153 => 83,  137 => 70,  129 => 65,  117 => 58,  105 => 49,  97 => 44,  85 => 37,  73 => 28,  59 => 17,  47 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_ajax('onSave', { success: 'created successfully!', flash: true, class: 'kt_form' }) }}
<div class=\"row\">
    <div class=\"col-lg-12\">
        <div class=\"kt-portlet kt-portlet--mobile\">
            <div class=\"kt-portlet__head\">
                <div class=\"kt-portlet__head-label\">
                    <h3 class=\"kt-portlet__head-title\">
                        {{'Shipment information'|__}}
                    </h3>
                </div>
            </div>
            <div class=\"kt-portlet__body\">
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
                <div class=\"kt-section\">
                    <h3 class=\"kt-section__title kt-margin-b-20\">
                        {{'Shipment Type'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span>
                    </h3>
                    <div class=\"kt-section__content\">
                        <div class=\"form-group form-group-last\">
                            <div class=\"row\">
                                <div class=\"col-lg-6\">
                                    <label class=\"kt-option\">
                                        <span class=\"kt-option__control\">
                                            <span class=\"kt-radio kt-radio--state-brand\">
                                                <input type=\"radio\" name=\"type\" id=\"type\" value=\"1\" {% if order.type == 1 %}checked{% endif %} required>
                                                <span></span>
                                            </span>
                                        </span>
                                        <span class=\"kt-option__label\">
                                            <span class=\"kt-option__head\">
                                                <span class=\"kt-option__title\">
                                                    {{'Pickup'|__}}
                                                </span>
                                                <span class=\"kt-option__focus\"></span>
                                            </span>
                                            <span class=\"kt-option__body\">
                                                {{'For door to door delivery'|__}}
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <div class=\"col-lg-6\">
                                    <label class=\"kt-option\">
                                        <span class=\"kt-option__control\">
                                            <span class=\"kt-radio kt-radio--state-brand\">
                                                <input type=\"radio\" name=\"type\" id=\"type\" value=\"2\" {% if order.type == 2 %}checked{% endif %} required>
                                                <span></span>
                                            </span>
                                        </span>
                                        <span class=\"kt-option__label\">
                                            <span class=\"kt-option__head\">
                                                <span class=\"kt-option__title\">
                                                    {{'Drop off'|__}}
                                                </span>
                                                <span class=\"kt-option__focus\"></span>
                                            </span>
                                            <span class=\"kt-option__body\">
                                                {{'For delivery package from office directly'|__}}
                                            </span>
                                        </span>
                                    </label>
                                </div>
                            </div>
                            <div class=\"form-text text-muted\"><!--must use this helper element to display error message for the options--></div>
                        </div>
                    </div>
                </div>
                <div class=\"kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit kt-margin-t-0\"></div>
                <div class=\"row\">
                    <div class=\"form-group col-lg-4\">
                        <label>{{'Package Type'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                        <select class=\"form-control\" name=\"packaging_id\" id=\"packaging_id\" data-live-search=\"true\" required>
                            <option data-hidden=\"true\"></option>
                            {% for package in packaging %}
                                <option value=\"{{package.id}}\" {% if order.packaging_id == package.id %}selected{% endif %}>{{package.name}}</option>
                            {% endfor %}
                        </select>
                    </div>
                    <div class=\"form-group col-lg-4\">
                        <label>{{'Office'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                        <select class=\"form-control\" name=\"office_id\" required>
                            <option data-hidden=\"true\"></option>
                            {% for office in offices %}
                                <option value=\"{{office.id}}\" {% if order.office_id == office.id %}selected{% endif %}>{{office.name}}</option>
                            {% endfor %}
                        </select>
                    </div>
                    <div class=\"form-group col-lg-4\">
                        <label>{{'Shipping Date'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                        <div class=\"input-group date\">
                            <input type=\"text\" class=\"form-control date\" readonly=\"\" name=\"ship_date\" value=\"{{order.ship_date|date(settings.dateformat)}}\">
                            <div class=\"input-group-append\">
                                <span class=\"input-group-text\">
                                    <i class=\"la la-calendar\"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"col-lg-12\">
        <div class=\"kt-portlet kt-portlet--mobile\">
            <div class=\"kt-portlet__head\">
\t\t\t\t<div class=\"kt-portlet__head-label\">
\t\t\t\t\t<h3 class=\"kt-portlet__head-title\">
\t\t\t\t\t\t{{'Sender information'|__}}
\t\t\t\t\t</h3>
\t\t\t\t</div>
\t\t\t</div>
            <div class=\"kt-portlet__body\">
                <div class=\"form-group form-group-last kt-hide\">
    \t\t\t\t<div class=\"alert alert-danger kt_form_msg\" role=\"alert\">
    \t\t\t\t\t<div class=\"alert-icon\"><i class=\"flaticon-warning\"></i></div>
    \t\t\t\t  \t<div class=\"alert-text\">
                            {{'Oh snap! Change a few things up and try submitting again'|__}}.
    \t\t\t\t\t</div>
    \t\t\t\t\t<div class=\"alert-close\">
    \t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
    \t\t\t\t\t    \t<span aria-hidden=\"true\"><i class=\"la la-close\"></i></span>
    \t\t\t\t\t  \t</button>
    \t\t\t\t\t</div>
    \t\t\t\t</div>
    \t\t\t</div>
                <div class=\"form-group row\">
                    <label>{{'Sender'|__}}/{{'Client'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                    {% if user.role_id == 5 %}
                        <input name=\"sender_id\" value=\"{{user.id}}\" type=\"hidden\" />
                        <input value=\"{{user.name}}\" type=\"text\" class=\"form-control\" disabled />
                    {% else %}
                        <select class=\"form-control clients\" name=\"sender_id\" id=\"sender_id\" required>
                            <option data-hidden=\"true\"></option>
                            <option value=\"{{order.sender_id}}\" selected>{{order.sender.name}}</option>
                            {% if user.hasUserPermission('client', 'c') %}
                                <option value=\"new\" data-icon=\"flaticon2-add\">{{'Add New'|__}}</option>
                            {% endif %}
                        </select>
                        <span class=\"text-muted\">{{'Choose or add a new client that will send the package'|__}}</span>
                    {% endif %}
                </div>
                <div class=\"form-group row\">
                    <label>{{'Sender Address'|__}}/{{'Client Address'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                    <select class=\"form-control sender_address_id\" name=\"sender_address_id\" id=\"sender_address_id\" data-live-search=\"true\" title=\"{{'Please select sender first'|__}}\" required>
                        <option value=\"{{order.sender_address_id}}\" selected>{{order.sender_address.name}}</option>
                        <option data-hidden=\"true\"></option>
                        {% if user.role_id == 5 %}
                            {% for address in user.addresses %}
                                <option value=\"{{address.id}}\" {% if address.default == 1 %}selected{% endif %}>{{address.name}}</option>
                            {% endfor %}
                            <option value=\"new\" data-icon=\"flaticon2-add\">{{'Add New'|__}}</option>
                        {% endif %}
                    </select>
                </div>
                {% if user.role_id != 5 %}
                    <div class=\"row kt-hidden\" id=\"addnewsender\">
                        <div class=\"kt-portlet kt-portlet--bordered kt-portlet--head--noborder kt-margin-b-0\">
            \t\t\t\t<div class=\"kt-portlet__head\">
            \t\t\t\t\t<div class=\"kt-portlet__head-label\">
            \t\t\t\t\t\t<h3 class=\"kt-portlet__head-title\">
            \t\t\t\t\t\t\t{{'Add a new client'|__}}
            \t\t\t\t\t\t</h3>
            \t\t\t\t\t</div>
            \t\t\t\t</div>
            \t\t\t\t<div class=\"kt-portlet__body\">
                                <div class=\"row\">
                                    <div class=\"form-group col-lg-5\">
                                        <label>{{'Client Name'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                        <input type=\"text\" class=\"form-control name\" name=\"sender[name]\" required />
                                    </div>
                                    <div class=\"form-group col-lg-4\">
                                        <label>{{'Mobile'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                        <input type=\"text\" class=\"form-control mobile\" name=\"sender[mobile]\" required />
                                    </div>
                                    <div class=\"form-group col-lg-3\">
                                        <label>{{'Gender'|__}}</label>
                                        <div class=\"kt-radio-inline\">
                \t\t\t\t\t\t\t<label class=\"kt-radio\">
                \t\t\t\t\t\t\t\t<input type=\"radio\" name=\"sender[gender]\" class=\"gender\" value=\"male\"> {{'Male'|__}}
                \t\t\t\t\t\t\t\t<span></span>
                \t\t\t\t\t\t\t</label>
                \t\t\t\t\t\t\t<label class=\"kt-radio\">
                \t\t\t\t\t\t\t\t<input type=\"radio\" name=\"sender[gender]\" class=\"gender\" value=\"female\"> {{'Female'|__}}
                \t\t\t\t\t\t\t\t<span></span>
                \t\t\t\t\t\t\t</label>
                \t\t\t\t\t\t</div>
                                    </div>
                                </div>
                                <div class=\"location-sender\">
                                    <div class=\"row\">
                                        <div class=\"form-group col-lg-5\">
                                            <label>{{'Address'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <input type=\"text\" class=\"form-control address street_addr\" data-sender=\"route\" name=\"sender[street_address]\"  rel=\"sender\" required/>
                                            <input type=\"hidden\" class=\"form-control lat\" data-sender=\"lat\" name=\"sender[lat]\" />
                                            <input type=\"hidden\" class=\"form-control lng\" data-sender=\"lng\" name=\"sender[lng]\" />
                                            <input type=\"hidden\" class=\"form-control url\" data-sender=\"url\" name=\"sender[url]\" />
                                        </div>
                                        <div class=\"form-group col-lg-4\">
                                            <label>{{'Country'|__}}</label>
                                            <select class=\"form-control country_id\" data-sender=\"country\" data-live-search=\"true\" name=\"sender[country]\">
                                                <option data-hidden=\"true\"></option>
                                                {% for country in countries %}
                                                    <option value=\"{{country.id}}\" {% if currentLang != 'en' %}data-subtext=\"{{country.lang(currentLang).name}}\"{% endif %}>{{country.lang('en').name}}</option>
                                                {% endfor %}
                                            </select>
                                        </div>
                                        <div class=\"form-group col-lg-3\">
                                            <label>{{'Postal Code'|__}}</label>
                                            <input class=\"form-control postal_code\" type=\"text\" data-sender=\"postal_code\" name=\"sender[postal_code]\" >
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"form-group col-lg-4\">
                                            <label>{{'State / Region'|__}}</label>
                                            <select class=\"form-control state_id\" data-sender=\"administrative_area_level_1\" title=\"{{'Please select country first'|__}}\" name=\"sender[state]\" data-live-search=\"true\">
                                                <option data-hidden=\"true\"></option>
                                                {% for state in states %}
                                                    <option value=\"{{state.id}}\" {% if currentLang != 'en' %}data-subtext=\"{{state.lang(currentLang).name}}\"{% endif %}>{{state.lang('en').name}}</option>
                                                {% endfor %}
                                            </select>
                                        </div>
                                        <div class=\"form-group col-lg-4\">
                                            <label>{{'City'|__}}</label>
                                            <select class=\"form-control city_id\" data-sender=\"locality\" name=\"sender[city]\" title=\"{{'Please select state first'|__}}\" data-live-search=\"true\">
                                                <option data-hidden=\"true\"></option>
                                                {% for city in cities %}
                                                    <option value=\"{{city.id}}\">{{city.name}}</option>
                                                {% endfor %}
                                            </select>
                                        </div>
                                        <div class=\"form-group col-lg-4\">
                                            <label>{{'County'|__}}</label>
                                            <select class=\"form-control area_id\" data-sender=\"sublocality\" name=\"sender[county]\" title=\"{{'Please select city first'|__}}\" data-live-search=\"true\">
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
                                            <div class=\"col-sm-12 map_canvas map_sender\"></div>
                                            <span class=\"form-text text-muted\">{{'Change the pin to select the right location'|__}}</span>
                                        </div>
                                    </div>
                                    <div class=\"form-group row\">
                                        <label class=\"col-xl-3 col-lg-3 col-form-label\"></label>
                                        <div class=\"col-lg-9 col-xl-6\">
                                            <div class=\"kt-checkbox-single\">
                                                <label class=\"kt-checkbox\">
                                                    <input type=\"checkbox\" name=\"connect\" class=\"connect\" value=\"sender\"> {{'Connect client'|__}}: {{'create an account for the client'|__}}
                                                    <span></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row align-items-center kt-hidden\" id=\"connect_sender\">
                                        <div class=\"col-md-4\">
                                            <div class=\"form-group kt-form__group--inline\">
                                                <div class=\"kt-form__label\">
                                                    <label class=\"col-form-label\">{{'Email'|__}}:&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                </div>
                                                <div class=\"kt-form__control\">
                                                    <input type=\"text\" class=\"form-control email\" name=\"sender[email]\" required/>
                                                </div>
                                            </div>
                                            <div class=\"d-md-none kt-margin-b-10\"></div>
                                        </div>
                                        <div class=\"col-md-4\">
                                            <div class=\"form-group kt-form__group--inline\">
                                                <div class=\"kt-form__label\">
                                                    <label class=\"col-form-label\">{{'Username'|__}}:&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                </div>
                                                <div class=\"kt-form__control\">
                                                    <input type=\"text\" class=\"form-control username\" name=\"sender[username]\" required>
                                                </div>
                                            </div>
                                            <div class=\"d-md-none kt-margin-b-10\"></div>
                                        </div>
                                        <div class=\"col-md-4\">
                                            <div class=\"form-group kt-form__group--inline\">
                                                <div class=\"kt-form__label\">
                                                    <label class=\"col-form-label\">{{'Password'|__}}:&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                </div>
                                                <div class=\"kt-form__control\">
                                                    <input type=\"password\" class=\"form-control password\" name=\"sender[password]\" required>
                                                </div>
                                            </div>
                                            <div class=\"d-md-none kt-margin-b-10\"></div>
                                        </div>
                                    </div>
                                </div>
            \t\t\t\t</div>
                            <div class=\"kt-portlet__foot\">
                \t\t\t\t<div class=\"row align-items-center\">
                \t\t\t\t\t<div class=\"col-lg-12\">
                \t\t\t\t\t\t<button type=\"button\" class=\"btn btn-success save\">{{'Save'|__}}</button>
                \t\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary cancel\">{{'Cancel'|__}}</button>
                \t\t\t\t\t</div>
                \t\t\t\t</div>
                \t\t\t</div>
            \t\t\t</div>
        \t\t\t</div>
                {% endif %}
                <div class=\"row kt-hidden\" id=\"addnewsenderaddress\">
                    <div class=\"kt-portlet kt-portlet--bordered kt-portlet--head--noborder kt-margin-b-0\">
        \t\t\t\t<div class=\"kt-portlet__head\">
        \t\t\t\t\t<div class=\"kt-portlet__head-label\">
        \t\t\t\t\t\t<h3 class=\"kt-portlet__head-title\">
        \t\t\t\t\t\t\t{{'Add a new client address'|__}}
        \t\t\t\t\t\t</h3>
        \t\t\t\t\t</div>
        \t\t\t\t</div>
        \t\t\t\t<div class=\"kt-portlet__body\">
                            <div class=\"location-senderaddress\">
                                <div class=\"row\">
                                    <div class=\"form-group col-lg-5\">
                                        <label>{{'Address'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                        <input type=\"text\" class=\"form-control address street_addr\" data-senderaddress=\"route\" name=\"senderaddress[street_address]\"  rel=\"senderaddress\" required/>
                                        <input type=\"hidden\" class=\"form-control lat\" data-senderaddress=\"lat\" name=\"senderaddress[lat]\" />
                                        <input type=\"hidden\" class=\"form-control lng\" data-senderaddress=\"lng\" name=\"senderaddress[lng]\" />
                                        <input type=\"hidden\" class=\"form-control url\" data-senderaddress=\"url\" name=\"senderaddress[url]\" />
                                    </div>
                                    <div class=\"form-group col-lg-4\">
                                        <label>{{'Country'|__}}</label>
                                        <select class=\"form-control country_id\" data-senderaddress=\"country\" data-live-search=\"true\" name=\"senderaddress[country]\">
                                            <option data-hidden=\"true\"></option>
                                            {% for country in countries %}
                                                <option value=\"{{country.id}}\" {% if currentLang != 'en' %}data-subtext=\"{{country.lang(currentLang).name}}\"{% endif %}>{{country.lang('en').name}}</option>
                                            {% endfor %}
                                        </select>
                                    </div>
                                    <div class=\"form-group col-lg-3\">
                                        <label>{{'Postal Code'|__}}</label>
                                        <input class=\"form-control postal_code\" type=\"text\" data-sendsenderaddresser=\"postal_code\" name=\"senderaddress[postal_code]\" >
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"form-group col-lg-4\">
                                        <label>{{'State / Region'|__}}</label>
                                        <select class=\"form-control state_id\" data-senderaddress=\"administrative_area_level_1\" title=\"{{'Please select country first'|__}}\" name=\"senderaddress[state]\" data-live-search=\"true\">
                                            <option data-hidden=\"true\"></option>
                                            {% for state in states %}
                                                <option value=\"{{state.id}}\" {% if currentLang != 'en' %}data-subtext=\"{{state.lang(currentLang).name}}\"{% endif %}>{{state.lang('en').name}}</option>
                                            {% endfor %}
                                        </select>
                                    </div>
                                    <div class=\"form-group col-lg-4\">
                                        <label>{{'City'|__}}</label>
                                        <select class=\"form-control city_id\" data-senderaddress=\"locality\" name=\"senderaddress[city]\" title=\"{{'Please select state first'|__}}\" data-live-search=\"true\">
                                            <option data-hidden=\"true\"></option>
                                            {% for city in cities %}
                                                <option value=\"{{city.id}}\">{{city.name}}</option>
                                            {% endfor %}
                                        </select>
                                    </div>
                                    <div class=\"form-group col-lg-4\">
                                        <label>{{'County'|__}}</label>
                                        <select class=\"form-control area_id\" data-senderaddress=\"sublocality\" name=\"senderaddress[county]\" title=\"{{'Please select city first'|__}}\" data-live-search=\"true\" >
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
                                        <div class=\"col-sm-12 map_canvas map_senderaddress\"></div>
                                        <span class=\"form-text text-muted\">{{'Change the pin to select the right location'|__}}</span>
                                    </div>
                                </div>
                            </div>
        \t\t\t\t</div>
                        <div class=\"kt-portlet__foot\">
            \t\t\t\t<div class=\"row align-items-center\">
            \t\t\t\t\t<div class=\"col-lg-12\">
            \t\t\t\t\t\t<button type=\"button\" class=\"btn btn-success save\">{{'Save'|__}}</button>
            \t\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary cancel\">{{'Cancel'|__}}</button>
            \t\t\t\t\t</div>
            \t\t\t\t</div>
            \t\t\t</div>
        \t\t\t</div>
    \t\t\t</div>
                <div class=\"kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit\"></div>
                <div class=\"form-group row\">
                    <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Payment Type'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                    <div class=\"col-lg-9 col-xl-6\">
                        <select class=\"form-control\" name=\"payment_type\" id=\"payment_type\" required>
                            <option data-hidden=\"true\"></option>
                            <option value=\"1\" {% if order.payment_type == 1 %}selected{% endif %}>{{'Postpaid'|__}} </option>
                            <option value=\"2\" {% if order.payment_type == 2 %}selected{% endif %}>{{'Prepaid'|__}} </option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"type_2 kt-hidden\">
            <div class=\"kt-portlet kt-portlet--mobile\">
                <div class=\"kt-portlet__head\">
    \t\t\t\t<div class=\"kt-portlet__head-label\">
    \t\t\t\t\t<h3 class=\"kt-portlet__head-title\">
    \t\t\t\t\t\t{{'Receiver information'|__}}
    \t\t\t\t\t</h3>
    \t\t\t\t</div>
    \t\t\t</div>
                <div class=\"kt-portlet__body\">
                    <div class=\"form-group row\">
                        <label>{{'Receiver'|__}}/{{'Client'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                        <select class=\"form-control clients\" name=\"receiver_id\" id=\"receiver_id\" equired>
                            <option data-hidden=\"true\"></option>
                            <option value=\"{{order.receiver_id}}\" selected>{{order.receiver.name}}</option>
                            {% if user.hasUserPermission('client', 'c') %}
                                <option value=\"new\" data-icon=\"flaticon2-add\">{{'Add New'|__}}</option>
                            {% endif %}
                        </select>
                        <span class=\"text-muted\">{{'Choose or add a new client that will receive the package'|__}}</span>
                    </div>
                    <div class=\"form-group row\">
                        <label>{{'Receiver Address'|__}}/{{'Client Address'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                        <select class=\"form-control receiver_address_id\" name=\"receiver_address_id\" id=\"receiver_address_id\" data-live-search=\"true\" title=\"{{'Please select receiver first'|__}}\" required>
                            <option value=\"{{order.receiver_address_id}}\" selected>{{order.receiver_address.name}}</option>
                            <option data-hidden=\"true\"></option>
                        </select>
                    </div>
                    <div class=\"row kt-hidden\" id=\"addnewreceiver\">
                        <div class=\"kt-portlet kt-portlet--bordered kt-portlet--head--noborder kt-margin-b-0\">
            \t\t\t\t<div class=\"kt-portlet__head\">
            \t\t\t\t\t<div class=\"kt-portlet__head-label\">
            \t\t\t\t\t\t<h3 class=\"kt-portlet__head-title\">
            \t\t\t\t\t\t\t{{'Add a new client'|__}}
            \t\t\t\t\t\t</h3>
            \t\t\t\t\t</div>
            \t\t\t\t</div>
            \t\t\t\t<div class=\"kt-portlet__body\">
                                <div class=\"row\">
                                    <div class=\"form-group col-lg-5\">
                                        <label>{{'Client Name'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                        <input type=\"text\" class=\"form-control name\" name=\"receiver[name]\" required />
                                    </div>
                                    <div class=\"form-group col-lg-4\">
                                        <label>{{'Mobile'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                        <input type=\"text\" class=\"form-control mobile\" name=\"receiver[mobile]\" required />
                                    </div>
                                    <div class=\"form-group col-lg-3\">
                                        <label>{{'Gender'|__}}</label>
                                        <div class=\"kt-radio-inline\">
                \t\t\t\t\t\t\t<label class=\"kt-radio\">
                \t\t\t\t\t\t\t\t<input type=\"radio\" name=\"receiver[gender]\" class=\"gender\" value=\"male\"> {{'Male'|__}}
                \t\t\t\t\t\t\t\t<span></span>
                \t\t\t\t\t\t\t</label>
                \t\t\t\t\t\t\t<label class=\"kt-radio\">
                \t\t\t\t\t\t\t\t<input type=\"radio\" name=\"receiver[gender]\" class=\"gender\" value=\"female\"> {{'Female'|__}}
                \t\t\t\t\t\t\t\t<span></span>
                \t\t\t\t\t\t\t</label>
                \t\t\t\t\t\t</div>
                                    </div>
                                </div>
                                <div class=\"location-receiver\">
                                    <div class=\"row\">
                                        <div class=\"form-group col-lg-5\">
                                            <label>{{'Address'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <input type=\"text\" class=\"form-control address street_addr\" data-receiver=\"route\" name=\"receiver[street_address]\"  rel=\"receiver\" required/>
                                            <input type=\"hidden\" class=\"form-control lat\" data-receiver=\"lat\" name=\"receiver[lat]\" />
                                            <input type=\"hidden\" class=\"form-control lng\" data-receiver=\"lng\" name=\"receiver[lng]\" />
                                            <input type=\"hidden\" class=\"form-control url\" data-receiver=\"url\" name=\"receiver[url]\" />
                                        </div>
                                        <div class=\"form-group col-lg-4\">
                                            <label>{{'Country'|__}}</label>
                                            <select class=\"form-control country_id\" data-receiver=\"country\" data-live-search=\"true\" name=\"receiver[country]\">
                                                <option data-hidden=\"true\"></option>
                                                {% for country in countries %}
                                                    <option value=\"{{country.id}}\" {% if currentLang != 'en' %}data-subtext=\"{{country.lang(currentLang).name}}\"{% endif %}>{{country.lang('en').name}}</option>
                                                {% endfor %}
                                            </select>
                                        </div>
                                        <div class=\"form-group col-lg-3\">
                                            <label>{{'Postal Code'|__}}</label>
                                            <input class=\"form-control postal_code\" type=\"text\" data-receiver=\"postal_code\" name=\"receiver[postal_code]\" >
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"form-group col-lg-4\">
                                            <label>{{'State / Region'|__}}</label>
                                            <select class=\"form-control state_id\" data-receiver=\"administrative_area_level_1\" title=\"{{'Please select country first'|__}}\" name=\"receiver[state]\" data-live-search=\"true\">
                                                <option data-hidden=\"true\"></option>
                                                {% for state in states %}
                                                    <option value=\"{{state.id}}\" {% if currentLang != 'en' %}data-subtext=\"{{state.lang(currentLang).name}}\"{% endif %}>{{state.lang('en').name}}</option>
                                                {% endfor %}
                                            </select>
                                        </div>
                                        <div class=\"form-group col-lg-4\">
                                            <label>{{'City'|__}}</label>
                                            <select class=\"form-control city_id\" data-receiver=\"locality\" name=\"receiver[city]\" title=\"{{'Please select state first'|__}}\" data-live-search=\"true\">
                                                <option data-hidden=\"true\"></option>
                                                {% for city in cities %}
                                                    <option value=\"{{city.id}}\">{{city.name}}</option>
                                                {% endfor %}
                                            </select>
                                        </div>
                                        <div class=\"form-group col-lg-4\">
                                            <label>{{'County'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <select class=\"form-control area_id\" data-receiver=\"sublocality\" name=\"receiver[county]\" title=\"{{'Please select city first'|__}}\" data-live-search=\"true\">
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
                                            <div class=\"col-sm-12 map_canvas map_receiver\"></div>
                                            <span class=\"form-text text-muted\">{{'Change the pin to select the right location'|__}}</span>
                                        </div>
                                    </div>
                                    {% if user.hasUserPermission('client', 'c') %}
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\"></label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"connect\" class=\"connect\" value=\"receiver\"> {{'Connect client'|__}}: {{'create an account for the client'|__}}
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"row align-items-center kt-hidden\" id=\"connect_receiver\">
                                            <div class=\"col-md-4\">
                                                <div class=\"form-group kt-form__group--inline\">
                                                    <div class=\"kt-form__label\">
                                                        <label class=\"col-form-label\">{{'Email'|__}}:&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                    </div>
                                                    <div class=\"kt-form__control\">
                                                        <input type=\"text\" class=\"form-control email\" name=\"receiver[email]\" required/>
                                                    </div>
                                                </div>
                                                <div class=\"d-md-none kt-margin-b-10\"></div>
                                            </div>
                                            <div class=\"col-md-4\">
                                                <div class=\"form-group kt-form__group--inline\">
                                                    <div class=\"kt-form__label\">
                                                        <label class=\"col-form-label\">{{'Username'|__}}:&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                    </div>
                                                    <div class=\"kt-form__control\">
                                                        <input type=\"text\" class=\"form-control username\" name=\"receiver[username]\" required>
                                                    </div>
                                                </div>
                                                <div class=\"d-md-none kt-margin-b-10\"></div>
                                            </div>
                                            <div class=\"col-md-4\">
                                                <div class=\"form-group kt-form__group--inline\">
                                                    <div class=\"kt-form__label\">
                                                        <label class=\"col-form-label\">{{'Password'|__}}:&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                    </div>
                                                    <div class=\"kt-form__control\">
                                                        <input type=\"password\" class=\"form-control password\" name=\"receiver[password]\" required>
                                                    </div>
                                                </div>
                                                <div class=\"d-md-none kt-margin-b-10\"></div>
                                            </div>
                                        </div>
                                    {% endif %}
                                </div>
            \t\t\t\t</div>
                            <div class=\"kt-portlet__foot\">
                \t\t\t\t<div class=\"row align-items-center\">
                \t\t\t\t\t<div class=\"col-lg-12\">
                \t\t\t\t\t\t<button type=\"button\" class=\"btn btn-success save\">{{'Save'|__}}</button>
                \t\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary cancel\">{{'Cancel'|__}}</button>
                \t\t\t\t\t</div>
                \t\t\t\t</div>
                \t\t\t</div>
            \t\t\t</div>
        \t\t\t</div>
                    <div class=\"row kt-hidden\" id=\"addnewreceiveraddress\">
                        <div class=\"kt-portlet kt-portlet--bordered kt-portlet--head--noborder kt-margin-b-0\">
            \t\t\t\t<div class=\"kt-portlet__head\">
            \t\t\t\t\t<div class=\"kt-portlet__head-label\">
            \t\t\t\t\t\t<h3 class=\"kt-portlet__head-title\">
            \t\t\t\t\t\t\t{{'Add a new client address'|__}}
            \t\t\t\t\t\t</h3>
            \t\t\t\t\t</div>
            \t\t\t\t</div>
            \t\t\t\t<div class=\"kt-portlet__body\">
                                <div class=\"location-receiveraddress\">
                                    <div class=\"row\">
                                        <div class=\"form-group col-lg-5\">
                                            <label>{{'Address'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <input type=\"text\" class=\"form-control address street_addr\" data-receiveraddress=\"route\" name=\"receiveraddress[street_address]\"  rel=\"receiveraddress\" required/>
                                            <input type=\"hidden\" class=\"form-control lat\" data-receiveraddress=\"lat\" name=\"receiveraddress[lat]\" />
                                            <input type=\"hidden\" class=\"form-control lng\" data-receiveraddress=\"lng\" name=\"receiveraddress[lng]\" />
                                            <input type=\"hidden\" class=\"form-control url\" data-receiveraddress=\"url\" name=\"receiveraddress[url]\" />
                                        </div>
                                        <div class=\"form-group col-lg-4\">
                                            <label>{{'Country'|__}}</label>
                                            <select class=\"form-control country_id\" data-receiveraddress=\"country\" data-live-search=\"true\" name=\"receiveraddress[country]\">
                                                <option data-hidden=\"true\"></option>
                                                {% for country in countries %}
                                                    <option value=\"{{country.id}}\" {% if currentLang != 'en' %}data-subtext=\"{{country.lang(currentLang).name}}\"{% endif %}>{{country.lang('en').name}}</option>
                                                {% endfor %}
                                            </select>
                                        </div>
                                        <div class=\"form-group col-lg-3\">
                                            <label>{{'Postal Code'|__}}</label>
                                            <input class=\"form-control postal_code\" type=\"text\" data-sendreceiveraddresser=\"postal_code\" name=\"receiveraddress[postal_code]\" >
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"form-group col-lg-4\">
                                            <label>{{'State / Region'|__}}</label>
                                            <select class=\"form-control state_id\" data-receiveraddress=\"administrative_area_level_1\" title=\"{{'Please select country first'|__}}\" name=\"receiveraddress[state]\" data-live-search=\"true\">
                                                <option data-hidden=\"true\"></option>
                                                {% for state in states %}
                                                    <option value=\"{{state.id}}\" {% if currentLang != 'en' %}data-subtext=\"{{state.lang(currentLang).name}}\"{% endif %}>{{state.lang('en').name}}</option>
                                                {% endfor %}
                                            </select>
                                        </div>
                                        <div class=\"form-group col-lg-4\">
                                            <label>{{'City'|__}}</label>
                                            <select class=\"form-control city_id\" data-receiveraddress=\"locality\" name=\"receiveraddress[city]\" title=\"{{'Please select state first'|__}}\" data-live-search=\"true\">
                                                <option data-hidden=\"true\"></option>
                                                {% for city in cities %}
                                                    <option value=\"{{city.id}}\">{{city.name}}</option>
                                                {% endfor %}
                                            </select>
                                        </div>
                                        <div class=\"form-group col-lg-4\">
                                            <label>{{'County'|__}}</label>
                                            <select class=\"form-control area_id\" data-receiveraddress=\"sublocality\" name=\"receiveraddress[county]\" title=\"{{'Please select city first'|__}}\" data-live-search=\"true\">
                                                <option data-hidden=\"true\"></option>
                                                {% for county in areas %}
                                                    <option value=\"{{county.id}}\" {% if currentLang != 'en' %}data-subtext=\"{{county.lang(currentLang).name}}\"{% endif %}>{{county.lang('en').name}}</option>
                                                {% endfor %}
                                            </select>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"form-group col-lg-12\">
                                            <label>{{'Google Map'|__}}</label>
                                            <div class=\"col-sm-12 map_canvas map_receiveraddress\"></div>
                                            <span class=\"form-text text-muted\">{{'Change the pin to select the right location'|__}}</span>
                                        </div>
                                    </div>
                                </div>
            \t\t\t\t</div>
                            <div class=\"kt-portlet__foot\">
                \t\t\t\t<div class=\"row align-items-center\">
                \t\t\t\t\t<div class=\"col-lg-12\">
                \t\t\t\t\t\t<button type=\"button\" class=\"btn btn-success save\">{{'Save'|__}}</button>
                \t\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary cancel\">{{'Cancel'|__}}</button>
                \t\t\t\t\t</div>
                \t\t\t\t</div>
                \t\t\t</div>
            \t\t\t</div>
        \t\t\t</div>
                    <div class=\"kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit\"></div>
                    <div class=\"form-group row\">
                        <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Return package cost'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                        <div class=\"col-lg-9 col-xl-6\">
                            <div class=\"kt-radio-inline\">
                                <label class=\"kt-radio\">
                                    <input type=\"radio\" name=\"return_defray\" class=\"return_defray\" value=\"1\" {% if order.return_defray == 1 %}checked{% endif %} required> {{'Yes'|__}}
                                    <span></span>
                                </label>
                                <label class=\"kt-radio\">
                                    <input type=\"radio\" name=\"return_defray\" class=\"return_defray\" value=\"2\" {% if order.return_defray == 2 %}checked{% endif %} required> {{'No'|__}}
                                    <span></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class=\"form-group row {% if return_defray == 2 %}kt-hidden{% endif %} package_fee\">
                        <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Package Cost'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                        <div class=\"col-lg-9 col-xl-6\">
                            <div class=\"input-group\">
                                {% if primary_currency.place_symbol_before == 1 %}
                                    <div class=\"input-group-prepend\">
                                        <span class=\"input-group-text\">
                                            {{primary_currency.currency_symbol}}
                                        </span>
                                    </div>
                                {% endif %}
                \t\t\t\t\t<input type=\"text\" class=\"form-control\" data-type='currency' name=\"package_fee\" value=\"{{order.package_fee}}\" required />
                                {% if primary_currency.place_symbol_before == 0 %}
                                    <div class=\"input-group-append\">
                                        <span class=\"input-group-text\">
                                            {{primary_currency.currency_symbol}}
                                        </span>
                                    </div>
                                {% endif %}
                            </div>
                        </div>
                    </div>
                    {% if user.role_id != 5 %}
                        <div class=\"form-group row {% if return_defray == 2 %}kt-hidden{% endif %} package_fee\">
                            <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Return Shipment Cost'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            <div class=\"col-lg-9 col-xl-6\">
                                <div class=\"input-group\">
                                    {% if primary_currency.place_symbol_before == 1 %}
                                        <div class=\"input-group-prepend\">
                                            <span class=\"input-group-text\">
                                                {{primary_currency.currency_symbol}}
                                            </span>
                                        </div>
                                    {% endif %}
                    \t\t\t\t\t<input type=\"text\" class=\"form-control\" data-type='currency' name=\"return_courier_fee\" value=\"{{order.return_courier_fee}}\" required />
                                    {% if primary_currency.place_symbol_before == 0 %}
                                        <div class=\"input-group-append\">
                                            <span class=\"input-group-text\">
                                                {{primary_currency.currency_symbol}}
                                            </span>
                                        </div>
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                    {% endif %}
                    <div class=\"form-group row {% if return_defray == 2 %}kt-hidden{% endif %} package_fee\">
                        <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Return package fees responsiable'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                        <div class=\"col-lg-9 col-xl-6\">
                            <div class=\"kt-radio-inline\">
                                <label class=\"kt-radio\">
                                    <input type=\"radio\" name=\"return_package_fee\" value=\"1\" {% if order.return_package_fee == 1 %}checked{% endif %} required> {{'Receiver'|__}}
                                    <span></span>
                                </label>
                                <label class=\"kt-radio\">
                                    <input type=\"radio\" name=\"return_package_fee\" value=\"2\" {% if order.return_package_fee == 2 %}checked{% endif %} required> {{'Sender'|__}}
                                    <span></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"row\">
    <div class=\"col-lg-12 type_1\">
        <div class=\"kt-portlet\">
            <div class=\"kt-portlet__head\">
\t\t\t\t<div class=\"kt-portlet__head-label\">
\t\t\t\t\t<h3 class=\"kt-portlet__head-title\">
\t\t\t\t\t\t{{'Shipment Details'|__}}
\t\t\t\t\t</h3>
\t\t\t\t</div>
\t\t\t</div>
            <div class=\"kt-portlet__body\">
                <div class=\"form-group form-group-last kt-hide\">
    \t\t\t\t<div class=\"alert alert-danger kt_form_msg\" role=\"alert\">
    \t\t\t\t\t<div class=\"alert-icon\"><i class=\"flaticon-warning\"></i></div>
    \t\t\t\t  \t<div class=\"alert-text\">
                            {{'Oh snap! Change a few things up and try submitting again'|__}}.
    \t\t\t\t\t</div>
    \t\t\t\t\t<div class=\"alert-close\">
    \t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
    \t\t\t\t\t    \t<span aria-hidden=\"true\"><i class=\"la la-close\"></i></span>
    \t\t\t\t\t  \t</button>
    \t\t\t\t\t</div>
    \t\t\t\t</div>
    \t\t\t</div>
                <div class=\"kt-section\">
\t\t\t\t\t<h3 class=\"kt-section__title kt-margin-b-20\">
\t\t\t\t\t\t{{'Package Content'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span>
\t\t\t\t\t</h3>
\t\t\t\t\t<div class=\"kt-section__content\" id=\"kt_repeater_1\">
                        <div class=\"form-group form-group-last row\">
                            <div data-repeater-list=\"items\" class=\"col-lg-12\">
                                <div data-repeater-item class=\"align-items-center new\">
                                    <div class=\"form-group row\">
                                        <div class=\"col-md-4\">
                                            <div class=\"kt-form__group--inline\">
                                                <div class=\"kt-form__label\">
                                                    <label>{{'Category'|__}}:</label>
                                                </div>
                                                <div class=\"kt-form__control\">
                                                    <select class=\"form-control selectpicker\" data-live-search=\"true\" name=\"category_id\" required>
                                                        <option data-hidden=\"true\"></option>
                                                        {% for category in categories %}
                                                            <option value=\"{{category.id}}\">{{category.name}}</option>
                                                        {% endfor %}
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-md-8\">
                                            <div class=\"kt-form__group--inline\">
                                                <div class=\"kt-form__label\">
                                                    <label class=\"kt-label m-label--single\">{{'Description'|__}}:</label>
                                                </div>
                                                <div class=\"kt-form__control\">
                                                    <input type=\"text\" class=\"form-control\" name=\"description\">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"form-group row\">
                                        <div class=\"col-md-6\">
                                            <div class=\"kt-form__group--inline\">
                                                <div class=\"kt-form__label\">
                                                    <label class=\"kt-label m-label--single\">{{'Quantity'|__}}:</label>
                                                </div>
                                                <div class=\"kt-form__control\">
                                                    <input type=\"text\" class=\"form-control bootstrap-touchspin-vertical-btn\" name=\"quantity\" value=\"1\">
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <div class=\"kt-form__group--inline\">
                                                <div class=\"kt-form__label\">
                                                    <label class=\"kt-label m-label--single\">{{'Weight'|__}}:</label>
                                                </div>
                                                <div class=\"kt-form__control\">
                                                    <div class=\"input-group\">
                                \t\t\t\t\t\t<div class=\"input-group-prepend\"><span class=\"input-group-text\">{{'Kg'|__}}</span></div>
                        \t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control bootstrap-touchspin-vertical-btn\" name=\"weight\">
                                \t\t\t\t\t</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"form-group row\">
                                        <div class=\"col-md-12\">
                                            <div class=\"kt-form__group--inline\">
                                                <div class=\"kt-form__label\">
                                                    <label class=\"kt-label m-label--single\">{{'Dimensions'|__}}&nbsp;<i class=\"flaticon2-delivery-package\"></i>&nbsp;[{{'Length'|__}}&nbsp;x&nbsp;{{'Width'|__}}&nbsp;x&nbsp;{{'Height'|__}}] ({{'cm'|__}}):</label>
                                                </div>
                                                <div class=\"kt-form__control\">
                                                    <div class=\"input-group\">
                        \t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
                                                            <span class=\"input-group-text\">
                                                                <input type=\"text\" class=\"form-control form-control-sm bootstrap-touchspin-vertical-btn\" name=\"length\" style=\"max-width: 100px;\">
                                                            </span>
                                                        </div>
                        \t\t\t\t\t\t\t\t<div class=\"input-group-prepend\"><span class=\"input-group-text\">x</span></div>
                        \t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
                                                            <span class=\"input-group-text\">
                                                                <input type=\"text\" class=\"form-control form-control-sm bootstrap-touchspin-vertical-btn\" name=\"width\" style=\"max-width: 100px;\">
                                                            </span>
                                                        </div>
                        \t\t\t\t\t\t\t\t<div class=\"input-group-prepend\"><span class=\"input-group-text\">x</span></div>
                        \t\t\t\t\t\t\t\t<div class=\"input-group-append\">
                                                            <span class=\"input-group-text\">
                                                                <input type=\"text\" class=\"form-control form-control-sm bootstrap-touchspin-vertical-btn\" name=\"height\" style=\"max-width: 100px;\">
                                                            </span>
                                                        </div>
                        \t\t\t\t\t\t\t</div>
                                                </div>
                                            </div>
                                            <div class=\"d-md-none kt-margin-b-10\"></div>
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
                                {% for item in order.items %}
                                    <div data-repeater-item class=\"align-items-center\">
                                        <input type=\"hidden\" name=\"id\" value=\"{{item.id}}\" />
                                        <div class=\"form-group row\">
                                            <div class=\"col-md-4\">
                                                <div class=\"kt-form__group--inline\">
                                                    <div class=\"kt-form__label\">
                                                        <label>{{'Category'|__}}:</label>
                                                    </div>
                                                    <div class=\"kt-form__control\">
                                                        <select class=\"form-control selectpicker\" data-live-search=\"true\" name=\"category_id\" required>
                                                            <option data-hidden=\"true\"></option>
                                                            {% for category in categories %}
                                                                <option value=\"{{category.id}}\" {% if item.category_id == category.id %}selected{% endif %}>{{category.name}}</option>
                                                            {% endfor %}
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col-md-8\">
                                                <div class=\"kt-form__group--inline\">
                                                    <div class=\"kt-form__label\">
                                                        <label class=\"kt-label m-label--single\">{{'Description'|__}}:</label>
                                                    </div>
                                                    <div class=\"kt-form__control\">
                                                        <input type=\"text\" class=\"form-control\" name=\"description\" value=\"{{item.description}}\">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <div class=\"col-md-6\">
                                                <div class=\"kt-form__group--inline\">
                                                    <div class=\"kt-form__label\">
                                                        <label class=\"kt-label m-label--single\">{{'Quantity'|__}}:</label>
                                                    </div>
                                                    <div class=\"kt-form__control\">
                                                        <input type=\"text\" class=\"form-control bootstrap-touchspin-vertical-btn\" name=\"quantity\" value=\"{{item.quantity}}\">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col-md-6\">
                                                <div class=\"kt-form__group--inline\">
                                                    <div class=\"kt-form__label\">
                                                        <label class=\"kt-label m-label--single\">{{'Weight'|__}}:</label>
                                                    </div>
                                                    <div class=\"kt-form__control\">
                                                        <div class=\"input-group\">
                                    \t\t\t\t\t\t<div class=\"input-group-prepend\"><span class=\"input-group-text\">{{'Kg'|__}}</span></div>
                            \t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control bootstrap-touchspin-vertical-btn\" name=\"weight\" value=\"{{item.weight}}\">
                                    \t\t\t\t\t</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <div class=\"col-md-12\">
                                                <div class=\"kt-form__group--inline\">
                                                    <div class=\"kt-form__label\">
                                                        <label class=\"kt-label m-label--single\">{{'Dimensions'|__}}&nbsp;<i class=\"flaticon2-delivery-package\"></i>&nbsp;[{{'Length'|__}}&nbsp;x&nbsp;{{'Width'|__}}&nbsp;x&nbsp;{{'Height'|__}}] ({{'cm'|__}}):</label>
                                                    </div>
                                                    <div class=\"kt-form__control\">
                                                        <div class=\"input-group\">
                            \t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
                                                                <span class=\"input-group-text\">
                                                                    <input type=\"text\" class=\"form-control form-control-sm bootstrap-touchspin-vertical-btn\" name=\"length\" value=\"{{item.length}}\" style=\"max-width: 100px;\">
                                                                </span>
                                                            </div>
                            \t\t\t\t\t\t\t\t<div class=\"input-group-prepend\"><span class=\"input-group-text\">x</span></div>
                            \t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
                                                                <span class=\"input-group-text\">
                                                                    <input type=\"text\" class=\"form-control form-control-sm bootstrap-touchspin-vertical-btn\" name=\"width\" value=\"{{item.width}}\" style=\"max-width: 100px;\">
                                                                </span>
                                                            </div>
                            \t\t\t\t\t\t\t\t<div class=\"input-group-prepend\"><span class=\"input-group-text\">x</span></div>
                            \t\t\t\t\t\t\t\t<div class=\"input-group-append\">
                                                                <span class=\"input-group-text\">
                                                                    <input type=\"text\" class=\"form-control form-control-sm bootstrap-touchspin-vertical-btn\" name=\"height\" value=\"{{item.height}}\" style=\"max-width: 100px;\">
                                                                </span>
                                                            </div>
                            \t\t\t\t\t\t\t</div>
                                                    </div>
                                                </div>
                                                <div class=\"d-md-none kt-margin-b-10\"></div>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <div class=\"col-md-3\">
                                                <a href=\"javascript:;\" data-repeater-delete=\"\" class=\"btn-sm btn btn-label-danger btn-bold kt-margin-t-25\">
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
                             <label class=\"col-xl-3 col-lg-3 col-form-label\">
                                 <a href=\"javascript:;\" data-repeater-create=\"\" class=\"btn btn-bold btn-sm btn-label-brand\">
                                     <i class=\"la la-plus\"></i> {{'Add Item'|__}}
                                 </a>
                             </label>
                        </div>
                    </div>
                </div>
                {% if user.role_id != 5 %}
                    <div class=\"kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit\"></div>
                    <div class=\"kt-section\">
    \t\t\t\t\t<div class=\"kt-section__content\">
                            <div class=\"row\">
                                <div class=\"form-group col-lg-4\">
                                    <label>{{'Order Number'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                    <div class=\"input-group\">
                \t\t\t\t\t\t<div class=\"input-group-prepend\"><span class=\"input-group-text\">{{settings.tracking.prefix_order}}</span></div>
                \t\t\t\t\t\t<input type=\"text\" class=\"form-control mask\" name=\"number\" value=\"{{order.number}}\" aria-describedby=\"basic-addon1\">
                \t\t\t\t\t</div>
                                </div>
                                <div class=\"form-group col-lg-4\">
                                    <label>{{'Tax'|__}} & {{'Duty'|__}}</label>
                                    <div class=\"input-group\">
                \t\t\t\t\t\t<div class=\"input-group-prepend\"><span class=\"input-group-text\">%</span></div>
                \t\t\t\t\t\t<input type=\"text\" class=\"form-control bootstrap-touchspin-vertical-btn\" name=\"tax\" value=\"{{order.tax}}\">
                \t\t\t\t\t</div>
                                </div>
                                <div class=\"form-group col-lg-4\">
                                    <label>{{'Insurance'|__}}</label>
                                    <div class=\"input-group\">
                \t\t\t\t\t\t<div class=\"input-group-prepend\"><span class=\"input-group-text\">%</span></div>
                \t\t\t\t\t\t<input type=\"text\" class=\"form-control bootstrap-touchspin-vertical-btn\" name=\"insurance\" value=\"{{order.insurance}}\">
                \t\t\t\t\t</div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"form-group col-lg-4\">
                                    <label>{{'Shipping Mode'|__}}</label>
                                    <select class=\"form-control\" data-live-search=\"true\" name=\"mode_id\">
                                        <option data-hidden=\"true\"></option>
                                        {% for mode in modes %}
                                            <option value=\"{{mode.id}}\" {% if order.mode_id == mode.id %}selected{% endif %}>{{mode.name}}</option>
                                        {% endfor %}
                                    </select>
                                </div>
                                <div class=\"form-group col-lg-4\">
                                    <label>{{'Customs Value'|__}}</label>
                                    <input type=\"text\" class=\"form-control\" name=\"customs_value\" value=\"{{order.customs_value}}\" aria-describedby=\"basic-addon1\">
                                </div>
                                <div class=\"form-group col-lg-4\">
                                    <label>{{'Courier Company'|__}}</label>
                                    <select class=\"form-control\" data-live-search=\"true\" name=\"courier_id\">
                                        <option data-hidden=\"true\"></option>
                                        {% for courier in couriers %}
                                            <option value=\"{{courier.id}}\" {% if order.courier_id == courier.id %}selected{% endif %}>{{courier.name}}</option>
                                        {% endfor %}
                                    </select>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"form-group col-lg-4\">
                                    <label>{{'Shipping Fee'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                    <div class=\"input-group\">
                                        {% if primary_currency.place_symbol_before == 1 %}
                                            <div class=\"input-group-prepend\">
                                                <span class=\"input-group-text\">
                                                    {{primary_currency.currency_symbol}}
                                                </span>
                                            </div>
                                        {% endif %}
                                        <input type=\"text\" class=\"form-control\" data-type='currency' name=\"courier_fee\" value=\"{{order.courier_fee}}\" required>
                                        {% if primary_currency.place_symbol_before == 0 %}
                                            <div class=\"input-group-append\">
                                                <span class=\"input-group-text\">
                                                    {{primary_currency.currency_symbol}}
                                                </span>
                                            </div>
                                        {% endif %}
                                    </div>
                                </div>
                                <div class=\"form-group col-lg-4\">
                                    <label>{{'Delivery Time'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                    <select class=\"form-control\" data-live-search=\"true\" name=\"delivery_time_id\" required>
                                        <option data-hidden=\"true\"></option>
                                        {% for deliverytime in deliverytimes %}
                                            <option value=\"{{deliverytime.id}}\" {% if order.delivery_time_id == deliverytime.id %}selected{% endif %}>{{deliverytime.name}}</option>
                                        {% endfor %}
                                    </select>
                                </div>
                                <div class=\"form-group col-lg-4\">
                                    <label>{{'Delivery Status'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                    <select class=\"form-control\" data-live-search=\"true\" name=\"status_id\" required>
                                        <option data-hidden=\"true\"></option>
                                        {% for status in statuses %}
                                            <option value=\"{{status.id}}\" {% if order.status_id == status.id %}selected{% endif %}>{{status.name}}</option>
                                        {% endfor %}
                                    </select>
                                </div>
                            </div>
                            {% if (user.hasUserPermission('assign', 'c')) %}
                                <div class=\"form-group row kt-margin-t-20\">
                                    <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Assign Employee'|__}}</label>
                                    <div class=\"col-lg-9 col-xl-6\">
                                        <select class=\"form-control\" data-live-search=\"true\" name=\"assigned_id\">
                                            <option data-hidden=\"true\"></option>
                                            {% for employee in employees %}
                                                <option value=\"{{employee.id}}\" {% if order.assigned_id == employee.id %}selected{% endif %}>{{employee.name}}</option>
                                            {% endfor %}
                                        </select>
                                    </div>
                                </div>
                            {% endif %}
                        </div>
                    </div>
                {% endif %}
            </div>
        </div>
    </div>
</div>
<div class=\"row\">
    <div class=\"col-lg-12\">
        <div class=\"kt-portlet\">
            <div class=\"kt-portlet__foot\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <button type=\"submit\" class=\"btn btn-primary save\">{{'Update'|__}}</button>
                        <span class=\"kt-margin-left-10\">{{'or'|__}} <a href=\"{{this.page.child_of|page}}\" class=\"kt-link\">{{'Cancel'|__}}</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{ form_close() }}

{% put styles %}
    <style>
        .table-bordered tr td:first-child {
            width: 200px;
            font-weight: bold;
        }
        .map_canvas {
          height: 350px;
        }
        .filter-option-inner br {
            display: none;
        }
        .select2 {
            width: 100% !important;
        }
\t\t.select2-selection {
\t\t\tmin-height: 36px !important;
\t\t}
        #addnewsender,#addnewsenderaddress,#addnewreceiver,#addnewreceiveraddress{
            box-shadow: 0px 0px 2px 1px rgba(0,0,0,0.3);
        }
        .kt-portlet .kt-portlet__head .kt-portlet__head-label .kt-portlet__head-title {
            font-weight: 700;
        }
    </style>
{% endput %}
{% put scripts %}
<script src=\"{{ 'assets/admin/vendors/custom/geocomplete/jquery.geocomplete.js'|theme }}\" type=\"text/javascript\"></script>
<script src=\"https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyCjN-FapLWoOHL6QOnVcwjFmesRdCyUiAc\"></script>
<script type=\"text/javascript\">
KTUtil.ready(function () {
    \$( \".kt_form\" ).validate({
        ignore: \":hidden\",
        invalidHandler: function(event, validator) {
            var alert = \$('.kt_form_msg');
            alert.removeClass('kt--hide').show();
            KTUtil.scrollTop();
        }
    });

    function formatRepo(repo) {
        if (repo.loading) return repo.text;
        var markup = \"<div class='select2-result-repository clearfix'>\" +
                        \"<div class='select2-result-repository__meta'>\" +
                        \"<div class='select2-result-repository__title'>\" + repo.text + \"</div>\";
                        if (repo.mobile) {
                            markup += \"<div class='select2-result-repository__description'>\" + repo.mobile + \"</div>\";
                        }
                    markup += \"</div></div>\";
        return markup;
    }

    function formatRepoSelection(repo) {
        return repo.text || repo.id;
    }


    \$('body').on('click', '#type', function(e){
        var selected = \$(this).val();
        if(selected == 2){
            \$('.type_2').removeClass('kt-hidden');
            \$('.type_1').addClass('col-lg-6');
            \$('.type_1').removeClass('col-lg-12');
        }else{
            \$('.type_2').addClass('kt-hidden');
            \$('.type_1').removeClass('col-lg-6');
            \$('.type_1').addClass('col-lg-12');
        }
    });
    \$('body').on('change', '#sender_id', function(e, clickedIndex, newValue, oldValue){
        var selected = \$(e.currentTarget).val();
        if(selected == 'new'){
            \$('select.sender_address_id').html('').val('').selectpicker('refresh');
            \$('#addnewsender').removeClass('kt-hidden');
        }else if(selected != ''){
            \$('#addnewsender').addClass('kt-hidden');
            \$.request('onClientaddresses', {
                 data: {id: selected},
                 success: function(response, status, xhr, \$form) {
                     \$('select.sender_address_id').html(response.html).selectpicker('refresh');
                     \$('select.sender_address_id').val(response.default).selectpicker('refresh');
                     if(response.default == 'new'){
                         \$('#addnewsenderaddress').removeClass('kt-hidden');
                     }else if(selected != ''){
                         \$('#addnewsenderaddress').addClass('kt-hidden');
                     }
                 }
            });
        }
    });
    \$('body').on('click', '#addnewsender .save', function(e){
        e.preventDefault();
        var parent = \$('#addnewsender');
        var validation = 1;
        parent.find('input,select').each(function(){
            if(\$(this).is(':hidden')){
                return;
            }
            if(\$(this).valid() == false){
                validation = 0;
            }
        });

        if(validation){
            KTApp.blockPage({
                overlayColor: '#000000',
                type: 'v2',
                state: 'primary',
                message: '{{\"Processing, please wait\"|__}}...'
            });
            \$.request('onNewclient', {
                 data: {name: parent.find('.name').val(), mobile: parent.find('.mobile').val(), email: parent.find('.email').val(), gender: parent.find('.gender:checked').val(), street_addr: parent.find('.street_addr').val(), lat: parent.find('.lat').val(), lng: parent.find('.lng').val(), url: parent.find('.url').val(), area_id: parent.find('.area_id').find(\"option:selected\").val(), city_id: parent.find('.city_id').find(\"option:selected\").val(), postal_code: parent.find('.postal_code').val(), state_id: parent.find('.state_id').find(\"option:selected\").val(), country_id: parent.find('.country_id').find(\"option:selected\").val(), connect: parent.find('.connect:checked').val(), username: parent.find('.username').val(), password: parent.find('.password').val()},
                 error: function(response, status, xhr, \$form) {
                     swal.fire({
                         title: '{{\"Error!\"|__}}',
                         text: response.responseText,
                         type: 'error',
                         buttonsStyling: false,
                         confirmButtonText: '{{\"OK\"|__}}',
                         confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                     });
                     KTApp.unblockPage();
                 },
                 success: function(response, status, xhr, \$form) {
                     var newOption = new Option(response.name, response.id, false, true);
                     \$('#sender_id').append(newOption).trigger('change');
                     \$('select.sender_address_id').html('<option value=\"'+response.address_id+'\">'+response.address_name+'</option>').selectpicker('refresh');
                     \$('select.sender_address_id').val(response.address_id).selectpicker('refresh');
                     KTApp.unblockPage();
                     parent.find('input,select').each(function(){
                         \$(this).val('');
                         \$(this).selectpicker('refresh');
                     });
                     \$('#addnewsender').addClass('kt-hidden');
                 }
            });
        }
    });
    \$('body').on('click', '#addnewsender .cancel', function(e){
        e.preventDefault();
        var newOption = new Option('', '', false, true);
        \$('#sender_id').append(newOption).trigger('change');
        \$('#addnewsender').addClass('kt-hidden');
    });

    \$('body').on('changed.bs.select', '.sender_address_id', function(e, clickedIndex, newValue, oldValue){
        var selected = \$(e.currentTarget).val();
        if(selected == 'new'){
            \$('#addnewsenderaddress').removeClass('kt-hidden');
        }else if(selected != ''){
            \$('#addnewsenderaddress').addClass('kt-hidden');
        }
    });
    \$('body').on('click', '#addnewsenderaddress .save', function(e){
        e.preventDefault();
        var parent = \$('#addnewsenderaddress');
        var validation = 1;
        parent.find('input,select').each(function(){
            if(\$(this).is(':hidden')){
                return;
            }
            if(\$(this).valid() == false){
                validation = 0;
            }
        });

        if(validation){
            KTApp.blockPage({
                overlayColor: '#000000',
                type: 'v2',
                state: 'primary',
                message: '{{\"Processing, please wait\"|__}}...'
            });
            \$.request('onNewclientaddress', {
                 data: {client_id: \$('#sender_id').val(), street_addr: parent.find('.street_addr').val(), lat: parent.find('.lat').val(), lng: parent.find('.lng').val(), url: parent.find('.url').val(), area_id: parent.find('.area_id').find(\"option:selected\").val(), city_id: parent.find('.city_id').find(\"option:selected\").val(), postal_code: parent.find('.postal_code').val(), state_id: parent.find('.state_id').find(\"option:selected\").val(), country_id: parent.find('.country_id').find(\"option:selected\").val()},
                 error: function(response, status, xhr, \$form) {
                     swal.fire({
                         title: '{{\"Error!\"|__}}',
                         text: response.responseText,
                         type: 'error',
                         buttonsStyling: false,
                         confirmButtonText: '{{\"OK\"|__}}',
                         confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                     });
                     KTApp.unblockPage();
                 },
                 success: function(response, status, xhr, \$form) {
                     \$('select.sender_address_id').html(response.html).selectpicker('refresh');
                     \$('select.sender_address_id').val(response.default).selectpicker('refresh');
                     KTApp.unblockPage();
                     parent.find('input,select').each(function(){
                         \$(this).val('');
                         \$(this).selectpicker('refresh');
                     });
                     \$('#addnewsenderaddress').addClass('kt-hidden');
                 }
            });
        }
    });
    \$('body').on('click', '#addnewsenderaddress .cancel', function(e){
        e.preventDefault();
        \$('select.sender_address_id').val('').selectpicker('refresh');
        \$('#addnewsenderaddress').addClass('kt-hidden');
    });



    \$('body').on('change', '#receiver_id', function(e, clickedIndex, newValue, oldValue){
        var selected = \$(e.currentTarget).val();
        if(selected == 'new'){
            \$('select.receiver_address_id').html('').val('').selectpicker('refresh');
            \$('#addnewreceiver').removeClass('kt-hidden');
        }else if(selected != ''){
            \$('#addnewreceiver').addClass('kt-hidden');
            \$.request('onClientaddresses', {
                 data: {id: selected},
                 success: function(response, status, xhr, \$form) {
                     \$('select.receiver_address_id').html(response.html).selectpicker('refresh');
                     \$('select.receiver_address_id').val(response.default).selectpicker('refresh');
                     if(response.default == 'new'){
                         \$('#addnewreceiveraddress').removeClass('kt-hidden');
                     }else if(selected != ''){
                         \$('#addnewreceiveraddress').addClass('kt-hidden');
                     }
                 }
            });
        }
    });
    \$('body').on('click', '#addnewreceiver .save', function(e){
        e.preventDefault();
        var parent = \$('#addnewreceiver');
        var validation = 1;
        parent.find('input,select').each(function(){
            if(\$(this).is(':hidden')){
                return;
            }
            if(\$(this).valid() == false){
                validation = 0;
            }
        });

        if(validation){
            KTApp.blockPage({
                overlayColor: '#000000',
                type: 'v2',
                state: 'primary',
                message: '{{\"Processing, please wait\"|__}}...'
            });
            \$.request('onNewclient', {
                 data: {name: parent.find('.name').val(), mobile: parent.find('.mobile').val(), email: parent.find('.email').val(), gender: parent.find('.gender:checked').val(), street_addr: parent.find('.street_addr').val(), lat: parent.find('.lat').val(), lng: parent.find('.lng').val(), url: parent.find('.url').val(), area_id: parent.find('.area_id').find(\"option:selected\").val(), city_id: parent.find('.city_id').find(\"option:selected\").val(), postal_code: parent.find('.postal_code').val(), state_id: parent.find('.state_id').find(\"option:selected\").val(), country_id: parent.find('.country_id').find(\"option:selected\").val(), connect: parent.find('.connect:checked').val(), username: parent.find('.username').val(), password: parent.find('.password').val()},
                 error: function(response, status, xhr, \$form) {
                     swal.fire({
                         title: '{{\"Error!\"|__}}',
                         text: response.responseText,
                         type: 'error',
                         buttonsStyling: false,
                         confirmButtonText: '{{\"OK\"|__}}',
                         confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                     });
                     KTApp.unblockPage();
                 },
                 success: function(response, status, xhr, \$form) {
                     var newOption = new Option(response.name, response.id, false, true);
                     \$('#receiver_id').append(newOption).trigger('change');
                     \$('select.receiver_address_id').html('<option value=\"'+response.address_id+'\">'+response.address_name+'</option>').selectpicker('refresh');
                     \$('select.receiver_address_id').val(response.address_id).selectpicker('refresh');
                     KTApp.unblockPage();
                     parent.find('input,select').each(function(){
                         \$(this).val('');
                         \$(this).selectpicker('refresh');
                     });
                     \$('#addnewreceiver').addClass('kt-hidden');
                 }
            });
        }
    });
    \$('body').on('click', '#addnewreceiver .cancel', function(e){
        e.preventDefault();
        var newOption = new Option('', '', false, true);
        \$('#receiver_id').append(newOption).trigger('change');
        \$('#addnewreceiver').addClass('kt-hidden');
    });

    \$('body').on('changed.bs.select', '.receiver_address_id', function(e, clickedIndex, newValue, oldValue){
        var selected = \$(e.currentTarget).val();
        if(selected == 'new'){
            \$('#addnewreceiveraddress').removeClass('kt-hidden');
        }else if(selected != ''){
            \$('#addnewreceiveraddress').addClass('kt-hidden');
        }
    });
    \$('body').on('click', '#addnewreceiveraddress .save', function(e){
        e.preventDefault();
        var parent = \$('#addnewreceiveraddress');
        var validation = 1;
        parent.find('input,select').each(function(){
            if(\$(this).is(':hidden')){
                return;
            }
            if(\$(this).valid() == false){
                validation = 0;
            }
        });

        if(validation){
            KTApp.blockPage({
                overlayColor: '#000000',
                type: 'v2',
                state: 'primary',
                message: '{{\"Processing, please wait\"|__}}...'
            });
            \$.request('onNewclientaddress', {
                 data: {client_id: \$('#receiver_id').val(), street_addr: parent.find('.street_addr').val(), lat: parent.find('.lat').val(), lng: parent.find('.lng').val(), url: parent.find('.url').val(), area_id: parent.find('.area_id').find(\"option:selected\").val(), city_id: parent.find('.city_id').find(\"option:selected\").val(), postal_code: parent.find('.postal_code').val(), state_id: parent.find('.state_id').find(\"option:selected\").val(), country_id: parent.find('.country_id').find(\"option:selected\").val()},
                 error: function(response, status, xhr, \$form) {
                     swal.fire({
                         title: '{{\"Error!\"|__}}',
                         text: response.responseText,
                         type: 'error',
                         buttonsStyling: false,
                         confirmButtonText: '{{\"OK\"|__}}',
                         confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                     });
                     KTApp.unblockPage();
                 },
                 success: function(response, status, xhr, \$form) {
                     \$('select.receiver_address_id').html(response.html).selectpicker('refresh');
                     \$('select.receiver_address_id').val(response.default).selectpicker('refresh');
                     KTApp.unblockPage();
                     parent.find('input,select').each(function(){
                         \$(this).val('');
                         \$(this).selectpicker('refresh');
                     });
                     \$('#addnewreceiveraddress').addClass('kt-hidden');
                 }
            });
        }
    });
    \$('body').on('click', '#addnewreceiveraddress .cancel', function(e){
        e.preventDefault();
        \$('select.receiver_address_id').val('').selectpicker('refresh');
        \$('#addnewreceiveraddress').addClass('kt-hidden');
    });


    \$('body').on('changed.bs.select', '.country_id', function(e, clickedIndex, newValue, oldValue){
        var selected = \$(e.currentTarget).val();
        var parent = \$(e.currentTarget).parent().parent().parent().parent();
        if(selected != ''){
            \$.request('onListstates', {
                 data: {id: selected},
                 success: function(response, status, xhr, \$form) {
                      parent.find('select.state_id').selectpicker({title: '{{'Select'|__}}'}).selectpicker('refresh');
                      parent.find('select.state_id').html(response.html).selectpicker('refresh');
                 }
            });
       }
    });
    \$('body').on('changed.bs.select', '.state_id', function(e, clickedIndex, newValue, oldValue){
        var selected = \$(e.currentTarget).val();
        var parent = \$(e.currentTarget).parent().parent().parent().parent();
        if(selected != ''){
            \$.request('onListcities', {
                 data: {id: selected},
                 success: function(response, status, xhr, \$form) {
                      parent.find('select.city_id').selectpicker({title: '{{'Select'|__}}'}).selectpicker('refresh');
                      parent.find('select.city_id').html(response.html).selectpicker('refresh');
                 }
            });
       }
    });
    \$('body').on('changed.bs.select', '.city_id', function(e, clickedIndex, newValue, oldValue){
        var selected = \$(e.currentTarget).val();
        var parent = \$(e.currentTarget).parent().parent().parent().parent();
        if(selected != ''){
            \$.request('onListareas', {
                 data: {id: selected},
                 success: function(response, status, xhr, \$form) {
                      parent.find('select.area_id').selectpicker({title: '{{'Select'|__}}'}).selectpicker('refresh');
                      parent.find('select.area_id').html(response.html).selectpicker('refresh');
                 }
            });
       }
    });


    \$(\".clients\").select2({
        {% if currentLang == 'ar'%}
            dir: \"rtl\",
        {% endif %}
        language: {
            errorLoading: function () {
                return \"{{'There is an error while searching'|__}}...\";
            },
            inputTooLong: function (args) {
                return \"{{'You must enter less characters'|__}}...\";
            },
            inputTooShort: function (args) {
                return \"{{'You must enter more characters'|__}}...\";
            },
            loadingMore: function () {
                return \"{{'Loading More'|__}}...\";
            },
            maximumSelected: function (args) {
                return \"{{'Maximum element has been selected'|__}}...\";
            },
            noResults: function () {
                return \"{{'No result found'|__}}...\";
            },
            searching: function () {
                return \"{{'Searching'|__}}...\";
            }
        },
        placeholder: \"{{'Search for client'|__}}\",
        allowClear: true,
        ajax: {
            transport: function(params, success, failure) {
                var \$request = \$.request('onGetclients', {
                    data: params.data,
                })
                \$request.done(success)
                \$request.fail(failure)

                return \$request
            },
            dataType: 'json',
            processResults: function (response) {
                return {
                    results: response
                };
            },
            cache: true
        },
        escapeMarkup: function(markup) {
            return markup;
        },
        minimumInputLength: 0,
        templateResult: formatRepo,
        templateSelection: formatRepoSelection
    });
    \$('#kt_repeater_1').repeater({
        initEmpty: false,
        show: function () {
            \$(this).slideDown();
            \$('.selectpicker').selectpicker({
                noneSelectedText: '{{\"Nothing selected\"|__}}',
            });
            \$('.bootstrap-touchspin-vertical-btn').TouchSpin({
                buttondown_class: 'btn btn-secondary',
                buttonup_class: 'btn btn-secondary',
                verticalbuttons: true,
                verticalup: '<i class=\"la la-plus\"></i>',
                verticaldown: '<i class=\"la la-minus\"></i>'
            });
        },
        hide: function (deleteElement) {
            \$(this).slideUp(deleteElement);
        }
    });
    \$('#kt_repeater_1 .new .delete_btn').trigger('click');
    \$('.bootstrap-touchspin-vertical-btn').TouchSpin({
        buttondown_class: 'btn btn-secondary',
        buttonup_class: 'btn btn-secondary',
        verticalbuttons: true,
        verticalup: '<i class=\"la la-plus\"></i>',
        verticaldown: '<i class=\"la la-minus\"></i>'
    });

    \$('.address').each(function(){
        var address = \$(this);
        address.geocomplete({
            map: \".map_canvas.map_\"+address.attr('rel'),
            mapOptions: {
                zoom: 18
            },
            markerOptions: {
                draggable: true
            },
            details: \".location-\"+\$(this).attr('rel'),
            detailsAttribute: 'data-'+\$(this).attr('rel'),
            autoselect: true,
        });
        address.bind(\"geocode:dragged\", function(event, latLng){
            \$(\"input[data-\"+address.attr('rel')+\"=lat]\").val(latLng.lat());
            \$(\"input[data-\"+address.attr('rel')+\"=lng]\").val(latLng.lng());
        });

    });

    \$('body').on('click', '.connect', function(){
        if(\$(this).is(\":checked\")){
            \$('#connect_'+\$(this).val()).removeClass('kt-hidden');
        }else{
            \$('#connect_'+\$(this).val()).addClass('kt-hidden');
        }
    });
    \$('body').on('click', '.return_defray', function(){
        if(\$(this).val() == 1){
            \$('.package_fee').removeClass('kt-hidden');
        }else{
            \$('.package_fee').addClass('kt-hidden');
        }
    });
    \$(\".fees\").inputmask('999{{primary_currency.thousand_separator}}999{{primary_currency.thousand_separator}}999{{primary_currency.decimal_point}}{% for i in '1'..primary_currency.initbiz_money_fraction_digits %}9{% endfor %}', {
        numericInput: true
    });
    \$('.mask').val(('{% for i in '1'..settings.tracking.numbers_order %}0{% endfor %}' + {{max}}).slice(-{{settings.tracking.numbers_order}}));
    \$(\"body\").on('keyup', '.mask', function(e){
        \$(this).val(('{% for i in '1'..settings.tracking.numbers_order %}0{% endfor %}' + \$(this).val()).slice(-{{settings.tracking.numbers_order}}));
    });
});
</script>
{% endput %}", "/Applications/MAMP/htdocs/MainFiles--/themes/spotlayer/pages/dashboard/order-edit.htm", "");
    }
}
