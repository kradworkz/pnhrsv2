<div>
    <ul id="lobby" v-if="ex == 'lobby'">
        <li class="a-1 zoom2"></li>
        <li class="a-2 zoom2"></li>
        <li @click="guide = true" class="a-3 zoom2"></li>
        <li @click="ex = 'student'" class="d1 zoom3"></li>
        <li class="d2 zoom3"></li>
        <li class="l0"></li>
        <li class="l1"></li>
        <li class="l2"></li>
        <li class="l3"></li>
        <li class="l4"></li>
        <li class="l5"></li>
        <li class="l6"></li>
        <div v-if="guide == true" @click="guide = false" style="background-color:rgba(0,0,0,0.8); width: 2000px; height: 100%; z-index: 10; position: absolute; margin-left: -50px;" >
            <li class="g1"></li>
            <li class="g2"></li>
        </div>
    </ul>

    <ul id="student" v-if="ex == 'student'">
        <li @click="viewabstract(62)" class="rr1 zoom3"></li>
        <li @click="viewabstract(63)" class="rr2 zoom3"></li>
        <li @click="viewabstract(61)" class="rr3 zoom3"></li>
        <li @click="viewabstract(64)" class="rr4 zoom3"></li>
        <li @click="viewabstract(60)" class="rr5 zoom3"></li>
        <li @click="viewabstract(65)" class="rr6 zoom3"></li>
        <!-- <li class="rrpeople"></li> -->


        <li class="p1"></li>
        <li class="p2"></li>
        <li class="p3"></li>
        <li class="p4"></li>
        <li class="p5"></li>
        <li class="p6"></li>
        <li class="p7"></li>
        <li class="p8"></li>
        <li class="top">
            <h1 class="neonText">STUDENT CATEGORY </h1>
        </li>
        <!-- 
        <li class="title">
            <p class="marquee">  <img src="assets/images/krad/logo.png" style="width: 25px; height: 25px;"> Health R&D in the  New Normal : Moving towards Universal Care</p>
            <p class="marquee two">  <img src="assets/images/krad/logo.png" style="width: 25px; height: 25px;"> Health R&D in the  New Normal : Moving towards Universal Care</p>
        </li>
        <li class="r1"></li>
        <li class="r3"></li>
        <li class="rcar"></li>
        <li class="r11"></li> -->
    </ul>

    <button @click="ex = 'lobby'" id="wew" type="button" class="btn btn-primary waves-effect waves-light">Back to City</<button>
</div>