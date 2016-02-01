<?php


class Bingo extends Application {

    function __construct() {
        parent::__construct();
    }

    function index() {
        // show view template
        $this->data['pagebody'] = 'justone';
        // get 5th view and pass to template
        $record = $this->quotes->get(5);

        $this->data = array_merge($this->data, $record);

        $this->render();
    }

}

/* End of file Bingo.php */
/* Location: application/controllers/Bingo.php */