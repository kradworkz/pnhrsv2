
<div class="bg-overlay bg-primary"></div>
<div class="container" style="margin-top: 100px;">
    <div class="row align-items-center">
        <div class="col-lg-4">
            <a href="assets/images/programme.png" target="_blank"><img class="img-fluid" src="assets/images/programme.png" style="width: 90%; height: auto;"></a>
        </div>
        <div class="col-lg-8">
            
            <div class="row">
            <b class="text-warning mb-3"><i class="bx bx-news me-1"></i> SATELLITE SESSIONS</b>
                <div class="col-xl-3" v-for="(list,index) in lists2.first" v-bind:key="list.index">
                    <div class="card overflow-hidden mb-0 mt-5 mt-lg-0">
                        <div class="card-header text-center">
                            <h5 @click="viewsession(list.images)" class="mb-0 text-truncate font-size-12" style="cursor: pointer;">{{list.title}}</h5>
                        </div>
                        <div class="card-body">
                            <div class="text-center font-size-11" style="margin-top: -10px; margin-bottom: -10px;">
                            <i class="bx bx-calendar mr-1"></i> {{list.date}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <hr></hr>

            <div class="row">
            <b class="text-warning mb-3"><i class="bx bx-news me-1"></i> PRE-CONFERENCE SESSIONS</b>
                <div class="col-xl-4 mb-3" v-for="(list,index) in lists2.sixth" v-bind:key="list.index">
                    <div class="card overflow-hidden mb-0 mt-5 mt-lg-0">
                        <div class="card-header text-center">
                            <h5 @click="viewsession(list.images)" class="mb-0 text-truncate font-size-12" style="cursor: pointer;">{{list.title}}</h5>
                        </div>
                        <div class="card-body">
                            <div class="text-center font-size-11" style="margin-top: -10px; margin-bottom: -10px;">
                            <i class="bx bx-calendar mr-1"></i> {{list.date}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <hr></hr>

            <div class="row">
            <b class="text-warning mb-3"><i class="bx bx-news me-1"></i> MAIN CONFERENCE SESSIONS</b>
                <div class="col-xl-4 mb-3" v-for="(list,index) in lists2.seventh" v-bind:key="list.index">
                    <div class="card overflow-hidden mb-0 mt-5 mt-lg-0">
                        <div class="card-header text-center">
                            <h5 @click="viewsession(list.images)" class="mb-0 text-truncate font-size-12" style="cursor: pointer;">{{list.title}}</h5>
                        </div>
                        <div class="card-body">
                            <div class="text-center font-size-11" style="margin-top: -10px; margin-bottom: -10px;">
                            <i class="bx bx-calendar mr-1"></i> {{list.date}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>