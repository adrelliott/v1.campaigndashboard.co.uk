/* 
 * Sets up the JS for the app
 */

$(function() {
    
    /* Set up the tabs */
    $('.tabs').tabs({
        create : function (event, ui) {
            $(this).data ('lastPanelSelector', ui.panel.selector);
        },
        activate : function (event, ui) {
            $(this).data ('lastPanelSelector', ui.oldPanel.selector);
        }
    });
    
    //Initialise autocomplete (For some reason needs to be above datatables in this file!)
    $("#countries_uk").autocomplete({
        source: globalOptions.countryList_uk    //This var set in app_vars.js
    });
    
    //This autocompete takes the url passed in the 'data-source' attr and uses it as the source of the dat. the only problem I have is that it stores the ID in the box, and this is nt user friendly! we want to store the name inthe box but the id in the table.... This could help http://jsfiddle.net/j08691/9Vp3r/
    $("#countries_uk1").autocomplete({
        source: $("#countries_uk1").attr("data-source"),
        minLength: 2
    });
    
    
    
    /* Set up Datatables */
    //Datatables settings - these can be set up in app_vars.js and overidden
    //in assets/includes/bespoke_app_vars/{dID}_app_vars.js
    var dataTable_ajaxoptions = {
        "bProcessing": true,
        "bServerSide": true,
        "sServerMethod": "POST",
        "sAjaxSource": $(".ajax-table").attr("data-table-source"),  //passed by the view
        "sPaginationType": "full_numbers",
        "bJQueryUI": true,
        "iDisplayLength": globalOptions.iDisplayLength_ajax,
        "aaSorting": [],   //disables sorting when page loads, but users can still sort manually
        "bRetrieve": true, 
        "bDestroy": true,
        "sDom": '<"H"Tfr>t<"F"ip>',
        "oTableTools": {
            "aButtons": [
                "copy", "csv", "xls", "pdf",
                {
                    "sExtends": "collection",
                    "sButtonText": "Save",
                    "aButtons": ["csv", "xls", "pdf"]
                }
            ],
            "sSwfPath": "datatables/TableTools/media/swf/copy_csv_xls_pdf.swf",
        },
        
        /*"fnDrawCallback": function(  ) {
            $(".iframe").colorbox({
                iframe:true,
                width:"80%", 
                height:"90%", 
                escKey: false, 
                overlayClose: false, 
                fixed:true, 
                onClosed: onOverlayClosedCallback 
            });
        }*/
    };
    
    var dataTable_standardoptions = {
        "sPaginationType": "full_numbers",
        "bJQueryUI": true,
        "iDisplayLength": globalOptions.iDisplayLength,
        "aaSorting": [],   //disables sorting when page loads, but users can still sort manually
        /*"fnDrawCallback": function(  ) {
            $(".iframe").colorbox({
                iframe:true, 
                width:"80%", 
                height:"90%", 
                escKey: false, 
                overlayClose: false, 
                fixed:true, 
                onClosed: onOverlayClosedCallback 
            });
        }*/
    };
    
    $("#option1_toggle").click(function(){
          $("#option1").toggle("slow","swing");
    });
    $(".option_toggle").click(function(){
        var div_id = $(this).attr("title");
        $("#" + div_id).toggle("slow","swing");
    });
    
   //Initialise the 2 types of table 
    $('.dataTable').dataTable(dataTable_standardoptions);
    $('.ajax-table').dataTable(dataTable_ajaxoptions);
   
    
    /* Dialog confirmation */
    
    
    /* Toggle divs */
    /*$(".option_toggle").click(function(){
        var div_id = $(this).attr("title");
        $(".option #" + div_id).toggle("slow","swing");
    });*/
    
    
    
});

