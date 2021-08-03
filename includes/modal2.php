

<div class="modal fade" id="viewsession" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true" style="margin-top: -30px;">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body" data-simplebar style="height: 70vh;">
                <div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div v-for="(land,index) in images">
                                <center><img :src="land.name" class="rounded img-fluid" alt=".."></center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="openmodal" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true" style="margin-top: -30px;">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <div class="row" style="margin-top: 50px; margin-bottom: 50px;">
                    <div class="col-md-1"></div>
                    <div class="col-md-5" style="margin-right: 60px;">
                        <vue-slick-carousel v-if="images.length > 0" :autoplay="true" :autoplaySpeed="10000" :dots="true" :options="slickOptions">
                            <div v-for="(land,index) in images" :class="'slides-'+index">
                                <img :src="land.name" class="rounded img-fluid" alt="..">
                            </div>
                        </vue-slick-carousel>
                    </div>
                    <div class="col-md-5">
                        <div style="margin-right: 50px;" >
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="text-primary mb-0">"{{landmark.name}}"</h4>
                            </div>
                            <div data-simplebar style="height: 30vh;">
                                <p class="font-size-11" style="text-indent: 50px;  text-align: justify; text-justify: inter-word;">{{landmark.description}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>