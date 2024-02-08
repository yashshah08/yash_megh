<div class="inner_content">
	<div class="container">
		<div class="row">
			<button class="hvr-shutter-out-horizontal" class="btn btnbuledark" data-toggle="modal" data-target="#myModal">Inquiry Now</button>
		</div>
	</div>
</div>
<div class="modal fade" id="myModal" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h1 class="modal-title">Inquiry Now</h1>
			</div>
			<div class="modal-body">
				<div class="formarea popup">
					<form name="inquiry_form" id="inquiry_form" method="post">
						<div class="success" id="successmsg" style="display:none;">Thank You for Contact Us. We wil back to you Soon.</div>
						<div class="failure" id="errormsg" style="display:none;">Something Went Wrong. Please try again!</div>
						<div class="failure" id="captchaerrormsg" style="display:none;">Enter valid captcha code</div>
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<input type="text" placeholder="First Name*" name="txtfname" maxlength="100" minlength="2" class="form-control required">
									<input type="hidden" name="txtfname_V" value="Name">
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<input type="text" placeholder="Last Name*" name="txtlname_V" maxlength="100" minlength="2" class="form-control required">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<input type="text" placeholder="Phone No.*" name="txtphone" maxlength="10" minlength="10" class="form-control required number">  
									<input type="hidden" name="txtphone_V" value="Phone">
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<input type="text" placeholder="Email*" name="txtemail" maxlength="200" minlength="2" class="form-control required email">
									<input type="hidden" name="txtemail_V" value="Email">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<textarea class="form-control" name="txtsubject" maxlength="500" placeholder="Subject"></textarea>
									<input type="hidden" name="txtsubject_V" value="Subject">
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<textarea class="form-control" name="txtcomment" maxlength="500" placeholder="Comments"></textarea>
									<input type="hidden" name="txtcomment_V" value="Comments">
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="roboto">
								<label class="pull-left"><img src="<?=site_url('php_captcha')?>"></label>
								<? $keyvalue = '';
								if ($this->session->userdata('ResultStr'))
								{
									$keyvalue = $this->session->userdata('ResultStr');
								} ?>
								<input type="text" name="number_V" class="form-control required" id="number" onblur="validatecaptcha()" placeholder="Enter Captcha Code">
								<label id="captchaerror" style="display:none;color:#ff0000;margin-top:10px;">Enter valid string</label>
							</div>
						</div>
						<div class="btnarea popup_btn">
                            <input type="hidden" name="heading_V" value="Contact Details">
								<input type="hidden" name="footer_V" value="Megh Technologies All Rights Reserved.">
						   <button type="button" class="btn btn-green btn-submit hvr-shutter-out-horizontal" id="btnsubmit" onclick="sendInquiryform()">SUBMIT</button> 
						</div> 
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	jQuery.validator.addMethod("lettersonly", function(value, element) 
	{
		return this.optional(element) || /^[a-z ]+$/i.test(value);
	}, "Letters only please");

	$().ready(function()
	{
		$("#inquiry_form").validate(
		{
			rules:
			{
				txtfname:{lettersonly: true},
				txtlname_V:{lettersonly: true}
			}
		});
	});

	function sendInquiryform()
	{
		if($("#inquiry_form").valid())
		{
			var form = $('#inquiry_form').serialize();
			$('#btnsubmit').prop('disabled',true);
			$.ajax(
			{
				type:"POST",
				url	:"<?php echo site_url('Dashboard/sendInquiryMail');?>",
				data:form,
				success: function(data)
				{
					if(data == 1)
					{
						$('#successmsg').show();
						$('#successmsg').delay(3000).fadeOut();
					}
					else if(data == 2)
					{
						$('#captchaerrormsg').show();
						$('#captchaerrormsg').delay(3000).fadeOut();
					}
					else
					{
						$('#errormsg').show();
						$('#errormsg').delay(3000).fadeOut();
					}
					$('#btnsubmit').prop('disabled',false);
					$("#captchaerror").hide();
					$('#inquiry_form')[0].reset();
				}
			});
		}
	}
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
				url: "<? echo site_url('Dashboard/checkcaptchacode'); ?>",
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