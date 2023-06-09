<?php include("connect.php") ?>
<!DOCTYPE html>
<html>
    <head>
        <title>ABI P</title>
    </head>

    <body>
        <h1>VIEW TABLE</h1>
        <table>
        <?php 
        $sql = "SELECT * FROM `rute`";
        $hasil = mysqli_query($koneksi, $sql);

        
            while($data = mysqli_fetch_array($hasil)){
                ?>
                    <tr>
                        <td><?php echo $data ['id_rute']; ?></td>
                        <td><?php echo $data ['id_bus']; ?></td>
                        <td><?php echo $data ['nama_wilayah']; ?></td>
                        <td><?php echo $data ['rute_berangkat']; ?></td>
                        <td><?php echo $data ['rute_kedatangan']; ?></td>
                    </tr>
                <?php } 
            ?>
        </table>
     </body>
</html>