var processing = 0;
$(document).ready(function(){
  $(".openFormBtn").click(function(){
    $("#registerDialogContainer").fadeIn(200);
  });

  $(document).on("keypress", ".number", function(e) {
    if (e.which < 48 || e.which > 57) {
        e.preventDefault();
    }
  });

  $("#registerDialogContainer").click(function(e){
    if ($(e.target).is("#registerDialogContainer")) {
      $(this).fadeOut(200);
    }
  });

  // Allow only letters for first name
  $(document).on("input", "#mce-FNAME", function() {
    this.value = this.value.replace(/[^a-zA-Z\u0600-\u06FF\s.]/g, '');
  });

  $(document).on("blur", "#mce-FNAME", function() {
    const formatted = this.value
      .toLowerCase()
      .replace(/\b\w/g, c => c.toUpperCase());
    this.value = formatted;
  });

  $("#submit-button").on("click", function(e){
    if(processing) return;
    e.preventDefault();

    const formData = {
      prefix: $("#mce-PREFIX").val(),
      fname: $("#mce-FNAME").val(),
      lname: $("#mce-LNAME").val(),
      gender: $("#mce-GENDER").val(),
      org: $("#mce-ORG").val(),
      orgType: $("#mce-ORGTYPE").val(),
      job: $("#mce-JOB").val(),
      email: $("#mce-EMAIL").val(),
      phone: $("#mce-PHONE").val(),
      parmg: $("#mce-PARMG").val()
    };

    // Basic validation
    for (const key in formData) {
      if (key !== "prefix" && !formData[key]) {
        alert("Please fill all required fields.");
        return;
      }
    }

    $("#submit-button").css({'background':'#555'});
    processing = 1;

    grecaptcha.ready(function() {
      grecaptcha.execute('6Legk-IrAAAAAHRQKNYqUA9m5qLVqzXgmd93RyIX', {action: 'register'}).then(function(token) {

        formData['recaptchaToken'] = token;

        $.ajax({
          url: "/",
          type: "POST",
          data: JSON.stringify(formData),
          contentType: "application/json",
          success: function(response){
            processing = 0;
            $("#submit-button").css({'background':'#3BA8C5'});
            if(response.success){
              alert(response.message);
              //$("#registerForm")[0].reset();
            } else {
              alert(response.message);
            }
          },
          error: function(){
            processing = 0;
            $("#submit-button").css({'background':'#3BA8C5'});
            alert("Something went wrong. Please try again.");
          }
        });
      });
    });
  });

  $(document).on('click', '.tab_block_main ul li a', function (e) {
    var curTabContentId = $(this).attr('href');
    $(this).parents('.tab_block_main').find('ul li a').removeClass('active');
    $(this).addClass('active');
    $(this).parents('.tab_block_main').find('.tab_content .tab_block').removeClass('active');
    $(curTabContentId).addClass("active");
    e.preventDefault();
  });

});
