<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Controller - Order_item
 * @author Al Elliott
 * 
 * Records lines on an order record.
 * E.g. A order froma supermarket might have 3 orderitem records denoting 
 * 'Flour x 2', 'Chocolate x 1' and 'Butter x 1'
 * 
 */
class Order_item extends App_Controller {

    public $model_name = 'M_Order_items';

    public function __construct() {
        parent::__construct();
    }

}

/* End of file Order_item.php */
/* Location: ./application/controllers/app/Order_item.php */