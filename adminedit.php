<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Rumah Zakat | Admin Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0"/>
    <meta charset="utf-8" />
    <link rel="shortcut icon" href="image/favicon.ico" type="image/x-icon" />
    <meta name="robots" content="index, follow" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="content-language" content="en" />
    <meta name="keywords" content="mz,mzcreatives,creatives,template,website,onepage,webdesign,portfolio,build website,themeforest" />
    <meta name="description" content="Now you can buy or use template from themeforest design by mzcreatives" />
    <meta property="og:title" content="One page website template for multipurpose website" />

    <!--css-->
    <link href="css/common.css" rel="stylesheet" type="text/css" />
    <link href="css/style.css" type="text/css" rel="stylesheet" />
    <link href="css/theme1024.css" rel="stylesheet" type="text/css" />
    <link href="css/theme990.css" rel="stylesheet" type="text/css" />
    <link href="css/theme768.css" rel="stylesheet" type="text/css" />
    <link href="css/theme480.css" rel="stylesheet" type="text/css" />
    <link href="css/theme320.css" rel="stylesheet" type="text/css" />
    <link href="css/theme319.css" rel="stylesheet" type="text/css" />
    <link href="css/quickweb.css" rel="stylesheet" type="text/css" />
    <link href="fonts/style.css" rel="stylesheet" type="text/css" />
    <link href="css/slider_css.css" type="text/css" rel="stylesheet" />
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600,700,900' rel='stylesheet' type='text/css'/>

    <link href="client/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
    <!--js-->
    <script src="js/jquery-ui.js"></script>
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/slider.js"></script>
    <script src="js/plugin.js"></script>
</head>
<body>
    <div class="main">
        <header class="header" style="border-bottom:2px solid #cecece; margin:10px 0px 10px 0px">
            <div class="container">
                <div class="col-12">
                    <div class="col-4 mb-11 logo-set">
                        <div class="logo"><img src="image/2.png" /></div>
                    </div>
                        <nav class="mob-menu-icon mb-1">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </nav>

                        <nav class="col-8 menu mob-menu pull-right">
                            <nav class="mob-menu-icon" style="padding: 26px 26px;width: 100%;box-sizing: border-box;border-bottom:2px solid #1565C0; ">
                                <span class="icon-bar slide-icon-menu-color"></span>
                                <span class="icon-bar slide-icon-menu-color"></span>
                                <span class="icon-bar slide-icon-menu-color"></span>
                            </nav>
                        <div class="menu-item-box center ">---------------------------------------------</div>
                        <div class="menu-item-box center "></div>
						<div class="menu-item-box center "><a class="btn btn-danger" href="adminlogout.php">Logout</a></div>
                        </nav>
                        <hr>
                </div>
            </div>
        </header>


<section class="call-action section-padding color-whte">
        <div class="container">


			<h2>Admin Page</h2>
			<div class="article-info"></div>

            <?php
					// memanggil file koneksi
					include 'adminkoneksiedit.php';

					// instance objek db
					$db = new database2();

					// koneksi ke MySQL via method
					$db->connectMySQL();

					// proses hapus data
					if (isset($_GET['aksi'])) {
						if ($_GET['aksi'] == 'hapus') {
							// baca id_admin dari parameter id_admin admin yang akan dihapus
							$id_admin = $_GET['id_admin_agt'];

							// proses hapus data admin berdasarkan id_admin via method
							$db->hapusadmin($id_admin);
						} elseif ($_GET['aksi'] == 'tambah') {
							echo"<br>
					<form method=POST action='?aksi=tambahadmin'>
					<table>
					<tr><td>username </td><td> :<font color='black'><input type=text name='username'></td></tr>
					<tr><td>password </td><td> :<font color='black'><input type=text name='password'></td></tr>
					<tr></tr>
					<tr><td></td><td><font color='black'><input type=submit value='simpan'></td></tr>
					</table>
					</form>
					";
						} elseif ($_GET['aksi'] == 'tambahadmin') {
							$username = $_POST['username'];
							$password = $_POST['password'];
							$db->tambahadmin($username, $password);
						}
					// proses edit data
						else if ($_GET['aksi'] == 'edit') {
							// baca id_admin admin yang akan diedit
							$id_admin = $_GET['id_admin_agt'];

					// menampilkan form edit admin pakai method bacaDataadmin()
							?>

							<form method="post" action="<?php $_SERVER['PHP_SELF'] ?>?aksi=update">
								<table>
									<tr><td>username</td><td>:</td>
										<td><font color="black"><input type="text" name="username" value="<?php echo $db->bacaDataadmin('username', $id_admin); ?>"></td>
									</tr>
									<tr><td>password</td><td>:</td>
										<td><font color="black"><input type="text" name="password" value="<?php echo $db->bacaDataadmin('password', $id_admin); ?>"></td>
									</tr>
								</table>
								<input type="hidden" name="id_admin" value="<?php echo $id_admin; ?>">
								<input type="submit" name="submit" value="Update Data">
							</form>

							<?php
						} else if ($_GET['aksi'] == 'update') {
							// proses update data admin
							$id_admin = $_POST['id_admin'];
							$username = $_POST['username'];
							$password = $_POST['password'];

							// update data via method
							$db->updateDataadmin($id_admin, $username, $password);
						}
					}

					// buat array data admin dari method tampiladmin()
					$arrayadmin = $db->tampiladmin();
                    ?>
                    <a class="btn btn-primary" href="adminpage.php">Kembali</a>
                    <?php
					echo"</table> <br> ";
					echo "<table border='1' cellpadding='5'>
						  <tr><th>No</th>
							   <th>username</th>
							   <th>password</th>
							   <th>Aksi</th>
						   </tr>";
					$i = 1;
					foreach ($arrayadmin as $data) {
						echo "<tr><td>" . $i . "</td>
								   <td>" . $data['username'] . "</td>
								   <td>" . $data['password'] . "</td>
								   <td><a href='" . $_SERVER['PHP_SELF'] . "?aksi=edit&id_admin_agt=" . $data['id_admin'] . "'>Edit</a>
								</tr>";
						$i++;
					}

					echo "</table>";
					?>



		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		</article>


        </section>


    	<div class="clear"></div>
    </div>
    <!--footer-->
    <section class="footer">
        <div class="bottom-footer">
            <div class="container">
                <div class="col-12">
                    <div class="col-6 mb-6 social"><div class="col-3"><i class="quickweb-icon-facebook"></i></div><div class="col-3"><i class="quickweb-icon-twitter"></i></div><div class="col-3"><i class="quickweb-icon-youtube"></i></div><div class="col-3"><i class="quickweb-icon-gplus-1"></i></div></div>
                </div>
                <div class="col-12 creator" style="padding-top:25px;">
                    <div class="col-6 copyright">© 2016 All Rights Reserved by Rumah Zakat Al - Ikhlas | Rumah Zakat </div>
                </div>
            </div>
        </div>
    </section>

    </div>

    <script type="text/javascript">
        thumb_slider({

            thumbs_to_show: 1,
            thumbs_to_move: 1,
            thumbs_width: 0,
            thumbs_count: 0,
            timeout: 10000,
            parent_id: "main_slider",
            container_class: "thumb_slider",
            thumb_class: "thumbs",
            spacing: 0,
            processing: false,
            hover: false,
            next_class: "next",
            prev_class: "prev",
            timer: setTimeout(function () { })
        });
    </script>

</body>
</html>
