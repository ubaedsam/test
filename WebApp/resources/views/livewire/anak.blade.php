<div class="container mx-auto">
    <div class="flex space-x-2 justify-end pt-4 pb-3 pl-10 mr-10">
        <a href="{{ route('all-anak.add') }}" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Tambah Data</a>
    </div>
    <h1 class="text-3xl text-blue-600/100 text-center pt-5 font-bold">
        Website Pengobatan Anak
    </h1>
    <div class="flex justify-center pt-5">
        <table class="border-separate border border-blue-600">
            <thead>
              <tr>
                <th class="border border-blue-600 p-5">Id</th>
                <th class="border border-blue-600 p-5">Nomor Siswa</th>
                <th class="border border-blue-600 p-5">Nama Siswa</th>
                <th class="border border-blue-600 p-5">Tanggal Lahir</th>
                <th class="border border-blue-600 p-5">Jenis Kelamin</th>
                <th class="border border-blue-600 p-5">Nama Orang Tua</th>
                <th class="border border-blue-600 p-5">Tinggi Badan</th>
                <th class="border border-blue-600 p-5">Berat Badan</th>
                <th class="border border-blue-600 p-5">Mata Kanan</th>
                <th class="border border-blue-600 p-5">Mata Kiri</th>
                <th class="border border-blue-600 p-5">Gigi dan Mulut</th>
                <th class="border border-blue-600 p-5">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($anaks as $anak)
              <tr>
                <td class="border border-blue-600 text-center p-2">{{ $anak->id }}</td>
                <td class="border border-blue-600 text-center p-2">{{ $anak->nomor_siswa }}</td>
                <td class="border border-blue-600 text-center p-2">{{ $anak->nama_siswa }}</td>
                <td class="border border-blue-600 text-center p-2">{{ $anak->tanggal_lahir }}</td>
                <td class="border border-blue-600 text-center p-2">{{ $anak->jenis_kelamin }}</td>
                <td class="border border-blue-600 text-center p-2">{{ $anak->nama_ortu }}</td>
                <td class="border border-blue-600 text-center p-2">{{ $anak->checkup->tinggi_badan }} cm</td>
                <td class="border border-blue-600 text-center p-2">{{ $anak->checkup->berat_badan }} kg</td>
                <td class="border border-blue-600 text-center p-2">{{ $anak->checkup->mata_kanan }}</td>
                <td class="border border-blue-600 text-center p-2">{{ $anak->checkup->mata_kiri }}</td>
                <td class="border border-blue-600 text-center p-2">{{ $anak->checkup->gigi_mulut }} cm</td>
                <td class="border border-blue-600 text-center p-2">
                  <a href="{{ route('all-anak.edit',['anak_id'=>$anak->id]) }}" class="inline-block px-6 py-2.5 bg-yellow-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-yellow-700 hover:shadow-lg focus:bg-yellow-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-yellow-800 active:shadow-lg transition duration-150 ease-in-out">Ubah</a>
                  <a href="#" onclick="confirm('Apakah anda yakin ingin menghapus data anak ini ?') || event.stopImmediatePropagation()" wire:click.prevent="hapusAnak({{ $anak->id }})" class="inline-block px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out" style="margin-left: 10px;">Hapus</a>
                </td>
              </tr>
              @endforeach
            </tbody>
        </table>
    </div>
  </div>