<?php

/**
 * 
 * 
 * 
 * controllers/last/Welcome.php
 *
 * ------------------------------------------------------------------------
 */
class Welcome extends Application {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->data['pagebody'] = 'justone'; // show this view
        // grab the last item to pass to view
        $record = $this->quotes->last();

        $this->data = array_merge($this->data, $record);

        $this->render();
    }

}

/* End of file Welcome.php */
/* Location: application/controllers/last/Welcome.php */