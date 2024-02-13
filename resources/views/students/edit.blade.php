@extends('layouts.main')

@section('main')
<div class="container">
    <div class="container rounded mt-2 py-2 bg-primary-subtle">
        <h1>Edit Data</h1>
    </div>
    <form action="{{ route('students.update', $data->id_student) }}" method="POST" class="shadow rounded p-2 mt-2" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Nama Siswa</label>
            <input type="text" class="form-control" name="name" value="{{ $data->name }}">
        </div>
        <div class="mb-3">
            <label for="kelas" class="form-label">Kelas</label>
            <input type="text" class="form-control" name="kelas" value="{{ $data->kelas }}">
        </div>
        <div class="container">
            <a href="{{ route('students.index') }}" class="btn btn-danger">CANCEL</a>
            <button class="btn btn-primary" type="submit">UPDATE</button>
        </div>
    </form>
</div>
@endsection
