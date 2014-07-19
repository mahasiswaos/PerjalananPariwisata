<?php

namespace App\Controllers;

use App\Models\Supir;
use App\Models\Perjalanan;
use View;
use Input;
use Redirect;

class SupirController extends BaseController {
    /*
     * function ini menghandle proses view,insert,update,delete 
     * pada model Supir
     */

    //method untuk menampilkan data dari model Supir
    public function view() {
        //mengakses seluruh record yang ada pada tabel Supir
        $supir = Supir::paginate(5);

        //memecah array pada var supir kemudian dimasukkan kedalam var $data    
        $data = [
            'isi' => $supir
        ];
        return View:: make('supir.view', $data);
    }

    //method untuk menampilkan foram insert
    public function insert() {
        return view::make('supir.insert');
    }

    public function prosesInsert() {
        $inp = input::all();
        $i = new Supir;
        $i->nama_supir = $inp['nama'];
        $i->alamat = $inp['alamat'];
        $i->telpon = $inp['telpon'];
        $i->agama = $inp['agama'];
        $i->jenis_kelamin = $inp['jeniskelamin'];
        $i->save();

        return redirect::to('/admin/supir');
    }

    public function delete($id) {
        $supir = Supir::find($id);
        
            $supir->delete($supir);
            return redirect::to('/admin/supir');
        }

    public function update($id) {
        $s = Supir::find($id);
        $supir = array($s);
        $data = [
            'supir' => $supir
        ];

        return View:: make('supir.update', $data);
    }

    public function prosesUpdate($id) {
        $inp = input::all();
        $i = Supir::find($id);
        $i->nama_supir = $inp['nama'];
        $i->alamat = $inp['alamat'];
        $i->telpon = $inp['telpon'];
        $i->agama = $inp['agama'];
        $i->jenis_kelamin = $inp['jeniskelamin'];
        $i->save();

        return redirect::to('/admin/supir');
    }

}
