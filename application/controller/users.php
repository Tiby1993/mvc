<?php

/**
 * users short summary.
 *
 * users description.
 *
 * @version 1.0
 * @author Tiby
 */
class users extends Application {

    function __construct() {
        $this->loadModel('model_users');
    }

    function index() {
        $data = $this->model_users->users_list();
        $this->loadView('view_users',$data);
    }




}
