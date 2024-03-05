@extends('components.layouts')
@section('content')
    @include('components.bar')
    <div class="container-fluid  " id="bg">
        <div class="row ">

            <div class="mt-5">

                <p class="h1 pt-3 text-center text-light">GalleryMad</p>

            </div>
        </div>
    </div>

    <div class="container-fluid ">
        <div class="col-lg-6 mt-5">
            <span class=" text-uppercase h3 text-dark">Selamat datang <strong>
                    {{ Auth::guard('pengguna')->user()->username }}
                </strong>!!!
            </span>
        </div>
        <div class="row panel">
            <!-- Button trigger modal -->
            <div class="col-lg-3 mt-3 mb-1">
                <button type="button" class="btn btn-dark " data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <i class="fa-solid fa-upload"></i>
                </button>
                <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                    <i class="fa-solid fa-images"></i> Buat Album
                </button>
            </div>

            <div class="col-lg-12 mb-5">
                <div class="row">
                    <div class="col-4">
                        <form action="{{ route('post.filter') }}" method="get">
                            @csrf

                            <select class="form-select" name="album_id" aria-label="Default select example">
                                @foreach ($albums as $a)
                                    <option value="{{ $a->id }}">{{ $a->nama_album }}</option>
                                @endforeach
                            </select>
                    </div>
                    <div class="col-1">
                        <button type="submit" class="btn btn-dark"><i class="fa-solid fa-filter"></i></button>
                    </div>
                    </form>
                </div>


            </div>

            @include('components.alert')

            <div class="row justify-content-center">

                @if ($posts->isEmpty())
                    <div class="alert alert-warning alert-dismissible fade show text-uppercase col-lg-8 mx-auto"
                        role="alert">
                        <strong>Upss!!</strong> Postingan yang bersangkutan gak ada
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <p class="text-center mt-5 fw-bold h3"></p>
                @else
                    @foreach ($posts as $p)
                        <div class="col-3">

                            <div class="card h-100 shadow-sm " style="background-color: #949494; border:2px solid #fff">
                                <a type="button" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $p->id }}">
                                    <img src="{{ asset('/storage/' . $p->foto) }}" class="card-img-top" alt="...">

                                </a>

                            </div>
                        </div>



                        <!-- Button trigger modal -->


                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal{{ $p->id }}" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-6">
                                                    <img src="{{ asset('/storage/' . $p->foto) }}" class="img-fluid"
                                                        alt="...">
                                                </div>
                                                <div class="col-6 mt-5">

                                                    <h5 class="text-uppercase">
                                                        <span>Judul:</span><br>{{ $p->judul }}
                                                    </h5>
                                                    <h6 class="text-uppercase"><span>
                                                            Album:</span><br>{{ $p->Album->nama_album }}</h6>
                                                    <p class="card-text text-uppercase small">
                                                        <span>Caption:</span><br>{{ $p->desc }}
                                                    </p>
                                                    <a href="/user/upost{{ $p->id }}"
                                                        class="btn btn-dark col-12 mb-2"><i class="fa-solid fa-pen"></i></a>
                                                    <form method="post" action="{{ route('post.delete', $p->id) }}">
                                                        @csrf
                                                        <button type="submit"
                                                            onclick="return confirm('Apakah Anda Yakin Menghapus Data?');"
                                                            class="btn btn-dark col-12"><i
                                                                class="fa-solid fa-trash"></i></button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif


            </div>
            {{-- pagination --}}
            <div class="position-relative mt-3">
                <span class="position-absolute top-0 start-50 translate-middle-x">
                    {{ $posts->links() }}
                </span>
            </div>
            {{-- pagination --}}

        </div>
    </div>

    </div>
    <!-- Button trigger modal -->


    <!-- Modal album-->
    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Buat Album</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/buatalbum" method="post">
                        @csrf
                        <input type="hidden" name="pengguna_id" value=" {{ Auth::guard('pengguna')->user()->id }}">
                        <div class="mb-3">
                            <input type="text" class="form-control" id="floatingInputTelp" name="nama_album" required
                                placeholder="Nama Album">
                        </div>

                        <div class="mb-3">
                            <input type="date" class="form-control" id="floatingInputTelp" name="tgl_album" required>
                        </div>

                        <div class="form-floating">
                            <textarea name="desc_album" class="form-control" placeholder="Deskripsi" required id="floatingTextarea2"
                                style="height: 100px"></textarea>
                            <label for="floatingTextarea2">Deskripsi</label>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal uploads foto-->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Buat Postingan</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body ">
                    <form action="/posting" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="pengguna_id" value=" {{ Auth::guard('pengguna')->user()->id }}">

                        <div class="mb-3">
                            <input type="text" class="form-control" id="floatingInputTelp" name="judul" required
                                placeholder="Judul Postingan">

                        </div>
                        <div class="mb-3">
                            <input type="file" class="form-control" id="floatingInputTelp" name="foto" required>

                        </div>
                        <div class="mb-3">
                            <input type="date" class="form-control" id="floatingInputTelp" name="tgl_upload"
                                required>
                        </div>
                        <div class="mb-3">
                            <select class="form-select" name="album_id" aria-label="Default select example">
                                @foreach ($albums as $a)
                                    <option value="{{ $a->id }}">{{ $a->nama_album }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-floating">
                            <textarea name="desc" class="form-control" placeholder="Deskripsi" required id="floatingTextarea2"
                                style="height: 100px"></textarea>
                            <label for="floatingTextarea2">Deskripsi</label>
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                </form>
            </div>
        </div>


        <!-- Button trigger modal -->




    @endsection
    @section('js')
        <script src="{{ asset('js/three2.min.js') }}"></script>
        <script src="{{ asset('js/vanta.net.min.js') }}"></script>
        <script>
            VANTA.NET({
                el: "#bg",
                mouseControls: true,
                touchControls: true,
                gyroControls: false,
                minHeight: 200.00,
                minWidth: 200.00,
                scale: 1.00,
                scaleMobile: 1.00,
                backgroundColor: 0x0,
                points: 16.00,
                maxDistance: 23.00,
                spacing: 13.00,
                showDots: false
            })
        </script>
    @endsection
