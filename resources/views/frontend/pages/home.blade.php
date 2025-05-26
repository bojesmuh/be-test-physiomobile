@extends('frontend.layouts.front')

@section('content')
<section class="bg-pattern" style='background: url("{{ asset('build/assets/images/background-pattern.svg') }}");'>
</section>
<section id="bg-home" style='background: url("{{ asset('build/assets/images/home-background.svg') }}") no-repeat;'>
    <div class="header">
        <h1>Mulai perjalanan kuliahmu ke luar negeri sekarang 🌍</h1>
        <p>Temukan universitas top dunia dengan bimbingan pribadi soal pendaftaran, beasiswa, visa pelajar, dan
            persiapan sebelum berangkat.</p>
        <a href="#" class="btn btn-primary-geo">Hubungi kami</a>
    </div>
</section>

<section class="container" id="favorite-study">
    <div class="row header">
        <div class="col-md-12 text-center">
            <h2>Destinasi studi favorit</h2>
            <p>Temukan negara yang sempurna untuk perjalanan pendidikan Anda.</p>
        </div>
    </div>
    <div class="row content">
        <div class="col-md-4 text-center">
            <span class="fi fi-au fis round-flag "></span>
            <h3>Australia</h3>
            <p>Dapatkan pendidikan kelas dunia di Australia, di mana budaya beragam dan universitas terkemuka
                menawarkan pengalaman belajar yang unik.</p>
        </div>
        <div class="col-md-4 text-center">
            <span class="fi fi-nz fis round-flag "></span>
            <h3>Selandia Baru</h3>
            <p>Dapatkan pendidikan kelas dunia di Australia, di mana budaya beragam dan universitas terkemuka
                menawarkan pengalaman belajar yang unik.</p>
        </div>
        <div class="col-md-4 text-center">
            <span class="fi fi-us fis round-flag "></span>
            <h3>AS</h3>
            <p>Dapatkan pendidikan kelas dunia di Australia, di mana budaya beragam dan universitas terkemuka
                menawarkan pengalaman belajar yang unik.</p>
        </div>
        <div class="col-md-4 text-center">
            <span class="fi fi-ch fis round-flag "></span>
            <h3>Swiss</h3>
            <p>Rasakan pendidikan berkualitas di Swiss, yang dikenal dengan keunggulan akademis, pemandangan yang
                menakjubkan, dan inovasi.</p>
        </div>
        <div class="col-md-4 text-center">
            <span class="fi fi-gb fis round-flag "></span>
            <h3>Inggris</h3>
            <p>Kejar keunggulan di Inggris, di mana universitas terkemuka dan lingkungan budaya yang dinamis
                membentuk masa depan Anda.</p>
        </div>
        <div class="col-md-4 text-center">
            <span class="fi fi-sg fis round-flag "></span>
            <h3>Singapura</h3>
            <p>Belajar di Singapura, pusat inovasi, yang menawarkan universitas kelas dunia dan peluang pendidikan
                yang tiada tara.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 text-center mt-5">
            <p>Dan masih banyak lagi...</p>
        </div>
    </div>
</section>

<div class="container" id="why-choose">
    <div class="row header">
        <div class="col-md-12 text-center">
            <h2>Mengapa memilih kami</h2>
            <p>Konsultasi lengkap dengan pengalaman global dan terpercaya.</p>
        </div>
    </div>
    <div class="row content">
        <div class="col-md-6">
            <div class="card" style="margin-bottom: 30px">
                <div class="card-body">
                    <img src="{{ asset('build/assets/images/icon1.svg') }}" class="card-img-left" alt="icon1"
                        height="48px" width="48px">
                    <h3>Keahlian dalam konsultasi pendidikan internasional</h3>
                    <p>Global One telah berhasil membimbing banyak siswa dalam mengejar pendidikan di luar negeri.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card" style="margin-bottom: 30px">
                <div class="card-body">
                    <img src="{{ asset('build/assets/images/icon2.svg') }}" class="card-img-left" alt="icon1"
                        height="48px" width="48px">
                    <h3>Layanan komprehensif</h3>
                    <p>Selain konsultasi pendidikan, kami menawarkan bantuan migrasi dan saran investasi properti.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card" style="margin-bottom: 30px">
                <div class="card-body">
                    <img src="{{ asset('build/assets/images/icon3.png') }}" class="card-img-left" alt="icon1"
                        height="48px" width="48px">
                    <h3>Panduan yang dipersonalisasi untuk tujuan Anda</h3>
                    <p>Tim kami memberikan saran yang disesuaikan untuk selaras dengan tujuan akademis dan karir
                        Anda.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card" style="margin-bottom: 30px">
                <div class="card-body">
                    <img src="{{ asset('build/assets/images/icon4.png') }}" class="card-img-left" alt="icon1"
                        height="48px" width="48px">
                    <h3>Aktif dalam acara pendidikan global</h3>
                    <p>Kami tetap terupdate dengan tren pendidikan global dengan berpartisipasi aktif dalam acara
                        internasional.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container" id="dont-miss">
    <div class="row header">
        <div class="col-md-12 text-center">
            <h2>Jangan lewatkan</h2>
            <p>Tetap terdepan dengan penawaran, acara, dan info pekerjaan terbaru.</p>
        </div>
    </div>
    <div class="row content slide-dont-miss">
        <div class="col-md-3">
            <div class="card">
                <img src="{{ asset('build/assets/images/slider1.jpeg') }}" class="card-img-top" alt="icon1"
                    width="200px">
            </div>
            <div class="text-center mt-3 d-grid gap-2">
                <a href="#" class="btn btn-outline-primary-geo"> Info Lebih lanjut</a>
            </div>

        </div>
        <div class="col-md-3">
            <div class="card">
                <img src="{{ asset('build/assets/images/slider2.jpeg') }}" class="card-img-top" alt="icon1"
                    width="200px">
            </div>
            <div class="text-center mt-3 d-grid gap-2">
                <a href="#" class="btn btn-outline-primary-geo"> Info Lebih lanjut</a>
            </div>

        </div>
        <div class="col-md-3">
            <div class="card">
                <img src="{{ asset('build/assets/images/slider1.jpeg') }}" class="card-img-top" alt="icon1"
                    width="200px">
            </div>
            <div class="text-center mt-3 d-grid gap-2">
                <a href="#" class="btn btn-outline-primary-geo"> Info Lebih lanjut</a>
            </div>

        </div>
        <div class="col-md-3">
            <div class="card">
                <img src="{{ asset('build/assets/images/slider1.jpeg') }}" class="card-img-top" alt="icon1"
                    width="200px">
            </div>
            <div class="text-center mt-3 d-grid gap-2">
                <a href="#" class="btn btn-outline-primary-geo"> Info Lebih lanjut</a>
            </div>

        </div>

        <div class="col-md-3">
            <div class="card">
                <img src="{{ asset('build/assets/images/slider2.jpeg') }}" class="card-img-top" alt="icon1"
                    width="200px">
            </div>
            <div class="text-center mt-3 d-grid gap-2">
                <a href="#" class="btn btn-outline-primary-geo"> Info Lebih lanjut</a>
            </div>

        </div>

        <div class="col-md-3">
            <div class="card">
                <img src="{{ asset('build/assets/images/slider2.jpeg') }}" class="card-img-top" alt="icon1"
                    width="200px">
            </div>
            <div class="text-center mt-3 d-grid gap-2">
                <a href="#" class="btn btn-outline-primary-geo"> Info Lebih lanjut</a>
            </div>

        </div>
    </div>
    <div class="row arrow">
        <div class="col-md-12 text-center">
            <button type="button" class="btn arrow-left"><i class="bi bi-arrow-left-circle icon"></i></button>
            <button type="button" class="btn arrow-right"><i class="bi bi-arrow-right-circle icon"></i></button>
        </div>
    </div>
</div>

<div class="container" id="testimony">
    <div class="row header">
        <div class="col-md-12 text-center">
            <h2>Apa kata siswa kami</h2>
            <p>Kisah nyata dari siswa yang mencapai impian mereka dengan dukungan kami.</p>
        </div>
    </div>
    <div class="row content">
        <div class="col-md-6 mb-3">
            <div class="card">
                <div class="card-body">
                    <p>Global One membimbing kami melalui seluruh proses—dari memilih sekolah yang tepat hingga
                        mengurus visa. Berkat dukungan mereka, keluarga saya dan saya berhasil pindah ke Selandia
                        Baru dan membangun kehidupan baru di sini.</p>
                    <div class="d-flex justify-content-between">
                        <div>
                            <p class="user">Indriany Putri</p>
                            <p class="location">Auckland Institute Of Studies</p>
                        </div>
                        <div class="ml-auto mt-3">
                            <i class="fi fi-au fis round-flag"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-3">
            <div class="card">
                <div class="card-body">
                    <p>Global One membimbing kami melalui seluruh proses—dari memilih sekolah yang tepat hingga
                        mengurus visa. Berkat dukungan mereka, keluarga saya dan saya berhasil pindah ke Selandia
                        Baru dan membangun kehidupan baru di sini.</p>
                    <div class="d-flex justify-content-between">
                        <div>
                            <p class="user">Indriany Putri</p>
                            <p class="location">Auckland Institute Of Studies</p>
                        </div>
                        <div class="ml-auto mt-3">
                            <i class="fi fi-au fis round-flag"></i>
                            <i class="fi fi-au fis round-flag"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-3">
            <div class="card">
                <div class="card-body">
                    <p>Global One membimbing kami melalui seluruh proses—dari memilih sekolah yang tepat hingga
                        mengurus visa. Berkat dukungan mereka, keluarga saya dan saya berhasil pindah ke Selandia
                        Baru dan membangun kehidupan baru di sini.</p>
                    <div class="d-flex justify-content-between">
                        <div>
                            <p class="user">Indriany Putri</p>
                            <p class="location">Auckland Institute Of Studies</p>
                        </div>
                        <div class="ml-auto mt-3">
                            <i class="fi fi-au fis round-flag"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-3">
            <div class="card">
                <div class="card-body">
                    <p>Global One membimbing kami melalui seluruh proses—dari memilih sekolah yang tepat hingga
                        mengurus visa. Berkat dukungan mereka, keluarga saya dan saya berhasil pindah ke Selandia
                        Baru dan membangun kehidupan baru di sini.</p>
                    <div class="d-flex justify-content-between">
                        <div>
                            <p class="user">Indriany Putri</p>
                            <p class="location">Auckland Institute Of Studies</p>
                        </div>
                        <div class="ml-auto mt-3">
                            <i class="fi fi-my fis round-flag"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-3">
            <div class="card">
                <div class="card-body">
                    <p>Global One membimbing kami melalui seluruh proses—dari memilih sekolah yang tepat hingga
                        mengurus visa. Berkat dukungan mereka, keluarga saya dan saya berhasil pindah ke Selandia
                        Baru dan membangun kehidupan baru di sini.</p>
                    <div class="d-flex justify-content-between">
                        <div>
                            <p class="user">Indriany Putri</p>
                            <p class="location">Auckland Institute Of Studies</p>
                        </div>
                        <div class="ml-auto mt-3">
                            <i class="fi fi-ch fis round-flag"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-3">
            <div class="card">
                <div class="card-body">
                    <p>Global One membimbing kami melalui seluruh proses—dari memilih sekolah yang tepat hingga
                        mengurus visa. Berkat dukungan mereka, keluarga saya dan saya berhasil pindah ke Selandia
                        Baru dan membangun kehidupan baru di sini.</p>
                    <div class="d-flex justify-content-between">
                        <div>
                            <p class="user">Indriany Putri</p>
                            <p class="location">Auckland Institute Of Studies</p>
                        </div>
                        <div class="ml-auto mt-3">
                            <i class="fi fi-au fis round-flag"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="container-fluid" id="contact-us">
    <div class="row header">
        <div class="col-md-12 text-center">
            <h2>Hubungi kami</h2>
            <p>Wujudkan mimpimu dengan bimbingan yang pas untuk proses pendaftaranmu.</p>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form class="p-4">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="firstName" class="form-label">Nama depan <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="firstName" placeholder="Nama depan" required>
                    </div>
                    <div class="col-md-6">
                        <label for="lastName" class="form-label">Nama belakang <span
                                class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="lastName" placeholder="Nama belakang" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" id="email" placeholder="youremail@gmail.com" required>
                </div>

                <div class="mb-3">
                    <label for="phone" class="form-label">Nomor telepon <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <select class="form-select" style="max-width: 100px;">
                            <option selected>ID</option>
                            <option>MY</option>
                            <option>SG</option>
                        </select>
                        <input type="text" class="form-control" placeholder="+62 812 1234 3456" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="negara" class="form-label">Negara tujuan <span class="text-danger">*</span></label>
                    <select class="form-select" id="negara" required>
                        <option selected disabled>Pilih tujuan Anda</option>
                        <option>Australia</option>
                        <option>Amerika Serikat</option>
                        <option>Jepang</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="pendidikan" class="form-label">Pendidikan terakhir <span
                            class="text-danger">*</span></label>
                    <select class="form-select" id="pendidikan" required>
                        <option selected disabled>Pilih pendidikan terakhir Anda</option>
                        <option>SMA</option>
                        <option>D3</option>
                        <option>S1</option>
                        <option>S2</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label for="program" class="form-label">Program studi <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="program" placeholder="Masukkan program studi Anda"
                        required>
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-primary-geo">Kirim</button>
                </div>
            </form>
        </div>
    </div>
</div>

<section class="container-fluid" id="faq">
    <div class="row header">
        <div class="col-md-12 text-center">
            <h2>Pertanyaan yang sering diajukan</h2>
            <p>Jawaban cepat untuk pertanyaan umum tentang studi di luar negeri dan layanan.</p>
        </div>
    </div>
    <div class="row content justify-content-center">
        <div class="col-md-6">
            <div class="accordion" id="faqAccordion">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading1">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapseOne">
                            Apa itu Global One?
                        </button>
                    </h2>
                    <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Global One adalah konsultan pendidikan internasional yang berbasis di Jakarta dan Sydney.
                            Kami mengkhususkan diri dalam membantu siswa Indonesia mengejar studi mereka di luar negeri
                            dengan memberikan dukungan penuh—mulai dari memilih universitas yang tepat hingga menangani
                            aplikasi visa dan persiapan sebelum keberangkatan.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Layanan apa saja yang ditawarkan Global One?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Konsultasi pemilihan universitas, bantuan proses aplikasi, bimbingan visa, pelatihan
                            wawancara, hingga persiapan keberangkatan.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-11 faq-bottom text-center">
            <div class="py-4">
                <div class="center-icon">
                    <i class="bi bi-question-circle"></i>
                </div>
                <h3>Masih ada pertanyaan?</h3>
                <p>Tidak menemukan jawaban yang Anda cari? Silakan chat dengan tim kami yang ramah.</p>
                <a href="#" class="btn btn-primary-geo mt-3">Hubungi Kami</a>
            </div>
        </div>
    </div>
</section>
@endsection