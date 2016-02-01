<?php


class Wise extends Application {

    function __construct() {
        parent::__construct();
    }

    function bingo() {
        // show view template
        $this->data['pagebody'] = 'justone'; 
        // get 6th item and pass onto view
        $record = $this->quotes->get(6);

        $this->data = array_merge($this->data, $record);

        $this->render();
    }

}

/* End of file Wise.php */
/* Location: application/controllers/Wise.php */