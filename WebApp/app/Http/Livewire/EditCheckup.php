<?php

namespace App\Http\Livewire;

use App\Models\Checkups;
use Livewire\Component;

class EditCheckup extends Component
{
    // Data yang di simpan
    public $tinggi_badan;
    public $berat_badan;
    public $mata_kanan;
    public $mata_kiri;
    public $gigi_mulut;
    public $checkup_id;

    public function mount($checkup_id)
    {
        $checkup = Checkups::find($checkup_id);
        $this->tinggi_badan = $checkup->tinggi_badan;
        $this->berat_badan = $checkup->berat_badan;
        $this->mata_kanan = $checkup->mata_kanan;
        $this->mata_kiri = $checkup->mata_kiri;
        $this->gigi_mulut = $checkup->gigi_mulut;
        $this->checkup_id = $checkup->checkup_id;
    }

    // proses validasi data untuk menambah data
    // public function updated($fields)
    // {
    //     $this->validateOnly($fields,[
    //         'tinggi_badan' => 'required|numeric',
    //         'berat_badan' => 'required|numeric',
    //         'mata_kanan' => 'required',
    //         'mata_kiri' => 'required',
    //         'gigi_mulut' => 'required'
    //     ],[
    //         'tinggi_badan.required' => 'Data tinggi badan wajib di isi',
    //         'berat_badan.required' => 'Data berat badan wajib di isi',
    //         'mata_kanan.required' => 'Data mata kanan wajib di isi',
    //         'mata_kiri.required' => 'Data mata kiri wajib di isi',
    //         'gigi_mulut.required' => 'Data gigi dan mulut wajib di isi',
    //         'tinggi_badan.numeric' => 'Data tinggi badan hanya boleh di isi oleh angka saja',
    //         'berat_badan.numeric' => 'Data berat badan hanya boleh di isi oleh angka saja'
    //     ]);
    // }

    public function ubahCheckup()
    {
        // proses validasi data untuk menambah data
        // $this->validate([
        //     'tinggi_badan' => 'required|numeric',
        //     'berat_badan' => 'required|numeric',
        //     'mata_kanan' => 'required',
        //     'mata_kiri' => 'required',
        //     'gigi_mulut' => 'required'
        // ],[
        //     'tinggi_badan.required' => 'Data tinggi badan wajib di isi',
        //     'berat_badan.required' => 'Data berat badan wajib di isi',
        //     'mata_kanan.required' => 'Data mata kanan wajib di isi',
        //     'mata_kiri.required' => 'Data mata kiri wajib di isi',
        //     'gigi_mulut.required' => 'Data gigi dan mulut wajib di isi',
        //     'tinggi_badan.numeric' => 'Data tinggi badan hanya boleh di isi oleh angka saja',
        //     'berat_badan.numeric' => 'Data berat badan hanya boleh di isi oleh angka saja'
        // ]);

        $checkup = Checkups::find($this->checkup_id);
        $checkup->tinggi_badan = $this->tinggi_badan;
        $checkup->berat_badan = $this->berat_badan;
        $checkup->mata_kanan = $this->mata_kanan;
        $checkup->mata_kiri = $this->mata_kiri;
        $checkup->gigi_mulut = $this->gigi_mulut;
        $checkup->save();

        return redirect('/all-checkup')->with('toast_success','Data checkup berhasil diubah!');
    }

    public function render()
    {
        return view('livewire.edit-checkup')->layout('layouts.app');
    }
}
