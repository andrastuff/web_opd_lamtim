@extends('frontend.modern.body')
@section('modern.content')

	<section class="page-header dark page-header-xs">
		<div class="container">

			<h1>{{$data['title']}}</h1>

			<!-- breadcrumbs -->
			<ol class="breadcrumb">
				<li><a href="{{url('/')}}">Home</a></li>
				<li class="active">{{$data['title']}}</li>
			</ol><!-- /breadcrumbs -->

		</div>
	</section>
	
	<section>
				<div class="container">

					<div id="portfolios" class="portfolio-gutter">

						<ul class="nav nav-pills mix-filter mb-60">
							<li data-filter="all" class="filter active"><a href="#">All</a></li>
							 
						</ul>


						<div class="row mix-grids" id="gallery-list">

							

						</div>
						<div class="text-center" id="load">
									<div class="loader text-center"></div>
									<div class="col-md-12 about-content text-center"><a id="loadmore" class="btn btn-reveal btn-default b-0 btn-shadow-1" onclick="loadMore()" data-value=""><i class="fa fa-circle-o-notch"></i><span> Load More</span></a></div>
							</div>

					</div>
					
				</div>
			</section>
			
	
    
    <script src="{{url('assets/frontend/modern')}}/plugins/mixitup/jquery.mixitup.min.js"></script>
    <script>
	
	var data 	= {"page" : 1};
	
	function loadGallery(data){
		
		$.ajax({
					data: data,
					url: ServeUrl+"/gallery/"+Instansi+"/list",
                    async:false,
                    method: 'GET',
                    complete: function(response){ 				
                        if(response.status == 200){
							var content = ''; 
							
							$.each(response.responseJSON.data.data, function(k,v){
							if(v.judul_img == null){v.judul_img = ''}else{v.judul_img = v.judul_img;}
							if(v.type == 'image'){
								
							content +='<div class="col-md-3 col-sm-3 mix image">';
								content +='<div class="item-box">';
									content +='<figure>';
										content +='<span class="item-hover">';
											content +='<span class="overlay dark-5"></span>';
											content +='<span class="inner">';
												content +='<a class="ico-rounded lightbox" href="'+v.img_link+'" data-plugin-options="{"type":"image"}">';
													content +='<span class="fa fa-plus fs-20"></span>';
												content +='</a>';
												content +='<a class="ico-rounded" href="'+v.img_link+'">';
													content +='<span class="glyphicon glyphicon-option-horizontal fs-20"></span>';
												content +='</a>';
											content +='</span>';
										content +='</span>';
										content +='<img class="img-fluid" src="'+v.img_link+'" width="600" height="399" alt="">';
									content +='</figure>';
									content +='<div class="item-box-desc">';
										content +='<h3>'+v.judul_img+'</h3>';
									content +='</div>';
								content +='</div>';
							content +='</div>';

							 
							}else{
								 if(v.source.length > 70){
							    var youtube = $(v.source).html(content);
							    var type = '{"type":"iframe"}';
								
								content +='<div class="col-md-3 col-sm-3 mix embed">';
								content +='<div class="item-box">';
									content +='<figure>';
										content +='<span class="item-hover">';
											content +='<span class="overlay dark-5"></span>';
											content +='<span class="inner">';
												content +='<a class="ico-rounded lightbox video" href="https://www.youtube.com/watch?v='+youtube.attr('src').split("/").pop()+'" data-plugin-options='+"'"+''+type+''+"'"+'>';
													content +='<span class="fa fa-plus fs-20"></span>';
												content +='</a>';
												content +='<a class="ico-rounded" href="https://www.youtube.com/watch?v='+youtube.attr('src').split("/").pop()+'">';
													content +='<span class="glyphicon glyphicon-option-horizontal fs-20"></span>';
												content +='</a>';
											content +='</span>';
										content +='</span>';
										content += '<div class="embed-responsive embed-responsive-16by9">'+v.source+'</div>';
									content +='</figure>';
									content +='<div class="item-box-desc">';
										content +='<h3>'+v.judul_img+'</h3>';
									content +='</div>';
								content +='</div>';
							content +='</div>';
						
								 };
							};	
							});
							 setTimeout(function () {
							$('#loadmore').data("value", response.responseJSON.data.current_page);
							}, 3000);
							$('#gallery-list').append(content);
							 
							 
                        }else if(response.status == 401){
							 e('info','401 server conection error');
						}else if(response.status == 204){
							 $('#loadmore').remove();
							 $('#gallery-list').append('<center class="m-t-50 m-b-50"><h2>Oops! Not Found</h2></center>');
						}
                    },
					dataType:'json'
        });
	  
	};
	loadGallery(data);
	
	function loadMore(){
		var page = parseInt($('#loadmore').data("value"))+1;
		var data = {"page" : page};
		loadGallery(data);		
	};
	
	$( document ).ajaxComplete(function() {
	  
	});
 
	
	</script>  
@stop