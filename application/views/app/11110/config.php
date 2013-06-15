<?php

echo "<h1>FOUND ME!</h1>";

/* ==Client Specific Config File for 11110 ==
 * 
 * This file is used to determine app-wide configs for this client, like option 
 * arrays for dropdowns etc.
 * 
 * it is be included in every view file using a a statement in the header.php file
 */

$c_dropdowns = array
(
    'title' => array
    (
        'Mr' => 'Mr',
        'Mrs' => 'Mrs',
        'Miss' => 'Miss',
        'Lord' => 'Lord',
        'Sir' => 'Sir',
        'Bishop' => 'Bishop',
        
    ),
    'quick_actions' => array
    (
        '' => '',
    ),
);

$postcode_lookup = 
        '<div class="form margin_top_15">
            <div class="clearfix green-highlight" id="">
                <label class="" id="">Postcode Finder</label>
                <div class="input " id="">
                    <input class="small" style="text-transform: uppercase;" id="" type="text" name="_:_PostalCode" length="" value="">
                    <SCRIPT LANGUAGE=JAVASCRIPT SRC="http://services.postcodeanywhere.co.uk/popups/javascript.aspx?account_code=charl11150&license_key=uc22-wp95-au52-wx19"></SCRIPT>
                </div>
            </div>
        </div>';




/* End of file 11110_config.php */
/* Location: ./application/views/app/11110/11110_config.php */