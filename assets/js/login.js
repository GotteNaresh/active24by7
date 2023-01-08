$(function() {
    $("form[name='login-form']").validate({
      // Define validation rules
      rules: {
        username: "required",
        password: "required",
        username: {
          required: true,
          email: true
        },
        password: {
            required: true
          }
      },
      // Specify validation error messages
      messages: {
        username: {
          required: "Please enter your email",
          email: "Please enter a valid email address"
        },
        password: {
          required: "Please enter your password",
          minlength: "PPlease enter your password must be min 5 characters long",
          maxlength: "Please enter your password must not be more than 20 characters long"
        }
      },
      submitHandler: function(form) {
        form.submit();
      }
    });
  }); 