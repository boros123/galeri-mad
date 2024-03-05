@extends('components.layouts')
@section('content')
    <div class="container-fluid  " id="bg">
        <div class="row ">

            <div class="mt-5">

                <p class="h1 pt-3 text-center text-light">GalleryMad</p>

            </div>
        </div>
    </div>

    @include('components.bar')
    @include('components.nav')
    <div class="container-fluid pb-5">
        <!-- container -->
        <div class="row justify-content-evenly mb-5">

            {{-- row --}}
            <div class="col-lg-5 col-6 mt-5">
                <div class="text-center mt-5 pt-5">
                    <p class="text-uppercase fw-bold h1 text-dark col-lg-9">Mad galery </p>
                </div>
                <div class="text-center ">
                    <p class="text-uppercase fw-bold text-dark col-lg-9"><small class="text-dark">Lorem ipsum
                            dolor sit amet
                            consectetur adipisicing elit. Ratione, suscipit.</small></p>
                </div>
            </div>
            <div class="col-lg-5 col-12">
                <div class="col-lg-9 ">

                    <img src="{{ asset('image/logos.svg') }}" class="img-fluid " srcset="">
                </div>
            </div>
            {{-- row --}}
        </div>


    </div>
    <div class="container-fluid mt-3 mb-3" style="background-color: #000000">
        <div class="panel row justify-content-between col-lg-11 mx-auto p-5 ">

            <div class="col-lg-6">
                <div class="card border border-0 mb-3 bg-transparent">
                    <div class="row g-0">
                        <div class="col-md-7">
                            <div class="card-body">
                                <p class="text-uppercase h2 text-center fw-bold text-light">What is the
                                    MadGallery?</p>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <img src="{{ asset('image/qu.svg') }}" class="img-fluid rounded-start" alt="...">
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-6 mx-auto text-light">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum modi, quibusdam fuga ex similique
                    neque,
                    culpa aperiam eum asperiores ut praesentium, tenetur consequatur labore recusandae beatae blanditiis
                    doloribus accusantium laudantium saepe numquam itaque corrupti temporibus aliquam hic. Atque
                    delectus,
                    ullam corporis at ad, hic eos sequi unde, fuga dignissimos voluptatem?</p>
            </div>
        </div>
    </div>

    {{-- Kelebihan web --}}

    <div class="container rounded p-5" style="background-color: #eeeeee">
        <div class="col-lg-12 pt-2 pb-2">
            <div class="mx-auto">
                <p class="text-dark fw-bold text-uppercase text-center mt-1 col-lg-6 mx-auto" style="font-size: 2.7em">
                    Kelebihan MadGallery
                </p>
                <hr class="mb-4" style="color: aliceblue">

            </div>
        </div>
        <div class="row justify-content-between text-dark">
            <div class="col-lg-5 ms-5" data-aos="fade-right">
                <p>1</p>
                <p class="">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique blanditiis
                    facilis
                    reiciendis
                    doloremque commodi expedita, perspiciatis sapiente! Amet, laudantium vitae.</p>

            </div>
            <div class="col-lg-12">
                <div class="col-lg-5 float-end me-5" data-aos="fade-left">
                    <p>2</p>
                    <p class="">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique blanditiis
                        facilis
                        reiciendis
                        doloremque commodi expedita, perspiciatis sapiente! Amet, laudantium vitae.</p>
                </div>
            </div>
            <div class="col-lg-5  ms-5" data-aos="fade-right">
                <p>3</p>
                <p class="">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique blanditiis
                    facilis
                    reiciendis
                    doloremque commodi expedita, perspiciatis sapiente! Amet, laudantium vitae.</p>
            </div>
            <div class="col-lg-12">
                <div class="col-lg-5 float-end me-5" data-aos="fade-left">
                    <p>4</p>
                    <p class="">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique blanditiis
                        facilis
                        reiciendis
                        doloremque commodi expedita, perspiciatis sapiente! Amet, laudantium vitae.</p>
                </div>
            </div>

        </div>
    </div>
    </div>


    <div class="panel pt-5 pb-5 mt-5 " style="background-color: #d8d8d8" id="guide">
        <div class="col-lg-12 pt-2 pb-2">
            <div class="mx-auto">
                <p class="text-dark fw-bold text-uppercase text-center mt-1 col-lg-8 mx-auto" style="font-size: 2.7em">
                    Cara Penggunaan MadGallery
                </p>
                <hr class="mb-4" style="color: aliceblue">

            </div>
        </div>
        <div class="container mt-2">

            <div class="row  text-dark">
                <div class="col-lg-5 ms-5" data-aos="fade-up" data-aos-duration="3000">
                    <p>1</p>
                    <p class="">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique blanditiis
                        facilis
                        reiciendis
                        doloremque commodi expedita, perspiciatis sapiente! Amet, laudantium vitae.</p>

                </div>
                <div class="col-lg-12">
                    <div class="col-lg-5 float-end me-5" data-aos="fade-up" data-aos-duration="3000">
                        <p>2</p>
                        <p class="">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique blanditiis
                            facilis
                            reiciendis
                            doloremque commodi expedita, perspiciatis sapiente! Amet, laudantium vitae.</p>
                    </div>
                </div>
                <div class="col-lg-5  ms-5" data-aos="fade-up" data-aos-duration="3000">
                    <p>3</p>
                    <p class="">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique blanditiis
                        facilis
                        reiciendis
                        doloremque commodi expedita, perspiciatis sapiente! Amet, laudantium vitae.</p>
                </div>
                <div class="col-lg-12">
                    <div class="col-lg-5 float-end me-5" data-aos="fade-up" data-aos-duration="3000">
                        <p>4</p>
                        <p class="">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique blanditiis
                            facilis
                            reiciendis
                            doloremque commodi expedita, perspiciatis sapiente! Amet, laudantium vitae.</p>
                    </div>
                </div>

            </div>
        </div>

    </div>

    </div>

    <div class="container-fluid pb-5 mt-5" id="vanta-canvas">
        <!-- container -->
        <div class="row justify-content-evenly p-3" id="about">
            {{-- row --}}
            <p class="text-uppercase h1 fw-bold text-light text-center">Tentang Gallery</p>
            <p class="text-light small">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam ex doloremque
                laborum
                quos voluptates ipsum sint perferendis est optio sapiente quis veritatis nulla dicta aliquam, deserunt
                voluptate numquam asperiores iure necessitatibus sed fuga rem? Earum assumenda deleniti, excepturi at minus
                porro dolore quae delectus aperiam officia aspernatur? Libero iste quidem cum molestiae minus adipisci
                aliquam beatae officiis ipsum sed repellat possimus alias esse voluptatum ut sit nobis quae aperiam delectus
                impedit ab veniam, quis ratione distinctio? Alias, voluptate? Culpa ullam laborum nostrum assumenda
                architecto omnis, recusandae, nesciunt doloremque dolorum, molestias aliquid vitae? Facilis voluptate
                impedit, cumque nulla vero tempore temporibus ea quos deleniti doloremque praesentium vitae perspiciatis
                veniam, inventore voluptas. Minus ratione sunt incidunt beatae sint enim quod expedita ad corporis, dolores
                illo officia! Magni, dolore doloremque hic accusantium saepe nesciunt accusamus harum amet dolor tenetur
                corporis eum atque consectetur. Dicta vero at, reprehenderit mollitia, fugiat laborum, repellat nulla enim
                voluptatem veniam nihil dolore aspernatur voluptatibus id sit consequatur labore? Nulla, eligendi odit,
                harum eius, dolores nobis rem illum inventore recusandae sint laborum? Aspernatur modi temporibus quae
                perferendis laudantium ducimus eaque saepe cumque nostrum inventore quaerat minima ex voluptatibus at
                impedit asperiores, ullam nihil enim quisquam sequi minus sapiente. Amet hic vitae recusandae officiis ipsam
                sint minima velit asperiores placeat, consequuntur assumenda dolores quaerat, quisquam voluptas perferendis
                deleniti veritatis eius modi qui architecto odit. Porro perspiciatis ad, cum architecto itaque eum ipsam
                labore quaerat facere voluptatibus repellat odio ducimus voluptas nihil distinctio fugit? Deserunt,
                praesentium! Numquam vel aperiam beatae mollitia qui asperiores, distinctio ipsam sed, ducimus, laudantium
                blanditiis illo iusto quibusdam necessitatibus nemo magni! Id fugiat incidunt natus perspiciatis facere
                dicta, rem, obcaecati velit iusto sequi nam accusantium? Dignissimos sunt tenetur aperiam consequatur
                delectus quidem, voluptates praesentium ullam consectetur ut! Incidunt, cum fuga nulla dolorem natus magnam
                doloremque sapiente enim, nam voluptate eaque quos neque, unde accusantium totam et facilis quae. Laborum
                neque provident natus, esse voluptates deserunt exercitationem distinctio, reprehenderit quibusdam autem
                nobis! Reiciendis iusto amet magni blanditiis nulla eveniet eos dolor ea sequi voluptatum nesciunt, cum
                adipisci tempore ratione repellat dolores accusantium voluptas ipsa laboriosam, eaque consequuntur
                perferendis at dicta. Saepe quidem modi dolorum harum porro sapiente nam laudantium maiores aperiam fugit
                quis enim, alias doloribus beatae, dolore ipsum necessitatibus distinctio debitis non officia. Repudiandae,
                ipsum numquam consequuntur molestias placeat iste eveniet ex at tempora quidem possimus deserunt, sint nam
                fugiat, cum consectetur aperiam delectus. Neque voluptatem molestiae a id. Quam vitae earum quaerat at
                maxime nihil eum adipisci, esse autem dolore saepe repellendus quidem blanditiis commodi qui repellat
                suscipit iusto eius. Cumque nulla illo nesciunt ratione odio magni nam suscipit, commodi, voluptatibus error
                molestias, magnam repellendus quia nihil. In blanditiis fuga iste soluta qui possimus veniam, esse sed totam
                enim voluptatum? Cumque temporibus nobis omnis perferendis asperiores officia non corrupti, itaque
                doloremque, excepturi deserunt, ipsum facilis voluptate saepe dolorem vel reprehenderit veritatis! Veritatis
                facilis ea atque sint doloribus excepturi id expedita corporis esse sed quaerat quae, in culpa pariatur at
                sit tempore itaque vero sunt. Tenetur, quas.</p>
            {{-- row --}}
        </div>
        {{-- container --}}
    </div>
    {{-- Kelebihan web --}}
    {{-- container --}}

    @include('components.footer')
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
