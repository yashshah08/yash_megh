<div class="contactSection">
  <div class="container">
    <div class="details">
      <div class="contacts">
        <div class="contact-class">
          <div class="icon">
            <i class="fa-solid fa-location-dot"></i>
          </div>
          <div class="contacts-text">
            <p>CYTO Compound Anand Sojitra Road Vithal Udhyognagar 388121 Gujarat </p>
          </div>

        </div>

        <div class="email contact-class">
          <div class="icon">
            <i class="fa-solid fa-envelope"></i>
          </div>
          <div class="contacts-text">
            <p><a href="mailto:info@grpolynets.com">info@grpolynets.com</a></p>
          </div>

        </div>

        <div class="contact-numb contact-class">
          <div class="icon">
            <i class="fa-solid fa-phone"></i>
          </div>
          <div class="contacts-text">
            <p><a href="tel:+912692230484">+91 2692230484</a></p>
            <p><a href="tel:+912692229370">+91 2692229370</a></p>
            <p><a href="tel:+912692237234">+91 2692237234</a></p>
          </div>

        </div>




      </div>

      <div class="form">
        <div class="contactForm">
          <? echo form_open('Contactus/sendmail','name="contact_form" id="contact_form" enctype="multipart/form-data" onsubmit="return validatecaptcha();"');?>
          <?if ($this->session->flashdata('error'))
							{
								echo "<div class='failure'>".$this->session->flashdata('error')."</div>";
							}
							if ($this->session->flashdata('message'))
							{
								echo "<div class='success'>".$this->session->flashdata('message')."</div>";
							} ?>
          <div class="input-group">
            <input type="text" placeholder="First Name*" name="txtname" maxlength="200" minlength="2"
              class="firstName required">
            <input type="hidden" name="txtname_V" value="Name">
            <!-- <input type="text" class="firstName" name="firstName" placeholder="First Name" required> -->
            <input type="text" placeholder="Last Name*" name="txtlname" maxlength="200" minlength="2"
              class="lastName required">
            <!-- <input type="hidden" name="txtlname_V" value="lastName"> -->

            <!-- <input type="text" class="lastName" name="lastName" placeholder="Last Name" required> -->
          </div>
          <div class="input-group">
            <input type="text" placeholder="Email*" name="txtemail" maxlength="200" minlength="2"
              class=" required email">
            <input type="hidden" name="txtemail_V" value="Email">
            <!-- <input type="email" class="" name="email" placeholder="Email" required> -->
            <input type="text" placeholder="Phone Number*" name="txtphone" maxlength="10" minlength="10"
              class="phone required number">
            <input type="hidden" name="txtphone_V" value="Phone">
            <!-- <input type="tel" class="phone" name="phoneNummber " placeholder="Phone Number " required> -->
          </div>
          <div class="input-group">
            <textarea class="message" placeholder="Subject" name="txtmessage" maxlength="500"></textarea>
          </div>
          <input type="hidden" name="txtmessage_V" value="Message">
          <div class="form-group input-group w-100">
            <div class="roboto">
              <? $keyvalue = '';
                          if ($this->session->userdata('ResultStr'))
                          {
                          $keyvalue = $this->session->userdata('ResultStr');
                          } ?>
              <input type="text" name="number" class="form-control forminput required" id="number"
                onblur="validatecaptcha()" placeholder="Enter Captcha Code">
              <label id="captchaerror" style="display:none;color:#ff0000;margin-top:10px;">Enter valid
                string</label>
              <label class="text-right"><img src="<?=site_url('Php_captcha')?>" alt="captcha"></label>
            </div>
          </div>

          <div class="btnarea btn">
            <input class="dispnon" name="field_name" type="text" style=" display:none">
            <input type="hidden" name="heading_V" value="Contact Details">
            <input type="hidden" name="footer_V" value="Megh Technologies All Rights Reserved.">
            <button type="submit" class="btn btn-green btn-submit hvr-shutter-out-horizontal">
              <i class="fa-solid fa-paper-plane"></i>Send</button>
          </div>


          <?php echo form_close(); ?>
        </div>

      </div>
    </div>
  </div>
  <div class="cyto-map">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14740.259010137479!2d72.924204!3d22.539247!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e4dddae13f6d3%3A0x7a446916a53b84c6!2sCYTO%20Rd%2C%20Vithal%20Udyognagar%2C%20GIDC%2C%20Anand%2C%20Gujarat%20388121%2C%20India!5e0!3m2!1sen!2sus!4v1704953161304!5m2!1sen!2sus"
      style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
</div>

<script>
jQuery.validator.addMethod("lettersonly", function(value, element) {
  return this.optional(element) || /^[a-z ]+$/i.test(value);
}, "Letters only please");

$().ready(function() {
  $("#contact_form").validate({
    rules: {
      //txtname:{lettersonly: true},
      txtname: {
        lettersonly: true,
      },
      txtlname: {
        lettersonly: true
      }
    }
  });
});
</script>
<script>
function validatecaptcha() {
  var flag = true;
  var captchacode = $('#number').val();
  if (captchacode != "") {
    $.ajax({
      type: "POST",
      url: "<? echo site_url('Contactus/checkcaptchacode'); ?>",
      data: {
        code: captchacode
      },
      async: false,
      success: function(data) {
        if (data == "false") {
          $("#captchaerror").show();
          flag = false;
        } else {
          $("#captchaerror").hide();
          flag = true;
        }
      }
    });
  } else {
    $("#captchaerror").hide();
    flag = true;
  }
  return flag;
}
</script>

<script type="text/javascript">
$("#document").change(function() {
  var val = $(this).val();
  switch (val.substring(val.lastIndexOf('.') + 1).toLowerCase()) {
    case 'doc':
    case 'pdf':
    case 'docx':
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