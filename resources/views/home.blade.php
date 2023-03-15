@extends('layouts/main')

@section('container')
    <section class="judul wow zoomIn" style="visibility: visible;">
        <div class="container">
            <h1>Ayo Jualan <span id="js-rotating" class="morphext"><span class="flipInX">Voucher Game</span></span></h1>
            <h6>Distributor &amp; Server Pulsa h2h Termurah dan Terlengkap yang menyediakan berbagai produk (Pulsa All operator, Pulsa Internet, Voucher Game Online, Token Listrik dan Multipayment).</h6>
        </div>
    </section>

    <section class="pt-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 mb-3 mb-sm-0">
                    <a class="nav-link" href="#">
                        <div class="card text-center" style="--bs-card-border-width: 0px;">
                            <div class="card-body">
                                <img class="pb-2" src="https://tripay.id/member-page/asset/icons/Pulsa.svg">
                                <div class="menu__title">
                                    PULSA ALL OPERATOR
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-3">
                    <a class="nav-link"href="#">
                        <div class="card text-center" style="--bs-card-border-width: 0px;">
                            <div class="card-body">
                                <img class="pb-2" src="https://tripay.id/member-page/asset/icons/paket-data.svg">
                                <div class="menu__title">
                                    PAKET DATA
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-3">
                    <a class="nav-link" href="#">
                        <div class="card text-center" style="--bs-card-border-width: 0px;">
                            <div class="card-body">
                                <img class="pb-2" src="https://tripay.id/member-page/asset/icons/game.svg">
                                <div class="menu__title">
                                    VOUCHER GAME
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-3">
                    <a class="nav-link" href="#">
                        <div class="card text-center" style="--bs-card-border-width: 0px;">
                            <div class="card-body">
                                <img class="pb-2" src="https://tripay.id/member-page/asset/icons/token-listrik.svg">
                                <div class="menu__title">
                                    TOKEN LISTRIK
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="menu pt-3">
        <div class="container menu__margin">
            <div class="tab-content mt-4" id="myTabContent">
                <div class="tab-pane fade active show" id="category-1" role="tabpanel" aria-labelledby="category-tab-1">
                    <div class="menu__second-title">
                        BELI PULSA ALL OPERATOR
                    </div>
                    <form class="mt-3 menu__form" id="form_1">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="phone">Nomor/ID Tujuan</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" data-id="phone">
                                    <div class="input-group-prepend pl-0 menu__ket pulsa">
                                        <div class="input-group-text pl-0"><i class="fas fa-times-circle fa-lg color-icon"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-lg-5 col-12 ml-lg-5 menu__select">
                                <label for="phone">Pilih Provider</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" data-id="phone">
                                    <div class="input-group-prepend pl-0 menu__ket pulsa">
                                        <div class="input-group-text pl-0"><i class="fas fa-times-circle fa-lg color-icon"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="menu__product menu__ket" data-id="product-list" style="display:block !important">
                            <ul class="list-group list-group-hover list-group-striped">

                            </ul>
                        </div>
                    </form>
                </div>
                
                <div class="tab-pane fade" id="category-2" role="tabpanel" aria-labelledby="category-tab-2">
                    <div class="menu__second-title">
                        BELI PAKET DATA
                    </div>
                    <form class="mt-3 menu__form" id="form_1">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="phone">Nomor/ID Tujuan</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" data-id="phone">

                                    <div class="input-group-prepend pl-0 menu__ket pulsa">
                                        <div class="input-group-text pl-0"><i class="fas fa-times-circle fa-lg color-icon"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-lg-5 col-12 ml-lg-5 menu__select">
                                <label for="provider">Pilih Provider <i class="fas fa-info-circle fa-lg color-icon ml-1" data-toggle="tooltip" data-placement="top" title="" data-original-title="Pilih Provider untuk melihat Harga produk"></i></label>
                                <div class="dropdown bootstrap-select form-control"><select class="form-control selectpicker" data-id="provider" tabindex="-98">
                                    <option value="">Pilih Operator ...</option>
                                    <option value="1" data-content="<img src=&quot;https://tripay.id/assets/images/provider/axis.png&quot; style=&quot;max-height: 20px !important;&quot;/> <span class='pl-3'>AXIS</span>"></option>
                                    <option value="159" data-content="<img src=&quot;https://tripay.id/assets/images/provider/byu.png&quot; style=&quot;max-height: 20px !important;&quot;/> <span class='pl-3'>BY.U</span>"></option>
                                    <option value="13" data-content="<img src=&quot;https://tripay.id/assets/images/provider/indosat.png&quot; style=&quot;max-height: 20px !important;&quot;/> <span class='pl-3'>INDOSAT</span>"></option>
                                    <option value="26" data-content="<img src=&quot;https://tripay.id/assets/images/provider/smartfren.png&quot; style=&quot;max-height: 20px !important;&quot;/> <span class='pl-3'>SMARTFREN</span>"></option>
                                    <option value="29" data-content="<img src=&quot;https://tripay.id/assets/images/provider/telkomsel.png&quot; style=&quot;max-height: 20px !important;&quot;/> <span class='pl-3'>TELKOMSEL</span>"></option>
                                    <option value="36" data-content="<img src=&quot;https://tripay.id/assets/images/provider/tri.png&quot; style=&quot;max-height: 20px !important;&quot;/> <span class='pl-3'>TRI</span>"></option>
                                    <option value="44" data-content="<img src=&quot;https://tripay.id/assets/images/provider/xl.png&quot; style=&quot;max-height: 20px !important;&quot;/> <span class='pl-3'>XL</span>"></option>
                                </select>
                                <button type="button" class="btn dropdown-toggle btn-light bs-placeholder" data-toggle="dropdown" role="button" title="Pilih Operator ..."><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">Pilih Operator ...</div></div> </div></button><div class="dropdown-menu " role="combobox"><div class="inner show" role="listbox" aria-expanded="false" tabindex="-1"><ul class="dropdown-menu inner show"></ul></div></div></div>
                            </div>
                        </div>

                        <div class="menu__product menu__ket" data-id="product-list" style="display:block !important">
                            <ul class="list-group list-group-hover list-group-striped">

                            </ul>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="about mt-5 pt-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 wow slideInLeft" style="visibility: visible;">
                    <h1 class="block__title">Mengapa Memilih Kami?</h1>
                    <p class="about__text">
                        Kami merupakan salah satu server pulsa elektrik termurah yang ada di Indonesia, Sebagai distributor pulsa peran kami adalah mempermudah bisnis pulsa menjadi lebih sederhana dengan sistem Multichip, yang artinya anda tidak perlu lagi banyak chip dan ponsel untuk tiap-tiap operator, karena kami telah menyediakan berbagai sistem pengisian pulsa seperti Website, WebApps, Aplikasi Messanger dan API untuk melakukan pengisian pulsa All Operator, Pembayaran PLN Prabayar, Voucher Game Online dll
                    </p>
                </div>
                <div class="col-lg-6 d-lg-block d-none wow slideInRight" style="visibility: visible;">
                    <img src="https://tripay.id/assets/images/screenshot/gambar1.png" class="about__img">
                </div>
            </div>

            <div class="row mt-lg-5 custom__card">
                <div class="col-lg-4 wow fadeInUp" style="visibility: visible;">
                    <div class="card">
                        <img class="card-img-top icon" src="https://tripay.id/assets/images/icon/user.png">
                        <div class="card-body">
                            <h5 class="card-title">Pendafataran Gratis Dan Mudah</h5>
                            <p class="card-text">
                                Tanpa biaya pendaftaran 100% Gratis, setelah mendaftar akun anda langsung aktif dan dapat melakukan deposit.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInUp" style="visibility: visible;">
                    <div class="card">
                        <img class="card-img-top icon" src="https://tripay.id/assets/images/icon/jam.png">
                        <div class="card-body">
                            <h5 class="card-title">Transaksi Otomatis 24 Jam</h5>
                            <p class="card-text">
                                Tengah malam kamu masih bisa melakukan transaksi Pulsa, Paket Internet, Paket SMS, Token PLN, dan Voucher Game.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card aos-init aos-animate" data-aos="fade-up">
                        <img class="card-img-top icon" src="https://tripay.id/assets/images/icon/online.png">
                        <div class="card-body">
                            <h5 class="card-title">Jalur Trasanksi Online</h5>
                            <p class="card-text">
                                Kami menyediakan beberapa jalur transaksi online, dijamin tanpa biaya sms, yaitu transaksi via Website dan WebApps.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInUp" style="visibility: visible;">
                    <div class="card">
                        <img class="card-img-top icon" src="https://tripay.id/assets/images/icon/ceklist.png">
                        <div class="card-body">
                            <h5 class="card-title">Produk Pulsa Paling Lengkap</h5>
                            <p class="card-text">
                                Tersedia Produk yang lengkap seperti Pulsa All Oprator, Paket Data, Voucher Game, Token PLN, Pembayaran PPOB, Dll
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInUp" style="visibility: visible;">
                    <div class="card">
                        <img class="card-img-top icon" src="https://tripay.id/assets/images/icon/badge.png">
                        <div class="card-body">
                            <h5 class="card-title">Harga Terbaik dan Terpercaya</h5>
                            <p class="card-text">
                                Kami terus melakukan inovasi dan penambahan fitur, sehingga transaksi semakin lancar dengan harga paling murah.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInUp" style="visibility: visible;">
                    <div class="card">
                        <img class="card-img-top icon" src="https://tripay.id/assets/images/icon/auto.png">
                        <div class="card-body">
                            <h5 class="card-title">Deteksi Otomatis</h5>
                            <p class="card-text">
                                Mendeteksi nomor secara otomatis &amp; menawarkan harga terbaik tanpa perlu membuang banyak waktu.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInUp" style="visibility: visible;">
                    <div class="card">
                        <img class="card-img-top icon" src="https://tripay.id/assets/images/icon/dompet.png">
                        <div class="card-body">
                            <h5 class="card-title">Metode Pembayaran</h5>
                            <p class="card-text">
                                Banyak pilihan jalur pembayaran mulai dari bank, indomaret/alfamart, gopay/ovo, paypal, cryptocurency &amp; terus bertambah.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInUp" style="visibility: visible;">
                    <div class="card">
                        <img class="card-img-top icon" src="https://tripay.id/assets/images/icon/api.png">
                        <div class="card-body">
                            <h5 class="card-title">API H2H</h5>
                            <p class="card-text">
                                Kami menyediakan fitur API H2H untuk pelanggan Enterprise
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInUp" style="visibility: visible;">
                    <div class="card">
                        <img class="card-img-top icon" src="https://tripay.id/assets/images/icon/cs.png">
                        <div class="card-body">
                            <h5 class="card-title">Bantuan CS Ramah</h5>
                            <p class="card-text">
                            Kami menyediakan beberapa tempat bertanya atau komplain mulai dari live chat, telegram, whatsapp, facebook dan telpon.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonials-style-one">
        <div class="container">
            <h1 class="block__title text-center testimonials__margin">Testimonial</h1>
            <div class="row">
                <div class="col-lg-6 d-flex">
                    <div class="my-auto">
                        <div id="testimonials-slider-pager">
                            <div class="testi-icon">
                                <img src="https://tripay.id/assets/images/testimonial/testi-qoute-1-1.png" alt="Awesome Image">
                            </div>
                            <div class="testimonials-slider-pager-one">
                                <a href="#" class="pager-item" data-slide-index="0"><img src="https://tripay.id/assets/images/testimonial/testi-1-1.png" alt="Awesome Image"></a>
                                <a href="#" class="pager-item" data-slide-index="1"><img src="https://tripay.id/assets/images/testimonial/testi-1-1.png" alt="Awesome Image"></a>
                                <a href="#" class="pager-item active" data-slide-index="2"><img src="https://tripay.id/assets/images/testimonial/testi-1-1.png" alt="Awesome Image"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="testimonial__tanggapan">
                        <span>Apa kata mereka mengenari Tripay</span>
                    </div>
                    <div class="bx-wrapper" style="max-width: 100%;">
                        <div class="bx-viewport" aria-live="polite" style="width: 100%; overflow: hidden; position: relative; height: 100px;">
                            <ul class="slider testimonials-slider" style="width: 3215%; position: relative; transition-duration: 0s; transform: translate3d(-1620px, 0px, 0px);">
                                <li class="slide-item bx-clone" style="float: left; list-style: none; position: relative; width: 540px;" aria-hidden="true">
                                    <div class="single-testi-one">
                                        <p>Aplikasi.yg kucari cari</p>
                                        <h3>Apriyanto, Palembang</h3>
                                    </div>
                                </li>
                                <li class="slide-item" style="float: left; list-style: none; position: relative; width: 540px;" aria-hidden="true">
                                    <div class="single-testi-one">
                                        <p>Lumayan puas dengan layanan aplikasi tripay</p>
                                        <h3>QORINATUL HASINAH, Yogyakarta</h3>
                                    </div>
                                </li>
                                <li class="slide-item" aria-hidden="true" style="float: left; list-style: none; position: relative; width: 540px;">
                                    <div class="single-testi-one">
                                        <p>semoga jadi lebih maju</p>
                                        <h3>agus omen, mempawah</h3>
                                    </div>
                                </li>
                                <li class="slide-item" style="float: left; list-style: none; position: relative; width: 540px;" aria-hidden="false">
                                    <div class="single-testi-one">
                                        <p>Aplikasi.yg kucari cari</p>
                                        <h3>Apriyanto, Palembang</h3>
                                    </div>
                                </li>
                                <li class="slide-item bx-clone" style="float: left; list-style: none; position: relative; width: 540px;" aria-hidden="true">
                                    <div class="single-testi-one">
                                        <p>Lumayan puas dengan layanan aplikasi tripay</p>
                                        <h3>QORINATUL HASINAH, Yogyakarta</h3>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="bx-controls bx-has-controls-direction">
                            <div class="bx-controls-direction">
                                <a class="bx-prev" href>
                                    <i>Prev</i>
                                </a>
                                <a class="bx-next" href>
                                    <i>Next</i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="payment wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
        <div class="container">
            <h1 class="block__title text-center">Dukungan Metode Pembayaran</h1>
            <div class="row mt-lg-5 mt-4">
                <div class="text-center">
                    <img class="payment__logo" src="https://tripay.id/img/icon/banks/bri.png">
                    <img class="payment__logo" src="https://tripay.id/img/icon/banks/bni.png">
                    <img class="payment__logo" src="https://tripay.id/img/icon/banks/bca.png">
                    <img class="payment__logo" src="https://tripay.id/img/icon/banks/mandiri.png">
                    <img class="payment__logo" src="https://tripay.id/img/icon/banks/jenius.png">
                    <img class="payment__logo" src="https://tripay.id/img/icon/banks/paypal.png">
                    <img class="payment__logo" src="https://tripay.id/img/icon/banks/gopay.png">
                    <img class="payment__logo" src="https://tripay.id/img/icon/banks/ovo.png">
                    <img class="payment__logo" src="https://tripay.id/img/icon/banks/coinpayment.png">
                    <img class="payment__logo" src="https://tripay.id/img/icon/banks/alfamart.png">
                    <img class="payment__logo" src="https://tripay.id/img/icon/banks/indomaret.png">
                </div>
            </div>
        </div>
    </section>

    <section class="faq wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
        <div class="container mt-5 pt-5">
            <h1 class="block__title text-center">Bantuan(FAQ)</h1>
            <h6>Hal yang sering ditanyakan</h6>
            <div id="accordion" class="mt-lg-5 mt-3 faq__accordion">
                <div class="card">
                    <div class="card-header" id="heading0">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed panel-title" data-toggle="collapse" data-target="#collapse0" aria-expanded="false" aria-controls="collapse0">
                                <span class="text-tripay mr-2">1.</span> Bagaimana cara bertransaksi di Tripay.id ?
                            </button>
                        </h5>
                    </div>
                    <div id="collapse0" class="collapse" aria-labelledby="heading0" data-parent="#accordion">
                        <div class="card-body">
                            Untuk melakukan transaksi di Tripay.id anda cukup melakukan registrasi, aktivasi akun, lalu deposit ke akun Tripay anda , dan setelah itu anda bisa melakukan transaksi dengan mudah di Tripay.id
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="heading1">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed panel-title" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                                <span class="text-tripay mr-2">2.</span> Sistem Pembayaran apa yang digunakan Tripay.id?
                            </button>
                        </h5>
                    </div>
                    <div id="collapse1" class="collapse" aria-labelledby="heading1" data-parent="#accordion">
                        <div class="card-body">
                            Kami menerapkan sistem deposit yang di mana agen/member melakukan pengisian saldo untuk dapat bertransaksi pulsa di Tripay.id.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="heading2">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed panel-title" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                <span class="text-tripay mr-2">3.</span> Apakah ada batasan jumlah deposit saldo ?
                            </button>
                        </h5>
                    </div>
                    <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordion">
                        <div class="card-body">
                            Kami tidak membatasi jumlah deposit saldo anda, anda dapat melakukan deposit saldo sesuai keinginan anda.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="heading3">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed panel-title" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                <span class="text-tripay mr-2">4.</span> Jalur Transaksi apa yang digunakan ?
                            </button>
                        </h5>
                    </div>
                    <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordion">
                        <div class="card-body">
                            Saat ini kami menyediakan jalur transaksi online (website) &amp; Transaksi via API.
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5 mb-4">
                <button type="button" class="btn btn__icon" onclick="window.open('https://tripay.id/faq', '_self')">Lihat Semua</button>
            </div>
        </div>
    </section>

    <section class="contac">
        <div class="container">
            <h1 class="block__title">Hubungi Kami</h1>
            <div class="row">
                <div class="col-lg-7 col-12 wow slideInLeft" style="visibility: visible;">
                    <div class="contac__information">
                        Jika ada pertanyaan, Pengaduan, Kritik, dan Saran silahkan kirimkan pesan Anda melalui form di bawah ini.
                        </div>
                    <form class="contac__form" id="customerSupport">
                        <div class="form-row" style="display: flex;">
                            <div class="form-group col-md-5">
                                <input type="text" id="cs-name" name="name" value="" class="form-control" placeholder="Masukkan Nama Anda*">
                            </div>
                            <div class="form-group col-md-5 offset-md-1">
                                <input type="number" id="cs-phone" name="phone" value="" class="form-control" placeholder="Masukkan Nomor Handphone*">
                            </div>
                        </div>
                        <div class="form-row mt-n1 mt-lg-0">
                            <div class="form-group col-md-5">
                                <input type="text" id="cs-subject" name="subject" value="" class="form-control" placeholder="Masukkan Subject*">
                            </div>
                            <div class="form-group col-md-5 offset-md-1">
                                <input type="text" id="cs-email" name="email" value="" class="form-control" placeholder="Masukkan Alamat Email*">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-11">
                                <textarea class="form-control" id="cs-message" name="message" value="" placeholder="Masukkan Isi Pesan Anda*" rows="3"></textarea>
                            </div>
                        </div>
                        <button type="button" onclick="csMessageSend();" class="btn btn-tripay mt-4 mb-5 mb-lg-0">
                            Kirim Pesan
                        </button>
                    </form>
                </div>
                <div class="col-lg-5 col-12 wow slideInRight" style="visibility: visible;">
                    <div class="d-flex mt-4">
                        <div class="contac__img">
                            <img src="https://tripay.id/assets/images/icon/maps.png">
                        </div>
                        <div class="flex-column">
                            <div class="contac__information-title">
                                Alamat
                            </div>
                            <div class="contac__information-subtitle">
                                Dsn. Ngompak 2, RT.003/RW.003, Ds.Cepoko, Kec.Ngrambe, Ngawi, Jawa Timur
                            </div>
                        </div>
                    </div>
                    <div class="d-flex mt-4">
                        <div class="contac__img">
                            <img src="https://tripay.id/assets/images/icon/email.png">
                        </div>
                        <div class="flex-column">
                            <div class="contac__information-title">
                                Email
                            </div>
                            <div class="contac__information-subtitle">
                                cs@tripay.co.id
                            </div>
                        </div>
                    </div>
                    <div class="d-flex mt-4">
                        <div class="contac__img">
                            <img src="https://tripay.id/assets/images/icon/phone.png">
                        </div>
                        <div class="flex-column">
                            <div class="contac__information-title">
                                Hotline Kami
                            </div>
                            <div class="contac__information-subtitle">
                                +6282234444413
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- <h1 class="h1-all">Ayo Jualan Pulsa Elektrik</h1>
    <div style="margin-bottom: 500px">
        Space-Enter
    </div> -->
@endsection