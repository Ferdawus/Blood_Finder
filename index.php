<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- tailwindcss -->
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <!-- owl carosel -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.green.min.css">

    
    <link rel="stylesheet" href="css/custom.css">
    <title>Blood_Finder</title>
  </head>
  <body>
    <!-- header strat -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
      <a class="navbar-brand" href="#"><img src="img/logo.png" alt="logo"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Our team</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
        </form> 
        
      </div>
      </div>
    </nav>
    <!-- header end -->

    <!--banner  strat  -->
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active ">
          <img src="img/istockphoto-1291381371-170667a.jpg" class="d-block w-100" alt="img1" height="600px">
          
          <div class="carousel-caption d-none d-md-block item">
            
            <div class="carousel-custom">
              <h3 class="text-4xl" >Donate blood,save life !</h3>
              <h1 class="text-2xl">
                  YOUR BLOOD  
                  <br>
                  CAN BRING SMILE  
                  <br />
                  IN OTHER PERSON FACE
              </h1>

            <a href="users/register.php" class="btn btn-primary">Register</a>
            <a href="users/login.php" class="btn btn-primary">Login</a>
          </div>
        </div>

        </div>
        <div class="carousel-item">
          <img src="img/istockphoto-1291381371-170667a.jpg" class="d-block w-100" height="600px" alt="img2">
          <div class="carousel-caption d-none d-md-block">
            <div class="carousel-custom">
           <h3 class="text-4xl">Donate blood,save life !</h3>
              <h2 class="text-2xl">
                  YOUR BLOOD  
                  <br>
                  CAN BRING SMILE  
                  <br />
                  IN OTHER PERSON FACE
              </h2>
              <div class="button-custom">
             <a href="users/register.php" class="btn btn-primary">Register</a>
            <a href="users/login.php" class="btn btn-primary">Login</a>
            </div>
            </div>  
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/istockphoto-1291381371-170667a.jpg" class="d-block w-100" height="600px"alt="img3">
          <div class="carousel-caption d-none d-md-block">
            <div class="carousel-custom">
             <h3 class="text-4xl">Blood Donation Is Great!</h3>
             <h2 class="text-2xl">
                Act Of Kindness
             </h2>
             <a href="users/register.php" class="btn btn-primary">Register</a>
            <a href="users/login" class="btn btn-primary">Login</a>
            </div>
          </div>
        </div>
      </div>
      
    </div>
    <!--banner  strat  -->

    <!-- blood finder strat -->


    <section class="blood-finder">
      <div class="container">
        <div class="col-md-12">
          <h2 class="text-center p-5">Blood Finder</h2>
        </div>
      <div class="col-md-11 m-auto">
        <!-- single item -->
        <form action="result.php" method="post" enctype="multipart/form-data">
          <div class="form-row form-group">
              <label for="Distict" class="col-form-label col-md-1">Distict:</label>
              <div class="col-md-3">
                <select class="form-control" type="text" name="Location">
                  <option value="">Choose option......</option>
                  <option value="চট্টগ্রাম জেলা">চট্টগ্রাম জেলা</option>
                  <option value="ঢাকা জেলা">ঢাকা জেলা</option>
                  <option value="রাজশাহী জেলা">রাজশাহী জেলা</option>
                  <option value="সিলেট জেলা">সিলেট জেলা</option>
                  <option value="ময়মনসিংহ জেলা">ময়মনসিংহ জেলা</option>
                  <option value="বরিশাল জেলা">বরিশাল জেলা</option>
                  <option value="রংপুর জেলা">রংপুর জেলা</option>
                  <option value="Khulna">খুলনা জেলা</option>
                  <option value="কুমিল্লা জেলা">কুমিল্লা জেলা</option>
                  <option value="ফেনী জেলা">ফেনী জেলা</option>
                  <option value="ব্রাহ্মণবাড়িয়া জেলা">ব্রাহ্মণবাড়িয়া জেলা</option>
                  <option value=" রাঙ্গামাটি জেলা"> রাঙ্গামাটি জেলা</option>
                  <option value="নোয়াখালী জেলা">নোয়াখালী জেলা</option>
                  <option value=" চাঁদপুর জেলা"> চাঁদপুর জেলা</option>
                  <option value="লক্ষ্মীপুর, জেলা">লক্ষ্মীপুর, জেলা</option>
                  <option value=" নরসিংদী জেলা"> নরসিংদী জেলা</option>
                  <option value="মুন্সীগঞ্জ জেলা">মুন্সীগঞ্জ জেলা</option>
                  <option value="নারায়ণগঞ্জ  জেলা">নারায়ণগঞ্জ  জেলা</option>
                  <option value="মানিকগঞ্জ  জেলা">মানিকগঞ্জ  জেলা</option>
                  <option value="গাজীপুর জেলা">গাজীপুর জেলা</option>
                  <option value="কিশোরগঞ্জ জেলা">কিশোরগঞ্জ জেলা</option>
                  <option value="জামালপুর জেলা">জামালপুর জেলা</option>
                  <option value="শেরপুর জেলা">শেরপুর জেলা</option>
                  <option value="নেত্রকোণা জেলা">নেত্রকোণা জেলা</option>
                  <option value="টাঙ্গাইল জেলা">টাঙ্গাইল জেলা</option>
                  <option value="ফরিদপুর জেলা">ফরিদপুর জেলা</option>
                  <option value="গোপালগঞ্জ জেলা">গোপালগঞ্জ জেলা</option>
                  <option value="শরীয়তপুর জেলা">শরীয়তপুর জেলা</option>
                  <option value="মাদারীপুর জেলা">মাদারীপুর জেলা</option>
                  <option value="রাজবাড়ি জেলা">রাজবাড়ি জেলা</option>
                  <option value="কক্সবাজার জেলা">কক্সবাজার জেলা</option>
                  <option value="বান্দবান জেলা">বান্দবান জেলা</option>
                  <option value="রাঙামাটি জেলা">রাঙামাটি জেলা</option>
                  <option value="খাগড়াছড়ি জেলা">খাগড়াছড়ি জেলা</option>
                  <option value="চাঁদপুর জেলা">চাঁদপুর জেলা</option>
                  <option value="নাটোর জেলা">নাটোর জেলা</option>
                  <option value="নওগাঁ জেলা">নওগাঁ জেলা</option>
                  <option value="নওয়াবগঞ্জ জেলা">নওয়াবগঞ্জ জেলা</option>
                  <option value="বগুড়া জেলা">বগুড়া জেলা</option>
                  <option value="পাবনা জেলা">পাবনা জেলা</option>
                  <option value="সিরাজগঞ্জ জেলা">সিরাজগঞ্জ জেলা</option>
                  <option value="জয়পুরহাট জেলা">জয়পুরহাট জেলা</option>
                  <option value="লালমনিরহাট জেলা">লালমনিরহাট জেলা</option>

                  <option value="কুড়িগ্রাম জেলা">কুড়িগ্রাম জেলা</option>
                  <option value="নীলফামারী জেলা">নীলফামারী জেলা</option>
                  <option value="পঞ্চগড় জেলা">পঞ্চগড় জেলা</option>
                  <option value="দিনাজপুর জেলা">দিনাজপুর জেলা</option>
                  <option value="ঠাকুরগাঁও জেলা">ঠাকুরগাঁও জেলা</option><option value="সাতক্ষীরা জেলা">সাতক্ষীরা জেলা</option>
                  <option value="বাগেরহাট জেলা">বাগেরহাট জেলা</option>
                  <option value="যশোর জেলা">যশোর জেলা</option>
                  <option value="ঝিনাইদহ জেলা">ঝিনাইদহ জেলা</option>
                  <option value="নড়াইল জেলা">নড়াইল জেলা</option>
                  <option value="মাগুরা জেলা">মাগুরা জেলা</option>
                  <option value="কুষ্টিয়া জেলা">কুষ্টিয়া জেলা</option>
                  <option value="চূয়াডাঙ্গা  জেলা">চূয়াডাঙ্গা  জেলা</option>
                  <option value="মেহেরপুর জেলা">মেহেরপুর জেলা</option>
                  <option value="ঝালকাঠি জেলা">ঝালকাঠি জেলা</option>
                  <option value="পিরোজপুর জেলা">পিরোজপুর জেলা</option>
                  <option value="পটুয়াখালী জেলা">পটুয়াখালী জেলা</option>
                  <option value="বরগুনা জেলা">বরগুনা জেলা</option>
                  <option value="ভোলা জেলা">ভোলা জেলা</option>
                  <option value="হবিগঞ্জ জেলা">হবিগঞ্জ জেলা</option>
                  <option value="মৌলভীবাজার জেলা">মৌলভীবাজার জেলা</option>
                </select>
              </div>
              <!-- single item -->
              <label for="BloodGroup" class="col-form-label col-md-2"> BloodGroup:</label>
              <div class="col-md-3">
                <select class="form-control" type="text" name="BloodGroup">
                  <option value="">Choose option......</option>
                  <option value="A+">A+</option>
                  <option value="B+">B+</option>
                  <option value="AB+">AB+</option>
                  <option value="A-">A-</option>
                  <option value="B-">B-</option>
                  <option value="AB-">AB-</option>                
                </select>
              </div>

              <input type="submit" name="submit" value="Search" class="btn btn-outline-success">
            </div>
        </form>
            
      </div>
    </div>
    </section>
     <!-- blood finder end-->
     <!-- owl carousel strat -->
     <div id="ourteam" class="section-padding bg-red-400">
      <div class="container">
        <div class="owl-carousel owl-theme">
        <!-- single item -->
        <div class="item card">
          <div class="ourteam-item">
             <div class="img-fluid">
               <img src="img/2.jpeg" alt="ii">
             </div>
             <h3>
               <a href="">Jahid</a>
             </h3>
             <h4>
               <a href="">Web Designer</a>
             </h4>
             <div class="description">
               <p>Lorem ipsum dolor sit amet consectetur adipisicing, elit. Eum, quae autem corrupti tempore! Dolorem nesciunt incidunt veritatis consequatur voluptatum at officiis inventore recusandae sed temporibus.</p>
             </div>
          </div>
        </div>

         <!-- single item -->
        <div class="item card">
          <div class="ourteam-item">
             <div class="img-fluid">
               <img src="img/3.jpeg" alt="ii">
             </div>
             <h3>
               <a href="">Jahid</a>
             </h3>
             <h4>
               <a href="">Web Designer</a>
             </h4>
             <div class="description">
               <p>Lorem ipsum dolor sit amet consectetur adipisicing, elit. Eum, quae autem corrupti tempore! Dolorem nesciunt incidunt veritatis consequatur voluptatum at officiis inventore recusandae sed temporibus.</p>
             </div>
          </div>
        </div>
         <!-- single item -->
        <div class="item card">
          <div class="ourteam-item">
             <div class="img-fluid">
               <img src="img/3.jpeg" alt="ii">
             </div>
             <h3>
               <a href="">Jahid</a>
             </h3>
             <h4>
               <a href="">Web Designer</a>
             </h4>
             <div class="description">
               <p>Lorem ipsum dolor sit amet consectetur adipisicing, elit. Eum, quae autem corrupti tempore! Dolorem nesciunt incidunt veritatis consequatur voluptatum at officiis inventore recusandae sed temporibus.</p>
             </div>
          </div>
        </div>

        <div class="item card">
          <div class="ourteam-item">
             <div class="img-fluid">
               <img src="img/5.jpeg" alt="ii">
             </div>
             <h3>
               <a href="">Jahid</a>
             </h3>
             <h4>
               <a href="">Web Designer</a>
             </h4>
             <div class="description">
               <p>Lorem ipsum dolor sit amet consectetur adipisicing, elit. Eum, quae autem corrupti tempore! Dolorem nesciunt incidunt veritatis consequatur voluptatum at officiis inventore recusandae sed temporibus.</p>
             </div>
          </div>
        </div>

         <div class="item card">
          <div class="ourteam-item">
             <div class="img-fluid">
               <img src="img/5.jpeg" alt="ii">
             </div>
             <h3>
               <a href="">Jahid</a>
             </h3>
             <h4>
               <a href="">Web Designer</a>
             </h4>
             <div class="description">
               <p>Lorem ipsum dolor sit amet consectetur adipisicing, elit. Eum, quae autem corrupti tempore! Dolorem nesciunt incidunt veritatis consequatur voluptatum at officiis inventore recusandae sed temporibus.</p>
             </div>
          </div>
        </div>
        
         <div class="item card">
          <div class="ourteam-item">
             <div class="img-fluid">
               <img src="img/5.jpeg" alt="ii">
             </div>
             <h3>
               <a href="">Jahid</a>
             </h3>
             <h4>
               <a href="">Web Designer</a>
             </h4>
             <div class="description">
               <p>Lorem ipsum dolor sit amet consectetur adipisicing, elit. Eum, quae autem corrupti tempore! Dolorem nesciunt incidunt veritatis consequatur voluptatum at officiis inventore recusandae sed temporibus.</p>
             </div>
          </div>
        </div>
        
         <div class="item card">
          <div class="ourteam-item">
             <div class="img-fluid">
               <img src="img/5.jpeg" alt="ii">
             </div>
             <h3>
               <a href="">Jahid</a>
             </h3>
             <h4>
               <a href="">Web Designer</a>
             </h4>
             <div class="description">
               <p>Lorem ipsum dolor sit amet consectetur adipisicing, elit. Eum, quae autem corrupti tempore! Dolorem nesciunt incidunt veritatis consequatur voluptatum at officiis inventore recusandae sed temporibus.</p>
             </div>
          </div>
        </div>
        
         <div class="item  card">
          <div class="ourteam-item">
             <div class="img-fluid">
               <img src="img/5.jpeg" alt="ii">
             </div>
             <h3>
               <a href="">Jahid</a>
             </h3>
             <h4>
               <a href="">Web Designer</a>
             </h4>
             <div class="description">
               <p>Lorem ipsum dolor sit amet consectetur adipisicing, elit. Eum, quae autem corrupti tempore! Dolorem nesciunt incidunt veritatis consequatur voluptatum at officiis inventore recusandae sed temporibus.</p>
             </div>
          </div>
        </div>
        


      </div>
       
     </div>
   </div>


     <!-- owl carousel end -->
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <!--  -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/owl.js"></script>
  </body>
</html>