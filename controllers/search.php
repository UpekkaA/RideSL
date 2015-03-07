<?php

class Search extends Controller {

    function __construct() {
        parent::__construct();

        $this->view->js = array('search/js/modernizr.js', 'search/js/multizoom.js', 'search/js/popup.js', 'search/js/resultspage.js');
    }

    function index() {
        $this->view->render('search/index');
    }

    function resultList() {
        $this->view->resultList = $this->model->resultList();
        $this->view->render('search/index');
    }

}
