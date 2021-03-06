<?php


?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.88.1">
  <title>Dashboard Template · Bootstrap v5.1</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/">
  <!-- Bootstrap core CSS -->
  <link href="../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
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

  <header class="navbar navbar-dark sticky-t
          //  echo $did ;op bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Cedcoss Technology</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" 
    type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" 
    aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
    <div class="navbar-nav">
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
              <a class="nav-link active" aria-current="page" href="/pages/userDash/admin">
                <span data-feather="home"></span>
                Dashboard
              </a>
            </li>
            <li class="nav-item">
            <form action="/pages/signUp"  method="POST">
          <button type="submit"  class="btn-primary">Add New User</button>
        </form>
            </li>
        </ul>
       </div> 
      </nav>

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        
        <h2>Users</h2>
        <div class="table-responsive">
            <!-- Datatable -->
            <?php
              $html = "";
              $html .= '<table class="table table-striped table-sm">
                <thead>
                  <tr>
                    <th scope="col">User id</th>
                    <th scope="col">UserName</th>
                    <th scope="col">Email</th>
                    <th scope="col">Status</th>
                    <th scope="col">Change Status</th>
                    <th scope="col">DELETE</th>
                  </tr>
                </thead>
                <tbody>';
          

            foreach ($data as $k => $v) {
                  $html .= '<tr>
                        <td>' . $v["user_id"] . '</td>
                        <td>' . $v["user_name"] . '</td>
                        <td>' . $v["email"] . '</td>
                        <td>' . $v["status"] . '</td>
                        <td>
                        <form action="" method = "POST">
                        <input name="status" type="hidden" value=' . $v["status"] . '>
                        <input name="id" type="hidden" value=' . $v["user_id"] . '>
                        <button name="chStatus"  class="btn btn-primary"  type="submit">Change</button> </form>
                        </td>
                        <td>
                     <form action="" method = "POST">
                     <input name="deleteId" type="hidden" value=' . $v["user_id"] . '>
                     <button name="delete" class="btn btn-danger " id="deleteUser" type="submit">DELETE</button></form>
                        </td>
                        </tr>';
            }
                $html .=  '</tbody>
                </table>';
                echo $html;
                ?>
    </div>
        </div>
       
      </main>
    </div>
  </div>
  <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="../../../public/assets/js/scriptUser.js"></script>  
</body>

</html>