<?php
// create database connection using file config
include_once 'config.php';
// fetch all user data from database
$result = mysqli_query($mysqli, 'select * from users order by id desc');
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD PHP Native</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center">
                <h2>Belajar CRUD PHP Native</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-10">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Nama</td>
                            <td>Jenis Kelamin</td>
                            <td>Alamat</td>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- looping data dari database -->
                        <?php 
                            while ($data = mysqli_fetch_assoc($result)) { 
                            echo "<tr>";
                                echo  "<td>".$data['id']."</td>";
                                echo  "<td>".$data['name']."</td>";
                                echo  "<td>".$data['jk']."</td>";
                                echo  "<td>".$data['alamat']."</td>";
                            echo "</tr>";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>