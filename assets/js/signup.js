$(function() {
    $("form[name='signup-form']").validate({
      // Define validation rules
      rules: {
        firstname: "required",
        lastname: "required",
        email: "required",
        countrycode: "required",
        phone: "required",
        city: "required",
        password: "required",
        confirmpassword: "required",
        firstname: {
          required: true
        },
        lastname: {
            required: true
          },
        email: {
          required: true,
          email: true
        },
        countrycode: {
          required: true
        },         
        phone: {
          required: true,
          minlength: 6,
          maxlength: 10,
          number: true
        },          
        city: {
          required: true
        },
        password: {
          required: true,
          minlength: 8,
          maxlength: 18
        },
        confirmpassword: {
            required: true,
            minlength: 8,
            maxlength: 18,
            equalTo: "#password"
          }           
      },
      // Specify validation error messages
      messages: {
        firstname: "Please enter your first name.",
        lastname: "Please enter your last name.",
        email: {
          required: "Please enter your email",
          minlength: "Please enter a valid email address"
        },
        countrycode: {
          required: "Please select your country code"
        },
        phone: {
          required: "Please provide a phone number",
          minlength: "Phone number must be min 8 characters long",
          maxlength: "Phone number must not be more than 18 characters long"
        },
        city: "Please enter your city",
        password: {
          required: "Please enter your password",
          minlength: "PPlease enter your password must be min 5 characters long",
          maxlength: "Please enter your password must not be more than 20 characters long"
        },
        confirmpassword: {
            required: "Please enter your confirm password",
            minlength: "PPlease enter your confirm password must be min 5 characters long",
            maxlength: "Please enter your confirm password must not be more than 20 characters long",
            equalTo: "Please enter your password and confirm password as same."
          }
      },
      submitHandler: function(form) {
        form.submit();
      }
    });
  }); 