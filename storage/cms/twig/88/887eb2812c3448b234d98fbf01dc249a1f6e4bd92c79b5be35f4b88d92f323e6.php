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

/* /Applications/MAMP/htdocs/MainFiles--/themes/spotlayer/pages/dashboard/update-employee.htm */
class __TwigTemplate_601320df1d0c1fe78877b690b58a49e91e1d20977137252afd44c08f8cf1a552 extends \Twig\Template
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

    <!-- begin:: Aside -->
    ";
        // line 4
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("settingsmenu"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 5
        echo "    <!-- end:: Aside -->
    <!--Begin:: Inbox List-->
    <div class=\"kt-grid__item kt-grid__item--fluid    kt-portlet    kt-inbox__list kt-inbox__list--shown\" id=\"kt_inbox_list\">
        <div class=\"kt-portlet__head\">
    \t\t<div class=\"kt-portlet__head-label\">
    \t\t\t<h3 class=\"kt-portlet__head-title\">
    \t\t\t\t";
        // line 11
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 11), "title", [], "any", false, false, false, 11)]);
        echo "
    \t\t\t</h3>
    \t\t</div>
        </div>
        ";
        // line 15
        echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), ["ajax", "onSave", ["id" => "kt_form", "flash" => true, "class" => "kt_form"]]);
        echo "
            <div class=\"kt-portlet__body kt-portlet__body--fit-x kt-padding-r-20 kt-padding-l-20\">
                <div class=\"form-group form-group-last kt-hide\">
                    <div class=\"alert alert-danger kt_form_msg\" role=\"alert\">
                        <div class=\"alert-icon\"><i class=\"flaticon-warning\"></i></div>
                        <div class=\"alert-text\">
                            ";
        // line 21
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
        // line 31
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Full Name"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                    <div class=\"col-lg-9 col-xl-6\">
          \t\t\t\t\t       <input type=\"text\" class=\"form-control\" name=\"name\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "name", [], "any", false, false, false, 33), "html", null, true);
        echo "\" required />
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label class=\"col-xl-3 col-lg-3 col-form-label\">";
        // line 37
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Email"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                    <div class=\"col-lg-9 col-xl-6\">
    \t\t\t\t\t<input type=\"email\" class=\"form-control\" name=\"email\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "email", [], "any", false, false, false, 39), "html", null, true);
        echo "\" required />
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label class=\"col-xl-3 col-lg-3 col-form-label\">";
        // line 43
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Username"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                    <div class=\"col-lg-9 col-xl-6\">
    \t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"username\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "username", [], "any", false, false, false, 45), "html", null, true);
        echo "\" required />
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label class=\"col-xl-3 col-lg-3 col-form-label\">";
        // line 49
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Password"]);
        echo "</label>
                    <div class=\"col-lg-9 col-xl-6\">
    \t\t\t\t\t<input type=\"password\" class=\"form-control\" name=\"password\" />
                        <span class=\"text-muted\">";
        // line 52
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Only fill it if you need to change your password"]);
        echo "</span>
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label class=\"col-xl-3 col-lg-3 col-form-label\">";
        // line 56
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Password Confirmation"]);
        echo "</label>
                    <div class=\"col-lg-9 col-xl-6\">
    \t\t\t\t\t<input type=\"password\" class=\"form-control\" name=\"password_confirmation\" />
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label class=\"col-xl-3 col-lg-3 col-form-label\">";
        // line 62
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Mobile Number"]);
        echo "</label>
                    <div class=\"col-lg-9 col-xl-6\">
    \t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"mobile\"  value=\"";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "mobile", [], "any", false, false, false, 64), "html", null, true);
        echo "\"/>
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label class=\"col-xl-3 col-lg-3 col-form-label\">";
        // line 68
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Phone Number"]);
        echo "</label>
                    <div class=\"col-lg-9 col-xl-6\">
    \t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"phone\"  value=\"";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "phone", [], "any", false, false, false, 70), "html", null, true);
        echo "\"/>
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label class=\"col-xl-3 col-lg-3 col-form-label\">";
        // line 74
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Country"]);
        echo "</label>
                    <div class=\"col-lg-9 col-xl-6\">
                        <select class=\"form-control\" name=\"country_id\" id=\"country_id\" data-live-search=\"true\">
                            <option data-hidden=\"true\"></option>
                            ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 79
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["country"], "id", [], "any", false, false, false, 79), "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "country_id", [], "any", false, false, false, 79) == twig_get_attribute($this->env, $this->source, $context["country"], "id", [], "any", false, false, false, 79))) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 79), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "                        </select>
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label class=\"col-xl-3 col-lg-3 col-form-label\">";
        // line 85
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["State"]);
        echo "</label>
                    <div class=\"col-lg-9 col-xl-6\">
                        <select class=\"form-control\" name=\"state_id\" id=\"state_id\" data-live-search=\"true\" ";
        // line 87
        if ((null === twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "country_id", [], "any", false, false, false, 87))) {
            echo " title=\"";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select country first"]);
            echo "\" ";
        }
        echo ">
                            <option data-hidden=\"true\"></option>
                            ";
        // line 89
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["getStates"] ?? null), "data", [0 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "state_id", [], "any", false, false, false, 89), 1 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "country_id", [], "any", false, false, false, 89)], "method", false, false, false, 89), "html", null, true);
        echo "
                        </select>
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label class=\"col-xl-3 col-lg-3 col-form-label\">";
        // line 94
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Postal Code"]);
        echo "</label>
                    <div class=\"col-lg-9 col-xl-6\">
    \t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"zip\"  value=\"";
        // line 96
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "zip", [], "any", false, false, false, 96), "html", null, true);
        echo "\"/>
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label class=\"col-xl-3 col-lg-3 col-form-label\">";
        // line 100
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["City"]);
        echo "</label>
                    <div class=\"col-lg-9 col-xl-6\">
                        <select class=\"form-control\" name=\"city\" id=\"city_id\" data-live-search=\"true\" ";
        // line 102
        if ((null === twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "state_id", [], "any", false, false, false, 102))) {
            echo " title=\"";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select state first"]);
            echo "\" ";
        }
        echo ">
                            <option data-hidden=\"true\"></option>
                            ";
        // line 104
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["getCities"] ?? null), "data", [0 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "city_id", [], "any", false, false, false, 104), 1 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "state_id", [], "any", false, false, false, 104)], "method", false, false, false, 104), "html", null, true);
        echo "
                        </select>
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label class=\"col-xl-3 col-lg-3 col-form-label\">";
        // line 109
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Street Address"]);
        echo "</label>
                    <div class=\"col-lg-9 col-xl-6\">
    \t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"street_addr\"  value=\"";
        // line 111
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "street_addr", [], "any", false, false, false, 111), "html", null, true);
        echo "\"/>
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label class=\"col-xl-3 col-lg-3 col-form-label\">";
        // line 115
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Role"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                    <div class=\"col-lg-9 col-xl-6\">
                        <select class=\"form-control\" name=\"role_id\" id=\"role_id\" data-live-search=\"true\" required>
                            <option data-hidden=\"true\"></option>
                            ";
        // line 119
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["roles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 120
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["role"], "id", [], "any", false, false, false, 120), "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "role_id", [], "any", false, false, false, 120) == twig_get_attribute($this->env, $this->source, $context["role"], "id", [], "any", false, false, false, 120))) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["role"], "name", [], "any", false, false, false, 120), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        echo "                        </select>
                    </div>
                </div>
                <div class=\"form-group row employee_selected ";
        // line 125
        if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "role_id", [], "any", false, false, false, 125) != 4)) {
            echo "kt-hidden";
        }
        echo " \">
                    <label class=\"col-xl-3 col-lg-3 col-form-label\"></label>
                    <div class=\"col-lg-9 col-xl-6\">
                        <div class=\"kt-checkbox-single\">
                            <label class=\"kt-checkbox\">
                                <input type=\"checkbox\" name=\"is_superuser\" ";
        // line 130
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "is_superuser", [], "any", false, false, false, 130)) {
            echo "checked";
        }
        echo " value=\"1\"> ";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Is Supervisor?"]);
        echo "
                                <span></span>
                            </label>
                        </div>
                        <span class=\"text-muted\">";
        // line 134
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Check if you need this user see every data in the modules that he has permission on"]);
        echo "</span>
                    </div>
                </div>
                <div class=\"form-group  row employee_selected ";
        // line 137
        if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "role_id", [], "any", false, false, false, 137) != 4)) {
            echo "kt-hidden";
        }
        echo "\">
                    <label class=\"col-xl-3 col-lg-3 col-form-label\"></label>
                    <div class=\"col-lg-9 col-xl-6\">
                        <div class=\"kt-checkbox-single\">
                            <label class=\"kt-checkbox\">
                                <input type=\"checkbox\" name=\"driver\" ";
        // line 142
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "driver", [], "any", false, false, false, 142)) {
            echo "checked";
        }
        echo " value=\"1\"> ";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Is a Driver?"]);
        echo "
                                <span></span>
                            </label>
                        </div>
                        <span class=\"text-muted\">";
        // line 146
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Check if you need this user to be assigned to a car, you can assign it later from cars definition page"]);
        echo "</span>
                    </div>
                </div>
                <div class=\"form-group row employee_selected ";
        // line 149
        if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "role_id", [], "any", false, false, false, 149) != 4)) {
            echo "kt-hidden";
        }
        echo "\">
                    <label class=\"col-xl-3 col-lg-3 col-form-label\">";
        // line 150
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Branch"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                    <div class=\"col-lg-9 col-xl-6\">
                        <select class=\"form-control\" name=\"office_id\" data-live-search=\"true\" required>
                            <option data-hidden=\"true\"></option>
                            ";
        // line 154
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["offices"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["office"]) {
            // line 155
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["office"], "id", [], "any", false, false, false, 155), "html", null, true);
            echo "\"  ";
            if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "office", [], "any", false, false, false, 155)) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["office"], "name", [], "any", false, false, false, 155), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['office'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 157
        echo "                        </select>
                    </div>
                </div>
                <div class=\"form-group row employee_selected not_employee_selected ";
        // line 160
        if (((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "role_id", [], "any", false, false, false, 160) != 4) || (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "role_id", [], "any", false, false, false, 160) != 3))) {
            echo "kt-hidden";
        }
        echo "\">
                    <label class=\"col-xl-3 col-lg-3 col-form-label\">";
        // line 161
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Departments"]);
        echo "</label>
                    <div class=\"col-lg-9 col-xl-6\">
                        <select class=\"form-control\" name=\"groups[]\" multiple data-live-search=\"true\">
                            <option data-hidden=\"true\"></option>
                            ";
        // line 165
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 166
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "id", [], "any", false, false, false, 166), "html", null, true);
            echo "\" ";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["group"], "id", [], "any", false, false, false, 166), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "groups", [], "any", false, false, false, 166), "pluck", [0 => "id"], "method", false, false, false, 166))) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "name", [], "any", false, false, false, 166), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 168
        echo "                        </select>
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label class=\"col-xl-12 col-form-label\">";
        // line 172
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Permissions"]);
        echo "</label>
                    <div class=\"col-lg-12 table-responsive\">
                        <table class=\"table\">
                            <thead class=\"thead-light\">
                                <tr>
                                    <th class=\"text-center\"></th>
                                    <th class=\"text-center\">
                                        <label class=\"kt-font-bold\">";
        // line 179
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Create"]);
        echo "<span></span></label>
                                        <label class=\"kt-checkbox kt-checkbox--state-success\"><input type=\"checkbox\" class=\"check_all check_all_c\" value=\"c\">";
        // line 180
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Select All"]);
        echo "<span></span></label>
                                    </th>
                                    <th class=\"text-center\">
                                        <label class=\"kt-font-bold\">";
        // line 183
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Read"]);
        echo "<span></span></label>
                                        <label class=\"kt-checkbox kt-checkbox--state-success\"><input type=\"checkbox\" class=\"check_all check_all_r\" value=\"r\">";
        // line 184
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Select All"]);
        echo "<span></span></label>
                                    </th>
                                    <th class=\"text-center\">
                                        <label class=\"kt-font-bold\">";
        // line 187
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Edit"]);
        echo "<span></span></label>
                                        <label class=\"kt-checkbox kt-checkbox--state-success\"><input type=\"checkbox\" class=\"check_all check_all_u\" value=\"u\">";
        // line 188
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Select All"]);
        echo "<span></span></label>
                                    </th>
                                    <th class=\"text-center\">
                                        <label class=\"kt-font-bold\">";
        // line 191
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delete"]);
        echo "<span></span></label>
                                        <label class=\"kt-checkbox kt-checkbox--state-success\"><input type=\"checkbox\" class=\"check_all check_all_d\" value=\"d\">";
        // line 192
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Select All"]);
        echo "<span></span></label>
                                    </th>
                                    <th class=\"text-center\"></th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 198
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["permissions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
            // line 199
            echo "
                                    ";
            // line 200
            $context["state"] = "";
            // line 201
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "user_permissions", [], "any", false, false, false, 201));
            foreach ($context['_seq'] as $context["_key"] => $context["user_permissions"]) {
                // line 202
                echo "                                        ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user_permissions"], "pivot", [], "any", false, false, false, 202), "permission_id", [], "any", false, false, false, 202) == twig_get_attribute($this->env, $this->source, $context["permission"], "id", [], "any", false, false, false, 202))) {
                    // line 203
                    echo "                                            ";
                    $context["state"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user_permissions"], "pivot", [], "any", false, false, false, 203), "permission_state", [], "any", false, false, false, 203);
                    // line 204
                    echo "                                        ";
                }
                // line 205
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user_permissions'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 206
            echo "                                    <tr class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["permission"], "id", [], "any", false, false, false, 206), "html", null, true);
            echo "\">
                                        <td class=\"form-group\">
                                            <label class=\"control-label\" for=\"permission_";
            // line 208
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["permission"], "id", [], "any", false, false, false, 208), "html", null, true);
            echo "\">
                                                <b>";
            // line 209
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["permission"], "name", [], "any", false, false, false, 209)]);
            echo "</b> <br />
                                                ";
            // line 210
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["permission"], "description", [], "any", false, false, false, 210)]);
            echo "
                                            </label>
                                        </td>


                                        ";
            // line 215
            if (twig_in_filter("c", twig_get_attribute($this->env, $this->source, $context["permission"], "type", [], "any", false, false, false, 215))) {
                // line 216
                echo "                                            <td>
                                                <div class=\"icheck text-center\">
                                                    <label class=\"kt-checkbox kt-checkbox--solid kt-checkbox--state-success\"><input type=\"checkbox\" class=\"check_c\" value=\"c\" name=\"permissions[";
                // line 218
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["permission"], "id", [], "any", false, false, false, 218), "html", null, true);
                echo "][]\"  id=\"permission_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["permission"], "id", [], "any", false, false, false, 218), "html", null, true);
                echo "_c\"  ";
                if (twig_in_filter("c", ($context["state"] ?? null))) {
                    echo "checked";
                }
                echo ">";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Create"]);
                echo "<span></span></label>
                                                </div>
                                            </td>
                                        ";
            }
            // line 222
            echo "                                        ";
            if (twig_in_filter("r", twig_get_attribute($this->env, $this->source, $context["permission"], "type", [], "any", false, false, false, 222))) {
                // line 223
                echo "                                            <td>
                                                <div class=\"icheck text-center\">
                                                    <label class=\"kt-checkbox kt-checkbox--solid kt-checkbox--state-success\"><input type=\"checkbox\" class=\"check_r\" value=\"r\" name=\"permissions[";
                // line 225
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["permission"], "id", [], "any", false, false, false, 225), "html", null, true);
                echo "][]\"  id=\"permission_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["permission"], "id", [], "any", false, false, false, 225), "html", null, true);
                echo "_r\"   ";
                if (twig_in_filter("r", ($context["state"] ?? null))) {
                    echo "checked";
                }
                echo ">";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Read"]);
                echo "<span></span></label>
                                                </div>
                                            </td>
                                        ";
            }
            // line 229
            echo "                                        ";
            if (twig_in_filter("u", twig_get_attribute($this->env, $this->source, $context["permission"], "type", [], "any", false, false, false, 229))) {
                // line 230
                echo "                                            <td>
                                                <div class=\"icheck text-center\">
                                                    <label class=\"kt-checkbox kt-checkbox--solid kt-checkbox--state-success\"><input type=\"checkbox\" class=\"check_u\" value=\"u\" name=\"permissions[";
                // line 232
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["permission"], "id", [], "any", false, false, false, 232), "html", null, true);
                echo "][]\"  id=\"permission_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["permission"], "id", [], "any", false, false, false, 232), "html", null, true);
                echo "_u\"   ";
                if (twig_in_filter("u", ($context["state"] ?? null))) {
                    echo "checked";
                }
                echo ">";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Update"]);
                echo "<span></span></label>
                                                </div>
                                            </td>
                                        ";
            }
            // line 236
            echo "                                        ";
            if (twig_in_filter("d", twig_get_attribute($this->env, $this->source, $context["permission"], "type", [], "any", false, false, false, 236))) {
                // line 237
                echo "                                            <td>
                                                <div class=\"icheck text-center\">
                                                    <label class=\"kt-checkbox kt-checkbox--solid kt-checkbox--state-success\"><input type=\"checkbox\" class=\"check_d\" value=\"d\" name=\"permissions[";
                // line 239
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["permission"], "id", [], "any", false, false, false, 239), "html", null, true);
                echo "][]\"  id=\"permission_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["permission"], "id", [], "any", false, false, false, 239), "html", null, true);
                echo "_d\"   ";
                if (twig_in_filter("d", ($context["state"] ?? null))) {
                    echo "checked";
                }
                echo ">";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delete"]);
                echo "<span></span></label>
                                                </div>
                                            </td>
                                        ";
            }
            // line 243
            echo "                                        <td class=\"text-center\">
                                            <label class=\"kt-checkbox kt-checkbox--state-success\"><input type=\"checkbox\" class=\"check_row\" value=\"crud\">";
            // line 244
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["All"]);
            echo "<span></span></label>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 248
        echo "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    \t\t<div class=\"kt-portlet__foot\">
    \t\t\t<div class=\"row\">
    \t\t\t\t<div class=\"col-lg-8\">
                    </div>
    \t\t\t\t<div class=\"col-lg-4\">
    \t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">";
        // line 258
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Save"]);
        echo "</button>
    \t\t\t\t\t<span class=\"kt-margin-left-10\">";
        // line 259
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["or"]);
        echo " <a href=\"";
        echo url("dashboard/settings");
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 259), "child_of_page", [], "any", false, false, false, 259), "html", null, true);
        echo "\" class=\"kt-link\">";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cancel"]);
        echo "</a></span>
    \t\t\t\t</div>
    \t\t\t</div>
    \t\t</div>
    \t";
        // line 263
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
        echo "
    </div>
</div>

";
        // line 267
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 268
        echo "<script type=\"text/javascript\">
    \$( \".kt_form\" ).validate({
        ignore: \":hidden\",
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

    \$('input.check_row').on('change', function(event) {
        if (\$(this).is(':checked')) {
            \$(this).parent().parent().parent().find('input').prop('checked', true);
        } else {
            \$(this).parent().parent().parent().find('input').prop('checked', false);
        }
    });

    \$('input.check_c').on('change', function(event){
        if(\$('input.check_c').filter(':checked').length == \$('input.check_c').length) {
            \$('input.check_all_c').prop('checked', 'checked');
        } else {
            \$('input.check_all_c').removeProp('checked');
        }
    });
    \$('input.check_r').on('change', function(event){
        if(\$('input.check_r').filter(':checked').length == \$('input.check_r').length) {
            \$('input.check_all_r').prop('checked', 'checked');
        } else {
            \$('input.check_all_r').removeProp('checked');
        }
    });
    \$('input.check_u').on('change', function(event){
        if(\$('input.check_u').filter(':checked').length == \$('input.check_u').length) {
            \$('input.check_all_u').prop('checked', 'checked');
        } else {
            \$('input.check_all_u').removeProp('checked');
        }
    });
    \$('input.check_d').on('change', function(event){
        if(\$('input.check_d').filter(':checked').length == \$('input.check_d').length) {
            \$('input.check_all_d').prop('checked', 'checked');
        } else {
            \$('input.check_all_d').removeProp('checked');
        }
    });

    \$('body').on('changed.bs.select', '#country_id', function(e, clickedIndex, newValue, oldValue){
        var selected = \$(e.currentTarget).val();
        if(selected != ''){
            \$.request('onListstates', {
                data: {id: selected},
                success: function(data) {
                    \$('#state_id').selectpicker(\"destroy\");
                    \$('#state_id').attr('title', '";
        // line 342
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Nothing Selected"]);
        echo "');
                    \$('#state_id').html(data.html);
                    \$('#state_id').selectpicker(\"refresh\");
                }
            });
        }
    });
    \$('body').on('changed.bs.select', '#state_id', function(e, clickedIndex, newValue, oldValue){
        var selected = \$(e.currentTarget).val();
        if(selected != ''){
            \$.request('onListcities', {
                data: {id: selected},
                success: function(data) {
                    \$('#city_id').selectpicker(\"destroy\");
                    \$('#city_id').attr('title', '";
        // line 356
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Nothing Selected"]);
        echo "');
                    \$('#city_id').html(data.html);
                    \$('#city_id').selectpicker(\"refresh\");
                }
            });
        }
    });
    \$('body').on('changed.bs.select', '#role_id', function(e, clickedIndex, newValue, oldValue){
        var selected = \$(e.currentTarget).val();
        if(selected != ''){
            if(selected == 4){
                \$('.employee_selected').removeClass('kt-hidden');
            }else if(selected == 3){
                \$('.employee_selected').addClass('kt-hidden');
                \$('.not_employee_selected').removeClass('kt-hidden');
            }else{
                \$('.employee_selected').addClass('kt-hidden');
            }
        }
    });
</script>
";
        // line 267
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/MainFiles--/themes/spotlayer/pages/dashboard/update-employee.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  784 => 267,  760 => 356,  743 => 342,  667 => 268,  665 => 267,  658 => 263,  645 => 259,  641 => 258,  629 => 248,  619 => 244,  616 => 243,  601 => 239,  597 => 237,  594 => 236,  579 => 232,  575 => 230,  572 => 229,  557 => 225,  553 => 223,  550 => 222,  535 => 218,  531 => 216,  529 => 215,  521 => 210,  517 => 209,  513 => 208,  507 => 206,  501 => 205,  498 => 204,  495 => 203,  492 => 202,  487 => 201,  485 => 200,  482 => 199,  478 => 198,  469 => 192,  465 => 191,  459 => 188,  455 => 187,  449 => 184,  445 => 183,  439 => 180,  435 => 179,  425 => 172,  419 => 168,  404 => 166,  400 => 165,  393 => 161,  387 => 160,  382 => 157,  367 => 155,  363 => 154,  356 => 150,  350 => 149,  344 => 146,  333 => 142,  323 => 137,  317 => 134,  306 => 130,  296 => 125,  291 => 122,  276 => 120,  272 => 119,  265 => 115,  258 => 111,  253 => 109,  245 => 104,  236 => 102,  231 => 100,  224 => 96,  219 => 94,  211 => 89,  202 => 87,  197 => 85,  191 => 81,  176 => 79,  172 => 78,  165 => 74,  158 => 70,  153 => 68,  146 => 64,  141 => 62,  132 => 56,  125 => 52,  119 => 49,  112 => 45,  107 => 43,  100 => 39,  95 => 37,  88 => 33,  83 => 31,  70 => 21,  61 => 15,  54 => 11,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"kt-grid kt-grid--desktop kt-grid--ver-desktop  kt-inbox\" id=\"kt_inbox\">

    <!-- begin:: Aside -->
    {% partial 'settingsmenu' %}
    <!-- end:: Aside -->
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
          \t\t\t\t\t       <input type=\"text\" class=\"form-control\" name=\"name\" value=\"{{item.name}}\" required />
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
                    <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Password'|__}}</label>
                    <div class=\"col-lg-9 col-xl-6\">
    \t\t\t\t\t<input type=\"password\" class=\"form-control\" name=\"password\" />
                        <span class=\"text-muted\">{{'Only fill it if you need to change your password'|__}}</span>
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Password Confirmation'|__}}</label>
                    <div class=\"col-lg-9 col-xl-6\">
    \t\t\t\t\t<input type=\"password\" class=\"form-control\" name=\"password_confirmation\" />
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Mobile Number'|__}}</label>
                    <div class=\"col-lg-9 col-xl-6\">
    \t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"mobile\"  value=\"{{item.mobile}}\"/>
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Phone Number'|__}}</label>
                    <div class=\"col-lg-9 col-xl-6\">
    \t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"phone\"  value=\"{{item.phone}}\"/>
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Country'|__}}</label>
                    <div class=\"col-lg-9 col-xl-6\">
                        <select class=\"form-control\" name=\"country_id\" id=\"country_id\" data-live-search=\"true\">
                            <option data-hidden=\"true\"></option>
                            {% for country in countries %}
                                <option value=\"{{country.id}}\" {% if item.country_id == country.id %}selected{% endif %}>{{ country.name }}</option>
                            {% endfor %}
                        </select>
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'State'|__}}</label>
                    <div class=\"col-lg-9 col-xl-6\">
                        <select class=\"form-control\" name=\"state_id\" id=\"state_id\" data-live-search=\"true\" {% if item.country_id is null %} title=\"{{'Please select country first'|__}}\" {% endif %}>
                            <option data-hidden=\"true\"></option>
                            {{getStates.data(item.state_id,item.country_id)}}
                        </select>
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Postal Code'|__}}</label>
                    <div class=\"col-lg-9 col-xl-6\">
    \t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"zip\"  value=\"{{item.zip}}\"/>
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'City'|__}}</label>
                    <div class=\"col-lg-9 col-xl-6\">
                        <select class=\"form-control\" name=\"city\" id=\"city_id\" data-live-search=\"true\" {% if item.state_id is null %} title=\"{{'Please select state first'|__}}\" {% endif %}>
                            <option data-hidden=\"true\"></option>
                            {{getCities.data(item.city_id,item.state_id)}}
                        </select>
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Street Address'|__}}</label>
                    <div class=\"col-lg-9 col-xl-6\">
    \t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"street_addr\"  value=\"{{item.street_addr}}\"/>
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Role'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                    <div class=\"col-lg-9 col-xl-6\">
                        <select class=\"form-control\" name=\"role_id\" id=\"role_id\" data-live-search=\"true\" required>
                            <option data-hidden=\"true\"></option>
                            {% for role in roles %}
                                <option value=\"{{role.id}}\" {% if item.role_id == role.id %}selected{% endif %}>{{ role.name }}</option>
                            {% endfor %}
                        </select>
                    </div>
                </div>
                <div class=\"form-group row employee_selected {% if item.role_id != 4 %}kt-hidden{% endif %} \">
                    <label class=\"col-xl-3 col-lg-3 col-form-label\"></label>
                    <div class=\"col-lg-9 col-xl-6\">
                        <div class=\"kt-checkbox-single\">
                            <label class=\"kt-checkbox\">
                                <input type=\"checkbox\" name=\"is_superuser\" {% if item.is_superuser %}checked{% endif %} value=\"1\"> {{'Is Supervisor?'|__}}
                                <span></span>
                            </label>
                        </div>
                        <span class=\"text-muted\">{{'Check if you need this user see every data in the modules that he has permission on'|__}}</span>
                    </div>
                </div>
                <div class=\"form-group  row employee_selected {% if item.role_id != 4 %}kt-hidden{% endif %}\">
                    <label class=\"col-xl-3 col-lg-3 col-form-label\"></label>
                    <div class=\"col-lg-9 col-xl-6\">
                        <div class=\"kt-checkbox-single\">
                            <label class=\"kt-checkbox\">
                                <input type=\"checkbox\" name=\"driver\" {% if item.driver %}checked{% endif %} value=\"1\"> {{'Is a Driver?'|__}}
                                <span></span>
                            </label>
                        </div>
                        <span class=\"text-muted\">{{'Check if you need this user to be assigned to a car, you can assign it later from cars definition page'|__}}</span>
                    </div>
                </div>
                <div class=\"form-group row employee_selected {% if item.role_id != 4 %}kt-hidden{% endif %}\">
                    <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Branch'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                    <div class=\"col-lg-9 col-xl-6\">
                        <select class=\"form-control\" name=\"office_id\" data-live-search=\"true\" required>
                            <option data-hidden=\"true\"></option>
                            {% for office in offices %}
                                <option value=\"{{office.id}}\"  {% if item.office %}selected{% endif %}>{{ office.name }}</option>
                            {% endfor %}
                        </select>
                    </div>
                </div>
                <div class=\"form-group row employee_selected not_employee_selected {% if item.role_id != 4 or item.role_id != 3 %}kt-hidden{% endif %}\">
                    <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Departments'|__}}</label>
                    <div class=\"col-lg-9 col-xl-6\">
                        <select class=\"form-control\" name=\"groups[]\" multiple data-live-search=\"true\">
                            <option data-hidden=\"true\"></option>
                            {% for group in groups %}
                                <option value=\"{{group.id}}\" {% if group.id in item.groups.pluck('id') %}selected{% endif %}>{{ group.name }}</option>
                            {% endfor %}
                        </select>
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label class=\"col-xl-12 col-form-label\">{{'Permissions'|__}}</label>
                    <div class=\"col-lg-12 table-responsive\">
                        <table class=\"table\">
                            <thead class=\"thead-light\">
                                <tr>
                                    <th class=\"text-center\"></th>
                                    <th class=\"text-center\">
                                        <label class=\"kt-font-bold\">{{'Create'|__}}<span></span></label>
                                        <label class=\"kt-checkbox kt-checkbox--state-success\"><input type=\"checkbox\" class=\"check_all check_all_c\" value=\"c\">{{'Select All'|__}}<span></span></label>
                                    </th>
                                    <th class=\"text-center\">
                                        <label class=\"kt-font-bold\">{{'Read'|__}}<span></span></label>
                                        <label class=\"kt-checkbox kt-checkbox--state-success\"><input type=\"checkbox\" class=\"check_all check_all_r\" value=\"r\">{{'Select All'|__}}<span></span></label>
                                    </th>
                                    <th class=\"text-center\">
                                        <label class=\"kt-font-bold\">{{'Edit'|__}}<span></span></label>
                                        <label class=\"kt-checkbox kt-checkbox--state-success\"><input type=\"checkbox\" class=\"check_all check_all_u\" value=\"u\">{{'Select All'|__}}<span></span></label>
                                    </th>
                                    <th class=\"text-center\">
                                        <label class=\"kt-font-bold\">{{'Delete'|__}}<span></span></label>
                                        <label class=\"kt-checkbox kt-checkbox--state-success\"><input type=\"checkbox\" class=\"check_all check_all_d\" value=\"d\">{{'Select All'|__}}<span></span></label>
                                    </th>
                                    <th class=\"text-center\"></th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for permission in permissions %}

                                    {% set state = '' %}
                                    {% for user_permissions in item.user_permissions %}
                                        {% if user_permissions.pivot.permission_id == permission.id %}
                                            {% set state = user_permissions.pivot.permission_state %}
                                        {% endif %}
                                    {% endfor %}
                                    <tr class=\"{{permission.id}}\">
                                        <td class=\"form-group\">
                                            <label class=\"control-label\" for=\"permission_{{permission.id}}\">
                                                <b>{{permission.name|__}}</b> <br />
                                                {{permission.description|__}}
                                            </label>
                                        </td>


                                        {% if 'c' in permission.type %}
                                            <td>
                                                <div class=\"icheck text-center\">
                                                    <label class=\"kt-checkbox kt-checkbox--solid kt-checkbox--state-success\"><input type=\"checkbox\" class=\"check_c\" value=\"c\" name=\"permissions[{{permission.id}}][]\"  id=\"permission_{{permission.id}}_c\"  {%if 'c' in state %}checked{% endif %}>{{'Create'|__}}<span></span></label>
                                                </div>
                                            </td>
                                        {% endif %}
                                        {% if 'r' in permission.type %}
                                            <td>
                                                <div class=\"icheck text-center\">
                                                    <label class=\"kt-checkbox kt-checkbox--solid kt-checkbox--state-success\"><input type=\"checkbox\" class=\"check_r\" value=\"r\" name=\"permissions[{{permission.id}}][]\"  id=\"permission_{{permission.id}}_r\"   {%if 'r' in state %}checked{% endif %}>{{'Read'|__}}<span></span></label>
                                                </div>
                                            </td>
                                        {% endif %}
                                        {% if 'u' in permission.type %}
                                            <td>
                                                <div class=\"icheck text-center\">
                                                    <label class=\"kt-checkbox kt-checkbox--solid kt-checkbox--state-success\"><input type=\"checkbox\" class=\"check_u\" value=\"u\" name=\"permissions[{{permission.id}}][]\"  id=\"permission_{{permission.id}}_u\"   {%if 'u' in state %}checked{% endif %}>{{'Update'|__}}<span></span></label>
                                                </div>
                                            </td>
                                        {% endif %}
                                        {% if 'd' in permission.type %}
                                            <td>
                                                <div class=\"icheck text-center\">
                                                    <label class=\"kt-checkbox kt-checkbox--solid kt-checkbox--state-success\"><input type=\"checkbox\" class=\"check_d\" value=\"d\" name=\"permissions[{{permission.id}}][]\"  id=\"permission_{{permission.id}}_d\"   {%if 'd' in state %}checked{% endif %}>{{'Delete'|__}}<span></span></label>
                                                </div>
                                            </td>
                                        {% endif %}
                                        <td class=\"text-center\">
                                            <label class=\"kt-checkbox kt-checkbox--state-success\"><input type=\"checkbox\" class=\"check_row\" value=\"crud\">{{'All'|__}}<span></span></label>
                                        </td>
                                    </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    \t\t<div class=\"kt-portlet__foot\">
    \t\t\t<div class=\"row\">
    \t\t\t\t<div class=\"col-lg-8\">
                    </div>
    \t\t\t\t<div class=\"col-lg-4\">
    \t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">{{'Save'|__}}</button>
    \t\t\t\t\t<span class=\"kt-margin-left-10\">{{'or'|__}} <a href=\"{{url('dashboard/settings')}}/{{this.page.child_of_page}}\" class=\"kt-link\">{{'Cancel'|__}}</a></span>
    \t\t\t\t</div>
    \t\t\t</div>
    \t\t</div>
    \t{{ form_close() }}
    </div>
</div>

{% put scripts %}
<script type=\"text/javascript\">
    \$( \".kt_form\" ).validate({
        ignore: \":hidden\",
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

    \$('input.check_row').on('change', function(event) {
        if (\$(this).is(':checked')) {
            \$(this).parent().parent().parent().find('input').prop('checked', true);
        } else {
            \$(this).parent().parent().parent().find('input').prop('checked', false);
        }
    });

    \$('input.check_c').on('change', function(event){
        if(\$('input.check_c').filter(':checked').length == \$('input.check_c').length) {
            \$('input.check_all_c').prop('checked', 'checked');
        } else {
            \$('input.check_all_c').removeProp('checked');
        }
    });
    \$('input.check_r').on('change', function(event){
        if(\$('input.check_r').filter(':checked').length == \$('input.check_r').length) {
            \$('input.check_all_r').prop('checked', 'checked');
        } else {
            \$('input.check_all_r').removeProp('checked');
        }
    });
    \$('input.check_u').on('change', function(event){
        if(\$('input.check_u').filter(':checked').length == \$('input.check_u').length) {
            \$('input.check_all_u').prop('checked', 'checked');
        } else {
            \$('input.check_all_u').removeProp('checked');
        }
    });
    \$('input.check_d').on('change', function(event){
        if(\$('input.check_d').filter(':checked').length == \$('input.check_d').length) {
            \$('input.check_all_d').prop('checked', 'checked');
        } else {
            \$('input.check_all_d').removeProp('checked');
        }
    });

    \$('body').on('changed.bs.select', '#country_id', function(e, clickedIndex, newValue, oldValue){
        var selected = \$(e.currentTarget).val();
        if(selected != ''){
            \$.request('onListstates', {
                data: {id: selected},
                success: function(data) {
                    \$('#state_id').selectpicker(\"destroy\");
                    \$('#state_id').attr('title', '{{\"Nothing Selected\"|__}}');
                    \$('#state_id').html(data.html);
                    \$('#state_id').selectpicker(\"refresh\");
                }
            });
        }
    });
    \$('body').on('changed.bs.select', '#state_id', function(e, clickedIndex, newValue, oldValue){
        var selected = \$(e.currentTarget).val();
        if(selected != ''){
            \$.request('onListcities', {
                data: {id: selected},
                success: function(data) {
                    \$('#city_id').selectpicker(\"destroy\");
                    \$('#city_id').attr('title', '{{\"Nothing Selected\"|__}}');
                    \$('#city_id').html(data.html);
                    \$('#city_id').selectpicker(\"refresh\");
                }
            });
        }
    });
    \$('body').on('changed.bs.select', '#role_id', function(e, clickedIndex, newValue, oldValue){
        var selected = \$(e.currentTarget).val();
        if(selected != ''){
            if(selected == 4){
                \$('.employee_selected').removeClass('kt-hidden');
            }else if(selected == 3){
                \$('.employee_selected').addClass('kt-hidden');
                \$('.not_employee_selected').removeClass('kt-hidden');
            }else{
                \$('.employee_selected').addClass('kt-hidden');
            }
        }
    });
</script>
{% endput %}", "/Applications/MAMP/htdocs/MainFiles--/themes/spotlayer/pages/dashboard/update-employee.htm", "");
    }
}
