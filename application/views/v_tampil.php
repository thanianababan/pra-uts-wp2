<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Crud Identitas Diri</title>
   </head>
   <body>
      <center>
         <h1>CRUD Identitas Diri</h1>
      </center>
      <center><?php echo anchor('crud/tambah', 'Tambah Data'); ?></center>
      <table style="margin:20px auto;" border="1">
         <tr>
            <th>Nim</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Alamat</th>
            <th>Action</th>
         </tr>
         <?php
         $no = 1;
         foreach ($mhs as $u){
          ?>
          <tr>
             <td><?php echo $u->nim ?></td>
             <td><?php echo $u->nama ?></td>
             <td><?php echo $u->kelas ?></td>
             <td><?php echo $u->alamat ?></td>
             <td>
                <?php echo anchor('crud/edit/' . $u->nim, 'Edit'); ?>
                <?php echo anchor('crud/hapus/' . $u->nim, 'Hapus'); ?>
             </td>
          </tr>
       <?php } ?>
      </table>

   </body>
</html>