@extends('components.layouts')
@section('content')
    @if (session()->has('succesreg'))
        <div class="container-fluid">
            <div class="col-lg-6 mx-auto">

                <div class="alert alert-primary mt-5 alert-dismissible fade show   mx-auto" role="alert">
                    {{ session('succesreg') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            </div>
        </div>
    @endif
    @if (session()->has('succeslog'))
        <div class="container-fluid">
            <div class="col-lg-6 mx-auto">

                <div class="alert alert-primary mt-5 alert-dismissible fade show   mx-auto" role="alert">
                    {{ session('succeslog') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            </div>
        </div>
    @endif
    @if (session()->has('loginerror'))
        <div class="container-fluid">
            <div class="col-lg-6 mx-auto">

                <div class="alert alert-danger mt-5 alert-dismissible fade show   mx-auto" role="alert">
                    {{ session('loginerror') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            </div>
        </div>
    @endif
    <div class="container-fluid">
        <div class="row">


            <div class="col-lg-8 mx-auto mt-5">

                <div class="border border-0 p-5 shadow card mb-3" style="background-color: #000000;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ asset('image/log.svg') }}" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <div class="col-lg-12">
                                    <p class="fw-bold h4 mb-2 text-light text-center text-uppercase">login</p>
                                </div>
                                <form method="POST" action="/logs">
                                    @csrf

                                    <!-- Email Address -->

                                    <div class="mb-3  mx-auto">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="ea" placeholder="Username"
                                                id="username" name="username">
                                            <label for="ea" class="form-label">Username</label>
                                        </div>
                                    </div>
                                    <div class="mb-3   mx-auto">

                                        <div class="form-floating">
                                            <input type="password" class="form-control " id="e" id="password"
                                                class="block mt-1 w-full" type="password" name="password" required
                                                autocomplete="current-password" placeholder="Password">
                                            <label for="e" class="form-label">Password</label>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-lg-6 ">

                                            <button type="submit"
                                                class="col-lg-12 text-center text-decoration-none btg rounded  text-uppercase fw-bold p-2 ">
                                                login
                                            </button>

                                        </div>
                                        <div class="col-lg-6 ">
                                            <a href="/">
                                                <span
                                                    class="col-lg-12 text-center text-decoration-none btg rounded  text-uppercase fw-bold p-2 ">
                                                    Back
                                                </span>
                                            </a>
                                            {{-- <a href="/"
                                                class=" col-lg-12 text-center text-decoration-none btg rounded  text-uppercase fw-bold p-2">back</a> --}}
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </div>
    {{-- <div class="container mt-5">
        <div class="row">



            <div class="position-relative mt-5 panel p-5 rounded col-lg-6 mx-auto shadow-lg "
                style="background-color:#000035">
                <div class="mx-auto position-absolute top-0 start-50 translate-middle  ">

                    <span class="bord rounded-circle"><i class="fa-solid fa-user"></i></span>
                </div>

                <form method="POST" action="/logs" class="mt-5">
                    @csrf

                    <!-- Email Address -->

                    <div class="mb-3  mx-auto">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="ea" placeholder="Username" id="username"
                                name="username">
                            <label for="ea" class="form-label">Username</label>
                        </div>
                    </div>
                    <div class="mb-3   mx-auto">

                        <div class="form-floating">
                            <input type="password" class="form-control " id="e" id="password"
                                class="block mt-1 w-full" type="password" name="password" required
                                autocomplete="current-password" placeholder="Password">
                            <label for="e" class="form-label">Password</label>
                        </div>
                    </div>






            </div>
            <div class="row justify-content-center">

                <div class="col-lg-6 ">


                    <a href="" class="bg-primary">
                        <button type="submit"
                            class="col-lg-4 text-center text-decoration-none btn btn-primary float-end  text-uppercase fw-bold p-2 ">
                            login
                        </button>
                    </a>
                </div>
                <div class="col-lg-6 ">

                    <a href="/"
                        class="btn btn-secondary col-lg-4 text-center text-decoration-none  text-light text-uppercase fw-bold p-2 rounded-bottom"
                        type="button">back</a>
                </div>

            </div>
            </form>

        </div>
    </div> --}}
@endsection
