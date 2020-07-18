@extends('frontend.classic.body')
@section('classic.content')
<style>.widget-area li:before { content: "\f019"; }</style>
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
					<div class="col-md-12 section-white p-t-20">
                        <div class="widget-area">
                            <div class="widget-area">
							<div class="widget-title">
                                    <h3>Download Files</h3>
                                    <span class="divider"></span>
                                </div>
                                <ul id="files">
                                  
                                </ul>
								<div class="row m-b-20">
								<div class="loader text-center"></div>
								   <div class="col-md-12 popular-tags text-center"><a id="loadmore" class="btn" onclick="loadMore()" data-value=""><strong><i class="fa fa-circle-o-notch"></i> Load More</a></strong></div>
								</div>
                            </div>
                             
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog page section end -->
    <script>
	var data = {"page" : 1};
	function loadDownloads(data){
		$.ajax({
					data: data,
					url: ServeUrl+"/publikasi/"+Instansi+"/list",
                    
                    method: 'GET',
                    complete: function(response){ 				
                        if(response.status == 200){
							var content = ''; 
							$.each(response.responseJSON.data.data, function(k,v){
							
								content +='<li> ';
                                    content +='<a href="{{url("/informasi/publikasi/")}}/'+v.id+'">'+v.icon+'. '+v.judul_file+'</a> ';
                                content +='</li> ';
							
							});
							$('#loadmore').data("value", response.responseJSON.data.current_page);
							$('#files').append(content);
                        }else if(response.status == 401){
							 e('info','401 server conection error');
						}else if(response.status == 204){
							 $('#loadmore').remove();
							 $('#files').append('<center class="m-t-50 m-b-50"><h2>Oops! Not Found</h2></center>');
						}
                    },
					dataType:'json'
        })
	
	};
	loadDownloads(data);
	
	function loadMore(){
		var page = parseInt($('#loadmore').data("value"))+1;
		var data = {"page" : page};
		loadDownloads(data);		
	};
	</script>  
@stop