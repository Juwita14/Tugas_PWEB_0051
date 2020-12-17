<html>
    <head>
        <link href="bootstrap.css" rel="stylesheet">
        <link href="jumbotron.css" rel="stylesheet">
        <link rel="stylesheet" href="sign.css">
    </head>
    <body>
    <div class="container">
    <h3>Tabel Log</h3>
    <table class="table table-bordered table-striped table-condensed" border="1">
            <tr>
                <th>No</th>
                <th>Username</th>
                <th>Timestamp</th>
            </tr>
                <tbody>
                    <?php
                        include('koneksi.php');
    
                        $q = $koneksi->real_escape_string('SELECT * FROM log');
                        $q = $koneksi->query($q);
                        $i = 1;
                        while($res = $q->fetch_assoc()):
                    ?>
    
                    <tr>
                        <td class="align-middle"><?= $i++ ?></td>
                        <td class="align-middle"><?= $res['username'] ?></td>
                        <td class="align-middle"><?= $res['waktuUpload'] ?></td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
            <a class="btn btn-primary p-2" href="upload.php">Kembali</a>
    </div>
    </body>
</html>
