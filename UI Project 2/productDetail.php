    
      <?php include 'header.php';?>
      <head>
         <title>Save Weavers.com</title>
         <style>
            .btn-circle.btn-sm {
            width: 40px;
            height: 43px;
            padding: 6px 0px;
            border-radius: 15px;
            font-size: 15px;
            text-align: center !important;
            }
            .product-details .product-info .product-actions .flex-wrap {
            display: flex !important;
            align-items: center !important;
            }
            .product-details .product-info .product-actions .flex-wrap .total-item {
            margin-right: 2rem !important;
            }
            .product-details .product-info .product-actions .flex-wrap .total-item .pcount {
            font-size: 16px !important;
            cursor: pointer !important;
            }
            .product-details .product-info .product-actions .flex-wrap .total-item input {
            width: 3rem !important;
            height: 3rem !important;
            text-align: center !important;
            border: 1px solid #9192a3 !important;
            }
            .product-details .product-info .product-actions .flex-wrap .total-item .pcount {
            font-size: 16px !important;
            cursor: pointer !important;
            }
            .product-details .product-info .product-actions .flex-wrap ul li:last-child {
            margin-right: 0 !important;
            }
         </style>
         <style>
            .xzoom-gallery {
            margin-top: 10px
            }
            .xzoom {
            margin-top: 40px
            }
         </style>
      </head>
      <section class="breadcrumb_area breadcrumb1">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="breadcrumb_wrapper d-flex align-items-center justify-content-between flex-wrap">
                     <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                           <li class="breadcrumb-item "><a href="index.php">Home</a> </li>
                           <li class="breadcrumb-item active" aria-current="page"><a href="ProductList.php">Saree</a></li>
                           <li class="breadcrumb-item active" aria-current="page">Uppadam Pattu Saree</li>
                        </ol>
                     </nav>
                  </div>
               </div>
            </div>
            <!-- ends: .row -->
         </div>
      </section>
      <section class="product-details">
         <div class="container">
            <div class="row">
               <div class="col-lg-5 offset-lg-0 col-md-8 offset-md-2 margin-md-20">
                  <div class="product-gallery">
                     <div class="gallery-image-view xzoom-container">
                        <figure>
                           <img class="xzoom" id="xzoom-default" src="img/products/women.jpeg" xoriginal="" alt="" width="400" height="450">
                        </figure>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6 offset-lg-1">
                  <div class="product-info">
                     <h5>Uppada Pattu Saree</h5>
                     <span class="product-price">
                        <p>
                           $120
                           <fmt:formatNumber minFractionDigits="2" value="" />
                        </p>
                     </span>
                     <span class="old-price">
                        $150
                        <fmt:formatNumber minFractionDigits="2" value=""/>
                     </span>
                     <strong class="discount-price text-success">
                        <b>
                           (
                           <fmt:formatNumber minFractionDigits="0" value=""/>
                           15 % off)
                        </b>
                     </strong>
                     <span class="product-price">
                        <p>
                           <fmt:formatNumber minFractionDigits="2" value="" />
                        </p>
                     </span>
                     <form:form name="addToCartForm" id="addToCartForm" action="" method="get">
                        <div class="product-actions">
                           <div class="flex-wrap">
                              <input type="hidden" value="" name="productDetailId" id="productDetailId">
                              <div class="total-item">
                                 <span class="pcount m-right-10" data-operation="minus">-</span>
                                 <input type="text" value="1" name="qtyInput" id="qtyInput">
                                 <span class="pcount m-left-10" data-operation="plus">+</span>
                              </div>
                              <ul class="d-flex">
                                 <li>
                                    <a button type="submit" href="viewCart.php" class="btn btn-sm add btn-outline-secondary btn--rounded">Add To Cart</a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                        <ul class="icon-list--one">
                           <li class="list-item icon-list">
                              <strong>Availability:</strong>
                              <span class="blinking" style="color:green;margin-top: 10px;">In Stock</span>
                           </li>
                           <li class="list-item icon-list"><strong>Delivery by:</strong> 10-dec-2022 </li>
                           <li class="list-item icon-list"><strong>Color:</strong>Red</li>
                           <li class="list-item icon-list">
                              <strong>Material Type:</strong>
                              Silk
                           </li>
                        </ul>
                     </form:form>
                     <section>
                        <hr>
                        <div class="product-share d-flex align-items-center">
                           <span class="m-right-20">ContactUs on: </span>
                           <div>
                              <div class="social social--colored">
                                 <ul class="d-flex flex-wrap">
                                    <li><a href="#" class="whatsapp"><img src="img/svg/whatsapp-logo.svg"></a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <hr>
                        <div class="product-share d-flex align-items-center m-bottom-25">
                           <span class="m-right-20">Share in social media: </span>
                           <div>
                              <div class="social social--colored ">
                                 <ul class="d-flex flex-wrap">
                                    <li><a href="#" class="instagram"><span class="fab fa-instagram"></span></a></li>
                                    <li><a href="#" class="pinterest"><span class="fab fa-pinterest-p"></span></a></li>
                                    <li><a href="#" class="facebook"><span class="fab fa-facebook-f"></span></a></li>
                                    <li><a href="#" class="twitter"><span class="fab fa-twitter"></span></a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </section>
                  </div>
               </div>
            </div>
         </div>
         </div>
      </section>
      <!-- ends: .product-details -->
      <div class="hr-divider"></div>
      <section class="product-info-tab">
         <div class="tab tab--6">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="tab_nav2 ">
                        <ul class="nav justify-content-center" id="tab6" role="tablist">
                           <li class="nav-item">
                              <a class="nav-link active" id="tab6_nav1" data-toggle="tab" href="#tab6_content1" role="tab" aria-controls="tab6_content1" aria-selected="true">Product Details</a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-12">
                     <div class="tab-content tab--content2" id="tabcontent6">
                        <div class="tab-pane fade show active" id="tab6_content1" role="tabpanel" aria-labelledby="tab6_content1">
                           <p>
                              The famous art of weaving Uppada sarees is known to have originated in the small 
                              village of Uppada, in the East Godavari District of Andhra Pradesh. 
                              The small village is famous for its hand-woven sarees as well as 
                              for being a popular fishing location.
                              Considered as sacred and auspicious, silk sarees are even offered 
                              to the revered Goddesses and to respectable women relatives. Such is 
                              the importance of silk sarees in India! This tradition may vary slightl
                              y in every region of India, but it manifests, in some or the other form, 
                              in every part.
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!--end ./container -->
         </div>
         <!--end ./tab -->
      </section>
      <!-- ends: .product-info-tab -->
      

     
      <?php include 'footer.php';?>
     <script>
         function blinker() {
             $('.blinking').fadeOut(500);
             $('.blinking').fadeIn(500);
         }
         setInterval(blinker, 1000);
      </script>
      
    
    
     
      