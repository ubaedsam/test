<?php

namespace App\Http\Livewire;

use App\Models\Checkups;
use Livewire\Component;

class AddCheckup extends Component
{
    // Data yang di simpan
    public $tinggi_badan;
    public $berat_badan;
    public $mata_kanan;
    public $mata_kiri;
    public $gigi_mulut;

    // proses validasi data untuk menambah data
    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'tinggi_badan' => 'required|numeric',
            'berat_badan' => 'required|numeric',
            'mata_kanan' => 'required',
            'mata_kiri' => 'required',
            'gigi_mulut' => 'required'
        ],[
            'tinggi_badan.required' => 'Data tinggi badan wajib di isi',
            'berat_badan.required' => 'Data berat badan wajib di isi',
            'mata_kanan.required' => 'Data mata kanan wajib di isi',
            'mata_kiri.required' => 'Data mata kiri wajib di isi',
            'gigi_mulut.required' => 'Data gigi dan mulut wajib di isi',
            'tinggi_badan.numeric' => 'Data tinggi badan hanya boleh di isi oleh angka saja',
            'berat_badan.numeric' => 'Data berat badan hanya boleh di isi oleh angka saja'
        ]);
    }

    public function AddCheckup()
    {
        // proses validasi data untuk menambah data
        $this->validate([
            'tinggi_badan' => 'required|numeric',
            'berat_badan' => 'required|numeric',
            'mata_kanan' => 'required',
            'mata_kiri' => 'required',
            'gigi_mulut' => 'required'
        ],[
            'tinggi_badan.required' => 'Data tinggi badan wajib di isi',
            'berat_badan.required' => 'Data berat badan wajib di isi',
            'mata_kanan.required' => 'Data mata kanan wajib di isi',
            'mata_kiri.required' => 'Data mata kiri wajib di isi',
            'gigi_mulut.required' => 'Data gigi dan mulut wajib di isi',
            'tinggi_badan.numeric' => 'Data tinggi badan hanya boleh di isi oleh angka saja',
            'berat_badan.numeric' => 'Data berat badan hanya boleh di isi oleh angka saja'
        ]);

        $checkup = new Checkups();
        $checkup->tinggi_badan = $this->tinggi_badan;
        $checkup->berat_badan = $this->berat_badan;
        $checkup->mata_kanan = $this->mata_kanan;
        $checkup->mata_kiri = $this->mata_kiri;
        $checkup->gigi_mulut = $this->gigi_mulut;

        $checkup->save();

        return redirect('/all-checkup')->with('toast_success','Data checkup berhasil ditambahkan');
    }

    public function render()
    {
        return view('livewire.add-checkup')->layout('layouts.app');
    }
}
