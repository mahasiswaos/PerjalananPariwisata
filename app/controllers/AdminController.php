<?php

namespace App\Controllers;
use View;
use App\Models\Bus;
use App\Models\Supir;
use App\Models\Perjalanan;

Class AdminController extends BaseController {
  
    public function index() {
//mengambil semua field dari tabel perjalanan
        $perj = Perjalanan::all();
//mengambil semua field dari tabel Bus
        $bus = Bus::all();
//mengambil semua field dari tabel Supir
        $supir = Supir::all();
//mengirimkan isi dari masing masing tabel ke view dalam bentuk array
        $data = [
            'isiprj' => $perj,
            'isibus' => $bus,
            'isisupir' => $supir
            ];
        return view::make('admin.admin', $data);
    }

}
