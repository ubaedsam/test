<div>
    <section class="pt-5 pb-32">
        <div class="container">
          <div class="flex space-x-2 justify-end pt-4 pb-3 pl-10 mr-10">
            <a href="{{ url('/all-checkup') }}" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Kembali</a>
          </div>
          <div class="w-full px-4">
            <div class="max-w-xl mx-auto text-center mb-5">
                <h1 class="text-3xl text-blue-600/100 text-center font-bold">
                    Tambah Data Pengobatan Anak
                </h1>
            </div>
          </div>
          <form method="post" wire:submit.prevent="AddCheckup">
            @csrf
            <div class="w-full lg:w-2/3 lg:mx-auto">
              <div class="w-full px-4 mb-4">
                <label for="tinggi_badan" class="text-base font-bold text-blue-600/100">Tinggi Badan</label>
                <input type="text" id="tinggi_badan" name="tinggi_badan" class="w-full bg-slate-200 p-3 rounded-md" wire:model="tinggi_badan" />
                @error('tinggi_badan')
                    <p class="text-base font-bold text-red-600/100">{{ $message }}</p>
                @enderror
              </div>
              <div class="w-full px-4 mb-4">
                <label for="berat_badan" class="text-base font-bold text-blue-600/100">Berat Badan</label>
                <input type="text" id="berat_badan" name="berat_badan" class="w-full bg-slate-200 p-3 rounded-md" wire:model="berat_badan" />
                @error('berat_badan')
                    <p class="text-base font-bold text-red-600/100">{{ $message }}</p>
                @enderror
              </div>
              <div class="w-full px-4 mb-4">
                <label for="mata_kanan" class="text-base font-bold text-blue-600/100">Mata Kanan</label>
                <input type="text" id="mata_kanan" name="mata_kanan" class="w-full bg-slate-200 p-3 rounded-md" wire:model="mata_kanan" />
                @error('mata_kanan')
                    <p class="text-base font-bold text-red-600/100">{{ $message }}</p>
                @enderror
              </div>
              <div class="w-full px-4 mb-4">
                <label for="mata_kiri" class="text-base font-bold text-blue-600/100">Mata Kiri</label>
                <input type="text" id="mata_kiri" name="mata_kiri" class="w-full bg-slate-200 p-3 rounded-md" wire:model="mata_kiri" />
                @error('mata_kiri')
                    <p class="text-base font-bold text-red-600/100">{{ $message }}</p>
                @enderror
              </div>
              <div class="w-full px-4 mb-4">
                <label for="gigi_mulut" class="text-base font-bold text-blue-600/100">Gigi Mulut</label>
                <input type="text" id="gigi_mulut" name="gigi_mulut" class="w-full bg-slate-200 p-3 rounded-md" wire:model="gigi_mulut" />
                @error('gigi_mulut')
                    <p class="text-base font-bold text-red-600/100">{{ $message }}</p>
                @enderror
              </div>
              <div class="w-full px-4">
                <button type="submit" class="w-full inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Simpan</button>
              </div>
            </div>
          </form>
        </div>
      </section>
</div>