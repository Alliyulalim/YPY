<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Artikel</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/css/owl.carousel.min.css">
    <link rel="stylesheet" href="asset/css/magnific-popup.css">
    <link rel="stylesheet" href="asset/css/font-awesome.min.css">
    <link rel="stylesheet" href="asset/css/themify-icons.css">
    <link rel="stylesheet" href="asset/css/nice-select.css">
    <link rel="stylesheet" href="asset/css/flaticon.css">
    <link rel="stylesheet" href="asset/css/gijgo.css">
    <link rel="stylesheet" href="asset/css/animate.css">
    <link rel="stylesheet" href="asset/css/slicknav.css">
    <link rel="stylesheet" href="asset/css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <style>
        html,
body {
  -moz-box-sizing: border-box;
       box-sizing: border-box;
  height: 100%;
  width: 100%;
  background: #FFF;
  font-family: 'Roboto', sans-serif;
  font-weight: 400;
}

.wrapper {
  display: table;
  height: 100%;
  width: 100%;
}

.container-fostrap {
  display: table-cell;
  padding: 1em;
  text-align: center;
  vertical-align: middle;
}
.fostrap-logo {
  width: 100px;
  margin-bottom:15px
}
h1.heading {
  color: #fff;
  font-size: 1.15em;
  font-weight: 900;
  margin: 0 0 0.5em;
  color: #505050;
}
@media (min-width: 450px) {
  h1.heading {
    font-size: 3.55em;
  }
}
@media (min-width: 760px) {
  h1.heading {
    font-size: 3.05em;
  }
}
@media (min-width: 900px) {
  h1.heading {
    font-size: 3.25em;
    margin: 0 0 0.3em;
  }
}
.card {
  display: block;
    margin-bottom: 20px;
    line-height: 1.42857143;
    background-color: #fff;
    border-radius: 2px;
    box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);
    transition: box-shadow .25s;
}
.card:hover {
  box-shadow: 0 8px 17px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
}
.img-card {
  width: 100%;
  height:200px;
  border-top-left-radius:2px;
  border-top-right-radius:2px;
  display:block;
    overflow: hidden;
}
.img-card img{
  width: 100%;
  height: 200px;
  object-fit:cover;
  transition: all .25s ease;
}
.card-content {
  padding:15px;
  text-align:left;
}
.card-title {
  margin-top:0px;
  font-weight: 700;
  font-size: 1.65em;
}
.card-title a {
  color: #000;
  text-decoration: none !important;
}
.card-read-more {
  border-top: 1px solid #D4D4D4;
}
.card-read-more a {
  text-decoration: none !important;
  padding:10px;
  font-weight:600;
  text-transform: uppercase
}
    </style>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div class="header-top_area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-md-12 col-lg-8">
                            <div class="short_contact_list">
                                <ul>
                                    <li><a href="#"> <i class="fa fa-phone"></i> (022) 5401-334</a></li>
                                    <li><a href="#"> <i class="fa fa-envelope"></i>mail@pantiyatim.or.id</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6 col-lg-4">
                            <div class="social_media_links d-none d-lg-block">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-3">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="img/logo.png" alt="" >
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9">
                            <div class="main-menu">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="{{ route('beranda') }}">Beranda</a></li>
                                        <li><a href="{{ route('sejarah') }}">Sejarah</a></li>
                                                <li><a href="{{ route('kegiatan') }}">Artikel</a></li>
                                        </li>
                                        <li><a href="{{ route('kontak') }}">Kontak</a></li>
                                    </ul>
                                </nav>
                                <div class="Appointment">
                                    <div class="book_btn d-none d-lg-block">
                                        <a href="{{ route('donasi') }}">AYO Donasi</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <!-- bradcam_area_start  -->
    <div class="bradcam_area breadcam_bg overlay d-flex align-items-center justify-content-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>Artikel</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bradcam_area_end  -->


        <!--================Blog Area =================-->
        <section class="blog_area section-padding">
            {{-- <div class="container">
                <div class="row">
                    <div class="col-lg-6">

                        <div class="row row-cols-1 row-cols-md-4 g">
                            @foreach ($kegiatan as $data)
                            <article class="blog_item">
                                <div class="blog_item_img">
                                    <img src="{{ $data->image() }}" alt="" style="width:200px; height:200px;"
                                            alt="image">
                                    <a href="#" class="blog_item_date">
                                        <h3>{{ $data->tgl_kegiatan }}</h3>
                                        <p>jan</p>
                                    </a>
                                </div>


                                <div class="blog_details">
                                    <a class="d-inline-block">
                                        <h2>{{ $data->judul }}</h2>
                                    </a>
                                    <p>{{ $data->isi }}</p>

                                </div>
                            </article>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="container">
        <div class="section-title">
            <center><li><h2>Artikel</h2></li></center>
        </div>
        <div class="container">
                <div class="row">
            @foreach ($kegiatan as $data)
                    <div class="col-xs-12 col-sm-4">
                        <div class="card">
                            <a class="img-card" href="">
                            <img src="{{ $data->image() }}" />
                          </a>
                            <div class="card-content">
                                <h4 class="card-title">
                                    <a href="">
                                        {{ $data->judul }}
                                  </a>
                                </h4>
                                <p class="">
                                    {{($data->isi)}}
                                </p>
                            </div>
                            <div class="card-read-more">
                                <a href="" class="btn btn-link btn-block">
                                    <center><small class="text-muted">{{date('d-m-Y', strtotime($data->tgl_kegiatan)) }}</small></center>
                                </a>
                            </div>
                        </div>
                    </div>
            @endforeach

                </div>
            </div>
        {{-- <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($kegiatan as $data)
                <div class="col">
                    <div class="card h-80"  style="box-shadow: 0px 10px 10px 0px rgb(34 34 34 / 7%);">
                        <img src="{{ $data->image() }}" alt="" style="width:535px; height:235px;" alt="image"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title" style="padding:20px"><b>{{ $data->judul }}</b></h5>
                            <p>{{($data->isi)}}</p>

                        </div>
                        <div class="card-footer">
                           <center><small class="text-muted">{{date('d-m-Y', strtotime($data->tgl_kegiatan)) }}</small></center>
                        </div>



                    </div><br>
                </div>
            @endforeach
             </div> --}}
        <br>
        <br>
        </section>
        <!--================Blog Area =================-->

    <!-- footer_start  -->
    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-lg-4 ">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <a href="#">
                                    <img src="img/footer_logo.png" alt="">
                                </a>
                            </div>
                            <p class="address_text">Lorem ipsum dolor sit amet, <br> consectetur adipiscing elit, sed do <br> eiusmod tempor incididunt ut labore.
                            </p>

                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Services
                            </h3>
                            <ul class="links">
                                <li><a href="#">Donate</a></li>
                                <li><a href="#">Sponsor</a></li>
                                <li><a href="#">Fundraise</a></li>
                                <li><a href="#">Volunteer</a></li>
                                <li><a href="#">Partner</a></li>
                                <li><a href="#">Jobs</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Contacts
                            </h3>
                            <div class="contacts">
                                <p>+2(305) 587-3407 <br>
                                    info@loveuscharity.com <br>
                                    Flat 20, Reynolds Neck, North
                                    Helenaville, FV77 8WS
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Top News
                            </h3>
                            <ul class="news_links">
                                <li>
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="img/news/news_1.png" alt="">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <a href="#">
                                            <h4>School for African
                                                Childrens</h4>
                                        </a>
                                        <span>Jun 12, 2019</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="img/news/news_2.png" alt="">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <a href="#">
                                            <h4>School for African
                                                Childrens</h4>
                                        </a>
                                        <span>Jun 12, 2019</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="row">
                    <div class="bordered_1px "></div>
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                           <center> <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Muhamad alliyul alim</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </p></center>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer_end  -->

    <!-- JS here -->
    <script src="asset/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="asset/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="asset/js/popper.min.js"></script>
    <script src="asset/js/bootstrap.min.js"></script>
    <script src="asset/js/owl.carousel.min.js"></script>
    <script src="asset/js/isotope.pkgd.min.js"></script>
    <script src="asset/js/ajax-form.js"></script>
    <script src="asset/js/waypoints.min.js"></script>
    <script src="asset/js/jquery.counterup.min.js"></script>
    <script src="asset/js/imagesloaded.pkgd.min.js"></script>
    <script src="asset/js/scrollIt.js"></script>
    <script src="asset/js/jquery.scrollUp.min.js"></script>
    <script src="asset/js/wow.min.js"></script>
    <script src="asset/js/nice-select.min.js"></script>
    <script src="asset/js/jquery.slicknav.min.js"></script>
    <script src="asset/js/jquery.magnific-popup.min.js"></script>
    <script src="asset/js/plugins.js"></script>
    <script src="asset/js/gijgo.min.js"></script>

    <!--contact js-->
    <script src="asset/js/contact.js"></script>
    <script src="asset/js/jquery.ajaxchimp.min.js"></script>
    <script src="asset/js/jquery.form.js"></script>
    <script src="asset/js/jquery.validate.min.js"></script>
    <script src="asset/js/mail-script.js"></script>

    <script src="asset/js/main.js"></script>
    <script>
        $('.datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
                rightIcon: '<span class="fa fa-calendar"></span>'
            }
        });

        $('.timepicker').timepicker({
            iconsLibrary: 'fontawesome',
            icons: {
                rightIcon: '<span class="fa fa-clock-o"></span>'
            }
        });
    $(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});
    </script>
</body>
</html>
