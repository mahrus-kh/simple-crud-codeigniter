<?php /**
 *
 */
class M_login extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }
  public function auth($data)
  {
    $this->db->where('username',$data['username']);
    $user = $this->db->get('tb_admin')->result();
    if (!empty($user)) {
        foreach ($user as $row) {
          if (password_verify($data['password'],$row->password) == TRUE) {
            $status = $user;
          }
          else {
            $status = FALSE;
          }
        }
    }
    else {
      $status = FALSE;
    }
    return $status;
  }

  public function dub($data)
  {
    $this->db->where('username',$data['username']);
    $user = $this->db->get('tb_admin')->result();
    if (!empty($user)) {
        foreach ($user as $row) {
          if (password_verify($data['password'],$row->password) == TRUE) {
            $status = $user;
          }
          else {
            $status = FALSE;
          }
        }
    }
    else {
      $status = FALSE;
    }
    return $status;
  }
}
?>
