@extends('layout.main')

@section('container')
    @php
        use Carbon\Carbon;
    @endphp

    <h1 class="display-4 ms-5 mt-2 center">Daftar Barang</h1>

    <div class="mt-3 m-5">
      <table class="table">
        <thead class="table-dark">
          <tr>
            <th scope="col">id</th>
            <th scope="col">Nama Pemain</th>
            <th scope="col">No Punggung</th>
            <th scope="col">Posisi</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($data_pemain as $pemain)
                <tr>
                    <td>{{ ++$no }}</td>
                    <td>{{ $pemain->nama_pemain }}</td>
                    <td>{{ $pemain->no_punggung }}</td>
                    <td>{{ $pemain->posisi }}</td>
                </tr>
            @endforeach
        </tbody>
      </table>
    </div>
@endsection
