

<?php include "navbar.php";?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">

            <?php 

            if(@$_GET['pesan']=="inputBerhasil"){

            ?>
                <div class="alert alert-success">
                Terima kasih, pesanan anda sudah terkirim!
                </div>
        <?php

            }

                ?>
                <form action="proses-input-pesanan.php" method="POST">
                    <div class="form-group">
                        <label for="nim">NP</label>
                        <input type="number" name="NP" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="nama">NAMA</label>
                        <input type="text" name="NAMA" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="nama">SIZE</label>
                        <input type="text" name="SIZE" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="alamat">ALAMAT</label>
                        <textarea name="ALAMAT" class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="alamat">HARGA</label>
                        <textarea name="HARGA" class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="alamat">SEPATU</label>
                        <textarea name="SEPATU" class="form-control"></textarea>
                    </div>

                    <input type="submit" name="kirim" value="SIMPAN" class="btn btn-info">
                    <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>
<?php include "footer.php";?>