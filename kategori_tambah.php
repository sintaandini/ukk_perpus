<h1 class="mt-4">katogori buku</h1>
<div class="card">
<div class="card-body">
<div class="row">
<div class="col-md-12">
<form method="post">
<?php
if (isset($_POST if['submit'])) {
    $kategori = $_POST['kategori'];
    $query = mysqli_query($koneksi, "INSERT INTO kategori(kategori) values ('$kategori')");

    if ($query){
        echo '<script>alert("Tambah Data Berhasil."); location.href="?page=kategori"; </script>';
    }else{
        echo '<script>alert("Tambah Data Gagal."); </script>';
    }
    }
?>
<div class="row mb-3">
<div class="col-md-2">Nama kategori</div>
<div class="col-md-8"><input type="text" class="from-control"name="kategori"></div>
</div>
<div class="row">
<div class="col-md-2"></div>
<div class="col-md-8">
<button type="submit" class="btn btn-primary" name=submit value="submit">Simpan</button>
<button type="reset" class="btn btn-secondary" >Reset </button>
<a href="?page=kategori" class="btn btn-danger">Kembali</a>
</from>
</div>