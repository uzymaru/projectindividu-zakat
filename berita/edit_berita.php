<!DOCTYPE HTML>
<html>
<head>
<title>halaman admin</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<div align="center">
              <p align="left">        
                <form enctype="multipart/form-data" method="post" action="update_berita.php?&id=<?php echo $_GET['id'] ?>">
                  <table width="701" border="0">
                    <?php
                    include'koneksi.php';
                    $id = $_GET['id'];
                    $edit		= "select * from berita where id_berita=$id";
                    echo $edit;
                      $hasil	= mysql_query($edit);
                      $c		= mysql_fetch_array($hasil);
                      print_r($c['gambar']);
                    ?>
                    <?php
                    include'koneksi.php';
                    $sql_kategori="select * from kategori order by id_kategori";
                    $kueri_kategori=mysql_query($sql_kategori) or die(mysql_error());
                    ?>
                    <tr>
                      <td width="92"><small><strong>Kategori</strong></small></td>
                      <td width="10">:</td>
                      <td width="585">
                        <select name="kategori">
                          <?php
                           while (list($kode,$nama_status)=mysql_fetch_array($kueri_kategori))
                             {
                          ?>
                          <option  value="<?php echo $kode ?>"><?php echo $nama_status ?></option>
                          <?php
                            }
                          ?>
                        </select>
                      </td>
                    </tr>
                    <tr>
                      <td><small><strong>Judul</strong></small></td>
                      <td>:</td>
                      <td><input type="text" name="judul_berita" value="<?php echo $c['judul_berita']; ?>"></td>
                    </tr>
                    <tr>
                      <td><small><strong>isi artikel </strong></small></td>
                      <td>:</td>
                      <td><textarea name="isi_berita" cols="70" rows="30" id="isi_berita"><?php echo $c['isi_berita'] ?></textarea></td>
                    </tr>
                    <tr>
                      <td><small><strong>Gambar</strong></small></td>
                      <td>:</td>
                      <td><input type="file" name="fupload" id="nama_file" value="<?php echo $c['gambar']; ?>"></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td><img class="img-responsive img-thumbnail" src="foto/<?php echo $c['gambar']; ?>"></td>
                      <td><input type="submit" name="Submit" value="Submit"></td>
                    </tr>
                  </table>
                </form>
              </p>  
</div>
</body>
</html>