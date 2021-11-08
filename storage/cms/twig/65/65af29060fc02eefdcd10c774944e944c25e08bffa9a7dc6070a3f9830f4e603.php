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

/* /Applications/MAMP/htdocs/MainFiles--/themes/spotlayer/pages/dashboard/create-employee.htm */
class __TwigTemplate_aaa7963ebffdbe9c5059cfc7b88e42c2c5d60c431a0126e01d85e130e8575966 extends \Twig\Template
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
            <div class=\"kt-portlet__body kt-portlet__body--fit-x kt-padding-l-20 kt-padding-r-20\">
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
    \t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"name\" required />
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label class=\"col-xl-3 col-lg-3 col-form-label\">";
        // line 37
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Email"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                    <div class=\"col-lg-9 col-xl-6\">
    \t\t\t\t\t<input type=\"email\" class=\"form-control\" name=\"email\" required />
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label class=\"col-xl-3 col-lg-3 col-form-label\">";
        // line 43
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Username"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                    <div class=\"col-lg-9 col-xl-6\">
    \t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"username\" required />
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label class=\"col-xl-3 col-lg-3 col-form-label\">";
        // line 49
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Password"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                    <div class=\"col-lg-9 col-xl-6\">
    \t\t\t\t\t<input type=\"password\" class=\"form-control\" name=\"password\" required />
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label class=\"col-xl-3 col-lg-3 col-form-label\">";
        // line 55
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Password Confirmation"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                    <div class=\"col-lg-9 col-xl-6\">
    \t\t\t\t\t<input type=\"password\" class=\"form-control\" name=\"password_confirmation\" required />
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label class=\"col-xl-3 col-lg-3 col-form-label\">";
        // line 61
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Mobile Number"]);
        echo "</label>
                    <div class=\"col-lg-9 col-xl-6\">
    \t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"mobile\" />
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label class=\"col-xl-3 col-lg-3 col-form-label\">";
        // line 67
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Phone Number"]);
        echo "</label>
                    <div class=\"col-lg-9 col-xl-6\">
    \t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"phone\" />
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label class=\"col-xl-3 col-lg-3 col-form-label\">";
        // line 73
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Country"]);
        echo "</label>
                    <div class=\"col-lg-9 col-xl-6\">
                        <select class=\"form-control\" name=\"country_id\" id=\"country_id\" data-live-search=\"true\">
                            <option data-hidden=\"true\"></option>
                            ";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 78
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["country"], "id", [], "any", false, false, false, 78), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 78), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "                        </select>
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label class=\"col-xl-3 col-lg-3 col-form-label\">";
        // line 84
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["State"]);
        echo "</label>
                    <div class=\"col-lg-9 col-xl-6\">
                        <select class=\"form-control\" name=\"state_id\" id=\"state_id\" data-live-search=\"true\" title=\"";
        // line 86
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select country first"]);
        echo "\">
                            <option data-hidden=\"true\"></option>
                        </select>
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label class=\"col-xl-3 col-lg-3 col-form-label\">";
        // line 92
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["City"]);
        echo "</label>
                    <div class=\"col-lg-9 col-xl-6\">
                        <select class=\"form-control\" name=\"city\" id=\"city_id\" data-live-search=\"true\" title=\"";
        // line 94
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select state first"]);
        echo "\">
                            <option data-hidden=\"true\"></option>
                        </select>
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label class=\"col-xl-3 col-lg-3 col-form-label\">";
        // line 100
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Postal Code"]);
        echo "</label>
                    <div class=\"col-lg-9 col-xl-6\">
    \t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"zip\" />
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label class=\"col-xl-3 col-lg-3 col-form-label\">";
        // line 106
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Street Address"]);
        echo "</label>
                    <div class=\"col-lg-9 col-xl-6\">
    \t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"street_addr\" />
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label class=\"col-xl-3 col-lg-3 col-form-label\">";
        // line 112
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Role"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                    <div class=\"col-lg-9 col-xl-6\">
                        <select class=\"form-control\" name=\"role_id\" id=\"role_id\" data-live-search=\"true\" required>
                            <option data-hidden=\"true\"></option>
                            ";
        // line 116
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["roles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 117
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["role"], "id", [], "any", false, false, false, 117), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["role"], "name", [], "any", false, false, false, 117), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "                        </select>
                    </div>
                </div>
                <div class=\"form-group row employee_selected kt-hidden\">
                    <label class=\"col-xl-3 col-lg-3 col-form-label\"></label>
                    <div class=\"col-lg-9 col-xl-6\">
                        <div class=\"kt-checkbox-single\">
                            <label class=\"kt-checkbox\">
                                <input type=\"checkbox\" name=\"is_superuser\" value=\"1\"> ";
        // line 127
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Is Supervisor?"]);
        echo "
                                <span></span>
                            </label>
                        </div>
                        <span class=\"text-muted\">";
        // line 131
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Check if you need this user see every data in the modules that he has permission on inside his branch"]);
        echo "</span>
                    </div>
                </div>
                <div class=\"form-group row employee_selected kt-hidden\">
                    <label class=\"col-xl-3 col-lg-3 col-form-label\"></label>
                    <div class=\"col-lg-9 col-xl-6\">
                        <div class=\"kt-checkbox-single\">
                            <label class=\"kt-checkbox\">
                                <input type=\"checkbox\" name=\"driver\" value=\"1\"> ";
        // line 139
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Is a Driver?"]);
        echo "
                                <span></span>
                            </label>
                        </div>
                        <span class=\"text-muted\">";
        // line 143
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Check if you need this user to be assigned to a car, you can assign it later from cars definition page"]);
        echo "</span>
                    </div>
                </div>
                <div class=\"form-group row employee_selected kt-hidden\">
                    <label class=\"col-xl-3 col-lg-3 col-form-label\">";
        // line 147
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Branch"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                    <div class=\"col-lg-9 col-xl-6\">
                        <select class=\"form-control\" name=\"office_id\" data-live-search=\"true\" required>
                            <option data-hidden=\"true\"></option>
                            ";
        // line 151
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["offices"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["office"]) {
            // line 152
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["office"], "id", [], "any", false, false, false, 152), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["office"], "name", [], "any", false, false, false, 152), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['office'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 154
        echo "                        </select>
                    </div>
                </div>
                <div class=\"form-group row employee_selected not_employee_selected kt-hidden\">
                    <label class=\"col-xl-3 col-lg-3 col-form-label\">";
        // line 158
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Departments"]);
        echo "</label>
                    <div class=\"col-lg-9 col-xl-6\">
                        <select class=\"form-control\" name=\"groups[]\" multiple data-live-search=\"true\">
                            <option data-hidden=\"true\"></option>
                            ";
        // line 162
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 163
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "id", [], "any", false, false, false, 163), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "name", [], "any", false, false, false, 163), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 165
        echo "                        </select>
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label class=\"col-xl-12 col-form-label\">";
        // line 169
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Permissions"]);
        echo "</label>
                    <div class=\"col-lg-12 table-responsive\">
                        <table class=\"table\">
                            <thead class=\"thead-light\">
                                <tr>
                                    <th class=\"text-center\"></th>
                                    <th class=\"text-center\">
                                        <label class=\"kt-font-bold\">";
        // line 176
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Create"]);
        echo "<span></span></label>
                                        <label class=\"kt-checkbox kt-checkbox--state-success\"><input type=\"checkbox\" class=\"check_all check_all_c\" value=\"c\">";
        // line 177
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Select All"]);
        echo "<span></span></label>
                                    </th>
                                    <th class=\"text-center\">
                                        <label class=\"kt-font-bold\">";
        // line 180
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Read"]);
        echo "<span></span></label>
                                        <label class=\"kt-checkbox kt-checkbox--state-success\"><input type=\"checkbox\" class=\"check_all check_all_r\" value=\"r\">";
        // line 181
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Select All"]);
        echo "<span></span></label>
                                    </th>
                                    <th class=\"text-center\">
                                        <label class=\"kt-font-bold\">";
        // line 184
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Edit"]);
        echo "<span></span></label>
                                        <label class=\"kt-checkbox kt-checkbox--state-success\"><input type=\"checkbox\" class=\"check_all check_all_u\" value=\"u\">";
        // line 185
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Select All"]);
        echo "<span></span></label>
                                    </th>
                                    <th class=\"text-center\">
                                        <label class=\"kt-font-bold\">";
        // line 188
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delete"]);
        echo "<span></span></label>
                                        <label class=\"kt-checkbox kt-checkbox--state-success\"><input type=\"checkbox\" class=\"check_all check_all_d\" value=\"d\">";
        // line 189
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Select All"]);
        echo "<span></span></label>
                                    </th>
                                    <th class=\"text-center\"></th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 195
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["permissions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
            // line 196
            echo "                                    <tr class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["permission"], "id", [], "any", false, false, false, 196), "html", null, true);
            echo "\">
                                        <td class=\"form-group\">
                                            <label class=\"control-label\" for=\"permission_";
            // line 198
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["permission"], "id", [], "any", false, false, false, 198), "html", null, true);
            echo "\">
                                                <b>";
            // line 199
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["permission"], "name", [], "any", false, false, false, 199)]);
            echo "</b> <br />
                                                ";
            // line 200
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["permission"], "description", [], "any", false, false, false, 200)]);
            echo "
                                            </label>
                                        </td>

                                        ";
            // line 204
            if (twig_in_filter("c", twig_get_attribute($this->env, $this->source, $context["permission"], "type", [], "any", false, false, false, 204))) {
                // line 205
                echo "                                            <td>
                                                <div class=\"icheck text-center\">
                                                    <label class=\"kt-checkbox kt-checkbox--solid kt-checkbox--state-success\"><input type=\"checkbox\" class=\"check_c\" value=\"c\" name=\"permissions[";
                // line 207
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["permission"], "id", [], "any", false, false, false, 207), "html", null, true);
                echo "][]\"  id=\"permission_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["permission"], "id", [], "any", false, false, false, 207), "html", null, true);
                echo "_c\">";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Create"]);
                echo "<span></span></label>
                                                </div>
                                            </td>
                                        ";
            }
            // line 211
            echo "                                        ";
            if (twig_in_filter("r", twig_get_attribute($this->env, $this->source, $context["permission"], "type", [], "any", false, false, false, 211))) {
                // line 212
                echo "                                            <td>
                                                <div class=\"icheck text-center\">
                                                    <label class=\"kt-checkbox kt-checkbox--solid kt-checkbox--state-success\"><input type=\"checkbox\" class=\"check_r\" value=\"r\" name=\"permissions[";
                // line 214
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["permission"], "id", [], "any", false, false, false, 214), "html", null, true);
                echo "][]\"  id=\"permission_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["permission"], "id", [], "any", false, false, false, 214), "html", null, true);
                echo "_r\">";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Read"]);
                echo "<span></span></label>
                                                </div>
                                            </td>
                                        ";
            }
            // line 218
            echo "                                        ";
            if (twig_in_filter("u", twig_get_attribute($this->env, $this->source, $context["permission"], "type", [], "any", false, false, false, 218))) {
                // line 219
                echo "                                            <td>
                                                <div class=\"icheck text-center\">
                                                    <label class=\"kt-checkbox kt-checkbox--solid kt-checkbox--state-success\"><input type=\"checkbox\" class=\"check_u\" value=\"u\" name=\"permissions[";
                // line 221
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["permission"], "id", [], "any", false, false, false, 221), "html", null, true);
                echo "][]\"  id=\"permission_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["permission"], "id", [], "any", false, false, false, 221), "html", null, true);
                echo "_u\">";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Update"]);
                echo "<span></span></label>
                                                </div>
                                            </td>
                                        ";
            }
            // line 225
            echo "                                        ";
            if (twig_in_filter("d", twig_get_attribute($this->env, $this->source, $context["permission"], "type", [], "any", false, false, false, 225))) {
                // line 226
                echo "                                            <td>
                                                <div class=\"icheck text-center\">
                                                    <label class=\"kt-checkbox kt-checkbox--solid kt-checkbox--state-success\"><input type=\"checkbox\" class=\"check_d\" value=\"d\" name=\"permissions[";
                // line 228
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["permission"], "id", [], "any", false, false, false, 228), "html", null, true);
                echo "][]\"  id=\"permission_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["permission"], "id", [], "any", false, false, false, 228), "html", null, true);
                echo "_d\">";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delete"]);
                echo "<span></span></label>
                                                </div>
                                            </td>
                                        ";
            }
            // line 232
            echo "                                        <td class=\"text-center\">
                                            <label class=\"kt-checkbox kt-checkbox--state-success\"><input type=\"checkbox\" class=\"check_row\" value=\"crud\">";
            // line 233
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["All"]);
            echo "<span></span></label>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 237
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
        // line 247
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Save"]);
        echo "</button>
    \t\t\t\t\t<span class=\"kt-margin-left-10\">";
        // line 248
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["or"]);
        echo " <a href=\"";
        echo url("dashboard/settings");
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 248), "child_of_page", [], "any", false, false, false, 248), "html", null, true);
        echo "\" class=\"kt-link\">";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cancel"]);
        echo "</a></span>
    \t\t\t\t</div>
    \t\t\t</div>
    \t\t</div>
    \t";
        // line 252
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
        echo "
    </div>
</div>

";
        // line 256
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 257
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


    \$('input.check_all').on('change', function(event) {
        if (\$(this).is(':checked')) {
            if(\$(this).val() == 'c'){
                \$('input.check_c').prop('checked', true);
            }
            if(\$(this).val() == 'r'){
                \$('input.check_r').prop('checked', true);
            }
            if(\$(this).val() == 'u'){
                \$('input.check_u').prop('checked', true);
            }
            if(\$(this).val() == 'd'){
                \$('input.check_d').prop('checked', true);
            }
        } else {
            if(\$(this).val() == 'c'){
                \$('input.check_c').prop('checked', false);
            }
            if(\$(this).val() == 'r'){
                \$('input.check_r').prop('checked', false);
            }
            if(\$(this).val() == 'u'){
                \$('input.check_u').prop('checked', false);
            }
            if(\$(this).val() == 'd'){
                \$('input.check_d').prop('checked', false);
            }
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
        // line 362
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
        // line 376
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
        // line 256
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/MainFiles--/themes/spotlayer/pages/dashboard/create-employee.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  688 => 256,  664 => 376,  647 => 362,  540 => 257,  538 => 256,  531 => 252,  518 => 248,  514 => 247,  502 => 237,  492 => 233,  489 => 232,  478 => 228,  474 => 226,  471 => 225,  460 => 221,  456 => 219,  453 => 218,  442 => 214,  438 => 212,  435 => 211,  424 => 207,  420 => 205,  418 => 204,  411 => 200,  407 => 199,  403 => 198,  397 => 196,  393 => 195,  384 => 189,  380 => 188,  374 => 185,  370 => 184,  364 => 181,  360 => 180,  354 => 177,  350 => 176,  340 => 169,  334 => 165,  323 => 163,  319 => 162,  312 => 158,  306 => 154,  295 => 152,  291 => 151,  284 => 147,  277 => 143,  270 => 139,  259 => 131,  252 => 127,  242 => 119,  231 => 117,  227 => 116,  220 => 112,  211 => 106,  202 => 100,  193 => 94,  188 => 92,  179 => 86,  174 => 84,  168 => 80,  157 => 78,  153 => 77,  146 => 73,  137 => 67,  128 => 61,  119 => 55,  110 => 49,  101 => 43,  92 => 37,  83 => 31,  70 => 21,  61 => 15,  54 => 11,  46 => 5,  42 => 4,  37 => 1,);
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
            <div class=\"kt-portlet__body kt-portlet__body--fit-x kt-padding-l-20 kt-padding-r-20\">
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
    \t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"name\" required />
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Email'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                    <div class=\"col-lg-9 col-xl-6\">
    \t\t\t\t\t<input type=\"email\" class=\"form-control\" name=\"email\" required />
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Username'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                    <div class=\"col-lg-9 col-xl-6\">
    \t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"username\" required />
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Password'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                    <div class=\"col-lg-9 col-xl-6\">
    \t\t\t\t\t<input type=\"password\" class=\"form-control\" name=\"password\" required />
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Password Confirmation'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                    <div class=\"col-lg-9 col-xl-6\">
    \t\t\t\t\t<input type=\"password\" class=\"form-control\" name=\"password_confirmation\" required />
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Mobile Number'|__}}</label>
                    <div class=\"col-lg-9 col-xl-6\">
    \t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"mobile\" />
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Phone Number'|__}}</label>
                    <div class=\"col-lg-9 col-xl-6\">
    \t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"phone\" />
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Country'|__}}</label>
                    <div class=\"col-lg-9 col-xl-6\">
                        <select class=\"form-control\" name=\"country_id\" id=\"country_id\" data-live-search=\"true\">
                            <option data-hidden=\"true\"></option>
                            {% for country in countries %}
                                <option value=\"{{country.id}}\">{{ country.name }}</option>
                            {% endfor %}
                        </select>
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'State'|__}}</label>
                    <div class=\"col-lg-9 col-xl-6\">
                        <select class=\"form-control\" name=\"state_id\" id=\"state_id\" data-live-search=\"true\" title=\"{{'Please select country first'|__}}\">
                            <option data-hidden=\"true\"></option>
                        </select>
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'City'|__}}</label>
                    <div class=\"col-lg-9 col-xl-6\">
                        <select class=\"form-control\" name=\"city\" id=\"city_id\" data-live-search=\"true\" title=\"{{'Please select state first'|__}}\">
                            <option data-hidden=\"true\"></option>
                        </select>
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Postal Code'|__}}</label>
                    <div class=\"col-lg-9 col-xl-6\">
    \t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"zip\" />
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Street Address'|__}}</label>
                    <div class=\"col-lg-9 col-xl-6\">
    \t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"street_addr\" />
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Role'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                    <div class=\"col-lg-9 col-xl-6\">
                        <select class=\"form-control\" name=\"role_id\" id=\"role_id\" data-live-search=\"true\" required>
                            <option data-hidden=\"true\"></option>
                            {% for role in roles %}
                                <option value=\"{{role.id}}\">{{ role.name }}</option>
                            {% endfor %}
                        </select>
                    </div>
                </div>
                <div class=\"form-group row employee_selected kt-hidden\">
                    <label class=\"col-xl-3 col-lg-3 col-form-label\"></label>
                    <div class=\"col-lg-9 col-xl-6\">
                        <div class=\"kt-checkbox-single\">
                            <label class=\"kt-checkbox\">
                                <input type=\"checkbox\" name=\"is_superuser\" value=\"1\"> {{'Is Supervisor?'|__}}
                                <span></span>
                            </label>
                        </div>
                        <span class=\"text-muted\">{{'Check if you need this user see every data in the modules that he has permission on inside his branch'|__}}</span>
                    </div>
                </div>
                <div class=\"form-group row employee_selected kt-hidden\">
                    <label class=\"col-xl-3 col-lg-3 col-form-label\"></label>
                    <div class=\"col-lg-9 col-xl-6\">
                        <div class=\"kt-checkbox-single\">
                            <label class=\"kt-checkbox\">
                                <input type=\"checkbox\" name=\"driver\" value=\"1\"> {{'Is a Driver?'|__}}
                                <span></span>
                            </label>
                        </div>
                        <span class=\"text-muted\">{{'Check if you need this user to be assigned to a car, you can assign it later from cars definition page'|__}}</span>
                    </div>
                </div>
                <div class=\"form-group row employee_selected kt-hidden\">
                    <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Branch'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                    <div class=\"col-lg-9 col-xl-6\">
                        <select class=\"form-control\" name=\"office_id\" data-live-search=\"true\" required>
                            <option data-hidden=\"true\"></option>
                            {% for office in offices %}
                                <option value=\"{{office.id}}\">{{ office.name }}</option>
                            {% endfor %}
                        </select>
                    </div>
                </div>
                <div class=\"form-group row employee_selected not_employee_selected kt-hidden\">
                    <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Departments'|__}}</label>
                    <div class=\"col-lg-9 col-xl-6\">
                        <select class=\"form-control\" name=\"groups[]\" multiple data-live-search=\"true\">
                            <option data-hidden=\"true\"></option>
                            {% for group in groups %}
                                <option value=\"{{group.id}}\">{{ group.name }}</option>
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
                                                    <label class=\"kt-checkbox kt-checkbox--solid kt-checkbox--state-success\"><input type=\"checkbox\" class=\"check_c\" value=\"c\" name=\"permissions[{{permission.id}}][]\"  id=\"permission_{{permission.id}}_c\">{{'Create'|__}}<span></span></label>
                                                </div>
                                            </td>
                                        {% endif %}
                                        {% if 'r' in permission.type %}
                                            <td>
                                                <div class=\"icheck text-center\">
                                                    <label class=\"kt-checkbox kt-checkbox--solid kt-checkbox--state-success\"><input type=\"checkbox\" class=\"check_r\" value=\"r\" name=\"permissions[{{permission.id}}][]\"  id=\"permission_{{permission.id}}_r\">{{'Read'|__}}<span></span></label>
                                                </div>
                                            </td>
                                        {% endif %}
                                        {% if 'u' in permission.type %}
                                            <td>
                                                <div class=\"icheck text-center\">
                                                    <label class=\"kt-checkbox kt-checkbox--solid kt-checkbox--state-success\"><input type=\"checkbox\" class=\"check_u\" value=\"u\" name=\"permissions[{{permission.id}}][]\"  id=\"permission_{{permission.id}}_u\">{{'Update'|__}}<span></span></label>
                                                </div>
                                            </td>
                                        {% endif %}
                                        {% if 'd' in permission.type %}
                                            <td>
                                                <div class=\"icheck text-center\">
                                                    <label class=\"kt-checkbox kt-checkbox--solid kt-checkbox--state-success\"><input type=\"checkbox\" class=\"check_d\" value=\"d\" name=\"permissions[{{permission.id}}][]\"  id=\"permission_{{permission.id}}_d\">{{'Delete'|__}}<span></span></label>
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


    \$('input.check_all').on('change', function(event) {
        if (\$(this).is(':checked')) {
            if(\$(this).val() == 'c'){
                \$('input.check_c').prop('checked', true);
            }
            if(\$(this).val() == 'r'){
                \$('input.check_r').prop('checked', true);
            }
            if(\$(this).val() == 'u'){
                \$('input.check_u').prop('checked', true);
            }
            if(\$(this).val() == 'd'){
                \$('input.check_d').prop('checked', true);
            }
        } else {
            if(\$(this).val() == 'c'){
                \$('input.check_c').prop('checked', false);
            }
            if(\$(this).val() == 'r'){
                \$('input.check_r').prop('checked', false);
            }
            if(\$(this).val() == 'u'){
                \$('input.check_u').prop('checked', false);
            }
            if(\$(this).val() == 'd'){
                \$('input.check_d').prop('checked', false);
            }
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
{% endput %}", "/Applications/MAMP/htdocs/MainFiles--/themes/spotlayer/pages/dashboard/create-employee.htm", "");
    }
}
