<?php 
$role =  $data[0];
array_pop($data);
?>
 <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Shop Item - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../../../public/node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    </head>
    <body>
        <header>
            <div class="collapse bg-dark" id="navbarHeader">
              <div class="container">
                <div class="row">
                  <div class="col-sm-8 col-md-7 py-4">
                  </div>
                  <div class="col-sm-4 offset-md-1 py-4">
                    <h4 class="text-white">Contact</h4>
                    <ul class="list-unstyled">
                      <li><a href="#" class="text-white">Follow on Twitter</a></li>
                      <li><a href="#" class="text-white">Like on Facebook</a></li>
                      <li><a href="#" class="text-white">Email me</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="navbar navbar-dark bg-dark shadow-sm">
              <div class="container">
                <a href="#" class="navbar-brand d-flex align-items-center">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" 
                  stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                   stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24">
                   <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2
                    2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>
                  <strong>Blog</strong>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
                data-bs-target="#navbarHeader" aria-controls="navbarHeader" 
                aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              </div>
            </div>
          </header>
        <!-- Product section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                <?php 
                        ?>
                    <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" height="400vh" width="90%",
                    src="../../../public/images/<?php echo $data["img"]?>" alt="..." /></div>
                    <div class="col-md-6">
                        
                    
                        <div class="small mb-1"><h1>SKU: <?php echo $data["id"]; ?></h1></div>
                        <h1 class="display-5 fw-bolder"><?php echo $data["title"]; ?></h1>
                        <p class="lead"><?php echo $data["text"]?></p>
                        <div class="d-flex">
                          <?php if($role != "user")
                            {?>
                       <form action="/pages/edit/<?php echo $data["id"]; ?>" method="post">
                       <input type="hidden" name="id" id="pro_id" value = "" >
                       <input class="btn btn-primary" id="edit" type="submit" name="Edit" value="Edit Blog">
                       </form>
                       <?php } ?>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- Related items section-->

        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">&copy; CEDCOSS Technologies</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html> 