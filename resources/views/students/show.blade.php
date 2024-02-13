@extends('layouts.main')

@section('main')
    {{-- {{ dd($students) }} --}}
    <div class="container">
        <div class="container">
            <h1>Data Siswa</h1>
        </div>
        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Mata Pelajaran</th>
                        <th scope="col">KKM</th>
                        <th scope="col">Nilai</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        {{ $data }}
                        @foreach ($data as $siswa)
                            {{-- <th scope="row">{{ $siswa->name_siswa }}</th> --}}
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        @endforeach
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
