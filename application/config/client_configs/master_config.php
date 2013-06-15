<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* This file is used to define client-specific configs. 
 * 
 * NOTE: To creaste client-specific configs, create a file in this directory
 * named after the client's dID.
 * 
 * e.g client 11110 would have a file created called 11110_config.php and in
 * this file you cna overide the settings here.
 * 
 * e.g to add more options to 'title' config for client 11110 just add a new
 * config item to 11110_config.php and name it $config['dropdown_titles'] and
 * add the new options there.
 * 
 */

/*
|--------------------------------------------------------------------------
| All Dropdowns
|--------------------------------------------------------------------------
|
| Use this section to define dropdowns across this client's app. Store config
| items as single arrays and reference them as $this->config->item('name')
|
| see http://ellislab.com/codeigniter/user-guide/libraries/config.html for details
*/

$config['dropdown_titles'] = array (
    'Mr' => 'Mr',
    'Mrs' => 'Mrs',
    'Miss' => 'Miss',
    'Lord' => 'Lord',
    'Sir' => 'Sir',
);

/*
|--------------------------------------------------------------------------
| All Front End Code
|--------------------------------------------------------------------------
|
| Use this setion to define front end code like Postcode lookup
|
*/
$config['postcode_lookup'] = 
        '<div class="form margin_top_15"><div class="clearfix green-highlight" id=""><label class="" id="">Postcode Finder</label><div class="input " id=""><input class="small" style="text-transform: uppercase;" id="" type="text" name="_:_PostalCode" length="" value=""><SCRIPT LANGUAGE=JAVASCRIPT SRC="http://services.postcodeanywhere.co.uk/popups/javascript.aspx?account_code=charl11150&license_key=uc22-wp95-au52-wx19"></SCRIPT></div></div></div>';

/* End of file 11110_config.php */
/* Location: ./application/config/client_configs/11110_config.php */
