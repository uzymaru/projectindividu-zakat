<!DOCTYPE HTML>
<html>
<head>
<title>halaman admin</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<div align="center">
          <a href="input_berita.php">+ Tambah berita </a>
              <?php
              include "koneksi.php";
              $query = "select * from kategori,berita where berita.kategori=kategori.id_kategori ";
              $sql = mysql_query($query);
              ?>
                          <table border="0">
                            <tr bgcolor="#B0B0B0">
                              <th><small>NO</small></th>
                              <th><small>Kategori</small></th>
                              <th><small>judul</small></th>
                              <th><small>Tgl input </small></th>
                              <th><small>Gambar</small></th>
                              <th><small>AKSI</small></th>
                            </tr>
                                  <?php
                                  $no=1;
                                  while ($data=mysql_fetch_array($sql))
                                  {
                                  ?>
                            <tr bgcolor="#E4E4E4">
                              <td><small><?php echo $no?></small></td>
                              <td><small><?php echo $data['nama_kategori']; ?></small></td>
                              <td><small><?php echo $data['judul_berita']; ?></small></td>
                              <td><small><?php echo $data['tgl_input']; ?></small></td>
                              <td><small><img src="foto/<?php echo $data['gambar']; ?>" height="30" width="30"></small></td>
                              <td><small><a href="hapus_berita.php?id=<?php echo $data['id_berita']; ?>" onClick = "return confirm('Apakah Anda ingin mengapus data <?php echo $data['id_berita']; ?>?')"> Hapus </a> | <a href="edit_berita.php?id=<?php echo $data['id_berita']; ?>" >Edit</a> </small></td>
                            </tr>
                                  <?php
                                  $no++;
                                  }
                                  ?>
                          </table>
</div>
</body>
</html>
