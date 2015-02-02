<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Application
 *
 * @author Marcus
 */
class Application extends CI_Controller {
    protected $data = array();
    protected $id;
    protected $choices = array( // menu navbar
        'Home' => '/', 'Gallery' => '/gallery', 'About' => '/about'
    );
    
    function __construct() {
        parent::__construct();
        $this->data = array();
        $this->data['pagetitle'] = 'Sample Image Gallery';
    }
    
    /** Render the page */
    function render(){
        $this->data['menubar'] = build_menu_bar($this->choices);
        $this->data['content']= $this->parser->parse($this->data['pagebody'], $this->choices);
        $this->data['data']= &$this->data;
        $this->parser('_template', $this->data);
    }
}
