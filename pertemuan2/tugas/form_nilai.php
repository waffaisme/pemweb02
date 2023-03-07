<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tugas 2</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    </head>
    <body>
        <h1 style="padding: 8px;">Form Nilai SIswa</h1>
        <hr>
        <div class="container">
            <form method="POST" action="proses_nilai.php">
                <div class="form-group row">
                    <label for="nama" class="col-4 col-form-label">Nama Lengkap</label>
                    <div class="col-6">
                        <input id="nama" name="nama" placeholder="Masukan nama lengkap" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label>
                    <div class="col-6">
                        <select id="matkul" name="matkul" class="custom-select">
                            <option value="MTK">Matematika</option>
                            <option value="BI">Bahasa Inggris</option>
                            <option value="BD">Basis Data</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="uts" class="col-4 col-form-label">Nilai UTS</label>
                    <div class="col-4">
                        <input id="uts" name="uts" placeholder="Masukan nilai UTS" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="uas" class="col-4 col-form-label">Nilai UAS</label>
                    <div class="col-4">
                        <input id="uas" name="uas" placeholder="Masukan nilai UAs" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tugas" class="col-4 col-form-label">Nilai Tugas/Praktikum</label>
                    <div class="col-4">
                        <input id="tugas" name="tugas" placeholder="Masukan nilai Tugas/Praktikum" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-4 col-8">
                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>