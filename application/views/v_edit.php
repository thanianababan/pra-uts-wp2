<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Crud Identitas Diri</title>
   </head>
   <body>
      <center>
         <h1>Crud Identitas Diri</h1>
         <h3>Form Edit Data</h3>
      </center>
      <?php foreach ($user as $u) { ?>
         <form action="<?php echo base_url() . 'crud/update'?>" method="post">
            <table style="margin:20px auto;">
               <tr>
                  <td>Nim</td>
                  <td>:</td>
                  <input type="hidden" name="nim" value="<?php echo $u->nim ?>">
                  <td><input type="text" name="nama" value="<?php echo $u->nama ?>"></td>
               </tr>
               <tr>
                  <td>Kelas</td>
                  <td>:</td>
                  <td><input type="text" name="kelas" value="<?php echo $u->kelas ?>"></td>
               </tr>
               <tr>
                  <td>Alamat</td>
                  <td>:</td>
                  <td><input type="text" name="alamat" value="<?php echo $u->alamat ?>"></td>
               </tr>
               <td><input type="submit" value="Simpan"></td>
            </table>
         </form>
      <?php } ?>
   </body>
</html>