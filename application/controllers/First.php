<?php


class First extends Application {

    function __construct() {
        parent::__construct();
    }

    function index() {
        // show view template
        $this->data['pagebody'] = 'justone';
        // get first item and pass to template
        $record = $this->quotes->first();

        $this->data = array_merge($this->data, $record);

        $this->render();
    }

    function zzz() {
        // show view template
        $this->data['pagebody'] = 'justone'; 
        // get first item and pass onto view
        $record = $this->quotes->get(1);

        $this->data = array_merge($this->data, $record);

        $this->render();
    }

    function gimme($id) {
        // show view template
        $this->data['pagebody'] = 'justone'; 
        // get id=3 and pass onto view
        $record = $this->quotes->get($id);

        $this->data = array_merge($this->data, $record);

        $this->render();
    }

}

/* End of file First.php */
/* Location: application/controllers/First.php */