<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Crud Identitas Diri</title>
   </head>
   <body>
      <center>
         <h1>CRUD Identitas Diri</h1>
         <h3>Form Tambah Data Baru</h3>
      </center>
         <form action="<?php echo base_url() . 'crud/tambah_aksi';?>" method="post">
            <table style="margin:20px auto;">
               <tr>
                  <td>Nim</td>
                  <td>:</td>
                  <td><input type="text" name="nim" id=""></td>
               </tr>
               <tr>
                  <td>Nama</td>
                  <td>:</td>
                  <td><input type="text" name="nama" id=""></td>
               </tr>
               <tr>
                  <td>Kelas</td>
                  <td>:</td>
                  <td><input type="text" name="kelas" id=""></td>
               </tr>
               <tr>
                  <td>Alamat</td>
                  <td>:</td>
                  <td><input type="text" name="alamat" id=""></td>
               </tr>
               <td><input type="submit" value="Tambah"></td>
            </table>

         </form>

   </body>
</html>