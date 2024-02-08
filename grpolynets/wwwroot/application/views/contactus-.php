<div class="inner_content">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-6">
				<div class="forms">
					<h1>Contact Form</h1>
					<div class="contact_form">
						<? echo form_open('Contactus/sendmail','name="contact_form" id="contact_form" enctype="multipart/form-data" onsubmit="return validatecaptcha();"');?>
							<?if ($this->session->flashdata('error'))
							{
								echo "<div class='failure'>".$this->session->flashdata('error')."</div>";
							}
							if ($this->session->flashdata('message'))
							{
								echo "<div class='success'>".$this->session->flashdata('message')."</div>";
							} ?>
							<div class="form-group">
								<select class="myval required" name="txtprefix">
									<option value="">Prefix</option>
									<option value="Miss">Miss</option>
									<option value="Mrs">Mrs</option>
									<option value="Mr">Mr</option>
								</select>
                                <input type="hidden" name="txtprefix_V" value="Prefix">
							</div>
							
							<div class="form-group">
								<input type="text" placeholder="Name*" name="txtname" maxlength="200" minlength="2" class="form-control required">
								<input type="hidden" name="txtname_V" value="Name">
							</div>
							<!--<div class="form-group">
								<input type="text" placeholder="First Name*" name="txtfname" maxlength="100" minlength="2" class="form-control required">
								<input type="hidden" name="txtfname_V" value="Name">
							</div>
							<div class="form-group">
								<input type="text" placeholder="Last Name*" name="txtlname_V" maxlength="100" minlength="2" class="form-control required">   
							</div>-->
							<div class="form-group">
								<input type="text" placeholder="Phone No.*" name="txtphone" maxlength="10" minlength="10" class="form-control required number">  
								<input type="hidden" name="txtphone_V" value="Phone">
							</div>
							<div class="form-group">
								<input type="text" placeholder="Email*" name="txtemail" maxlength="200" minlength="2" class="form-control required email">   
								<input type="hidden" name="txtemail_V" value="Email">
							</div>
							<div class="form-group">
								<input type="text" placeholder="Subject*" name="txtsubject" maxlength="200" minlength="2" class="form-control required">    
								<input type="hidden" name="txtsubject_V" value="Subject">
							</div>
							<div class="form-group">
								<label class="paddnone">Gender<span class="redcor">*</span></label>
								<div class="radio-inline required">
									<label><input type="radio" name="txtgender" class="required" value="Male">Male</label>
								</div>
								<div class="radio-inline">
									<label><input type="radio" name="txtgender" class="required" value="Female">Female</label>
								</div>
								<input type="hidden" name="txtgender_V" value="Gender">
							</div>
							<div class="form-group">
								<label>Attach Document <span class="redcor">*</span></label>
								<input type="file" class="form-control" name="document" id="document" accept=".doc,.docx,.pdf">
								<div id="filemsg"></div>
							</div>    
							<div class="form-group">
								<textarea class="form-control" placeholder="Message" name="txtmessage" maxlength="500" ></textarea> 
								<input type="hidden" name="txtmessage_V" value="Message">
							</div>
							<div class="form-group">
								<div class="roboto">
									<label class="pull-left"><img src="<?=site_url('php_captcha')?>" alt="image" alt="" loading="lazy"></label>
									<? $keyvalue = '';
									if ($this->session->userdata('ResultStr'))
									{
										$keyvalue = $this->session->userdata('ResultStr');
									} ?>
									<input type="text" name="number_V" class="form-control required" id="number" onblur="validatecaptcha()" placeholder="Enter Captcha Code">
									<label id="captchaerror" style="display:none;color:#ff0000;margin-top:10px;">Enter valid string</label>
								</div>
							</div>  
							<div class="btnarea">
								<input type="hidden" name="heading_V" value="Contact Details">
								<input type="hidden" name="footer_V" value="Megh Technologies All Rights Reserved.">
								<button type="submit" class="btn btn-green btn-submit hvr-shutter-out-horizontal">Submit</button>
							</div>
						<?php echo form_close(); ?>
					</div>
				</div>   
			</div>
		</div>
	</div>
</div>
<script>
	jQuery.validator.addMethod("lettersonly", function(value, element)
	{
		return this.optional(element) || /^[a-z ]+$/i.test(value);
	}, "Letters only please");

	$().ready(function()
	{
		$("#contact_form").validate(
		{
			rules:
			{
				//txtname:{lettersonly: true},
				txtfname:{lettersonly: true},
				txtlname_V:{lettersonly: true}
			}
		});
	});
</script>
<script>
	function validatecaptcha()
	{
		var flag = true;
		var captchacode = $('#number').val();
		if(captchacode != "")
		{
			$.ajax(
			{
				type: "POST",
				url: "<? echo site_url('Contactus/checkcaptchacode'); ?>",
				data: {code: captchacode},
				async: false,
				success : function (data)
				{
					if(data=="false")
					{
						$("#captchaerror").show();
						flag = false;
					}
					else
					{
						$("#captchaerror").hide();
						flag = true;
					}
				}
			});
		}
		else
		{
			$("#captchaerror").hide();
			flag = true;
		}
		return flag;
	}
</script>

<script type="text/javascript">
	$("#document").change(function() 
	{
		var val = $(this).val();
		switch(val.substring(val.lastIndexOf('.') + 1).toLowerCase())
		{
			case 'doc': case 'pdf': case 'docx':
				$("#filemsg").hide();
				break;
			default:
				$(this).val('');
				
				$("#filemsg").show();
				document.getElementById("filemsg").style.color = "red";
				$("#filemsg").html('.doc,.pdf,.docx Only');
				break;
		}
	});
</script>