<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>
    1461900133
  </title>
  <link rel="stylesheet" href="{{asset('css/app.css')}}" />
</head>
<body>
Cari Nama
<form action="{{route('transaksi.search')}}" method="GET">
		<input type="text" name="cari" placeholder="Cari Pegawai Nama" value="{{ old('transaksi->id_pelanggan') }}">
		<input type="submit">
</form>

<h2 class="flex item-center justify-between my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
      <div>Transaksi</div>
      <div>
        <a href="{{route('transaksi.tambah')}}" class="flex items-center justify-between p-2 text-sm font-semibold text-purple-100 bg-purple-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple">
          <svg class="w-7 h-7 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
            </svg>
          Tambah Data</a>
      </div>
    </h2>
    
    <div class="w-full overflow-hidden rounded-lg shadow-xs table-auto">
      <div class="w-full overflow-x-auto">
          <table class="w-full"> <!--whitespace-no-wrap-->
              <thead>
                <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                  <th class="px-4 py-3">ID Transaksi</th>
                  <th class="px-4 py-3">Pelanggan</th>
                  <th class="px-4 py-3">Barang</th>
                  <th class="px-4 py-3">Aksi</th>
                </tr>
              </thead>
              <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                @forelse ($transaksi as $trans)
                <tr class="text-gray-700 dark:text-gray-400">
                  <td class="px-4 py-3 text-sm">
                    {{ $trans->id }}
                    <!-- menampilkan data id -->
                  </td>
                  <td class="px-4 py-3 text-sm">
                    <span class="px-2 py-1 font-semibold leading-tight text-gray-700 dark:text-gray-100">
                      {{ $trans->idPelanggan->nama }}
                      <!-- menampilkan data nama -->
                    </span>
                  </td>
                  <td class="px-4 py-3 text-sm">
                    <span class="px-2 py-1 font-semibold leading-tight text-gray-700 dark:text-gray-100">
                      {{ $trans->idBarang->nama }}
                    </span>
                  </td>
                  <td class="px-4 py-3">
                    <div class="flex items-center space-x-4 text-sm">
                      <a href="{{route('transaksi.edit',['id' => $trans->id])}}" class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray" aria-label="Delete">
                        <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                        </svg>
                      </a>

                      <form action="{{route('transaksi.hapus',['id' => $trans->id])}}" method="post">
                        @csrf
                        <button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray" aria-label="Delete">
                          <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                          </svg>
                        </button>
                      </form>
                    </div>
                  </td>
                </tr>
                @empty
                    
                @endforelse
              </tbody>
            </table>
      </div>
    </div>
</body>
</html>