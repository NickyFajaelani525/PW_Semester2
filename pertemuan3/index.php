

<?php
$ar_prodi= ['SI'=>'Sistem Informasi','TI'=>'Teknik Informatika','BD'=>'Bisnis Digital'];
$ar_skill= ['HTML'=>10,'CSS'=>10,'Javascript'=>20,'RWD Bootsrap'=>20,'PHP'=>30,'Python'=>30,'Java'=>50];
$ar_domisili= ['Jakarta','Bogor','Depok','Tanggerang','Bekasi','lainnya'];
?>



<select name="prodi">
<?php 
foreach ($ar_prodi as $k =>$v) {
        echo "<option value='".$k."'>".$v."</option>";
        }
        ?>
</select>



<?php
 foreach($ar_skill as $k=>$v){
  echo '<input type='checkbox' name="skill[]" value="'.$k.'"> '.$k;
 }
 ?>

































<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<fieldset>
    <legend>
      <h2>Form Registrasi IT Club Data Science</h2>

    </legend>
<form>
  <div class="form-group row">
    <label for="text1" class="col-4 col-form-label">NIM</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-adn"></i>
          </div>
        </div> 
        <input id="text1" name="text1" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="text" name="text" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Jenis Kelamin</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio" id="radio_0" type="radio" class="custom-control-input" value="Laki-Laki"> 
        <label for="radio_0" class="custom-control-label">Laki-Laki</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio" id="radio_1" type="radio" class="custom-control-input" value="Perempuan"> 
        <label for="radio_1" class="custom-control-label">Perempuan</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="prodi" class="col-4 col-form-label">Program Studi</label> 
    <div class="col-8">
      <select id="prodi" name="prodi" class="custom-select">
        <option value="Teknik Informatika">Teknik Informatika</option>
        <option value="Sistem Informasi">Sistem Informasi</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Skill Web &amp; Programing</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio1" id="radio1_0" type="radio" class="custom-control-input" value="HTML"> 
        <label for="radio1_0" class="custom-control-label">HTML</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio1" id="radio1_1" type="radio" class="custom-control-input" value="CSS"> 
        <label for="radio1_1" class="custom-control-label">CSS</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio1" id="radio1_2" type="radio" class="custom-control-input" value="JavaScript"> 
        <label for="radio1_2" class="custom-control-label">JavaScript</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio1" id="radio1_3" type="radio" class="custom-control-input" value="RWD Bootstrap"> 
        <label for="radio1_3" class="custom-control-label">RWD Bootstrap</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio1" id="radio1_4" type="radio" class="custom-control-input" value="PHP"> 
        <label for="radio1_4" class="custom-control-label">PHP</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio1" id="radio1_5" type="radio" class="custom-control-input" value="Python"> 
        <label for="radio1_5" class="custom-control-label">Python</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio1" id="radio1_6" type="radio" class="custom-control-input" value="Java"> 
        <label for="radio1_6" class="custom-control-label">Java</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="select1" class="col-4 col-form-label">Tempat Domisili</label> 
    <div class="col-8">
      <select id="select1" name="select1" class="custom-select">
        <option value="Bogor">Bogor</option>
        <option value="Jakarta">Jakarta</option>
        <option value="Tokyo">Tokyo</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="text2" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-gg-circle"></i>
          </div>
        </div> 
        <input id="text2" name="text2" type="text" class="form-control">
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
</fieldset>
</body>
</html>