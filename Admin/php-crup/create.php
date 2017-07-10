<?php
include "config.php";
include "header.php";
?>
<a href="index.php" class="btn btn-success btn-md"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> Back</a>
<?php
if(isset($_POST['bts'])):
  if($_POST['nm']!=null && $_POST['gd']!=null && $_POST['tl']!=null  && $_POST['ar']!=null){
     $stmt = $mysqli->prepare("INSERT INTO personal(name,gender,telp,address) VALUES (?,?,?,?)");
     $stmt->bind_param('ssss', $nm, $gd, $tl, $ar);
 
     $nm = $_POST['nm'];
     $gd = $_POST['gd'];
     $tl = $_POST['tl'];
     $ar = $_POST['ar'];
 
     if($stmt->execute()):
?>
<p></p>
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
  <strong>Berhasil!</strong> Silahkan tambah lagi, jika ingin keluar <span id="IL_AD12" class="IL_AD">klik</span> <a href="index.php">Home</a>.
</div>
<?php
     else:
?>
<p></p>
<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
  <strong>Gagal!</strong> Gagal total, Silahkan coba lagi!!!.<?php echo $stmt->error; ?>
</div>
<?php
     endif;
  } else{
?>
<p></p>
<div class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
  <strong>Gagal!</strong> Form tidak boleh kosong, tolong diisi.
</div>
<?php
  }
endif;
?>
 
     <p>
</p>
     <div class="panel panel-default">
       <div class="panel-body">
        
  <form role="form" method="post">
    <div class="form-group">
      <<span id="IL_AD5" class="IL_AD">label</span> for="nm">Name</label>
      <input type="text" class="form-control" name="nm" id="nm" placeholder="Enter Name">
    </div>
    <div class="form-group">
      <label for="gd">Gender</label>
      <select class="form-control" id="gd" name="gd">
        <option>Male</option>
        <option>Female</option>
      </select>
    </div>
    <div class="form-group">
      <label for="tl">Phone</label>
      <input type="tel" class="form-control" name="tl" id="tl" placeholder="Enter Phone">
    </div>
    <div class="form-group">
      <label for="ar">Address</label>
      <textarea class="form-control" name="ar" id="ar" rows="3"></textarea>
    </div>
    <button type="submit" name="bts" class="btn btn-default">Submit</button>
  </form>
<?php
include "footer.php";
?>