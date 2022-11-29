<?php include 'header.php';?>


   <!--Remaining section--> 
   
<section class="breadcrumb_area breadcrumb1">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="breadcrumb_wrapper d-flex align-items-center justify-content-between flex-wrap">
               <h4 class="page_title">Shopping Cart</h4>
               <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                     <li class="breadcrumb-item active" aria-current="page">Shopping Cart</li>
                  </ol>
               </nav>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="cart-wrapper m-top-30 m-bottom-30">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="cart-table table-responsive">
                  <table class="table" id="myTable">
                           <thead>
                              <tr>
                                 <th scope="col"><span>Product Name</span></th>
                                 <th scope="col"><span>Quantity</span></th>
                                 <th scope="col"><span>Price</span></th>
                                 <th scope="col"><span>Subtotal</span></th>
                                 <th scope="col" class="text-center"><span>Action</span></th>
                              </tr>
                           </thead>
                           <tbody class="">
                               <tr class="cart-single alert alert-dismissible fade show">
                                    <th scope="row">
                                       <div class="name">
                                          <img src="img/products/women.jpeg" width="60" height="60" class="image-fit-cover" alt="">
                                         <div>
                                           <a class="text_limit" href="productDetail.php">
                                            Uppadam pattu Saree</a>
                                            <span class="ml-3 mt-2 align-items-center d-flex">
                                             
                                            </span>
                                          </div>
                                       </div>
                                    </th>
                                    <td>
                                       <div class="quantity text-center">
                                          <div class="total-item">
                                             <input type="number" name="qty" id="numberInput" value="1" readonly>
                                             <input type="hidden" name="" id="" value="">
                                          </div>
                                       </div>
                                    </td>
                                    <td>
                                       <div class="price text-center">
                                          <span>
                                             $120
                                             <fmt:formatNumber minFractionDigits="2" value="" />
                                          </span>
                                       </div>
                                    </td>
                                    <td>
                                       <div class="subtotal text-center">
                                          <span>
                                             $120
                                             <fmt:formatNumber minFractionDigits="2" value="" />
                                          </span>
                                       </div>
                                    </td>
                                    <td>
                                       <div class="remove text-center"><a href="" aria-label="Close"><i class="la la-close"></i></a></div>
                                    </td>
                                 </tr>
                                 <tr class="cart-single alert alert-dismissible fade show">
                                    <th scope="row">
                                       <div class="name">
                                          <img src="img/products/silk2.png" width="60" height="60" class="image-fit-cover" alt="">
                                         <div>
                                           <a class="text_limit" href="productDetail.php">
                                            Peach Uppadam pattu Saree</a>
                                            <span class="ml-3 mt-2 align-items-center d-flex">
                                             
                                            </span>
                                          </div>
                                       </div>
                                    </th>
                                    <td>
                                       <div class="quantity text-center">
                                          <div class="total-item">
                                             <input type="number" name="qty" id="numberInput" value="1" readonly>
                                             <input type="hidden" name="" id="" value="">
                                          </div>
                                       </div>
                                    </td>
                                    <td>
                                       <div class="price text-center">
                                          <span>
                                             $190
                                             <fmt:formatNumber minFractionDigits="2" value="" />
                                          </span>
                                       </div>
                                    </td>
                                    <td>
                                       <div class="subtotal text-center">
                                          <span>
                                             $190
                                             <fmt:formatNumber minFractionDigits="2" value="" />
                                          </span>
                                       </div>
                                    </td>
                                    <td>
                                       <div class="remove text-center"><a href="" aria-label="Close"><i class="la la-close"></i></a></div>
                                    </td>
                                 </tr>
                              
                              <!-- ends: .cart-single -->
                              <!-- ends: cart-single -->
                              <tr class="cart-bottom">
                                 <td colspan="4">
                                    <!--
                                       <input type="text" class="form-control" placeholder="Coupon Code">
                                       <button class="btn btn-sm btn-outline-secondary">Apply Coupon</button>
                                       -->
                                 </td>
                                 <td colspan="1">
                                    <div class="total-amount text-center">
                                       Total to be Paid:
                                       <span id="totalAmount" class="color-success font-weight-boldcolor">
                                          $310
                                          <fmt:formatNumber minFractionDigits="2" value=""/>
                                       </span>
                                    </div>
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                        <div class="row mt-3 mb-3 container">
                           <div>
                              <a href="ProductList.php" class="btn btn-outline-secondary btn-sm btn-icon icon-left"><i class="la la-angle-double-left"></i> Back To Shopping</a>
                           </div>
                           <div class="ml-auto" style="margin-right: -2rem;">
                              <a href="checkout.php" class="btn btn-sm btn-secondary">Checkout</a>
                           </div>
                        </div>
                     </form:form>
                     <!-- ends: .cart-actions -->
                  
            </div>
            <!-- ends: .table-responsive -->
         </div>
      </div>
   </div>
</section>

<!-- ends: .cart-wrapper -->
<?php include 'footer.php';?>

