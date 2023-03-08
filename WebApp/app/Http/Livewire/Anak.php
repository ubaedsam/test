<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Anaks;

class Anak extends Component
{
    public function hapusAnak($id)
    {
        $anak = Anaks::find($id);
        $anak->delete();
        return redirect('/all-anak')->with('toast_success','Data anak berhasil di hapus!');
    }

    public function render()
    {
        $anaks = Anaks::all();
        return view('livewire.anak',['anaks'=>$anaks])->layout('layouts.app');
    }
}
