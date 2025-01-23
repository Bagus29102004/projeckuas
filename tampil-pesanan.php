
  
<?php include "navbar.php"; ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <h1>Data Mahasiswa</h1>
            <?php 

            if(@$_GET['pesan']=="inputBerhasil"){

            ?>
                    <div class="alert alert-success">
                    Penyimpanan Berhasil!
                    </div>
            <?php

            }

            ?>


            <?php 

            if(@$_GET['pesan']=="hapusBerhasil"){

            ?>
                    <div class="alert alert-success">
                    Data Berhasil Dihapus!
                    </div>
            <?php

            }

            ?>

            <?php 

            if(@$_GET['pesan']=="editBerhasil"){

            ?>
                    <div class="alert alert-success">
                    Perubahan Berhasil!
                    </div>
            <?php

            }

            ?>


        <table  class="table table-bordered table-hover" id="data-table">
        <thead>
            <tr>
                <th>NP</th><th>NAMA</th><th> SIZE</th><th>ALAMAT</th> <th>SIZE</th><th>HARGA</th>
                <th>
                   
                    </a>
                </th>
            </tr> 
        </thead> 
        <tbody>
        <?php

        include "koneksi.php";
        $sql=$koneksi->query("select * from pesanan order by NP ASC");
        while($row= $sql->fetch_assoc()){
        ?>

            <tr>
                <td><?php echo $row['NP']?></td>
                <td><?php echo $row['NAMA']?></td>
                <td><?php echo $row['SIZE']?></td>
                <td><?php echo $row['ALAMAT']?></td>
                <td><?php echo $row['HARGA']?></td>
                <td><?php echo $row['SEPATU']?></td>
                <td>

                </td>
            </tr>

        <?php    
        }
        ?>
        </tbody>
        </table>
        </div>
    </div>
</div>


<?php include "footer.php";?>