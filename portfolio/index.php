<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    

    <title>Hello, world!</title>
    <style type="text/css">
      @import url('https://fonts.googleapis.com/css?family=Raleway:200,100,400');
      html,body
      {
        height: 100%;
        margin: 0;
      }
      .footer {
       position: fixed;
       left: 0;
       bottom: 0;
       color: white;
       text-align: center;
       width: 100%
     }
     a
     {
      font-family: 'Raleway', sans-serif;
      color: #ccc;
      font-size: 18px;
      margin-right: 20px;
      letter-spacing: 3px; 
      font-weight: bold;
      text-transform: uppercase;
     }
       /* width */
  ::-webkit-scrollbar {
    width: 6px;
  }

  /* Track */
  ::-webkit-scrollbar-track {
    background: #f1f1f1; 
  }
   
  /* Handle */
  ::-webkit-scrollbar-thumb {
    background: #888; 
  }

  /* Handle on hover */
  ::-webkit-scrollbar-thumb:hover {
    background: #555; 
  }
    </style>
  </head>
  <body>
    <div class="container-fluid p-0 " style="height: 100%;">
     <nav class="navbar navbar-expand-lg navbar-light" style="height: 10%;position: sticky;top: 0;z-index: 1;background :#eeeeee">
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#" onclick="fetchFile('home.php')">Home <span class="sr-only">(current)</span></a>
            </li>
             <li class="nav-item active">
              <a class="nav-link" href="#">about <span class="sr-only">(current)</span></a>
            </li>
             <li class="nav-item active">
              <a class="nav-link" href="#" onclick="fetchFile('Skills.php')">Skills <span class="sr-only">(current)</span></a>
            </li>
             <li class="nav-item active">
              <a class="nav-link" href="#" onclick="fetchFile('education.php')">education <span class="sr-only">(current)</span></a>
            </li>
             <li class="nav-item active">
              <a class="nav-link" href="#" onclick="fetchFile('work.php')">work <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#" onclick="fetchFile('contact.php')">Contact <span class="sr-only">(current)</span></a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <button class="btn btn-outline-success my-2 my-sm-0" style="background: navy;color:white;font-weight: bold;font-size: 20px" type="submit">S</button>
          </form>
        </div>
      </nav>
      <div style="height: 90%" id="addData">
        <?php include('files/work.php')  ?>
      </div>
    </div>
    <div class="footer" style="background: lightgray">
      <p>Footer</p>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script>
      function fetchFile(filename)
      {
          $("#addData").load("files/"+filename);
      }
    </script>
  
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>