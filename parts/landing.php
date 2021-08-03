<div v-if="!isMobile()" class="bg-overlay bg-primary"></div>
<div v-if="isMobile()" style="margin-top: -110px; margin-left: 15px;">
    <h6 class="text-white fw-semibold mb-2"><p style="font-size : 14px; color: #ffd311; text-shadow: 1px 1px 1px #404040;">Health R&D in the New Normal :</p><p style="font-size : 16px; color: #ff2960; text-shadow: 1px 1px 2px #000000; margin-top: -15px;"> Moving towards Universal Health Care</p></h6>
    <p style="margin-top: -12px;  text-shadow: 1px 1px 1px #000000;"><span class="font-size-10 text-white" style="margin-right: 16px;"><i class='bx bx-calendar'></i> August 09-13, 2021 </span>
    <span class="font-size-10 text-white"><i class='bx bx-map-pin'></i> Zamboanga City</span></p>
</div>
<div class="">
    <div v-if="!isMobile()" class="row align-items-center" style="margin-top: -100px; margin-left: 20px;">
        <div class="col-lg-12">
            <ul id="map">
                <!-- <li @click="openmodal(1)" class="dakak zoom"></li>     -->
                <li @click="openmodal(1)" class="stacruz zoom"></li>
                <li class="vinta3"></li>
                <li @click="openmodal(8)" class="merloquet zoom"></li>
                <li @click="openmodal(8)" class="cityhall zoom"></li>
                <li @click="openmodal(13)" class="sm zoom"></li>
                <li @click="openmodal(14)" class="kcc zoom"></li>
                <li class="adzu zoom"></li>
                <li  @click="openmodal(9)" class="fortpillar zoom"></li>
                <li class="barter zoom"></li>
                <li class="police zoom"></li>
                <li @click="openmodal(19)" class="airport zoom"></li>
                <li class="zcmc zoom"></li>
                <li class="brent zoom"></li>
                <li class="ciudad zoom"></li>
                <li class="cho zoom"></li>
                <li class="dost zoom"></li>
                <li class="mosque zoom"></li>
                <li class="church zoom"></li>
                <li class="uz zoom"></li>
                <li class="dswd zoom"></li>
                <li class="bus zoom"></li>
                <li class="psa zoom"></li>
                <li class="yakan zoom"></li>
                <li class="ched zoom"></li>
                <li class="doh zoom"></li>
                <li class="seaport zoom"></li>
                <li class="zscmst zoom"></li>
                <li class="fire zoom"></li>
                <li class="treehouse zoom"></li>
                <li class="vinta2"></li>
                <!-- <li href="register.php" target="_blank"><li class="register bx-tada"></li></a> -->
            </ul>
        </div>
    </div>
    <div v-else style="scale: 0.4; margin-top: -200px; margin-left: -150px;">
        <ul id="map">
            <li @click="openmodal(1)" class="stacruz zoom"></li>
            <li class="vinta3"></li>
            <li @click="openmodal(8)" class="merloquet zoom"></li>
            <li @click="openmodal(8)" class="cityhall zoom"></li>
            <li @click="openmodal(13)" class="sm zoom"></li>
            <li @click="openmodal(14)" class="kcc zoom"></li>
            <li class="adzu zoom"></li>
            <li  @click="openmodal(9)" class="fortpillar zoom"></li>
            <li class="barter zoom"></li>
            <li class="police zoom"></li>
            <li @click="openmodal(19)" class="airport zoom"></li>
            <li class="zcmc zoom"></li>
            <li class="brent zoom"></li>
            <li class="ciudad zoom"></li>
            <li class="cho zoom"></li>
            <li class="dost zoom"></li>
            <li class="mosque zoom"></li>
            <li class="church zoom"></li>
            <li class="uz zoom"></li>
            <li class="dswd zoom"></li>
            <li class="bus zoom"></li>
            <li class="psa zoom"></li>
            <li class="yakan zoom"></li>
            <li class="ched zoom"></li>
            <li class="doh zoom"></li>
            <li class="seaport zoom"></li>
            <li class="zscmst zoom"></li>
            <li class="fire zoom"></li>
            <li class="treehouse zoom"></li>
            <li class="vinta2"></li>
        </ul>
    </div>
    
    <div class="pyro"  style="margin-top: -400px;">
        <div class="before"></div>
        <div class="after"></div>
    </div>

    <div id="clouds" style="margin-top: -350px;">
        <div class="cloud x1"></div>
        <div class="cloud x2"></div>
        <div class="cloud x3"></div>
        <div class="cloud x4"></div>
        <div class="cloud x5"></div>
    </div> 

    <div v-if="!isMobile()">
        <img class="menu" src="assets/images/landing/new/designs/menu.png">
        <a @click="view('about')"><img class="about" src="assets/images/landing/new/designs/about.png" onmouseover="this.src='assets/images/landing/new/designs/e-3.png'" onmouseout="this.src='assets/images/landing/new/designs/about.png'"></a>
        <a @click="view('events')"><img class="events" src="assets/images/landing/new/designs/events.png" onmouseover="this.src='assets/images/landing/new/designs/e-2.png'" onmouseout="this.src='assets/images/landing/new/designs/events.png'"></a>
        <a @click="view('exhibit')"><img class="exhibit" src="assets/images/landing/new/designs/exhibit.png"  onmouseover="this.src='assets/images/landing/new/designs/e-1.png'" onmouseout="this.src='assets/images/landing/new/designs/exhibit.png'"></a>
        <a @click="view('register')"><img class="registerw" src="assets/images/landing/new/designs/register.png" onmouseover="this.src='assets/images/landing/new/designs/e-4.png'" onmouseout="this.src='assets/images/landing/new/designs/register.png'"></a>
        <a @click="view('faqs')"><img class="faq" src="assets/images/landing/new/designs/faq.png" onmouseover="this.src='assets/images/landing/new/designs/e-5.png'" onmouseout="this.src='assets/images/landing/new/designs/faq.png'"></a> 
        <a @click="view('resources')"><img class="resources" src="assets/images/landing/new/designs/resources.png" onmouseover="this.src='assets/images/landing/new/designs/e-6.png'" onmouseout="this.src='assets/images/landing/new/designs/resources.png'"></a> 
    </div>
    <div v-if="!isMobile()">
        <a href="https://14thpnhrsweekcelebration.dost9.ph/" target="_blank"><img class="logo" src="assets/images/landing/logo.png"></a>
        <a href="https://region9.dost.gov.ph" target="_blank"><img class="l-1" src="assets/images/krad/dost.png"></a>
        <a href="https://www.pchrd.dost.gov.ph" target="_blank"><img class="l-2" src="assets/images/krad/pchrd.png"></a>
        <a href="region9.healthresearch.ph" target="_blank"><img class="l-3" src="assets/images/krad/zchrd.png"></a>
        <a href="https://up.edu.ph" target="_blank"><img class="l-4" src="assets/images/krad/up.png"></a>
        <a href="https://doh.gov.ph" target="_blank"><img class="l-5" src="assets/images/krad/doh.png"></a>
        <a href="https://ched.gov.ph" target="_blank"><img class="l-6" src="assets/images/krad/ched.png"></a>
    </div>

    <img class="plane" src="assets/images/landing/new/designs/plane.png">
</div>