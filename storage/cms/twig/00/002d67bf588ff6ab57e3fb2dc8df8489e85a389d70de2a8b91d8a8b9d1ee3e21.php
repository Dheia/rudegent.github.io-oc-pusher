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

/* /Applications/MAMP/htdocs/test/themes/spotlayer/pages/dashboard/reports-print.htm */
class __TwigTemplate_9ba82689a6ac7fce1815c3ad2fead41ca2ac49821ee1654cea0d515af0a0b97b extends \Twig\Template
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
        echo "<div id=\"page-wrap\">
    <table width=\"100%\">
        <tr>
            <td style=\"border: 0;  text-align: left\" width=\"18%\">
\t\t\t<div id=\"logo\">
\t\t\t\t<img src='";
        // line 6
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "logo", [], "any", false, false, false, 6)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "logo", [], "any", false, false, false, 6), "path", [], "any", false, false, false, 6), "html", null, true);
        } else {
            echo "./admin/media/logos/logo.svg";
        }
        echo "' border='0' width='190' height='39'>            </td>
    \t\t\t<td style=\"border: 0;  text-align: center\" width=\"56%\">
    \t\t\t\t";
        // line 8
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 8), "tax_number", [], "any", false, false, false, 8)) {
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Tax"]);
            echo ": ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 8), "tax_number", [], "any", false, false, false, 8), "html", null, true);
            echo " </br>";
        }
        // line 9
        echo "    \t\t\t\t";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 9), "company_phone", [], "any", false, false, false, 9)) {
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Phone"]);
            echo ": ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 9), "company_phone", [], "any", false, false, false, 9), "html", null, true);
            echo " </br>";
        }
        // line 10
        echo "    \t\t\t\t";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 10), "primary_email", [], "any", false, false, false, 10)) {
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Email"]);
            echo ": ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 10), "primary_email", [], "any", false, false, false, 10), "html", null, true);
            echo " </br>";
        }
        // line 11
        echo "    \t\t\t\t";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 11), "address", [], "any", false, false, false, 11)) {
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Street"]);
            echo ": ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 11), "address", [], "any", false, false, false, 11), "html", null, true);
        }
        // line 12
        echo "                </td>
                <td style=\"border: 0;  text-align: center\" width=\"48%\">
    \t\t\t</td>
\t\t\t</div>
        </tr>
    </table>
    <hr>
    </br>
    <div id=\"customer\">

        <table id=\"meta\">
            <tr>
                <td rowspan=\"5\" style=\"border: 1px solid white; border-";
        // line 24
        if ((($context["currentLang"] ?? null) == "ar")) {
            echo "left";
        } else {
            echo "right";
        }
        echo ": 1px solid black;text-align: ";
        if ((($context["currentLang"] ?? null) == "ar")) {
            echo "right";
        } else {
            echo "left";
        }
        echo "\" width=\"62%\">
                    ";
        // line 25
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 25), "type", [], "any", false, false, false, 25) == "delayed")) {
            // line 26
            echo "                        <strong class=\"kt-padding-t-40\">";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Shipments Delayed Reports"]);
            echo "</strong>
                    ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 27
($context["this"] ?? null), "param", [], "any", false, false, false, 27), "type", [], "any", false, false, false, 27) == "delivered")) {
            // line 28
            echo "                        <strong class=\"kt-padding-t-40\">";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Shipments Delivered Reports"]);
            echo "</strong>
                    ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 29
($context["this"] ?? null), "param", [], "any", false, false, false, 29), "type", [], "any", false, false, false, 29) == "deposited")) {
            // line 30
            echo "                        <strong class=\"kt-padding-t-40\">";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Transactions Deposited Reports"]);
            echo "</strong>
                    ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 31
($context["this"] ?? null), "param", [], "any", false, false, false, 31), "type", [], "any", false, false, false, 31) == "withdrwal")) {
            // line 32
            echo "                        <strong class=\"kt-padding-t-40\">";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Transactions Withdrawl Reports"]);
            echo "</strong>
                    ";
        }
        // line 34
        echo "\t\t\t\t</td>
            </tr>
            <tr>
                <td class=\"meta-head\"><p style=\"color:white;margin:0\">";
        // line 37
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Date"]);
        echo "</p></td>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["now"] ?? null), twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "dateformat", [], "any", false, false, false, 38)), "html", null, true);
        echo "</td>
            </tr>
        </table>

    </div>
    ";
        // line 43
        if (((((($context["created_at"] ?? null) || ($context["sender_id"] ?? null)) || ($context["employee_id"] ?? null)) || ($context["for_id"] ?? null)) || ($context["status_id"] ?? null))) {
            // line 44
            echo "        </br>
        <div id=\"customer\">

            <table id=\"meta\">
                <tr>
                    ";
            // line 49
            if (($context["created_at"] ?? null)) {
                // line 50
                echo "                        <td class=\"meta-head\"><p style=\"color:white;margin:0\">";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Date"]);
                echo "</p></td>
                        <td>";
                // line 51
                echo twig_escape_filter($this->env, ($context["created_at"] ?? null), "html", null, true);
                echo "</td>
                    ";
            }
            // line 53
            echo "
                    ";
            // line 54
            if (($context["sender_id"] ?? null)) {
                // line 55
                echo "                        <td  style=\"border: 1px solid white; border-";
                if ((($context["currentLang"] ?? null) == "ar")) {
                    echo "left";
                } else {
                    echo "right";
                }
                echo ": 1px solid black;text-align: ";
                if ((($context["currentLang"] ?? null) == "ar")) {
                    echo "right";
                } else {
                    echo "left";
                }
                echo "\" width=\"1%\"></td>

                        <td class=\"meta-head\"><p style=\"color:white;margin:0\">";
                // line 57
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sender"]);
                echo "</p></td>
                        <td>";
                // line 58
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["sender"] ?? null), "name", [], "any", false, false, false, 58)), "html", null, true);
                echo "</td>
                    ";
            }
            // line 60
            echo "
                    ";
            // line 61
            if (($context["employee_id"] ?? null)) {
                // line 62
                echo "                        <td  style=\"border: 1px solid white; border-";
                if ((($context["currentLang"] ?? null) == "ar")) {
                    echo "left";
                } else {
                    echo "right";
                }
                echo ": 1px solid black;text-align: ";
                if ((($context["currentLang"] ?? null) == "ar")) {
                    echo "right";
                } else {
                    echo "left";
                }
                echo "\" width=\"1%\"></td>

                        <td class=\"meta-head\"><p style=\"color:white;margin:0\">";
                // line 64
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Responsiable"]);
                echo "</p></td>
                        <td>";
                // line 65
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["employee"] ?? null), "name", [], "any", false, false, false, 65)), "html", null, true);
                echo "</td>
                    ";
            }
            // line 67
            echo "
                    ";
            // line 68
            if (($context["for_id"] ?? null)) {
                // line 69
                echo "                        <td  style=\"border: 1px solid white; border-";
                if ((($context["currentLang"] ?? null) == "ar")) {
                    echo "left";
                } else {
                    echo "right";
                }
                echo ": 1px solid black;text-align: ";
                if ((($context["currentLang"] ?? null) == "ar")) {
                    echo "right";
                } else {
                    echo "left";
                }
                echo "\" width=\"1%\"></td>

                        <td class=\"meta-head\"><p style=\"color:white;margin:0\">";
                // line 71
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["User"]);
                echo "</p></td>
                        <td>";
                // line 72
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["for"] ?? null), "name", [], "any", false, false, false, 72)), "html", null, true);
                echo "</td>
                    ";
            }
            // line 74
            echo "
                    ";
            // line 75
            if (($context["status_id"] ?? null)) {
                // line 76
                echo "                        <td  style=\"border: 1px solid white; border-";
                if ((($context["currentLang"] ?? null) == "ar")) {
                    echo "left";
                } else {
                    echo "right";
                }
                echo ": 1px solid black;text-align: ";
                if ((($context["currentLang"] ?? null) == "ar")) {
                    echo "right";
                } else {
                    echo "left";
                }
                echo "\" width=\"1%\"></td>

                        <td class=\"meta-head\"><p style=\"color:white;margin:0\">";
                // line 78
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Status"]);
                echo "</p></td>
                        <td>
                            ";
                // line 80
                if ((($context["status_id"] ?? null) == 1)) {
                    // line 81
                    echo "                                ";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Pending"]);
                    echo "
                            ";
                } elseif ((                // line 82
($context["status_id"] ?? null) == 2)) {
                    // line 83
                    echo "                                ";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Canceled"]);
                    echo "
                            ";
                } elseif ((                // line 84
($context["status_id"] ?? null) == 3)) {
                    // line 85
                    echo "                                ";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Paid"]);
                    echo "
                            ";
                } elseif ((                // line 86
($context["status_id"] ?? null) == 4)) {
                    // line 87
                    echo "                                ";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delayed"]);
                    echo "
                            ";
                } elseif ((                // line 88
($context["status_id"] ?? null) == 5)) {
                    // line 89
                    echo "                                ";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delivered"]);
                    echo "
                            ";
                }
                // line 91
                echo "                        </td>
                    ";
            }
            // line 93
            echo "                </tr>
            </table>

        </div>
    ";
        }
        // line 98
        echo "    <table id=\"items\">
        ";
        // line 99
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 99), "category", [], "any", false, false, false, 99) == "shipments")) {
            // line 100
            echo "            <tr>
                <th align=\"center\"><p style=\"color:white;\">";
            // line 101
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["id"]);
            echo "</p></th>
                <th align=\"center\"><p style=\"color:white;\">";
            // line 102
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Created On"]);
            echo "</p></th>
                <th align=\"center\"><p style=\"color:white;\">";
            // line 103
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Payment"]);
            echo "</p></th>
                <th align=\"center\"><p style=\"color:white;\">";
            // line 104
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sender Details"]);
            echo "</p></th>
                <th align=\"center\"><p style=\"color:white;\">";
            // line 105
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Area"]);
            echo "</p></th>
                <th align=\"center\"><p style=\"color:white;\">";
            // line 106
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Office"]);
            echo "</p></th>
                <th align=\"center\"><p style=\"color:white;\">";
            // line 107
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Status"]);
            echo "</p></th>
                <th align=\"center\"><p style=\"color:white;\">";
            // line 108
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Mobile"]);
            echo "</p></th>
                <th align=\"center\"><p style=\"color:white;\">#</p></th>
            </tr>
            ";
            // line 111
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 112
                echo "                <tr>
                    <th align=\"center\" style=\"background:#fff\"><p style=\"margin:0\">";
                // line 113
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 113), "html", null, true);
                echo "</p></th>
                    <th style=\"background:#fff\"><p style=\"margin:0\">";
                // line 114
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "created_at", [], "any", false, false, false, 114), twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "dateformat", [], "any", false, false, false, 114)), "html", null, true);
                echo "</p></th>
                    <th style=\"background:#fff\">
                        ";
                // line 116
                if ((twig_get_attribute($this->env, $this->source, $context["item"], "payment", [], "any", false, false, false, 116) == 1)) {
                    // line 117
                    echo "                            <span class=\"kt-badge kt-badge--success kt-badge--dot\"></span>&nbsp;<span class=\"kt-font-bold kt-font-success\">";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Postpaid"]);
                    echo "</span>
                        ";
                } else {
                    // line 119
                    echo "                            <span class=\"kt-badge kt-badge--info kt-badge--dot\"></span>&nbsp;<span class=\"kt-font-bold kt-font-info\">";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Prepaid"]);
                    echo "</span>
                        ";
                }
                // line 121
                echo "                    </th>

                    ";
                // line 123
                $context["shipping_from_area"] = null;
                // line 124
                echo "                    ";
                $context["shipping_to_area"] = null;
                // line 125
                echo "                    ";
                $context["shipping_from_area_id"] = null;
                // line 126
                echo "                    ";
                $context["shipping_to_area_id"] = null;
                // line 127
                echo "                    ";
                if (twig_get_attribute($this->env, $this->source, $context["item"], "sender_address", [], "any", false, false, false, 127)) {
                    // line 128
                    echo "                        ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "sender_address", [], "any", false, false, false, 128), "area", [], "any", false, false, false, 128)) {
                        // line 129
                        echo "                            ";
                        $context["shipping_from_area"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "sender_address", [], "any", false, false, false, 129), "area", [], "any", false, false, false, 129), "name", [], "any", false, false, false, 129);
                        // line 130
                        echo "                            ";
                        $context["shipping_from_area_id"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "sender_address", [], "any", false, false, false, 130), "area", [], "any", false, false, false, 130), "id", [], "any", false, false, false, 130);
                        // line 131
                        echo "                        ";
                    } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "sender_address", [], "any", false, false, false, 131), "city", [], "any", false, false, false, 131)) {
                        // line 132
                        echo "                            ";
                        $context["shipping_from_area"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "sender_address", [], "any", false, false, false, 132), "city", [], "any", false, false, false, 132), "name", [], "any", false, false, false, 132);
                        // line 133
                        echo "                            ";
                        $context["shipping_from_area_id"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "sender_address", [], "any", false, false, false, 133), "city", [], "any", false, false, false, 133), "id", [], "any", false, false, false, 133);
                        // line 134
                        echo "                        ";
                    } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "sender_address", [], "any", false, false, false, 134), "state", [], "any", false, false, false, 134)) {
                        // line 135
                        echo "                            ";
                        $context["shipping_from_area"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "sender_address", [], "any", false, false, false, 135), "state", [], "any", false, false, false, 135), "name", [], "any", false, false, false, 135);
                        // line 136
                        echo "                            ";
                        $context["shipping_from_area_id"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "sender_address", [], "any", false, false, false, 136), "state", [], "any", false, false, false, 136), "id", [], "any", false, false, false, 136);
                        // line 137
                        echo "                        ";
                    } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "sender_address", [], "any", false, false, false, 137), "country", [], "any", false, false, false, 137)) {
                        // line 138
                        echo "                            ";
                        $context["shipping_from_area"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "sender_address", [], "any", false, false, false, 138), "country", [], "any", false, false, false, 138), "name", [], "any", false, false, false, 138);
                        // line 139
                        echo "                            ";
                        $context["shipping_from_area_id"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "sender_address", [], "any", false, false, false, 139), "country", [], "any", false, false, false, 139), "id", [], "any", false, false, false, 139);
                        // line 140
                        echo "                        ";
                    }
                    // line 141
                    echo "                    ";
                }
                // line 142
                echo "                    ";
                if (twig_get_attribute($this->env, $this->source, $context["item"], "receiver_address", [], "any", false, false, false, 142)) {
                    // line 143
                    echo "                        ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "receiver_address", [], "any", false, false, false, 143), "area", [], "any", false, false, false, 143)) {
                        // line 144
                        echo "                            ";
                        $context["shipping_to_area"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "receiver_address", [], "any", false, false, false, 144), "area", [], "any", false, false, false, 144), "name", [], "any", false, false, false, 144);
                        // line 145
                        echo "                            ";
                        $context["shipping_to_area_id"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "receiver_address", [], "any", false, false, false, 145), "area", [], "any", false, false, false, 145), "id", [], "any", false, false, false, 145);
                        // line 146
                        echo "                        ";
                    } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "sender_address", [], "any", false, false, false, 146), "city", [], "any", false, false, false, 146)) {
                        // line 147
                        echo "                            ";
                        $context["shipping_to_area"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "receiver_address", [], "any", false, false, false, 147), "city", [], "any", false, false, false, 147), "name", [], "any", false, false, false, 147);
                        // line 148
                        echo "                            ";
                        $context["shipping_to_area_id"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "receiver_address", [], "any", false, false, false, 148), "city", [], "any", false, false, false, 148), "id", [], "any", false, false, false, 148);
                        // line 149
                        echo "                        ";
                    } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "sender_address", [], "any", false, false, false, 149), "state", [], "any", false, false, false, 149)) {
                        // line 150
                        echo "                            ";
                        $context["shipping_to_area"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "receiver_address", [], "any", false, false, false, 150), "state", [], "any", false, false, false, 150), "name", [], "any", false, false, false, 150);
                        // line 151
                        echo "                            ";
                        $context["shipping_to_area_id"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "receiver_address", [], "any", false, false, false, 151), "state", [], "any", false, false, false, 151), "id", [], "any", false, false, false, 151);
                        // line 152
                        echo "                        ";
                    } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "sender_address", [], "any", false, false, false, 152), "country", [], "any", false, false, false, 152)) {
                        // line 153
                        echo "                            ";
                        $context["shipping_to_area"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "receiver_address", [], "any", false, false, false, 153), "country", [], "any", false, false, false, 153), "name", [], "any", false, false, false, 153);
                        // line 154
                        echo "                            ";
                        $context["shipping_to_area_id"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "receiver_address", [], "any", false, false, false, 154), "country", [], "any", false, false, false, 154), "id", [], "any", false, false, false, 154);
                        // line 155
                        echo "                        ";
                    }
                    // line 156
                    echo "                    ";
                }
                // line 157
                echo "
        \t\t\t<th align=\"center\" style=\"background:#fff\">
                        <div class=\"kt-user-card-v2 kt-user-card-v2--uncircle\">
                            <div class=\"kt-user-card-v2__details\">
                                <a href=\"javascript:;\" class=\"kt-user-card-v2__name\">";
                // line 161
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "sender", [], "any", false, false, false, 161), "name", [], "any", false, false, false, 161), "html", null, true);
                echo "</a>
                                <span class=\"kt-user-card-v2__email\">";
                // line 162
                echo twig_escape_filter($this->env, ($context["shipping_from_area"] ?? null), "html", null, true);
                echo "</span>
                            </div>
                        </div>
                    </th>
        \t\t\t<th align=\"center\" style=\"background:#fff\"><p style=\"margin:0\">";
                // line 166
                if ((twig_get_attribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 166) == 1)) {
                    echo twig_escape_filter($this->env, ($context["shipping_from_area_id"] ?? null), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, ($context["shipping_to_area_id"] ?? null), "html", null, true);
                }
                echo "</p></th>
        \t\t\t<th align=\"center\" style=\"background:#fff\"><p style=\"margin:0\">";
                // line 167
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "office", [], "any", false, false, false, 167), "name", [], "any", false, false, false, 167), "html", null, true);
                echo "</p></th>
        \t\t\t<th align=\"center\" style=\"background:#fff\"><p style=\"margin:0\"><span class=\"btn btn-bold btn-sm btn-label-";
                // line 168
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "status", [], "any", false, false, false, 168), "color", [], "any", false, false, false, 168), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "status", [], "any", false, false, false, 168), "name", [], "any", false, false, false, 168), "html", null, true);
                echo "</span></p></th>
        \t\t\t<th align=\"center\" style=\"background:#fff\"><p style=\"margin:0\">";
                // line 169
                if ((twig_get_attribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 169) == 1)) {
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "sender", [], "any", false, false, false, 169), "mobile", [], "any", false, false, false, 169), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "receiver", [], "any", false, false, false, 169), "mobile", [], "any", false, false, false, 169), "html", null, true);
                }
                echo "</p></th>
        \t\t\t<th align=\"center\" style=\"background:#fff\"><p style=\"border:1px solid #333;padding:10px;display:block\"></p></th>
                </tr>
            ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 173
                echo "                <tr>
                    <th align=\"center\" style=\"background:#fff;text-align:center;padding:10px 10px 0;\" colspan=\"9\"><p style=\"margin:0\">";
                // line 174
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No orders found"]);
                echo "</p></th>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 177
            echo "        ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 177), "category", [], "any", false, false, false, 177) == "transactions")) {
            // line 178
            echo "
            <tr>
                <th align=\"center\"><p style=\"color:white;\">";
            // line 180
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["id"]);
            echo "</p></th>
                <th align=\"center\"><p style=\"color:white;\">";
            // line 181
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Created On"]);
            echo "</p></th>
                <th align=\"center\"><p style=\"color:white;\">";
            // line 182
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["For"]);
            echo "</p></th>
                <th align=\"center\"><p style=\"color:white;\">";
            // line 183
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Movement"]);
            echo "</p></th>
                <th align=\"center\"><p style=\"color:white;\">";
            // line 184
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Description"]);
            echo "</p></th>
                <th align=\"center\"><p style=\"color:white;\">";
            // line 185
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Amount"]);
            echo "</p></th>
                <th align=\"center\"><p style=\"color:white;\">";
            // line 186
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Date"]);
            echo "</p></th>
                <th align=\"center\"><p style=\"color:white;\">";
            // line 187
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Shipment"]);
            echo "</p></th>
            </tr>
            ";
            // line 189
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 190
                echo "                <tr>
                    <th align=\"center\" style=\"background:#fff\"><p style=\"margin:0\">";
                // line 191
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 191), "html", null, true);
                echo "</p></th>
                    <th style=\"background:#fff\"><p style=\"margin:0\">";
                // line 192
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "created_at", [], "any", false, false, false, 192), twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "dateformat", [], "any", false, false, false, 192)), "html", null, true);
                echo "</p></th>
                    <th style=\"background:#fff\"><p style=\"margin:0\">
                        ";
                // line 194
                if ((twig_get_attribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 194) == 1)) {
                    // line 195
                    echo "                            ";
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "payment_with", [], "any", false, false, false, 195)) {
                        // line 196
                        echo "                                ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "gotit", [], "any", false, false, false, 196), "name", [], "any", false, false, false, 196), "html", null, true);
                        echo " (";
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Employee"]);
                        echo ")
                            ";
                    } else {
                        // line 198
                        echo "                                ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "user", [], "any", false, false, false, 198), "name", [], "any", false, false, false, 198), "html", null, true);
                        echo " (";
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Client"]);
                        echo ")
                            ";
                    }
                    // line 200
                    echo "                        ";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 200) == 3)) {
                    // line 201
                    echo "                            ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "treasury", [], "any", false, false, false, 201), "name", [], "any", false, false, false, 201), "html", null, true);
                    echo " (";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Treasury"]);
                    echo ")
                        ";
                }
                // line 203
                echo "                    </p></th>
                    <th style=\"background:#fff\">
                        ";
                // line 205
                if ((twig_get_attribute($this->env, $this->source, $context["item"], "movement", [], "any", false, false, false, 205) == 1)) {
                    // line 206
                    echo "                            <span class=\"kt-badge kt-badge--info kt-badge--dot\"></span>&nbsp;<span class=\"kt-font-bold kt-font-info\">";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Withdrawl"]);
                    echo "</span>
                        ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 207
$context["item"], "movement", [], "any", false, false, false, 207) == 2)) {
                    // line 208
                    echo "                            <span class=\"kt-badge kt-badge--info kt-badge--dot\"></span>&nbsp;<span class=\"kt-font-bold kt-font-info\">";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Deposit"]);
                    echo "</span>
                        ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 209
$context["item"], "movement", [], "any", false, false, false, 209) == 3)) {
                    // line 210
                    echo "                            <span class=\"kt-badge kt-badge--info kt-badge--dot\"></span>&nbsp;<span class=\"kt-font-bold kt-font-info\">";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Deduction from the wallet"]);
                    echo "</span>
                        ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 211
$context["item"], "movement", [], "any", false, false, false, 211) == 4)) {
                    // line 212
                    echo "                            <span class=\"kt-badge kt-badge--info kt-badge--dot\"></span>&nbsp;<span class=\"kt-font-bold kt-font-info\">";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Add to wallet"]);
                    echo "</span>
                        ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 213
$context["item"], "movement", [], "any", false, false, false, 213) == 5)) {
                    // line 214
                    echo "                            <span class=\"kt-badge kt-badge--info kt-badge--dot\"></span>&nbsp;<span class=\"kt-font-bold kt-font-info\">";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Deduction of commission balance"]);
                    echo "</span>
                        ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 215
$context["item"], "movement", [], "any", false, false, false, 215) == 6)) {
                    // line 216
                    echo "                            <span class=\"kt-badge kt-badge--info kt-badge--dot\"></span>&nbsp;<span class=\"kt-font-bold kt-font-info\">";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Add to the commission balance"]);
                    echo "</span>
                        ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 217
$context["item"], "movement", [], "any", false, false, false, 217) == 7)) {
                    // line 218
                    echo "                            <span class=\"kt-badge kt-badge--info kt-badge--dot\"></span>&nbsp;<span class=\"kt-font-bold kt-font-info\">";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Deduction from the balance of packages"]);
                    echo "</span>
                        ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 219
$context["item"], "movement", [], "any", false, false, false, 219) == 8)) {
                    // line 220
                    echo "                            <span class=\"kt-badge kt-badge--info kt-badge--dot\"></span>&nbsp;<span class=\"kt-font-bold kt-font-info\">";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Add  to the balance of packages"]);
                    echo "</span>
                        ";
                }
                // line 222
                echo "                    </th>
        \t\t\t<th align=\"center\" style=\"background:#fff\"><p style=\"margin:0\">";
                // line 223
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 223), "html", null, true);
                echo "</p></th>
        \t\t\t<th align=\"center\" style=\"background:#fff\"><p style=\"margin:0\">";
                // line 224
                echo call_user_func_array($this->env->getFilter('currency')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["item"], "amount", [], "any", false, false, false, 224)]);
                echo "</p></th>
        \t\t\t<th align=\"center\" style=\"background:#fff\"><p style=\"margin:0\">";
                // line 225
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "date", [], "any", false, false, false, 225), twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "dateformat", [], "any", false, false, false, 225)), "html", null, true);
                echo "</p></th>
        \t\t\t<th align=\"center\" style=\"background:#fff\"><p style=\"margin:0\">";
                // line 226
                if (twig_get_attribute($this->env, $this->source, $context["item"], "item_id", [], "any", false, false, false, 226)) {
                    echo "#";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "item_id", [], "any", false, false, false, 226), "html", null, true);
                } else {
                    echo "-";
                }
                echo "</p></th>
                </tr>
            ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 229
                echo "                <tr>
                    <th align=\"center\" style=\"background:#fff;text-align:center;padding:10px 10px 0;\" colspan=\"7\"><p style=\"margin:0\">";
                // line 230
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No transactions found"]);
                echo "</p></th>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 233
            echo "        ";
        }
        // line 234
        echo "    </table>

    <!--    end related transactions -->

        <div id=\"terms\">
\t\t\t</br></br></br>
\t\t\t<table id=\"signing\">
\t\t\t\t<tr class=\"noBorder\">
\t\t\t\t\t<td align=\"center\" width=\"50%\"><h4>";
        // line 242
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, false, 242), "html", null, true);
        echo "</h4></td>
\t\t\t\t\t<td align=\"center\" width=\"50%\" style=\"padding-top:28px;\"><h4></h4></td>
\t\t\t\t</tr>
\t\t\t\t<tr class=\"noBorder\">
\t\t\t\t\t<td align=\"center\">";
        // line 246
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Printed By"]);
        echo "</td>
\t\t\t\t\t<td align=\"center\">";
        // line 247
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Responsiable"]);
        echo "</td>
\t\t\t\t</tr>
\t\t\t</table>
        </div>
</div>

";
        // line 253
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('styles'        );
        // line 254
        echo "    <style>
    body { background: #fff}

    * { margin: 0; padding: 0; }
    body {
        font: 14px/1.4 Helvetica, Arial, sans-serif;
    }
    #page-wrap { width: 800px; margin: 0 auto; }

    textarea { border: 0; font: 14px Helvetica, Arial, sans-serif; overflow: hidden; resize: none; }
    table { border-collapse: collapse; }
    table td, table th { border: 1px solid black; padding: 5px; }
\ttr.noBorder td {
\t  border: 0;
\t}

\ttd.Border td {
\t  border: 1px;
\t}
    ";
        // line 273
        if ((($context["currentLang"] ?? null) == "ar")) {
            // line 274
            echo "        p,b, strong{
            font-family: Cairo;
            font-weight: bold;
        }
    ";
        }
        // line 279
        echo "
    #header { height: 15px; width: 100%; margin: 20px 0; background: #222; text-align: center; color: white; font: bold 15px Helvetica, Sans-Serif; text-decoration: uppercase; letter-spacing: 20px; padding: 8px 0px; }

    #address { width: 250px; height: 150px; float: left; }
    #customer { overflow: hidden; }

    #logo { text-align: right; float: right; position: relative; margin-top: 25px; border: 1px solid #fff; max-width: 540px; overflow: hidden; }
    #customer-title { font-size: 20px; font-weight: bold; float: left; }

    #meta { margin-top: 1px; width: 100%; float: right; }
    #meta td { text-align: right;  }
    #meta td.meta-head { text-align: left; background: #6c757d; }
    #meta td textarea { width: 100%; height: 20px; text-align: right; }

\t#signing { margin-top: 0px; width: 100%; float: center; }
    #signing td { text-align: center;  }
    #signing td.signing-head { text-align: center; background: #eee; }
    #signing td textarea { width: 100%; height: 20px; text-align: center; }

    #items { clear: both; width: 100%; margin: 30px 0 0 0; border: 1px solid black; }
    #items th { background: #6c757d; }
    #items textarea { width: 80px; height: 50px; }
    #items tr.item-row td {  vertical-align: top; }
    #items td.description { width: 300px; }
    #items td.item-name { width: 175px; }
    #items td.description textarea, #items td.item-name textarea { width: 100%; }
    #items td.total-line { border-right: 0; text-align: ";
        // line 305
        if ((($context["currentLang"] ?? null) == "ar")) {
            echo "left";
        } else {
            echo "right";
        }
        echo "; }
    #items td.total-value { border-left: 0; padding: 10px; }
    #items td.total-value textarea { height: 20px; background: none; }
    #items td.balance { background: #6c757d; }
    #items td.blank { border: 0; }

    #terms { text-align: center; margin: 20px 0 0 0; }
    #terms h5 { text-transform: uppercase; font: 13px Helvetica, Sans-Serif; letter-spacing: 10px; border-bottom: 1px solid black; padding: 0 0 8px 0; margin: 0 0 8px 0; }
    #terms textarea { width: 100%; text-align: center;}



    .delete-wpr { position: relative; }
    .delete { display: block; color: #000; text-decoration: none; position: absolute; background: #EEEEEE; font-weight: bold; padding: 0px 3px; border: 1px solid; top: -6px; left: -22px; font-family: Verdana; font-size: 12px; }

    /* Extra CSS for Print Button*/
    .button {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        overflow: hidden;
        margin-top: 20px;
        padding: 12px 12px;
        cursor: pointer;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        -webkit-transition: all 60ms ease-in-out;
        transition: all 60ms ease-in-out;
        text-align: center;
        white-space: nowrap;
        text-decoration: none !important;

        color: #fff;
        border: 0 none;
        border-radius: 4px;
        font-size: 14px;
        font-weight: 500;
        line-height: 1.3;
        -webkit-appearance: none;
        -moz-appearance: none;

        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-flex: 0;
        -webkit-flex: 0 0 160px;
        -ms-flex: 0 0 160px;
        flex: 0 0 160px;
    }
    .button:hover {
        -webkit-transition: all 60ms ease;
        transition: all 60ms ease;
        opacity: .85;
    }
    .button:active {
        -webkit-transition: all 60ms ease;
        transition: all 60ms ease;
        opacity: .75;
    }
    .button:focus {
        outline: 1px dotted #959595;
        outline-offset: -4px;
    }

    .button.-regular {
        color: #202129;
        background-color: #edeeee;
    }
    .button.-regular:hover {
        color: #202129;
        background-color: #e1e2e2;
        opacity: 1;
    }
    .button.-regular:active {
        background-color: #d5d6d6;
        opacity: 1;
    }

    .button.-dark {
        color: #FFFFFF;
        background: #333030;
    }
    .button.-dark:focus {
        outline: 1px dotted white;
        outline-offset: -4px;
    }

    @media print
    {
        .no-print, .no-print *
        {
            display: none !important;
        }
    }
\th4 {
\t\tborder-bottom: 1px solid black;
\t}
    </style>
";
        // line 253
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
        // line 412
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 413
        echo "<script type=\"text/javascript\">
KTUtil.ready(function () {
    window.print();
    //setTimeout(function(){window.close();},10);
});
</script>
";
        // line 412
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/test/themes/spotlayer/pages/dashboard/reports-print.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  987 => 412,  979 => 413,  977 => 412,  975 => 253,  862 => 305,  834 => 279,  827 => 274,  825 => 273,  804 => 254,  802 => 253,  793 => 247,  789 => 246,  782 => 242,  772 => 234,  769 => 233,  760 => 230,  757 => 229,  744 => 226,  740 => 225,  736 => 224,  732 => 223,  729 => 222,  723 => 220,  721 => 219,  716 => 218,  714 => 217,  709 => 216,  707 => 215,  702 => 214,  700 => 213,  695 => 212,  693 => 211,  688 => 210,  686 => 209,  681 => 208,  679 => 207,  674 => 206,  672 => 205,  668 => 203,  660 => 201,  657 => 200,  649 => 198,  641 => 196,  638 => 195,  636 => 194,  631 => 192,  627 => 191,  624 => 190,  619 => 189,  614 => 187,  610 => 186,  606 => 185,  602 => 184,  598 => 183,  594 => 182,  590 => 181,  586 => 180,  582 => 178,  579 => 177,  570 => 174,  567 => 173,  554 => 169,  548 => 168,  544 => 167,  536 => 166,  529 => 162,  525 => 161,  519 => 157,  516 => 156,  513 => 155,  510 => 154,  507 => 153,  504 => 152,  501 => 151,  498 => 150,  495 => 149,  492 => 148,  489 => 147,  486 => 146,  483 => 145,  480 => 144,  477 => 143,  474 => 142,  471 => 141,  468 => 140,  465 => 139,  462 => 138,  459 => 137,  456 => 136,  453 => 135,  450 => 134,  447 => 133,  444 => 132,  441 => 131,  438 => 130,  435 => 129,  432 => 128,  429 => 127,  426 => 126,  423 => 125,  420 => 124,  418 => 123,  414 => 121,  408 => 119,  402 => 117,  400 => 116,  395 => 114,  391 => 113,  388 => 112,  383 => 111,  377 => 108,  373 => 107,  369 => 106,  365 => 105,  361 => 104,  357 => 103,  353 => 102,  349 => 101,  346 => 100,  344 => 99,  341 => 98,  334 => 93,  330 => 91,  324 => 89,  322 => 88,  317 => 87,  315 => 86,  310 => 85,  308 => 84,  303 => 83,  301 => 82,  296 => 81,  294 => 80,  289 => 78,  273 => 76,  271 => 75,  268 => 74,  263 => 72,  259 => 71,  243 => 69,  241 => 68,  238 => 67,  233 => 65,  229 => 64,  213 => 62,  211 => 61,  208 => 60,  203 => 58,  199 => 57,  183 => 55,  181 => 54,  178 => 53,  173 => 51,  168 => 50,  166 => 49,  159 => 44,  157 => 43,  149 => 38,  145 => 37,  140 => 34,  134 => 32,  132 => 31,  127 => 30,  125 => 29,  120 => 28,  118 => 27,  113 => 26,  111 => 25,  97 => 24,  83 => 12,  76 => 11,  68 => 10,  60 => 9,  53 => 8,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"page-wrap\">
    <table width=\"100%\">
        <tr>
            <td style=\"border: 0;  text-align: left\" width=\"18%\">
\t\t\t<div id=\"logo\">
\t\t\t\t<img src='{% if settings.logo %}{{ settings.logo.path }}{% else %}./admin/media/logos/logo.svg{% endif %}' border='0' width='190' height='39'>            </td>
    \t\t\t<td style=\"border: 0;  text-align: center\" width=\"56%\">
    \t\t\t\t{% if settings.company.tax_number %}{{'Tax'|__}}: {{ settings.company.tax_number }} </br>{% endif %}
    \t\t\t\t{% if settings.company.company_phone %}{{'Phone'|__}}: {{ settings.company.company_phone }} </br>{% endif %}
    \t\t\t\t{% if settings.company.primary_email %}{{'Email'|__}}: {{ settings.company.primary_email }} </br>{% endif %}
    \t\t\t\t{% if settings.company.address %}{{'Street'|__}}: {{ settings.company.address }}{% endif %}
                </td>
                <td style=\"border: 0;  text-align: center\" width=\"48%\">
    \t\t\t</td>
\t\t\t</div>
        </tr>
    </table>
    <hr>
    </br>
    <div id=\"customer\">

        <table id=\"meta\">
            <tr>
                <td rowspan=\"5\" style=\"border: 1px solid white; border-{% if currentLang == 'ar' %}left{% else %}right{% endif %}: 1px solid black;text-align: {% if currentLang == 'ar' %}right{% else %}left{% endif %}\" width=\"62%\">
                    {% if this.param.type == 'delayed' %}
                        <strong class=\"kt-padding-t-40\">{{'Shipments Delayed Reports'|__}}</strong>
                    {% elseif this.param.type == 'delivered' %}
                        <strong class=\"kt-padding-t-40\">{{'Shipments Delivered Reports'|__}}</strong>
                    {% elseif this.param.type == 'deposited' %}
                        <strong class=\"kt-padding-t-40\">{{'Transactions Deposited Reports'|__}}</strong>
                    {% elseif this.param.type == 'withdrwal' %}
                        <strong class=\"kt-padding-t-40\">{{'Transactions Withdrawl Reports'|__}}</strong>
                    {% endif %}
\t\t\t\t</td>
            </tr>
            <tr>
                <td class=\"meta-head\"><p style=\"color:white;margin:0\">{{'Date'|__}}</p></td>
                <td>{{now|date(settings.dateformat)}}</td>
            </tr>
        </table>

    </div>
    {% if created_at or sender_id or employee_id  or for_id  or status_id %}
        </br>
        <div id=\"customer\">

            <table id=\"meta\">
                <tr>
                    {% if created_at %}
                        <td class=\"meta-head\"><p style=\"color:white;margin:0\">{{'Date'|__}}</p></td>
                        <td>{{created_at}}</td>
                    {% endif %}

                    {% if sender_id %}
                        <td  style=\"border: 1px solid white; border-{% if currentLang == 'ar' %}left{% else %}right{% endif %}: 1px solid black;text-align: {% if currentLang == 'ar' %}right{% else %}left{% endif %}\" width=\"1%\"></td>

                        <td class=\"meta-head\"><p style=\"color:white;margin:0\">{{'Sender'|__}}</p></td>
                        <td>{{sender.name|capitalize}}</td>
                    {% endif %}

                    {% if employee_id %}
                        <td  style=\"border: 1px solid white; border-{% if currentLang == 'ar' %}left{% else %}right{% endif %}: 1px solid black;text-align: {% if currentLang == 'ar' %}right{% else %}left{% endif %}\" width=\"1%\"></td>

                        <td class=\"meta-head\"><p style=\"color:white;margin:0\">{{'Responsiable'|__}}</p></td>
                        <td>{{employee.name|capitalize}}</td>
                    {% endif %}

                    {% if for_id %}
                        <td  style=\"border: 1px solid white; border-{% if currentLang == 'ar' %}left{% else %}right{% endif %}: 1px solid black;text-align: {% if currentLang == 'ar' %}right{% else %}left{% endif %}\" width=\"1%\"></td>

                        <td class=\"meta-head\"><p style=\"color:white;margin:0\">{{'User'|__}}</p></td>
                        <td>{{for.name|capitalize}}</td>
                    {% endif %}

                    {% if status_id %}
                        <td  style=\"border: 1px solid white; border-{% if currentLang == 'ar' %}left{% else %}right{% endif %}: 1px solid black;text-align: {% if currentLang == 'ar' %}right{% else %}left{% endif %}\" width=\"1%\"></td>

                        <td class=\"meta-head\"><p style=\"color:white;margin:0\">{{'Status'|__}}</p></td>
                        <td>
                            {% if status_id == 1 %}
                                {{'Pending'|__}}
                            {% elseif status_id == 2 %}
                                {{'Canceled'|__}}
                            {% elseif status_id == 3 %}
                                {{'Paid'|__}}
                            {% elseif status_id == 4 %}
                                {{'Delayed'|__}}
                            {% elseif status_id == 5 %}
                                {{'Delivered'|__}}
                            {% endif %}
                        </td>
                    {% endif %}
                </tr>
            </table>

        </div>
    {% endif %}
    <table id=\"items\">
        {% if this.param.category == 'shipments' %}
            <tr>
                <th align=\"center\"><p style=\"color:white;\">{{'id'|__}}</p></th>
                <th align=\"center\"><p style=\"color:white;\">{{'Created On'|__}}</p></th>
                <th align=\"center\"><p style=\"color:white;\">{{'Payment'|__}}</p></th>
                <th align=\"center\"><p style=\"color:white;\">{{'Sender Details'|__}}</p></th>
                <th align=\"center\"><p style=\"color:white;\">{{'Area'|__}}</p></th>
                <th align=\"center\"><p style=\"color:white;\">{{'Office'|__}}</p></th>
                <th align=\"center\"><p style=\"color:white;\">{{'Status'|__}}</p></th>
                <th align=\"center\"><p style=\"color:white;\">{{'Mobile'|__}}</p></th>
                <th align=\"center\"><p style=\"color:white;\">#</p></th>
            </tr>
            {% for item in orders %}
                <tr>
                    <th align=\"center\" style=\"background:#fff\"><p style=\"margin:0\">{{item.id}}</p></th>
                    <th style=\"background:#fff\"><p style=\"margin:0\">{{item.created_at|date(settings.dateformat)}}</p></th>
                    <th style=\"background:#fff\">
                        {% if item.payment == 1%}
                            <span class=\"kt-badge kt-badge--success kt-badge--dot\"></span>&nbsp;<span class=\"kt-font-bold kt-font-success\">{{'Postpaid'|__}}</span>
                        {% else %}
                            <span class=\"kt-badge kt-badge--info kt-badge--dot\"></span>&nbsp;<span class=\"kt-font-bold kt-font-info\">{{'Prepaid'|__}}</span>
                        {% endif %}
                    </th>

                    {% set shipping_from_area = null %}
                    {% set shipping_to_area = null %}
                    {% set shipping_from_area_id = null %}
                    {% set shipping_to_area_id = null %}
                    {% if item.sender_address %}
                        {% if item.sender_address.area %}
                            {% set shipping_from_area =   item.sender_address.area.name %}
                            {% set shipping_from_area_id =   item.sender_address.area.id %}
                        {% elseif item.sender_address.city %}
                            {% set shipping_from_area =   item.sender_address.city.name %}
                            {% set shipping_from_area_id =   item.sender_address.city.id %}
                        {% elseif item.sender_address.state %}
                            {% set shipping_from_area =   item.sender_address.state.name %}
                            {% set shipping_from_area_id =   item.sender_address.state.id %}
                        {% elseif item.sender_address.country %}
                            {% set shipping_from_area =   item.sender_address.country.name %}
                            {% set shipping_from_area_id =   item.sender_address.country.id %}
                        {% endif %}
                    {% endif %}
                    {% if item.receiver_address %}
                        {% if item.receiver_address.area %}
                            {% set shipping_to_area =   item.receiver_address.area.name %}
                            {% set shipping_to_area_id =   item.receiver_address.area.id %}
                        {% elseif item.sender_address.city %}
                            {% set shipping_to_area =   item.receiver_address.city.name %}
                            {% set shipping_to_area_id =   item.receiver_address.city.id %}
                        {% elseif item.sender_address.state %}
                            {% set shipping_to_area =   item.receiver_address.state.name %}
                            {% set shipping_to_area_id =   item.receiver_address.state.id %}
                        {% elseif item.sender_address.country %}
                            {% set shipping_to_area =   item.receiver_address.country.name %}
                            {% set shipping_to_area_id =   item.receiver_address.country.id %}
                        {% endif %}
                    {% endif %}

        \t\t\t<th align=\"center\" style=\"background:#fff\">
                        <div class=\"kt-user-card-v2 kt-user-card-v2--uncircle\">
                            <div class=\"kt-user-card-v2__details\">
                                <a href=\"javascript:;\" class=\"kt-user-card-v2__name\">{{ item.sender.name}}</a>
                                <span class=\"kt-user-card-v2__email\">{{shipping_from_area}}</span>
                            </div>
                        </div>
                    </th>
        \t\t\t<th align=\"center\" style=\"background:#fff\"><p style=\"margin:0\">{% if item.type == 1 %}{{shipping_from_area_id}}{% else %}{{shipping_to_area_id}}{% endif %}</p></th>
        \t\t\t<th align=\"center\" style=\"background:#fff\"><p style=\"margin:0\">{{item.office.name}}</p></th>
        \t\t\t<th align=\"center\" style=\"background:#fff\"><p style=\"margin:0\"><span class=\"btn btn-bold btn-sm btn-label-{{item.status.color}}\">{{item.status.name}}</span></p></th>
        \t\t\t<th align=\"center\" style=\"background:#fff\"><p style=\"margin:0\">{% if item.type == 1 %}{{item.sender.mobile}}{% else %}{{item.receiver.mobile}}{% endif %}</p></th>
        \t\t\t<th align=\"center\" style=\"background:#fff\"><p style=\"border:1px solid #333;padding:10px;display:block\"></p></th>
                </tr>
            {% else %}
                <tr>
                    <th align=\"center\" style=\"background:#fff;text-align:center;padding:10px 10px 0;\" colspan=\"9\"><p style=\"margin:0\">{{'No orders found'|__}}</p></th>
                </tr>
            {% endfor %}
        {% elseif this.param.category == 'transactions' %}

            <tr>
                <th align=\"center\"><p style=\"color:white;\">{{'id'|__}}</p></th>
                <th align=\"center\"><p style=\"color:white;\">{{'Created On'|__}}</p></th>
                <th align=\"center\"><p style=\"color:white;\">{{'For'|__}}</p></th>
                <th align=\"center\"><p style=\"color:white;\">{{'Movement'|__}}</p></th>
                <th align=\"center\"><p style=\"color:white;\">{{'Description'|__}}</p></th>
                <th align=\"center\"><p style=\"color:white;\">{{'Amount'|__}}</p></th>
                <th align=\"center\"><p style=\"color:white;\">{{'Date'|__}}</p></th>
                <th align=\"center\"><p style=\"color:white;\">{{'Shipment'|__}}</p></th>
            </tr>
            {% for item in orders %}
                <tr>
                    <th align=\"center\" style=\"background:#fff\"><p style=\"margin:0\">{{item.id}}</p></th>
                    <th style=\"background:#fff\"><p style=\"margin:0\">{{item.created_at|date(settings.dateformat)}}</p></th>
                    <th style=\"background:#fff\"><p style=\"margin:0\">
                        {% if item.type == 1 %}
                            {% if item.payment_with %}
                                {{item.gotit.name}} ({{\"Employee\"|__}})
                            {% else %}
                                {{item.user.name}} ({{\"Client\"|__}})
                            {% endif %}
                        {% elseif item.type == 3 %}
                            {{item.treasury.name}} ({{\"Treasury\"|__}})
                        {% endif %}
                    </p></th>
                    <th style=\"background:#fff\">
                        {% if item.movement == 1 %}
                            <span class=\"kt-badge kt-badge--info kt-badge--dot\"></span>&nbsp;<span class=\"kt-font-bold kt-font-info\">{{'Withdrawl'|__}}</span>
                        {% elseif item.movement == 2 %}
                            <span class=\"kt-badge kt-badge--info kt-badge--dot\"></span>&nbsp;<span class=\"kt-font-bold kt-font-info\">{{'Deposit'|__}}</span>
                        {% elseif item.movement == 3 %}
                            <span class=\"kt-badge kt-badge--info kt-badge--dot\"></span>&nbsp;<span class=\"kt-font-bold kt-font-info\">{{'Deduction from the wallet'|__}}</span>
                        {% elseif item.movement == 4 %}
                            <span class=\"kt-badge kt-badge--info kt-badge--dot\"></span>&nbsp;<span class=\"kt-font-bold kt-font-info\">{{'Add to wallet'|__}}</span>
                        {% elseif item.movement == 5 %}
                            <span class=\"kt-badge kt-badge--info kt-badge--dot\"></span>&nbsp;<span class=\"kt-font-bold kt-font-info\">{{'Deduction of commission balance'|__}}</span>
                        {% elseif item.movement == 6 %}
                            <span class=\"kt-badge kt-badge--info kt-badge--dot\"></span>&nbsp;<span class=\"kt-font-bold kt-font-info\">{{'Add to the commission balance'|__}}</span>
                        {% elseif item.movement == 7 %}
                            <span class=\"kt-badge kt-badge--info kt-badge--dot\"></span>&nbsp;<span class=\"kt-font-bold kt-font-info\">{{'Deduction from the balance of packages'|__}}</span>
                        {% elseif item.movement == 8 %}
                            <span class=\"kt-badge kt-badge--info kt-badge--dot\"></span>&nbsp;<span class=\"kt-font-bold kt-font-info\">{{'Add  to the balance of packages'|__}}</span>
                        {% endif %}
                    </th>
        \t\t\t<th align=\"center\" style=\"background:#fff\"><p style=\"margin:0\">{{item.description}}</p></th>
        \t\t\t<th align=\"center\" style=\"background:#fff\"><p style=\"margin:0\">{{item.amount|currency}}</p></th>
        \t\t\t<th align=\"center\" style=\"background:#fff\"><p style=\"margin:0\">{{item.date|date(settings.dateformat)}}</p></th>
        \t\t\t<th align=\"center\" style=\"background:#fff\"><p style=\"margin:0\">{% if item.item_id %}#{{item.item_id}}{% else %}-{% endif %}</p></th>
                </tr>
            {% else %}
                <tr>
                    <th align=\"center\" style=\"background:#fff;text-align:center;padding:10px 10px 0;\" colspan=\"7\"><p style=\"margin:0\">{{'No transactions found'|__}}</p></th>
                </tr>
            {% endfor %}
        {% endif %}
    </table>

    <!--    end related transactions -->

        <div id=\"terms\">
\t\t\t</br></br></br>
\t\t\t<table id=\"signing\">
\t\t\t\t<tr class=\"noBorder\">
\t\t\t\t\t<td align=\"center\" width=\"50%\"><h4>{{user.name}}</h4></td>
\t\t\t\t\t<td align=\"center\" width=\"50%\" style=\"padding-top:28px;\"><h4></h4></td>
\t\t\t\t</tr>
\t\t\t\t<tr class=\"noBorder\">
\t\t\t\t\t<td align=\"center\">{{'Printed By'|__}}</td>
\t\t\t\t\t<td align=\"center\">{{'Responsiable'|__}}</td>
\t\t\t\t</tr>
\t\t\t</table>
        </div>
</div>

{% put styles %}
    <style>
    body { background: #fff}

    * { margin: 0; padding: 0; }
    body {
        font: 14px/1.4 Helvetica, Arial, sans-serif;
    }
    #page-wrap { width: 800px; margin: 0 auto; }

    textarea { border: 0; font: 14px Helvetica, Arial, sans-serif; overflow: hidden; resize: none; }
    table { border-collapse: collapse; }
    table td, table th { border: 1px solid black; padding: 5px; }
\ttr.noBorder td {
\t  border: 0;
\t}

\ttd.Border td {
\t  border: 1px;
\t}
    {% if currentLang == 'ar' %}
        p,b, strong{
            font-family: Cairo;
            font-weight: bold;
        }
    {% endif %}

    #header { height: 15px; width: 100%; margin: 20px 0; background: #222; text-align: center; color: white; font: bold 15px Helvetica, Sans-Serif; text-decoration: uppercase; letter-spacing: 20px; padding: 8px 0px; }

    #address { width: 250px; height: 150px; float: left; }
    #customer { overflow: hidden; }

    #logo { text-align: right; float: right; position: relative; margin-top: 25px; border: 1px solid #fff; max-width: 540px; overflow: hidden; }
    #customer-title { font-size: 20px; font-weight: bold; float: left; }

    #meta { margin-top: 1px; width: 100%; float: right; }
    #meta td { text-align: right;  }
    #meta td.meta-head { text-align: left; background: #6c757d; }
    #meta td textarea { width: 100%; height: 20px; text-align: right; }

\t#signing { margin-top: 0px; width: 100%; float: center; }
    #signing td { text-align: center;  }
    #signing td.signing-head { text-align: center; background: #eee; }
    #signing td textarea { width: 100%; height: 20px; text-align: center; }

    #items { clear: both; width: 100%; margin: 30px 0 0 0; border: 1px solid black; }
    #items th { background: #6c757d; }
    #items textarea { width: 80px; height: 50px; }
    #items tr.item-row td {  vertical-align: top; }
    #items td.description { width: 300px; }
    #items td.item-name { width: 175px; }
    #items td.description textarea, #items td.item-name textarea { width: 100%; }
    #items td.total-line { border-right: 0; text-align: {% if currentLang == 'ar' %}left{% else %}right{% endif %}; }
    #items td.total-value { border-left: 0; padding: 10px; }
    #items td.total-value textarea { height: 20px; background: none; }
    #items td.balance { background: #6c757d; }
    #items td.blank { border: 0; }

    #terms { text-align: center; margin: 20px 0 0 0; }
    #terms h5 { text-transform: uppercase; font: 13px Helvetica, Sans-Serif; letter-spacing: 10px; border-bottom: 1px solid black; padding: 0 0 8px 0; margin: 0 0 8px 0; }
    #terms textarea { width: 100%; text-align: center;}



    .delete-wpr { position: relative; }
    .delete { display: block; color: #000; text-decoration: none; position: absolute; background: #EEEEEE; font-weight: bold; padding: 0px 3px; border: 1px solid; top: -6px; left: -22px; font-family: Verdana; font-size: 12px; }

    /* Extra CSS for Print Button*/
    .button {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        overflow: hidden;
        margin-top: 20px;
        padding: 12px 12px;
        cursor: pointer;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        -webkit-transition: all 60ms ease-in-out;
        transition: all 60ms ease-in-out;
        text-align: center;
        white-space: nowrap;
        text-decoration: none !important;

        color: #fff;
        border: 0 none;
        border-radius: 4px;
        font-size: 14px;
        font-weight: 500;
        line-height: 1.3;
        -webkit-appearance: none;
        -moz-appearance: none;

        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-flex: 0;
        -webkit-flex: 0 0 160px;
        -ms-flex: 0 0 160px;
        flex: 0 0 160px;
    }
    .button:hover {
        -webkit-transition: all 60ms ease;
        transition: all 60ms ease;
        opacity: .85;
    }
    .button:active {
        -webkit-transition: all 60ms ease;
        transition: all 60ms ease;
        opacity: .75;
    }
    .button:focus {
        outline: 1px dotted #959595;
        outline-offset: -4px;
    }

    .button.-regular {
        color: #202129;
        background-color: #edeeee;
    }
    .button.-regular:hover {
        color: #202129;
        background-color: #e1e2e2;
        opacity: 1;
    }
    .button.-regular:active {
        background-color: #d5d6d6;
        opacity: 1;
    }

    .button.-dark {
        color: #FFFFFF;
        background: #333030;
    }
    .button.-dark:focus {
        outline: 1px dotted white;
        outline-offset: -4px;
    }

    @media print
    {
        .no-print, .no-print *
        {
            display: none !important;
        }
    }
\th4 {
\t\tborder-bottom: 1px solid black;
\t}
    </style>
{% endput %}
{% put scripts %}
<script type=\"text/javascript\">
KTUtil.ready(function () {
    window.print();
    //setTimeout(function(){window.close();},10);
});
</script>
{% endput %}", "/Applications/MAMP/htdocs/test/themes/spotlayer/pages/dashboard/reports-print.htm", "");
    }
}
