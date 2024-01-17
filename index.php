<?php
session_start();
?>
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

    <!-- Bootstrap JS -->
  
 <!-- JavaScript code for slide show: -->

 <!-- jQuery and Bootstrap JS--  -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!-- Owl Carousel JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

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
    <h1>Welcome <?php if (isset($_SESSION['username'])) echo $_SESSION["username"]; ?>, to Our Community Voting System!</h1>
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

<!-- Blog Post -->
<div class="container">
<div class="card mb-3">
    <div class="card-body">
    <h2>New Community Garden Project</h2>
    <p class="blog-meta">Posted on [Date] by [Author]</p>
    
    <img class="col-md-4" src="img/community_garden.jpg" alt="Community Garden Image" >
    
    <p>
      We are thrilled to announce the launch of our new Community Garden Project! This initiative aims to bring
      residents together to cultivate a green space that fosters a sense of community and promotes sustainable living.
    </p>
    
    <p>
      The garden will feature various sections for growing fruits, vegetables, herbs, and flowers. We invite all
      interested residents to participate in this exciting project. Whether you're an experienced gardener or just
      getting started, your contribution is valuable.
    </p>
    
    <p>
      To get involved, please attend our upcoming community meeting on [Date] at [Location]. We'll discuss the
      project in detail, assign roles, and share ideas. Let's work together to create a vibrant and flourishing
      community garden!
    </p>
    
    <p>
      Stay tuned for further updates on our blog and community announcements. Your support makes our community
      stronger and greener.
    </p>
  </div>
</div>
</div>
<!-- End of Blog Post -->

  <!-- End of candidate cards  -->
  
 <!-- Owl Carousel JS jquery , Candidate Profile -->
 <script src="js/script.js"></script>
  <!-- footer -->
<?php
include "footer.php";
?>


</body>
</html>
