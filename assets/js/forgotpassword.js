$(function() {
    $("form[name='forgotpassword-form']").validate({
      rules: {
        email: "required",
        email: {
          required: true,
          email: true
        }
      },
      messages: {
        email: {
          required: "Please enter your email",
          email: "Please enter a valid email address"
        }
      },
      submitHandler: function(form) {
        form.submit();
      }
    });
  }); 