<?php /**
 *
 */
class M_datasiswa extends CI_Model
{
  public function add($data)
  {
    return $this->db->insert('tb_siswa', $data);
  }
  public function edit($nis)
  {
    $this->db->where('nis', $nis);
    return $this->db->get('tb_siswa')->row();
  }
  public function update($data)
  {
    $this->db->where('nis', $data['nis']);
    return $this->db->update('tb_siswa', $data);
  }
  public function trash($nis)
  {
    $this->db->where('nis', $nis);
    return $this->db->delete('tb_siswa');
  }
  public function count_students()
  {
    $count = array();
    $count['all'] = $this->db->count_all('tb_siswa');
    $this->db->where('jk','L');
    $count['male'] = $this->db->count_all_results('tb_siswa');
    $this->db->where('jk','P');
    $count['female'] = $this->db->count_all_results('tb_siswa');
    return $count;
  }
}
?>
