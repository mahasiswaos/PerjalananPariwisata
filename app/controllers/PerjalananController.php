<?php

namespace App\Controllers;

use App\Models\Perjalanan;
use App\Models\Bus;
use App\Models\Supir;
use Input;
use Redirect;
use View;

class PerjalananController extends BaseController {

    public function tampil() {
        $perj = Perjalanan::all();

        $data = [
            'isi' => $perj
        ];

        return View::make('perjalanan.tampil', $data);
    }

    public function insert() {
        $bus = Bus::all();
        $supir = supir::all();
        $data = [
            'idbus'=> $bus,
            'idsupir'=> $supir
        ];
        return view::make('/perjalanan/tambah',$data);
    }
    public function prosesinsert() {
        // mengambil data dari inputan form insert        
        $inp = Input::all();
// proses insert data ke tabel
        $i = new Perjalanan();
        $i->tempat_berangkat = $inp['tempat'];
        $i->tujuan = $inp['tujuan'];
        $i->jumlah_penumpang = $inp['penumpang'];
        $i->tanggal_berangkat = $inp['tgl'];
        $i->jam_berangkat = $inp['jam'];
        $i->tabelBus_id = $inp['idbus'];
        $i->tabelSupir_id = $inp['idsupir'];
        $i->save();
// tampilan dikembalikan ke tabel perjalanan
        return redirect::to('/admin/perjalanan');
    }
    public function delete($id) {
        $perjalanan=Perjalanan::find($id);
        $perjalanan->delete();
         return redirect::to('/admin/perjalanan');
    }
}
