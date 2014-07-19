@extends('layout.supir.supir')
@section('content')

<div class="col-sm-6 col-sm-offset-3">
    <div class="panel panel-info">
        <div class="panel panel-heading">
            <div class="glyphicon glyphicon-plus">Tambah Bus Baru
            </div>
        </div>
        <div class="panel panel-body">
            <form class="form-horizontal" action="<?php echo URL::to('/insert/proses') ?>">
                <div class="form-group">
                    <div class="col-sm-4">
                        <label for="nama">Nama</label>
                    </div>
                    <input type="text" name="nama" required>
                </div>
                <div class="form-group">
                    <div class="col-sm-4">
                        <label for="alamat">Alamat</label>
                    </div>
                    <input type="text" name="alamat" required>
                </div>
                <div class="form-group">
                    <div class="col-sm-4">
                        <label for="telpon">No. Telpon</label>
                    </div>
                    <input type="text" name="telpon" required>
                </div>
                <div class="form-group">
                    <div class="col-sm-4">
                        <label for="agama">Agama</label>
                    </div>
                    <select name="agama" required>
                        <option>.......</option>
                        <option>islam</option>
                        <option>kristen katolik</option>
                        <option>kristen protestan</option>
                        <option>hindu</option>
                        <option>budha</option>
                    </select>
                </div>
                <div class="form-group">
                    <div class="col-sm-4">
                        <label for="jeniskelamin">Jenis kelamin</label>
                    </div>
                    <!--<input type="text" name="jeniskelamin">-->
                    <input type="radio" name="jeniskelamin" value="Pria" required checked="true">Laki Laki  
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