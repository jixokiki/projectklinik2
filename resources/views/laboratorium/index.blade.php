@extends('layouts.master')

@section('content-header')
    Laboratorium
@endsection

@section('content-header-specific')
    <i class="bi bi-recycle"></i> Daftar Antrian Laboratorium
@endsection

@section('prestyles')
    <link href="https://cdn.datatables.net/v/dt/dt-2.1.8/datatables.min.css" rel="stylesheet">
    <style>
        /* Container styling */
        .container {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            /* space between items */
        }

        /* Form item styling */
        .form-item {
            flex: 1 1 calc(33.33% - 20px);
            /* 3 items per row with gap */
            display: flex;
            flex-direction: column;
        }

        /* Label styling */
        .form-item label {
            font-size: 0.9em;
            color: #555;
            margin-bottom: 5px;
        }

        /* Input styling */
        .form-item input,
        select {
            padding: 5px;
            font-size: 1em;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
    </style>
@endsection

@section('prescripts')
    <script src="https://cdn.datatables.net/v/dt/dt-2.1.8/datatables.min.js"></script>
@endsection

@section('content-body')
    <table id="antrian" style="width:100%" class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Nama Pasien</th>
                <th>No Registrasi</th>
                <th>No RM</th>
                <th>Nama Laboratorium</th>
                <th>Tanggal Lahir</th>
                <th>Status</th>
                <th>Aksi</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($data_antrian as $row)
                <tr>
                    <td>{{ $row->nama }}</td>
                    <td>{{ sprintf('REG%08d', $row->no_registrasi) }}</td>
                    <td>{{ sprintf('RM%08d', $row->no_rm) }}</td>
                    <td>{{ $row->nama_laboratorium }}</td>
                    <td>{{ $row->tanggal_lahir }}</td>
                    <td><a href="/riwayat?id_registrasi={{ $row->no_registrasi }}&id_laboratorium={{ $row->id_laboratorium }}"
                            class="btn btn-warning text-white font-weight-bold" style="border-radius: 25px;">Proses
                            Laboratorium ></a> </td>
                    <td>
                        <button class="btn btn-danger" onclick="hapusRiwayat({{ $row->no_registrasi }})">Hapus</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <script>
        new DataTable('#antrian');

        function hapusRiwayat(id) {
            $.ajax({
                url: '/api/riwayat',
                method: 'delete',
                data: {
                    id: id
                },
                success: function(data) {
                    location.reload()
                }
            })
        }
    </script>
@endsection



{{-- @extends('layouts.master')

@section('content-header')
    Laboratorium
@endsection

@section('content-header-specific')
    <i class="bi bi-recycle"></i> Daftar Antrian Laboratorium
@endsection

@section('prestyles')
    <link href="https://cdn.datatables.net/v/dt/dt-2.1.8/datatables.min.css" rel="stylesheet">
    <style>
        /* Container styling */
        .container {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            /* space between items */
        }

        /* Form item styling */
        .form-item {
            flex: 1 1 calc(33.33% - 20px);
            /* 3 items per row with gap */
            display: flex;
            flex-direction: column;
        }

        /* Label styling */
        .form-item label {
            font-size: 0.9em;
            color: #555;
            margin-bottom: 5px;
        }

        /* Input styling */
        .form-item input,
        select {
            padding: 5px;
            font-size: 1em;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
    </style>
@endsection

@section('prescripts')
    <script src="https://cdn.datatables.net/v/dt/dt-2.1.8/datatables.min.js"></script>
@endsection

@section('content-body')
    <div class="container mt-5">
        <h1>Data Laboratorium</h1>
        <table id="antrian" style="width:100%" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Pasien</th>
                    <th>No RM</th>
                    <th>Tanggal Lahir</th>
                    <th>Status</th>
                    <th>Nama Laboratorium</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @if (!empty($data_antrian) && count($data_antrian) > 0)
                    @foreach ($data_antrian as $index => $row)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $row->nama }}</td>
                            <td>{{ sprintf('RM%08d', $row->no_rm) }}</td>
                            <td>{{ \Carbon\Carbon::parse($row->tanggal_lahir)->format('d-m-Y') }}</td>
                            <td>{{ $row->status }}</td>
                            <td>{{ $row->nama_laboratorium }}</td>
                            <td>
                                <a href="{{ route('laboratorium.detail', ['id_registrasi' => $row->no_registrasi]) }}"
                                    class="btn btn-primary">
                                    Lihat Detail
                                </a>
                                <a href="/isilab?id_registrasi={{ $row->no_registrasi }}&id_laboratorium={{ $row->id_laboratorium }}"
                                    class="btn btn-warning text-white font-weight-bold" style="border-radius: 25px;">
                                    Proses Laboratorium >
                                </a>
                                <button class="btn btn-danger"
                                    onclick="hapusRiwayat({{ $row->no_registrasi }})">Hapus</button>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="7" class="text-center">Tidak ada data laboratorium</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>

    <script>
        // Initialize DataTables
        new DataTable('#antrian');

        // Function to delete data
        function hapusRiwayat(id) {
            if (confirm('Apakah Anda yakin ingin menghapus data ini?')) {
                $.ajax({
                    url: '/api/riwayat',
                    method: 'DELETE',
                    data: {
                        id: id
                    },
                    success: function(data) {
                        alert('Data berhasil dihapus!');
                        location.reload();
                    },
                    error: function() {
                        alert('Terjadi kesalahan saat menghapus data!');
                    }
                });
            }
        }
    </script>
@endsection --}}
