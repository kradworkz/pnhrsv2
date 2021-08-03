<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>14th  PNHRS Week</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Health R and D in the New Normal : Moving towards universal health care" name="description" />
        <meta content="01101011 01110010 01100001 01100100" name="author" />
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        <link rel="stylesheet" href="assets/libs/owl.carousel/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/libs/owl.carousel/assets/owl.theme.default.min.css">
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
        <link href="css/main.css" id="app-style" rel="stylesheet" type="text/css" />
        <link href="css/lobby.css" id="app-style" rel="stylesheet" type="text/css" />
        <link href="assets/css/plane.css" id="app-style" rel="stylesheet" type="text/css" />
        <link href="assets/css/main.css" id="app-style" rel="stylesheet" type="text/css" />
        <link href="assets/css/animation.css" id="app-style" rel="stylesheet" type="text/css" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" rel="stylesheet" type="text/css" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" rel="stylesheet" type="text/css" />
        <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/vue-slick-carousel@1.0.6/dist/vue-slick-carousel.umd.min.js"></script>
        <script src="js/latest.js"></script>
    </head>

    <body data-bs-spy="scroll" data-bs-target="#topnav-menu" data-bs-offset="60" >
        <div id="sg1">
            <?php require_once("includes/modal.php"); ?>
            <?php require_once("includes/modal2.php"); ?>
            <?php require_once("includes/navigation.php"); ?>
            <nav v-if="show == true && content != 'island' && content != 'register' && content != 'exhibit'" class="navbar navbar-expand-lg navigation fixed-top sticky">
                <?php require_once("parts/navigation.php"); ?>
            </nav>

            <section v-if="content == 'island'" class="section hero-section" id="home" style="background-color:  #4ea8ff; height: 100vh; overflow: hidden;">
                <?php require_once("parts/landing.php"); ?>
            </section>

            <section v-if="content == 'register'" class="section hero-section bg-ico-hero" id="home" style="height: 100vh;" >
                <?php require_once("parts/register1.php"); ?>
            </section>

            <section v-if="content == 'register'" class="section bg-white" id="about">
                <?php require_once("parts/register2.php"); ?>
            </section>

            <section v-if="content == 'about'" class="section hero-section" id="home" style="background-color:  #4ea8ff;">
                <?php require_once("parts/about1.php"); ?>
            </section>
            <section v-if="content == 'about'" class="section pt-4 bg-white" id="features">
                <?php require_once("parts/about3.php"); ?>
            </section>
            <section v-if="content == 'about'" class="section" id="features">
                <?php require_once("parts/about2.php"); ?>
            </section>
            <section v-if="content == 'faqs'" class="section " id="faqs" style="background-color:  #4ea8ff;">
                <?php require_once("parts/faqs.php"); ?>
            </section>
            <section v-if="content == 'events'" class="section " id="events" style="background-color:  #4ea8ff; height: 100vh;">
                <?php require_once("parts/events.php"); ?>
            </section>
            <section v-if="content == 'exhibit'" class="section" id="events" style=" height: 100vh;">
                <?php require_once("parts/exhibit.php"); ?>
            </section>
            <section v-if="content == 'resources'" class="section " id="events" style="background-color:  #4ea8ff; height: 100vh;">
                <?php require_once("parts/resources.php"); ?>
            </section>

            <footer class="landing-footer" v-if="content == 'register'" ><div class="container"><div class="row" style="margin-top: -30px;"><div class="col-lg-6"><div class="mb-4"><img src="assets/images/logo-light.png" alt="" height="20"></div> <p class="mb-2">2021 © PNHRS. Developed by DOST-IX</p></div> <div class="col-lg-6"><div style="float: right;"><div data-href="https://www.facebook.com/DOSTRegion9" data-width="380" data-hide-cover="false" data-show-facepile="false" class="fb-page fb_iframe_widget" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=258059077674129&amp;container_width=0&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2FDOSTRegion9&amp;locale=en_US&amp;sdk=joey&amp;show_facepile=false&amp;width=380"><span style="vertical-align: bottom; width: 380px; height: 130px;"><iframe name="f3d9237fe316c9c" data-testid="fb:page Facebook Social Plugin" title="fb:page Facebook Social Plugin" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" style="border: medium none; visibility: visible; width: 380px; height: 130px;" src="https://www.facebook.com/v11.0/plugins/page.php?app_id=258059077674129&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df222659f4fad344%26domain%3Dlocalhost%26origin%3Dhttp%253A%252F%252Flocalhost%252Ff3e1e4c27040d%26relation%3Dparent.parent&amp;container_width=0&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2FDOSTRegion9&amp;locale=en_US&amp;sdk=joey&amp;show_facepile=false&amp;width=380" __idm_frm__="57982058497" class="" width="380px" height="1000px" frameborder="0"></iframe></span></div></div></div></div></div></footer>
            <span  v-if="content != 'island'" @click="content = 'island'" class="text-danger bx-tada" style="float: right; font-size: 60px; position: fixed; bottom: 10px; right: 20px;"><i class="bx bxs-x-circle"></i></span>

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
            <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet' defer>
        </div>
    </body>

</html>