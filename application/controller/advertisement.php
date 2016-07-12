<?php

/**
 * Class1 short summary.
 *
 * Class1 description.
 *
 * @version 1.0
 * @author Tiby
 */
class advertisement extends Application
{
    function __construct() {
        $this->loadModel('model_advertisement');
    }

    function index() {
        $data = $this->model_advertisement->advertisement_list();
        $this->loadView('view_advertisement',$data);
    }
}
