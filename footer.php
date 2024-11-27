<?php
/**
 * Footer template
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="style.css">
    <title>Clauze Cleaning Services - Relax and let our pros handle it!</title>
    <meta name="author" content="Flavia Sigoli"/>
    <meta http-equiv="content-language" content="en-US" />
    <meta name="copyright" content="Copyright © 2024 Clauze Cleaning" />
    <meta http-equiv="content-type" content="html; charset=UTF-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="portfolio, Business, Clauze Cleaning, Clauze, Clauze Cleaning, Services, about, OHIO, USA">
    <meta name="robots" content="index, follow">
    <title><?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?></title>
    <?php wp_head(); ?> <!-- Essa função é necessária para carregar scripts e estilos do WordPress e plugins -->
    <style>footer{
    background-color: #000;
    border-top: 4px solid #78C2DD;
}
.footergrid{
    display: flex;
    width: 100%;
    max-width: 1400px;
    justify-content: space-between;
    color: #fff;
    margin: auto;
    padding: 50px 80px 30px 50px;
    font-family: 'Poppins';
}
a{
    color: inherit;
    text-decoration: none;
}
footer ul{
    list-style: none;
}
.footerabout img{
    max-width: 200px;
}
.footernav ul {
    display: flex;
    flex-direction: column;
    gap: 13px;
}
.opentime ul li{
    font-family: 'Poppins';
    font-size: 12.676px;
    font-weight: 400;
    line-height: 190%; /* 24.085px */
}
.address{
    font-size: 14.789px;
    font-weight: 600;
    line-height: 140%;
}
.address ul{
    display: flex;
    flex-direction: column;
    margin-top: 10px;
    gap: 5px;
}
.address ul li a{
    display: flex;
    align-items: center;
    gap: 5px;
}
.address li svg{
    fill: #fff;
}
.footer-credits{
    position: relative;
    display: flex;
    justify-content: space-between;
    height: 100px;
    width: 100%;
    max-width: 1300px;
    margin: auto;
    padding: 0;
    align-items: center;
    text-align: center;    
    border-top: 1px solid #3481B5;
}
.footer-credits ul{
    display: flex;
    gap: 20px;
    list-style: none;
}
.footer-credits ul li a{
    color: #fff;
}
.footer-credits p, .footer-credits ul li{
    color: #fff;
    font-size: 14.4px;
    font-weight: 300;
    line-height: 150%;
}
footer a:hover, footer a:hover svg{
    color: #3481B5;
    fill: #3481B5;
}
@media screen and (max-width:890px) {
    .footergrid{
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        padding: 50px 50px 0 50px;
    }
    .footerabout img{
        object-fit: cover;
        width: 197px;
        height: 197px;
    }
    .footerabout ul, .footerabout li {
        align-items: center;
    }
    .footergrid div{
        padding: 20px 0;
        border-top: 2px solid #FFFFFF;
        width: 200px;
    }
    .address ul li{
        margin: auto;
    }
    .footer-credits{
        flex-direction: column;
        padding: 30px 0 0 !important;
        height: 120px !important;
    }
    .footer-credits ul{
        flex-direction: column;
        gap: 0px !important;
    }
}
</style>
</head>
<footer class="bg-gradient" id="site-footer" role="contentinfo">

    <!-- Código personalizado antes dos widgets -->
        <div class="footergrid">
          <div class="footerabout">
            <img src="https://oliverscleaning.com/wp-content/uploads/2024/11/oliver-logo.png" alt="">
          </div>
              <div class="footernav">
                  <ul>
                      <li>
                      <a href="#">Home</a></li>
                      <li>
                      <a href="#services">Services</a></li>
                      <li>
                      <a href="#aboutus">About us</a></li>
                      <li>
                      <a href="#portfolio">Gallery</a></li>
                      <li>
                      <a href="#reviews">Reviews</a></li>
                      <li>
                      <a href="#contact">Contact </a></li>
                  </ul>
              </div>
                <div class="opentime">
                    <ul>
                        <li style="font-weight:bold;">Our Hours</li>
                        <li>Mon: 8am - 6pm</li>
                        <li>Tue: 8am - 6pm</li>
                        <li>Wed: 8am - 6pm</li>
                        <li>Thu: 8am - 6pm</li>
                        <li>Fri: 8am - 6pm</li>
                        <li>Sat: Closed</li>
                        <li>Sun: Closed</li>
                    </ul>
                </div>
                <div class="address">
                  <h3>Follow us</h3>
                    <ul>
                        <li>
                          <a href="https://www.facebook.com/profile.php?id=61558501535286"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                          <path d="M22.6665 12.3033C22.6665 6.7467 18.1894 2.24219 12.6665 2.24219C7.14365 2.24219 2.6665 6.7467 2.6665 12.3033C2.6665 17.325 6.32334 21.4874 11.104 22.2422V15.2116H8.56494V12.3033H11.104V10.0867C11.104 7.56515 12.597 6.17231 14.8811 6.17231C15.9753 6.17231 17.1196 6.36882 17.1196 6.36882V8.8448H15.8587C14.6165 8.8448 14.229 9.62041 14.229 10.4161V12.3033H17.0024L16.5591 15.2116H14.229V22.2422C19.0097 21.4874 22.6665 17.3252 22.6665 12.3033Z" fill="inherit"/>
                        </svg> Facebook</a></li>
                        <li>
                          <a href="https://www.instagram.com/oliverscleaningoh/" target="_blank"><svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M16.6665 3.24219H8.6665C5.90508 3.24219 3.6665 5.48077 3.6665 8.24219V16.2422C3.6665 19.0036 5.90508 21.2422 8.6665 21.2422H16.6665C19.4279 21.2422 21.6665 19.0036 21.6665 16.2422V8.24219C21.6665 5.48077 19.4279 3.24219 16.6665 3.24219ZM19.9165 16.2422C19.911 18.0348 18.4591 19.4867 16.6665 19.4922H8.6665C6.87385 19.4867 5.42199 18.0348 5.4165 16.2422V8.24219C5.42199 6.44954 6.87385 4.99768 8.6665 4.99219H16.6665C18.4591 4.99768 19.911 6.44954 19.9165 8.24219V16.2422ZM17.4165 8.49219C17.9688 8.49219 18.4165 8.04447 18.4165 7.49219C18.4165 6.93991 17.9688 6.49219 17.4165 6.49219C16.8642 6.49219 16.4165 6.93991 16.4165 7.49219C16.4165 8.04447 16.8642 8.49219 17.4165 8.49219ZM12.6665 7.74219C10.1812 7.74219 8.1665 9.75691 8.1665 12.2422C8.1665 14.7275 10.1812 16.7422 12.6665 16.7422C15.1518 16.7422 17.1665 14.7275 17.1665 12.2422C17.1692 11.0479 16.6959 9.90176 15.8514 9.05727C15.0069 8.21278 13.8608 7.73953 12.6665 7.74219ZM9.9165 12.2422C9.9165 13.761 11.1477 14.9922 12.6665 14.9922C14.1853 14.9922 15.4165 13.761 15.4165 12.2422C15.4165 10.7234 14.1853 9.49219 12.6665 9.49219C11.1477 9.49219 9.9165 10.7234 9.9165 12.2422Z" fill="inherit"/>
                          </svg>
                          Instagram</a></li>
                    </ul>
                </div>
          </div>

    <div class="footer-widgets">
        <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
            <aside class="widget-area">
                <?php dynamic_sidebar( 'footer-1' ); ?>
            </aside>
        <?php endif; ?>

        <!-- Código personalizado dentro da área de widgets -->
    </div>

    <!-- Código personalizado após os widgets -->

    <div class="footer-credits">
        <p>&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>. All rights reserved.</p>
        <ul>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Terms of Service</a></li>
            <li><a href="#">Cookies Settings</a></li>
        </ul>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
