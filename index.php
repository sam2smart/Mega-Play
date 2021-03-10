<?php
// We create database connection 
include'inc/dbconfig.php';

		//We are calling out our data from database
		//so we call it from table category and field name catname
		
	// We submit with a submit button
	if(isset($_POST['add_cat']))
	{
		
		//Here we post the data from the database
		$catname = $_POST['cat_name'];
		
		//And from here we check if the field is not empty
		if(empty($catname))
		{
			echo "Please input a value !!!";
		}
		
		$stmt = $con->prepare("INSERT INTO checker (no1)VALUES('$catname')");
		if($stmt->execute()){
        echo "<script>alert('Category Added successfully !!!');</script>";
      }
	}
	
?>

<!doctype html>
<html lang="en">
    <head>
        <?php include'inc/head.php'; ?>
    </head>
	
	
	
	<body>
        <!--================Header Area =================-->
       <?php include'inc/header.php'; ?>
        <!--================Header Area =================-->
       
        <!--================Banner Area =================-->
      <?php include'inc/content.php'; ?>
        <!--================Banner Area =================-->
        
        
        <!--================ About History Area  =================-->
		
        <section class="about_history_area section_gap" id="form">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 d_flex align-items-center" style="margin-top: -20px">
                        <div class="about_content ">
						<center>
						<h1 style="color: green"><i>PLAY HERE...</i></h1>
						<a href="?card#form" class="btn btn-success">Gift Card</a>
						<a href="?free#form" class="btn btn-success">Play Free</a><hr>
						<?php 
						
						if(isset($_GET['card']))
						{ include'inc/card_play.php'; }
						else if(isset($_GET['free']))
						{ include'inc/free_play.php'; }
						else{ include'inc/card_play.php'; }
					?>
						</center>
						<hr>
						
                        </div>
                    </div>
                    <div class="col-md-6">
                         <div class="section_title text-center">
                    <h2 class="title_color" style="color: green;">Testimonial from our Clients</h2>
                    <p>Our clients who have successfully play our game, this are there testimonies you can 
					read and give us some trust. </p>
                </div>
                <div class="testimonial_slider owl-carousel">
                    <div class="media testimonial_item">
                        <img class="rounded-circle" src="image/testtimonial-1.jpg" alt="">
                        <div class="media-body">
                            <p>The first time i play this game, i never thought it's real not until i got mail that i'm a lucky winner $5000 because i play free.. 
							How i wish i go with my mind to play with just $50 steam and win that $10,000. All the same i'm happy with my money</p>
                            <a href="#"><h4 class="sec_h4">Mario Spencer</h4></a>
                            
                        </div>
                    </div>    
                    <div class="media testimonial_item">
                        <img class="rounded-circle" src="image/testtimonial-1.jpg" alt="">
                        <div class="media-body">
                            <p>This game is just awesome here. i played twise with $100 steam wallet and i got that 10,000. Their payment team are supper as well.
							They respond quick on the payment process and i got my account loaded. </p>
                            <a href="#"><h4 class="sec_h4">Luke Adaeku</h4></a>
                            
                        </div>
                    </div>
                    <div class="media testimonial_item">
                        <img class="rounded-circle" src="image/testtimonial-1.jpg" alt="">
                        <div class="media-body">
                            <p>Like seriously playing game and win is a big joy, and having the reword is another blessing, just once i played, my game 
							won a big cash for me, i will do this better again and again, in fact i will invite my fiends and family and they must know about this. </p>
                            <a href="#"><h4 class="sec_h4">Peter Grace</h4></a>
                            
                        </div>
                    </div>    
                    <div class="media testimonial_item">
                        <img class="rounded-circle" src="image/testtimonial-1.jpg" alt="">
                        <div class="media-body">
                            <p>I think i chanel my energy properly and it gives me something unexpected, i have used all other platforms but they are not  like
							this company, i played free  and i get $10,000 pleaae never ignor tis.</p>
                            <a href="#"><h4 class="sec_h4">Kulman judge</h4></a>
                            
                        </div>
                    </div>
                </div>
                    </div>
                </div>
				<center style="padding: -20%">
						<img src="image/let.png" class="img-fluid">
					</center>
            </div>
        </section>
        <!--================ About History Area  =================-->
		
        <!--================ start footer Area  =================-->	
        <footer class="footer-area section_gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3  col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6 class="footer_title">About Agency</h6>
                            <p>The world has become so fast paced that people don’t want to stand by reading a page of information, they would much rather look at a presentation and understand the message. It has come to a point </p>
                        </div>
                    </div>
					
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6 class="footer_title">Newsletter</h6>
                            <p>For business professionals caught between high OEM price and mediocre print and graphic output, </p>		
                            <div id="mc_embed_signup">
                                <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative">
                                    <div class="input-group d-flex flex-row">
                                        <input name="EMAIL" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
                                        <button class="btn sub-btn"><span class="lnr lnr-location"></span></button>		
                                    </div>									
                                    <div class="mt-10 info"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                  					
                </div>
                    <p class="col-lg-8 col-sm-12 footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                  <div  id="navbarSupportedContent" style="margin-left: 70%;">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            
                            <li class="nav-item"><a class="nav-link" href="data/salers end/" style="color: #000033;">Contact</a></li>
                        </ul>
                    </div>  
            </div>
        </footer>
		<!--================ End footer Area  =================-->
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js"></script>
        <script src="vendors/nice-select/js/jquery.nice-select.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="js/stellar.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="js/custom.js"></script>
    </body>
</html>
