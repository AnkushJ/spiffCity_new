<?php
  /*
  * Spiffcity
  * Dashboard Controller
  * @package spiffcity
  */
  class Dashboard extends CI_Controller{
    /*
    * __construct
    * @method void used to call parent constructor.
    */
    function __construct(){
      parent::__construct();
    }
    /*
    * Index
    * @method array used to get user's profile data from database and displaying it.
    */
    function index(){
        $this->load->view('dashboard_navbar');
        $this->load->view('dashboard_user');
        $this->load->view('dashboard_footer');
    }
  }
?>