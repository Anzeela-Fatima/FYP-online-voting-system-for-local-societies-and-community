    // JavaScript code for slide show:
    let slideIndex = 0;
    const slides = document.getElementsByClassName("slides");

    function slideShow() {
      for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  // Hide all images 
      }

      slideIndex++;

      if (slideIndex > slides.length) {
        slideIndex = 1;  // by this it'll start from first picture once reached last image
      }

      slides[slideIndex - 1].style.display = "block";  // Display the current image
      setTimeout(slideShow, 2000);  // Change image every 2 seconds (2000 milliseconds)
    }

    slideShow();  // call  slideshow finction : start slideshow
//END OF SLIDESHOW CODE



    // <!-- Owl Carousel JS jquery , Candidate Profile -->
  //jQuery and Bootstrap JS-- 
    $(document).ready(function () {
      $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        responsive: {
          0: {
            items: 1
          },
          600: {
            items: 2
          },
          1000: {
            items: 3
          }
        }
      })
    });
//end  
  

