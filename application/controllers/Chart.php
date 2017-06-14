<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**

 *
 */
class Chart extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->check_session();
    $this->load->model('m_chart');
  }
  public function index()
  {
    redirect(base_url('chart/show'));
  }
  public function show()
  {
    $data = array();
    $data['nama'] = $this->session->nama;
    $data['keterangan'] = $this->session->keterangan;
    $this->load->view('v-chart/v_show_chart',$data);
  }
  public function pie_chart()
  {
    echo json_encode($this->m_chart->pie_chart());
  }
  public function bar_chart()
  {
    echo json_encode($this->m_chart->bar_chart());
  }
  private function check_session()
  {
    if ($this->session->level != "1") {
      redirect(base_url('login/show'));
    }
  }
}
?>
