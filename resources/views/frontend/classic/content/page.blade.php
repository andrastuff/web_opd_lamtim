@extends('frontend.classic.body')
@section('classic.content')
         <!-- Page title section start -->
        <section class="page-title p-t-50 p-b-20">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumb-area">
                            <h1>{{$data['title']}}</h1>
                            <ul>
                                <li><a href="{{url('/')}}">Home</a></li>
                                <li>/</li>
                                <li>{{$data['title']}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Page title section end -->
        <!-- Blog page section start -->
        <section class="section-light-grey p-t-70 p-b-70">
            <div class="container">
                <div class="row">
					<div class="col-md-3 section-white p-t-20">
                        <div class="widget-area">
                            <div class="widget-area">
                                <ul id="page-list">
                                   <div class="loader text-center"></div>
                                </ul>
                            </div>
                            <div class="widget-area">
                                <div class="widget-title">
                                    <h3>Download Publikasi</h3>
                                    <span class="divider"></span>
                                </div>
                                <span id="files"><div class="loader text-center"></div></span>
								
                            </div>
                            <div class="widget-area">
                                <div class="widget-title">
                                    <h3>The Corner</h3>
                                    <span class="divider"></span>
                                </div>
								<?php if(isset($data['banner']['sidebar'])){ ?>
								<div class="member-img">
									<img src="<?php echo $data['banner']['sidebar']['img']; ?>" alt="Team">
								</div>
								<?php } ?>
                                 
                            </div>
							<div class="widget-area">
								<script type="text/javascript" src="https://widget.kominfo.go.id/gpr-widget-kominfo.min.js"></script> 
								<div id="gpr-kominfo-widget-container"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                      <div class="blog-detail">
                            <div class="blog-area">
                                <div class="blog-content m-all-20" id="blog-content">
                                    <div class="loader text-center"></div>
                                </div>
							</div>
                        </div>
					</div>
                   </div>
            </div>
        </section>
        <!-- Blog page section end -->
	<script>
	function loadView(){
		var page = window.location.pathname.split('/').pop();
		$.ajax({
					data: "",
					url: ServeUrl+"/pages/"+Instansi+"/view/"+page,
                    crossDomain: true,
                    method: 'GET',
                    complete: function(response){ 		
                        if(response.status == 200){
							
							 $("#blog-content").html(response.responseJSON.data.content);
							 $(".title").html(' Sasaran '+response.responseJSON.data.judul);
							 
                        }else if(response.status == 401){
							 e('info','401 server conection error');
						}else if(response.status == 204){ 
							 $("#blog-content").html('<center class="m-t-50 m-b-50"><h2>Oops! Not Found</h2></center>');
						}
                    },
					dataType:'json'
                })
                loadSidebar();
	}
	
	function loadSidebar(){
		var page = window.location.pathname.split('/').pop();
		$.ajax({
					data: {"render" : "sidebar"},
					url: ServeUrl+"/pages/"+Instansi+"/list",
                    
                    method: 'GET',
                    complete: function(response){ 				
                        if(response.status == 200){
							var content = '';
							 
							$.each(response.responseJSON.data.data, function(k,v){
							var addClass; if(v.slug == page){ addClass = 'class="active"';};
									content +='<li '+addClass+'>';
                                        content +='<a href="'+BaseUrl+'/informasi/'+v.slug+'">';
                                            content += v.judul;
                                        content +='</a>';
                                    content +='</li>';
							
							});
							
							$('#page-list').html(content);
                        }else if(response.status == 401){
							 e('info','401 server conection error');
						}
                    },
					dataType:'json'
                });
				
		$.ajax({
					data: {"render" : "sidebar"},
					url: ServeUrl+"/publikasi/"+Instansi+"/list",
                    
                    method: 'GET',
                    complete: function(response){ 				
                        if(response.status == 200){
							var content = '';
							 
							$.each(response.responseJSON.data.data, function(k,v){
							
								content +='<div class="broucher-item"> ';
                                    content +='<a href="{{url("/informasi/publikasi/")}}/'+v.id+'">'+v.judul_file+'<span class="fa fa-download" aria-hidden="true"></span></a> ';
                                    content += v.icon;
                                content +='</div> ';
							
							});
							
							$('#files').html(content);
                        }else if(response.status == 401){
							 e('info','401 server conection error');
						}
                    },
					dataType:'json'
        })
	
	};
	loadView();
</script>	
@stop