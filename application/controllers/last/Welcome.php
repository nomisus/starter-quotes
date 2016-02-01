<?php


class Welcome extends Application {

    function __construct() {
        parent::__construct();
    }

    function index() {
        // show view template
        $this->data['pagebody'] = 'justone'; 
        // get the last item and pass to template
        $record = $this->quotes->last();

        $this->data = array_merge($this->data, $record);

        $this->render();
    }

}

/* End of file Welcome.php */
/* Location: application/controllers/last/Welcome.php */