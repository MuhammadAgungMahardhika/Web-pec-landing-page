@extends('template.main')
@section('container')
    <main id="main">
        <section id="posts" class="posts">
            <div class="container shadow mt-4 p-4" data-aos="fade-up" data-aos-delay="100">
                {{-- Post Title & Share --}}
                <div class="row">
                    <div class="col-12">
                        <h4 class="text-start">Syarat Dan Ketentuan</h4>
                        <hr>
                    </div>
                </div>

                {{-- Post Paragraf --}}
                <div class="row">
                    <div class="col-12 py-4">
                        <p>Dengan mengakses situs web ini, Anda setuju untuk terikat oleh syarat dan ketentuan penggunaan
                            berikut: </p>

                        <ul>
                            <li>
                                Ketentuan Umum <br>
                                <span class="text-sm ">
                                    Situs web ini dimaksudkan untuk informasi umum dan penggunaan pribadi Anda. Anda tidak
                                    diperbolehkan untuk menggandakan, mendistribusikan, atau mengalihkan konten dari situs
                                    ini
                                    tanpa
                                    izin tertulis dari kami.
                                    Kami berhak untuk mengubah atau menghapus bagian apapun dari situs ini tanpa
                                    pemberitahuan
                                    sebelumnya.
                                </span>

                            </li>
                            <li>
                                Kebijakan Privasi <br>
                                <span class="text-sm ">
                                    Informasi pribadi yang Anda berikan kepada kami akan ditangani sesuai dengan kebijakan
                                    privasi
                                    kami. Silakan lihat Kebijakan Privasi kami untuk informasi lebih lanjut.
                                </span>

                            </li>
                            <li>
                                Konten Pengguna <br>
                                <span class="text-sm ">
                                    Anda bertanggung jawab sepenuhnya atas konten yang Anda unggah ke situs web kami. Konten
                                    yang
                                    melanggar hukum atau mengandung materi yang merugikan akan dihapus tanpa pemberitahuan
                                    sebelumnya.
                                </span>
                            </li>
                            <li>
                                Kekuatan Hukum
                                <br>
                                <span class="text-sm ">
                                    Penggunaan situs web ini tunduk pada hukum yang berlaku di [Negara/Provinsi/Region],
                                    tanpa
                                    memperhatikan konflik ketentuan hukum.
                                </span>
                            </li>
                            <li>
                                Penafian Tanggung Jawab <br>
                                <span class="text-sm ">
                                    Kami tidak bertanggung jawab atas kerugian atau kerusakan yang timbul dari penggunaan
                                    situs
                                    web
                                    ini atau informasi yang terkandung di dalamnya.
                                </span>

                            </li>
                            <li>
                                Perubahan pada Syarat dan Ketentuan
                                <br>
                                <span class="text-sm ">
                                    Kami berhak untuk mengubah atau memperbarui syarat dan ketentuan penggunaan ini dari
                                    waktu
                                    ke
                                    waktu tanpa pemberitahuan sebelumnya. Pengguna diharapkan untuk memeriksa halaman ini
                                    secara
                                    berkala untuk memastikan bahwa mereka mengetahui perubahan apa pun.
                                    Dengan mengakses atau menggunakan situs web kami, Anda setuju untuk terikat oleh syarat
                                    dan
                                    ketentuan penggunaan ini. Jika Anda tidak setuju dengan syarat dan ketentuan ini, Anda
                                    tidak
                                    diperbolehkan untuk menggunakan situs web ini.
                                </span>
                            </li>
                        </ul>

                    </div>
                </div>

            </div>
        </section>
        <!-- ======= Contact Section ======= -->
        @include('home_section.contact')

    </main>
@endsection
