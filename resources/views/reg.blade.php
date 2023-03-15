@extends('layouts/mainreg')

@section('container')
    <section>
        <div class="container register__spacing">

        </div>
    </section>

    <div class="container register__spacing">
        <div class="row custom__cardThree">
            <div class="col-lg-2"></div>
            <div class="col-lg-4">
                <div class="card p-3">
                    <img class="card-img-top icon" src="https://tripay.id/assets/images/icon/personal.png">
                    <div class="card-body">
                        <h5 class="card-title">Personal</h5>
                        <div class="card-text isi1">
                            <ul>
                                <li>
                                Dipakai Untuk Pribadi Atau Keluarga
                                </li>
                                <li>
                                    Minimal Deposit Rp. 20.000
                                </li>
                                <li>
                                    Tidak ada minimal transaksi bulanan
                                </li>
                                <li>
                                    Ada beberapa fitur yang dibatasi
                                </li>
                                <li>
                                    Harga Normal
                                </li>
                                <li>
                                    Biaya pendaftaran GRATIS
                                </li>
                            </ul>
                        </div>
                        <div class="text-center isi2">
                            <a href="#" class="btn btn-blue mt-4">Daftar Personal</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card p-3">
                    <img class="card-img-top icon" src="https://tripay.id/assets/images/icon/enterprise.png">
                    <div class="card-body">
                        <h5 class="card-title">Enterprise</h5>
                        <div class="card-text isi1">
                            <ul>
                                <li>
                                    Dipakai Untuk Bisnis H2H
                                </li>
                                <li>
                                    Minimal Deposit Rp. 500.000
                                </li>
                                <li>
                                    Tidak ada minimal transaksi bulanan
                                </li>
                                <li>
                                    Mendapat harga khusus Enterprise
                                </li>
                                <li>
                                    Biaya pendaftaran GRATIS
                                </li>
                                <li>
                                    Fasilitas API, Transfer Saldo &amp; Support khusus
                                </li>
                            </ul>
                        </div>
                        <div class="text-center isi2">
                            <a href="#" class="btn btn-blue mt-4">Daftar Enterprise</a>
                        </div>
                    </div>
                </div>
            </div>
            <div classs="col-lg-2"></div>
        </div>
    </div>

    <!-- <h1 class="h1-all">Ayo Jualan Pulsa Elektrik</h1>
    <div style="margin-bottom: 500px">
        Space-Enter
    </div> -->
@endsection