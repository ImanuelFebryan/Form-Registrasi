<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUGAS WEB Bootstrap</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-4">
    <h1>Data Registrasi</h1>
    <table class="table table-bordered" style="width: 500px;">
        <?php
        error_reporting(0);
        $name = $_POST['name'];
        $addr = $_POST['addr'];
        $pob = $_POST['pob'];
        $dob = $_POST['dob'];
        $gender = $_POST['gender'];
        $edu = $_POST['edu'];
        ?>
        <tr>
            <td>Nama</td>
            <td><?php echo $name; ?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><?php echo $addr; ?></td>
        </tr>
        <tr>
            <td>Tempat Lahir</td>
            <td><?php echo $pob; ?></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td><?php echo $dob; ?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td><?php echo $gender; ?></td>
        </tr>
        <tr>
            <td>Pendidikan</td>
            <td><?php echo $edu; ?></td>
        </tr>
    </table>
    <a href="form.php" class="btn btn-primary">Back to Home</a>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>
