<div class="container mx-auto">
    <div class="flex space-x-2 justify-end pt-4 pb-3 pl-10 mr-10">
        <a href="{{ route('all-checkup.add') }}" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Tambah Data</a>
    </div>
    <h1 class="text-3xl text-blue-600/100 text-center pt-5 font-bold">
        Website Pengobatan Anak
    </h1>
    <div class="flex justify-center pt-5">
        <table class="border-separate border border-blue-600">
            <thead>
              <tr>
                <th class="border border-blue-600 p-5">Id</th>
                <th class="border border-blue-600 p-5">Tinggi Badan</th>
                <th class="border border-blue-600 p-5">Berat Badan</th>
                <th class="border border-blue-600 p-5">Mata Kanan</th>
                <th class="border border-blue-600 p-5">Mata Kiri</th>
                <th class="border border-blue-600 p-5">Gigi dan Mulut</th>
                <th class="border border-blue-600 p-5">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($checkups as $checkup)
              <tr>
                <td class="border border-blue-600 text-center p-2">{{ $checkup->id }}</td>
                <td class="border border-blue-600 text-center p-2">{{ $checkup->tinggi_badan }} cm</td>
                <td class="border border-blue-600 text-center p-2">{{ $checkup->berat_badan }} kg</td>
                <td class="border border-blue-600 text-center p-2">{{ $checkup->mata_kanan }}</td>
                <td class="border border-blue-600 text-center p-2">{{ $checkup->mata_kiri }}</td>
                <td class="border border-blue-600 text-center p-2">{{ $checkup->gigi_mulut }}</td>
                <td class="border border-blue-600 text-center p-2">
                  <a href="{{ route('all-checkup.edit',['checkup_id'=>$checkup->id]) }}" class="inline-block px-6 py-2.5 bg-yellow-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-yellow-700 hover:shadow-lg focus:bg-yellow-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-yellow-800 active:shadow-lg transition duration-150 ease-in-out">Ubah</a>
                  <a href="#" onclick="confirm('Apakah anda yakin ingin menghapus data checkup ini ?') || event.stopImmediatePropagation()" wire:click.prevent="hapusCheckup({{ $checkup->id }})" class="inline-block px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out" style="margin-left: 10px;">Hapus</a>
                </td>
              </tr>
              @endforeach
            </tbody>
        </table>
    </div>
  </div>