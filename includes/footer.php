<footer>
    <div class="w3ls-footer-grids pt-sm-4 pt-3">
      <div class="container py-xl-5 py-lg-3">
        <div class="row">
          <div class="col-md-4 w3l-footer">
            <h2 class="mb-sm-3 mb-2">
              <a href="index.php" class="text-white font-italic font-weight-bold">
                <span>About </span> Us 
                <i class="fas fa-syringe ml-2"></i>
              </a>
            </h2>
            <p>Our project is mainly focused to provide the services to the needy through a single web application and make the donation process easy. In this process the donor can easily reach the needy through the consent of the admin. In the other kinds of donations, Its main purpose is to provide a smart and easy way through  web Application for collects the donations of the donors both organ or blood deliver them to the respective organizations and provide the information to the respective doctors of that organization to maintain transparency. To manage the donor registration and user maintenance.  </p>
          </div>
          <div class="col-md-4 w3l-footer my-md-0 my-4">
            <h3 class="mb-sm-3 mb-2 text-white"></h3>
            <ul class="list-unstyled">
              <?php 
$pagetype="contactus";
$sql = "SELECT * from tblcontactusinfo";
$query = $dbh -> prepare($sql);
$query->bindParam(':pagetype',$pagetype,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{ ?>
              <li>
                <i class="fas fa-location-arrow float-left"></i>
                <p class="ml-4">
                  <span><?php  echo $result->Address; ?>. </p>
                <div class="clearfix"></div>
              </li>
              <li class="my-3">
                <i class="fas fa-phone float-left"></i>
                <p class="ml-4"><?php  echo $result->ContactNo; ?></p>
                <div class="clearfix"></div>
              </li>
              <li>
                <i class="far fa-envelope-open float-left"></i>
                <a href="mailto:info@example.com" class="ml-3"><?php  echo $result->EmailId; ?></a>
                <div class="clearfix"></div>
              </li>
            <?php } } ?></ul>
          </div>
          <div class="col-md-4 w3l-footer">
            <h3 class="mb-sm-3 mb-2 text-white">Quick Links</h3>
            <div class="nav-w3-l">
              <ul class="list-unstyled">
                <li>
                  <a href="index.php">Home</a>
                </li>
                <li class="mt-2">
                  <a href="about.php">About Us</a>
                </li>
                <li class="mt-2">
                  <a href="contact.php">Contact Us</a>
                </li>
            
              </ul>
            </div>
          </div>
        </div>
        <div class="border-top mt-5 pt-lg-4 pt-3 pb-lg-0 pb-3 text-center">
          <p class="copy-right-grids mt-lg-1">??  Red Wings
           
          </p>
		<img src="images\qrcode.png" width="200" height="200" title="Qr Code" alt="Qr Code" class="center"/>

        </div>
      </div>
    </div>
  </footer>
  <!-- //footer -->