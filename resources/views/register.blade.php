@extends('components.layouts')
@section('content')
    @if (session()->has('error'))
        <div class="container-fluid">
            <div class="col-lg-6 mx-auto">

                <div class="alert alert-danger mt-5 alert-dismissible fade show   mx-auto" role="alert">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            </div>
        </div>
    @endif

    <div class="container-fluid">
        <div class="panel row justify-content-around col-lg-10 col-10 col-sm-10 mx-auto mt-5  pb-4 pt-3 rounded "
            style="background-color: #000000;">
            <div class="container-fluid ">
                <a style="color: #FEF5ED;" href="/"><i class="fa-solid fa-left-long fa-xl"></i>



                </a>
            </div>

            <!-- kolom -->
            <div class="col-lg-4 col-8 col-md-4 col-sm-6">
                <img src="{{ asset('image/register.svg') }}" class="img-fluid" srcset="">
            </div>
            <!-- kolom -->
            <div class="col-lg-6 col-12 col-md-8 col-sm-12 mt-3">
                <p class="text-center text-uppercase text-light display-6 fw-bold">Register</p>
                <hr class="mb-3" style="color: #fff">
                <form action="/regs" method="post">
                    @csrf
                    <div class="row justify-content-evenly">
                        <!-- grid -->
                        <div class="col-12 col-lg-6 col-md-6 col-sm-6 mb-2">
                            <div class=" ">
                                <input type="text" class="form-control" id="floatingInputNama" name="nama" required
                                    placeholder="Nama Lengkap">

                            </div>

                        </div>
                        <div class="col-12 col-lg-6 col-md-6 col-sm-6 mb-2">
                            <div class="">
                                <input type="number" class="form-control" id="floatingInputTelp" name="no_telp" required
                                    placeholder="No Handphone">

                            </div>

                        </div>
                        <div class="col-12 col-lg-6 col-md-6 col-sm-6 mb-2">
                            <div class="">
                                <input type="text" class="form-control" id="floatingInputUsername" name="username"
                                    required placeholder="Username">

                            </div>

                        </div>
                        <div class="col-12 col-lg-6 col-md-6 col-sm-6 mb-2">
                            <div class=" ">
                                <input type="password" name="password" class="form-control" id="floatingPassword" required
                                    placeholder="Password">

                            </div>
                        </div>
                        <div class="col-lg-12 col-12 col-sm-12 col-12">
                            <div class="">
                                <textarea name="alamat" class="form-control" placeholder="Alamat lengkap" required id="floatingTextarea2"
                                    style="height: 100px"></textarea>

                            </div>
                        </div>

                    </div>

                    <div class="col-lg-12 mt-3">
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btg col-12">Submit</button>
                        </div>
                    </div>


                </form>


            </div>
            <!-- kolom -->
        </div>


    </div>

    {{-- <img src="image/wave2.png" class="img-fluid position-absolute bottom-0 start-50 translate-middle-x" alt="" /> --}}
@endsection
