@extends('components.dashboard')
@section('konten')
    <table class="table table-striped table-hovers" id="table1">
        <thead>
            <tr>
                <th>Judul Postingan</th>
                <th>Nama User</th>
                <th>Album</th>
                <th>Tanggal Upload</th>
                <th>Caption</th>
                <th>Cover</th>

            </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach ($posts as $p)
                <tr>
                    <td>{{ $p->judul }}</td>
                    <td>{{ $p->Pengguna->username }}</td>
                    <td>{{ $p->Album->nama_album }}</td>
                    <td>{{ $p->desc }}</td>
                    <td>{{ $p->created_at }}</td>
                    <td><button class="btn btn-primary" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasRight{{ $p->id }}" aria-controls="offcanvasRight">
                            <i class="fa-regular fa-image"></i>
                        </button>
                    </td>
                    {{-- <td>{{ $p->Pengguna->username }}</td> --}}

                </tr>

                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight{{ $p->id }}"
                    aria-labelledby="offcanvasRightLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasRightLabel">Picture</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <img src="{{ asset('/storage/' . $p->foto) }}" class="img-fluid" srcset="">
                    </div>
                </div>
            @endforeach




        </tbody>
    </table>
@endsection
