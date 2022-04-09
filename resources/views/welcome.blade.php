<x-guest-layout>
    <style>
        html,
        body {
            overflow-x: hidden;
        }

        body {
            font-family: 'Nunito';
            background: #f7fafc;
        }

        a {
            text-decoration: none;
        }

        .card {
            transition: all 0.5s;
        }

        .card:hover {
            box-shadow: 0px 2px 10px rgb(179, 179, 179);
            transform: translate(-6px, -2px);
        }

        .card::after {
            transition: 0.5s;
        }

    </style>

    <div class="wrapper">
        <section class="home"
            style="
            background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.700), rgba(0, 0, 0, 0.300)), url(https://images.unsplash.com/photo-1584697964358-3e14ca57658b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80); height:100vh; background-repeat: no-repeat; background-size: cover; color: white">
            <div class="container" style="height: 100%">
                <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light shadow-sm">
                    <div class="container">
                        <a class="navbar-brand" href="#"><b>CARAKAF</b></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#features">Features</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#why">Why us</a>
                                </li>
                            </ul>
                            <form class="d-flex">
                                @if (Route::has('login'))
                                <div class="">
                                    @auth
                                    <a href="{{ url('/dashboard') }}" class="text-muted">Dashboard</a>
                                    @else
                                    <a href="{{ route('login') }}" class="text-muted">Log in</a>

                                    @if (Route::has('register'))
                                    <a href="{{ route('register') }}"
                                        class="ms-4 btn btn-primary text-light">Register</a>
                                    @endif
                                    @endif
                                </div>
                                @endif
                            </form>
                        </div>
                    </div>
                </nav>
                <div class="row" style="height: 100%">
                    <div class="col align-items-center">
                        <div class="d-flex align-items-center flex-column justify-content-center" style="height: 100%">
                            <h2 style="font-size: 3em"><b>BEST ONLINE EDUCATION SERVICE IN THE WORLD</b></h2>
                            <h1 style="font-size: 4em"><b>STEP AHEAD THIS SEASON</b></h1>
                            <div class="d-flex my-5">
                                <a href="" class="btn btn-primary me-2 text-light py-3 px-4 fs-5"><b> &nbsp; Get Started
                                        &nbsp;</b></a>
                                <a href="#features"
                                    class="btn btn-outline-primary outline-5 ms-2 py-3 px-4 fs-5 border-2"
                                    type="submit">Discover More</a>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <section class="features" id="features">
            <div class="container pt-5">
                <h1 class="mt-5 text-center"><b>The Features<b></h1>
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-sm-12">
                        <center>
                            <div class="card py-5 my-5">
                                <img src="https://edu.google.com/assets/icons/pages/main/classroom/all-in-one-place.svg"
                                    width="40%" class="d-block mx-auto" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title fw-bolder">Semuanya di satu tempat</h5>
                                    <p class="card-text">Siapkan semua alat pembelajaran dan kelola semua kelas dan
                                        pembelajaran dalam satu tempat yang mudah dan terpusat.</p>
                                </div>
                            </div>
                        </center>
                    </div>
                    <div class="col-xl-3 col-md-6 col-sm-12">
                        <center>
                            <div class="card py-5 my-5">
                                <img src="https://edu.google.com/assets/icons/pages/main/classroom/easy-to-use.svg"
                                    width="40%" class="d-block mx-auto" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title fw-bolder">Mudah digunakan</h5>
                                    <p class="card-text">Semua orang di komunitas sekolah Anda dapat menyiapkan dan
                                        menjalankan Classroom dalam hitungan menit.</p>
                                </div>
                            </div>
                        </center>
                    </div>
                    <div class="col-xl-3 col-md-6 col-sm-12">
                        <center>
                            <div class="card py-5 my-5">
                                <img src="https://edu.google.com/assets/icons/pages/main/classroom/built-for-collaboration.svg"
                                    width="40%" class="d-block mx-auto" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title fw-bolder">Cocok untuk berkolaborasi</h5>
                                    <p class="card-text">Bekerja secara bersamaan di dokumen yang sama dengan seluruh
                                        kelas atau terhubung secara tatap muka menggunakan Google Meet.</p>
                                </div>
                            </div>
                        </center>
                    </div>
                    <div class="col-xl-3 col-md-6 col-sm-12">
                        <center>
                            <div class="card py-5 my-5">
                                <img src="https://edu.google.com/assets/icons/pages/main/classroom/access-from-anywhere.svg"
                                    width="40%" class="d-block mx-auto" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title fw-bolder">Akses dari mana saja</h5>
                                    <p class="card-text">Dukung proses belajar dan mengajar dari mana saja, di perangkat
                                        mana saja, serta berikan kelas Anda lebih banyak fleksibilitas dan mobilitas.
                                    </p>
                                </div>
                            </div>
                        </center>
                    </div>
                    <center>
                        <img src="https://bvuvolunteers.org/wp-content/uploads/2021/02/online-student-recruitment-events.jpg"
                            width="70%" class="my-5" alt="">
                    </center>
                </div>
            </div>
        </section>
        <section class="about" id="why">
            <div class="container pt-5">
                <h1 class="mt-5 text-center"><b>Why Choose Us<b></h1>
                <div class="row py-5">
                    <div class="col-xl-6 col-md-12">
                        <h5>MUDAH DIGUNAKAN</h5>
                        <h2>Hemat waktu dan sederhanakan tugas sehari-hari
                        </h2>
                        <h3>Fitur</h3>
                        <ul>
                            <li>Beralih dari kelas ke tugas ke siswa hanya dengan beberapa klik</li>
                            <li>Pantau perkembangan siswa di buku nilai Anda dan ekspor nilai ke sistem informasi siswa
                                (SIS) milik sekolah</li>
                            <li>Jaga agar penilaian konsisten dan transparan menggunakan rubrik yang ditampilkan bersama
                                dengan tugas siswa</li>
                            <li>Simpan frasa yang sering digunakan dalam bank komentar yang dapat disesuaikan</li>
                            <li>Siapkan serta jadwalkan tugas, pemberian tugas, dan kuis di seluruh kelas serta pantau
                                interaksi siswa dengan alat Classroom</li>
                        </ul>
                    </div>
                    <div class="col-xl-6 col-md-12">
                        <img src="https://lh3.googleusercontent.com/sp3SxHqbHA6NO2pqI0zREJ4G_hL0wVvvKp7EcGsgvNNEPPm2mZ38f5QDvUY0RZ6jxbMQtI57Fq6jsNQvfuxGdDBOLyhs02-cG9FF_AY9bN8jFv-Qdm9t=w1296-v1"
                            width="80%" alt="">
                    </div>
                </div>
                <div class="row my-5 py-5">
                    <div class="col-xl-6 col-md-12">
                        <img src="https://lh3.googleusercontent.com/qZTBnm4G_52DxImj55oWm9umHoGGPFx8n9McCwYeVHiD23aVXHM731kDKlhUp-wMh987u22tTqNtdZcYlOfB31c0qo8IB2arSNTfV8iwhbe15SyY04o=w688-v1"
                            width="80%" alt="">
                    </div>
                    <div class="col-xl-6 col-md-12">
                        <h5>PERKAYA</h5>
                        <h2>Meningkatkan pengalama belajar siswa</h2>
                        <h3>Fitur</h3>
                        <ul>
                            <li>Beri siswa kemampuan untuk menyesuaikan setelan aksesibilitas sehingga mereka dapat
                                belajar dengan cara yang paling sesuai bagi mereka — bahkan dalam beberapa bahasa</li>
                            <li>Jaga agar semua orang dapat mengelola rutinitas menggunakan halaman tugas siswa dan
                                tinjauan pengajar, serta batas waktu yang akan otomatis muncul di kalender siswa saat
                                tugas kelas dibuat</li>
                            <li>Otomatis upload dokumen tugas sebagai template untuk memberi setiap siswa salinannya
                                masing-masing saat tugas dibuat</li>
                            <li>Beri siswa kemampuan untuk memeriksa tugas mereka guna menemukan kutipan yang
                                direkomendasikan dengan memindai tugas untuk membandingkannya dengan ratusan juta
                                halaman web dan lebih dari 40 juta buku menggunakan laporan keaslian</li>
                            <li>Izinkan siswa untuk mengambil serta mengirim foto pekerjaan rumah yang mereka kerjakan
                                di kertas secara cepat dan mudah dengan pengambilan gambar yang ditingkatkan</li>
                        </ul>
                    </div>
                </div>
                <div class="row my-5 py-5">
                    <div class="col-xl-6 col-md-12">
                        <h5>AMAN</h5>
                        <h2>Tetap aman dan patuh</h2>
                        <h3>Fitur</h3>
                        <ul>
                            <li>Andalkan jaringan global kami yang dibuat dengan keamanan berlapis dan stack lengkap
                                yang dapat menangani perubahan permintaan ekstrem, serta jaminan waktu operasional 99,9%
                            </li>
                            <li>Menerapkan standar pendidikan global yang paling ketat untuk keamanan serta privasi —
                                dan diaudit secara berkala oleh organisasi pihak ketiga</li>
                            <li>Gunakan Classroom yang 100% bebas iklan. Informasi pribadi siswa tidak akan digunakan
                                untuk membuat profil iklan dengan tujuan penargetan</li>
                            <li>Pastikan bahwa hanya pemegang akun dengan login unik yang dapat mengakses domain Google
                                for Education, serta batasi semua aktivitas kelas untuk anggota kelas saja</li>
                        </ul>
                    </div>
                    <div class="col-xl-6 col-md-12">
                        <img src="https://lh3.googleusercontent.com/M_Ef9_7RehzwsU6puoxcHNjawN9n9UGNkyFTNFdYfqgYVx1go5H7ys7SUd0CMlMBt_zfq_GgTh37x_R2jUxNd2uFg5acB4OVdhV7I-ojCni6eAZ5IFU=w1296-v1"
                            width="80%" alt="">
                    </div>
                </div>
            </div>
        </section>

        <footer class="footer bg-primary">
            <div class="row">
                <div class="col pt-2">
                    <center>
                        <h6>Carakaf 2022.</h6>
                    </center>
                </div>
            </div>
        </footer>
    </div>
</x-guest-layout>
