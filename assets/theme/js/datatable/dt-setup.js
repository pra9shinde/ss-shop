//$.noConflict();
$(document).ready(function() {
    //datatables
   
    //Seller Products
    var seller_products = $('#tb-products').DataTable({ 
        
        dom: 'Blfrtip',
        buttons: [
            { 
                extend: 'collection',
                text: 'Export',
                buttons: [
                    'copy',
                    'excel',
                    'csv',
                    'pdf',
                    'print'
                ]
            },
            {//Column Visibiity
                extend: 'colvis',
                columns: ':not(.noVis)'
            },
            {
                text: '<i class="la la-trash"></i>',
                className: '',
                action: function ( e, dt, node, config ) {
                    
                    var selected_checkboxes = $('#tb-products td .skin.skin-flat .icheckbox_flat-red.checked');
                    
                    if(selected_checkboxes.length >= 1){
                        var array_id = [];
                        for(var i = 0; i < selected_checkboxes.length; i++){
                            //get data id for deletion
                            array_id.push(selected_checkboxes[i].children[0].getAttribute('data-internalid'));
                        }
                        //console.log(selected_checkboxes.children(0).data("internalid"));
                        deleteProduct(array_id);
                        
                    }
                }
            }
        ],
        fixedHeader: {
            header: true,
            headerOffset: $('.header-navbar').outerHeight()
        },
        colReorder: true,
        
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.
 
        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": $('#base_url').val() + 'Product/product_ajax_list',
            "type": "POST",
            "data": { }
        },
        
        //Set column definition initialisation properties.
        "columnDefs": [
            { 
                "targets": [ 0,1 ], //first column / numbering column
                "orderable": false, //set not orderable
            },
            {
                //exclude col visibilty columns
                "targets": [0,1],
                "className": 'noVis'
            }
        ],
        "initComplete": function( settings, json ) {
            
            
        },
        "drawCallback": function( settings ) {
            
            //Checkbox initialization and Select all, pass select all checkbox id
            select2Init('#select-all-products');
        }
    });

    //Seller Products
    var category_dt = $('#tb-category').DataTable({ 
        
        dom: 'Blfrtip',
        buttons: [
            {
                text: '<i class="la la-trash"></i>',
                className: '',
                action: function ( e, dt, node, config ) {
                    
                    var selected_checkboxes = $('#tb-category td .skin.skin-flat .icheckbox_flat-red.checked');
                    
                    if(selected_checkboxes.length >= 1){
                        var array_id = [];
                        for(var i = 0; i < selected_checkboxes.length; i++){
                            //get data id for deletion
                            array_id.push(selected_checkboxes[i].children[0].getAttribute('data-internalid'));
                        }
                        //console.log(selected_checkboxes.children(0).data("internalid"));
                        deleteCategory(array_id);
                        
                    }
                }
            }
        ],
        fixedHeader: {
            header: true,
            headerOffset: $('.header-navbar').outerHeight()
        },
        colReorder: true,
        
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.
 
        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": $('#base_url').val() + 'Product/category_ajax_list',
            "type": "POST",
            "data": { }
        },
        
        //Set column definition initialisation properties.
        "columnDefs": [
            { 
                "targets": [ 0,1 ], //first column / numbering column
                "orderable": false, //set not orderable
            },
            {
                //exclude col visibilty columns
                "targets": [0,1],
                "className": 'noVis'
            }
        ],
        "initComplete": function( settings, json ) {
            
            
        },
        "drawCallback": function( settings ) {
            
            //Checkbox initialization and Select all, pass select all checkbox id
            select2Init('#select-all-category');
        }
    });
  
    //Products
    var all_products = $('#tb-all-products').DataTable({ 
        dom: 'Bl<"#category_filter">frtip',
        buttons: [
          
        ],
        fixedHeader: {
            header: true,
            headerOffset: $('.header-navbar').outerHeight()
        },
        colReorder: true,
        
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.
 
        // Load data for the table's content from an Ajax source
        "ajax": {
            "cache": false,
            "url": $('#base_url').val() + 'Shop/ajax_list',
            "type": "POST",
            "data": function(d){
                d.category =  $('#current_category').attr("value");
            }
        },
        
        //Set column definition initialisation properties.
        "columnDefs": [
            { 
                "targets": [ 0,1 ], //first column / numbering column
                "orderable": false, //set not orderable
            },
            {
                //exclude col visibilty columns
                "targets": [0,1],
                "className": 'noVis'
            }
        ],
        "initComplete": function( settings, json ) {
            
            addFilters();//Add Filer Button to Datatable
            
        },
        "drawCallback": function( settings ) {
            
            //Checkbox initialization and Select all, pass select all checkbox id
            select2Init('#select-all-products-main');
            // Default Spin
            $(".touchspin").TouchSpin({
                buttondown_class: "btn btn-primary",
                buttonup_class: "btn btn-primary",
                buttondown_txt: '<i class="ft-minus"></i>',
                buttonup_txt: '<i class="ft-plus"></i>'
            });
        }
    });


    //Filter by Category - All products (Reload Datatable)
    $(document.body).on("change","#select_category_dw",function(){
        //alert(this.value);
        //alert($('#select_category_dw').select2().val());
        $('#current_category').attr("value",this.value);
        $('#current_category').attr("data-test",this.value);
        $('#tb-all-products').DataTable().ajax.reload()
    });



    $(".menu-toggle").on('click', resize);
    // Resize function
    function resize() {
        setTimeout(function() {
            // ReDraw DataTable
            seller_products.draw();
            all_products.draw();
        }, 400);
    }

    //Initialize Select2 inside datable, Select All Functionality, Selected Row Highlight
    function select2Init(selectAll_checkbox_id){
        (function(window, document, $) {
            
            $('.skin-flat input').iCheck({
                checkboxClass: 'icheckbox_flat-red',
                radioClass: 'iradio_flat-red'
            });

            'use strict';
            
            var $html = $('html');
            //Select All
            $(selectAll_checkbox_id).on('ifChecked', function(event){
                $(".child-checkbox-flatclass").iCheck('check');
            });
            $(selectAll_checkbox_id).on('ifUnchecked', function(event){
                $(".child-checkbox-flatclass").iCheck('uncheck');
            });

            //add class to tr of selected checkbox
            $('input[name ="input-15"]').on('ifChecked', function(event){
                let element_tr = $(this).parents().eq(4);
                if(!element_tr.hasClass('selected')){
                    element_tr.addClass('selected');
                }
            });
            $('input[name ="input-15"]').on('ifUnchecked', function(event){
                let element_tr = $(this).parents().eq(4);
                if(element_tr.hasClass('selected')){
                    element_tr.removeClass('selected');
                }
            });
        
        })(window, document, jQuery);
    }
});









