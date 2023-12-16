<div class="footer pt-5">
    <div class="container">
        <div class="row row-cols-lg-3 row-cols-1 justify-content-between">
            <div class="col col-lg-6 mb-lg-0 mb-4">
                <a href="{{ '/' }}" class="text-white fs-2">Telkom University</a>
                <p class="text-white-50 my-4">Innovative, Eminent, and Noble.</p>
            </div>
            <div class="col col-lg-2 d-flex flex-column mb-lg-0 mb-4">
                <h5 class="fw-bold text-white">Menu</h5>
                <a href="{{ url('/') }}" class="text-white-50 mt-3">
                    Home
                </a>
                @guest
                    <a href="{{ route('login') }}" class="text-white-50 mt-2">
                        Login
                    </a>
                @endguest
            </div>
            <div class="col col-lg-3 d-flex flex-column mb-lg-0 mb-4">
                <h5 class="fw-bold text-white mb-3">Contact</h5>
                <a href="https://www.instagram.com/msibgits_kel.06/" class="text-white-50 mt-2">
                    Our Instagram
                </a>
                <p class="text-white-50 mt-2">Jl. Telekomunikasi. 1, Terusan Buahbatu - Bojongsoang, Telkom University, Sukapura, Kec. Dayeuhkolot, Kabupaten Bandung, Jawa Barat 40257</p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p class="text-white text-center copytext">&copy; Copyright 2023 by Fanny Irawan, All Right Reserved.</p>
            </div>
        </div>
    </div>
</div>
