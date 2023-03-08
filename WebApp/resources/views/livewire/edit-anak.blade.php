<div>
    <section class="pt-5 pb-32">
        <div class="container">
          <div class="flex space-x-2 justify-end pt-4 pb-3 pl-10 mr-10">
            <a href="{{ url('/all-anak') }}" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Kembali</a>
          </div>
          <div class="w-full px-4">
            <div class="max-w-xl mx-auto text-center mb-5">
                <h1 class="text-3xl text-blue-600/100 text-center font-bold">
                    Ubah Data Pengobatan Anak
                </h1>
            </div>
          </div>
          <form method="post" wire:submit.prevent="ubahAnak">
            @csrf
            <div class="w-full lg:w-2/3 lg:mx-auto">
              <div class="w-full px-4 mb-4">
                <label for="nomor_siswa" class="text-base font-bold text-blue-600/100">Nomor Siswa</label>
                <input type="text" id="nomor_siswa" name="nomor_siswa" class="w-full bg-slate-200 p-3 rounded-md" wire:model="nomor_siswa" />
                @error('nomor_siswa')
                    <p class="text-base font-bold text-red-600/100">{{ $message }}</p>
                @enderror
              </div>
              <div class="w-full px-4 mb-4">
                <label for="nama_siswa" class="text-base font-bold text-blue-600/100">Nama Siswa</label>
                <input type="text" id="nama_siswa" name="nama_siswa" class="w-full bg-slate-200 p-3 rounded-md" wire:model="nama_siswa" />
                @error('nama_siswa')
                    <p class="text-base font-bold text-red-600/100">{{ $message }}</p>
                @enderror
              </div>
              <div class="w-full px-4 mb-4">
                <label for="tanggal_lahir" class="text-base font-bold text-blue-600/100">Tanggal Lahir</label>
                <input type="date" id="tanggal_lahir" name="tanggal_lahir" class="w-full bg-slate-200 p-3 rounded-md" wire:model="tanggal_lahir" />
                @error('tanggal_lahir')
                    <p class="text-base font-bold text-red-600/100">{{ $message }}</p>
                @enderror
              </div>
              <div class="w-full px-4 mb-4">
                <label for="jenis_kelamin" class="text-base font-bold text-blue-600/100">Jenis Kelamin</label>
                <input type="text" id="jenis_kelamin" name="jenis_kelamin" class="w-full bg-slate-200 p-3 rounded-md" wire:model="jenis_kelamin" />
                @error('jenis_kelamin')
                    <p class="text-base font-bold text-red-600/100">{{ $message }}</p>
                @enderror
              </div>
              <div class="w-full px-4 mb-4">
                <label for="nama_ortu" class="text-base font-bold text-blue-600/100">Nama Orang Tua</label>
                <input type="text" id="nama_ortu" name="nama_ortu" class="w-full bg-slate-200 p-3 rounded-md" wire:model="nama_ortu" />
                @error('nama_ortu')
                    <p class="text-base font-bold text-red-600/100">{{ $message }}</p>
                @enderror
              </div>
              <div class="w-full px-4 mb-4">
                <label for="checkup" class="text-base font-bold text-blue-600/100">Checkup</label>
                <select name="checkup_id" class="w-full bg-slate-200 p-3 rounded-md" wire:model="checkup_id">
                    <option selected>Pilih Data Checkup</option>
                    @foreach ($checkups as $checkup)
                        <option value="{{ $checkup->id }}">{{ $checkup->tinggi_badan }} | {{ $checkup->berat_badan }}</option>
                    @endforeach
                </select>
                @error('checkup_id')
                    <p class="text-base font-bold text-red-600/100">{{ $message }}</p>
                @enderror
              </div>
              <div class="w-full px-4">
                <button type="submit" class="w-full inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Ubah</button>
              </div>
            </div>
          </form>
        </div>
      </section>
</div>