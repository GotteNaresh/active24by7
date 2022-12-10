$(function() {
    $("form[name='lead-us-form']").validate({
      // Define validation rules
      rules: {
        name: "required",
        email: "required",
        slot: "required",
        countrycode: "required",
        phone: "required",
        title: "required",
        course: "required",
        message: "required",
        name: {
          required: true
        },
        email: {
          required: true,
          email: true
        },
        slot: {
          required: true
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
        title: {
          required: true
        },
        course: {
          required: true
        },          
        message: {
          required: true
        }
      },
      // Specify validation error messages
      messages: {
        name: "Please provide a valid name.",
        email: {
          required: "Please enter your email",
          minlength: "Please enter a valid email address"
        },
        slot: {
          required: "Please select your time slot"
        },
        countrycode: {
          required: "Please select your country code"
        },
        phone: {
          required: "Please provide a phone number",
          minlength: "Phone number must be min 10 characters long",
          maxlength: "Phone number must not be more than 10 characters long"
        },
        title: "Please enter title",
        course: "Please enter course",
        message: "Please enter your message"
      },
      submitHandler: function(form) {
        form.submit();
      }
    });
  }); 