<?php
//membuat class databse
class database2 {
    // properti
    private $dbHost = "localhost";
    private $dbUser = "root";
    private $dbPass = "";
    private $dbName = "db_evav";

    // method koneksi MySQL
    function connectMySQL() {
        mysql_connect($this->dbHost, $this->dbUser, $this->dbPass);
        mysql_select_db($this->dbName) or die("Database tid_adminak ada!");
    }

    // method tambah data (insert)	
    function tambahadmin($username, $password) {
        $query = "INSERT INTO admin (username, password) VALUES ('$username','$password')";
        $hasil = mysql_query($query);

        if ($hasil)
            echo"<meta http-equiv='refresh' content='0; url=adminedit.php'>";
        else
            echo "Data admin gagal disimpan ke database";
    }

    // method tampil data 	
    function tampiladmin() {
        $query = mysql_query("SELECT * FROM admin ORDER BY id_admin");
        while ($row = mysql_fetch_array($query))
            $data[] = $row;
        return $data;
    }

    // method hapus data
    function hapusadmin($id_admin_agt) {
        $query = mysql_query("DELETE FROM admin WHERE id_admin='$id_admin_agt'");
        echo "<p>Data admin dengan id_admin " . $id_admin_agt . " sudah dihapus</p>";
    }

    // method membaca data admin 
    function bacaDataadmin($field, $id_admin_agt) {
        $query = "SELECT * FROM admin WHERE id_admin = '$id_admin_agt'";
        $hasil = mysql_query($query);
        $data = mysql_fetch_array($hasil);
        if ($field == 'username')
            return $data['username'];
        else if ($field == 'password')
            return $data['password'];
    }

    // method untuk proses update data admin
    function updateDataadmin($id_admin, $username, $password) {
        $query = "UPDATE admin SET username ='$username', password='$password' WHERE id_admin='$id_admin'";
        mysql_query($query);
        echo "<p>Data admin sudah di update.</p>";
    }

}
?>
