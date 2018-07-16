<?php
function UploadFile($fupload_name){
  //direktori file
  $vdir_upload = "foto/";
  $vfile_upload = $vdir_upload . $fupload_name;

  //Simpan gambar dalam ukuran sebenarnya
  move_uploaded_file($_FILES["fupload"]["tmp_name"], $vfile_upload);
}

function UploadFile2($fupload_name,$path){
  //direktori file
  // $vdir_upload = "foto/";
  $vdir_upload = $path;
  $vfile_upload = $vdir_upload . $fupload_name;

  //Simpan gambar dalam ukuran sebenarnya
  move_uploaded_file($_FILES["fupload"]["tmp_name"], $vfile_upload);
}
?>
