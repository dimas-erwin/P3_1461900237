<html>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>
    1461900237_KEGIATAN3_P
  </title>
  <link rel="stylesheet" href="{{asset('css/app.css')}}" />
</head>
<body>
  <div style="overflow-x:auto;">
  <a class="tambah" href="{{route(
  'transaksi.store')}}"> Tambah Data </a>
  <div class="bg-white rounded-lg shadow-lg py-6">
    <div class="block overflow-x-auto mx-6">
      <h1>View</h1>
      <table class="w-full text-left rounded-lg">
        <thead>
          <tr class="text-gray-800 border border-b-0">
            <th class="px-4 py-3">ID</th>
            <th class="px-4 py-3">No Pelanggan</th>
            <th class="px-4 py-3">ID Barang</th>
          </tr>
        </thead>
        <tbody>
        @foreach($transaksi as $transaksi)
          <tr class="w-full font-light text-gray-700 whitespace-no-wrap border">
            <td class="px-4 py-4">{{ $transaksi->id }}</td>
            <td class="px-4 py-4">{{ $transaksi->id_pelanggan }}</td>
            <td class="px-4 py-4">{{ $transaksi->id_barang }}</td>
            <td class="text-center py-4">
              <a href="#"><span class="fill-current text-green-500 material-icons">Edit</span></a> !
              <a href="#"><span class="fill-current text-red-500 material-icons">Hapus</span></a>
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
      <br>
      

      </div>
  </div>
  </div>
</body>
</html>