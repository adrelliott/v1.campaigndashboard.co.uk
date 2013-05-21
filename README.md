
##Definitions##

The following definitions may be useful.

 * The 'Application' is the actual CRM, shared by all clients & users.
 * The 'Dataowner' is the company/client who has bought the application, and they are identified by their 'dID' - the dataowner Id. All records they interact with contain this unique id, (allowing us to keep all contact records in one database, with one set of classes)
 * The 'user' refers to a person nominated by the dataowner to access thier data. 
 * A 'contact' is a record in the contacts table inthe main database.
 * The 'folder' (in the context of 'views/app', where 'app' is the folder) relates ot the context of the application. for example, when configuting the applcation for a dataowner, we'd be in the 'config' folder, and all MVCs would we below this folder

##Structure of App##
The app is split into distinct areas (and the MVC folders reflect this):

1. *app* - This is where all the functionality that CRM users need will live. (E.g. Contact model etc)
2. *config* - In this folder, we keep all the functions that are used to set up & configure the CRM for each dataowner (E.g. Dataset setup model)
3. *auto* - This is the folder for all automated functions (E.g. the automated follow up campaign model)
4. *public* - This is the folder for all public facing methods & controllers (E.g. sumbitting forms on websites)
5. *api* - this is the API - not in use yet

Within the 'application/view' folder, we further sperate the files like this:

- views
--config
--public
--auto
--api
--app
---22232  _The dataowner id_
----common _contains common files like header, footer, navbar_
----contact _all views for the contact controller_
-----tables _a directory to hold the 'table' files_
-----fieldsets _a directory to hold the 'fieldset' files_
----booking _the rest of the structure mimics the above, with a folder named after the controller then 2 sub-folders of 'tables' and 'fieldsets'



##Base Classes & Extending Them##

Each class extends another base class. The base classes (wihc are stored in 'libraries/core_classes') are set out like this:

* *Base_Controller* - This is the controller that extends CI_Controller, and contains methods that are used throughout the application. 
* *App_Controller* - This is the controller for all controllers based in the 'app' folder, and extends Base_Controller. 
* *Config_Controller* - As above, this is the controller for all controllers based in the 'config' folder, and extends Base_Controller. 
* *Auto_Controller* - This is the controller for all controllers based in the 'auto' folder, and extends Base_Controller. 
* *Public_Controller* - This is the controller for all controllers based in the 'public' folder, and extends Base_Controller.

* *Base_Model* - This is the model that extends CI_Model, and contains methods that are used throughout the application. 
* *App_Model* - This is the model for all models based in the 'app' folder, and extends Base_Model. 
* *Config_Model* - This is the model for all models based in the 'config' folder, and extends Base_Model. 
* *Auto_Model* - This is the model for all models based in the 'auto' folder, and extends Base_Model. 
* *Public_Model* - This is the model for all models based in the 'public' folder, and extends Base_Model.

By using this heirachical system, we can avoid repeating code by placing it as near to the 'Base_' class as possible, but also retain granular control over the contexts of the app.

For example, we can add basic CRUD methods in the Base_Model class, but set a condition in the 'app_model' class to always ensure the field 'dID' is set yo $this->dID, meaning every single insert/update automatically stores the appropriate dataowner id (dID). 

So, to use an example of page that retrieves contact data (to show a user a contact's record, for example), the following would take place - all within the 'app' directory & context:

* The 'app/Contact' controller is called (this is the controller called 'Contact', located in the 'controllers/app' folder). This controller extends the 'App_Controller' (which, in turn, extends the Base_Controller).
* The 'app/M_Contacts' model is called, (in the 'models/app' directory), and this extends the 'App_Model', (which, in turn, extends the Base_Model).
* Then, after data has been manipulated, the view is called, from 'views/app/{dID}/contact/v_contact_edit.php'. (See 'Naming Conventions' for more info on why this file is named as it is).

Each model & controller is based on one of the above base controllers

##Multi-Homing##

This CRM uses 'multi-homing' to serve up bespoke-looking applications to mutliple clients, whilst using one central database and Codeignitor installation.

Most of this customisation happens in the view files, which are stored in separate directories for each data owner.

E.g. The view file for the contact page for dataowner with id of 22232 woudl be stored here:

_/application/views/app/*22232*/contact/v_contact_edit.php_

This way, we can store multiple, very different views, for multiple clients, whilst suing one Codeigniter framework, reducing bugs, update effort and also allowing users to share features.

##Naming Conventions##

To ensure consitency across the site (and the ability to easily read code) we stick to the following conventions:

* *Controllers* are capitalised and singular. Mutliple words are seprated by underscores, but only the first word is capialised. E.g. 'Contact_action'
* *Models* are prepended with 'M_' and are also capialised and always plural (Mutliple words are seprated by underscores, but only the first word is capialised) - E.g. 'M_Contact_action'
* *Views* are lowercase, and prepended with 'v_', followed by the controller name, followed by the view function. E.g. 'v_contact_action_edit. (Note: To make a view open in a modal window, just add the class 'iframe' to the link, and append '_modal' to the view fiel name. E.g. <a href="/contact_action/view/*v_contact_action_edit_modal* )
* *Libraries* - These are named in CamelCase.
* *Database tables* are always lowercase, always plural, and multiple  words are separated by underscores - E.g. 'contact_actions'
* *Database columns* (fields) are always upper case and multiple words are 'Camel Cased' E.g. 'StreetAddressType'
* *Data array* stores everything required for the page load. E.g. when retrieving data from the database, it goes in an array of $this->data. E.g. _$this->data['datasets']['all_contacts']_ would hold the results of the data quiery for all contacts
* *temporary variables* are used within the function context to hold data whilst processing. The following convestions are adhered to wherever possible:
** _$retval_ - This holds the final value/array to be returned form the function. At the end of the function, the line 'return $retval;' is common.
** _$results_ - this is the results of a query
** _$key_, _$array_, _$k_ & _$a_ - used when cycling through arrays
** _$tmp_ - used to hold temporary arrays,e.g. after the 'explode' function


##URI Strcuture & Rules##

All links in the app follow the same convention:

http://[server_name.co.uk]/{folder}/{controller}/{method}/{view}/{record_id}/{contact_id(OPTIONAL)}/{other_params(OPTIONAL)}?{$_GET_param(OPTIONAL)}

E.g. *http://MyMarketingCentre.co.uk/app/contact/view/edit/223*

This works out like this:

* {folder} - This is the folder where all the files sit. In this example, this would be the 'app' folder 
* {controller} - This is the name of the controller. In this example its 'Contact' controller
* {method} - This the method we are calling, within the controller - specifically the 'view' method
* {view} - This is the 3rd component of the view file name we need to call. In this case, as 'edit' is passed, then the view file would be 'v_contact_edit' (the 2nd portion is the controller's name). Note: append '_modal' to the view file name for modal views. E.g. to make the view file 'v_contact_action' modal it would be: <a href="/contact_action/view/*v_contact_action_edit_modal*> )
* {record_id} - This is the id of the record we are CRUDing.
* {contact_id} - This is the id of the contact record, if the table is not contact. For example, when adding an order to a contact record, the id would refer to the id of the order, but, to ensure that the order is attributed to the right contact record, the contact id is passed also. (This is an optional parameter)
* {other_params} - we sometimes want to pass other info to the controller
* {$_GET} - by passing a '?' after all URI segments, we can also pass other instructions. E.g. '?debug' allows us to show the profiler. These are the same as any other $_GET patrams in that they cna have a vlaue and are separed by '&'. E.g. '?param1=22&param2=hat'


##Flashdata & Sessions##

There are 3 session types we take advantage of:

 1. PHP Session - this is secure and server side so we use this to hold info like 'is_logged_in' flag and 'dID' etc
 2. Codeigniter Session - This is an encypted cookine, but less secure as its browser side, so we use this sotre info like 'user_first_name'
 3. Codeigniro Flash data - this is data that persists between screen loads only, so is used to display messages only. 
 
 
 #Controller Set Up#
 
 This section deals with each controller class and how it is set up.
 
 ##Base_Controller##
 
 This is the controller from which every other controller is extended, so it makes sense to put methods in here that are universally used across the application.
 
 The list of methods include:
 
 ###is_logged_in('min_perm' = 3)###
 
 This method is primarily used to chexk whether the user has permission to view this page. It checks 
 1. Is the user logged in (if not, it sends them to the login page)
 2. Has the user's session expired (each user is logged out after a number of seconds of inactivity)
 3. is the user's session record intact (do we have first name, email, etc or has it been it corrupted or destroyed)
 
 ###parse_str($_SERVER['QUERY_STRING'], $_GET);###
 
 This line allows us to use $_GET params. Goes in __construct
 
 ###if (isset($_GET['debug']) && && strpos(ENVIRONMENT, 'development')) $this->output->enable_profiler(TRUE);###
 
 We can use the param '?debug' after any URL to see the profiler and a dump of $this->data. (only works in developmnet envirmnets)
 
  ###set_up_page_vars###
 
 This method takes the URI segments and sets up variables in the $this->data['page_setup'] array. 
 
 These are used by generate_view() method to retrieve the correct view files and by fetch_datasets() to get the datasets that are required for this view file.
 

 ###fetch_datasets()###
 
 This method queries the configDatasets database and retrives the criteria for each dataset. the process works like this:
 
 1. It uses methods in config model to retrieve an array of queries to be performed
 2. it cycles through that array, then perfomring those queries using methods in the relevant model directory
 3. the resukting data is stored as an assoc array in $this->data['datasets'].
 
 For example, when loading the index method of the Contact controller in the 'app' context, the process would be:
 
 1. Get datasets:
 a. Load M_Config
 b. Perform a query that gets all dataset records where "Directory=app AND ControllerName=contact AND MethodName=index".
 c. The resulting array contains the dataset name ('Name'), a list of fields to retrieve ('Fields), the model to load ('Model'), the method to use ('Method') and any paramaters to be passed to this method ('Params')
 2. Perform those queries
 a. Load M_{Model)
 b. Run $this->M_{Model}->{Method}({Params})
 3. Store the results in $this->data['{Name}']
 
 
 ###_load_view()###
 
 This uses the variables stored in $this->data['page_setup'] to fetch the right views.
 
 For example if the URI is: _/app/contact/view/edit_modal/22_ then this method would load the view called 'v_contact_edit_modal', in the directory 'contact' in the directory 'app'.
 
  
 =========more???=========
 
 
 ##App_Controller##
 
 This is the controller from which every controller in the 'app' directory is extended.
 
 Therefore, we are able to write methods are specific to this context. These include:
  
###Ajax###
If its not a modal window, then use ajax to refresh the page 


##The Default Methods##

The folloowing ethods are the default methods for each controller. By delcaring them in the App_Controller, we can quickly create new controllers by simply defining the file and class and then using a parent contrsuct to assume all of these fnctions 

If they need customisation, they can either be re-declared in the contrller, and thus overwring the method declared here, oor called liek this $this->index() (but make sure that the method callign this function is not named the same), or they can be assued in the same controller, by decalign parent::XX.

E.g. Consider a contrller called Product.

class Product extends App_Controller {
	public function __construct() {
		parent::_construct();
		$this->load->model('app/M_Products');
	}
	
	//Option 1: don't declare an index() method.
		//In this case, when the method 'index' is called
		//it simply runs the index declared in App_Controller
		
	//Option 2: Assume parental attributes
	public function index() {
		//do some stuff unique to Product controler here
		parent::index();
	}
	
	//Option 3: Call the index() method
		//in this case, we can run some code before calling the default index. (NTOE: The method in product controller cannot be called index)
	public function index_special() {
		//do some stuff unique to Product controller here
		$this->index();
	}
}
	
	
	
###index()###

This is the default index method. 

###view()###

this si the default view emthod

 ###add()###

this is the default add method
 
 
 
 
 
