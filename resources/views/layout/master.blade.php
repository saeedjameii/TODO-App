@include('layout.header')

<main class="main-container py-5">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-12 col-xl-10">

                @yield('content')

            </div>

        </div>

    </div>

</main>

@include('layout.footer')