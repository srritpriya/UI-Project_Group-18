<?php include 'header.php';?>


   <section class="contact--four">
      <div class="list-inline-wrapper p-top-30 p-bottom-20">
          <div class="container">
              <div class="row">
                  <div class="col-lg-12">
                      <ul class="icon-list--three d-flex list--inline">
                          <li class="d-flex align-items-center">
                              <div class="icon"><span><i class="la la-headphones"></i></span></div>
                              <div class="contents">
                                  <h6>+1 (732) 654-2343</h6>
                                  <span class="sub-text">Avaialble 24/7</span>
                              </div>
                          </li>
                          <li class="d-flex align-items-center">
                              <div class="icon"><span><i class="la la-envelope"></i></span></div>
                              <div class="contents">
                                  <h6>info.saveweavers@gmail.com</h6>
                                  <span class="sub-text">Free enquiry</span>
                              </div>
                          </li>
                          <li class="d-flex align-items-center">
                              <div class="icon"><span><i class="la la-map-marker"></i></span></div>
                              <div class="contents">
                                  <h6>Edison, New Jersey USA</h6>
                                  <span class="sub-text">123 Main St</span>
                              </div>
                          </li>
                      </ul><!-- ends: .icon-list--three -->
                  </div>
              </div>
          </div>
      </div><!-- ends: .list-inline -->
      <div class="container p-top-50 p-bottom-110">
          <div class="row align-items-center">
              <div class="col-lg-5">
                  <img src="img/banners/weaver1.jpg" style="border-radius: 10px; border-style: solid;" alt="">
              </div>
              <div class="col-lg-5 offset-lg-1">
                  <div class="form-wrapper">
                      <div class="m-bottom-10">
                          <div class="divider divider-simple text-left">
                              <h3>Let&#39;s Get In Touch</h3>
                          </div>
                      </div>
                          <form:form name="contact-form" id="contact-form" action="" method="post" modelAttribute="contact">
                              <input type="text"  path="name" class="form-control  mb-4" placeholder="Name">
                              <input type="email" id="email" path="email" class="form-control   mb-4" placeholder="Email">
                              <input type="text" path="subject" class="form-control   mb-4" placeholder="Subject">
                              <textarea rows="3" path="message" class="form-control mb-5" placeholder="Message"></textarea>
                              <a id="submit" href="javascript: submit();" class="btn float-right btn-sm btn-secondary">Submit Now</a>
                          </form:form>
                  </div><!-- end: .form-wrapper -->
              </div><!-- ends: .col-lg-6 -->
          </div>
      </div>
  </section>

    
  <?php include 'footer.php';?>

