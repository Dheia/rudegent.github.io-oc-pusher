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

/* /Applications/MAMP/htdocs/test/themes/spotlayer/partials/listingwidget.htm */
class __TwigTemplate_2b9a116c5a0606acafc5d1e46a6cda8d196d9bb786b07e30eab4491fc007a3f6 extends \Twig\Template
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
        echo "<div class=\"kt-datatable\"></div>

<script>
function listing(){
    \$('.kt-datatable').KTDatatable({
        translate: {
            records: {
                processing: '";
        // line 8
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please wait"]);
        echo "...',
                noRecords: '";
        // line 9
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No records found"]);
        echo "'
            },
            toolbar: {
                pagination: {
                    items: {
                        default: {
                            first: '";
        // line 15
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["First"]);
        echo "',
                            prev: '";
        // line 16
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Previous"]);
        echo "',
                            next: '";
        // line 17
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Next"]);
        echo "',
                            last: '";
        // line 18
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Last"]);
        echo "',
                            more: '";
        // line 19
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["More pages"]);
        echo "',
                            input: '";
        // line 20
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Page number"]);
        echo "',
                            select: '";
        // line 21
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Select page size"]);
        echo "'
                        },

                        info: \"";
        // line 24
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
        // line 49
        echo url("api/dashboardshipments");
        echo "',
                    params: {
                      start: '";
        // line 51
        echo twig_escape_filter($this->env, ($context["start"] ?? null), "html", null, true);
        echo "',
                      end: '";
        // line 52
        echo twig_escape_filter($this->env, ($context["end"] ?? null), "html", null, true);
        echo "'
                    }
                },
            },
            pageSize: 10, // display 20 records per page
            serverPaging: true,
            serverFiltering: true,
            serverSorting: true,
        },
        // columns definition
        columns: [
            {
                field: \"number\",
                title: \"";
        // line 65
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Tracking"]);
        echo "\",
                sortable: true,
                width: 100,
                template: function(row) {
                    return '<a href=\"";
        // line 69
        echo url("dashboard/shipments");
        echo "/'+row.id+'/view\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "tracking", [], "any", false, false, false, 69), "prefix_order", [], "any", false, false, false, 69), "html", null, true);
        echo "'+row.shipping_number+'</a>';
                }
            },
            {
                field: \"details\",
                title: \"";
        // line 74
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Shipment Details"]);
        echo "\",
                sortable: false,
                width: 'auto',
                template: function(data, i) {
                    var output  = '\\
                        <div class=\"kt-user-card-v2 kt-user-card-v2--uncircle\">\\
                            <div class=\"kt-user-card-v2__details\">\\
                                <a href=\"";
        // line 81
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "client", 1 => "r"], "method", false, false, false, 81)) {
            echo url("dashboard/clients");
            echo "/'+data.sender.id+'/view";
        } else {
            echo "javascript:;";
        }
        echo "\" class=\"kt-user-card-v2__name\"><b class=\"kt-font-boldest\">";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sender"]);
        echo ":</b> ' + data.sender.name + '</a>\\
                                <span class=\"kt-user-card-v2__email\"><b class=\"kt-font-boldest\">";
        // line 82
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["From"]);
        echo ":</b> ' + data.shipping_from_area + '</span>';
                    if(data.receiver){
                        output      += '\\
                                    <a href=\"";
        // line 85
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "client", 1 => "r"], "method", false, false, false, 85)) {
            echo url("dashboard/clients");
            echo "/'+data.receiver.id+'/view";
        } else {
            echo "javascript:;";
        }
        echo "\" class=\"kt-margin-t-5 kt-user-card-v2__name\"><b>";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Receiver"]);
        echo ":</b> ' + data.receiver.name + '</a>\\
                                    <span class=\"kt-user-card-v2__email\"><b class=\"kt-font-boldest\">";
        // line 86
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
        // line 96
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
        // line 105
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Status"]);
        echo "\",
                sortable: false,
                width: 'auto',
                template: function(row) {
                    if(row.requested == 100){
                        var output = '<span class=\"btn btn-bold btn-sm btn-label-primary\">";
        // line 110
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Saved"]);
        echo "</span>';
                    }else{
                        var output = '<span class=\"btn btn-bold btn-sm btn-label-' + row.status.color + '\">' + row.status.name + '</span>';
                        if(row.delayed == 1){
                            output  += '&nbsp;<span class=\"btn btn-bold btn-sm btn-label-danger\">";
        // line 114
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delayed"]);
        echo "</span>';
                        }
                        if(row.requested == 10 || row.requested == 11){
                            output  += '&nbsp;<span class=\"btn btn-bold btn-sm btn-label-warning\">";
        // line 117
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Returning Discards"]);
        echo "</span>';
                        }
                        if(row.requested == 12 && row.status.equal != 12){
                            output  += '&nbsp;<span class=\"btn btn-bold btn-sm btn-label-success\">";
        // line 120
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
        // line 129
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Date"]);
        echo "\",
                sortable: false,
                width: 100,
            },
            {
                field: \"Actions\",
                width: 100,
                title: \"";
        // line 136
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Actions"]);
        echo "\",
                sortable: false,
                overflow: 'visible',
                template: function (data) {
                    var output = '' +
                    '<div class=\"btn-group btn-group\" role=\"group\" aria-label=\"...\">'+
                        '<a href=\"";
        // line 142
        echo url("dashboard/shipments");
        echo "/'+data.id+'/view\" class=\"btn btn-brand btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["View Shipment"]);
        echo "\"><i class=\"la la-eye\"></i></button>';
                        ";
        // line 143
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "order", 1 => "u"], "method", false, false, false, 143) && (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 143) != 5))) {
            // line 144
            echo "                            if(data.requested   ==  0 || data.requested == 1 || data.requested == 100){
                                output += '<a href=\"";
            // line 145
            echo url("dashboard/shipments");
            echo "/'+data.id+'/edit\" class=\"btn btn-brand btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Edit Shipment"]);
            echo "\"><i class=\"la la-edit\"></i></button>';
                            }
                        ";
        }
        // line 148
        echo "                        ";
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 148) == 5)) {
            // line 149
            echo "                            if((data.requested   ==  0 || data.requested == 100) && data.sender_id == ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 149), "html", null, true);
            echo "){
                                output += '<a href=\"";
            // line 150
            echo url("dashboard/shipments");
            echo "/'+data.id+'/edit\" class=\"btn btn-brand btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Edit Shipment"]);
            echo "\"><i class=\"la la-edit\"></i></button>';
                            }
                        ";
        }
        // line 153
        echo "                            if((data.requested   !=  0 && data.requested   !=  1 && data.requested != 100)){
                                output += '<a href=\"";
        // line 154
        echo url("dashboard/shipments");
        echo "/'+data.id+'/print/shipment\" target=\"_blank\" class=\"btn btn-info btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Print Shipment"]);
        echo "\"><i class=\"la la-print\"></i></button>';
                            }
                        ";
        // line 156
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "order", 1 => "u"], "method", false, false, false, 156)) {
            // line 157
            echo "                            if((data.requested   ==  100 || data.requested   ==  0 || data.requested == 1)){
                                output += '<a href=\"";
            // line 158
            echo url("dashboard/shipments");
            echo "/'+data.id+'/print/label\" class=\"btn btn-info btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Print Label"]);
            echo "\" target=\"_blank\" ><i class=\"la la-qrcode\"></i></button>';
                            }
                        ";
        }
        // line 161
        echo "                        ";
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "order", 1 => "u"], "method", false, false, false, 161)) {
            // line 162
            echo "                            if((data.requested   ==  3 || data.requested   ==  5 || data.requested == 6 || data.requested == 7 || data.requested == 9)){
                                output += '<a href=\"";
            // line 163
            echo url("dashboard/shipments");
            echo "/'+data.id+'/update\" class=\"btn btn-info btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Update Status"]);
            echo "\"><i class=\"la la-street-view\"></i></button>';
                            }
                        ";
        }
        // line 166
        echo "
                        ";
        // line 167
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "order", 1 => "u"], "method", false, false, false, 167)) {
            // line 168
            echo "                            if((data.requested   ==  9 || data.requested   ==  3)){
                                output += '<a href=\"";
            // line 169
            echo url("dashboard/shipments");
            echo "/'+data.id+'/deliver\" class=\"btn btn-success btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Mark as delivered"]);
            echo "\"><i class=\"la la-smile-o\"></i></button>';
                            }
                        ";
        }
        // line 172
        echo "                        ";
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "order", 1 => "d"], "method", false, false, false, 172) && (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 172) != 5))) {
            // line 173
            echo "                            if(data.requested   ==  0 || data.requested == 100 || data.requested == 1){
                                output += '<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-sm delete_record kt-font-light btn-icon\" rel=\"'+data.id+'\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
            // line 174
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delete Shipment"]);
            echo "\"><i class=\"la la-remove\"></i></a>';
                            }
                        ";
        }
        // line 177
        echo "                        ";
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 177) == 5)) {
            // line 178
            echo "                            if((data.requested   ==  0 || data.requested == 100) && data.sender_id != ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 178), "html", null, true);
            echo "){
                                output += '<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-sm delete_record kt-font-light btn-icon\" rel=\"'+data.id+'\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
            // line 179
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delete Shipment"]);
            echo "\"><i class=\"la la-remove\"></i></a>';
                            }
                        ";
        }
        // line 182
        echo "                    '</div>';

                    return output;
                },
            }
        ]
    });
    \$('body').tooltip({selector: '[data-toggle=\"kt-tooltip\"]'});
    \$('body').on('click','.delete_record',function(){
        var id      = \$(this).attr('rel');
        var type    = \$(this).attr('data-type');
        swal.fire({
            buttonsStyling: false,

            text: \"";
        // line 196
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Are you sure to delete this item ?"]);
        echo "\",
            type: \"question\",

            confirmButtonText: \"";
        // line 199
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yes, delete!"]);
        echo "\",
            confirmButtonClass: \"btn btn-sm btn-bold btn-danger\",

            showCancelButton: true,
            cancelButtonText: '";
        // line 203
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
        // line 212
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Deleted!"]);
        echo "',
                            text: '";
        // line 213
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Your selected record has been deleted! :("]);
        echo "',
                            type: 'success',
                            buttonsStyling: false,
                            confirmButtonText: '";
        // line 216
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
        // line 226
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cancelled"]);
        echo "',
                    text: '";
        // line 227
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["You selected record has not been deleted! :)"]);
        echo "',
                    type: 'error',
                    buttonsStyling: false,
                    confirmButtonText: '";
        // line 230
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["OK"]);
        echo "',
                    confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                });
            }
        });
    });
}
</script>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/test/themes/spotlayer/partials/listingwidget.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  482 => 230,  476 => 227,  472 => 226,  459 => 216,  453 => 213,  449 => 212,  437 => 203,  430 => 199,  424 => 196,  408 => 182,  402 => 179,  397 => 178,  394 => 177,  388 => 174,  385 => 173,  382 => 172,  374 => 169,  371 => 168,  369 => 167,  366 => 166,  358 => 163,  355 => 162,  352 => 161,  344 => 158,  341 => 157,  339 => 156,  332 => 154,  329 => 153,  321 => 150,  316 => 149,  313 => 148,  305 => 145,  302 => 144,  300 => 143,  294 => 142,  285 => 136,  275 => 129,  263 => 120,  257 => 117,  251 => 114,  244 => 110,  236 => 105,  224 => 96,  211 => 86,  200 => 85,  194 => 82,  183 => 81,  173 => 74,  163 => 69,  156 => 65,  140 => 52,  136 => 51,  131 => 49,  89 => 24,  83 => 21,  79 => 20,  75 => 19,  71 => 18,  67 => 17,  63 => 16,  59 => 15,  50 => 9,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"kt-datatable\"></div>

<script>
function listing(){
    \$('.kt-datatable').KTDatatable({
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
                    url: '{{url(\"api/dashboardshipments\")}}',
                    params: {
                      start: '{{start}}',
                      end: '{{end}}'
                    }
                },
            },
            pageSize: 10, // display 20 records per page
            serverPaging: true,
            serverFiltering: true,
            serverSorting: true,
        },
        // columns definition
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

                        {% if user.hasUserPermission('order', 'u') %}
                            if((data.requested   ==  9 || data.requested   ==  3)){
                                output += '<a href=\"{{url(\"dashboard/shipments\")}}/'+data.id+'/deliver\" class=\"btn btn-success btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"{{\"Mark as delivered\"|__}}\"><i class=\"la la-smile-o\"></i></button>';
                            }
                        {% endif %}
                        {% if user.hasUserPermission('order', 'd') and user.role_id != 5 %}
                            if(data.requested   ==  0 || data.requested == 100 || data.requested == 1){
                                output += '<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-sm delete_record kt-font-light btn-icon\" rel=\"'+data.id+'\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"{{\"Delete Shipment\"|__}}\"><i class=\"la la-remove\"></i></a>';
                            }
                        {% endif %}
                        {% if user.role_id == 5 %}
                            if((data.requested   ==  0 || data.requested == 100) && data.sender_id != {{user.id}}){
                                output += '<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-sm delete_record kt-font-light btn-icon\" rel=\"'+data.id+'\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"{{\"Delete Shipment\"|__}}\"><i class=\"la la-remove\"></i></a>';
                            }
                        {% endif %}
                    '</div>';

                    return output;
                },
            }
        ]
    });
    \$('body').tooltip({selector: '[data-toggle=\"kt-tooltip\"]'});
    \$('body').on('click','.delete_record',function(){
        var id      = \$(this).attr('rel');
        var type    = \$(this).attr('data-type');
        swal.fire({
            buttonsStyling: false,

            text: \"{{'Are you sure to delete this item ?'|__}}\",
            type: \"question\",

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
}
</script>", "/Applications/MAMP/htdocs/test/themes/spotlayer/partials/listingwidget.htm", "");
    }
}
