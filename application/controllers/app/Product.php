<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Controller - Product
 * @author Al Elliott
 * 
 */
class Product extends App_Controller {

    public $model_name = 'M_Products';

    public function __construct() {
        parent::__construct();
    }

}

/* End of file Product.php */
/* Location: ./application/controllers/app/Product.php */