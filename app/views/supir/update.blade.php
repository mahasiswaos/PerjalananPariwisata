@extends('layout.supir.supir')
@section('content')
<?php
foreach ($supir as $value){
$id=$value->id;
$nama=$value->nama_supir;
$alamat=$value->alamat;
$telpon=$value->telpon;
$agama=$value->agama;
$jeniskelamin=$value->jenis_kelamin;
}
?>

<div class="col-sm-6 col-sm-offset-3">
    <div class="panel panel-info">
        <div class="panel panel-heading">
            <div class="glyphicon glyphicon-plus">
                Update Data Supir
            </div>
        </div>
        <div class="panel panel-body">
            <form class="form-horizontal" action="<?php echo URL::to('/update/proses/'.$id) ?>">
                <div class="form-group">
                    <div class="col-sm-4">
                        <label for="nama">Nama</label>
                    </div>
                    <input type="text" name="nama" value="<?php echo $nama;?>">
                </div>
                <div class="form-group">
                    <div class="col-sm-4">
                        <label for="alamat">Alamat</label>
                    </div>
                    <input type="text" name="alamat" value="<?php echo $alamat;?>">
                </div>
                <div class="form-group">
                    <div class="col-sm-4">
                        <label for="telpon">No. Telpon</label>
                    </div>
                    <input type="text" name="telpon" value="<?php echo $telpon;?>">
                </div>
                <div class="form-group">
                    <div class="col-sm-4">
                        <label for="warna">Agama</label>
                    </div>
                    <input type="text" name="agama" value="<?php echo $agama;?>">
                </div>
                <div class="form-group">
                    <div class="col-sm-4">
                        <label for="jeniskelamin">Jenis kelamin</label>
                    </div>
                    <!--<input type="text" name="jeniskelamin">-->
                    <input type="radio" name="jeniskelamin" value="Pria" required>Laki Laki  
                    <input type="radio" name="jeniskelamin" value="Wanita" required>Perempuan                
                </div>
                <div class="col-sm-4 col-sm-offset-4">
                <div class="form-group">
                    <a><button class="btn btn-primary glyphicon glyphicon-plus" type="submit">Simpan</button></a>
                    <a><button class="btn btn-danger glyphicon glyphicon-refresh" type="reset">Reset</button></a>
<!--                    <a><button class="btn btn-warning glyphicon glyphicon-arrow-left">Batal</button></a>-->
                </div>
                </div>

            </form>
        </div>
    </div>
</div>
@stop

