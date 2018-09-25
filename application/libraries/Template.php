<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template {

  protected $_ci;

  function __construct(){
    $this->_ci=&get_instance();
  }

  public function dashboard($data=null)
  {
    $data['_content'] = $this->_ci->load->view('content/dashboard', $data, true);
    $this->_ci->load->view('index.php', $data);
  }

  public function santri($data=null)
  {
    $data['_content'] = $this->_ci->load->view('content/santri', $data, true);
    $this->_ci->load->view('index.php', $data);
  }

}
