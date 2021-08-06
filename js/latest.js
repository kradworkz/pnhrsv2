// when life is settled, load up the fun stuff
document.addEventListener('DOMContentLoaded', function () {
    new Vue({
        el: '#sg1',
        components: { 
            VueSlickCarousel : window['vue-slick-carousel'] 
        },
        data: {
            show : false,
            content: 'island',
            lists : [],
            lists2: [],
            images : [],
            slickOptions: {
                infinite: true,
                slidesToShow: 1,
                speed: 1000,
                centerPadding: '100px'
            },
            dates : ['August 09, 2021','August 10, 2021','August 11, 2021'],
            d1 : false,
            d2: false,
            link: '',
            date: '',
            title: '',
            time: '',
            landmark: [],
            guide : false,
            ex: 'lobby',
            research : [],
            check : '',
            ids : []
        },

        created(){
            this.getL();
            this.getLi();
        },
  
        methods: {
            view(type){
                this.content = type;
                (this.content != 'island') ? this.show = true : this.show = false;
            },

            getL(){
                axios.get('json/landmark.json')
                .then(response => {
                    this.lists = response.data;
                })
                .catch((e) => {
                    console.error(e)
                });
            },

            getLi(){
                axios.get('json/list.json')
                .then(response => {
                    this.lists2 = response.data;
                })
                .catch((e) => {
                    console.error(e)
                });
            },

            viewsession(images){
                this.images = images;
                $("#viewsession").modal('show');
            },

            openmodal(id){
                
                // this.landmark = this.lists[id];
                this.landmark = this.lists.find(list => list.id === id)
                this.images = this.landmark.images;
                $("#openmodal").modal('show');
            },

            isMobile() {
                if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
                    return true
                } else {
                    return false
                }
            },
            views(type){
                if(type == 'd1'){
                    if(this.d1 == true){
                        this.d1 =false;
                    }else{
                        this.d1 = true 
                        this.d2 = false;
                    }
                }else{
                    if(this.d2 == true){
                        this.d2 =false;
                    }else{
                        this.d2 = true;
                        this.d1 = false;
                    }
                }
            },

            openmodal1(l){
                this.link = l.link;
                this.title = l.title;
                this.date = l.date;
                this.time = l.time;

                (l.option != '') ? '' : $("#open-registration").modal('show');
            },

            viewabstract(id){
                this.research = this.lists.find(list => list.id === id);
                
                if (localStorage.getItem("posterIds") != null) {
                    this.ids = localStorage.getItem("posterIds");
                    this.check = this.ids.includes(id);
                }else{
                    this.ids =  localStorage.setItem('posterIds', [])
                    this.check = false;
                }
                
               
                if(!this.check){
                    axios.get('json/test.php?id='+id)
                    .then(response => {
                    this.research.views = response.data;
                    })
                    .catch((e) => {
                        console.error(e)
                    });
                    let bookData = this.ids ? JSON.parse(this.ids) : []
                    bookData.push(id);
                    localStorage.setItem('posterIds', JSON.stringify(bookData))
                }

                $("#openabstract").modal('show');
               
            },

            closeview(type){
                if(type == 'ex'){
                    this.ex = 'lobby';
                }else{
                    this.content = 'island';
                    this.ex = 'lobby';
                }
            }

        }
    })
})


