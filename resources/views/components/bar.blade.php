<div class="fixed-top">
    <button class="setting-btn float-end m-2" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
        aria-controls="offcanvasExample">
        <span class="bar bar1"></span>
        <span class="bar bar2"></span>
        <span class="bar bar1"></span>
    </button>

    {{-- <button class="btn btn-primary float-end m-2" type="button" data-bs-toggle="offcanvas"
        data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
        <i class="fa-solid fa-bars"></i>
    </button> --}}
</div>

<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
        @if (!Auth::guard('pengguna')->user())
            <h5 class="offcanvas-title" id="offcanvasExampleLabel" style="color: #000000">Gallerymad</h5>
        @elseif(Auth::guard('pengguna')->user())
            {{-- <div class="me-3 text-uppercase text-dark"></div> --}}
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">{{ Auth::guard('pengguna')->user()->username }}</h5>
        @endif
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div>
            @if (!Auth::guard('pengguna')->user())
                <a class="nav-link hov mb-4" aria-current="page" href="#">Home</a>
                <a class="nav-link hov mb-4" aria-current="page" href="#guide">Guide</a>
                <a class="nav-link hov mb-4" aria-current="page" href="#about">About</a>
            @elseif(Auth::guard('pengguna')->user())
                <a class="nav-link  hov mb-4" aria-current="page" href="/user">Home</a>
                <a class="nav-link  hov mb-4" href="/user/allpost">All Post</a>
            @endif
            </ul>
            @if (!Auth::guard('pengguna')->check())
                <div class=" text-end float-end ">
                    <a href="/register"><button type="button" class="btns p-2 me-2"><i
                                class="fa-solid fa-user-group"></i>
                            Daftar</button></a>
                    <a href="/login"><button type="button" class="btns p-2"><i
                                class="fa-solid fa-right-to-bracket"></i> Login</button></a>
                </div>
            @elseif (Auth::guard('pengguna')->check())
                <div class=" float-end">
                    <button type="submit" class="btns p-1" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop">Logout</button>
                </div>
            @endif
        </div>

    </div>
</div>


{{-- 


<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        @if (!Auth::guard('pengguna')->user())
        @elseif(Auth::guard('pengguna')->user())
            <div class="me-3 text-uppercase text-dark">{{ Auth::guard('pengguna')->user()->username }}</div>
        @endif
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
            <ul class="navbar-nav mx-auto">

                @if (!Auth::guard('pengguna')->user())
                    <li class="nav-item">
                        <a class="nav-link  hov" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  hov" aria-current="page" href="#guide">Guide</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  hov" aria-current="page" href="#about">About</a>
                    </li>
                @elseif(Auth::guard('pengguna')->user())
                    <li class="nav-item">
                        <a class="nav-link  hov" aria-current="page" href="/user">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link  hov" href="/user/allpost">All Post</a>
                    </li>
                @endif
            </ul>
            @if (!Auth::guard('pengguna')->check())
                <div class=" col-lg-3 text-end float-end">
                    <a href="/register"><button type="button" class="btns p-1"><i class="fa-solid fa-user-group"></i>
                            Daftar</button></a>
                    <a href="/login"><button type="button" class="btns p-1"><i
                                class="fa-solid fa-right-to-bracket"></i> Login</button></a>
                </div>
            @elseif (Auth::guard('pengguna')->check())
                <div class=" col-lg-3 text-end float-end">
                    <button type="submit" class="btns p-1" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop">Logout</button>
                </div>
            @endif
        </div>
    </div>
</nav> --}}

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Yakin Untuk Keluar?</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="/logout">
                    @csrf
                    <button type="submit" class="btn btn-danger col-lg-12" data-bs-dismiss="modal">Yes</button>
                </form>
            </div>
        </div>
    </div>
</div>
