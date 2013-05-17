<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Controller - Native_session
 * @author Al Elliott
 * 
 * A lib to help us use PHP sessions
 * 
 */
class Native_session {

    public function __construct() {
        session_start();
    }

    public function set_native_session( $key, $value ) {
        $_SESSION[$key] = $value;
    }

    public function get_native_session( $key ) {
        return isset( $_SESSION[$key] ) ? $_SESSION[$key] : null;
    }

    public function regenerateId( $delOld = false ) {
        session_regenerate_id( $delOld );
    }

    public function delete_native_session( $key ) {
        unset( $_SESSION[$key] );
    }

}

/* End of file Native_session.php */
/* Location: ./application/libraries/Native_session.php */