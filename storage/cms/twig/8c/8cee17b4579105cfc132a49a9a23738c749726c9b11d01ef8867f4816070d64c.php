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

/* /Applications/MAMP/htdocs/test/themes/spotlayer/pages/dashboard/reports.htm */
class __TwigTemplate_b604ba2b1c9a3a624cc6740706d05fbad9af20ef4c020f4504be286e8ae7444b extends \Twig\Template
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
        echo "<div class=\"kt-portlet\">
    <div class=\"kt-portlet__body kt-portlet__body--fit\">
        <div class=\"kt-portlet__body  list-controls\" id=\"filter_form\">
            <div class=\"form-group row kt-margin-b-0\">
                <div class=\"col-lg-4\">
                    <label>";
        // line 6
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Date range"]);
        echo ":</label>
                    <div class='input-group pull-right' id='daterangepicker'>
                        <input type='text' class=\"form-control\" name=\"created_at\" id=\"created_at\" readonly placeholder=\"";
        // line 8
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Select date range"]);
        echo "\"/>
                        <div class=\"input-group-append\">
                            <span class=\"input-group-text\"><i class=\"la la-calendar-check-o\"></i></span>
                        </div>
                    </div>
                </div>
                ";
        // line 14
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 14), "type", [], "any", false, false, false, 14) == "shipments")) {
            // line 15
            echo "                    <div class=\"col-lg-3\">
                        <label>";
            // line 16
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sender"]);
            echo ":</label>
                        <select class=\"form-control clients\" name=\"sender_id\" id=\"sender_id\" >
                            <option data-hidden=\"true\"></option>
                        </select>
                    </div>
                    <div class=\"col-lg-3\">
                        <label>";
            // line 22
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Employee"]);
            echo ":</label>
                        <select class=\"form-control m-bootstrap-select\" name=\"employee_id\" id=\"employee_id\" data-live-search=\"true\">
                             <option data-hidden=\"true\"></option>
                             ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["employees"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["employee"]) {
                // line 26
                echo "                                <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "id", [], "any", false, false, false, 26), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "name", [], "any", false, false, false, 26), "html", null, true);
                echo "</option>
                             ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employee'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "                        </select>
                    </div>
                ";
        }
        // line 31
        echo "                <div class=\"col-lg-2 kt-padding-t-25\">
                    <button type=\"reset\" class=\"btn btn-secondary\" id=\"reset\">";
        // line 32
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Reset"]);
        echo "</button>
                </div>
            </div>
        </div>
        <div class=\"kt-portlet__body\">
            <div class=\"kt-datatable\"></div>
        </div>
    </div>
</div>


";
        // line 43
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 44
        echo "<script type=\"text/javascript\">
\"use strict\";
var KTAppUserListDatatable = function () {
    // variables
    var datatable;

    // init
    var init = function (type) {

        datatable = \$('.kt-datatable').KTDatatable({
            translate: {
                records: {
                    processing: '";
        // line 56
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please wait"]);
        echo "...',
                    noRecords: '";
        // line 57
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No records found"]);
        echo "'
                },
                toolbar: {
                    pagination: {
                        items: {
                            default: {
                                first: '";
        // line 63
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["First"]);
        echo "',
                                prev: '";
        // line 64
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Previous"]);
        echo "',
                                next: '";
        // line 65
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Next"]);
        echo "',
                                last: '";
        // line 66
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Last"]);
        echo "',
                                more: '";
        // line 67
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["More pages"]);
        echo "',
                                input: '";
        // line 68
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Page number"]);
        echo "',
                                select: '";
        // line 69
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Select page size"]);
        echo "'
                            },

                            info: \"";
        // line 72
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
        // line 97
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 97), "type", [], "any", false, false, false, 97) == "shipments")) {
            // line 98
            echo "                            url: '";
            echo url("api/shipments");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 98), "kind", [], "any", false, false, false, 98), "html", null, true);
            echo "',
                        ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 99
($context["this"] ?? null), "param", [], "any", false, false, false, 99), "type", [], "any", false, false, false, 99) == "transactions")) {
            // line 100
            echo "                            url: '";
            echo url("api/transactions");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 100), "kind", [], "any", false, false, false, 100), "html", null, true);
            echo "',
                        ";
        }
        // line 102
        echo "                    },
                },
                pageSize: 10, // display 20 records per page
                serverPaging: true,
                serverFiltering: true,
                serverSorting: true,
            },
            // columns definition
            ";
        // line 110
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 110), "type", [], "any", false, false, false, 110) == "shipments")) {
            // line 111
            echo "                columns: [
                    {
                        field: \"number\",
                        title: \"";
            // line 114
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Tracking"]);
            echo "\",
                        sortable: true,
                        width: 100,
                        template: function(row) {
                            return '<a href=\"";
            // line 118
            echo url("dashboard/shipments");
            echo "/'+row.id+'/view\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "tracking", [], "any", false, false, false, 118), "prefix_order", [], "any", false, false, false, 118), "html", null, true);
            echo "'+row.shipping_number+'</a>';
                        }
                    },
                    {
                        field: \"details\",
                        title: \"";
            // line 123
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Shipment Details"]);
            echo "\",
                        sortable: false,
                        width: 'auto',
                        template: function(data, i) {
                            var output  = '\\
                                <div class=\"kt-user-card-v2 kt-user-card-v2--uncircle\">\\
                                    <div class=\"kt-user-card-v2__details\">\\
                                        <a href=\"";
            // line 130
            if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "client", 1 => "r"], "method", false, false, false, 130)) {
                echo url("dashboard/clients");
                echo "/'+data.sender.id+'/view";
            } else {
                echo "javascript:;";
            }
            echo "\" class=\"kt-user-card-v2__name\"><b class=\"kt-font-boldest\">";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sender"]);
            echo ":</b> ' + data.sender.name + '</a>\\
                                        <span class=\"kt-user-card-v2__email\"><b class=\"kt-font-boldest\">";
            // line 131
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["From"]);
            echo ":</b> ' + data.shipping_from_area + '</span>';
                            if(data.receiver){
                                output      += '\\
                                            <a href=\"";
            // line 134
            if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "client", 1 => "r"], "method", false, false, false, 134)) {
                echo url("dashboard/clients");
                echo "/'+data.receiver.id+'/view";
            } else {
                echo "javascript:;";
            }
            echo "\" class=\"kt-margin-t-5 kt-user-card-v2__name\"><b>";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Receiver"]);
            echo ":</b> ' + data.receiver.name + '</a>\\
                                            <span class=\"kt-user-card-v2__email\"><b class=\"kt-font-boldest\">";
            // line 135
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
            // line 145
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
            // line 154
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Status"]);
            echo "\",
                        sortable: false,
                        width: 80,
                        template: function(row) {
                            var output = '<span class=\"btn btn-bold btn-sm btn-label-' + row.status.color + '\">' + row.status.name + '</span>';
                            if(row.delayed == 1){
                                output  += '<span class=\"btn btn-bold btn-sm btn-label-danger\">";
            // line 160
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delayed"]);
            echo "</span>';
                            }

                            return output;
                        }
                    },
                    {
                        field: \"created_at_date\",
                        title: \"";
            // line 168
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Date"]);
            echo "\",
                        sortable: false,
                        width: 100,
                    }
                ]
            ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 173
($context["this"] ?? null), "param", [], "any", false, false, false, 173), "type", [], "any", false, false, false, 173) == "transactions")) {
            // line 174
            echo "                columns: [
                    {
                        field: \"id\",
                        title: \"";
            // line 177
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["ID"]);
            echo "\",
                        sortable: false,
                        width: 50,
        \t\t\t\ttemplate: function(data, i) {
        \t\t\t\t\tvar output = '\\
                                <div class=\"kt-user-card-v2 kt-user-card-v2--uncircle\">\\
                                    <div class=\"kt-user-card-v2__details\">\\
                                         <a href=\"";
            // line 184
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
            // line 192
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Movement Type"]);
            echo "\",
                        sortable: false,
                        width: 250,
                        template: function(row) {
                            //1 = withdrawl | 2 = deposit | 3 = Deduction from the wallet | 4 = add to wallet | 5 =  Deduction of commission balance | 6 = Add to the commission balance | 7 = Deduction from the balance of packages | 8 = Add  to the balance of packages
                            var status = {
                                1: {
                                    'title': '";
            // line 199
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Withdrawl"]);
            echo "',
                                    'class': 'info'
                                },
                                2: {
                                    'title': '";
            // line 203
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Deposit"]);
            echo "',
                                    'class': 'info'
                                },
                                3: {
                                    'title': '";
            // line 207
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Deduction from the wallet"]);
            echo "',
                                    'class': 'info'
                                },
                                4: {
                                    'title': '";
            // line 211
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Add to wallet"]);
            echo "',
                                    'class': 'info'
                                },
                                5: {
                                    'title': '";
            // line 215
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Deduction of commission balance"]);
            echo "',
                                    'class': 'info'
                                },
                                6: {
                                    'title': '";
            // line 219
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Add to the commission balance"]);
            echo "',
                                    'class': 'info'
                                },
                                7: {
                                    'title': '";
            // line 223
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Deduction from the balance of packages"]);
            echo "',
                                    'class': 'info'
                                },
                                8: {
                                    'title': '";
            // line 227
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Add  to the balance of packages"]);
            echo "',
                                    'class': 'info'
                                },
                            };
                            return '<span class=\"kt-badge kt-badge--' + status[row.movement].class + ' kt-badge--dot\"></span>&nbsp;<a href=\"";
            // line 231
            echo url("dashboard/transactions");
            echo "/' + row.id+ '/view\" class=\"kt-font-bold kt-font-' + status[row.movement].class + '\">' + status[row.movement].title + '</a>';
                        }
                    },
                    {
                        field: \"date\",
                        title: \"";
            // line 236
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Date"]);
            echo "\",
                        sortable: false,
                        width: 100,
                    },
                    {
                        field: \"amount\",
                        title: \"";
            // line 242
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Amount"]);
            echo "\",
                        sortable: false,
                        width: 100,
                    },
                    {
                        field: \"created_at\",
                        title: \"";
            // line 248
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
            // line 264
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
            // line 272
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
            // line 283
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
            // line 296
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
            // line 304
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
        // line 315
        echo "
        });
    };

    // search
    var search = function () {
        \$('#filter_form select,#filter_form input,#daterangepicker .form-control').each(function(){
            \$(this).on('change', function () {
                datatable.search(\$(this).val().toLowerCase(), \$(this).attr('name'));
            });
        });
        \$('#reset').on('click', function () {
            datatable.destroy();
            \$('#generalSearch').val('');
            \$('#filter_form select,#filter_form input,#daterangepicker .form-control').each(function(){
                \$(this).val('');
            });
            \$('#filter_form select').each(function(){
                \$(this).selectpicker(\"refresh\");
            });
            \$('#filter_form select.clients.#filter_form select.users').each(function(){
                \$(this).val('').trigger('change');
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
        // line 379
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Are you sure to update"]);
        echo " \" + ids.length + \" ";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["selected records status to"]);
        echo " \" + status + \" ?\",
                    type: \"info\",

                    confirmButtonText: \"";
        // line 382
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yes, update"]);
        echo "!\",
                    confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",

                    showCancelButton: true,
                    cancelButtonText: \"";
        // line 386
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No, cancel"]);
        echo "\",
                    cancelButtonClass: \"btn btn-sm btn-bold btn-default\"
                }).then(function (result) {
                    if (result.value) {
                        swal.fire({
                            title: '";
        // line 391
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Deleted"]);
        echo "!',
                            text: '";
        // line 392
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Your selected records statuses have been updated"]);
        echo "!',
                            type: 'success',
                            buttonsStyling: false,
                            confirmButtonText: \"";
        // line 395
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["OK"]);
        echo "\",
                            confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                        })
                        // result.dismiss can be 'cancel', 'overlay',
                        // 'close', and 'timer'
                    } else if (result.dismiss === 'cancel') {
                        swal.fire({
                            title: '";
        // line 402
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cancelled"]);
        echo "',
                            text: '";
        // line 403
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["You selected records statuses have not been updated"]);
        echo "!',
                            type: 'error',
                            buttonsStyling: false,
                            confirmButtonText: \"";
        // line 406
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
        // line 431
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Are you sure to delete"]);
        echo " \" + ids.length + \" ";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["selected records ?"]);
        echo "\",
                    type: \"error\",

                    confirmButtonText: \"";
        // line 434
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yes, delete!"]);
        echo "\",
                    confirmButtonClass: \"btn btn-sm btn-bold btn-danger\",

                    showCancelButton: true,
                    cancelButtonText: '";
        // line 438
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
        // line 446
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Deleted!"]);
        echo "',
                                    text: '";
        // line 447
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Your selected records have been deleted! :("]);
        echo "',
                                    type: 'success',
                                    buttonsStyling: false,
                                    confirmButtonText: '";
        // line 450
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
        // line 460
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cancelled"]);
        echo "',
                            text: '";
        // line 461
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["You selected records have not been deleted! :)"]);
        echo "',
                            type: 'error',
                            buttonsStyling: false,
                            confirmButtonText: '";
        // line 464
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
        // line 479
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Are you sure to delete this item ?"]);
        echo "\",
                type: \"danger\",

                confirmButtonText: \"";
        // line 482
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yes, delete!"]);
        echo "\",
                confirmButtonClass: \"btn btn-sm btn-bold btn-danger\",

                showCancelButton: true,
                cancelButtonText: '";
        // line 486
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
        // line 495
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Deleted!"]);
        echo "',
                                text: '";
        // line 496
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Your selected record has been deleted! :("]);
        echo "',
                                type: 'success',
                                buttonsStyling: false,
                                confirmButtonText: '";
        // line 499
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
        // line 509
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cancelled"]);
        echo "',
                        text: '";
        // line 510
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["You selected record has not been deleted! :)"]);
        echo "',
                        type: 'error',
                        buttonsStyling: false,
                        confirmButtonText: '";
        // line 513
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
        // line 535
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Are you sure you want to create new manifest with"]);
        echo " \" + ids.length + \" ";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["selected records ?"]);
        echo "\",
                    type: \"error\",

                    confirmButtonText: \"";
        // line 538
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yes!"]);
        echo "\",
                    confirmButtonClass: \"btn btn-sm btn-bold btn-danger\",

                    showCancelButton: true,
                    cancelButtonText: '";
        // line 542
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
        // line 550
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cancelled"]);
        echo "',
                            text: '";
        // line 551
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Your manifest not created! :)"]);
        echo "',
                            type: 'error',
                            buttonsStyling: false,
                            confirmButtonText: '";
        // line 554
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
            console.log(datatable.getTotalRows());
            \$('#kt_subheader_total').html(datatable.getTotalRows() + ' ";
        // line 572
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
        init: function (type) {
            init(type);
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

KTUtil.ready(function () {
    KTAppUserListDatatable.init();

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

    \$(\".clients\").select2({
        ";
        // line 633
        if ((($context["currentLang"] ?? null) == "ar")) {
            // line 634
            echo "            dir: \"rtl\",
        ";
        }
        // line 636
        echo "        language: {
            errorLoading: function () {
                return \"";
        // line 638
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["There is an error while searching"]);
        echo "...\";
            },
            inputTooLong: function (args) {
                return \"";
        // line 641
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["You must enter less characters"]);
        echo "...\";
            },
            inputTooShort: function (args) {
                return \"";
        // line 644
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["You must enter more characters"]);
        echo "...\";
            },
            loadingMore: function () {
                return \"";
        // line 647
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Loading More"]);
        echo "...\";
            },
            maximumSelected: function (args) {
                return \"";
        // line 650
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Maximum element has been selected"]);
        echo "...\";
            },
            noResults: function () {
                return \"";
        // line 653
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No result found"]);
        echo "...\";
            },
            searching: function () {
                return \"";
        // line 656
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Searching"]);
        echo "...\";
            }
        },
        placeholder: \"";
        // line 659
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
    \$(\".users\").select2({
        ";
        // line 687
        if ((($context["currentLang"] ?? null) == "ar")) {
            // line 688
            echo "            dir: \"rtl\",
        ";
        }
        // line 690
        echo "        language: {
            errorLoading: function () {
                return \"";
        // line 692
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["There is an error while searching"]);
        echo "...\";
            },
            inputTooLong: function (args) {
                return \"";
        // line 695
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["You must enter less characters"]);
        echo "...\";
            },
            inputTooShort: function (args) {
                return \"";
        // line 698
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["You must enter more characters"]);
        echo "...\";
            },
            loadingMore: function () {
                return \"";
        // line 701
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Loading More"]);
        echo "...\";
            },
            maximumSelected: function (args) {
                return \"";
        // line 704
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Maximum element has been selected"]);
        echo "...\";
            },
            noResults: function () {
                return \"";
        // line 707
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No result found"]);
        echo "...\";
            },
            searching: function () {
                return \"";
        // line 710
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Searching"]);
        echo "...\";
            }
        },
        placeholder: \"";
        // line 713
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Search for client"]);
        echo "\",
        allowClear: true,
        ajax: {
            transport: function(params, success, failure) {
                var \$request = \$.request('onGetusers', {
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

    moment.locale('";
        // line 741
        echo twig_escape_filter($this->env, ($context["currentLang"] ?? null), "html", null, true);
        echo "');
    moment.updateLocale('";
        // line 742
        echo twig_escape_filter($this->env, ($context["currentLang"] ?? null), "html", null, true);
        echo "', {
        months : [
            \"";
        // line 744
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["January"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["February"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["March"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["April"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["May"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["June"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["July"]);
        echo "\",
            \"";
        // line 745
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["August"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["September"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["October"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["November"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["December"]);
        echo "\"
        ]
    });
    var picker = \$('#daterangepicker');
    var start = moment().startOf('month');
    var end = moment().endOf('month');

    function cb(start, end, label) {
        var title = '';
        var range = '';

        if ((end - start) < 100 || label == 'Today') {
            title = '";
        // line 757
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Today"]);
        echo ":';
            range = start.format(KTAppOptions.daterangeformat);
        } else if (label == '";
        // line 759
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yesterday"]);
        echo "') {
            title = '";
        // line 760
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yesterday"]);
        echo ":';
            range = start.format(KTAppOptions.daterangeformat);
        } else {
            range = start.format(KTAppOptions.daterangeformat) + ' - ' + end.format(KTAppOptions.daterangeformat);
        }

        \$(\"#daterangepicker .form-control\").val(range);
        \$(\"#daterangepicker .form-control\").trigger('change');
    }

   \$(\"#daterangepicker\").daterangepicker({
       direction: KTUtil.isRTL(),
       locale: {
           \"format\": \"MM/DD/YYYY\",
           \"separator\": \" - \",
           \"applyLabel\": \"";
        // line 775
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Apply"]);
        echo "\",
           \"cancelLabel\": \"";
        // line 776
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cancel"]);
        echo "\",
           \"fromLabel\": \"";
        // line 777
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["From"]);
        echo "\",
           \"toLabel\": \"";
        // line 778
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["To"]);
        echo "\",
           \"customRangeLabel\": \"";
        // line 779
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Custom"]);
        echo "\",
           \"daysOfWeek\": [
               \"";
        // line 781
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Su"]);
        echo "\",
               \"";
        // line 782
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Mo"]);
        echo "\",
               \"";
        // line 783
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Tu"]);
        echo "\",
               \"";
        // line 784
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["We"]);
        echo "\",
               \"";
        // line 785
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Th"]);
        echo "\",
               \"";
        // line 786
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Fr"]);
        echo "\",
               \"";
        // line 787
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sa"]);
        echo "\"
           ],
           \"monthNames\": [
               \"";
        // line 790
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["January"]);
        echo "\",
               \"";
        // line 791
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["February"]);
        echo "\",
               \"";
        // line 792
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["March"]);
        echo "\",
               \"";
        // line 793
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["April"]);
        echo "\",
               \"";
        // line 794
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["May"]);
        echo "\",
               \"";
        // line 795
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["June"]);
        echo "\",
               \"";
        // line 796
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["July"]);
        echo "\",
               \"";
        // line 797
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["August"]);
        echo "\",
               \"";
        // line 798
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["September"]);
        echo "\",
               \"";
        // line 799
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["October"]);
        echo "\",
               \"";
        // line 800
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["November"]);
        echo "\",
               \"";
        // line 801
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["December"]);
        echo "\"
           ],
           \"monthsShort\": [
               \"";
        // line 804
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["January"]);
        echo "\",
               \"";
        // line 805
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["February"]);
        echo "\",
               \"";
        // line 806
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["March"]);
        echo "\",
               \"";
        // line 807
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["April"]);
        echo "\",
               \"";
        // line 808
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["May"]);
        echo "\",
               \"";
        // line 809
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["June"]);
        echo "\",
               \"";
        // line 810
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["July"]);
        echo "\",
               \"";
        // line 811
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["August"]);
        echo "\",
               \"";
        // line 812
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["September"]);
        echo "\",
               \"";
        // line 813
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["October"]);
        echo "\",
               \"";
        // line 814
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["November"]);
        echo "\",
               \"";
        // line 815
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["December"]);
        echo "\"
           ],
           \"firstDay\": 1
       },
       startDate: start,
       endDate: end,
       opens: 'left',
       ranges: {
           '";
        // line 823
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Today"]);
        echo "': [moment(), moment()],
           '";
        // line 824
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yesterday"]);
        echo "': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
           '";
        // line 825
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Last 7 Days"]);
        echo "': [moment().subtract(6, 'days'), moment()],
           '";
        // line 826
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Last 30 Days"]);
        echo "': [moment().subtract(29, 'days'), moment()],
           '";
        // line 827
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["This Month"]);
        echo "': [moment().startOf('month'), moment().endOf('month')],
           '";
        // line 828
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Last Month"]);
        echo "': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
       }
   }, cb);


   \$('#Print').on('click', function () {
       \$.request('onPrint', {
           ";
        // line 835
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 835), "type", [], "any", false, false, false, 835) == "shipments")) {
            // line 836
            echo "               data: {created_at: \$('#created_at').val(), sender_id: \$('#sender_id').val(), employee_id: \$('#employee_id').val()},
           ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 837
($context["this"] ?? null), "param", [], "any", false, false, false, 837), "type", [], "any", false, false, false, 837) == "transactions")) {
            // line 838
            echo "               data: {created_at: \$('#created_at').val(), for_id: \$('#for_id').val(), status_id: \$('#status_id').val()},
           ";
        }
        // line 840
        echo "           success: function(res){
                if (res.X_OCTOBER_REDIRECT) {
                    var win = window.open(res.X_OCTOBER_REDIRECT, '_blank');
                    win.focus();
                }
            },
       });
   });
   \$('#Export').on('click', function () {
       \$.request('onExport', {
           ";
        // line 850
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 850), "type", [], "any", false, false, false, 850) == "shipments")) {
            // line 851
            echo "               data: {created_at: \$('#created_at').val(), sender_id: \$('#sender_id').val(), employee_id: \$('#employee_id').val()},
           ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 852
($context["this"] ?? null), "param", [], "any", false, false, false, 852), "type", [], "any", false, false, false, 852) == "transactions")) {
            // line 853
            echo "               data: {created_at: \$('#created_at').val(), for_id: \$('#for_id').val(), status_id: \$('#status_id').val()},
           ";
        }
        // line 855
        echo "       });
   });
});
</script>
";
        // line 43
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/test/themes/spotlayer/pages/dashboard/reports.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1460 => 43,  1454 => 855,  1450 => 853,  1448 => 852,  1445 => 851,  1443 => 850,  1431 => 840,  1427 => 838,  1425 => 837,  1422 => 836,  1420 => 835,  1410 => 828,  1406 => 827,  1402 => 826,  1398 => 825,  1394 => 824,  1390 => 823,  1379 => 815,  1375 => 814,  1371 => 813,  1367 => 812,  1363 => 811,  1359 => 810,  1355 => 809,  1351 => 808,  1347 => 807,  1343 => 806,  1339 => 805,  1335 => 804,  1329 => 801,  1325 => 800,  1321 => 799,  1317 => 798,  1313 => 797,  1309 => 796,  1305 => 795,  1301 => 794,  1297 => 793,  1293 => 792,  1289 => 791,  1285 => 790,  1279 => 787,  1275 => 786,  1271 => 785,  1267 => 784,  1263 => 783,  1259 => 782,  1255 => 781,  1250 => 779,  1246 => 778,  1242 => 777,  1238 => 776,  1234 => 775,  1216 => 760,  1212 => 759,  1207 => 757,  1184 => 745,  1168 => 744,  1163 => 742,  1159 => 741,  1128 => 713,  1122 => 710,  1116 => 707,  1110 => 704,  1104 => 701,  1098 => 698,  1092 => 695,  1086 => 692,  1082 => 690,  1078 => 688,  1076 => 687,  1045 => 659,  1039 => 656,  1033 => 653,  1027 => 650,  1021 => 647,  1015 => 644,  1009 => 641,  1003 => 638,  999 => 636,  995 => 634,  993 => 633,  929 => 572,  908 => 554,  902 => 551,  898 => 550,  887 => 542,  880 => 538,  872 => 535,  847 => 513,  841 => 510,  837 => 509,  824 => 499,  818 => 496,  814 => 495,  802 => 486,  795 => 482,  789 => 479,  771 => 464,  765 => 461,  761 => 460,  748 => 450,  742 => 447,  738 => 446,  727 => 438,  720 => 434,  712 => 431,  684 => 406,  678 => 403,  674 => 402,  664 => 395,  658 => 392,  654 => 391,  646 => 386,  639 => 382,  631 => 379,  565 => 315,  551 => 304,  540 => 296,  524 => 283,  510 => 272,  499 => 264,  480 => 248,  471 => 242,  462 => 236,  454 => 231,  447 => 227,  440 => 223,  433 => 219,  426 => 215,  419 => 211,  412 => 207,  405 => 203,  398 => 199,  388 => 192,  377 => 184,  367 => 177,  362 => 174,  360 => 173,  352 => 168,  341 => 160,  332 => 154,  320 => 145,  307 => 135,  296 => 134,  290 => 131,  279 => 130,  269 => 123,  259 => 118,  252 => 114,  247 => 111,  245 => 110,  235 => 102,  227 => 100,  225 => 99,  218 => 98,  216 => 97,  174 => 72,  168 => 69,  164 => 68,  160 => 67,  156 => 66,  152 => 65,  148 => 64,  144 => 63,  135 => 57,  131 => 56,  117 => 44,  115 => 43,  101 => 32,  98 => 31,  93 => 28,  82 => 26,  78 => 25,  72 => 22,  63 => 16,  60 => 15,  58 => 14,  49 => 8,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"kt-portlet\">
    <div class=\"kt-portlet__body kt-portlet__body--fit\">
        <div class=\"kt-portlet__body  list-controls\" id=\"filter_form\">
            <div class=\"form-group row kt-margin-b-0\">
                <div class=\"col-lg-4\">
                    <label>{{'Date range'|__}}:</label>
                    <div class='input-group pull-right' id='daterangepicker'>
                        <input type='text' class=\"form-control\" name=\"created_at\" id=\"created_at\" readonly placeholder=\"{{'Select date range'|__}}\"/>
                        <div class=\"input-group-append\">
                            <span class=\"input-group-text\"><i class=\"la la-calendar-check-o\"></i></span>
                        </div>
                    </div>
                </div>
                {% if this.param.type == 'shipments' %}
                    <div class=\"col-lg-3\">
                        <label>{{'Sender'|__}}:</label>
                        <select class=\"form-control clients\" name=\"sender_id\" id=\"sender_id\" >
                            <option data-hidden=\"true\"></option>
                        </select>
                    </div>
                    <div class=\"col-lg-3\">
                        <label>{{'Employee'|__}}:</label>
                        <select class=\"form-control m-bootstrap-select\" name=\"employee_id\" id=\"employee_id\" data-live-search=\"true\">
                             <option data-hidden=\"true\"></option>
                             {% for employee in employees %}
                                <option value=\"{{employee.id}}\">{{employee.name}}</option>
                             {% endfor %}
                        </select>
                    </div>
                {% endif %}
                <div class=\"col-lg-2 kt-padding-t-25\">
                    <button type=\"reset\" class=\"btn btn-secondary\" id=\"reset\">{{'Reset'|__}}</button>
                </div>
            </div>
        </div>
        <div class=\"kt-portlet__body\">
            <div class=\"kt-datatable\"></div>
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
                        {% if this.param.type == 'shipments' %}
                            url: '{{url(\"api/shipments\")}}/{{this.param.kind}}',
                        {% elseif this.param.type == 'transactions' %}
                            url: '{{url(\"api/transactions\")}}/{{this.param.kind}}',
                        {% endif %}
                    },
                },
                pageSize: 10, // display 20 records per page
                serverPaging: true,
                serverFiltering: true,
                serverSorting: true,
            },
            // columns definition
            {% if this.param.type == 'shipments' %}
                columns: [
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
                        width: 80,
                        template: function(row) {
                            var output = '<span class=\"btn btn-bold btn-sm btn-label-' + row.status.color + '\">' + row.status.name + '</span>';
                            if(row.delayed == 1){
                                output  += '<span class=\"btn btn-bold btn-sm btn-label-danger\">{{\"Delayed\"|__}}</span>';
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
                ]
            {% elseif this.param.type == 'transactions' %}
                columns: [
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

        });
    };

    // search
    var search = function () {
        \$('#filter_form select,#filter_form input,#daterangepicker .form-control').each(function(){
            \$(this).on('change', function () {
                datatable.search(\$(this).val().toLowerCase(), \$(this).attr('name'));
            });
        });
        \$('#reset').on('click', function () {
            datatable.destroy();
            \$('#generalSearch').val('');
            \$('#filter_form select,#filter_form input,#daterangepicker .form-control').each(function(){
                \$(this).val('');
            });
            \$('#filter_form select').each(function(){
                \$(this).selectpicker(\"refresh\");
            });
            \$('#filter_form select.clients.#filter_form select.users').each(function(){
                \$(this).val('').trigger('change');
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
            console.log(datatable.getTotalRows());
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
        init: function (type) {
            init(type);
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

KTUtil.ready(function () {
    KTAppUserListDatatable.init();

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
    \$(\".users\").select2({
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
                var \$request = \$.request('onGetusers', {
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

    moment.locale('{{currentLang}}');
    moment.updateLocale('{{currentLang}}', {
        months : [
            \"{{'January'|__}}\", \"{{'February'|__}}\", \"{{'March'|__}}\", \"{{'April'|__}}\", \"{{'May'|__}}\", \"{{'June'|__}}\", \"{{'July'|__}}\",
            \"{{'August'|__}}\", \"{{'September'|__}}\", \"{{'October'|__}}\", \"{{'November'|__}}\", \"{{'December'|__}}\"
        ]
    });
    var picker = \$('#daterangepicker');
    var start = moment().startOf('month');
    var end = moment().endOf('month');

    function cb(start, end, label) {
        var title = '';
        var range = '';

        if ((end - start) < 100 || label == 'Today') {
            title = '{{\"Today\"|__}}:';
            range = start.format(KTAppOptions.daterangeformat);
        } else if (label == '{{\"Yesterday\"|__}}') {
            title = '{{\"Yesterday\"|__}}:';
            range = start.format(KTAppOptions.daterangeformat);
        } else {
            range = start.format(KTAppOptions.daterangeformat) + ' - ' + end.format(KTAppOptions.daterangeformat);
        }

        \$(\"#daterangepicker .form-control\").val(range);
        \$(\"#daterangepicker .form-control\").trigger('change');
    }

   \$(\"#daterangepicker\").daterangepicker({
       direction: KTUtil.isRTL(),
       locale: {
           \"format\": \"MM/DD/YYYY\",
           \"separator\": \" - \",
           \"applyLabel\": \"{{'Apply'|__}}\",
           \"cancelLabel\": \"{{'Cancel'|__}}\",
           \"fromLabel\": \"{{'From'|__}}\",
           \"toLabel\": \"{{'To'|__}}\",
           \"customRangeLabel\": \"{{'Custom'|__}}\",
           \"daysOfWeek\": [
               \"{{'Su'|__}}\",
               \"{{'Mo'|__}}\",
               \"{{'Tu'|__}}\",
               \"{{'We'|__}}\",
               \"{{'Th'|__}}\",
               \"{{'Fr'|__}}\",
               \"{{'Sa'|__}}\"
           ],
           \"monthNames\": [
               \"{{'January'|__}}\",
               \"{{'February'|__}}\",
               \"{{'March'|__}}\",
               \"{{'April'|__}}\",
               \"{{'May'|__}}\",
               \"{{'June'|__}}\",
               \"{{'July'|__}}\",
               \"{{'August'|__}}\",
               \"{{'September'|__}}\",
               \"{{'October'|__}}\",
               \"{{'November'|__}}\",
               \"{{'December'|__}}\"
           ],
           \"monthsShort\": [
               \"{{'January'|__}}\",
               \"{{'February'|__}}\",
               \"{{'March'|__}}\",
               \"{{'April'|__}}\",
               \"{{'May'|__}}\",
               \"{{'June'|__}}\",
               \"{{'July'|__}}\",
               \"{{'August'|__}}\",
               \"{{'September'|__}}\",
               \"{{'October'|__}}\",
               \"{{'November'|__}}\",
               \"{{'December'|__}}\"
           ],
           \"firstDay\": 1
       },
       startDate: start,
       endDate: end,
       opens: 'left',
       ranges: {
           '{{\"Today\"|__}}': [moment(), moment()],
           '{{\"Yesterday\"|__}}': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
           '{{\"Last 7 Days\"|__}}': [moment().subtract(6, 'days'), moment()],
           '{{\"Last 30 Days\"|__}}': [moment().subtract(29, 'days'), moment()],
           '{{\"This Month\"|__}}': [moment().startOf('month'), moment().endOf('month')],
           '{{\"Last Month\"|__}}': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
       }
   }, cb);


   \$('#Print').on('click', function () {
       \$.request('onPrint', {
           {% if this.param.type == 'shipments' %}
               data: {created_at: \$('#created_at').val(), sender_id: \$('#sender_id').val(), employee_id: \$('#employee_id').val()},
           {% elseif this.param.type == 'transactions' %}
               data: {created_at: \$('#created_at').val(), for_id: \$('#for_id').val(), status_id: \$('#status_id').val()},
           {% endif %}
           success: function(res){
                if (res.X_OCTOBER_REDIRECT) {
                    var win = window.open(res.X_OCTOBER_REDIRECT, '_blank');
                    win.focus();
                }
            },
       });
   });
   \$('#Export').on('click', function () {
       \$.request('onExport', {
           {% if this.param.type == 'shipments' %}
               data: {created_at: \$('#created_at').val(), sender_id: \$('#sender_id').val(), employee_id: \$('#employee_id').val()},
           {% elseif this.param.type == 'transactions' %}
               data: {created_at: \$('#created_at').val(), for_id: \$('#for_id').val(), status_id: \$('#status_id').val()},
           {% endif %}
       });
   });
});
</script>
{% endput %}", "/Applications/MAMP/htdocs/test/themes/spotlayer/pages/dashboard/reports.htm", "");
    }
}
