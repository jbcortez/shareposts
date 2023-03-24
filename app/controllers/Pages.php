<?php
  class Pages extends Controller {
    private $postModel;

    public function __construct() {
      $this->postModel = $this->model('Post');
    }

    public function index() {
      $data = ['title' => 'Shareposts', 'description' => 'Simple social network built on the TraversyMVC PHP framework'];

      $this->view('pages/index', $data);
    }

    public function about() {
      $data = ['title' => 'About', 'description' => 'App to share posts with other users'];
      $this->view('pages/about', $data);
    }
  }