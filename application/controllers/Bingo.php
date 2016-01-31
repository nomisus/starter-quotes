<?php

/**
 * 
 * 
 * 
 * controllers/Bingo.php
 *
 * ------------------------------------------------------------------------
 */
class Bingo extends Application {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->data['pagebody'] = 'justone'; // show this view
        // grab the fifth item to pass to view
        $record = $this->quotes->get(5);

        $this->data = array_merge($this->data, $record);

        $this->render();
    }

}

/* End of file Bingo.php */
/* Location: application/controllers/Bingo.php */