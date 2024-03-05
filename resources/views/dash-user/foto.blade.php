@extends('components.layouts')
@section('content')
    <div class="container-fluid mb-5" id="bg">
        <div class="row ">

            <div class="mt-5">

                <p class="h1 pt-3 text-center text-light mb-5">GalleryMad</p>

            </div>
        </div>
    </div>
    @include('components.bar')
    <div class="container-fluid p-3 mt-5" style="background-color: #bebebe">
        @if (session('status'))
            <div class="container-fluid">
                <div class="col-lg-6 mx-auto">
                    <div class="alert alert-primary mt-5 alert-dismissible fade show   mx-auto" role="alert">
                        {{ session('status') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                </div>
            </div>
        @endif
        <div class="row justify-content-evenly m-5 ">

            @foreach ($posts as $p)
                <div class="col-lg-3 mt-5">



                    <div class="cards">
                        <a type="button" data-bs-toggle="modal" data-bs-target="#exampleModal1{{ $p->id }}">

                            <img src="{{ asset('/storage/' . $p->foto) }}" class="card-img-top" alt="...">
                        </a>



                        <div class="row justify-content-center">
                            <div class="col-6">
                                <a href="/user/coment{{ $p->id }}" class="btn btn-transparent"> <span
                                        class="h3 text-secondary">
                                        <i class="fa-regular fa-comment"></i>
                                    </span></a>
                            </div>

                            <div class="col-6">
                                <form action="{{ route('like.post', $p->id) }}" method="post">
                                    @csrf
                                    <input type="hidden" value="{{ Auth::guard('pengguna')->user()->id }}"
                                        name="pengguna_id">
                                    <input type="hidden" value="{{ $p->id }}" name="post_id">
                                    <button type="submit" class="btn btn-transparent float-end">

                                        <span class="h3 text-danger">
                                            <i class="fa-regular fa-heart"></i>
                                        </span>
                                        <span class="small ">{{ $p->like_count }}</span>
                                    </button>
                                </form>



                            </div>

                        </div>
                    </div>


                </div>


                {{-- modal --}}
                {{-- <div class="modal fade" id="exampleModal{{ $p->id }}" tabindex="-1"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Buat Komentar</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form method="POST" action="/post-coment">
                                    @csrf
                                    <input type="hidden" value="{{ Auth::guard('pengguna')->user()->id }}"
                                        name="pengguna_id">
                                    <input type="hidden" value="{{ $p->id }}" name="post_id">

                                    <div class="mb-3 form-floating">
                                        <textarea class="form-control" style="height:40vh" id="message-text" placeholder="Koment" name="komentar"></textarea>
                                        <label for="message-text" class="">Comment</label>
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Keluar</button>
                                <button type="submit" class="btn btn-primary">Kirim</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div> --}}
                {{-- modal-formkomen --}}


                {{-- modal-caption --}}
                <!-- Button trigger modal -->


                <!-- Modal -->
                <div class="modal fade " id="exampleModal1{{ $p->id }}" tabindex="-1"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Desc Postingan</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">


                                <div class="row justify-content-center">
                                    <div class="col-lg-6">
                                        <img src="{{ asset('/storage/' . $p->foto) }}" class="card-img-top" alt="...">
                                    </div>
                                    <div class="col-lg-6">
                                        <h5 class="text-uppercase">{{ $p->judul }}</h5>
                                        <h5 class="text-uppercase">{{ $p->Album->nama_album }}</h5>
                                        <p class="text-uppercase">{{ $p->desc }}</p>
                                        <div class="col-lg-12">

                                            <form method="POST" action="/post-coment">
                                                @csrf
                                                <input type="hidden" value="{{ Auth::guard('pengguna')->user()->id }}"
                                                    name="pengguna_id">
                                                <input type="hidden" value="{{ $p->id }}" name="post_id">

                                                <div class="mb-3 form-floating">
                                                    <textarea class="form-control" style="height:30vh" id="message-text" placeholder="Koment" name="komentar"></textarea>
                                                    <label for="message-text" class="">Comment</label>
                                                </div>
                                                <button type="submit" class="btn btn-dark col-12">Kirim</button>
                                            </form>
                                        </div>
                                    </div>

                                </div>




                            </div>

                        </div>
                    </div>
                </div>
                {{-- modal-caption --}}
            @endforeach
        </div>
    </div>

    {{-- pagination --}}
    <div class="position-relative mt-3">
        <span class="position-absolute top-0 start-50 translate-middle-x">
            {{ $posts->links() }}
        </span>

    </div>
    </div>
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
