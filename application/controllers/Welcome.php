<?php


class Welcome extends Application {

    function __construct() {
        parent::__construct();
    }

    function index() {
        // show view template
        $this->data['pagebody'] = 'homepage';
        // lists the people and pass onto view
        $source = $this->quotes->all();
        $authors = array();
        foreach ($source as $record) {
            $authors[] = array('who' => $record['who'], 'mug' => $record['mug'], 'href' => $record['where']);
        }
        $this->data['authors'] = $authors;

        $this->render();
    }

    function shucks() {
        // show view template
        $this->data['pagebody'] = 'justone';
        // get 2nd item and pass onto view
        $record = $this->quotes->get(2);

        $this->data = array_merge($this->data, $record);

        $this->render();
    }

}

/* End of file Welcome.php */
    /* Location: application/controllers/Welcome.php */    