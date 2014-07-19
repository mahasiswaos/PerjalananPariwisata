@extends('layout.supir.supir')
@section('content')
<a href="<?php echo URL::to('/supir/insert');?>"><button class="btn btn-danger">tambah supir</button></a>
<div class="panel panel-danger"> 
    <div class="panel-heading">tabelsupir </div>
    <div class="panel-body">
            
<table class="table">
    <tr>
        <td>
            NO  
        </td>
        <td>
            ID Supir
        </td>
        <td>
            Nama 
        </td>
        <td>
            alamat  
        </td>
        <td>
            telpon
        </td>
        <td>
            agama
        </td>
        <td>
            jenis kelamin
        </td>
        <td>
            aksi
        </td>
    </tr>
    <?php
    $no=1;
    foreach($isi as $v){
        $id=$v['id'];
        $nama=$v['nama_supir'];
        $alamat=$v['alamat'];
        $telpon=$v['telpon'];
        $agama=$v['agama'];
        $kelamin=$v['jenis_kelamin'];
        echo "<tr>";
        echo "<td>".$no."</td>";
        echo "<td>".$id."</td>";
        echo "<td>".$nama."</td>";
        echo "<td>".$alamat."</td>";
        echo "<td>".$telpon."</td>";
        echo "<td>".$agama."</td>";
        echo "<td>".$kelamin."</td>";
        ?>
    <td>
        <a href="<?php echo URL::to('/supir/update/'.$id);?>"><button class="btn btn-info">update</button></a>
    
        <a href="<?php echo URL::to('/supir/delete/'.$id);?>"><button class="btn btn-danger">delete</button></a>
    </td>
    <?php
        echo "</tr>";
        $no ++;
    }
    ?>
</table>
        
</div>
  
    </div> 
  <?php echo $isi->links(); ?>
@stop