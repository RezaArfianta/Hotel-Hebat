<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="assets/ui/image/favicon.png" type="image/png">
        <title>Our Hotel</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/ui/css/bootstrap.css">
        <link rel="stylesheet" href="assets/ui/vendors/linericon/style.css">
        <link rel="stylesheet" href="assets/ui/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/ui/vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/ui/vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css">
        <link rel="stylesheet" href="assets/ui/vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="assets/ui/vendors/owl-carousel/owl.carousel.min.css">
        <!-- main css -->
        <link rel="stylesheet" href="assets/ui/css/style.css">
        <link rel="stylesheet" href="assets/ui/css/responsive.css">
    </head>
    <body>
        <!--================Header Area =================-->
        <header class="header_area">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="assets/ui/index.html">HOTEL HEBAT</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li> 
                            <li class="nav-item"><a class="nav-link" href="about.html">About us</a></li>
                            <li class="nav-item"><a class="nav-link" href="gallery.html">Gallery</a></li>
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Staff</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="#">Admin</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">Receptionist</a></li>
                                </ul>
                            </li> 
                        </ul>
                    </div> 
                </nav>
            </div>
        </header>
        <!--================Header Area =================-->
        
        <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="booking_table d_flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content text-center">
						<h6>Away from monotonous life</h6>
						<h2>HOTEL HEBATMU</h2>
						<p>Nikmatilah liburan anda dengan fasilitas hotel kami.<br></p>
                        <a class="btn theme_btn button_hover" onclick="smoothScroll(document.getElementById('formpesan'))">Pesan Kamar</a>
                        <script src="assets/ui/js/file.js"></script>
					</div>
				</div>
            </div>
            <div class="hotel_booking_area position">
                <div class="container">
                    <div class="hotel_booking_table">
                        <div class="col-md-3">
                            <h2>Book<br> Your Room</h2>
                        </div>
                        <div class="col-md-9">
                            <div class="boking_table">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="book_tabel_item">
                                            <div class="form-group">
                                                <div class='input-group date' id='datetimepicker11'>
                                                    <input type='text' class="form-control" placeholder="Arrival Date"/>
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class='input-group date' id='datetimepicker1'>
                                                    <input type='text' class="form-control" placeholder="Departure Date"/>
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="book_tabel_item">
                                            <div class="input-group">
                                                <select class="wide">
                                                    <option data-display="Rooms">Number of Rooms</option>
                                                    <option value="1">Room 01</option>
                                                    <option value="2">Room 02</option>
                                                    <option value="3">Room 03</option>
                                                </select>
                                            </div>
                                            <a class="book_now_btn button_hover" href="#">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================Banner Area =================-->
        
        <!--================ Accomodation Area  =================-->
        <section class="accomodation_area section_gap">
            <div class="container">
                <div class="section_title text-center">
                    <h2 class="title_color">Hotel Accomodation</h2>
                    <p>We all live in an age that belongs to the young at heart. Life that is becoming extremely fast, </p>
                </div>
                <div class="row mb_30">
                    <div class="col-lg-3 col-sm-6">
                        <div class="accomodation_item text-center">
                            <div class="hotel_img">
                                <img src="assets/ui/image/room1.jpg" alt="">
                                <a href="#" class="btn theme_btn button_hover" onclick="smoothScroll(document.getElementById('formpesan'))">Book Now</a>
                            </div>
                            <a href="#"><h4 class="sec_h4">Double Deluxe Room</h4></a>
                            <h5>IDR 250K<small>/night</small></h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="accomodation_item text-center">
                            <div class="hotel_img">
                                <img src="assets/ui/image/room2.jpg" alt="">
                                <a href="#" class="btn theme_btn button_hover" onclick="smoothScroll(document.getElementById('formpesan'))">Book Now</a>
                            </div>
                            <a href="#"><h4 class="sec_h4">Single Deluxe Room</h4></a>
                            <h5>IDR 500K<small>/night</small></h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="accomodation_item text-center">
                            <div class="hotel_img">
                                <img src="assets/ui/image/room3.jpg" alt="">
                                <a href="#" class="btn theme_btn button_hover" onclick="smoothScroll(document.getElementById('formpesan'))">Book Now</a>
                            </div>
                            <a href="#"><h4 class="sec_h4">Honeymoon Suit</h4></a>
                            <h5>IDR 750K<small>/night</small></h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="accomodation_item text-center">
                            <div class="hotel_img">
                                <img src="assets/ui/image/room4.jpg" alt="">
                                <a href="#" class="btn theme_btn button_hover" onclick="smoothScroll(document.getElementById('formpesan'))">Book Now</a>
                            </div>
                            <a href="#"><h4 class="sec_h4">Economy Double</h4></a>
                            <h5>IDR 200K<small>/night</small></h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================ Accomodation Area  =================-->
        
        <!--================ Facilities Area  =================-->
        <section class="facilities_area section_gap">
            <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="">  
            </div>
            <div class="container">
                <div class="section_title text-center">
                    <h2 class="title_w">Royal Facilities</h2>
                    <p>Who are in extremely love with eco friendly system.</p>
                </div>
                <div class="row mb_30">
                    <div class="col-lg-4 col-md-6">
                        <div class="facilities_item">
                            <h4 class="sec_h4"><i class="lnr lnr-dinner"></i>Restaurant</h4>
                            <p>Nikmatilah makanan dan minuman di Restoran Top Class kami.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="facilities_item">
                            <h4 class="sec_h4"><i class="lnr lnr-bicycle"></i>Sports CLub</h4>
                            <p>Sports Club kami dilengkapi dengan fasilitas untuk semua bidang olahraga.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="facilities_item">
                            <h4 class="sec_h4"><i class="lnr lnr-shirt"></i>Swimming Pool</h4>
                            <p>Segarkan kembali tubuh anda dengan fasilitas kolam renang kami.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="facilities_item">
                            <h4 class="sec_h4"><i class="lnr lnr-car"></i>Rent a Car</h4>
                            <p>Kami merentalkan mobil untuk seluruh pengunjung hotel kami.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="facilities_item">
                            <h4 class="sec_h4"><i class="lnr lnr-construction"></i>Gymnesium</h4>
                            <p>Nikmatilah fasilitas lengkap yang terdapat di Gym kami.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="facilities_item">
                            <h4 class="sec_h4"><i class="lnr lnr-coffee-cup"></i>Bar</h4>
                            <p>Bar hotel kami dilengkapi dengan seluruh minuman kesukaan anda.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================ Facilities Area  =================-->
        
        <!--================ About History Area  =================-->
        <section class="about_history_area section_gap">
            <div class="container">
                <div class="row" id="formpesan">
                    <div class="col-md-6 d_flex align-items-center">
                        <div class="about_content ">
                            <h2 class="title title_color">Form Pemesanan</h2>
                            <form action="" method="POST" enctype="multipart/form-data">
                                <input type='text' id='nama_pemesanan' name="" class="form-control" placeholder="Nama Pemesan"/>
                                <input type='text' id='email' name ="" class="form-control" placeholder="Email"/>
                                <input type='text' id='no_hp' name ="" class="form-control" placeholder="No. Handphone"/>
                                <input type='text' id='nama_tamu' name ="" class="form-control" placeholder="Nama Tamu"/>
                                <select class="input-group">
                                    <option data-display="Tipe Kamar">Room Type</option>
                                    <option name="1">Double Deluxe</option>
                                    <option name="2">Single Deluxe</option>
                                    <option name="3">Honeymoon Suit</option>
                                    <option name="4">Economy Double</option>
                                </select>
                                <input type='number' id='jumlah_tamu' name ="" class="form-control" placeholder="Jumlah Kamar"/>
                                <button type="submit" class="form-control">Konfirmasi Pemesanan</button>  
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img class="img-fluid" src="assets/ui/image/about_bg.jpg" alt="img">
                    </div>
                </div>
            </div>
        </section>
        <!--================ About History Area  =================-->
        
        <!--================ Testimonial Area  =================-->
        <section class="testimonial_area section_gap">
            <div class="container">
                <div class="section_title text-center">
                    <h2 class="title_color">Testimonial from our Clients</h2>
                    <p>The French Revolution constituted for the conscience of the dominant aristocratic class a fall from </p>
                </div>
                <div class="testimonial_slider owl-carousel">
                    <div class="media testimonial_item">
                        
                        <div class="media-body">
                            <p>Kenyamanan Hotel ini salah satu yang terbaik!</p>
                            <a href="#"><h4 class="sec_h4">Abdur Bobob</h4></a>
                            <div class="star">
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star-half-o"></i></a>
                            </div>
                        </div>
                    </div>    
                    <div class="media testimonial_item">
                        
                        <div class="media-body">
                            <p>Lokasi strategis yang hotel ini miliki, sangat memudahkan bagi pengunjung untuk menikmati wisata-wisata terdekat</p>
                            <a href="#"><h4 class="sec_h4">Diego Dwitona</h4></a>
                            <div class="star">
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star-half-o"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="media testimonial_item">
                        
                        <div class="media-body">
                            <p>Sangat puas dengan pelayanan Hotel Hebat!</p>
                            <a href="#"><h4 class="sec_h4">Kevin Napoleon</h4></a>
                            <div class="star">
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star-half-o"></i></a>
                            </div>
                        </div>
                    </div>    
                    <div class="media testimonial_item">
                        <!-- <img class="rounded-circle" src="image/testtimonial-1.jpg" alt=""> -->
                        <div class="media-body">
                            <p>Anak-Anak saya sangat menikmati saat menginap di Hotel Hebat</p>
                            <a href="#"><h4 class="sec_h4">Maria Van Liebert</h4></a>
                            <div class="star">
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star-half-o"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================ Testimonial Area  =================-->
        
    
        <!--================ Recent Area  =================-->
        
        <!--================ start footer Area  =================-->	
        <footer class="footer-area section_gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3  col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6 class="footer_title">About Agency</h6>
                            <p>The world has become so fast paced that people don’t want to stand by reading a page of information, they would much rather look at a presentation and understand the message. It has come to a point </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6 class="footer_title">Navigation Links</h6>
                            <div class="row">
                                <div class="col-4">
                                    <ul class="list_style">
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#">Feature</a></li>
                                        <li><a href="#">Services</a></li>
                                        <li><a href="#">Portfolio</a></li>
                                    </ul>
                                </div>
                                <div class="col-4">
                                    <ul class="list_style">
                                        <li><a href="#">Team</a></li>
                                        <li><a href="#">Pricing</a></li>
                                        <li><a href="#">Blog</a></li>
                                        <li><a href="#">Contact</a></li>
                                    </ul>
                                </div>										
                            </div>							
                        </div>
                    </div>							
                   
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget instafeed">
                            <h6 class="footer_title">InstaFeed</h6>
                            <ul class="list_style instafeed d-flex flex-wrap">
                                <li><img src="assets/ui/image/instagram/Image-01.jpg" alt=""></li>
                                <li><img src="assets/ui/image/instagram/Image-02.jpg" alt=""></li>
                                <li><img src="assets/ui/image/instagram/Image-03.jpg" alt=""></li>
                                <li><img src="assets/ui/image/instagram/Image-04.jpg" alt=""></li>
                                <li><img src="assets/ui/image/instagram/Image-05.jpg" alt=""></li>
                                <li><img src="assets/ui/image/instagram/Image-06.jpg" alt=""></li>
                                <li><img src="assets/ui/image/instagram/Image-07.jpg" alt=""></li>
                                <li><img src="assets/ui/image/instagram/Image-08.jpg" alt=""></li>
                            </ul>
                        </div>
                    </div>						
                </div>
                <div class="border_line"></div>
                <div class="row footer-bottom d-flex justify-content-between align-items-center">
                    <p class="col-lg-8 col-sm-12 footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    <div class="col-lg-4 col-sm-12 footer-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-behance"></i></a>
                    </div>
                </div>
            </div>
        </footer>
		<!--================ End footer Area  =================-->
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="assets/ui/js/jquery-3.2.1.min.js"></script>
        <script src="assets/ui/js/popper.js"></script>
        <script src="assets/ui/js/bootstrap.min.js"></script>
        <script src="assets/ui/vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="assets/ui/js/jquery.ajaxchimp.min.js"></script>
        <script src="assets/ui/js/mail-script.js"></script>
        <script src="assets/ui/vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js"></script>
        <script src="assets/ui/vendors/nice-select/js/jquery.nice-select.js"></script>
        <script src="assets/ui/js/mail-script.js"></script>
        <script src="assets/ui/js/stellar.js"></script>
        <script src="assets/ui/vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="assets/ui/js/custom.js"></script>
        
    </body>
</html>