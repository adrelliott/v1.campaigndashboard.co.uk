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
    
    
});

