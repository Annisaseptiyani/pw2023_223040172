<?php

//koneksi ke database
 $conn = mysqli_connect("localhost","root","","tubes");

 function query($query){
    global $conn;
    $result = mysqli_query($conn , $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
    $rows[] = $row;

 }
 return $rows;

}





function tambah($data){
   global $conn;

   $judul_buku = htmlspecialchars($data["judul_buku"]);
   $penulis = htmlspecialchars($data["penulis"]);
   $penerbit =htmlspecialchars($data["penerbit"]);
   $harga =htmlspecialchars($data["harga"]);

   // upload gambar 
   $gambar = upload();
   if(!$gambar){
      return false;
   }
   
$query = "INSERT INTO tb_product VALUES(null,'$judul_buku','$penulis','$penerbit','$harga','$gambar')";
mysqli_query($conn , $query);

return mysqli_affected_rows($conn);
}

//function upload
function upload() {

   $namaFile = $_FILES['gambar']['name'];
   $ukuranFile = $_FILES['gambar']['size'];
   $error = $_FILES['gambar']['error'];
   $tmpName = $_FILES['gambar']['tmp_name'];

   //cek apakah tidak ada gambar yang diupload

   if( $error === 4){
      echo "<script>
      alert('pilih gambar terlebih dahulu');
      </script>";
      return false;
   }
   //cek apakah yang di upload adalah gambar
   $ekstensiGambarvalid = ['jpg','jpeg','png'];
   $ekstensigambar = explode('.',$namaFile);
   $ekstensigambar = strtolower (end($ekstensigambar));
   if(!in_array($ekstensigambar,$ekstensiGambarvalid)){

      echo "<script>
      alert('pilih gambar terlebih dahulu');
      </script>";
      return false;
}

//cek jika ukurannya terlalu besar
if( $ukuranFile > 1000000){
   echo "<script>
      alert('ukuran gambar terlalu besar');
      </script>";
      return false;
}

//generate nama gambar baru
$namaFileBaru = uniqid();
$namaFileBaru .= '.';
$namaFileBaru .= $ekstensigambar;
// lolos pengecekan,gambar siap diupload
move_uploaded_file($tmpName,'img/'. $namaFileBaru);

return $namaFileBaru;
}


//function hapus
function hapus ($id){
   global $conn;
   mysqli_query($conn, "DELETE FROM tb_product where id = $id");
   return mysqli_affected_rows($conn);
}

function ubah ($data){
   global $conn;

   $id = $data["id"];
   $judul_buku = htmlspecialchars($data["judul_buku"]);
   $penulis = htmlspecialchars($data["penulis"]);
   $penerbit =htmlspecialchars($data["penerbit"]);
   $harga =htmlspecialchars($data["harga"]);
   $gambarlama =htmlspecialchars($data["gambarlama"]);
//cekapakah user memilih gambar baru atau tidak
if($_FILES['gambar']['error']=== 4){
   $gambar = $gambarlama;
}else{
   $gambar = upload();
}


   
$query = "UPDATE tb_product SET
            judul_buku ='$judul_buku',
            penulis ='$penulis',
            penerbit = '$penerbit',
            harga ='$harga',
            gambar ='$gambar'
            WHERE id = $id
         ";
mysqli_query($conn , $query);

return mysqli_affected_rows($conn);
}



//funcution cari
function cari($keyword) {
   $query = "SELECT * FROM tb_product 
   WHERE
    judul_buku like '%$keyword%' OR
    penulis like '%$keyword' OR
    penerbit like '%$keyword' OR";
   return query($query);
}

 ?>