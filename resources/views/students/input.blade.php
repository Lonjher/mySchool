@extends('layouts.main')

@section('main')
    <div class="container">
        <div class="container rounded mt-2 py-2 bg-primary-subtle">
            <h1>Input Data</h1>
        </div>
        <form action="{{ route('students.store') }}" method="POST" class="shadow rounded p-2 mt-2">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nama Siswa</label>
                <input type="text" class="form-control" name="name" placeholder="John Doe">
            </div>
            <div class="mb-3">
                <label for="nilai_id" class="form-label">Nilai id</label>
                <input type="number" class="form-control" name="nilai_id">
            </div>
            <div class="mb-3">
                <label for="kelas" class="form-label">Kelas</label>
                <input type="text" class="form-control" name="kelas" placeholder="X/XI/XII">
            </div>
            <a href="{{ route('students.index') }}" class="btn btn-danger">Batal</a>
            <button class="btn btn-primary" type="submit">Simpan</button>
        </form>
    </div>
@endsection
