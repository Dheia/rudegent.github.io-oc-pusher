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

/* /Applications/MAMP/htdocs/test/themes/spotlayer/pages/home.htm */
class __TwigTemplate_836c153fd730304247340666aac7a65bc4da87597eebedf358703ddbc01c68c1 extends \Twig\Template
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
        echo "<!-- begin:: Page -->
<div class=\"kt-grid kt-grid--ver kt-grid--root kt-page\">
    <div class=\"kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v1\" id=\"kt_login\">
     <div class=\"kt-grid__item kt-grid__item--fluid kt-grid kt-grid--desktop kt-grid--ver-desktop kt-grid--hor-tablet-and-mobile\">

         <!--begin::Content-->
         <div class=\"kt-grid__item kt-grid__item--fluid  kt-grid__item--order-tablet-and-mobile-1  kt-login__wrapper\">

             <!--begin::Body-->
             <div class=\"kt-login__body\">

                 <!--begin::Signin-->
                 <div class=\"kt-login__form\">
                     <div class=\"kt-login__title\">
                         <a class=\"kt-login__logo \" href=\"";
        // line 15
        echo url("/");
        echo "\">
                             <img style=\"height:90px;width:auto\" src=\"";
        // line 16
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "logo", [], "any", false, false, false, 16)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "logo", [], "any", false, false, false, 16), "path", [], "any", false, false, false, 16), "html", null, true);
        } else {
            echo "./admin/media/logos/logo.svg";
        }
        echo "\">
                         </a>
                         <h3 class=\"kt-margin-t-30\">";
        // line 18
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sign In"]);
        echo "</h3>
                     </div>

                     <!--begin::Form-->
                         <form class=\"kt-form\" action=\"\">
                             ";
        // line 23
        echo call_user_func_array($this->env->getFunction('form_token')->getCallable(), ["token"]);
        echo "
                             ";
        // line 24
        echo call_user_func_array($this->env->getFunction('form_sessionKey')->getCallable(), ["sessionKey"]);
        echo "
                             ";
        $_type = isset($context["type"]) ? $context["type"] : null;        $_message = isset($context["message"]) ? $context["message"] : null;        // line 25
        foreach (Flash::getMessages() as $type => $messages) {
            foreach ($messages as $message) {
                $context["type"] = $type;                $context["message"] = $message;                // line 26
                echo "                                <div class=\"kt-alert kt-alert--outline alert alert-";
                if ((($context["type"] ?? null) == "error")) {
                    echo "danger";
                } else {
                    echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
                }
                echo " alert-dismissible\" role=\"alert\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"";
                // line 27
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Close"]);
                echo "\"></button>
                                    <span>";
                // line 28
                echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
                echo "</span>
                                </div>
                             ";
            }
        }
        $context["type"] = $_type;        $context["message"] = $_message;        // line 31
        echo "                             <div class=\"form-group\">
                                 <input class=\"form-control\" type=\"text\" placeholder=\"";
        // line 32
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), [($context["loginAttributeLabel"] ?? null)]);
        echo "\" name=\"login\" id=\"userSigninLogin\" autofocus autocomplete=\"new-password\">
                             </div>
                             <div class=\"form-group\">
                                 <input class=\"form-control form-control-last\" type=\"Password\" placeholder=\"";
        // line 35
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Password"]);
        echo "\" id=\"userSigninPassword\" name=\"password\" autocomplete=\"new-password\">
                             </div>
                             <!--begin::Action-->
                             <div class=\"kt-login__actions\">
                                 ";
        // line 39
        if ((($context["rememberLoginMode"] ?? null) == "ask")) {
            // line 40
            echo "                                 <label class=\"kt-checkbox\">
                                     <input name=\"remember\" type=\"checkbox\" value=\"1\"> ";
            // line 41
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Remember me"]);
            echo "
                                     <span></span>
                                 </label>
                                 ";
        }
        // line 45
        echo "                                 <button id=\"kt_login_signin_submit\" class=\"btn btn-primary btn-elevate kt-login__btn-primary\">";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sign In"]);
        echo "</button>
                             </div>
                         </form>
                     <!--end::Form-->

                     <!--begin::Divider-->
                     <div class=\"kt-login__divider\">
                         <div class=\"kt-divider\">
                             <span></span>
                             <span>";
        // line 54
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["OR"]);
        echo "</span>
                             <span></span>
                         </div>
                     </div>
                     <!--end::Divider-->

                     <!--begin::Options-->
                      <div class=\"row\">
                         <div class=\"col-xl-12\">
                             <!--begin:: Widgets/Applications/User/Profile3-->
                             <div class=\"kt-portlet kt-portlet--height-fluid\">
                                 <div class=\"kt-portlet__body\">
                                     <div class=\"kt-widget kt-widget--user-profile-3\">
                                         <div class=\"kt-widget__bottom\">
                                             <div class=\"kt-widget__item\">
                                                 <div class=\"kt-widget__icon\">
                                                     <i class=\"flaticon-user-settings\"></i>
                                                 </div>
                                                 <div class=\"kt-widget__details\">
                                                     <span class=\"kt-widget__title\">";
        // line 73
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Admin"]);
        echo "</span>
                                                     <a href=\"javascript:;\" id=\"admin\" class=\"kt-widget__value kt-font-brand signin_as\">";
        // line 74
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Login as"]);
        echo "</a>
                                                 </div>
                                             </div>

                                             <div class=\"kt-widget__item\">
                                                 <div class=\"kt-widget__icon\">
                                                     <i class=\"flaticon-businesswoman\"></i>
                                                 </div>
                                                 <div class=\"kt-widget__details\">
                                                     <span class=\"kt-widget__title\">";
        // line 83
        echo "Employee";
        echo "</span>
                                                     <a href=\"javascript:;\" id=\"employee\" class=\"kt-widget__value kt-font-brand signin_as\">";
        // line 84
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Login as"]);
        echo "</a>
                                                 </div>
                                             </div>

                                             <div class=\"kt-widget__item\">
                                                 <div class=\"kt-widget__icon\">
                                                     <i class=\"flaticon-truck\"></i>
                                                 </div>
                                                 <div class=\"kt-widget__details\">
                                                     <span class=\"kt-widget__title\">";
        // line 93
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Driver"]);
        echo "</span>
                                                     <a href=\"javascript:;\" id=\"driver\" class=\"kt-widget__value kt-font-brand signin_as\">";
        // line 94
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Login as"]);
        echo "</a>
                                                 </div>
                                             </div>

                                             <div class=\"kt-widget__item\">
                                                 <div class=\"kt-widget__icon\">
                                                     <i class=\"flaticon-avatar\"></i>
                                                 </div>
                                                 <div class=\"kt-widget__details\">
                                                     <span class=\"kt-widget__title\">";
        // line 103
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Client"]);
        echo "</span>
                                                     <a href=\"javascript:;\" id=\"client\" class=\"kt-widget__value kt-font-brand signin_as\">";
        // line 104
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Login as"]);
        echo "</a>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <!--end:: Widgets/Applications/User/Profile3-->
                         </div>
                     </div>
                     <!--end::Options-->
                 </div>
                 <!--end::Signin-->
             </div>
             <!--end::Body-->
         </div>
         <!--end::Content-->
     </div>
    </div>
</div>
<!-- end:: Page -->
 <!-- Modal -->
 <div class=\"modal fade\" id=\"kt_modal_6\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
     <div class=\"modal-dialog modal-dialog-centered modal-lg\" role=\"document\">
         <div class=\"modal-content\">
             <div class=\"modal-header\">
                 <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">";
        // line 130
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Terms and conditions"]);
        echo "</h5>
                 <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                 </button>
             </div>
             <div class=\"modal-body\">
                 <div class=\"kt-scroll\" data-scroll=\"true\" data-height=\"200\">
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                 </div>
             </div>
             <div class=\"modal-footer\">
                 <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">";
        // line 144
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Don't Agree"]);
        echo "</button>
                 <button type=\"button\" class=\"btn btn-primary\" id=\"agree\" data-dismiss=\"modal\">";
        // line 145
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Agree"]);
        echo "</button>
             </div>
         </div>
     </div>
 </div>
 ";
        // line 150
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('styles'        );
        // line 151
        echo "     <style>
         .kt-header__topbar-item--langs {
             display: -webkit-box;
             display: -ms-flexbox;
             display: flex;
             -webkit-box-flex: 1;
             -ms-flex: 1;
             flex: 1;
             width: 100%;
             -webkit-box-align: center;
             -ms-flex-align: center;
             align-items: center;
             -webkit-box-pack: center;
             -ms-flex-pack: center;
             justify-content: center;
         }
         .kt-header__topbar-item--langs .kt-header__topbar-icon img {
             width: 25px;
         }
         .kt-login__logo img {
            width: 80px;
        }
        .kt-widget.kt-widget--user-profile-3 .kt-widget__bottom {
            margin-top: 0 !important;
            border-top: 0 !important;
        }
        .kt-widget.kt-widget--user-profile-3 .kt-widget__bottom .kt-widget__item {
            padding: 1rem 1.5rem 0 0px !important;
        }
     </style>
 ";
        // line 150
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
        // line 182
        echo " ";
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 183
        echo " <script type=\"text/javascript\">
     \"use strict\";

    // Class Definition
    var KTLoginGeneral = function() {

        var login = \$('#kt_login');

        var showErrorMsg = function(form, type, msg) {
            var alert = \$('<div class=\"kt-alert kt-alert--outline alert alert-' + type + ' alert-dismissible\" role=\"alert\">\\
    \t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"></button>\\
    \t\t\t<span></span>\\
    \t\t</div>');

            form.find('.alert').remove();
            alert.prependTo(form);
            //alert.animateClass('fadeIn animated');
            KTUtil.animateClass(alert[0], 'fadeIn animated');
            alert.find('span').html(msg);
        }

        // Private Functions
        var displaySignUpForm = function() {
            login.removeClass('kt-login--forgot');
            login.removeClass('kt-login--signin');

            login.addClass('kt-login--signup');
            KTUtil.animateClass(login.find('.kt-login__signup')[0], 'flipInX animated');
        }

        var displaySignInForm = function() {
            login.removeClass('kt-login--forgot');
            login.removeClass('kt-login--signup');

            login.addClass('kt-login--signin');
            KTUtil.animateClass(login.find('.kt-login__signin')[0], 'flipInX animated');
            //login.find('.kt-login__signin').animateClass('flipInX animated');
        }

        var displayForgotForm = function() {
            login.removeClass('kt-login--signin');
            login.removeClass('kt-login--signup');

            login.addClass('kt-login--forgot');
            //login.find('.kt-login--forgot').animateClass('flipInX animated');
            KTUtil.animateClass(login.find('.kt-login__forgot')[0], 'flipInX animated');

        }

        var handleFormSwitch = function() {
            \$('#kt_login_forgot').click(function(e) {
                e.preventDefault();
                displayForgotForm();
            });

            \$('#kt_login_forgot_cancel').click(function(e) {
                e.preventDefault();
                displaySignInForm();
            });

            \$('#kt_login_signup').click(function(e) {
                e.preventDefault();
                displaySignUpForm();
            });

            \$('#kt_login_signup_cancel').click(function(e) {
                e.preventDefault();
                displaySignInForm();
            });
        }

        var handleSignInFormSubmit = function() {
            \$('#kt_login_signin_submit').click(function(e) {
                e.preventDefault();
                var btn = \$(this);
                var form = \$(this).closest('form');

                form.validate({
                    rules: {
                        login: {
                            required: true
                        },
                        password: {
                            required: true
                        }
                    },
                    messages: {
                        \"login\": {
                            required: '";
        // line 271
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["This field is required!"]);
        echo "',
                        },
                        \"password\": {
                            required: '";
        // line 274
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["This field is required!"]);
        echo "',
                        },
                    }
                });

                if (!form.valid()) {
                    return;
                }

                btn.addClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', true);


                \$.request('onSignin', {
                    data: {login: \$('#userSigninLogin').val(), password: \$('#userSigninPassword').val()},
                    error: function(e,response) {
                        btn.removeClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', false);                        if(typeof e.responseJSON !== 'undefined'){
                            showErrorMsg(form, 'danger', e.responseJSON.X_OCTOBER_ERROR_MESSAGE);
                        }else{
                            showErrorMsg(form, 'danger', e.responseText);
                        }
                    },
                    success: function(response, status, xhr, \$form) {
                    \t// similate 2s delay
                    \tsetTimeout(function() {
    \t                    btn.removeClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', false);
                           showErrorMsg(form, 'success', '";
        // line 299
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Correct, you are being redirect"]);
        echo ".');
                           location.href = \"";
        // line 300
        echo url("dashboard");
        echo "\";
                        }, 2000);
                    }
                });
            });
        }

        var handleSignUpFormSubmit = function() {
            \$('#kt_login_signup_submit').click(function(e) {
                e.preventDefault();

                var btn = \$(this);
                var form = \$(this).closest('form');

                form.validate({
                    rules: {
                        fullname: {
                            required: true
                        },
                        email: {
                            required: true,
                            email: true
                        },
                        password: {
                            required: true
                        },
                        rpassword: {
                            required: true
                        },
                        agree: {
                            required: true
                        }
                    }
                });

                if (!form.valid()) {
                    return;
                }

                btn.addClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', true);

                \$.request('onRegister', {
                    ";
        // line 342
        if ((($context["loginAttribute"] ?? null) == "username")) {
            // line 343
            echo "                        data: {name: \$('#registerName').val(), email: \$('#registerEmail').val(), username: \$('#registerUsername').val(), password: \$('#registerPassword').val(), password_confirmation: \$('#rpassword').val()},
                    ";
        } else {
            // line 345
            echo "                        data: {name: \$('#registerName').val(), email: \$('#registerEmail').val(), password: \$('#registerPassword').val(), password_confirmation: \$('#rpassword').val()},
                    ";
        }
        // line 347
        echo "                    error: function(e,response) {
                        btn.removeClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', false);
                        showErrorMsg(form, 'danger', e.responseJSON.X_OCTOBER_ERROR_MESSAGE);
                    },
                    success: function(response, status, xhr, \$form) {
                    \t// similate 2s delay
                    \tsetTimeout(function() {
    \t                    btn.removeClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', false);
                            ";
        // line 355
        if ((($context["requireActivation"] ?? null) && (null === ($context["automaticActivation"] ?? null)))) {
            // line 356
            echo "    \t                       showErrorMsg(form, 'success', '";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Thank you. To complete your registration please check your email"]);
            echo ".');
                            ";
        } else {
            // line 358
            echo "                               showErrorMsg(form, 'success', '";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Correct, you are being redirect"]);
            echo ".');
                               location.href = \"";
            // line 359
            echo url("dashboard");
            echo "\";
                           ";
        }
        // line 361
        echo "                        }, 2000);
                    }
                });
            });
        }

        var handleForgotFormSubmit = function() {
            \$('#kt_login_forgot_submit').click(function(e) {
                e.preventDefault();

                var btn = \$(this);
                var form = \$(this).closest('form');

                form.validate({
                    rules: {
                        email: {
                            required: true,
                            email: true
                        }
                    }
                });

                if (!form.valid()) {
                    return;
                }

                btn.addClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', true);

                \$.request('onRestorePassword', {
                    data: {email: \$('#userRestoreEmail').val()},
                    error: function(e,response) {
                        btn.removeClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', false);
                        showErrorMsg(form, 'danger', e.responseJSON.X_OCTOBER_ERROR_MESSAGE);
                    },
                    success: function(response, status, xhr, \$form) {
                    \t// similate 2s delay
                    \tsetTimeout(function() {
\t                           btn.removeClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', false);
                               showErrorMsg(form, 'success', '";
        // line 399
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cool! Password recovery instruction has been sent to your email"]);
        echo ".');
                        }, 2000);
                    }
                });
            });
        }

        // Public Functions
        return {
            // public functions
            init: function() {
                handleFormSwitch();
                handleSignInFormSubmit();
                handleSignUpFormSubmit();
                handleForgotFormSubmit();
            }
        };
    }();

     // Class Initialization
     KTUtil.ready(function () {
         KTLoginGeneral.init();
         \$('body').on('click','#agree', function(e){
             \$( \"#agreement\" ).prop( \"checked\", true );
         });


         \$('body').on('click','.signin_as', function(e){
             var type = \$(this).attr('id');
             if(type == 'admin'){
                 \$('#userSigninLogin').val('admin');
                 \$('#userSigninPassword').val('123456');
                 \$('#kt_login_signin_submit').trigger('click');
             }else if(type == 'employee'){
                 \$('#userSigninLogin').val('employee');
                 \$('#userSigninPassword').val('123456');
                 \$('#kt_login_signin_submit').trigger('click');
             }else if(type == 'driver'){
                 \$('#userSigninLogin').val('driver');
                 \$('#userSigninPassword').val('123456');
                 \$('#kt_login_signin_submit').trigger('click');
             }else if(type == 'client'){
                 \$('#userSigninLogin').val('client');
                 \$('#userSigninPassword').val('123456');
                 \$('#kt_login_signin_submit').trigger('click');
             }
         });
     });
 </script>
 ";
        // line 182
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/test/themes/spotlayer/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  620 => 182,  568 => 399,  528 => 361,  523 => 359,  518 => 358,  512 => 356,  510 => 355,  500 => 347,  496 => 345,  492 => 343,  490 => 342,  445 => 300,  441 => 299,  413 => 274,  407 => 271,  317 => 183,  314 => 182,  312 => 150,  280 => 151,  278 => 150,  270 => 145,  266 => 144,  249 => 130,  220 => 104,  216 => 103,  204 => 94,  200 => 93,  188 => 84,  184 => 83,  172 => 74,  168 => 73,  146 => 54,  133 => 45,  126 => 41,  123 => 40,  121 => 39,  114 => 35,  108 => 32,  105 => 31,  98 => 28,  94 => 27,  85 => 26,  82 => 25,  78 => 24,  74 => 23,  66 => 18,  57 => 16,  53 => 15,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- begin:: Page -->
<div class=\"kt-grid kt-grid--ver kt-grid--root kt-page\">
    <div class=\"kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v1\" id=\"kt_login\">
     <div class=\"kt-grid__item kt-grid__item--fluid kt-grid kt-grid--desktop kt-grid--ver-desktop kt-grid--hor-tablet-and-mobile\">

         <!--begin::Content-->
         <div class=\"kt-grid__item kt-grid__item--fluid  kt-grid__item--order-tablet-and-mobile-1  kt-login__wrapper\">

             <!--begin::Body-->
             <div class=\"kt-login__body\">

                 <!--begin::Signin-->
                 <div class=\"kt-login__form\">
                     <div class=\"kt-login__title\">
                         <a class=\"kt-login__logo \" href=\"{{url('/')}}\">
                             <img style=\"height:90px;width:auto\" src=\"{% if settings.logo %}{{ settings.logo.path }}{% else %}./admin/media/logos/logo.svg{% endif %}\">
                         </a>
                         <h3 class=\"kt-margin-t-30\">{{\"Sign In\"|__}}</h3>
                     </div>

                     <!--begin::Form-->
                         <form class=\"kt-form\" action=\"\">
                             {{form_token()}}
                             {{form_sessionKey()}}
                             {% flash %}
                                <div class=\"kt-alert kt-alert--outline alert alert-{% if type == 'error' %}danger{% else %}{{type}}{% endif %} alert-dismissible\" role=\"alert\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"{{'Close'|__}}\"></button>
                                    <span>{{ message }}</span>
                                </div>
                             {% endflash %}
                             <div class=\"form-group\">
                                 <input class=\"form-control\" type=\"text\" placeholder=\"{{ loginAttributeLabel|__ }}\" name=\"login\" id=\"userSigninLogin\" autofocus autocomplete=\"new-password\">
                             </div>
                             <div class=\"form-group\">
                                 <input class=\"form-control form-control-last\" type=\"Password\" placeholder=\"{{'Password'|__}}\" id=\"userSigninPassword\" name=\"password\" autocomplete=\"new-password\">
                             </div>
                             <!--begin::Action-->
                             <div class=\"kt-login__actions\">
                                 {% if rememberLoginMode == 'ask' %}
                                 <label class=\"kt-checkbox\">
                                     <input name=\"remember\" type=\"checkbox\" value=\"1\"> {{'Remember me'|__}}
                                     <span></span>
                                 </label>
                                 {% endif %}
                                 <button id=\"kt_login_signin_submit\" class=\"btn btn-primary btn-elevate kt-login__btn-primary\">{{'Sign In'|__}}</button>
                             </div>
                         </form>
                     <!--end::Form-->

                     <!--begin::Divider-->
                     <div class=\"kt-login__divider\">
                         <div class=\"kt-divider\">
                             <span></span>
                             <span>{{\"OR\"|__}}</span>
                             <span></span>
                         </div>
                     </div>
                     <!--end::Divider-->

                     <!--begin::Options-->
                      <div class=\"row\">
                         <div class=\"col-xl-12\">
                             <!--begin:: Widgets/Applications/User/Profile3-->
                             <div class=\"kt-portlet kt-portlet--height-fluid\">
                                 <div class=\"kt-portlet__body\">
                                     <div class=\"kt-widget kt-widget--user-profile-3\">
                                         <div class=\"kt-widget__bottom\">
                                             <div class=\"kt-widget__item\">
                                                 <div class=\"kt-widget__icon\">
                                                     <i class=\"flaticon-user-settings\"></i>
                                                 </div>
                                                 <div class=\"kt-widget__details\">
                                                     <span class=\"kt-widget__title\">{{'Admin'|__}}</span>
                                                     <a href=\"javascript:;\" id=\"admin\" class=\"kt-widget__value kt-font-brand signin_as\">{{'Login as'|__}}</a>
                                                 </div>
                                             </div>

                                             <div class=\"kt-widget__item\">
                                                 <div class=\"kt-widget__icon\">
                                                     <i class=\"flaticon-businesswoman\"></i>
                                                 </div>
                                                 <div class=\"kt-widget__details\">
                                                     <span class=\"kt-widget__title\">{{'Employee'}}</span>
                                                     <a href=\"javascript:;\" id=\"employee\" class=\"kt-widget__value kt-font-brand signin_as\">{{'Login as'|__}}</a>
                                                 </div>
                                             </div>

                                             <div class=\"kt-widget__item\">
                                                 <div class=\"kt-widget__icon\">
                                                     <i class=\"flaticon-truck\"></i>
                                                 </div>
                                                 <div class=\"kt-widget__details\">
                                                     <span class=\"kt-widget__title\">{{'Driver'|__}}</span>
                                                     <a href=\"javascript:;\" id=\"driver\" class=\"kt-widget__value kt-font-brand signin_as\">{{'Login as'|__}}</a>
                                                 </div>
                                             </div>

                                             <div class=\"kt-widget__item\">
                                                 <div class=\"kt-widget__icon\">
                                                     <i class=\"flaticon-avatar\"></i>
                                                 </div>
                                                 <div class=\"kt-widget__details\">
                                                     <span class=\"kt-widget__title\">{{'Client'|__}}</span>
                                                     <a href=\"javascript:;\" id=\"client\" class=\"kt-widget__value kt-font-brand signin_as\">{{'Login as'|__}}</a>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <!--end:: Widgets/Applications/User/Profile3-->
                         </div>
                     </div>
                     <!--end::Options-->
                 </div>
                 <!--end::Signin-->
             </div>
             <!--end::Body-->
         </div>
         <!--end::Content-->
     </div>
    </div>
</div>
<!-- end:: Page -->
 <!-- Modal -->
 <div class=\"modal fade\" id=\"kt_modal_6\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
     <div class=\"modal-dialog modal-dialog-centered modal-lg\" role=\"document\">
         <div class=\"modal-content\">
             <div class=\"modal-header\">
                 <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">{{'Terms and conditions'|__}}</h5>
                 <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                 </button>
             </div>
             <div class=\"modal-body\">
                 <div class=\"kt-scroll\" data-scroll=\"true\" data-height=\"200\">
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                 </div>
             </div>
             <div class=\"modal-footer\">
                 <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">{{\"Don't Agree\"|__}}</button>
                 <button type=\"button\" class=\"btn btn-primary\" id=\"agree\" data-dismiss=\"modal\">{{'Agree'|__}}</button>
             </div>
         </div>
     </div>
 </div>
 {% put styles %}
     <style>
         .kt-header__topbar-item--langs {
             display: -webkit-box;
             display: -ms-flexbox;
             display: flex;
             -webkit-box-flex: 1;
             -ms-flex: 1;
             flex: 1;
             width: 100%;
             -webkit-box-align: center;
             -ms-flex-align: center;
             align-items: center;
             -webkit-box-pack: center;
             -ms-flex-pack: center;
             justify-content: center;
         }
         .kt-header__topbar-item--langs .kt-header__topbar-icon img {
             width: 25px;
         }
         .kt-login__logo img {
            width: 80px;
        }
        .kt-widget.kt-widget--user-profile-3 .kt-widget__bottom {
            margin-top: 0 !important;
            border-top: 0 !important;
        }
        .kt-widget.kt-widget--user-profile-3 .kt-widget__bottom .kt-widget__item {
            padding: 1rem 1.5rem 0 0px !important;
        }
     </style>
 {% endput %}
 {% put scripts %}
 <script type=\"text/javascript\">
     \"use strict\";

    // Class Definition
    var KTLoginGeneral = function() {

        var login = \$('#kt_login');

        var showErrorMsg = function(form, type, msg) {
            var alert = \$('<div class=\"kt-alert kt-alert--outline alert alert-' + type + ' alert-dismissible\" role=\"alert\">\\
    \t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"></button>\\
    \t\t\t<span></span>\\
    \t\t</div>');

            form.find('.alert').remove();
            alert.prependTo(form);
            //alert.animateClass('fadeIn animated');
            KTUtil.animateClass(alert[0], 'fadeIn animated');
            alert.find('span').html(msg);
        }

        // Private Functions
        var displaySignUpForm = function() {
            login.removeClass('kt-login--forgot');
            login.removeClass('kt-login--signin');

            login.addClass('kt-login--signup');
            KTUtil.animateClass(login.find('.kt-login__signup')[0], 'flipInX animated');
        }

        var displaySignInForm = function() {
            login.removeClass('kt-login--forgot');
            login.removeClass('kt-login--signup');

            login.addClass('kt-login--signin');
            KTUtil.animateClass(login.find('.kt-login__signin')[0], 'flipInX animated');
            //login.find('.kt-login__signin').animateClass('flipInX animated');
        }

        var displayForgotForm = function() {
            login.removeClass('kt-login--signin');
            login.removeClass('kt-login--signup');

            login.addClass('kt-login--forgot');
            //login.find('.kt-login--forgot').animateClass('flipInX animated');
            KTUtil.animateClass(login.find('.kt-login__forgot')[0], 'flipInX animated');

        }

        var handleFormSwitch = function() {
            \$('#kt_login_forgot').click(function(e) {
                e.preventDefault();
                displayForgotForm();
            });

            \$('#kt_login_forgot_cancel').click(function(e) {
                e.preventDefault();
                displaySignInForm();
            });

            \$('#kt_login_signup').click(function(e) {
                e.preventDefault();
                displaySignUpForm();
            });

            \$('#kt_login_signup_cancel').click(function(e) {
                e.preventDefault();
                displaySignInForm();
            });
        }

        var handleSignInFormSubmit = function() {
            \$('#kt_login_signin_submit').click(function(e) {
                e.preventDefault();
                var btn = \$(this);
                var form = \$(this).closest('form');

                form.validate({
                    rules: {
                        login: {
                            required: true
                        },
                        password: {
                            required: true
                        }
                    },
                    messages: {
                        \"login\": {
                            required: '{{\"This field is required!\"|__}}',
                        },
                        \"password\": {
                            required: '{{\"This field is required!\"|__}}',
                        },
                    }
                });

                if (!form.valid()) {
                    return;
                }

                btn.addClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', true);


                \$.request('onSignin', {
                    data: {login: \$('#userSigninLogin').val(), password: \$('#userSigninPassword').val()},
                    error: function(e,response) {
                        btn.removeClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', false);                        if(typeof e.responseJSON !== 'undefined'){
                            showErrorMsg(form, 'danger', e.responseJSON.X_OCTOBER_ERROR_MESSAGE);
                        }else{
                            showErrorMsg(form, 'danger', e.responseText);
                        }
                    },
                    success: function(response, status, xhr, \$form) {
                    \t// similate 2s delay
                    \tsetTimeout(function() {
    \t                    btn.removeClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', false);
                           showErrorMsg(form, 'success', '{{\"Correct, you are being redirect\"|__}}.');
                           location.href = \"{{url('dashboard')}}\";
                        }, 2000);
                    }
                });
            });
        }

        var handleSignUpFormSubmit = function() {
            \$('#kt_login_signup_submit').click(function(e) {
                e.preventDefault();

                var btn = \$(this);
                var form = \$(this).closest('form');

                form.validate({
                    rules: {
                        fullname: {
                            required: true
                        },
                        email: {
                            required: true,
                            email: true
                        },
                        password: {
                            required: true
                        },
                        rpassword: {
                            required: true
                        },
                        agree: {
                            required: true
                        }
                    }
                });

                if (!form.valid()) {
                    return;
                }

                btn.addClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', true);

                \$.request('onRegister', {
                    {% if loginAttribute == \"username\" %}
                        data: {name: \$('#registerName').val(), email: \$('#registerEmail').val(), username: \$('#registerUsername').val(), password: \$('#registerPassword').val(), password_confirmation: \$('#rpassword').val()},
                    {% else %}
                        data: {name: \$('#registerName').val(), email: \$('#registerEmail').val(), password: \$('#registerPassword').val(), password_confirmation: \$('#rpassword').val()},
                    {% endif %}
                    error: function(e,response) {
                        btn.removeClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', false);
                        showErrorMsg(form, 'danger', e.responseJSON.X_OCTOBER_ERROR_MESSAGE);
                    },
                    success: function(response, status, xhr, \$form) {
                    \t// similate 2s delay
                    \tsetTimeout(function() {
    \t                    btn.removeClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', false);
                            {% if (requireActivation and automaticActivation is null) %}
    \t                       showErrorMsg(form, 'success', '{{\"Thank you. To complete your registration please check your email\"|__}}.');
                            {% else %}
                               showErrorMsg(form, 'success', '{{\"Correct, you are being redirect\"|__}}.');
                               location.href = \"{{url('dashboard')}}\";
                           {% endif %}
                        }, 2000);
                    }
                });
            });
        }

        var handleForgotFormSubmit = function() {
            \$('#kt_login_forgot_submit').click(function(e) {
                e.preventDefault();

                var btn = \$(this);
                var form = \$(this).closest('form');

                form.validate({
                    rules: {
                        email: {
                            required: true,
                            email: true
                        }
                    }
                });

                if (!form.valid()) {
                    return;
                }

                btn.addClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', true);

                \$.request('onRestorePassword', {
                    data: {email: \$('#userRestoreEmail').val()},
                    error: function(e,response) {
                        btn.removeClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', false);
                        showErrorMsg(form, 'danger', e.responseJSON.X_OCTOBER_ERROR_MESSAGE);
                    },
                    success: function(response, status, xhr, \$form) {
                    \t// similate 2s delay
                    \tsetTimeout(function() {
\t                           btn.removeClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', false);
                               showErrorMsg(form, 'success', '{{\"Cool! Password recovery instruction has been sent to your email\"|__}}.');
                        }, 2000);
                    }
                });
            });
        }

        // Public Functions
        return {
            // public functions
            init: function() {
                handleFormSwitch();
                handleSignInFormSubmit();
                handleSignUpFormSubmit();
                handleForgotFormSubmit();
            }
        };
    }();

     // Class Initialization
     KTUtil.ready(function () {
         KTLoginGeneral.init();
         \$('body').on('click','#agree', function(e){
             \$( \"#agreement\" ).prop( \"checked\", true );
         });


         \$('body').on('click','.signin_as', function(e){
             var type = \$(this).attr('id');
             if(type == 'admin'){
                 \$('#userSigninLogin').val('admin');
                 \$('#userSigninPassword').val('123456');
                 \$('#kt_login_signin_submit').trigger('click');
             }else if(type == 'employee'){
                 \$('#userSigninLogin').val('employee');
                 \$('#userSigninPassword').val('123456');
                 \$('#kt_login_signin_submit').trigger('click');
             }else if(type == 'driver'){
                 \$('#userSigninLogin').val('driver');
                 \$('#userSigninPassword').val('123456');
                 \$('#kt_login_signin_submit').trigger('click');
             }else if(type == 'client'){
                 \$('#userSigninLogin').val('client');
                 \$('#userSigninPassword').val('123456');
                 \$('#kt_login_signin_submit').trigger('click');
             }
         });
     });
 </script>
 {% endput %}", "/Applications/MAMP/htdocs/test/themes/spotlayer/pages/home.htm", "");
    }
}
