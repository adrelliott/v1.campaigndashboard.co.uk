<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Controller - Order
 * @author Al Elliott
 * 
 * Stores an order. (An order can have many OrderItem recods attached to it)
 * 
 */
class Order extends App_Controller {

    public $model_name = 'M_OrderItems';

    public function __construct() {
        parent::__construct();
    }

}

/* End of file Order.php */
/* Location: ./application/controllers/app/Order.php */