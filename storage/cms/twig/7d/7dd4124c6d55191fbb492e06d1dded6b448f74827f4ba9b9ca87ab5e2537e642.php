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

/* /Applications/MAMP/htdocs/test/themes/spotlayer/partials/profilemenu.htm */
class __TwigTemplate_5301fc7dc1a218e6436b67742f7a66de1067b0caa1ec0c413fc27a2b6fe73f61 extends \Twig\Template
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
        echo "<!--Begin:: App Aside Mobile Toggle-->
<button class=\"kt-app__aside-close\" id=\"kt_user_profile_aside_close\">
    <i class=\"la la-close\"></i>
</button>
<!--End:: App Aside Mobile Toggle-->

<!--Begin:: App Aside-->
<div class=\"kt-grid__item kt-app__toggle kt-app__aside\" id=\"kt_user_profile_aside\">
    <!--begin:: Widgets/Applications/User/Profile1-->
    <div class=\"kt-portlet kt-portlet--height-fluid-\">
        <div class=\"kt-portlet__head  kt-portlet__head--noborder\">
            <div class=\"kt-portlet__head-label\">
                <h3 class=\"kt-portlet__head-title\">
                </h3>
            </div>
        </div>
        <div class=\"kt-portlet__body kt-portlet__body--fit-y\">
            <!--begin::Widget -->
            <div class=\"kt-widget kt-widget--user-profile-1\">
                <div class=\"kt-widget__head\">
                    <div class=\"kt-widget__media\">
                        ";
        // line 22
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "avatar", [], "any", false, false, false, 22)) {
            // line 23
            echo "                             <img alt=\"Pic\" src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "avatar", [], "any", false, false, false, 23), "thumb", [0 => 100, 1 => 100, 2 => "crop"], "method", false, false, false, 23), "html", null, true);
            echo "\" />
                        ";
        } else {
            // line 25
            echo "                            <span class=\"kt-badge kt-badge--username kt-badge--unified-success kt-badge--xl kt-badge--rounded kt-badge--bold\">";
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, false, 25)), 0, 2), "html", null, true);
            echo "</span>
                         ";
        }
        // line 27
        echo "                    </div>
                    <div class=\"kt-widget__content\">
                        <div class=\"kt-widget__section\">
                            <a href=\"javascript:;\" class=\"kt-widget__username\">
                                ";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, false, 31), "html", null, true);
        echo "
                                ";
        // line 32
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "userverify_dateverified", [], "any", false, false, false, 32)) {
            // line 33
            echo "                                    <i class=\"flaticon2-correct kt-font-success\"></i>
                                ";
        }
        // line 35
        echo "                            </a>
                            <span class=\"kt-widget__subtitle\">
                                ";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role", [], "any", false, false, false, 37), "name", [], "any", false, false, false, 37), "html", null, true);
        echo "
                            </span>
                        </div>
                    </div>
                </div>
                <div class=\"kt-widget__body kt-margin-t-20\">
                    <div class=\"kt-widget__content\">
                        ";
        // line 44
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, false, 44)) {
            // line 45
            echo "                            <div class=\"kt-widget__info\">
                                <span class=\"kt-widget__label\">";
            // line 46
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Email"]);
            echo ":</span>
                                <a href=\"javascript:;\" class=\"kt-widget__data\">";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, false, 47), "html", null, true);
            echo "</a>
                            </div>
                        ";
        }
        // line 50
        echo "                        ";
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "phone", [], "any", false, false, false, 50)) {
            // line 51
            echo "                            <div class=\"kt-widget__info\">
                                <span class=\"kt-widget__label\">";
            // line 52
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Phone"]);
            echo ":</span>
                                <a href=\"javascript:;\" class=\"kt-widget__data\">";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "phone", [], "any", false, false, false, 53), "html", null, true);
            echo "</a>
                            </div>
                        ";
        }
        // line 56
        echo "                        ";
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "mobile", [], "any", false, false, false, 56)) {
            // line 57
            echo "                            <div class=\"kt-widget__info\">
                                <span class=\"kt-widget__label\">";
            // line 58
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Mobile"]);
            echo ":</span>
                                <span class=\"kt-widget__data\">";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "mobile", [], "any", false, false, false, 59), "html", null, true);
            echo "</span>
                            </div>
                        ";
        }
        // line 62
        echo "                        ";
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 62) != 1)) {
            // line 63
            echo "                            <div class=\"kt-widget__info\">
                                <span class=\"kt-widget__label\">";
            // line 64
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["ًWallet"]);
            echo ":</span>
                                <span class=\"kt-widget__data\">";
            // line 65
            echo call_user_func_array($this->env->getFilter('currency')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "payments", [], "any", false, false, false, 65), "sum", [0 => "amount"], "method", false, false, false, 65)]);
            echo "</span>
                            </div>
                        ";
        }
        // line 68
        echo "                    </div>
                    <div class=\"kt-widget__items kt-margin-t-20\">

                        <a href=\"";
        // line 71
        echo url("dashboard/account");
        echo "\" class=\"kt-widget__item ";
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 71), "page", [], "any", false, false, false, 71))) {
            echo "kt-widget__item--active";
        }
        echo "\">
                            <span class=\"kt-widget__section\">
                                <span class=\"kt-widget__icon\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\" class=\"kt-svg-icon\">
                                        <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                            <polygon points=\"0 0 24 0 24 24 0 24\"/>
                                            <path d=\"M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z\" fill=\"#000000\" fill-rule=\"nonzero\"/>
                                            <path d=\"M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z\" fill=\"#000000\" opacity=\"0.3\"/>
                                        </g>
                                    </svg>
                                </span>
                                <span  class=\"kt-widget__desc\">
                                    ";
        // line 83
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Profile Overview"]);
        echo "
                                </span>
                            </span>
                        </a>
                        <a  href=\"";
        // line 87
        echo url("dashboard/account/edit");
        echo "\" class=\"kt-widget__item ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 87), "page", [], "any", false, false, false, 87) == "edit")) {
            echo "kt-widget__item--active";
        }
        echo "\">
                            <span class=\"kt-widget__section\">
                                <span class=\"kt-widget__icon\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\" class=\"kt-svg-icon\">
                                        <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                        <polygon points=\"0 0 24 0 24 24 0 24\"/>
                                        <path d=\"M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z\" fill=\"#000000\" fill-rule=\"nonzero\" opacity=\"0.3\"/>
                                        <path d=\"M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z\" fill=\"#000000\" fill-rule=\"nonzero\"/>
                                        </g>
                                    </svg>
                                </span>
                                <span class=\"kt-widget__desc\">
                                    ";
        // line 99
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Personal Information"]);
        echo "
                                </span>
                            </span>
                        </a>
                        ";
        // line 103
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 103) == 5)) {
            // line 104
            echo "                            <a href=\"";
            echo url("dashboard/account/addresses");
            echo "\" class=\"kt-widget__item ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 104), "page", [], "any", false, false, false, 104) == "addresses")) {
                echo "kt-widget__item--active";
            }
            echo "\">
                                <span class=\"kt-widget__section\">
                                    <span class=\"kt-widget__icon\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\" class=\"kt-svg-icon\">
                                            <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                            <rect x=\"0\" y=\"0\" width=\"24\" height=\"24\"/>
                                            <path d=\"M2.56066017,10.6819805 L4.68198052,8.56066017 C5.26776695,7.97487373 6.21751442,7.97487373 6.80330086,8.56066017 L8.9246212,10.6819805 C9.51040764,11.267767 9.51040764,12.2175144 8.9246212,12.8033009 L6.80330086,14.9246212 C6.21751442,15.5104076 5.26776695,15.5104076 4.68198052,14.9246212 L2.56066017,12.8033009 C1.97487373,12.2175144 1.97487373,11.267767 2.56066017,10.6819805 Z M14.5606602,10.6819805 L16.6819805,8.56066017 C17.267767,7.97487373 18.2175144,7.97487373 18.8033009,8.56066017 L20.9246212,10.6819805 C21.5104076,11.267767 21.5104076,12.2175144 20.9246212,12.8033009 L18.8033009,14.9246212 C18.2175144,15.5104076 17.267767,15.5104076 16.6819805,14.9246212 L14.5606602,12.8033009 C13.9748737,12.2175144 13.9748737,11.267767 14.5606602,10.6819805 Z\" fill=\"#000000\" opacity=\"0.3\"/>
                                            <path d=\"M8.56066017,16.6819805 L10.6819805,14.5606602 C11.267767,13.9748737 12.2175144,13.9748737 12.8033009,14.5606602 L14.9246212,16.6819805 C15.5104076,17.267767 15.5104076,18.2175144 14.9246212,18.8033009 L12.8033009,20.9246212 C12.2175144,21.5104076 11.267767,21.5104076 10.6819805,20.9246212 L8.56066017,18.8033009 C7.97487373,18.2175144 7.97487373,17.267767 8.56066017,16.6819805 Z M8.56066017,4.68198052 L10.6819805,2.56066017 C11.267767,1.97487373 12.2175144,1.97487373 12.8033009,2.56066017 L14.9246212,4.68198052 C15.5104076,5.26776695 15.5104076,6.21751442 14.9246212,6.80330086 L12.8033009,8.9246212 C12.2175144,9.51040764 11.267767,9.51040764 10.6819805,8.9246212 L8.56066017,6.80330086 C7.97487373,6.21751442 7.97487373,5.26776695 8.56066017,4.68198052 Z\" fill=\"#000000\"/>
                                            </g>
                                        </svg>
                                    </span>
                                    <span class=\"kt-widget__desc\">
                                        ";
            // line 116
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Addresses"]);
            echo "
                                    </span>
                                </spandiv>
                            </a>
                        ";
        } elseif (twig_in_filter(twig_get_attribute($this->env, $this->source,         // line 120
($context["user"] ?? null), "role_id", [], "any", false, false, false, 120), [0 => 3, 1 => 4, 2 => 6])) {
            // line 121
            echo "                            <a href=\"";
            echo url("dashboard/account/addresses");
            echo "\" class=\"kt-widget__item ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 121), "page", [], "any", false, false, false, 121) == "addresses")) {
                echo "kt-widget__item--active";
            }
            echo "\">
                                <span class=\"kt-widget__section\">
                                    <span class=\"kt-widget__icon\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\" class=\"kt-svg-icon\">
                                            <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                            <rect x=\"0\" y=\"0\" width=\"24\" height=\"24\"/>
                                            <path d=\"M2.56066017,10.6819805 L4.68198052,8.56066017 C5.26776695,7.97487373 6.21751442,7.97487373 6.80330086,8.56066017 L8.9246212,10.6819805 C9.51040764,11.267767 9.51040764,12.2175144 8.9246212,12.8033009 L6.80330086,14.9246212 C6.21751442,15.5104076 5.26776695,15.5104076 4.68198052,14.9246212 L2.56066017,12.8033009 C1.97487373,12.2175144 1.97487373,11.267767 2.56066017,10.6819805 Z M14.5606602,10.6819805 L16.6819805,8.56066017 C17.267767,7.97487373 18.2175144,7.97487373 18.8033009,8.56066017 L20.9246212,10.6819805 C21.5104076,11.267767 21.5104076,12.2175144 20.9246212,12.8033009 L18.8033009,14.9246212 C18.2175144,15.5104076 17.267767,15.5104076 16.6819805,14.9246212 L14.5606602,12.8033009 C13.9748737,12.2175144 13.9748737,11.267767 14.5606602,10.6819805 Z\" fill=\"#000000\" opacity=\"0.3\"/>
                                            <path d=\"M8.56066017,16.6819805 L10.6819805,14.5606602 C11.267767,13.9748737 12.2175144,13.9748737 12.8033009,14.5606602 L14.9246212,16.6819805 C15.5104076,17.267767 15.5104076,18.2175144 14.9246212,18.8033009 L12.8033009,20.9246212 C12.2175144,21.5104076 11.267767,21.5104076 10.6819805,20.9246212 L8.56066017,18.8033009 C7.97487373,18.2175144 7.97487373,17.267767 8.56066017,16.6819805 Z M8.56066017,4.68198052 L10.6819805,2.56066017 C11.267767,1.97487373 12.2175144,1.97487373 12.8033009,2.56066017 L14.9246212,4.68198052 C15.5104076,5.26776695 15.5104076,6.21751442 14.9246212,6.80330086 L12.8033009,8.9246212 C12.2175144,9.51040764 11.267767,9.51040764 10.6819805,8.9246212 L8.56066017,6.80330086 C7.97487373,6.21751442 7.97487373,5.26776695 8.56066017,4.68198052 Z\" fill=\"#000000\"/>
                                            </g>
                                        </svg>
                                    </span>
                                    <span class=\"kt-widget__desc\">
                                        ";
            // line 133
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Covered Areas"]);
            echo "
                                    </span>
                                </spandiv>
                            </a>
                        ";
        }
        // line 138
        echo "                        <a href=\"";
        echo url("dashboard/account/password");
        echo "\" class=\"kt-hidden kt-widget__item ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 138), "page", [], "any", false, false, false, 138) == "password")) {
            echo "kt-widget__item--active";
        }
        echo "\">
                            <span class=\"kt-widget__section\">
                                <span class=\"kt-widget__icon\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\" class=\"kt-svg-icon\">
                                    <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                        <rect x=\"0\" y=\"0\" width=\"24\" height=\"24\"/>
                                        <path d=\"M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z\" fill=\"#000000\" opacity=\"0.3\"/>
                                        <path d=\"M12,11 C10.8954305,11 10,10.1045695 10,9 C10,7.8954305 10.8954305,7 12,7 C13.1045695,7 14,7.8954305 14,9 C14,10.1045695 13.1045695,11 12,11 Z\" fill=\"#000000\" opacity=\"0.3\"/>
                                        <path d=\"M7.00036205,16.4995035 C7.21569918,13.5165724 9.36772908,12 11.9907452,12 C14.6506758,12 16.8360465,13.4332455 16.9988413,16.5 C17.0053266,16.6221713 16.9988413,17 16.5815,17 C14.5228466,17 11.463736,17 7.4041679,17 C7.26484009,17 6.98863236,16.6619875 7.00036205,16.4995035 Z\" fill=\"#000000\" opacity=\"0.3\"/>
                                        </g>
                                    </svg>
                                </span>
                                <span  class=\"kt-widget__desc\">
                                    ";
        // line 151
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Change Password"]);
        echo "
                                </span>
                            </span>
                        </a>
                        <a href=\"";
        // line 155
        echo url("dashboard/account/settings");
        echo "\"  class=\"kt-hidden kt-widget__item ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 155), "page", [], "any", false, false, false, 155) == "settings")) {
            echo "kt-widget__item--active";
        }
        echo "\">
                            <span class=\"kt-widget__section\">
                                <span class=\"kt-widget__icon\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\" class=\"kt-svg-icon\">
                                        <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                        <rect x=\"0\" y=\"0\" width=\"24\" height=\"24\"/>
                                        <path d=\"M6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,12 C19,12.5522847 18.5522847,13 18,13 L6,13 C5.44771525,13 5,12.5522847 5,12 L5,3 C5,2.44771525 5.44771525,2 6,2 Z M7.5,5 C7.22385763,5 7,5.22385763 7,5.5 C7,5.77614237 7.22385763,6 7.5,6 L13.5,6 C13.7761424,6 14,5.77614237 14,5.5 C14,5.22385763 13.7761424,5 13.5,5 L7.5,5 Z M7.5,7 C7.22385763,7 7,7.22385763 7,7.5 C7,7.77614237 7.22385763,8 7.5,8 L10.5,8 C10.7761424,8 11,7.77614237 11,7.5 C11,7.22385763 10.7761424,7 10.5,7 L7.5,7 Z\" fill=\"#000000\" opacity=\"0.3\"/>
                                        <path d=\"M3.79274528,6.57253826 L12,12.5 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 Z\" fill=\"#000000\"/>
                                        </g>
                                    </svg>
                                </span>
                                <span class=\"kt-widget__desc\">
                                    ";
        // line 167
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Settings"]);
        echo "
                                </span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <!--end::Widget -->
        </div>
    </div>
    <!--end:: Widgets/Applications/User/Profile1-->
</div>
<!--End:: App Aside-->";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/test/themes/spotlayer/partials/profilemenu.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  330 => 167,  311 => 155,  304 => 151,  283 => 138,  275 => 133,  255 => 121,  253 => 120,  246 => 116,  226 => 104,  224 => 103,  217 => 99,  198 => 87,  191 => 83,  172 => 71,  167 => 68,  161 => 65,  157 => 64,  154 => 63,  151 => 62,  145 => 59,  141 => 58,  138 => 57,  135 => 56,  129 => 53,  125 => 52,  122 => 51,  119 => 50,  113 => 47,  109 => 46,  106 => 45,  104 => 44,  94 => 37,  90 => 35,  86 => 33,  84 => 32,  80 => 31,  74 => 27,  68 => 25,  62 => 23,  60 => 22,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!--Begin:: App Aside Mobile Toggle-->
<button class=\"kt-app__aside-close\" id=\"kt_user_profile_aside_close\">
    <i class=\"la la-close\"></i>
</button>
<!--End:: App Aside Mobile Toggle-->

<!--Begin:: App Aside-->
<div class=\"kt-grid__item kt-app__toggle kt-app__aside\" id=\"kt_user_profile_aside\">
    <!--begin:: Widgets/Applications/User/Profile1-->
    <div class=\"kt-portlet kt-portlet--height-fluid-\">
        <div class=\"kt-portlet__head  kt-portlet__head--noborder\">
            <div class=\"kt-portlet__head-label\">
                <h3 class=\"kt-portlet__head-title\">
                </h3>
            </div>
        </div>
        <div class=\"kt-portlet__body kt-portlet__body--fit-y\">
            <!--begin::Widget -->
            <div class=\"kt-widget kt-widget--user-profile-1\">
                <div class=\"kt-widget__head\">
                    <div class=\"kt-widget__media\">
                        {% if user.avatar %}
                             <img alt=\"Pic\" src=\"{{user.avatar.thumb(100, 100,'crop')}}\" />
                        {% else %}
                            <span class=\"kt-badge kt-badge--username kt-badge--unified-success kt-badge--xl kt-badge--rounded kt-badge--bold\">{{user.name|capitalize|slice(0,2)}}</span>
                         {% endif %}
                    </div>
                    <div class=\"kt-widget__content\">
                        <div class=\"kt-widget__section\">
                            <a href=\"javascript:;\" class=\"kt-widget__username\">
                                {{user.name}}
                                {% if item.userverify_dateverified %}
                                    <i class=\"flaticon2-correct kt-font-success\"></i>
                                {% endif %}
                            </a>
                            <span class=\"kt-widget__subtitle\">
                                {{user.role.name}}
                            </span>
                        </div>
                    </div>
                </div>
                <div class=\"kt-widget__body kt-margin-t-20\">
                    <div class=\"kt-widget__content\">
                        {% if user.email %}
                            <div class=\"kt-widget__info\">
                                <span class=\"kt-widget__label\">{{'Email'|__}}:</span>
                                <a href=\"javascript:;\" class=\"kt-widget__data\">{{user.email}}</a>
                            </div>
                        {% endif %}
                        {% if user.phone %}
                            <div class=\"kt-widget__info\">
                                <span class=\"kt-widget__label\">{{'Phone'|__}}:</span>
                                <a href=\"javascript:;\" class=\"kt-widget__data\">{{user.phone}}</a>
                            </div>
                        {% endif %}
                        {% if user.mobile %}
                            <div class=\"kt-widget__info\">
                                <span class=\"kt-widget__label\">{{'Mobile'|__}}:</span>
                                <span class=\"kt-widget__data\">{{user.mobile}}</span>
                            </div>
                        {% endif %}
                        {% if user.role_id != 1 %}
                            <div class=\"kt-widget__info\">
                                <span class=\"kt-widget__label\">{{'ًWallet'|__}}:</span>
                                <span class=\"kt-widget__data\">{{user.payments.sum('amount')|currency}}</span>
                            </div>
                        {% endif %}
                    </div>
                    <div class=\"kt-widget__items kt-margin-t-20\">

                        <a href=\"{{url('dashboard/account')}}\" class=\"kt-widget__item {% if this.param.page is empty %}kt-widget__item--active{% endif %}\">
                            <span class=\"kt-widget__section\">
                                <span class=\"kt-widget__icon\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\" class=\"kt-svg-icon\">
                                        <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                            <polygon points=\"0 0 24 0 24 24 0 24\"/>
                                            <path d=\"M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z\" fill=\"#000000\" fill-rule=\"nonzero\"/>
                                            <path d=\"M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z\" fill=\"#000000\" opacity=\"0.3\"/>
                                        </g>
                                    </svg>
                                </span>
                                <span  class=\"kt-widget__desc\">
                                    {{'Profile Overview'|__}}
                                </span>
                            </span>
                        </a>
                        <a  href=\"{{url('dashboard/account/edit')}}\" class=\"kt-widget__item {% if this.param.page == 'edit' %}kt-widget__item--active{% endif %}\">
                            <span class=\"kt-widget__section\">
                                <span class=\"kt-widget__icon\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\" class=\"kt-svg-icon\">
                                        <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                        <polygon points=\"0 0 24 0 24 24 0 24\"/>
                                        <path d=\"M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z\" fill=\"#000000\" fill-rule=\"nonzero\" opacity=\"0.3\"/>
                                        <path d=\"M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z\" fill=\"#000000\" fill-rule=\"nonzero\"/>
                                        </g>
                                    </svg>
                                </span>
                                <span class=\"kt-widget__desc\">
                                    {{'Personal Information'|__}}
                                </span>
                            </span>
                        </a>
                        {% if user.role_id ==  5 %}
                            <a href=\"{{url('dashboard/account/addresses')}}\" class=\"kt-widget__item {% if this.param.page == 'addresses' %}kt-widget__item--active{% endif %}\">
                                <span class=\"kt-widget__section\">
                                    <span class=\"kt-widget__icon\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\" class=\"kt-svg-icon\">
                                            <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                            <rect x=\"0\" y=\"0\" width=\"24\" height=\"24\"/>
                                            <path d=\"M2.56066017,10.6819805 L4.68198052,8.56066017 C5.26776695,7.97487373 6.21751442,7.97487373 6.80330086,8.56066017 L8.9246212,10.6819805 C9.51040764,11.267767 9.51040764,12.2175144 8.9246212,12.8033009 L6.80330086,14.9246212 C6.21751442,15.5104076 5.26776695,15.5104076 4.68198052,14.9246212 L2.56066017,12.8033009 C1.97487373,12.2175144 1.97487373,11.267767 2.56066017,10.6819805 Z M14.5606602,10.6819805 L16.6819805,8.56066017 C17.267767,7.97487373 18.2175144,7.97487373 18.8033009,8.56066017 L20.9246212,10.6819805 C21.5104076,11.267767 21.5104076,12.2175144 20.9246212,12.8033009 L18.8033009,14.9246212 C18.2175144,15.5104076 17.267767,15.5104076 16.6819805,14.9246212 L14.5606602,12.8033009 C13.9748737,12.2175144 13.9748737,11.267767 14.5606602,10.6819805 Z\" fill=\"#000000\" opacity=\"0.3\"/>
                                            <path d=\"M8.56066017,16.6819805 L10.6819805,14.5606602 C11.267767,13.9748737 12.2175144,13.9748737 12.8033009,14.5606602 L14.9246212,16.6819805 C15.5104076,17.267767 15.5104076,18.2175144 14.9246212,18.8033009 L12.8033009,20.9246212 C12.2175144,21.5104076 11.267767,21.5104076 10.6819805,20.9246212 L8.56066017,18.8033009 C7.97487373,18.2175144 7.97487373,17.267767 8.56066017,16.6819805 Z M8.56066017,4.68198052 L10.6819805,2.56066017 C11.267767,1.97487373 12.2175144,1.97487373 12.8033009,2.56066017 L14.9246212,4.68198052 C15.5104076,5.26776695 15.5104076,6.21751442 14.9246212,6.80330086 L12.8033009,8.9246212 C12.2175144,9.51040764 11.267767,9.51040764 10.6819805,8.9246212 L8.56066017,6.80330086 C7.97487373,6.21751442 7.97487373,5.26776695 8.56066017,4.68198052 Z\" fill=\"#000000\"/>
                                            </g>
                                        </svg>
                                    </span>
                                    <span class=\"kt-widget__desc\">
                                        {{'Addresses'|__}}
                                    </span>
                                </spandiv>
                            </a>
                        {% elseif user.role_id in [3,4,6]%}
                            <a href=\"{{url('dashboard/account/addresses')}}\" class=\"kt-widget__item {% if this.param.page == 'addresses' %}kt-widget__item--active{% endif %}\">
                                <span class=\"kt-widget__section\">
                                    <span class=\"kt-widget__icon\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\" class=\"kt-svg-icon\">
                                            <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                            <rect x=\"0\" y=\"0\" width=\"24\" height=\"24\"/>
                                            <path d=\"M2.56066017,10.6819805 L4.68198052,8.56066017 C5.26776695,7.97487373 6.21751442,7.97487373 6.80330086,8.56066017 L8.9246212,10.6819805 C9.51040764,11.267767 9.51040764,12.2175144 8.9246212,12.8033009 L6.80330086,14.9246212 C6.21751442,15.5104076 5.26776695,15.5104076 4.68198052,14.9246212 L2.56066017,12.8033009 C1.97487373,12.2175144 1.97487373,11.267767 2.56066017,10.6819805 Z M14.5606602,10.6819805 L16.6819805,8.56066017 C17.267767,7.97487373 18.2175144,7.97487373 18.8033009,8.56066017 L20.9246212,10.6819805 C21.5104076,11.267767 21.5104076,12.2175144 20.9246212,12.8033009 L18.8033009,14.9246212 C18.2175144,15.5104076 17.267767,15.5104076 16.6819805,14.9246212 L14.5606602,12.8033009 C13.9748737,12.2175144 13.9748737,11.267767 14.5606602,10.6819805 Z\" fill=\"#000000\" opacity=\"0.3\"/>
                                            <path d=\"M8.56066017,16.6819805 L10.6819805,14.5606602 C11.267767,13.9748737 12.2175144,13.9748737 12.8033009,14.5606602 L14.9246212,16.6819805 C15.5104076,17.267767 15.5104076,18.2175144 14.9246212,18.8033009 L12.8033009,20.9246212 C12.2175144,21.5104076 11.267767,21.5104076 10.6819805,20.9246212 L8.56066017,18.8033009 C7.97487373,18.2175144 7.97487373,17.267767 8.56066017,16.6819805 Z M8.56066017,4.68198052 L10.6819805,2.56066017 C11.267767,1.97487373 12.2175144,1.97487373 12.8033009,2.56066017 L14.9246212,4.68198052 C15.5104076,5.26776695 15.5104076,6.21751442 14.9246212,6.80330086 L12.8033009,8.9246212 C12.2175144,9.51040764 11.267767,9.51040764 10.6819805,8.9246212 L8.56066017,6.80330086 C7.97487373,6.21751442 7.97487373,5.26776695 8.56066017,4.68198052 Z\" fill=\"#000000\"/>
                                            </g>
                                        </svg>
                                    </span>
                                    <span class=\"kt-widget__desc\">
                                        {{'Covered Areas'|__}}
                                    </span>
                                </spandiv>
                            </a>
                        {% endif %}
                        <a href=\"{{url('dashboard/account/password')}}\" class=\"kt-hidden kt-widget__item {% if this.param.page == 'password' %}kt-widget__item--active{% endif %}\">
                            <span class=\"kt-widget__section\">
                                <span class=\"kt-widget__icon\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\" class=\"kt-svg-icon\">
                                    <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                        <rect x=\"0\" y=\"0\" width=\"24\" height=\"24\"/>
                                        <path d=\"M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z\" fill=\"#000000\" opacity=\"0.3\"/>
                                        <path d=\"M12,11 C10.8954305,11 10,10.1045695 10,9 C10,7.8954305 10.8954305,7 12,7 C13.1045695,7 14,7.8954305 14,9 C14,10.1045695 13.1045695,11 12,11 Z\" fill=\"#000000\" opacity=\"0.3\"/>
                                        <path d=\"M7.00036205,16.4995035 C7.21569918,13.5165724 9.36772908,12 11.9907452,12 C14.6506758,12 16.8360465,13.4332455 16.9988413,16.5 C17.0053266,16.6221713 16.9988413,17 16.5815,17 C14.5228466,17 11.463736,17 7.4041679,17 C7.26484009,17 6.98863236,16.6619875 7.00036205,16.4995035 Z\" fill=\"#000000\" opacity=\"0.3\"/>
                                        </g>
                                    </svg>
                                </span>
                                <span  class=\"kt-widget__desc\">
                                    {{'Change Password'|__}}
                                </span>
                            </span>
                        </a>
                        <a href=\"{{url('dashboard/account/settings')}}\"  class=\"kt-hidden kt-widget__item {% if this.param.page == 'settings' %}kt-widget__item--active{% endif %}\">
                            <span class=\"kt-widget__section\">
                                <span class=\"kt-widget__icon\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\" class=\"kt-svg-icon\">
                                        <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                        <rect x=\"0\" y=\"0\" width=\"24\" height=\"24\"/>
                                        <path d=\"M6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,12 C19,12.5522847 18.5522847,13 18,13 L6,13 C5.44771525,13 5,12.5522847 5,12 L5,3 C5,2.44771525 5.44771525,2 6,2 Z M7.5,5 C7.22385763,5 7,5.22385763 7,5.5 C7,5.77614237 7.22385763,6 7.5,6 L13.5,6 C13.7761424,6 14,5.77614237 14,5.5 C14,5.22385763 13.7761424,5 13.5,5 L7.5,5 Z M7.5,7 C7.22385763,7 7,7.22385763 7,7.5 C7,7.77614237 7.22385763,8 7.5,8 L10.5,8 C10.7761424,8 11,7.77614237 11,7.5 C11,7.22385763 10.7761424,7 10.5,7 L7.5,7 Z\" fill=\"#000000\" opacity=\"0.3\"/>
                                        <path d=\"M3.79274528,6.57253826 L12,12.5 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 Z\" fill=\"#000000\"/>
                                        </g>
                                    </svg>
                                </span>
                                <span class=\"kt-widget__desc\">
                                    {{'Settings'|__}}
                                </span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <!--end::Widget -->
        </div>
    </div>
    <!--end:: Widgets/Applications/User/Profile1-->
</div>
<!--End:: App Aside-->", "/Applications/MAMP/htdocs/test/themes/spotlayer/partials/profilemenu.htm", "");
    }
}
