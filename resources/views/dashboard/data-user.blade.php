@extends('components.dashboard')
@section('konten')
    <table class="table table-striped table-hovers" id="table1">
        <thead>
            <tr>
                <th>Nama lengkap</th>
                <th>Username</th>
                <th>No Hanphone</th>
                <th>Alamat</th>


            </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach ($penggunas as $u)
                <tr>
                    <td>{{ $u->nama }}</td>
                    <td>{{ $u->username }}</td>
                    <td>{{ $u->no_telp }}</td>
                    <td>{{ $u->alamat }}</td>
                </tr>
            @endforeach
            <!-- Modal -->



        </tbody>
    </table>
@endsection
