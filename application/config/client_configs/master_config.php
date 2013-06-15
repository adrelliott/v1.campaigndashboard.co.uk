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



    
$config['countryList_uk'] =  array(
    "Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegovina", "Botswana", "Brazil", "Brunei", "Bulgaria", "Burkina Faso", "Burma", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Central African Republic", "Chad", "Chile", "China", "Colombia", "Comoros", "Congo, Democratic Republic", "Congo, Republic of the", "Costa Rica", "Cote d'Ivoire", "Croatia", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Fiji", "Finland", "France", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Greece", "Greenland", "Grenada", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, North", "Korea, South", "Kuwait", "Kyrgyzstan", "Laos", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libya", "Liechtenstein", "Lithuania", "Luxembourg", "Macedonia", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Mauritania", "Mauritius", "Mexico", "Micronesia", "Moldova", "Mongolia", "Morocco", "Monaco", "Mozambique", "Namibia", "Nauru", "Nepal", "Netherlands", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Norway", "Oman", "Pakistan", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Poland", "Portugal", "Qatar", "Romania", "Russia", "Rwanda", "Samoa", "San Marino", " Sao Tome", "Saudi Arabia", "Senegal", "Serbia and Montenegro", "Seychelles", "Sierra Leone", "Singapore", "Slovakia", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "Spain", "Sri Lanka", "Sudan", "Suriname", "Swaziland", "Sweden", "Switzerland", "Syria", "Taiwan", "Tajikistan", "Tanzania", "Thailand", "Togo", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Yemen", "Zambia", "Zimbabwe"
    );



/* End of file 11110_config.php */
/* Location: ./application/config/client_configs/11110_config.php */
