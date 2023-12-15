@extends('layouts.app')

@section('content')
    <h2>Edit Golongan</h2>

    <form action="{{ url('golongan/' . $row->id) }}" method="post">
        <input type="hidden" name="_method" value="PATCH">
        @csrf
        <div class="mb-3">
            <label for="">GOLONGAN</label>
            <select class="form-control" name="gol_id" id="gol_id">
                <option value="">-- Pilih --</option>
                @foreach($golongans as $gol)
                <option value="{{ $gol->id }}" {{ $row->gol_id == $gol->id ? 'selected' : '' }}>{{ $gol->gol_nama }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="">NO</label>
            <input type="text" name="pel_no" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">NAMA</label>
            <input type="text" name="pel_nama" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">ALAMAT</label>
            <input type="text" name="pel_alamat" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">HP</label>
            <input type="text" name="pel_hp" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">KTP</label>
            <input type="text" name="pel_ktp" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">SERI</label>
            <input type="text" name="pel_seri" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">METERAN</label>
            <input type="text" name="pel_meteran" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">AKTIF</label>
            <input type="text" name="pel_aktif" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">USER</label>
            <select class="form-control" name="user_id" id="user_id">
                <option value="">-- Pilih --</option>
                @foreach($users as $user)
                <option value="{{ $user->id }}" {{ $row->user_id == $user->id ? 'selected' : '' }}>{{ $user->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <input type="submit" value="UPDATE" class="btn btn-primary">
        </div>
    </form>
@endsection
