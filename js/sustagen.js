 $(document).ready(function() {
  
  $("#owl-benefits-carousel").owlCarousel({
    items : 1,
    autoPlay: true,
    loop: true,
    lazyLoad : true,
    slideSpeed: 1000,
    navigation : true
  });

  $('#block-form').validate({
    messages: {
      firstname: "El nombre es requerido",
      lastname: "El apellido es requerido",
      dni: "El DNI es requerido",
      age: "La edad es requerida",
      email: {
        required: "El correo es requerido", 
        email: "Por favor ingrese un correo válido"
      },
      phone: "El teléfono es requerido",
      department: "El departamento es requerido",
      sede: "La sede es requerido",
      workshop: "El taller es requerido",
      terms: "Debe aceptar los términos y condiciones"
    }
  });

});


 $(document).ready(function(){
  // Add scrollspy to <body>
  $('body').scrollspy({target: ".navbar", offset: 50});   

  // Add smooth scrolling on all links inside the navbar
  $("#myNavbar a").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    }  // End if
  });
});