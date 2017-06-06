<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>NoTes hUb</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="add.css">

  <style type="text/css">
      footer{
        margin-bottom: 0px;
        margin-top: 35px;
      }
      body{
        background: url('bk.jpg') no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  color: white;
      }
       .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width:100%;
      margin: auto;
      min-height: 300px;
      max-height: 450px;
  }==$0
  
      a{
        color: #23d5a4;
        font-size: 19px;

      }
      .icon-bar{
        background-color: #23d5a4;
      }
      .img-thumbnail{
        height: 400px;
        width: 100%;
      }
    </style> 
    
</head>
<body>
    <nav class="navbar navbar-fixed-top" role="navigation" style="background-color: white">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><b style="color:#23d5a4;font-size: 25px;">WoRk SamPLe</b></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right" style="font-family:Ebrima;">
                    
                    <li>
                        <a href="#myCarousel">Coursel</a>
                    </li> 
                    <li><a href="#footer">Footer</a></li>
                    <li><a href="#reg">Form</a></li>
                                       
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
      </nav>
      <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
     <div class="carousel-inner">
            <div class="item active" role="listbox">

             <img src="67.jpg"  >
              
                
            </div>
            <div class="item">
                 <img src="ji.jpg" >
                
            </div>
            <div class="item">
               <img src="lp.jpg" >
                
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>
    <div class="container-fluid">
     <div class="row">
     <div class="col-md-6">
     <br><br><br><br>
     <img class="img responsive img-thumbnail" src="tr.jpg">
     </div>
     <div class="col-md-6" style="background-image: 'back.jpg';" id="signu">
     <form id="reg" action="#" method="post" role="form" style="display: block;">
                <h2 class="text-center">Sign Up</h2><br>
                  <div class="form-group">
                    <input type="text" name="username" id="username"  class="form-control" placeholder="Username" required="">
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" id="password"  class="form-control" placeholder="Password" required="">
                  </div>
                 
                  <div class="form-group">
                    <input type="text" name="branch" id="bran" class="form-control" placeholder="Branch Of Your Course" required="">
                  </div>
                  <div class="form-group">
                    <input type="text" name="college" id="col" class="form-control" placeholder="Enter Your College Name" required="">
                  </div> 
                  <div class="form-group">
                  <input type="text" name="date" class="form-control" placeholder="DOB(yyyy-mm-dd)" required="">
                  </div>
                  <div class="form-group">
                  <input type="email" name="email" class="form-control" placeholder="Enter Your Email Id" required="">
                  </div>
                  <div class="form-group">
                  <input type="text" name="con" class="form-control" placeholder="Enter Your Contact Number">
                  </div>


                  <div class="form-group text-center">
                  <button class="btn btn-default" type="submit" name="sign" style="background-color: white;color:#23d5a4;margin-top: 15px;font-size: 20px;margin-bottom: 20px;">Submit</button>

                  </div> 

              </form>

     </div>
     </div>
    </div>



 <div class="container-fluid" id="footer">
<div class="row text-center">
  <div class="col-md-4">
  <br><br>
  <h2>OFFICE:</h2>
  <br>
  <br>
  <span>123,abcd sector-3,Noida,Uttar Pradesh</span>
  </div>
  <div class="col-md-4">
  <br><br>
  <h2>PHONE:</h2><br><br>
  <span>0120-123-4567</span>
  </div>
  <div class="col-,d-4">
  <br><br>
  <h2>EMAIL:</h2><br><br>
  <span>abcdefg123@gmail.com</span>
  </div>
  </div><br><br>
</div>




 <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    </body>
    </html>