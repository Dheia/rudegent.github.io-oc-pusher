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

/* /Applications/MAMP/htdocs/test/themes/spotlayer/pages/dashboard/order-create.htm */
class __TwigTemplate_8f24c34ac2782abd3dcdb550f9c805935889660e159bc74c3c43bf0568484aa4 extends \Twig\Template
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
                                                <input type=\"radio\" name=\"type\" class=\"type\" value=\"1\" checked required>
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
                                                <input type=\"radio\" name=\"type\" class=\"type\" value=\"2\" required>
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
            echo "\">";
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
            if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "office", [], "any", false, false, false, 96) == twig_get_attribute($this->env, $this->source, $context["office"], "id", [], "any", false, false, false, 96))) {
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
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["now"] ?? null), twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "dateformat", [], "any", false, false, false, 103)), "html", null, true);
        echo "\" required>
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
                            <option value=\"new\" data-icon=\"flaticon2-add\">";
            // line 146
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Add New"]);
            echo "</option>
                        </select>
                        <span class=\"text-muted\">";
            // line 148
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Choose or add a new client that will send the package"]);
            echo "</span>
                    ";
        }
        // line 150
        echo "                </div>
                ";
        // line 151
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 151) == 5)) {
            // line 152
            echo "                    ";
            if ((null === twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "mobile", [], "any", false, false, false, 152))) {
                // line 153
                echo "                        <div class=\"form-group row\">
                            <label>";
                // line 154
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Mobile"]);
                echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            <input type=\"text\" class=\"form-control mobile\" name=\"sender_mobile\" required />
                        </div>
                    ";
            }
            // line 158
            echo "                ";
        }
        // line 159
        echo "                <div class=\"form-group row\">
                    <label>";
        // line 160
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sender Address"]);
        echo "/";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Client Address"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                    <select class=\"form-control sender_address_id\" name=\"sender_address_id\" id=\"sender_address_id\" data-live-search=\"true\" title=\"";
        // line 161
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select sender first"]);
        echo "\" required>
                        <option data-hidden=\"true\"></option><label>";
        // line 162
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sender"]);
        echo "/";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Client"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                        ";
        // line 163
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 163) == 5)) {
            // line 164
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "addresses", [], "any", false, false, false, 164));
            foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
                // line 165
                echo "                                <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "id", [], "any", false, false, false, 165), "html", null, true);
                echo "\" ";
                if ((twig_get_attribute($this->env, $this->source, $context["address"], "default", [], "any", false, false, false, 165) == 1)) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "name", [], "any", false, false, false, 165), "html", null, true);
                echo "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 167
            echo "                            <option value=\"new\" data-icon=\"flaticon2-add\">";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Add New"]);
            echo "</option>
                        ";
        }
        // line 169
        echo "                    </select>
                </div>
                ";
        // line 171
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 171) != 5)) {
            // line 172
            echo "                    <div class=\"row kt-hidden\" id=\"addnewsender\">
                        <div class=\"kt-portlet kt-portlet--bordered kt-portlet--head--noborder kt-margin-b-0\">
            \t\t\t\t<div class=\"kt-portlet__head\">
                                <div class=\"kt-portlet__head-label\">
                                \t<span class=\"kt-portlet__head-icon\">
                                \t\t<i class=\"flaticon2-user\"></i>
                                \t</span>
                                \t<h3 class=\"kt-portlet__head-title\">
                                \t\t";
            // line 180
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Add a new client"]);
            echo " <small>";
            echo "Fill data and save it brefore you can continue";
            echo "</small>
                                \t</h3>
                                </div>
            \t\t\t\t</div>
            \t\t\t\t<div class=\"kt-portlet__body\">
                                <div class=\"row\">
                                    <div class=\"form-group col-lg-5\">
                                        <label>";
            // line 187
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Client Name"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                        <input type=\"text\" class=\"form-control name\" name=\"sender[name]\" required />
                                    </div>
                                    <div class=\"form-group col-lg-4\">
                                        <label>";
            // line 191
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Mobile"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                        <input type=\"text\" class=\"form-control mobile\" name=\"sender[mobile]\" required />
                                    </div>
                                    <div class=\"form-group col-lg-3\">
                                        <label>";
            // line 195
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Gender"]);
            echo "</label>
                                        <div class=\"kt-radio-inline\">
                \t\t\t\t\t\t\t<label class=\"kt-radio\">
                \t\t\t\t\t\t\t\t<input type=\"radio\" name=\"sender[gender]\" class=\"gender\" value=\"male\"> ";
            // line 198
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Male"]);
            echo "
                \t\t\t\t\t\t\t\t<span></span>
                \t\t\t\t\t\t\t</label>
                \t\t\t\t\t\t\t<label class=\"kt-radio\">
                \t\t\t\t\t\t\t\t<input type=\"radio\" name=\"sender[gender]\" class=\"gender\" value=\"female\"> ";
            // line 202
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
            // line 211
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Address"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <input type=\"text\" class=\"form-control address street_addr\" data-sender=\"route\" name=\"sender[street_address]\"  rel=\"sender\" required/>
                                            <input type=\"hidden\" class=\"form-control lat\" data-sender=\"lat\" name=\"sender[lat]\" />
                                            <input type=\"hidden\" class=\"form-control lng\" data-sender=\"lng\" name=\"sender[lng]\" />
                                            <input type=\"hidden\" class=\"form-control url\" data-sender=\"url\" name=\"sender[url]\" />
                                        </div>
                                        <div class=\"form-group col-lg-4\">
                                            <label>";
            // line 218
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Country"]);
            echo "</label>
                                            <select class=\"form-control country_id\" data-sender=\"country\" data-live-search=\"true\" name=\"sender[country]\">
                                                <option data-hidden=\"true\"></option>
                                                ";
            // line 221
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                // line 222
                echo "                                                    <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["country"], "id", [], "any", false, false, false, 222), "html", null, true);
                echo "\" ";
                if ((($context["currentLang"] ?? null) != "en")) {
                    echo "data-subtext=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["country"], "lang", [0 => ($context["currentLang"] ?? null)], "method", false, false, false, 222), "name", [], "any", false, false, false, 222), "html", null, true);
                    echo "\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["country"], "lang", [0 => "en"], "method", false, false, false, 222), "name", [], "any", false, false, false, 222), "html", null, true);
                echo "</option>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 224
            echo "                                            </select>
                                        </div>
                                        <div class=\"form-group col-lg-3\">
                                            <label>";
            // line 227
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Postal Code"]);
            echo "</label>
                                            <input class=\"form-control postal_code\" type=\"text\" data-sender=\"postal_code\" name=\"sender[postal_code]\" >
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"form-group col-lg-4\">
                                            <label>";
            // line 233
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["State / Region"]);
            echo "</label>
                                            <select class=\"form-control state_id\" data-sender=\"administrative_area_level_1\" title=\"";
            // line 234
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select country first"]);
            echo "\" name=\"sender[state]\" data-live-search=\"true\">
                                                <option data-hidden=\"true\"></option>
                                                ";
            // line 236
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["states"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["state"]) {
                // line 237
                echo "                                                    <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["state"], "id", [], "any", false, false, false, 237), "html", null, true);
                echo "\" ";
                if ((($context["currentLang"] ?? null) != "en")) {
                    echo "data-subtext=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["state"], "lang", [0 => ($context["currentLang"] ?? null)], "method", false, false, false, 237), "name", [], "any", false, false, false, 237), "html", null, true);
                    echo "\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["state"], "lang", [0 => "en"], "method", false, false, false, 237), "name", [], "any", false, false, false, 237), "html", null, true);
                echo "</option>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['state'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 239
            echo "                                            </select>
                                        </div>
                                        <div class=\"form-group col-lg-4\">
                                            <label>";
            // line 242
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["City"]);
            echo "</label>
                                            <select class=\"form-control city_id\" data-sender=\"locality\" name=\"sender[city]\" title=\"";
            // line 243
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select state first"]);
            echo "\" data-live-search=\"true\">
                                                <option data-hidden=\"true\"></option>
                                                ";
            // line 245
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["cities"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["city"]) {
                // line 246
                echo "                                                    <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["city"], "id", [], "any", false, false, false, 246), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["city"], "name", [], "any", false, false, false, 246), "html", null, true);
                echo "</option>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['city'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 248
            echo "                                            </select>
                                        </div>
                                        <div class=\"form-group col-lg-4\">
                                            <label>";
            // line 251
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["County"]);
            echo "</label>
                                            <select class=\"form-control area_id\" data-sender=\"sublocality\" name=\"sender[county]\" title=\"";
            // line 252
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select city first"]);
            echo "\" data-live-search=\"true\">
                                                <option data-hidden=\"true\"></option>
                                                ";
            // line 254
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["areas"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["county"]) {
                // line 255
                echo "                                                    <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["county"], "id", [], "any", false, false, false, 255), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["county"], "name", [], "any", false, false, false, 255), "html", null, true);
                echo "</option>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['county'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 257
            echo "                                            </select>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"form-group col-lg-12\">
                                            <label>";
            // line 262
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Google Map"]);
            echo "</label>
                                            <div class=\"col-sm-12 map_canvas map_sender\"></div>
                                            <span class=\"form-text text-muted\">";
            // line 264
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Change the pin to select the right location"]);
            echo "</span>
                                        </div>
                                    </div>
                                    ";
            // line 267
            if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "client", 1 => "c"], "method", false, false, false, 267)) {
                // line 268
                echo "                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\"></label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"connect\" class=\"connect\" value=\"sender\"> ";
                // line 273
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
                // line 283
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
                // line 294
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
                // line 305
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
                                    ";
            }
            // line 315
            echo "                                </div>
            \t\t\t\t</div>
                            <div class=\"kt-portlet__foot\">
                \t\t\t\t<div class=\"row align-items-center\">
                \t\t\t\t\t<div class=\"col-lg-12\">
                \t\t\t\t\t\t<button type=\"button\" class=\"btn btn-success save\">";
            // line 320
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Save"]);
            echo "</button>
                \t\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary cancel\">";
            // line 321
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cancel"]);
            echo "</button>
                \t\t\t\t\t</div>
                \t\t\t\t</div>
                \t\t\t</div>
            \t\t\t</div>
        \t\t\t</div>
                ";
        }
        // line 328
        echo "                <div class=\"row kt-hidden\" id=\"addnewsenderaddress\">
                    <div class=\"kt-portlet kt-portlet--bordered kt-portlet--head--noborder kt-margin-b-0\">
        \t\t\t\t<div class=\"kt-portlet__head\">
                            <div class=\"kt-portlet__head-label\">
                                <span class=\"kt-portlet__head-icon\">
                                    <i class=\"flaticon2-user\"></i>
                                </span>
                                <h3 class=\"kt-portlet__head-title\">
                                    ";
        // line 336
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Add a new client address"]);
        echo " <small>";
        echo "Fill data and save it brefore you can continue";
        echo "</small>
                                </h3>
                            </div>
        \t\t\t\t</div>
        \t\t\t\t<div class=\"kt-portlet__body\">
                            <div class=\"location-senderaddress\">
                                <div class=\"row\">
                                    <div class=\"form-group col-lg-5\">
                                        <label>";
        // line 344
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Address"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                        <input type=\"text\" class=\"form-control address street_addr\" data-senderaddress=\"route\" name=\"senderaddress[street_address]\"  rel=\"senderaddress\" required/>
                                        <input type=\"hidden\" class=\"form-control lat\" data-senderaddress=\"lat\" name=\"senderaddress[lat]\" />
                                        <input type=\"hidden\" class=\"form-control lng\" data-senderaddress=\"lng\" name=\"senderaddress[lng]\" />
                                        <input type=\"hidden\" class=\"form-control url\" data-senderaddress=\"url\" name=\"senderaddress[url]\" />
                                    </div>
                                    <div class=\"form-group col-lg-4\">
                                        <label>";
        // line 351
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Country"]);
        echo "</label>
                                        <select class=\"form-control country_id\" data-senderaddress=\"country\" data-live-search=\"true\" name=\"senderaddress[country]\">
                                            <option data-hidden=\"true\"></option>
                                            ";
        // line 354
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 355
            echo "                                                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["country"], "id", [], "any", false, false, false, 355), "html", null, true);
            echo "\" ";
            if ((($context["currentLang"] ?? null) != "en")) {
                echo "data-subtext=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["country"], "lang", [0 => ($context["currentLang"] ?? null)], "method", false, false, false, 355), "name", [], "any", false, false, false, 355), "html", null, true);
                echo "\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["country"], "lang", [0 => "en"], "method", false, false, false, 355), "name", [], "any", false, false, false, 355), "html", null, true);
            echo "</option>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 357
        echo "                                        </select>
                                    </div>
                                    <div class=\"form-group col-lg-3\">
                                        <label>";
        // line 360
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Postal Code"]);
        echo "</label>
                                        <input class=\"form-control postal_code\" type=\"text\" data-sendsenderaddresser=\"postal_code\" name=\"senderaddress[postal_code]\" >
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"form-group col-lg-4\">
                                        <label>";
        // line 366
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["State / Region"]);
        echo "</label>
                                        <select class=\"form-control state_id\" data-senderaddress=\"administrative_area_level_1\" title=\"";
        // line 367
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select country first"]);
        echo "\" name=\"senderaddress[state]\" data-live-search=\"true\">
                                            <option data-hidden=\"true\"></option>
                                            ";
        // line 369
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["states"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["state"]) {
            // line 370
            echo "                                                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["state"], "id", [], "any", false, false, false, 370), "html", null, true);
            echo "\" ";
            if ((($context["currentLang"] ?? null) != "en")) {
                echo "data-subtext=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["state"], "lang", [0 => ($context["currentLang"] ?? null)], "method", false, false, false, 370), "name", [], "any", false, false, false, 370), "html", null, true);
                echo "\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["state"], "lang", [0 => "en"], "method", false, false, false, 370), "name", [], "any", false, false, false, 370), "html", null, true);
            echo "</option>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['state'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 372
        echo "                                        </select>
                                    </div>
                                    <div class=\"form-group col-lg-4\">
                                        <label>";
        // line 375
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["City"]);
        echo "</label>
                                        <select class=\"form-control city_id\" data-senderaddress=\"locality\" name=\"senderaddress[city]\" title=\"";
        // line 376
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select state first"]);
        echo "\" data-live-search=\"true\">
                                            <option data-hidden=\"true\"></option>
                                            ";
        // line 378
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cities"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["city"]) {
            // line 379
            echo "                                                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["city"], "id", [], "any", false, false, false, 379), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["city"], "name", [], "any", false, false, false, 379), "html", null, true);
            echo "</option>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['city'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 381
        echo "                                        </select>
                                    </div>
                                    <div class=\"form-group col-lg-4\">
                                        <label>";
        // line 384
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["County"]);
        echo "</label>
                                        <select class=\"form-control area_id\" data-senderaddress=\"sublocality\" name=\"senderaddress[county]\" title=\"";
        // line 385
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select city first"]);
        echo "\" data-live-search=\"true\" >
                                            <option data-hidden=\"true\"></option>
                                            ";
        // line 387
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["areas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["county"]) {
            // line 388
            echo "                                                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["county"], "id", [], "any", false, false, false, 388), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["county"], "name", [], "any", false, false, false, 388), "html", null, true);
            echo "</option>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['county'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 390
        echo "                                        </select>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"form-group col-lg-12\">
                                        <label>";
        // line 395
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Google Map"]);
        echo "</label>
                                        <div class=\"col-sm-12 map_canvas map_senderaddress\"></div>
                                        <span class=\"form-text text-muted\">";
        // line 397
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
        // line 405
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Save"]);
        echo "</button>
            \t\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary cancel\">";
        // line 406
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
        // line 414
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Payment Type"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                    <div class=\"col-lg-9 col-xl-6\">
                        <select class=\"form-control\" name=\"payment_type\" id=\"payment_type\" required>
                            <option data-hidden=\"true\"></option>
                            <option value=\"1\">";
        // line 418
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Postpaid"]);
        echo " </option>
                            <option value=\"2\">";
        // line 419
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Prepaid"]);
        echo " </option>
                        </select>
                    </div>
                </div>
                <div class=\"form-group row type_1\">
                    <label class=\"col-xl-3 col-lg-3 col-form-label\">";
        // line 424
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Record receiver information ?"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                    <div class=\"col-lg-9 col-xl-6\">
                        <div class=\"kt-radio-inline\">
                            <label class=\"kt-radio\">
                                <input type=\"radio\" name=\"show_receiver_info\" class=\"show_receiver_info\" value=\"1\" required> ";
        // line 428
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yes"]);
        echo "
                                <span></span>
                            </label>
                            <label class=\"kt-radio\">
                                <input type=\"radio\" name=\"show_receiver_info\" class=\"show_receiver_info\" value=\"2\" checked required> ";
        // line 432
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No"]);
        echo "
                                <span></span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"type_2 receiver_information kt-hidden\">
            <div class=\"kt-portlet kt-portlet--mobile\">
                <div class=\"kt-portlet__head\">
    \t\t\t\t<div class=\"kt-portlet__head-label\">
    \t\t\t\t\t<h3 class=\"kt-portlet__head-title\">
    \t\t\t\t\t\t";
        // line 445
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Receiver information"]);
        echo "
    \t\t\t\t\t</h3>
    \t\t\t\t</div>
    \t\t\t</div>
                <div class=\"kt-portlet__body\">
                    <div class=\"form-group row\">
                        <label>";
        // line 451
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Receiver"]);
        echo "/";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Client"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                        <select class=\"form-control clients\" name=\"receiver_id\" id=\"receiver_id\" equired>
                            <option data-hidden=\"true\"></option>
                            <option value=\"new\" data-icon=\"flaticon2-add\">";
        // line 454
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Add New"]);
        echo "</option>
                        </select>
                        <span class=\"text-muted\">";
        // line 456
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Choose or add a new client that will receive the package"]);
        echo "</span>
                    </div>
                    <div class=\"form-group row\">
                        <label>";
        // line 459
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Receiver Address"]);
        echo "/";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Client Address"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                        <select class=\"form-control receiver_address_id\" name=\"receiver_address_id\" id=\"receiver_address_id\" data-live-search=\"true\" title=\"";
        // line 460
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select receiver first"]);
        echo "\" required>
                            <option data-hidden=\"true\"></option>
                        </select>
                    </div>
                    <div class=\"row kt-hidden\" id=\"addnewreceiver\">
                        <div class=\"kt-portlet kt-portlet--bordered kt-portlet--head--noborder kt-margin-b-0\">
            \t\t\t\t<div class=\"kt-portlet__head\">
                                <div class=\"kt-portlet__head-label\">
                                    <span class=\"kt-portlet__head-icon\">
                                        <i class=\"flaticon2-user\"></i>
                                    </span>
                                    <h3 class=\"kt-portlet__head-title\">
                                        ";
        // line 472
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Add a new client"]);
        echo " <small>";
        echo "Fill data and save it brefore you can continue";
        echo "</small>
                                    </h3>
                                </div>
            \t\t\t\t</div>
            \t\t\t\t<div class=\"kt-portlet__body\">
                                <div class=\"row\">
                                    <div class=\"form-group col-lg-5\">
                                        <label>";
        // line 479
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Client Name"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                        <input type=\"text\" class=\"form-control name\" name=\"receiver[name]\" required />
                                    </div>
                                    <div class=\"form-group col-lg-4\">
                                        <label>";
        // line 483
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Mobile"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                        <input type=\"text\" class=\"form-control mobile\" name=\"receiver[mobile]\" required />
                                    </div>
                                    <div class=\"form-group col-lg-3\">
                                        <label>";
        // line 487
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Gender"]);
        echo "</label>
                                        <div class=\"kt-radio-inline\">
                \t\t\t\t\t\t\t<label class=\"kt-radio\">
                \t\t\t\t\t\t\t\t<input type=\"radio\" name=\"receiver[gender]\" class=\"gender\" value=\"male\"> ";
        // line 490
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Male"]);
        echo "
                \t\t\t\t\t\t\t\t<span></span>
                \t\t\t\t\t\t\t</label>
                \t\t\t\t\t\t\t<label class=\"kt-radio\">
                \t\t\t\t\t\t\t\t<input type=\"radio\" name=\"receiver[gender]\" class=\"gender\" value=\"female\"> ";
        // line 494
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
        // line 503
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Address"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <input type=\"text\" class=\"form-control address street_addr\" data-receiver=\"route\" name=\"receiver[street_address]\"  rel=\"receiver\" required/>
                                            <input type=\"hidden\" class=\"form-control lat\" data-receiver=\"lat\" name=\"receiver[lat]\" />
                                            <input type=\"hidden\" class=\"form-control lng\" data-receiver=\"lng\" name=\"receiver[lng]\" />
                                            <input type=\"hidden\" class=\"form-control url\" data-receiver=\"url\" name=\"receiver[url]\" />
                                        </div>
                                        <div class=\"form-group col-lg-4\">
                                            <label>";
        // line 510
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Country"]);
        echo "</label>
                                            <select class=\"form-control country_id\" data-receiver=\"country\" data-live-search=\"true\" name=\"receiver[country]\">
                                                <option data-hidden=\"true\"></option>
                                                ";
        // line 513
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 514
            echo "                                                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["country"], "id", [], "any", false, false, false, 514), "html", null, true);
            echo "\" ";
            if ((($context["currentLang"] ?? null) != "en")) {
                echo "data-subtext=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["country"], "lang", [0 => ($context["currentLang"] ?? null)], "method", false, false, false, 514), "name", [], "any", false, false, false, 514), "html", null, true);
                echo "\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["country"], "lang", [0 => "en"], "method", false, false, false, 514), "name", [], "any", false, false, false, 514), "html", null, true);
            echo "</option>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 516
        echo "                                            </select>
                                        </div>
                                        <div class=\"form-group col-lg-3\">
                                            <label>";
        // line 519
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Postal Code"]);
        echo "</label>
                                            <input class=\"form-control postal_code\" type=\"text\" data-receiver=\"postal_code\" name=\"receiver[postal_code]\" >
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"form-group col-lg-4\">
                                            <label>";
        // line 525
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["State / Region"]);
        echo "</label>
                                            <select class=\"form-control state_id\" data-receiver=\"administrative_area_level_1\" title=\"";
        // line 526
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select country first"]);
        echo "\" name=\"receiver[state]\" data-live-search=\"true\">
                                                <option data-hidden=\"true\"></option>
                                                ";
        // line 528
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["states"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["state"]) {
            // line 529
            echo "                                                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["state"], "id", [], "any", false, false, false, 529), "html", null, true);
            echo "\" ";
            if ((($context["currentLang"] ?? null) != "en")) {
                echo "data-subtext=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["state"], "lang", [0 => ($context["currentLang"] ?? null)], "method", false, false, false, 529), "name", [], "any", false, false, false, 529), "html", null, true);
                echo "\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["state"], "lang", [0 => "en"], "method", false, false, false, 529), "name", [], "any", false, false, false, 529), "html", null, true);
            echo "</option>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['state'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 531
        echo "                                            </select>
                                        </div>
                                        <div class=\"form-group col-lg-4\">
                                            <label>";
        // line 534
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["City"]);
        echo "</label>
                                            <select class=\"form-control city_id\" data-receiver=\"locality\" name=\"receiver[city]\" title=\"";
        // line 535
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select state first"]);
        echo "\" data-live-search=\"true\">
                                                <option data-hidden=\"true\"></option>
                                                ";
        // line 537
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cities"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["city"]) {
            // line 538
            echo "                                                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["city"], "id", [], "any", false, false, false, 538), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["city"], "name", [], "any", false, false, false, 538), "html", null, true);
            echo "</option>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['city'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 540
        echo "                                            </select>
                                        </div>
                                        <div class=\"form-group col-lg-4\">
                                            <label>";
        // line 543
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["County"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <select class=\"form-control area_id\" data-receiver=\"sublocality\" name=\"receiver[county]\" title=\"";
        // line 544
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select city first"]);
        echo "\" data-live-search=\"true\">
                                                <option data-hidden=\"true\"></option>
                                                ";
        // line 546
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["areas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["county"]) {
            // line 547
            echo "                                                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["county"], "id", [], "any", false, false, false, 547), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["county"], "name", [], "any", false, false, false, 547), "html", null, true);
            echo "</option>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['county'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 549
        echo "                                            </select>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"form-group col-lg-12\">
                                            <label>";
        // line 554
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Google Map"]);
        echo "</label>
                                            <div class=\"col-sm-12 map_canvas map_receiver\"></div>
                                            <span class=\"form-text text-muted\">";
        // line 556
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Change the pin to select the right location"]);
        echo "</span>
                                        </div>
                                    </div>
                                    ";
        // line 559
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "client", 1 => "c"], "method", false, false, false, 559)) {
            // line 560
            echo "                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\"></label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"connect\" class=\"connect\" value=\"receiver\"> ";
            // line 565
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
            // line 575
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
            // line 586
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
            // line 597
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
        // line 607
        echo "                                </div>
            \t\t\t\t</div>
                            <div class=\"kt-portlet__foot\">
                \t\t\t\t<div class=\"row align-items-center\">
                \t\t\t\t\t<div class=\"col-lg-12\">
                \t\t\t\t\t\t<button type=\"button\" class=\"btn btn-success save\">";
        // line 612
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Save"]);
        echo "</button>
                \t\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary cancel\">";
        // line 613
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
                                <div class=\"kt-portlet__head-label\">
                                    <span class=\"kt-portlet__head-icon\">
                                        <i class=\"flaticon2-user\"></i>
                                    </span>
                                    <h3 class=\"kt-portlet__head-title\">
                                        ";
        // line 627
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Add a new client address"]);
        echo " <small>";
        echo "Fill data and save it brefore you can continue";
        echo "</small>
                                    </h3>
                                </div>
            \t\t\t\t</div>
            \t\t\t\t<div class=\"kt-portlet__body\">
                                <div class=\"location-receiveraddress\">
                                    <div class=\"row\">
                                        <div class=\"form-group col-lg-5\">
                                            <label>";
        // line 635
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Address"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <input type=\"text\" class=\"form-control address street_addr\" data-receiveraddress=\"route\" name=\"receiveraddress[street_address]\"  rel=\"receiveraddress\" required/>
                                            <input type=\"hidden\" class=\"form-control lat\" data-receiveraddress=\"lat\" name=\"receiveraddress[lat]\" />
                                            <input type=\"hidden\" class=\"form-control lng\" data-receiveraddress=\"lng\" name=\"receiveraddress[lng]\" />
                                            <input type=\"hidden\" class=\"form-control url\" data-receiveraddress=\"url\" name=\"receiveraddress[url]\" />
                                        </div>
                                        <div class=\"form-group col-lg-4\">
                                            <label>";
        // line 642
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Country"]);
        echo "</label>
                                            <select class=\"form-control country_id\" data-receiveraddress=\"country\" data-live-search=\"true\" name=\"receiveraddress[country]\">
                                                <option data-hidden=\"true\"></option>
                                                ";
        // line 645
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 646
            echo "                                                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["country"], "id", [], "any", false, false, false, 646), "html", null, true);
            echo "\" ";
            if ((($context["currentLang"] ?? null) != "en")) {
                echo "data-subtext=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["country"], "lang", [0 => ($context["currentLang"] ?? null)], "method", false, false, false, 646), "name", [], "any", false, false, false, 646), "html", null, true);
                echo "\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["country"], "lang", [0 => "en"], "method", false, false, false, 646), "name", [], "any", false, false, false, 646), "html", null, true);
            echo "</option>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 648
        echo "                                            </select>
                                        </div>
                                        <div class=\"form-group col-lg-3\">
                                            <label>";
        // line 651
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Postal Code"]);
        echo "</label>
                                            <input class=\"form-control postal_code\" type=\"text\" data-sendreceiveraddresser=\"postal_code\" name=\"receiveraddress[postal_code]\" >
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"form-group col-lg-4\">
                                            <label>";
        // line 657
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["State / Region"]);
        echo "</label>
                                            <select class=\"form-control state_id\" data-receiveraddress=\"administrative_area_level_1\" title=\"";
        // line 658
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select country first"]);
        echo "\" name=\"receiveraddress[state]\" data-live-search=\"true\">
                                                <option data-hidden=\"true\"></option>
                                                ";
        // line 660
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["states"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["state"]) {
            // line 661
            echo "                                                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["state"], "id", [], "any", false, false, false, 661), "html", null, true);
            echo "\" ";
            if ((($context["currentLang"] ?? null) != "en")) {
                echo "data-subtext=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["state"], "lang", [0 => ($context["currentLang"] ?? null)], "method", false, false, false, 661), "name", [], "any", false, false, false, 661), "html", null, true);
                echo "\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["state"], "lang", [0 => "en"], "method", false, false, false, 661), "name", [], "any", false, false, false, 661), "html", null, true);
            echo "</option>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['state'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 663
        echo "                                            </select>
                                        </div>
                                        <div class=\"form-group col-lg-4\">
                                            <label>";
        // line 666
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["City"]);
        echo "</label>
                                            <select class=\"form-control city_id\" data-receiveraddress=\"locality\" name=\"receiveraddress[city]\" title=\"";
        // line 667
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select state first"]);
        echo "\" data-live-search=\"true\">
                                                <option data-hidden=\"true\"></option>
                                                ";
        // line 669
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cities"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["city"]) {
            // line 670
            echo "                                                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["city"], "id", [], "any", false, false, false, 670), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["city"], "name", [], "any", false, false, false, 670), "html", null, true);
            echo "</option>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['city'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 672
        echo "                                            </select>
                                        </div>
                                        <div class=\"form-group col-lg-4\">
                                            <label>";
        // line 675
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["County"]);
        echo "</label>
                                            <select class=\"form-control area_id\" data-receiveraddress=\"sublocality\" name=\"receiveraddress[county]\" title=\"";
        // line 676
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select city first"]);
        echo "\" data-live-search=\"true\">
                                                <option data-hidden=\"true\"></option>
                                                ";
        // line 678
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["areas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["county"]) {
            // line 679
            echo "                                                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["county"], "id", [], "any", false, false, false, 679), "html", null, true);
            echo "\" ";
            if ((($context["currentLang"] ?? null) != "en")) {
                echo "data-subtext=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["county"], "lang", [0 => ($context["currentLang"] ?? null)], "method", false, false, false, 679), "name", [], "any", false, false, false, 679), "html", null, true);
                echo "\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["county"], "lang", [0 => "en"], "method", false, false, false, 679), "name", [], "any", false, false, false, 679), "html", null, true);
            echo "</option>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['county'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 681
        echo "                                            </select>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"form-group col-lg-12\">
                                            <label>";
        // line 686
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Google Map"]);
        echo "</label>
                                            <div class=\"col-sm-12 map_canvas map_receiveraddress\"></div>
                                            <span class=\"form-text text-muted\">";
        // line 688
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
        // line 696
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Save"]);
        echo "</button>
                \t\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary cancel\">";
        // line 697
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
        // line 705
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Return package cost"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                        <div class=\"col-lg-9 col-xl-6\">
                            <div class=\"kt-radio-inline\">
                                <label class=\"kt-radio\">
                                    <input type=\"radio\" name=\"return_defray\" class=\"return_defray\" value=\"1\" required> ";
        // line 709
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yes"]);
        echo "
                                    <span></span>
                                </label>
                                <label class=\"kt-radio\">
                                    <input type=\"radio\" name=\"return_defray\" class=\"return_defray\" value=\"2\" required> ";
        // line 713
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No"]);
        echo "
                                    <span></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class=\"form-group row kt-hidden package_fee\">
                        <label class=\"col-xl-3 col-lg-3 col-form-label\">";
        // line 720
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Package Cost"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                        <div class=\"col-lg-9 col-xl-6\">
                            <div class=\"input-group\">
                                ";
        // line 723
        if ((twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "place_symbol_before", [], "any", false, false, false, 723) == 1)) {
            // line 724
            echo "                                    <div class=\"input-group-prepend\">
                                        <span class=\"input-group-text\">
                                            ";
            // line 726
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "currency_symbol", [], "any", false, false, false, 726), "html", null, true);
            echo "
                                        </span>
                                    </div>
                                ";
        }
        // line 730
        echo "                \t\t\t\t\t<input type=\"text\" class=\"form-control decimal\" data-type='currency' name=\"package_fee\" required />
                                ";
        // line 731
        if ((twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "place_symbol_before", [], "any", false, false, false, 731) == 0)) {
            // line 732
            echo "                                    <div class=\"input-group-append\">
                                        <span class=\"input-group-text\">
                                            ";
            // line 734
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "currency_symbol", [], "any", false, false, false, 734), "html", null, true);
            echo "
                                        </span>
                                    </div>
                                ";
        }
        // line 738
        echo "                            </div>
                        </div>
                    </div>
                    ";
        // line 741
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 741) != 5)) {
            // line 742
            echo "                        <div class=\"form-group row kt-hidden package_fee\">
                            <label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 743
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Return Shipment Cost"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            <div class=\"col-lg-9 col-xl-6\">
                                <div class=\"input-group\">
                                    ";
            // line 746
            if ((twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "place_symbol_before", [], "any", false, false, false, 746) == 1)) {
                // line 747
                echo "                                        <div class=\"input-group-prepend\">
                                            <span class=\"input-group-text\">
                                                ";
                // line 749
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "currency_symbol", [], "any", false, false, false, 749), "html", null, true);
                echo "
                                            </span>
                                        </div>
                                    ";
            }
            // line 753
            echo "                    \t\t\t\t\t<input type=\"text\" class=\"form-control decimal\" data-type='currency' name=\"return_courier_fee\" id=\"return_courier_fee\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "fees", [], "any", false, false, false, 753), "delivery_cost_back_receiver", [], "any", false, false, false, 753), "html", null, true);
            echo "\" required />
                                    ";
            // line 754
            if ((twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "place_symbol_before", [], "any", false, false, false, 754) == 0)) {
                // line 755
                echo "                                        <div class=\"input-group-append\">
                                            <span class=\"input-group-text\">
                                                ";
                // line 757
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "currency_symbol", [], "any", false, false, false, 757), "html", null, true);
                echo "
                                            </span>
                                        </div>
                                    ";
            }
            // line 761
            echo "                                </div>
                            </div>
                        </div>
                    ";
        }
        // line 765
        echo "                    <div class=\"form-group row kt-hidden package_fee\">
                        <label class=\"col-xl-3 col-lg-3 col-form-label\">";
        // line 766
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Return package fees responsiable"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                        <div class=\"col-lg-9 col-xl-6\">
                            <div class=\"kt-radio-inline\">
                                <label class=\"kt-radio\">
                                    <input type=\"radio\" name=\"return_package_fee\" class=\"return_package_fee\" value=\"1\" checked required> ";
        // line 770
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Receiver"]);
        echo "
                                    <span></span>
                                </label>
                                <label class=\"kt-radio\">
                                    <input type=\"radio\" name=\"return_package_fee\" class=\"return_package_fee\" value=\"2\" required> ";
        // line 774
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
    <div class=\"col-lg-12\">
        <div class=\"kt-portlet\">
            <div class=\"kt-portlet__head\">
\t\t\t\t<div class=\"kt-portlet__head-label\">
\t\t\t\t\t<h3 class=\"kt-portlet__head-title\">
\t\t\t\t\t\t";
        // line 791
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
        // line 800
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
        // line 811
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Package Content"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span>
\t\t\t\t\t</h3>
\t\t\t\t\t<div class=\"kt-section__content\">
                        <div class=\"form-group form-group-last row\" id=\"package_repeater\">
                            <div data-repeater-list=\"items\" class=\"col-lg-12\">
                                <div data-repeater-item class=\"align-items-center\">
                                    <div class=\"form-group row\">
                                        <div class=\"col-md-4\">
                                            <div class=\"kt-form__group--inline\">
                                                <div class=\"kt-form__label\">
                                                    <label>";
        // line 821
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Category"]);
        echo ":</label>
                                                </div>
                                                <div class=\"kt-form__control\">
                                                    <select class=\"form-control selectpicker\" data-live-search=\"true\" name=\"category_id\" required>
                                                        <option data-hidden=\"true\"></option>
                                                        ";
        // line 826
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 827
            echo "                                                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 827), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 827), "html", null, true);
            echo "</option>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 829
        echo "                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-md-8\">
                                            <div class=\"kt-form__group--inline\">
                                                <div class=\"kt-form__label\">
                                                    <label class=\"kt-label m-label--single\">";
        // line 836
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
        // line 848
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
        // line 858
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Weight"]);
        echo ":</label>
                                                </div>
                                                <div class=\"kt-form__control\">
                                                    <div class=\"input-group\">
                                \t\t\t\t\t\t<div class=\"input-group-prepend\"><span class=\"input-group-text\">";
        // line 862
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
        // line 873
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
                                            <a href=\"javascript:;\" data-repeater-delete=\"\" class=\"btn-sm btn btn-label-danger btn-bold kt-margin-t-25\">
                                                <i class=\"la la-trash-o\"></i>
                                                ";
        // line 904
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delete"]);
        echo "
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"form-group form-group-last row\">
                                <label class=\"col-xl-12 col-form-label kt-align-right\">
                                    <a href=\"javascript:;\" data-repeater-create=\"\" class=\"btn btn-bold btn-sm btn-label-brand\">
                                        <i class=\"la la-plus\"></i> ";
        // line 913
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Add Item"]);
        echo "
                                    </a>
                                </label>
                           </div>
                         </div>
                    </div>
                </div>
                ";
        // line 920
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 920) != 5)) {
            // line 921
            echo "                    <div class=\"kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit\"></div>
                    <div class=\"kt-section\">
    \t\t\t\t\t<div class=\"kt-section__content\">
                            <div class=\"row\">
                                <div class=\"form-group col-lg-4\">
                                    <label>";
            // line 926
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Order Number"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                    <div class=\"input-group\">
                \t\t\t\t\t\t<div class=\"input-group-prepend\"><span class=\"input-group-text\">";
            // line 928
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "tracking", [], "any", false, false, false, 928), "prefix_order", [], "any", false, false, false, 928), "html", null, true);
            echo "</span></div>
                \t\t\t\t\t\t<input type=\"text\" class=\"form-control mask\" name=\"number\" aria-describedby=\"basic-addon1\">
                \t\t\t\t\t</div>
                                </div>
                                <div class=\"form-group col-lg-4\">
                                    <label>";
            // line 933
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Tax"]);
            echo " & ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Duty"]);
            echo "</label>
                                    <div class=\"input-group\">
                \t\t\t\t\t\t<div class=\"input-group-prepend\"><span class=\"input-group-text\">%</span></div>
                \t\t\t\t\t\t<input type=\"text\" class=\"form-control bootstrap-touchspin-vertical-btn\" name=\"tax\" value=\"";
            // line 936
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "taxes", [], "any", false, false, false, 936), "percent", [], "any", false, false, false, 936), "html", null, true);
            echo "\">
                \t\t\t\t\t</div>
                                </div>
                                <div class=\"form-group col-lg-4\">
                                    <label>";
            // line 940
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Insurance"]);
            echo "</label>
                                    <div class=\"input-group\">
                \t\t\t\t\t\t<div class=\"input-group-prepend\"><span class=\"input-group-text\">%</span></div>
                \t\t\t\t\t\t<input type=\"text\" class=\"form-control bootstrap-touchspin-vertical-btn\" name=\"insurance\" value=\"";
            // line 943
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "taxes", [], "any", false, false, false, 943), "insurance", [], "any", false, false, false, 943), "html", null, true);
            echo "\">
                \t\t\t\t\t</div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"form-group col-lg-4\">
                                    <label>";
            // line 949
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Shipping Mode"]);
            echo "</label>
                                    <select class=\"form-control\" data-live-search=\"true\" name=\"mode_id\">
                                        <option data-hidden=\"true\"></option>
                                        ";
            // line 952
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["modes"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["mode"]) {
                // line 953
                echo "                                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mode"], "id", [], "any", false, false, false, 953), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mode"], "name", [], "any", false, false, false, 953), "html", null, true);
                echo "</option>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mode'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 955
            echo "                                    </select>
                                </div>
                                <div class=\"form-group col-lg-4\">
                                    <label>";
            // line 958
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Customs Value"]);
            echo "</label>
                                    <input type=\"text\" class=\"form-control\" name=\"customs_value\" value=\"0\" aria-describedby=\"basic-addon1\">
                                </div>
                                <div class=\"form-group col-lg-4\">
                                    <label>";
            // line 962
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Courier Company"]);
            echo "</label>
                                    <select class=\"form-control\" data-live-search=\"true\" name=\"courier_id\">
                                        <option data-hidden=\"true\"></option>
                                        ";
            // line 965
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["couriers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["courier"]) {
                // line 966
                echo "                                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["courier"], "id", [], "any", false, false, false, 966), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["courier"], "name", [], "any", false, false, false, 966), "html", null, true);
                echo "</option>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['courier'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 968
            echo "                                    </select>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"form-group col-lg-4\">
                                    <label>";
            // line 973
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Shipping Fee"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                    <div class=\"input-group\">
                                        ";
            // line 975
            if ((twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "place_symbol_before", [], "any", false, false, false, 975) == 1)) {
                // line 976
                echo "                                            <div class=\"input-group-prepend\">
                                                <span class=\"input-group-text\">
                                                    ";
                // line 978
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "currency_symbol", [], "any", false, false, false, 978), "html", null, true);
                echo "
                                                </span>
                                            </div>
                                        ";
            }
            // line 982
            echo "                                        <input type=\"text\" class=\"form-control decimal\" data-type='currency' name=\"courier_fee\" id=\"delivery_cost\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "fees", [], "any", false, false, false, 982), "delivery_cost", [], "any", false, false, false, 982), "html", null, true);
            echo "\" required>
                                        ";
            // line 983
            if ((twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "place_symbol_before", [], "any", false, false, false, 983) == 0)) {
                // line 984
                echo "                                            <div class=\"input-group-append\">
                                                <span class=\"input-group-text\">
                                                    ";
                // line 986
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "currency_symbol", [], "any", false, false, false, 986), "html", null, true);
                echo "
                                                </span>
                                            </div>
                                        ";
            }
            // line 990
            echo "                                    </div>
                                </div>
                                <div class=\"form-group col-lg-4\">
                                    <label>";
            // line 993
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delivery Time"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                    <select class=\"form-control\" data-live-search=\"true\" name=\"delivery_time_id\" required>
                                        <option data-hidden=\"true\"></option>
                                        ";
            // line 996
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["deliverytimes"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["deliverytime"]) {
                // line 997
                echo "                                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["deliverytime"], "id", [], "any", false, false, false, 997), "html", null, true);
                echo "\" ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "tracking", [], "any", false, false, false, 997), "default_deliverytime", [], "any", false, false, false, 997) == twig_get_attribute($this->env, $this->source, $context["deliverytime"], "id", [], "any", false, false, false, 997))) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["deliverytime"], "name", [], "any", false, false, false, 997), "html", null, true);
                echo "</option>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['deliverytime'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 999
            echo "                                    </select>
                                </div>
                                <div class=\"form-group col-lg-4\">
                                    <label>";
            // line 1002
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delivery Status"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                    <select class=\"form-control\" data-live-search=\"true\" name=\"status_id\" required>
                                        <option data-hidden=\"true\"></option>
                                        ";
            // line 1005
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["statuses"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
                // line 1006
                echo "                                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["status"], "id", [], "any", false, false, false, 1006), "html", null, true);
                echo "\" ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "tracking", [], "any", false, false, false, 1006), "default_status", [], "any", false, false, false, 1006) == twig_get_attribute($this->env, $this->source, $context["status"], "id", [], "any", false, false, false, 1006))) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["status"], "name", [], "any", false, false, false, 1006), "html", null, true);
                echo "</option>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['status'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1008
            echo "                                    </select>
                                </div>
                            </div>
                            ";
            // line 1011
            if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "assign", 1 => "c"], "method", false, false, false, 1011)) {
                // line 1012
                echo "                                <div class=\"form-group row kt-margin-t-20\">
                                    <label class=\"col-xl-3 col-lg-3 col-form-label\">";
                // line 1013
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Assign Employee"]);
                echo "</label>
                                    <div class=\"col-lg-9 col-xl-6\">
                                        <select class=\"form-control\" data-live-search=\"true\" name=\"assigned_id\">
                                            <option data-hidden=\"true\"></option>
                                            ";
                // line 1017
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["employees"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["employee"]) {
                    // line 1018
                    echo "                                                <option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "id", [], "any", false, false, false, 1018), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "name", [], "any", false, false, false, 1018), "html", null, true);
                    echo "</option>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employee'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1020
                echo "                                        </select>
                                    </div>
                                </div>
                            ";
            }
            // line 1024
            echo "                        </div>
                    </div>
                ";
        }
        // line 1027
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
                        ";
        // line 1037
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 1037) == 5)) {
            // line 1038
            echo "                            <button type=\"button\" class=\"btn btn-info save_draft\">";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Save as draft"]);
            echo "</button> <span class=\"kt-margin-left-10\">";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["or"]);
            echo "
                        ";
        }
        // line 1040
        echo "                        <button type=\"submit\" class=\"btn btn-success save\">";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Send"]);
        echo "</button>
                        <span class=\"kt-margin-left-10\">";
        // line 1041
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["or"]);
        echo " <a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 1041), "child_of", [], "any", false, false, false, 1041));
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
        // line 1048
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
        echo "

";
        // line 1050
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('styles'        );
        // line 1051
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
        // line 1050
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
        // line 1076
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 1077
        echo "<script src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/admin/vendors/custom/geocomplete/jquery.geocomplete.js");
        echo "\" type=\"text/javascript\"></script>
<script src=\"https://maps.googleapis.com/maps/api/js?libraries=places&key=";
        // line 1078
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "google", [], "any", false, false, false, 1078), "map", [], "any", false, false, false, 1078), "key", [], "any", false, false, false, 1078), "html", null, true);
        echo "\"></script>
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


    \$('body').on('click', '.show_receiver_info', function(e){
        var selected = \$('.show_receiver_info:checked').val();
        if(selected == 2){
            \$('.receiver_information').addClass('kt-hidden');
        }else{
            \$('.receiver_information').removeClass('kt-hidden');
        }
    });
    \$('body').on('click', '.type', function(e){
        var selected = \$(this).val();
        if(selected == 2){
            \$('.type_1').addClass('kt-hidden');
            \$('.type_2').removeClass('kt-hidden');
        }else{
            \$('.type_1').removeClass('kt-hidden');
            \$('.type_2').addClass('kt-hidden');
            var show_receiver_info = \$('.show_receiver_info:checked').val();
            if(show_receiver_info == 2){
                \$('.receiver_information').addClass('kt-hidden');
            }else{
                \$('.receiver_information').removeClass('kt-hidden');
            }
        }

        var show_receiver_info = \$('.show_receiver_info:checked').val();
         var sender_address_id = \$('#sender_address_id').val();
         var receiver_address_id = \$('#receiver_address_id').val();
         var packaging_id = \$('#packaging_id').val();
         var return_defray = \$('.return_defray:checked').val();
         var return_package_fee = \$('.return_package_fee:checked').val();
         if(selected != '' && selected != 'new'){
             \$.request('onChangefees', {
                  data: {sender_address_id: sender_address_id, type: selected, packaging_id:packaging_id, receiver_address_id: receiver_address_id, return_defray: return_defray, return_package_fee: return_package_fee,show_receiver_info:show_receiver_info},
                  success: function(response, status, xhr, \$form) {
                       \$('#delivery_cost').val(response.delivery_cost);
                       \$('#return_courier_fee').val(response.return_courier_fee);
                  }
             });
        }
    });
    \$('body').on('click', '.return_package_fee', function(e){
        var selected = \$(this).val();

        var show_receiver_info = \$('.show_receiver_info:checked').val();
        var type = \$('.type:checked').val();
         var sender_address_id = \$('#sender_address_id').val();
         var receiver_address_id = \$('#receiver_address_id').val();
         var packaging_id = \$('#packaging_id').val();
         var return_defray = \$('.return_defray:checked').val();
         \$.request('onChangefees', {
              data: {sender_address_id: sender_address_id, type: type, packaging_id:packaging_id, receiver_address_id: receiver_address_id, return_defray: return_defray, return_package_fee: selected,show_receiver_info:show_receiver_info},
              success: function(response, status, xhr, \$form) {
                   \$('#delivery_cost').val(response.delivery_cost);
                   \$('#return_courier_fee').val(response.return_courier_fee);
              }
         });
    });
    \$('body').on('click', '.show_receiver_info', function(e){
        var selected = \$(this).val();

        var show_receiver_info = \$('.show_receiver_info:checked').val();
        var type = \$('.type:checked').val();
         var sender_address_id = \$('#sender_address_id').val();
         var receiver_address_id = \$('#receiver_address_id').val();
         var packaging_id = \$('#packaging_id').val();
         var return_defray = \$('.return_defray:checked').val();
         \$.request('onChangefees', {
              data: {sender_address_id: sender_address_id, type: type, packaging_id:packaging_id, receiver_address_id: receiver_address_id, return_defray: return_defray, return_package_fee: selected,show_receiver_info:show_receiver_info},
              success: function(response, status, xhr, \$form) {
                   \$('#delivery_cost').val(response.delivery_cost);
                   \$('#return_courier_fee').val(response.return_courier_fee);
              }
         });
    });
    \$('body').on('change', '#sender_id', function(e, clickedIndex, newValue, oldValue){
        var selected = \$(e.currentTarget).val();
        if(selected == 'new'){
            \$('select.sender_address_id').html('').val('').selectpicker('refresh');
            \$('#addnewsender').removeClass('kt-hidden');
            \$('html, body').animate({
                scrollTop: eval(\$('#addnewsender').offset().top - 140)
            }, 2000);
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

                     var selected = response.default;
                     var type = \$('.type:checked').val();
                     var receiver_address_id = \$('#receiver_address_id').val();
                     var packaging_id = \$('#packaging_id').val();
                     var return_defray = \$('.return_defray:checked').val();
                     var return_package_fee = \$('.return_package_fee:checked').val();
                     var show_receiver_info = \$('.show_receiver_info:checked').val();
                     if(selected != '' && selected != 'new'){
                         \$.request('onChangefees', {
                              data: {sender_address_id: selected, type: type, packaging_id:packaging_id, receiver_address_id: receiver_address_id, return_defray: return_defray, return_package_fee: return_package_fee,show_receiver_info:show_receiver_info},
                              success: function(response, status, xhr, \$form) {
                                   \$('#delivery_cost').val(response.delivery_cost);
                                   \$('#return_courier_fee').val(response.return_courier_fee);
                              }
                         });
                    }
                 }
            });
        }
    });
    \$('body').on('click', '.save_draft', function(e){
        swal.fire({
            buttonsStyling: false,
            html: \"<div class='alert alert-warning' role='alert'><div class='alert-text'>";
        // line 1226
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["This mean that your shipment request will not be sent to the company, it will be just saved in your account as a draft so you can edit it or give you the ability to add all your shipments and then send them all to the company at once"]);
        echo "</div></div>\",
            type: \"warning\",

            confirmButtonText: \"";
        // line 1229
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yes, Just save it as a draft"]);
        echo "!\",
            confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",

            showCancelButton: true,
            cancelButtonText: \"";
        // line 1233
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No, cancel"]);
        echo "\",
            cancelButtonClass: \"btn btn-sm btn-bold btn-default\"
        }).then(function (result) {
            if (result.value) {
                \$('.kt_form').attr('data-request', 'onDraft');
                \$('.kt_form').submit();
            } else {
                \$('.kt_form').attr('data-request', 'onSave');
            }
        });
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
        // line 1263
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Processing, please wait"]);
        echo "...'
            });
            \$.request('onNewclient', {
                 data: {name: parent.find('.name').val(), mobile: parent.find('.mobile').val(), email: parent.find('.email').val(), gender: parent.find('.gender:checked').val(), street_addr: parent.find('.street_addr').val(), lat: parent.find('.lat').val(), lng: parent.find('.lng').val(), url: parent.find('.url').val(), area_id: parent.find('.area_id').find(\"option:selected\").val(), city_id: parent.find('.city_id').find(\"option:selected\").val(), postal_code: parent.find('.postal_code').val(), state_id: parent.find('.state_id').find(\"option:selected\").val(), country_id: parent.find('.country_id').find(\"option:selected\").val(), connect: parent.find('.connect:checked').val(), username: parent.find('.username').val(), password: parent.find('.password').val()},
                 error: function(response, status, xhr, \$form) {
                     swal.fire({
                         title: '";
        // line 1269
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Error!"]);
        echo "',
                         text: response.responseText,
                         type: 'error',
                         buttonsStyling: false,
                         confirmButtonText: '";
        // line 1273
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
            \$('html, body').animate({
                scrollTop: eval(\$('#addnewsenderaddress').offset().top - 140)
            }, 2000);
        }else if(selected != ''){
            \$('#addnewsenderaddress').addClass('kt-hidden');
        }
    });

    \$('body').on('changed.bs.select', '#packaging_id', function(e, clickedIndex, newValue, oldValue){
        var selected = \$(e.currentTarget).val();

        var type = \$('.type:checked').val();
         var sender_address_id = \$('#sender_address_id').val();
         var receiver_address_id = \$('#receiver_address_id').val();
         var packaging_id = selected;
         var return_defray = \$('.return_defray:checked').val();
         var return_package_fee = \$('.return_package_fee:checked').val();
         var show_receiver_info = \$('.show_receiver_info:checked').val();
         if(selected != ''){
             \$.request('onChangefees', {
                  data: {sender_address_id: sender_address_id, type: type, packaging_id:packaging_id, receiver_address_id: receiver_address_id, return_defray: return_defray, return_package_fee: return_package_fee,show_receiver_info:show_receiver_info},
                  success: function(response, status, xhr, \$form) {
                       \$('#delivery_cost').val(response.delivery_cost);
                       \$('#return_courier_fee').val(response.return_courier_fee);
                  }
             });
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
        // line 1350
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Processing, please wait"]);
        echo "...'
            });
            \$.request('onNewclientaddress', {
                 data: {client_id: ";
        // line 1353
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 1353) == 5)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 1353), "html", null, true);
        } else {
            echo "\$('#sender_id').val()";
        }
        echo ", street_addr: parent.find('.street_addr').val(), lat: parent.find('.lat').val(), lng: parent.find('.lng').val(), url: parent.find('.url').val(), area_id: parent.find('.area_id').find(\"option:selected\").val(), city_id: parent.find('.city_id').find(\"option:selected\").val(), postal_code: parent.find('.postal_code').val(), state_id: parent.find('.state_id').find(\"option:selected\").val(), country_id: parent.find('.country_id').find(\"option:selected\").val()},
                 error: function(response, status, xhr, \$form) {
                     swal.fire({
                         title: '";
        // line 1356
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Error!"]);
        echo "',
                         text: response.responseText,
                         type: 'error',
                         buttonsStyling: false,
                         confirmButtonText: '";
        // line 1360
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["OK"]);
        echo "',
                         confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                     });
                     KTApp.unblockPage();
                 },
                 success: function(response, status, xhr, \$form) {
                     \$('select.sender_address_id').html(response.html).selectpicker('refresh');
                     \$('select.sender_address_id').val(response.default).selectpicker('refresh');



                      var selected = response.default;
                      var type = \$('.type:checked').val();
                      var receiver_address_id = \$('#receiver_address_id').val();
                      var packaging_id = \$('#packaging_id').val();
                      var return_defray = \$('.return_defray:checked').val();
                      var return_package_fee = \$('.return_package_fee:checked').val();
                      var show_receiver_info = \$('.show_receiver_info:checked').val();
                      if(selected != '' && selected != 'new'){
                          \$.request('onChangefees', {
                               data: {sender_address_id: selected, type: type, packaging_id:packaging_id, receiver_address_id: receiver_address_id, return_defray: return_defray, return_package_fee: return_package_fee,show_receiver_info:show_receiver_info},
                               success: function(response, status, xhr, \$form) {
                                    \$('#delivery_cost').val(response.delivery_cost);
                                    \$('#return_courier_fee').val(response.return_courier_fee);
                               }
                          });
                     }


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
            \$('html, body').animate({
                scrollTop: eval(\$('#addnewreceiver').offset().top - 140)
            }, 2000);
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



                     var selected = response.default;
                     var type = \$('.type:checked').val();
                     var sender_address_id = \$('#sender_address_id').val();
                     var packaging_id = \$('#packaging_id').val();
                     var return_defray = \$('.return_defray:checked').val();
                     var return_package_fee = \$('.return_package_fee:checked').val();
                     var show_receiver_info = \$('.show_receiver_info:checked').val();
                     if(selected != '' && selected != 'new'){
                         \$.request('onChangefees', {
                              data: {sender_address_id: sender_address_id, packaging_id: packaging_id, type: type, receiver_address_id: selected, return_defray: return_defray, return_package_fee: return_package_fee,show_receiver_info:show_receiver_info},
                              success: function(response, status, xhr, \$form) {
                                   \$('#delivery_cost').val(response.delivery_cost);
                                   \$('#return_courier_fee').val(response.return_courier_fee);
                              }
                         });
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
        // line 1468
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Processing, please wait"]);
        echo "...'
            });
            \$.request('onNewclient', {
                 data: {name: parent.find('.name').val(), mobile: parent.find('.mobile').val(), email: parent.find('.email').val(), gender: parent.find('.gender:checked').val(), street_addr: parent.find('.street_addr').val(), lat: parent.find('.lat').val(), lng: parent.find('.lng').val(), url: parent.find('.url').val(), area_id: parent.find('.area_id').find(\"option:selected\").val(), city_id: parent.find('.city_id').find(\"option:selected\").val(), postal_code: parent.find('.postal_code').val(), state_id: parent.find('.state_id').find(\"option:selected\").val(), country_id: parent.find('.country_id').find(\"option:selected\").val(), connect: parent.find('.connect:checked').val(), username: parent.find('.username').val(), password: parent.find('.password').val()},
                 error: function(response, status, xhr, \$form) {
                     swal.fire({
                         title: '";
        // line 1474
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Error!"]);
        echo "',
                         text: response.responseText,
                         type: 'error',
                         buttonsStyling: false,
                         confirmButtonText: '";
        // line 1478
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


                      var selected = response.address_id;
                      var type = \$('.type:checked').val();
                      var sender_address_id = \$('#sender_address_id').val();
                      var packaging_id = \$('#packaging_id').val();
                      var return_defray = \$('.return_defray:checked').val();
                      var return_package_fee = \$('.return_package_fee:checked').val();
                      var show_receiver_info = \$('.show_receiver_info:checked').val();
                      if(selected != '' && selected != 'new'){
                          \$.request('onChangefees', {
                               data: {sender_address_id: sender_address_id, packaging_id: packaging_id, type: type, receiver_address_id: selected, return_defray: return_defray, return_package_fee: return_package_fee,show_receiver_info:show_receiver_info},
                               success: function(response, status, xhr, \$form) {
                                    \$('#delivery_cost').val(response.delivery_cost);
                                    \$('#return_courier_fee').val(response.return_courier_fee);
                               }
                          });
                     }

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
            \$('html, body').animate({
                scrollTop: eval(\$('#addnewreceiveraddress').offset().top - 140)
            }, 2000);
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
        // line 1553
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Processing, please wait"]);
        echo "...'
            });
            \$.request('onNewclientaddress', {
                 data: {client_id: \$('#receiver_id').val(), street_addr: parent.find('.street_addr').val(), lat: parent.find('.lat').val(), lng: parent.find('.lng').val(), url: parent.find('.url').val(), area_id: parent.find('.area_id').find(\"option:selected\").val(), city_id: parent.find('.city_id').find(\"option:selected\").val(), postal_code: parent.find('.postal_code').val(), state_id: parent.find('.state_id').find(\"option:selected\").val(), country_id: parent.find('.country_id').find(\"option:selected\").val()},
                 error: function(response, status, xhr, \$form) {
                     swal.fire({
                         title: '";
        // line 1559
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Error!"]);
        echo "',
                         text: response.responseText,
                         type: 'error',
                         buttonsStyling: false,
                         confirmButtonText: '";
        // line 1563
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["OK"]);
        echo "',
                         confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                     });
                     KTApp.unblockPage();
                 },
                 success: function(response, status, xhr, \$form) {
                     \$('select.receiver_address_id').html(response.html).selectpicker('refresh');
                     \$('select.receiver_address_id').val(response.default).selectpicker('refresh');




                       var selected = response.default;
                       var type = \$('.type:checked').val();
                       var sender_address_id = \$('#sender_address_id').val();
                       var packaging_id = \$('#packaging_id').val();
                       var return_defray = \$('.return_defray:checked').val();
                       var return_package_fee = \$('.return_package_fee:checked').val();
                       var show_receiver_info = \$('.show_receiver_info:checked').val();
                       if(selected != '' && selected != 'new'){
                           \$.request('onChangefees', {
                                data: {sender_address_id: sender_address_id, packaging_id: packaging_id, type: type, receiver_address_id: selected, return_defray: return_defray, return_package_fee: return_package_fee,show_receiver_info:show_receiver_info},
                                success: function(response, status, xhr, \$form) {
                                     \$('#delivery_cost').val(response.delivery_cost);
                                     \$('#return_courier_fee').val(response.return_courier_fee);
                                }
                           });
                      }



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
        // line 1618
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
        // line 1631
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
        // line 1644
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Select"]);
        echo "'}).selectpicker('refresh');
                      parent.find('select.area_id').html(response.html).selectpicker('refresh');
                 }
            });
       }
    });

    \$('body').on('change', '#sender_address_id', function(e, clickedIndex, newValue, oldValue){
        var selected = \$(e.currentTarget).val();
        var type = \$('.type:checked').val();
        var receiver_address_id = \$('#receiver_address_id').val();
        var packaging_id = \$('#packaging_id').val();
        var return_defray = \$('.return_defray:checked').val();
        var return_package_fee = \$('.return_package_fee:checked').val();
        var show_receiver_info = \$('.show_receiver_info:checked').val();
        if(selected != '' && selected != 'new'){
            \$.request('onChangefees', {
                 data: {sender_address_id: selected, type: type, packaging_id:packaging_id, receiver_address_id: receiver_address_id, return_defray: return_defray, return_package_fee: return_package_fee,show_receiver_info:show_receiver_info},
                 success: function(response, status, xhr, \$form) {
                      \$('#delivery_cost').val(response.delivery_cost);
                      \$('#return_courier_fee').val(response.return_courier_fee);
                 }
            });
       }
    });

    \$('body').on('change', '#receiver_address_id', function(e, clickedIndex, newValue, oldValue){
        var selected = \$(e.currentTarget).val();
         var type = \$('.type:checked').val();
         var sender_address_id = \$('#sender_address_id').val();
         var packaging_id = \$('#packaging_id').val();
         var return_defray = \$('.return_defray:checked').val();
         var return_package_fee = \$('.return_package_fee:checked').val();
         var show_receiver_info = \$('.show_receiver_info:checked').val();
         if(selected != '' && selected != 'new'){
             \$.request('onChangefees', {
                  data: {sender_address_id: sender_address_id, type: type, packaging_id:packaging_id, receiver_address_id: selected, return_defray: return_defray, return_package_fee: return_package_fee,show_receiver_info:show_receiver_info},
                  success: function(response, status, xhr, \$form) {
                       \$('#delivery_cost').val(response.delivery_cost);
                       \$('#return_courier_fee').val(response.return_courier_fee);
                  }
             });
        }
    });


    \$(\".clients\").select2({
        ";
        // line 1691
        if ((($context["currentLang"] ?? null) == "ar")) {
            // line 1692
            echo "            dir: \"rtl\",
        ";
        }
        // line 1694
        echo "        language: {
            errorLoading: function () {
                return \"";
        // line 1696
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["There is an error while searching"]);
        echo "...\";
            },
            inputTooLong: function (args) {
                return \"";
        // line 1699
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["You must enter less characters"]);
        echo "...\";
            },
            inputTooShort: function (args) {
                return \"";
        // line 1702
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["You must enter more characters"]);
        echo "...\";
            },
            loadingMore: function () {
                return \"";
        // line 1705
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Loading More"]);
        echo "...\";
            },
            maximumSelected: function (args) {
                return \"";
        // line 1708
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Maximum element has been selected"]);
        echo "...\";
            },
            noResults: function () {
                return \"";
        // line 1711
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No result found"]);
        echo "...\";
            },
            searching: function () {
                return \"";
        // line 1714
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Searching"]);
        echo "...\";
            }
        },
        placeholder: \"";
        // line 1717
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
    \$('#package_repeater').repeater({
        initEmpty: true,
        show: function () {
            \$(this).slideDown();
            \$('.selectpicker').selectpicker({
                noneSelectedText: '";
        // line 1749
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


             var sender_address_id = \$('#sender_address_id').val();
             var receiver_address_id = \$('#receiver_address_id').val();
             var packaging_id = \$('#packaging_id').val();
             var type = \$('.type:checked').val();
             var return_defray = \$('.return_defray:checked').val();
             var return_package_fee = \$('.return_package_fee:checked').val();
             var show_receiver_info = \$('.show_receiver_info:checked').val();
             \$.request('onChangefees', {
                  data: {sender_address_id: sender_address_id, type: type, packaging_id:packaging_id, receiver_address_id: receiver_address_id, return_defray: return_defray, return_package_fee: return_package_fee,show_receiver_info:show_receiver_info},
                  success: function(response, status, xhr, \$form) {
                       \$('#delivery_cost').val(response.delivery_cost);
                       \$('#return_courier_fee').val(response.return_courier_fee);
                  }
             });
        }else{
            \$('.package_fee').addClass('kt-hidden');
        }
    });
    \$(\".fees\").inputmask('999";
        // line 1822
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "thousand_separator", [], "any", false, false, false, 1822), "html", null, true);
        echo "999";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "thousand_separator", [], "any", false, false, false, 1822), "html", null, true);
        echo "999";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "decimal_point", [], "any", false, false, false, 1822), "html", null, true);
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range("1", twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "initbiz_money_fraction_digits", [], "any", false, false, false, 1822)));
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
        // line 1825
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range("1", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "tracking", [], "any", false, false, false, 1825), "numbers_order", [], "any", false, false, false, 1825)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            echo "0";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "' + ";
        echo twig_escape_filter($this->env, ($context["max"] ?? null), "html", null, true);
        echo ").slice(-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "tracking", [], "any", false, false, false, 1825), "numbers_order", [], "any", false, false, false, 1825), "html", null, true);
        echo "));
    \$(\"body\").on('keyup', '.mask', function(e){
        \$(this).val(('";
        // line 1827
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range("1", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "tracking", [], "any", false, false, false, 1827), "numbers_order", [], "any", false, false, false, 1827)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            echo "0";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "' + \$(this).val()).slice(-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "tracking", [], "any", false, false, false, 1827), "numbers_order", [], "any", false, false, false, 1827), "html", null, true);
        echo "));
    });
});
</script>
";
        // line 1076
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/test/themes/spotlayer/pages/dashboard/order-create.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  3012 => 1076,  2996 => 1827,  2980 => 1825,  2962 => 1822,  2886 => 1749,  2851 => 1717,  2845 => 1714,  2839 => 1711,  2833 => 1708,  2827 => 1705,  2821 => 1702,  2815 => 1699,  2809 => 1696,  2805 => 1694,  2801 => 1692,  2799 => 1691,  2749 => 1644,  2733 => 1631,  2717 => 1618,  2659 => 1563,  2652 => 1559,  2643 => 1553,  2565 => 1478,  2558 => 1474,  2549 => 1468,  2438 => 1360,  2431 => 1356,  2421 => 1353,  2415 => 1350,  2335 => 1273,  2328 => 1269,  2319 => 1263,  2286 => 1233,  2279 => 1229,  2273 => 1226,  2122 => 1078,  2117 => 1077,  2115 => 1076,  2113 => 1050,  2087 => 1051,  2085 => 1050,  2080 => 1048,  2066 => 1041,  2061 => 1040,  2053 => 1038,  2051 => 1037,  2039 => 1027,  2034 => 1024,  2028 => 1020,  2017 => 1018,  2013 => 1017,  2006 => 1013,  2003 => 1012,  2001 => 1011,  1996 => 1008,  1981 => 1006,  1977 => 1005,  1971 => 1002,  1966 => 999,  1951 => 997,  1947 => 996,  1941 => 993,  1936 => 990,  1929 => 986,  1925 => 984,  1923 => 983,  1918 => 982,  1911 => 978,  1907 => 976,  1905 => 975,  1900 => 973,  1893 => 968,  1882 => 966,  1878 => 965,  1872 => 962,  1865 => 958,  1860 => 955,  1849 => 953,  1845 => 952,  1839 => 949,  1830 => 943,  1824 => 940,  1817 => 936,  1809 => 933,  1801 => 928,  1796 => 926,  1789 => 921,  1787 => 920,  1777 => 913,  1765 => 904,  1723 => 873,  1709 => 862,  1702 => 858,  1689 => 848,  1674 => 836,  1665 => 829,  1654 => 827,  1650 => 826,  1642 => 821,  1629 => 811,  1615 => 800,  1603 => 791,  1583 => 774,  1576 => 770,  1569 => 766,  1566 => 765,  1560 => 761,  1553 => 757,  1549 => 755,  1547 => 754,  1542 => 753,  1535 => 749,  1531 => 747,  1529 => 746,  1523 => 743,  1520 => 742,  1518 => 741,  1513 => 738,  1506 => 734,  1502 => 732,  1500 => 731,  1497 => 730,  1490 => 726,  1486 => 724,  1484 => 723,  1478 => 720,  1468 => 713,  1461 => 709,  1454 => 705,  1443 => 697,  1439 => 696,  1428 => 688,  1423 => 686,  1416 => 681,  1399 => 679,  1395 => 678,  1390 => 676,  1386 => 675,  1381 => 672,  1370 => 670,  1366 => 669,  1361 => 667,  1357 => 666,  1352 => 663,  1335 => 661,  1331 => 660,  1326 => 658,  1322 => 657,  1313 => 651,  1308 => 648,  1291 => 646,  1287 => 645,  1281 => 642,  1271 => 635,  1258 => 627,  1241 => 613,  1237 => 612,  1230 => 607,  1217 => 597,  1203 => 586,  1189 => 575,  1174 => 565,  1167 => 560,  1165 => 559,  1159 => 556,  1154 => 554,  1147 => 549,  1136 => 547,  1132 => 546,  1127 => 544,  1123 => 543,  1118 => 540,  1107 => 538,  1103 => 537,  1098 => 535,  1094 => 534,  1089 => 531,  1072 => 529,  1068 => 528,  1063 => 526,  1059 => 525,  1050 => 519,  1045 => 516,  1028 => 514,  1024 => 513,  1018 => 510,  1008 => 503,  996 => 494,  989 => 490,  983 => 487,  976 => 483,  969 => 479,  957 => 472,  942 => 460,  936 => 459,  930 => 456,  925 => 454,  917 => 451,  908 => 445,  892 => 432,  885 => 428,  878 => 424,  870 => 419,  866 => 418,  859 => 414,  848 => 406,  844 => 405,  833 => 397,  828 => 395,  821 => 390,  810 => 388,  806 => 387,  801 => 385,  797 => 384,  792 => 381,  781 => 379,  777 => 378,  772 => 376,  768 => 375,  763 => 372,  746 => 370,  742 => 369,  737 => 367,  733 => 366,  724 => 360,  719 => 357,  702 => 355,  698 => 354,  692 => 351,  682 => 344,  669 => 336,  659 => 328,  649 => 321,  645 => 320,  638 => 315,  625 => 305,  611 => 294,  597 => 283,  582 => 273,  575 => 268,  573 => 267,  567 => 264,  562 => 262,  555 => 257,  544 => 255,  540 => 254,  535 => 252,  531 => 251,  526 => 248,  515 => 246,  511 => 245,  506 => 243,  502 => 242,  497 => 239,  480 => 237,  476 => 236,  471 => 234,  467 => 233,  458 => 227,  453 => 224,  436 => 222,  432 => 221,  426 => 218,  416 => 211,  404 => 202,  397 => 198,  391 => 195,  384 => 191,  377 => 187,  365 => 180,  355 => 172,  353 => 171,  349 => 169,  343 => 167,  328 => 165,  323 => 164,  321 => 163,  315 => 162,  311 => 161,  305 => 160,  302 => 159,  299 => 158,  292 => 154,  289 => 153,  286 => 152,  284 => 151,  281 => 150,  276 => 148,  271 => 146,  267 => 144,  262 => 142,  257 => 141,  255 => 140,  249 => 139,  236 => 129,  224 => 120,  204 => 103,  199 => 101,  194 => 98,  179 => 96,  175 => 95,  169 => 92,  164 => 89,  153 => 87,  149 => 86,  143 => 83,  127 => 70,  119 => 65,  100 => 49,  92 => 44,  73 => 28,  59 => 17,  47 => 8,  37 => 1,);
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
                                                <input type=\"radio\" name=\"type\" class=\"type\" value=\"1\" checked required>
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
                                                <input type=\"radio\" name=\"type\" class=\"type\" value=\"2\" required>
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
                                <option value=\"{{package.id}}\">{{package.name}}</option>
                            {% endfor %}
                        </select>
                    </div>
                    <div class=\"form-group col-lg-4\">
                        <label>{{'Office'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                        <select class=\"form-control\" name=\"office_id\" required>
                            <option data-hidden=\"true\"></option>
                            {% for office in offices %}
                                <option value=\"{{office.id}}\" {% if user.office == office.id %}selected{% endif %}>{{office.name}}</option>
                            {% endfor %}
                        </select>
                    </div>
                    <div class=\"form-group col-lg-4\">
                        <label>{{'Shipping Date'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                        <div class=\"input-group date\">
                            <input type=\"text\" class=\"form-control date\" readonly=\"\" name=\"ship_date\" value=\"{{now|date(settings.dateformat)}}\" required>
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
                            <option value=\"new\" data-icon=\"flaticon2-add\">{{'Add New'|__}}</option>
                        </select>
                        <span class=\"text-muted\">{{'Choose or add a new client that will send the package'|__}}</span>
                    {% endif %}
                </div>
                {% if user.role_id == 5 %}
                    {% if user.mobile is null %}
                        <div class=\"form-group row\">
                            <label>{{'Mobile'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            <input type=\"text\" class=\"form-control mobile\" name=\"sender_mobile\" required />
                        </div>
                    {% endif %}
                {% endif %}
                <div class=\"form-group row\">
                    <label>{{'Sender Address'|__}}/{{'Client Address'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                    <select class=\"form-control sender_address_id\" name=\"sender_address_id\" id=\"sender_address_id\" data-live-search=\"true\" title=\"{{'Please select sender first'|__}}\" required>
                        <option data-hidden=\"true\"></option><label>{{'Sender'|__}}/{{'Client'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
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
                                <div class=\"kt-portlet__head-label\">
                                \t<span class=\"kt-portlet__head-icon\">
                                \t\t<i class=\"flaticon2-user\"></i>
                                \t</span>
                                \t<h3 class=\"kt-portlet__head-title\">
                                \t\t{{'Add a new client'|__}} <small>{{'Fill data and save it brefore you can continue'}}</small>
                                \t</h3>
                                </div>
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
                                    {% if user.hasUserPermission('client', 'c') %}
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
                {% endif %}
                <div class=\"row kt-hidden\" id=\"addnewsenderaddress\">
                    <div class=\"kt-portlet kt-portlet--bordered kt-portlet--head--noborder kt-margin-b-0\">
        \t\t\t\t<div class=\"kt-portlet__head\">
                            <div class=\"kt-portlet__head-label\">
                                <span class=\"kt-portlet__head-icon\">
                                    <i class=\"flaticon2-user\"></i>
                                </span>
                                <h3 class=\"kt-portlet__head-title\">
                                    {{'Add a new client address'|__}} <small>{{'Fill data and save it brefore you can continue'}}</small>
                                </h3>
                            </div>
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
                            <option value=\"1\">{{'Postpaid'|__}} </option>
                            <option value=\"2\">{{'Prepaid'|__}} </option>
                        </select>
                    </div>
                </div>
                <div class=\"form-group row type_1\">
                    <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Record receiver information ?'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                    <div class=\"col-lg-9 col-xl-6\">
                        <div class=\"kt-radio-inline\">
                            <label class=\"kt-radio\">
                                <input type=\"radio\" name=\"show_receiver_info\" class=\"show_receiver_info\" value=\"1\" required> {{'Yes'|__}}
                                <span></span>
                            </label>
                            <label class=\"kt-radio\">
                                <input type=\"radio\" name=\"show_receiver_info\" class=\"show_receiver_info\" value=\"2\" checked required> {{'No'|__}}
                                <span></span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"type_2 receiver_information kt-hidden\">
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
                            <option value=\"new\" data-icon=\"flaticon2-add\">{{'Add New'|__}}</option>
                        </select>
                        <span class=\"text-muted\">{{'Choose or add a new client that will receive the package'|__}}</span>
                    </div>
                    <div class=\"form-group row\">
                        <label>{{'Receiver Address'|__}}/{{'Client Address'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                        <select class=\"form-control receiver_address_id\" name=\"receiver_address_id\" id=\"receiver_address_id\" data-live-search=\"true\" title=\"{{'Please select receiver first'|__}}\" required>
                            <option data-hidden=\"true\"></option>
                        </select>
                    </div>
                    <div class=\"row kt-hidden\" id=\"addnewreceiver\">
                        <div class=\"kt-portlet kt-portlet--bordered kt-portlet--head--noborder kt-margin-b-0\">
            \t\t\t\t<div class=\"kt-portlet__head\">
                                <div class=\"kt-portlet__head-label\">
                                    <span class=\"kt-portlet__head-icon\">
                                        <i class=\"flaticon2-user\"></i>
                                    </span>
                                    <h3 class=\"kt-portlet__head-title\">
                                        {{'Add a new client'|__}} <small>{{'Fill data and save it brefore you can continue'}}</small>
                                    </h3>
                                </div>
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
                                <div class=\"kt-portlet__head-label\">
                                    <span class=\"kt-portlet__head-icon\">
                                        <i class=\"flaticon2-user\"></i>
                                    </span>
                                    <h3 class=\"kt-portlet__head-title\">
                                        {{'Add a new client address'|__}} <small>{{'Fill data and save it brefore you can continue'}}</small>
                                    </h3>
                                </div>
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
                                    <input type=\"radio\" name=\"return_defray\" class=\"return_defray\" value=\"1\" required> {{'Yes'|__}}
                                    <span></span>
                                </label>
                                <label class=\"kt-radio\">
                                    <input type=\"radio\" name=\"return_defray\" class=\"return_defray\" value=\"2\" required> {{'No'|__}}
                                    <span></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class=\"form-group row kt-hidden package_fee\">
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
                \t\t\t\t\t<input type=\"text\" class=\"form-control decimal\" data-type='currency' name=\"package_fee\" required />
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
                        <div class=\"form-group row kt-hidden package_fee\">
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
                    \t\t\t\t\t<input type=\"text\" class=\"form-control decimal\" data-type='currency' name=\"return_courier_fee\" id=\"return_courier_fee\" value=\"{{settings.fees.delivery_cost_back_receiver}}\" required />
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
                    <div class=\"form-group row kt-hidden package_fee\">
                        <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Return package fees responsiable'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                        <div class=\"col-lg-9 col-xl-6\">
                            <div class=\"kt-radio-inline\">
                                <label class=\"kt-radio\">
                                    <input type=\"radio\" name=\"return_package_fee\" class=\"return_package_fee\" value=\"1\" checked required> {{'Receiver'|__}}
                                    <span></span>
                                </label>
                                <label class=\"kt-radio\">
                                    <input type=\"radio\" name=\"return_package_fee\" class=\"return_package_fee\" value=\"2\" required> {{'Sender'|__}}
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
    <div class=\"col-lg-12\">
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
\t\t\t\t\t<div class=\"kt-section__content\">
                        <div class=\"form-group form-group-last row\" id=\"package_repeater\">
                            <div data-repeater-list=\"items\" class=\"col-lg-12\">
                                <div data-repeater-item class=\"align-items-center\">
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
                                            <a href=\"javascript:;\" data-repeater-delete=\"\" class=\"btn-sm btn btn-label-danger btn-bold kt-margin-t-25\">
                                                <i class=\"la la-trash-o\"></i>
                                                {{'Delete'|__}}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"form-group form-group-last row\">
                                <label class=\"col-xl-12 col-form-label kt-align-right\">
                                    <a href=\"javascript:;\" data-repeater-create=\"\" class=\"btn btn-bold btn-sm btn-label-brand\">
                                        <i class=\"la la-plus\"></i> {{'Add Item'|__}}
                                    </a>
                                </label>
                           </div>
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
                \t\t\t\t\t\t<input type=\"text\" class=\"form-control mask\" name=\"number\" aria-describedby=\"basic-addon1\">
                \t\t\t\t\t</div>
                                </div>
                                <div class=\"form-group col-lg-4\">
                                    <label>{{'Tax'|__}} & {{'Duty'|__}}</label>
                                    <div class=\"input-group\">
                \t\t\t\t\t\t<div class=\"input-group-prepend\"><span class=\"input-group-text\">%</span></div>
                \t\t\t\t\t\t<input type=\"text\" class=\"form-control bootstrap-touchspin-vertical-btn\" name=\"tax\" value=\"{{settings.taxes.percent}}\">
                \t\t\t\t\t</div>
                                </div>
                                <div class=\"form-group col-lg-4\">
                                    <label>{{'Insurance'|__}}</label>
                                    <div class=\"input-group\">
                \t\t\t\t\t\t<div class=\"input-group-prepend\"><span class=\"input-group-text\">%</span></div>
                \t\t\t\t\t\t<input type=\"text\" class=\"form-control bootstrap-touchspin-vertical-btn\" name=\"insurance\" value=\"{{settings.taxes.insurance}}\">
                \t\t\t\t\t</div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"form-group col-lg-4\">
                                    <label>{{'Shipping Mode'|__}}</label>
                                    <select class=\"form-control\" data-live-search=\"true\" name=\"mode_id\">
                                        <option data-hidden=\"true\"></option>
                                        {% for mode in modes %}
                                            <option value=\"{{mode.id}}\">{{mode.name}}</option>
                                        {% endfor %}
                                    </select>
                                </div>
                                <div class=\"form-group col-lg-4\">
                                    <label>{{'Customs Value'|__}}</label>
                                    <input type=\"text\" class=\"form-control\" name=\"customs_value\" value=\"0\" aria-describedby=\"basic-addon1\">
                                </div>
                                <div class=\"form-group col-lg-4\">
                                    <label>{{'Courier Company'|__}}</label>
                                    <select class=\"form-control\" data-live-search=\"true\" name=\"courier_id\">
                                        <option data-hidden=\"true\"></option>
                                        {% for courier in couriers %}
                                            <option value=\"{{courier.id}}\">{{courier.name}}</option>
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
                                        <input type=\"text\" class=\"form-control decimal\" data-type='currency' name=\"courier_fee\" id=\"delivery_cost\" value=\"{{settings.fees.delivery_cost}}\" required>
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
                                            <option value=\"{{deliverytime.id}}\" {% if settings.tracking.default_deliverytime == deliverytime.id %}selected{% endif %}>{{deliverytime.name}}</option>
                                        {% endfor %}
                                    </select>
                                </div>
                                <div class=\"form-group col-lg-4\">
                                    <label>{{'Delivery Status'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                    <select class=\"form-control\" data-live-search=\"true\" name=\"status_id\" required>
                                        <option data-hidden=\"true\"></option>
                                        {% for status in statuses %}
                                            <option value=\"{{status.id}}\" {% if settings.tracking.default_status == status.id %}selected{% endif %}>{{status.name}}</option>
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
                                                <option value=\"{{employee.id}}\">{{employee.name}}</option>
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
                        {% if user.role_id == 5 %}
                            <button type=\"button\" class=\"btn btn-info save_draft\">{{'Save as draft'|__}}</button> <span class=\"kt-margin-left-10\">{{'or'|__}}
                        {% endif %}
                        <button type=\"submit\" class=\"btn btn-success save\">{{'Send'|__}}</button>
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
<script src=\"https://maps.googleapis.com/maps/api/js?libraries=places&key={{settings.google.map.key}}\"></script>
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


    \$('body').on('click', '.show_receiver_info', function(e){
        var selected = \$('.show_receiver_info:checked').val();
        if(selected == 2){
            \$('.receiver_information').addClass('kt-hidden');
        }else{
            \$('.receiver_information').removeClass('kt-hidden');
        }
    });
    \$('body').on('click', '.type', function(e){
        var selected = \$(this).val();
        if(selected == 2){
            \$('.type_1').addClass('kt-hidden');
            \$('.type_2').removeClass('kt-hidden');
        }else{
            \$('.type_1').removeClass('kt-hidden');
            \$('.type_2').addClass('kt-hidden');
            var show_receiver_info = \$('.show_receiver_info:checked').val();
            if(show_receiver_info == 2){
                \$('.receiver_information').addClass('kt-hidden');
            }else{
                \$('.receiver_information').removeClass('kt-hidden');
            }
        }

        var show_receiver_info = \$('.show_receiver_info:checked').val();
         var sender_address_id = \$('#sender_address_id').val();
         var receiver_address_id = \$('#receiver_address_id').val();
         var packaging_id = \$('#packaging_id').val();
         var return_defray = \$('.return_defray:checked').val();
         var return_package_fee = \$('.return_package_fee:checked').val();
         if(selected != '' && selected != 'new'){
             \$.request('onChangefees', {
                  data: {sender_address_id: sender_address_id, type: selected, packaging_id:packaging_id, receiver_address_id: receiver_address_id, return_defray: return_defray, return_package_fee: return_package_fee,show_receiver_info:show_receiver_info},
                  success: function(response, status, xhr, \$form) {
                       \$('#delivery_cost').val(response.delivery_cost);
                       \$('#return_courier_fee').val(response.return_courier_fee);
                  }
             });
        }
    });
    \$('body').on('click', '.return_package_fee', function(e){
        var selected = \$(this).val();

        var show_receiver_info = \$('.show_receiver_info:checked').val();
        var type = \$('.type:checked').val();
         var sender_address_id = \$('#sender_address_id').val();
         var receiver_address_id = \$('#receiver_address_id').val();
         var packaging_id = \$('#packaging_id').val();
         var return_defray = \$('.return_defray:checked').val();
         \$.request('onChangefees', {
              data: {sender_address_id: sender_address_id, type: type, packaging_id:packaging_id, receiver_address_id: receiver_address_id, return_defray: return_defray, return_package_fee: selected,show_receiver_info:show_receiver_info},
              success: function(response, status, xhr, \$form) {
                   \$('#delivery_cost').val(response.delivery_cost);
                   \$('#return_courier_fee').val(response.return_courier_fee);
              }
         });
    });
    \$('body').on('click', '.show_receiver_info', function(e){
        var selected = \$(this).val();

        var show_receiver_info = \$('.show_receiver_info:checked').val();
        var type = \$('.type:checked').val();
         var sender_address_id = \$('#sender_address_id').val();
         var receiver_address_id = \$('#receiver_address_id').val();
         var packaging_id = \$('#packaging_id').val();
         var return_defray = \$('.return_defray:checked').val();
         \$.request('onChangefees', {
              data: {sender_address_id: sender_address_id, type: type, packaging_id:packaging_id, receiver_address_id: receiver_address_id, return_defray: return_defray, return_package_fee: selected,show_receiver_info:show_receiver_info},
              success: function(response, status, xhr, \$form) {
                   \$('#delivery_cost').val(response.delivery_cost);
                   \$('#return_courier_fee').val(response.return_courier_fee);
              }
         });
    });
    \$('body').on('change', '#sender_id', function(e, clickedIndex, newValue, oldValue){
        var selected = \$(e.currentTarget).val();
        if(selected == 'new'){
            \$('select.sender_address_id').html('').val('').selectpicker('refresh');
            \$('#addnewsender').removeClass('kt-hidden');
            \$('html, body').animate({
                scrollTop: eval(\$('#addnewsender').offset().top - 140)
            }, 2000);
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

                     var selected = response.default;
                     var type = \$('.type:checked').val();
                     var receiver_address_id = \$('#receiver_address_id').val();
                     var packaging_id = \$('#packaging_id').val();
                     var return_defray = \$('.return_defray:checked').val();
                     var return_package_fee = \$('.return_package_fee:checked').val();
                     var show_receiver_info = \$('.show_receiver_info:checked').val();
                     if(selected != '' && selected != 'new'){
                         \$.request('onChangefees', {
                              data: {sender_address_id: selected, type: type, packaging_id:packaging_id, receiver_address_id: receiver_address_id, return_defray: return_defray, return_package_fee: return_package_fee,show_receiver_info:show_receiver_info},
                              success: function(response, status, xhr, \$form) {
                                   \$('#delivery_cost').val(response.delivery_cost);
                                   \$('#return_courier_fee').val(response.return_courier_fee);
                              }
                         });
                    }
                 }
            });
        }
    });
    \$('body').on('click', '.save_draft', function(e){
        swal.fire({
            buttonsStyling: false,
            html: \"<div class='alert alert-warning' role='alert'><div class='alert-text'>{{'This mean that your shipment request will not be sent to the company, it will be just saved in your account as a draft so you can edit it or give you the ability to add all your shipments and then send them all to the company at once'|__}}</div></div>\",
            type: \"warning\",

            confirmButtonText: \"{{\"Yes, Just save it as a draft\"|__}}!\",
            confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",

            showCancelButton: true,
            cancelButtonText: \"{{\"No, cancel\"|__}}\",
            cancelButtonClass: \"btn btn-sm btn-bold btn-default\"
        }).then(function (result) {
            if (result.value) {
                \$('.kt_form').attr('data-request', 'onDraft');
                \$('.kt_form').submit();
            } else {
                \$('.kt_form').attr('data-request', 'onSave');
            }
        });
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
            \$('html, body').animate({
                scrollTop: eval(\$('#addnewsenderaddress').offset().top - 140)
            }, 2000);
        }else if(selected != ''){
            \$('#addnewsenderaddress').addClass('kt-hidden');
        }
    });

    \$('body').on('changed.bs.select', '#packaging_id', function(e, clickedIndex, newValue, oldValue){
        var selected = \$(e.currentTarget).val();

        var type = \$('.type:checked').val();
         var sender_address_id = \$('#sender_address_id').val();
         var receiver_address_id = \$('#receiver_address_id').val();
         var packaging_id = selected;
         var return_defray = \$('.return_defray:checked').val();
         var return_package_fee = \$('.return_package_fee:checked').val();
         var show_receiver_info = \$('.show_receiver_info:checked').val();
         if(selected != ''){
             \$.request('onChangefees', {
                  data: {sender_address_id: sender_address_id, type: type, packaging_id:packaging_id, receiver_address_id: receiver_address_id, return_defray: return_defray, return_package_fee: return_package_fee,show_receiver_info:show_receiver_info},
                  success: function(response, status, xhr, \$form) {
                       \$('#delivery_cost').val(response.delivery_cost);
                       \$('#return_courier_fee').val(response.return_courier_fee);
                  }
             });
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
                 data: {client_id: {% if user.role_id == 5 %}{{user.id}}{% else %}\$('#sender_id').val(){% endif %}, street_addr: parent.find('.street_addr').val(), lat: parent.find('.lat').val(), lng: parent.find('.lng').val(), url: parent.find('.url').val(), area_id: parent.find('.area_id').find(\"option:selected\").val(), city_id: parent.find('.city_id').find(\"option:selected\").val(), postal_code: parent.find('.postal_code').val(), state_id: parent.find('.state_id').find(\"option:selected\").val(), country_id: parent.find('.country_id').find(\"option:selected\").val()},
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



                      var selected = response.default;
                      var type = \$('.type:checked').val();
                      var receiver_address_id = \$('#receiver_address_id').val();
                      var packaging_id = \$('#packaging_id').val();
                      var return_defray = \$('.return_defray:checked').val();
                      var return_package_fee = \$('.return_package_fee:checked').val();
                      var show_receiver_info = \$('.show_receiver_info:checked').val();
                      if(selected != '' && selected != 'new'){
                          \$.request('onChangefees', {
                               data: {sender_address_id: selected, type: type, packaging_id:packaging_id, receiver_address_id: receiver_address_id, return_defray: return_defray, return_package_fee: return_package_fee,show_receiver_info:show_receiver_info},
                               success: function(response, status, xhr, \$form) {
                                    \$('#delivery_cost').val(response.delivery_cost);
                                    \$('#return_courier_fee').val(response.return_courier_fee);
                               }
                          });
                     }


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
            \$('html, body').animate({
                scrollTop: eval(\$('#addnewreceiver').offset().top - 140)
            }, 2000);
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



                     var selected = response.default;
                     var type = \$('.type:checked').val();
                     var sender_address_id = \$('#sender_address_id').val();
                     var packaging_id = \$('#packaging_id').val();
                     var return_defray = \$('.return_defray:checked').val();
                     var return_package_fee = \$('.return_package_fee:checked').val();
                     var show_receiver_info = \$('.show_receiver_info:checked').val();
                     if(selected != '' && selected != 'new'){
                         \$.request('onChangefees', {
                              data: {sender_address_id: sender_address_id, packaging_id: packaging_id, type: type, receiver_address_id: selected, return_defray: return_defray, return_package_fee: return_package_fee,show_receiver_info:show_receiver_info},
                              success: function(response, status, xhr, \$form) {
                                   \$('#delivery_cost').val(response.delivery_cost);
                                   \$('#return_courier_fee').val(response.return_courier_fee);
                              }
                         });
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


                      var selected = response.address_id;
                      var type = \$('.type:checked').val();
                      var sender_address_id = \$('#sender_address_id').val();
                      var packaging_id = \$('#packaging_id').val();
                      var return_defray = \$('.return_defray:checked').val();
                      var return_package_fee = \$('.return_package_fee:checked').val();
                      var show_receiver_info = \$('.show_receiver_info:checked').val();
                      if(selected != '' && selected != 'new'){
                          \$.request('onChangefees', {
                               data: {sender_address_id: sender_address_id, packaging_id: packaging_id, type: type, receiver_address_id: selected, return_defray: return_defray, return_package_fee: return_package_fee,show_receiver_info:show_receiver_info},
                               success: function(response, status, xhr, \$form) {
                                    \$('#delivery_cost').val(response.delivery_cost);
                                    \$('#return_courier_fee').val(response.return_courier_fee);
                               }
                          });
                     }

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
            \$('html, body').animate({
                scrollTop: eval(\$('#addnewreceiveraddress').offset().top - 140)
            }, 2000);
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




                       var selected = response.default;
                       var type = \$('.type:checked').val();
                       var sender_address_id = \$('#sender_address_id').val();
                       var packaging_id = \$('#packaging_id').val();
                       var return_defray = \$('.return_defray:checked').val();
                       var return_package_fee = \$('.return_package_fee:checked').val();
                       var show_receiver_info = \$('.show_receiver_info:checked').val();
                       if(selected != '' && selected != 'new'){
                           \$.request('onChangefees', {
                                data: {sender_address_id: sender_address_id, packaging_id: packaging_id, type: type, receiver_address_id: selected, return_defray: return_defray, return_package_fee: return_package_fee,show_receiver_info:show_receiver_info},
                                success: function(response, status, xhr, \$form) {
                                     \$('#delivery_cost').val(response.delivery_cost);
                                     \$('#return_courier_fee').val(response.return_courier_fee);
                                }
                           });
                      }



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

    \$('body').on('change', '#sender_address_id', function(e, clickedIndex, newValue, oldValue){
        var selected = \$(e.currentTarget).val();
        var type = \$('.type:checked').val();
        var receiver_address_id = \$('#receiver_address_id').val();
        var packaging_id = \$('#packaging_id').val();
        var return_defray = \$('.return_defray:checked').val();
        var return_package_fee = \$('.return_package_fee:checked').val();
        var show_receiver_info = \$('.show_receiver_info:checked').val();
        if(selected != '' && selected != 'new'){
            \$.request('onChangefees', {
                 data: {sender_address_id: selected, type: type, packaging_id:packaging_id, receiver_address_id: receiver_address_id, return_defray: return_defray, return_package_fee: return_package_fee,show_receiver_info:show_receiver_info},
                 success: function(response, status, xhr, \$form) {
                      \$('#delivery_cost').val(response.delivery_cost);
                      \$('#return_courier_fee').val(response.return_courier_fee);
                 }
            });
       }
    });

    \$('body').on('change', '#receiver_address_id', function(e, clickedIndex, newValue, oldValue){
        var selected = \$(e.currentTarget).val();
         var type = \$('.type:checked').val();
         var sender_address_id = \$('#sender_address_id').val();
         var packaging_id = \$('#packaging_id').val();
         var return_defray = \$('.return_defray:checked').val();
         var return_package_fee = \$('.return_package_fee:checked').val();
         var show_receiver_info = \$('.show_receiver_info:checked').val();
         if(selected != '' && selected != 'new'){
             \$.request('onChangefees', {
                  data: {sender_address_id: sender_address_id, type: type, packaging_id:packaging_id, receiver_address_id: selected, return_defray: return_defray, return_package_fee: return_package_fee,show_receiver_info:show_receiver_info},
                  success: function(response, status, xhr, \$form) {
                       \$('#delivery_cost').val(response.delivery_cost);
                       \$('#return_courier_fee').val(response.return_courier_fee);
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
    \$('#package_repeater').repeater({
        initEmpty: true,
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


             var sender_address_id = \$('#sender_address_id').val();
             var receiver_address_id = \$('#receiver_address_id').val();
             var packaging_id = \$('#packaging_id').val();
             var type = \$('.type:checked').val();
             var return_defray = \$('.return_defray:checked').val();
             var return_package_fee = \$('.return_package_fee:checked').val();
             var show_receiver_info = \$('.show_receiver_info:checked').val();
             \$.request('onChangefees', {
                  data: {sender_address_id: sender_address_id, type: type, packaging_id:packaging_id, receiver_address_id: receiver_address_id, return_defray: return_defray, return_package_fee: return_package_fee,show_receiver_info:show_receiver_info},
                  success: function(response, status, xhr, \$form) {
                       \$('#delivery_cost').val(response.delivery_cost);
                       \$('#return_courier_fee').val(response.return_courier_fee);
                  }
             });
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
{% endput %}", "/Applications/MAMP/htdocs/test/themes/spotlayer/pages/dashboard/order-create.htm", "");
    }
}
