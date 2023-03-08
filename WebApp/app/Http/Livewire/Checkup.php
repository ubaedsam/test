<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Checkups;

class Checkup extends Component
{
    public function hapusCheckup($id)
    {
        $checkup = Checkups::find($id);
        $checkup->delete();
        return redirect('/all-checkup')->with('toast_success','Data checkup berhasil di hapus!');
    }

    public function render()
    {
        $checkups = Checkups::all();
        return view('livewire.checkup',['checkups'=>$checkups])->layout('layouts.app');
    }
}
