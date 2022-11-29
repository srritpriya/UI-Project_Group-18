<?php include 'header.php';?>



   <!-- end: .header -->
<style>

</style>
<section class="breadcrumb_area breadcrumb1">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="breadcrumb_wrapper d-flex align-items-center justify-content-between flex-wrap">
               <h4 class="page_title">Review Your Order</h4>
               <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                     <li class="breadcrumb-item"><a href="viewCart.php">Shopping Cart</a></li>
                     <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                  </ol>
               </nav>
            </div>
         </div>
      </div>
      <!-- ends: .row -->
   </div>
</section>
<section class="cart-wrapper m-top-30 m-bottom-60">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
         <form:form action="" method="post" id="updateCartForm" modelAttribute="checkout">
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
                                       <img src="img/products/women.jpeg" class="image-fit-cover" width="155" height="120" alt="">
                                       <a class="text_restrict_cart" href="productDetail.html">Uppadam Pattu Saree</a>
                                    </div>
                                 </th>
                                 <td>
                                    <div class="quantity text-center">
                                       <div class="total-item">
                                          <input type="number" value="1" name="numberInput" id="numberInput" readonly>
                                       </div>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="price text-center">
                                       <span>
                                          $120<fmt:formatNumber minFractionDigits="2" value="" />
                                       </span>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="subtotal text-center">
                                       <span>
                                          $120<fmt:formatNumber minFractionDigits="2" value="" />
                                       </span>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="remove text-center"><a href="" aria-label="Close"><i class="la la-close"></i></a></div>
                                 </td>
                              </tr>
                              <!-- ends: .cart-single -->
                           
                           <tr class="cart-bottom">
                              <td colspan="4">
                                <form action="#">
                                    <input type="text" class="form-control " placeholder="Coupon Code">
                                    <button class="btn btn-sm btn-outline-secondary">Apply Coupon</button>
                                    </form>
                              </td>
                              <td colspan="1">
                                 <div class="total-amount text-right">
                                    Total to be Paid: <span id="totalAmount">$120<fmt:formatNumber minFractionDigits="2" value=""/>
                                 </div>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                     <!-- ends: .table -->
               </div>
               <!-- ends: .table-responsive -->
               <h4 class="m-top-20">Shipping Address</h4>
               <div class="row">
                  <div class="col-md-6">
                     <div class="form-group">
                        <label for="fname">First Name</label>
                        <input type="text" path="user.firstName" class="form-control" id="fname"/>
                     </div>
                  </div>
                  <!-- ends: .col-md-6 -->
                  <div class="col-md-6">
                     <div class="form-group">
                        <label for="lname">Last Name</label>
                        <input type="text" path="user.lastName" class="form-control" id="lname"/>
                     </div>
                  </div>
                  <!-- ends: .col-md-6 -->
                  <div class="col-md-6 m-top-20">
                     <div class="form-group">
                        <label for="add1">Delivery Address</label>
                        <input id="location-input" class="form-control" placeholder="Your Shipping Address (Select your exact location)" maxlength="80" autocomplete="off">
                     </div>
                  </div>
                  <!-- ends: .col-md-6 -->
                  <form:hidden path="shippingAddress.address1" id="address1" />
                  <form:hidden path="shippingAddress.city" id="city" />
                  <form:hidden path="shippingAddress.state" id="state" />
                  <form:hidden path="shippingAddress.country" id="country" />
                  <div class="col-md-6 m-top-20">
                     <div class="form-group">
                        <label for="zip">ZIP Code</label>
                        <input type="number" path="" id="zipcode" class="form-control" placeholder="ZipCode" />
                     </div>
                  </div>
               </div>
               <div class="tab-pane method-1 m-top-30">
                  <div class="header">
                     <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio4" name="customRadio1" class="custom-control-input" checked="checked">
                        <label class="custom-control-label color-dark" for="customRadio4">Pay With</label>
                        <button type="submit"><img src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/cc-badges-ppmcvdam.png" alt="Buy now with PayPal" /></button>

                       </div>
                  </div>
                  <div class="body m-top-15">
                     <input type="checkbox" name="termscheck"
                        id="termscheck" checked="checked" tabindex="4"><span>&nbsp;&nbsp;
                     I hereby
                     acknowledge that I have read and agree with the SaveWeavers.com
                     <a href="/terms" target="_blank">Purchase
                     Policy.</a> All transactions are secure & encrypted.<br/>
                     </span><br />
                  </div>
                  	<p id="checkMesg" class="validate-mesg" style="display:none;color:red">Please acknowledge the Purchase Policy.</p>

               </div>
            </form:form>
         </div>
      </div>
   </div>
</section>
<!-- ends: .cart-wrapper -->

<?php include 'footer.php';?>

