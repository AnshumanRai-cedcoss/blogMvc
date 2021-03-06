<?php 
// echo "<pre>";
// print_r($data);
// echo "</pre>";
?>
<!doctype html>
<htmAbhishek mcl lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.88.1">
  <title></title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/">



  <!-- Bootstrap core CSS -->
  <link href="../../../public/node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" 
  crossorigin="anonymous">


  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>


  <!-- Custom styles for this template -->
  <link href="./assets/css/dashboard.css" rel="stylesheet">
</head>

<body>

  <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Company name</a>
      <div class="nav-item text-nowrap">
        <a class="nav-link px-3" href="signout.php">Sign out</a>
      </div>
    </div>
  </header>

  <div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-3">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="pages/dashboard">
                <span data-feather="home"></span>
                Dashboard
              </a>
            </li>
          </ul>
        </div>
      </nav>

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center
         pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Add Blog</h1>
          <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
              <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
              <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
            </div>
            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
              <span data-feather="calendar"></span>
              This week
            </button>
          </div>
        </div>
       

        <form class="row g-3" action="" method="POST" enctype="multipart/form-data">
            <div class="row">
            <div class="col-md-6">
            <label for="pname" class="form-label">Title</label>
            <input type="text" class="form-control" id="pname" name="pname" required >
          </div>
          </div>
          <div class="row">
          <div class="col-md-6">
            <label for="list" class="form-label">Text</label>
           <textarea name="blogText" id="list" cols="60"  rows="10"></textarea>
          </div>
          </div>
          <div class="row">
          <div class="col-md-6">
            <label for="list" class="form-label">Image</label>
            <input type="file" name="c_image" width="150px" height="100px">
          </div>
          </div>
              <br><br>
              <div class="col-md-3">
            <button type="submit" class="btn btn-primary" name="addButton">Add Blog</button>
            </div>
          </div>
        </form>
      </main>
    </div>
  </div>


  <script src="../../../public/node_modules/bootstrap/dist/js/bootstrap.bundle.js" 
  integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
  crossorigin="anonymous"></script>
</body>

</html>