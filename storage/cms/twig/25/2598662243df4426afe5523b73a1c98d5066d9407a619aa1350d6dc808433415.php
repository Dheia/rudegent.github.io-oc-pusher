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

/* /Applications/MAMP/htdocs/MainFiles--/themes/spotlayer/pages/dashboard/order-print.htm */
class __TwigTemplate_1dc40916bbf3ab62aee036585ec9ff32817b19a3dedb0b49bbbc19bf71bd8d6a extends \Twig\Template
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
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 1), "type", [], "any", false, false, false, 1) == "shipment")) {
            // line 2
            echo "<div id=\"page-wrap\">
    <table width=\"100%\">
        <tr>
            <td style=\"border: 0;  text-align: left\" width=\"18%\">
    \t\t\t<div id=\"logo\" style=\"text-align:left\">
    \t\t\t\t<img src='";
            // line 7
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "logo", [], "any", false, false, false, 7)) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "logo", [], "any", false, false, false, 7), "path", [], "any", false, false, false, 7), "html", null, true);
            } else {
                echo "./admin/media/logos/logo.svg";
            }
            echo "' style=\"max-height:70px\">
                </div>
            </td>
\t\t\t<td style=\"border: 0;  text-align: center\" width=\"56%\">
\t\t\t\t";
            // line 11
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 11), "tax_number", [], "any", false, false, false, 11) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 11), "tax_number", [], "any", false, false, false, 11) != "")) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 11), "tax_number", [], "any", false, false, false, 11) != "-"))) {
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Tax"]);
                echo ": ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 11), "tax_number", [], "any", false, false, false, 11), "html", null, true);
                echo " </br>";
            }
            // line 12
            echo "\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 12), "company_phone", [], "any", false, false, false, 12)) {
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Phone"]);
                echo ": ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 12), "company_phone", [], "any", false, false, false, 12), "html", null, true);
                echo " </br>";
            }
            // line 13
            echo "\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 13), "primary_email", [], "any", false, false, false, 13)) {
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Email"]);
                echo ": ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 13), "primary_email", [], "any", false, false, false, 13), "html", null, true);
                echo " </br>";
            }
            // line 14
            echo "\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 14), "address", [], "any", false, false, false, 14)) {
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Street"]);
                echo ": ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 14), "address", [], "any", false, false, false, 14), "html", null, true);
            }
            // line 15
            echo "            </td>
            <td style=\"border: 0;  text-align: center\" width=\"48%\" id=\"barcodeHTML\">
                </br>
                ";
            // line 18
            echo call_user_func_array($this->env->getFunction('barcodeHTML')->getCallable(), [["data" => twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "barcode", [], "any", false, false, false, 18), "type" => "CODABAR", "width" => "1"]]);
            echo "
                <div class=\"clearfix\"></div>
                <p>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "tracking", [], "any", false, false, false, 20), "prefix_order", [], "any", false, false, false, 20), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "barcode", [], "any", false, false, false, 20), "html", null, true);
            echo "</p>
\t\t\t</td>
        </tr>
    </table>
    <hr>
    </br>
    <div id=\"customer\">

        <table id=\"meta\">
            <tr>
                <td rowspan=\"5\" style=\"border: 1px solid white; border-";
            // line 30
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
                <strong>";
            // line 31
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Bill to"]);
            echo "</strong> </br>
\t\t\t\t<table id=\"items\">
\t\t\t\t\t<b>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver", [], "any", false, false, false, 33), "name", [], "any", false, false, false, 33), "html", null, true);
            echo "</b></br> </br>
\t\t\t\t\t";
            // line 34
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 34), "area", [], "any", false, false, false, 34)) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 34), "area", [], "any", false, false, false, 34), "name", [], "any", false, false, false, 34), "html", null, true);
                echo " - ";
            }
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 34), "zipcode", [], "any", false, false, false, 34)) {
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["ZIP"]);
                echo ":";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 34), "zipcode", [], "any", false, false, false, 34), "html", null, true);
                echo " </br>";
            }
            // line 35
            echo "\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 35), "thecity", [], "any", false, false, false, 35)) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 35), "thecity", [], "any", false, false, false, 35), "name", [], "any", false, false, false, 35), "html", null, true);
                echo " | ";
            }
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 35), "thestate", [], "any", false, false, false, 35)) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 35), "thestate", [], "any", false, false, false, 35), "name", [], "any", false, false, false, 35), "html", null, true);
                echo " | ";
            }
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 35), "thecountry", [], "any", false, false, false, 35)) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 35), "thecountry", [], "any", false, false, false, 35), "name", [], "any", false, false, false, 35), "html", null, true);
                echo " ";
            }
            echo "</br>
\t\t\t\t\t";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver", [], "any", false, false, false, 36), "mobile", [], "any", false, false, false, 36), "html", null, true);
            echo " </br>
\t\t\t\t\t";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver", [], "any", false, false, false, 37), "email", [], "any", false, false, false, 37), "html", null, true);
            echo "
\t\t\t\t</table>
\t\t\t\t</td>
            </tr>
            ";
            // line 41
            if (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "courier_id", [], "any", false, false, false, 41)) {
                // line 42
                echo "                <tr>
    \t\t\t\t<td class=\"meta-head\"><p style=\"color:white;\">";
                // line 43
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Courier Company"]);
                echo "</p></td>
                    <td>";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "courier", [], "any", false, false, false, 44), "name", [], "any", false, false, false, 44), "html", null, true);
                echo "</td>
                </tr>
            ";
            }
            // line 47
            echo "            <tr>
                <td class=\"meta-head\"><p style=\"color:white;\">";
            // line 48
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Shipping date"]);
            echo "</p></td>
                <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "ship_date", [], "any", false, false, false, 49), twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "dateformat", [], "any", false, false, false, 49)), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "ship_date", [], "any", false, false, false, 49), "h:i a"), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <td class=\"meta-head\"><p style=\"color:white;\">";
            // line 52
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Invoice No"]);
            echo ".</p></td>
                <td><b>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "tracking", [], "any", false, false, false, 53), "prefix_order", [], "any", false, false, false, 53), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "number", [], "any", false, false, false, 53), "html", null, true);
            echo "</b></td>
            </tr>
        </table>
    </div>
    <table id=\"items\">
        <tr>
            <th align=\"center\"><p style=\"color:white;\">";
            // line 59
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Category"]);
            echo "</p></th>
            <th width=\"48%\"><p style=\"color:white;\">";
            // line 60
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Description"]);
            echo "</p></th>
\t\t\t<th align=\"center\"><p style=\"color:white;\">";
            // line 61
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Quantity"]);
            echo "</p></th>
            <th ";
            // line 62
            if ((($context["currentLang"] ?? null) == "ar")) {
                echo "align=\"left\"";
            } else {
                echo "align=\"right\"";
            }
            echo "><p style=\"color:white;\">";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Weight"]);
            echo "</p></th>
        </tr>
        ";
            // line 64
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "items", [], "any", false, false, false, 64));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 65
                echo "            <tr>
                <th align=\"center\" style=\"background:#fff\"><p>";
                // line 66
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "category", [], "any", false, false, false, 66), "name", [], "any", false, false, false, 66)), "html", null, true);
                echo "</p></th>
                <th width=\"48%\" style=\"background:#fff\"><p>";
                // line 67
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 67), "html", null, true);
                echo "</p></th>
    \t\t\t<th align=\"center\" style=\"background:#fff\"><p>";
                // line 68
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 68), "html", null, true);
                echo "</p></th>
                <th ";
                // line 69
                if ((($context["currentLang"] ?? null) == "ar")) {
                    echo "align=\"left\"";
                } else {
                    echo "align=\"right\"";
                }
                echo " style=\"background:#fff\"><p>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "weight", [], "any", false, false, false, 69), "html", null, true);
                echo "</p></th>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "
        ";
            // line 73
            $context["total"] = 0;
            // line 74
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "return_defray", [], "any", false, false, false, 74) == 1)) {
                // line 75
                echo "            ";
                $context["total"] = (($context["total"] ?? null) + twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "package_fee", [], "any", false, false, false, 75));
                // line 76
                echo "        ";
            }
            // line 77
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "return_package_fee", [], "any", false, false, false, 77) == 1)) {
                // line 78
                echo "            ";
                $context["total"] = (($context["total"] ?? null) + twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "return_courier_fee", [], "any", false, false, false, 78));
                // line 79
                echo "        ";
            }
            // line 80
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payment_type", [], "any", false, false, false, 80) == 1)) {
                // line 81
                echo "            ";
                $context["total"] = (($context["total"] ?? null) + ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "courier_fee", [], "any", false, false, false, 81) + ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "tax", [], "any", false, false, false, 81) / 100) * twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "courier_fee", [], "any", false, false, false, 81))) + ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "insurance", [], "any", false, false, false, 81) / 100) * twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "courier_fee", [], "any", false, false, false, 81))));
                // line 82
                echo "        ";
            }
            // line 83
            echo "\t\t<tr>
\t\t\t<td ";
            // line 84
            if ((($context["currentLang"] ?? null) == "ar")) {
                echo "align=\"left\"";
            } else {
                echo "align=\"right\"";
            }
            echo " colspan=\"3\" class=\"total-line\">";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sub Total"]);
            echo "</td>
\t\t\t<td  align=\"right\" class=\"total-value\"><div id=\"total\"><span class=\"price\"> ";
            // line 85
            echo call_user_func_array($this->env->getFilter('currency')->getCallable(), [((($context["total"] ?? null) - ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "tax", [], "any", false, false, false, 85) / 100) * twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "courier_fee", [], "any", false, false, false, 85))) - ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "insurance", [], "any", false, false, false, 85) / 100) * twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "courier_fee", [], "any", false, false, false, 85)))]);
            echo " </span> </div></td>
\t\t</tr>
\t\t<tr>
\t\t\t<td  ";
            // line 88
            if ((($context["currentLang"] ?? null) == "ar")) {
                echo "align=\"left\"";
            } else {
                echo "align=\"right\"";
            }
            echo " colspan=\"3\" class=\"total-line\">";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["TAX"]);
            echo " +</td>
\t\t\t<td  align=\"right\" class=\"total-value\"><div id=\"total\"> ";
            // line 89
            echo call_user_func_array($this->env->getFilter('currency')->getCallable(), [((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "tax", [], "any", false, false, false, 89) / 100) * twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "courier_fee", [], "any", false, false, false, 89))]);
            echo " </div></td>
\t\t</tr>
\t\t<tr>
\t\t\t<td  ";
            // line 92
            if ((($context["currentLang"] ?? null) == "ar")) {
                echo "align=\"left\"";
            } else {
                echo "align=\"right\"";
            }
            echo " colspan=\"3\" class=\"total-line\">";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Insurance"]);
            echo " +</td>
\t\t\t<td  align=\"right\" class=\"total-value\"><div id=\"total\"> ";
            // line 93
            echo call_user_func_array($this->env->getFilter('currency')->getCallable(), [((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "insurance", [], "any", false, false, false, 93) / 100) * twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "courier_fee", [], "any", false, false, false, 93))]);
            echo " </div></td>
\t\t</tr>
\t\t<tr>
\t\t\t<td ";
            // line 96
            if ((($context["currentLang"] ?? null) == "ar")) {
                echo "align=\"left\"";
            } else {
                echo "align=\"right\"";
            }
            echo " colspan=\"3\" class=\"total-line balance\"><p style=\"color:white;\">";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Grand total"]);
            echo " </p></td>


\t\t\t<td align=\"right\" class=\"total-value balance\"><div class=\"due\"> <p style=\"color:white;\"><b>";
            // line 99
            echo call_user_func_array($this->env->getFilter('currency')->getCallable(), [($context["total"] ?? null)]);
            echo "</b></p></div></td>
\t\t</tr>
    </table>

    <!--    end related transactions -->

        <div id=\"terms\">
            <h5>";
            // line 106
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["TERMS"]);
            echo "</h5>
\t\t\t <table id=\"related_transactions\" style=\"width: 100%\">
\t\t\t\t<p align=\"justify\">";
            // line 108
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "invoice", [], "any", false, false, false, 108), "terms", [], "any", false, false, false, 108), "html", null, true);
            echo "</p>
\t\t\t</table>
\t\t\t</br></br></br></br>
\t\t\t<table id=\"signing\">
\t\t\t\t<tr class=\"noBorder\">
\t\t\t\t\t<td align=\"center\"><h4></h4></td>
\t\t\t\t\t<td align=\"center\"><h4></h4></td>
\t\t\t\t</tr>
\t\t\t\t<tr class=\"noBorder\">
\t\t\t\t\t<td align=\"center\">";
            // line 117
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "invoice", [], "any", false, false, false, 117), "signing_company", [], "any", false, false, false, 117))]);
            echo "</td>
\t\t\t\t\t<td align=\"center\">";
            // line 118
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "invoice", [], "any", false, false, false, 118), "signing_customer", [], "any", false, false, false, 118))]);
            echo "</td>
\t\t\t\t</tr>
\t\t\t</table>
        </div>
</div>

";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 124
($context["this"] ?? null), "param", [], "any", false, false, false, 124), "type", [], "any", false, false, false, 124) == "label")) {
            // line 125
            echo "    <div id=\"page-wrap\">
    \t<div class=\"print-block\">
    \t\t<div class=\"row\">
    \t\t\t<div class=\"col-md-12\">
    \t\t\t\t<p>";
            // line 129
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver", [], "any", false, false, false, 129), "name", [], "any", false, false, false, 129), "html", null, true);
            echo " </p>
    \t\t\t</div>
    \t\t</div>

    \t\t<div class=\"print-break\"></div>

    \t\t<div class=\"print-loction\">

                <table width=\"100%\">
                    <tr>
                        <td width=\"10%\">
                            <h2 style=\"margin-top: -70px;padding-left: 20px;font-size:80px\">
                                ";
            // line 141
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "tracking", [], "any", false, false, false, 141), "default_tracking_id", [], "any", false, false, false, 141) == 1)) {
                // line 142
                echo "                                    ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_address", [], "any", false, false, false, 142), "thecountry", [], "any", false, false, false, 142), "id", [], "any", false, false, false, 142), "html", null, true);
                echo "
                                ";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 143
($context["settings"] ?? null), "tracking", [], "any", false, false, false, 143), "default_tracking_id", [], "any", false, false, false, 143) == 2)) {
                // line 144
                echo "                                    ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_address", [], "any", false, false, false, 144), "thestate", [], "any", false, false, false, 144), "id", [], "any", false, false, false, 144), "html", null, true);
                echo "
                                ";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 145
($context["settings"] ?? null), "tracking", [], "any", false, false, false, 145), "default_tracking_id", [], "any", false, false, false, 145) == 3)) {
                // line 146
                echo "                                    ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_address", [], "any", false, false, false, 146), "thecity", [], "any", false, false, false, 146), "id", [], "any", false, false, false, 146), "html", null, true);
                echo "
                                ";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 147
($context["settings"] ?? null), "tracking", [], "any", false, false, false, 147), "default_tracking_id", [], "any", false, false, false, 147) == 4)) {
                // line 148
                echo "                                    ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_address", [], "any", false, false, false, 148), "area", [], "any", false, false, false, 148), "id", [], "any", false, false, false, 148), "html", null, true);
                echo "
                                ";
            }
            // line 150
            echo "                            </h2>
                        </td>
                        <td width=\"80%\" style=\"text-align:center;\" class=\"barcode\">
                            ";
            // line 153
            echo call_user_func_array($this->env->getFunction('barcodeHTML')->getCallable(), [["data" => twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "barcode", [], "any", false, false, false, 153), "type" => "CODABAR", "width" => "4", "height" => "100"]]);
            echo "
                            <p>";
            // line 154
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "barcode", [], "any", false, false, false, 154), "html", null, true);
            echo "</p>
                        </td>
                        <td width=\"10%\">
                            <h2 style=\"margin-top: -70px;padding-left: 20px;font-size:80px\">
                                ";
            // line 158
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "tracking", [], "any", false, false, false, 158), "default_tracking_id", [], "any", false, false, false, 158) == 1)) {
                // line 159
                echo "                                    ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 159), "thecountry", [], "any", false, false, false, 159), "id", [], "any", false, false, false, 159), "html", null, true);
                echo "
                                ";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 160
($context["settings"] ?? null), "tracking", [], "any", false, false, false, 160), "default_tracking_id", [], "any", false, false, false, 160) == 2)) {
                // line 161
                echo "                                    ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 161), "thestate", [], "any", false, false, false, 161), "id", [], "any", false, false, false, 161), "html", null, true);
                echo "
                                ";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 162
($context["settings"] ?? null), "tracking", [], "any", false, false, false, 162), "default_tracking_id", [], "any", false, false, false, 162) == 3)) {
                // line 163
                echo "                                    ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 163), "thecity", [], "any", false, false, false, 163), "id", [], "any", false, false, false, 163), "html", null, true);
                echo "
                                ";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 164
($context["settings"] ?? null), "tracking", [], "any", false, false, false, 164), "default_tracking_id", [], "any", false, false, false, 164) == 4)) {
                // line 165
                echo "                                    ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 165), "area", [], "any", false, false, false, 165), "id", [], "any", false, false, false, 165), "html", null, true);
                echo "
                                ";
            }
            // line 167
            echo "                            </h2>
                        </td>
                    </tr>
                </table>

    \t\t</div>
    \t\t<div>
                <table>
                    <tr>
                        <td width=\"25%\">";
            // line 176
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Address"]);
            echo " </td>
                        <td>";
            // line 177
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 177), "area", [], "any", false, false, false, 177), "name", [], "any", false, false, false, 177), "html", null, true);
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 177), "zipcode", [], "any", false, false, false, 177)) {
                echo ", ";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["ZIP"]);
                echo ":";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 177), "zipcode", [], "any", false, false, false, 177), "html", null, true);
            }
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 177), "thecity", [], "any", false, false, false, 177)) {
                echo ", ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 177), "thecity", [], "any", false, false, false, 177), "name", [], "any", false, false, false, 177), "html", null, true);
            }
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 177), "thestate", [], "any", false, false, false, 177)) {
                echo ", ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 177), "thestate", [], "any", false, false, false, 177), "name", [], "any", false, false, false, 177), "html", null, true);
            }
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 177), "thecountry", [], "any", false, false, false, 177)) {
                echo ", ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 177), "thecountry", [], "any", false, false, false, 177), "name", [], "any", false, false, false, 177), "html", null, true);
            }
            echo "</td>
                    </tr>
                    <tr>
                        <td width=\"25%\">";
            // line 180
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Phone"]);
            echo " </td>
                        <td>";
            // line 181
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver", [], "any", false, false, false, 181), "mobile", [], "any", false, false, false, 181), "html", null, true);
            echo "</td>
                    </tr>
                    <tr>
                        <td width=\"25%\">";
            // line 184
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sender"]);
            echo " </td>
                        <td>";
            // line 185
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender", [], "any", false, false, false, 185), "name", [], "any", false, false, false, 185), "html", null, true);
            echo "</td>
                    </tr>
                </table>
    \t\t</div>
    \t</div>
    </div>
";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 191
($context["this"] ?? null), "param", [], "any", false, false, false, 191), "type", [], "any", false, false, false, 191) == "label-v2")) {
            // line 192
            echo "    <div id=\"page-wrap\">
        <table class=\"table\" style=\" margin-left: auto; margin-right: auto; font-family:Arial, Helvetica, sans-serif;\" border=\"0\" width=\"100%\" >
            <tbody>
                <tr>
                    <td>
                        <table style=\"text-align: center; table-layout:fixed;\"   cellspacing=\"2\" width=\"100%\">
                            <tbody>
                                <tr>
                                    <td width=\"75%\">
                                        <p style=\"text-align: ";
            // line 201
            if ((($context["currentLang"] ?? null) == "ar")) {
                echo "right";
            } else {
                echo "left";
            }
            echo ";\"><font size=6 face=\"arial\"><strong>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 201), "title", [], "any", false, false, false, 201), "html", null, true);
            echo "</strong></font></p>
                                    </td>
                                    <td width=\"25%\">
                                        <p style=\"text-align: center;\"><img src='";
            // line 204
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "logo", [], "any", false, false, false, 204)) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "logo", [], "any", false, false, false, 204), "path", [], "any", false, false, false, 204), "html", null, true);
            } else {
                echo "./admin/media/logos/logo-10.png";
            }
            echo "' border='0'></p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        ";
            // line 209
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "dateformat", [], "any", false, false, false, 209)), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "h:i a"), "html", null, true);
            echo "
                        <hr />
                        <table  width=\"100%\" style=\"text-align: center; table-layout:fixed;\">
                            <tbody>
                                <tr bgcolor=\"#d6eeff\">
                                    <td width=\"50%\">
                                        <p style=\"text-align: center;\"><strong><font size=\"5\">";
            // line 215
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["FROM"]);
            echo "</font></strong></p>
                                    </td>
                                    <td width=\"50%\">
                                        <p style=\"text-align: center;\"><font size=\"5\" face=\"arial\"><strong>";
            // line 218
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["SHIP TO"]);
            echo "</strong></font></p>
                                    </td>
                                </tr>
                                <tr>
                                    <font size=4><td align=\"center\"  style=\" border-top-color:#000000; border-right-color:#333; border-right-width:2px;border-right-style:solid;  border-collapse: collapse;\">
                                        <p style=\"text-align: ";
            // line 223
            if ((($context["currentLang"] ?? null) == "ar")) {
                echo "right";
            } else {
                echo "left";
            }
            echo ";\"><font size=\"4\"><b>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender", [], "any", false, false, false, 223), "name", [], "any", false, false, false, 223), "html", null, true);
            echo "</b></font></p>
                                        <p style=\"text-align: ";
            // line 224
            if ((($context["currentLang"] ?? null) == "ar")) {
                echo "right";
            } else {
                echo "left";
            }
            echo "; \">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender", [], "any", false, false, false, 224), "mobile", [], "any", false, false, false, 224), "html", null, true);
            echo "</p>
                                        <p style=\"text-align: ";
            // line 225
            if ((($context["currentLang"] ?? null) == "ar")) {
                echo "right";
            } else {
                echo "left";
            }
            echo "; \"><strong>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_address", [], "any", false, false, false, 225), "area", [], "any", false, false, false, 225), "name", [], "any", false, false, false, 225), "html", null, true);
            echo " ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_address", [], "any", false, false, false, 225), "zipcode", [], "any", false, false, false, 225)) {
                echo "- ";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["ZIP"]);
                echo ":";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_address", [], "any", false, false, false, 225), "zipcode", [], "any", false, false, false, 225), "html", null, true);
            }
            echo "</strong></p>
                                        <p style=\"text-align: ";
            // line 226
            if ((($context["currentLang"] ?? null) == "ar")) {
                echo "right";
            } else {
                echo "left";
            }
            echo ";\"><font size=5><strong>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_address", [], "any", false, false, false, 226), "thecity", [], "any", false, false, false, 226), "name", [], "any", false, false, false, 226), "html", null, true);
            echo " | ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_address", [], "any", false, false, false, 226), "thestate", [], "any", false, false, false, 226), "name", [], "any", false, false, false, 226), "html", null, true);
            echo " | ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_address", [], "any", false, false, false, 226), "thecountry", [], "any", false, false, false, 226), "name", [], "any", false, false, false, 226), "html", null, true);
            echo "</strong></font></p>
                                    </td>
                                    <td>
                                        <p style=\"text-align: ";
            // line 229
            if ((($context["currentLang"] ?? null) == "ar")) {
                echo "right";
            } else {
                echo "left";
            }
            echo ";\"><font size=\"4\"><b>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver", [], "any", false, false, false, 229), "name", [], "any", false, false, false, 229), "html", null, true);
            echo "</b></font></p>
                                        <p style=\"text-align: ";
            // line 230
            if ((($context["currentLang"] ?? null) == "ar")) {
                echo "right";
            } else {
                echo "left";
            }
            echo "; \">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver", [], "any", false, false, false, 230), "mobile", [], "any", false, false, false, 230), "html", null, true);
            echo "</p>
                                        <p style=\"text-align: ";
            // line 231
            if ((($context["currentLang"] ?? null) == "ar")) {
                echo "right";
            } else {
                echo "left";
            }
            echo "; \"><strong>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 231), "area", [], "any", false, false, false, 231), "name", [], "any", false, false, false, 231), "html", null, true);
            echo " ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 231), "zipcode", [], "any", false, false, false, 231)) {
                echo "- ";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["ZIP"]);
                echo ":";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 231), "zipcode", [], "any", false, false, false, 231), "html", null, true);
            }
            echo "</strong></p>
                                        <p style=\"text-align: ";
            // line 232
            if ((($context["currentLang"] ?? null) == "ar")) {
                echo "right";
            } else {
                echo "left";
            }
            echo ";\"><font size=5><strong>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 232), "thecity", [], "any", false, false, false, 232), "name", [], "any", false, false, false, 232), "html", null, true);
            echo " | ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 232), "thestate", [], "any", false, false, false, 232), "name", [], "any", false, false, false, 232), "html", null, true);
            echo " | ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 232), "thecountry", [], "any", false, false, false, 232), "name", [], "any", false, false, false, 232), "html", null, true);
            echo "</strong></font></p>
                                    </td></font>
                                </tr>
                            </tbody>
                        </table>
                        <hr />
                        <table style=\"text-align: center;\" width=\"100%\">
                            <tbody>
                                <tr>
                                    <td width=\"50%\">
                                        <p><strong>";
            // line 242
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["DELIVERY TIME"]);
            echo "</strong></p>
                                        <p><font size=4><b>";
            // line 243
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "deliverytime", [], "any", false, false, false, 243), "name", [], "any", false, false, false, 243), "html", null, true);
            echo "</b></font></p>
                                    </td>
                                    ";
            // line 245
            if (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "courier", [], "any", false, false, false, 245)) {
                // line 246
                echo "                                        <td width=\"50%\">
                                            <p><strong>";
                // line 247
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["COMPANY COURIER"]);
                echo "</strong></p>
                                            <p><font size=4><strong><b>";
                // line 248
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "courier", [], "any", false, false, false, 248), "name", [], "any", false, false, false, 248), "html", null, true);
                echo "</b></strong></p>
                                        </td>
                                    ";
            }
            // line 251
            echo "                                </tr>
                          </tbody>
                      </table>
                      <hr />
                      <table style=\"text-align: center;\" width=\"100%\">
                            <tbody>
                                <tr>
                                    <td width=\"50%\">
                                        <p><strong>";
            // line 259
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["PIECES"]);
            echo " | ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["WEIGHT"]);
            echo "</strong></p>
                                    </td>
                                    <td width=\"50%\">
                                        <p><strong>";
            // line 262
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["CONTENTS"]);
            echo "</strong></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width=\"50%\">
                                        <p><font size=4>";
            // line 267
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "items", [], "any", false, false, false, 267), "count", [], "any", false, false, false, 267), "html", null, true);
            echo " | ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "items", [], "any", false, false, false, 267), "sum", [0 => "weight"], "method", false, false, false, 267), "html", null, true);
            echo "</font></p>
                                    </td>
                                    <td width=\"50%\">
                                        <p>
                                            ";
            // line 271
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "items", [], "any", false, false, false, 271));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 272
                echo "                                                <font size=4>";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "category", [], "any", false, false, false, 272), "name", [], "any", false, false, false, 272)), "html", null, true);
                echo "</font></br>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 274
            echo "                                    </p>
                                    </td>
                                </tr>
                          </tbody>
                      </table>
                      <hr />
                      <center  width=\"100%\">
                        <div class=\"output\">
                          <p style='padding:5px; text-align:center; font-size:100px; font-weight:bold;font-family:Arial,Helvetica;'>
                              ";
            // line 283
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 283), "area", [], "any", false, false, false, 283), "id", [], "any", false, false, false, 283), "html", null, true);
            echo "
                          </p>
                        </div>
                      </center>
                      <hr />
                      <center  width=\"100%\">
                        <div class=\"output\">
                          <p style='padding:5px; text-align:center; font-size:24px; font-family:Arial,Helvetica;'>";
            // line 290
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["TRACKING"]);
            echo " #</p>
                          <section class=\"output\">
                              ";
            // line 292
            echo call_user_func_array($this->env->getFunction('barcodeHTML')->getCallable(), [["data" => twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "barcode", [], "any", false, false, false, 292), "type" => "CODABAR", "width" => "4", "height" => "100"]]);
            echo "<br />
                              <h2>";
            // line 293
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "barcode", [], "any", false, false, false, 293), "html", null, true);
            echo "</h2>
                          </section>
                        </div>
                      </center>
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      ";
            // line 298
            echo call_user_func_array($this->env->getFunction('barcodeHTML')->getCallable(), [["data" => twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "barcode", [], "any", false, false, false, 298), "type" => "QRCODE", "width" => "5", "height" => "5"]]);
            echo "
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
";
        }
        // line 305
        echo "
";
        // line 306
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('styles'        );
        // line 307
        echo "    <style>
    body { background: #fff}
    ";
        // line 309
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 309), "type", [], "any", false, false, false, 309) == "shipment")) {
            // line 310
            echo "        * { margin: 0; padding: 0; }
        body {
            font: 14px/1.4 Helvetica, Arial, sans-serif;
        }
        #page-wrap { width: 800px; margin: 0 auto; }

        textarea { border: 0; font: 14px Helvetica, Arial, sans-serif; overflow: hidden; resize: none; }
        table { border-collapse: collapse; }
        table td, table th { border: 1px solid black; padding: 5px; }
\t\ttr.noBorder td {
\t\t  border: 0;
\t\t}

\t\ttd.Border td {
\t\t  border: 1px;
\t\t}
        ";
            // line 326
            if ((($context["currentLang"] ?? null) == "ar")) {
                // line 327
                echo "            p,b, strong{
                font-family: Cairo;
                font-weight: bold;
            }
        ";
            }
            // line 332
            echo "
        #header { height: 15px; width: 100%; margin: 20px 0; background: #222; text-align: center; color: white; font: bold 15px Helvetica, Sans-Serif; text-decoration: uppercase; letter-spacing: 20px; padding: 8px 0px; }

        #address { width: 250px; height: 150px; float: left; }
        #customer { overflow: hidden; }
        #barcodeHTML  { text-align: center;}
        #barcodeHTML > div { margin:auto}
        #customer-title { font-size: 20px; font-weight: bold; float: left; }

        #meta { margin-top: 1px; width: 100%; float: right; }
        #meta td { text-align: right;  }
        #meta td.meta-head { text-align: left; background: #6c757d; }
        #meta td textarea { width: 100%; height: 20px; text-align: right; }

\t\t#signing { margin-top: 0px; width: 100%; float: center; }
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
            // line 358
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
\t\th4 {
\t\t\tborder-bottom: 1px solid black;
\t\t}

    ";
        } elseif (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 464
($context["this"] ?? null), "param", [], "any", false, false, false, 464), "type", [], "any", false, false, false, 464) == "label") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 464), "type", [], "any", false, false, false, 464) == "label-1"))) {
            // line 465
            echo "        #page-wrap { width: 100%; margin: 0 auto; }
        .table th, .table td {
            border-top: 0 !important;
        }
        hr {
          height: 1px;
          background-color: black;
        }

        .print-loction .barcode > div {
            margin: auto !important;
        }

        .delete-wpr { position: relative; }
        \t.delete { display: block; color: #000; text-decoration: none; position: absolute; background: #EEEEEE; font-weight: bold; padding: 0px 3px; border: 1px solid; top: -6px; left: -22px; font-family: Verdana; font-size: 12px; }

        \t/* Extra CSS for Print Button*/
        \t.button {
        \t\tdisplay: -webkit-box;
        \t\tdisplay: -webkit-flex;
        \t\tdisplay: -ms-flexbox;
        \t\tdisplay: flex;
        \t\toverflow: hidden;
        \t\tmargin-top: 20px;
        \t\tpadding: 12px 12px;
        \t\tcursor: pointer;
        \t\t-webkit-user-select: none;
        \t\t-moz-user-select: none;
        \t\t-ms-user-select: none;
        \t\tuser-select: none;
        \t\t-webkit-transition: all 60ms ease-in-out;
        \t\ttransition: all 60ms ease-in-out;
        \t\ttext-align: center;
        \t\twhite-space: nowrap;
        \t\ttext-decoration: none !important;

        \t\tcolor: #fff;
        \t\tborder: 0 none;
        \t\tborder-radius: 4px;
        \t\tfont-size: 14px;
        \t\tfont-weight: 500;
        \t\tline-height: 1.3;
        \t\t-webkit-appearance: none;
        \t\t-moz-appearance: none;

        \t\t-webkit-box-pack: center;
        \t\t-webkit-justify-content: center;
        \t\t-ms-flex-pack: center;
        \t\tjustify-content: center;
        \t\t-webkit-box-align: center;
        \t\t-webkit-align-items: center;
        \t\t-ms-flex-align: center;
        \t\talign-items: center;
        \t\t-webkit-box-flex: 0;
        \t\t-webkit-flex: 0 0 160px;
        \t\t-ms-flex: 0 0 160px;
        \t\tflex: 0 0 160px;
        \t}
        \t.button:hover {
        \t\t-webkit-transition: all 60ms ease;
        \t\ttransition: all 60ms ease;
        \t\topacity: .85;
        \t}
        \t.button:active {
        \t\t-webkit-transition: all 60ms ease;
        \t\ttransition: all 60ms ease;
        \t\topacity: .75;
        \t}
        \t.button:focus {
        \t\toutline: 1px dotted #959595;
        \t\toutline-offset: -4px;
        \t}

        \t.button.-regular {
        \t\tcolor: #202129;
        \t\tbackground-color: #edeeee;
        \t}
        \t.button.-regular:hover {
        \t\tcolor: #202129;
        \t\tbackground-color: #e1e2e2;
        \t\topacity: 1;
        \t}
        \t.button.-regular:active {
        \t\tbackground-color: #d5d6d6;
        \t\topacity: 1;
        \t}

        \t.button.-dark {
        \t\tcolor: #FFFFFF;
        \t\tbackground: #333030;
        \t}
        \t.button.-dark:focus {
        \t\toutline: 1px dotted white;
        \t\toutline-offset: -4px;
        \t}

        \t@media print
        \t{
        \t\t.no-print, .no-print *
        \t\t{
        \t\t\tdisplay: none !important;
        \t\t}
        \t}

            .print-block {
                border: 1px solid black;
                padding: 10px;
                -webkit-border-radius: 2px;
                -moz-border-radius: 2px;
                border-radius: 15px;
                width: 98%;
                margin-bottom: 120px;
                /* height: 275px; */
                background-color: #ffffff !important;
                color: black;
                margin: 10px auto;
            }
        \t.print-block{
                font-size: 40px;
                font-weight: bold;
        \t}

        \t.print-break{
        \t\tborder: 1px solid black;
        \t    margin-bottom: 5px;
        \t    margin-top: -10px;
        \t}
        \t.print-loction h2{
        \t\tcolor: black;
        \t}
            @media  print {
                .print-block {
                    background-color: #ffffff !important;
                    -webkit-print-color-adjust: exact;
                }
                #kt_header{
                \tdisplay: none;
                }
                div#kt_content{
                \tpadding-top: 0px;
                }
                div#kt_header, div#kt_aside, button#kt_aside_close_btn, div#kt_header_mobile{
                \tdisplay: none !important;
                }
            }
        ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 610
($context["this"] ?? null), "param", [], "any", false, false, false, 610), "type", [], "any", false, false, false, 610) == "label-v2")) {
            // line 611
            echo "            #page-wrap { width: 800px; margin: 0 auto; }
            .table th, .table td {
                border-top: 0 !important;
            }
            hr {
              height: 1px;
              background-color: black;
            }

            .delete-wpr { position: relative; }
            \t.delete { display: block; color: #000; text-decoration: none; position: absolute; background: #EEEEEE; font-weight: bold; padding: 0px 3px; border: 1px solid; top: -6px; left: -22px; font-family: Verdana; font-size: 12px; }

            \t/* Extra CSS for Print Button*/
            \t.button {
            \t\tdisplay: -webkit-box;
            \t\tdisplay: -webkit-flex;
            \t\tdisplay: -ms-flexbox;
            \t\tdisplay: flex;
            \t\toverflow: hidden;
            \t\tmargin-top: 20px;
            \t\tpadding: 12px 12px;
            \t\tcursor: pointer;
            \t\t-webkit-user-select: none;
            \t\t-moz-user-select: none;
            \t\t-ms-user-select: none;
            \t\tuser-select: none;
            \t\t-webkit-transition: all 60ms ease-in-out;
            \t\ttransition: all 60ms ease-in-out;
            \t\ttext-align: center;
            \t\twhite-space: nowrap;
            \t\ttext-decoration: none !important;

            \t\tcolor: #fff;
            \t\tborder: 0 none;
            \t\tborder-radius: 4px;
            \t\tfont-size: 14px;
            \t\tfont-weight: 500;
            \t\tline-height: 1.3;
            \t\t-webkit-appearance: none;
            \t\t-moz-appearance: none;

            \t\t-webkit-box-pack: center;
            \t\t-webkit-justify-content: center;
            \t\t-ms-flex-pack: center;
            \t\tjustify-content: center;
            \t\t-webkit-box-align: center;
            \t\t-webkit-align-items: center;
            \t\t-ms-flex-align: center;
            \t\talign-items: center;
            \t\t-webkit-box-flex: 0;
            \t\t-webkit-flex: 0 0 160px;
            \t\t-ms-flex: 0 0 160px;
            \t\tflex: 0 0 160px;
            \t}
            \t.button:hover {
            \t\t-webkit-transition: all 60ms ease;
            \t\ttransition: all 60ms ease;
            \t\topacity: .85;
            \t}
            \t.button:active {
            \t\t-webkit-transition: all 60ms ease;
            \t\ttransition: all 60ms ease;
            \t\topacity: .75;
            \t}
            \t.button:focus {
            \t\toutline: 1px dotted #959595;
            \t\toutline-offset: -4px;
            \t}

            \t.button.-regular {
            \t\tcolor: #202129;
            \t\tbackground-color: #edeeee;
            \t}
            \t.button.-regular:hover {
            \t\tcolor: #202129;
            \t\tbackground-color: #e1e2e2;
            \t\topacity: 1;
            \t}
            \t.button.-regular:active {
            \t\tbackground-color: #d5d6d6;
            \t\topacity: 1;
            \t}

            \t.button.-dark {
            \t\tcolor: #FFFFFF;
            \t\tbackground: #333030;
            \t}
            \t.button.-dark:focus {
            \t\toutline: 1px dotted white;
            \t\toutline-offset: -4px;
            \t}

            \t@media print
            \t{
            \t\t.no-print, .no-print *
            \t\t{
            \t\t\tdisplay: none !important;
            \t\t}
            \t}
            ";
        }
        // line 711
        echo "    </style>
";
        // line 306
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
        // line 713
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 714
        echo "<script type=\"text/javascript\">
KTUtil.ready(function () {
    window.print();
    //setTimeout(function(){window.close();},10);
});
</script>
";
        // line 713
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/MainFiles--/themes/spotlayer/pages/dashboard/order-print.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1309 => 713,  1301 => 714,  1299 => 713,  1297 => 306,  1294 => 711,  1192 => 611,  1190 => 610,  1043 => 465,  1041 => 464,  928 => 358,  900 => 332,  893 => 327,  891 => 326,  873 => 310,  871 => 309,  867 => 307,  865 => 306,  862 => 305,  852 => 298,  844 => 293,  840 => 292,  835 => 290,  825 => 283,  814 => 274,  805 => 272,  801 => 271,  792 => 267,  784 => 262,  776 => 259,  766 => 251,  760 => 248,  756 => 247,  753 => 246,  751 => 245,  746 => 243,  742 => 242,  719 => 232,  702 => 231,  692 => 230,  682 => 229,  666 => 226,  649 => 225,  639 => 224,  629 => 223,  621 => 218,  615 => 215,  604 => 209,  592 => 204,  580 => 201,  569 => 192,  567 => 191,  558 => 185,  554 => 184,  548 => 181,  544 => 180,  520 => 177,  516 => 176,  505 => 167,  499 => 165,  497 => 164,  492 => 163,  490 => 162,  485 => 161,  483 => 160,  478 => 159,  476 => 158,  469 => 154,  465 => 153,  460 => 150,  454 => 148,  452 => 147,  447 => 146,  445 => 145,  440 => 144,  438 => 143,  433 => 142,  431 => 141,  416 => 129,  410 => 125,  408 => 124,  399 => 118,  395 => 117,  383 => 108,  378 => 106,  368 => 99,  356 => 96,  350 => 93,  340 => 92,  334 => 89,  324 => 88,  318 => 85,  308 => 84,  305 => 83,  302 => 82,  299 => 81,  296 => 80,  293 => 79,  290 => 78,  287 => 77,  284 => 76,  281 => 75,  278 => 74,  276 => 73,  273 => 72,  258 => 69,  254 => 68,  250 => 67,  246 => 66,  243 => 65,  239 => 64,  228 => 62,  224 => 61,  220 => 60,  216 => 59,  206 => 53,  202 => 52,  194 => 49,  190 => 48,  187 => 47,  181 => 44,  177 => 43,  174 => 42,  172 => 41,  165 => 37,  161 => 36,  145 => 35,  134 => 34,  130 => 33,  125 => 31,  111 => 30,  97 => 20,  92 => 18,  87 => 15,  80 => 14,  72 => 13,  64 => 12,  57 => 11,  46 => 7,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if this.param.type == 'shipment' %}
<div id=\"page-wrap\">
    <table width=\"100%\">
        <tr>
            <td style=\"border: 0;  text-align: left\" width=\"18%\">
    \t\t\t<div id=\"logo\" style=\"text-align:left\">
    \t\t\t\t<img src='{% if settings.logo %}{{ settings.logo.path }}{% else %}./admin/media/logos/logo.svg{% endif %}' style=\"max-height:70px\">
                </div>
            </td>
\t\t\t<td style=\"border: 0;  text-align: center\" width=\"56%\">
\t\t\t\t{% if settings.company.tax_number and settings.company.tax_number != '' and settings.company.tax_number != '-' %}{{'Tax'|__}}: {{ settings.company.tax_number }} </br>{% endif %}
\t\t\t\t{% if settings.company.company_phone %}{{'Phone'|__}}: {{ settings.company.company_phone }} </br>{% endif %}
\t\t\t\t{% if settings.company.primary_email %}{{'Email'|__}}: {{ settings.company.primary_email }} </br>{% endif %}
\t\t\t\t{% if settings.company.address %}{{'Street'|__}}: {{ settings.company.address }}{% endif %}
            </td>
            <td style=\"border: 0;  text-align: center\" width=\"48%\" id=\"barcodeHTML\">
                </br>
                {{ barcodeHTML({data: order.barcode, type: 'CODABAR', width: '1'}) }}
                <div class=\"clearfix\"></div>
                <p>{{settings.tracking.prefix_order}}{{order.barcode}}</p>
\t\t\t</td>
        </tr>
    </table>
    <hr>
    </br>
    <div id=\"customer\">

        <table id=\"meta\">
            <tr>
                <td rowspan=\"5\" style=\"border: 1px solid white; border-{% if currentLang == 'ar' %}left{% else %}right{% endif %}: 1px solid black;text-align: {% if currentLang == 'ar' %}right{% else %}left{% endif %}\" width=\"62%\">
                <strong>{{'Bill to'|__}}</strong> </br>
\t\t\t\t<table id=\"items\">
\t\t\t\t\t<b>{{order.receiver.name}}</b></br> </br>
\t\t\t\t\t{% if order.receiver_address.area %}{{order.receiver_address.area.name}} - {% endif %}{% if order.receiver_address.zipcode %}{{'ZIP'|__}}:{{order.receiver_address.zipcode}} </br>{% endif %}
\t\t\t\t\t{% if order.receiver_address.thecity %}{{order.receiver_address.thecity.name}} | {% endif %}{% if order.receiver_address.thestate %}{{order.receiver_address.thestate.name}} | {% endif %}{% if order.receiver_address.thecountry %}{{order.receiver_address.thecountry.name}} {% endif %}</br>
\t\t\t\t\t{{order.receiver.mobile}} </br>
\t\t\t\t\t{{order.receiver.email}}
\t\t\t\t</table>
\t\t\t\t</td>
            </tr>
            {% if order.courier_id %}
                <tr>
    \t\t\t\t<td class=\"meta-head\"><p style=\"color:white;\">{{'Courier Company'|__}}</p></td>
                    <td>{{order.courier.name}}</td>
                </tr>
            {% endif %}
            <tr>
                <td class=\"meta-head\"><p style=\"color:white;\">{{'Shipping date'|__}}</p></td>
                <td>{{order.ship_date|date(settings.dateformat)}}  {{order.ship_date|date('h:i a')}}</td>
            </tr>
            <tr>
                <td class=\"meta-head\"><p style=\"color:white;\">{{'Invoice No'|__}}.</p></td>
                <td><b>{{settings.tracking.prefix_order}}{{order.number}}</b></td>
            </tr>
        </table>
    </div>
    <table id=\"items\">
        <tr>
            <th align=\"center\"><p style=\"color:white;\">{{'Category'|__}}</p></th>
            <th width=\"48%\"><p style=\"color:white;\">{{'Description'|__}}</p></th>
\t\t\t<th align=\"center\"><p style=\"color:white;\">{{'Quantity'|__}}</p></th>
            <th {% if currentLang == 'ar' %}align=\"left\"{% else %}align=\"right\"{% endif %}><p style=\"color:white;\">{{'Weight'|__}}</p></th>
        </tr>
        {% for item in order.items %}
            <tr>
                <th align=\"center\" style=\"background:#fff\"><p>{{item.category.name|capitalize}}</p></th>
                <th width=\"48%\" style=\"background:#fff\"><p>{{item.description}}</p></th>
    \t\t\t<th align=\"center\" style=\"background:#fff\"><p>{{item.quantity}}</p></th>
                <th {% if currentLang == 'ar' %}align=\"left\"{% else %}align=\"right\"{% endif %} style=\"background:#fff\"><p>{{item.weight}}</p></th>
            </tr>
        {% endfor %}

        {% set total = 0 %}
        {% if order.return_defray == 1 %}
            {% set total = total + order.package_fee %}
        {% endif %}
        {% if order.return_package_fee == 1 %}
            {% set total = total + order.return_courier_fee %}
        {% endif %}
        {% if order.payment_type == 1 %}
            {% set total = total + (order.courier_fee+(order.tax/100*order.courier_fee)+(order.insurance/100*order.courier_fee)) %}
        {% endif %}
\t\t<tr>
\t\t\t<td {% if currentLang == 'ar' %}align=\"left\"{% else %}align=\"right\"{% endif %} colspan=\"3\" class=\"total-line\">{{'Sub Total'|__}}</td>
\t\t\t<td  align=\"right\" class=\"total-value\"><div id=\"total\"><span class=\"price\"> {{(total-(order.tax/100*order.courier_fee)-(order.insurance/100*order.courier_fee))|currency}} </span> </div></td>
\t\t</tr>
\t\t<tr>
\t\t\t<td  {% if currentLang == 'ar' %}align=\"left\"{% else %}align=\"right\"{% endif %} colspan=\"3\" class=\"total-line\">{{'TAX'|__}} +</td>
\t\t\t<td  align=\"right\" class=\"total-value\"><div id=\"total\"> {{(order.tax/100*order.courier_fee)|currency}} </div></td>
\t\t</tr>
\t\t<tr>
\t\t\t<td  {% if currentLang == 'ar' %}align=\"left\"{% else %}align=\"right\"{% endif %} colspan=\"3\" class=\"total-line\">{{'Insurance'|__}} +</td>
\t\t\t<td  align=\"right\" class=\"total-value\"><div id=\"total\"> {{(order.insurance/100*order.courier_fee)|currency}} </div></td>
\t\t</tr>
\t\t<tr>
\t\t\t<td {% if currentLang == 'ar' %}align=\"left\"{% else %}align=\"right\"{% endif %} colspan=\"3\" class=\"total-line balance\"><p style=\"color:white;\">{{'Grand total'|__}} </p></td>


\t\t\t<td align=\"right\" class=\"total-value balance\"><div class=\"due\"> <p style=\"color:white;\"><b>{{total|currency}}</b></p></div></td>
\t\t</tr>
    </table>

    <!--    end related transactions -->

        <div id=\"terms\">
            <h5>{{'TERMS'|__}}</h5>
\t\t\t <table id=\"related_transactions\" style=\"width: 100%\">
\t\t\t\t<p align=\"justify\">{{settings.invoice.terms}}</p>
\t\t\t</table>
\t\t\t</br></br></br></br>
\t\t\t<table id=\"signing\">
\t\t\t\t<tr class=\"noBorder\">
\t\t\t\t\t<td align=\"center\"><h4></h4></td>
\t\t\t\t\t<td align=\"center\"><h4></h4></td>
\t\t\t\t</tr>
\t\t\t\t<tr class=\"noBorder\">
\t\t\t\t\t<td align=\"center\">{{settings.invoice.signing_company|capitalize|__}}</td>
\t\t\t\t\t<td align=\"center\">{{settings.invoice.signing_customer|capitalize|__}}</td>
\t\t\t\t</tr>
\t\t\t</table>
        </div>
</div>

{% elseif this.param.type == 'label' %}
    <div id=\"page-wrap\">
    \t<div class=\"print-block\">
    \t\t<div class=\"row\">
    \t\t\t<div class=\"col-md-12\">
    \t\t\t\t<p>{{order.receiver.name}} </p>
    \t\t\t</div>
    \t\t</div>

    \t\t<div class=\"print-break\"></div>

    \t\t<div class=\"print-loction\">

                <table width=\"100%\">
                    <tr>
                        <td width=\"10%\">
                            <h2 style=\"margin-top: -70px;padding-left: 20px;font-size:80px\">
                                {% if settings.tracking.default_tracking_id == 1 %}
                                    {{order.sender_address.thecountry.id}}
                                {% elseif settings.tracking.default_tracking_id == 2 %}
                                    {{order.sender_address.thestate.id}}
                                {% elseif settings.tracking.default_tracking_id == 3 %}
                                    {{order.sender_address.thecity.id}}
                                {% elseif settings.tracking.default_tracking_id == 4 %}
                                    {{order.sender_address.area.id}}
                                {% endif %}
                            </h2>
                        </td>
                        <td width=\"80%\" style=\"text-align:center;\" class=\"barcode\">
                            {{ barcodeHTML({data: order.barcode, type: 'CODABAR', width: '4', height: '100'}) }}
                            <p>{{order.barcode}}</p>
                        </td>
                        <td width=\"10%\">
                            <h2 style=\"margin-top: -70px;padding-left: 20px;font-size:80px\">
                                {% if settings.tracking.default_tracking_id == 1 %}
                                    {{order.receiver_address.thecountry.id}}
                                {% elseif settings.tracking.default_tracking_id == 2 %}
                                    {{order.receiver_address.thestate.id}}
                                {% elseif settings.tracking.default_tracking_id == 3 %}
                                    {{order.receiver_address.thecity.id}}
                                {% elseif settings.tracking.default_tracking_id == 4 %}
                                    {{order.receiver_address.area.id}}
                                {% endif %}
                            </h2>
                        </td>
                    </tr>
                </table>

    \t\t</div>
    \t\t<div>
                <table>
                    <tr>
                        <td width=\"25%\">{{'Address'|__}} </td>
                        <td>{{order.receiver_address.area.name}}{% if order.receiver_address.zipcode %}, {{'ZIP'|__}}:{{order.receiver_address.zipcode}}{% endif %}{% if order.receiver_address.thecity %}, {{order.receiver_address.thecity.name}}{% endif %}{% if order.receiver_address.thestate %}, {{order.receiver_address.thestate.name}}{% endif %}{% if order.receiver_address.thecountry %}, {{order.receiver_address.thecountry.name}}{% endif %}</td>
                    </tr>
                    <tr>
                        <td width=\"25%\">{{'Phone'|__}} </td>
                        <td>{{order.receiver.mobile}}</td>
                    </tr>
                    <tr>
                        <td width=\"25%\">{{'Sender'|__}} </td>
                        <td>{{order.sender.name}}</td>
                    </tr>
                </table>
    \t\t</div>
    \t</div>
    </div>
{% elseif this.param.type == 'label-v2' %}
    <div id=\"page-wrap\">
        <table class=\"table\" style=\" margin-left: auto; margin-right: auto; font-family:Arial, Helvetica, sans-serif;\" border=\"0\" width=\"100%\" >
            <tbody>
                <tr>
                    <td>
                        <table style=\"text-align: center; table-layout:fixed;\"   cellspacing=\"2\" width=\"100%\">
                            <tbody>
                                <tr>
                                    <td width=\"75%\">
                                        <p style=\"text-align: {% if currentLang == 'ar' %}right{% else %}left{% endif %};\"><font size=6 face=\"arial\"><strong>{{ settings.company.title }}</strong></font></p>
                                    </td>
                                    <td width=\"25%\">
                                        <p style=\"text-align: center;\"><img src='{% if settings.logo %}{{ settings.logo.path }}{% else %}./admin/media/logos/logo-10.png{% endif %}' border='0'></p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        {{'now'|date(settings.dateformat)}} {{'now'|date('h:i a')}}
                        <hr />
                        <table  width=\"100%\" style=\"text-align: center; table-layout:fixed;\">
                            <tbody>
                                <tr bgcolor=\"#d6eeff\">
                                    <td width=\"50%\">
                                        <p style=\"text-align: center;\"><strong><font size=\"5\">{{'FROM'|__}}</font></strong></p>
                                    </td>
                                    <td width=\"50%\">
                                        <p style=\"text-align: center;\"><font size=\"5\" face=\"arial\"><strong>{{'SHIP TO'|__}}</strong></font></p>
                                    </td>
                                </tr>
                                <tr>
                                    <font size=4><td align=\"center\"  style=\" border-top-color:#000000; border-right-color:#333; border-right-width:2px;border-right-style:solid;  border-collapse: collapse;\">
                                        <p style=\"text-align: {% if currentLang == 'ar' %}right{% else %}left{% endif %};\"><font size=\"4\"><b>{{order.sender.name}}</b></font></p>
                                        <p style=\"text-align: {% if currentLang == 'ar' %}right{% else %}left{% endif %}; \">{{order.sender.mobile}}</p>
                                        <p style=\"text-align: {% if currentLang == 'ar' %}right{% else %}left{% endif %}; \"><strong>{{order.sender_address.area.name}} {% if order.sender_address.zipcode %}- {{'ZIP'|__}}:{{order.sender_address.zipcode}}{% endif %}</strong></p>
                                        <p style=\"text-align: {% if currentLang == 'ar' %}right{% else %}left{% endif %};\"><font size=5><strong>{{order.sender_address.thecity.name}} | {{order.sender_address.thestate.name}} | {{order.sender_address.thecountry.name}}</strong></font></p>
                                    </td>
                                    <td>
                                        <p style=\"text-align: {% if currentLang == 'ar' %}right{% else %}left{% endif %};\"><font size=\"4\"><b>{{order.receiver.name}}</b></font></p>
                                        <p style=\"text-align: {% if currentLang == 'ar' %}right{% else %}left{% endif %}; \">{{order.receiver.mobile}}</p>
                                        <p style=\"text-align: {% if currentLang == 'ar' %}right{% else %}left{% endif %}; \"><strong>{{order.receiver_address.area.name}} {% if order.receiver_address.zipcode %}- {{'ZIP'|__}}:{{order.receiver_address.zipcode}}{% endif %}</strong></p>
                                        <p style=\"text-align: {% if currentLang == 'ar' %}right{% else %}left{% endif %};\"><font size=5><strong>{{order.receiver_address.thecity.name}} | {{order.receiver_address.thestate.name}} | {{order.receiver_address.thecountry.name}}</strong></font></p>
                                    </td></font>
                                </tr>
                            </tbody>
                        </table>
                        <hr />
                        <table style=\"text-align: center;\" width=\"100%\">
                            <tbody>
                                <tr>
                                    <td width=\"50%\">
                                        <p><strong>{{'DELIVERY TIME'|__}}</strong></p>
                                        <p><font size=4><b>{{order.deliverytime.name}}</b></font></p>
                                    </td>
                                    {% if order.courier %}
                                        <td width=\"50%\">
                                            <p><strong>{{'COMPANY COURIER'|__}}</strong></p>
                                            <p><font size=4><strong><b>{{order.courier.name}}</b></strong></p>
                                        </td>
                                    {% endif %}
                                </tr>
                          </tbody>
                      </table>
                      <hr />
                      <table style=\"text-align: center;\" width=\"100%\">
                            <tbody>
                                <tr>
                                    <td width=\"50%\">
                                        <p><strong>{{'PIECES'|__}} | {{'WEIGHT'|__}}</strong></p>
                                    </td>
                                    <td width=\"50%\">
                                        <p><strong>{{'CONTENTS'|__}}</strong></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width=\"50%\">
                                        <p><font size=4>{{order.items.count}} | {{order.items.sum('weight')}}</font></p>
                                    </td>
                                    <td width=\"50%\">
                                        <p>
                                            {% for item in order.items %}
                                                <font size=4>{{item.category.name|capitalize}}</font></br>
                                            {% endfor %}
                                    </p>
                                    </td>
                                </tr>
                          </tbody>
                      </table>
                      <hr />
                      <center  width=\"100%\">
                        <div class=\"output\">
                          <p style='padding:5px; text-align:center; font-size:100px; font-weight:bold;font-family:Arial,Helvetica;'>
                              {{order.receiver_address.area.id}}
                          </p>
                        </div>
                      </center>
                      <hr />
                      <center  width=\"100%\">
                        <div class=\"output\">
                          <p style='padding:5px; text-align:center; font-size:24px; font-family:Arial,Helvetica;'>{{'TRACKING'|__}} #</p>
                          <section class=\"output\">
                              {{ barcodeHTML({data: order.barcode, type: 'CODABAR', width: '4', height: '100'}) }}<br />
                              <h2>{{order.barcode}}</h2>
                          </section>
                        </div>
                      </center>
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      {{ barcodeHTML({data: order.barcode, type: 'QRCODE', width: '5', height: '5'}) }}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
{% endif %}

{% put styles %}
    <style>
    body { background: #fff}
    {% if this.param.type == 'shipment' %}
        * { margin: 0; padding: 0; }
        body {
            font: 14px/1.4 Helvetica, Arial, sans-serif;
        }
        #page-wrap { width: 800px; margin: 0 auto; }

        textarea { border: 0; font: 14px Helvetica, Arial, sans-serif; overflow: hidden; resize: none; }
        table { border-collapse: collapse; }
        table td, table th { border: 1px solid black; padding: 5px; }
\t\ttr.noBorder td {
\t\t  border: 0;
\t\t}

\t\ttd.Border td {
\t\t  border: 1px;
\t\t}
        {% if currentLang == 'ar' %}
            p,b, strong{
                font-family: Cairo;
                font-weight: bold;
            }
        {% endif %}

        #header { height: 15px; width: 100%; margin: 20px 0; background: #222; text-align: center; color: white; font: bold 15px Helvetica, Sans-Serif; text-decoration: uppercase; letter-spacing: 20px; padding: 8px 0px; }

        #address { width: 250px; height: 150px; float: left; }
        #customer { overflow: hidden; }
        #barcodeHTML  { text-align: center;}
        #barcodeHTML > div { margin:auto}
        #customer-title { font-size: 20px; font-weight: bold; float: left; }

        #meta { margin-top: 1px; width: 100%; float: right; }
        #meta td { text-align: right;  }
        #meta td.meta-head { text-align: left; background: #6c757d; }
        #meta td textarea { width: 100%; height: 20px; text-align: right; }

\t\t#signing { margin-top: 0px; width: 100%; float: center; }
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
\t\th4 {
\t\t\tborder-bottom: 1px solid black;
\t\t}

    {% elseif this.param.type == 'label' or this.param.type == 'label-1' %}
        #page-wrap { width: 100%; margin: 0 auto; }
        .table th, .table td {
            border-top: 0 !important;
        }
        hr {
          height: 1px;
          background-color: black;
        }

        .print-loction .barcode > div {
            margin: auto !important;
        }

        .delete-wpr { position: relative; }
        \t.delete { display: block; color: #000; text-decoration: none; position: absolute; background: #EEEEEE; font-weight: bold; padding: 0px 3px; border: 1px solid; top: -6px; left: -22px; font-family: Verdana; font-size: 12px; }

        \t/* Extra CSS for Print Button*/
        \t.button {
        \t\tdisplay: -webkit-box;
        \t\tdisplay: -webkit-flex;
        \t\tdisplay: -ms-flexbox;
        \t\tdisplay: flex;
        \t\toverflow: hidden;
        \t\tmargin-top: 20px;
        \t\tpadding: 12px 12px;
        \t\tcursor: pointer;
        \t\t-webkit-user-select: none;
        \t\t-moz-user-select: none;
        \t\t-ms-user-select: none;
        \t\tuser-select: none;
        \t\t-webkit-transition: all 60ms ease-in-out;
        \t\ttransition: all 60ms ease-in-out;
        \t\ttext-align: center;
        \t\twhite-space: nowrap;
        \t\ttext-decoration: none !important;

        \t\tcolor: #fff;
        \t\tborder: 0 none;
        \t\tborder-radius: 4px;
        \t\tfont-size: 14px;
        \t\tfont-weight: 500;
        \t\tline-height: 1.3;
        \t\t-webkit-appearance: none;
        \t\t-moz-appearance: none;

        \t\t-webkit-box-pack: center;
        \t\t-webkit-justify-content: center;
        \t\t-ms-flex-pack: center;
        \t\tjustify-content: center;
        \t\t-webkit-box-align: center;
        \t\t-webkit-align-items: center;
        \t\t-ms-flex-align: center;
        \t\talign-items: center;
        \t\t-webkit-box-flex: 0;
        \t\t-webkit-flex: 0 0 160px;
        \t\t-ms-flex: 0 0 160px;
        \t\tflex: 0 0 160px;
        \t}
        \t.button:hover {
        \t\t-webkit-transition: all 60ms ease;
        \t\ttransition: all 60ms ease;
        \t\topacity: .85;
        \t}
        \t.button:active {
        \t\t-webkit-transition: all 60ms ease;
        \t\ttransition: all 60ms ease;
        \t\topacity: .75;
        \t}
        \t.button:focus {
        \t\toutline: 1px dotted #959595;
        \t\toutline-offset: -4px;
        \t}

        \t.button.-regular {
        \t\tcolor: #202129;
        \t\tbackground-color: #edeeee;
        \t}
        \t.button.-regular:hover {
        \t\tcolor: #202129;
        \t\tbackground-color: #e1e2e2;
        \t\topacity: 1;
        \t}
        \t.button.-regular:active {
        \t\tbackground-color: #d5d6d6;
        \t\topacity: 1;
        \t}

        \t.button.-dark {
        \t\tcolor: #FFFFFF;
        \t\tbackground: #333030;
        \t}
        \t.button.-dark:focus {
        \t\toutline: 1px dotted white;
        \t\toutline-offset: -4px;
        \t}

        \t@media print
        \t{
        \t\t.no-print, .no-print *
        \t\t{
        \t\t\tdisplay: none !important;
        \t\t}
        \t}

            .print-block {
                border: 1px solid black;
                padding: 10px;
                -webkit-border-radius: 2px;
                -moz-border-radius: 2px;
                border-radius: 15px;
                width: 98%;
                margin-bottom: 120px;
                /* height: 275px; */
                background-color: #ffffff !important;
                color: black;
                margin: 10px auto;
            }
        \t.print-block{
                font-size: 40px;
                font-weight: bold;
        \t}

        \t.print-break{
        \t\tborder: 1px solid black;
        \t    margin-bottom: 5px;
        \t    margin-top: -10px;
        \t}
        \t.print-loction h2{
        \t\tcolor: black;
        \t}
            @media  print {
                .print-block {
                    background-color: #ffffff !important;
                    -webkit-print-color-adjust: exact;
                }
                #kt_header{
                \tdisplay: none;
                }
                div#kt_content{
                \tpadding-top: 0px;
                }
                div#kt_header, div#kt_aside, button#kt_aside_close_btn, div#kt_header_mobile{
                \tdisplay: none !important;
                }
            }
        {% elseif this.param.type == 'label-v2' %}
            #page-wrap { width: 800px; margin: 0 auto; }
            .table th, .table td {
                border-top: 0 !important;
            }
            hr {
              height: 1px;
              background-color: black;
            }

            .delete-wpr { position: relative; }
            \t.delete { display: block; color: #000; text-decoration: none; position: absolute; background: #EEEEEE; font-weight: bold; padding: 0px 3px; border: 1px solid; top: -6px; left: -22px; font-family: Verdana; font-size: 12px; }

            \t/* Extra CSS for Print Button*/
            \t.button {
            \t\tdisplay: -webkit-box;
            \t\tdisplay: -webkit-flex;
            \t\tdisplay: -ms-flexbox;
            \t\tdisplay: flex;
            \t\toverflow: hidden;
            \t\tmargin-top: 20px;
            \t\tpadding: 12px 12px;
            \t\tcursor: pointer;
            \t\t-webkit-user-select: none;
            \t\t-moz-user-select: none;
            \t\t-ms-user-select: none;
            \t\tuser-select: none;
            \t\t-webkit-transition: all 60ms ease-in-out;
            \t\ttransition: all 60ms ease-in-out;
            \t\ttext-align: center;
            \t\twhite-space: nowrap;
            \t\ttext-decoration: none !important;

            \t\tcolor: #fff;
            \t\tborder: 0 none;
            \t\tborder-radius: 4px;
            \t\tfont-size: 14px;
            \t\tfont-weight: 500;
            \t\tline-height: 1.3;
            \t\t-webkit-appearance: none;
            \t\t-moz-appearance: none;

            \t\t-webkit-box-pack: center;
            \t\t-webkit-justify-content: center;
            \t\t-ms-flex-pack: center;
            \t\tjustify-content: center;
            \t\t-webkit-box-align: center;
            \t\t-webkit-align-items: center;
            \t\t-ms-flex-align: center;
            \t\talign-items: center;
            \t\t-webkit-box-flex: 0;
            \t\t-webkit-flex: 0 0 160px;
            \t\t-ms-flex: 0 0 160px;
            \t\tflex: 0 0 160px;
            \t}
            \t.button:hover {
            \t\t-webkit-transition: all 60ms ease;
            \t\ttransition: all 60ms ease;
            \t\topacity: .85;
            \t}
            \t.button:active {
            \t\t-webkit-transition: all 60ms ease;
            \t\ttransition: all 60ms ease;
            \t\topacity: .75;
            \t}
            \t.button:focus {
            \t\toutline: 1px dotted #959595;
            \t\toutline-offset: -4px;
            \t}

            \t.button.-regular {
            \t\tcolor: #202129;
            \t\tbackground-color: #edeeee;
            \t}
            \t.button.-regular:hover {
            \t\tcolor: #202129;
            \t\tbackground-color: #e1e2e2;
            \t\topacity: 1;
            \t}
            \t.button.-regular:active {
            \t\tbackground-color: #d5d6d6;
            \t\topacity: 1;
            \t}

            \t.button.-dark {
            \t\tcolor: #FFFFFF;
            \t\tbackground: #333030;
            \t}
            \t.button.-dark:focus {
            \t\toutline: 1px dotted white;
            \t\toutline-offset: -4px;
            \t}

            \t@media print
            \t{
            \t\t.no-print, .no-print *
            \t\t{
            \t\t\tdisplay: none !important;
            \t\t}
            \t}
            {% endif %}
    </style>
{% endput %}
{% put scripts %}
<script type=\"text/javascript\">
KTUtil.ready(function () {
    window.print();
    //setTimeout(function(){window.close();},10);
});
</script>
{% endput %}", "/Applications/MAMP/htdocs/MainFiles--/themes/spotlayer/pages/dashboard/order-print.htm", "");
    }
}
