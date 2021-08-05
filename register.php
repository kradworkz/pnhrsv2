<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>14th  PNHRS Week</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Health R and D in the New Normal : Moving towards universal health care" name="description" />
        <meta content="kradyfatty" name="author" />
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        <link rel="stylesheet" href="assets/libs/owl.carousel/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/libs/owl.carousel/assets/owl.theme.default.min.css">
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" rel="stylesheet" type="text/css" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" rel="stylesheet" type="text/css" />
        <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/vue-slick-carousel@1.0.6/dist/vue-slick-carousel.umd.min.js"></script>
        <script src="js/latest.js"></script>
        <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v11.0&appId=258059077674129&autoLogAppEvents=1" nonce="KXzFAhvD"></script>
    </head>

    <body data-bs-spy="scroll" data-bs-target="#topnav-menu" data-bs-offset="60">
        <div id="sg1">
            <?php require_once("includes/modal.php"); ?>
            <?php require_once("includes/navigation2.php"); ?>

            <section class="section hero-section bg-ico-hero" id="home" style="height: 100vh;" >

            <div class="bg-overlay bg-info"></div>
            <div class="container">

                <div class="row align-items-center" >
                    <div class="col-lg-12 mb-5" style="margin-top: -130px;" v-if="!isMobile()">
                        <div style="float: right;">
                            <ul class="list-inline user-chat-nav text-right" style="margin-top: 10px; float: right;">
                                <li class="list-inline-item" style="margin-right: -30px;">
                                <img src="assets/images/krad/pnhrs.jpg" alt="" class="rounded" style="width: 80%; height: auto;">
                                </li>
                                <li class="list-inline-item">
                                <img src="assets/images/krad/dost.png" alt="" class="rounded avatar-sm" style="height: 2rem; width: 2rem;">
                                </li>
                                <li class="list-inline-item">
                                    <img src="assets/images/krad/pchrd.png" alt="" class="rounded avatar-sm" style="height: 2rem; width: 2rem;">
                                </li>
                                <li class="list-inline-item">
                                    <img src="assets/images/krad/zchrd.png" alt="" class="rounded avatar-sm" style="height: 2rem; width: 2rem;">
                                </li>
                                <li class="list-inline-item">
                                    <img src="assets/images/krad/ched.png" alt="" class="rounded avatar-sm" style="height: 2rem; width: 2rem;">
                                </li>
                                <li class="list-inline-item">
                                    <img src="assets/images/krad/up.png" alt="" class="rounded avatar-sm" style="height: 2rem; width: 2rem;">
                                </li>
                                <li class="list-inline-item">
                                <img src="assets/images/krad/doh.png" alt="" class="rounded avatar-sm" style="height: 2rem; width: 2rem;">
                                </li>
                            </ul>
                        </div>
                        <div class="text-white-50" style="cursor: pointer;" @click="desc('title')">
                            <h1 class="text-white fw-semibold mb-2"><p style="font-size : 18px; color: #ffd311; text-shadow: 1px 1px 1px #404040;">Health R&D in the New Normal :</p><p style="font-size : 26px; color: #ff2960; text-shadow: 1px 1px 2px #000000; margin-top: -15px;"> Moving towards Universal Health Care</p></h1>
                            <p style="margin-top: -12px;  text-shadow: 1px 1px 1px #000000;"><span class="font-size-13 text-white" style="margin-right: 20px;"><i class='bx bx-calendar'></i> August 09-13, 2021 </span>
                            <span class="font-size-13 text-white"><i class='bx bx-map-pin'></i> Zamboanga City</span></p>
                        </div>
                    </div>
                    <div v-else style="margin-top: -40px;">
                        <ul class="list-inline user-chat-nav text-right">
                            <li class="list-inline-item" style="margin-bottom: 10px;">
                            <img src="assets/images/krad/pnhrs.jpg" alt="" class="rounded" style="width: 100%; height: auto;">
                            </li>
                            <br>
                            <li class="list-inline-item">
                            <img src="assets/images/krad/dost.png" alt="" class="rounded avatar-sm" style="height: 2rem; width: 2rem;">
                            </li>
                            <li class="list-inline-item">
                                <img src="assets/images/krad/pchrd.png" alt="" class="rounded avatar-sm" style="height: 2rem; width: 2rem;">
                            </li>
                            <li class="list-inline-item">
                                <img src="assets/images/krad/zchrd.png" alt="" class="rounded avatar-sm" style="height: 2rem; width: 2rem;">
                            </li>
                            <li class="list-inline-item">
                                <img src="assets/images/krad/ched.png" alt="" class="rounded avatar-sm" style="height: 2rem; width: 2rem;">
                            </li>
                            <li class="list-inline-item">
                                <img src="assets/images/krad/up.png" alt="" class="rounded avatar-sm" style="height: 2rem; width: 2rem;">
                            </li>
                            <li class="list-inline-item">
                            <img src="assets/images/krad/doh.png" alt="" class="rounded avatar-sm" style="height: 2rem; width: 2rem;">
                            </li>
                        </ul>
                        <br>
                        <h6 class="text-white fw-semibold mb-2"><p style="font-size : 18px; color: #ffd311; text-shadow: 1px 1px 1px #404040;">Health R&D in the New Normal :</p><p style="font-size : 26px; color: #ff2960; text-shadow: 1px 1px 2px #000000; margin-top: -15px;"> Moving towards Universal Health Care</p></h6>
                        <p style="margin-top: -12px;  text-shadow: 1px 1px 1px #000000;"><span class="font-size-13 text-white" style="margin-right: 20px;"><i class='bx bx-calendar'></i> August 09-13, 2021 </span>
                        <span class="font-size-13 text-white"><i class='bx bx-map-pin'></i> Zamboanga City</span></p>
                    </div>
                </div>

                <div class="row align-items-center" style="margin-top: 20px;" v-if="!isMobile()">
                    <div class="col-lg-4">
                        <div class="text-white-50">
                            <div class="" style="cursor: pointer;" @click="desc('logo')">
                                <img src="assets/images/krad/logo.png" class="img-fluid" alt="Responsive image" style="max-width: 85%; height: auto;">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <vue-slick-carousel :autoplay="true" :autoplaySpeed="10000" :dots="true" :options="slickOptions">
                        
                            <div class="slide-1">
                                <div class="text-white-50">
                                    <h4 class="gratext fw-semibold mb-4">Satellite Sessions :</h4><hr>
                                    <div v-for="(list,index) in lists2.first" v-bind:key="list.index" class="text-white mt-2 para" style="cursor:pointer">
                                        <span class="first mb-2 text-truncate" >- &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;{{ list.date }} (<span class="font-size-12">{{list.time}}</span>)</span> <span @click="openmodal(list.link)"><i class='bx bxs-caret-right-circle text-warning'></i> {{list.title}}</span>
                                    </div>
                                </div>
                            </div>

                            <div class="slide-2">
                                <div class="text-white-50">
                                
                                    <h4 class="gratext fw-semibold">Pre-Conference Sessions : </h4>
                                    <div style="float: right; margin-left: 30px; margin-bottom: -20px; margin-top: -20px;">
                                        <span class="font-size-12 para text-white"><i class='bx bxs-calendar text-danger'></i> August 09, 2021</span> &nbsp;&nbsp;&nbsp;&nbsp;
                                        <span class="font-size-12 para text-white"><i class='bx bxs-calendar text-warning'></i> August 10, 2021</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <span class="font-size-12 para text-white"><i class='bx bxs-calendar text-success'></i> August 11, 2021</span>
                                    </div>
                                    <hr> 
                                    <div v-for="(list,index) in lists2.fourth" v-bind:key="list.index" class="text-white mt-2 para" style="cursor:pointer">
                                        <span @click="openmodal1(list.link)" style="cursor:pointer"><i :class="'bx bxs-caret-right-circle text-'+list.color"></i> {{list.title}} <span v-if="list.option != ''" class="badge bg-danger text-white"> By Invitation Only</span></span>
                                    </div>
                                </div>
                            </div>

                            <div class="slide-3">
                                <div class="text-white-50">
                                
                                    <h4 class="gratext fw-semibold">Main Conference Sessions : </h4>
                                    <div style="float: right; margin-left: 30px; margin-bottom: -20px; margin-top: -20px;">
                                        <span class="font-size-12 para text-white"><i class='bx bxs-calendar text-warning'></i> Day 1</span> &nbsp;&nbsp;&nbsp;&nbsp;
                                        <span class="font-size-12 para text-white"><i class='bx bxs-calendar text-danger'></i> Day 2</span>
                                    </div>
                                    <hr> 
                                    <div v-for="(list,index) in lists2.fifth" v-bind:key="list.index" class="text-white mt-2 para" style="cursor:pointer">
                                        <span @click="openmodal1(list.link)"><i :class="'bx bxs-caret-right-circle text-'+list.color"></i> {{list.title}}</span>
                                    </div>
                                </div>
                            </div>

                        </vue-slick-carousel>
                    </div>
                </div>
                <div class="row align-items-center" style="margin-top: 20px;" v-else>
                    <div class="col-lg-12">
                        <div class="text-white-50">
                            <div class="" style="cursor: pointer;" @click="desc('logo')">
                                <img src="assets/images/krad/logo.png" class="img-fluid" alt="Responsive image" style="max-width: 100%; height: auto;">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
                        
            </section>
            <section class="section bg-white" id="about">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12 mb-1">
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <div class="row">
                                    <div class="col-md-1">
                                    <i class='bx bx-lg bxs-alarm-exclamation bx-tada mr-4' ></i>
                                    </div>
                                    <div class="col-md-11" style="margin-top: 5px;">
                                        You may register by clicking the session/s you wish to attend. Please note the you are free to register for multiple sessions. <br>Zoom webinar and session details will be sent upon receipt of the accomplished registration form/s.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 mb-3">
                            <div class="blog-box mb-4 mb-xl-0">
                                <div class="mt-4 text-muted">
                                    <h5 class="text-primary mb-0"><i class="bx bx-news me-1"></i> SATELLITE SESSIONS (03 -06 August 2021)</h5>
                                    <div class="table-responsive mt-3" style="cursor:pointer">
                                        <table class="table table-centered table-nowrap table-hover mb-0">
                                            <tbody>
                                                <tr v-for="(list,index) in lists2.first" v-bind:key="list.index">
                                                    <td @click="openmodal1(list)"><span class="font-size-12" style="margin-left: 15px; float:left; width: 110px;"><i class="bx bx-calendar me-1"></i>  {{list.date}}</span><span class="font-size-12" style="margin-left: 40px; float:left; width: 150px;"><i class="bx bx-time me-1"></i>  {{list.time}}</span><i class="mdi mdi-circle-medium text-warning me-1"></i><span style="font-weight: 600;">{{ list.title}}</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                
                        <div class="col-xl-12 mb-3">
                            <div class="blog-box mb-4 mb-xl-0">
                                <div class="mt-4 text-muted">
                                    <h5 class="text-danger mb-0"><i class="bx bx-news me-1"></i> PRE-CONFERENCE SESSIONS (09 -11 August 2021)</h5>
                                    <div v-for="(list,index) in lists2.second" v-bind:key="list.id" class="text-muted mt-4" style="cursor:pointer">
                                        <h6 style="margin-top: 30px; margin-left: 30px;" class="text-primary mb-0"><i class="bx bx-calendar me-1"></i> {{ dates[index] }}</h6><br>
                                        <table  style="margin-top: -15px;" class="table table-centered table-nowrap table-hover mb-0">
                                            <tr v-for="(l,index) in list" v-bind:key="l.index">
                                                <td @click="openmodal1(l)"><span class="font-size-12" style="margin-left: 40px; float:left; width: 150px;"><i class="bx bx-time me-1"></i>{{l.time}}</span><i class="mdi mdi-circle-medium text-warning me-1"></i><span style="font-weight: 600;">{{ l.title}}</span> &nbsp; <span v-if="l.option != ''" class="badge bg-danger text-white"> By Invitation Only</span></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-12">
                            <div class="blog-box mb-4 mb-xl-0">
                                <div class="mt-4 text-muted" style="cursor:pointer">
                                    <h5 class="text-warning mb-0"><i class="bx bx-news me-1"></i> MAIN CONFERENCE SESSIONS (12 -13 August 2021)</h5>
                                    <br><button @click="views('d1')" type="button" class="btn btn-outline-primary waves-effect waves-light">Day 1</button>
                                    <button @click="views('d2')" type="button" class="btn btn-outline-primary waves-effect waves-light">Day 2</button>
                                    <br><br>
                                    <table v-if="d1 == true" class="table table-centered table-nowrap table-hover mb-0">
                                        <tr v-for="(l,index) in lists2.third[0]" v-bind:key="l.index">
                                            <td @click="openmodal1(l)"><span class="font-size-12" style="margin-left: 40px; float:left; width: 150px;"><i class="bx bx-time me-1"></i>{{l.time}}</span><i class="mdi mdi-circle-medium text-warning me-1"></i><span style="font-weight: 600;">{{ l.title}}</span></td>
                                        </tr>
                                    </table>
                                    <table v-if="d2 == true" class="table table-centered table-nowrap table-hover mb-0">
                                        <tr v-for="(l,index) in lists2.third[1]" v-bind:key="l.index">
                                            <td @click="openmodal1(l)"><span class="font-size-12" style="margin-left: 40px; float:left; width: 150px;"><i class="bx bx-time me-1"></i>{{l.time}}</span><i class="mdi mdi-circle-medium text-warning me-1"></i><span style="font-weight: 600;">{{ l.title}}</span></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
        
            <footer class="landing-footer">
                <div class="container">
                    <div class="row" style="margin-top: -30px;">
                        <div class="col-lg-6">
                            <div class="mb-4">
                                <img src="assets/images/logo-light.png" alt="" height="20">
                            </div>

                            <p class="mb-2"><script>document.write(new Date().getFullYear())</script> © PNHRS. Developed by DOST-IX</p>
                        </div>
                        <div class="col-lg-6">
                            <div style="float: right;">
                                <div class="fb-page" 
                                data-href="https://www.facebook.com/DOSTRegion9"
                                data-width="380" 
                                data-hide-cover="false"
                                data-show-facepile="false">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>


            <script src="assets/libs/jquery/jquery.min.js"></script>
            <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
            <script src="assets/libs/metismenu/metisMenu.min.js"></script>
            <script src="assets/libs/simplebar/simplebar.min.js"></script>
            <script src="assets/libs/node-waves/waves.min.js"></script>
            <script src="assets/libs/jquery.easing/jquery.easing.min.js"></script>
            <script src="assets/libs/jquery-countdown/jquery.countdown.min.js"></script>
            <script src="assets/libs/owl.carousel/owl.carousel.min.js"></script>
            <script src="assets/js/pages/ico-landing.init.js"></script>
            <script src="assets/js/app.js"></script>
            <script>
            var heightSlider = $('.hero-section').height();
            if(heightSlider < 250){
                $('.hero-section').css({ paddingTop : '230px' });
            }else if(heightSlider < 420){
                $('.hero-section').css({ paddingTop : '265px' });
            }else{
                $('.hero-section').css({ paddingTop : '300px' });
            }

            $(window).resize(function(){
                var heightSlider = $('.hero-section').height();
                if(heightSlider < 250){
                    $('.hero-section').css({ paddingTop : '230px' });
                }else if(heightSlider < 420){
                    $('.hero-section').css({ paddingTop : '2650px' });
                }else{
                    $('.hero-section').css({ paddingTop : '300px' });
                }
            });
        </script>
            <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet' defer>
        </div>
    </body>
    
</html>
