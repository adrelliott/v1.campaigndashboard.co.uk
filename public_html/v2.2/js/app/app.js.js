/* 
 * This file lays out the all the template js for the app.
 */

$(document).ready(function() {

    // Tooltips
    $('[title]').tooltip({
        placement: 'top',
        container: 'body'
    });

    // Dropdowns
    $('.dropdown-toggle').dropdown();

    // Tabs
    $('.tabs a, .navs a').click(function(e) {
        e.preventDefault();
        $(this).tab('show');
    })

});


