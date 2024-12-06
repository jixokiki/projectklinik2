@extends('layouts.master')

@section('prestyles')
    <style>
        .container {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
        }

        .form-item {
            flex: 1 1 calc(25% - 15px);
            display: flex;
            flex-direction: column;
        }

        .flex-2-col {
            flex: 1 1 calc(50% - 20px);
        }

        .form-item label {
            font-size: 0.9em;
            color: #555;
            margin-bottom: 5px;
        }

        .form-item input,
        select {
            padding: 5px;
            font-size: 1em;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
    </style>
@endsection

@section('content-body')
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form id="form-asesmen" method="POST" action="{{ route('riwayat.store') }}">
        @csrf
        <!-- Remove id_riwayat and id_laboratorium from the form -->
        <h5 class="text-primary">Prioritas Pemeriksaan</h5>
        <div class="container">
            <div class="form-item flex-2-col">
                <label>Prioritas Pemeriksaan</label>
                <input type="text" name="prioritas" value="{{ old('prioritas') }}">
            </div>
            <div class="form-item flex-2-col">
                <label>Diagnosis / Masalah</label>
                <input type="text" name="diagnosis" value="{{ old('diagnosis') }}">
            </div>
            <div class="form-item flex-2-col">
                <label>Catatan Permintaan</label>
                <input type="text" name="permintaan" value="{{ old('permintaan') }}">
            </div>
            <div class="form-item flex-2-col">
                <label>Metode Pengiriman Hasil</label>
                <input type="text" name="metode" value="{{ old('metode') }}">
            </div>
        </div>

        <h5 class="text-primary">Pengambilan Spesimen Klinis</h5>
        <div class="container">
            <div class="form-item">
                <label>Sumber</label>
                <input type="text" name="sumber" value="{{ old('sumber') }}">
            </div>
            <div class="form-item">
                <label>Lokasi</label>
                <input type="text" name="lokasi" value="{{ old('lokasi') }}">
            </div>
            <div class="form-item">
                <label>Jumlah</label>
                <input type="text" name="jumlah" value="{{ old('jumlah') }}">
            </div>
            <div class="form-item">
                <label>Volume</label>
                <input type="text" name="volume" value="{{ old('volume') }}">
            </div>
            <div class="form-item">
                <label>Cara Pengambilan</label>
                <input type="text" name="cara" value="{{ old('cara') }}">
            </div>
            <div class="form-item">
                <label>Kondisi</label>
                <input type="text" name="kondisi" value="{{ old('kondisi') }}">
            </div>
            <div class="form-item">
                <label>Tanggal Pengambilan</label>
                <input type="date" name="tanggal_pengambilan" value="{{ old('tanggal_pengambilan') }}">
            </div>
        </div>

        <h5 class="text-primary">Fiksasi Spesimen Klinis</h5>
        <div class="container">
            <div class="form-item flex-2-col">
                <label>Tanggal Fiksasi</label>
                <input type="date" name="tanggal_fiksasi" value="{{ old('tanggal_fiksasi') }}">
            </div>
            <div class="form-item flex-2-col">
                <label>Cairan</label>
                <input type="text" name="cairan" value="{{ old('cairan') }}">
            </div>
        </div>

        <h5 class="text-primary">Hasil Pemeriksaan</h5>
        <div class="container">
            <div class="form-item flex-2-col">
                <label>Interpretasi</label>
                <input type="text" name="interpretasi" value="{{ old('interpretasi') }}">
            </div>
        </div>

        <div class="container">
            <button type="submit" class="btn btn-success">Simpan</button>
        </div>
    </form>
@endsection
