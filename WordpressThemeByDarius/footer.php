
</div><!-- /container -->

<div class="footer-dark">
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Services</h3>
                        <ul>
                            <li><a href="#">Service 1</a></li>
                            <li><a href="#">Service 2</a></li>
                            <li><a href="#">Service 3</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Menu</h3>
                        <?php wp_nav_menu(array('theme_location' => 'secondary'));?>                                            
                    </div>
                    <div class="col-md-6 item text">
                        <h3>Contacts</h3>
                        <p>Phone Number</p>
                        <p>Address</p>
                    </div>
                    
                    <div class="col-md-12 text-center item social">
	                    <a href="#" target="_blank"> <ion-icon size="large" name="logo-facebook"></ion-icon></a>
	                    <a href="#" target="_blank"> <ion-icon size="large" name="mail-open"></ion-icon></a>
	                    <a href="#" target="_blank"> <ion-icon size="large" name="logo-instagram"></ion-icon></a>
		                  
                </div>
                <p class="copyright">Company Name © 2017</p>
            </div>
        </footer>
    </div>


	<?php wp_footer(  )?>
</body>
</html>