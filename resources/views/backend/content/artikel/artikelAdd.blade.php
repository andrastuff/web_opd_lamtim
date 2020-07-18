@extends('backend.body')
@section('content')
<script src="{{url('assets/admin')}}/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.css" rel="stylesheet">
		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Content area -->
			<div class="content">
			 <form id="form-artikel" class="form-horizontal" enctype="multipart/form-data">
			 {{ csrf_field() }}
			 <input name="tags" type="hidden" value=""/> 
			<input name="id" type="hidden" value=""/>
			<input name="img" type="hidden" value=""/>
				<div class="card border-2 border-purple-800">
					<div class="card-header header-elements-inline">
							<h6 class="text-semibold font-weight-semibold">
								
								Artikel Content<br>
								<small class="display-block">Tell a bit about article</small>
							</h6>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>
					
					<div class="card-body">
					
					
						<textarea name="isi_artikel" id="summernote" class="summernote"></textarea>
					</div>
				</div>
				<!-- /summernote editor -->
			
				<div class="card border-2 border-purple-800">
					<div class="card-header header-elements-inline">
							<h6 class="text-semibold font-weight-semibold">
								
								Artikel Information<br>
								<small class="display-block">Tell us a bit about information</small>
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
										<label class="col-form-label col-lg-4 font-weight-semibold text-uppercase">Judul Post <span class="text-danger">*</span></label>
										<div class="col-lg-8">
										<input type="text" id="judul" name="judul" class="form-control" placeholder="Judul Post" value=""/>
										
										</div>
									</div>

									<div class="form-group row">
										<label class="col-form-label col-lg-4 font-weight-semibold text-uppercase">Kategori <span class="text-danger">*</span></label>
										<div class="col-lg-8">
										<select name="idkat" data-placeholder="Select Kategori" class="form-control">
											<option></option>
											<optgroup label="Pilih kategori">
											
											</optgroup>
										</select>
										</div>
									</div>
									
									<div class="form-group row">
										<label class="col-form-label col-lg-4 font-weight-semibold text-uppercase">Tags</label>
										<div class="col-lg-8">
										<select name="tag" data-placeholder="Select position" class="form-control multiselect" multiple>
											<option></option>
												<optgroup label="Pilih Tag">
											
												</optgroup>
											
										</select>
										
										</div>
									</div>
									
									<div class="form-group row">
										<label class="col-form-label col-lg-4 font-weight-semibold text-uppercase">SEO Key</label>
										<div class="col-lg-8">
										<input type="text" name="metakey" class="form-control" placeholder="SEO Keyword" value="">
										
										</div>
									</div>
									<div class="form-group row">
										<label class="col-form-label col-lg-4 font-weight-semibold text-uppercase">SEO Description</label>
										<div class="col-lg-8">
										<textarea type="text" name="metadesc" class="form-control" placeholder="SEO Description"></textarea>
										
										</div>
									</div>
									<div class="form-group row">
										<label class="col-form-label col-lg-4 font-weight-semibold text-uppercase">Caption Image<span class="text-danger">*</span></label>
										<div class="col-lg-8">
										<input type="text" id="caption" name="caption" class="form-control" placeholder="Caption Image" value=""/>
										
										</div>
									</div>
									
									
								</div>
							 
								
							 
								<div class="col-md-5">
									 <div class="form-group row">
										<label class="col-form-label col-lg-4 font-weight-semibold text-uppercase">Berita Utama <span class="text-danger">*</span></label>
										<div class="col-lg-8">
										<div class="form-check form-check-inline">
											<label class="form-check-label">
												<input type="radio" class="form-check-input" name="utama" value="1" checked="">
												Ya
											</label>
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label">
												<input type="radio" class="form-check-input" name="utama" value="0" checked="">
												Tidak
											</label>
										</div>
										<i class="small"> </i>
										</div>
									</div>
								    
									<div class="form-group row parent">
										 
									</div>
									 
									 
									<div class="form-group row">
										<label class="col-form-label col-lg-4 font-weight-semibold text-uppercase">Tanggal <span class="text-danger">*</span></label>
										<div class="col-lg-6">
										<div class="input-group">
										<span class="input-group-addon"><i class="icon-calendar22 mr-2"></i></span>
										<input type="text" name="tanggal" class="form-control form-control-sm daterange-single" value="">
										 
										</div>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-form-label col-lg-4 font-weight-semibold text-uppercase">Images</label>
										<div class="col-lg-6">
										<label for="img">
										 
											<img class="img-thumbnail img " id="view" src="{{url('')}}/assets/images/web/no.jpg"/>
										 
										<input type="file"  name="userfile"  id="img" class="form-control hidden" >
										</label><span class="text-muted">Ukuran Foto : 567 x 383</span>
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
	<script type="text/javascript" src="{{url('assets/admin')}}/js/plugins/pickers/daterangepicker.js"></script>
	<script type="text/javascript" src="{{url('assets/admin')}}/js/pages/picker_date.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.js"></script>
	<script type="text/javascript" src="{{url('assets/admin')}}/js/plugins/forms/styling/uniform.min.js"></script>
	<script src="{{url('assets/admin')}}/js/plugins/pickers/daterangepicker.js"></script>
	<script src="{{url('assets/admin')}}/js/demo_pages/picker_date.js"></script>
	
<script>
	$.extend($.summernote.plugins, {
		'brenter': function (context) {
			this.events = {
				'summernote.enter': function (we, e) {
					context.invoke('editor.saveRange');
					context.invoke('editor.pasteHTML', '<br />&VeryThinSpace;');
					e.preventDefault();
				}
			};
		}
	})
	$('.summernote').summernote({
			height: 500,
			fontNames: [ 'Serif', 'Sans', 'Arial', 'Arial Black', 'Courier', 'Courier New', 'Comic Sans MS', 'Helvetica', 'Impact', 'Lucida Grande', 'Sacramento'],
			fontNamesIgnoreCheck: [ 'Serif', 'Sans', 'Arial', 'Arial Black', 'Courier', 'Courier New', 'Comic Sans MS', 'Helvetica', 'Impact', 'Lucida Grande', 'Sacramento'],
			fontSizes: ['8', '9', '10', '11', '12', '14', '15', '16', '18', '24', '36', '48' , '64', '82', '150'],

            callbacks: {
            onImageUpload: function(files, editor, $editable) {
                sendFile(files[0], editor, $editable);
            },
			onMediaDelete : function(files) {
                deleteFile(files[0].src);
            }
			},
			toolbar: [
						// [groupName, [list of button]]
						['style', ['style', 'fontname', 'bold', 'italic', 'underline', 'clear']],
						['font', ['strikethrough', 'superscript', 'subscript']],
						['fontsize', ['fontsize']],
						['color', ['color']],
						['insert', ['picture','link','table']],
						['para', ['ul', 'ol', 'paragraph']],
						['height', ['height', 'fullscreen', 'undo', 'redo', 'codeview']]
						 
					  ],
		 
			
        });
		 
		 
	
	function loadView(){
		var id = window.location.pathname.split('/').pop();
		if ($.isNumeric(id)){
		$.ajax({
					data: "",
					url: ServeUrl+"/artikel/"+Instansi+"/view/"+id,
                    crossDomain: false,
                    method: 'GET',
                    complete: function(response){ 				
                        if(response.status == 200){
							if(response.responseJSON.data.parent >=1 ){
							$('.parent').html('<label class="col-form-label col-lg-4 font-weight-semibold">Parent</label><div class="col-lg-8"><input type="text" name="parent" class="form-control" placeholder="parent" value="" /></div>');	
							}
							$('.title').html(response.responseJSON.data.judul_artikel);
							$('.note-editable p').html(response.responseJSON.data.isi_artikel);
							$('textarea[name=isi_artikel]').html(response.responseJSON.data.isi_artikel);
							$('input[name=id]').val(response.responseJSON.data.id);
							$('input[name=judul]').val(response.responseJSON.data.judul_artikel);
							$('input[name=metakey]').val(response.responseJSON.data.metakey);
							$('input[name=parent]').val(response.responseJSON.data.parent);
							$('textarea[name=metadesc]').val(response.responseJSON.data.metadesc);
							$('input[name=utama][value='+response.responseJSON.data.utama+']').prop("checked",true);
							$('select[name=idkat]').val(response.responseJSON.data.kategori_id);
							$('input[name=img]').val(response.responseJSON.data.img);
							$('input[name=userfile]').prev('img').attr('src', response.responseJSON.data.url_img);
							$('input[name=caption]').val(response.responseJSON.data.caption);
							var tags = response.responseJSON.data.tag.split(',')
							$.each(tags, function(x,y){
								 $('option[value="'+y+'"]', $('.multiselect')).prop('selected', true);
								 $('option[value="'+y+'"]', $('.multiselect')).attr('selected', 'selected');
								 console.log(y);
							});
							$('select[name=tag]').multiselect('rebuild');
                        }else if(response.status == 401){
							 e('info','401 server conection error');
						}
                    },
					dataType:'json'
                })
		}
	};
	
	function sendFile(file, editor, welEditable) {
            data = new FormData();
            data.append("file", file);
            $.ajax({
                data: data,
                method: "POST",
                url: ServeUrl+"/artikel/"+Instansi+"/upload",
                cache: false,
                contentType: false,
                processData: false,
                complete: function(response) {
					if(response.status == 201){
					console.log(response.responseJSON.data.image)
                     $('#summernote').summernote("insertImage", response.responseJSON.data.image, 'filename');
					}
                },
				dataType:'json'
      })
	}	
	
	function deleteFile(file) {
            
            $.ajax({
                data: {"file" : file.split("/").pop()},
                method: "POST",
				cache: false,
                url: ServeUrl+"/artikel/"+Instansi+"/unupload",
                complete: function(response) {
					if(response.status == 200){
					console.log(response.responseJSON.data)
					console.log(file)
                     
					}
                },
				dataType:'json'
      })
	}	
	
	function loadKategori(){
		$.ajax({
					data: "",
					url: ServeUrl+"/kategori/"+Instansi+"/list_all",
                    crossDomain: false,
                    method: 'GET',
                    complete: function(response){ 				
                        if(response.status == 200){
							var append = '';
							$.each(response.responseJSON.data.data, function(k,v){
								append +='<option value=' + v.id + '>' + v.kategori.toUpperCase() + '</option>';
							});
							$('select[name=idkat]').html(append);
							loadTag();						
                        }else if(response.status == 401){
							 e('info','401 server conection error');
						}
                    },
					dataType:'json'
                })
	
	};
	
	function loadTag(){
		$.ajax({
					data: "",
					url: ServeUrl+"/tags/"+Instansi+"/list_all",
                    crossDomain: false,
                    method: 'GET',
                    complete: function(response){ 				
                        if(response.status == 200){
							var append = '';
							$.each(response.responseJSON.data.data, function(k,v){
								append +='<option value=' + v.nama_tag + '>' + v.nama_tag.toUpperCase() + '</option>';
							});
							$('select[name=tag]').html(append);
							$('.multiselect').multiselect();
							loadView();
                        }else if(response.status == 401){
							 e('info','401 server conection error');
						}
                    },
					dataType:'json'
                })
	
	};
	loadKategori();
	 
	$("#form-artikel").submit(function(event) {
		$(".btn-primary").prop("disabled", true);
		event.preventDefault();
		var tag = $('.multiselect').val();
		$('input[name=tags]').val(tag);

		
		var form = $(this)[0]; 
		var data = new FormData(form);
		var id = window.location.pathname.split('/').pop();
		if($.isNumeric(id)){
			var path = ServeUrl+"/artikel/"+Instansi+"/update/"+id;
		}else{
			var path = ServeUrl+"/artikel/"+Instansi+"/create";
		}
				$.ajax({
							data: data,
							url: path,
							method: 'POST',
							processData: false,
							contentType: false,
							cache: false,
							complete: function(response){                
							  if(response.status == 201){
								  
								  swal({
										title: '',
										text: response.responseJSON.message,
										type:'success',
										onClose: function () {
												window.location.replace(BaseUrl+'/admin/artikel');
										}
									}); 
							  }else if(response.status == 404){
								   swal({
										title: response.status+' Aborted!',
										text: response.responseJSON.message,
										type:'warning',
										onClose: function () {
										 										
										}
									});    
							  }else if(response.status == 401){
								e('info','401 server conection error');
							  }else{
								  swal({
										title: '',
										text: response.responseJSON.message,
										type:'warning',
										onClose: function () {
											 								
										}
									});	 
							  }
							  $(".btn-primary").prop("disabled", false);
							},
							dataType:'json'
				})
				 
	});
	
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
