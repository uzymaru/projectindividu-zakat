<!DOCTYPE HTML>
<html>
<head>
<title>halaman admin</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<div align="center">
    <div align="center">INPUT berita
        </div>
                        <p align="left"><form action="proses_berita.php" method="post" enctype="multipart/form-data">
                          <table width="383" border="0">
                            <?php
                            include'koneksi.php';
                            $sql_kategori="select * from kategori order by id_kategori";
                            $kueri_kategori=mysql_query($sql_kategori) or die(mysql_error());
                            ?>
                            <tr>
                              <td width="92"><small><strong>Kategori</strong></small></td>
                              <td width="10">:</td>
                              <td width="267">
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
                              <td><input type="text" name="judul_berita"></td>
                            </tr>
                            <tr>
                              <td><small><strong>isi artikel </strong></small></td>
                              <td>:</td>
                              <td><textarea name="isi_berita" cols="70" rows="30"></textarea></td>
                            </tr>
                            <tr>
                              <td><small><strong>Gambar</strong></small></td>
                              <td>:</td>
                              <td><input type="file" name="fupload" id="nama_file"></td>
                            </tr>
                            <tr>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                              <td><input type="submit" name="Submit" value="Submit"></td>
                            </tr>
                          </table>
                        </form></p>
</div>
</body>
</html>

