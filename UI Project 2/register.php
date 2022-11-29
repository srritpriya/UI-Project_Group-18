<?php include 'database.php'; ?>
 <?php include 'header.php';?>


   <!-- end: .header -->
   <section class="login-register">
    <!-- end menu area -->
    <div class="login-form d-flex align-items-center">
    
       <div class="container">
          <div class="row">
             <div class="col-lg-8 offset-lg-2 col-xl-6 offset-xl-3">
                <div class="form-wrapper">
                   <div class="card card-shadow">
                      <div class="card-header">
                         <h4 class="text-center">Register Here!</h4>
                      </div>
                      <div class="card-body">
                         <form action="registration.php" method="post" name="userSignupForm" modelAttribute="customer" class="form-horizontal">
                             <input type="hidden" name="${_csrf.parameterName}" value="${_csrf.token}"/>
                            
                            <div class="form-group">
                               <input path="user.firstName" name="firstname"
                                  class="form-control" placeholder="First Name" maxlength="45" required>
                            </div>
                            <div class="form-group">
                               <input path="user.lastName" name="lastname"
                                  class="form-control" placeholder="Last Name *" maxlength="45" required>
                            </div>
                            <div class="form-group">
                               <input path="user.email" name="email" class="form-control"
                                  placeholder="Email *" maxlength="45" required>
                            </div>
                            <div class="form-group">
                               <input path="user.password" name="password"
                                  class="form-control" placeholder="Password *" maxlength="25" required>
                            </div>
                            <div class="form-group">
                               <input path="phone" name="phone" class="form-control"
                                  placeholder="Phone number, ex.(732) 000-0000 *" maxlength="15" required>
                            </div>
                            <div class="form-group text-center m-bottom-20">
                               <button type="submit" name="submit" value="Submit" class="btn btn-sm btn-secondary">Register</button>
                            </div>
                         </form>
                         <p class="text-center m-bottom-25">Already registered? <a href="login.php">Login</a></p>
                      </div>
                   </div>
                </div>
             </div>
             <!-- ends: .col-lg-6 -->
          </div>
       </div>
    </div>
    <!-- ends: .login-form -->
    </div>
 </section>
 
