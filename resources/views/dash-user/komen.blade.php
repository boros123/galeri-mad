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

    <div class="container-fluid ">
        <div class="row justify-content-center">
            @foreach ($komen as $i)
                @if ($i->post_id == $id)
                    <div class="col-lg-10 mt-2 col-sm-6 col-md-3 col-6">
                        <div class="card col-3">
                            <div class="card-header bg-dark">
                                <small class="text-light">
                                    {{ $i->Pengguna->username }}
                                </small>
                            </div>
                            <div class="card-body">
                                {{ $i->komentar }}
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
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
