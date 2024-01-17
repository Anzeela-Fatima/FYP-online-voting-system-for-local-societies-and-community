<?php
$directoryURI = $_SERVER['REQUEST_URI'];
//This line fetches the current URL being accessed by the server and stores it in the variable $directoryURI.

$path = parse_url($directoryURI, PHP_URL_PATH);
//parse_url() function is used to extract the path component from the URL stored in $directoryURI.
// This extracted path is then stored in the variable $path.

$components = explode('/', $path);
//The explode() function is used to split the $path string into an array ($components) using the forward slash (/) as the delimiter.
$page = $components[1];
//Finally, the code assigns the value of the third element (index 2) from the $components array to the variable $page.
// This assumes that the URL has at least two forward slashes in its path and therefore the third element will contain the page name.

function isPageActive($currentPage, $expectedPage) {
// Helper function to check if a given page is active
  return $currentPage === $expectedPage ? 'active' : '';
}
?>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-custom">
    <div class="container">
        <a class="navbar-brand" href="#">Your Logo</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
                <!-- Home Link -->
                    <li class="nav-item <?php if ($page == 'index.php' || $page == '') echo "active"; ?>">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>

                <!-- Candidate Profile Link -->
                    <li class="nav-item <?php if ($page == 'candidates.php') echo "active"; ?>">
                        <a class="nav-link" href="candidates.php">Candidate Profile</a>
                    </li>

                <!-- Complain Link -->
                    <li class="nav-item <?php if ($page == 'complain.php') echo "active"; ?>">
                        <a class="nav-link" href="complain.php">Complain</a>
                    </li>

                <!-- Result Link -->
                    <li class="nav-item <?php if ($page == '#') echo "active"; ?>">
                        <a class="nav-link" href="#">Result</a>
                    </li>
                <!-- Logout -->
                    <?php if (isset($_SESSION['LoggedIn']) && $_SESSION['LoggedIn'] == true)
                            {
                                echo '<li class="nav-item active">
                                    <a class="nav-link" href="logout.php">Logout</a>
                                </li>';
                            }
                    ?>

                <!-- My Profile Dropdown Link -->
                    <li class="nav-item dropdown <?php if ($page == 'profile') echo "active"; ?>">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            My Profile
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item <?php echo ($page == 'profile.php') ? 'active' : ''; ?>" href="Profile.php">View Profile</a>
                            <a class="dropdown-item <?php echo ($page == 'login.php') ? 'active' : ''; ?>" href="login.php">Login</a>
                            <!-- Add other user-related options as needed -->
                        </div>
                    </li>
            </ul>
        </div>
    </div>
</nav>