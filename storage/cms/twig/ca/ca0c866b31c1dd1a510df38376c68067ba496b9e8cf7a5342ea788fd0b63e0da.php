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

/* /Applications/MAMP/htdocs/test/themes/spotlayer/pages/dashboard/client.htm */
class __TwigTemplate_56c6ca67f5289dc1b982f2479774a53aca9b0086e4e5559aeaef845d01a167f1 extends \Twig\Template
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
    <!--Begin:: App Aside Mobile Toggle-->
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
                <div class=\"kt-portlet__head-toolbar\">
                    <a href=\"#\" class=\"btn btn-clean btn-sm btn-icon btn-icon-md\" data-toggle=\"dropdown\">
                        <i class=\"flaticon-more-1\"></i>
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-right dropdown-menu-fit dropdown-menu-md\">
                        <!--begin::Nav-->
                        <ul class=\"kt-nav\">
                            <li class=\"kt-nav__head\">
                                <a href=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("dashboard/update-client", ["id" => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "id", [], "any", false, false, false, 26)]);
        echo "\">
                                    ";
        // line 27
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Edit Client"]);
        echo "
                                </a>
                                <a href=\"";
        // line 29
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("dashboard/update-client", ["id" => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "id", [], "any", false, false, false, 29)]);
        echo "\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\" class=\"kt-svg-icon\">
                                        <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                            <rect id=\"bound\" x=\"0\" y=\"0\" width=\"24\" height=\"24\"/>
                                            <path d=\"M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z\" id=\"Path-11\" fill=\"#000000\" fill-rule=\"nonzero\" transform=\"translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) \"/>
                                            <rect id=\"Rectangle\" fill=\"#000000\" opacity=\"0.3\" x=\"5\" y=\"20\" width=\"15\" height=\"2\" rx=\"1\"/>
                                        </g>
                                    </svg>
                                </a>
                           </li>
                       </ul>
                    </div>
                </div>
            </div>
            <div class=\"kt-portlet__body kt-portlet__body--fit-y\">
                <!--begin::Widget -->
                <div class=\"kt-widget kt-widget--user-profile-1\">
                    <div class=\"kt-widget__head\">
                        <div class=\"kt-widget__media\">
                            ";
        // line 48
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "avatar", [], "any", false, false, false, 48)) {
            // line 49
            echo "                                 <img alt=\"Pic\" src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "avatar", [], "any", false, false, false, 49), "thumb", [0 => 100, 1 => 100, 2 => "crop"], "method", false, false, false, 49), "html", null, true);
            echo "\" />
                            ";
        } else {
            // line 51
            echo "                                <span class=\"kt-badge kt-badge--username kt-badge--unified-success kt-badge--xl kt-badge--rounded kt-badge--bold\">";
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "name", [], "any", false, false, false, 51)), 0, 2), "html", null, true);
            echo "</span>
                             ";
        }
        // line 53
        echo "                        </div>
                        <div class=\"kt-widget__content\">
                            <div class=\"kt-widget__section\">
                                <a href=\"javascript:;\" class=\"kt-widget__username\">
                                    ";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "name", [], "any", false, false, false, 57), "html", null, true);
        echo "
                                    ";
        // line 58
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "userverify_dateverified", [], "any", false, false, false, 58)) {
            // line 59
            echo "                                        <i class=\"flaticon2-correct kt-font-success\"></i>
                                    ";
        }
        // line 61
        echo "                                </a>
                                <span class=\"kt-widget__subtitle\">
                                    ";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "role", [], "any", false, false, false, 63), "name", [], "any", false, false, false, 63), "html", null, true);
        echo "
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class=\"kt-widget__body kt-margin-t-20\">
                        <div class=\"kt-widget__content\">
                            ";
        // line 70
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "email", [], "any", false, false, false, 70)) {
            // line 71
            echo "                                <div class=\"kt-widget__info\">
                                    <span class=\"kt-widget__label\">";
            // line 72
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Email"]);
            echo ":</span>
                                    <a href=\"javascript:;\" class=\"kt-widget__data\">";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "email", [], "any", false, false, false, 73), "html", null, true);
            echo "</a>
                                </div>
                            ";
        }
        // line 76
        echo "                            ";
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "phone", [], "any", false, false, false, 76)) {
            // line 77
            echo "                                <div class=\"kt-widget__info\">
                                    <span class=\"kt-widget__label\">";
            // line 78
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Phone"]);
            echo ":</span>
                                    <a href=\"javascript:;\" class=\"kt-widget__data\">";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "phone", [], "any", false, false, false, 79), "html", null, true);
            echo "</a>
                                </div>
                            ";
        }
        // line 82
        echo "                            ";
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "mobile", [], "any", false, false, false, 82)) {
            // line 83
            echo "                                <div class=\"kt-widget__info\">
                                    <span class=\"kt-widget__label\">";
            // line 84
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Mobile"]);
            echo ":</span>
                                    <span class=\"kt-widget__data\">";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "mobile", [], "any", false, false, false, 85), "html", null, true);
            echo "</span>
                                </div>
                            ";
        }
        // line 88
        echo "                            <div class=\"kt-widget__info\">
                                <span class=\"kt-widget__label\">";
        // line 89
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["ًWallet"]);
        echo ":</span>
                                <span class=\"kt-widget__data\">";
        // line 90
        echo call_user_func_array($this->env->getFilter('currency')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "payments", [], "any", false, false, false, 90), "sum", [0 => "amount"], "method", false, false, false, 90)]);
        echo "</span>
                            </div>
                        </div>
                        <div class=\"kt-widget__items kt-margin-t-20\">
                            <a href=\"";
        // line 94
        echo url("dashboard/clients");
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "id", [], "any", false, false, false, 94), "html", null, true);
        echo "/view\" class=\"kt-widget__item ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 94), "page", [], "any", false, false, false, 94) == "view")) {
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
        // line 106
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Personal Information"]);
        echo "
                                    </span>
                                </span>
                            </a>
                            <a href=\"";
        // line 110
        echo url("dashboard/clients");
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "id", [], "any", false, false, false, 110), "html", null, true);
        echo "/transactions\" class=\"kt-widget__item ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 110), "page", [], "any", false, false, false, 110) == "transactions")) {
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
        // line 122
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Transactions"]);
        echo "
                                    </span>
                                </spandiv>
                            </a>
                        </div>
                    </div>
                </div>
                <!--end::Widget -->
            </div>
        </div>
        <!--end:: Widgets/Applications/User/Profile1-->
    </div>
    <!--End:: App Aside-->

    <!--Begin:: App Content-->
    <div class=\"kt-grid__item kt-grid__item--fluid kt-app__content\">
        ";
        // line 138
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 138), "page", [], "any", false, false, false, 138) == "view")) {
            // line 139
            echo "        <div class=\"row\">
            <div class=\"col-xl-";
            // line 140
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "addresses", [], "any", false, false, false, 140))) {
                echo "6";
            } else {
                echo "12";
            }
            echo "\">
                <!--begin:: Widgets/Order Statistics-->
                <div class=\"kt-portlet kt-portlet--height-fluid\">
                    <div class=\"kt-portlet__head\">
                        <div class=\"kt-portlet__head-label\">
                            <h3 class=\"kt-portlet__head-title\">";
            // line 145
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Personal Information"]);
            echo "</h3>
                        </div>
                    </div>
                    <div class=\"kt-portlet__body kt-portlet__body--fluid\">
                        <div class=\"kt-widget12\">
                            <div class=\"kt-widget12__content\">
                                <div class=\"kt-widget12__item\">
                                    <div class=\"kt-widget12__info\">
                                        <span class=\"kt-widget12__desc\">";
            // line 153
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Name"]);
            echo "</span>
                                        <span class=\"kt-widget12__value\">";
            // line 154
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "name", [], "any", false, false, false, 154), "html", null, true);
            echo "</span>
                                    </div>
                                    ";
            // line 156
            if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "email", [], "any", false, false, false, 156)) {
                // line 157
                echo "                                        <div class=\"kt-widget12__info\">
                                            <span class=\"kt-widget12__desc\">";
                // line 158
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Email"]);
                echo "</span>
                                            <span class=\"kt-widget12__value\">";
                // line 159
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "email", [], "any", false, false, false, 159), "html", null, true);
                echo "</span>
                                        </div>
                                    ";
            }
            // line 162
            echo "                                </div>
                                ";
            // line 163
            if (((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "mobile", [], "any", false, false, false, 163) || twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "phone", [], "any", false, false, false, 163)) || twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "gender", [], "any", false, false, false, 163))) {
                // line 164
                echo "                                    <div class=\"kt-widget12__item\">
                                        ";
                // line 165
                if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "mobile", [], "any", false, false, false, 165)) {
                    // line 166
                    echo "                                            <div class=\"kt-widget12__info\">
                                                <span class=\"kt-widget12__desc\">";
                    // line 167
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Mobile"]);
                    echo "</span>
                                                <span class=\"kt-widget12__value\">";
                    // line 168
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "mobile", [], "any", false, false, false, 168), "html", null, true);
                    echo "</span>
                                            </div>
                                        ";
                }
                // line 171
                echo "                                        ";
                if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "phone", [], "any", false, false, false, 171)) {
                    // line 172
                    echo "                                            <div class=\"kt-widget12__info\">
                                                <span class=\"kt-widget12__desc\">";
                    // line 173
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Phone"]);
                    echo "</span>
                                                <span class=\"kt-widget12__value\">";
                    // line 174
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "phone", [], "any", false, false, false, 174), "html", null, true);
                    echo "</span>
                                            </div>
                                        ";
                }
                // line 177
                echo "                                        ";
                if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "gender", [], "any", false, false, false, 177)) {
                    // line 178
                    echo "                                            <div class=\"kt-widget12__info\">
                                                <span class=\"kt-widget12__desc\">";
                    // line 179
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Gender"]);
                    echo "</span>
                                                <span class=\"kt-widget12__value\">";
                    // line 180
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "gender", [], "any", false, false, false, 180), "html", null, true);
                    echo "</span>
                                            </div>
                                        ";
                }
                // line 183
                echo "                                    </div>
                                ";
            }
            // line 185
            echo "                            </div>
                        </div>
                    </div>
                </div>
                <!--end:: Widgets/Order Statistics-->
            </div>
            ";
            // line 191
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "addresses", [], "any", false, false, false, 191))) {
                // line 192
                echo "                <div class=\"col-xl-6\">
                    <!--begin:: Widgets/Order Statistics-->
                    <div class=\"kt-portlet kt-portlet--height-fluid\">
                        <div class=\"kt-portlet__head\">
                            <div class=\"kt-portlet__head-label\">
                                <h3 class=\"kt-portlet__head-title\">";
                // line 197
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Addresses"]);
                echo "</h3>
                            </div>
                        </div>
                        <div class=\"kt-portlet__body\">

                            <div class=\"accordion  accordion-toggle-arrow kt-margin-b-40\" id=\"accordion\">
                                ";
                // line 203
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "addresses", [], "any", false, false, false, 203));
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
                    // line 204
                    echo "                \t\t\t\t\t<div class=\"card row\">
                \t\t\t\t\t\t<div class=\"card-header\" id=\"heading";
                    // line 205
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 205), "html", null, true);
                    echo "\">
                                            <div class=\"card-title ";
                    // line 206
                    if ((twig_get_attribute($this->env, $this->source, $context["address"], "default", [], "any", false, false, false, 206) != 1)) {
                        echo "collapsed";
                    }
                    echo "\" data-toggle=\"collapse\" data-target=\"#collapse";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 206), "html", null, true);
                    echo "\" aria-expanded=\"false\" aria-controls=\"collapse";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 206), "html", null, true);
                    echo "\">
                \t\t\t\t\t\t\t\t";
                    // line 207
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "name", [], "any", false, false, false, 207), "html", null, true);
                    echo " ";
                    if ((twig_get_attribute($this->env, $this->source, $context["address"], "default", [], "any", false, false, false, 207) == 1)) {
                        echo "&nbsp;<i class=\"flaticon-truck\"></i>";
                    }
                    // line 208
                    echo "                \t\t\t\t\t\t\t</div>
                \t\t\t\t\t\t</div>
                \t\t\t\t\t\t<div id=\"collapse";
                    // line 210
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 210), "html", null, true);
                    echo "\" class=\"collapse ";
                    if ((twig_get_attribute($this->env, $this->source, $context["address"], "default", [], "any", false, false, false, 210) == 1)) {
                        echo "show";
                    }
                    echo "\" aria-labelledby=\"headingOne\" data-parent=\"#accordion\">
                \t\t\t\t\t\t\t<div class=\"card-body\">

                                                <div class=\"kt-widget12\">
                                                    <div class=\"kt-widget12__content\">
                                                        <div class=\"kt-widget12__item\">
                                                            <div class=\"kt-widget12__info\">
                                                                <span class=\"kt-widget12__desc\">";
                    // line 217
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Name"]);
                    echo "</span>
                                                                <span class=\"kt-widget12__value\">";
                    // line 218
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "name", [], "any", false, false, false, 218), "html", null, true);
                    echo "&nbsp;<a href=\"javascript:;\" data-toggle=\"modal\" data-target=\"#map_modal_";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "id", [], "any", false, false, false, 218), "html", null, true);
                    echo "\"><i class=\"flaticon-map-location\"></i></a></span>

                                                                <div class=\"modal fade\" id=\"map_modal_";
                    // line 220
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "id", [], "any", false, false, false, 220), "html", null, true);
                    echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
                                                                    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                                                                        <div class=\"modal-content\">
                                                                            <div class=\"modal-header\">
                                                                                <h5 class=\"modal-title\" >";
                    // line 224
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Map"]);
                    echo "</h5>
                                                                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                                                                </button>
                                                                            </div>

                                                                            <div class=\"modal-body\">
                                                                                <div class=\"row\">
                                                                                    <div class=\"col-lg-12\">
                                                                                        <div id=\"kt_map_";
                    // line 232
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "id", [], "any", false, false, false, 232), "html", null, true);
                    echo "\" class=\"map_canvas\" style=\"height:320px;\"></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class=\"kt-widget12__item\">
                                                            <div class=\"kt-widget12__info\">
                                                                <span class=\"kt-widget12__desc\">";
                    // line 244
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Street"]);
                    echo "</span>
                                                                <span class=\"kt-widget12__value\">
                                                                    ";
                    // line 246
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "street", [], "any", false, false, false, 246), "html", null, true);
                    echo "
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class=\"kt-widget12__item\">
                                                            <div class=\"kt-widget12__info\">
                                                                <span class=\"kt-widget12__desc\">";
                    // line 252
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["County"]);
                    echo "</span>
                                                                <span class=\"kt-widget12__value\">
                                                                    ";
                    // line 254
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["address"], "area", [], "any", false, false, false, 254), "name", [], "any", false, false, false, 254), "html", null, true);
                    echo "
                                                                </span>
                                                            </div>
                                                            <div class=\"kt-widget12__info\">
                                                                <span class=\"kt-widget12__desc\">";
                    // line 258
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["City"]);
                    echo "</span>
                                                                <span class=\"kt-widget12__value\">
                                                                    ";
                    // line 260
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["address"], "thecity", [], "any", false, false, false, 260), "name", [], "any", false, false, false, 260), "html", null, true);
                    echo "
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class=\"kt-widget12__item\">
                                                            <div class=\"kt-widget12__info\">
                                                                <span class=\"kt-widget12__desc\">";
                    // line 266
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["State"]);
                    echo "</span>
                                                                <span class=\"kt-widget12__value\">
                                                                    ";
                    // line 268
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["address"], "thestate", [], "any", false, false, false, 268), "name", [], "any", false, false, false, 268), "html", null, true);
                    echo "
                                                                </span>
                                                            </div>
                                                            <div class=\"kt-widget12__info\">
                                                                <span class=\"kt-widget12__desc\">";
                    // line 272
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Country"]);
                    echo "</span>
                                                                <span class=\"kt-widget12__value\">
                                                                    ";
                    // line 274
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["address"], "thecountry", [], "any", false, false, false, 274), "name", [], "any", false, false, false, 274), "html", null, true);
                    echo "
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                \t\t\t\t\t\t\t</div>
                \t\t\t\t\t\t</div>
                \t\t\t\t\t</div>
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
                // line 285
                echo "        \t\t\t\t\t</div>

                        </div>
                    </div>
                    <!--end:: Widgets/Order Statistics-->
                </div>
            ";
            }
            // line 292
            echo "        </div>
        <div class=\"row\">
            <div class=\"col-xl-12\">
                <!--begin:: Widgets/Last Updates-->
                <div class=\"kt-portlet kt-portlet--height-fluid\">
                    <div class=\"kt-portlet__head\">
                        <div class=\"kt-portlet__head-label\">
                            <h3 class=\"kt-portlet__head-title\">";
            // line 299
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Orders"]);
            echo "</h3>
                        </div>
                    </div>
                    <div class=\"kt-portlet__body\">
                        <div class=\"kt-datatable\"></div>
                    </div>
                </div>
            </div>
        </div>
        ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 308
($context["this"] ?? null), "param", [], "any", false, false, false, 308), "page", [], "any", false, false, false, 308) == "transactions")) {
            // line 309
            echo "            <div class=\"row\">
                <div class=\"col-xl-12\">
                    <!--begin:: Widgets/Last Updates-->
                    <div class=\"kt-portlet kt-portlet--height-fluid\">
                        <div class=\"kt-portlet__head\">
                            <div class=\"kt-portlet__head-label\">
                                <h3 class=\"kt-portlet__head-title\">";
            // line 315
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Transactions"]);
            echo "</h3>
                            </div>
                        </div>
                        <div class=\"kt-portlet__body\">
                            <div class=\"kt-datatable\"></div>
                        </div>
                    </div>
                </div>
            </div>
        ";
        }
        // line 325
        echo "
    </div>
    <!--End:: App Content-->
</div>
<!--End::App-->


";
        // line 332
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('styles'        );
        // line 333
        echo "    <style>
        .map_canvas {
            height: 350px !important;
            width: 100% !important;
        }
        .accordion > .card:last-child {
            border-bottom: 1px solid #eee;
        }
    </style>
";
        // line 332
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
        // line 343
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 344
        echo "<script src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/admin/vendors/custom/geocomplete/jquery.geocomplete.js");
        echo "\" type=\"text/javascript\"></script>
<script src=\"https://maps.googleapis.com/maps/api/js?libraries=places&key=";
        // line 345
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "google", [], "any", false, false, false, 345), "map", [], "any", false, false, false, 345), "key", [], "any", false, false, false, 345), "html", null, true);
        echo "\"></script>
<script src=\"./admin/vendors/custom/gmaps/gmaps.js\" type=\"text/javascript\"></script>
<script>
\"use strict\";
var KTAppUserListDatatable = function () {
    // variables
    var datatable;

    // init
    var init = function (type) {
        ";
        // line 355
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 355), "page", [], "any", false, false, false, 355) == "view")) {
            // line 356
            echo "            var columns = [
                {
                    field: \"number\",
                    title: \"";
            // line 359
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Tracking"]);
            echo "\",
                    sortable: true,
                    width: 100,
                    template: function(row) {
                        return '<a href=\"";
            // line 363
            echo url("dashboard/shipments");
            echo "/'+row.id+'/view\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "tracking", [], "any", false, false, false, 363), "prefix_order", [], "any", false, false, false, 363), "html", null, true);
            echo "'+row.shipping_number+'</a>';
                    }
                },
                {
                    field: \"details\",
                    title: \"";
            // line 368
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Shipment Details"]);
            echo "\",
                    sortable: false,
                    width: 'auto',
                    template: function(data, i) {
                        var output  = '\\
                            <div class=\"kt-user-card-v2 kt-user-card-v2--uncircle\">\\
                                <div class=\"kt-user-card-v2__details\">\\
                                    <a href=\"";
            // line 375
            if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "client", 1 => "r"], "method", false, false, false, 375)) {
                echo url("dashboard/clients");
                echo "/'+data.sender.id+'/view";
            } else {
                echo "javascript:;";
            }
            echo "\" class=\"kt-user-card-v2__name\"><b class=\"kt-font-boldest\">";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sender"]);
            echo ":</b> ' + data.sender.name + '</a>\\
                                    <span class=\"kt-user-card-v2__email\"><b class=\"kt-font-boldest\">";
            // line 376
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["From"]);
            echo ":</b> ' + data.shipping_from_area + '</span>';
                        if(data.receiver){
                            output      += '\\
                                        <a href=\"";
            // line 379
            if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "client", 1 => "r"], "method", false, false, false, 379)) {
                echo url("dashboard/clients");
                echo "/'+data.receiver.id+'/view";
            } else {
                echo "javascript:;";
            }
            echo "\" class=\"kt-margin-t-5 kt-user-card-v2__name\"><b>";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Receiver"]);
            echo ":</b> ' + data.receiver.name + '</a>\\
                                        <span class=\"kt-user-card-v2__email\"><b class=\"kt-font-boldest\">";
            // line 380
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
            // line 390
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
            // line 399
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Status"]);
            echo "\",
                    sortable: false,
                    width: 'auto',
                    template: function(row) {
                        if(row.requested == 100){
                            var output = '<span class=\"btn btn-bold btn-sm btn-label-primary\">";
            // line 404
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Saved"]);
            echo "</span>';
                        }else{
                            var output = '<span class=\"btn btn-bold btn-sm btn-label-' + row.status.color + '\">' + row.status.name + '</span>';
                            if(row.delayed == 1){
                                output  += '&nbsp;<span class=\"btn btn-bold btn-sm btn-label-danger\">";
            // line 408
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delayed"]);
            echo "</span>';
                            }
                            if(row.requested == 10 || row.requested == 11){
                                output  += '&nbsp;<span class=\"btn btn-bold btn-sm btn-label-warning\">";
            // line 411
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Returning Discards"]);
            echo "</span>';
                            }
                            if(row.requested == 12 && row.status.equal != 12){
                                output  += '&nbsp;<span class=\"btn btn-bold btn-sm btn-label-success\">";
            // line 414
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
            // line 423
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Date"]);
            echo "\",
                    sortable: false,
                    width: 100,
                }
            ];
        ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 428
($context["this"] ?? null), "param", [], "any", false, false, false, 428), "page", [], "any", false, false, false, 428) == "transactions")) {
            // line 429
            echo "            var columns = [
                {
                    field: \"id\",
                    title: \"";
            // line 432
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["ID"]);
            echo "\",
                    sortable: false,
                    width: 50,
    \t\t\t\ttemplate: function(data, i) {
    \t\t\t\t\tvar output = '\\
                            <div class=\"kt-user-card-v2 kt-user-card-v2--uncircle\">\\
                                <div class=\"kt-user-card-v2__details\">\\
                                     <a href=\"";
            // line 439
            echo url("dashboard/transactions");
            echo "/' + data.id+ '/view\" class=\"kt-user-card-v2__name\">' + data.id+ '</a>\\
                                 </div>\\
                            </div>';
    \t\t\t\t\treturn output;
    \t\t\t\t},
                },
                {
                    field: \"movement\",
                    title: \"";
            // line 447
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Movement Type"]);
            echo "\",
                    sortable: false,
                    width: 250,
                    template: function(row) {
                        //1 = withdrawl | 2 = deposit | 3 = Deduction from the wallet | 4 = add to wallet | 5 =  Deduction of commission balance | 6 = Add to the commission balance | 7 = Deduction from the balance of packages | 8 = Add  to the balance of packages
                        var status = {
                            1: {
                                'title': '";
            // line 454
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Withdrawl"]);
            echo "',
                                'class': 'info'
                            },
                            2: {
                                'title': '";
            // line 458
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Deposit"]);
            echo "',
                                'class': 'info'
                            },
                            3: {
                                'title': '";
            // line 462
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Deduction from the wallet"]);
            echo "',
                                'class': 'info'
                            },
                            4: {
                                'title': '";
            // line 466
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Add to wallet"]);
            echo "',
                                'class': 'info'
                            },
                            5: {
                                'title': '";
            // line 470
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Deduction of commission balance"]);
            echo "',
                                'class': 'info'
                            },
                            6: {
                                'title': '";
            // line 474
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Add to the commission balance"]);
            echo "',
                                'class': 'info'
                            },
                            7: {
                                'title': '";
            // line 478
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Deduction from the balance of packages"]);
            echo "',
                                'class': 'info'
                            },
                            8: {
                                'title': '";
            // line 482
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Add  to the balance of packages"]);
            echo "',
                                'class': 'info'
                            },
                        };
                        return '<span class=\"kt-badge kt-badge--' + status[row.movement].class + ' kt-badge--dot\"></span>&nbsp;<a href=\"";
            // line 486
            echo url("dashboard/transactions");
            echo "/' + row.id+ '/view\" class=\"kt-font-bold kt-font-' + status[row.movement].class + '\">' + status[row.movement].title + '</a>';
                    }
                },
                {
                    field: \"date\",
                    title: \"";
            // line 491
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Date"]);
            echo "\",
                    sortable: false,
                    width: 100,
                },
                {
                    field: \"amount\",
                    title: \"";
            // line 497
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Amount"]);
            echo "\",
                    sortable: false,
                    width: 100,
                },
                {
                    field: \"created_at\",
                    title: \"";
            // line 503
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Created On"]);
            echo "\",
                    sortable: false,
                    width: 100,
    \t\t\t\ttemplate: function(data, i) {
    \t\t\t\t\tvar output = '\\
                            <div class=\"kt-user-card-v2 kt-user-card-v2--uncircle\">\\
                                <div class=\"kt-user-card-v2__details\">\\
                                    <a href=\"javascript:;\" class=\"kt-user-card-v2__name\">' + data.created_at_date + '</a>\\
                                    <span class=\"kt-user-card-v2__email\">' + data.created_at_time + '</span>\\
                                </div>\\
                            </div>';
    \t\t\t\t\treturn output;
    \t\t\t\t}
                },
                {
                    field: \"payment_with\",
                    title: \"";
            // line 519
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Received by"]);
            echo "\",
                    sortable: false,
                    width: 100,
    \t\t\t\ttemplate: function(data, i) {
                        if(data.item_id){
        \t\t\t\t\tvar output = '\\
                                <div class=\"kt-user-card-v2 kt-user-card-v2--uncircle\">\\
                                    <div class=\"kt-user-card-v2__details\">\\
                                         <a href=\"";
            // line 527
            echo url("dashboard/employees");
            echo "/' + data.payment_with+ '/transactions\" class=\"kt-user-card-v2__name\">' + data.payment_with_employee+ '</a>\\
                                     </div>\\
                                </div>';
        \t\t\t\t\treturn output;
                        }else{
        \t\t\t\t\treturn '-';
                        }
    \t\t\t\t},
                },
                {
                    field: \"description\",
                    title: \"";
            // line 538
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Description"]);
            echo "\",
                    sortable: false,
                    width: 150,
    \t\t\t\ttemplate: function(data, i) {
                        if(data.description){
        \t\t\t\t\treturn data.description;
                        }else{
        \t\t\t\t\treturn '-';
                        }
    \t\t\t\t}
                },
                {
                    field: \"item_id\",
                    title: \"";
            // line 551
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Shipment"]);
            echo "\",
                    sortable: false,
                    width: 50,
    \t\t\t\ttemplate: function(data, i) {
                        if(data.item_id){
        \t\t\t\t\tvar output = '\\
                                <div class=\"kt-user-card-v2 kt-user-card-v2--uncircle\">\\
                                    <div class=\"kt-user-card-v2__details\">\\
                                         <a href=\"";
            // line 559
            echo url("dashboard/shipments");
            echo "/' + data.item_id+ '/view\" class=\"kt-user-card-v2__name\">#' + data.item_id+ '</a>\\
                                     </div>\\
                                </div>';
        \t\t\t\t\treturn output;
                        }else{
        \t\t\t\t\treturn '-';
                        }
    \t\t\t\t}
                },
            ]
        ";
        }
        // line 570
        echo "
        datatable = \$('.kt-datatable').KTDatatable({
            translate: {
                records: {
                    processing: '";
        // line 574
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please wait"]);
        echo "...',
                    noRecords: '";
        // line 575
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No records found"]);
        echo "'
                },
                toolbar: {
                    pagination: {
                        items: {
                            default: {
                                first: '";
        // line 581
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["First"]);
        echo "',
                                prev: '";
        // line 582
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Previous"]);
        echo "',
                                next: '";
        // line 583
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Next"]);
        echo "',
                                last: '";
        // line 584
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Last"]);
        echo "',
                                more: '";
        // line 585
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["More pages"]);
        echo "',
                                input: '";
        // line 586
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Page number"]);
        echo "',
                                select: '";
        // line 587
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Select page size"]);
        echo "'
                            },

                            info: \"";
        // line 590
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
                        ";
        // line 615
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 615), "page", [], "any", false, false, false, 615) == "view")) {
            // line 616
            echo "                            url: '";
            echo url("api/shipments");
            echo "/clientorders',
                        ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 617
($context["this"] ?? null), "param", [], "any", false, false, false, 617), "page", [], "any", false, false, false, 617) == "transactions")) {
            // line 618
            echo "                            url: '";
            echo url("api/clienttransactions");
            echo "',
                        ";
        }
        // line 620
        echo "                        params: {
                          id: ";
        // line 621
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 621), "id", [], "any", false, false, false, 621), "html", null, true);
        echo "
                        }
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
        // line 692
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Are you sure to update"]);
        echo " \" + ids.length + \" ";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["selected records status to"]);
        echo " \" + status + \" ?\",
                    type: \"info\",

                    confirmButtonText: \"";
        // line 695
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yes, update"]);
        echo "!\",
                    confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",

                    showCancelButton: true,
                    cancelButtonText: \"";
        // line 699
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No, cancel"]);
        echo "\",
                    cancelButtonClass: \"btn btn-sm btn-bold btn-default\"
                }).then(function (result) {
                    if (result.value) {
                        swal.fire({
                            title: '";
        // line 704
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Deleted"]);
        echo "!',
                            text: '";
        // line 705
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Your selected records statuses have been updated"]);
        echo "!',
                            type: 'success',
                            buttonsStyling: false,
                            confirmButtonText: \"";
        // line 708
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["OK"]);
        echo "\",
                            confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                        })
                        // result.dismiss can be 'cancel', 'overlay',
                        // 'close', and 'timer'
                    } else if (result.dismiss === 'cancel') {
                        swal.fire({
                            title: '";
        // line 715
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cancelled"]);
        echo "',
                            text: '";
        // line 716
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["You selected records statuses have not been updated"]);
        echo "!',
                            type: 'error',
                            buttonsStyling: false,
                            confirmButtonText: \"";
        // line 719
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["OK"]);
        echo "\",
                            confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                        });
                    }
                });
            }
        });
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
        // line 744
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Are you sure to delete"]);
        echo " \" + ids.length + \" ";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["selected records ?"]);
        echo "\",
                    type: \"error\",

                    confirmButtonText: \"";
        // line 747
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yes, delete!"]);
        echo "\",
                    confirmButtonClass: \"btn btn-sm btn-bold btn-danger\",

                    showCancelButton: true,
                    cancelButtonText: '";
        // line 751
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
        // line 759
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Deleted!"]);
        echo "',
                                    text: '";
        // line 760
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Your selected records have been deleted! :("]);
        echo "',
                                    type: 'success',
                                    buttonsStyling: false,
                                    confirmButtonText: '";
        // line 763
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
        // line 773
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cancelled"]);
        echo "',
                            text: '";
        // line 774
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["You selected records have not been deleted! :)"]);
        echo "',
                            type: 'error',
                            buttonsStyling: false,
                            confirmButtonText: '";
        // line 777
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
        // line 792
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Are you sure to delete this item ?"]);
        echo "\",
                type: \"danger\",

                confirmButtonText: \"";
        // line 795
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yes, delete!"]);
        echo "\",
                confirmButtonClass: \"btn btn-sm btn-bold btn-danger\",

                showCancelButton: true,
                cancelButtonText: '";
        // line 799
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
        // line 808
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Deleted!"]);
        echo "',
                                text: '";
        // line 809
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Your selected record has been deleted! :("]);
        echo "',
                                type: 'success',
                                buttonsStyling: false,
                                confirmButtonText: '";
        // line 812
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
        // line 822
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cancelled"]);
        echo "',
                        text: '";
        // line 823
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["You selected record has not been deleted! :)"]);
        echo "',
                        type: 'error',
                        buttonsStyling: false,
                        confirmButtonText: '";
        // line 826
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["OK"]);
        echo "',
                        confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                    });
                }
            });
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
        // line 848
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Are you sure you want to create new manifest with"]);
        echo " \" + ids.length + \" ";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["selected records ?"]);
        echo "\",
                    type: \"error\",

                    confirmButtonText: \"";
        // line 851
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yes!"]);
        echo "\",
                    confirmButtonClass: \"btn btn-sm btn-bold btn-danger\",

                    showCancelButton: true,
                    cancelButtonText: '";
        // line 855
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
        // line 863
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cancelled"]);
        echo "',
                            text: '";
        // line 864
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Your manifest not created! :)"]);
        echo "',
                            type: 'error',
                            buttonsStyling: false,
                            confirmButtonText: '";
        // line 867
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["OK"]);
        echo "',
                            confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                        });
                    }
                });
            }
        });

        \$('body').on('click', '#PrintEmployeeOrders', function (e) {
            e.preventDefault();
            \$('#chooseEmployee').modal('toggle');
        });

    }

    var updateTotal = function () {
        datatable.on('kt-datatable--on-layout-updated', function () {
            \$('#kt_subheader_total').html(datatable.getTotalRows() + ' ";
        // line 884
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Total"]);
        echo "');
        });
    };

    var reload = function () {
        datatable.reload();
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
        init: function () {
            init();
            search();
            selection();
            selectedStatusUpdate();
            selectedDelete();
            updateTotal();
        },

        reload: function(){
            reload();
        },

        destroy: function(){
            destroy();
        }
    };
}();

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
    KTAppUserListDatatable.init();


    ";
        // line 960
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 960), "page", [], "any", false, false, false, 960) == "view")) {
            // line 961
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "addresses", [], "any", false, false, false, 961));
            foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
                // line 962
                echo "
            var map = new GMaps({
                div: '#kt_map_";
                // line 964
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "id", [], "any", false, false, false, 964), "html", null, true);
                echo "',
                lat: ";
                // line 965
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "lat", [], "any", false, false, false, 965), "html", null, true);
                echo ",
                lng: ";
                // line 966
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "lng", [], "any", false, false, false, 966), "html", null, true);
                echo "
            });
            map.addMarker({
                lat: ";
                // line 969
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "lat", [], "any", false, false, false, 969), "html", null, true);
                echo ",
                lng: ";
                // line 970
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "lng", [], "any", false, false, false, 970), "html", null, true);
                echo ",
                title: '";
                // line 971
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "name", [], "any", false, false, false, 971), "html", null, true);
                echo "',
                infoWindow: {
                    content: '<p>";
                // line 973
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Go to"]);
                echo " <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "url", [], "any", false, false, false, 973), "html", null, true);
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "name", [], "any", false, false, false, 973), "html", null, true);
                echo "</a></p>'
                }
            });

        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 978
            echo "    ";
        }
        // line 979
        echo "});
</script>
";
        // line 343
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/test/themes/spotlayer/pages/dashboard/client.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1644 => 343,  1640 => 979,  1637 => 978,  1622 => 973,  1617 => 971,  1613 => 970,  1609 => 969,  1603 => 966,  1599 => 965,  1595 => 964,  1591 => 962,  1586 => 961,  1584 => 960,  1505 => 884,  1485 => 867,  1479 => 864,  1475 => 863,  1464 => 855,  1457 => 851,  1449 => 848,  1424 => 826,  1418 => 823,  1414 => 822,  1401 => 812,  1395 => 809,  1391 => 808,  1379 => 799,  1372 => 795,  1366 => 792,  1348 => 777,  1342 => 774,  1338 => 773,  1325 => 763,  1319 => 760,  1315 => 759,  1304 => 751,  1297 => 747,  1289 => 744,  1261 => 719,  1255 => 716,  1251 => 715,  1241 => 708,  1235 => 705,  1231 => 704,  1223 => 699,  1216 => 695,  1208 => 692,  1134 => 621,  1131 => 620,  1125 => 618,  1123 => 617,  1118 => 616,  1116 => 615,  1074 => 590,  1068 => 587,  1064 => 586,  1060 => 585,  1056 => 584,  1052 => 583,  1048 => 582,  1044 => 581,  1035 => 575,  1031 => 574,  1025 => 570,  1011 => 559,  1000 => 551,  984 => 538,  970 => 527,  959 => 519,  940 => 503,  931 => 497,  922 => 491,  914 => 486,  907 => 482,  900 => 478,  893 => 474,  886 => 470,  879 => 466,  872 => 462,  865 => 458,  858 => 454,  848 => 447,  837 => 439,  827 => 432,  822 => 429,  820 => 428,  812 => 423,  800 => 414,  794 => 411,  788 => 408,  781 => 404,  773 => 399,  761 => 390,  748 => 380,  737 => 379,  731 => 376,  720 => 375,  710 => 368,  700 => 363,  693 => 359,  688 => 356,  686 => 355,  673 => 345,  668 => 344,  666 => 343,  664 => 332,  653 => 333,  651 => 332,  642 => 325,  629 => 315,  621 => 309,  619 => 308,  607 => 299,  598 => 292,  589 => 285,  564 => 274,  559 => 272,  552 => 268,  547 => 266,  538 => 260,  533 => 258,  526 => 254,  521 => 252,  512 => 246,  507 => 244,  492 => 232,  481 => 224,  474 => 220,  467 => 218,  463 => 217,  449 => 210,  445 => 208,  439 => 207,  429 => 206,  425 => 205,  422 => 204,  405 => 203,  396 => 197,  389 => 192,  387 => 191,  379 => 185,  375 => 183,  369 => 180,  365 => 179,  362 => 178,  359 => 177,  353 => 174,  349 => 173,  346 => 172,  343 => 171,  337 => 168,  333 => 167,  330 => 166,  328 => 165,  325 => 164,  323 => 163,  320 => 162,  314 => 159,  310 => 158,  307 => 157,  305 => 156,  300 => 154,  296 => 153,  285 => 145,  273 => 140,  270 => 139,  268 => 138,  249 => 122,  228 => 110,  221 => 106,  200 => 94,  193 => 90,  189 => 89,  186 => 88,  180 => 85,  176 => 84,  173 => 83,  170 => 82,  164 => 79,  160 => 78,  157 => 77,  154 => 76,  148 => 73,  144 => 72,  141 => 71,  139 => 70,  129 => 63,  125 => 61,  121 => 59,  119 => 58,  115 => 57,  109 => 53,  103 => 51,  97 => 49,  95 => 48,  73 => 29,  68 => 27,  64 => 26,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!--Begin::App-->
<div class=\"kt-grid kt-grid--desktop kt-grid--ver kt-grid--ver-desktop kt-app\">
    <!--Begin:: App Aside Mobile Toggle-->
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
                <div class=\"kt-portlet__head-toolbar\">
                    <a href=\"#\" class=\"btn btn-clean btn-sm btn-icon btn-icon-md\" data-toggle=\"dropdown\">
                        <i class=\"flaticon-more-1\"></i>
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-right dropdown-menu-fit dropdown-menu-md\">
                        <!--begin::Nav-->
                        <ul class=\"kt-nav\">
                            <li class=\"kt-nav__head\">
                                <a href=\"{{'dashboard/update-client'|page({'id': item.id})}}\">
                                    {{'Edit Client'|__}}
                                </a>
                                <a href=\"{{'dashboard/update-client'|page({'id': item.id})}}\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\" class=\"kt-svg-icon\">
                                        <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                            <rect id=\"bound\" x=\"0\" y=\"0\" width=\"24\" height=\"24\"/>
                                            <path d=\"M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z\" id=\"Path-11\" fill=\"#000000\" fill-rule=\"nonzero\" transform=\"translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) \"/>
                                            <rect id=\"Rectangle\" fill=\"#000000\" opacity=\"0.3\" x=\"5\" y=\"20\" width=\"15\" height=\"2\" rx=\"1\"/>
                                        </g>
                                    </svg>
                                </a>
                           </li>
                       </ul>
                    </div>
                </div>
            </div>
            <div class=\"kt-portlet__body kt-portlet__body--fit-y\">
                <!--begin::Widget -->
                <div class=\"kt-widget kt-widget--user-profile-1\">
                    <div class=\"kt-widget__head\">
                        <div class=\"kt-widget__media\">
                            {% if item.avatar %}
                                 <img alt=\"Pic\" src=\"{{item.avatar.thumb(100, 100,'crop')}}\" />
                            {% else %}
                                <span class=\"kt-badge kt-badge--username kt-badge--unified-success kt-badge--xl kt-badge--rounded kt-badge--bold\">{{item.name|capitalize|slice(0,2)}}</span>
                             {% endif %}
                        </div>
                        <div class=\"kt-widget__content\">
                            <div class=\"kt-widget__section\">
                                <a href=\"javascript:;\" class=\"kt-widget__username\">
                                    {{item.name}}
                                    {% if item.userverify_dateverified %}
                                        <i class=\"flaticon2-correct kt-font-success\"></i>
                                    {% endif %}
                                </a>
                                <span class=\"kt-widget__subtitle\">
                                    {{item.role.name}}
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class=\"kt-widget__body kt-margin-t-20\">
                        <div class=\"kt-widget__content\">
                            {% if item.email %}
                                <div class=\"kt-widget__info\">
                                    <span class=\"kt-widget__label\">{{'Email'|__}}:</span>
                                    <a href=\"javascript:;\" class=\"kt-widget__data\">{{item.email}}</a>
                                </div>
                            {% endif %}
                            {% if item.phone %}
                                <div class=\"kt-widget__info\">
                                    <span class=\"kt-widget__label\">{{'Phone'|__}}:</span>
                                    <a href=\"javascript:;\" class=\"kt-widget__data\">{{item.phone}}</a>
                                </div>
                            {% endif %}
                            {% if item.mobile %}
                                <div class=\"kt-widget__info\">
                                    <span class=\"kt-widget__label\">{{'Mobile'|__}}:</span>
                                    <span class=\"kt-widget__data\">{{item.mobile}}</span>
                                </div>
                            {% endif %}
                            <div class=\"kt-widget__info\">
                                <span class=\"kt-widget__label\">{{'ًWallet'|__}}:</span>
                                <span class=\"kt-widget__data\">{{item.payments.sum('amount')|currency}}</span>
                            </div>
                        </div>
                        <div class=\"kt-widget__items kt-margin-t-20\">
                            <a href=\"{{url('dashboard/clients')}}/{{item.id}}/view\" class=\"kt-widget__item {% if this.param.page == 'view' %}kt-widget__item--active{% endif %}\">
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
                                        {{'Personal Information'|__}}
                                    </span>
                                </span>
                            </a>
                            <a href=\"{{url('dashboard/clients')}}/{{item.id}}/transactions\" class=\"kt-widget__item {% if this.param.page == 'transactions' %}kt-widget__item--active{% endif %}\">
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
                                        {{'Transactions'|__}}
                                    </span>
                                </spandiv>
                            </a>
                        </div>
                    </div>
                </div>
                <!--end::Widget -->
            </div>
        </div>
        <!--end:: Widgets/Applications/User/Profile1-->
    </div>
    <!--End:: App Aside-->

    <!--Begin:: App Content-->
    <div class=\"kt-grid__item kt-grid__item--fluid kt-app__content\">
        {% if this.param.page == 'view' %}
        <div class=\"row\">
            <div class=\"col-xl-{% if item.addresses is not empty %}6{% else %}12{% endif %}\">
                <!--begin:: Widgets/Order Statistics-->
                <div class=\"kt-portlet kt-portlet--height-fluid\">
                    <div class=\"kt-portlet__head\">
                        <div class=\"kt-portlet__head-label\">
                            <h3 class=\"kt-portlet__head-title\">{{'Personal Information'|__}}</h3>
                        </div>
                    </div>
                    <div class=\"kt-portlet__body kt-portlet__body--fluid\">
                        <div class=\"kt-widget12\">
                            <div class=\"kt-widget12__content\">
                                <div class=\"kt-widget12__item\">
                                    <div class=\"kt-widget12__info\">
                                        <span class=\"kt-widget12__desc\">{{'Name'|__}}</span>
                                        <span class=\"kt-widget12__value\">{{item.name}}</span>
                                    </div>
                                    {% if item.email %}
                                        <div class=\"kt-widget12__info\">
                                            <span class=\"kt-widget12__desc\">{{'Email'|__}}</span>
                                            <span class=\"kt-widget12__value\">{{item.email}}</span>
                                        </div>
                                    {% endif %}
                                </div>
                                {% if item.mobile or item.phone or item.gender %}
                                    <div class=\"kt-widget12__item\">
                                        {% if item.mobile %}
                                            <div class=\"kt-widget12__info\">
                                                <span class=\"kt-widget12__desc\">{{'Mobile'|__}}</span>
                                                <span class=\"kt-widget12__value\">{{item.mobile}}</span>
                                            </div>
                                        {% endif %}
                                        {% if item.phone %}
                                            <div class=\"kt-widget12__info\">
                                                <span class=\"kt-widget12__desc\">{{'Phone'|__}}</span>
                                                <span class=\"kt-widget12__value\">{{item.phone}}</span>
                                            </div>
                                        {% endif %}
                                        {% if item.gender %}
                                            <div class=\"kt-widget12__info\">
                                                <span class=\"kt-widget12__desc\">{{'Gender'|__}}</span>
                                                <span class=\"kt-widget12__value\">{{item.gender}}</span>
                                            </div>
                                        {% endif %}
                                    </div>
                                {% endif %}
                            </div>
                        </div>
                    </div>
                </div>
                <!--end:: Widgets/Order Statistics-->
            </div>
            {% if item.addresses is not empty %}
                <div class=\"col-xl-6\">
                    <!--begin:: Widgets/Order Statistics-->
                    <div class=\"kt-portlet kt-portlet--height-fluid\">
                        <div class=\"kt-portlet__head\">
                            <div class=\"kt-portlet__head-label\">
                                <h3 class=\"kt-portlet__head-title\">{{'Addresses'|__}}</h3>
                            </div>
                        </div>
                        <div class=\"kt-portlet__body\">

                            <div class=\"accordion  accordion-toggle-arrow kt-margin-b-40\" id=\"accordion\">
                                {% for address in item.addresses %}
                \t\t\t\t\t<div class=\"card row\">
                \t\t\t\t\t\t<div class=\"card-header\" id=\"heading{{loop.index}}\">
                                            <div class=\"card-title {% if address.default != 1 %}collapsed{% endif %}\" data-toggle=\"collapse\" data-target=\"#collapse{{loop.index}}\" aria-expanded=\"false\" aria-controls=\"collapse{{loop.index}}\">
                \t\t\t\t\t\t\t\t{{address.name}} {% if address.default == 1 %}&nbsp;<i class=\"flaticon-truck\"></i>{% endif %}
                \t\t\t\t\t\t\t</div>
                \t\t\t\t\t\t</div>
                \t\t\t\t\t\t<div id=\"collapse{{loop.index}}\" class=\"collapse {% if address.default == 1 %}show{% endif %}\" aria-labelledby=\"headingOne\" data-parent=\"#accordion\">
                \t\t\t\t\t\t\t<div class=\"card-body\">

                                                <div class=\"kt-widget12\">
                                                    <div class=\"kt-widget12__content\">
                                                        <div class=\"kt-widget12__item\">
                                                            <div class=\"kt-widget12__info\">
                                                                <span class=\"kt-widget12__desc\">{{'Name'|__}}</span>
                                                                <span class=\"kt-widget12__value\">{{address.name}}&nbsp;<a href=\"javascript:;\" data-toggle=\"modal\" data-target=\"#map_modal_{{address.id}}\"><i class=\"flaticon-map-location\"></i></a></span>

                                                                <div class=\"modal fade\" id=\"map_modal_{{address.id}}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
                                                                    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                                                                        <div class=\"modal-content\">
                                                                            <div class=\"modal-header\">
                                                                                <h5 class=\"modal-title\" >{{'Map'|__}}</h5>
                                                                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                                                                </button>
                                                                            </div>

                                                                            <div class=\"modal-body\">
                                                                                <div class=\"row\">
                                                                                    <div class=\"col-lg-12\">
                                                                                        <div id=\"kt_map_{{address.id}}\" class=\"map_canvas\" style=\"height:320px;\"></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class=\"kt-widget12__item\">
                                                            <div class=\"kt-widget12__info\">
                                                                <span class=\"kt-widget12__desc\">{{'Street'|__}}</span>
                                                                <span class=\"kt-widget12__value\">
                                                                    {{address.street}}
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class=\"kt-widget12__item\">
                                                            <div class=\"kt-widget12__info\">
                                                                <span class=\"kt-widget12__desc\">{{'County'|__}}</span>
                                                                <span class=\"kt-widget12__value\">
                                                                    {{address.area.name}}
                                                                </span>
                                                            </div>
                                                            <div class=\"kt-widget12__info\">
                                                                <span class=\"kt-widget12__desc\">{{'City'|__}}</span>
                                                                <span class=\"kt-widget12__value\">
                                                                    {{address.thecity.name}}
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class=\"kt-widget12__item\">
                                                            <div class=\"kt-widget12__info\">
                                                                <span class=\"kt-widget12__desc\">{{'State'|__}}</span>
                                                                <span class=\"kt-widget12__value\">
                                                                    {{address.thestate.name}}
                                                                </span>
                                                            </div>
                                                            <div class=\"kt-widget12__info\">
                                                                <span class=\"kt-widget12__desc\">{{'Country'|__}}</span>
                                                                <span class=\"kt-widget12__value\">
                                                                    {{address.thecountry.name}}
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                \t\t\t\t\t\t\t</div>
                \t\t\t\t\t\t</div>
                \t\t\t\t\t</div>
                                {% endfor %}
        \t\t\t\t\t</div>

                        </div>
                    </div>
                    <!--end:: Widgets/Order Statistics-->
                </div>
            {% endif %}
        </div>
        <div class=\"row\">
            <div class=\"col-xl-12\">
                <!--begin:: Widgets/Last Updates-->
                <div class=\"kt-portlet kt-portlet--height-fluid\">
                    <div class=\"kt-portlet__head\">
                        <div class=\"kt-portlet__head-label\">
                            <h3 class=\"kt-portlet__head-title\">{{'Orders'|__}}</h3>
                        </div>
                    </div>
                    <div class=\"kt-portlet__body\">
                        <div class=\"kt-datatable\"></div>
                    </div>
                </div>
            </div>
        </div>
        {% elseif this.param.page == 'transactions' %}
            <div class=\"row\">
                <div class=\"col-xl-12\">
                    <!--begin:: Widgets/Last Updates-->
                    <div class=\"kt-portlet kt-portlet--height-fluid\">
                        <div class=\"kt-portlet__head\">
                            <div class=\"kt-portlet__head-label\">
                                <h3 class=\"kt-portlet__head-title\">{{'Transactions'|__}}</h3>
                            </div>
                        </div>
                        <div class=\"kt-portlet__body\">
                            <div class=\"kt-datatable\"></div>
                        </div>
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
            height: 350px !important;
            width: 100% !important;
        }
        .accordion > .card:last-child {
            border-bottom: 1px solid #eee;
        }
    </style>
{% endput %}
{% put scripts %}
<script src=\"{{ 'assets/admin/vendors/custom/geocomplete/jquery.geocomplete.js'|theme }}\" type=\"text/javascript\"></script>
<script src=\"https://maps.googleapis.com/maps/api/js?libraries=places&key={{settings.google.map.key}}\"></script>
<script src=\"./admin/vendors/custom/gmaps/gmaps.js\" type=\"text/javascript\"></script>
<script>
\"use strict\";
var KTAppUserListDatatable = function () {
    // variables
    var datatable;

    // init
    var init = function (type) {
        {% if this.param.page == 'view' %}
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
                }
            ];
        {% elseif this.param.page == 'transactions' %}
            var columns = [
                {
                    field: \"id\",
                    title: \"{{'ID'|__}}\",
                    sortable: false,
                    width: 50,
    \t\t\t\ttemplate: function(data, i) {
    \t\t\t\t\tvar output = '\\
                            <div class=\"kt-user-card-v2 kt-user-card-v2--uncircle\">\\
                                <div class=\"kt-user-card-v2__details\">\\
                                     <a href=\"{{url(\"dashboard/transactions\")}}/' + data.id+ '/view\" class=\"kt-user-card-v2__name\">' + data.id+ '</a>\\
                                 </div>\\
                            </div>';
    \t\t\t\t\treturn output;
    \t\t\t\t},
                },
                {
                    field: \"movement\",
                    title: \"{{'Movement Type'|__}}\",
                    sortable: false,
                    width: 250,
                    template: function(row) {
                        //1 = withdrawl | 2 = deposit | 3 = Deduction from the wallet | 4 = add to wallet | 5 =  Deduction of commission balance | 6 = Add to the commission balance | 7 = Deduction from the balance of packages | 8 = Add  to the balance of packages
                        var status = {
                            1: {
                                'title': '{{\"Withdrawl\"|__}}',
                                'class': 'info'
                            },
                            2: {
                                'title': '{{\"Deposit\"|__}}',
                                'class': 'info'
                            },
                            3: {
                                'title': '{{\"Deduction from the wallet\"|__}}',
                                'class': 'info'
                            },
                            4: {
                                'title': '{{\"Add to wallet\"|__}}',
                                'class': 'info'
                            },
                            5: {
                                'title': '{{\"Deduction of commission balance\"|__}}',
                                'class': 'info'
                            },
                            6: {
                                'title': '{{\"Add to the commission balance\"|__}}',
                                'class': 'info'
                            },
                            7: {
                                'title': '{{\"Deduction from the balance of packages\"|__}}',
                                'class': 'info'
                            },
                            8: {
                                'title': '{{\"Add  to the balance of packages\"|__}}',
                                'class': 'info'
                            },
                        };
                        return '<span class=\"kt-badge kt-badge--' + status[row.movement].class + ' kt-badge--dot\"></span>&nbsp;<a href=\"{{url(\"dashboard/transactions\")}}/' + row.id+ '/view\" class=\"kt-font-bold kt-font-' + status[row.movement].class + '\">' + status[row.movement].title + '</a>';
                    }
                },
                {
                    field: \"date\",
                    title: \"{{'Date'|__}}\",
                    sortable: false,
                    width: 100,
                },
                {
                    field: \"amount\",
                    title: \"{{'Amount'|__}}\",
                    sortable: false,
                    width: 100,
                },
                {
                    field: \"created_at\",
                    title: \"{{'Created On'|__}}\",
                    sortable: false,
                    width: 100,
    \t\t\t\ttemplate: function(data, i) {
    \t\t\t\t\tvar output = '\\
                            <div class=\"kt-user-card-v2 kt-user-card-v2--uncircle\">\\
                                <div class=\"kt-user-card-v2__details\">\\
                                    <a href=\"javascript:;\" class=\"kt-user-card-v2__name\">' + data.created_at_date + '</a>\\
                                    <span class=\"kt-user-card-v2__email\">' + data.created_at_time + '</span>\\
                                </div>\\
                            </div>';
    \t\t\t\t\treturn output;
    \t\t\t\t}
                },
                {
                    field: \"payment_with\",
                    title: \"{{'Received by'|__}}\",
                    sortable: false,
                    width: 100,
    \t\t\t\ttemplate: function(data, i) {
                        if(data.item_id){
        \t\t\t\t\tvar output = '\\
                                <div class=\"kt-user-card-v2 kt-user-card-v2--uncircle\">\\
                                    <div class=\"kt-user-card-v2__details\">\\
                                         <a href=\"{{url(\"dashboard/employees\")}}/' + data.payment_with+ '/transactions\" class=\"kt-user-card-v2__name\">' + data.payment_with_employee+ '</a>\\
                                     </div>\\
                                </div>';
        \t\t\t\t\treturn output;
                        }else{
        \t\t\t\t\treturn '-';
                        }
    \t\t\t\t},
                },
                {
                    field: \"description\",
                    title: \"{{'Description'|__}}\",
                    sortable: false,
                    width: 150,
    \t\t\t\ttemplate: function(data, i) {
                        if(data.description){
        \t\t\t\t\treturn data.description;
                        }else{
        \t\t\t\t\treturn '-';
                        }
    \t\t\t\t}
                },
                {
                    field: \"item_id\",
                    title: \"{{'Shipment'|__}}\",
                    sortable: false,
                    width: 50,
    \t\t\t\ttemplate: function(data, i) {
                        if(data.item_id){
        \t\t\t\t\tvar output = '\\
                                <div class=\"kt-user-card-v2 kt-user-card-v2--uncircle\">\\
                                    <div class=\"kt-user-card-v2__details\">\\
                                         <a href=\"{{url(\"dashboard/shipments\")}}/' + data.item_id+ '/view\" class=\"kt-user-card-v2__name\">#' + data.item_id+ '</a>\\
                                     </div>\\
                                </div>';
        \t\t\t\t\treturn output;
                        }else{
        \t\t\t\t\treturn '-';
                        }
    \t\t\t\t}
                },
            ]
        {% endif %}

        datatable = \$('.kt-datatable').KTDatatable({
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
                        {% if this.param.page == 'view' %}
                            url: '{{url(\"api/shipments\")}}/clientorders',
                        {% elseif this.param.page == 'transactions' %}
                            url: '{{url(\"api/clienttransactions\")}}',
                        {% endif %}
                        params: {
                          id: {{this.param.id}}
                        }
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
            e.preventDefault();
            \$('#chooseEmployee').modal('toggle');
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
        init: function () {
            init();
            search();
            selection();
            selectedStatusUpdate();
            selectedDelete();
            updateTotal();
        },

        reload: function(){
            reload();
        },

        destroy: function(){
            destroy();
        }
    };
}();

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
    KTAppUserListDatatable.init();


    {% if this.param.page == 'view' %}
        {% for address in item.addresses %}

            var map = new GMaps({
                div: '#kt_map_{{address.id}}',
                lat: {{address.lat}},
                lng: {{address.lng}}
            });
            map.addMarker({
                lat: {{address.lat}},
                lng: {{address.lng}},
                title: '{{address.name}}',
                infoWindow: {
                    content: '<p>{{\"Go to\"|__}} <a href=\"{{address.url}}\" target=\"_blank\">{{address.name}}</a></p>'
                }
            });

        {% endfor %}
    {% endif %}
});
</script>
{% endput %}", "/Applications/MAMP/htdocs/test/themes/spotlayer/pages/dashboard/client.htm", "");
    }
}
