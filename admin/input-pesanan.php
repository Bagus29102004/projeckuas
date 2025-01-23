<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php include "navbar.php";?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="proses-input-pesanan.php" method="POST">
                    <div class="form-group">
                        <label for="NP">NP</label>
                        <input type="number" name="NP" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="NAMA">NAMA</label>
                        <input type="text" name="NAMA" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="SIZE">SIZE</label>
                        <input type="text" name="SIZE" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="ALAMAT">ALAMAT</label>
                        <input type="text" name="ALAMAT" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="HARGA">HARGA</label>
                        <input type="text" name="HARGA" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="SEPATU">SEPATU</label>
                        <input type="text" name="SEPATU" class="form-control">
                    </div>

                   

                    <input type="submit" name="kirim" value="SIMPAN" class="btn btn-info">
                    <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>
<?php include "footer.php";?>