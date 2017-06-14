<?php /**
 *
 */
class contoh extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->library('cart');
  }
  public function add_cart()
  {

    for ($j=0; $j <10 ; $j++) {
      $data = array(
        "id" => $j+1,
        "qty" => 7,
        "price" => 50,
        "name" =>"Jersey",
        "options" => "Barcelona"
      );
      $up = $this->cart->insert($data);
    }
  }

  public function isi_cart()
  {
    foreach ($this->cart->contents() as $konten) {
    echo  $konten['rowid'] . " : " . $konten['id'] . " : " . $konten['name'] . " : " . $konten['qty'] . " : " . $konten['price'] . " : " . $konten['options'] . " : " . anchor('contoh/update/'. $konten['rowid'],"delete") . br();
    }
  }

  public function del()
  {
    $del = $this->cart->remove($this->uri->segment(3));
    var_dump($del);

  }
  public function update()
  {
    //$halo = $this->uri->segment(3);
    $data = array(
      "rowid" => $this->uri->segment(3),
      "qty" => 0
    );
    if ($this->cart->update($data) == TRUE) {
      redirect('contoh/isi_cart');
    }


  }

  public function hapus()
  {
    $des = $this->cart->destroy();
    var_dump($des);

  }
  public function saja()
  {
    echo $this->cart->total() .br();
    echo $this->cart->total_items() .br();

  }
  public function grab()
  {



  }
}

?>
