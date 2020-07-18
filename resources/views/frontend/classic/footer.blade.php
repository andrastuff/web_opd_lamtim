 <!-- Footer start -->
        <footer>
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-12 m-b-xs-30">
                            <div class="footer-widget-area">
                                <h3 class="widget-title">About Us</h3>
                                <p>{{$data['deskripsi']}}</p> 
                                <div class="social-links">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                    </ul>
                                </div>       
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12 m-b-xs-30">
                            <div class="footer-widget-area">
                                <h3 class="widget-title">Recent Posts</h3>
								<span id="recent-footer"><div class="loader text-center"></div></span>
                                
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12 m-b-xs-30">
                            <div class="footer-widget-area" style="max-height: 300px;  overflow: hidden;">
                                <h3 class="widget-title">Maps</h3>
                                <?php echo $data['maps']; ?>
							</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="text-center">
                                <p>{{$data['footer']}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="#" class="go-to-top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
        </footer>
        <!-- Footer end -->
    </div>
	
	 <!-- jQuery library -->
   
 
    <!-- Bootstrap core JS -->
    <script src="{{url('assets/frontend')}}/classic/js/bootstrap.min.js"></script>
    
    <!-- OwlCarousel JS -->
    <script src="{{url('assets/frontend')}}/classic/js/owl.carousel.min.js"></script>
    
    <!-- Counterup Js -->
    <script src="{{url('assets/frontend')}}/classic/js/waypoints.min.js"></script>
    <script src="{{url('assets/frontend')}}/classic/js/jquery.counterup.min.js"></script>

    <!-- Isotop Js -->

    
    <!-- Free Quote JS -->
    <script src="{{url('assets/frontend')}}/classic/js/free-quote-form.js"></script>

    <!-- Style Switcher Js -->
    <script src="{{url('assets/frontend')}}/classic/js/style-switcher.js"></script>

    <!-- Custom Js -->
    <script src="{{url('assets/frontend')}}/classic/js/custom.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
    <script id="dsq-count-scr" src="//http-testing-tulangbawangkab-online.disqus.com/count.js" async></script>
	  
<!-- Mirrored from thedesignsvilla.com/html/nirmaan/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 17 Mar 2019 17:28:12 GMT -->
</html>
<script>
	function loadRecentfooter(){
		$.ajax({
					data: {"render" : "footer"},
					url: ServeUrl+"/news/"+Instansi+"/list",
                    method: 'GET',
                    complete: function(response){ 				
                        if(response.status == 200){
							var content = '';
							 
							$.each(response.responseJSON.data.data.slice(0,3), function(k,v){
								
								content +='<div class="r-post">';
                                    content +='<h4>';
                                       content +='<a href="'+BaseUrl+'/news/read/'+v.id+'/'+v.slug+'">'+v.judul_artikel+'</a>';
                                    content +='</h4>';
                                    content +='<span class="post-date">'+v.tanggal+'</span>';
                                content +='</div>';
							
							});
							
							$('#recent-footer').html(content);
                        }else if(response.status == 401){
							 e('info','401 server conection error');
						}
                    },
					dataType:'json'
                })
	
	};
	loadRecentfooter();
	function time(){
                a = new Date();
                D1=a.getDay();
                D2=a.getDate();
                M=a.getMonth();        
                Y=a.getFullYear();
                var hari = Array("Minggu","Senin","Selasa","Rabu","Kamis","Jum'at","Sabtu");
                var bulan = Array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
               
                $("#time").html(hari[D1]+", "+D2+" "+bulan[M]+" "+Y+"");
                setTimeout("time()",800);
	}
	time();
	var image = "{{$data['preloader']}}";
	var $loading = $(".loader").html( '<img class="loading-image" src="'+image+'" alt="loading..">');
	jQuery(document).ajaxStart(function () { 
		$loading.show(); 
	});
	jQuery(document).ajaxStop(function () { 
		$loading.hide();
		$("a.weatherwidget-io").attr('href',"#");
		 
	});
	
	$(document).ajaxComplete(function(event,request,settings){
		fixImg();
		
    });
	
	function fixImg(){
	$("img").on("error", function (err) {
	  $(this).unbind("error").attr("src", "{{url('/assets/frontend/images/404.jpg')}}");
	});
	}

</script>