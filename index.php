<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>wintips.com</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/blog-home.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">WINTips</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="#" data-toggle="modal" data-target="#myModal">sign up</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" id="signin" data-toggle="modal" data-target="#myModal2">login</a>
              </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container-fluid">
   <div class="content">
      <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

          <!--<h1 class="my-4">Today Tips
          </h1>-->

          <!-- Blog Post -->
          <div class="card mb-4">
            <img class="card-img-top" src="images/lew.jpg" alt="Card image cap">
            <div class="card-body">
              <h2 class="card-title">Featured Games</h2>
                <table class="table table-dark">
                  <thead>
                    <tr>
                      <th scope="col"></th>
                      <th scope="col">Match</th>
                      <th scope="col">Tip</th>
                      <th scope="col">Odds</th>
                        <th scope="col">Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Basel Vs Manchester utd</td>
                      <td>U2.5</td>
                      <td>2.34</td>
                        <td>WON</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>PSG vs celtic</td>
                      <td>1 or OV2.5</td>
                      <td>1.29</td>
                        <td>WON</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Anderlecht vs bayern munchen</td>
                      <td>2</td>
                      <td>1.3</td>
                        <td>WON</td>
                    </tr>
                  </tbody>
                </table>
            </div>
            <div class="card-footer text-muted">
              Posted on January 1, 2017 by
              <a href="#"></a>
            </div>
          </div>
            <!--tips table-->
            <div class="row">
                <div class="col-md-8">
                    
                </div>
            </div>
          <!-- Pagination -->
          <!--<ul class="pagination justify-content-center mb-4">
            <li class="page-item">
              <a class="page-link" href="#">&larr; Older</a>
            </li>
            <li class="page-item disabled">
              <a class="page-link" href="#">Newer &rarr;</a>
            </li>
          </ul>-->

        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

          <!-- Search Widget -->
          <div class="card my-4">
            <h5 class="card-header">Search</h5>
            <div class="card-body">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                  <button class="btn btn-success" type="button">Go!</button>
                </span>
              </div>
            </div>
          </div>

          <!-- Categories Widget -->
          <div class="card my-4 bg-light">
            <h5 class="card-header">Categories</h5>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-6">
                  <div id="exampleAccordion" data-children=".item">
                  <div class="item">
                    <a data-toggle="collapse" data-parent="#exampleAccordion" href="#exampleAccordion1" aria-expanded="true" aria-controls="exampleAccordion1">
                      Singles
                    </a>
                    <div id="exampleAccordion1" class="collapse show" role="tabpanel">
                      <p class="mb-12">
                       singles
                      </p>
                    </div>
                  </div>
                  <div class="item">
                    <a data-toggle="collapse" data-parent="#exampleAccordion" href="#exampleAccordion2" aria-expanded="false" aria-controls="exampleAccordion2">
                      Tripples
                    </a>
                    <div id="exampleAccordion2" class="collapse" role="tabpanel">
                      <p class="mb-12">
                       tripples
                      </p>
                    </div>
                  </div>
                   <div class="item">
                    <a data-toggle="collapse" data-parent="#exampleAccordion" href="#exampleAccordion3" aria-expanded="false" aria-controls="exampleAccordion3">
                     Multiples 
                    </a>
                    <div id="exampleAccordion3" class="collapse show" role="tabpanel">
                      <p class="mb-12">
                        not available
                      </p>
                    </div>
                  </div>
                </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Side Widget -->
          <div class="card my-4">
            <h5 class="card-header">VVIP TIPS</h5>
            <div class="card-body">
              VVIP tips are coming soon!
            </div>
          </div>

        </div>

      </div>
      <!-- /.row -->

    </div>
       
    <!-- /.container -->
      </div>
      <div id="myModal" class="modal fade" role="dialog" style="color: black;">
        <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
            <h4 class="modal-title">User signup</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button><br>
      </div>
      <div class="modal-body">
          <form method="post" id="signupform">
      	<label>Email</label>
        <input type="email" name="email" id="email" class="form-control">
        <label>Phone</label>
        <input type="text" name="phone" id="phone" class="form-control">
        <label>Password</label>
        <input type="password" name="password" id="password" class="form-control"><br>
        <input type="button" name="submit" id="submitsignup" value="submit" align="right" class="btn btn-success">
         </form>
         </div>
       
    </div>
          </div>
      </div>
       <div id="myModal2" class="modal fade" role="dialog" style="color: black;">
        <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
            <h4 class="modal-title">Login</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button><br>
      </div>
      <div class="modal-body">
          <form method="post" id="loginform">
               <div id="err"></div>
        <label>Phone</label>
        <input type="text" name="phone" id="phonelogin" class="form-control">
        <label>Password</label>
        <input type="password" name="password" id="passwordlogin" class="form-control"><br>
        <input type="button" name="submit" id="submitlogin" value="submit" align="right" class="btn btn-success">
         </form>
         </div>
       
    </div>
          </div>
      </div>
    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; wintips 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/jquery/app.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
