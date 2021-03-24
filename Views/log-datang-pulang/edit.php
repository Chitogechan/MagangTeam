
<?=$this->extend('layout/template')?>

<?=$this->section('content')?>

<h2 class="pl-2 mb-2 pt-2">Log Datang Pulang</h2>


<?php

if (@$success) {
	echo '<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h5><i class="icon fas fa-check"></i> info!</h5>
                  Data Berhasil ditambahkan
                </div>';
}

?>

 <?php


$attributes = ['method' => 'post', 'id' => 'myform','enctype'=>'multipart/form-data'];
echo form_open('log-datang-pulang-edit-' . $data['id'], $attributes);

?>

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Edit Log Datang Pulang</h3>
    </div>
    <div class="card-body">
    <div class="form-group">
          <label for="label">Category Id</label>
          <select  name="category_id" class="custom-select">
            <option value="<?=$data['category_id'];?>"  selected>Category Id</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
          </select>
        </div>
        <div class="form-group pmd-textfield pmd-textfield-floating-label pmd-navbar-left">
	        <label class="control-label">Dates</label>
	        <input type="text" class="form-control" name="dates" value="<?=$data['dates'];?>"  id="picker">
        </div>
        <div class="form-group">
            <label for="label">Attachment</label>
            <input type="file" value="<?=$data['attachment'];?>" name="attachment" class="form-control"  >
        </div>
        <div class="form-group pmd-textfield pmd-textfield-floating-label pmd-navbar-left">
	        <label class="control-label">Dates From</label>
	        <input type="text" class="form-control" name="dates_from" value="<?=$data['dates_from'];?>"  id="picker">
        </div>
        <div class="form-group pmd-textfield pmd-textfield-floating-label pmd-navbar-left">
	        <label class="control-label">Dates To</label>
	        <input type="text" class="form-control" name="dates_to" value="<?=$data['dates_to'];?>"  id="picker">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Notes</label>
            <textarea class="form-control" name="notes" value="<?=$data['notes'];?>" ></textarea>
       </div>
        <div class="form-group">
            <label for="label">Duration</label>
            <input type="number" value="<?=$data['duration'];?>" name="duration" class="form-control"  >
        </div>
        <div class="form-group">
          <label for="label">Position Id</label>
          <select  name="position_id" class="custom-select">
            <option value="<?=$data['position_id'];?>"  selected>Position Id</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
          </select>
        </div>
        <div class="form-group">
          <label for="label">Approval1</label>
          <select  name="position_id" class="custom-select">
            <option value="<?=$data['position_id'];?>"  selected>Approval1</option>
            <option value="1, Lia Ananta Putri">1, Lia Ananta Putri</option>
            <option value="2, Amelia Dwi Cahyani">2, Amelia Dwi Cahyani</option>
            <option value="3, Siti Nur Aini">3, Siti Nur Aini</option>
            <option value="4, Achmad Tsany Wicaksono">4, Achmad Tsany Wicaksono</option>
          </select>
        </div>
        <div class="form-group">
          <label for="label">Approval2</label>
          <select  name="approval2" class="custom-select">
            <option value="<?=$data['approval2'];?>"  selected>Approval2</option>
            <option value="1, Lia Ananta Putri">1, Lia Ananta Putri</option>
            <option value="2, Amelia Dwi Cahyani">2, Amelia Dwi Cahyani</option>
            <option value="3, Siti Nur Aini">3, Siti Nur Aini</option>
            <option value="4, Achmad Tsany Wicaksono">4, Achmad Tsany Wicaksono</option>
          </select>
        </div>
    </div>

    <div class="card-footer">
       <a href="<?=site_url('log-datang-pulang');?>" class="btn btn-default mr-1">Kembali</a>
       <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
    </div>
    <!-- /.card-body -->
    <!-- /.card-footer-->
</div>
<?=form_close();?>
<!-- /.card -->

<?=$this->endSection()?>
