<?php

class Home extends Controller {

    public function index()
    {
        $data['title'] = 'Halaman Home';

        $this->view('partials/header', $data);
        $this->view('home/index', $data);
        $this->view('partials/footer');
    }
}