 <!-- FOOTER -->
			<footer id="footer">
				<div class="container">

					<div class="row">
						
						<div class="col-md-3">
							<!-- Footer Logo -->
							<img class="footer-logo" width="100px" src="{{$data['logo']}}" alt="" />

							<!-- Small Description -->
							<p><?php echo substr($data['deskripsi'],0,60); ?>.</p>

							<!-- Contact Address -->
							<address>
								<ul class="list-unstyled">
									<li class="footer-sprite address">
										{{$data['alamat']}}
									</li>
									<li class="footer-sprite phone">
										{{$data['telp']}}
									</li>
									<li class="footer-sprite email">
										<a href="mailto:{{$data['email']}}">{{$data['email']}}</a>
									</li>
								</ul>
							</address>
							<!-- /Contact Address -->

						</div>

						<div class="col-md-3">

							<!-- Latest Blog Post -->
							<h4 class="letter-spacing-1">BERITA POPULAR</h4>
							<ul class="footer-posts list-unstyled" id="recent-footer">
								<div class="loader text-center"></div>
							</ul>
							<!-- /Latest Blog Post -->

						</div>

						<div class="col-md-2">

							<!-- Links -->
							<h4 class="letter-spacing-1">LINK TERKAIT</h4>
							<ul class="footer-links list-unstyled">
								<li><a href="{{url("/")}}">Home</a></li>
								<li><a href="{{url("contact/")}}">Contact Us</a></li>
							</ul>
							<!-- /Links -->

						</div>

						<div class="col-md-4">

							<!-- Newsletter Form -->
							<h4 class="letter-spacing-1">KEEP IN TOUCH</h4>
							 
							<div style="max-height: 200px;  overflow: hidden;">
								<?php echo $data['maps']; ?>
							</div>
						</div>

					</div>

				</div>

				<div class="copyright">
					<div class="container">
						 
						{{$data['footer']}} made with <i class="fa fa-heart"></i> by andrastuff
					</div>
				</div>
			</footer>
			<!-- /FOOTER -->

		</div>
		<!-- /wrapper -->
		
		
		<!-- JAVASCRIPT FILES -->
		<script>var plugin_path = '{{url("assets/frontend/modern")}}/plugins/';</script>
		<script src="{{url('assets/frontend/modern')}}/plugins/jquery/jquery-3.4.1.min.js"></script>

		<script src="{{url('assets/frontend/modern')}}/js/scripts.js"></script>
		
		<!-- STYLESWITCHER - REMOVE -->
		 

		<!-- REVOLUTION SLIDER -->
		<script src="{{url('assets/frontend/modern')}}/plugins/slider.revolution/js/jquery.themepunch.tools.min.js"></script>
		<script src="{{url('assets/frontend/modern')}}/plugins/slider.revolution/js/jquery.themepunch.revolution.min.js"></script>
		<script src="{{url('assets/frontend/modern')}}/js/view/demo.revolution_slider.js"></script>

	</body>

</html>


<script>
	function loadRecentfooter(){
		$.ajax({
					data: {"render" : "footer"},
					url: ServeUrl+"/news/"+Instansi+"/list?type=popular",
                    method: 'GET',
                    complete: function(response){ 				
                        if(response.status == 200){
							var content = '';
							 
							$.each(response.responseJSON.data.data.slice(0,3), function(k,v){
								content +='<li>';
									content +='<a href="'+BaseUrl+'/news/read/'+v.id+'/'+v.slug+'">'+v.judul_artikel+'</a>';
									content +='<small>'+v.tanggal+'</small>';
								content +='</li>';
								
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