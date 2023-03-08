<?php

namespace App\Http\Livewire;

use App\Models\Anaks;
use App\Models\Checkups;
use Livewire\Component;

class EditAnak extends Component
{
    // Data yang di simpan
    public $nomor_siswa;
    public $nama_siswa;
    public $tanggal_lahir;
    public $jenis_kelamin;
    public $nama_ortu;
    public $checkup_id;
    public $anak_id;

    public function mount($anak_id)
    {
        $anak = Anaks::find($anak_id);
        $this->nomor_siswa = $anak->nomor_siswa;
        $this->nama_siswa = $anak->nama_siswa;
        $this->tanggal_lahir = $anak->tanggal_lahir;
        $this->jenis_kelamin = $anak->jenis_kelamin;
        $this->nama_ortu = $anak->nama_ortu;
        $this->checkup_id = $anak->checkup_id;
        $this->anak_id = $anak->id;
    }

    // proses validasi data untuk menambah data
    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'nomor_siswa' => 'required|numeric',
            'nama_siswa' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'nama_ortu' => 'required',
            'checkup_id' => 'required'
        ],[
            'nomor_siswa.required' => 'Data nomor siswa wajib di isi',
            'nama_siswa.required' => 'Data nama siswa wajib di isi',
            'tanggal_lahir.required' => 'Data tanggal lahir wajib di isi',
            'jenis_kelamin.required' => 'Data jenis kelamin wajib di isi',
            'nama_ortu.required' => 'Data nama orang tua wajib di isi',
            'checkup_id.required' => 'Data jabatan wajib di isi',
            'nomor_siswa.numeric' => 'Data nomor siswa hanya boleh di isi oleh angka saja'
        ]);
    }

    public function ubahAnak()
    {
        // proses validasi data untuk menambah data
        $this->validate([
            'nomor_siswa' => 'required|numeric',
            'nama_siswa' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'nama_ortu' => 'required',
            'checkup_id' => 'required'
        ],[
            'nomor_siswa.required' => 'Data nomor siswa wajib di isi',
            'nama_siswa.required' => 'Data nama siswa wajib di isi',
            'tanggal_lahir.required' => 'Data tanggal lahir wajib di isi',
            'jenis_kelamin.required' => 'Data jenis kelamin wajib di isi',
            'nama_ortu.required' => 'Data nama orang tua wajib di isi',
            'checkup_id.required' => 'Data jabatan wajib di isi',
            'nomor_siswa.numeric' => 'Data nomor siswa hanya boleh di isi oleh angka saja'
        ]);

        $anak = Anaks::find($this->anak_id);
        $anak->nomor_siswa = $this->nomor_siswa;
        $anak->nama_siswa = $this->nama_siswa;
        $anak->tanggal_lahir = $this->tanggal_lahir;
        $anak->jenis_kelamin = $this->jenis_kelamin;
        $anak->nama_ortu = $this->nama_ortu;
        $anak->checkup_id = $this->checkup_id;
        $anak->save();

        return redirect('/all-anak')->with('toast_success','Data anak berhasil diubah!');
    }

    public function render()
    {
        $checkups = Checkups::all();
        return view('livewire.edit-anak',['checkups'=>$checkups])->layout('layouts.app');
    }
}
