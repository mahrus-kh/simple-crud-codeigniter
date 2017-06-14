<div class="table-responsive">
<table class="table table-bordered table-hover table-striped" id="datasiswa-dt">
    <thead>
      <tr class="info">
        <th>NIS</th>
        <th>Nama</th>
        <th>JK</th>
        <th>TTL</th>
        <th>Agama</th>
        <th>Alamat</th>
        <th>Tools</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($datasiswa as $row) { ?>
      <tr>
        <td><?php echo $row->nis; ?></td>
        <td><?php echo $row->nama; ?></td>
        <td><?php echo $row->jk; ?></td>
        <td><?php echo $row->tmpt_lahir . ", " . $row->tgl_lahir; ?></td>
        <td><?php echo $row->agama; ?></td>
        <td><?php echo $row->alamat; ?></td>
        <td>
            <?php echo anchor('datasiswa/edit/' . $row->nis,'<span class="glyphicon glyphicon-edit"><span>',array("class"=>"btn btn-success btn-sm")) ?>
            <?php echo anchor('datasiswa/delete/' . $row->nis,'<span class="glyphicon glyphicon-trash"><span>',array("class"=>"btn btn-danger btn-sm")) ?>
        </td>
      </tr>
      <?php  } ?>
    </tbody>
</table>
</div>
