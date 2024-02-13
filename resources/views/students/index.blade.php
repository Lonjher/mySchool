@extends('layouts.main')

@section('main')
    <div class="container mt-4">
        <div
            class="container-fluid bg-success-subtle shadow rounded h-50 justify-content-center align-items-center d-flex flex-column py-1">
            <h3>Data Siswa</h3>
            <small>Sekolah Menengah Aliah Neraka Merdeka</small>
        </div>
        <div class="container shadow bg-body-tertiary rounded my-2 p-2">
            <div class="container">
                <a href="{{ route('students.create') }}" class="btn btn-primary my-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3z"/>
                      </svg> <span>Add</span></a>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @foreach ($students as $student)
                    <tr>
                        <td>{{ $student['id_student'] }}</td>
                        <td>{{ $student['name_siswa'] }}</td>
                        <td>{{ $student['kelas'] }}</td>
                        <td>
                            <a href="{{ route('students.show', $student['id_student']) }}" class="btn btn-primary"><ion-icon name="book"></ion-icon> Lebih</a>
                            <a href="{{ route('students.edit', $student['id_student']) }}" class="btn btn-info"><ion-icon name="create"></ion-icon> Edit</a>
                            <a href="" class="btn btn-danger"><ion-icon name="remove-circle"></ion-icon> Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
