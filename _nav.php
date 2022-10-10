
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="crud.php">iNote - CRD</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <?php
          echo '<a class="nav-link '. $actindex.'" aria-current="page" href="crud.php">Home</a>'
          ?>
        </li>
        <li class="nav-item">
          <?php
          echo '<a class="nav-link '. $actabout.'" href="crudAbout.php">About</a>'
          ?>
        </li>
        <li class="nav-item">
        <?php
        echo '<a class="nav-link '. $actcontact.'" href="crudContact.php">Contact</a>'
        ?>
        </li>

      </ul>
      <?php
      
//       if ($_SESSION['login']){
//       echo '<div class="dropdown">
//           <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
//             Welcome '.$_SESSION['username'].' 
//           </button>
//             <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
//               <li><a class="dropdown-item" href="logout.php">Log out</a></li>
//             </ul>
//       </div>';
//     }
//       // <!-- Button trigger modal -->
// if (!$_SESSION['login']) {
  //   } 
      echo '<button type="button" class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#exampleModal">
      Admin Login
      </button>'; 
        ?>
    </div>
  </div>
</nav>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login to iNote - CRD</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="_login.php" method = 'post'>
          <div class="mb-3">
            <label for="exampleFormControluser" class="form-label">User ID</label>
            <input name="userid" type="text" class="form-control" id="exampleFormControluser" placeholder="Enter your User ID">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlpass" class="form-label">Password</label>
            <input name="pass" type="text" class="form-control" id="exampleFormControlpass" placeholder="Password">
          </div>
          <button type="submit" class="btn btn-dark">Log in</button>
        </form>
      </div>
      
    </div>
  </div>
</div>