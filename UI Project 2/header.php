<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>SaveWeavers.com | Online Shopping For Men's, Women's and Kids</title>
      <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;900&display=swap" rel="stylesheet">
      
      
      <link rel="stylesheet" href="css/plugin.css">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/custom.css">
      <link rel="stylesheet" href="css/fontawesome.min.css">
     <link rel="stylesheet" href="css/line-awesome.min.css">
     
      <link rel="icon" type="image/png" sizes="32x32" href="img/favicon.png">
      <style>
         body{
         font-family: 'Montserrat', sans-serif;
         }
      </style>
   </head>
   <body>
      <section class="header header--6">
         <div class="menu_area menu6">
            <div class="container">
               <nav class="navbar navbar-bg navbar-expand-lg navbar-dark px-0">
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent6" aria-controls="navbarSupportedContent6" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="la la-bars"></span>
                  </button>
                  <a href="index.php"><img src="https://www.saveweavers.com/assets/images/logo.png" alt="logo"></a>
                  <div class="collapse navbar-collapse order-md-1" id="navbarSupportedContent6">
                     <ul class="navbar-nav">
                        <li class="nav-item">
                           <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown">
                           <a class="nav-link" href="ProductList.php">Saree</a>
                        </li>
                        <li class="nav-item ">
                           <a class="nav-link " href="aboutUs.php">About Us</a>
                        </li>
                        <li class="nav-item ">
                           <a class="nav-link " href="contact.php">Contact</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link " href="logout.php">Logout</a>
                        </li>
                        <li class="nav-item ">
                        <a class="nav-link " href="index.php"> 
                           <?php session_start(); include 'database.php';
                           if(isset($_SESSION['userid'])){ 
                              
                              echo "Hello ".$_SESSION['userid']."";
                           } 
                             ?>
                         </a>
                        </li>

                     </ul>
                     <!-- end: .navbar-nav -->
                  </div>
                  <div class="nav_right_content d-flex align-items-center order-2 order-sm-2">
                     <div class="nav_right_module cart_module ">
                        <div class="cart__icon">
                           <a href="login.php">
                           <span class="la la-user"></span>
                           </a>
                        </div>
                     </div>
                    
                     <div class="nav_right_module cart_module">
                        <div class="cart__icon">
                           <a href="viewCart.php">
                           <span class="la la-shopping-cart"></span>
                           <span class="cart_count">0</span>
                           </a>
                        </div>
                     </div>
                     <!-- end .cart_module -->
                     <div class="nav_right_module search_module">
                        <span class="la la-search search_trigger"></span>
                        <div class="search_area">
                           <form:form id="mainSearchForm" method="post" action="search-results">
                              <input type="hidden" name="{_csrf.parameterName}" value="{_csrf.token}" />
                              <div class="input-group input-group-light">
                                 <span class="icon-left">
                                 <i class="la la-search"></i>
                                 </span>
                                 <input type="text" name="searchString" id="searchString" class="form-control search_field" placeholder="Type words and hit enter...">
                              </div>
                           </form:form>
                        </div>
                     </div>
                  </div>
               </nav>
            </div>
         </div>
         <!-- end menu area -->
      </section>
