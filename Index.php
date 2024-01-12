<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="css/style.css">
  <!-- Owl Carousel CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
 
</head>
<body>
  <!-- Bootstrap Navbar with dropdown -->
<?php
include "navbar.php";
?>

  <!-- Banner Image Slideshow -->
  <div class="slideshow">
    <img src="img/banner/hotel.jpg" class="slides">
    <img src="img/banner/outdoors-colorful-children-playground-background.jpg" class="slides">
    <img src="img/banner/public-square-with-empty-road-floor-downtown.jpg" class="slides">
  </div>



  <!-- Welcome message -->
  <div class="welnote">
    <h1>Welcome to our Community Voting System!</h1>
    <p>Your participation matters greatly. This platform is where your opinions shape our shared future. Take the
      opportunity to engage in our democratic process, evaluating and electing leaders who will drive positive change
      within our community. Together, let's build a stronger, more unified community where every voice counts, every
      vote matters, and every decision reflects our collective aspirations. Start exploring, voting, and making a
      difference today!</p>
  </div>

  <!-- Candidate Cards Container-->
  <div class="container">
    <div class="owl-carousel owl-theme">
  <!-- Candidate Cards Container-->

      <div class="item">
        <div class="portfolio-card">
          <img src="img/candidate_images/handsome-corporate-man-real-estate-agent-assistant-smiling-hold-hands-together-how-may-i-help-you-smiling-friendly-polite-assist-customer-white-background.jpg"
            alt="Project Image">
          <!-- Card content -->
          <h3>Project Title</h3>
          <p class="manifesto">Description of the project goes here.</p>
         <!-- number of votes display -->
          <p class="votes bg-success">1234 Votes</p>
         <!-- buttons  -->
          <a href="#" class="btn btn-primary">View Profile</a>
          <a href="#" class="btn btn-success">Cast Vote</a>
        </div>
      </div>

      <!-- Add more .item divs with portfolio-card as needed -->
      <div class="item">
        <div class="portfolio-card">
          <img
            src="img/candidate_images/smiling-young-male-professional-standing-with-arms-crossed-while-making-eye-contact-against-isolated-background.jpg"
            alt="Project Image">
          <!-- Card content -->
          <h3>Project Title</h3>
          <p class="manifesto">Description of the project goes here.</p>
         <!-- number of votes display -->
         <p class="votes bg-success">1234 Votes</p>
         <!-- buttons  -->
          <a href="#" class="btn btn-primary">View Profile</a>
          <a href="#" class="btn btn-success">Cast Vote</a>
        </div>
      </div>
      <div class="item">
        <div class="portfolio-card">
          <img src="img/candidate_images/handsome-corporate-man-real-estate-agent-assistant-smiling-hold-hands-together-how-may-i-help-you-smiling-friendly-polite-assist-customer-white-background.jpg">
          <!-- Card content -->
          <h3>Project Title</h3>
          <p class="manifesto">Description of the project goes here.</p>
         <!-- number of votes display -->
         <p class="votes bg-success">1234 Votes</p>
         <!-- buttons  -->
          <a href="#" class="btn btn-primary">View Profile</a>
          <a href="#" class="btn btn-success">Cast Vote</a>
        </div>
      </div>
      <div class="item">
        <div class="portfolio-card">
          <img src="img/candidate_images/smiling-young-male-professional-standing-with-arms-crossed-while-making-eye-contact-against-isolated-background.jpg"
            alt="Project Image">
          <!-- Card content -->
          <h3>Project Title</h3>
          <p class="manifesto">Description of the project goes here.</p>
         <!-- number of votes display -->
         <p class="votes bg-success">1234 Votes</p>
         <!-- buttons  -->
          <a href="#" class="btn btn-primary">View Profile</a>
          <a href="#" class="btn btn-success">Cast Vote</a>
        </div>
      </div>
      <div class="item">
        <div class="portfolio-card">
          <img
            src="img/candidate_images/handsome-corporate-man-real-estate-agent-assistant-smiling-hold-hands-together-how-may-i-help-you-smiling-friendly-polite-assist-customer-white-background.jpg">
          <!-- Card content -->
          <h3>Project Title</h3>
          <p class="manifesto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit vel ut, autem est
            adipisci numquam, reiciendis minima debitis et consequatur nulla provident possimus rerum consectetur
            mollitia labore obcaecati commodi nihil necessitatibus repudiandae, reprehenderit non fugiat enim officiis?
            Adipisci, inventore distinctio dolor fugiat nemo delectus aliquam, nobis fugit accusamus accusantium odio
            iste maxime necessitatibus sequi unde quod. Incidunt labore totam aut alias reiciendis deserunt rem
            molestias aperiam nulla expedita aliquam molestiae eum, doloribus minus architecto corporis rerum. Veniam
            odio esse, architecto dolore numquam ea! Fuga fugiat maiores animi non commodi harum sit magni porro,
            voluptates illo rem repellendus cum ratione minus deleniti ullam facere ea assumenda atque nihil labore
            molestias. Magnam qui temporibus obcaecati quis iure eos quos officiis tempore, minus esse sapiente expedita
            voluptate accusantium a velit blanditiis perspiciatis repellat corrupti odio aut est error? Blanditiis
            reprehenderit facere provident sit dolor deleniti ducimus, asperiores doloremque consectetur ea nam, iure
            eius!.</p>
         <!-- number of votes display -->
         <p class="votes bg-success">1234 Votes</p>
         <!-- buttons  -->
          <a href="#" class="btn btn-primary">View Profile</a>
          <a href="#" class="btn btn-success">Cast Vote</a>
        </div>
      </div>


    </div>
  </div>

  <!-- End of candidate cards  -->
  
  <!-- footer -->
<?php
include "footer.php";
?>
  <!-- Bootstrap JS -->
  
 <!-- JavaScript code for slide show: -->
 <!-- Owl Carousel JS jquery , Candidate Profile -->
 <script src="js/script.js"></script>

 <!-- jQuery and Bootstrap JS--  -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!-- Owl Carousel JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

</body>
</html>
