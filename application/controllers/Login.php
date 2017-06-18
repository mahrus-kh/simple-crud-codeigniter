<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 */
class Login extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('m_login');
  }
  public function index()
  {
      redirect(base_url('login/show'));
  }
  public function show()
  {
    $this->check_session();
    $this->load->view('v-login/v_login_form');
  }
  public function auth()
  {
    if ($this->input->is_ajax_request()) {
        if ($this->validate($this->input->post()) == TRUE) {
          $user = $this->m_login->auth($this->security->xss_clean($this->input->post()));
          if (!empty($user)) {
            $this->session($user);
            echo TRUE;
          }
        }
    }
    else {
      redirect(base_url('login/show'));
    }
  }
  private function session($user)
  {
        foreach ($user as $row) {
            $sess = array(
              "level"=>$row->level,
              "nama"=>$row->nama,
              "keterangan"=>$row->keterangan
            );
            $halo = $this->session->set_userdata($sess);
        }
  }
  private function check_session()
  {
    if ($this->session->level == "1") {
      redirect(base_url('datasiswa/show'));
    }
  }
  public function logout()
  {
    $this->session->sess_destroy();
    redirect(site_url('login/show'));
  }
  private function validate($data)
  {
    $this->load->library('form_validation');
    $this->form_validation->set_rules('username','username','required|trim|alpha_dash');
    $this->form_validation->set_rules('password','password','required|trim');
    return $this->form_validation->run();
  }
  public function error()
  {
    if ($this->input->is_ajax_request() ) {
      if ($this->input->post('status') == "required") {
        echo '<div class="alert alert-danger alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong> Username & Password is Required</strong>
               </div>';
      }
      else {
        echo '<div class="alert alert-danger alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong> Username or Password is Wrong</strong>
               </div>';
      }
    }
    else {
      redirect(site_url('login/show'));
    }
  }
}
?>
