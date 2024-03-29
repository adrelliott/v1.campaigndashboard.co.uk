<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------
| DATABASE CONNECTIVITY SETTINGS
| -------------------------------------------------------------------
| This file will contain the settings needed to access your database.
|
| For complete instructions please consult the 'Database Connection'
| page of the User Guide.
|
| -------------------------------------------------------------------
| EXPLANATION OF VARIABLES
| -------------------------------------------------------------------
|
|	['hostname'] The hostname of your database server.
|	['username'] The username used to connect to the database
|	['password'] The password used to connect to the database
|	['database'] The name of the database you want to connect to
|	['dbdriver'] The database type. ie: mysql.  Currently supported:
				 mysql, mysqli, postgre, odbc, mssql, sqlite, oci8
|	['dbprefix'] You can add an optional prefix, which will be added
|				 to the table name when using the  Active Record class
|	['pconnect'] TRUE/FALSE - Whether to use a persistent connection
|	['db_debug'] TRUE/FALSE - Whether database errors should be displayed.
|	['cache_on'] TRUE/FALSE - Enables/disables query caching
|	['cachedir'] The path to the folder where cache files should be stored
|	['char_set'] The character set used in communicating with the database
|	['dbcollat'] The character collation used in communicating with the database
|				 NOTE: For MySQL and MySQLi databases, this setting is only used
| 				 as a backup if your server is running PHP < 5.2.3 or MySQL < 5.0.7
|				 (and in table creation queries made with DB Forge).
| 				 There is an incompatibility in PHP with mysql_real_escape_string() which
| 				 can make your site vulnerable to SQL injection if you are using a
| 				 multi-byte character set and are running versions lower than these.
| 				 Sites using Latin-1 or UTF-8 database character set and collation are unaffected.
|	['swap_pre'] A default table prefix that should be swapped with the dbprefix
|	['autoinit'] Whether or not to automatically initialize the database.
|	['stricton'] TRUE/FALSE - forces 'Strict Mode' connections
|							- good for ensuring strict SQL while developing
|
| The $active_group variable lets you choose which connection group to
| make active.  By default there is only one group (the 'default' group).
|
| The $active_record variables lets you determine whether or not to load
| the active record class
*/

$active_record = TRUE;

$db['al_MBP_development']['hostname'] = 'localhost';
$db['al_MBP_development']['username'] = 'local_admin';
$db['al_MBP_development']['password'] = 'G6tdV7Hj8u9J6g5G';
$db['al_MBP_development']['database'] = 'local_master_2';
$db['al_MBP_development']['dbdriver'] = 'mysql';
$db['al_MBP_development']['dbprefix'] = '';
$db['al_MBP_development']['pconnect'] = TRUE;
$db['al_MBP_development']['db_debug'] = TRUE;
$db['al_MBP_development']['cache_on'] = FALSE;
$db['al_MBP_development']['cachedir'] = '';
$db['al_MBP_development']['char_set'] = 'utf8';
$db['al_MBP_development']['dbcollat'] = 'utf8_general_ci';
$db['al_MBP_development']['swap_pre'] = '';
$db['al_MBP_development']['autoinit'] = TRUE;
$db['al_MBP_development']['stricton'] = FALSE;


$db['staging']['hostname'] = 'localhost';
$db['staging']['username'] = 'leadfar2_user';
$db['staging']['password'] = 'DMmanch35';
$db['staging']['database'] = 'leadfar2_master';
$db['staging']['dbdriver'] = 'mysql';
$db['staging']['dbprefix'] = '';
$db['staging']['pconnect'] = TRUE;
$db['staging']['db_debug'] = TRUE;
$db['staging']['cache_on'] = FALSE;
$db['staging']['cachedir'] = '';
$db['staging']['char_set'] = 'utf8';
$db['staging']['dbcollat'] = 'utf8_general_ci';
$db['staging']['swap_pre'] = '';
$db['staging']['autoinit'] = TRUE;
$db['staging']['stricton'] = FALSE;

$db['garage']['hostname'] = '10.168.1.57';
$db['garage']['username'] = 'garageda_master';
$db['garage']['password'] = 'DMmanch35';
$db['garage']['database'] = 'garageda_master';
$db['garage']['dbdriver'] = 'mysql';
$db['garage']['dbprefix'] = '';
$db['garage']['pconnect'] = TRUE;
$db['garage']['db_debug'] = TRUE;
$db['garage']['cache_on'] = FALSE;
$db['garage']['cachedir'] = '';
$db['garage']['char_set'] = 'utf8';
$db['garage']['dbcollat'] = 'utf8_general_ci';
$db['garage']['swap_pre'] = '';
$db['garage']['autoinit'] = TRUE;
$db['garage']['stricton'] = FALSE;

$db['demo']['hostname'] = '10.168.1.57';
$db['demo']['username'] = 'mymarket1_master';
$db['demo']['password'] = 'DMmanch35';
$db['demo']['database'] = 'mymarket1_master';
$db['demo']['dbdriver'] = 'mysql';
$db['demo']['dbprefix'] = '';
$db['demo']['pconnect'] = TRUE;
$db['demo']['db_debug'] = TRUE;
$db['demo']['cache_on'] = FALSE;
$db['demo']['cachedir'] = '';
$db['demo']['char_set'] = 'utf8';
$db['demo']['dbcollat'] = 'utf8_general_ci';
$db['demo']['swap_pre'] = '';
$db['demo']['autoinit'] = TRUE;
$db['demo']['stricton'] = FALSE;

$db['production']['hostname'] = 'localhost';
$db['production']['username'] = 'campaign2_master';
$db['production']['password'] = 'DMmanch35';
$db['production']['database'] = 'campaign2_master';
$db['production']['dbdriver'] = 'mysql';
$db['production']['dbprefix'] = '';
$db['production']['pconnect'] = TRUE;
$db['production']['db_debug'] = TRUE;
$db['production']['cache_on'] = FALSE;
$db['production']['cachedir'] = '';
$db['production']['char_set'] = 'utf8';
$db['production']['dbcollat'] = 'utf8_general_ci';
$db['production']['swap_pre'] = '';
$db['production']['autoinit'] = TRUE;
$db['production']['stricton'] = FALSE;


//Define the active group to use (to connect to db)
if (defined('ENVIRONMENT')) $active_group = ENVIRONMENT; 
else $active_group = 'al-development';

/* End of file database.php */
/* Location: ./application/config/database.php */