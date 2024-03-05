@extends('components.layouts')
@section('content')
    @include('components.bar')
    <div class="container-fluid">
        <div class="row ">
            <div class="panel col-lg-6 mx-auto p-4 rounded  bg-light mt-5">
                <form action="{{ route('post.update', $data->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="justify-content-evenly">
                        <div class="col-12">
                            <div class="mb-3  mx-auto ">
                                <input type="text" class="form-control" name="judul" id="name"
                                    value="{{ $data->judul }}" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3  mx-auto ">
                                <input type="date" class="form-control" name="tgl_upload" id="name"
                                    value="{{ $data->tgl_upload }}">

                            </div>
                        </div>

                        <div class="col-12 mb-3">
                            <select class="form-select" name="album_id" aria-label="Default select example" name="id_album">
                                {{-- <option selected></option> --}}
                                <option value="{{ $data->album_id }}">{{ $data->Album->nama_album }}</option>
                                @foreach ($albums as $a)
                                    <option value="{{ $a->id }}">{{ $a->nama_album }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-12">
                            <div class="mb-3  mx-auto ">
                                <label for="foto">Uploads foto baru</label>
                                <input type="file" class="form-control" name="foto" id="foto">
                                <input type="hidden" value="{{ $data->foto }}" name="oldimg">
                            </div>
                        </div>


                        <div class="form-floating">
                            <textarea class="form-control" name="desc" style="height: 20vh" placeholder="Leave a comment here"
                                id="floatingTextarea">{{ $data->desc }}</textarea>
                            <label for="floatingTextarea">Deskripsi Baru</label>
                        </div>

                    </div>
                    <div class="mt-3">

                        <button type="submit" class="btn btn-dark col-lg-12">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
