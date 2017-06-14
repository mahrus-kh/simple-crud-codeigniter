<?php /**
 *
 */
class M_chart extends CI_Model
{
  public function pie_chart()
  {
    //$this->db->select('jk','COUNT(*) as HALo');
    //$this->db->group_by('jk');
    //return $this->db->get_compiled_select('tb_siswa');
    return $this->db->query("SELECT  jk, COUNT(*) AS Jml_Jk  FROM tb_siswa GROUP BY jk ASC")->result();
  }
  public function bar_chart()
  {
    return $this->db->query("SELECT  YEAR(tgl_lahir) AS Thn, COUNT(*) AS Jml_Thn  FROM tb_siswa GROUP BY YEAR(tgl_lahir) ASC")->result();
  }
}
?>
