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

/* /Applications/MAMP/htdocs/test/themes/spotlayer/pages/dashboard/shipments.htm */
class __TwigTemplate_4e043b7ec7912debb0731a93c2a6fcce7b24336376d3d1dedeb5d6bb37593775 extends \Twig\Template
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
        echo "<!--begin::Portlet-->
<div class=\"kt-portlet kt-portlet--tabs\">
    <div class=\"kt-portlet__head\">
        <div class=\"kt-portlet__head-toolbar\">
            <ul class=\"nav nav-tabs nav-tabs-line nav-tabs-line-brand nav-tabs-line-2x nav-tabs-line-right nav-tabs-bold\" role=\"tablist\">
                ";
        // line 6
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 6) == 5)) {
            // line 7
            echo "                <li class=\"nav-item\">
                    <a class=\"nav-link ";
            // line 8
            if (((twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 8), "type", [], "any", false, false, false, 8)) && (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 8) == 5)) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 8), "type", [], "any", false, false, false, 8) == "saved"))) {
                echo "active";
            }
            echo "\" data-toggle=\"tab\" href=\"#saved\" role=\"tab\">
                        <i class=\"flaticon-folder-2\" aria-hidden=\"true\"></i>";
            // line 9
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Saved"]);
            echo "
                    </a>
                </li>
                ";
        }
        // line 13
        echo "                <li class=\"nav-item\">
                    <a class=\"nav-link ";
        // line 14
        if (((twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 14), "type", [], "any", false, false, false, 14)) && (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 14) != 5)) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 14), "type", [], "any", false, false, false, 14) == "requests"))) {
            echo "active";
        }
        echo "\" data-toggle=\"tab\" href=\"#requests\" role=\"tab\">
                        <i class=\"flaticon-alert\" aria-hidden=\"true\"></i>";
        // line 15
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["New Requests"]);
        echo "
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link ";
        // line 19
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 19), "type", [], "any", false, false, false, 19) == "approved")) {
            echo "active";
        }
        echo "\" data-toggle=\"tab\" href=\"#approved\" role=\"tab\">
                        <i class=\"flaticon-like\" aria-hidden=\"true\"></i>";
        // line 20
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Approved"]);
        echo "
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link ";
        // line 24
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 24), "type", [], "any", false, false, false, 24) == "assigned")) {
            echo "active";
        }
        echo "\" data-toggle=\"tab\" href=\"#assigned\" role=\"tab\">
                        <i class=\"flaticon-network\" aria-hidden=\"true\"></i>";
        // line 25
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Assigned Shipments"]);
        echo "
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link ";
        // line 29
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 29), "type", [], "any", false, false, false, 29) == "withdriver")) {
            echo "active";
        }
        echo "\" data-toggle=\"tab\" href=\"#withdriver\" role=\"tab\">
                        <i class=\"flaticon-suitcase\" aria-hidden=\"true\"></i>";
        // line 30
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delivered To Driver"]);
        echo "
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link ";
        // line 34
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 34), "type", [], "any", false, false, false, 34) == "stock")) {
            echo "active";
        }
        echo "\" data-toggle=\"tab\" href=\"#stock\" role=\"tab\">
                        <i class=\"flaticon-home-2\" aria-hidden=\"true\"></i>";
        // line 35
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["In Stock"]);
        echo "
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link ";
        // line 39
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 39), "type", [], "any", false, false, false, 39) == "postponed")) {
            echo "active";
        }
        echo "\" data-toggle=\"tab\" href=\"#postponed\" role=\"tab\">
                        <i class=\"flaticon-stopwatch\" aria-hidden=\"true\"></i>";
        // line 40
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Postponed"]);
        echo "
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link ";
        // line 44
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 44), "type", [], "any", false, false, false, 44) == "delivered")) {
            echo "active";
        }
        echo "\" data-toggle=\"tab\" href=\"#delivered\" role=\"tab\">
                        <i class=\"flaticon-open-box\" aria-hidden=\"true\"></i>";
        // line 45
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delivered"]);
        echo "
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link ";
        // line 49
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 49), "type", [], "any", false, false, false, 49) == "supplied")) {
            echo "active";
        }
        echo "\" data-toggle=\"tab\" href=\"#supplied\" role=\"tab\">
                        <i class=\"flaticon-piggy-bank\" aria-hidden=\"true\"></i>";
        // line 50
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Supplied"]);
        echo "
                    </a>
                </li>
                ";
        // line 53
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 53) != 5)) {
            // line 54
            echo "                    <li class=\"nav-item\">
                        <a class=\"nav-link ";
            // line 55
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 55), "type", [], "any", false, false, false, 55) == "manifest")) {
                echo "active";
            }
            echo "\" data-toggle=\"tab\" href=\"#manifest\" role=\"tab\">
                            <i class=\"flaticon-truck\" aria-hidden=\"true\"></i>";
            // line 56
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Manifest"]);
            echo "
                        </a>
                    </li>
                ";
        }
        // line 60
        echo "                <li class=\"nav-item\">
                    <a class=\"nav-link ";
        // line 61
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 61), "type", [], "any", false, false, false, 61) == "all")) {
            echo "active";
        }
        echo "\" data-toggle=\"tab\" href=\"#all\" role=\"tab\">
                        <i class=\"flaticon-shopping-basket\" aria-hidden=\"true\"></i>";
        // line 62
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["All Shipments"]);
        echo "
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class=\"kt-portlet__body\">
        <div class=\"tab-content\">
            ";
        // line 70
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 70) == 5)) {
            // line 71
            echo "                <div class=\"tab-pane  ";
            if (((twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 71), "type", [], "any", false, false, false, 71)) && (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 71) == 5)) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 71), "type", [], "any", false, false, false, 71) == "saved"))) {
                echo "active";
            }
            echo "\" id=\"saved\" role=\"tabpanel\">
                    <div class=\"kt-datatable-saved\"></div>
                </div>
            ";
        }
        // line 75
        echo "            <div class=\"tab-pane  ";
        if ((twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 75), "type", [], "any", false, false, false, 75)) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 75), "type", [], "any", false, false, false, 75) == "requests"))) {
            echo "active";
        }
        echo "\" id=\"requests\" role=\"tabpanel\">
                <div class=\"kt-datatable-requests\"></div>
            </div>
            <div class=\"tab-pane ";
        // line 78
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 78), "type", [], "any", false, false, false, 78) == "approved")) {
            echo "active";
        }
        echo "\" id=\"approved\" role=\"tabpanel\">
                <div class=\"kt-datatable-approved\"></div>
            </div>
            <div class=\"tab-pane ";
        // line 81
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 81), "type", [], "any", false, false, false, 81) == "assigned")) {
            echo "active";
        }
        echo "\" id=\"assigned\" role=\"tabpanel\">
                <div class=\"kt-datatable-assigned\"></div>
            </div>
            <div class=\"tab-pane ";
        // line 84
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 84), "type", [], "any", false, false, false, 84) == "withdriver")) {
            echo "active";
        }
        echo "\" id=\"withdriver\" role=\"tabpanel\">
                <div class=\"kt-datatable-withdriver\"></div>
            </div>
            <div class=\"tab-pane ";
        // line 87
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 87), "type", [], "any", false, false, false, 87) == "stock")) {
            echo "active";
        }
        echo "\" id=\"stock\" role=\"tabpanel\">
                <div class=\"kt-datatable-stock\"></div>
            </div>
            <div class=\"tab-pane ";
        // line 90
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 90), "type", [], "any", false, false, false, 90) == "postponed")) {
            echo "active";
        }
        echo "\" id=\"postponed\" role=\"tabpanel\">
                <div class=\"kt-datatable-postponed\"></div>
            </div>
            <div class=\"tab-pane ";
        // line 93
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 93), "type", [], "any", false, false, false, 93) == "supplied")) {
            echo "active";
        }
        echo "\" id=\"supplied\" role=\"tabpanel\">
                <div class=\"kt-datatable-supplied\"></div>
            </div>
            <div class=\"tab-pane ";
        // line 96
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 96), "type", [], "any", false, false, false, 96) == "delivered")) {
            echo "active";
        }
        echo "\" id=\"delivered\" role=\"tabpanel\">
                <div class=\"kt-datatable-delivered\"></div>
            </div>
            ";
        // line 99
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 99) != 5)) {
            // line 100
            echo "                <div class=\"tab-pane ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 100), "type", [], "any", false, false, false, 100) == "manifest")) {
                echo "active";
            }
            echo "\" id=\"manifest\" role=\"tabpanel\">
                    <div class=\"kt-datatable-manifest\"></div>
                </div>
            ";
        }
        // line 104
        echo "            <div class=\"tab-pane ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 104), "type", [], "any", false, false, false, 104) == "all")) {
            echo "active";
        }
        echo "\" id=\"all\" role=\"tabpanel\">
                <div class=\"kt-datatable-all\"></div>
            </div>
        </div>
    </div>
</div>
<!--end::Portlet-->
<div class=\"modal fade\" id=\"manifest_modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" >";
        // line 115
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Manifest information"]);
        echo "</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                </button>
            </div>

            ";
        // line 120
        echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), ["ajax", "onSavemanifest", ["flash" => true, "novalidate" => true]]);
        echo "
                <div class=\"modal-body\">
                    <div class=\"row\">
                        <input type=\"hidden\" id=\"manifest_id\" class=\"form-control\" name=\"ids\" />
                        <div class=\"form-group col-lg-12\">
                            <label>";
        // line 125
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Date"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            <div class=\"input-group date\">
                                <input type=\"text\" class=\"form-control date\" readonly=\"\" name=\"ship_date\" value=\"";
        // line 127
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_modify_filter($this->env, ($context["now"] ?? null), "+1 day"), twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "dateformat", [], "any", false, false, false, 127)), "html", null, true);
        echo "\" required>
                                <div class=\"input-group-append\">
                                    <span class=\"input-group-text\">
                                        <i class=\"la la-calendar\"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class=\"form-group col-lg-12\">
                            <label>";
        // line 136
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Assign to specifc car?"]);
        echo "</label>
                            <div class=\"kt-checkbox-single\">
                                <label class=\"kt-checkbox\">
                                    <input type=\"checkbox\" id=\"car\" class=\"form-control\"  value=\"1\">
                                    <span></span>
                                </label>
                            </div>
                        </div>
                        <div class=\"form-group col-lg-12 employee_container\">
                            <label>";
        // line 145
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Employee"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            <select class=\"form-control\" id=\"employee_id\" name=\"employee_id\" data-live-search=\"true\" required>
                                <option data-hidden=\"true\"></option>
                                ";
        // line 148
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["employees"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["employee"]) {
            // line 149
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "id", [], "any", false, false, false, 149), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "name", [], "any", false, false, false, 149), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employee'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 151
        echo "                            </select>
                        </div>
                        <div class=\"form-group col-lg-12 kt-hidden car_container\">
                            <label>";
        // line 154
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Car"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            <select class=\"form-control\" id=\"car_id\" name=\"car_id\" data-live-search=\"true\" required>
                                <option data-hidden=\"true\"></option>
                                ";
        // line 157
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cars"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["car"]) {
            // line 158
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["car"], "id", [], "any", false, false, false, 158), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["car"], "name", [], "any", false, false, false, 158), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['car'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 160
        echo "                            </select>
                        </div>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">";
        // line 165
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Close"]);
        echo "</button>
                    <button type=\"submit\" class=\"btn btn-primary\">";
        // line 166
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Assign"]);
        echo "</button>
                </div>
            ";
        // line 168
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
        echo "
        </div>
    </div>
</div>
<div class=\"modal fade\" id=\"chooseEmployee\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" >";
        // line 176
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Print Employee Orders"]);
        echo "</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                </button>
            </div>

            ";
        // line 181
        echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), ["ajax", "onPrint", ["success" => "created successfully!", "flash" => true, "class" => "kt_form", "novalidate" => true]]);
        echo "
                <div class=\"modal-body\">
                    <div class=\"row\">
                        <div class=\"form-group col-lg-12\">
                            <label>";
        // line 185
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Date"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            <div class=\"input-group date\">
                                <input type=\"text\" class=\"form-control date\" readonly=\"\" name=\"date\" value=\"";
        // line 187
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["now"] ?? null), twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "dateformat", [], "any", false, false, false, 187)), "html", null, true);
        echo "\" required>
                                <div class=\"input-group-append\">
                                    <span class=\"input-group-text\">
                                        <i class=\"la la-calendar\"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        ";
        // line 195
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 195) != 4)) {
            // line 196
            echo "                            <div class=\"form-group col-lg-12\">
                                <label>";
            // line 197
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Employee"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                <select class=\"form-control\"name=\"employee_id\" data-live-search=\"true\" required>
                                    <option data-hidden=\"true\"></option>
                                    ";
            // line 200
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["employees"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["employee"]) {
                // line 201
                echo "                                        <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "id", [], "any", false, false, false, 201), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "name", [], "any", false, false, false, 201), "html", null, true);
                echo "</option>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employee'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 203
            echo "                                </select>
                            </div>
                        ";
        }
        // line 206
        echo "                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">";
        // line 209
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Close"]);
        echo "</button>
                    <button type=\"button\" class=\"btn btn-primary print\">";
        // line 210
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Print"]);
        echo "</button>
                </div>
            ";
        // line 212
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
        echo "
        </div>
    </div>
</div>

";
        // line 217
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 218
        echo "<script type=\"text/javascript\">
\"use strict\";
var KTAppUserListDatatable = function () {
    // variables
    var datatable;

    // init
    var init = function (type) {
        // init the datatables. Learn more: https://keenthemes.com/metronic/?page=docs&section=datatable
        if(type == 'manifest'){
            var columns = [
                {
                    field: 'id',
                    title: '#',
                    autoHide: true,
                    sortable: false,
                    width: 20,
                    textAlign: 'center',
                },
                {
                    field: \"created_at\",
                    title: \"";
        // line 239
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Created On"]);
        echo "\",
                    autoHide: false,
                    sortable: false,
                    width: 'auto',
    \t\t\t\ttemplate: function(data, i) {
    \t\t\t\t\tvar output = '\\
                            <div class=\"kt-user-card-v2 kt-user-card-v2--uncircle\">\\
                                <div class=\"kt-user-card-v2__details\">\\
                                    <a href=\"";
        // line 247
        echo url("dashboard/shipments/manifest");
        echo "/'+data.id+'/view\" class=\"kt-user-card-v2__name\">' + data.created_at_date + '</a>\\
                                    <span class=\"kt-user-card-v2__email\">' + data.created_at_time + '</span>\\
                                </div>\\
                            </div>';
    \t\t\t\t\treturn output;
    \t\t\t\t}
                },
                {
                    field: \"details\",
                    title: \"";
        // line 256
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Responsiable"]);
        echo "\",
                    autoHide: true,
                    sortable: false,
                    width: 'auto',
    \t\t\t\ttemplate: function(data, i) {
    \t\t\t\t\tvar output = '\\
                            <div class=\"kt-user-card-v2 kt-user-card-v2--uncircle\">\\
                                <div class=\"kt-user-card-v2__details\">';
                                if(data.car != '-'){
                                    output += '<a href=\"";
        // line 265
        echo url("dashboard/shipments/manifest");
        echo "/'+data.id+'/view\" class=\"kt-user-card-v2__name\">' + data.car + '</a>\\
                                                <span class=\"kt-user-card-v2__email\">' + data.driver + '</span>';
                                }else{
                                    output += '<a href=\"";
        // line 268
        echo url("dashboard/shipments/manifest");
        echo "/'+data.id+'/view\" class=\"kt-user-card-v2__name\">' + data.employee + '</a>';
                                }
                                output += '</div>\\
                            </div>';
    \t\t\t\t\treturn output;
    \t\t\t\t}
                },
                {
                    field: \"user\",
                    title: \"";
        // line 277
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["By"]);
        echo "\",
                    autoHide: true,
                    sortable: false,
                    width: 'auto',
                },
                {
                    field: \"orders\",
                    title: \"";
        // line 284
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No. Of Orders"]);
        echo "\",
                    autoHide: false,
                    sortable: false,
                    width: 'auto',
                }
            ];
        }else if(type == 'requests' || type == 'delivered' || type == 'assigned' || type == 'withdriver' || type == 'postponed' || type == 'supplied' || type == 'all'){
            var columns = [
                {
                    field: \"number\",
                    title: \"";
        // line 294
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Tracking"]);
        echo "\",
                    sortable: true,
                    width: 100,
                    template: function(row) {
                        return '<a href=\"";
        // line 298
        echo url("dashboard/shipments");
        echo "/'+row.id+'/view\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "tracking", [], "any", false, false, false, 298), "prefix_order", [], "any", false, false, false, 298), "html", null, true);
        echo "'+row.shipping_number+'</a>';
                    }
                },
                {
                    field: \"details\",
                    title: \"";
        // line 303
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Shipment Details"]);
        echo "\",
                    sortable: false,
                    width: 'auto',
                    template: function(data, i) {
                        var output  = '\\
                            <div class=\"kt-user-card-v2 kt-user-card-v2--uncircle\">\\
                                <div class=\"kt-user-card-v2__details\">\\
                                    <a href=\"";
        // line 310
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "client", 1 => "r"], "method", false, false, false, 310)) {
            echo url("dashboard/clients");
            echo "/'+data.sender.id+'/view";
        } else {
            echo "javascript:;";
        }
        echo "\" class=\"kt-user-card-v2__name\"><b class=\"kt-font-boldest\">";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sender"]);
        echo ":</b> ' + data.sender.name + '</a>\\
                                    <span class=\"kt-user-card-v2__email\"><b class=\"kt-font-boldest\">";
        // line 311
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["From"]);
        echo ":</b> ' + data.shipping_from_area + '</span>';
                        if(data.receiver){
                            output      += '\\
                                        <a href=\"";
        // line 314
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "client", 1 => "r"], "method", false, false, false, 314)) {
            echo url("dashboard/clients");
            echo "/'+data.receiver.id+'/view";
        } else {
            echo "javascript:;";
        }
        echo "\" class=\"kt-margin-t-5 kt-user-card-v2__name\"><b>";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Receiver"]);
        echo ":</b> ' + data.receiver.name + '</a>\\
                                        <span class=\"kt-user-card-v2__email\"><b class=\"kt-font-boldest\">";
        // line 315
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["To"]);
        echo ":</b> ' + data.shipping_to_area + '</span>';
                        }
                        output      += '\\
                                </div>\\
                            </div>';
                        return output;
                    }
                },
                {
                    field: \"office\",
                    title: \"";
        // line 325
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Branch"]);
        echo "\",
                    sortable: false,
                    width: 100,
                    template: function(data, i) {
                        return '<a href=\"javascript:;\">'+data.office+'</a>';
                    }
                },
                {
                    field: \"status\",
                    title: \"";
        // line 334
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Status"]);
        echo "\",
                    sortable: false,
                    width: 'auto',
                    template: function(row) {
                        if(row.requested == 100){
                            var output = '<span class=\"btn btn-bold btn-sm btn-label-primary\">";
        // line 339
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Saved"]);
        echo "</span>';
                        }else{
                            var output = '<span class=\"btn btn-bold btn-sm btn-label-' + row.status.color + '\">' + row.status.name + '</span>';
                            if(row.delayed == 1){
                                output  += '&nbsp;<span class=\"btn btn-bold btn-sm btn-label-danger\">";
        // line 343
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delayed"]);
        echo "</span>';
                            }
                            if(row.requested == 10 || row.requested == 11){
                                output  += '&nbsp;<span class=\"btn btn-bold btn-sm btn-label-warning\">";
        // line 346
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Returning Discards"]);
        echo "</span>';
                            }
                            if(row.requested == 12 && row.status.equal != 12){
                                output  += '&nbsp;<span class=\"btn btn-bold btn-sm btn-label-success\">";
        // line 349
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Supplied"]);
        echo "</span>';
                            }
                        }

                        return output;
                    }
                },
                {
                    field: \"created_at_date\",
                    title: \"";
        // line 358
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Date"]);
        echo "\",
                    sortable: false,
                    width: 100,
                },
                {
                    field: \"Actions\",
                    width: 100,
                    title: \"";
        // line 365
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Actions"]);
        echo "\",
                    sortable: false,
                    overflow: 'visible',
                    template: function (data) {
                        var output = '' +
                        '<div class=\"btn-group btn-group\" role=\"group\" aria-label=\"...\">'+
                            '<a href=\"";
        // line 371
        echo url("dashboard/shipments");
        echo "/'+data.id+'/view\" class=\"btn btn-brand btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["View Shipment"]);
        echo "\"><i class=\"la la-eye\"></i></button>';
                            ";
        // line 372
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "order", 1 => "u"], "method", false, false, false, 372) && (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 372) != 5))) {
            // line 373
            echo "                                if(data.requested   ==  0 || data.requested == 1 || data.requested == 100){
                                    output += '<a href=\"";
            // line 374
            echo url("dashboard/shipments");
            echo "/'+data.id+'/edit\" class=\"btn btn-brand btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Edit Shipment"]);
            echo "\"><i class=\"la la-edit\"></i></button>';
                                }
                            ";
        }
        // line 377
        echo "                            ";
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 377) == 5)) {
            // line 378
            echo "                                if((data.requested   ==  0 || data.requested == 100) && data.sender_id == ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 378), "html", null, true);
            echo "){
                                    output += '<a href=\"";
            // line 379
            echo url("dashboard/shipments");
            echo "/'+data.id+'/edit\" class=\"btn btn-brand btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Edit Shipment"]);
            echo "\"><i class=\"la la-edit\"></i></button>';
                                }
                            ";
        }
        // line 382
        echo "                                if((data.requested   !=  0 && data.requested   !=  1 && data.requested != 100)){
                                    output += '<a href=\"";
        // line 383
        echo url("dashboard/shipments");
        echo "/'+data.id+'/print/shipment\" target=\"_blank\" class=\"btn btn-info btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Print Shipment"]);
        echo "\"><i class=\"la la-print\"></i></button>';
                                }
                            ";
        // line 385
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "order", 1 => "u"], "method", false, false, false, 385)) {
            // line 386
            echo "                                if((data.requested   ==  100 || data.requested   ==  0 || data.requested == 1)){
                                    output += '<a href=\"";
            // line 387
            echo url("dashboard/shipments");
            echo "/'+data.id+'/print/label\" class=\"btn btn-info btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Print Label"]);
            echo "\" target=\"_blank\" ><i class=\"la la-qrcode\"></i></button>';
                                }
                            ";
        }
        // line 390
        echo "                            //0 = Pending | 1 = Approved | 2 = Refused | 3 = Delivered to driver | 4 = Delivered | 5 = Return request | 6 = Delivery of discards to the driver | 7 = Supply in stock | 8 = Returned | 9 = received


                            ";
        // line 393
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "order", 1 => "u"], "method", false, false, false, 393) && (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 393) != 5))) {
            // line 394
            echo "                                if((data.requested   ==  1 || data.requested   ==  3 || data.requested   ==  5 || data.requested == 6 || data.requested == 7 || data.requested == 9)){
                                    output += '<a href=\"";
            // line 395
            echo url("dashboard/shipments");
            echo "/'+data.id+'/update\" class=\"btn btn-info btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Update Status"]);
            echo "\"><i class=\"la la-street-view\"></i></button>';
                                }
                            ";
        }
        // line 398
        echo "
                            ";
        // line 399
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "order", 1 => "u"], "method", false, false, false, 399) && (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 399) != 5))) {
            // line 400
            echo "                                if((data.requested   ==  9 || data.requested   ==  3)){
                                    output += '<a href=\"";
            // line 401
            echo url("dashboard/shipments");
            echo "/'+data.id+'/deliver\" class=\"btn btn-success btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Mark as delivered"]);
            echo "\"><i class=\"la la-smile-o\"></i></button>';
                                }
                            ";
        }
        // line 404
        echo "                            ";
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "order", 1 => "d"], "method", false, false, false, 404)) {
            // line 405
            echo "                                if(data.requested   ==  0 || data.requested == 100 || data.requested == 1){
                                    output += '<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-sm delete_record kt-font-light btn-icon\" rel=\"'+data.id+'\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
            // line 406
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delete Shipment"]);
            echo "\"><i class=\"la la-remove\"></i></a>';
                                }
                            ";
        }
        // line 409
        echo "                            ";
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 409) == 5)) {
            // line 410
            echo "                                if((data.requested   ==  0 || data.requested == 100) && data.sender_id == ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 410), "html", null, true);
            echo "){
                                    output += '<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-sm delete_record kt-font-light btn-icon\" rel=\"'+data.id+'\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
            // line 411
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delete Shipment"]);
            echo "\"><i class=\"la la-remove\"></i></a>';
                                }
                            ";
        }
        // line 414
        echo "                        '</div>';

                        return output;
                    },
                }
            ]
        }else{
            var columns = [
                {
                    field: 'id',
                    title: '#',
                    sortable: false,
                    autoHide: true,
                    width: 20,
                    selector: {
                        class: 'kt-checkbox--solid'
                    },
                    textAlign: 'center',
                },
                {
                    field: \"number\",
                    title: \"";
        // line 435
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Tracking"]);
        echo "\",
                    sortable: true,
                    width: 100,
                    template: function(row) {
                        return '<a href=\"";
        // line 439
        echo url("dashboard/shipments");
        echo "/'+row.id+'/view\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "tracking", [], "any", false, false, false, 439), "prefix_order", [], "any", false, false, false, 439), "html", null, true);
        echo "'+row.shipping_number+'</a>';
                    }
                },
                {
                    field: \"details\",
                    title: \"";
        // line 444
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Shipment Details"]);
        echo "\",
                    sortable: false,
                    width: 'auto',
                    template: function(data, i) {
                        var output  = '\\
                            <div class=\"kt-user-card-v2 kt-user-card-v2--uncircle\">\\
                                <div class=\"kt-user-card-v2__details\">\\
                                    <a href=\"";
        // line 451
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "client", 1 => "r"], "method", false, false, false, 451)) {
            echo url("dashboard/clients");
            echo "/'+data.sender.id+'/view";
        } else {
            echo "javascript:;";
        }
        echo "\" class=\"kt-user-card-v2__name\"><b class=\"kt-font-boldest\">";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sender"]);
        echo ":</b> ' + data.sender.name + '</a>\\
                                    <span class=\"kt-user-card-v2__email\"><b class=\"kt-font-boldest\">";
        // line 452
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["From"]);
        echo ":</b> ' + data.shipping_from_area + '</span>';
                        if(data.receiver){
                            output      += '\\
                                        <a href=\"";
        // line 455
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "client", 1 => "r"], "method", false, false, false, 455)) {
            echo url("dashboard/clients");
            echo "/'+data.receiver.id+'/view";
        } else {
            echo "javascript:;";
        }
        echo "\" class=\"kt-margin-t-5 kt-user-card-v2__name\"><b>";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Receiver"]);
        echo ":</b> ' + data.receiver.name + '</a>\\
                                        <span class=\"kt-user-card-v2__email\"><b class=\"kt-font-boldest\">";
        // line 456
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["To"]);
        echo ":</b> ' + data.shipping_to_area + '</span>';
                        }
                        output      += '\\
                                </div>\\
                            </div>';
                        return output;
                    }
                },
                {
                    field: \"office\",
                    title: \"";
        // line 466
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Branch"]);
        echo "\",
                    sortable: false,
                    width: 100,
                    template: function(data, i) {
                        return '<a href=\"javascript:;\">'+data.office+'</a>';
                    }
                },
                {
                    field: \"status\",
                    title: \"";
        // line 475
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Status"]);
        echo "\",
                    sortable: false,
                    width: 'auto',
                    template: function(row) {
                        if(row.requested == 100){
                            var output = '<span class=\"btn btn-bold btn-sm btn-label-primary\">";
        // line 480
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Saved"]);
        echo "</span>';
                        }else{
                            var output = '<span class=\"btn btn-bold btn-sm btn-label-' + row.status.color + '\">' + row.status.name + '</span>';
                            if(row.delayed == 1){
                                output  += '&nbsp;<span class=\"btn btn-bold btn-sm btn-label-danger\">";
        // line 484
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delayed"]);
        echo "</span>';
                            }
                            if(row.requested == 10 || row.requested == 11){
                                output  += '&nbsp;<span class=\"btn btn-bold btn-sm btn-label-warning\">";
        // line 487
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Returning Discards"]);
        echo "</span>';
                            }
                            if(row.requested == 12 && row.status.equal != 12){
                                output  += '&nbsp;<span class=\"btn btn-bold btn-sm btn-label-success\">";
        // line 490
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Supplied"]);
        echo "</span>';
                            }
                        }

                        return output;
                    }
                },
                {
                    field: \"created_at_date\",
                    title: \"";
        // line 499
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Date"]);
        echo "\",
                    sortable: false,
                    width: 100,
                },
                {
                    field: \"Actions\",
                    width: 100,
                    title: \"";
        // line 506
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Actions"]);
        echo "\",
                    sortable: false,
                    overflow: 'visible',
                    template: function (data) {
                        var output = '' +
                        '<div class=\"btn-group btn-group\" role=\"group\" aria-label=\"...\">'+
                            '<a href=\"";
        // line 512
        echo url("dashboard/shipments");
        echo "/'+data.id+'/view\" class=\"btn btn-brand btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["View Shipment"]);
        echo "\"><i class=\"la la-eye\"></i></button>';
                            ";
        // line 513
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "order", 1 => "u"], "method", false, false, false, 513) && (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 513) != 5))) {
            // line 514
            echo "                                if(data.requested   ==  0 || data.requested == 1 || data.requested == 100){
                                    output += '<a href=\"";
            // line 515
            echo url("dashboard/shipments");
            echo "/'+data.id+'/edit\" class=\"btn btn-brand btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Edit Shipment"]);
            echo "\"><i class=\"la la-edit\"></i></button>';
                                }
                            ";
        }
        // line 518
        echo "                            ";
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 518) == 5)) {
            // line 519
            echo "                                if((data.requested   ==  0 || data.requested == 100) && data.sender_id == ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 519), "html", null, true);
            echo "){
                                    output += '<a href=\"";
            // line 520
            echo url("dashboard/shipments");
            echo "/'+data.id+'/edit\" class=\"btn btn-brand btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Edit Shipment"]);
            echo "\"><i class=\"la la-edit\"></i></button>';
                                }
                            ";
        }
        // line 523
        echo "                                if((data.requested   !=  0 && data.requested   !=  1 && data.requested != 100)){
                                    output += '<a href=\"";
        // line 524
        echo url("dashboard/shipments");
        echo "/'+data.id+'/print/shipment\" target=\"_blank\" class=\"btn btn-info btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Print Shipment"]);
        echo "\"><i class=\"la la-print\"></i></button>';
                                }
                            ";
        // line 526
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "order", 1 => "u"], "method", false, false, false, 526)) {
            // line 527
            echo "                                if((data.requested   ==  100 || data.requested   ==  0 || data.requested == 1)){
                                    output += '<a href=\"";
            // line 528
            echo url("dashboard/shipments");
            echo "/'+data.id+'/print/label\" class=\"btn btn-info btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Print Label"]);
            echo "\" target=\"_blank\" ><i class=\"la la-qrcode\"></i></button>';
                                }
                            ";
        }
        // line 531
        echo "                            ";
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "order", 1 => "u"], "method", false, false, false, 531)) {
            // line 532
            echo "                                if((data.requested   ==  3 || data.requested   ==  5 || data.requested == 6 || data.requested == 7 || data.requested == 9)){
                                    output += '<a href=\"";
            // line 533
            echo url("dashboard/shipments");
            echo "/'+data.id+'/update\" class=\"btn btn-info btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Update Status"]);
            echo "\"><i class=\"la la-street-view\"></i></button>';
                                }
                            ";
        }
        // line 536
        echo "                            //0 = Pending | 1 = Approved | 2 = Refused | 3 = Delivered to driver | 4 = Delivered | 5 = Return request | 6 = Delivery of discards to the driver | 7 = Supply in stock | 8 = Returned | 9 = received

                            ";
        // line 538
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "order", 1 => "u"], "method", false, false, false, 538)) {
            // line 539
            echo "                                if((data.requested   ==  1 || data.requested   ==  3)){
                                    output += '<a href=\"";
            // line 540
            echo url("dashboard/shipments");
            echo "/'+data.id+'/deliver\" class=\"btn btn-success btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Mark as delivered"]);
            echo "\"><i class=\"la la-smile-o\"></i></button>';
                                }
                            ";
        }
        // line 543
        echo "                            ";
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "order", 1 => "d"], "method", false, false, false, 543) && (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 543) != 5))) {
            // line 544
            echo "                                if(data.requested   ==  0 || data.requested == 100 || data.requested == 1){
                                    output += '<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-sm delete_record kt-font-light btn-icon\" rel=\"'+data.id+'\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
            // line 545
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delete Shipment"]);
            echo "\"><i class=\"la la-remove\"></i></a>';
                                }
                            ";
        }
        // line 548
        echo "                            ";
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 548) == 5)) {
            // line 549
            echo "                                if((data.requested   ==  0 || data.requested == 100) && (data.sender_id != ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 549), "html", null, true);
            echo ")){
                                    output += '<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-sm delete_record kt-font-light btn-icon\" rel=\"'+data.id+'\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
            // line 550
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delete Shipment"]);
            echo "\"><i class=\"la la-remove\"></i></a>';
                                }
                            ";
        }
        // line 553
        echo "                        '</div>';

                        return output;
                    },
                }
            ]
        }

        datatable = \$('.kt-datatable-'+type).KTDatatable({
            translate: {
                records: {
                    processing: '";
        // line 564
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please wait"]);
        echo "...',
                    noRecords: '";
        // line 565
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No records found"]);
        echo "'
                },
                toolbar: {
                    pagination: {
                        items: {
                            default: {
                                first: '";
        // line 571
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["First"]);
        echo "',
                                prev: '";
        // line 572
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Previous"]);
        echo "',
                                next: '";
        // line 573
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Next"]);
        echo "',
                                last: '";
        // line 574
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Last"]);
        echo "',
                                more: '";
        // line 575
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["More pages"]);
        echo "',
                                input: '";
        // line 576
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Page number"]);
        echo "',
                                select: '";
        // line 577
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Select page size"]);
        echo "'
                            },

                            info: \"";
        // line 580
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Displaying"]);
        echo " ";
        echo "{{";
        echo "start";
        echo "}}";
        echo " - ";
        echo "{{";
        echo "end";
        echo "}}";
        echo " ";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["of"]);
        echo " ";
        echo twig_escape_filter($this->env, ($context["total"] ?? null), "html", null, true);
        echo " ";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["records"]);
        echo "\"
                        }
                    }
                }
            },

            // layout definition
            layout: {
                scroll: true, // enable/disable datatable scroll both horizontal and vertical when needed.
                footer: false, // display/hide footer
            },

            // column sorting
            sortable: true,

            pagination: true,

            search: {
                input: \$('#generalSearch'),
                delay: 400,
            },
            data: {
                type: 'remote',
                source: {
                    read: {
                        url: '";
        // line 605
        echo url("api/shipments");
        echo "/'+type,
                    },
                },
                pageSize: 10, // display 20 records per page
                serverPaging: true,
                serverFiltering: true,
                serverSorting: true,
            },
            // columns definition
            columns: columns
        });


        return datatable;
    };

    // search
    var search = function () {
        \$('#filter_form select,#filter_form input').each(function(){
            \$(this).on('change', function () {
                datatable.search(\$(this).val().toLowerCase(), \$(this).attr('name'));
            });
        });
        \$('#reset').on('click', function () {
            datatable.destroy();
            \$('#generalSearch').val('');
            \$('#filter_form select,#filter_form input').each(function(){
                \$(this).val('');
            });
            \$('#filter_form select').each(function(){
                \$(this).selectpicker(\"refresh\");
            });
            init();
        });
    };

    // selection
    var selection = function () {
        // init form controls
        //\$('#kt_form_status, #kt_form_type').selectpicker();

        // event handler on check and uncheck on records
        datatable.on('kt-datatable--on-check kt-datatable--on-uncheck kt-datatable--on-layout-updated', function (e) {
            var checkedNodes = datatable.rows('.kt-datatable__row--active').nodes(); // get selected records
            var count = checkedNodes.length; // selected records count

            \$('#kt_subheader_group_selected_rows').html(count);

            if (count > 0) {
                \$('#kt_subheader_search').addClass('kt-hidden');
                \$('#kt_subheader_group_actions').removeClass('kt-hidden');
            } else {
                \$('#kt_subheader_search').removeClass('kt-hidden');
                \$('#kt_subheader_group_actions').addClass('kt-hidden');
            }
        });
    }

    // selected records status update
    var selectedStatusUpdate = function () {
        \$('#kt_subheader_group_actions_status_change').on('click', \"[data-toggle='status-change']\", function () {
            var status = \$(this).find(\".kt-nav__link-text\").html();

            // fetch selected IDs
            var ids = datatable.rows('.kt-datatable__row--active').nodes().find('.kt-checkbox--single > [type=\"checkbox\"]').map(function (i, chk) {
                return \$(chk).val();
            });

            if (ids.length > 0) {
                // learn more: https://sweetalert2.github.io/
                swal.fire({
                    buttonsStyling: false,

                    html: \"";
        // line 678
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Are you sure to update"]);
        echo " \" + ids.length + \" ";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["selected records status to"]);
        echo " \" + status + \" ?\",
                    type: \"info\",

                    confirmButtonText: \"";
        // line 681
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yes, update"]);
        echo "!\",
                    confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",

                    showCancelButton: true,
                    cancelButtonText: \"";
        // line 685
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No, cancel"]);
        echo "\",
                    cancelButtonClass: \"btn btn-sm btn-bold btn-default\"
                }).then(function (result) {
                    if (result.value) {
                        swal.fire({
                            title: '";
        // line 690
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Deleted"]);
        echo "!',
                            text: '";
        // line 691
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Your selected records statuses have been updated"]);
        echo "!',
                            type: 'success',
                            buttonsStyling: false,
                            confirmButtonText: \"";
        // line 694
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["OK"]);
        echo "\",
                            confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                        })
                        // result.dismiss can be 'cancel', 'overlay',
                        // 'close', and 'timer'
                    } else if (result.dismiss === 'cancel') {
                        swal.fire({
                            title: '";
        // line 701
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cancelled"]);
        echo "',
                            text: '";
        // line 702
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["You selected records statuses have not been updated"]);
        echo "!',
                            type: 'error',
                            buttonsStyling: false,
                            confirmButtonText: \"";
        // line 705
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["OK"]);
        echo "\",
                            confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                        });
                    }
                });
            }
        });
    }
    // selected records status update
    var selectedFilter = function () {
    }

    // selected records delete
    var selectedDelete = function () {
        \$('#kt_subheader_group_actions_delete_all').on('click', function () {
            // fetch selected IDs
            var selected = [];
            var type    = \$('.delete_record').attr('data-type');
            var ids = datatable.rows('.kt-datatable__row--active').nodes().find('.kt-checkbox--single > [type=\"checkbox\"]').map(function (i, chk) {
                selected[\$(chk).val()] = \$(chk).val();
                return \$(chk).val();
            });

            if (ids.length > 0) {
                // learn more: https://sweetalert2.github.io/
                swal.fire({
                    buttonsStyling: false,

                    text: \"";
        // line 733
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Are you sure to delete"]);
        echo " \" + ids.length + \" ";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["selected records ?"]);
        echo "\",
                    type: \"error\",

                    confirmButtonText: \"";
        // line 736
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yes, delete!"]);
        echo "\",
                    confirmButtonClass: \"btn btn-sm btn-bold btn-danger\",

                    showCancelButton: true,
                    cancelButtonText: '";
        // line 740
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No, cancel"]);
        echo "',
                    cancelButtonClass: \"btn btn-sm btn-bold btn-brand\"
                }).then(function (result) {
                    if (result.value) {
                        \$.request('onDelete', {
                            data: {id: selected,type: type},
                            success: function(data) {
                                swal.fire({
                                    title: '";
        // line 748
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Deleted!"]);
        echo "',
                                    text: '";
        // line 749
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Your selected records have been deleted! :("]);
        echo "',
                                    type: 'success',
                                    buttonsStyling: false,
                                    confirmButtonText: '";
        // line 752
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["OK"]);
        echo "',
                                    confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                                });
                                datatable.reload();
                            }
                        });
                        // result.dismiss can be 'cancel', 'overlay',
                        // 'close', and 'timer'
                    } else if (result.dismiss === 'cancel') {
                        swal.fire({
                            title: '";
        // line 762
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cancelled"]);
        echo "',
                            text: '";
        // line 763
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["You selected records have not been deleted! :)"]);
        echo "',
                            type: 'error',
                            buttonsStyling: false,
                            confirmButtonText: '";
        // line 766
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["OK"]);
        echo "',
                            confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                        });
                    }
                });
            }
        });


        \$('body').on('click','.delete_record',function(){
            var id      = \$(this).attr('rel');
            var type    = \$(this).attr('data-type');
            swal.fire({
                buttonsStyling: false,

                text: \"";
        // line 781
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Are you sure to delete this item ?"]);
        echo "\",
                type: \"danger\",

                confirmButtonText: \"";
        // line 784
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yes, delete!"]);
        echo "\",
                confirmButtonClass: \"btn btn-sm btn-bold btn-danger\",

                showCancelButton: true,
                cancelButtonText: '";
        // line 788
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No, cancel"]);
        echo "',
                cancelButtonClass: \"btn btn-sm btn-bold btn-brand\"
            }).then(function (result) {
                if (result.value) {
                    \$.request('onDelete', {
                        data: {id: id, type: type},
                        success: function(data) {

                            swal.fire({
                                title: '";
        // line 797
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Deleted!"]);
        echo "',
                                text: '";
        // line 798
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Your selected record has been deleted! :("]);
        echo "',
                                type: 'success',
                                buttonsStyling: false,
                                confirmButtonText: '";
        // line 801
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["OK"]);
        echo "',
                                confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                            });
                            datatable.reload();
                        }
                    });
                    // result.dismiss can be 'cancel', 'overlay',
                    // 'close', and 'timer'
                } else if (result.dismiss === 'cancel') {
                    swal.fire({
                        title: '";
        // line 811
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cancelled"]);
        echo "',
                        text: '";
        // line 812
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["You selected record has not been deleted! :)"]);
        echo "',
                        type: 'error',
                        buttonsStyling: false,
                        confirmButtonText: '";
        // line 815
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["OK"]);
        echo "',
                        confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                    });
                }
            });
        });


        \$('body').on('click', '#sendAll', function (e) {
            e.preventDefault();

            // fetch selected IDs
            var selected = [];
            var ids = datatable.rows('.kt-datatable__row--active').nodes().find('.kt-checkbox--single > [type=\"checkbox\"]').map(function (i, chk) {
                selected[\$(chk).val()] = \$(chk).val();
                return \$(chk).val();
            });
            if (ids.length > 0) {
                // learn more: https://sweetalert2.github.io/
                swal.fire({
                    buttonsStyling: false,

                    text: \"";
        // line 837
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Are you sure you want to send all"]);
        echo " \" + ids.length + \" ";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["selected records to the company?"]);
        echo "\",
                    type: \"error\",

                    confirmButtonText: \"";
        // line 840
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yes!"]);
        echo "\",
                    confirmButtonClass: \"btn btn-sm btn-bold btn-danger\",

                    showCancelButton: true,
                    cancelButtonText: '";
        // line 844
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No, cancel"]);
        echo "',
                    cancelButtonClass: \"btn btn-sm btn-bold btn-brand\"
                }).then(function (result) {
                    if (result.value) {
                        \$.request('onSend', {
                            data: {id: selected},
                            success: function(data) {
                                swal.fire({
                                    title: '";
        // line 852
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sent Successfully!"]);
        echo "',
                                    text: '";
        // line 853
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Your selected records have been sent to the company!"]);
        echo "',
                                    type: 'success',
                                    buttonsStyling: false,
                                    confirmButtonText: '";
        // line 856
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["OK"]);
        echo "',
                                    confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                                });
                                datatable.reload();
                            }
                        });
                    } else if (result.dismiss === 'cancel') {
                        swal.fire({
                            title: '";
        // line 864
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cancelled"]);
        echo "',
                            text: '";
        // line 865
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Your shipments not sent, and they still just on your account! :)"]);
        echo "',
                            type: 'error',
                            buttonsStyling: false,
                            confirmButtonText: '";
        // line 868
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["OK"]);
        echo "',
                            confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                        });
                    }
                });
            }
        });

        \$('body').on('click', '#createManifest', function (e) {
            e.preventDefault();

            // fetch selected IDs
            var selected = [];
            var ids = datatable.rows('.kt-datatable__row--active').nodes().find('.kt-checkbox--single > [type=\"checkbox\"]').map(function (i, chk) {
                selected[\$(chk).val()] = \$(chk).val();
                return \$(chk).val();
            });
            if (ids.length > 0) {
                // learn more: https://sweetalert2.github.io/
                swal.fire({
                    buttonsStyling: false,

                    text: \"";
        // line 890
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Are you sure you want to create new manifest with"]);
        echo " \" + ids.length + \" ";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["selected records ?"]);
        echo "\",
                    type: \"error\",

                    confirmButtonText: \"";
        // line 893
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yes!"]);
        echo "\",
                    confirmButtonClass: \"btn btn-sm btn-bold btn-danger\",

                    showCancelButton: true,
                    cancelButtonText: '";
        // line 897
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No, cancel"]);
        echo "',
                    cancelButtonClass: \"btn btn-sm btn-bold btn-brand\"
                }).then(function (result) {
                    if (result.value) {
                        \$('#manifest_id').val(selected);
                        \$('#manifest_modal').modal('toggle');
                    } else if (result.dismiss === 'cancel') {
                        swal.fire({
                            title: '";
        // line 905
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cancelled"]);
        echo "',
                            text: '";
        // line 906
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Your manifest not created! :)"]);
        echo "',
                            type: 'error',
                            buttonsStyling: false,
                            confirmButtonText: '";
        // line 909
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["OK"]);
        echo "',
                            confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                        });
                    }
                });
            }
        });

        \$('body').on('click', '#PrintEmployeeOrders', function (e) {
            \$('#chooseEmployee').modal('toggle');
        });
        \$('#chooseEmployee').on('click', '.print', function (e) {
            e.preventDefault();
            var parent = \$('#chooseEmployee');
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
                \$('#chooseEmployee form').submit();
                \$('#chooseEmployee').modal('toggle');
            }
        });

    }

    var updateTotal = function () {
        datatable.on('kt-datatable--on-layout-updated', function () {
            \$('#kt_subheader_total').html(datatable.getTotalRows() + ' ";
        // line 942
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Total"]);
        echo "');
        });
    };

    var reload = function () {
        datatable.reload();
    };

    var filter = function (status) {
        datatable.search(status, 'type');
    };

    var destroy = function () {
        datatable.destroy();
        \$('#generalSearch').val('');
        \$('#filter_form select,#filter_form input').each(function(){
            \$(this).val('');
        });
        \$('#filter_form select').each(function(){
            \$(this).selectpicker(\"refresh\");
        });
    };

    return {
        // public functions
        init: function (type) {
            init(type);
            search();
            selection();
            selectedStatusUpdate();
            selectedFilter();
            selectedDelete();
            updateTotal();
        },

        reload: function(){
            reload();
        },

        destroy: function(){
            destroy();
        },

        filter: function(status){
            filter(status);
        }
    };
}();

KTUtil.ready(function () {
    \$('.kt_subheader_filter_form').on('submit', function (e) {
        e.preventDefault();
        if(\$(this).find(\"button\").hasClass('active')){
            \$('.kt_subheader_filter_form button').removeClass('active');
            \$(\"#filter_selected\").html('');
            KTAppUserListDatatable.filter(0);
        }else{
            \$('.kt_subheader_filter_form button').removeClass('active');
            \$(\"#filter_selected\").html(':&nbsp;'+\$(this).find(\"button\").text());
            \$(this).find(\"button\").addClass('active');
            var status = \$(this).find(\"input.filter\").val();
            KTAppUserListDatatable.filter(status);
        }
    });

    ";
        // line 1007
        if ((twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 1007), "type", [], "any", false, false, false, 1007)) && (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 1007) == 5))) {
            // line 1008
            echo "        KTAppUserListDatatable.init('saved');
    ";
        } elseif (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 1009
($context["this"] ?? null), "param", [], "any", false, false, false, 1009), "type", [], "any", false, false, false, 1009))) {
            // line 1010
            echo "        KTAppUserListDatatable.init('requests');
    ";
        } else {
            // line 1012
            echo "        KTAppUserListDatatable.init('";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 1012), "type", [], "any", false, false, false, 1012), "html", null, true);
            echo "');

        if('";
            // line 1014
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 1014), "type", [], "any", false, false, false, 1014), "html", null, true);
            echo "' == 'manifest'){
            \$('#addNew').addClass('kt-hidden');
            \$('#sendAll').addClass('kt-hidden');
            \$('#importNew').addClass('kt-hidden');
            \$('#createManifest').addClass('kt-hidden');
            \$('#kt_subheader_group_actions_filter_change').addClass('kt-hidden');
        }else if('";
            // line 1020
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 1020), "type", [], "any", false, false, false, 1020), "html", null, true);
            echo "' == 'saved'){
            \$('#sendAll').removeClass('kt-hidden');
        }else{
            \$('#addNew').removeClass('kt-hidden');
            \$('#importNew').removeClass('kt-hidden');
            \$('#sendAll').addClass('kt-hidden');
            \$('#createManifest').removeClass('kt-hidden');
        }
    ";
        }
        // line 1029
        echo "
    \$('body').on('click', '#car', function(){
        if(\$(this).is(\":checked\")){
            \$('.car_container').removeClass('kt-hidden');
            \$('.employee_container').addClass('kt-hidden');
        }else{
            \$('.employee_container').removeClass('kt-hidden');
            \$('.car_container').addClass('kt-hidden');
        }
    });
    \$('body').on('click', 'a.nav-link',function(){
        \$('.kt_subheader_filter_form button').removeClass('active');
        \$(\"#filter_selected\").html('');
        window.history.pushState(null, null, '";
        // line 1042
        echo url((($context["currentLang"] ?? null) . "/dashboard/shipments"));
        echo "/'+\$(this).attr('href').replace('#',''));
        if(\$(this).attr('href').replace('#','') == 'saved'){
            \$('#kt_subheader h3.kt-subheader__title').html('";
        // line 1044
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Saved Shipments"]);
        echo "');
        }else if(\$(this).attr('href').replace('#','') == 'requests'){
            \$('#kt_subheader h3.kt-subheader__title').html('";
        // line 1046
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Shipments Requests"]);
        echo "');
        }else if(\$(this).attr('href').replace('#','') == 'approved'){
            \$('#kt_subheader h3.kt-subheader__title').html('";
        // line 1048
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Approved Shipments"]);
        echo "');
        }else if(\$(this).attr('href').replace('#','') == 'assigned'){
            \$('#kt_subheader h3.kt-subheader__title').html('";
        // line 1050
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Assigned Shipments"]);
        echo "');
        }else if(\$(this).attr('href').replace('#','') == 'withdriver'){
            \$('#kt_subheader h3.kt-subheader__title').html('";
        // line 1052
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Shipments Delivered To Driver"]);
        echo "');
        }else if(\$(this).attr('href').replace('#','') == 'postponed'){
            \$('#kt_subheader h3.kt-subheader__title').html('";
        // line 1054
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Postponed Shipments"]);
        echo "');
        }else if(\$(this).attr('href').replace('#','') == 'stock'){
            \$('#kt_subheader h3.kt-subheader__title').html('";
        // line 1056
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["In Stock"]);
        echo "');
        }else if(\$(this).attr('href').replace('#','') == 'delivered'){
            \$('#kt_subheader h3.kt-subheader__title').html('";
        // line 1058
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delivered"]);
        echo "');
        }else if(\$(this).attr('href').replace('#','') == 'supplied'){
            \$('#kt_subheader h3.kt-subheader__title').html('";
        // line 1060
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Supplied"]);
        echo "');
        }else if(\$(this).attr('href').replace('#','') == 'manifest'){
            \$('#kt_subheader h3.kt-subheader__title').html('";
        // line 1062
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Manifest"]);
        echo "');
        }else if(\$(this).attr('href').replace('#','') == 'all'){
            \$('#kt_subheader h3.kt-subheader__title').html('";
        // line 1064
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["All Shipments"]);
        echo "');
        }

        var url = '";
        // line 1067
        echo url("dashboard/shipments");
        echo "/'+\$(this).attr('href').replace('#','');
        \$('.kt-menu__item.kt-menu__item--open.kt-menu__item--here.kt-menu__item--submenu .kt-menu__submenu .kt-menu__link').each(function(){
            var item = \$(this);
            var parent = item.parent().parent();
            if(item.attr('href') == url){
                parent.find('.kt-menu__item.kt-menu__item--open').removeClass('kt-menu__item--open');
                parent.find('.kt-menu__item.kt-menu__item--here').removeClass('kt-menu__item--here');
                item.parent('.kt-menu__item').addClass('kt-menu__item--open').addClass('kt-menu__item--here');
            }
        });

        KTApp.blockPage({
            overlayColor: '#000000',
            type: 'v2',
            state: 'primary',
            message: '";
        // line 1082
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Processing, please wait"]);
        echo "...'
        });
        KTAppUserListDatatable.destroy();
        KTAppUserListDatatable.init(\$(this).attr('href').replace('#',''));
        KTApp.unblockPage();

        if(\$(this).attr('href').replace('#','') == 'manifest'){
            \$('#addNew').addClass('kt-hidden');
            \$('#importNew').addClass('kt-hidden');
                \$('#sendAll').addClass('kt-hidden');
        }else if(\$(this).attr('href').replace('#','') == 'saved'){
            \$('#sendAll').removeClass('kt-hidden');
        }else{
            \$('#sendAll').addClass('kt-hidden');
            \$('#addNew').removeClass('kt-hidden');
            \$('#importNew').removeClass('kt-hidden');
        }
    });


    \$('#manifest_modal').on('click', '.btn-primary', function(e){
        var parent = \$('#manifest_modal');
        var validation = 1;
        if(validation){
            \$('#manifest_modal').modal('toggle');
            KTApp.blockPage({
                overlayColor: '#000000',
                type: 'v2',
                state: 'success',
                message: '";
        // line 1111
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please wait"]);
        echo "...'
            });
            location.reload();
        }
    });
});
</script>
";
        // line 217
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/test/themes/spotlayer/pages/dashboard/shipments.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1962 => 217,  1952 => 1111,  1920 => 1082,  1902 => 1067,  1896 => 1064,  1891 => 1062,  1886 => 1060,  1881 => 1058,  1876 => 1056,  1871 => 1054,  1866 => 1052,  1861 => 1050,  1856 => 1048,  1851 => 1046,  1846 => 1044,  1841 => 1042,  1826 => 1029,  1814 => 1020,  1805 => 1014,  1799 => 1012,  1795 => 1010,  1793 => 1009,  1790 => 1008,  1788 => 1007,  1720 => 942,  1684 => 909,  1678 => 906,  1674 => 905,  1663 => 897,  1656 => 893,  1648 => 890,  1623 => 868,  1617 => 865,  1613 => 864,  1602 => 856,  1596 => 853,  1592 => 852,  1581 => 844,  1574 => 840,  1566 => 837,  1541 => 815,  1535 => 812,  1531 => 811,  1518 => 801,  1512 => 798,  1508 => 797,  1496 => 788,  1489 => 784,  1483 => 781,  1465 => 766,  1459 => 763,  1455 => 762,  1442 => 752,  1436 => 749,  1432 => 748,  1421 => 740,  1414 => 736,  1406 => 733,  1375 => 705,  1369 => 702,  1365 => 701,  1355 => 694,  1349 => 691,  1345 => 690,  1337 => 685,  1330 => 681,  1322 => 678,  1246 => 605,  1204 => 580,  1198 => 577,  1194 => 576,  1190 => 575,  1186 => 574,  1182 => 573,  1178 => 572,  1174 => 571,  1165 => 565,  1161 => 564,  1148 => 553,  1142 => 550,  1137 => 549,  1134 => 548,  1128 => 545,  1125 => 544,  1122 => 543,  1114 => 540,  1111 => 539,  1109 => 538,  1105 => 536,  1097 => 533,  1094 => 532,  1091 => 531,  1083 => 528,  1080 => 527,  1078 => 526,  1071 => 524,  1068 => 523,  1060 => 520,  1055 => 519,  1052 => 518,  1044 => 515,  1041 => 514,  1039 => 513,  1033 => 512,  1024 => 506,  1014 => 499,  1002 => 490,  996 => 487,  990 => 484,  983 => 480,  975 => 475,  963 => 466,  950 => 456,  939 => 455,  933 => 452,  922 => 451,  912 => 444,  902 => 439,  895 => 435,  872 => 414,  866 => 411,  861 => 410,  858 => 409,  852 => 406,  849 => 405,  846 => 404,  838 => 401,  835 => 400,  833 => 399,  830 => 398,  822 => 395,  819 => 394,  817 => 393,  812 => 390,  804 => 387,  801 => 386,  799 => 385,  792 => 383,  789 => 382,  781 => 379,  776 => 378,  773 => 377,  765 => 374,  762 => 373,  760 => 372,  754 => 371,  745 => 365,  735 => 358,  723 => 349,  717 => 346,  711 => 343,  704 => 339,  696 => 334,  684 => 325,  671 => 315,  660 => 314,  654 => 311,  643 => 310,  633 => 303,  623 => 298,  616 => 294,  603 => 284,  593 => 277,  581 => 268,  575 => 265,  563 => 256,  551 => 247,  540 => 239,  517 => 218,  515 => 217,  507 => 212,  502 => 210,  498 => 209,  493 => 206,  488 => 203,  477 => 201,  473 => 200,  467 => 197,  464 => 196,  462 => 195,  451 => 187,  446 => 185,  439 => 181,  431 => 176,  420 => 168,  415 => 166,  411 => 165,  404 => 160,  393 => 158,  389 => 157,  383 => 154,  378 => 151,  367 => 149,  363 => 148,  357 => 145,  345 => 136,  333 => 127,  328 => 125,  320 => 120,  312 => 115,  295 => 104,  285 => 100,  283 => 99,  275 => 96,  267 => 93,  259 => 90,  251 => 87,  243 => 84,  235 => 81,  227 => 78,  218 => 75,  208 => 71,  206 => 70,  195 => 62,  189 => 61,  186 => 60,  179 => 56,  173 => 55,  170 => 54,  168 => 53,  162 => 50,  156 => 49,  149 => 45,  143 => 44,  136 => 40,  130 => 39,  123 => 35,  117 => 34,  110 => 30,  104 => 29,  97 => 25,  91 => 24,  84 => 20,  78 => 19,  71 => 15,  65 => 14,  62 => 13,  55 => 9,  49 => 8,  46 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!--begin::Portlet-->
<div class=\"kt-portlet kt-portlet--tabs\">
    <div class=\"kt-portlet__head\">
        <div class=\"kt-portlet__head-toolbar\">
            <ul class=\"nav nav-tabs nav-tabs-line nav-tabs-line-brand nav-tabs-line-2x nav-tabs-line-right nav-tabs-bold\" role=\"tablist\">
                {% if user.role_id == 5 %}
                <li class=\"nav-item\">
                    <a class=\"nav-link {% if (this.param.type is empty and user.role_id == 5) or this.param.type == 'saved' %}active{% endif %}\" data-toggle=\"tab\" href=\"#saved\" role=\"tab\">
                        <i class=\"flaticon-folder-2\" aria-hidden=\"true\"></i>{{'Saved'|__}}
                    </a>
                </li>
                {% endif %}
                <li class=\"nav-item\">
                    <a class=\"nav-link {% if (this.param.type is empty and user.role_id != 5) or this.param.type == 'requests' %}active{% endif %}\" data-toggle=\"tab\" href=\"#requests\" role=\"tab\">
                        <i class=\"flaticon-alert\" aria-hidden=\"true\"></i>{{'New Requests'|__}}
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link {% if this.param.type == 'approved' %}active{% endif %}\" data-toggle=\"tab\" href=\"#approved\" role=\"tab\">
                        <i class=\"flaticon-like\" aria-hidden=\"true\"></i>{{\"Approved\"|__}}
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link {% if this.param.type == 'assigned' %}active{% endif %}\" data-toggle=\"tab\" href=\"#assigned\" role=\"tab\">
                        <i class=\"flaticon-network\" aria-hidden=\"true\"></i>{{'Assigned Shipments'|__}}
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link {% if this.param.type == 'withdriver' %}active{% endif %}\" data-toggle=\"tab\" href=\"#withdriver\" role=\"tab\">
                        <i class=\"flaticon-suitcase\" aria-hidden=\"true\"></i>{{'Delivered To Driver'|__}}
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link {% if this.param.type == 'stock' %}active{% endif %}\" data-toggle=\"tab\" href=\"#stock\" role=\"tab\">
                        <i class=\"flaticon-home-2\" aria-hidden=\"true\"></i>{{'In Stock'|__}}
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link {% if this.param.type == 'postponed' %}active{% endif %}\" data-toggle=\"tab\" href=\"#postponed\" role=\"tab\">
                        <i class=\"flaticon-stopwatch\" aria-hidden=\"true\"></i>{{'Postponed'|__}}
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link {% if this.param.type == 'delivered' %}active{% endif %}\" data-toggle=\"tab\" href=\"#delivered\" role=\"tab\">
                        <i class=\"flaticon-open-box\" aria-hidden=\"true\"></i>{{'Delivered'|__}}
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link {% if this.param.type == 'supplied' %}active{% endif %}\" data-toggle=\"tab\" href=\"#supplied\" role=\"tab\">
                        <i class=\"flaticon-piggy-bank\" aria-hidden=\"true\"></i>{{'Supplied'|__}}
                    </a>
                </li>
                {% if user.role_id != 5 %}
                    <li class=\"nav-item\">
                        <a class=\"nav-link {% if this.param.type == 'manifest' %}active{% endif %}\" data-toggle=\"tab\" href=\"#manifest\" role=\"tab\">
                            <i class=\"flaticon-truck\" aria-hidden=\"true\"></i>{{'Manifest'|__}}
                        </a>
                    </li>
                {% endif %}
                <li class=\"nav-item\">
                    <a class=\"nav-link {% if this.param.type == 'all' %}active{% endif %}\" data-toggle=\"tab\" href=\"#all\" role=\"tab\">
                        <i class=\"flaticon-shopping-basket\" aria-hidden=\"true\"></i>{{'All Shipments'|__}}
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class=\"kt-portlet__body\">
        <div class=\"tab-content\">
            {% if user.role_id == 5 %}
                <div class=\"tab-pane  {% if (this.param.type is empty and user.role_id == 5) or this.param.type == 'saved' %}active{% endif %}\" id=\"saved\" role=\"tabpanel\">
                    <div class=\"kt-datatable-saved\"></div>
                </div>
            {% endif %}
            <div class=\"tab-pane  {% if this.param.type is empty or this.param.type == 'requests' %}active{% endif %}\" id=\"requests\" role=\"tabpanel\">
                <div class=\"kt-datatable-requests\"></div>
            </div>
            <div class=\"tab-pane {% if this.param.type == 'approved' %}active{% endif %}\" id=\"approved\" role=\"tabpanel\">
                <div class=\"kt-datatable-approved\"></div>
            </div>
            <div class=\"tab-pane {% if this.param.type == 'assigned' %}active{% endif %}\" id=\"assigned\" role=\"tabpanel\">
                <div class=\"kt-datatable-assigned\"></div>
            </div>
            <div class=\"tab-pane {% if this.param.type == 'withdriver' %}active{% endif %}\" id=\"withdriver\" role=\"tabpanel\">
                <div class=\"kt-datatable-withdriver\"></div>
            </div>
            <div class=\"tab-pane {% if this.param.type == 'stock' %}active{% endif %}\" id=\"stock\" role=\"tabpanel\">
                <div class=\"kt-datatable-stock\"></div>
            </div>
            <div class=\"tab-pane {% if this.param.type == 'postponed' %}active{% endif %}\" id=\"postponed\" role=\"tabpanel\">
                <div class=\"kt-datatable-postponed\"></div>
            </div>
            <div class=\"tab-pane {% if this.param.type == 'supplied' %}active{% endif %}\" id=\"supplied\" role=\"tabpanel\">
                <div class=\"kt-datatable-supplied\"></div>
            </div>
            <div class=\"tab-pane {% if this.param.type == 'delivered' %}active{% endif %}\" id=\"delivered\" role=\"tabpanel\">
                <div class=\"kt-datatable-delivered\"></div>
            </div>
            {% if user.role_id != 5 %}
                <div class=\"tab-pane {% if this.param.type == 'manifest' %}active{% endif %}\" id=\"manifest\" role=\"tabpanel\">
                    <div class=\"kt-datatable-manifest\"></div>
                </div>
            {% endif %}
            <div class=\"tab-pane {% if this.param.type == 'all' %}active{% endif %}\" id=\"all\" role=\"tabpanel\">
                <div class=\"kt-datatable-all\"></div>
            </div>
        </div>
    </div>
</div>
<!--end::Portlet-->
<div class=\"modal fade\" id=\"manifest_modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" >{{'Manifest information'|__}}</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                </button>
            </div>

            {{ form_ajax('onSavemanifest', { flash: true, novalidate: true }) }}
                <div class=\"modal-body\">
                    <div class=\"row\">
                        <input type=\"hidden\" id=\"manifest_id\" class=\"form-control\" name=\"ids\" />
                        <div class=\"form-group col-lg-12\">
                            <label>{{'Date'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            <div class=\"input-group date\">
                                <input type=\"text\" class=\"form-control date\" readonly=\"\" name=\"ship_date\" value=\"{{now|date_modify(\"+1 day\")|date(settings.dateformat)}}\" required>
                                <div class=\"input-group-append\">
                                    <span class=\"input-group-text\">
                                        <i class=\"la la-calendar\"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class=\"form-group col-lg-12\">
                            <label>{{'Assign to specifc car?'|__}}</label>
                            <div class=\"kt-checkbox-single\">
                                <label class=\"kt-checkbox\">
                                    <input type=\"checkbox\" id=\"car\" class=\"form-control\"  value=\"1\">
                                    <span></span>
                                </label>
                            </div>
                        </div>
                        <div class=\"form-group col-lg-12 employee_container\">
                            <label>{{'Employee'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            <select class=\"form-control\" id=\"employee_id\" name=\"employee_id\" data-live-search=\"true\" required>
                                <option data-hidden=\"true\"></option>
                                {% for employee in employees %}
                                    <option value=\"{{employee.id}}\">{{employee.name}}</option>
                                {% endfor %}
                            </select>
                        </div>
                        <div class=\"form-group col-lg-12 kt-hidden car_container\">
                            <label>{{'Car'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            <select class=\"form-control\" id=\"car_id\" name=\"car_id\" data-live-search=\"true\" required>
                                <option data-hidden=\"true\"></option>
                                {% for car in cars %}
                                    <option value=\"{{car.id}}\">{{car.name}}</option>
                                {% endfor %}
                            </select>
                        </div>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">{{'Close'|__}}</button>
                    <button type=\"submit\" class=\"btn btn-primary\">{{'Assign'|__}}</button>
                </div>
            {{ form_close() }}
        </div>
    </div>
</div>
<div class=\"modal fade\" id=\"chooseEmployee\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" >{{'Print Employee Orders'|__}}</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                </button>
            </div>

            {{ form_ajax('onPrint', { success: 'created successfully!', flash: true, class: 'kt_form', novalidate: true }) }}
                <div class=\"modal-body\">
                    <div class=\"row\">
                        <div class=\"form-group col-lg-12\">
                            <label>{{'Date'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            <div class=\"input-group date\">
                                <input type=\"text\" class=\"form-control date\" readonly=\"\" name=\"date\" value=\"{{now|date(settings.dateformat)}}\" required>
                                <div class=\"input-group-append\">
                                    <span class=\"input-group-text\">
                                        <i class=\"la la-calendar\"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        {% if user.role_id != 4 %}
                            <div class=\"form-group col-lg-12\">
                                <label>{{'Employee'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                <select class=\"form-control\"name=\"employee_id\" data-live-search=\"true\" required>
                                    <option data-hidden=\"true\"></option>
                                    {% for employee in employees %}
                                        <option value=\"{{employee.id}}\">{{employee.name}}</option>
                                    {% endfor %}
                                </select>
                            </div>
                        {% endif %}
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">{{'Close'|__}}</button>
                    <button type=\"button\" class=\"btn btn-primary print\">{{'Print'|__}}</button>
                </div>
            {{ form_close() }}
        </div>
    </div>
</div>

{% put scripts %}
<script type=\"text/javascript\">
\"use strict\";
var KTAppUserListDatatable = function () {
    // variables
    var datatable;

    // init
    var init = function (type) {
        // init the datatables. Learn more: https://keenthemes.com/metronic/?page=docs&section=datatable
        if(type == 'manifest'){
            var columns = [
                {
                    field: 'id',
                    title: '#',
                    autoHide: true,
                    sortable: false,
                    width: 20,
                    textAlign: 'center',
                },
                {
                    field: \"created_at\",
                    title: \"{{'Created On'|__}}\",
                    autoHide: false,
                    sortable: false,
                    width: 'auto',
    \t\t\t\ttemplate: function(data, i) {
    \t\t\t\t\tvar output = '\\
                            <div class=\"kt-user-card-v2 kt-user-card-v2--uncircle\">\\
                                <div class=\"kt-user-card-v2__details\">\\
                                    <a href=\"{{url('dashboard/shipments/manifest')}}/'+data.id+'/view\" class=\"kt-user-card-v2__name\">' + data.created_at_date + '</a>\\
                                    <span class=\"kt-user-card-v2__email\">' + data.created_at_time + '</span>\\
                                </div>\\
                            </div>';
    \t\t\t\t\treturn output;
    \t\t\t\t}
                },
                {
                    field: \"details\",
                    title: \"{{'Responsiable'|__}}\",
                    autoHide: true,
                    sortable: false,
                    width: 'auto',
    \t\t\t\ttemplate: function(data, i) {
    \t\t\t\t\tvar output = '\\
                            <div class=\"kt-user-card-v2 kt-user-card-v2--uncircle\">\\
                                <div class=\"kt-user-card-v2__details\">';
                                if(data.car != '-'){
                                    output += '<a href=\"{{url('dashboard/shipments/manifest')}}/'+data.id+'/view\" class=\"kt-user-card-v2__name\">' + data.car + '</a>\\
                                                <span class=\"kt-user-card-v2__email\">' + data.driver + '</span>';
                                }else{
                                    output += '<a href=\"{{url('dashboard/shipments/manifest')}}/'+data.id+'/view\" class=\"kt-user-card-v2__name\">' + data.employee + '</a>';
                                }
                                output += '</div>\\
                            </div>';
    \t\t\t\t\treturn output;
    \t\t\t\t}
                },
                {
                    field: \"user\",
                    title: \"{{'By'|__}}\",
                    autoHide: true,
                    sortable: false,
                    width: 'auto',
                },
                {
                    field: \"orders\",
                    title: \"{{'No. Of Orders'|__}}\",
                    autoHide: false,
                    sortable: false,
                    width: 'auto',
                }
            ];
        }else if(type == 'requests' || type == 'delivered' || type == 'assigned' || type == 'withdriver' || type == 'postponed' || type == 'supplied' || type == 'all'){
            var columns = [
                {
                    field: \"number\",
                    title: \"{{'Tracking'|__}}\",
                    sortable: true,
                    width: 100,
                    template: function(row) {
                        return '<a href=\"{{url('dashboard/shipments')}}/'+row.id+'/view\">{{settings.tracking.prefix_order}}'+row.shipping_number+'</a>';
                    }
                },
                {
                    field: \"details\",
                    title: \"{{'Shipment Details'|__}}\",
                    sortable: false,
                    width: 'auto',
                    template: function(data, i) {
                        var output  = '\\
                            <div class=\"kt-user-card-v2 kt-user-card-v2--uncircle\">\\
                                <div class=\"kt-user-card-v2__details\">\\
                                    <a href=\"{% if user.hasUserPermission('client', 'r') %}{{url('dashboard/clients')}}/'+data.sender.id+'/view{% else %}javascript:;{% endif %}\" class=\"kt-user-card-v2__name\"><b class=\"kt-font-boldest\">{{\"Sender\"|__}}:</b> ' + data.sender.name + '</a>\\
                                    <span class=\"kt-user-card-v2__email\"><b class=\"kt-font-boldest\">{{\"From\"|__}}:</b> ' + data.shipping_from_area + '</span>';
                        if(data.receiver){
                            output      += '\\
                                        <a href=\"{% if user.hasUserPermission('client', 'r') %}{{url('dashboard/clients')}}/'+data.receiver.id+'/view{% else %}javascript:;{% endif %}\" class=\"kt-margin-t-5 kt-user-card-v2__name\"><b>{{\"Receiver\"|__}}:</b> ' + data.receiver.name + '</a>\\
                                        <span class=\"kt-user-card-v2__email\"><b class=\"kt-font-boldest\">{{\"To\"|__}}:</b> ' + data.shipping_to_area + '</span>';
                        }
                        output      += '\\
                                </div>\\
                            </div>';
                        return output;
                    }
                },
                {
                    field: \"office\",
                    title: \"{{'Branch'|__}}\",
                    sortable: false,
                    width: 100,
                    template: function(data, i) {
                        return '<a href=\"javascript:;\">'+data.office+'</a>';
                    }
                },
                {
                    field: \"status\",
                    title: \"{{'Status'|__}}\",
                    sortable: false,
                    width: 'auto',
                    template: function(row) {
                        if(row.requested == 100){
                            var output = '<span class=\"btn btn-bold btn-sm btn-label-primary\">{{\"Saved\"|__}}</span>';
                        }else{
                            var output = '<span class=\"btn btn-bold btn-sm btn-label-' + row.status.color + '\">' + row.status.name + '</span>';
                            if(row.delayed == 1){
                                output  += '&nbsp;<span class=\"btn btn-bold btn-sm btn-label-danger\">{{\"Delayed\"|__}}</span>';
                            }
                            if(row.requested == 10 || row.requested == 11){
                                output  += '&nbsp;<span class=\"btn btn-bold btn-sm btn-label-warning\">{{\"Returning Discards\"|__}}</span>';
                            }
                            if(row.requested == 12 && row.status.equal != 12){
                                output  += '&nbsp;<span class=\"btn btn-bold btn-sm btn-label-success\">{{\"Supplied\"|__}}</span>';
                            }
                        }

                        return output;
                    }
                },
                {
                    field: \"created_at_date\",
                    title: \"{{'Date'|__}}\",
                    sortable: false,
                    width: 100,
                },
                {
                    field: \"Actions\",
                    width: 100,
                    title: \"{{'Actions'|__}}\",
                    sortable: false,
                    overflow: 'visible',
                    template: function (data) {
                        var output = '' +
                        '<div class=\"btn-group btn-group\" role=\"group\" aria-label=\"...\">'+
                            '<a href=\"{{url(\"dashboard/shipments\")}}/'+data.id+'/view\" class=\"btn btn-brand btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"{{\"View Shipment\"|__}}\"><i class=\"la la-eye\"></i></button>';
                            {% if user.hasUserPermission('order', 'u') and user.role_id != 5 %}
                                if(data.requested   ==  0 || data.requested == 1 || data.requested == 100){
                                    output += '<a href=\"{{url(\"dashboard/shipments\")}}/'+data.id+'/edit\" class=\"btn btn-brand btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"{{\"Edit Shipment\"|__}}\"><i class=\"la la-edit\"></i></button>';
                                }
                            {% endif %}
                            {% if user.role_id == 5 %}
                                if((data.requested   ==  0 || data.requested == 100) && data.sender_id == {{user.id}}){
                                    output += '<a href=\"{{url(\"dashboard/shipments\")}}/'+data.id+'/edit\" class=\"btn btn-brand btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"{{\"Edit Shipment\"|__}}\"><i class=\"la la-edit\"></i></button>';
                                }
                            {% endif %}
                                if((data.requested   !=  0 && data.requested   !=  1 && data.requested != 100)){
                                    output += '<a href=\"{{url(\"dashboard/shipments\")}}/'+data.id+'/print/shipment\" target=\"_blank\" class=\"btn btn-info btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"{{\"Print Shipment\"|__}}\"><i class=\"la la-print\"></i></button>';
                                }
                            {% if user.hasUserPermission('order', 'u') %}
                                if((data.requested   ==  100 || data.requested   ==  0 || data.requested == 1)){
                                    output += '<a href=\"{{url(\"dashboard/shipments\")}}/'+data.id+'/print/label\" class=\"btn btn-info btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"{{\"Print Label\"|__}}\" target=\"_blank\" ><i class=\"la la-qrcode\"></i></button>';
                                }
                            {% endif %}
                            //0 = Pending | 1 = Approved | 2 = Refused | 3 = Delivered to driver | 4 = Delivered | 5 = Return request | 6 = Delivery of discards to the driver | 7 = Supply in stock | 8 = Returned | 9 = received


                            {% if user.hasUserPermission('order', 'u') and user.role_id != 5 %}
                                if((data.requested   ==  1 || data.requested   ==  3 || data.requested   ==  5 || data.requested == 6 || data.requested == 7 || data.requested == 9)){
                                    output += '<a href=\"{{url(\"dashboard/shipments\")}}/'+data.id+'/update\" class=\"btn btn-info btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"{{\"Update Status\"|__}}\"><i class=\"la la-street-view\"></i></button>';
                                }
                            {% endif %}

                            {% if user.hasUserPermission('order', 'u') and user.role_id != 5 %}
                                if((data.requested   ==  9 || data.requested   ==  3)){
                                    output += '<a href=\"{{url(\"dashboard/shipments\")}}/'+data.id+'/deliver\" class=\"btn btn-success btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"{{\"Mark as delivered\"|__}}\"><i class=\"la la-smile-o\"></i></button>';
                                }
                            {% endif %}
                            {% if user.hasUserPermission('order', 'd') %}
                                if(data.requested   ==  0 || data.requested == 100 || data.requested == 1){
                                    output += '<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-sm delete_record kt-font-light btn-icon\" rel=\"'+data.id+'\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"{{\"Delete Shipment\"|__}}\"><i class=\"la la-remove\"></i></a>';
                                }
                            {% endif %}
                            {% if user.role_id == 5 %}
                                if((data.requested   ==  0 || data.requested == 100) && data.sender_id == {{user.id}}){
                                    output += '<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-sm delete_record kt-font-light btn-icon\" rel=\"'+data.id+'\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"{{\"Delete Shipment\"|__}}\"><i class=\"la la-remove\"></i></a>';
                                }
                            {% endif %}
                        '</div>';

                        return output;
                    },
                }
            ]
        }else{
            var columns = [
                {
                    field: 'id',
                    title: '#',
                    sortable: false,
                    autoHide: true,
                    width: 20,
                    selector: {
                        class: 'kt-checkbox--solid'
                    },
                    textAlign: 'center',
                },
                {
                    field: \"number\",
                    title: \"{{'Tracking'|__}}\",
                    sortable: true,
                    width: 100,
                    template: function(row) {
                        return '<a href=\"{{url('dashboard/shipments')}}/'+row.id+'/view\">{{settings.tracking.prefix_order}}'+row.shipping_number+'</a>';
                    }
                },
                {
                    field: \"details\",
                    title: \"{{'Shipment Details'|__}}\",
                    sortable: false,
                    width: 'auto',
                    template: function(data, i) {
                        var output  = '\\
                            <div class=\"kt-user-card-v2 kt-user-card-v2--uncircle\">\\
                                <div class=\"kt-user-card-v2__details\">\\
                                    <a href=\"{% if user.hasUserPermission('client', 'r') %}{{url('dashboard/clients')}}/'+data.sender.id+'/view{% else %}javascript:;{% endif %}\" class=\"kt-user-card-v2__name\"><b class=\"kt-font-boldest\">{{\"Sender\"|__}}:</b> ' + data.sender.name + '</a>\\
                                    <span class=\"kt-user-card-v2__email\"><b class=\"kt-font-boldest\">{{\"From\"|__}}:</b> ' + data.shipping_from_area + '</span>';
                        if(data.receiver){
                            output      += '\\
                                        <a href=\"{% if user.hasUserPermission('client', 'r') %}{{url('dashboard/clients')}}/'+data.receiver.id+'/view{% else %}javascript:;{% endif %}\" class=\"kt-margin-t-5 kt-user-card-v2__name\"><b>{{\"Receiver\"|__}}:</b> ' + data.receiver.name + '</a>\\
                                        <span class=\"kt-user-card-v2__email\"><b class=\"kt-font-boldest\">{{\"To\"|__}}:</b> ' + data.shipping_to_area + '</span>';
                        }
                        output      += '\\
                                </div>\\
                            </div>';
                        return output;
                    }
                },
                {
                    field: \"office\",
                    title: \"{{'Branch'|__}}\",
                    sortable: false,
                    width: 100,
                    template: function(data, i) {
                        return '<a href=\"javascript:;\">'+data.office+'</a>';
                    }
                },
                {
                    field: \"status\",
                    title: \"{{'Status'|__}}\",
                    sortable: false,
                    width: 'auto',
                    template: function(row) {
                        if(row.requested == 100){
                            var output = '<span class=\"btn btn-bold btn-sm btn-label-primary\">{{\"Saved\"|__}}</span>';
                        }else{
                            var output = '<span class=\"btn btn-bold btn-sm btn-label-' + row.status.color + '\">' + row.status.name + '</span>';
                            if(row.delayed == 1){
                                output  += '&nbsp;<span class=\"btn btn-bold btn-sm btn-label-danger\">{{\"Delayed\"|__}}</span>';
                            }
                            if(row.requested == 10 || row.requested == 11){
                                output  += '&nbsp;<span class=\"btn btn-bold btn-sm btn-label-warning\">{{\"Returning Discards\"|__}}</span>';
                            }
                            if(row.requested == 12 && row.status.equal != 12){
                                output  += '&nbsp;<span class=\"btn btn-bold btn-sm btn-label-success\">{{\"Supplied\"|__}}</span>';
                            }
                        }

                        return output;
                    }
                },
                {
                    field: \"created_at_date\",
                    title: \"{{'Date'|__}}\",
                    sortable: false,
                    width: 100,
                },
                {
                    field: \"Actions\",
                    width: 100,
                    title: \"{{'Actions'|__}}\",
                    sortable: false,
                    overflow: 'visible',
                    template: function (data) {
                        var output = '' +
                        '<div class=\"btn-group btn-group\" role=\"group\" aria-label=\"...\">'+
                            '<a href=\"{{url(\"dashboard/shipments\")}}/'+data.id+'/view\" class=\"btn btn-brand btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"{{\"View Shipment\"|__}}\"><i class=\"la la-eye\"></i></button>';
                            {% if user.hasUserPermission('order', 'u') and user.role_id != 5 %}
                                if(data.requested   ==  0 || data.requested == 1 || data.requested == 100){
                                    output += '<a href=\"{{url(\"dashboard/shipments\")}}/'+data.id+'/edit\" class=\"btn btn-brand btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"{{\"Edit Shipment\"|__}}\"><i class=\"la la-edit\"></i></button>';
                                }
                            {% endif %}
                            {% if user.role_id == 5 %}
                                if((data.requested   ==  0 || data.requested == 100) && data.sender_id == {{user.id}}){
                                    output += '<a href=\"{{url(\"dashboard/shipments\")}}/'+data.id+'/edit\" class=\"btn btn-brand btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"{{\"Edit Shipment\"|__}}\"><i class=\"la la-edit\"></i></button>';
                                }
                            {% endif %}
                                if((data.requested   !=  0 && data.requested   !=  1 && data.requested != 100)){
                                    output += '<a href=\"{{url(\"dashboard/shipments\")}}/'+data.id+'/print/shipment\" target=\"_blank\" class=\"btn btn-info btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"{{\"Print Shipment\"|__}}\"><i class=\"la la-print\"></i></button>';
                                }
                            {% if user.hasUserPermission('order', 'u') %}
                                if((data.requested   ==  100 || data.requested   ==  0 || data.requested == 1)){
                                    output += '<a href=\"{{url(\"dashboard/shipments\")}}/'+data.id+'/print/label\" class=\"btn btn-info btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"{{\"Print Label\"|__}}\" target=\"_blank\" ><i class=\"la la-qrcode\"></i></button>';
                                }
                            {% endif %}
                            {% if user.hasUserPermission('order', 'u') %}
                                if((data.requested   ==  3 || data.requested   ==  5 || data.requested == 6 || data.requested == 7 || data.requested == 9)){
                                    output += '<a href=\"{{url(\"dashboard/shipments\")}}/'+data.id+'/update\" class=\"btn btn-info btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"{{\"Update Status\"|__}}\"><i class=\"la la-street-view\"></i></button>';
                                }
                            {% endif %}
                            //0 = Pending | 1 = Approved | 2 = Refused | 3 = Delivered to driver | 4 = Delivered | 5 = Return request | 6 = Delivery of discards to the driver | 7 = Supply in stock | 8 = Returned | 9 = received

                            {% if user.hasUserPermission('order', 'u') %}
                                if((data.requested   ==  1 || data.requested   ==  3)){
                                    output += '<a href=\"{{url(\"dashboard/shipments\")}}/'+data.id+'/deliver\" class=\"btn btn-success btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"{{\"Mark as delivered\"|__}}\"><i class=\"la la-smile-o\"></i></button>';
                                }
                            {% endif %}
                            {% if user.hasUserPermission('order', 'd') and user.role_id != 5 %}
                                if(data.requested   ==  0 || data.requested == 100 || data.requested == 1){
                                    output += '<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-sm delete_record kt-font-light btn-icon\" rel=\"'+data.id+'\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"{{\"Delete Shipment\"|__}}\"><i class=\"la la-remove\"></i></a>';
                                }
                            {% endif %}
                            {% if user.role_id == 5 %}
                                if((data.requested   ==  0 || data.requested == 100) && (data.sender_id != {{user.id}})){
                                    output += '<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-sm delete_record kt-font-light btn-icon\" rel=\"'+data.id+'\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"{{\"Delete Shipment\"|__}}\"><i class=\"la la-remove\"></i></a>';
                                }
                            {% endif %}
                        '</div>';

                        return output;
                    },
                }
            ]
        }

        datatable = \$('.kt-datatable-'+type).KTDatatable({
            translate: {
                records: {
                    processing: '{{\"Please wait\"|__}}...',
                    noRecords: '{{\"No records found\"|__}}'
                },
                toolbar: {
                    pagination: {
                        items: {
                            default: {
                                first: '{{\"First\"|__}}',
                                prev: '{{\"Previous\"|__}}',
                                next: '{{\"Next\"|__}}',
                                last: '{{\"Last\"|__}}',
                                more: '{{\"More pages\"|__}}',
                                input: '{{\"Page number\"|__}}',
                                select: '{{\"Select page size\"|__}}'
                            },

                            info: \"{{\"Displaying\"|__}} {{ '{{' }}start{{ '}}' }} - {{ '{{' }}end{{ '}}' }} {{\"of\"|__}} {{total}} {{\"records\"|__}}\"
                        }
                    }
                }
            },

            // layout definition
            layout: {
                scroll: true, // enable/disable datatable scroll both horizontal and vertical when needed.
                footer: false, // display/hide footer
            },

            // column sorting
            sortable: true,

            pagination: true,

            search: {
                input: \$('#generalSearch'),
                delay: 400,
            },
            data: {
                type: 'remote',
                source: {
                    read: {
                        url: '{{url(\"api/shipments\")}}/'+type,
                    },
                },
                pageSize: 10, // display 20 records per page
                serverPaging: true,
                serverFiltering: true,
                serverSorting: true,
            },
            // columns definition
            columns: columns
        });


        return datatable;
    };

    // search
    var search = function () {
        \$('#filter_form select,#filter_form input').each(function(){
            \$(this).on('change', function () {
                datatable.search(\$(this).val().toLowerCase(), \$(this).attr('name'));
            });
        });
        \$('#reset').on('click', function () {
            datatable.destroy();
            \$('#generalSearch').val('');
            \$('#filter_form select,#filter_form input').each(function(){
                \$(this).val('');
            });
            \$('#filter_form select').each(function(){
                \$(this).selectpicker(\"refresh\");
            });
            init();
        });
    };

    // selection
    var selection = function () {
        // init form controls
        //\$('#kt_form_status, #kt_form_type').selectpicker();

        // event handler on check and uncheck on records
        datatable.on('kt-datatable--on-check kt-datatable--on-uncheck kt-datatable--on-layout-updated', function (e) {
            var checkedNodes = datatable.rows('.kt-datatable__row--active').nodes(); // get selected records
            var count = checkedNodes.length; // selected records count

            \$('#kt_subheader_group_selected_rows').html(count);

            if (count > 0) {
                \$('#kt_subheader_search').addClass('kt-hidden');
                \$('#kt_subheader_group_actions').removeClass('kt-hidden');
            } else {
                \$('#kt_subheader_search').removeClass('kt-hidden');
                \$('#kt_subheader_group_actions').addClass('kt-hidden');
            }
        });
    }

    // selected records status update
    var selectedStatusUpdate = function () {
        \$('#kt_subheader_group_actions_status_change').on('click', \"[data-toggle='status-change']\", function () {
            var status = \$(this).find(\".kt-nav__link-text\").html();

            // fetch selected IDs
            var ids = datatable.rows('.kt-datatable__row--active').nodes().find('.kt-checkbox--single > [type=\"checkbox\"]').map(function (i, chk) {
                return \$(chk).val();
            });

            if (ids.length > 0) {
                // learn more: https://sweetalert2.github.io/
                swal.fire({
                    buttonsStyling: false,

                    html: \"{{\"Are you sure to update\"|__}} \" + ids.length + \" {{\"selected records status to\"|__}} \" + status + \" ?\",
                    type: \"info\",

                    confirmButtonText: \"{{\"Yes, update\"|__}}!\",
                    confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",

                    showCancelButton: true,
                    cancelButtonText: \"{{\"No, cancel\"|__}}\",
                    cancelButtonClass: \"btn btn-sm btn-bold btn-default\"
                }).then(function (result) {
                    if (result.value) {
                        swal.fire({
                            title: '{{\"Deleted\"|__}}!',
                            text: '{{\"Your selected records statuses have been updated\"|__}}!',
                            type: 'success',
                            buttonsStyling: false,
                            confirmButtonText: \"{{\"OK\"|__}}\",
                            confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                        })
                        // result.dismiss can be 'cancel', 'overlay',
                        // 'close', and 'timer'
                    } else if (result.dismiss === 'cancel') {
                        swal.fire({
                            title: '{{\"Cancelled\"|__}}',
                            text: '{{\"You selected records statuses have not been updated\"|__}}!',
                            type: 'error',
                            buttonsStyling: false,
                            confirmButtonText: \"{{\"OK\"|__}}\",
                            confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                        });
                    }
                });
            }
        });
    }
    // selected records status update
    var selectedFilter = function () {
    }

    // selected records delete
    var selectedDelete = function () {
        \$('#kt_subheader_group_actions_delete_all').on('click', function () {
            // fetch selected IDs
            var selected = [];
            var type    = \$('.delete_record').attr('data-type');
            var ids = datatable.rows('.kt-datatable__row--active').nodes().find('.kt-checkbox--single > [type=\"checkbox\"]').map(function (i, chk) {
                selected[\$(chk).val()] = \$(chk).val();
                return \$(chk).val();
            });

            if (ids.length > 0) {
                // learn more: https://sweetalert2.github.io/
                swal.fire({
                    buttonsStyling: false,

                    text: \"{{'Are you sure to delete'|__}} \" + ids.length + \" {{'selected records ?'|__}}\",
                    type: \"error\",

                    confirmButtonText: \"{{'Yes, delete!'|__}}\",
                    confirmButtonClass: \"btn btn-sm btn-bold btn-danger\",

                    showCancelButton: true,
                    cancelButtonText: '{{\"No, cancel\"|__}}',
                    cancelButtonClass: \"btn btn-sm btn-bold btn-brand\"
                }).then(function (result) {
                    if (result.value) {
                        \$.request('onDelete', {
                            data: {id: selected,type: type},
                            success: function(data) {
                                swal.fire({
                                    title: '{{\"Deleted!\"|__}}',
                                    text: '{{\"Your selected records have been deleted! :(\"|__}}',
                                    type: 'success',
                                    buttonsStyling: false,
                                    confirmButtonText: '{{\"OK\"|__}}',
                                    confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                                });
                                datatable.reload();
                            }
                        });
                        // result.dismiss can be 'cancel', 'overlay',
                        // 'close', and 'timer'
                    } else if (result.dismiss === 'cancel') {
                        swal.fire({
                            title: '{{\"Cancelled\"|__}}',
                            text: '{{\"You selected records have not been deleted! :)\"|__}}',
                            type: 'error',
                            buttonsStyling: false,
                            confirmButtonText: '{{\"OK\"|__}}',
                            confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                        });
                    }
                });
            }
        });


        \$('body').on('click','.delete_record',function(){
            var id      = \$(this).attr('rel');
            var type    = \$(this).attr('data-type');
            swal.fire({
                buttonsStyling: false,

                text: \"{{'Are you sure to delete this item ?'|__}}\",
                type: \"danger\",

                confirmButtonText: \"{{'Yes, delete!'|__}}\",
                confirmButtonClass: \"btn btn-sm btn-bold btn-danger\",

                showCancelButton: true,
                cancelButtonText: '{{\"No, cancel\"|__}}',
                cancelButtonClass: \"btn btn-sm btn-bold btn-brand\"
            }).then(function (result) {
                if (result.value) {
                    \$.request('onDelete', {
                        data: {id: id, type: type},
                        success: function(data) {

                            swal.fire({
                                title: '{{\"Deleted!\"|__}}',
                                text: '{{\"Your selected record has been deleted! :(\"|__}}',
                                type: 'success',
                                buttonsStyling: false,
                                confirmButtonText: '{{\"OK\"|__}}',
                                confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                            });
                            datatable.reload();
                        }
                    });
                    // result.dismiss can be 'cancel', 'overlay',
                    // 'close', and 'timer'
                } else if (result.dismiss === 'cancel') {
                    swal.fire({
                        title: '{{\"Cancelled\"|__}}',
                        text: '{{\"You selected record has not been deleted! :)\"|__}}',
                        type: 'error',
                        buttonsStyling: false,
                        confirmButtonText: '{{\"OK\"|__}}',
                        confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                    });
                }
            });
        });


        \$('body').on('click', '#sendAll', function (e) {
            e.preventDefault();

            // fetch selected IDs
            var selected = [];
            var ids = datatable.rows('.kt-datatable__row--active').nodes().find('.kt-checkbox--single > [type=\"checkbox\"]').map(function (i, chk) {
                selected[\$(chk).val()] = \$(chk).val();
                return \$(chk).val();
            });
            if (ids.length > 0) {
                // learn more: https://sweetalert2.github.io/
                swal.fire({
                    buttonsStyling: false,

                    text: \"{{'Are you sure you want to send all'|__}} \" + ids.length + \" {{'selected records to the company?'|__}}\",
                    type: \"error\",

                    confirmButtonText: \"{{'Yes!'|__}}\",
                    confirmButtonClass: \"btn btn-sm btn-bold btn-danger\",

                    showCancelButton: true,
                    cancelButtonText: '{{\"No, cancel\"|__}}',
                    cancelButtonClass: \"btn btn-sm btn-bold btn-brand\"
                }).then(function (result) {
                    if (result.value) {
                        \$.request('onSend', {
                            data: {id: selected},
                            success: function(data) {
                                swal.fire({
                                    title: '{{\"Sent Successfully!\"|__}}',
                                    text: '{{\"Your selected records have been sent to the company!\"|__}}',
                                    type: 'success',
                                    buttonsStyling: false,
                                    confirmButtonText: '{{\"OK\"|__}}',
                                    confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                                });
                                datatable.reload();
                            }
                        });
                    } else if (result.dismiss === 'cancel') {
                        swal.fire({
                            title: '{{\"Cancelled\"|__}}',
                            text: '{{\"Your shipments not sent, and they still just on your account! :)\"|__}}',
                            type: 'error',
                            buttonsStyling: false,
                            confirmButtonText: '{{\"OK\"|__}}',
                            confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                        });
                    }
                });
            }
        });

        \$('body').on('click', '#createManifest', function (e) {
            e.preventDefault();

            // fetch selected IDs
            var selected = [];
            var ids = datatable.rows('.kt-datatable__row--active').nodes().find('.kt-checkbox--single > [type=\"checkbox\"]').map(function (i, chk) {
                selected[\$(chk).val()] = \$(chk).val();
                return \$(chk).val();
            });
            if (ids.length > 0) {
                // learn more: https://sweetalert2.github.io/
                swal.fire({
                    buttonsStyling: false,

                    text: \"{{'Are you sure you want to create new manifest with'|__}} \" + ids.length + \" {{'selected records ?'|__}}\",
                    type: \"error\",

                    confirmButtonText: \"{{'Yes!'|__}}\",
                    confirmButtonClass: \"btn btn-sm btn-bold btn-danger\",

                    showCancelButton: true,
                    cancelButtonText: '{{\"No, cancel\"|__}}',
                    cancelButtonClass: \"btn btn-sm btn-bold btn-brand\"
                }).then(function (result) {
                    if (result.value) {
                        \$('#manifest_id').val(selected);
                        \$('#manifest_modal').modal('toggle');
                    } else if (result.dismiss === 'cancel') {
                        swal.fire({
                            title: '{{\"Cancelled\"|__}}',
                            text: '{{\"Your manifest not created! :)\"|__}}',
                            type: 'error',
                            buttonsStyling: false,
                            confirmButtonText: '{{\"OK\"|__}}',
                            confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                        });
                    }
                });
            }
        });

        \$('body').on('click', '#PrintEmployeeOrders', function (e) {
            \$('#chooseEmployee').modal('toggle');
        });
        \$('#chooseEmployee').on('click', '.print', function (e) {
            e.preventDefault();
            var parent = \$('#chooseEmployee');
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
                \$('#chooseEmployee form').submit();
                \$('#chooseEmployee').modal('toggle');
            }
        });

    }

    var updateTotal = function () {
        datatable.on('kt-datatable--on-layout-updated', function () {
            \$('#kt_subheader_total').html(datatable.getTotalRows() + ' {{\"Total\"|__}}');
        });
    };

    var reload = function () {
        datatable.reload();
    };

    var filter = function (status) {
        datatable.search(status, 'type');
    };

    var destroy = function () {
        datatable.destroy();
        \$('#generalSearch').val('');
        \$('#filter_form select,#filter_form input').each(function(){
            \$(this).val('');
        });
        \$('#filter_form select').each(function(){
            \$(this).selectpicker(\"refresh\");
        });
    };

    return {
        // public functions
        init: function (type) {
            init(type);
            search();
            selection();
            selectedStatusUpdate();
            selectedFilter();
            selectedDelete();
            updateTotal();
        },

        reload: function(){
            reload();
        },

        destroy: function(){
            destroy();
        },

        filter: function(status){
            filter(status);
        }
    };
}();

KTUtil.ready(function () {
    \$('.kt_subheader_filter_form').on('submit', function (e) {
        e.preventDefault();
        if(\$(this).find(\"button\").hasClass('active')){
            \$('.kt_subheader_filter_form button').removeClass('active');
            \$(\"#filter_selected\").html('');
            KTAppUserListDatatable.filter(0);
        }else{
            \$('.kt_subheader_filter_form button').removeClass('active');
            \$(\"#filter_selected\").html(':&nbsp;'+\$(this).find(\"button\").text());
            \$(this).find(\"button\").addClass('active');
            var status = \$(this).find(\"input.filter\").val();
            KTAppUserListDatatable.filter(status);
        }
    });

    {% if this.param.type is empty and user.role_id == 5 %}
        KTAppUserListDatatable.init('saved');
    {% elseif this.param.type is empty %}
        KTAppUserListDatatable.init('requests');
    {% else %}
        KTAppUserListDatatable.init('{{this.param.type}}');

        if('{{this.param.type}}' == 'manifest'){
            \$('#addNew').addClass('kt-hidden');
            \$('#sendAll').addClass('kt-hidden');
            \$('#importNew').addClass('kt-hidden');
            \$('#createManifest').addClass('kt-hidden');
            \$('#kt_subheader_group_actions_filter_change').addClass('kt-hidden');
        }else if('{{this.param.type}}' == 'saved'){
            \$('#sendAll').removeClass('kt-hidden');
        }else{
            \$('#addNew').removeClass('kt-hidden');
            \$('#importNew').removeClass('kt-hidden');
            \$('#sendAll').addClass('kt-hidden');
            \$('#createManifest').removeClass('kt-hidden');
        }
    {% endif %}

    \$('body').on('click', '#car', function(){
        if(\$(this).is(\":checked\")){
            \$('.car_container').removeClass('kt-hidden');
            \$('.employee_container').addClass('kt-hidden');
        }else{
            \$('.employee_container').removeClass('kt-hidden');
            \$('.car_container').addClass('kt-hidden');
        }
    });
    \$('body').on('click', 'a.nav-link',function(){
        \$('.kt_subheader_filter_form button').removeClass('active');
        \$(\"#filter_selected\").html('');
        window.history.pushState(null, null, '{{url(currentLang~\"/dashboard/shipments\")}}/'+\$(this).attr('href').replace('#',''));
        if(\$(this).attr('href').replace('#','') == 'saved'){
            \$('#kt_subheader h3.kt-subheader__title').html('{{\"Saved Shipments\"|__}}');
        }else if(\$(this).attr('href').replace('#','') == 'requests'){
            \$('#kt_subheader h3.kt-subheader__title').html('{{\"Shipments Requests\"|__}}');
        }else if(\$(this).attr('href').replace('#','') == 'approved'){
            \$('#kt_subheader h3.kt-subheader__title').html('{{\"Approved Shipments\"|__}}');
        }else if(\$(this).attr('href').replace('#','') == 'assigned'){
            \$('#kt_subheader h3.kt-subheader__title').html('{{\"Assigned Shipments\"|__}}');
        }else if(\$(this).attr('href').replace('#','') == 'withdriver'){
            \$('#kt_subheader h3.kt-subheader__title').html('{{\"Shipments Delivered To Driver\"|__}}');
        }else if(\$(this).attr('href').replace('#','') == 'postponed'){
            \$('#kt_subheader h3.kt-subheader__title').html('{{\"Postponed Shipments\"|__}}');
        }else if(\$(this).attr('href').replace('#','') == 'stock'){
            \$('#kt_subheader h3.kt-subheader__title').html('{{\"In Stock\"|__}}');
        }else if(\$(this).attr('href').replace('#','') == 'delivered'){
            \$('#kt_subheader h3.kt-subheader__title').html('{{\"Delivered\"|__}}');
        }else if(\$(this).attr('href').replace('#','') == 'supplied'){
            \$('#kt_subheader h3.kt-subheader__title').html('{{\"Supplied\"|__}}');
        }else if(\$(this).attr('href').replace('#','') == 'manifest'){
            \$('#kt_subheader h3.kt-subheader__title').html('{{\"Manifest\"|__}}');
        }else if(\$(this).attr('href').replace('#','') == 'all'){
            \$('#kt_subheader h3.kt-subheader__title').html('{{\"All Shipments\"|__}}');
        }

        var url = '{{url(\"dashboard/shipments\")}}/'+\$(this).attr('href').replace('#','');
        \$('.kt-menu__item.kt-menu__item--open.kt-menu__item--here.kt-menu__item--submenu .kt-menu__submenu .kt-menu__link').each(function(){
            var item = \$(this);
            var parent = item.parent().parent();
            if(item.attr('href') == url){
                parent.find('.kt-menu__item.kt-menu__item--open').removeClass('kt-menu__item--open');
                parent.find('.kt-menu__item.kt-menu__item--here').removeClass('kt-menu__item--here');
                item.parent('.kt-menu__item').addClass('kt-menu__item--open').addClass('kt-menu__item--here');
            }
        });

        KTApp.blockPage({
            overlayColor: '#000000',
            type: 'v2',
            state: 'primary',
            message: '{{\"Processing, please wait\"|__}}...'
        });
        KTAppUserListDatatable.destroy();
        KTAppUserListDatatable.init(\$(this).attr('href').replace('#',''));
        KTApp.unblockPage();

        if(\$(this).attr('href').replace('#','') == 'manifest'){
            \$('#addNew').addClass('kt-hidden');
            \$('#importNew').addClass('kt-hidden');
                \$('#sendAll').addClass('kt-hidden');
        }else if(\$(this).attr('href').replace('#','') == 'saved'){
            \$('#sendAll').removeClass('kt-hidden');
        }else{
            \$('#sendAll').addClass('kt-hidden');
            \$('#addNew').removeClass('kt-hidden');
            \$('#importNew').removeClass('kt-hidden');
        }
    });


    \$('#manifest_modal').on('click', '.btn-primary', function(e){
        var parent = \$('#manifest_modal');
        var validation = 1;
        if(validation){
            \$('#manifest_modal').modal('toggle');
            KTApp.blockPage({
                overlayColor: '#000000',
                type: 'v2',
                state: 'success',
                message: '{{\"Please wait\"|__}}...'
            });
            location.reload();
        }
    });
});
</script>
{% endput %}", "/Applications/MAMP/htdocs/test/themes/spotlayer/pages/dashboard/shipments.htm", "");
    }
}
