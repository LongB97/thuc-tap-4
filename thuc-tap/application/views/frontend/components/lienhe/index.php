<?php echo form_open( base_url()."lien-he"); ?>
<section>
	<div class="container">
	<div class="col-md-3">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 list-menu pull-left">
                    <?php $this->load->view('frontend/modules/category'); ?> 
                </div>
                	
                
	</div>
	
		<div class="col-md-6 ">
			<div class="section-article contactpage" style="
    padding-left: 20px;">
			<?php 
				echo validation_errors();
				
			 ?>
			   	<form accept-charset="UTF-8" action="<?php echo base_url() ?>lien-he" id="contact" method="post">
					<input name="FormType" type="hidden" value="contact">
					<input name="utf8" type="hidden" value="true">
						<h1 style="color: black">Liên hệ với chúng tôi</h1>				
					
				    <div class="form-comment">
				        <div class="form-group">
				            <label for="name"><em> Họ tên</em><span class="required">*</span></label>
				            <input id="name" name="fullname" type="text" value="" class="form-control">
				        </div>
				        <div class="form-group">
				            <label for="email"><em> Email</em><span class="required">*</span></label>
				            <input id="email" name="email" class="form-control" type="email" value="">
				        </div>
				        <div class="form-group">
				            <label for="phone"><em> Số điện thoại</em><span class="required">*</span></label>
				            <input type="number" id="phone" class="form-control" name="phone">

				        </div>
				        <div class="form-group">
				            <label for="message"><em> Tiêu đề</em><span class="required">*</span></label>
				            <textarea id="message" name="title" class="form-control custom-control" rows="2"></textarea>
				        </div>
				        <div class="form-group">
				            <label for="message"><em> Lời nhắn</em><span class="required">*</span></label>
				            <textarea id="message" name="content" class="form-control custom-control" rows="6"></textarea>
				        </div>

				        <button type="submit" class="btn-update-order" >
				        	
				        </style>Gửi nhận xét</button>

				    </div>
			   </form>
			</div>
		</div>
	</div>

</section>