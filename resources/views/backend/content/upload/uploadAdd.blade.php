@extends('backend.body')
@section('content')
		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Content area -->
			<div class="content">
			<form id="form-upload" class="form-horizontal" enctype="multipart/form-data">
			 {{ csrf_field() }}
			 <input name="oldfile" type="hidden" value=""/>
				<div class="card border-2 border-purple-800">
					<div class="card-header header-elements-inline">
							<h6 class="text-semibold font-weight-semibold">
								
								Upload File<br>
								<small class="display-block">Add Some File</small>
							</h6>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>
					
					<div class="card-body">
						<fieldset class="step" id="step1">
							<div class="row">
								<div class="col-md-7">
								
									<div class="form-group row">
										<label class="col-form-label col-lg-4 font-weight-semibold text-uppercase">Judul File <span class="text-danger">*</span></label>
										<div class="col-lg-8">
										<input type="text" id="judul_file" name="judul_file" class="form-control" placeholder="Judul File" value=""/>	
										</div>
									</div>

									<div class="form-group row">
										<label class="col-form-label col-lg-4 font-weight-semibold text-uppercase">Nama File <span class="text-danger">*</span></label>
										
										<div class="col-lg-8">
										<input type="file" id="userfile" name="userfile" class="form-control" placeholder="User File" value=""/>
										<span class="small">
										    Format file doc, xls, ppt, pdf, rar harus kurang dari 5Mb
										</span>
										</div>
										
									</div>
								</div>
							</div>	
						</fieldset>
						
						<div class="content-divider">
							<span class="pt-10 pb-10"> </span>
						</div>
					
						<div class="text-left">
							<a onclick="goBack()" class="btn btn-default"><i class="icon-arrow-left13 position-left"></i> Cancel</a>
							<button type="submit" class="btn btn-primary">Submit <i class="icon-arrow-right14 position-right"></i></button>
						</div>
					</div>
				</div>
				<!-- /summernote editor -->
				</form>
			</div>
			<!-- /content area -->
		</div>
		<!-- /main content -->
	<script type="text/javascript" src="{{url('assets/admin')}}/js/plugins/ui/moment/moment.min.js"></script>
	<script type="text/javascript" src="{{url('assets/admin')}}/js/plugins/forms/styling/uniform.min.js"></script>
	
<script> 
	$("#form-upload").submit(function(event) {
		event.preventDefault();
		$(".btn-primary").prop("disabled", true);
		var form 	= $(this)[0]; 
		var data 	= new FormData(form);
		var id  	= window.location.pathname.split('/').pop();
		if($.isNumeric(id)){
			var path = ServeUrl+"/upload/"+Instansi+"/update/"+id;
		}else{
			var path = ServeUrl+"/upload/"+Instansi+"/upload";
		}
				$.ajax({
							data       : data,
							url        : path,
							method     : 'POST',
							processData: false,
							contentType: false,
							cache      : false,
							complete: function(response){                
							  if(response.status == 201){
								  
								  swal({
										title: '',
										text : response.responseJSON.message,
										type :'success',
										onClose: function () {
												window.location.replace(BaseUrl+'/admin/upload');
										}
									}); 
							  }else if(response.status == 404){
								   swal({
										title: response.status+' Aborted!',
										text : response.responseJSON.message,
										type :'warning',
										onClose: function () {
										 										
										}
									});    
							  }else if(response.status == 401){
								e('info','401 server conection error');
							  }else{
								  swal({
										title: '',
										text : response.responseJSON.message,
										type :'warning',
										onClose: function () {
											 								
										}
									});	 
							  }
							  $(".btn-primary").prop("disabled", false);
							},
							dataType:'json'
				})
				 
	});

	function loadView(){
		var id = window.location.pathname.split('/').pop();
		if ($.isNumeric(id)){
		$.ajax({
					data: "",
					url: ServeUrl+"/upload/"+Instansi+"/view/"+id,
                    crossDomain: false,
                    method: 'GET',
                    complete: function(response){ 				
                        if(response.status == 200){
							if(response.responseJSON.data.parent >=1 ){
							$('.parent').html('<label class="col-form-label col-lg-4 font-weight-semibold">Parent</label><div class="col-lg-8"><input type="text" name="parent" class="form-control" placeholder="parent" value="" /></div>');	
							}
							$('.title').html(response.responseJSON.data.judul_file);
							$('input[name=judul_file]').val(response.responseJSON.data.judul_file);
							$('input[name=oldfile]').val(response.responseJSON.data.nama_file);
                        }else if(response.status == 401){
							 e('info','401 server conection error');
						}
                    },
					dataType:'json'
                })
		}
	};
	loadView();

	function readURL(input,img) {
			if (input.files && input.files[0]) {
				var reader = new FileReader();
				
				reader.onload = function (e) {
					$(input).prev('img').attr('src', e.target.result);
				}
				
				reader.readAsDataURL(input.files[0]);
			}
	}
		
	$("#img").change(function(){
			readURL(this);
	});
</script>
@stop
