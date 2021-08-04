<div>
    <ul id="lobby">
        <li class="a-1 zoom2"></li>
        <li class="a-2 zoom2"></li>
        <li @click="guide = true" class="a-3 zoom2"></li>
        <li class="d1 zoom3"></li>
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

    <button @click="content = 'island'" id="wew" type="button" class="btn btn-primary waves-effect waves-light">Back to City</<button>
</div>