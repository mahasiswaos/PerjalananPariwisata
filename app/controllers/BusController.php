<?php

namespace App\Controllers;

use View;
use App\Models\Bus;
use App\Models\Perjalanan;
use Input;
use Redirect;
use Illuminate\Pagination;
use Validator;

class BusController extends BaseController {

    public function index() {
//  mengambil data dari tabel bus dan akan ditampilkan 5 baris data per halaman        
        $d = Bus::paginate(5);
        $data = [
            'bus' => $d
        ];
        return view::make('bus.view', $data);
    }

//  method insert akan mengalihkan tampilan ke form insert

    public function insert() {
        return View::make('bus.insert');
    }

    public function prosesInsert() {
//  mengambil data dari inputan        
        $input = Input::all();
        $merek = $input['merekbus'];
        $tahun = $input['tahunpembuatan'];
        $stnk = $input['nomerstnk'];
        $warna = $input['warna'];
        $kapasitas = $input['kapasitas'];

        $aturan = [
            'tahunpembuatan' => 'max:4',
            'nomerstnk' => 'max:8',
            'kapasitas' => 'max:2'
        ];

        $validasi = validator::make($input, $aturan);

        if ($validasi->fails()) {
            return redirect::to('/bus/insert')->withErrors($validasi);
        } else {

//  proses inert data ke tabel Bus
            $i = new Bus();
            $i->merek_bus = $merek;
            $i->tahun_pembuatan = $tahun;
            $i->nomer_stnk = $stnk;
            $i->warna = $warna;
            $i->kapasitas = $kapasitas;
            $i->save();
            
             return redirect::to('/admin/bus');
            
        }
    }

    public function update($fandi) {

//  melakukan query pada tabel Bus untuk mencari record dengan id = $id 
//  yang kemudian dikirimkan ke view update
        $d = Bus::find($fandi);
        $array = array($d);
        $data = [
            'bus' => $array
        ];
        return view::make('bus.update', $data);
    }

//  mengabil data dari inputan form update 
    public function prosesUpdate($id) {
        $input = input::all();
        $merek = $input['merekbus'];
        $tahun = $input['tahunpembuatan'];
        $nomorstnk = $input['nomerstnk'];
        $warna = $input['warna'];
        $kapasitas = $input['kapasitas'];

        $aturan = [
            'tahunpembuatan' => 'max:4',
            'nomerstnk' => 'max:8',
            'kapasitas' => 'max:2'
        ];

        $validasi = validator::make(input::all(), $aturan);

        if ($validasi->fails()) {
            return redirect::back()->withErrors($validasi);
        } else {

//  proses penyimpanan data update ke tabel Bus 
            $u = Bus::find($id);
            $u->merek_bus = $merek;
            $u->tahun_pembuatan = $tahun;
            $u->Nomer_stnk = $nomorstnk;
            $u->warna = $warna;
            $u->kapasitas = $kapasitas;
            $u->save();
//  tampilan dikembalikan ke halaman tabel bus
            return redirect::to('/admin/bus');
        }
    }

    public function prosesDelete($id) {

//  proses pencarian data dnegan id = $id        
        $d = Bus::find($id);
//  proses delete data
        $perj = Perjalanan::where('id', '=', $id)->count();
        if ($perj==0) {
            $d->delete($d);
            return redirect::to('/admin/bus');
        } else {
            ?>
            <script>
                alert('Gagal menghapus data, data masih digunakan pada tabel Perjalanan')
                window.location="/admin/bus"
            </script>
            <?php

            //return redirect::to('/admin/supir');
        }
        
    }

}
