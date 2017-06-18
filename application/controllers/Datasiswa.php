<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 */
class Datasiswa extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->check_session();
    $this->load->model('m_datasiswa');
  }
  public function index()
  {
      redirect(base_url('datasiswa/show'));
  }
  public function show()
  {
      $data = array();
      $data['nama'] = $this->session->nama;
      $data['keterangan'] =  $this->session->keterangan;
      $this->load->view('v-datasiswa/v_show_datasiswa',$data);
      $this->load->view('v-datasiswa/v_modal_datasiswa');
  }
  public function show_data()
  {
        if ($this->input->is_ajax_request()) {

            $this->load->library('datatables_ssp');

            $table = 'tb_siswa';

            $primaryKey = 'nis';

            $columns = array(
                array('db' => 'nis', 'dt' => 'nis'),
                array('db' => 'nama', 'dt' => 'nama'),
                array('db' => 'jk', 'dt' => 'jk'),
                array('db' => 'tgl_lahir', 'dt' => 'tgl_lahir'),
                array('db' => 'alamat', 'dt' => 'alamat'),
                array(
                    'db' => 'nis',
                    'dt' => 'aksi',
                    'formatter' => function($a) {
                        return '<button type="button" class="btn btn-success btn-sm" onclick="edit(' . $a .  ')"><span class="glyphicon glyphicon-edit" aria-hidden="true"></button>
                                <button type="button" class="btn btn-danger btn-sm" onclick="trash(' . $a .  ')"><span class="glyphicon glyphicon-trash" aria-hidden="true"></button>';
                    }
                ),
            );

            $sql_details = array(
                'user' => 'root',
                'pass' => '',
                'db' => 'db_cidatasiswa',
                'host' => 'localhost'
            );

            echo json_encode(
                    Datatables_ssp::simple($_GET, $sql_details, $table, $primaryKey, $columns)
            );
        }
        else {
          redirect(site_url('datasiswa/show'));
        }
  }
  public function add()
  {
    if ($this->input->is_ajax_request()) {
      if ($this->validate($this->input->post()) == TRUE) {
        $this->m_datasiswa->add($this->security->xss_clean($this->input->post()));
        echo TRUE;
      }
    }
    else {
      redirect(site_url('datasiswa/show'));
    }
  }
  public function edit()
  {
    if ($this->input->is_ajax_request()) {
      echo json_encode($this->m_datasiswa->edit($this->input->post('nis')));
    }
    else {
      redirect(site_url('datasiswa/show'));
    }
  }
  public function update()
  {
    if ($this->input->is_ajax_request()) {
      if ($this->validate($this->input->post()) == TRUE) {
        $this->m_datasiswa->update($this->security->xss_clean($this->input->post()));
        echo TRUE;
      }
    }
    else {
      redirect(site_url('datasiswa/show'));
    }
  }
  public function trash()
  {
    if ($this->input->is_ajax_request()) {
      $this->m_datasiswa->trash($this->input->post('nis'));
    }
    else {
      redirect(site_url('datasiswa/show'));
    }
  }
  public function count_students()
  {
    if ($this->input->is_ajax_request()) {
      echo json_encode($this->m_datasiswa->count_students());
    }
    else {
      redirect(site_url('datasiswa/show'));
    }
  }
  private function validate($data)
  {
    $this->load->library('form_validation');
    $this->form_validation->set_rules('nis','nis','required|trim|exact_length[8]|numeric|integer');
    $this->form_validation->set_rules('nama','nama','required|trim|max_length[255]|callback_check_alpha_space');
    $this->form_validation->set_rules('jk','jk','required|exact_length[1]|alpha');
    $this->form_validation->set_rules('tmpt_lahir','tmpt_lahir','required|trim|max_length[225]|callback_check_alpha_space');
    $this->form_validation->set_rules('tgl_lahir','tgl_lahir','required');
    $this->form_validation->set_rules('alamat','alamat','required|trim|max_length[255]|alpha_numeric_spaces');
    $this->form_validation->set_rules('nama_ayah','nama_ayah','trim|max_length[255]|callback_check_alpha_space');
    $this->form_validation->set_rules('nama_ibu','nama_ibu','trim|max_length[255]|callback_check_alpha_space');
    return $this->form_validation->run();
  }
  public function check_alpha_space($data)
  {
    if (!preg_match('/^[a-zA-Z\s]+$/',$data)) {
        return FALSE;
    }
    else {
        return TRUE;
    }
  }

  private function check_session()
  {
    if ($this->session->level != "1") {
      redirect(base_url('login/show'));
    }
  }
}
?>
