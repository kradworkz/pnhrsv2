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