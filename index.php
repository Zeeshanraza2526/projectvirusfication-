<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Virusfication</title>
    <link rel="icon" href="images/icon.ico">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel="stylesheet" href="eb.css">
    <script src="js/regex.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body data-spy="scroll" data-target="#navbar-scroll" ng-app = "myapp" ng-controller = "mycontroller">
    <nav class="navbar navbar-inverse navbar-fixed-top" id="navbar-scroll">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                 data-target="#navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">VIRUSFICATION</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
               <ul class="nav navbar-nav navbar-right">
                  <li class="active"><a href="">Home</a></li>
                  <li class="dropdown">
                      <a href="" class="dropdown-toggle" data-toggle="dropdown"
                       role="button">Content<span class="caret"></span></a>
                       <ul class="dropdown-menu">
                           <li><a href="blogs/blogs.html">Blogs</a></li>
                           <li><a href="signup.php">Clinic Identifier</a></li>
                           <li><a href="signup.php">Symptoms Checker</a></li>
                           <li><a href="videos.html">Videos</a></li>
                           <li><a href="pictures.html">Pictures</a></li>
                           
                       </ul>
                   </li>
                  <li><a href="#team">Our Team</a></li>
                  <li data-toggle="modal" data-target="login"><a href="login.php">Login</a></li>
                  <li><a href="signup.php">Signup</a></li>
               </ul>
            </div>
        </div>
    </nav>
    <div class="cover">
       <div class="cover-text">
         <h1>Virusfication</h1>
         <p class="lead">
           Virusfication is a platform which provide complete information of any 
           virus its all details.
           We also find for you a nearby hospital/clinic for any of your disease.
           We also provide complete checkup facility online what you have to do is 
           just to click the button <b>below</b>.
         </p>
    <!-- Button trigger modal -->
     <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#signup">
      Like to checkup? click here! 
     </button>
  
  <!-- Modal -->
  
       </div>
    </div>
    <section class="products" id="why-us">
      <div class="container">
        <h2>Content</h2>
        <div class="row">
          <div class="col-sm-4">
            <a href="blogs/blogs.html">
            <img src="images/b.gif" alt="" class="img">
            <h4>Blogs</h4>
            <p>Following are the content provided by our top students and faculty to give you the best possible knowledge.</p>
          </a> 
          </div>
          <div class="col-sm-4">
              <a href="signup.php">
              <img src="images/h.gif" alt="" class="img">
              <h4>Clinic Identifier</h4>
              <p>
                "Clinic Identifier" identify the clinic near you.
              </p>
              </a> 
            </div>
          <div class="col-sm-4">
                <a href="signup.php">
                <img src="images/c.gif" alt="" class="img">
                <h4>Symptoms Checker</h4>
                <p>"Symptoms Checker" check your symptoms and gives you suggestion of precautions regardingly.</p>
                </a>
              </div>
        </div>
      </div>
    </section>
    
    <section>
      <h2>What we do?</h2>
      <div class="container">
        <div class="row">
          <div class="col-sm-4" >
            <h3>Research</h3>
            <p>We provide a complete information gathered from prominent and well known 
              resources for you.
            </p>
          </div>
          <div class="col-sm-4" id="wtf">
              <h3>Our hospital detection service</h3>
              <p>We detect a nearby hospital/clinic for you so you can 
                get a checkup. no muss no fuss we will find an apropriate
                clinic for you. 
              </p>
          </div>
          <div class="col-sm-4" id="vot">
                <h3>Our Online Services</h3>
                <p>By our 2d body model you can get a complete report
                  of your body pain/illness. And our online doctor and smart chatbot 
                  are always here for your any queries. 
                </p>
          </div>  
        </div>
      </div>
    </section>
    <section id="team">
      <div class="container">
        <h2>Meet Our Team</h2>
        <div class="row">
          <div class="col-sm-4">
            <img src="images/t.jpg" alt="taimoor" title="Taimoor" class="img-circle" style="width:150px;height:150px">
            <h4>Taimoor Hasan</h4>
            <p>            </p>
          </div>
          <div class="col-sm-4">
              <img src="images/f.jpg" alt="asad" style="width:150px;height:150px" class="img-circle">
              <h4>Furqan Siddiqui</h4>
              <p></p>
          </div>
          <div class="col-sm-4">
                <img src="images/z.png" alt="humayuon" class="img-circle" style="width:150px;height:150px">
                <h4>Zeeshan</h4>
                <p></p>
          </div>
          
            
        </div>
      </div>
    </section>
    <footer id="contact">
      crafted with &hearts; in calgary by <a href="">sTh</a>
    </footer> 
<!--     <div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
              <h2 class="modal-title" id="exampleModalLongTitle">Signup Information</h2>
              
            </div>
            <div class="modal-body">
              <div class="row" style="margin-left:90px" style="background-color: burlywood">
                <div class="col-sm-8">
     
                    <form style="background-color:">
                         <div class="form-group">
                          <label for="forname">First name:</label>
                          <input type="text" id="forfirstname" class="form-control" required>
                         </div>
                         <div class="form-group">
                             <label for="foremail">Last Name:</label>
                             <input type="text" id="forlastname" class="form-control" required>
                         </div>
                         <div class="form-group">
                             <label for="yourmessage">Your @mail:</label>
                             <input type="email" id="foremail" class="form-control" required>
                         </div>
                         <div class="form-group">
                          <label for="yourmessage">Create Password:</label>
                          <input type="password" id="forpassword" class="form-control" required>
                      </div>     
                         <button type="submit" class="btn btn-primary">SUBMIT</button>
                    </form>
                </div>
            </div>   
            </div> -->
            <!-- <div class="modal-footer">
              <input type="reset" value="Reset" class="btn btn-secondary btn-light">
              <button type="button" class="btn btn-secondary btn-danger" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div> -->
      <!-- </div> -->
<!-- 
      <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
              <h2 class="modal-title" id="exampleModalLongTitle">Login Information</h2>
              
            </div>
            <div class="modal-body">
              <div class="row" style="margin-left:90px" style="background-color: burlywood">
                <div class="col-sm-8">
     
                    <form style="background-color:">
                         <div class="form-group">
                         <div class="form-group">
                             <label for="yourmessage">Your @mail:</label>
                             <input type="email" id="foremail" class="form-control" required>
                         </div>
                         <div class="form-group">
                          <label for="yourmessage">Enter Your Password:</label>
                          <input type="password" id="forpassword" class="form-control" required>
                      </div>     
                      <button type="submit" class="btn btn-primary" 
                        ><a href="profile.html">login</a></button>
                    </form>
                </div>
            </div>   
            </div>
            <div class="modal-footer">
              <input type="reset" value="Reset" class="btn btn-secondary btn-light">
              <button type="button" class="btn btn-secondary btn-danger" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
       -->





    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  </body>
</html>