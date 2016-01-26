$(document).ready( function() {
   $("#contactForm").submit( function(event) {
      event.preventDefault();

      if ($("form")[0].checkValidity()) {
         var post = $.post( "contact.php", 
            {
               name: $("input#fullname").val(),
               email: $("input#email").val(),
               message: $("textarea#message").val()
            });
         post.done(function(data) {
            $("#form_result").empty().append("Thank You! I'll be in touch shortly.");
         });
         post.fail(function(data) {
            $("#form_result").empty().append("Oops. Looks like there was a problem on my end. Please try again!");
         });
      } else $("#contactForm").validate({
          rules: {
              fullname: {
                  required: !0
              },
              email: {
                  required: !0,
                  email: !0
              },
              message: {
                  required: !0
              }
          },
          messages: {
              fullname: "A valid name is needed",
              email: "A valid email is needed.",
              message: "A comment or question is needed."
          },
          errorContainer: "#errorContainer",
          errorLabelContainer: "#errors",
          wrapper: "li"
      });
   });
});
