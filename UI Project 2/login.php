<?php session_start(); include 'database.php'; ?>
<?php include 'header.php';?>



   <section class="login-register">
    <!-- end menu area -->
    <div class="login-form d-flex align-items-center">
       <div class="container">
          <div class="row">
             <div class="col-lg-8 offset-lg-2 col-xl-6 offset-xl-3">
               
                <div class="form-wrapper">
                   <div class="card card-shadow">
                      <div class="card-header">
                         <h4 class="text-center">Sign In Here!</h4>
                      </div>
                      <?php if(isset($_SESSION['error'])!="") {echo $_SESSION['error']."<br><br>"; unset($_SESSION['error']);} ?>
                      <div class="card-body">
                       <form action="userlogin.php" method="post">
                          <input type="hidden" name="${_csrf.parameterName}" value="${_csrf.token}" />
                            <div class="form-group">
                               <input type="text" placeholder="User Name" name="email" class="form-control" maxlength="45" required="required">
                            </div>
                            <div class="form-group">
                               <input type="password" name="password" placeholder="Password" class="form-control" maxlength="45" required="required">
                            </div>
                            <div class="form-group text-center m-bottom-20">
                               <button type="submit" name="login" value="Submit" class="btn btn-sm btn-secondary">Sign In</button>
                            </div>
                             <div class="form-action text-center">
                                <a href="${baseUrl}reset-password">Forgot your password?</a>
                             </div>
                         </form>
                         <p class="text-center m-bottom-25">Don't you have an account? <a href="register.php">Register</a></p>
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
 
