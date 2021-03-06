@extends('layout.perjalanan.perjalanan')
@section('isi')
<div class="col-sm-6 col-sm-offset-3">
    <div class="panel panel-info">
        <div class="panel panel-heading">
            <div class="glyphicon glyphicon-plus">Tambah Data Perjalanan Baru
            </div>
        </div>
        <div class="panel panel-body">
            <form class="form-horizontal" action="<?php echo URL::to('/perjalanan/insert/proses') ?>">
                <div class="form-group">
                    <div class="col-sm-4">
                        <label for="tempat">Tempat Berangkat</label>
                    </div>
                    <input type="text" name="tempat" required>
                </div>
                <div class="form-group">
                    <div class="col-sm-4">
                        <label for="tujuan">Tujuan</label>
                    </div>
                    <input type="text" name="tujuan" required="">
                </div>
                <div class="form-group">
                    <div class="col-sm-4">
                        <label for="penumpang">Jumlah Penumpang</label>
                    </div>
                    <input type="text" name="penumpang" required="">
                </div>
                <div class="form-group">
                    <div class="col-sm-4">
                        <label for="tgl">Tanggal Berangkat</label>
                    </div>
                    <input type="date" name="tgl" placeholder="" required>
                </div>
                <div class="form-group">
                    <div class="col-sm-4">
                        <label for="jam">Jam Berangkat</label>
                    </div>
                    <input type="time" name="jam" placeholder="hh:mm:ss" required>
                </div>
                <div class="form-group">
                    <div class="col-sm-4">
                        <label for="idbus">ID Bus</label>
                    </div>
                    <select name="idbus" required>
                        <?php
                        foreach ($idbus as $v) {
                            echo "<option>";
                            echo $v['id'];
                            echo "</option>";
                        }
                        ?>                        
                    </select>
                </div>
                <div class="form-group">
                    <div class="col-sm-4">
                        <label for="idsupir">ID Supir</label>
                    </div>
                    <select name="idsupir" required>
                        <?php
                        foreach ($idsupir as $v) {
                            echo "<option>";
                            echo $v['id'];
                            echo "</option>";
                        }
                        ?>   
                    </select>
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