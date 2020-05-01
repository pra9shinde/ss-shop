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
            {
                text: '<i class="la la-trash"></i>',
                className: '',
                action: function ( e, dt, node, config ) {
                    alert( 'Button activated' );
                }
            }
        ], 
        "autoWidth": false,
        "columns": [
            { "width": "100%" }
        ],
        
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
            
        ],
        "initComplete": function( settings, json ) {
            
            
        },
        "drawCallback": function( settings ) {
            
        }
    });

    //Seller Category
    var category_dt = $('#tb-category').DataTable({ 
        
        dom: 'Blfrtip',
        buttons: [
            
        ],
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
                
            },
            {
               
            }
        ],
        "initComplete": function( settings, json ) {
            
            
        },
        "drawCallback": function( settings ) {
            
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
    
    //Products mobile view
     var all_products_mini = $('#tb-all-products-mini').DataTable({ 
        dom: 'B<"#category_filter_mini">lfrtip',
        buttons: [
          
        ],
        "destroy": true,
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.
 
        // Load data for the table's content from an Ajax source
        "ajax": {
            "cache": false,
            "url": $('#base_url').val() + 'Shop/ajax_list_mini',
            "type": "POST",
            "data": function(d){
                d.category =  $('#current_category').attr("value");
                // d.category =  'all';
            }
        },
        
        //Set column definition initialisation properties.
        "columnDefs": [
            
        ],
        "initComplete": function( settings, json ) {
            
            addFiltersMini();//Add Filer Button to Datatable
            
        },
        "drawCallback": function( settings ) {
            
            // Default Spin
            $(".touchspin").TouchSpin({
                buttondown_class: "btn btn-primary",
                buttonup_class: "btn btn-primary",
                buttondown_txt: '<i class="ft-minus"></i>',
                buttonup_txt: '<i class="ft-plus"></i>'
            });
        }
    });

    //Draw Mobile view product table
    $(window).resize(function(){
        //Redraw datable
        if ($(window).width() <= 767) {  
            all_products_mini.draw();
            $('#tb-all-products-mini').dataTable().fnAdjustColumnSizing();//Automatically sets header size
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

     //Filter by Category - All products Mobile (Reload Datatable)
     $(document.body).on("change","#select_category_dw_mini",function(){
        // alert(this.value);
        //alert($('#select_category_dw').select2().val());
        $('#current_category').attr("value",this.value);
        $('#current_category').attr("data-test",this.value);
        $('#tb-all-products-mini').DataTable().ajax.reload();
    });


    //Seller Orders
    var seller_orders = $('#tb-seller-orders').DataTable({ 
        dom: 'Blfrtip',
        buttons: [
            {
                text: 'Export<i class="la la-download" style="margin-left:3px;"></i>',
                className: '',
                action: function ( e, dt, node, config ) {
                    exportSellerOrders();
                }
            }
        ],
        fixedHeader: {
            header: true,
            headerOffset: $('.header-navbar').outerHeight()
        },
        colReorder: true,
        select : true,
       
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.
 
        // Load data for the table's content from an Ajax source
        "ajax": {
            "cache": false,
            "url": $('#base_url').val() + 'Product/seller_orders_ajax_list',
            "type": "POST",
            "data": function(d){
                // d.category =  $('#current_category').attr("value");
            }
        },
      
        //Set column definition initialisation properties.
        "columnDefs": [
            {
                //add class to first td
                "targets": [0],
                "className": 'details-control'
            },
            
        ],
        "initComplete": function( settings, json ) {
            
            
        },
        "drawCallback": function( settings ) {
            
            //Checkbox initialization and Select all, pass select all checkbox id
            select2Init('#select-all-products-main');
        }
    });
    seller_orders.column(1).visible(false);//Order items data hidden in array

    // Add event listener for opening and closing details - show order items
    $('#tb-seller-orders tbody').on('click', 'td.details-control', function () {
        var tr = $(this).closest('tr');
        var tdi = tr.find("i.la-plus-circle");

        var row = seller_orders.row(tr);

        if (row.child.isShown()) {
            // This row is already open - close it
            row.child.hide();
            tr.removeClass('shown');
            var icon = tr.first().children().first().children().first().children(0);
            icon.removeClass('la-minus-circle');
            icon.addClass('la-plus-circle');
        }
        else {
            // Open this row
            row.child(format(row.data())).show();//Function present in my_orders_seller view
            tr.addClass('shown');
            tdi.first().removeClass('la-plus-circle');
            tdi.first().addClass('la-minus-circle');
        }
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









