<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Controller - OrderItem
 * @author Al Elliott
 * 
 * Records lines on an order record.
 * E.g. A order froma supermarket might have 3 orderitem records denoting 
 * 'Flour x 2', 'Chocolate x 1' and 'Butter x 1'
 * 
 */
class OrderItem extends App_Controller {

    public $model_name = 'M_OrderItems';

    public function __construct() {
        parent::__construct();
    }

}

/* End of file OrderItem.php */
/* Location: ./application/controllers/app/OrderItem.php */