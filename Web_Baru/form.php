<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    <title>Tugas Form Registrasi</title>
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow p-4 mb-5 bg-white rounded">
            <h1 class="text-center mb-4">Form Registrasi</h1>
            <form action="outputform.php" method="POST">
                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" name="name" class="form-control" placeholder="Masukan Nama" required>
                </div>
                <div class="mb-3">
                    <label for="addr" class="form-label">Alamat</label>
                    <textarea name="addr" class="form-control" rows="3" placeholder="Masukan Alamat" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="pob" class="form-label">Tempat Lahir</label>
                    <input type="text" name="pob" class="form-control" placeholder="Masukan Tempat Lahir" required>
                </div>
                <div class="mb-3">
                    <label for="dob" class="form-label">Tanggal Lahir</label>
                    <input type="date" name="dob" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Jenis Kelamin</label>
                    <div class="form-check">
                        <input type="radio" name="gender" value="Laki-Laki" class="form-check-input" id="male">
                        <label class="form-check-label" for="male">Laki-Laki</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" name="gender" value="Perempuan" class="form-check-input" id="female">
                        <label class="form-check-label" for="female">Perempuan</label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="edu" class="form-label">Pendidikan</label>
                    <select name="edu" class="form-select" required>
                        <option value="-Pilih-" disabled selected>-Pilih-</option>
                        <option value="SMP">SMP</option>
                        <option value="SMA">SMA</option>
                        <option value="SMK">SMK</option>
                        <option value="D1">D1</option>
                        <option value="D2">D2</option>
                        <option value="D3">D3</option>
                        <option value="D4">D4</option>
                        <option value="S1">S1</option>
                        <option value="S2">S2</option>
                    </select>
                </div>
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-secondary">Cancel</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-eFSTOCJ4p21fEuw9pMSSKaAy0by0vZpseHQEFrT8v1EE0BpNtQ9RZDiOYFV22dz7" crossorigin="anonymous"></script>
</body>
</html>
