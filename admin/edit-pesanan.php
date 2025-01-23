<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php include "navbar.php"; ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="proses-edit-pesanan.php" method="POST">
                <?php
                $id=$_GET['id'];
                include "../koneksi.php";
                $tampil=$koneksi->query("select * from pesanan where NAMA='$id'");
                $row=$tampil->fetch_assoc();
                ?>
                    <div class="form-group">
                        <label for="nim">NP</label>
                        <input type="hidden" name="NP" value="<?php echo $row['NP']?>" class="form-control">
                        <input type="number" name="NP" value="<?php echo $row['NP']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="nama">NAMA</label>
                        <input type="text" name="NAMA" value="<?php echo $row['NAMA']?>" class="form-control">
                    </div>
                    

                    <div class="form-group">
                        <label for="nama">SIZE</label>
                        <input type="text" name="SIZE" value="<?php echo $row['SIZE']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="nama">ALAMAT</label>
                        <input type="text" name="ALAMAT" value="<?php echo $row['ALAMAT']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="nama">HARGA</label>
                        <input type="text" name="HARGA" value="<?php echo $row['HARGA']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="nama">SEPATU</label>
                        <input type="text" name="SEPATU" value="<?php echo $row['SEPATU']?>" class="form-control">
                    </div>

                    <input type="submit" name="kirim" value="UBAH" class="btn btn-info">
                    <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>

<?php include "footer.php";?>