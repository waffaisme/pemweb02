<?php
$majors = ['Sistem Informasi', 'Teknik Informatika', 'Bisnis Digital'];
$skills = [
  'HTML' => 10,
  'CSS' => 10,
  'JavaScript' => 20,
  'RWD Bootstrap' => 20,
  'PHP' => 30,
  'Python' => 30,
  'Java' => 50,
];
$domisilis = ['Jakarta', 'Depok', 'Tangerang', 'Bekasi', 'Lainnya'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Form Registrasi IT Club</h2>
        <hr>

<form method="POST" action="proses_register.php">
  <div class="form-group row">
    <label for="nim" class="col-4 col-form-label">NIM</label> 
    <div class="col-8">
      <input id="nim" name="nim" placeholder="Masukan NIM" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="nama" name="nama" placeholder="Masukan Nama lengkap" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Jenis Kelamin</label> 
    <div class="col-8">
      <div class="form-check form-check-inline">
        <input name="gender" id="gender_0" type="radio" class="form-check-input" value="Laki-Laki"> 
        <label for="gender_0" class="form-check-label">Laki-Laki</label>
      </div>
      <div class="form-check form-check-inline">
        <input name="gender" id="gender_1" type="radio" class="form-check-input" value="Perempuan"> 
        <label for="gender_1" class="form-check-label">Perempuan</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="matkul" class="col-4 col-form-label">Program Studi</label> 
    <div class="col-8">
      <select id="matkul" name="prodi" class="form-control">
        <?php
        foreach($majors as $major):?>
          <option value="<?php echo $major ?>"><?php echo $major ?></option>
         <?php endforeach ?>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Skill Programming</label> 
    <div class="col-8">
      <?php foreach($skills as $key => $value): ?>
      <div class="form-check form-check-inline">
        <input name="skill[]" id="<?php echo $key ?>" type="checkbox" class="form-check-input" value="<?php echo $key ?>"> 
        <label for="<?php echo $key ?>" class="form-check-label"><?php echo $key ?></label>
      </div>
      <?php endforeach ?>
    </div>
  </div>
  <div class="form-group row">
    <label for="domisili" class="col-4 col-form-label">Tempat Domisili</label> 
    <div class="col-8">
      <select id="domisili" name="domisili" class="form-control">
      <?php
        foreach($domisilis as $domisili):?>
          <option value="<?= $domisili ?>"><?= $domisili ?></option>
         <?php endforeach ?>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <input id="email" name="email" placeholder="Masukan Email" type="text" class="form-control">
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