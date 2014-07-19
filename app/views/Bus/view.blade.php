@extends('layout.bus.bus')
@section('content')
<a href="<?php echo URL::to('/bus/insert'); ?>"><button class="btn btn-info">Tambah Bus Baru</button></a>
<br>
<br>
<div class="panel panel-default">
    <div class="panel-heading">
        TABEL BUS
    </div>
    <div class="panel-body">
        <table class="table">
            <tr>
                <th>
                    No.
                </th>
                <th>
                    ID Bus
                </th>
                <th>
                    Merek Bus
                </th>
                <th>
                    Tahun Pembuatan
                </th>
                <th>
                    Momor Polisi
                </th>
                <th>
                    Warna
                </th>
                <th>
                    Kapasitas
                </th>
                <th>
                    Aksi
                </th>
            </tr>


            <?php
            $no = '1';
            foreach ($bus as $v) {

                echo "<tr>";
                echo "<td>" . $nomer = $no . "</td>";
                echo "<td>" . $id = $v['id'] . "</td>";
                echo "<td>" . $merek = $v['merek_bus'] . "</td>";
                echo "<td>" . $tahun = $v['tahun_pembuatan'] . "</td>";
                echo "<td>" . $nostnk = $v['nomer_stnk'] . "</td>";
                echo "<td>" . $warna = $v['warna'] . "</td>";
                echo "<td>" . $kapasitas = $v['kapasitas'] . "</td>";
                echo "<td>";
                ?>
                <div class = "btn-group">
                    <!--<button type = "button" class = "btn btn-info">Detail</button>-->
                    <a href="<?php echo URL::to('/bus/update/'.$v['id'])?>"><button type = "button" class = "btn btn-default">Update</button></a>
                    <a href="<?php echo URL::to('/bus/delete/'.$v['id']);?>"><button type = "button" class = "btn btn-danger">Delete</button></a>
                </div>
                <?php
                echo "</td>";

                echo "</tr>";
                $no++;
            }
            ?>
        </table>
        <?php echo $bus->links(); ?>

    </div>
</div>
</div>
@stop

