@extends('layouts.master')


@section('container')

        {{-- head --}}
        <div class="bgblue rounded-bottom  p-5">
            <div class="wrapin  d-flex  justify-content-center  d-grid gap-5 ">
                <div class=" bgbluelight text-white p-5 rounded-3  shadow  d-flex flex-column " style="width:29rem;">
                    <div class="mb-auto">
                        <h4><b>Buat Dukungan dengan cepat</b></h4>
                        <p>Kamu bisa membuat voting dukungan seperti pemilihan poster terbaik, pemilihan video terfavorit, dan sebagainya.</p>
                    </div>
                    <div class="text-center ">
                        <button class="btn btn-warning bgyellow">Buat Dukungan</button>
                    </div>
                </div>
                <div class=" bgbluelight text-white p-5 rounded-3 shadow  d-flex flex-column " style="width:29rem;">
                    <div class="mb-auto">
                        <h4><b>Pilih berbagai macam dukungan</b></h4>
                        <p>Kamu bisa membantu dukungan lainnya dengan batas satu kali voting setiap dukung yang ada.</p>
                    </div>
                    <div class="text-center ">
                        <button class=" btn btn-warning bgyellow">Pilih Dukungan</button>
                    </div>
                </div>
            </div>
        </div>
        {{-- head close --}}
        {{-- tentang --}}
        <div class=" p-5 container-fluid" >
            
                    <h3 class="text-center"><b>Tentang</b></h3>
         {{--konten tentang  --}}
            <div class="p-5 ">
                <div class="row d-flex">
                    <div class="col gambarlanding">
                        <img src="konten/Buat_dukungan.png" alt="" class="gambarlanding w-100 shadow ">
                    </div>
                    <div class="col d-flex flex-column">
                        <div class="mb-auto">
                        <h3 class="mb-4"><b>Buat Dukungan dengan hasil murni</b></h3>
                        <p class="lh-lg">DukungJuara menyediakan pembuatan pemungutan suara dengan opsi pemeriksaan duplikasi agar tidak terjadi duplikasi dan mendapatkan hasil yang murni, DukungJuara juga mampu menampilkan mengunggah gambar atau video singkat disetiap pilihan jawaban.</p>
                        </div>
                        <div class=" pb-5 ">
                            <button class="btn btn-warning bgyellow">Buat Dukungan</button>
                        </div>
                    </div>
                </div>
            </div>
            {{--konten tentang close  --}}

            {{--konten tentang 2 --}}
            <div class="p-5 ">
                <div class="row d-flex">
                    <div class="col d-flex flex-column">
                        <div class="mb-auto">
                        <h3 class="mb-4 text-end"><b>Pilih berbagai macam dukungan</b></h3>
                        <p class="lh-lg text-end">DukungJuara adalah pemungutan suara yang dapat digunakan untuk mendukung juara seperti memilih peserta yang akan menjadi juara di suatu acara lomba. DukungJuara sangat berguna untuk mendapatkan suara terbanyak untuk ditentukan siapa pemenangnya.</p>
                        </div>
                        <div class=" pb-5 text-end">
                            <button class="btn btn-warning bgyellow ">Pilih Dukungan</button>
                        </div>
                    </div>
                    <div class="col gambarlanding">
                        <img src="konten/Pilih_dukungan.png" alt="" class="gambarlanding w-100 shadow">
                    </div>
                </div>
            </div>
            {{--konten tentang 2 close  --}}
        </div>
        {{-- tentang close --}}
        {{-- daftar sekarang --}}
        <div class="  bgbluelight">
            <div class="d-flex align-items-center ">
                <div class="m-5 me-auto">
                    <h2 class="fw-bold text-white">Yuk, mulai sekarang!</h2>
                    <h2 class="fw-bold textyellow">Gratis!</h2>
                </div>
                <div class="m-5">
                    <button class="btn btn-warning bgyellow m-2 widbut">Buat Dukungan</button>
                    <button class="btn btn-light m-2 widbut">Sign In</button>
                </div>
            </div>
        </div>
        {{-- daftar sekarang close --}}
        
        {{-- footer --}}
        <div class=" bgwhite m-5 ">
            <div class="d-flex flex-wrap flex-row p-5 g-5">
                <div class=" wfooter  me-5">
                    <img src="konten/DukungJuaraBlackLogo.svg" class="w-100" alt="">
                    <p class="my-3">Making it easy to create instant, real-time polls and surveys for free.</p>
                    <ul class="d-flex flex-wrap flex-row d-grid gap-2 navbar-nav">
                        <li class=" nav-item">
                            <a href="" class="nav-link">Facebook</a> 
                        </li>
                        <li class=" nav-item">
                            <a href="" class="nav-link">Twitter</a>
                        </li>
                        <li class=" nav-item">
                            <a href="" class="nav-link">Instagram</a>
                        </li>
                    </ul>
                </div>
                <div class=" flex-grow-1">
                    <div class="row ">
                        <div class="col-4">
                            <ul class="navbar-nav">
                                <li class="nav-item fw-bold">Fitur</li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Buat Dukungan</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Pilih Dukungan</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Sign In</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Sign Up</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-4">
                            <ul class="navbar-nav">
                                <li class="nav-item fw-bold">Support</li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Guides</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">F.A.Q.</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-4">
                            <ul class="navbar-nav">
                                <li class="nav-item fw-bold">Legal</li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Terms</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Privacy</a>
                                </li>
                            </ul> 
                        </div>
                    </div>
                </div>
                
            </div>    
        </div>
        {{-- footer close --}}


        {{-- footer cpright --}}
        <footer class="bg-white text-center">
            <div >
                <p class="p-2 m-0">&copy Copyright DukungJuara 2022</p>
            </div>
        </footer>
        {{-- footer close --}}
@endsection