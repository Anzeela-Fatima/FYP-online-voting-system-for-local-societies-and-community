<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Meta tags, title, and CSS links -->
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <!-- Header -->
  <?php
include "navbar.php";
?>
  <!-- Complaint Section -->
  <div class="container mt-4">
 <!-- First Preset Complaint -->
<div class="card mb-3">
    <div class="card-body">
      <h5 class="card-title">Preset Complaint 1</h5>
      <!-- Voting mechanism (buttons and count display.) -->
      <div class="voting-section">
        <button class="btn btn-success" onclick="upvote()">Upvote</button>
        <button class="btn btn-danger" onclick="downvote()">Downvote</button>
        <span class="vote-count">0</span>
      </div>
      <!-- Show number of votes -->
      <p class="card-text">Description of the complaint...</p>
    </div>
  </div>

   <!-- Second Preset Complaint -->
<div class="card mb-3">
    <div class="card-body">
      <h5 class="card-title">Preset Complaint 2</h5>
      <!-- Voting mechanism (buttons and count display.) -->
      <div class="voting-section">
        <button class="btn btn-success" onclick="upvote()">Upvote</button>
        <button class="btn btn-danger" onclick="downvote()">Downvote</button>
      <!-- Show number of votes -->
        <span class="vote-count">0</span>  
        <!-- ye vote-count ki class call hogi or iska textcontent update ho k display hota jaega -->
      </div>
      
      <p class="card-text">Description of the complaint...</p>
    </div>
  </div>

      <!-- Complain Form -->
      <div class="col-md-6">
        <h3>Submit a New Complaint</h3>
        <form>
          <!-- Complaint submission form fields -->
          <div class="form-group">
            <label for="complaint">New Complaint</label>
            <textarea class="form-control" id="complaint" rows="4" placeholder="Describe your complaint"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>

    <!-- 'Other' Complaint Section 
    <div class="mt-4">
      <h2>Other/Additional Complaint</h2>
      <p>If your complaint is not listed above, please submit it here:</p>
       Form for 'Other' complaints -->
      <!--<form>
        <div class="form-group">
          <label for="otherComplaint">Other Complaint</label>
          <textarea class="form-control" id="otherComplaint" rows="4" placeholder="Describe your complaint"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div> 
  </div> -->

     <!-- Footer -->

     <?php
include "footer.php";
?>


  <!-- Bootstrap JS and any custom scripts -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!-- Your custom scripts -->
  <script>

        //VOTE COUNT:

let voteCount = 0; // Initial vote count

  // Function to handle upvoting
  function upvote() {
    voteCount++;
    updateVoteCount();
  }

  // Function to handle downvoting
  function downvote() {
    voteCount--;
    updateVoteCount();
  }

  // Function to update the displayed vote count
  function updateVoteCount() {
    const voteCountElement = document.querySelector('.vote-count'); 
//  document.querySelector() is usedto select the element with the class name 'vote-count'. 
//This function looks through the entire document and finds the first element that matches the specified CSS selector.

    voteCountElement.textContent = voteCount;
    // It sets the textContent property of the HTML element with the class 'vote-count'
    // to the value stored in the voteCount variable.
  }
  </script>
</body>
</html>
