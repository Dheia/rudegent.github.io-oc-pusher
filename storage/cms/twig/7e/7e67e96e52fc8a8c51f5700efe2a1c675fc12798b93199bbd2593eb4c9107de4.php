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

/* /Applications/MAMP/htdocs/MainFiles--/themes/spotlayer/pages/dashboard/shipment.htm */
class __TwigTemplate_00164e7f649bc129b6cde715cfc25f8d32c3d9c7a17ca05df14255fce443e836 extends \Twig\Template
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
        echo "<div class=\"kt-portlet \">
    <div class=\"kt-portlet__body\">
        <div class=\"kt-widget kt-widget--user-profile-3\">
            <div class=\"kt-widget__top\">
                <div class=\"kt-widget__content\">
                    <div class=\"kt-widget__head\">
                        <a href=\"javascript:;\" class=\"kt-widget__username\">
                            ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "tracking", [], "any", false, false, false, 8), "prefix_order", [], "any", false, false, false, 8), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "number", [], "any", false, false, false, 8), "html", null, true);
        echo "
                        </a>
                        <div class=\"kt-widget__action\">
                \t\t\t<a href=\"javascript:;\" class=\"btn btn-label-brand btn-bold btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
                \t\t\t\t";
        // line 12
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Order Actions"]);
        echo "
                \t\t\t</a>
                \t\t\t<div class=\"dropdown-menu dropdown-menu-right dropdown-menu-fit dropdown-menu-md\">
                                <!--begin::Nav-->
                                <ul class=\"kt-nav\">
                                    ";
        // line 17
        if (((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 17) != 4) && (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 17) != 8))) {
            // line 18
            echo "                                        ";
            if ((((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 18) == 0) || (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 18) == 1)) || (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "requested", [], "any", false, false, false, 18) == 100))) {
                // line 19
                echo "                                            ";
                if (((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 19) == 1) && (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 19) == 5))) {
                    // line 20
                    echo "                                            ";
                } else {
                    // line 21
                    echo "                                                ";
                    if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "order", 1 => "u"], "method", false, false, false, 21)) {
                        // line 22
                        echo "                                                    <li class=\"kt-nav__item\">
                                                        <a href=\"";
                        // line 23
                        echo $this->extensions['Cms\Twig\Extension']->pageFilter("dashboard/order-edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 23)]);
                        echo "\" class=\"kt-nav__link\">
                                                            <i class=\"kt-nav__link-icon flaticon-edit-1\"></i>
                                                            <span class=\"kt-nav__link-text\">";
                        // line 25
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Edit"]);
                        echo "</span>
                                                        </a>
                                                    </li>
                                                ";
                    }
                    // line 29
                    echo "                                                ";
                    if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "order", 1 => "d"], "method", false, false, false, 29)) {
                        // line 30
                        echo "                                                    <li class=\"kt-nav__item\">
                                                        <a href=\"javascript:;\" id=\"delete\" class=\"kt-nav__link\">
                                                            <i class=\"kt-nav__link-icon flaticon-cancel\"></i>
                                                            <span class=\"kt-nav__link-text\">";
                        // line 33
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delete"]);
                        echo "</span>
                                                        </a>
                                                    </li>
                                                ";
                    }
                    // line 37
                    echo "                                            ";
                }
                // line 38
                echo "                                        ";
            }
            // line 39
            echo "

                                        ";
            // line 41
            if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 41) != 5)) {
                // line 42
                echo "                                            ";
                if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 42) == 0)) {
                    // line 43
                    echo "                                                <li class=\"kt-nav__item\">
                                                    <a href=\"javascript:;\" id=\"accept\" class=\"kt-nav__link\">
                                                        <i class=\"kt-nav__link-icon flaticon2-check-mark\"></i>
                                                        <span class=\"kt-nav__link-text\">";
                    // line 46
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Accept"]);
                    echo "</span>
                                                    </a>
                                                </li>
                                                <li class=\"kt-nav__item\">
                                                    <a href=\"javascript:;\" data-toggle=\"modal\" data-target=\"#refuse\" class=\"kt-nav__link\">
                                                        <i class=\"kt-nav__link-icon flaticon-signs-2\"></i>
                                                        <span class=\"kt-nav__link-text\">";
                    // line 52
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Refuse"]);
                    echo "</span>
                                                    </a>
                                                </li>
                                            ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 55
($context["order"] ?? null), "requested", [], "any", false, false, false, 55) != 2)) {
                    // line 56
                    echo "                                                ";
                    if (((((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 56) == 1) || (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 56) == 5)) || (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 56) == 7)) || (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 56) == 10))) {
                        // line 57
                        echo "                                                    ";
                        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "manifest_id", [], "any", false, false, false, 57))) {
                            // line 58
                            echo "                                                        ";
                            if (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "assigned_id", [], "any", false, false, false, 58)) {
                                // line 59
                                echo "                                                            <li class=\"kt-nav__item\">
                                                                <a href=\"javascript:;\" data-toggle=\"modal\" data-target=\"#assign_employee\" class=\"kt-nav__link\">
                                                                    <i class=\"kt-nav__link-icon flaticon-users\"></i>
                                                                    <span class=\"kt-nav__link-text\">";
                                // line 62
                                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Change Assigned Employee"]);
                                echo "</span>
                                                                </a>
                                                            </li>
                                                        ";
                            } else {
                                // line 66
                                echo "                                                            <li class=\"kt-nav__item\">
                                                                <a href=\"javascript:;\" data-toggle=\"modal\" data-target=\"#assign_employee\" class=\"kt-nav__link\">
                                                                    <i class=\"kt-nav__link-icon flaticon-users\"></i>
                                                                    <span class=\"kt-nav__link-text\">";
                                // line 69
                                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Assign Employee"]);
                                echo "</span>
                                                                </a>
                                                            </li>
                                                        ";
                            }
                            // line 73
                            echo "                                                    ";
                        }
                        // line 74
                        echo "                                                    ";
                        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "assigned_id", [], "any", false, false, false, 74))) {
                            // line 75
                            echo "                                                        ";
                            if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "manifest", 1 => "c"], "method", false, false, false, 75)) {
                                // line 76
                                echo "                                                            ";
                                if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "manifest_id", [], "any", false, false, false, 76))) {
                                    // line 77
                                    echo "                                                                <li class=\"kt-nav__item\">
                                                                    <a href=\"javascript:;\" data-toggle=\"modal\" data-target=\"#assign_manifest\" class=\"kt-nav__link\">
                                                                        <i class=\"kt-nav__link-icon flaticon-truck\"></i>
                                                                        <span class=\"kt-nav__link-text\">";
                                    // line 80
                                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Assign Manifest"]);
                                    echo "</span>
                                                                    </a>
                                                                </li>
                                                            ";
                                } else {
                                    // line 84
                                    echo "                                                                ";
                                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "manifest", [], "any", false, false, false, 84), "status", [], "any", false, false, false, 84) == 1)) {
                                        // line 85
                                        echo "                                                                    <li class=\"kt-nav__item\">
                                                                        <a href=\"javascript:;\" data-toggle=\"modal\" data-target=\"#assign_manifest\" class=\"kt-nav__link\">
                                                                            <i class=\"kt-nav__link-icon flaticon-truck\"></i>
                                                                            <span class=\"kt-nav__link-text\">";
                                        // line 88
                                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Change Manifest"]);
                                        echo "</span>
                                                                        </a>
                                                                    </li>
                                                                ";
                                    }
                                    // line 92
                                    echo "                                                            ";
                                }
                                // line 93
                                echo "                                                        ";
                            }
                            // line 94
                            echo "                                                    ";
                        }
                        // line 95
                        echo "                                                    ";
                        if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "assigned_id", [], "any", false, false, false, 95)) ||  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "manifest_id", [], "any", false, false, false, 95)))) {
                            // line 96
                            echo "                                                        <li class=\"kt-nav__item\">
                                                            ";
                            // line 97
                            if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "type", [], "any", false, false, false, 97) == 1)) {
                                // line 98
                                echo "                                                                <a href=\"javascript:;\" data-toggle=\"modal\" data-target=\"#received\" class=\"kt-nav__link\">
                                                                    <i class=\"kt-nav__link-icon flaticon2-check-mark\"></i>
                                                                    <span class=\"kt-nav__link-text\">";
                                // line 100
                                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Received"]);
                                echo "</span>
                                                                </a>
                                                            ";
                            } else {
                                // line 103
                                echo "                                                                <a href=\"javascript:;\" id=\"delivered_driver\" class=\"kt-nav__link\">
                                                                    <i class=\"kt-nav__link-icon flaticon2-check-mark\"></i>
                                                                    <span class=\"kt-nav__link-text\">";
                                // line 105
                                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delivered to driver"]);
                                echo "</span>
                                                                </a>
                                                            ";
                            }
                            // line 108
                            echo "                                                        </li>
                                                    ";
                        }
                        // line 110
                        echo "                                                    ";
                        if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 110) != 10)) {
                            // line 111
                            echo "                                                        <li class=\"kt-nav__item\">
                                                            <a href=\"javascript:;\" data-toggle=\"modal\" data-target=\"#transfer_office\" class=\"kt-nav__link\">
                                                                <i class=\"kt-nav__link-icon flaticon-logout\"></i>
                                                                <span class=\"kt-nav__link-text\">";
                            // line 114
                            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Transfer To Branch"]);
                            echo "</span>
                                                            </a>
                                                        </li>
                                                    ";
                        }
                        // line 118
                        echo "                                                ";
                    }
                    // line 119
                    echo "                                                ";
                    if (((((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 119) != 7) && (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 119) != 10)) && (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 119) != 11)) && (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 119) != 12))) {
                        // line 120
                        echo "                                                    <li class=\"kt-nav__item\">
                                                        <a href=\"javascript:;\" id=\"stock\" class=\"kt-nav__link\">
                                                            <i class=\"kt-nav__link-icon flaticon-user-ok\"></i>
                                                            <span class=\"kt-nav__link-text\">";
                        // line 123
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Save in stock"]);
                        echo "</span>
                                                        </a>
                                                    </li>
                                                ";
                    }
                    // line 127
                    echo "                                                ";
                    if ((((((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 127) != 7) && (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 127) != 9)) && (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 127) != 10)) && (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 127) != 11)) && (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 127) != 12))) {
                        // line 128
                        echo "                                                    <li class=\"kt-nav__item\">
                                                        <a href=\"javascript:;\" data-toggle=\"modal\" data-target=\"#postpone\" class=\"kt-nav__link\">
                                                            <i class=\"kt-nav__link-icon flaticon-refresh\"></i>
                                                            <span class=\"kt-nav__link-text\">";
                        // line 131
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Postpone"]);
                        echo "</span>
                                                        </a>
                                                    </li>
                                                ";
                    }
                    // line 135
                    echo "                                                ";
                    if (((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 135) == 3) || (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 135) == 9))) {
                        // line 136
                        echo "                                                    <li class=\"kt-nav__item\">
                                                        <a href=\"javascript:;\" data-toggle=\"modal\" data-target=\"#discards\" class=\"kt-nav__link\">
                                                            <i class=\"kt-nav__link-icon flaticon-refresh\"></i>
                                                            <span class=\"kt-nav__link-text\">";
                        // line 139
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Transfer as discards"]);
                        echo "</span>
                                                        </a>
                                                    </li>
                                                ";
                    }
                    // line 143
                    echo "                                                ";
                    if ((((((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 143) == 3) || (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 143) == 5)) || (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 143) == 6)) || (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 143) == 7)) || (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 143) == 9))) {
                        // line 144
                        echo "                                                    <li class=\"kt-nav__item\">
                                                        <a href=\"";
                        // line 145
                        echo $this->extensions['Cms\Twig\Extension']->pageFilter("dashboard/order-deliver", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 145), "id", [], "any", false, false, false, 145)]);
                        echo "\" id=\"deliveried_bak\" class=\"kt-nav__link\">
                                                            <i class=\"kt-nav__link-icon flaticon-user-ok\"></i>
                                                            <span class=\"kt-nav__link-text\">";
                        // line 147
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delieveried"]);
                        echo "</span>
                                                        </a>
                                                    </li>
                                                ";
                    }
                    // line 151
                    echo "                                            ";
                }
                // line 152
                echo "                                        ";
            }
            // line 153
            echo "                                    ";
        }
        // line 154
        echo "

                                    ";
        // line 156
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 156) != 5)) {
            // line 157
            echo "                                        ";
            if (((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "return_defray", [], "any", false, false, false, 157) == 1) && (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 157) == 4))) {
                // line 158
                echo "                                            <li class=\"kt-nav__item\">
                                                <a href=\"javascript:;\" id=\"return_discards\" class=\"kt-nav__link\">
                                                    <i class=\"kt-nav__link-icon flaticon-refresh\"></i>
                                                    <span class=\"kt-nav__link-text\">";
                // line 161
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Return discards"]);
                echo "</span>
                                                </a>
                                            </li>
                                        ";
            }
            // line 165
            echo "                                        ";
            if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 165) == 11)) {
                // line 166
                echo "                                            <li class=\"kt-nav__item\">
                                                <a href=\"javascript:;\" id=\"return_discards\" class=\"kt-nav__link\">
                                                    <i class=\"kt-nav__link-icon flaticon2-check-mark\"></i>
                                                    <span class=\"kt-nav__link-text\">";
                // line 169
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Deliver returned discards"]);
                echo "</span>
                                                </a>
                                            </li>
                                        ";
            }
            // line 173
            echo "                                        ";
            if (((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "type", [], "any", false, false, false, 173) == 2) && (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 173) != 0))) {
                // line 174
                echo "                                            <li class=\"kt-nav__item\">
                                                <a href=\"";
                // line 175
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("dashboard/order-print", ["id" => twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 175), "type" => "shipment"]);
                echo "\" target=\"_blank\" class=\"kt-nav__link\">
                                                    <i class=\"kt-nav__link-icon flaticon2-print\"></i>
                                                    <span class=\"kt-nav__link-text\">";
                // line 177
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Print Shipment"]);
                echo "</span>
                                                </a>
                                            </li>
                                        ";
            }
            // line 181
            echo "                                        ";
            if (((((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 181) != 0) && (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 181) != 10)) && (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 181) != 11)) && (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 181) != 12))) {
                // line 182
                echo "                                            <li class=\"kt-nav__item\">
                                                <a href=\"";
                // line 183
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("dashboard/order-print", ["id" => twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 183), "type" => "label"]);
                echo "\" target=\"_blank\" class=\"kt-nav__link\">
                                                    <i class=\"kt-nav__link-icon flaticon2-print\"></i>
                                                    <span class=\"kt-nav__link-text\">";
                // line 185
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Print Label"]);
                echo "</span>
                                                </a>
                                            </li>
                                        ";
            }
            // line 189
            echo "                                    ";
        }
        // line 190
        echo "                                </ul>
                                <!--end::Nav-->
                            </div>
                        </div>
                    </div>

                    <div class=\"kt-widget__subhead\">
                        ";
        // line 197
        echo call_user_func_array($this->env->getFunction('barcodeHTML')->getCallable(), [["data" => twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "barcode", [], "any", false, false, false, 197), "type" => "CODABAR"]]);
        echo "
                    </div>

                    <div class=\"kt-widget__info\">

                        <div class=\"kt-widget__stats d-flex align-items-center flex-fill\">
                            <div class=\"kt-widget__item\">
                                <span class=\"kt-widget__date\">
                                    ";
        // line 205
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Notes"]);
        echo "
                                </span>
                                <div class=\"kt-widget__label notes_scroll\">
                                    <span class=\"btn btn-label-brand btn-sm btn-bold btn-upper\">";
        // line 208
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "notes", [], "any", false, false, false, 208), "count", [], "any", false, false, false, 208), "html", null, true);
        echo "</span>
                                </div>
                            </div>
                            <div class=\"kt-widget__item\">
                                <span class=\"kt-widget__date\">
                                    ";
        // line 213
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Package Receive Date"]);
        echo "
                                </span>
                                <div class=\"kt-widget__label\">
                                    <span class=\"btn btn-label-brand btn-sm btn-bold btn-upper\">";
        // line 216
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "ship_date", [], "any", false, false, false, 216), twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "dateformat", [], "any", false, false, false, 216)), "html", null, true);
        echo "</span>
                                </div>
                            </div>
                            ";
        // line 219
        if (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receive_date", [], "any", false, false, false, 219)) {
            // line 220
            echo "                                <div class=\"kt-widget__item\">
                                    <span class=\"kt-widget__date\">
                                        ";
            // line 222
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Received Date"]);
            echo "
                                    </span>
                                    <div class=\"kt-widget__label\">
                                        <span class=\"btn btn-label-";
            // line 225
            echo twig_escape_filter($this->env, ($context["progress_status"] ?? null), "html", null, true);
            echo " btn-sm btn-bold btn-upper\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receive_date", [], "any", false, false, false, 225), twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "dateformat", [], "any", false, false, false, 225)), "html", null, true);
            echo "</span>
                                    </div>
                                </div>
                            ";
        } else {
            // line 229
            echo "                                <div class=\"kt-widget__item\">
                                    <span class=\"kt-widget__date\">
                                        ";
            // line 231
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Package Expected Delievery Date"]);
            echo "
                                    </span>
                                    <div class=\"kt-widget__label\">
                                        ";
            // line 234
            if (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "delivery_date", [], "any", false, false, false, 234)) {
                // line 235
                echo "                                            <span class=\"btn btn-label-brand btn-sm btn-bold btn-upper\">";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "delivery_date", [], "any", false, false, false, 235), twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "dateformat", [], "any", false, false, false, 235)), "html", null, true);
                echo "</span>";
                if (((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "postponed", [], "any", false, false, false, 235) == 1) && twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 235), [0 => 1, 1 => 3, 2 => 5, 3 => 6, 4 => 7, 5 => 10, 6 => 11]))) {
                    echo " | <span class=\"btn btn-label-info btn-sm btn-bold btn-upper\">";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["POSTPONED"]);
                    echo "</span>";
                }
                // line 236
                echo "                                        ";
            } else {
                // line 237
                echo "                                            <span class=\"btn btn-label-brand btn-sm btn-bold btn-upper\">";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_modify_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "ship_date", [], "any", false, false, false, 237), (("+" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "deliverytime", [], "any", false, false, false, 237), "count", [], "any", false, false, false, 237)) . " hours")), twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "dateformat", [], "any", false, false, false, 237)), "html", null, true);
                echo "</span>
                                        ";
            }
            // line 239
            echo "                                    </div>
                                </div>
                            ";
        }
        // line 242
        echo "
                            <div class=\"kt-widget__item flex-fill\">
                                <span class=\"kt-widget__subtitel\">";
        // line 244
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Progress"]);
        echo "</span>
                                <div class=\"kt-widget__progress d-flex  align-items-center\">
                                    <div class=\"progress\" style=\"height: 5px;width: 100%;\">
                                        <div class=\"progress-bar kt-bg-";
        // line 247
        echo twig_escape_filter($this->env, ($context["progress_status"] ?? null), "html", null, true);
        echo "\" role=\"progressbar\" style=\"width: ";
        echo twig_escape_filter($this->env, ($context["progress"] ?? null), "html", null, true);
        echo "%;\" aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                    </div>
                                    <span class=\"kt-widget__stat\">
                                        ";
        // line 250
        echo twig_escape_filter($this->env, ($context["progress"] ?? null), "html", null, true);
        echo "%
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end:: Portlet-->


<div class=\"row\">
    <div class=\"col-xl-6\">
        <!--begin:: Widgets/Order Statistics-->
        <div class=\"kt-portlet kt-portlet--height-fluid\">
        \t<div class=\"kt-portlet__head\">
        \t\t<div class=\"kt-portlet__head-label\">
        \t\t\t<h3 class=\"kt-portlet__head-title\">
        \t\t\t\t";
        // line 271
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Order Details"]);
        echo "
        \t\t\t</h3>
        \t\t</div>
        \t</div>
        \t<div class=\"kt-portlet__body kt-portlet__body--fluid\">
        \t\t<div class=\"kt-widget12\">
        \t\t\t<div class=\"kt-widget12__content\">
                        <div class=\"kt-widget12__item\">
                            <div class=\"kt-widget12__info\">
                                <span class=\"kt-widget12__desc\">";
        // line 280
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Shipment Type"]);
        echo "</span>
                                <span class=\"kt-widget12__value\">
                                    ";
        // line 282
        if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "type", [], "any", false, false, false, 282) == 1)) {
            // line 283
            echo "                                        ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Receive"]);
            echo "
                                    ";
        } else {
            // line 285
            echo "                                        ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Send"]);
            echo "
                                    ";
        }
        // line 287
        echo "                                </span>
                            </div>
                            <div class=\"kt-widget12__info\">
                                <span class=\"kt-widget12__desc\">";
        // line 290
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Package Type"]);
        echo "</span>
                                <span class=\"kt-widget12__value\">";
        // line 291
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "packaging", [], "any", false, false, false, 291), "name", [], "any", false, false, false, 291), "html", null, true);
        echo "</span>
                            </div>
                        </div>
                        <div class=\"kt-widget12__item\">
                            <div class=\"kt-widget12__info\">
                                <span class=\"kt-widget12__desc\">";
        // line 296
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Status"]);
        echo "</span>
                                <span class=\"kt-widget12__value\">
                                    <span class=\"btn btn-label-";
        // line 298
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "status", [], "any", false, false, false, 298), "color", [], "any", false, false, false, 298), "html", null, true);
        echo " btn-sm btn-bold btn-upper\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "status", [], "any", false, false, false, 298), "name", [], "any", false, false, false, 298), "html", null, true);
        echo "</span>
                                    ";
        // line 299
        if ((($context["progress_status"] ?? null) == "danger")) {
            echo " | <span class=\"btn btn-label-";
            echo twig_escape_filter($this->env, ($context["progress_status"] ?? null), "html", null, true);
            echo " btn-sm btn-bold btn-upper\">";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delayed"]);
            echo "</span>";
        }
        if (((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 299) == 10) || (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 299) == 11))) {
            echo " | <span class=\"btn btn-label-warning btn-sm btn-bold btn-upper\">";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["RETURNING DISCARDS"]);
            echo "</span>";
        }
        if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "postponed", [], "any", false, false, false, 299) == 1)) {
            echo " | <span class=\"btn btn-label-info btn-sm btn-bold btn-upper\">";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["POSTPONED"]);
            echo "</span>";
        }
        if (((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 299) == 12) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "status", [], "any", false, false, false, 299), "equal", [], "any", false, false, false, 299) != 12))) {
            echo " | <span class=\"btn btn-label-success btn-sm btn-bold btn-upper\">";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Supplied"]);
            echo "</span>";
        }
        // line 300
        echo "                                </span>
                            </div>
                            <div class=\"kt-widget12__info\">
                                <span class=\"kt-widget12__desc\">";
        // line 303
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Channel"]);
        echo "</span>
                                <span class=\"kt-widget12__value\">";
        // line 304
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "channel", [], "any", false, false, false, 304)]);
        echo "</span>
                            </div>
                        </div>
                        <div class=\"kt-widget12__item\">
                            <div class=\"kt-widget12__info\">
                                <span class=\"kt-widget12__desc\">";
        // line 309
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Payment Type"]);
        echo "</span>
                                <span class=\"kt-widget12__value\">";
        // line 310
        if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payment_type", [], "any", false, false, false, 310) == 1)) {
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Postpaid"]);
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payment_type", [], "any", false, false, false, 310) == 2)) {
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Prepaid"]);
        }
        echo "</span>
                            </div>
                            <div class=\"kt-widget12__info\">
                                <span class=\"kt-widget12__desc\">";
        // line 313
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Currency"]);
        echo "</span>
                                <span class=\"kt-widget12__value\">";
        // line 314
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "currency", [], "any", false, false, false, 314), "name", [], "any", false, false, false, 314), "html", null, true);
        echo "</span>
                            </div>
                        </div>
                        <div class=\"kt-widget12__item\">
                            <div class=\"kt-widget12__info\">
                                <span class=\"kt-widget12__desc\">";
        // line 319
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Office"]);
        echo "</span>
                                <span class=\"kt-widget12__value\">";
        // line 320
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "office", [], "any", false, false, false, 320), "name", [], "any", false, false, false, 320), "html", null, true);
        echo "</span>
                            </div>
                            <div class=\"kt-widget12__info\">
                                <span class=\"kt-widget12__desc\">";
        // line 323
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delivery Time"]);
        echo "</span>
                                <span class=\"kt-widget12__value\">";
        // line 324
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "deliverytime", [], "any", false, false, false, 324), "name", [], "any", false, false, false, 324), "html", null, true);
        echo "</span>
                            </div>
                        </div>
                        ";
        // line 327
        if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "assigned_id", [], "any", false, false, false, 327) || twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "manifest_id", [], "any", false, false, false, 327))) {
            // line 328
            echo "                            <div class=\"kt-widget12__item\">
                                ";
            // line 329
            if (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "manifest_id", [], "any", false, false, false, 329)) {
                // line 330
                echo "                                    <div class=\"kt-widget12__info\">
                                        <span class=\"kt-widget12__desc\">";
                // line 331
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Manifest"]);
                echo "</span>
                                        <span class=\"kt-widget12__value\">#";
                // line 332
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "currency", [], "any", false, false, false, 332), "id", [], "any", false, false, false, 332), "html", null, true);
                echo "</span>
                                        ";
                // line 333
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "manifest", [], "any", false, false, false, 333), "driver", [], "any", false, false, false, 333)) {
                    // line 334
                    echo "                                            <span class=\"kt-widget12__value kt-font-sm\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "manifest", [], "any", false, false, false, 334), "driver", [], "any", false, false, false, 334), "name", [], "any", false, false, false, 334), "html", null, true);
                    echo "</span>
                                        ";
                }
                // line 336
                echo "                                    </div>
                                ";
            }
            // line 338
            echo "                                ";
            if (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "assigned_id", [], "any", false, false, false, 338)) {
                // line 339
                echo "                                    <div class=\"kt-widget12__info\">
                                        <span class=\"kt-widget12__desc\">";
                // line 340
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Assigned To"]);
                echo "</span>
                                        <span class=\"kt-widget12__value\">";
                // line 341
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "responsiable", [], "any", false, false, false, 341), "name", [], "any", false, false, false, 341), "html", null, true);
                echo "</span>
                                        ";
                // line 342
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "responsiable", [], "any", false, false, false, 342), "mobile", [], "any", false, false, false, 342)) {
                    // line 343
                    echo "                                            <span class=\"kt-widget12__value kt-font-sm\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "responsiable", [], "any", false, false, false, 343), "mobile", [], "any", false, false, false, 343), "html", null, true);
                    echo "</span>
                                        ";
                }
                // line 345
                echo "                                    </div>
                                ";
            }
            // line 347
            echo "                            </div>
                        ";
        }
        // line 349
        echo "                        ";
        if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "courier_id", [], "any", false, false, false, 349) || twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "mode_id", [], "any", false, false, false, 349))) {
            // line 350
            echo "                            <div class=\"kt-widget12__item\">
                                ";
            // line 351
            if (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "courier_id", [], "any", false, false, false, 351)) {
                // line 352
                echo "                                    <div class=\"kt-widget12__info\">
                                        <span class=\"kt-widget12__desc\">";
                // line 353
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Courier Company"]);
                echo "</span>
                                        <span class=\"kt-widget12__value\">";
                // line 354
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "courier", [], "any", false, false, false, 354), "name", [], "any", false, false, false, 354), "html", null, true);
                echo "</span>
                                    </div>
                                ";
            }
            // line 357
            echo "                                ";
            if (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "mode_id", [], "any", false, false, false, 357)) {
                // line 358
                echo "                                    <div class=\"kt-widget12__info\">
                                        <span class=\"kt-widget12__desc\">";
                // line 359
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Shipping Mode"]);
                echo "</span>
                                        <span class=\"kt-widget12__value\">";
                // line 360
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "mode", [], "any", false, false, false, 360), "name", [], "any", false, false, false, 360), "html", null, true);
                echo "</span>
                                    </div>
                                ";
            }
            // line 363
            echo "                            </div>
                        ";
        }
        // line 365
        echo "
                        ";
        // line 366
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 366), [0 => 4, 1 => 5, 2 => 6, 3 => 10, 4 => 11, 5 => 12])) {
            // line 367
            echo "                            ";
            if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "delivered_by", [], "any", false, false, false, 367) != twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "delivered_responsiable", [], "any", false, false, false, 367))) {
                // line 368
                echo "                                <div class=\"kt-widget12__item\">
                                    <div class=\"kt-widget12__info\">
                                        <span class=\"kt-widget12__desc\">";
                // line 370
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delivered Responsiabality"]);
                echo "</span>
                                        <span class=\"kt-widget12__value\">";
                // line 371
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "delivered_responsiabality", [], "any", false, false, false, 371), "name", [], "any", false, false, false, 371), "html", null, true);
                echo "</span>
                                    </div>
                                </div>
                            ";
            }
            // line 375
            echo "                            <div class=\"kt-widget12__item\">
                                <div class=\"kt-widget12__info\">
                                    <span class=\"kt-widget12__desc\">";
            // line 377
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delivered By"]);
            echo "</span>
                                    <span class=\"kt-widget12__value\">";
            // line 378
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "delivered_employee", [], "any", false, false, false, 378), "name", [], "any", false, false, false, 378), "html", null, true);
            echo "</span>
                                </div>
                                <div class=\"kt-widget12__info\">
                                    <span class=\"kt-widget12__desc\">";
            // line 381
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Received By"]);
            echo "</span>
                                    <span class=\"kt-widget12__value\">";
            // line 382
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "received_by", [], "any", false, false, false, 382), "html", null, true);
            echo "</span>
                                </div>
                            </div>
                            <div class=\"kt-widget12__item\">
                                <div class=\"kt-widget12__info\">
                                    <span class=\"kt-widget12__desc\">";
            // line 387
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Receiver ID Copy"]);
            echo "</span>
                                    <span class=\"kt-widget12__value\">
                                        <img src=\"";
            // line 389
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id_copy", [], "any", false, false, false, 389), "path", [], "any", false, false, false, 389), "html", null, true);
            echo "\" style=\"max-height:350px;\" alt=\"\" />
                                    </span>
                                </div>
                            </div>
                            <div class=\"kt-widget12__item\">
                                <div class=\"kt-widget12__info\">
                                    <span class=\"kt-widget12__desc\">";
            // line 395
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Receiver Signature"]);
            echo "</span>
                                    <span class=\"kt-widget12__value\">
                                        <img src=\"";
            // line 397
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "esign", [], "any", false, false, false, 397), "html", null, true);
            echo "\" style=\"max-height:350px;\" alt=\"\" />
                                    </span>
                                </div>
                            </div>
                        ";
        }
        // line 402
        echo "        \t\t\t</div>
        \t\t</div>
        \t</div>
        </div>
        <!--end:: Widgets/Order Statistics-->
    </div>
    <div class=\"col-xl-6\">
        <!--begin:: Widgets/Order Statistics-->
        <div class=\"kt-portlet kt-portlet--height-fluid\">
        \t<div class=\"kt-portlet__head\">
        \t\t<div class=\"kt-portlet__head-label\">
        \t\t\t<h3 class=\"kt-portlet__head-title\">
        \t\t\t\t";
        // line 414
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Shipment Details"]);
        echo "
        \t\t\t</h3>
        \t\t</div>
        \t</div>
        \t<div class=\"kt-portlet__body kt-portlet__body--fluid\">
        \t\t<div class=\"kt-widget12\">
        \t\t\t<div class=\"kt-widget12__content\">
                        ";
        // line 421
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "items", [], "any", false, false, false, 421))) {
            // line 422
            echo "                            <div class=\"kt-widget12__item\">
                                <div class=\"kt-widget12__info\">
                            \t\t<div class=\"table-responsive\">
                                        <table class=\"table table-dark\">
                    \t\t\t\t\t  \t<thead>
                    \t\t\t\t\t    \t<tr>
                    \t\t\t\t\t      \t\t<th>";
            // line 428
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Category"]);
            echo "</th>
                    \t\t\t\t\t      \t\t<th>";
            // line 429
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Info"]);
            echo "</th>
                    \t\t\t\t\t      \t\t<th>";
            // line 430
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Weight"]);
            echo "</th>
                    \t\t\t\t\t    \t</tr>
                    \t\t\t\t\t  \t</thead>
                    \t\t\t\t\t  \t<tbody>
                                                ";
            // line 434
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "items", [], "any", false, false, false, 434));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 435
                echo "                        \t\t\t\t\t    \t<tr>
                        \t\t\t\t\t\t      \t<th scope=\"row\">";
                // line 436
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "category", [], "any", false, false, false, 436), "name", [], "any", false, false, false, 436), "html", null, true);
                echo "</th>
                        \t\t\t\t\t\t      \t<td>
                                                            ";
                // line 438
                if (twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 438)) {
                    // line 439
                    echo "                                                                ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 439), "html", null, true);
                    echo "<br />
                                                            ";
                }
                // line 441
                echo "                                                            <b>";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Quantity"]);
                echo ":</b> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 441), "html", null, true);
                echo "<br />
                                                            <b>";
                // line 442
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Dimensions"]);
                echo ":</b> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "length", [], "any", false, false, false, 442), "html", null, true);
                echo " ";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["cm"]);
                echo " x ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "width", [], "any", false, false, false, 442), "html", null, true);
                echo " ";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["cm"]);
                echo " x ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "height", [], "any", false, false, false, 442), "html", null, true);
                echo " ";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["cm"]);
                echo "
                                                        </td>
                        \t\t\t\t\t\t      \t<td>";
                // line 444
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "weight", [], "any", false, false, false, 444), "html", null, true);
                echo " ";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Kg"]);
                echo "</td>
                        \t\t\t\t\t    \t</tr>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 447
            echo "                    \t\t\t\t\t  \t</tbody>
                    \t\t\t\t\t</table>
                                    </div>
                                </div>
                            </div>
                        ";
        }
        // line 453
        echo "                        ";
        if ((((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "tax", [], "any", false, false, false, 453) != 0) || (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "insurance", [], "any", false, false, false, 453) != 0)) || (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "customs_value", [], "any", false, false, false, 453) != 0))) {
            // line 454
            echo "                            <div class=\"kt-widget12__item\">
                                ";
            // line 455
            if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "tax", [], "any", false, false, false, 455) != 0)) {
                // line 456
                echo "                                <div class=\"kt-widget12__info\">
                                    <span class=\"kt-widget12__desc\">";
                // line 457
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Tax"]);
                echo "</span>
                                    <span class=\"kt-widget12__value\">";
                // line 458
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "tax", [], "any", false, false, false, 458), "html", null, true);
                echo "%</span>
                                </div>
                                ";
            }
            // line 461
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "insurance", [], "any", false, false, false, 461) != 0)) {
                // line 462
                echo "                                <div class=\"kt-widget12__info\">
                                    <span class=\"kt-widget12__desc\">";
                // line 463
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Insurance"]);
                echo "</span>
                                    <span class=\"kt-widget12__value\">";
                // line 464
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "insurance", [], "any", false, false, false, 464), "html", null, true);
                echo "%</span>
                                </div>
                                ";
            }
            // line 467
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "customs_value", [], "any", false, false, false, 467) != 0)) {
                // line 468
                echo "                                <div class=\"kt-widget12__info\">
                                    <span class=\"kt-widget12__desc\">";
                // line 469
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Customs Value"]);
                echo "</span>
                                    <span class=\"kt-widget12__value\">";
                // line 470
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "customs_value", [], "any", false, false, false, 470), "html", null, true);
                echo "</span>
                                </div>
                                ";
            }
            // line 473
            echo "                            </div>
                        ";
        }
        // line 475
        echo "                        ";
        if ((twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 475), [0 => 1, 1 => 2, 2 => 3, 3 => 6]) || twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "is_superuser", [], "any", false, false, false, 475))) {
            // line 476
            echo "                            <div class=\"kt-widget12__item\">
                                ";
            // line 477
            if (((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "type", [], "any", false, false, false, 477) == 1) && (null === twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_id", [], "any", false, false, false, 477)))) {
                // line 478
                echo "                                    <div class=\"kt-widget12__info\">
                                        <span class=\"kt-widget12__desc\">";
                // line 479
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Pickup Cost"]);
                echo "</span>
                                        <span class=\"kt-widget12__value\">
                                            ";
                // line 481
                echo call_user_func_array($this->env->getFilter('currency')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "courier_fee", [], "any", false, false, false, 481)]);
                echo "
                                            ";
                // line 482
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payments", [], "any", false, false, false, 482), "where", [0 => "payment_type", 1 => "courier_fee"], "method", false, false, false, 482), "first", [], "any", false, false, false, 482), "status", [], "any", false, false, false, 482) == 3)) {
                    // line 483
                    echo "                                                <span class=\"btn btn-label-success btn-sm btn-bold btn-upper\">";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Paid"]);
                    echo "</span>
                                            ";
                }
                // line 485
                echo "                                        </span>
                                    </div>
                                    <div class=\"kt-widget12__info\">
                                        <span class=\"kt-widget12__desc\">";
                // line 488
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Shipping Cost"]);
                echo "</span>
                                        <span class=\"kt-widget12__value\">
                                            ";
                // line 490
                echo call_user_func_array($this->env->getFilter('currency')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "fees", [], "any", false, false, false, 490), "delivery_cost", [], "any", false, false, false, 490)]);
                echo " ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 490), [0 => 100, 1 => 0, 2 => 1])) {
                    echo "<span class=\"btn btn-label-danger btn-sm btn-bold btn-upper\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["The actual cost will be calculated when we receive the package"]);
                    echo "\" data-original-title=\"";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["The actual cost will be calculated when we receive the package"]);
                    echo "\" data-skin=\"dark\">";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Not confirmed yet"]);
                    echo "</span>";
                }
                // line 491
                echo "                                        </span>
                                    </div>
                                ";
            } else {
                // line 494
                echo "                                    <div class=\"kt-widget12__info\">
                                        <span class=\"kt-widget12__desc\">";
                // line 495
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Shipping Cost"]);
                echo "</span>
                                        <span class=\"kt-widget12__value\">
                                            ";
                // line 497
                echo call_user_func_array($this->env->getFilter('currency')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "courier_fee", [], "any", false, false, false, 497)]);
                echo " ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 497), [0 => 100, 1 => 0, 2 => 1])) {
                    echo "<span class=\"btn btn-label-danger btn-sm btn-bold btn-upper\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["The actual cost will be calculated when we receive the package"]);
                    echo "\" data-original-title=\"";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["The actual cost will be calculated when we receive the package"]);
                    echo "\" data-skin=\"dark\">";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Not confirmed yet"]);
                    echo "</span>";
                }
                // line 498
                echo "                                        </span>
                                    </div>
                                ";
            }
            // line 501
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "return_defray", [], "any", false, false, false, 501) == 1)) {
                // line 502
                echo "                                    <div class=\"kt-widget12__info\">
                                        <span class=\"kt-widget12__desc\">";
                // line 503
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Package Cost"]);
                echo "</span>
                                        <span class=\"kt-widget12__value\">
                                            ";
                // line 505
                echo call_user_func_array($this->env->getFilter('currency')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "package_fee", [], "any", false, false, false, 505)]);
                echo "
                                            ";
                // line 506
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payments", [], "any", false, false, false, 506), "where", [0 => "payment_type", 1 => "package_fee"], "method", false, false, false, 506), "first", [], "any", false, false, false, 506), "status", [], "any", false, false, false, 506) == 2)) {
                    // line 507
                    echo "                                                <span class=\"btn btn-label-danger btn-sm btn-bold btn-upper\">";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Canceled"]);
                    echo "</span>
                                            ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 508
($context["order"] ?? null), "requested", [], "any", false, false, false, 508) == 12)) {
                    // line 509
                    echo "                                                <span class=\"btn btn-label-success btn-sm btn-bold btn-upper\">";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Paid"]);
                    echo "</span>
                                            ";
                }
                // line 511
                echo "                                        </span>
                                    </div>
                                    <div class=\"kt-widget12__info\">
                                        <span class=\"kt-widget12__desc\">";
                // line 514
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Return Courier Cost"]);
                echo "</span>
                                        <span class=\"kt-widget12__value\">";
                // line 515
                echo call_user_func_array($this->env->getFilter('currency')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "return_courier_fee", [], "any", false, false, false, 515)]);
                echo "</span> ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 515), [0 => 100, 1 => 0, 2 => 1])) {
                    echo "<span class=\"btn btn-label-danger btn-sm btn-bold btn-upper\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["The actual cost will be calculated when we receive the package"]);
                    echo "\" data-original-title=\"";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["The actual cost will be calculated when we receive the package"]);
                    echo "\" data-skin=\"dark\">";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Not confirmed yet"]);
                    echo "</span>";
                }
                // line 516
                echo "                                    </div>
                                ";
            } else {
                // line 518
                echo "                                    ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payments", [], "any", false, false, false, 518), "where", [0 => "payment_type", 1 => "return_package_fee"], "method", false, false, false, 518), "first", [], "any", false, false, false, 518)) {
                    // line 519
                    echo "                                        <div class=\"kt-widget12__info\">
                                            <span class=\"kt-widget12__desc\">";
                    // line 520
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Return Courier Cost"]);
                    echo "</span>
                                            <span class=\"kt-widget12__value\">
                                                ";
                    // line 522
                    echo call_user_func_array($this->env->getFilter('currency')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "return_courier_fee", [], "any", false, false, false, 522)]);
                    echo "
                                                ";
                    // line 523
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payments", [], "any", false, false, false, 523), "where", [0 => "payment_type", 1 => "return_package_fee"], "method", false, false, false, 523), "first", [], "any", false, false, false, 523), "status", [], "any", false, false, false, 523) == 2)) {
                        // line 524
                        echo "                                                    <span class=\"btn btn-label-danger btn-sm btn-bold btn-upper\">";
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Canceled"]);
                        echo "</span>
                                                ";
                    } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 525
($context["order"] ?? null), "payments", [], "any", false, false, false, 525), "where", [0 => "payment_type", 1 => "return_package_fee"], "method", false, false, false, 525), "first", [], "any", false, false, false, 525), "status", [], "any", false, false, false, 525) == 3)) {
                        // line 526
                        echo "                                                    <span class=\"btn btn-label-success btn-sm btn-bold btn-upper\">";
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Paid"]);
                        echo "</span>
                                                ";
                    }
                    // line 528
                    echo "                                            </span>
                                        </div>
                                    ";
                }
                // line 531
                echo "                                ";
            }
            // line 532
            echo "                            </div>
                        ";
        }
        // line 534
        echo "                        <div class=\"kt-widget12__item\">
                            <div class=\"kt-widget12__info\">
                                ";
        // line 536
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 536) == twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_id", [], "any", false, false, false, 536))) {
            // line 537
            echo "                                    <span class=\"kt-widget12__desc\">";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Total Requested From You"]);
            echo "</span>
                                ";
        } else {
            // line 539
            echo "                                    <span class=\"kt-widget12__desc\">";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Total Requested From The Receiver"]);
            echo "</span>
                                ";
        }
        // line 541
        echo "                                <span class=\"kt-widget12__value\">";
        echo call_user_func_array($this->env->getFilter('currency')->getCallable(), [($context["receiver_fees"] ?? null)]);
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 541), [0 => 100, 1 => 0, 2 => 1])) {
            echo " <span class=\"btn btn-label-danger btn-sm btn-bold btn-upper\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["The actual cost will be calculated when we receive the package"]);
            echo "\" data-original-title=\"";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["The actual cost will be calculated when we receive the package"]);
            echo "\" data-skin=\"dark\">";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Not confirmed yet"]);
            echo "</span>";
        }
        echo "</span>
                                ";
        // line 542
        if (((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "type", [], "any", false, false, false, 542) == 1) && (null === twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_id", [], "any", false, false, false, 542)))) {
            // line 543
            echo "                                    <span class=\"muted-text kt-font-danger\">";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["The correct fees will be applied after selecting the receiver address"]);
            echo "</span>
                                ";
        }
        // line 544
        echo "</span>
                            </div>
                        </div>
                        <div class=\"kt-widget12__item\">
                            <div class=\"kt-widget12__info\">
                                ";
        // line 549
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 549) == twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_id", [], "any", false, false, false, 549))) {
            // line 550
            echo "                                    <span class=\"kt-widget12__desc\">";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Total Requested From You"]);
            echo "</span>
                                ";
        } else {
            // line 552
            echo "                                    <span class=\"kt-widget12__desc\">";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Total Requested From The Sender"]);
            echo "</span>
                                ";
        }
        // line 554
        echo "                                <span class=\"kt-widget12__value\">";
        echo call_user_func_array($this->env->getFilter('currency')->getCallable(), [($context["sender_fees"] ?? null)]);
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 554), [0 => 100, 1 => 0, 2 => 1])) {
            echo " <span class=\"btn btn-label-danger btn-sm btn-bold btn-upper\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["The actual cost will be calculated when we receive the package"]);
            echo "\" data-original-title=\"";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["The actual cost will be calculated when we receive the package"]);
            echo "\" data-skin=\"dark\">";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Not confirmed yet"]);
            echo "</span>";
        }
        echo "</span>
                                ";
        // line 555
        if (((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "type", [], "any", false, false, false, 555) == 1) && (null === twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_id", [], "any", false, false, false, 555)))) {
            // line 556
            echo "                                    <span class=\"muted-text kt-font-danger\">";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["The correct fees will be applied after selecting the receiver address"]);
            echo "</span>
                                ";
        }
        // line 558
        echo "                            </div>
                        </div>
                        <div class=\"kt-widget12__item\">
                            <div class=\"kt-widget12__info\">
                                <span class=\"kt-widget12__desc\">";
        // line 562
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Total received"]);
        echo "</span>
                                <span class=\"kt-widget12__value\">";
        // line 563
        echo call_user_func_array($this->env->getFilter('currency')->getCallable(), [($context["total_received"] ?? null)]);
        echo "</span>
                            </div>
                            <div class=\"kt-widget12__info\">
                                <span class=\"kt-widget12__desc\">";
        // line 566
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Total remaining"]);
        echo "</span>
                                <span class=\"kt-widget12__value\">
                                    ";
        // line 568
        if ((((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "return_defray", [], "any", false, false, false, 568) == 1) && (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "return_package_fee", [], "any", false, false, false, 568) == 2)) && twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 568), [0 => 4, 1 => 5, 2 => 6, 3 => 8, 4 => 9, 5 => 10, 6 => 11, 7 => 12]))) {
            // line 569
            echo "                                        ";
            echo call_user_func_array($this->env->getFilter('currency')->getCallable(), [($context["total_remaining"] ?? null)]);
            echo " <span class=\"btn btn-label-danger btn-sm btn-bold btn-upper\">";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["The requested amount of the sender was deducted from the return"]);
            echo "</span>
                                    ";
        } else {
            // line 571
            echo "                                        ";
            echo call_user_func_array($this->env->getFilter('currency')->getCallable(), [($context["total_remaining"] ?? null)]);
            echo "
                                    ";
        }
        // line 572
        echo " ";
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 572), [0 => 100, 1 => 0, 2 => 1])) {
            echo "<span class=\"btn btn-label-danger btn-sm btn-bold btn-upper\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["The actual cost will be calculated when we receive the package"]);
            echo "\" data-original-title=\"";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["The actual cost will be calculated when we receive the package"]);
            echo "\" data-skin=\"dark\">";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Not confirmed yet"]);
            echo "</span>";
        }
        // line 573
        echo "                                </span>
                            </div>
                        </div>
                    </div>
                </div>
        \t</div>
        </div>
        <!--end:: Widgets/Order Statistics-->
    </div>
</div>
<div class=\"row\">
    <div class=\"col-xl-";
        // line 584
        if (((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "type", [], "any", false, false, false, 584) == 1) && (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_id", [], "any", false, false, false, 584) == null))) {
            echo "12";
        } else {
            echo "6";
        }
        echo "\">
        <!--begin:: Widgets/Order Statistics-->
        <div class=\"kt-portlet kt-portlet--height-fluid\">
        \t<div class=\"kt-portlet__head\">
        \t\t<div class=\"kt-portlet__head-label\">
        \t\t\t<h3 class=\"kt-portlet__head-title\">
        \t\t\t\t";
        // line 590
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sender Details"]);
        echo "
        \t\t\t</h3>
        \t\t</div>
        \t</div>
        \t<div class=\"kt-portlet__body kt-portlet__body--fluid\">
        \t\t<div class=\"kt-widget12\">
        \t\t\t<div class=\"kt-widget12__content\">
                        <div class=\"kt-widget12__item\">
                            <div class=\"kt-widget12__info\">
                                <span class=\"kt-widget12__desc\">";
        // line 599
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Name"]);
        echo "</span>
                                <span class=\"kt-widget12__value\">
                                    ";
        // line 601
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender", [], "any", false, false, false, 601), "name", [], "any", false, false, false, 601)), "html", null, true);
        echo "
                                    ";
        // line 602
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender", [], "any", false, false, false, 602), "userverify_dateverified", [], "any", false, false, false, 602)) {
            // line 603
            echo "                                        <i class=\"flaticon2-correct kt-font-info\"></i>
                                    ";
        }
        // line 605
        echo "                                </span>
                            </div>
                            <div class=\"kt-widget12__info\">
                                <span class=\"kt-widget12__desc\">";
        // line 608
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Mobile"]);
        echo "</span>
                                <span class=\"kt-widget12__value\">";
        // line 609
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender", [], "any", false, false, false, 609), "mobile", [], "any", false, false, false, 609), "html", null, true);
        echo "</span>
                            </div>
                        </div>
                        ";
        // line 612
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender", [], "any", false, false, false, 612), "email", [], "any", false, false, false, 612) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender", [], "any", false, false, false, 612), "gender", [], "any", false, false, false, 612))) {
            // line 613
            echo "                            <div class=\"kt-widget12__item\">
                                ";
            // line 614
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender", [], "any", false, false, false, 614), "email", [], "any", false, false, false, 614)) {
                // line 615
                echo "                                    <div class=\"kt-widget12__info\">
                                        <span class=\"kt-widget12__desc\">";
                // line 616
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Email"]);
                echo "</span>
                                        <span class=\"kt-widget12__value\">";
                // line 617
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender", [], "any", false, false, false, 617), "email", [], "any", false, false, false, 617), "html", null, true);
                echo "</span>
                                    </div>
                                ";
            }
            // line 620
            echo "                                ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender", [], "any", false, false, false, 620), "gender", [], "any", false, false, false, 620)) {
                // line 621
                echo "                                    <div class=\"kt-widget12__info\">
                                        <span class=\"kt-widget12__desc\">";
                // line 622
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Gender"]);
                echo "</span>
                                        <span class=\"kt-widget12__value\">";
                // line 623
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender", [], "any", false, false, false, 623), "gender", [], "any", false, false, false, 623), "html", null, true);
                echo "</span>
                                    </div>
                                ";
            }
            // line 626
            echo "                            </div>
                        ";
        }
        // line 628
        echo "                        <div class=\"kt-widget12__item\">
                            <div class=\"kt-widget12__info\">
                                <span class=\"kt-widget12__desc\">";
        // line 630
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sender Address"]);
        echo "</span>
                                <span class=\"kt-widget12__value\">
                                    ";
        // line 632
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_address", [], "any", false, false, false, 632), "name", [], "any", false, false, false, 632)), "html", null, true);
        echo "
                                </span>
                            </div>
                        </div>
                        <div class=\"kt-widget12__item\">
                            <div class=\"kt-widget12__info\">
                                <span class=\"kt-widget12__desc\">";
        // line 638
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Street"]);
        echo "</span>
                                <span class=\"kt-widget12__value\">
                                    ";
        // line 640
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_address", [], "any", false, false, false, 640), "street", [], "any", false, false, false, 640), "html", null, true);
        echo "
                                </span>
                            </div>
                        </div>
                        ";
        // line 644
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_address", [], "any", false, false, false, 644), "area", [], "any", false, false, false, 644) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_address", [], "any", false, false, false, 644), "thecity", [], "any", false, false, false, 644))) {
            // line 645
            echo "                            <div class=\"kt-widget12__item\">
                                ";
            // line 646
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_address", [], "any", false, false, false, 646), "area", [], "any", false, false, false, 646)) {
                // line 647
                echo "                                    <div class=\"kt-widget12__info\">
                                        <span class=\"kt-widget12__desc\">";
                // line 648
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["County"]);
                echo "</span>
                                        <span class=\"kt-widget12__value\">
                                            ";
                // line 650
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_address", [], "any", false, false, false, 650), "area", [], "any", false, false, false, 650), "name", [], "any", false, false, false, 650), "html", null, true);
                echo "
                                        </span>
                                    </div>
                                ";
            }
            // line 654
            echo "                                ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_address", [], "any", false, false, false, 654), "thecity", [], "any", false, false, false, 654)) {
                // line 655
                echo "                                    <div class=\"kt-widget12__info\">
                                        <span class=\"kt-widget12__desc\">";
                // line 656
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["City"]);
                echo "</span>
                                        <span class=\"kt-widget12__value\">
                                            ";
                // line 658
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_address", [], "any", false, false, false, 658), "thecity", [], "any", false, false, false, 658), "name", [], "any", false, false, false, 658), "html", null, true);
                echo "
                                        </span>
                                    </div>
                                ";
            }
            // line 662
            echo "                            </div>
                        ";
        }
        // line 664
        echo "                        ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_address", [], "any", false, false, false, 664), "thestate", [], "any", false, false, false, 664) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_address", [], "any", false, false, false, 664), "thecountry", [], "any", false, false, false, 664))) {
            // line 665
            echo "                            <div class=\"kt-widget12__item\">
                                ";
            // line 666
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_address", [], "any", false, false, false, 666), "thestate", [], "any", false, false, false, 666)) {
                // line 667
                echo "                                    <div class=\"kt-widget12__info\">
                                        <span class=\"kt-widget12__desc\">";
                // line 668
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["State"]);
                echo "</span>
                                        <span class=\"kt-widget12__value\">
                                            ";
                // line 670
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_address", [], "any", false, false, false, 670), "thestate", [], "any", false, false, false, 670), "name", [], "any", false, false, false, 670), "html", null, true);
                echo "
                                        </span>
                                    </div>
                                ";
            }
            // line 674
            echo "                                ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_address", [], "any", false, false, false, 674), "thecountry", [], "any", false, false, false, 674)) {
                // line 675
                echo "                                    <div class=\"kt-widget12__info\">
                                        <span class=\"kt-widget12__desc\">";
                // line 676
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Country"]);
                echo "</span>
                                        <span class=\"kt-widget12__value\">
                                            ";
                // line 678
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_address", [], "any", false, false, false, 678), "thecountry", [], "any", false, false, false, 678), "name", [], "any", false, false, false, 678), "html", null, true);
                echo "
                                        </span>
                                    </div>
                                ";
            }
            // line 682
            echo "                            </div>
                        ";
        }
        // line 684
        echo "                        <div class=\"kt-widget12__item\">
                            <div class=\"kt-widget12__info\">
                        \t\t<div class=\"kt-widget15\">
                        \t\t\t<div class=\"kt-widget15__map\">
                        \t\t\t\t<div id=\"kt_map_sender\" style=\"height:320px;\"></div>
                        \t\t\t</div>
                                </div>
                            </div>
                        </div>
        \t\t\t</div>
        \t\t</div>
        \t</div>
        </div>
        <!--end:: Widgets/Order Statistics-->
    </div>
    ";
        // line 699
        if (((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "type", [], "any", false, false, false, 699) == 2) || (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_id", [], "any", false, false, false, 699) != null))) {
            // line 700
            echo "        <div class=\"col-xl-6\">
            <!--begin:: Widgets/Order Statistics-->
            <div class=\"kt-portlet kt-portlet--height-fluid\">
            \t<div class=\"kt-portlet__head\">
            \t\t<div class=\"kt-portlet__head-label\">
            \t\t\t<h3 class=\"kt-portlet__head-title\">
            \t\t\t\t";
            // line 706
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Receiver Details"]);
            echo "
            \t\t\t</h3>
            \t\t</div>
            \t</div>
            \t<div class=\"kt-portlet__body kt-portlet__body--fluid\">
            \t\t<div class=\"kt-widget12\">
            \t\t\t<div class=\"kt-widget12__content\">
                            <div class=\"kt-widget12__item\">
                                <div class=\"kt-widget12__info\">
                                    <span class=\"kt-widget12__desc\">";
            // line 715
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Name"]);
            echo "</span>
                                    <span class=\"kt-widget12__value\">
                                        ";
            // line 717
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver", [], "any", false, false, false, 717), "name", [], "any", false, false, false, 717)), "html", null, true);
            echo "
                                        ";
            // line 718
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver", [], "any", false, false, false, 718), "userverify_dateverified", [], "any", false, false, false, 718)) {
                // line 719
                echo "                                            <i class=\"flaticon2-correct kt-font-info\"></i>
                                        ";
            }
            // line 721
            echo "                                    </span>
                                </div>
                                <div class=\"kt-widget12__info\">
                                    <span class=\"kt-widget12__desc\">";
            // line 724
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Mobile"]);
            echo "</span>
                                    <span class=\"kt-widget12__value\">";
            // line 725
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver", [], "any", false, false, false, 725), "mobile", [], "any", false, false, false, 725), "html", null, true);
            echo "</span>
                                </div>
                            </div>
                            ";
            // line 728
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver", [], "any", false, false, false, 728), "email", [], "any", false, false, false, 728) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver", [], "any", false, false, false, 728), "gender", [], "any", false, false, false, 728))) {
                // line 729
                echo "                                <div class=\"kt-widget12__item\">
                                    ";
                // line 730
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver", [], "any", false, false, false, 730), "email", [], "any", false, false, false, 730)) {
                    // line 731
                    echo "                                        <div class=\"kt-widget12__info\">
                                            <span class=\"kt-widget12__desc\">";
                    // line 732
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Email"]);
                    echo "</span>
                                            <span class=\"kt-widget12__value\">";
                    // line 733
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver", [], "any", false, false, false, 733), "email", [], "any", false, false, false, 733), "html", null, true);
                    echo "</span>
                                        </div>
                                    ";
                }
                // line 736
                echo "                                    ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver", [], "any", false, false, false, 736), "gender", [], "any", false, false, false, 736)) {
                    // line 737
                    echo "                                        <div class=\"kt-widget12__info\">
                                            <span class=\"kt-widget12__desc\">";
                    // line 738
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Gender"]);
                    echo "</span>
                                            <span class=\"kt-widget12__value\">";
                    // line 739
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver", [], "any", false, false, false, 739), "gender", [], "any", false, false, false, 739), "html", null, true);
                    echo "</span>
                                        </div>
                                    ";
                }
                // line 742
                echo "                                </div>
                            ";
            }
            // line 744
            echo "                            <div class=\"kt-widget12__item\">
                                <div class=\"kt-widget12__info\">
                                    <span class=\"kt-widget12__desc\">";
            // line 746
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Receiver Address"]);
            echo "</span>
                                    <span class=\"kt-widget12__value\">
                                        ";
            // line 748
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 748), "name", [], "any", false, false, false, 748)), "html", null, true);
            echo "
                                    </span>
                                </div>
                            </div>
                            <div class=\"kt-widget12__item\">
                                <div class=\"kt-widget12__info\">
                                    <span class=\"kt-widget12__desc\">";
            // line 754
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Street"]);
            echo "</span>
                                    <span class=\"kt-widget12__value\">
                                        ";
            // line 756
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 756), "street", [], "any", false, false, false, 756), "html", null, true);
            echo "
                                    </span>
                                </div>
                            </div>
                            ";
            // line 760
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 760), "area", [], "any", false, false, false, 760) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 760), "thecity", [], "any", false, false, false, 760))) {
                // line 761
                echo "                                <div class=\"kt-widget12__item\">
                                    ";
                // line 762
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 762), "area", [], "any", false, false, false, 762)) {
                    // line 763
                    echo "                                        <div class=\"kt-widget12__info\">
                                            <span class=\"kt-widget12__desc\">";
                    // line 764
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["County"]);
                    echo "</span>
                                            <span class=\"kt-widget12__value\">
                                                ";
                    // line 766
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 766), "area", [], "any", false, false, false, 766), "name", [], "any", false, false, false, 766), "html", null, true);
                    echo "
                                            </span>
                                        </div>
                                    ";
                }
                // line 770
                echo "                                    ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 770), "thecity", [], "any", false, false, false, 770)) {
                    // line 771
                    echo "                                        <div class=\"kt-widget12__info\">
                                            <span class=\"kt-widget12__desc\">";
                    // line 772
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["City"]);
                    echo "</span>
                                            <span class=\"kt-widget12__value\">
                                                ";
                    // line 774
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 774), "thecity", [], "any", false, false, false, 774), "name", [], "any", false, false, false, 774), "html", null, true);
                    echo "
                                            </span>
                                        </div>
                                    ";
                }
                // line 778
                echo "                                </div>
                            ";
            }
            // line 780
            echo "                            ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 780), "thestate", [], "any", false, false, false, 780) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 780), "thecountry", [], "any", false, false, false, 780))) {
                // line 781
                echo "                                <div class=\"kt-widget12__item\">
                                    ";
                // line 782
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 782), "thestate", [], "any", false, false, false, 782)) {
                    // line 783
                    echo "                                        <div class=\"kt-widget12__info\">
                                            <span class=\"kt-widget12__desc\">";
                    // line 784
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["State"]);
                    echo "</span>
                                            <span class=\"kt-widget12__value\">
                                                ";
                    // line 786
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 786), "thestate", [], "any", false, false, false, 786), "name", [], "any", false, false, false, 786), "html", null, true);
                    echo "
                                            </span>
                                        </div>
                                    ";
                }
                // line 790
                echo "                                    ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 790), "thecountry", [], "any", false, false, false, 790)) {
                    // line 791
                    echo "                                        <div class=\"kt-widget12__info\">
                                            <span class=\"kt-widget12__desc\">";
                    // line 792
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Country"]);
                    echo "</span>
                                            <span class=\"kt-widget12__value\">
                                                ";
                    // line 794
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 794), "thecountry", [], "any", false, false, false, 794), "name", [], "any", false, false, false, 794), "html", null, true);
                    echo "
                                            </span>
                                        </div>
                                    ";
                }
                // line 798
                echo "                                </div>
                            ";
            }
            // line 800
            echo "                            <div class=\"kt-widget12__item\">
                                <div class=\"kt-widget12__info\">
                            \t\t<div class=\"kt-widget15\">
                            \t\t\t<div class=\"kt-widget15__map\">
                            \t\t\t\t<div id=\"kt_map_receiver\" style=\"height:320px;\"></div>
                            \t\t\t</div>
                                    </div>
                                </div>
                            </div>
            \t\t\t</div>
            \t\t</div>
            \t</div>
            </div>
            <!--end:: Widgets/Order Statistics-->
        </div>
    ";
        }
        // line 816
        echo "</div>
<div class=\"row\">
    <div class=\"col-xl-6\">
        <!--begin:: Widgets/Last Updates-->
        <div class=\"kt-portlet kt-portlet--height-fluid\">
            <div class=\"kt-portlet__head\">
                <div class=\"kt-portlet__head-label\">
                    <h3 class=\"kt-portlet__head-title\">";
        // line 823
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Latest Updates"]);
        echo "</h3>
                </div>
            </div>
            <div class=\"kt-portlet__body\">
                <div class=\"kt-scroll\" data-scroll=\"true\" style=\"height: 300px\">
                    ";
        // line 828
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "activities", [], "any", false, false, false, 828));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["activity"]) {
            // line 829
            echo "                        <!--begin::widget 12-->
                        <div class=\"kt-widget4\">
                            <div class=\"kt-widget4__item\">
                                <span class=\"kt-widget4__icon\"><i class=\"flaticon-pie-chart-1 kt-font-info\"></i></span>
                                <div class=\"kt-widget4__info\">
        \t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"kt-widget4__username\">
                                        ";
            // line 835
            if (twig_get_attribute($this->env, $this->source, $context["activity"], "other", [], "any", false, false, false, 835)) {
                // line 836
                echo "                                            ";
                $context["text"] = ("activity_" . twig_get_attribute($this->env, $this->source, $context["activity"], "description", [], "any", false, false, false, 836));
                // line 837
                echo "                                            ";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), [($context["text"] ?? null)]);
                echo ": ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activity"], "other", [], "any", false, false, false, 837), "html", null, true);
                echo "
                                        ";
            } else {
                // line 839
                echo "                                            ";
                $context["text"] = ("activity_" . twig_get_attribute($this->env, $this->source, $context["activity"], "description", [], "any", false, false, false, 839));
                // line 840
                echo "            \t\t\t\t\t\t\t\t";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), [($context["text"] ?? null)]);
                echo "
                                        ";
            }
            // line 842
            echo "        \t\t\t\t\t\t\t</a>
        \t\t\t\t\t\t\t<p class=\"kt-widget4__text\">
        \t\t\t\t\t\t\t\t";
            // line 844
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activity"], "created_at", [], "any", false, false, false, 844), twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "dateformat", [], "any", false, false, false, 844)), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activity"], "created_at", [], "any", false, false, false, 844), "h:i"), "html", null, true);
            echo " ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activity"], "created_at", [], "any", false, false, false, 844), "a")]);
            echo "
        \t\t\t\t\t\t\t</p>
        \t\t\t\t\t\t</div>
                                <span class=\"kt-widget4__number kt-font-info\">";
            // line 847
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "user", [], "any", false, false, false, 847), "name", [], "any", false, false, false, 847), "html", null, true);
            echo "</span>
                            </div>
                        </div>
                        <!--end::Widget 12-->
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 852
            echo "                        <div class=\"kt-notification\">
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
            // line 865
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
        // line 871
        echo "                </div>
            </div>
        </div>
        <!--end:: Widgets/Last Updates-->
    </div>
    <div class=\"col-xl-6\" id=\"notes_continer\">

        <div class=\"kt-portlet kt-portlet--height-fluid\">
            <div class=\"kt-portlet__head\">
                <div class=\"kt-portlet__head-label\">
                    <h3 class=\"kt-portlet__head-title\">";
        // line 881
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Notes"]);
        echo "</h3>
                </div>
            </div>
            <div class=\"kt-portlet__body\">
                ";
        // line 885
        echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), ["ajax", "onNote", ["success" => "flashRequest(data.type,data.message);\$('#note_message').val('');", "class" => "kt_form notes"]]);
        echo "
                    <div class=\"form-group form-group-last kt-hide\">
                        <div class=\"alert alert-danger kt_form_msg_notes\" role=\"alert\">
                            <div class=\"alert-icon\"><i class=\"flaticon-warning\"></i></div>
                            <div class=\"alert-text\">
                                ";
        // line 890
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
                    <div class=\"form-group\">
                        <textarea class=\"form-control\" id=\"note_message\" rows=\"3\" name=\"note\" placeholder=\"";
        // line 900
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Write your notes"]);
        echo "\" required></textarea>
                    </div>
                    <div class=\"row\">
                        <div class=\"col\">
                            <button type=\"submit\" class=\"btn btn-label-brand btn-bold\">";
        // line 904
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Add note"]);
        echo "</button>
                            <button type=\"reset\" class=\"btn btn-clean btn-bold\">";
        // line 905
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cancel"]);
        echo "</button>
                        </div>
                    </div>
                ";
        // line 908
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
        echo "

                <div class=\"kt-separator kt-separator--space-lg kt-separator--border-dashed\"></div>
                <div id=\"notes\">
                    ";
        // line 912
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['item'] = ($context["order"] ?? null)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("notes"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 913
        echo "                </div>
            </div>
        </div>
    </div>
    <!--
        <div class=\"col-xl-6 kt-todo\">
            <div class=\"kt-grid__item kt-grid__item--fluid  kt-portlet kt-portlet--height-fluid kt-todo__list\" id=\"kt_todo_list\">
                <div class=\"kt-portlet__body kt-portlet__body--fit-x\">
                    <div class=\"kt-todo__head\">
                        <div class=\"kt-todo__toolbar\">
                            <div class=\"kt-todo__info\">
                                <span class=\"kt-todo__name\">
                                    ";
        // line 925
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Order Tasks"]);
        echo "
                                </span>
                            </div>
                            <div class=\"kt-todo__details\">
                                <a href=\"javascript:;\" class=\"btn btn-label-success btn-upper btn-sm btn-bold\">";
        // line 929
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["New Task"]);
        echo "</a>
                            </div>
                        </div>
                    </div>

                    <div class=\"kt-todo__body\">
                        ";
        // line 935
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tasks"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 936
            echo "                            <div class=\"kt-todo__items\" data-type=\"task\">
                                <div class=\"kt-todo__item kt-todo__item--unread\" data-id=\"1\" data-type=\"task\">
                                    <div class=\"kt-todo__info\">
                                        <div class=\"kt-todo__actions\">
                                            <label class=\"kt-checkbox kt-checkbox--single kt-checkbox--tick kt-checkbox--brand\">
                                                <input type=\"checkbox\">
                                                <span></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class=\"kt-todo__details\" data-toggle=\"view\">
                                        <div class=\"kt-todo__message\">
                                            <span class=\"kt-todo__subject\">";
            // line 948
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "title", [], "any", false, false, false, 948), "html", null, true);
            echo "</span>
                                        </div>
                                        <div class=\"kt-todo__labels\">
                                            <span class=\"kt-todo__label kt-badge kt-badge--unified-brand kt-badge--bold kt-badge--inline\">";
            // line 951
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "comment", [], "any", false, false, false, 951), "html", null, true);
            echo "</span>
                                        </div>
                                    </div>
                                    <div class=\"kt-todo__datetime\" data-toggle=\"view\">
                                        8:30 PM
                                    </div>
                                    <div class=\"kt-todo__sender\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"";
            // line 957
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["task"], "user", [], "any", false, false, false, 957), "name", [], "any", false, false, false, 957), "html", null, true);
            echo "\">
                                        ";
            // line 958
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["task"], "user", [], "any", false, false, false, 958), "avatar", [], "any", false, false, false, 958)) {
                // line 959
                echo "                                             <span class=\"kt-media kt-media--sm kt-media--danger kt-hidden\" style=\"background-image: url('";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["task"], "user", [], "any", false, false, false, 959), "avatar", [], "any", false, false, false, 959), "thumb", [0 => 100, 1 => 100, 2 => "crop"], "method", false, false, false, 959), "html", null, true);
                echo "')\">
                                                 <span></span>
                                             </span>
                                        ";
            } else {
                // line 963
                echo "                                            <div class=\"kt-todo__sender\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["task"], "user", [], "any", false, false, false, 963), "name", [], "any", false, false, false, 963), "html", null, true);
                echo "\">
                                                <span class=\"kt-media kt-media--sm kt-media--brand\">
                                                    <span>";
                // line 965
                echo twig_escape_filter($this->env, twig_slice($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["task"], "user", [], "any", false, false, false, 965), "name", [], "any", false, false, false, 965)), 0, 2), "html", null, true);
                echo "</span>
                                                </span>
                                            </div>
                                       ";
            }
            // line 969
            echo "                                    </div>
                                </div>
                            </div>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 973
            echo "                            <div class=\"kt-todo__items\" data-type=\"task\">
                                <div class=\"kt-todo__item kt-todo__item--unread\" data-type=\"task\">
                                    <div class=\"kt-todo__details\" data-toggle=\"view\">
                                        <div class=\"kt-todo__message\">
                                            <span class=\"kt-todo__subject\">";
            // line 977
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No tasks found"]);
            echo ".</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 983
        echo "                    </div>
                    ";
        // line 984
        if (($context["tasks"] ?? null)) {
            // line 985
            echo "                        <div class=\"kt-todo__foot\">
                            <div class=\"kt-todo__toolbar\">
                                <div class=\"kt-todo__controls\">
                                     ";
            // line 988
            echo twig_get_attribute($this->env, $this->source, ($context["tasks"] ?? null), "render", [], "any", false, false, false, 988);
            echo "
                                     <button class=\"kt-todo__icon\" data-toggle=\"kt-tooltip\" title=\"Previose page\">
                                         <i class=\"flaticon2-left-arrow\"></i>
                                     </button>

                                     <button class=\"kt-todo__icon\" data-toggle=\"kt-tooltip\" title=\"Next page\">
                                         <i class=\"flaticon2-right-arrow\"></i>
                                     </button>
                                </div>
                            </div>
                        </div>
                    ";
        }
        // line 1000
        echo "                </div>
            </div>
        </div>
    -->
</div>

<div class=\"modal fade\" id=\"assign_employee\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" >";
        // line 1010
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Assign Employee"]);
        echo "</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                </button>
            </div>
            ";
        // line 1014
        echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), ["ajax", "onAssign", ["success" => "created successfully!", "flash" => true, "class" => "kt_form"]]);
        echo "
                <div class=\"modal-body\">
                    <div class=\"row\">
                        <div class=\"form-group col-lg-12\">
                            <label>";
        // line 1018
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["To who?"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            <select class=\"form-control \" name=\"assigned_id\" data-live-search=\"true\">
                                <option data-hidden=\"true\"></option>
                                ";
        // line 1021
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["employees"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["employee"]) {
            // line 1022
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "id", [], "any", false, false, false, 1022), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "name", [], "any", false, false, false, 1022), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employee'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1024
        echo "                            </select>
                        </div>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">";
        // line 1029
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Close"]);
        echo "</button>
                    <button type=\"submit\" class=\"btn btn-primary\">";
        // line 1030
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Assign"]);
        echo "</button>
                </div>
            ";
        // line 1032
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
        echo "
        </div>
    </div>
</div>
<div class=\"modal fade\" id=\"assign_manifest\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" >";
        // line 1040
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Assign Manifest"]);
        echo "</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                </button>
            </div>
            ";
        // line 1044
        echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), ["ajax", "onManifest", ["success" => "created successfully!", "flash" => true, "class" => "kt_form"]]);
        echo "
                <div class=\"modal-body\">
                    <div class=\"row\">
                        <div class=\"form-group col-lg-12\">
                            <label>";
        // line 1048
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["To which manifest?"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            <select class=\"form-control \" name=\"manifest_id\" data-live-search=\"true\">
                                <option data-hidden=\"true\"></option>
                                ";
        // line 1051
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["manifestes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["manifest"]) {
            // line 1052
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["manifest"], "id", [], "any", false, false, false, 1052), "html", null, true);
            echo "\">#";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["manifest"], "id", [], "any", false, false, false, 1052), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["manifest"], "driver", [], "any", false, false, false, 1052), "name", [], "any", false, false, false, 1052), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['manifest'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1054
        echo "                            </select>
                        </div>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">";
        // line 1059
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Close"]);
        echo "</button>
                    <button type=\"submit\" class=\"btn btn-primary\">";
        // line 1060
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Assign"]);
        echo "</button>
                </div>
            ";
        // line 1062
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
        echo "
        </div>
    </div>
</div>
<div class=\"modal fade\" id=\"transfer_office\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" >";
        // line 1070
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Transfer to office"]);
        echo "</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                </button>
            </div>
            ";
        // line 1074
        echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), ["ajax", "onTransfer", ["success" => "created successfully!", "flash" => true, "class" => "kt_form"]]);
        echo "
                <div class=\"modal-body\">
                    <div class=\"row\">
                        <div class=\"form-group col-lg-12\">
                            <label>";
        // line 1078
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["To which office?"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            <select class=\"form-control \" name=\"office_id\" data-live-search=\"true\">
                                <option data-hidden=\"true\"></option>
                                ";
        // line 1081
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["offices"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["office"]) {
            // line 1082
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["office"], "id", [], "any", false, false, false, 1082), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["office"], "name", [], "any", false, false, false, 1082), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['office'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1084
        echo "                            </select>
                        </div>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">";
        // line 1089
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Close"]);
        echo "</button>
                    <button type=\"submit\" class=\"btn btn-primary\">";
        // line 1090
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Transfer"]);
        echo "</button>
                </div>
            ";
        // line 1092
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
        echo "
        </div>
    </div>
</div>
<div class=\"modal fade\" id=\"postpone\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" >";
        // line 1100
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Postpone"]);
        echo "</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                </button>
            </div>
            ";
        // line 1104
        echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), ["ajax", "onPostpone", ["success" => "created successfully!", "flash" => true, "class" => "kt_form"]]);
        echo "
            <div class=\"modal-body\">
                <div class=\"row\">
                    <div class=\"form-group col-lg-12\">
                        <label>";
        // line 1108
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["To Date"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                        <div class=\"input-group date\">
                            <input type=\"text\" class=\"form-control date\" readonly=\"\" name=\"ship_date\" value=\"";
        // line 1110
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_modify_filter($this->env, ($context["now"] ?? null), "+1 day"), twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "dateformat", [], "any", false, false, false, 1110)), "html", null, true);
        echo "\" required>
                            <div class=\"input-group-append\">
                                <span class=\"input-group-text\">
                                    <i class=\"la la-calendar\"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"form-group col-lg-12\">
                        <label>";
        // line 1121
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Reason"]);
        echo "</label>
                        <textarea class=\"form-control\" name=\"message\"></textarea>
                    </div>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">";
        // line 1127
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Close"]);
        echo "</button>
                <button type=\"submit\" class=\"btn btn-primary\">";
        // line 1128
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Postpone"]);
        echo "</button>
            </div>
            ";
        // line 1130
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
        echo "
        </div>
    </div>
</div>
<div class=\"modal fade\" id=\"refuse\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" >";
        // line 1138
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Refuse"]);
        echo "</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                </button>
            </div>

            ";
        // line 1143
        echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), ["ajax", "onRefuse", ["success" => "created successfully!", "flash" => true, "class" => "kt_form"]]);
        echo "
            <div class=\"modal-body\">
                <div class=\"row\">
                    <div class=\"form-group col-lg-12\">
                        <label>";
        // line 1147
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Reason"]);
        echo "</label>
                        <textarea class=\"form-control\" name=\"message\"></textarea>
                    </div>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">";
        // line 1153
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Close"]);
        echo "</button>
                <button type=\"submit\" class=\"btn btn-primary\">";
        // line 1154
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Refuse"]);
        echo "</button>
            </div>
            ";
        // line 1156
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
        echo "
        </div>
    </div>
</div>
<div class=\"modal fade\" id=\"discards\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" >";
        // line 1164
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Transfer as discards"]);
        echo "</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                </button>
            </div>

            ";
        // line 1169
        echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), ["ajax", "onDiscards", ["success" => "created successfully!", "flash" => true, "class" => "kt_form"]]);
        echo "
            <div class=\"modal-body\">
                <div class=\"row\">
                    <div class=\"form-group col-lg-12\">
                        <label>";
        // line 1173
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Reason"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                        <select class=\"form-control \" id=\"discard_reason\" name=\"message\" data-live-search=\"true\" required>
                            <option data-hidden=\"true\"></option>
                            <option value=\"1\">";
        // line 1176
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Receiver request"]);
        echo "</option>
                            <option value=\"2\">";
        // line 1177
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Receiver evade"]);
        echo "</option>
                            <option value=\"3\">";
        // line 1178
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sender request"]);
        echo "</option>
                        </select>
                    </div>
                </div>
                <div class=\"discard_reason_receiver kt-hidden\">
                    <div class=\"row\">
                        <div class=\"form-group form-group-last kt-hide\">
                            <div class=\"alert alert-danger kt_form_msg\" role=\"alert\">
                                <div class=\"alert-icon\"><i class=\"flaticon-warning\"></i></div>
                                <div class=\"alert-text\">
                                    ";
        // line 1188
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
                        <div class=\"form-group col-lg-12\">
                            <label>";
        // line 1198
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Return package fees responsiable"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            <div class=\"col-lg-9 col-xl-6\">
                                <div class=\"kt-radio-inline\">
                                    <label class=\"kt-radio\">
                                        <input type=\"radio\" name=\"return_package_fee\" class=\"return_package_fee\" value=\"1\" ";
        // line 1202
        if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "return_package_fee", [], "any", false, false, false, 1202) == 1)) {
            echo "checked";
        }
        echo " required> ";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Receiver"]);
        echo "
                                        <span></span>
                                    </label>
                                    <label class=\"kt-radio\">
                                        <input type=\"radio\" name=\"return_package_fee\" class=\"return_package_fee\" value=\"2\" ";
        // line 1206
        if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "return_package_fee", [], "any", false, false, false, 1206) == 2)) {
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
                    <div class=\"form-group row\">
                        ";
        // line 1214
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payments", [], "any", false, false, false, 1214), "where", [0 => "for_id", 1 => twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_id", [], "any", false, false, false, 1214)], "method", false, false, false, 1214));
        foreach ($context['_seq'] as $context["_key"] => $context["payment"]) {
            // line 1215
            echo "                            <label class=\"col-lg-9 col-form-label kt-align-left\" for=\"payment_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["payment"], "id", [], "any", false, false, false, 1215), "html", null, true);
            echo "\">
                                ";
            // line 1216
            if (twig_get_attribute($this->env, $this->source, $context["payment"], "payment_type", [], "any", false, false, false, 1216)) {
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["payment"], "payment_type", [], "any", false, false, false, 1216)]);
                echo ": ";
            }
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Is it paid ?"]);
            echo "
                            </label>
                            <div class=\"col-lg-3\">
                                <div class=\"kt-checkbox-single\">
                                    <label class=\"kt-checkbox\">
                                        <input type=\"checkbox\" name=\"payments[]\" id=\"payment_";
            // line 1221
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["payment"], "id", [], "any", false, false, false, 1221), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["payment"], "id", [], "any", false, false, false, 1221), "html", null, true);
            echo "\">
                                        <span></span>
                                    </label>
                                </div>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1227
        echo "                    </div>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">";
        // line 1231
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Close"]);
        echo "</button>
                <button type=\"submit\" class=\"btn btn-primary\">";
        // line 1232
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Discard"]);
        echo "</button>
            </div>
            ";
        // line 1234
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
        echo "
        </div>
    </div>
</div>
<div class=\"modal fade\" id=\"received\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" >";
        // line 1242
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Receiver information"]);
        echo "</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                </button>
            </div>

            ";
        // line 1247
        echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), ["ajax", "onDeliver", ["success" => "created successfully!", "flash" => true, "class" => "kt_form", "novalidate" => true]]);
        echo "
                <div class=\"modal-body\">
                    <div class=\"row\">

                        <div class=\"form-group col-lg-12\">
                            <label>";
        // line 1252
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Receiver"]);
        echo "/";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Client"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            <select class=\"form-control clients col-lg-12\" name=\"receiver_id\" id=\"receiver_id\" required>
                                <option data-hidden=\"true\"></option>
                                ";
        // line 1255
        if (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver", [], "any", false, false, false, 1255)) {
            // line 1256
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver", [], "any", false, false, false, 1256), "id", [], "any", false, false, false, 1256), "html", null, true);
            echo "\" selected>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver", [], "any", false, false, false, 1256), "name", [], "any", false, false, false, 1256), "html", null, true);
            echo "</option>
                                ";
        }
        // line 1258
        echo "                                ";
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "client", 1 => "c"], "method", false, false, false, 1258)) {
            // line 1259
            echo "                                    <option value=\"new\" data-icon=\"flaticon2-add\">";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Add New"]);
            echo "</option>
                                ";
        }
        // line 1261
        echo "                            </select>
                        </div>
                        <div class=\"form-group col-lg-12\">
                            <label>";
        // line 1264
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Receiver Address"]);
        echo "/";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Client Address"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            <select class=\"form-control receiver_address_id\" name=\"receiver_address_id\" id=\"receiver_address_id\" data-live-search=\"true\" title=\"";
        // line 1265
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select receiver first"]);
        echo "\" required>
                                <option data-hidden=\"true\"></option>
                                ";
        // line 1267
        if (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver", [], "any", false, false, false, 1267)) {
            // line 1268
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 1268), "id", [], "any", false, false, false, 1268), "html", null, true);
            echo "\" selected>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 1268), "name", [], "any", false, false, false, 1268), "html", null, true);
            echo "</option>
                                ";
        }
        // line 1270
        echo "                            </select>
                        </div>
                        <div class=\"col-lg-12 kt-hidden\" id=\"addnewreceiver\">
                            <div class=\"kt-portlet kt-portlet--bordered kt-portlet--head--noborder kt-margin-b-0\">
                                <div class=\"kt-portlet__head\">
                                    <div class=\"kt-portlet__head-label\">
                                        <h3 class=\"kt-portlet__head-title\">
                                            ";
        // line 1277
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Add a new client"]);
        echo "
                                        </h3>
                                    </div>
                                </div>
                                <div class=\"kt-portlet__body\">
                                    <div class=\"row\">
                                        <div class=\"form-group col-lg-12\">
                                            <label>";
        // line 1284
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Client Name"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <input type=\"text\" class=\"form-control name\" name=\"receiver[name]\" required />
                                        </div>
                                        <div class=\"form-group col-lg-6\">
                                            <label>";
        // line 1288
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Mobile"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <input type=\"text\" class=\"form-control mobile\" name=\"receiver[mobile]\" required />
                                        </div>
                                        <div class=\"form-group col-lg-6\">
                                            <label>";
        // line 1292
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Gender"]);
        echo "</label>
                                            <div class=\"kt-radio-inline\">
                                                <label class=\"kt-radio\">
                                                    <input type=\"radio\" name=\"receiver[gender]\" class=\"gender\" value=\"male\"> ";
        // line 1295
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Male"]);
        echo "
                                                    <span></span>
                                                </label>
                                                <label class=\"kt-radio\">
                                                    <input type=\"radio\" name=\"receiver[gender]\" class=\"gender\" value=\"female\"> ";
        // line 1299
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Female"]);
        echo "
                                                    <span></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"location-receiver\">
                                        <div class=\"row\">
                                            <div class=\"form-group col-lg-12\">
                                                <label>";
        // line 1308
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Address"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                <input type=\"text\" class=\"form-control address street_addr\" data-receiver=\"route\" name=\"receiver[street_address]\"  rel=\"receiver\" required/>
                                                <input type=\"hidden\" class=\"form-control lat\" data-receiver=\"lat\" name=\"receiver[lat]\" />
                                                <input type=\"hidden\" class=\"form-control lng\" data-receiver=\"lng\" name=\"receiver[lng]\" />
                                                <input type=\"hidden\" class=\"form-control url\" data-receiver=\"url\" name=\"receiver[url]\" />
                                            </div>
                                            <div class=\"form-group col-lg-6\">
                                                <label>";
        // line 1315
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Country"]);
        echo "</label>
                                                <select class=\"form-control country_id\" data-receiver=\"country\" data-live-search=\"true\" name=\"receiver[country]\">
                                                    <option data-hidden=\"true\"></option>
                                                    ";
        // line 1318
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 1319
            echo "                                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["country"], "id", [], "any", false, false, false, 1319), "html", null, true);
            echo "\" ";
            if ((($context["currentLang"] ?? null) != "en")) {
                echo "data-subtext=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["country"], "lang", [0 => ($context["currentLang"] ?? null)], "method", false, false, false, 1319), "name", [], "any", false, false, false, 1319), "html", null, true);
                echo "\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["country"], "lang", [0 => "en"], "method", false, false, false, 1319), "name", [], "any", false, false, false, 1319), "html", null, true);
            echo "</option>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1321
        echo "                                                </select>
                                            </div>
                                            <div class=\"form-group col-lg-6\">
                                                <label>";
        // line 1324
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Postal Code"]);
        echo "</label>
                                                <input class=\"form-control postal_code\" type=\"text\" data-receiver=\"postal_code\" name=\"receiver[postal_code]\" >
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"form-group col-lg-6\">
                                                <label>";
        // line 1330
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["State / Region"]);
        echo "</label>
                                                <select class=\"form-control state_id\" data-receiver=\"administrative_area_level_1\" title=\"";
        // line 1331
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select country first"]);
        echo "\" name=\"receiver[state]\" data-live-search=\"true\">
                                                    <option data-hidden=\"true\"></option>
                                                    ";
        // line 1333
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["states"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["state"]) {
            // line 1334
            echo "                                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["state"], "id", [], "any", false, false, false, 1334), "html", null, true);
            echo "\" ";
            if ((($context["currentLang"] ?? null) != "en")) {
                echo "data-subtext=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["state"], "lang", [0 => ($context["currentLang"] ?? null)], "method", false, false, false, 1334), "name", [], "any", false, false, false, 1334), "html", null, true);
                echo "\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["state"], "lang", [0 => "en"], "method", false, false, false, 1334), "name", [], "any", false, false, false, 1334), "html", null, true);
            echo "</option>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['state'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1336
        echo "                                                </select>
                                            </div>
                                            <div class=\"form-group col-lg-6\">
                                                <label>";
        // line 1339
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["City"]);
        echo "</label>
                                                <select class=\"form-control city_id\" data-receiver=\"locality\" name=\"receiver[city]\" title=\"";
        // line 1340
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select state first"]);
        echo "\" data-live-search=\"true\">
                                                    <option data-hidden=\"true\"></option>
                                                    ";
        // line 1342
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cities"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["city"]) {
            // line 1343
            echo "                                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["city"], "id", [], "any", false, false, false, 1343), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["city"], "name", [], "any", false, false, false, 1343), "html", null, true);
            echo "</option>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['city'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1345
        echo "                                                </select>
                                            </div>
                                            <div class=\"form-group col-lg-12\">
                                                <label>";
        // line 1348
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["County"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                <select class=\"form-control area_id\" data-receiver=\"sublocality\" name=\"receiver[county]\" title=\"";
        // line 1349
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select city first"]);
        echo "\" data-live-search=\"true\" required>
                                                    <option data-hidden=\"true\"></option>
                                                    ";
        // line 1351
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["areas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["county"]) {
            // line 1352
            echo "                                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["county"], "id", [], "any", false, false, false, 1352), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["county"], "name", [], "any", false, false, false, 1352), "html", null, true);
            echo "</option>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['county'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1354
        echo "                                                </select>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"form-group col-lg-12\">
                                                <label>";
        // line 1359
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Google Map"]);
        echo "</label>
                                                <div class=\"col-sm-12 map_canvas map_receiver\"></div>
                                                <span class=\"form-text text-muted\">";
        // line 1361
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Change the pin to select the right location"]);
        echo "</span>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <div class=\"col-lg-12\">
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"connect\" class=\"connect\" value=\"receiver\"> ";
        // line 1368
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
                                            <div class=\"col-md-12\">
                                                <div class=\"form-group kt-form__group--inline\">
                                                    <div class=\"kt-form__label\">
                                                        <label class=\"col-form-label\">";
        // line 1378
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Email"]);
        echo ":&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                    </div>
                                                    <div class=\"kt-form__control\">
                                                        <input type=\"text\" class=\"form-control email\" name=\"receiver[email]\" required/>
                                                    </div>
                                                </div>
                                                <div class=\"d-md-none kt-margin-b-10\"></div>
                                            </div>
                                            <div class=\"col-md-12\">
                                                <div class=\"form-group kt-form__group--inline\">
                                                    <div class=\"kt-form__label\">
                                                        <label class=\"col-form-label\">";
        // line 1389
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Username"]);
        echo ":&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                    </div>
                                                    <div class=\"kt-form__control\">
                                                        <input type=\"text\" class=\"form-control username\" name=\"receiver[username]\" required>
                                                    </div>
                                                </div>
                                                <div class=\"d-md-none kt-margin-b-10\"></div>
                                            </div>
                                            <div class=\"col-md-12\">
                                                <div class=\"form-group kt-form__group--inline\">
                                                    <div class=\"kt-form__label\">
                                                        <label class=\"col-form-label\">";
        // line 1400
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
                                    </div>
                                </div>
                                <div class=\"kt-portlet__foot\">
                                    <div class=\"row align-items-center\">
                                        <div class=\"col-lg-12\">
                                            <button type=\"button\" class=\"btn btn-success save\">";
        // line 1414
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Save"]);
        echo "</button>
                                            <button type=\"button\" class=\"btn btn-secondary cancel\">";
        // line 1415
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cancel"]);
        echo "</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-12 kt-hidden\" id=\"addnewreceiveraddress\">
                            <div class=\"kt-portlet kt-portlet--bordered kt-portlet--head--noborder kt-margin-b-0\">
                                <div class=\"kt-portlet__head\">
                                    <div class=\"kt-portlet__head-label\">
                                        <h3 class=\"kt-portlet__head-title\">
                                            ";
        // line 1426
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Add a new client address"]);
        echo "
                                        </h3>
                                    </div>
                                </div>
                                <div class=\"kt-portlet__body\">
                                    <div class=\"location-receiveraddress\">
                                        <div class=\"row\">
                                            <div class=\"form-group col-lg-12\">
                                                <label>";
        // line 1434
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Address"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                <input type=\"text\" class=\"form-control address street_addr\" data-receiveraddress=\"route\" name=\"receiveraddress[street_address]\"  rel=\"receiveraddress\" required/>
                                                <input type=\"hidden\" class=\"form-control lat\" data-receiveraddress=\"lat\" name=\"receiveraddress[lat]\" />
                                                <input type=\"hidden\" class=\"form-control lng\" data-receiveraddress=\"lng\" name=\"receiveraddress[lng]\" />
                                                <input type=\"hidden\" class=\"form-control url\" data-receiveraddress=\"url\" name=\"receiveraddress[url]\" />
                                            </div>
                                            <div class=\"form-group col-lg-6\">
                                                <label>";
        // line 1441
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Country"]);
        echo "</label>
                                                <select class=\"form-control country_id\" data-receiveraddress=\"country\" data-live-search=\"true\" name=\"receiveraddress[country]\">
                                                    <option data-hidden=\"true\"></option>
                                                    ";
        // line 1444
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 1445
            echo "                                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["country"], "id", [], "any", false, false, false, 1445), "html", null, true);
            echo "\" ";
            if ((($context["currentLang"] ?? null) != "en")) {
                echo "data-subtext=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["country"], "lang", [0 => ($context["currentLang"] ?? null)], "method", false, false, false, 1445), "name", [], "any", false, false, false, 1445), "html", null, true);
                echo "\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["country"], "lang", [0 => "en"], "method", false, false, false, 1445), "name", [], "any", false, false, false, 1445), "html", null, true);
            echo "</option>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1447
        echo "                                                </select>
                                            </div>
                                            <div class=\"form-group col-lg-6\">
                                                <label>";
        // line 1450
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Postal Code"]);
        echo "</label>
                                                <input class=\"form-control postal_code\" type=\"text\" data-sendreceiveraddresser=\"postal_code\" name=\"receiveraddress[postal_code]\" >
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"form-group col-lg-6\">
                                                <label>";
        // line 1456
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["State / Region"]);
        echo "</label>
                                                <select class=\"form-control state_id\" data-receiveraddress=\"administrative_area_level_1\" title=\"";
        // line 1457
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select country first"]);
        echo "\" name=\"receiveraddress[state]\" data-live-search=\"true\">
                                                    <option data-hidden=\"true\"></option>
                                                    ";
        // line 1459
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["states"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["state"]) {
            // line 1460
            echo "                                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["state"], "id", [], "any", false, false, false, 1460), "html", null, true);
            echo "\" ";
            if ((($context["currentLang"] ?? null) != "en")) {
                echo "data-subtext=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["state"], "lang", [0 => ($context["currentLang"] ?? null)], "method", false, false, false, 1460), "name", [], "any", false, false, false, 1460), "html", null, true);
                echo "\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["state"], "lang", [0 => "en"], "method", false, false, false, 1460), "name", [], "any", false, false, false, 1460), "html", null, true);
            echo "</option>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['state'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1462
        echo "                                                </select>
                                            </div>
                                            <div class=\"form-group col-lg-6\">
                                                <label>";
        // line 1465
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["City"]);
        echo "</label>
                                                <select class=\"form-control city_id\" data-receiveraddress=\"locality\" name=\"receiveraddress[city]\" title=\"";
        // line 1466
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select state first"]);
        echo "\" data-live-search=\"true\">
                                                    <option data-hidden=\"true\"></option>
                                                    ";
        // line 1468
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cities"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["city"]) {
            // line 1469
            echo "                                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["city"], "id", [], "any", false, false, false, 1469), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["city"], "name", [], "any", false, false, false, 1469), "html", null, true);
            echo "</option>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['city'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1471
        echo "                                                </select>
                                            </div>
                                            <div class=\"form-group col-lg-12\">
                                                <label>";
        // line 1474
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["County"]);
        echo "</label>
                                                <select class=\"form-control area_id\" data-receiveraddress=\"sublocality\" name=\"receiveraddress[county]\" title=\"";
        // line 1475
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select city first"]);
        echo "\" data-live-search=\"true\">
                                                    <option data-hidden=\"true\"></option>
                                                    ";
        // line 1477
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["areas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["county"]) {
            // line 1478
            echo "                                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["county"], "id", [], "any", false, false, false, 1478), "html", null, true);
            echo "\" ";
            if ((($context["currentLang"] ?? null) != "en")) {
                echo "data-subtext=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["county"], "lang", [0 => ($context["currentLang"] ?? null)], "method", false, false, false, 1478), "name", [], "any", false, false, false, 1478), "html", null, true);
                echo "\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["county"], "lang", [0 => "en"], "method", false, false, false, 1478), "name", [], "any", false, false, false, 1478), "html", null, true);
            echo "</option>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['county'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1480
        echo "                                                </select>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"form-group col-lg-12\">
                                                <label>";
        // line 1485
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Google Map"]);
        echo "</label>
                                                <div class=\"col-sm-12 map_canvas map_receiveraddress\"></div>
                                                <span class=\"form-text text-muted\">";
        // line 1487
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Change the pin to select the right location"]);
        echo "</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"kt-portlet__foot\">
                                    <div class=\"row align-items-center\">
                                        <div class=\"col-lg-12\">
                                            <button type=\"button\" class=\"btn btn-success save\">";
        // line 1495
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Save"]);
        echo "</button>
                                            <button type=\"button\" class=\"btn btn-secondary cancel\">";
        // line 1496
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cancel"]);
        echo "</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit\"></div>
                        <div class=\"form-group col-lg-12 ";
        // line 1503
        if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "return_defray", [], "any", false, false, false, 1503) != 1)) {
            echo "kt-hidden";
        }
        echo " package_fee\">
                            <label>";
        // line 1504
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Courier Cost"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            <div class=\"input-group\">
                                ";
        // line 1506
        if ((twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "place_symbol_before", [], "any", false, false, false, 1506) == 1)) {
            // line 1507
            echo "                                    <div class=\"input-group-prepend\">
                                        <span class=\"input-group-text\">
                                            ";
            // line 1509
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "currency_symbol", [], "any", false, false, false, 1509), "html", null, true);
            echo "
                                        </span>
                                    </div>
                                ";
        }
        // line 1513
        echo "                                    <input type=\"text\" class=\"form-control decimal\" data-type='currency' id=\"courier_fee\" name=\"courier_fee\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "courier_fee", [], "any", false, false, false, 1513), "html", null, true);
        echo "\" required />
                                ";
        // line 1514
        if ((twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "place_symbol_before", [], "any", false, false, false, 1514) == 0)) {
            // line 1515
            echo "                                    <div class=\"input-group-append\">
                                        <span class=\"input-group-text\">
                                            ";
            // line 1517
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "currency_symbol", [], "any", false, false, false, 1517), "html", null, true);
            echo "
                                        </span>
                                    </div>
                                ";
        }
        // line 1521
        echo "                            </div>
                        </div>
                        <div class=\"form-group col-lg-12\">
                            <label>";
        // line 1524
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Return package cost"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            <div class=\"kt-radio-inline\">
                                <label class=\"kt-radio\">
                                    <input type=\"radio\" name=\"return_defray\" class=\"return_defray\" value=\"1\" ";
        // line 1527
        if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "return_defray", [], "any", false, false, false, 1527) == 1)) {
            echo "checked";
        }
        echo " required> ";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yes"]);
        echo "
                                    <span></span>
                                </label>
                                <label class=\"kt-radio\">
                                    <input type=\"radio\" name=\"return_defray\" class=\"return_defray\" value=\"2\" ";
        // line 1531
        if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "return_defray", [], "any", false, false, false, 1531) == 2)) {
            echo "checked";
        }
        echo "  required> ";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No"]);
        echo "
                                    <span></span>
                                </label>
                            </div>
                        </div>
                        <div class=\"form-group col-lg-12 ";
        // line 1536
        if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "return_defray", [], "any", false, false, false, 1536) != 1)) {
            echo "kt-hidden";
        }
        echo " package_fee\">
                            <label>";
        // line 1537
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Package Cost"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            <div class=\"input-group\">
                                ";
        // line 1539
        if ((twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "place_symbol_before", [], "any", false, false, false, 1539) == 1)) {
            // line 1540
            echo "                                    <div class=\"input-group-prepend\">
                                        <span class=\"input-group-text\">
                                            ";
            // line 1542
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "currency_symbol", [], "any", false, false, false, 1542), "html", null, true);
            echo "
                                        </span>
                                    </div>
                                ";
        }
        // line 1546
        echo "                                    <input type=\"text\" class=\"form-control decimal\" data-type='currency' id=\"package_fee\" name=\"package_fee\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "package_fee", [], "any", false, false, false, 1546), "html", null, true);
        echo "\" required />
                                ";
        // line 1547
        if ((twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "place_symbol_before", [], "any", false, false, false, 1547) == 0)) {
            // line 1548
            echo "                                    <div class=\"input-group-append\">
                                        <span class=\"input-group-text\">
                                            ";
            // line 1550
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "currency_symbol", [], "any", false, false, false, 1550), "html", null, true);
            echo "
                                        </span>
                                    </div>
                                ";
        }
        // line 1554
        echo "                            </div>
                        </div>
                        <div class=\"form-group col-lg-12 ";
        // line 1556
        if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "return_defray", [], "any", false, false, false, 1556) != 1)) {
            echo "kt-hidden";
        }
        echo " package_fee\">
                            <label>";
        // line 1557
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Return Shipment Cost"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            <div class=\"input-group\">
                                ";
        // line 1559
        if ((twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "place_symbol_before", [], "any", false, false, false, 1559) == 1)) {
            // line 1560
            echo "                                    <div class=\"input-group-prepend\">
                                        <span class=\"input-group-text\">
                                            ";
            // line 1562
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "currency_symbol", [], "any", false, false, false, 1562), "html", null, true);
            echo "
                                        </span>
                                    </div>
                                ";
        }
        // line 1566
        echo "                                    <input type=\"text\" class=\"form-control decimal\" data-type='currency' name=\"return_courier_fee\" id=\"return_courier_fee\" value=\"";
        if (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "package_fee", [], "any", false, false, false, 1566)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "return_courier_fee", [], "any", false, false, false, 1566), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "fees", [], "any", false, false, false, 1566), "delivery_cost_back_receiver", [], "any", false, false, false, 1566), "html", null, true);
        }
        echo "\" required />
                                ";
        // line 1567
        if ((twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "place_symbol_before", [], "any", false, false, false, 1567) == 0)) {
            // line 1568
            echo "                                    <div class=\"input-group-append\">
                                        <span class=\"input-group-text\">
                                            ";
            // line 1570
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "currency_symbol", [], "any", false, false, false, 1570), "html", null, true);
            echo "
                                        </span>
                                    </div>
                                ";
        }
        // line 1574
        echo "                            </div>
                        </div>
                        <div class=\"form-group col-lg-12 ";
        // line 1576
        if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "return_defray", [], "any", false, false, false, 1576) != 1)) {
            echo "kt-hidden";
        }
        echo " package_fee\">
                            <label>";
        // line 1577
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Return package fees responsiable"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            <div class=\"kt-radio-inline\">
                                <label class=\"kt-radio\">
                                    <input type=\"radio\" name=\"return_package_fee\" class=\"return_package_fee\" value=\"1\" ";
        // line 1580
        if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "return_package_fee", [], "any", false, false, false, 1580) != 2)) {
            echo "checked";
        }
        echo " required> ";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Receiver"]);
        echo "
                                    <span></span>
                                </label>
                                <label class=\"kt-radio\">
                                    <input type=\"radio\" name=\"return_package_fee\" class=\"return_package_fee\" value=\"2\" required ";
        // line 1584
        if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "return_package_fee", [], "any", false, false, false, 1584) == 2)) {
            echo "checked";
        }
        echo "> ";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sender"]);
        echo "
                                    <span></span>
                                </label>
                            </div>
                        </div>

                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">";
        // line 1593
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Close"]);
        echo "</button>
                    <button type=\"button\" class=\"btn btn-info save\">";
        // line 1594
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Confirm"]);
        echo "</button>
                    <button type=\"submit\" class=\"btn btn-primary kt-hidden\">";
        // line 1595
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Deliver"]);
        echo "</button>
                </div>
            ";
        // line 1597
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
        echo "
        </div>
    </div>
</div>
<!--
";
        // line 1602
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('styles'        );
        // line 1603
        echo "    <style>
        .kt-todo .kt-todo__content {
          width: 100%; }

        .kt-todo .kt-todo__aside {
          padding: 20px;
          width: 275px; }
          @media (min-width: 1025px) {
            .kt-todo .kt-todo__aside {
              margin-right: 25px; } }
          .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item {
            margin-bottom: 0.5rem; }
            .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item .kt-nav__link-title {
              padding-left: 1.9rem;
              font-weight: 600;
              color: #48465b;
              font-size: 1.1rem;
              padding-left: 1.9rem;
              font-weight: 600;
              color: #48465b;
              font-size: 1.1rem; }
            .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item .kt-nav__link {
              padding: 0.6rem 20px;
              border-radius: 4px; }
              .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item .kt-nav__link i {
                color: #8e96b8; }
              .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item .kt-nav__link g [fill] {
                -webkit-transition: fill 0.3s ease;
                transition: fill 0.3s ease;
                fill: #8e96b8; }
              .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item .kt-nav__link:hover g [fill] {
                -webkit-transition: fill 0.3s ease;
                transition: fill 0.3s ease; }
              .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item .kt-nav__link .kt-nav__link-icon {
                text-align: center;
                margin: 0 0.7rem 0 -0.23rem; }
                .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item .kt-nav__link .kt-nav__link-icon.kt-nav__link-icon--size {
                  font-size: 0.9rem;
                  color: #93a2dd; }
                .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item .kt-nav__link .kt-nav__link-icon svg {
                  width: 20px;
                  height: 20px; }
                .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item .kt-nav__link .kt-nav__link-icon g [fill] {
                  fill: #93a2dd; }
              .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item .kt-nav__link .kt-nav__link-text {
                font-weight: 500;
                color: #595d6e; }
            .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item:last-child {
              margin-bottom: 0; }
              .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item:last-child .kt-nav__link .kt-nav__link-icon {
                font-size: 0.9rem; }
            .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item.hover .kt-nav__link, .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item.kt-nav__item--selected .kt-nav__link, .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item.kt-nav__item--active .kt-nav__link {
              background-color: #f7f8fa;
              border-radius: 4px; }
              .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item.hover .kt-nav__link i, .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item.kt-nav__item--selected .kt-nav__link i, .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item.kt-nav__item--active .kt-nav__link i {
                color: #5d78ff; }
              .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item.hover .kt-nav__link g [fill], .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item.kt-nav__item--selected .kt-nav__link g [fill], .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item.kt-nav__item--active .kt-nav__link g [fill] {
                -webkit-transition: fill 0.3s ease;
                transition: fill 0.3s ease;
                fill: #5d78ff; }
              .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item.hover .kt-nav__link:hover g [fill], .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item.kt-nav__item--selected .kt-nav__link:hover g [fill], .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item.kt-nav__item--active .kt-nav__link:hover g [fill] {
                -webkit-transition: fill 0.3s ease;
                transition: fill 0.3s ease; }
              .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item.hover .kt-nav__link .kt-nav__link-text, .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item.kt-nav__item--selected .kt-nav__link .kt-nav__link-text, .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item.kt-nav__item--active .kt-nav__link .kt-nav__link-text {
                color: #5d78ff; }

        .kt-todo .kt-todo__header {
          padding: 13px 25px;
          display: -webkit-box;
          display: -ms-flexbox;
          display: flex;
          -ms-flex-wrap: wrap;
          flex-wrap: wrap;
          -webkit-box-align: center;
          -ms-flex-align: center;
          align-items: center;
          width: 100%; }
          .kt-todo .kt-todo__header .kt-todo__title {
            margin: 0;
            font-size: 1.4rem;
            padding-right: 2rem;
            font-weight: 600;
            color: #595d6e; }
          .kt-todo .kt-todo__header .kt-todo__nav {
            padding: 0;
            -webkit-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            margin-top: 0.2rem; }
            .kt-todo .kt-todo__header .kt-todo__nav .btn {
              margin-right: 1rem; }
            .kt-todo .kt-todo__header .kt-todo__nav .kt-todo__link {
              padding: 0.5rem 1.2rem;
              font-weight: 500;
              color: #74788d;
              border-radius: 4px; }
              .kt-todo .kt-todo__header .kt-todo__nav .kt-todo__link:not(:first-child):not(:last-child) {
                margin: 0 0.2rem; }
              .kt-todo .kt-todo__header .kt-todo__nav .kt-todo__link:hover, .kt-todo .kt-todo__header .kt-todo__nav .kt-todo__link.kt-todo__link--selected, .kt-todo .kt-todo__header .kt-todo__nav .kt-todo__link.kt-todo__link--active {
                background-color: #f7f8fa;
                color: #5d78ff;
                border-radius: 4px; }
          .kt-todo .kt-todo__header .kt-todo__users {
            line-height: 0;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center; }
            .kt-todo .kt-todo__header .kt-todo__users .kt-media {
              position: relative;
              z-index: 0; }
              .kt-todo .kt-todo__header .kt-todo__users .kt-media:not(:first-child):not(:last-child) {
                margin-left: -0.1rem; }
          @media (max-width: 1024px) {
            .kt-todo .kt-todo__header {
              padding: 10px 15px; } }

        .kt-todo .kt-todo__icon {
          border: 0;
          background: none;
          outline: none !important;
          -webkit-box-shadow: none;
          box-shadow: none;
          outline: none !important;
          display: -webkit-box;
          display: -ms-flexbox;
          display: flex;
          -webkit-box-pack: center;
          -ms-flex-pack: center;
          justify-content: center;
          -webkit-box-align: center;
          -ms-flex-align: center;
          align-items: center;
          height: 35px;
          width: 35px;
          background-color: #f7f8fa;
          -webkit-transition: all 0.3s ease;
          transition: all 0.3s ease;
          cursor: pointer;
          margin: 0;
          border-radius: 0;
          border-radius: 4px; }
          .kt-todo .kt-todo__icon i {
            font-size: 1.1rem; }
          .kt-todo .kt-todo__icon.kt-todo__icon--sm {
            height: 26px;
            width: 26px; }
            .kt-todo .kt-todo__icon.kt-todo__icon--sm i {
              font-size: 0.8rem; }
          .kt-todo .kt-todo__icon.kt-todo__icon--md {
            height: 30px;
            width: 30px; }
            .kt-todo .kt-todo__icon.kt-todo__icon--md i {
              font-size: 1rem; }
          .kt-todo .kt-todo__icon.kt-todo__icon--light {
            background-color: transparent; }
          .kt-todo .kt-todo__icon i {
            color: #8e96b8; }
          .kt-todo .kt-todo__icon g [fill] {
            -webkit-transition: fill 0.3s ease;
            transition: fill 0.3s ease;
            fill: #8e96b8; }
          .kt-todo .kt-todo__icon:hover g [fill] {
            -webkit-transition: fill 0.3s ease;
            transition: fill 0.3s ease; }
          .kt-todo .kt-todo__icon.kt-todo__icon--active, .kt-todo .kt-todo__icon:hover {
            -webkit-transition: all 0.3s ease;
            transition: all 0.3s ease;
            background-color: #ebedf2; }
            .kt-todo .kt-todo__icon.kt-todo__icon--active.kt-todo__icon--light, .kt-todo .kt-todo__icon:hover.kt-todo__icon--light {
              background-color: transparent; }
            .kt-todo .kt-todo__icon.kt-todo__icon--active i, .kt-todo .kt-todo__icon:hover i {
              color: #5d78ff; }
            .kt-todo .kt-todo__icon.kt-todo__icon--active g [fill], .kt-todo .kt-todo__icon:hover g [fill] {
              -webkit-transition: fill 0.3s ease;
              transition: fill 0.3s ease;
              fill: #5d78ff; }
            .kt-todo .kt-todo__icon.kt-todo__icon--active:hover g [fill], .kt-todo .kt-todo__icon:hover:hover g [fill] {
              -webkit-transition: fill 0.3s ease;
              transition: fill 0.3s ease; }
          .kt-todo .kt-todo__icon.kt-todo__icon--back {
            background-color: transparent; }
            .kt-todo .kt-todo__icon.kt-todo__icon--back i {
              color: #8e96b8;
              font-size: 1.5rem; }
            .kt-todo .kt-todo__icon.kt-todo__icon--back g [fill] {
              -webkit-transition: fill 0.3s ease;
              transition: fill 0.3s ease;
              fill: #8e96b8; }
            .kt-todo .kt-todo__icon.kt-todo__icon--back:hover g [fill] {
              -webkit-transition: fill 0.3s ease;
              transition: fill 0.3s ease; }
            .kt-todo .kt-todo__icon.kt-todo__icon--back svg {
              height: 32px;
              width: 32px; }
            .kt-todo .kt-todo__icon.kt-todo__icon--back:hover {
              background-color: transparent; }
              .kt-todo .kt-todo__icon.kt-todo__icon--back:hover i {
                color: #5d78ff; }
              .kt-todo .kt-todo__icon.kt-todo__icon--back:hover g [fill] {
                -webkit-transition: fill 0.3s ease;
                transition: fill 0.3s ease;
                fill: #5d78ff; }
              .kt-todo .kt-todo__icon.kt-todo__icon--back:hover:hover g [fill] {
                -webkit-transition: fill 0.3s ease;
                transition: fill 0.3s ease; }

        .kt-todo .kt-todo__list {
          display: -webkit-box !important;
          display: -ms-flexbox !important;
          display: flex !important;
          padding: 0; }
          .kt-todo .kt-todo__list .kt-todo__head .kt-todo__toolbar {
            position: relative;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            padding: 0 25px; }
            .kt-todo .kt-todo__list .kt-todo__head .kt-todo__toolbar .kt-todo__actions {
              display: -webkit-box;
              display: -ms-flexbox;
              display: flex;
              -webkit-box-align: center;
              -ms-flex-align: center;
              align-items: center;
              margin-right: 1rem; }
              .kt-todo .kt-todo__list .kt-todo__head .kt-todo__toolbar .kt-todo__actions .kt-todo__check {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center; }
                .kt-todo .kt-todo__list .kt-todo__head .kt-todo__toolbar .kt-todo__actions .kt-todo__check .kt-checkbox {
                  margin: 0;
                  padding-left: 0; }
                .kt-todo .kt-todo__list .kt-todo__head .kt-todo__toolbar .kt-todo__actions .kt-todo__check .kt-todo__icon {
                  margin-left: 0; }
              .kt-todo .kt-todo__list .kt-todo__head .kt-todo__toolbar .kt-todo__actions .kt-todo__panel {
                display: none;
                -ms-flex-wrap: wrap;
                flex-wrap: wrap; }
              .kt-todo .kt-todo__list .kt-todo__head .kt-todo__toolbar .kt-todo__actions .btn {
                padding: 0.6rem 1rem; }
              .kt-todo .kt-todo__list .kt-todo__head .kt-todo__toolbar .kt-todo__actions.kt-todo__actions--expanded .kt-todo__panel {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex; }
              .kt-todo .kt-todo__list .kt-todo__head .kt-todo__toolbar .kt-todo__actions .kt-todo__icon {
                margin-right: 0.5rem; }
                .kt-todo .kt-todo__list .kt-todo__head .kt-todo__toolbar .kt-todo__actions .kt-todo__icon.kt-todo__icon--back {
                  margin-right: 2.5rem; }
            .kt-todo .kt-todo__list .kt-todo__head .kt-todo__toolbar .kt-todo__controls {
              display: -webkit-box;
              display: -ms-flexbox;
              display: flex;
              -webkit-box-align: center;
              -ms-flex-align: center;
              align-items: center;
              margin: 0.4rem 0; }
              .kt-todo .kt-todo__list .kt-todo__head .kt-todo__toolbar .kt-todo__controls .kt-todo__icon {
                margin-left: 0.5rem; }
              .kt-todo .kt-todo__list .kt-todo__head .kt-todo__toolbar .kt-todo__controls .kt-todo__sort {
                margin-left: 0.5rem; }
              .kt-todo .kt-todo__list .kt-todo__head .kt-todo__toolbar .kt-todo__controls .kt-todo__pages .kt-todo__perpage {
                color: #74788d;
                font-size: 1rem;
                font-weight: 500;
                margin-right: 1rem;
                cursor: pointer;
                -webkit-transition: all 0.3s ease;
                transition: all 0.3s ease;
                padding: 0.5rem 0; }
                .kt-todo .kt-todo__list .kt-todo__head .kt-todo__toolbar .kt-todo__controls .kt-todo__pages .kt-todo__perpage:hover {
                  -webkit-transition: all 0.3s ease;
                  transition: all 0.3s ease;
                  color: #5d78ff; }
            .kt-todo .kt-todo__list .kt-todo__head .kt-todo__toolbar .kt-todo__sep {
              display: -webkit-box;
              display: -ms-flexbox;
              display: flex;
              height: 1rem;
              width: 1rem; }
          .kt-todo .kt-todo__list .kt-todo__body {
            padding: 20px 0 0 0; }
            .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items {
              padding: 0;
              margin-bottom: 15px; }
              .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-align: start;
                -ms-flex-align: start;
                align-items: flex-start;
                padding: 12px 25px;
                -webkit-transition: all 0.3s ease;
                transition: all 0.3s ease;
                cursor: pointer; }
                .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item .kt-todo__info {
                  display: -webkit-box;
                  display: -ms-flexbox;
                  display: flex; }
                  @media screen\\0 {
                    .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item .kt-todo__info {
                      padding: 8px 0; } }
                  @media screen\\0 {
                    .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item .kt-todo__info {
                      min-width: 210px; } }
                  .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item .kt-todo__info .kt-todo__actions {
                    display: -webkit-box;
                    display: -ms-flexbox;
                    display: flex;
                    margin: 0.3rem 10px 0 0;
                    -webkit-box-align: center;
                    -ms-flex-align: center;
                    align-items: center; }
                    @media screen\\0 {
                      .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item .kt-todo__info .kt-todo__actions {
                        min-width: 70px; } }
                    .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item .kt-todo__info .kt-todo__actions .kt-checkbox {
                      margin: 0;
                      padding: 0;
                      margin-right: 10px; }
                    .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item .kt-todo__info .kt-todo__actions .kt-todo__icon {
                      height: 22px;
                      width: 22px; }
                      .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item .kt-todo__info .kt-todo__actions .kt-todo__icon i {
                        font-size: 1rem;
                        color: #ebedf2; }
                      .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item .kt-todo__info .kt-todo__actions .kt-todo__icon:hover i {
                        color: rgba(255, 184, 34, 0.5) !important; }
                      .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item .kt-todo__info .kt-todo__actions .kt-todo__icon.kt-todo__icon--on i {
                        color: #ffb822 !important; }
                  .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item .kt-todo__info .kt-todo__sender {
                    display: -webkit-box;
                    display: -ms-flexbox;
                    display: flex;
                    -webkit-box-align: center;
                    -ms-flex-align: center;
                    align-items: center;
                    margin-right: 30px;
                    width: 175px; }
                    @media screen\\0 {
                      .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item .kt-todo__info .kt-todo__sender {
                        min-width: 175px; } }
                    .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item .kt-todo__info .kt-todo__sender .kt-media {
                      margin-right: 10px;
                      min-width: 30px !important; }
                      .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item .kt-todo__info .kt-todo__sender .kt-media span {
                        min-width: 30px !important; }
                    .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item .kt-todo__info .kt-todo__sender .kt-todo__author {
                      font-size: 1rem;
                      color: #595d6e;
                      font-weight: 500; }
                    @media (max-width: 1400px) {
                      .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item .kt-todo__info .kt-todo__sender {
                        display: block;
                        width: 70px;
                        margin-right: 10px; }
                        .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item .kt-todo__info .kt-todo__sender .kt-todo__author {
                          display: block; }
                        .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item .kt-todo__info .kt-todo__sender .kt-media {
                          margin-bottom: 5px; } }
                .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item .kt-todo__details {
                  -webkit-box-flex: 1;
                  -ms-flex-positive: 1;
                  flex-grow: 1;
                  margin-top: 5px; }
                  @media screen\\0 {
                    .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item .kt-todo__details {
                      width: 0;
                      height: 0; } }
                  .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item .kt-todo__details .kt-todo__message .kt-todo__subject {
                    font-size: 1rem;
                    color: #595d6e;
                    font-weight: 500; }
                  .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item .kt-todo__details .kt-todo__message .kt-todo__summary {
                    font-size: 1rem;
                    color: #a2a5b9;
                    font-weight: 400;
                    text-overflow: ellipsis; }
                  .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item .kt-todo__details .kt-todo__labels {
                    display: -webkit-box;
                    display: -ms-flexbox;
                    display: flex;
                    margin-top: 5px; }
                    .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item .kt-todo__details .kt-todo__labels .kt-todo__label {
                      margin-right: 5px; }
                .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item .kt-todo__datetime {
                  font-size: 1rem;
                  color: #a2a5b9;
                  font-weight: 400;
                  margin-right: 1rem;
                  margin-top: 5px;
                  width: 85px;
                  text-align: right; }
                  @media (max-width: 1400px) {
                    .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item .kt-todo__datetime {
                      width: 70px; } }
                .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item:hover, .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item.kt-todo__item--selected {
                  -webkit-transition: all 0.3s ease;
                  transition: all 0.3s ease;
                  background-color: #f7f8fa; }
                  .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item:hover .kt-todo__info .kt-todo__actions .kt-todo__icon i, .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item.kt-todo__item--selected .kt-todo__info .kt-todo__actions .kt-todo__icon i {
                    font-size: 1rem;
                    color: #e2e5ec; }
                .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item.kt-todo__item--unread .kt-todo__sender .kt-todo__author {
                  color: #48465b;
                  font-weight: 600; }
                .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item.kt-todo__item--unread .kt-todo__details .kt-todo__message .kt-todo__subject {
                  color: #595d6e;
                  font-weight: 600; }
                .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item.kt-todo__item--unread .kt-todo__datetime {
                  color: #48465b;
                  font-weight: 600; }
          .kt-todo .kt-todo__list .kt-todo__foot {
            margin-top: 10px;
            padding: 0 25px; }
            .kt-todo .kt-todo__list .kt-todo__foot .kt-todo__toolbar {
              float: right; }
              .kt-todo .kt-todo__list .kt-todo__foot .kt-todo__toolbar .kt-todo__controls {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                margin-left: 1rem; }
                .kt-todo .kt-todo__list .kt-todo__foot .kt-todo__toolbar .kt-todo__controls .kt-todo__icon {
                  margin-left: 0.5rem; }
                .kt-todo .kt-todo__list .kt-todo__foot .kt-todo__toolbar .kt-todo__controls .kt-todo__sort {
                  margin-left: 0.5rem; }
                .kt-todo .kt-todo__list .kt-todo__foot .kt-todo__toolbar .kt-todo__controls .kt-todo__pages {
                  margin-left: 0.5rem; }
                  .kt-todo .kt-todo__list .kt-todo__foot .kt-todo__toolbar .kt-todo__controls .kt-todo__pages .kt-todo__perpage {
                    color: #74788d;
                    font-size: 1rem;
                    font-weight: 500;
                    margin-right: 1rem;
                    cursor: pointer;
                    -webkit-transition: all 0.3s ease;
                    transition: all 0.3s ease;
                    padding: 0.5rem 0; }
                    .kt-todo .kt-todo__list .kt-todo__foot .kt-todo__toolbar .kt-todo__controls .kt-todo__pages .kt-todo__perpage:hover {
                      -webkit-transition: all 0.3s ease;
                      transition: all 0.3s ease;
                      color: #5d78ff; }

        .kt-todo .kt-todo__view {
          padding: 0;
          display: -webkit-box !important;
          display: -ms-flexbox !important;
          display: flex !important; }
          .kt-todo  {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            height: 100%;
            padding-bottom: 25px; }
            @media (max-width: 1024px) {
              .kt-todo  {
                padding-bottom: 15px; } }
            .kt-todo  .kt-todo__head {
              width: 100%; }
              .kt-todo  .kt-todo__head .kt-todo__toolbar {
                cursor: pointer;
                padding-top: 0.9rem;
                width: 100%;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -ms-flex-wrap: wrap;
                flex-wrap: wrap; }
                .kt-todo  .kt-todo__head .kt-todo__toolbar .kt-todo__icon.kt-todo__icon--back {
                  display: none; }
                .kt-todo  .kt-todo__head .kt-todo__toolbar .kt-todo__info {
                  display: -webkit-box;
                  display: -ms-flexbox;
                  display: flex;
                  -webkit-box-align: center;
                  -ms-flex-align: center;
                  align-items: center;
                  -webkit-box-flex: 1;
                  -ms-flex-positive: 1;
                  flex-grow: 1; }
                  .kt-todo  .kt-todo__head .kt-todo__toolbar .kt-todo__info .kt-media {
                    margin-right: 0.7rem; }
                  .kt-todo  .kt-todo__head .kt-todo__toolbar .kt-todo__info .kt-todo__name {
                    color: #48465b;
                    font-weight: 600;
                    font-size: 1.1rem;
                    padding-right: 0.5rem; }
                    .kt-todo  .kt-todo__head .kt-todo__toolbar .kt-todo__info .kt-todo__name:hover {
                      color: #5d78ff;
                      -webkit-transition: all 0.3s ease;
                      transition: all 0.3s ease; }
                .kt-todo  .kt-todo__head .kt-todo__toolbar .kt-todo__details {
                  display: -webkit-box;
                  display: -ms-flexbox;
                  display: flex;
                  -webkit-box-align: center;
                  -ms-flex-align: center;
                  align-items: center;
                  -ms-flex-wrap: wrap;
                  flex-wrap: wrap;
                  padding: 0.5rem 0; }
                  .kt-todo  .kt-todo__head .kt-todo__toolbar .kt-todo__details .kt-todo__icon {
                    margin: 0.4rem 0.5rem 0.4rem 0;
                    font-size: 0.7rem;
                    color: #5d78ff; }
                  .kt-todo  .kt-todo__head .kt-todo__toolbar .kt-todo__details .kt-todo__desc {
                    color: #74788d;
                    font-weight: 400;
                    font-size: 1rem; }
                  .kt-todo  .kt-todo__head .kt-todo__toolbar .kt-todo__details .btn {
                    padding: 8px 1rem; }
                    .kt-todo  .kt-todo__head .kt-todo__toolbar .kt-todo__details .btn:last-child {
                      margin-left: 0.5rem; }
                .kt-todo  .kt-todo__head .kt-todo__toolbar .kt-todo__actions {
                  display: -webkit-box;
                  display: -ms-flexbox;
                  display: flex;
                  -webkit-box-align: center;
                  -ms-flex-align: center;
                  align-items: center; }
                  .kt-todo  .kt-todo__head .kt-todo__toolbar .kt-todo__actions .kt-todo__datetime {
                    color: #a2a5b9;
                    font-weight: 500;
                    font-size: 1rem;
                    margin-right: 1.5rem; }
            .kt-todo  .kt-todo__body {
              padding-bottom: 25px;
              -webkit-box-flex: 1;
              -ms-flex-positive: 1;
              flex-grow: 1; }
              .kt-todo  .kt-todo__body .kt-todo__title {
                padding-top: 1rem; }
                .kt-todo  .kt-todo__body .kt-todo__title .kt-todo__text {
                  color: #48465b;
                  font-size: 1.5rem;
                  font-weight: 600;
                  margin-top: 1rem;
                  display: block; }
                .kt-todo  .kt-todo__body .kt-todo__title .kt-todo__labels {
                  display: -webkit-box;
                  display: -ms-flexbox;
                  display: flex;
                  -webkit-box-align: center;
                  -ms-flex-align: center;
                  align-items: center;
                  padding: 0.8rem 0 2rem 0; }
                  .kt-todo  .kt-todo__body .kt-todo__title .kt-todo__labels .kt-todo__label {
                    display: -webkit-box;
                    display: -ms-flexbox;
                    display: flex;
                    -webkit-box-align: center;
                    -ms-flex-align: center;
                    align-items: center; }
                    .kt-todo  .kt-todo__body .kt-todo__title .kt-todo__labels .kt-todo__label .kt-todo__dot {
                      padding-right: 0.5rem;
                      font-size: 1.2rem; }
                    .kt-todo  .kt-todo__body .kt-todo__title .kt-todo__labels .kt-todo__label .kt-todo__text {
                      color: #a2a5b9;
                      font-weight: 500;
                      font-size: 1rem;
                      margin: 0; }
                    .kt-todo  .kt-todo__body .kt-todo__title .kt-todo__labels .kt-todo__label:last-child {
                      padding-left: 1.5rem; }
                .kt-todo  .kt-todo__body .kt-todo__title:hover {
                  color: #5d78ff;
                  -webkit-transition: all 0.3s ease;
                  transition: all 0.3s ease; }
              .kt-todo  .kt-todo__body .kt-todo__desc {
                padding-bottom: 10px;
                display: block;
                color: #a2a5b9;
                font-weight: 500; }
              .kt-todo  .kt-todo__body .kt-todo__files {
                padding-top: 10px; }
                .kt-todo  .kt-todo__body .kt-todo__files .kt-todo__file {
                  display: block;
                  padding-top: 0.7rem; }
                  .kt-todo  .kt-todo__body .kt-todo__files .kt-todo__file i {
                    padding-right: 0.5rem; }
                  .kt-todo  .kt-todo__body .kt-todo__files .kt-todo__file a {
                    color: #74788d;
                    font-weight: 500; }
                    .kt-todo  .kt-todo__body .kt-todo__files .kt-todo__file a:hover {
                      color: #5d78ff;
                      -webkit-transition: all 0.3s ease;
                      transition: all 0.3s ease; }
              .kt-todo  .kt-todo__body .kt-todo__comments {
                padding-bottom: 20px; }
                .kt-todo  .kt-todo__body .kt-todo__comments .kt-todo__comment {
                  padding-top: 3rem; }
                  .kt-todo  .kt-todo__body .kt-todo__comments .kt-todo__comment:last-child {
                    padding-top: 2rem; }
                  .kt-todo  .kt-todo__body .kt-todo__comments .kt-todo__comment .kt-todo__box {
                    display: -webkit-box;
                    display: -ms-flexbox;
                    display: flex;
                    -webkit-box-align: center;
                    -ms-flex-align: center;
                    align-items: center; }
                    .kt-todo  .kt-todo__body .kt-todo__comments .kt-todo__comment .kt-todo__box .kt-media {
                      margin-right: 1rem; }
                    .kt-todo  .kt-todo__body .kt-todo__comments .kt-todo__comment .kt-todo__box .kt-todo__username {
                      -webkit-box-flex: 1;
                      -ms-flex-positive: 1;
                      flex-grow: 1;
                      color: #595d6e;
                      font-weight: 500; }
                      .kt-todo  .kt-todo__body .kt-todo__comments .kt-todo__comment .kt-todo__box .kt-todo__username:hover {
                        color: #5d78ff;
                        -webkit-transition: all 0.3s ease;
                        transition: all 0.3s ease; }
                    .kt-todo  .kt-todo__body .kt-todo__comments .kt-todo__comment .kt-todo__box .kt-todo__date {
                      color: #a2a5b9;
                      font-weight: 500; }
                  .kt-todo  .kt-todo__body .kt-todo__comments .kt-todo__comment .kt-todo__text {
                    padding-left: 3.3rem;
                    display: block;
                    color: #a2a5b9;
                    font-weight: 500; }
            .kt-todo  .kt-todo__foot .kt-todo__form {
              margin-top: 20px;
              display: -webkit-box;
              display: -ms-flexbox;
              display: flex;
              -webkit-box-orient: vertical;
              -webkit-box-direction: normal;
              -ms-flex-direction: column;
              flex-direction: column;
              border: 1px solid #ebedf2;
              border-radius: 4px; }
              .kt-todo  .kt-todo__foot .kt-todo__form .kt-todo__head {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                -webkit-box-pack: justify;
                -ms-flex-pack: justify;
                justify-content: space-between;
                padding: 20px 15px 20px 25px;
                border-bottom: 1px solid #ebedf2; }
                .kt-todo  .kt-todo__foot .kt-todo__form .kt-todo__head .kt-todo__title {
                  margin-right: 10px;
                  font-size: 1.2rem;
                  font-weight: 500;
                  color: #595d6e; }
                .kt-todo  .kt-todo__foot .kt-todo__form .kt-todo__head .kt-todo__actions {
                  display: -webkit-box;
                  display: -ms-flexbox;
                  display: flex; }
                  .kt-todo  .kt-todo__foot .kt-todo__form .kt-todo__head .kt-todo__actions .kt-todo__icon {
                    margin-left: 5px; }
              .kt-todo  .kt-todo__foot .kt-todo__form .kt-todo__body {
                padding: 0 0 10px 0; }
                .kt-todo  .kt-todo__foot .kt-todo__form .kt-todo__body .ql-container.ql-snow {
                  border: 0;
                  padding: 0;
                  border-radius: 0; }
                  .kt-todo  .kt-todo__foot .kt-todo__form .kt-todo__body .ql-container.ql-snow .ql-editor {
                    font-weight: 400;
                    font-size: 1rem;
                    color: #74788d;
                    padding: 15px 25px;
                    font-family: Poppins, Helvetica, sans-serif; }
                    .kt-todo  .kt-todo__foot .kt-todo__form .kt-todo__body .ql-container.ql-snow .ql-editor.ql-blank:before {
                      left: 25px;
                      color: #a2a5b9;
                      font-weight: 400;
                      font-style: normal; }
                .kt-todo  .kt-todo__foot .kt-todo__form .kt-todo__body .ql-toolbar.ql-snow {
                  display: -webkit-box;
                  display: -ms-flexbox;
                  display: flex;
                  height: 50px;
                  -webkit-box-align: center;
                  -ms-flex-align: center;
                  align-items: center;
                  border-radius: 0;
                  border: 0;
                  border-top: 0;
                  border-bottom: 1px solid #ebedf2;
                  padding-left: 18px; }
                  .kt-todo  .kt-todo__foot .kt-todo__form .kt-todo__body .ql-toolbar.ql-snow .ql-picker-label, .kt-todo  .kt-todo__foot .kt-todo__form .kt-todo__body .ql-toolbar.ql-snow .ql-picker-label:before {
                    font-weight: 400;
                    font-size: 1rem;
                    color: #74788d;
                    font-family: Poppins, Helvetica, sans-serif; }
                .kt-todo  .kt-todo__foot .kt-todo__form .kt-todo__body .kt-todo__attachments {
                  display: inline-block;
                  padding: 0 25px; }
                  @media (max-width: 1024px) {
                    .kt-todo  .kt-todo__foot .kt-todo__form .kt-todo__body .kt-todo__attachments {
                      width: 100%; } }
              .kt-todo  .kt-todo__foot .kt-todo__form .kt-todo__foot {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                width: 100%;
                padding: 20px 15px 20px 25px; }
                .kt-todo  .kt-todo__foot .kt-todo__form .kt-todo__foot .kt-todo__primary {
                  display: -webkit-box;
                  display: -ms-flexbox;
                  display: flex;
                  -webkit-box-flex: 1;
                  -ms-flex-positive: 1;
                  flex-grow: 1;
                  -webkit-box-align: center;
                  -ms-flex-align: center;
                  align-items: center; }
                  .kt-todo  .kt-todo__foot .kt-todo__form .kt-todo__foot .kt-todo__primary .btn-group .btn:nth-child(1) {
                    padding-left: 20px;
                    padding-right: 20px; }
                  .kt-todo  .kt-todo__foot .kt-todo__form .kt-todo__foot .kt-todo__primary .btn-group .btn:nth-child(2) {
                    padding-left: 6px;
                    padding-right: 9px; }
                  .kt-todo  .kt-todo__foot .kt-todo__form .kt-todo__foot .kt-todo__primary .kt-todo__panel {
                    display: -webkit-box;
                    display: -ms-flexbox;
                    display: flex;
                    -webkit-box-align: center;
                    -ms-flex-align: center;
                    align-items: center;
                    margin-left: 1rem; }
                .kt-todo  .kt-todo__foot .kt-todo__form .kt-todo__foot .kt-todo__secondary {
                  display: -webkit-box;
                  display: -ms-flexbox;
                  display: flex;
                  -webkit-box-align: center;
                  -ms-flex-align: center;
                  align-items: center;
                  margin: 0; }

        .kt-todo .kt-portlet__head {
          min-height: 80px !important;
          padding: 10px 25px; }

        @media (max-width: 1024px) {
          .kt-todo {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            padding: 0; }
            .kt-todo .kt-todo__aside {
              background: #fff;
              margin: 0; }
              .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item .kt-nav__link-title {
                padding-left: 1.2rem; }
              .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item .kt-nav__link {
                padding: 0.75rem 10px; }
            .kt-todo .kt-todo__list {
              display: -webkit-box;
              display: -ms-flexbox;
              display: flex; }
              .kt-todo .kt-todo__list.kt-todo__list--hidden {
                display: none; }
              .kt-todo .kt-todo__list .kt-portlet__head {
                min-height: 60px !important;
                padding: 10px 15px; }
              .kt-todo .kt-todo__list .kt-todo__head {
                padding: 0; }
                .kt-todo .kt-todo__list .kt-todo__head .kt-todo__toolbar {
                  padding: 10px 15px; }
              .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items {
                overflow: auto;
                margin-bottom: 15px; }
                .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item {
                  min-width: 500px;
                  padding: 10px 15px; }
              .kt-todo .kt-todo__list .kt-todo__foot {
                padding: 0 15px; }
            .kt-todo .kt-todo__view {
              display: none; }
              .kt-todo .kt-todo__view .kt-todo__head .kt-todo__toolbar .kt-todo__icon.kt-todo__icon--back {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex; }
              .kt-todo .kt-todo__view.kt-todo__view--shown {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex; }
            .kt-todo .kt-portlet__head {
              min-height: 60px !important;
              padding: 10px 15px; } }

        @media (max-width: 768px) {
          .kt-todo .kt-todo__head .kt-todo__nav .btn {
            margin-right: 0.2rem; } }

        .kt-todo__aside-close {
          display: none; }

        @media (max-width: 1024px) {
          .kt-todo__aside {
            z-index: 1001;
            position: fixed;
            -webkit-overflow-scrolling: touch;
            top: 0;
            bottom: 0;
            overflow-y: auto;
            -webkit-transform: translate3d(0, 0, 0);
            backface-visibility: hidden;
            -webkit-backface-visibility: hidden;
            width: 300px !important;
            -webkit-transition: left 0.3s ease, right 0.3s ease;
            transition: left 0.3s ease, right 0.3s ease;
            left: -320px; }
            .kt-todo__aside.kt-todo__aside--on {
              -webkit-transition: left 0.3s ease, right 0.3s ease;
              transition: left 0.3s ease, right 0.3s ease;
              left: 0; } }
          @media screen\\0  and (max-width: 1024px) {
            .kt-todo__aside {
              -webkit-transition: none !important;
              transition: none !important; } }

        @media (max-width: 1024px) {
          .kt-todo__aside--right .kt-todo__aside {
            right: -320px;
            left: auto; }
            .kt-todo__aside--right .kt-todo__aside.kt-todo__aside--on {
              -webkit-transition: left 0.3s ease, right 0.3s ease;
              transition: left 0.3s ease, right 0.3s ease;
              right: 0;
              left: auto; }
          .kt-todo__aside-close {
            width: 25px;
            height: 25px;
            top: 1px;
            z-index: 1002;
            -webkit-transition: left 0.3s ease, right 0.3s ease;
            transition: left 0.3s ease, right 0.3s ease;
            position: fixed;
            border: 0;
            -webkit-box-shadow: none;
            box-shadow: none;
            border-radius: 3px;
            cursor: pointer;
            outline: none !important;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            left: -25px; } }
          @media screen\\0  and (max-width: 1024px) {
            .kt-todo__aside-close {
              -webkit-transition: none !important;
              transition: none !important; } }

        @media (max-width: 1024px) {
            .kt-todo__aside-close > i {
              line-height: 0;
              font-size: 1.4rem; }
            .kt-todo__aside-close:hover {
              text-decoration: none; }
            .kt-todo__aside--right .kt-todo__aside-close {
              left: auto;
              right: -25px; }
            .kt-todo__aside--on .kt-todo__aside-close {
              -webkit-transition: left 0.3s ease, right 0.3s ease;
              transition: left 0.3s ease, right 0.3s ease;
              left: 274px; }
            .kt-todo__aside--on.kt-todo__aside--right .kt-todo__aside-close {
              left: auto;
              right: 274px; }
          .kt-todo__aside-overlay {
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            overflow: hidden;
            z-index: 1000;
            background: rgba(0, 0, 0, 0.1);
            -webkit-animation: kt-animate-fade-in .3s linear 1;
            animation: kt-animate-fade-in .3s linear 1; }
          .kt-todo__aside-overlay {
            background: rgba(0, 0, 0, 0.05); }
          .kt-todo__aside-close {
            background-color: #f7f8fa; }
            .kt-todo__aside-close > i {
              color: #74788d; }
            .kt-todo__aside-close:hover {
              background-color: transparent; }
              .kt-todo__aside-close:hover > i {
                color: #5d78ff; } }

        @media (max-width: 350px) {
          .kt-todo__aside {
            width: 90% !important; } }
    </style>
";
        // line 1602
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
        // line 2535
        echo "-->
";
        // line 2536
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('styles'        );
        // line 2537
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
        .pac-container {
            z-index: 9999;
        }
        @media (max-width: 576px) {
            .kt-widget.kt-widget--user-profile-3 .kt-widget__top .kt-widget__content .kt-widget__info .kt-widget__stats .kt-widget__item {
                width: 100%;
                margin: auto 0 !important;
            }
        }
        .notes_scroll,.notes_scroll .btn {
            cursor: pointer;
        }
    </style>
";
        // line 2536
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
        // line 2568
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 2569
        echo "<script src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/admin/vendors/custom/geocomplete/jquery.geocomplete.js");
        echo "\" type=\"text/javascript\"></script>
<script src=\"https://maps.googleapis.com/maps/api/js?libraries=places&key=";
        // line 2570
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "google", [], "any", false, false, false, 2570), "map", [], "any", false, false, false, 2570), "key", [], "any", false, false, false, 2570), "html", null, true);
        echo "\"></script>
<script src=\"./admin/vendors/custom/gmaps/gmaps.js\" type=\"text/javascript\"></script>
<script type=\"text/javascript\">
\"use strict\";
var KTDashboard = function () {

    // Order Statistics.
    // Based on Chartjs plugin - http://www.chartjs.org/
    var orderStatistics = function() {
        var container = KTUtil.getByID('kt_chart_order_statistics');

        if (!container) {
            return;
        }

        var MONTHS = ['1 Jan', '2 Jan', '3 Jan', '4 Jan', '5 Jan', '6 Jan', '7 Jan'];

        var color = Chart.helpers.color;
        var barChartData = {
            labels: ['1 Jan', '2 Jan', '3 Jan', '4 Jan', '5 Jan', '6 Jan', '7 Jan'],
            datasets : [
\t\t\t\t{
                    fill: true,
                    //borderWidth: 0,
                    backgroundColor: color(KTApp.getStateColor('brand')).alpha(0.6).rgbString(),
                    borderColor : color(KTApp.getStateColor('brand')).alpha(0).rgbString(),

                    pointHoverRadius: 4,
                    pointHoverBorderWidth: 12,
                    pointBackgroundColor: Chart.helpers.color('#000000').alpha(0).rgbString(),
                    pointBorderColor: Chart.helpers.color('#000000').alpha(0).rgbString(),
                    pointHoverBackgroundColor: KTApp.getStateColor('brand'),
                    pointHoverBorderColor: Chart.helpers.color('#000000').alpha(0.1).rgbString(),

\t\t\t\t\tdata: [20, 30, 20, 40, 30, 60, 30]
\t\t\t\t},
\t\t\t\t{
                    fill: true,
                    //borderWidth: 0,
\t\t\t\t\tbackgroundColor : color(KTApp.getStateColor('brand')).alpha(0.2).rgbString(),
                    borderColor : color(KTApp.getStateColor('brand')).alpha(0).rgbString(),

                    pointHoverRadius: 4,
                    pointHoverBorderWidth: 12,
                    pointBackgroundColor: Chart.helpers.color('#000000').alpha(0).rgbString(),
                    pointBorderColor: Chart.helpers.color('#000000').alpha(0).rgbString(),
                    pointHoverBackgroundColor: KTApp.getStateColor('brand'),
                    pointHoverBorderColor: Chart.helpers.color('#000000').alpha(0.1).rgbString(),

\t\t\t\t\tdata: [15, 40, 15, 30, 40, 30, 50]
\t\t\t\t}
            ]
        };

        var ctx = container.getContext('2d');
        var chart = new Chart(ctx, {
            type: 'line',
            data: barChartData,
            options: {
                responsive: true,
                maintainAspectRatio: false,
                legend: false,
                scales: {
                    xAxes: [{
                        categoryPercentage: 0.35,
                        barPercentage: 0.70,
                        display: true,
                        scaleLabel: {
                            display: false,
                            labelString: 'Month'
                        },
                        gridLines: false,
                        ticks: {
                            display: true,
                            beginAtZero: true,
                            fontColor: KTApp.getBaseColor('shape', 3),
                            fontSize: 13,
                            padding: 10
                        }
                    }],
                    yAxes: [{
                        categoryPercentage: 0.35,
                        barPercentage: 0.70,
                        display: true,
                        scaleLabel: {
                            display: false,
                            labelString: 'Value'
                        },
                        gridLines: {
                            color: KTApp.getBaseColor('shape', 2),
                            drawBorder: false,
                            offsetGridLines: false,
                            drawTicks: false,
                            borderDash: [3, 4],
                            zeroLineWidth: 1,
                            zeroLineColor: KTApp.getBaseColor('shape', 2),
                            zeroLineBorderDash: [3, 4]
                        },
                        ticks: {
                            max: 70,
                            stepSize: 10,
                            display: true,
                            beginAtZero: true,
                            fontColor: KTApp.getBaseColor('shape', 3),
                            fontSize: 13,
                            padding: 10
                        }
                    }]
                },
                title: {
                    display: false
                },
                hover: {
                    mode: 'index'
                },
                tooltips: {
                    enabled: true,
                    intersect: false,
                    mode: 'nearest',
                    bodySpacing: 5,
                    yPadding: 10,
                    xPadding: 10,
                    caretPadding: 0,
                    displayColors: false,
                    backgroundColor: KTApp.getStateColor('brand'),
                    titleFontColor: '#ffffff',
                    cornerRadius: 4,
                    footerSpacing: 0,
                    titleSpacing: 0
                },
                layout: {
                    padding: {
                        left: 0,
                        right: 0,
                        top: 5,
                        bottom: 5
                    }
                }
            }
        });
    };
    var latestTrendsMap = function() {
        if (\$('#kt_map_sender').length == 0) {
            return;
        }

        try {
            var map = new GMaps({
                div: '#kt_map_sender',
                lat: ";
        // line 2719
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_address", [], "any", false, false, false, 2719), "lat", [], "any", false, false, false, 2719), "html", null, true);
        echo ",
                lng: ";
        // line 2720
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_address", [], "any", false, false, false, 2720), "lng", [], "any", false, false, false, 2720), "html", null, true);
        echo "
            });
            map.addMarker({
                lat: ";
        // line 2723
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_address", [], "any", false, false, false, 2723), "lat", [], "any", false, false, false, 2723), "html", null, true);
        echo ",
                lng: ";
        // line 2724
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_address", [], "any", false, false, false, 2724), "lng", [], "any", false, false, false, 2724), "html", null, true);
        echo ",
                title: '";
        // line 2725
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_address", [], "any", false, false, false, 2725), "name", [], "any", false, false, false, 2725), "html", null, true);
        echo "',
                infoWindow: {
                    content: '<p>";
        // line 2727
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Go to"]);
        echo " <a href=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_address", [], "any", false, false, false, 2727), "url", [], "any", false, false, false, 2727), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_address", [], "any", false, false, false, 2727), "name", [], "any", false, false, false, 2727), "html", null, true);
        echo "</a></p>'
                }
            });
        } catch (e) {
            console.log(e);
        }
        if (\$('#kt_map_receiver').length == 0) {
            return;
        }
        ";
        // line 2736
        if (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 2736)) {
            // line 2737
            echo "            try {
                var map = new GMaps({
                    div: '#kt_map_receiver',
                    lat: ";
            // line 2740
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 2740), "lat", [], "any", false, false, false, 2740), "html", null, true);
            echo ",
                    lng: ";
            // line 2741
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 2741), "lng", [], "any", false, false, false, 2741), "html", null, true);
            echo "
                });
                map.addMarker({
                    lat: ";
            // line 2744
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 2744), "lat", [], "any", false, false, false, 2744), "html", null, true);
            echo ",
                    lng: ";
            // line 2745
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 2745), "lng", [], "any", false, false, false, 2745), "html", null, true);
            echo ",
                    title: '";
            // line 2746
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 2746), "name", [], "any", false, false, false, 2746), "html", null, true);
            echo "',
                    infoWindow: {
                        content: '<p>";
            // line 2748
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Go to"]);
            echo " <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 2748), "url", [], "any", false, false, false, 2748), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 2748), "name", [], "any", false, false, false, 2748), "html", null, true);
            echo "</a></p>'
                    }
                });
            } catch (e) {
                console.log(e);
            }
        ";
        }
        // line 2755
        echo "    }
    return {
        // public functions
        init: function () {
            orderStatistics();
            latestTrendsMap();
        },
    };
}();

KTUtil.ready(function () {
    KTDashboard.init();

    \$('.notes_scroll').on('click', function(e){
        \$([document.documentElement, document.body]).animate({
            scrollTop: \$(\"#notes_continer\").offset().top-60
        }, 2000);
    });
    \$('#assign_employee').on('click', '.btn-primary', function(e){
        var parent = \$('#assign_employee');
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
            \$('#assign_employee').modal('toggle');
            KTApp.blockPage({
                overlayColor: '#000000',
                type: 'v2',
                state: 'success',
                message: '";
        // line 2790
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please wait"]);
        echo "...'
            });
        }
    });
    \$('#assign_manifest').on('click', '.btn-primary', function(e){
        var parent = \$('#assign_manifest');
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
            \$('#assign_manifest').modal('toggle');
            KTApp.blockPage({
                overlayColor: '#000000',
                type: 'v2',
                state: 'success',
                message: '";
        // line 2811
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please wait"]);
        echo "...'
            });
        }
    });
    \$('#transfer_office').on('click', '.btn-primary', function(e){
        var parent = \$('#assign_employee');
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
            \$('#transfer_office').modal('toggle');
            KTApp.blockPage({
                overlayColor: '#000000',
                type: 'v2',
                state: 'success',
                message: '";
        // line 2832
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please wait"]);
        echo "...'
            });
        }
    });
    \$('#refuse').on('click', '.btn-primary', function(e){
        var parent = \$('#refuse');
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
            \$('#refuse').modal('toggle');
            KTApp.blockPage({
                overlayColor: '#000000',
                type: 'v2',
                state: 'success',
                message: '";
        // line 2853
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please wait"]);
        echo "...'
            });
        }
    });
    \$('#discards').on('click', '.btn-primary', function(e){
        var parent = \$('#discards');
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
            \$('#discards').modal('toggle');
            KTApp.blockPage({
                overlayColor: '#000000',
                type: 'v2',
                state: 'success',
                message: '";
        // line 2874
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please wait"]);
        echo "...'
            });
        }
    });
    \$('#return_discards').on('click', function(e){
        e.preventDefault();
        KTApp.blockPage({
            overlayColor: '#000000',
            type: 'v2',
            state: 'success',
            message: '";
        // line 2884
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please wait"]);
        echo "...'
        });
        \$.request('onDiscards', {
            success: function(data) {
                KTApp.unblockPage();
                window.location.href = \"";
        // line 2889
        echo url("dashboard/shipments");
        echo "/delivered\";
            }
        });
    });
    \$('#delivered_driver').on('click', function(e){
        e.preventDefault();
        KTApp.blockPage({
            overlayColor: '#000000',
            type: 'v2',
            state: 'success',
            message: '";
        // line 2899
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please wait"]);
        echo "...'
        });
        \$.request('onDeliver', {
            success: function(data) {
                KTApp.unblockPage();
                window.location.href = \"";
        // line 2904
        echo url("dashboard/shipments");
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 2904), "id", [], "any", false, false, false, 2904), "html", null, true);
        echo "/view\";
            }
        });
    });
    \$('#deliveried').on('click', function(e){
        e.preventDefault();
        KTApp.blockPage({
            overlayColor: '#000000',
            type: 'v2',
            state: 'success',
            message: '";
        // line 2914
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please wait"]);
        echo "...'
        });
        \$.request('onDelivery', {
            success: function(data) {
                KTApp.unblockPage();
                window.location.href = \"";
        // line 2919
        echo url("dashboard/shipments");
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 2919), "id", [], "any", false, false, false, 2919), "html", null, true);
        echo "/view\";
            }
        });
    });
    \$('#stock').on('click', function(e){
        e.preventDefault();
        KTApp.blockPage({
            overlayColor: '#000000',
            type: 'v2',
            state: 'success',
            message: '";
        // line 2929
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please wait"]);
        echo "...'
        });
        \$.request('onStock', {
            success: function(data) {
                KTApp.unblockPage();
                window.location.href = \"";
        // line 2934
        echo url("dashboard/shipments");
        echo "/stock\";
            }
        });
    });
    \$('#received').on('click', '.btn-primary', function(e){
        var parent = \$('#received');
        var validation = 1;
        \$.validator.setDefaults({
            ignore: \":hidden\",
       });
        parent.find('input,select').each(function(){
            if(\$(this).is(':hidden')){
                return;
            }
            if(\$(this).valid() == false){
                validation = 0;
            }
        });
        if(validation){
            \$('#received').modal('toggle');
            KTApp.blockPage({
                overlayColor: '#000000',
                type: 'v2',
                state: 'success',
                message: '";
        // line 2958
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please wait"]);
        echo "...'
            });
        }
    });


    \$('#received').find('input,select').each(function(){
        \$(this).on('change', function(){
            \$('#received .btn-info').removeClass('kt-hidden');
            \$('#received .btn-primary').addClass('kt-hidden');
        });
    });

    \$('#received .btn-info').removeClass('kt-hidden');
    \$('#received .btn-primary').addClass('kt-hidden');


    \$('#received').on('click', '.save', function(e){
        var parent = \$('#received');
        var validation = 1;
        \$.validator.setDefaults({
            ignore: \":hidden\",
       });
        parent.find('input,select').each(function(){
            if(\$(this).is(':hidden')){
                return;
            }
            if(\$(this).valid() == false){
                validation = 0;
            }
        });
        if(validation){

            var receiver_address_id = \$('#received #receiver_address_id').val();
            var package_fee = \$('#received #package_fee').val();
            var return_courier_fee = \$('#received #return_courier_fee').val();
            var return_defray = \$('#received .return_defray:checked').val();
            var return_package_fee = \$('#received .return_package_fee:checked').val();

             \$.request('onConfirmfees', {
                  data: {return_courier_fee: return_courier_fee, package_fee: package_fee, receiver_address_id: receiver_address_id, return_defray: return_defray, return_package_fee: return_package_fee},
                  success: function(response, status, xhr, \$form) {

                      swal.fire({
                          buttonsStyling: false,

                          html: \"<strong>";
        // line 3004
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["The total cost of courier fees is"]);
        echo ":</strong> \"+response.delivery_cost+\"<br /><strong>";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["The total requested from sender is"]);
        echo ":</strong> \"+response.sender_fees+\"<br /><strong>";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["The total requested from receiver is"]);
        echo ":</strong> \"+response.receiver_fees,
                          type: \"warning\",

                          confirmButtonText: \"";
        // line 3007
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yes, confirm!"]);
        echo "\",
                          confirmButtonClass: \"btn btn-sm btn-bold btn-success\",

                          showCancelButton: true,
                          cancelButtonText: '";
        // line 3011
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No, change something"]);
        echo "',
                          cancelButtonClass: \"btn btn-sm btn-bold btn-danger\"
                      }).then(function (result) {
                          if (result.value) {
                              \$('#received .btn-info').addClass('kt-hidden');
                              \$('#received .btn-primary').removeClass('kt-hidden');
                          }
                      });
                  }
             });
        }
    });
    \$('#postpone').on('click', '.btn-primary', function(e){
        var parent = \$('#postpone');
        var validation = 1;
        parent.find('input,select').each(function(){
            if(\$(this).is(':hidden')){
                return;
            }
            var css_class = \$(this).attr('class');
            css_class = css_class.replace('form-control ','');
            if(css_class != 'date'){
                if(\$(this).valid() == false){
                    validation = 0;
                }
            }
        });
        if(validation){
            \$('#postpone').modal('toggle');
            KTApp.blockPage({
                overlayColor: '#000000',
                type: 'v2',
                state: 'success',
                message: '";
        // line 3044
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please wait"]);
        echo "...'
            });
        }
    });
    \$('#accept').on('click', function(e){
        e.preventDefault();
        KTApp.blockPage({
            overlayColor: '#000000',
            type: 'v2',
            state: 'success',
            message: '";
        // line 3054
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please wait"]);
        echo "...'
        });

        \$.request('onAccept', {
            success: function(data) {
                KTApp.unblockPage();
                window.location.href = \"";
        // line 3060
        echo url("dashboard/shipments");
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 3060), "id", [], "any", false, false, false, 3060), "html", null, true);
        echo "/view\";
            }
        });
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


    \$('body').on('change', '#discard_reason', function(e, clickedIndex, newValue, oldValue){
        var selected = \$(e.currentTarget).val();
        \$('.discard_reason_receiver').addClass('kt-hidden');
        if(selected != '' && selected != 2){
            \$('.discard_reason_receiver').removeClass('kt-hidden');
        }
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



                     var selected = response.default;
                     var type = \$('.type:checked').val();
                     var sender_address_id = \$('#sender_address_id').val();
                     var packaging_id = \$('#packaging_id').val();
                     var return_defray = \$('.return_defray:checked').val();
                     var return_package_fee = \$('.return_package_fee:checked').val();
                     if(selected != '' && selected != 'new'){
                         \$.request('onChangefees', {
                              data: {sender_address_id: sender_address_id, packaging_id: packaging_id, type: type, receiver_address_id: selected, return_defray: return_defray, return_package_fee: return_package_fee},
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
        // line 3147
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Processing, please wait"]);
        echo "...'
            });
            \$.request('onNewclient', {
                 data: {name: parent.find('.name').val(), mobile: parent.find('.mobile').val(), email: parent.find('.email').val(), gender: parent.find('.gender:checked').val(), street_addr: parent.find('.street_addr').val(), lat: parent.find('.lat').val(), lng: parent.find('.lng').val(), url: parent.find('.url').val(), area_id: parent.find('.area_id').find(\"option:selected\").val(), city_id: parent.find('.city_id').find(\"option:selected\").val(), postal_code: parent.find('.postal_code').val(), state_id: parent.find('.state_id').find(\"option:selected\").val(), country_id: parent.find('.country_id').find(\"option:selected\").val(), connect: parent.find('.connect:checked').val(), username: parent.find('.username').val(), password: parent.find('.password').val()},
                 error: function(response, status, xhr, \$form) {
                     swal.fire({
                         title: '";
        // line 3153
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Error!"]);
        echo "',
                         text: response.responseText,
                         type: 'error',
                         buttonsStyling: false,
                         confirmButtonText: '";
        // line 3157
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
                      if(selected != '' && selected != 'new'){
                          \$.request('onChangefees', {
                               data: {sender_address_id: sender_address_id, packaging_id: packaging_id, type: type, receiver_address_id: selected, return_defray: return_defray, return_package_fee: return_package_fee},
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
        // line 3228
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Processing, please wait"]);
        echo "...'
            });
            \$.request('onNewclientaddress', {
                 data: {client_id: \$('#receiver_id').val(), street_addr: parent.find('.street_addr').val(), lat: parent.find('.lat').val(), lng: parent.find('.lng').val(), url: parent.find('.url').val(), area_id: parent.find('.area_id').find(\"option:selected\").val(), city_id: parent.find('.city_id').find(\"option:selected\").val(), postal_code: parent.find('.postal_code').val(), state_id: parent.find('.state_id').find(\"option:selected\").val(), country_id: parent.find('.country_id').find(\"option:selected\").val()},
                 error: function(response, status, xhr, \$form) {
                     swal.fire({
                         title: '";
        // line 3234
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Error!"]);
        echo "',
                         text: response.responseText,
                         type: 'error',
                         buttonsStyling: false,
                         confirmButtonText: '";
        // line 3238
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
                       if(selected != '' && selected != 'new'){
                           \$.request('onChangefees', {
                                data: {sender_address_id: sender_address_id, packaging_id: packaging_id, type: type, receiver_address_id: selected, return_defray: return_defray, return_package_fee: return_package_fee},
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
        // line 3292
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
        // line 3305
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
        // line 3318
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Select"]);
        echo "'}).selectpicker('refresh');
                      parent.find('select.area_id').html(response.html).selectpicker('refresh');
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
         if(selected != '' && selected != 'new'){
             \$.request('onChangefees', {
                  data: {sender_address_id: sender_address_id, type: type, packaging_id:packaging_id, receiver_address_id: selected, return_defray: return_defray, return_package_fee: return_package_fee},
                  success: function(response, status, xhr, \$form) {
                       \$('#delivery_cost').val(response.delivery_cost);
                       \$('#return_courier_fee').val(response.return_courier_fee);
                  }
             });
        }
    });


    \$(\".clients\").select2({
        ";
        // line 3345
        if ((($context["currentLang"] ?? null) == "ar")) {
            // line 3346
            echo "            dir: \"rtl\",
        ";
        }
        // line 3348
        echo "        language: {
            errorLoading: function () {
                return \"";
        // line 3350
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["There is an error while searching"]);
        echo "...\";
            },
            inputTooLong: function (args) {
                return \"";
        // line 3353
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["You must enter less characters"]);
        echo "...\";
            },
            inputTooShort: function (args) {
                return \"";
        // line 3356
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["You must enter more characters"]);
        echo "...\";
            },
            loadingMore: function () {
                return \"";
        // line 3359
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Loading More"]);
        echo "...\";
            },
            maximumSelected: function (args) {
                return \"";
        // line 3362
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Maximum element has been selected"]);
        echo "...\";
            },
            noResults: function () {
                return \"";
        // line 3365
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No result found"]);
        echo "...\";
            },
            searching: function () {
                return \"";
        // line 3368
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Searching"]);
        echo "...\";
            }
        },
        placeholder: \"";
        // line 3371
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
             \$.request('onChangefees', {
                  data: {sender_address_id: sender_address_id, type: type, packaging_id:packaging_id, receiver_address_id: receiver_address_id, return_defray: return_defray, return_package_fee: return_package_fee},
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
        // line 3454
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "thousand_separator", [], "any", false, false, false, 3454), "html", null, true);
        echo "999";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "thousand_separator", [], "any", false, false, false, 3454), "html", null, true);
        echo "999";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "decimal_point", [], "any", false, false, false, 3454), "html", null, true);
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range("1", twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "initbiz_money_fraction_digits", [], "any", false, false, false, 3454)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            echo "9";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "', {
        numericInput: true
    });

    \$('#delete').on('click', function(e){
        e.preventDefault();

        swal.fire({
            buttonsStyling: false,

            text: \"";
        // line 3464
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Are you sure to delete"]);
        echo "\",
            type: \"error\",

            confirmButtonText: \"";
        // line 3467
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yes, delete!"]);
        echo "\",
            confirmButtonClass: \"btn btn-sm btn-bold btn-danger\",

            showCancelButton: true,
            cancelButtonText: '";
        // line 3471
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No, cancel"]);
        echo "',
            cancelButtonClass: \"btn btn-sm btn-bold btn-brand\"
        }).then(function (result) {
            if (result.value) {
                KTApp.blockPage({
                    overlayColor: '#000000',
                    type: 'v2',
                    state: 'success',
                    message: '";
        // line 3479
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please wait"]);
        echo "...'
                });
                \$.request('onDelete', {
                    success: function(data) {
                        KTApp.unblockPage();
                        swal.fire({
                            title: '";
        // line 3485
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Deleted!"]);
        echo "',
                            text: '";
        // line 3486
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Your selected records have been deleted! :("]);
        echo "',
                            type: 'success',
                            buttonsStyling: false,
                            confirmButtonText: '";
        // line 3489
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["OK"]);
        echo "',
                            confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                        });
                        window.location.href = \"";
        // line 3492
        echo url("dashboard/shipments");
        echo "\";
                    }
                });
                // result.dismiss can be 'cancel', 'overlay',
                // 'close', and 'timer'
            } else if (result.dismiss === 'cancel') {
                swal.fire({
                    title: '";
        // line 3499
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cancelled"]);
        echo "',
                    text: '";
        // line 3500
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["You selected records have not been deleted! :)"]);
        echo "',
                    type: 'error',
                    buttonsStyling: false,
                    confirmButtonText: '";
        // line 3503
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["OK"]);
        echo "',
                    confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                });
            }
        });
    });
    if(\$('.kt-widget__action ul.kt-nav li').length == 0){
        \$('.kt-widget__action').hide();
    }
});
</script>
";
        // line 2568
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/MainFiles--/themes/spotlayer/pages/dashboard/shipment.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  5550 => 2568,  5536 => 3503,  5530 => 3500,  5526 => 3499,  5516 => 3492,  5510 => 3489,  5504 => 3486,  5500 => 3485,  5491 => 3479,  5480 => 3471,  5473 => 3467,  5467 => 3464,  5442 => 3454,  5356 => 3371,  5350 => 3368,  5344 => 3365,  5338 => 3362,  5332 => 3359,  5326 => 3356,  5320 => 3353,  5314 => 3350,  5310 => 3348,  5306 => 3346,  5304 => 3345,  5274 => 3318,  5258 => 3305,  5242 => 3292,  5185 => 3238,  5178 => 3234,  5169 => 3228,  5095 => 3157,  5088 => 3153,  5079 => 3147,  4987 => 3060,  4978 => 3054,  4965 => 3044,  4929 => 3011,  4922 => 3007,  4912 => 3004,  4863 => 2958,  4836 => 2934,  4828 => 2929,  4813 => 2919,  4805 => 2914,  4790 => 2904,  4782 => 2899,  4769 => 2889,  4761 => 2884,  4748 => 2874,  4724 => 2853,  4700 => 2832,  4676 => 2811,  4652 => 2790,  4615 => 2755,  4601 => 2748,  4596 => 2746,  4592 => 2745,  4588 => 2744,  4582 => 2741,  4578 => 2740,  4573 => 2737,  4571 => 2736,  4555 => 2727,  4550 => 2725,  4546 => 2724,  4542 => 2723,  4536 => 2720,  4532 => 2719,  4380 => 2570,  4375 => 2569,  4373 => 2568,  4371 => 2536,  4339 => 2537,  4337 => 2536,  4334 => 2535,  4332 => 1602,  3399 => 1603,  3397 => 1602,  3389 => 1597,  3384 => 1595,  3380 => 1594,  3376 => 1593,  3360 => 1584,  3349 => 1580,  3343 => 1577,  3337 => 1576,  3333 => 1574,  3326 => 1570,  3322 => 1568,  3320 => 1567,  3311 => 1566,  3304 => 1562,  3300 => 1560,  3298 => 1559,  3293 => 1557,  3287 => 1556,  3283 => 1554,  3276 => 1550,  3272 => 1548,  3270 => 1547,  3265 => 1546,  3258 => 1542,  3254 => 1540,  3252 => 1539,  3247 => 1537,  3241 => 1536,  3229 => 1531,  3218 => 1527,  3212 => 1524,  3207 => 1521,  3200 => 1517,  3196 => 1515,  3194 => 1514,  3189 => 1513,  3182 => 1509,  3178 => 1507,  3176 => 1506,  3171 => 1504,  3165 => 1503,  3155 => 1496,  3151 => 1495,  3140 => 1487,  3135 => 1485,  3128 => 1480,  3111 => 1478,  3107 => 1477,  3102 => 1475,  3098 => 1474,  3093 => 1471,  3082 => 1469,  3078 => 1468,  3073 => 1466,  3069 => 1465,  3064 => 1462,  3047 => 1460,  3043 => 1459,  3038 => 1457,  3034 => 1456,  3025 => 1450,  3020 => 1447,  3003 => 1445,  2999 => 1444,  2993 => 1441,  2983 => 1434,  2972 => 1426,  2958 => 1415,  2954 => 1414,  2937 => 1400,  2923 => 1389,  2909 => 1378,  2894 => 1368,  2884 => 1361,  2879 => 1359,  2872 => 1354,  2861 => 1352,  2857 => 1351,  2852 => 1349,  2848 => 1348,  2843 => 1345,  2832 => 1343,  2828 => 1342,  2823 => 1340,  2819 => 1339,  2814 => 1336,  2797 => 1334,  2793 => 1333,  2788 => 1331,  2784 => 1330,  2775 => 1324,  2770 => 1321,  2753 => 1319,  2749 => 1318,  2743 => 1315,  2733 => 1308,  2721 => 1299,  2714 => 1295,  2708 => 1292,  2701 => 1288,  2694 => 1284,  2684 => 1277,  2675 => 1270,  2667 => 1268,  2665 => 1267,  2660 => 1265,  2654 => 1264,  2649 => 1261,  2643 => 1259,  2640 => 1258,  2632 => 1256,  2630 => 1255,  2622 => 1252,  2614 => 1247,  2606 => 1242,  2595 => 1234,  2590 => 1232,  2586 => 1231,  2580 => 1227,  2566 => 1221,  2554 => 1216,  2549 => 1215,  2545 => 1214,  2530 => 1206,  2519 => 1202,  2512 => 1198,  2499 => 1188,  2486 => 1178,  2482 => 1177,  2478 => 1176,  2472 => 1173,  2465 => 1169,  2457 => 1164,  2446 => 1156,  2441 => 1154,  2437 => 1153,  2428 => 1147,  2421 => 1143,  2413 => 1138,  2402 => 1130,  2397 => 1128,  2393 => 1127,  2384 => 1121,  2370 => 1110,  2365 => 1108,  2358 => 1104,  2351 => 1100,  2340 => 1092,  2335 => 1090,  2331 => 1089,  2324 => 1084,  2313 => 1082,  2309 => 1081,  2303 => 1078,  2296 => 1074,  2289 => 1070,  2278 => 1062,  2273 => 1060,  2269 => 1059,  2262 => 1054,  2249 => 1052,  2245 => 1051,  2239 => 1048,  2232 => 1044,  2225 => 1040,  2214 => 1032,  2209 => 1030,  2205 => 1029,  2198 => 1024,  2187 => 1022,  2183 => 1021,  2177 => 1018,  2170 => 1014,  2163 => 1010,  2151 => 1000,  2136 => 988,  2131 => 985,  2129 => 984,  2126 => 983,  2114 => 977,  2108 => 973,  2100 => 969,  2093 => 965,  2087 => 963,  2079 => 959,  2077 => 958,  2073 => 957,  2064 => 951,  2058 => 948,  2044 => 936,  2039 => 935,  2030 => 929,  2023 => 925,  2009 => 913,  2004 => 912,  1997 => 908,  1991 => 905,  1987 => 904,  1980 => 900,  1967 => 890,  1959 => 885,  1952 => 881,  1940 => 871,  1928 => 865,  1913 => 852,  1903 => 847,  1893 => 844,  1889 => 842,  1883 => 840,  1880 => 839,  1872 => 837,  1869 => 836,  1867 => 835,  1859 => 829,  1854 => 828,  1846 => 823,  1837 => 816,  1819 => 800,  1815 => 798,  1808 => 794,  1803 => 792,  1800 => 791,  1797 => 790,  1790 => 786,  1785 => 784,  1782 => 783,  1780 => 782,  1777 => 781,  1774 => 780,  1770 => 778,  1763 => 774,  1758 => 772,  1755 => 771,  1752 => 770,  1745 => 766,  1740 => 764,  1737 => 763,  1735 => 762,  1732 => 761,  1730 => 760,  1723 => 756,  1718 => 754,  1709 => 748,  1704 => 746,  1700 => 744,  1696 => 742,  1690 => 739,  1686 => 738,  1683 => 737,  1680 => 736,  1674 => 733,  1670 => 732,  1667 => 731,  1665 => 730,  1662 => 729,  1660 => 728,  1654 => 725,  1650 => 724,  1645 => 721,  1641 => 719,  1639 => 718,  1635 => 717,  1630 => 715,  1618 => 706,  1610 => 700,  1608 => 699,  1591 => 684,  1587 => 682,  1580 => 678,  1575 => 676,  1572 => 675,  1569 => 674,  1562 => 670,  1557 => 668,  1554 => 667,  1552 => 666,  1549 => 665,  1546 => 664,  1542 => 662,  1535 => 658,  1530 => 656,  1527 => 655,  1524 => 654,  1517 => 650,  1512 => 648,  1509 => 647,  1507 => 646,  1504 => 645,  1502 => 644,  1495 => 640,  1490 => 638,  1481 => 632,  1476 => 630,  1472 => 628,  1468 => 626,  1462 => 623,  1458 => 622,  1455 => 621,  1452 => 620,  1446 => 617,  1442 => 616,  1439 => 615,  1437 => 614,  1434 => 613,  1432 => 612,  1426 => 609,  1422 => 608,  1417 => 605,  1413 => 603,  1411 => 602,  1407 => 601,  1402 => 599,  1390 => 590,  1377 => 584,  1364 => 573,  1353 => 572,  1347 => 571,  1339 => 569,  1337 => 568,  1332 => 566,  1326 => 563,  1322 => 562,  1316 => 558,  1310 => 556,  1308 => 555,  1294 => 554,  1288 => 552,  1282 => 550,  1280 => 549,  1273 => 544,  1267 => 543,  1265 => 542,  1251 => 541,  1245 => 539,  1239 => 537,  1237 => 536,  1233 => 534,  1229 => 532,  1226 => 531,  1221 => 528,  1215 => 526,  1213 => 525,  1208 => 524,  1206 => 523,  1202 => 522,  1197 => 520,  1194 => 519,  1191 => 518,  1187 => 516,  1175 => 515,  1171 => 514,  1166 => 511,  1160 => 509,  1158 => 508,  1153 => 507,  1151 => 506,  1147 => 505,  1142 => 503,  1139 => 502,  1136 => 501,  1131 => 498,  1119 => 497,  1114 => 495,  1111 => 494,  1106 => 491,  1094 => 490,  1089 => 488,  1084 => 485,  1078 => 483,  1076 => 482,  1072 => 481,  1067 => 479,  1064 => 478,  1062 => 477,  1059 => 476,  1056 => 475,  1052 => 473,  1046 => 470,  1042 => 469,  1039 => 468,  1036 => 467,  1030 => 464,  1026 => 463,  1023 => 462,  1020 => 461,  1014 => 458,  1010 => 457,  1007 => 456,  1005 => 455,  1002 => 454,  999 => 453,  991 => 447,  980 => 444,  963 => 442,  956 => 441,  950 => 439,  948 => 438,  943 => 436,  940 => 435,  936 => 434,  929 => 430,  925 => 429,  921 => 428,  913 => 422,  911 => 421,  901 => 414,  887 => 402,  879 => 397,  874 => 395,  865 => 389,  860 => 387,  852 => 382,  848 => 381,  842 => 378,  838 => 377,  834 => 375,  827 => 371,  823 => 370,  819 => 368,  816 => 367,  814 => 366,  811 => 365,  807 => 363,  801 => 360,  797 => 359,  794 => 358,  791 => 357,  785 => 354,  781 => 353,  778 => 352,  776 => 351,  773 => 350,  770 => 349,  766 => 347,  762 => 345,  756 => 343,  754 => 342,  750 => 341,  746 => 340,  743 => 339,  740 => 338,  736 => 336,  730 => 334,  728 => 333,  724 => 332,  720 => 331,  717 => 330,  715 => 329,  712 => 328,  710 => 327,  704 => 324,  700 => 323,  694 => 320,  690 => 319,  682 => 314,  678 => 313,  668 => 310,  664 => 309,  656 => 304,  652 => 303,  647 => 300,  624 => 299,  618 => 298,  613 => 296,  605 => 291,  601 => 290,  596 => 287,  590 => 285,  584 => 283,  582 => 282,  577 => 280,  565 => 271,  541 => 250,  533 => 247,  527 => 244,  523 => 242,  518 => 239,  512 => 237,  509 => 236,  500 => 235,  498 => 234,  492 => 231,  488 => 229,  479 => 225,  473 => 222,  469 => 220,  467 => 219,  461 => 216,  455 => 213,  447 => 208,  441 => 205,  430 => 197,  421 => 190,  418 => 189,  411 => 185,  406 => 183,  403 => 182,  400 => 181,  393 => 177,  388 => 175,  385 => 174,  382 => 173,  375 => 169,  370 => 166,  367 => 165,  360 => 161,  355 => 158,  352 => 157,  350 => 156,  346 => 154,  343 => 153,  340 => 152,  337 => 151,  330 => 147,  325 => 145,  322 => 144,  319 => 143,  312 => 139,  307 => 136,  304 => 135,  297 => 131,  292 => 128,  289 => 127,  282 => 123,  277 => 120,  274 => 119,  271 => 118,  264 => 114,  259 => 111,  256 => 110,  252 => 108,  246 => 105,  242 => 103,  236 => 100,  232 => 98,  230 => 97,  227 => 96,  224 => 95,  221 => 94,  218 => 93,  215 => 92,  208 => 88,  203 => 85,  200 => 84,  193 => 80,  188 => 77,  185 => 76,  182 => 75,  179 => 74,  176 => 73,  169 => 69,  164 => 66,  157 => 62,  152 => 59,  149 => 58,  146 => 57,  143 => 56,  141 => 55,  135 => 52,  126 => 46,  121 => 43,  118 => 42,  116 => 41,  112 => 39,  109 => 38,  106 => 37,  99 => 33,  94 => 30,  91 => 29,  84 => 25,  79 => 23,  76 => 22,  73 => 21,  70 => 20,  67 => 19,  64 => 18,  62 => 17,  54 => 12,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"kt-portlet \">
    <div class=\"kt-portlet__body\">
        <div class=\"kt-widget kt-widget--user-profile-3\">
            <div class=\"kt-widget__top\">
                <div class=\"kt-widget__content\">
                    <div class=\"kt-widget__head\">
                        <a href=\"javascript:;\" class=\"kt-widget__username\">
                            {{settings.tracking.prefix_order}}{{order.number}}
                        </a>
                        <div class=\"kt-widget__action\">
                \t\t\t<a href=\"javascript:;\" class=\"btn btn-label-brand btn-bold btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
                \t\t\t\t{{'Order Actions'|__}}
                \t\t\t</a>
                \t\t\t<div class=\"dropdown-menu dropdown-menu-right dropdown-menu-fit dropdown-menu-md\">
                                <!--begin::Nav-->
                                <ul class=\"kt-nav\">
                                    {% if order.requested != 4 and order.requested != 8 %}
                                        {% if order.requested == 0 or order.requested == 1 or data.requested == 100 %}
                                            {% if order.requested == 1 and user.role_id == 5 %}
                                            {% else %}
                                                {% if user.hasUserPermission('order', 'u') %}
                                                    <li class=\"kt-nav__item\">
                                                        <a href=\"{{'dashboard/order-edit'|page({ id: order.id })}}\" class=\"kt-nav__link\">
                                                            <i class=\"kt-nav__link-icon flaticon-edit-1\"></i>
                                                            <span class=\"kt-nav__link-text\">{{'Edit'|__}}</span>
                                                        </a>
                                                    </li>
                                                {% endif %}
                                                {% if user.hasUserPermission('order', 'd') %}
                                                    <li class=\"kt-nav__item\">
                                                        <a href=\"javascript:;\" id=\"delete\" class=\"kt-nav__link\">
                                                            <i class=\"kt-nav__link-icon flaticon-cancel\"></i>
                                                            <span class=\"kt-nav__link-text\">{{'Delete'|__}}</span>
                                                        </a>
                                                    </li>
                                                {% endif %}
                                            {% endif %}
                                        {% endif %}


                                        {% if user.role_id != 5 %}
                                            {% if order.requested == 0 %}
                                                <li class=\"kt-nav__item\">
                                                    <a href=\"javascript:;\" id=\"accept\" class=\"kt-nav__link\">
                                                        <i class=\"kt-nav__link-icon flaticon2-check-mark\"></i>
                                                        <span class=\"kt-nav__link-text\">{{'Accept'|__}}</span>
                                                    </a>
                                                </li>
                                                <li class=\"kt-nav__item\">
                                                    <a href=\"javascript:;\" data-toggle=\"modal\" data-target=\"#refuse\" class=\"kt-nav__link\">
                                                        <i class=\"kt-nav__link-icon flaticon-signs-2\"></i>
                                                        <span class=\"kt-nav__link-text\">{{'Refuse'|__}}</span>
                                                    </a>
                                                </li>
                                            {% elseif order.requested != 2 %}
                                                {% if order.requested == 1 or order.requested == 5 or order.requested == 7 or order.requested == 10 %}
                                                    {% if order.manifest_id is empty %}
                                                        {% if order.assigned_id %}
                                                            <li class=\"kt-nav__item\">
                                                                <a href=\"javascript:;\" data-toggle=\"modal\" data-target=\"#assign_employee\" class=\"kt-nav__link\">
                                                                    <i class=\"kt-nav__link-icon flaticon-users\"></i>
                                                                    <span class=\"kt-nav__link-text\">{{'Change Assigned Employee'|__}}</span>
                                                                </a>
                                                            </li>
                                                        {% else %}
                                                            <li class=\"kt-nav__item\">
                                                                <a href=\"javascript:;\" data-toggle=\"modal\" data-target=\"#assign_employee\" class=\"kt-nav__link\">
                                                                    <i class=\"kt-nav__link-icon flaticon-users\"></i>
                                                                    <span class=\"kt-nav__link-text\">{{'Assign Employee'|__}}</span>
                                                                </a>
                                                            </li>
                                                        {% endif %}
                                                    {% endif %}
                                                    {% if order.assigned_id is empty %}
                                                        {% if user.hasUserPermission('manifest', 'c') %}
                                                            {% if order.manifest_id is empty %}
                                                                <li class=\"kt-nav__item\">
                                                                    <a href=\"javascript:;\" data-toggle=\"modal\" data-target=\"#assign_manifest\" class=\"kt-nav__link\">
                                                                        <i class=\"kt-nav__link-icon flaticon-truck\"></i>
                                                                        <span class=\"kt-nav__link-text\">{{'Assign Manifest'|__}}</span>
                                                                    </a>
                                                                </li>
                                                            {% else %}
                                                                {% if order.manifest.status == 1 %}
                                                                    <li class=\"kt-nav__item\">
                                                                        <a href=\"javascript:;\" data-toggle=\"modal\" data-target=\"#assign_manifest\" class=\"kt-nav__link\">
                                                                            <i class=\"kt-nav__link-icon flaticon-truck\"></i>
                                                                            <span class=\"kt-nav__link-text\">{{'Change Manifest'|__}}</span>
                                                                        </a>
                                                                    </li>
                                                                {% endif %}
                                                            {% endif %}
                                                        {% endif %}
                                                    {% endif %}
                                                    {% if order.assigned_id is not empty or order.manifest_id is not empty %}
                                                        <li class=\"kt-nav__item\">
                                                            {% if order.type == 1 %}
                                                                <a href=\"javascript:;\" data-toggle=\"modal\" data-target=\"#received\" class=\"kt-nav__link\">
                                                                    <i class=\"kt-nav__link-icon flaticon2-check-mark\"></i>
                                                                    <span class=\"kt-nav__link-text\">{{'Received'|__}}</span>
                                                                </a>
                                                            {% else %}
                                                                <a href=\"javascript:;\" id=\"delivered_driver\" class=\"kt-nav__link\">
                                                                    <i class=\"kt-nav__link-icon flaticon2-check-mark\"></i>
                                                                    <span class=\"kt-nav__link-text\">{{'Delivered to driver'|__}}</span>
                                                                </a>
                                                            {% endif %}
                                                        </li>
                                                    {% endif %}
                                                    {% if order.requested != 10 %}
                                                        <li class=\"kt-nav__item\">
                                                            <a href=\"javascript:;\" data-toggle=\"modal\" data-target=\"#transfer_office\" class=\"kt-nav__link\">
                                                                <i class=\"kt-nav__link-icon flaticon-logout\"></i>
                                                                <span class=\"kt-nav__link-text\">{{'Transfer To Branch'|__}}</span>
                                                            </a>
                                                        </li>
                                                    {% endif %}
                                                {% endif %}
                                                {% if order.requested != 7 and order.requested != 10 and order.requested != 11  and order.requested != 12 %}
                                                    <li class=\"kt-nav__item\">
                                                        <a href=\"javascript:;\" id=\"stock\" class=\"kt-nav__link\">
                                                            <i class=\"kt-nav__link-icon flaticon-user-ok\"></i>
                                                            <span class=\"kt-nav__link-text\">{{'Save in stock'|__}}</span>
                                                        </a>
                                                    </li>
                                                {% endif %}
                                                {% if order.requested != 7 and order.requested != 9 and order.requested != 10 and order.requested != 11 and order.requested != 12 %}
                                                    <li class=\"kt-nav__item\">
                                                        <a href=\"javascript:;\" data-toggle=\"modal\" data-target=\"#postpone\" class=\"kt-nav__link\">
                                                            <i class=\"kt-nav__link-icon flaticon-refresh\"></i>
                                                            <span class=\"kt-nav__link-text\">{{'Postpone'|__}}</span>
                                                        </a>
                                                    </li>
                                                {% endif %}
                                                {% if order.requested == 3 or order.requested == 9 %}
                                                    <li class=\"kt-nav__item\">
                                                        <a href=\"javascript:;\" data-toggle=\"modal\" data-target=\"#discards\" class=\"kt-nav__link\">
                                                            <i class=\"kt-nav__link-icon flaticon-refresh\"></i>
                                                            <span class=\"kt-nav__link-text\">{{'Transfer as discards'|__}}</span>
                                                        </a>
                                                    </li>
                                                {% endif %}
                                                {% if order.requested == 3 or order.requested == 5 or order.requested == 6 or order.requested == 7 or order.requested == 9 %}
                                                    <li class=\"kt-nav__item\">
                                                        <a href=\"{{'dashboard/order-deliver'|page({id:this.param.id})}}\" id=\"deliveried_bak\" class=\"kt-nav__link\">
                                                            <i class=\"kt-nav__link-icon flaticon-user-ok\"></i>
                                                            <span class=\"kt-nav__link-text\">{{'Delieveried'|__}}</span>
                                                        </a>
                                                    </li>
                                                {% endif %}
                                            {% endif %}
                                        {% endif %}
                                    {% endif %}


                                    {% if user.role_id != 5 %}
                                        {% if order.return_defray == 1 and order.requested == 4 %}
                                            <li class=\"kt-nav__item\">
                                                <a href=\"javascript:;\" id=\"return_discards\" class=\"kt-nav__link\">
                                                    <i class=\"kt-nav__link-icon flaticon-refresh\"></i>
                                                    <span class=\"kt-nav__link-text\">{{'Return discards'|__}}</span>
                                                </a>
                                            </li>
                                        {% endif %}
                                        {% if order.requested == 11 %}
                                            <li class=\"kt-nav__item\">
                                                <a href=\"javascript:;\" id=\"return_discards\" class=\"kt-nav__link\">
                                                    <i class=\"kt-nav__link-icon flaticon2-check-mark\"></i>
                                                    <span class=\"kt-nav__link-text\">{{'Deliver returned discards'|__}}</span>
                                                </a>
                                            </li>
                                        {% endif %}
                                        {% if order.type == 2 and order.requested != 0 %}
                                            <li class=\"kt-nav__item\">
                                                <a href=\"{{'dashboard/order-print'|page({ id: order.id, type: 'shipment' })}}\" target=\"_blank\" class=\"kt-nav__link\">
                                                    <i class=\"kt-nav__link-icon flaticon2-print\"></i>
                                                    <span class=\"kt-nav__link-text\">{{'Print Shipment'|__}}</span>
                                                </a>
                                            </li>
                                        {% endif %}
                                        {% if order.requested != 0 and order.requested != 10  and order.requested != 11 and order.requested != 12 %}
                                            <li class=\"kt-nav__item\">
                                                <a href=\"{{'dashboard/order-print'|page({ id: order.id, type: 'label' })}}\" target=\"_blank\" class=\"kt-nav__link\">
                                                    <i class=\"kt-nav__link-icon flaticon2-print\"></i>
                                                    <span class=\"kt-nav__link-text\">{{'Print Label'|__}}</span>
                                                </a>
                                            </li>
                                        {% endif %}
                                    {% endif %}
                                </ul>
                                <!--end::Nav-->
                            </div>
                        </div>
                    </div>

                    <div class=\"kt-widget__subhead\">
                        {{ barcodeHTML({data: order.barcode, type: 'CODABAR'}) }}
                    </div>

                    <div class=\"kt-widget__info\">

                        <div class=\"kt-widget__stats d-flex align-items-center flex-fill\">
                            <div class=\"kt-widget__item\">
                                <span class=\"kt-widget__date\">
                                    {{'Notes'|__}}
                                </span>
                                <div class=\"kt-widget__label notes_scroll\">
                                    <span class=\"btn btn-label-brand btn-sm btn-bold btn-upper\">{{order.notes.count}}</span>
                                </div>
                            </div>
                            <div class=\"kt-widget__item\">
                                <span class=\"kt-widget__date\">
                                    {{'Package Receive Date'|__}}
                                </span>
                                <div class=\"kt-widget__label\">
                                    <span class=\"btn btn-label-brand btn-sm btn-bold btn-upper\">{{order.ship_date|date(settings.dateformat)}}</span>
                                </div>
                            </div>
                            {% if order.receive_date %}
                                <div class=\"kt-widget__item\">
                                    <span class=\"kt-widget__date\">
                                        {{'Received Date'|__}}
                                    </span>
                                    <div class=\"kt-widget__label\">
                                        <span class=\"btn btn-label-{{progress_status}} btn-sm btn-bold btn-upper\">{{order.receive_date|date(settings.dateformat)}}</span>
                                    </div>
                                </div>
                            {% else %}
                                <div class=\"kt-widget__item\">
                                    <span class=\"kt-widget__date\">
                                        {{'Package Expected Delievery Date'|__}}
                                    </span>
                                    <div class=\"kt-widget__label\">
                                        {% if order.delivery_date %}
                                            <span class=\"btn btn-label-brand btn-sm btn-bold btn-upper\">{{order.delivery_date|date(settings.dateformat)}}</span>{% if order.postponed == 1 and order.requested in [1,3,5,6,7,10,11] %} | <span class=\"btn btn-label-info btn-sm btn-bold btn-upper\">{{'POSTPONED'|__}}</span>{% endif %}
                                        {% else %}
                                            <span class=\"btn btn-label-brand btn-sm btn-bold btn-upper\">{{order.ship_date|date_modify(\"+\"~order.deliverytime.count~\" hours\")|date(settings.dateformat)}}</span>
                                        {% endif %}
                                    </div>
                                </div>
                            {% endif %}

                            <div class=\"kt-widget__item flex-fill\">
                                <span class=\"kt-widget__subtitel\">{{'Progress'|__}}</span>
                                <div class=\"kt-widget__progress d-flex  align-items-center\">
                                    <div class=\"progress\" style=\"height: 5px;width: 100%;\">
                                        <div class=\"progress-bar kt-bg-{{progress_status}}\" role=\"progressbar\" style=\"width: {{progress}}%;\" aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                    </div>
                                    <span class=\"kt-widget__stat\">
                                        {{progress}}%
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end:: Portlet-->


<div class=\"row\">
    <div class=\"col-xl-6\">
        <!--begin:: Widgets/Order Statistics-->
        <div class=\"kt-portlet kt-portlet--height-fluid\">
        \t<div class=\"kt-portlet__head\">
        \t\t<div class=\"kt-portlet__head-label\">
        \t\t\t<h3 class=\"kt-portlet__head-title\">
        \t\t\t\t{{'Order Details'|__}}
        \t\t\t</h3>
        \t\t</div>
        \t</div>
        \t<div class=\"kt-portlet__body kt-portlet__body--fluid\">
        \t\t<div class=\"kt-widget12\">
        \t\t\t<div class=\"kt-widget12__content\">
                        <div class=\"kt-widget12__item\">
                            <div class=\"kt-widget12__info\">
                                <span class=\"kt-widget12__desc\">{{'Shipment Type'|__}}</span>
                                <span class=\"kt-widget12__value\">
                                    {% if order.type == 1 %}
                                        {{'Receive'|__}}
                                    {% else %}
                                        {{'Send'|__}}
                                    {% endif %}
                                </span>
                            </div>
                            <div class=\"kt-widget12__info\">
                                <span class=\"kt-widget12__desc\">{{'Package Type'|__}}</span>
                                <span class=\"kt-widget12__value\">{{order.packaging.name}}</span>
                            </div>
                        </div>
                        <div class=\"kt-widget12__item\">
                            <div class=\"kt-widget12__info\">
                                <span class=\"kt-widget12__desc\">{{'Status'|__}}</span>
                                <span class=\"kt-widget12__value\">
                                    <span class=\"btn btn-label-{{order.status.color}} btn-sm btn-bold btn-upper\">{{order.status.name}}</span>
                                    {% if progress_status == 'danger' %} | <span class=\"btn btn-label-{{progress_status}} btn-sm btn-bold btn-upper\">{{'Delayed'|__}}</span>{% endif %}{% if order.requested == 10 or order.requested == 11 %} | <span class=\"btn btn-label-warning btn-sm btn-bold btn-upper\">{{'RETURNING DISCARDS'|__}}</span>{% endif %}{% if order.postponed == 1 %} | <span class=\"btn btn-label-info btn-sm btn-bold btn-upper\">{{'POSTPONED'|__}}</span>{% endif %}{% if order.requested == 12 and row.status.equal != 12 %} | <span class=\"btn btn-label-success btn-sm btn-bold btn-upper\">{{'Supplied'|__}}</span>{% endif %}
                                </span>
                            </div>
                            <div class=\"kt-widget12__info\">
                                <span class=\"kt-widget12__desc\">{{'Channel'|__}}</span>
                                <span class=\"kt-widget12__value\">{{order.channel|__}}</span>
                            </div>
                        </div>
                        <div class=\"kt-widget12__item\">
                            <div class=\"kt-widget12__info\">
                                <span class=\"kt-widget12__desc\">{{'Payment Type'|__}}</span>
                                <span class=\"kt-widget12__value\">{% if order.payment_type == 1 %}{{'Postpaid'|__}}{% elseif order.payment_type == 2 %}{{'Prepaid'|__}}{% endif %}</span>
                            </div>
                            <div class=\"kt-widget12__info\">
                                <span class=\"kt-widget12__desc\">{{'Currency'|__}}</span>
                                <span class=\"kt-widget12__value\">{{order.currency.name}}</span>
                            </div>
                        </div>
                        <div class=\"kt-widget12__item\">
                            <div class=\"kt-widget12__info\">
                                <span class=\"kt-widget12__desc\">{{'Office'|__}}</span>
                                <span class=\"kt-widget12__value\">{{order.office.name}}</span>
                            </div>
                            <div class=\"kt-widget12__info\">
                                <span class=\"kt-widget12__desc\">{{'Delivery Time'|__}}</span>
                                <span class=\"kt-widget12__value\">{{order.deliverytime.name}}</span>
                            </div>
                        </div>
                        {% if order.assigned_id or order.manifest_id %}
                            <div class=\"kt-widget12__item\">
                                {% if order.manifest_id %}
                                    <div class=\"kt-widget12__info\">
                                        <span class=\"kt-widget12__desc\">{{'Manifest'|__}}</span>
                                        <span class=\"kt-widget12__value\">#{{order.currency.id}}</span>
                                        {% if order.manifest.driver %}
                                            <span class=\"kt-widget12__value kt-font-sm\">{{order.manifest.driver.name}}</span>
                                        {% endif %}
                                    </div>
                                {% endif %}
                                {% if order.assigned_id %}
                                    <div class=\"kt-widget12__info\">
                                        <span class=\"kt-widget12__desc\">{{'Assigned To'|__}}</span>
                                        <span class=\"kt-widget12__value\">{{order.responsiable.name}}</span>
                                        {% if order.responsiable.mobile %}
                                            <span class=\"kt-widget12__value kt-font-sm\">{{order.responsiable.mobile}}</span>
                                        {% endif %}
                                    </div>
                                {% endif %}
                            </div>
                        {% endif %}
                        {% if order.courier_id or order.mode_id %}
                            <div class=\"kt-widget12__item\">
                                {% if order.courier_id %}
                                    <div class=\"kt-widget12__info\">
                                        <span class=\"kt-widget12__desc\">{{'Courier Company'|__}}</span>
                                        <span class=\"kt-widget12__value\">{{order.courier.name}}</span>
                                    </div>
                                {% endif %}
                                {% if order.mode_id %}
                                    <div class=\"kt-widget12__info\">
                                        <span class=\"kt-widget12__desc\">{{'Shipping Mode'|__}}</span>
                                        <span class=\"kt-widget12__value\">{{order.mode.name}}</span>
                                    </div>
                                {% endif %}
                            </div>
                        {% endif %}

                        {% if order.requested in [4,5,6,10,11,12] %}
                            {% if order.delivered_by != order.delivered_responsiable %}
                                <div class=\"kt-widget12__item\">
                                    <div class=\"kt-widget12__info\">
                                        <span class=\"kt-widget12__desc\">{{'Delivered Responsiabality'|__}}</span>
                                        <span class=\"kt-widget12__value\">{{order.delivered_responsiabality.name}}</span>
                                    </div>
                                </div>
                            {% endif %}
                            <div class=\"kt-widget12__item\">
                                <div class=\"kt-widget12__info\">
                                    <span class=\"kt-widget12__desc\">{{'Delivered By'|__}}</span>
                                    <span class=\"kt-widget12__value\">{{order.delivered_employee.name}}</span>
                                </div>
                                <div class=\"kt-widget12__info\">
                                    <span class=\"kt-widget12__desc\">{{'Received By'|__}}</span>
                                    <span class=\"kt-widget12__value\">{{order.received_by}}</span>
                                </div>
                            </div>
                            <div class=\"kt-widget12__item\">
                                <div class=\"kt-widget12__info\">
                                    <span class=\"kt-widget12__desc\">{{'Receiver ID Copy'|__}}</span>
                                    <span class=\"kt-widget12__value\">
                                        <img src=\"{{order.id_copy.path}}\" style=\"max-height:350px;\" alt=\"\" />
                                    </span>
                                </div>
                            </div>
                            <div class=\"kt-widget12__item\">
                                <div class=\"kt-widget12__info\">
                                    <span class=\"kt-widget12__desc\">{{'Receiver Signature'|__}}</span>
                                    <span class=\"kt-widget12__value\">
                                        <img src=\"{{order.esign}}\" style=\"max-height:350px;\" alt=\"\" />
                                    </span>
                                </div>
                            </div>
                        {% endif %}
        \t\t\t</div>
        \t\t</div>
        \t</div>
        </div>
        <!--end:: Widgets/Order Statistics-->
    </div>
    <div class=\"col-xl-6\">
        <!--begin:: Widgets/Order Statistics-->
        <div class=\"kt-portlet kt-portlet--height-fluid\">
        \t<div class=\"kt-portlet__head\">
        \t\t<div class=\"kt-portlet__head-label\">
        \t\t\t<h3 class=\"kt-portlet__head-title\">
        \t\t\t\t{{'Shipment Details'|__}}
        \t\t\t</h3>
        \t\t</div>
        \t</div>
        \t<div class=\"kt-portlet__body kt-portlet__body--fluid\">
        \t\t<div class=\"kt-widget12\">
        \t\t\t<div class=\"kt-widget12__content\">
                        {% if order.items is not empty %}
                            <div class=\"kt-widget12__item\">
                                <div class=\"kt-widget12__info\">
                            \t\t<div class=\"table-responsive\">
                                        <table class=\"table table-dark\">
                    \t\t\t\t\t  \t<thead>
                    \t\t\t\t\t    \t<tr>
                    \t\t\t\t\t      \t\t<th>{{\"Category\"|__}}</th>
                    \t\t\t\t\t      \t\t<th>{{\"Info\"|__}}</th>
                    \t\t\t\t\t      \t\t<th>{{\"Weight\"|__}}</th>
                    \t\t\t\t\t    \t</tr>
                    \t\t\t\t\t  \t</thead>
                    \t\t\t\t\t  \t<tbody>
                                                {% for item in order.items %}
                        \t\t\t\t\t    \t<tr>
                        \t\t\t\t\t\t      \t<th scope=\"row\">{{item.category.name}}</th>
                        \t\t\t\t\t\t      \t<td>
                                                            {% if item.description %}
                                                                {{item.description}}<br />
                                                            {% endif %}
                                                            <b>{{'Quantity'|__}}:</b> {{item.quantity}}<br />
                                                            <b>{{'Dimensions'|__}}:</b> {{item.length}} {{'cm'|__}} x {{item.width}} {{'cm'|__}} x {{item.height}} {{'cm'|__}}
                                                        </td>
                        \t\t\t\t\t\t      \t<td>{{item.weight}} {{'Kg'|__}}</td>
                        \t\t\t\t\t    \t</tr>
                                                {% endfor %}
                    \t\t\t\t\t  \t</tbody>
                    \t\t\t\t\t</table>
                                    </div>
                                </div>
                            </div>
                        {% endif %}
                        {% if order.tax != 0 or order.insurance != 0 or order.customs_value != 0 %}
                            <div class=\"kt-widget12__item\">
                                {% if order.tax != 0 %}
                                <div class=\"kt-widget12__info\">
                                    <span class=\"kt-widget12__desc\">{{'Tax'|__}}</span>
                                    <span class=\"kt-widget12__value\">{{order.tax}}%</span>
                                </div>
                                {% endif %}
                                {% if order.insurance != 0 %}
                                <div class=\"kt-widget12__info\">
                                    <span class=\"kt-widget12__desc\">{{'Insurance'|__}}</span>
                                    <span class=\"kt-widget12__value\">{{order.insurance}}%</span>
                                </div>
                                {% endif %}
                                {% if order.customs_value != 0 %}
                                <div class=\"kt-widget12__info\">
                                    <span class=\"kt-widget12__desc\">{{'Customs Value'|__}}</span>
                                    <span class=\"kt-widget12__value\">{{order.customs_value}}</span>
                                </div>
                                {% endif %}
                            </div>
                        {% endif %}
                        {% if user.role_id in [1,2,3,6] or user.is_superuser %}
                            <div class=\"kt-widget12__item\">
                                {% if order.type == 1 and order.receiver_id is null %}
                                    <div class=\"kt-widget12__info\">
                                        <span class=\"kt-widget12__desc\">{{'Pickup Cost'|__}}</span>
                                        <span class=\"kt-widget12__value\">
                                            {{order.courier_fee|currency}}
                                            {% if order.payments.where('payment_type', 'courier_fee').first.status == 3 %}
                                                <span class=\"btn btn-label-success btn-sm btn-bold btn-upper\">{{'Paid'|__}}</span>
                                            {% endif %}
                                        </span>
                                    </div>
                                    <div class=\"kt-widget12__info\">
                                        <span class=\"kt-widget12__desc\">{{'Shipping Cost'|__}}</span>
                                        <span class=\"kt-widget12__value\">
                                            {{settings.fees.delivery_cost|currency}} {% if order.requested in [100,0,1] %}<span class=\"btn btn-label-danger btn-sm btn-bold btn-upper\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"{{'The actual cost will be calculated when we receive the package'|__}}\" data-original-title=\"{{'The actual cost will be calculated when we receive the package'|__}}\" data-skin=\"dark\">{{\"Not confirmed yet\"|__}}</span>{% endif %}
                                        </span>
                                    </div>
                                {% else %}
                                    <div class=\"kt-widget12__info\">
                                        <span class=\"kt-widget12__desc\">{{'Shipping Cost'|__}}</span>
                                        <span class=\"kt-widget12__value\">
                                            {{order.courier_fee|currency}} {% if order.requested in [100,0,1] %}<span class=\"btn btn-label-danger btn-sm btn-bold btn-upper\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"{{'The actual cost will be calculated when we receive the package'|__}}\" data-original-title=\"{{'The actual cost will be calculated when we receive the package'|__}}\" data-skin=\"dark\">{{\"Not confirmed yet\"|__}}</span>{% endif %}
                                        </span>
                                    </div>
                                {% endif %}
                                {% if order.return_defray == 1 %}
                                    <div class=\"kt-widget12__info\">
                                        <span class=\"kt-widget12__desc\">{{'Package Cost'|__}}</span>
                                        <span class=\"kt-widget12__value\">
                                            {{order.package_fee|currency}}
                                            {% if order.payments.where('payment_type', 'package_fee').first.status == 2 %}
                                                <span class=\"btn btn-label-danger btn-sm btn-bold btn-upper\">{{'Canceled'|__}}</span>
                                            {% elseif order.requested == 12 %}
                                                <span class=\"btn btn-label-success btn-sm btn-bold btn-upper\">{{'Paid'|__}}</span>
                                            {% endif %}
                                        </span>
                                    </div>
                                    <div class=\"kt-widget12__info\">
                                        <span class=\"kt-widget12__desc\">{{'Return Courier Cost'|__}}</span>
                                        <span class=\"kt-widget12__value\">{{order.return_courier_fee|currency}}</span> {% if order.requested in [100,0,1] %}<span class=\"btn btn-label-danger btn-sm btn-bold btn-upper\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"{{'The actual cost will be calculated when we receive the package'|__}}\" data-original-title=\"{{'The actual cost will be calculated when we receive the package'|__}}\" data-skin=\"dark\">{{\"Not confirmed yet\"|__}}</span>{% endif %}
                                    </div>
                                {% else %}
                                    {% if order.payments.where('payment_type', 'return_package_fee').first %}
                                        <div class=\"kt-widget12__info\">
                                            <span class=\"kt-widget12__desc\">{{'Return Courier Cost'|__}}</span>
                                            <span class=\"kt-widget12__value\">
                                                {{order.return_courier_fee|currency}}
                                                {% if order.payments.where('payment_type', 'return_package_fee').first.status == 2 %}
                                                    <span class=\"btn btn-label-danger btn-sm btn-bold btn-upper\">{{'Canceled'|__}}</span>
                                                {% elseif order.payments.where('payment_type', 'return_package_fee').first.status == 3 %}
                                                    <span class=\"btn btn-label-success btn-sm btn-bold btn-upper\">{{'Paid'|__}}</span>
                                                {% endif %}
                                            </span>
                                        </div>
                                    {% endif %}
                                {% endif %}
                            </div>
                        {% endif %}
                        <div class=\"kt-widget12__item\">
                            <div class=\"kt-widget12__info\">
                                {% if user.id == order.receiver_id %}
                                    <span class=\"kt-widget12__desc\">{{'Total Requested From You'|__}}</span>
                                {% else %}
                                    <span class=\"kt-widget12__desc\">{{'Total Requested From The Receiver'|__}}</span>
                                {% endif %}
                                <span class=\"kt-widget12__value\">{{receiver_fees|currency}}{% if order.requested in [100,0,1] %} <span class=\"btn btn-label-danger btn-sm btn-bold btn-upper\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"{{'The actual cost will be calculated when we receive the package'|__}}\" data-original-title=\"{{'The actual cost will be calculated when we receive the package'|__}}\" data-skin=\"dark\">{{\"Not confirmed yet\"|__}}</span>{% endif %}</span>
                                {% if order.type == 1 and order.receiver_id is null %}
                                    <span class=\"muted-text kt-font-danger\">{{'The correct fees will be applied after selecting the receiver address'|__}}</span>
                                {% endif %}</span>
                            </div>
                        </div>
                        <div class=\"kt-widget12__item\">
                            <div class=\"kt-widget12__info\">
                                {% if user.id == order.sender_id %}
                                    <span class=\"kt-widget12__desc\">{{'Total Requested From You'|__}}</span>
                                {% else %}
                                    <span class=\"kt-widget12__desc\">{{'Total Requested From The Sender'|__}}</span>
                                {% endif %}
                                <span class=\"kt-widget12__value\">{{sender_fees|currency}}{% if order.requested in [100,0,1] %} <span class=\"btn btn-label-danger btn-sm btn-bold btn-upper\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"{{'The actual cost will be calculated when we receive the package'|__}}\" data-original-title=\"{{'The actual cost will be calculated when we receive the package'|__}}\" data-skin=\"dark\">{{\"Not confirmed yet\"|__}}</span>{% endif %}</span>
                                {% if order.type == 1 and order.receiver_id is null %}
                                    <span class=\"muted-text kt-font-danger\">{{'The correct fees will be applied after selecting the receiver address'|__}}</span>
                                {% endif %}
                            </div>
                        </div>
                        <div class=\"kt-widget12__item\">
                            <div class=\"kt-widget12__info\">
                                <span class=\"kt-widget12__desc\">{{'Total received'|__}}</span>
                                <span class=\"kt-widget12__value\">{{total_received|currency}}</span>
                            </div>
                            <div class=\"kt-widget12__info\">
                                <span class=\"kt-widget12__desc\">{{'Total remaining'|__}}</span>
                                <span class=\"kt-widget12__value\">
                                    {% if order.return_defray == 1 and order.return_package_fee == 2 and order.requested in [4,5,6,8,9,10,11,12]%}
                                        {{total_remaining|currency}} <span class=\"btn btn-label-danger btn-sm btn-bold btn-upper\">{{\"The requested amount of the sender was deducted from the return\"|__}}</span>
                                    {% else %}
                                        {{total_remaining|currency}}
                                    {% endif %} {% if order.requested in [100,0,1] %}<span class=\"btn btn-label-danger btn-sm btn-bold btn-upper\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"{{'The actual cost will be calculated when we receive the package'|__}}\" data-original-title=\"{{'The actual cost will be calculated when we receive the package'|__}}\" data-skin=\"dark\">{{\"Not confirmed yet\"|__}}</span>{% endif %}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
        \t</div>
        </div>
        <!--end:: Widgets/Order Statistics-->
    </div>
</div>
<div class=\"row\">
    <div class=\"col-xl-{% if order.type == 1 and order.receiver_id == null %}12{% else %}6{% endif %}\">
        <!--begin:: Widgets/Order Statistics-->
        <div class=\"kt-portlet kt-portlet--height-fluid\">
        \t<div class=\"kt-portlet__head\">
        \t\t<div class=\"kt-portlet__head-label\">
        \t\t\t<h3 class=\"kt-portlet__head-title\">
        \t\t\t\t{{'Sender Details'|__}}
        \t\t\t</h3>
        \t\t</div>
        \t</div>
        \t<div class=\"kt-portlet__body kt-portlet__body--fluid\">
        \t\t<div class=\"kt-widget12\">
        \t\t\t<div class=\"kt-widget12__content\">
                        <div class=\"kt-widget12__item\">
                            <div class=\"kt-widget12__info\">
                                <span class=\"kt-widget12__desc\">{{'Name'|__}}</span>
                                <span class=\"kt-widget12__value\">
                                    {{order.sender.name|capitalize}}
                                    {% if order.sender.userverify_dateverified %}
                                        <i class=\"flaticon2-correct kt-font-info\"></i>
                                    {% endif %}
                                </span>
                            </div>
                            <div class=\"kt-widget12__info\">
                                <span class=\"kt-widget12__desc\">{{'Mobile'|__}}</span>
                                <span class=\"kt-widget12__value\">{{order.sender.mobile}}</span>
                            </div>
                        </div>
                        {% if order.sender.email or order.sender.gender %}
                            <div class=\"kt-widget12__item\">
                                {% if order.sender.email %}
                                    <div class=\"kt-widget12__info\">
                                        <span class=\"kt-widget12__desc\">{{'Email'|__}}</span>
                                        <span class=\"kt-widget12__value\">{{ order.sender.email }}</span>
                                    </div>
                                {% endif %}
                                {% if order.sender.gender %}
                                    <div class=\"kt-widget12__info\">
                                        <span class=\"kt-widget12__desc\">{{'Gender'|__}}</span>
                                        <span class=\"kt-widget12__value\">{{order.sender.gender}}</span>
                                    </div>
                                {% endif %}
                            </div>
                        {% endif %}
                        <div class=\"kt-widget12__item\">
                            <div class=\"kt-widget12__info\">
                                <span class=\"kt-widget12__desc\">{{'Sender Address'|__}}</span>
                                <span class=\"kt-widget12__value\">
                                    {{order.sender_address.name|capitalize}}
                                </span>
                            </div>
                        </div>
                        <div class=\"kt-widget12__item\">
                            <div class=\"kt-widget12__info\">
                                <span class=\"kt-widget12__desc\">{{'Street'|__}}</span>
                                <span class=\"kt-widget12__value\">
                                    {{order.sender_address.street}}
                                </span>
                            </div>
                        </div>
                        {% if order.sender_address.area or order.sender_address.thecity %}
                            <div class=\"kt-widget12__item\">
                                {% if order.sender_address.area %}
                                    <div class=\"kt-widget12__info\">
                                        <span class=\"kt-widget12__desc\">{{'County'|__}}</span>
                                        <span class=\"kt-widget12__value\">
                                            {{order.sender_address.area.name}}
                                        </span>
                                    </div>
                                {% endif %}
                                {% if order.sender_address.thecity %}
                                    <div class=\"kt-widget12__info\">
                                        <span class=\"kt-widget12__desc\">{{'City'|__}}</span>
                                        <span class=\"kt-widget12__value\">
                                            {{order.sender_address.thecity.name}}
                                        </span>
                                    </div>
                                {% endif %}
                            </div>
                        {% endif %}
                        {% if order.sender_address.thestate or order.sender_address.thecountry %}
                            <div class=\"kt-widget12__item\">
                                {% if order.sender_address.thestate %}
                                    <div class=\"kt-widget12__info\">
                                        <span class=\"kt-widget12__desc\">{{'State'|__}}</span>
                                        <span class=\"kt-widget12__value\">
                                            {{order.sender_address.thestate.name}}
                                        </span>
                                    </div>
                                {% endif %}
                                {% if order.sender_address.thecountry %}
                                    <div class=\"kt-widget12__info\">
                                        <span class=\"kt-widget12__desc\">{{'Country'|__}}</span>
                                        <span class=\"kt-widget12__value\">
                                            {{order.sender_address.thecountry.name}}
                                        </span>
                                    </div>
                                {% endif %}
                            </div>
                        {% endif %}
                        <div class=\"kt-widget12__item\">
                            <div class=\"kt-widget12__info\">
                        \t\t<div class=\"kt-widget15\">
                        \t\t\t<div class=\"kt-widget15__map\">
                        \t\t\t\t<div id=\"kt_map_sender\" style=\"height:320px;\"></div>
                        \t\t\t</div>
                                </div>
                            </div>
                        </div>
        \t\t\t</div>
        \t\t</div>
        \t</div>
        </div>
        <!--end:: Widgets/Order Statistics-->
    </div>
    {% if order.type == 2 or order.receiver_id != null %}
        <div class=\"col-xl-6\">
            <!--begin:: Widgets/Order Statistics-->
            <div class=\"kt-portlet kt-portlet--height-fluid\">
            \t<div class=\"kt-portlet__head\">
            \t\t<div class=\"kt-portlet__head-label\">
            \t\t\t<h3 class=\"kt-portlet__head-title\">
            \t\t\t\t{{'Receiver Details'|__}}
            \t\t\t</h3>
            \t\t</div>
            \t</div>
            \t<div class=\"kt-portlet__body kt-portlet__body--fluid\">
            \t\t<div class=\"kt-widget12\">
            \t\t\t<div class=\"kt-widget12__content\">
                            <div class=\"kt-widget12__item\">
                                <div class=\"kt-widget12__info\">
                                    <span class=\"kt-widget12__desc\">{{'Name'|__}}</span>
                                    <span class=\"kt-widget12__value\">
                                        {{order.receiver.name|capitalize}}
                                        {% if order.receiver.userverify_dateverified %}
                                            <i class=\"flaticon2-correct kt-font-info\"></i>
                                        {% endif %}
                                    </span>
                                </div>
                                <div class=\"kt-widget12__info\">
                                    <span class=\"kt-widget12__desc\">{{'Mobile'|__}}</span>
                                    <span class=\"kt-widget12__value\">{{order.receiver.mobile}}</span>
                                </div>
                            </div>
                            {% if order.receiver.email or order.receiver.gender %}
                                <div class=\"kt-widget12__item\">
                                    {% if order.receiver.email %}
                                        <div class=\"kt-widget12__info\">
                                            <span class=\"kt-widget12__desc\">{{'Email'|__}}</span>
                                            <span class=\"kt-widget12__value\">{{ order.receiver.email }}</span>
                                        </div>
                                    {% endif %}
                                    {% if order.receiver.gender %}
                                        <div class=\"kt-widget12__info\">
                                            <span class=\"kt-widget12__desc\">{{'Gender'|__}}</span>
                                            <span class=\"kt-widget12__value\">{{order.receiver.gender}}</span>
                                        </div>
                                    {% endif %}
                                </div>
                            {% endif %}
                            <div class=\"kt-widget12__item\">
                                <div class=\"kt-widget12__info\">
                                    <span class=\"kt-widget12__desc\">{{'Receiver Address'|__}}</span>
                                    <span class=\"kt-widget12__value\">
                                        {{order.receiver_address.name|capitalize}}
                                    </span>
                                </div>
                            </div>
                            <div class=\"kt-widget12__item\">
                                <div class=\"kt-widget12__info\">
                                    <span class=\"kt-widget12__desc\">{{'Street'|__}}</span>
                                    <span class=\"kt-widget12__value\">
                                        {{order.receiver_address.street}}
                                    </span>
                                </div>
                            </div>
                            {% if order.receiver_address.area or order.receiver_address.thecity %}
                                <div class=\"kt-widget12__item\">
                                    {% if order.receiver_address.area %}
                                        <div class=\"kt-widget12__info\">
                                            <span class=\"kt-widget12__desc\">{{'County'|__}}</span>
                                            <span class=\"kt-widget12__value\">
                                                {{order.receiver_address.area.name}}
                                            </span>
                                        </div>
                                    {% endif %}
                                    {% if order.receiver_address.thecity %}
                                        <div class=\"kt-widget12__info\">
                                            <span class=\"kt-widget12__desc\">{{'City'|__}}</span>
                                            <span class=\"kt-widget12__value\">
                                                {{order.receiver_address.thecity.name}}
                                            </span>
                                        </div>
                                    {% endif %}
                                </div>
                            {% endif %}
                            {% if order.receiver_address.thestate or order.receiver_address.thecountry %}
                                <div class=\"kt-widget12__item\">
                                    {% if order.receiver_address.thestate %}
                                        <div class=\"kt-widget12__info\">
                                            <span class=\"kt-widget12__desc\">{{'State'|__}}</span>
                                            <span class=\"kt-widget12__value\">
                                                {{order.receiver_address.thestate.name}}
                                            </span>
                                        </div>
                                    {% endif %}
                                    {% if order.receiver_address.thecountry %}
                                        <div class=\"kt-widget12__info\">
                                            <span class=\"kt-widget12__desc\">{{'Country'|__}}</span>
                                            <span class=\"kt-widget12__value\">
                                                {{order.receiver_address.thecountry.name}}
                                            </span>
                                        </div>
                                    {% endif %}
                                </div>
                            {% endif %}
                            <div class=\"kt-widget12__item\">
                                <div class=\"kt-widget12__info\">
                            \t\t<div class=\"kt-widget15\">
                            \t\t\t<div class=\"kt-widget15__map\">
                            \t\t\t\t<div id=\"kt_map_receiver\" style=\"height:320px;\"></div>
                            \t\t\t</div>
                                    </div>
                                </div>
                            </div>
            \t\t\t</div>
            \t\t</div>
            \t</div>
            </div>
            <!--end:: Widgets/Order Statistics-->
        </div>
    {% endif %}
</div>
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
                    {% for activity in order.activities %}
                        <!--begin::widget 12-->
                        <div class=\"kt-widget4\">
                            <div class=\"kt-widget4__item\">
                                <span class=\"kt-widget4__icon\"><i class=\"flaticon-pie-chart-1 kt-font-info\"></i></span>
                                <div class=\"kt-widget4__info\">
        \t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"kt-widget4__username\">
                                        {% if activity.other %}
                                            {% set text = 'activity_'~activity.description %}
                                            {{text|__}}: {{activity.other}}
                                        {% else %}
                                            {% set text = 'activity_'~activity.description %}
            \t\t\t\t\t\t\t\t{{text|__}}
                                        {% endif %}
        \t\t\t\t\t\t\t</a>
        \t\t\t\t\t\t\t<p class=\"kt-widget4__text\">
        \t\t\t\t\t\t\t\t{{activity.created_at|date(settings.dateformat)}} {{activity.created_at|date('h:i')}} {{activity.created_at|date('a')|__}}
        \t\t\t\t\t\t\t</p>
        \t\t\t\t\t\t</div>
                                <span class=\"kt-widget4__number kt-font-info\">{{activity.user.name}}</span>
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
    <div class=\"col-xl-6\" id=\"notes_continer\">

        <div class=\"kt-portlet kt-portlet--height-fluid\">
            <div class=\"kt-portlet__head\">
                <div class=\"kt-portlet__head-label\">
                    <h3 class=\"kt-portlet__head-title\">{{'Notes'|__}}</h3>
                </div>
            </div>
            <div class=\"kt-portlet__body\">
                {{ form_ajax('onNote', {success:\"flashRequest(data.type,data.message);\$('#note_message').val('');\", class:'kt_form notes' }) }}
                    <div class=\"form-group form-group-last kt-hide\">
                        <div class=\"alert alert-danger kt_form_msg_notes\" role=\"alert\">
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
                    <div class=\"form-group\">
                        <textarea class=\"form-control\" id=\"note_message\" rows=\"3\" name=\"note\" placeholder=\"{{'Write your notes'|__}}\" required></textarea>
                    </div>
                    <div class=\"row\">
                        <div class=\"col\">
                            <button type=\"submit\" class=\"btn btn-label-brand btn-bold\">{{'Add note'|__}}</button>
                            <button type=\"reset\" class=\"btn btn-clean btn-bold\">{{'Cancel'|__}}</button>
                        </div>
                    </div>
                {{ form_close() }}

                <div class=\"kt-separator kt-separator--space-lg kt-separator--border-dashed\"></div>
                <div id=\"notes\">
                    {% partial 'notes' item=order %}
                </div>
            </div>
        </div>
    </div>
    <!--
        <div class=\"col-xl-6 kt-todo\">
            <div class=\"kt-grid__item kt-grid__item--fluid  kt-portlet kt-portlet--height-fluid kt-todo__list\" id=\"kt_todo_list\">
                <div class=\"kt-portlet__body kt-portlet__body--fit-x\">
                    <div class=\"kt-todo__head\">
                        <div class=\"kt-todo__toolbar\">
                            <div class=\"kt-todo__info\">
                                <span class=\"kt-todo__name\">
                                    {{'Order Tasks'|__}}
                                </span>
                            </div>
                            <div class=\"kt-todo__details\">
                                <a href=\"javascript:;\" class=\"btn btn-label-success btn-upper btn-sm btn-bold\">{{'New Task'|__}}</a>
                            </div>
                        </div>
                    </div>

                    <div class=\"kt-todo__body\">
                        {% for task in tasks %}
                            <div class=\"kt-todo__items\" data-type=\"task\">
                                <div class=\"kt-todo__item kt-todo__item--unread\" data-id=\"1\" data-type=\"task\">
                                    <div class=\"kt-todo__info\">
                                        <div class=\"kt-todo__actions\">
                                            <label class=\"kt-checkbox kt-checkbox--single kt-checkbox--tick kt-checkbox--brand\">
                                                <input type=\"checkbox\">
                                                <span></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class=\"kt-todo__details\" data-toggle=\"view\">
                                        <div class=\"kt-todo__message\">
                                            <span class=\"kt-todo__subject\">{{task.title}}</span>
                                        </div>
                                        <div class=\"kt-todo__labels\">
                                            <span class=\"kt-todo__label kt-badge kt-badge--unified-brand kt-badge--bold kt-badge--inline\">{{task.comment}}</span>
                                        </div>
                                    </div>
                                    <div class=\"kt-todo__datetime\" data-toggle=\"view\">
                                        8:30 PM
                                    </div>
                                    <div class=\"kt-todo__sender\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"{{task.user.name}}\">
                                        {% if task.user.avatar %}
                                             <span class=\"kt-media kt-media--sm kt-media--danger kt-hidden\" style=\"background-image: url('{{task.user.avatar.thumb(100, 100,'crop')}}')\">
                                                 <span></span>
                                             </span>
                                        {% else %}
                                            <div class=\"kt-todo__sender\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"{{task.user.name}}\">
                                                <span class=\"kt-media kt-media--sm kt-media--brand\">
                                                    <span>{{task.user.name|capitalize|slice(0,2)}}</span>
                                                </span>
                                            </div>
                                       {% endif %}
                                    </div>
                                </div>
                            </div>
                        {% else %}
                            <div class=\"kt-todo__items\" data-type=\"task\">
                                <div class=\"kt-todo__item kt-todo__item--unread\" data-type=\"task\">
                                    <div class=\"kt-todo__details\" data-toggle=\"view\">
                                        <div class=\"kt-todo__message\">
                                            <span class=\"kt-todo__subject\">{{'No tasks found'|__}}.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        {% endfor %}
                    </div>
                    {% if tasks %}
                        <div class=\"kt-todo__foot\">
                            <div class=\"kt-todo__toolbar\">
                                <div class=\"kt-todo__controls\">
                                     {{ tasks.render|raw }}
                                     <button class=\"kt-todo__icon\" data-toggle=\"kt-tooltip\" title=\"Previose page\">
                                         <i class=\"flaticon2-left-arrow\"></i>
                                     </button>

                                     <button class=\"kt-todo__icon\" data-toggle=\"kt-tooltip\" title=\"Next page\">
                                         <i class=\"flaticon2-right-arrow\"></i>
                                     </button>
                                </div>
                            </div>
                        </div>
                    {% endif %}
                </div>
            </div>
        </div>
    -->
</div>

<div class=\"modal fade\" id=\"assign_employee\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" >{{'Assign Employee'|__}}</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                </button>
            </div>
            {{ form_ajax('onAssign', { success: 'created successfully!', flash: true, class: 'kt_form' }) }}
                <div class=\"modal-body\">
                    <div class=\"row\">
                        <div class=\"form-group col-lg-12\">
                            <label>{{'To who?'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            <select class=\"form-control \" name=\"assigned_id\" data-live-search=\"true\">
                                <option data-hidden=\"true\"></option>
                                {% for employee in employees %}
                                    <option value=\"{{employee.id}}\">{{employee.name}}</option>
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
<div class=\"modal fade\" id=\"assign_manifest\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" >{{'Assign Manifest'|__}}</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                </button>
            </div>
            {{ form_ajax('onManifest', { success: 'created successfully!', flash: true, class: 'kt_form' }) }}
                <div class=\"modal-body\">
                    <div class=\"row\">
                        <div class=\"form-group col-lg-12\">
                            <label>{{'To which manifest?'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            <select class=\"form-control \" name=\"manifest_id\" data-live-search=\"true\">
                                <option data-hidden=\"true\"></option>
                                {% for manifest in manifestes %}
                                    <option value=\"{{manifest.id}}\">#{{manifest.id}} {{manifest.driver.name}}</option>
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
<div class=\"modal fade\" id=\"transfer_office\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" >{{'Transfer to office'|__}}</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                </button>
            </div>
            {{ form_ajax('onTransfer', { success: 'created successfully!', flash: true, class: 'kt_form' }) }}
                <div class=\"modal-body\">
                    <div class=\"row\">
                        <div class=\"form-group col-lg-12\">
                            <label>{{'To which office?'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            <select class=\"form-control \" name=\"office_id\" data-live-search=\"true\">
                                <option data-hidden=\"true\"></option>
                                {% for office in offices %}
                                    <option value=\"{{office.id}}\">{{office.name}}</option>
                                {% endfor %}
                            </select>
                        </div>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">{{'Close'|__}}</button>
                    <button type=\"submit\" class=\"btn btn-primary\">{{'Transfer'|__}}</button>
                </div>
            {{ form_close() }}
        </div>
    </div>
</div>
<div class=\"modal fade\" id=\"postpone\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" >{{'Postpone'|__}}</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                </button>
            </div>
            {{ form_ajax('onPostpone', { success: 'created successfully!', flash: true, class: 'kt_form' }) }}
            <div class=\"modal-body\">
                <div class=\"row\">
                    <div class=\"form-group col-lg-12\">
                        <label>{{'To Date'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                        <div class=\"input-group date\">
                            <input type=\"text\" class=\"form-control date\" readonly=\"\" name=\"ship_date\" value=\"{{now|date_modify(\"+1 day\")|date(settings.dateformat)}}\" required>
                            <div class=\"input-group-append\">
                                <span class=\"input-group-text\">
                                    <i class=\"la la-calendar\"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"form-group col-lg-12\">
                        <label>{{'Reason'|__}}</label>
                        <textarea class=\"form-control\" name=\"message\"></textarea>
                    </div>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">{{'Close'|__}}</button>
                <button type=\"submit\" class=\"btn btn-primary\">{{'Postpone'|__}}</button>
            </div>
            {{ form_close() }}
        </div>
    </div>
</div>
<div class=\"modal fade\" id=\"refuse\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" >{{'Refuse'|__}}</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                </button>
            </div>

            {{ form_ajax('onRefuse', { success: 'created successfully!', flash: true, class: 'kt_form' }) }}
            <div class=\"modal-body\">
                <div class=\"row\">
                    <div class=\"form-group col-lg-12\">
                        <label>{{'Reason'|__}}</label>
                        <textarea class=\"form-control\" name=\"message\"></textarea>
                    </div>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">{{'Close'|__}}</button>
                <button type=\"submit\" class=\"btn btn-primary\">{{'Refuse'|__}}</button>
            </div>
            {{ form_close() }}
        </div>
    </div>
</div>
<div class=\"modal fade\" id=\"discards\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" >{{'Transfer as discards'|__}}</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                </button>
            </div>

            {{ form_ajax('onDiscards', { success: 'created successfully!', flash: true, class: 'kt_form' }) }}
            <div class=\"modal-body\">
                <div class=\"row\">
                    <div class=\"form-group col-lg-12\">
                        <label>{{'Reason'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                        <select class=\"form-control \" id=\"discard_reason\" name=\"message\" data-live-search=\"true\" required>
                            <option data-hidden=\"true\"></option>
                            <option value=\"1\">{{'Receiver request'|__}}</option>
                            <option value=\"2\">{{'Receiver evade'|__}}</option>
                            <option value=\"3\">{{'Sender request'|__}}</option>
                        </select>
                    </div>
                </div>
                <div class=\"discard_reason_receiver kt-hidden\">
                    <div class=\"row\">
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
                        <div class=\"form-group col-lg-12\">
                            <label>{{'Return package fees responsiable'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            <div class=\"col-lg-9 col-xl-6\">
                                <div class=\"kt-radio-inline\">
                                    <label class=\"kt-radio\">
                                        <input type=\"radio\" name=\"return_package_fee\" class=\"return_package_fee\" value=\"1\" {% if order.return_package_fee == 1 %}checked{% endif %} required> {{'Receiver'|__}}
                                        <span></span>
                                    </label>
                                    <label class=\"kt-radio\">
                                        <input type=\"radio\" name=\"return_package_fee\" class=\"return_package_fee\" value=\"2\" {% if order.return_package_fee == 2 %}checked{% endif %} required> {{'Sender'|__}}
                                        <span></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"form-group row\">
                        {% for payment in order.payments.where('for_id', order.receiver_id) %}
                            <label class=\"col-lg-9 col-form-label kt-align-left\" for=\"payment_{{payment.id}}\">
                                {% if payment.payment_type %}{{payment.payment_type|__}}: {% endif %}{{'Is it paid ?'|__}}
                            </label>
                            <div class=\"col-lg-3\">
                                <div class=\"kt-checkbox-single\">
                                    <label class=\"kt-checkbox\">
                                        <input type=\"checkbox\" name=\"payments[]\" id=\"payment_{{payment.id}}\" value=\"{{payment.id}}\">
                                        <span></span>
                                    </label>
                                </div>
                            </div>
                        {% endfor %}
                    </div>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">{{'Close'|__}}</button>
                <button type=\"submit\" class=\"btn btn-primary\">{{'Discard'|__}}</button>
            </div>
            {{ form_close() }}
        </div>
    </div>
</div>
<div class=\"modal fade\" id=\"received\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" >{{'Receiver information'|__}}</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                </button>
            </div>

            {{ form_ajax('onDeliver', { success: 'created successfully!', flash: true, class: 'kt_form', novalidate: true }) }}
                <div class=\"modal-body\">
                    <div class=\"row\">

                        <div class=\"form-group col-lg-12\">
                            <label>{{'Receiver'|__}}/{{'Client'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            <select class=\"form-control clients col-lg-12\" name=\"receiver_id\" id=\"receiver_id\" required>
                                <option data-hidden=\"true\"></option>
                                {% if order.receiver %}
                                    <option value=\"{{order.receiver.id}}\" selected>{{order.receiver.name}}</option>
                                {% endif %}
                                {% if user.hasUserPermission('client', 'c') %}
                                    <option value=\"new\" data-icon=\"flaticon2-add\">{{'Add New'|__}}</option>
                                {% endif %}
                            </select>
                        </div>
                        <div class=\"form-group col-lg-12\">
                            <label>{{'Receiver Address'|__}}/{{'Client Address'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            <select class=\"form-control receiver_address_id\" name=\"receiver_address_id\" id=\"receiver_address_id\" data-live-search=\"true\" title=\"{{'Please select receiver first'|__}}\" required>
                                <option data-hidden=\"true\"></option>
                                {% if order.receiver %}
                                    <option value=\"{{order.receiver_address.id}}\" selected>{{order.receiver_address.name}}</option>
                                {% endif %}
                            </select>
                        </div>
                        <div class=\"col-lg-12 kt-hidden\" id=\"addnewreceiver\">
                            <div class=\"kt-portlet kt-portlet--bordered kt-portlet--head--noborder kt-margin-b-0\">
                                <div class=\"kt-portlet__head\">
                                    <div class=\"kt-portlet__head-label\">
                                        <h3 class=\"kt-portlet__head-title\">
                                            {{'Add a new client'|__}}
                                        </h3>
                                    </div>
                                </div>
                                <div class=\"kt-portlet__body\">
                                    <div class=\"row\">
                                        <div class=\"form-group col-lg-12\">
                                            <label>{{'Client Name'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <input type=\"text\" class=\"form-control name\" name=\"receiver[name]\" required />
                                        </div>
                                        <div class=\"form-group col-lg-6\">
                                            <label>{{'Mobile'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <input type=\"text\" class=\"form-control mobile\" name=\"receiver[mobile]\" required />
                                        </div>
                                        <div class=\"form-group col-lg-6\">
                                            <label>{{'Gender'|__}}</label>
                                            <div class=\"kt-radio-inline\">
                                                <label class=\"kt-radio\">
                                                    <input type=\"radio\" name=\"receiver[gender]\" class=\"gender\" value=\"male\"> {{'Male'|__}}
                                                    <span></span>
                                                </label>
                                                <label class=\"kt-radio\">
                                                    <input type=\"radio\" name=\"receiver[gender]\" class=\"gender\" value=\"female\"> {{'Female'|__}}
                                                    <span></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"location-receiver\">
                                        <div class=\"row\">
                                            <div class=\"form-group col-lg-12\">
                                                <label>{{'Address'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                <input type=\"text\" class=\"form-control address street_addr\" data-receiver=\"route\" name=\"receiver[street_address]\"  rel=\"receiver\" required/>
                                                <input type=\"hidden\" class=\"form-control lat\" data-receiver=\"lat\" name=\"receiver[lat]\" />
                                                <input type=\"hidden\" class=\"form-control lng\" data-receiver=\"lng\" name=\"receiver[lng]\" />
                                                <input type=\"hidden\" class=\"form-control url\" data-receiver=\"url\" name=\"receiver[url]\" />
                                            </div>
                                            <div class=\"form-group col-lg-6\">
                                                <label>{{'Country'|__}}</label>
                                                <select class=\"form-control country_id\" data-receiver=\"country\" data-live-search=\"true\" name=\"receiver[country]\">
                                                    <option data-hidden=\"true\"></option>
                                                    {% for country in countries %}
                                                        <option value=\"{{country.id}}\" {% if currentLang != 'en' %}data-subtext=\"{{country.lang(currentLang).name}}\"{% endif %}>{{country.lang('en').name}}</option>
                                                    {% endfor %}
                                                </select>
                                            </div>
                                            <div class=\"form-group col-lg-6\">
                                                <label>{{'Postal Code'|__}}</label>
                                                <input class=\"form-control postal_code\" type=\"text\" data-receiver=\"postal_code\" name=\"receiver[postal_code]\" >
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"form-group col-lg-6\">
                                                <label>{{'State / Region'|__}}</label>
                                                <select class=\"form-control state_id\" data-receiver=\"administrative_area_level_1\" title=\"{{'Please select country first'|__}}\" name=\"receiver[state]\" data-live-search=\"true\">
                                                    <option data-hidden=\"true\"></option>
                                                    {% for state in states %}
                                                        <option value=\"{{state.id}}\" {% if currentLang != 'en' %}data-subtext=\"{{state.lang(currentLang).name}}\"{% endif %}>{{state.lang('en').name}}</option>
                                                    {% endfor %}
                                                </select>
                                            </div>
                                            <div class=\"form-group col-lg-6\">
                                                <label>{{'City'|__}}</label>
                                                <select class=\"form-control city_id\" data-receiver=\"locality\" name=\"receiver[city]\" title=\"{{'Please select state first'|__}}\" data-live-search=\"true\">
                                                    <option data-hidden=\"true\"></option>
                                                    {% for city in cities %}
                                                        <option value=\"{{city.id}}\">{{city.name}}</option>
                                                    {% endfor %}
                                                </select>
                                            </div>
                                            <div class=\"form-group col-lg-12\">
                                                <label>{{'County'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                <select class=\"form-control area_id\" data-receiver=\"sublocality\" name=\"receiver[county]\" title=\"{{'Please select city first'|__}}\" data-live-search=\"true\" required>
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
                                        <div class=\"form-group row\">
                                            <div class=\"col-lg-12\">
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"connect\" class=\"connect\" value=\"receiver\"> {{'Connect client'|__}}: {{'create an account for the client'|__}}
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"row align-items-center kt-hidden\" id=\"connect_receiver\">
                                            <div class=\"col-md-12\">
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
                                            <div class=\"col-md-12\">
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
                                            <div class=\"col-md-12\">
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
                                    </div>
                                </div>
                                <div class=\"kt-portlet__foot\">
                                    <div class=\"row align-items-center\">
                                        <div class=\"col-lg-12\">
                                            <button type=\"button\" class=\"btn btn-success save\">{{'Save'|__}}</button>
                                            <button type=\"button\" class=\"btn btn-secondary cancel\">{{'Cancel'|__}}</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-12 kt-hidden\" id=\"addnewreceiveraddress\">
                            <div class=\"kt-portlet kt-portlet--bordered kt-portlet--head--noborder kt-margin-b-0\">
                                <div class=\"kt-portlet__head\">
                                    <div class=\"kt-portlet__head-label\">
                                        <h3 class=\"kt-portlet__head-title\">
                                            {{'Add a new client address'|__}}
                                        </h3>
                                    </div>
                                </div>
                                <div class=\"kt-portlet__body\">
                                    <div class=\"location-receiveraddress\">
                                        <div class=\"row\">
                                            <div class=\"form-group col-lg-12\">
                                                <label>{{'Address'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                <input type=\"text\" class=\"form-control address street_addr\" data-receiveraddress=\"route\" name=\"receiveraddress[street_address]\"  rel=\"receiveraddress\" required/>
                                                <input type=\"hidden\" class=\"form-control lat\" data-receiveraddress=\"lat\" name=\"receiveraddress[lat]\" />
                                                <input type=\"hidden\" class=\"form-control lng\" data-receiveraddress=\"lng\" name=\"receiveraddress[lng]\" />
                                                <input type=\"hidden\" class=\"form-control url\" data-receiveraddress=\"url\" name=\"receiveraddress[url]\" />
                                            </div>
                                            <div class=\"form-group col-lg-6\">
                                                <label>{{'Country'|__}}</label>
                                                <select class=\"form-control country_id\" data-receiveraddress=\"country\" data-live-search=\"true\" name=\"receiveraddress[country]\">
                                                    <option data-hidden=\"true\"></option>
                                                    {% for country in countries %}
                                                        <option value=\"{{country.id}}\" {% if currentLang != 'en' %}data-subtext=\"{{country.lang(currentLang).name}}\"{% endif %}>{{country.lang('en').name}}</option>
                                                    {% endfor %}
                                                </select>
                                            </div>
                                            <div class=\"form-group col-lg-6\">
                                                <label>{{'Postal Code'|__}}</label>
                                                <input class=\"form-control postal_code\" type=\"text\" data-sendreceiveraddresser=\"postal_code\" name=\"receiveraddress[postal_code]\" >
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"form-group col-lg-6\">
                                                <label>{{'State / Region'|__}}</label>
                                                <select class=\"form-control state_id\" data-receiveraddress=\"administrative_area_level_1\" title=\"{{'Please select country first'|__}}\" name=\"receiveraddress[state]\" data-live-search=\"true\">
                                                    <option data-hidden=\"true\"></option>
                                                    {% for state in states %}
                                                        <option value=\"{{state.id}}\" {% if currentLang != 'en' %}data-subtext=\"{{state.lang(currentLang).name}}\"{% endif %}>{{state.lang('en').name}}</option>
                                                    {% endfor %}
                                                </select>
                                            </div>
                                            <div class=\"form-group col-lg-6\">
                                                <label>{{'City'|__}}</label>
                                                <select class=\"form-control city_id\" data-receiveraddress=\"locality\" name=\"receiveraddress[city]\" title=\"{{'Please select state first'|__}}\" data-live-search=\"true\">
                                                    <option data-hidden=\"true\"></option>
                                                    {% for city in cities %}
                                                        <option value=\"{{city.id}}\">{{city.name}}</option>
                                                    {% endfor %}
                                                </select>
                                            </div>
                                            <div class=\"form-group col-lg-12\">
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
                                </div>
                                <div class=\"kt-portlet__foot\">
                                    <div class=\"row align-items-center\">
                                        <div class=\"col-lg-12\">
                                            <button type=\"button\" class=\"btn btn-success save\">{{'Save'|__}}</button>
                                            <button type=\"button\" class=\"btn btn-secondary cancel\">{{'Cancel'|__}}</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit\"></div>
                        <div class=\"form-group col-lg-12 {% if order.return_defray != 1 %}kt-hidden{% endif %} package_fee\">
                            <label>{{'Courier Cost'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            <div class=\"input-group\">
                                {% if primary_currency.place_symbol_before == 1 %}
                                    <div class=\"input-group-prepend\">
                                        <span class=\"input-group-text\">
                                            {{primary_currency.currency_symbol}}
                                        </span>
                                    </div>
                                {% endif %}
                                    <input type=\"text\" class=\"form-control decimal\" data-type='currency' id=\"courier_fee\" name=\"courier_fee\" value=\"{{order.courier_fee}}\" required />
                                {% if primary_currency.place_symbol_before == 0 %}
                                    <div class=\"input-group-append\">
                                        <span class=\"input-group-text\">
                                            {{primary_currency.currency_symbol}}
                                        </span>
                                    </div>
                                {% endif %}
                            </div>
                        </div>
                        <div class=\"form-group col-lg-12\">
                            <label>{{'Return package cost'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            <div class=\"kt-radio-inline\">
                                <label class=\"kt-radio\">
                                    <input type=\"radio\" name=\"return_defray\" class=\"return_defray\" value=\"1\" {% if order.return_defray == 1 %}checked{% endif %} required> {{'Yes'|__}}
                                    <span></span>
                                </label>
                                <label class=\"kt-radio\">
                                    <input type=\"radio\" name=\"return_defray\" class=\"return_defray\" value=\"2\" {% if order.return_defray == 2 %}checked{% endif %}  required> {{'No'|__}}
                                    <span></span>
                                </label>
                            </div>
                        </div>
                        <div class=\"form-group col-lg-12 {% if order.return_defray != 1 %}kt-hidden{% endif %} package_fee\">
                            <label>{{'Package Cost'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            <div class=\"input-group\">
                                {% if primary_currency.place_symbol_before == 1 %}
                                    <div class=\"input-group-prepend\">
                                        <span class=\"input-group-text\">
                                            {{primary_currency.currency_symbol}}
                                        </span>
                                    </div>
                                {% endif %}
                                    <input type=\"text\" class=\"form-control decimal\" data-type='currency' id=\"package_fee\" name=\"package_fee\" value=\"{{order.package_fee}}\" required />
                                {% if primary_currency.place_symbol_before == 0 %}
                                    <div class=\"input-group-append\">
                                        <span class=\"input-group-text\">
                                            {{primary_currency.currency_symbol}}
                                        </span>
                                    </div>
                                {% endif %}
                            </div>
                        </div>
                        <div class=\"form-group col-lg-12 {% if order.return_defray != 1 %}kt-hidden{% endif %} package_fee\">
                            <label>{{'Return Shipment Cost'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            <div class=\"input-group\">
                                {% if primary_currency.place_symbol_before == 1 %}
                                    <div class=\"input-group-prepend\">
                                        <span class=\"input-group-text\">
                                            {{primary_currency.currency_symbol}}
                                        </span>
                                    </div>
                                {% endif %}
                                    <input type=\"text\" class=\"form-control decimal\" data-type='currency' name=\"return_courier_fee\" id=\"return_courier_fee\" value=\"{% if order.package_fee %}{{order.return_courier_fee}}{% else %}{{settings.fees.delivery_cost_back_receiver}}{% endif %}\" required />
                                {% if primary_currency.place_symbol_before == 0 %}
                                    <div class=\"input-group-append\">
                                        <span class=\"input-group-text\">
                                            {{primary_currency.currency_symbol}}
                                        </span>
                                    </div>
                                {% endif %}
                            </div>
                        </div>
                        <div class=\"form-group col-lg-12 {% if order.return_defray != 1 %}kt-hidden{% endif %} package_fee\">
                            <label>{{'Return package fees responsiable'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            <div class=\"kt-radio-inline\">
                                <label class=\"kt-radio\">
                                    <input type=\"radio\" name=\"return_package_fee\" class=\"return_package_fee\" value=\"1\" {% if order.return_package_fee != 2 %}checked{% endif %} required> {{'Receiver'|__}}
                                    <span></span>
                                </label>
                                <label class=\"kt-radio\">
                                    <input type=\"radio\" name=\"return_package_fee\" class=\"return_package_fee\" value=\"2\" required {% if order.return_package_fee == 2 %}checked{% endif %}> {{'Sender'|__}}
                                    <span></span>
                                </label>
                            </div>
                        </div>

                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">{{'Close'|__}}</button>
                    <button type=\"button\" class=\"btn btn-info save\">{{'Confirm'|__}}</button>
                    <button type=\"submit\" class=\"btn btn-primary kt-hidden\">{{'Deliver'|__}}</button>
                </div>
            {{ form_close() }}
        </div>
    </div>
</div>
<!--
{% put styles %}
    <style>
        .kt-todo .kt-todo__content {
          width: 100%; }

        .kt-todo .kt-todo__aside {
          padding: 20px;
          width: 275px; }
          @media (min-width: 1025px) {
            .kt-todo .kt-todo__aside {
              margin-right: 25px; } }
          .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item {
            margin-bottom: 0.5rem; }
            .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item .kt-nav__link-title {
              padding-left: 1.9rem;
              font-weight: 600;
              color: #48465b;
              font-size: 1.1rem;
              padding-left: 1.9rem;
              font-weight: 600;
              color: #48465b;
              font-size: 1.1rem; }
            .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item .kt-nav__link {
              padding: 0.6rem 20px;
              border-radius: 4px; }
              .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item .kt-nav__link i {
                color: #8e96b8; }
              .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item .kt-nav__link g [fill] {
                -webkit-transition: fill 0.3s ease;
                transition: fill 0.3s ease;
                fill: #8e96b8; }
              .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item .kt-nav__link:hover g [fill] {
                -webkit-transition: fill 0.3s ease;
                transition: fill 0.3s ease; }
              .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item .kt-nav__link .kt-nav__link-icon {
                text-align: center;
                margin: 0 0.7rem 0 -0.23rem; }
                .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item .kt-nav__link .kt-nav__link-icon.kt-nav__link-icon--size {
                  font-size: 0.9rem;
                  color: #93a2dd; }
                .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item .kt-nav__link .kt-nav__link-icon svg {
                  width: 20px;
                  height: 20px; }
                .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item .kt-nav__link .kt-nav__link-icon g [fill] {
                  fill: #93a2dd; }
              .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item .kt-nav__link .kt-nav__link-text {
                font-weight: 500;
                color: #595d6e; }
            .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item:last-child {
              margin-bottom: 0; }
              .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item:last-child .kt-nav__link .kt-nav__link-icon {
                font-size: 0.9rem; }
            .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item.hover .kt-nav__link, .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item.kt-nav__item--selected .kt-nav__link, .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item.kt-nav__item--active .kt-nav__link {
              background-color: #f7f8fa;
              border-radius: 4px; }
              .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item.hover .kt-nav__link i, .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item.kt-nav__item--selected .kt-nav__link i, .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item.kt-nav__item--active .kt-nav__link i {
                color: #5d78ff; }
              .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item.hover .kt-nav__link g [fill], .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item.kt-nav__item--selected .kt-nav__link g [fill], .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item.kt-nav__item--active .kt-nav__link g [fill] {
                -webkit-transition: fill 0.3s ease;
                transition: fill 0.3s ease;
                fill: #5d78ff; }
              .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item.hover .kt-nav__link:hover g [fill], .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item.kt-nav__item--selected .kt-nav__link:hover g [fill], .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item.kt-nav__item--active .kt-nav__link:hover g [fill] {
                -webkit-transition: fill 0.3s ease;
                transition: fill 0.3s ease; }
              .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item.hover .kt-nav__link .kt-nav__link-text, .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item.kt-nav__item--selected .kt-nav__link .kt-nav__link-text, .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item.kt-nav__item--active .kt-nav__link .kt-nav__link-text {
                color: #5d78ff; }

        .kt-todo .kt-todo__header {
          padding: 13px 25px;
          display: -webkit-box;
          display: -ms-flexbox;
          display: flex;
          -ms-flex-wrap: wrap;
          flex-wrap: wrap;
          -webkit-box-align: center;
          -ms-flex-align: center;
          align-items: center;
          width: 100%; }
          .kt-todo .kt-todo__header .kt-todo__title {
            margin: 0;
            font-size: 1.4rem;
            padding-right: 2rem;
            font-weight: 600;
            color: #595d6e; }
          .kt-todo .kt-todo__header .kt-todo__nav {
            padding: 0;
            -webkit-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            margin-top: 0.2rem; }
            .kt-todo .kt-todo__header .kt-todo__nav .btn {
              margin-right: 1rem; }
            .kt-todo .kt-todo__header .kt-todo__nav .kt-todo__link {
              padding: 0.5rem 1.2rem;
              font-weight: 500;
              color: #74788d;
              border-radius: 4px; }
              .kt-todo .kt-todo__header .kt-todo__nav .kt-todo__link:not(:first-child):not(:last-child) {
                margin: 0 0.2rem; }
              .kt-todo .kt-todo__header .kt-todo__nav .kt-todo__link:hover, .kt-todo .kt-todo__header .kt-todo__nav .kt-todo__link.kt-todo__link--selected, .kt-todo .kt-todo__header .kt-todo__nav .kt-todo__link.kt-todo__link--active {
                background-color: #f7f8fa;
                color: #5d78ff;
                border-radius: 4px; }
          .kt-todo .kt-todo__header .kt-todo__users {
            line-height: 0;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center; }
            .kt-todo .kt-todo__header .kt-todo__users .kt-media {
              position: relative;
              z-index: 0; }
              .kt-todo .kt-todo__header .kt-todo__users .kt-media:not(:first-child):not(:last-child) {
                margin-left: -0.1rem; }
          @media (max-width: 1024px) {
            .kt-todo .kt-todo__header {
              padding: 10px 15px; } }

        .kt-todo .kt-todo__icon {
          border: 0;
          background: none;
          outline: none !important;
          -webkit-box-shadow: none;
          box-shadow: none;
          outline: none !important;
          display: -webkit-box;
          display: -ms-flexbox;
          display: flex;
          -webkit-box-pack: center;
          -ms-flex-pack: center;
          justify-content: center;
          -webkit-box-align: center;
          -ms-flex-align: center;
          align-items: center;
          height: 35px;
          width: 35px;
          background-color: #f7f8fa;
          -webkit-transition: all 0.3s ease;
          transition: all 0.3s ease;
          cursor: pointer;
          margin: 0;
          border-radius: 0;
          border-radius: 4px; }
          .kt-todo .kt-todo__icon i {
            font-size: 1.1rem; }
          .kt-todo .kt-todo__icon.kt-todo__icon--sm {
            height: 26px;
            width: 26px; }
            .kt-todo .kt-todo__icon.kt-todo__icon--sm i {
              font-size: 0.8rem; }
          .kt-todo .kt-todo__icon.kt-todo__icon--md {
            height: 30px;
            width: 30px; }
            .kt-todo .kt-todo__icon.kt-todo__icon--md i {
              font-size: 1rem; }
          .kt-todo .kt-todo__icon.kt-todo__icon--light {
            background-color: transparent; }
          .kt-todo .kt-todo__icon i {
            color: #8e96b8; }
          .kt-todo .kt-todo__icon g [fill] {
            -webkit-transition: fill 0.3s ease;
            transition: fill 0.3s ease;
            fill: #8e96b8; }
          .kt-todo .kt-todo__icon:hover g [fill] {
            -webkit-transition: fill 0.3s ease;
            transition: fill 0.3s ease; }
          .kt-todo .kt-todo__icon.kt-todo__icon--active, .kt-todo .kt-todo__icon:hover {
            -webkit-transition: all 0.3s ease;
            transition: all 0.3s ease;
            background-color: #ebedf2; }
            .kt-todo .kt-todo__icon.kt-todo__icon--active.kt-todo__icon--light, .kt-todo .kt-todo__icon:hover.kt-todo__icon--light {
              background-color: transparent; }
            .kt-todo .kt-todo__icon.kt-todo__icon--active i, .kt-todo .kt-todo__icon:hover i {
              color: #5d78ff; }
            .kt-todo .kt-todo__icon.kt-todo__icon--active g [fill], .kt-todo .kt-todo__icon:hover g [fill] {
              -webkit-transition: fill 0.3s ease;
              transition: fill 0.3s ease;
              fill: #5d78ff; }
            .kt-todo .kt-todo__icon.kt-todo__icon--active:hover g [fill], .kt-todo .kt-todo__icon:hover:hover g [fill] {
              -webkit-transition: fill 0.3s ease;
              transition: fill 0.3s ease; }
          .kt-todo .kt-todo__icon.kt-todo__icon--back {
            background-color: transparent; }
            .kt-todo .kt-todo__icon.kt-todo__icon--back i {
              color: #8e96b8;
              font-size: 1.5rem; }
            .kt-todo .kt-todo__icon.kt-todo__icon--back g [fill] {
              -webkit-transition: fill 0.3s ease;
              transition: fill 0.3s ease;
              fill: #8e96b8; }
            .kt-todo .kt-todo__icon.kt-todo__icon--back:hover g [fill] {
              -webkit-transition: fill 0.3s ease;
              transition: fill 0.3s ease; }
            .kt-todo .kt-todo__icon.kt-todo__icon--back svg {
              height: 32px;
              width: 32px; }
            .kt-todo .kt-todo__icon.kt-todo__icon--back:hover {
              background-color: transparent; }
              .kt-todo .kt-todo__icon.kt-todo__icon--back:hover i {
                color: #5d78ff; }
              .kt-todo .kt-todo__icon.kt-todo__icon--back:hover g [fill] {
                -webkit-transition: fill 0.3s ease;
                transition: fill 0.3s ease;
                fill: #5d78ff; }
              .kt-todo .kt-todo__icon.kt-todo__icon--back:hover:hover g [fill] {
                -webkit-transition: fill 0.3s ease;
                transition: fill 0.3s ease; }

        .kt-todo .kt-todo__list {
          display: -webkit-box !important;
          display: -ms-flexbox !important;
          display: flex !important;
          padding: 0; }
          .kt-todo .kt-todo__list .kt-todo__head .kt-todo__toolbar {
            position: relative;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            padding: 0 25px; }
            .kt-todo .kt-todo__list .kt-todo__head .kt-todo__toolbar .kt-todo__actions {
              display: -webkit-box;
              display: -ms-flexbox;
              display: flex;
              -webkit-box-align: center;
              -ms-flex-align: center;
              align-items: center;
              margin-right: 1rem; }
              .kt-todo .kt-todo__list .kt-todo__head .kt-todo__toolbar .kt-todo__actions .kt-todo__check {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center; }
                .kt-todo .kt-todo__list .kt-todo__head .kt-todo__toolbar .kt-todo__actions .kt-todo__check .kt-checkbox {
                  margin: 0;
                  padding-left: 0; }
                .kt-todo .kt-todo__list .kt-todo__head .kt-todo__toolbar .kt-todo__actions .kt-todo__check .kt-todo__icon {
                  margin-left: 0; }
              .kt-todo .kt-todo__list .kt-todo__head .kt-todo__toolbar .kt-todo__actions .kt-todo__panel {
                display: none;
                -ms-flex-wrap: wrap;
                flex-wrap: wrap; }
              .kt-todo .kt-todo__list .kt-todo__head .kt-todo__toolbar .kt-todo__actions .btn {
                padding: 0.6rem 1rem; }
              .kt-todo .kt-todo__list .kt-todo__head .kt-todo__toolbar .kt-todo__actions.kt-todo__actions--expanded .kt-todo__panel {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex; }
              .kt-todo .kt-todo__list .kt-todo__head .kt-todo__toolbar .kt-todo__actions .kt-todo__icon {
                margin-right: 0.5rem; }
                .kt-todo .kt-todo__list .kt-todo__head .kt-todo__toolbar .kt-todo__actions .kt-todo__icon.kt-todo__icon--back {
                  margin-right: 2.5rem; }
            .kt-todo .kt-todo__list .kt-todo__head .kt-todo__toolbar .kt-todo__controls {
              display: -webkit-box;
              display: -ms-flexbox;
              display: flex;
              -webkit-box-align: center;
              -ms-flex-align: center;
              align-items: center;
              margin: 0.4rem 0; }
              .kt-todo .kt-todo__list .kt-todo__head .kt-todo__toolbar .kt-todo__controls .kt-todo__icon {
                margin-left: 0.5rem; }
              .kt-todo .kt-todo__list .kt-todo__head .kt-todo__toolbar .kt-todo__controls .kt-todo__sort {
                margin-left: 0.5rem; }
              .kt-todo .kt-todo__list .kt-todo__head .kt-todo__toolbar .kt-todo__controls .kt-todo__pages .kt-todo__perpage {
                color: #74788d;
                font-size: 1rem;
                font-weight: 500;
                margin-right: 1rem;
                cursor: pointer;
                -webkit-transition: all 0.3s ease;
                transition: all 0.3s ease;
                padding: 0.5rem 0; }
                .kt-todo .kt-todo__list .kt-todo__head .kt-todo__toolbar .kt-todo__controls .kt-todo__pages .kt-todo__perpage:hover {
                  -webkit-transition: all 0.3s ease;
                  transition: all 0.3s ease;
                  color: #5d78ff; }
            .kt-todo .kt-todo__list .kt-todo__head .kt-todo__toolbar .kt-todo__sep {
              display: -webkit-box;
              display: -ms-flexbox;
              display: flex;
              height: 1rem;
              width: 1rem; }
          .kt-todo .kt-todo__list .kt-todo__body {
            padding: 20px 0 0 0; }
            .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items {
              padding: 0;
              margin-bottom: 15px; }
              .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-align: start;
                -ms-flex-align: start;
                align-items: flex-start;
                padding: 12px 25px;
                -webkit-transition: all 0.3s ease;
                transition: all 0.3s ease;
                cursor: pointer; }
                .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item .kt-todo__info {
                  display: -webkit-box;
                  display: -ms-flexbox;
                  display: flex; }
                  @media screen\\0 {
                    .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item .kt-todo__info {
                      padding: 8px 0; } }
                  @media screen\\0 {
                    .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item .kt-todo__info {
                      min-width: 210px; } }
                  .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item .kt-todo__info .kt-todo__actions {
                    display: -webkit-box;
                    display: -ms-flexbox;
                    display: flex;
                    margin: 0.3rem 10px 0 0;
                    -webkit-box-align: center;
                    -ms-flex-align: center;
                    align-items: center; }
                    @media screen\\0 {
                      .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item .kt-todo__info .kt-todo__actions {
                        min-width: 70px; } }
                    .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item .kt-todo__info .kt-todo__actions .kt-checkbox {
                      margin: 0;
                      padding: 0;
                      margin-right: 10px; }
                    .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item .kt-todo__info .kt-todo__actions .kt-todo__icon {
                      height: 22px;
                      width: 22px; }
                      .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item .kt-todo__info .kt-todo__actions .kt-todo__icon i {
                        font-size: 1rem;
                        color: #ebedf2; }
                      .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item .kt-todo__info .kt-todo__actions .kt-todo__icon:hover i {
                        color: rgba(255, 184, 34, 0.5) !important; }
                      .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item .kt-todo__info .kt-todo__actions .kt-todo__icon.kt-todo__icon--on i {
                        color: #ffb822 !important; }
                  .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item .kt-todo__info .kt-todo__sender {
                    display: -webkit-box;
                    display: -ms-flexbox;
                    display: flex;
                    -webkit-box-align: center;
                    -ms-flex-align: center;
                    align-items: center;
                    margin-right: 30px;
                    width: 175px; }
                    @media screen\\0 {
                      .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item .kt-todo__info .kt-todo__sender {
                        min-width: 175px; } }
                    .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item .kt-todo__info .kt-todo__sender .kt-media {
                      margin-right: 10px;
                      min-width: 30px !important; }
                      .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item .kt-todo__info .kt-todo__sender .kt-media span {
                        min-width: 30px !important; }
                    .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item .kt-todo__info .kt-todo__sender .kt-todo__author {
                      font-size: 1rem;
                      color: #595d6e;
                      font-weight: 500; }
                    @media (max-width: 1400px) {
                      .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item .kt-todo__info .kt-todo__sender {
                        display: block;
                        width: 70px;
                        margin-right: 10px; }
                        .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item .kt-todo__info .kt-todo__sender .kt-todo__author {
                          display: block; }
                        .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item .kt-todo__info .kt-todo__sender .kt-media {
                          margin-bottom: 5px; } }
                .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item .kt-todo__details {
                  -webkit-box-flex: 1;
                  -ms-flex-positive: 1;
                  flex-grow: 1;
                  margin-top: 5px; }
                  @media screen\\0 {
                    .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item .kt-todo__details {
                      width: 0;
                      height: 0; } }
                  .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item .kt-todo__details .kt-todo__message .kt-todo__subject {
                    font-size: 1rem;
                    color: #595d6e;
                    font-weight: 500; }
                  .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item .kt-todo__details .kt-todo__message .kt-todo__summary {
                    font-size: 1rem;
                    color: #a2a5b9;
                    font-weight: 400;
                    text-overflow: ellipsis; }
                  .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item .kt-todo__details .kt-todo__labels {
                    display: -webkit-box;
                    display: -ms-flexbox;
                    display: flex;
                    margin-top: 5px; }
                    .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item .kt-todo__details .kt-todo__labels .kt-todo__label {
                      margin-right: 5px; }
                .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item .kt-todo__datetime {
                  font-size: 1rem;
                  color: #a2a5b9;
                  font-weight: 400;
                  margin-right: 1rem;
                  margin-top: 5px;
                  width: 85px;
                  text-align: right; }
                  @media (max-width: 1400px) {
                    .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item .kt-todo__datetime {
                      width: 70px; } }
                .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item:hover, .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item.kt-todo__item--selected {
                  -webkit-transition: all 0.3s ease;
                  transition: all 0.3s ease;
                  background-color: #f7f8fa; }
                  .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item:hover .kt-todo__info .kt-todo__actions .kt-todo__icon i, .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item.kt-todo__item--selected .kt-todo__info .kt-todo__actions .kt-todo__icon i {
                    font-size: 1rem;
                    color: #e2e5ec; }
                .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item.kt-todo__item--unread .kt-todo__sender .kt-todo__author {
                  color: #48465b;
                  font-weight: 600; }
                .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item.kt-todo__item--unread .kt-todo__details .kt-todo__message .kt-todo__subject {
                  color: #595d6e;
                  font-weight: 600; }
                .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item.kt-todo__item--unread .kt-todo__datetime {
                  color: #48465b;
                  font-weight: 600; }
          .kt-todo .kt-todo__list .kt-todo__foot {
            margin-top: 10px;
            padding: 0 25px; }
            .kt-todo .kt-todo__list .kt-todo__foot .kt-todo__toolbar {
              float: right; }
              .kt-todo .kt-todo__list .kt-todo__foot .kt-todo__toolbar .kt-todo__controls {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                margin-left: 1rem; }
                .kt-todo .kt-todo__list .kt-todo__foot .kt-todo__toolbar .kt-todo__controls .kt-todo__icon {
                  margin-left: 0.5rem; }
                .kt-todo .kt-todo__list .kt-todo__foot .kt-todo__toolbar .kt-todo__controls .kt-todo__sort {
                  margin-left: 0.5rem; }
                .kt-todo .kt-todo__list .kt-todo__foot .kt-todo__toolbar .kt-todo__controls .kt-todo__pages {
                  margin-left: 0.5rem; }
                  .kt-todo .kt-todo__list .kt-todo__foot .kt-todo__toolbar .kt-todo__controls .kt-todo__pages .kt-todo__perpage {
                    color: #74788d;
                    font-size: 1rem;
                    font-weight: 500;
                    margin-right: 1rem;
                    cursor: pointer;
                    -webkit-transition: all 0.3s ease;
                    transition: all 0.3s ease;
                    padding: 0.5rem 0; }
                    .kt-todo .kt-todo__list .kt-todo__foot .kt-todo__toolbar .kt-todo__controls .kt-todo__pages .kt-todo__perpage:hover {
                      -webkit-transition: all 0.3s ease;
                      transition: all 0.3s ease;
                      color: #5d78ff; }

        .kt-todo .kt-todo__view {
          padding: 0;
          display: -webkit-box !important;
          display: -ms-flexbox !important;
          display: flex !important; }
          .kt-todo  {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            height: 100%;
            padding-bottom: 25px; }
            @media (max-width: 1024px) {
              .kt-todo  {
                padding-bottom: 15px; } }
            .kt-todo  .kt-todo__head {
              width: 100%; }
              .kt-todo  .kt-todo__head .kt-todo__toolbar {
                cursor: pointer;
                padding-top: 0.9rem;
                width: 100%;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -ms-flex-wrap: wrap;
                flex-wrap: wrap; }
                .kt-todo  .kt-todo__head .kt-todo__toolbar .kt-todo__icon.kt-todo__icon--back {
                  display: none; }
                .kt-todo  .kt-todo__head .kt-todo__toolbar .kt-todo__info {
                  display: -webkit-box;
                  display: -ms-flexbox;
                  display: flex;
                  -webkit-box-align: center;
                  -ms-flex-align: center;
                  align-items: center;
                  -webkit-box-flex: 1;
                  -ms-flex-positive: 1;
                  flex-grow: 1; }
                  .kt-todo  .kt-todo__head .kt-todo__toolbar .kt-todo__info .kt-media {
                    margin-right: 0.7rem; }
                  .kt-todo  .kt-todo__head .kt-todo__toolbar .kt-todo__info .kt-todo__name {
                    color: #48465b;
                    font-weight: 600;
                    font-size: 1.1rem;
                    padding-right: 0.5rem; }
                    .kt-todo  .kt-todo__head .kt-todo__toolbar .kt-todo__info .kt-todo__name:hover {
                      color: #5d78ff;
                      -webkit-transition: all 0.3s ease;
                      transition: all 0.3s ease; }
                .kt-todo  .kt-todo__head .kt-todo__toolbar .kt-todo__details {
                  display: -webkit-box;
                  display: -ms-flexbox;
                  display: flex;
                  -webkit-box-align: center;
                  -ms-flex-align: center;
                  align-items: center;
                  -ms-flex-wrap: wrap;
                  flex-wrap: wrap;
                  padding: 0.5rem 0; }
                  .kt-todo  .kt-todo__head .kt-todo__toolbar .kt-todo__details .kt-todo__icon {
                    margin: 0.4rem 0.5rem 0.4rem 0;
                    font-size: 0.7rem;
                    color: #5d78ff; }
                  .kt-todo  .kt-todo__head .kt-todo__toolbar .kt-todo__details .kt-todo__desc {
                    color: #74788d;
                    font-weight: 400;
                    font-size: 1rem; }
                  .kt-todo  .kt-todo__head .kt-todo__toolbar .kt-todo__details .btn {
                    padding: 8px 1rem; }
                    .kt-todo  .kt-todo__head .kt-todo__toolbar .kt-todo__details .btn:last-child {
                      margin-left: 0.5rem; }
                .kt-todo  .kt-todo__head .kt-todo__toolbar .kt-todo__actions {
                  display: -webkit-box;
                  display: -ms-flexbox;
                  display: flex;
                  -webkit-box-align: center;
                  -ms-flex-align: center;
                  align-items: center; }
                  .kt-todo  .kt-todo__head .kt-todo__toolbar .kt-todo__actions .kt-todo__datetime {
                    color: #a2a5b9;
                    font-weight: 500;
                    font-size: 1rem;
                    margin-right: 1.5rem; }
            .kt-todo  .kt-todo__body {
              padding-bottom: 25px;
              -webkit-box-flex: 1;
              -ms-flex-positive: 1;
              flex-grow: 1; }
              .kt-todo  .kt-todo__body .kt-todo__title {
                padding-top: 1rem; }
                .kt-todo  .kt-todo__body .kt-todo__title .kt-todo__text {
                  color: #48465b;
                  font-size: 1.5rem;
                  font-weight: 600;
                  margin-top: 1rem;
                  display: block; }
                .kt-todo  .kt-todo__body .kt-todo__title .kt-todo__labels {
                  display: -webkit-box;
                  display: -ms-flexbox;
                  display: flex;
                  -webkit-box-align: center;
                  -ms-flex-align: center;
                  align-items: center;
                  padding: 0.8rem 0 2rem 0; }
                  .kt-todo  .kt-todo__body .kt-todo__title .kt-todo__labels .kt-todo__label {
                    display: -webkit-box;
                    display: -ms-flexbox;
                    display: flex;
                    -webkit-box-align: center;
                    -ms-flex-align: center;
                    align-items: center; }
                    .kt-todo  .kt-todo__body .kt-todo__title .kt-todo__labels .kt-todo__label .kt-todo__dot {
                      padding-right: 0.5rem;
                      font-size: 1.2rem; }
                    .kt-todo  .kt-todo__body .kt-todo__title .kt-todo__labels .kt-todo__label .kt-todo__text {
                      color: #a2a5b9;
                      font-weight: 500;
                      font-size: 1rem;
                      margin: 0; }
                    .kt-todo  .kt-todo__body .kt-todo__title .kt-todo__labels .kt-todo__label:last-child {
                      padding-left: 1.5rem; }
                .kt-todo  .kt-todo__body .kt-todo__title:hover {
                  color: #5d78ff;
                  -webkit-transition: all 0.3s ease;
                  transition: all 0.3s ease; }
              .kt-todo  .kt-todo__body .kt-todo__desc {
                padding-bottom: 10px;
                display: block;
                color: #a2a5b9;
                font-weight: 500; }
              .kt-todo  .kt-todo__body .kt-todo__files {
                padding-top: 10px; }
                .kt-todo  .kt-todo__body .kt-todo__files .kt-todo__file {
                  display: block;
                  padding-top: 0.7rem; }
                  .kt-todo  .kt-todo__body .kt-todo__files .kt-todo__file i {
                    padding-right: 0.5rem; }
                  .kt-todo  .kt-todo__body .kt-todo__files .kt-todo__file a {
                    color: #74788d;
                    font-weight: 500; }
                    .kt-todo  .kt-todo__body .kt-todo__files .kt-todo__file a:hover {
                      color: #5d78ff;
                      -webkit-transition: all 0.3s ease;
                      transition: all 0.3s ease; }
              .kt-todo  .kt-todo__body .kt-todo__comments {
                padding-bottom: 20px; }
                .kt-todo  .kt-todo__body .kt-todo__comments .kt-todo__comment {
                  padding-top: 3rem; }
                  .kt-todo  .kt-todo__body .kt-todo__comments .kt-todo__comment:last-child {
                    padding-top: 2rem; }
                  .kt-todo  .kt-todo__body .kt-todo__comments .kt-todo__comment .kt-todo__box {
                    display: -webkit-box;
                    display: -ms-flexbox;
                    display: flex;
                    -webkit-box-align: center;
                    -ms-flex-align: center;
                    align-items: center; }
                    .kt-todo  .kt-todo__body .kt-todo__comments .kt-todo__comment .kt-todo__box .kt-media {
                      margin-right: 1rem; }
                    .kt-todo  .kt-todo__body .kt-todo__comments .kt-todo__comment .kt-todo__box .kt-todo__username {
                      -webkit-box-flex: 1;
                      -ms-flex-positive: 1;
                      flex-grow: 1;
                      color: #595d6e;
                      font-weight: 500; }
                      .kt-todo  .kt-todo__body .kt-todo__comments .kt-todo__comment .kt-todo__box .kt-todo__username:hover {
                        color: #5d78ff;
                        -webkit-transition: all 0.3s ease;
                        transition: all 0.3s ease; }
                    .kt-todo  .kt-todo__body .kt-todo__comments .kt-todo__comment .kt-todo__box .kt-todo__date {
                      color: #a2a5b9;
                      font-weight: 500; }
                  .kt-todo  .kt-todo__body .kt-todo__comments .kt-todo__comment .kt-todo__text {
                    padding-left: 3.3rem;
                    display: block;
                    color: #a2a5b9;
                    font-weight: 500; }
            .kt-todo  .kt-todo__foot .kt-todo__form {
              margin-top: 20px;
              display: -webkit-box;
              display: -ms-flexbox;
              display: flex;
              -webkit-box-orient: vertical;
              -webkit-box-direction: normal;
              -ms-flex-direction: column;
              flex-direction: column;
              border: 1px solid #ebedf2;
              border-radius: 4px; }
              .kt-todo  .kt-todo__foot .kt-todo__form .kt-todo__head {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                -webkit-box-pack: justify;
                -ms-flex-pack: justify;
                justify-content: space-between;
                padding: 20px 15px 20px 25px;
                border-bottom: 1px solid #ebedf2; }
                .kt-todo  .kt-todo__foot .kt-todo__form .kt-todo__head .kt-todo__title {
                  margin-right: 10px;
                  font-size: 1.2rem;
                  font-weight: 500;
                  color: #595d6e; }
                .kt-todo  .kt-todo__foot .kt-todo__form .kt-todo__head .kt-todo__actions {
                  display: -webkit-box;
                  display: -ms-flexbox;
                  display: flex; }
                  .kt-todo  .kt-todo__foot .kt-todo__form .kt-todo__head .kt-todo__actions .kt-todo__icon {
                    margin-left: 5px; }
              .kt-todo  .kt-todo__foot .kt-todo__form .kt-todo__body {
                padding: 0 0 10px 0; }
                .kt-todo  .kt-todo__foot .kt-todo__form .kt-todo__body .ql-container.ql-snow {
                  border: 0;
                  padding: 0;
                  border-radius: 0; }
                  .kt-todo  .kt-todo__foot .kt-todo__form .kt-todo__body .ql-container.ql-snow .ql-editor {
                    font-weight: 400;
                    font-size: 1rem;
                    color: #74788d;
                    padding: 15px 25px;
                    font-family: Poppins, Helvetica, sans-serif; }
                    .kt-todo  .kt-todo__foot .kt-todo__form .kt-todo__body .ql-container.ql-snow .ql-editor.ql-blank:before {
                      left: 25px;
                      color: #a2a5b9;
                      font-weight: 400;
                      font-style: normal; }
                .kt-todo  .kt-todo__foot .kt-todo__form .kt-todo__body .ql-toolbar.ql-snow {
                  display: -webkit-box;
                  display: -ms-flexbox;
                  display: flex;
                  height: 50px;
                  -webkit-box-align: center;
                  -ms-flex-align: center;
                  align-items: center;
                  border-radius: 0;
                  border: 0;
                  border-top: 0;
                  border-bottom: 1px solid #ebedf2;
                  padding-left: 18px; }
                  .kt-todo  .kt-todo__foot .kt-todo__form .kt-todo__body .ql-toolbar.ql-snow .ql-picker-label, .kt-todo  .kt-todo__foot .kt-todo__form .kt-todo__body .ql-toolbar.ql-snow .ql-picker-label:before {
                    font-weight: 400;
                    font-size: 1rem;
                    color: #74788d;
                    font-family: Poppins, Helvetica, sans-serif; }
                .kt-todo  .kt-todo__foot .kt-todo__form .kt-todo__body .kt-todo__attachments {
                  display: inline-block;
                  padding: 0 25px; }
                  @media (max-width: 1024px) {
                    .kt-todo  .kt-todo__foot .kt-todo__form .kt-todo__body .kt-todo__attachments {
                      width: 100%; } }
              .kt-todo  .kt-todo__foot .kt-todo__form .kt-todo__foot {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                width: 100%;
                padding: 20px 15px 20px 25px; }
                .kt-todo  .kt-todo__foot .kt-todo__form .kt-todo__foot .kt-todo__primary {
                  display: -webkit-box;
                  display: -ms-flexbox;
                  display: flex;
                  -webkit-box-flex: 1;
                  -ms-flex-positive: 1;
                  flex-grow: 1;
                  -webkit-box-align: center;
                  -ms-flex-align: center;
                  align-items: center; }
                  .kt-todo  .kt-todo__foot .kt-todo__form .kt-todo__foot .kt-todo__primary .btn-group .btn:nth-child(1) {
                    padding-left: 20px;
                    padding-right: 20px; }
                  .kt-todo  .kt-todo__foot .kt-todo__form .kt-todo__foot .kt-todo__primary .btn-group .btn:nth-child(2) {
                    padding-left: 6px;
                    padding-right: 9px; }
                  .kt-todo  .kt-todo__foot .kt-todo__form .kt-todo__foot .kt-todo__primary .kt-todo__panel {
                    display: -webkit-box;
                    display: -ms-flexbox;
                    display: flex;
                    -webkit-box-align: center;
                    -ms-flex-align: center;
                    align-items: center;
                    margin-left: 1rem; }
                .kt-todo  .kt-todo__foot .kt-todo__form .kt-todo__foot .kt-todo__secondary {
                  display: -webkit-box;
                  display: -ms-flexbox;
                  display: flex;
                  -webkit-box-align: center;
                  -ms-flex-align: center;
                  align-items: center;
                  margin: 0; }

        .kt-todo .kt-portlet__head {
          min-height: 80px !important;
          padding: 10px 25px; }

        @media (max-width: 1024px) {
          .kt-todo {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            padding: 0; }
            .kt-todo .kt-todo__aside {
              background: #fff;
              margin: 0; }
              .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item .kt-nav__link-title {
                padding-left: 1.2rem; }
              .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item .kt-nav__link {
                padding: 0.75rem 10px; }
            .kt-todo .kt-todo__list {
              display: -webkit-box;
              display: -ms-flexbox;
              display: flex; }
              .kt-todo .kt-todo__list.kt-todo__list--hidden {
                display: none; }
              .kt-todo .kt-todo__list .kt-portlet__head {
                min-height: 60px !important;
                padding: 10px 15px; }
              .kt-todo .kt-todo__list .kt-todo__head {
                padding: 0; }
                .kt-todo .kt-todo__list .kt-todo__head .kt-todo__toolbar {
                  padding: 10px 15px; }
              .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items {
                overflow: auto;
                margin-bottom: 15px; }
                .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item {
                  min-width: 500px;
                  padding: 10px 15px; }
              .kt-todo .kt-todo__list .kt-todo__foot {
                padding: 0 15px; }
            .kt-todo .kt-todo__view {
              display: none; }
              .kt-todo .kt-todo__view .kt-todo__head .kt-todo__toolbar .kt-todo__icon.kt-todo__icon--back {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex; }
              .kt-todo .kt-todo__view.kt-todo__view--shown {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex; }
            .kt-todo .kt-portlet__head {
              min-height: 60px !important;
              padding: 10px 15px; } }

        @media (max-width: 768px) {
          .kt-todo .kt-todo__head .kt-todo__nav .btn {
            margin-right: 0.2rem; } }

        .kt-todo__aside-close {
          display: none; }

        @media (max-width: 1024px) {
          .kt-todo__aside {
            z-index: 1001;
            position: fixed;
            -webkit-overflow-scrolling: touch;
            top: 0;
            bottom: 0;
            overflow-y: auto;
            -webkit-transform: translate3d(0, 0, 0);
            backface-visibility: hidden;
            -webkit-backface-visibility: hidden;
            width: 300px !important;
            -webkit-transition: left 0.3s ease, right 0.3s ease;
            transition: left 0.3s ease, right 0.3s ease;
            left: -320px; }
            .kt-todo__aside.kt-todo__aside--on {
              -webkit-transition: left 0.3s ease, right 0.3s ease;
              transition: left 0.3s ease, right 0.3s ease;
              left: 0; } }
          @media screen\\0  and (max-width: 1024px) {
            .kt-todo__aside {
              -webkit-transition: none !important;
              transition: none !important; } }

        @media (max-width: 1024px) {
          .kt-todo__aside--right .kt-todo__aside {
            right: -320px;
            left: auto; }
            .kt-todo__aside--right .kt-todo__aside.kt-todo__aside--on {
              -webkit-transition: left 0.3s ease, right 0.3s ease;
              transition: left 0.3s ease, right 0.3s ease;
              right: 0;
              left: auto; }
          .kt-todo__aside-close {
            width: 25px;
            height: 25px;
            top: 1px;
            z-index: 1002;
            -webkit-transition: left 0.3s ease, right 0.3s ease;
            transition: left 0.3s ease, right 0.3s ease;
            position: fixed;
            border: 0;
            -webkit-box-shadow: none;
            box-shadow: none;
            border-radius: 3px;
            cursor: pointer;
            outline: none !important;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            left: -25px; } }
          @media screen\\0  and (max-width: 1024px) {
            .kt-todo__aside-close {
              -webkit-transition: none !important;
              transition: none !important; } }

        @media (max-width: 1024px) {
            .kt-todo__aside-close > i {
              line-height: 0;
              font-size: 1.4rem; }
            .kt-todo__aside-close:hover {
              text-decoration: none; }
            .kt-todo__aside--right .kt-todo__aside-close {
              left: auto;
              right: -25px; }
            .kt-todo__aside--on .kt-todo__aside-close {
              -webkit-transition: left 0.3s ease, right 0.3s ease;
              transition: left 0.3s ease, right 0.3s ease;
              left: 274px; }
            .kt-todo__aside--on.kt-todo__aside--right .kt-todo__aside-close {
              left: auto;
              right: 274px; }
          .kt-todo__aside-overlay {
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            overflow: hidden;
            z-index: 1000;
            background: rgba(0, 0, 0, 0.1);
            -webkit-animation: kt-animate-fade-in .3s linear 1;
            animation: kt-animate-fade-in .3s linear 1; }
          .kt-todo__aside-overlay {
            background: rgba(0, 0, 0, 0.05); }
          .kt-todo__aside-close {
            background-color: #f7f8fa; }
            .kt-todo__aside-close > i {
              color: #74788d; }
            .kt-todo__aside-close:hover {
              background-color: transparent; }
              .kt-todo__aside-close:hover > i {
                color: #5d78ff; } }

        @media (max-width: 350px) {
          .kt-todo__aside {
            width: 90% !important; } }
    </style>
{% endput %}
-->
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
        .pac-container {
            z-index: 9999;
        }
        @media (max-width: 576px) {
            .kt-widget.kt-widget--user-profile-3 .kt-widget__top .kt-widget__content .kt-widget__info .kt-widget__stats .kt-widget__item {
                width: 100%;
                margin: auto 0 !important;
            }
        }
        .notes_scroll,.notes_scroll .btn {
            cursor: pointer;
        }
    </style>
{% endput %}
{% put scripts %}
<script src=\"{{ 'assets/admin/vendors/custom/geocomplete/jquery.geocomplete.js'|theme }}\" type=\"text/javascript\"></script>
<script src=\"https://maps.googleapis.com/maps/api/js?libraries=places&key={{settings.google.map.key}}\"></script>
<script src=\"./admin/vendors/custom/gmaps/gmaps.js\" type=\"text/javascript\"></script>
<script type=\"text/javascript\">
\"use strict\";
var KTDashboard = function () {

    // Order Statistics.
    // Based on Chartjs plugin - http://www.chartjs.org/
    var orderStatistics = function() {
        var container = KTUtil.getByID('kt_chart_order_statistics');

        if (!container) {
            return;
        }

        var MONTHS = ['1 Jan', '2 Jan', '3 Jan', '4 Jan', '5 Jan', '6 Jan', '7 Jan'];

        var color = Chart.helpers.color;
        var barChartData = {
            labels: ['1 Jan', '2 Jan', '3 Jan', '4 Jan', '5 Jan', '6 Jan', '7 Jan'],
            datasets : [
\t\t\t\t{
                    fill: true,
                    //borderWidth: 0,
                    backgroundColor: color(KTApp.getStateColor('brand')).alpha(0.6).rgbString(),
                    borderColor : color(KTApp.getStateColor('brand')).alpha(0).rgbString(),

                    pointHoverRadius: 4,
                    pointHoverBorderWidth: 12,
                    pointBackgroundColor: Chart.helpers.color('#000000').alpha(0).rgbString(),
                    pointBorderColor: Chart.helpers.color('#000000').alpha(0).rgbString(),
                    pointHoverBackgroundColor: KTApp.getStateColor('brand'),
                    pointHoverBorderColor: Chart.helpers.color('#000000').alpha(0.1).rgbString(),

\t\t\t\t\tdata: [20, 30, 20, 40, 30, 60, 30]
\t\t\t\t},
\t\t\t\t{
                    fill: true,
                    //borderWidth: 0,
\t\t\t\t\tbackgroundColor : color(KTApp.getStateColor('brand')).alpha(0.2).rgbString(),
                    borderColor : color(KTApp.getStateColor('brand')).alpha(0).rgbString(),

                    pointHoverRadius: 4,
                    pointHoverBorderWidth: 12,
                    pointBackgroundColor: Chart.helpers.color('#000000').alpha(0).rgbString(),
                    pointBorderColor: Chart.helpers.color('#000000').alpha(0).rgbString(),
                    pointHoverBackgroundColor: KTApp.getStateColor('brand'),
                    pointHoverBorderColor: Chart.helpers.color('#000000').alpha(0.1).rgbString(),

\t\t\t\t\tdata: [15, 40, 15, 30, 40, 30, 50]
\t\t\t\t}
            ]
        };

        var ctx = container.getContext('2d');
        var chart = new Chart(ctx, {
            type: 'line',
            data: barChartData,
            options: {
                responsive: true,
                maintainAspectRatio: false,
                legend: false,
                scales: {
                    xAxes: [{
                        categoryPercentage: 0.35,
                        barPercentage: 0.70,
                        display: true,
                        scaleLabel: {
                            display: false,
                            labelString: 'Month'
                        },
                        gridLines: false,
                        ticks: {
                            display: true,
                            beginAtZero: true,
                            fontColor: KTApp.getBaseColor('shape', 3),
                            fontSize: 13,
                            padding: 10
                        }
                    }],
                    yAxes: [{
                        categoryPercentage: 0.35,
                        barPercentage: 0.70,
                        display: true,
                        scaleLabel: {
                            display: false,
                            labelString: 'Value'
                        },
                        gridLines: {
                            color: KTApp.getBaseColor('shape', 2),
                            drawBorder: false,
                            offsetGridLines: false,
                            drawTicks: false,
                            borderDash: [3, 4],
                            zeroLineWidth: 1,
                            zeroLineColor: KTApp.getBaseColor('shape', 2),
                            zeroLineBorderDash: [3, 4]
                        },
                        ticks: {
                            max: 70,
                            stepSize: 10,
                            display: true,
                            beginAtZero: true,
                            fontColor: KTApp.getBaseColor('shape', 3),
                            fontSize: 13,
                            padding: 10
                        }
                    }]
                },
                title: {
                    display: false
                },
                hover: {
                    mode: 'index'
                },
                tooltips: {
                    enabled: true,
                    intersect: false,
                    mode: 'nearest',
                    bodySpacing: 5,
                    yPadding: 10,
                    xPadding: 10,
                    caretPadding: 0,
                    displayColors: false,
                    backgroundColor: KTApp.getStateColor('brand'),
                    titleFontColor: '#ffffff',
                    cornerRadius: 4,
                    footerSpacing: 0,
                    titleSpacing: 0
                },
                layout: {
                    padding: {
                        left: 0,
                        right: 0,
                        top: 5,
                        bottom: 5
                    }
                }
            }
        });
    };
    var latestTrendsMap = function() {
        if (\$('#kt_map_sender').length == 0) {
            return;
        }

        try {
            var map = new GMaps({
                div: '#kt_map_sender',
                lat: {{order.sender_address.lat}},
                lng: {{order.sender_address.lng}}
            });
            map.addMarker({
                lat: {{order.sender_address.lat}},
                lng: {{order.sender_address.lng}},
                title: '{{order.sender_address.name}}',
                infoWindow: {
                    content: '<p>{{\"Go to\"|__}} <a href=\"{{order.sender_address.url}}\" target=\"_blank\">{{order.sender_address.name}}</a></p>'
                }
            });
        } catch (e) {
            console.log(e);
        }
        if (\$('#kt_map_receiver').length == 0) {
            return;
        }
        {% if order.receiver_address %}
            try {
                var map = new GMaps({
                    div: '#kt_map_receiver',
                    lat: {{order.receiver_address.lat}},
                    lng: {{order.receiver_address.lng}}
                });
                map.addMarker({
                    lat: {{order.receiver_address.lat}},
                    lng: {{order.receiver_address.lng}},
                    title: '{{order.receiver_address.name}}',
                    infoWindow: {
                        content: '<p>{{\"Go to\"|__}} <a href=\"{{order.receiver_address.url}}\" target=\"_blank\">{{order.receiver_address.name}}</a></p>'
                    }
                });
            } catch (e) {
                console.log(e);
            }
        {% endif %}
    }
    return {
        // public functions
        init: function () {
            orderStatistics();
            latestTrendsMap();
        },
    };
}();

KTUtil.ready(function () {
    KTDashboard.init();

    \$('.notes_scroll').on('click', function(e){
        \$([document.documentElement, document.body]).animate({
            scrollTop: \$(\"#notes_continer\").offset().top-60
        }, 2000);
    });
    \$('#assign_employee').on('click', '.btn-primary', function(e){
        var parent = \$('#assign_employee');
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
            \$('#assign_employee').modal('toggle');
            KTApp.blockPage({
                overlayColor: '#000000',
                type: 'v2',
                state: 'success',
                message: '{{\"Please wait\"|__}}...'
            });
        }
    });
    \$('#assign_manifest').on('click', '.btn-primary', function(e){
        var parent = \$('#assign_manifest');
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
            \$('#assign_manifest').modal('toggle');
            KTApp.blockPage({
                overlayColor: '#000000',
                type: 'v2',
                state: 'success',
                message: '{{\"Please wait\"|__}}...'
            });
        }
    });
    \$('#transfer_office').on('click', '.btn-primary', function(e){
        var parent = \$('#assign_employee');
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
            \$('#transfer_office').modal('toggle');
            KTApp.blockPage({
                overlayColor: '#000000',
                type: 'v2',
                state: 'success',
                message: '{{\"Please wait\"|__}}...'
            });
        }
    });
    \$('#refuse').on('click', '.btn-primary', function(e){
        var parent = \$('#refuse');
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
            \$('#refuse').modal('toggle');
            KTApp.blockPage({
                overlayColor: '#000000',
                type: 'v2',
                state: 'success',
                message: '{{\"Please wait\"|__}}...'
            });
        }
    });
    \$('#discards').on('click', '.btn-primary', function(e){
        var parent = \$('#discards');
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
            \$('#discards').modal('toggle');
            KTApp.blockPage({
                overlayColor: '#000000',
                type: 'v2',
                state: 'success',
                message: '{{\"Please wait\"|__}}...'
            });
        }
    });
    \$('#return_discards').on('click', function(e){
        e.preventDefault();
        KTApp.blockPage({
            overlayColor: '#000000',
            type: 'v2',
            state: 'success',
            message: '{{\"Please wait\"|__}}...'
        });
        \$.request('onDiscards', {
            success: function(data) {
                KTApp.unblockPage();
                window.location.href = \"{{url('dashboard/shipments')}}/delivered\";
            }
        });
    });
    \$('#delivered_driver').on('click', function(e){
        e.preventDefault();
        KTApp.blockPage({
            overlayColor: '#000000',
            type: 'v2',
            state: 'success',
            message: '{{\"Please wait\"|__}}...'
        });
        \$.request('onDeliver', {
            success: function(data) {
                KTApp.unblockPage();
                window.location.href = \"{{url('dashboard/shipments')}}/{{this.param.id}}/view\";
            }
        });
    });
    \$('#deliveried').on('click', function(e){
        e.preventDefault();
        KTApp.blockPage({
            overlayColor: '#000000',
            type: 'v2',
            state: 'success',
            message: '{{\"Please wait\"|__}}...'
        });
        \$.request('onDelivery', {
            success: function(data) {
                KTApp.unblockPage();
                window.location.href = \"{{url('dashboard/shipments')}}/{{this.param.id}}/view\";
            }
        });
    });
    \$('#stock').on('click', function(e){
        e.preventDefault();
        KTApp.blockPage({
            overlayColor: '#000000',
            type: 'v2',
            state: 'success',
            message: '{{\"Please wait\"|__}}...'
        });
        \$.request('onStock', {
            success: function(data) {
                KTApp.unblockPage();
                window.location.href = \"{{url('dashboard/shipments')}}/stock\";
            }
        });
    });
    \$('#received').on('click', '.btn-primary', function(e){
        var parent = \$('#received');
        var validation = 1;
        \$.validator.setDefaults({
            ignore: \":hidden\",
       });
        parent.find('input,select').each(function(){
            if(\$(this).is(':hidden')){
                return;
            }
            if(\$(this).valid() == false){
                validation = 0;
            }
        });
        if(validation){
            \$('#received').modal('toggle');
            KTApp.blockPage({
                overlayColor: '#000000',
                type: 'v2',
                state: 'success',
                message: '{{\"Please wait\"|__}}...'
            });
        }
    });


    \$('#received').find('input,select').each(function(){
        \$(this).on('change', function(){
            \$('#received .btn-info').removeClass('kt-hidden');
            \$('#received .btn-primary').addClass('kt-hidden');
        });
    });

    \$('#received .btn-info').removeClass('kt-hidden');
    \$('#received .btn-primary').addClass('kt-hidden');


    \$('#received').on('click', '.save', function(e){
        var parent = \$('#received');
        var validation = 1;
        \$.validator.setDefaults({
            ignore: \":hidden\",
       });
        parent.find('input,select').each(function(){
            if(\$(this).is(':hidden')){
                return;
            }
            if(\$(this).valid() == false){
                validation = 0;
            }
        });
        if(validation){

            var receiver_address_id = \$('#received #receiver_address_id').val();
            var package_fee = \$('#received #package_fee').val();
            var return_courier_fee = \$('#received #return_courier_fee').val();
            var return_defray = \$('#received .return_defray:checked').val();
            var return_package_fee = \$('#received .return_package_fee:checked').val();

             \$.request('onConfirmfees', {
                  data: {return_courier_fee: return_courier_fee, package_fee: package_fee, receiver_address_id: receiver_address_id, return_defray: return_defray, return_package_fee: return_package_fee},
                  success: function(response, status, xhr, \$form) {

                      swal.fire({
                          buttonsStyling: false,

                          html: \"<strong>{{'The total cost of courier fees is'|__}}:</strong> \"+response.delivery_cost+\"<br /><strong>{{'The total requested from sender is'|__}}:</strong> \"+response.sender_fees+\"<br /><strong>{{'The total requested from receiver is'|__}}:</strong> \"+response.receiver_fees,
                          type: \"warning\",

                          confirmButtonText: \"{{'Yes, confirm!'|__}}\",
                          confirmButtonClass: \"btn btn-sm btn-bold btn-success\",

                          showCancelButton: true,
                          cancelButtonText: '{{\"No, change something\"|__}}',
                          cancelButtonClass: \"btn btn-sm btn-bold btn-danger\"
                      }).then(function (result) {
                          if (result.value) {
                              \$('#received .btn-info').addClass('kt-hidden');
                              \$('#received .btn-primary').removeClass('kt-hidden');
                          }
                      });
                  }
             });
        }
    });
    \$('#postpone').on('click', '.btn-primary', function(e){
        var parent = \$('#postpone');
        var validation = 1;
        parent.find('input,select').each(function(){
            if(\$(this).is(':hidden')){
                return;
            }
            var css_class = \$(this).attr('class');
            css_class = css_class.replace('form-control ','');
            if(css_class != 'date'){
                if(\$(this).valid() == false){
                    validation = 0;
                }
            }
        });
        if(validation){
            \$('#postpone').modal('toggle');
            KTApp.blockPage({
                overlayColor: '#000000',
                type: 'v2',
                state: 'success',
                message: '{{\"Please wait\"|__}}...'
            });
        }
    });
    \$('#accept').on('click', function(e){
        e.preventDefault();
        KTApp.blockPage({
            overlayColor: '#000000',
            type: 'v2',
            state: 'success',
            message: '{{\"Please wait\"|__}}...'
        });

        \$.request('onAccept', {
            success: function(data) {
                KTApp.unblockPage();
                window.location.href = \"{{url('dashboard/shipments')}}/{{this.param.id}}/view\";
            }
        });
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


    \$('body').on('change', '#discard_reason', function(e, clickedIndex, newValue, oldValue){
        var selected = \$(e.currentTarget).val();
        \$('.discard_reason_receiver').addClass('kt-hidden');
        if(selected != '' && selected != 2){
            \$('.discard_reason_receiver').removeClass('kt-hidden');
        }
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



                     var selected = response.default;
                     var type = \$('.type:checked').val();
                     var sender_address_id = \$('#sender_address_id').val();
                     var packaging_id = \$('#packaging_id').val();
                     var return_defray = \$('.return_defray:checked').val();
                     var return_package_fee = \$('.return_package_fee:checked').val();
                     if(selected != '' && selected != 'new'){
                         \$.request('onChangefees', {
                              data: {sender_address_id: sender_address_id, packaging_id: packaging_id, type: type, receiver_address_id: selected, return_defray: return_defray, return_package_fee: return_package_fee},
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
                      if(selected != '' && selected != 'new'){
                          \$.request('onChangefees', {
                               data: {sender_address_id: sender_address_id, packaging_id: packaging_id, type: type, receiver_address_id: selected, return_defray: return_defray, return_package_fee: return_package_fee},
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
                       if(selected != '' && selected != 'new'){
                           \$.request('onChangefees', {
                                data: {sender_address_id: sender_address_id, packaging_id: packaging_id, type: type, receiver_address_id: selected, return_defray: return_defray, return_package_fee: return_package_fee},
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

    \$('body').on('change', '#receiver_address_id', function(e, clickedIndex, newValue, oldValue){
        var selected = \$(e.currentTarget).val();
         var type = \$('.type:checked').val();
         var sender_address_id = \$('#sender_address_id').val();
         var packaging_id = \$('#packaging_id').val();
         var return_defray = \$('.return_defray:checked').val();
         var return_package_fee = \$('.return_package_fee:checked').val();
         if(selected != '' && selected != 'new'){
             \$.request('onChangefees', {
                  data: {sender_address_id: sender_address_id, type: type, packaging_id:packaging_id, receiver_address_id: selected, return_defray: return_defray, return_package_fee: return_package_fee},
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
             \$.request('onChangefees', {
                  data: {sender_address_id: sender_address_id, type: type, packaging_id:packaging_id, receiver_address_id: receiver_address_id, return_defray: return_defray, return_package_fee: return_package_fee},
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

    \$('#delete').on('click', function(e){
        e.preventDefault();

        swal.fire({
            buttonsStyling: false,

            text: \"{{'Are you sure to delete'|__}}\",
            type: \"error\",

            confirmButtonText: \"{{'Yes, delete!'|__}}\",
            confirmButtonClass: \"btn btn-sm btn-bold btn-danger\",

            showCancelButton: true,
            cancelButtonText: '{{\"No, cancel\"|__}}',
            cancelButtonClass: \"btn btn-sm btn-bold btn-brand\"
        }).then(function (result) {
            if (result.value) {
                KTApp.blockPage({
                    overlayColor: '#000000',
                    type: 'v2',
                    state: 'success',
                    message: '{{\"Please wait\"|__}}...'
                });
                \$.request('onDelete', {
                    success: function(data) {
                        KTApp.unblockPage();
                        swal.fire({
                            title: '{{\"Deleted!\"|__}}',
                            text: '{{\"Your selected records have been deleted! :(\"|__}}',
                            type: 'success',
                            buttonsStyling: false,
                            confirmButtonText: '{{\"OK\"|__}}',
                            confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                        });
                        window.location.href = \"{{url('dashboard/shipments')}}\";
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
    });
    if(\$('.kt-widget__action ul.kt-nav li').length == 0){
        \$('.kt-widget__action').hide();
    }
});
</script>
{% endput %}", "/Applications/MAMP/htdocs/MainFiles--/themes/spotlayer/pages/dashboard/shipment.htm", "");
    }
}
