<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="style.css">
    <title><?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?></title>
    <?php wp_head(); ?> <!-- Essa função é necessária para carregar scripts e estilos do WordPress e plugins -->
    <style>header {
  position: relative;
  display:flex;
  justify-content: space-between;
  width:100%;
  max-width:100vw;
  margin: auto;
  height: 0px;
  z-index: 9;
  font-family: 'Glacial Indifference';
}
#home{
  position: fixed;
  height: 80px;
  left: 0;
  right: 0;
  width: 100vw;
  z-index: 9;
  box-sizing: border-box;
}
#home::before {
  content: '';
  position: fixed;
  height: 80px;
  left: 0;
  right: 0;
  width: 100vw;
  z-index: 9;
  box-sizing: border-box;
} 
.navbar{   
  display:flex;
  justify-content: space-between;
  position: fixed;
  align-items: center;
  right: 0;
  left: 0;
  top: 0;
  width: 100%;
  max-width: 1500px;
  margin: auto;
  border-radius: 168px;
  background: rgba(0, 0, 0, 0.25);
  backdrop-filter: blur(14.149999618530273px);
  padding: 0 50px 0 50px;
  height: 80px;
  scroll-behavior: smooth;
  transition: 0.7s;
  z-index: 9;
} 
.nonebar{
  display: flex;
  position: relative;
  background-color: transparent;
  width:160px;
}
.menu-links{
  display: flex;
  justify-content: space-between;
  width: 100%;
  max-width: 1400px;
  padding: 0;
  margin: auto;
  align-items: center;  
}
.menu-linksbtn ul{
  list-style: none;
  display: flex;
  margin: 0 auto;
  justify-content:space-between;
  width:380px;
  text-align: center;
}
.menu-linksbtn a {
  display:block;
  text-align: center;
  color:#fff;
  text-decoration:none;
  font-size: 12px;
  font-weight: 400;
  line-height: 190%;
}
.menu-linksbtn a:hover{
  font-weight: 800;
  transition: 0.2s ease-in-out;
}
.menusocial{
  right: 0;
}
.menusocial img{
  position: relative;
  display: flex;
  justify-content: center;
}
.menusocial ul{
  position: relative;
  list-style: none;
  display: flex;
  align-items: center;
  margin: 0 auto;
  justify-content:space-between;
  width:auto;
  text-align: center;
  gap: 8px;
}
.menusocial ul a {
  display: flex;
  text-decoration:none;
  cursor: pointer;
  align-items: center;
}
.callnow a{
  display: flex;
  justify-content: center;
  gap: 10px;
  color: #fff;
  border-radius: 296px;
  background: #78C2DD;
  font-size: 16px;
  font-weight: 700;
  line-height: 120%;
  align-items: center;
  padding: 8px 0px;
  width: 159px;
  text-align: left;
  margin: auto;
}
.callnow svg{
  stroke: #fff;
  width: 21px;
}
/* .callnow a:hover{
background: #3481B5;
transition: 0.15s;
color: #fff;
}
.callnow a:hover svg{
  stroke: #fff;
  transition: 0.15s;
} */
.btn-toggle{display: none;}
.logo-m{
z-index: 9;
display:block;
width: 70px;
top: -35px;
left: 0;
border-radius: 100%;
position: absolute;
}
.logow, .callm{display: none;}
@media only screen and (max-width: 1100px) {
  .logow{
  z-index: 9;
  display:block;
  width: 70px;
  top:5px;
  border-radius: 100%;
  left: 20px;
  position: absolute;
  }
  .logo-m, .callw{display: none;}
  .callm{
    display: block;
    width: 169px;
    line-height: 150%;
    position: absolute;
    left: 54%;
    top: 50%;
    transform: translate(-50%, -50%);
    z-index: 99;
  }
.box{
  width: fit-content;
  height: 0vh;
  position: relative;
  text-align: left;
  z-index: 1;
  opacity: 0;
  left: -500px;
  pointer-events: none;
  transition: 0.3s;
}
.btn-toggle {
  position:absolute;
  right:20px;
  top:0px;
  display:none;
  flex-direction:column;
  justify-content:space-between;
  width:15px;
  height:15px;
}
.btn-toggle .bar {
  height:3px;
  width:100%;
  border-radius:20px
}
.active_box{
  opacity: 1;
  left: 0px;
  pointer-events: fill;
}
.menu_icon_box{
  display: block;
  z-index: 2;
  width: fit-content;
  height: auto;
  margin: 25px;
  position: absolute;
  border-radius: 4px;
  cursor: pointer;
}
.line1 , .line2 , .line3{
  width: 20px;
  height: 3px;
  margin: 4px 0px;
  border-radius: 50px;
  transition: 0.2s;
}
.active .line1{
  transform: translate(0px , 15px)rotate(45deg);
}
.active .line2{
  opacity: 0;
}
.active .line3{
  transform: translate(0px , 1px)rotate(-45deg);
}
.menu-links{
  background-color:#2A315D;
  flex-direction: column;
  align-items:center;
  margin-top: 60px;
  width: 100%;
  margin-left: 0;
  margin-right: 0;
  padding-top: 0px;
  border-bottom-right-radius: 32px;
  border-bottom-left-radius: 32px;
  height:220px;
}
.menu-links ul{
    display: block;
}
.menu-linksbtn{
    display: flex;
    margin-bottom: 0px;
}
.menu-linksbtn ul{
  display: flex;
  flex-direction: column;
  gap: 3px;
}
.menusocial ul{
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    width: 150px;
    justify-content: center;
    margin: auto;
    margin-bottom: 5px;
}
.menusocial ul a {
    text-decoration:none;
    cursor: pointer;
    align-items: center;
}
.menu-links.active{
    margin: auto;
    margin-top: 70px;
display:flex;
}
.menusocial.active {
    display:flex
}
.navbar {
  padding:0px 0px;    
  margin-top: 0;
  backdrop-filter: none;
  border-radius: 0;
}
#home {
display:flex;
flex-direction:column;
max-width: 1400px;
text-align: right;
align-items: end;
}   
}
/* Exemplo básico de estilo responsivo para o menu */
@media (max-width: 768px) {
 .main-navigation {
     display: none;
 }
 
 .menu-toggle {
     display: block; /* Botão de toggle para dispositivos móveis */
 }

 .menu-toggle.active + .main-navigation {
     display: block; /* Exibe o menu quando o botão for clicado */
 }
}

/* Exemplo básico de estilo responsivo para o menu */
@media (max-width: 768px) {
 .main-navigation {
     display: none;
 }
 
 .menu-toggle {
     display: block; /* Botão de toggle para dispositivos móveis */
 }

 .menu-toggle.active + .main-navigation {
     display: block; /* Exibe o menu quando o botão for clicado */
 }
}

    </style>
</head>
<body <?php body_class(); ?>>

<header> 
          <div id="home">
              <nav class="navbar" id="homenav">
                <a href="#"><img src="https://lightslategray-kingfisher-564139.hostingersite.com/wp-content/uploads/2024/11/oliver-logo.png" alt="" class="logohead logow"draggable="false"></a>
                <div class="callnow callm"><a href="tel:+">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M15.0499 5C16.0267 5.19057 16.9243 5.66826 17.628 6.37194C18.3317 7.07561 18.8094 7.97326 18.9999 8.95M15.0499 1C17.0792 1.22544 18.9715 2.13417 20.4162 3.57701C21.8608 5.01984 22.7719 6.91101 22.9999 8.94M21.9999 16.92V19.92C22.0011 20.1985 21.944 20.4742 21.8324 20.7293C21.7209 20.9845 21.5572 21.2136 21.352 21.4019C21.1468 21.5901 20.9045 21.7335 20.6407 21.8227C20.3769 21.9119 20.0973 21.9451 19.8199 21.92C16.7428 21.5856 13.7869 20.5341 11.1899 18.85C8.77376 17.3147 6.72527 15.2662 5.18993 12.85C3.49991 10.2412 2.44818 7.27099 2.11993 4.18C2.09494 3.90347 2.12781 3.62476 2.21643 3.36162C2.30506 3.09849 2.4475 2.85669 2.6347 2.65162C2.82189 2.44655 3.04974 2.28271 3.30372 2.17052C3.55771 2.05833 3.83227 2.00026 4.10993 2H7.10993C7.59524 1.99522 8.06572 2.16708 8.43369 2.48353C8.80166 2.79999 9.04201 3.23945 9.10993 3.72C9.23656 4.68007 9.47138 5.62273 9.80993 6.53C9.94448 6.88792 9.9736 7.27691 9.89384 7.65088C9.81408 8.02485 9.6288 8.36811 9.35993 8.64L8.08993 9.91C9.51349 12.4135 11.5864 14.4864 14.0899 15.91L15.3599 14.64C15.6318 14.3711 15.9751 14.1858 16.3491 14.1061C16.723 14.0263 17.112 14.0555 17.4699 14.19C18.3772 14.5286 19.3199 14.7634 20.2799 14.89C20.7657 14.9585 21.2093 15.2032 21.5265 15.5775C21.8436 15.9518 22.0121 16.4296 21.9999 16.92Z" stroke="inherit" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>                        
                  Call now </a>
                </div>   
                <div class="btn-toggle menu_icon_box">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>
                </div>
                  <div class="menu-links box">
                    <div class="menu-linksbtn">
                      <ul>
                        <li><a href="#"> Home </a></li>
                        <li><a href="#services"> Services </a></li>
                        <li><a href="#aboutus"> About us </a></li>
                        <li><a href="#portfolio"> Portfolio </a></li>
                        <li><a href="#reviews"> Reviews </a></li>
                        <li><a href="#contact"> Contact </a></li>
                      </ul>
                    </div>
                    <div class="nonebar">
                      <a href="#"><img src="https://lightslategray-kingfisher-564139.hostingersite.com/wp-content/uploads/2024/11/oliver-logo.png" alt="" class="logohead logo-m" draggable="false"></a>
                    </div>
                    <div class="menusocial">
                      <ul>
                        <li class="callnow callw"><a class=" btn1" href="tel:+">
                          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M15.0499 5C16.0267 5.19057 16.9243 5.66826 17.628 6.37194C18.3317 7.07561 18.8094 7.97326 18.9999 8.95M15.0499 1C17.0792 1.22544 18.9715 2.13417 20.4162 3.57701C21.8608 5.01984 22.7719 6.91101 22.9999 8.94M21.9999 16.92V19.92C22.0011 20.1985 21.944 20.4742 21.8324 20.7293C21.7209 20.9845 21.5572 21.2136 21.352 21.4019C21.1468 21.5901 20.9045 21.7335 20.6407 21.8227C20.3769 21.9119 20.0973 21.9451 19.8199 21.92C16.7428 21.5856 13.7869 20.5341 11.1899 18.85C8.77376 17.3147 6.72527 15.2662 5.18993 12.85C3.49991 10.2412 2.44818 7.27099 2.11993 4.18C2.09494 3.90347 2.12781 3.62476 2.21643 3.36162C2.30506 3.09849 2.4475 2.85669 2.6347 2.65162C2.82189 2.44655 3.04974 2.28271 3.30372 2.17052C3.55771 2.05833 3.83227 2.00026 4.10993 2H7.10993C7.59524 1.99522 8.06572 2.16708 8.43369 2.48353C8.80166 2.79999 9.04201 3.23945 9.10993 3.72C9.23656 4.68007 9.47138 5.62273 9.80993 6.53C9.94448 6.88792 9.9736 7.27691 9.89384 7.65088C9.81408 8.02485 9.6288 8.36811 9.35993 8.64L8.08993 9.91C9.51349 12.4135 11.5864 14.4864 14.0899 15.91L15.3599 14.64C15.6318 14.3711 15.9751 14.1858 16.3491 14.1061C16.723 14.0263 17.112 14.0555 17.4699 14.19C18.3772 14.5286 19.3199 14.7634 20.2799 14.89C20.7657 14.9585 21.2093 15.2032 21.5265 15.5775C21.8436 15.9518 22.0121 16.4296 21.9999 16.92Z" stroke="inherit" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                          </svg>                        
                          Call now </a>
                        </li>
                        <li>
                          <a href="#"><svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="17.1875" cy="16.5435" r="16.5" fill="#78C2DD"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M21.1565 7.22693H12.6708C9.74168 7.22693 7.36719 9.60142 7.36719 12.5305V21.0162C7.36719 23.9453 9.74168 26.3198 12.6708 26.3198H21.1565C24.0855 26.3198 26.46 23.9453 26.46 21.0162V12.5305C26.46 9.60142 24.0855 7.22693 21.1565 7.22693ZM24.6038 21.0162C24.598 22.9176 23.0579 24.4577 21.1565 24.4635H12.6708C10.7693 24.4577 9.22926 22.9176 9.22344 21.0162V12.5305C9.22926 10.629 10.7693 9.089 12.6708 9.08318H21.1565C23.0579 9.089 24.598 10.629 24.6038 12.5305V21.0162ZM21.952 12.7957C22.5378 12.7957 23.0127 12.3208 23.0127 11.735C23.0127 11.1492 22.5378 10.6742 21.952 10.6742C21.3662 10.6742 20.8913 11.1492 20.8913 11.735C20.8913 12.3208 21.3662 12.7957 21.952 12.7957ZM16.9136 12.0001C14.2774 12.0001 12.1404 14.1372 12.1404 16.7734C12.1404 19.4095 14.2774 21.5466 16.9136 21.5466C19.5498 21.5466 21.6868 19.4095 21.6868 16.7734C21.6897 15.5065 21.1877 14.2908 20.2919 13.3951C19.3961 12.4993 18.1804 11.9973 16.9136 12.0001ZM13.9967 16.7734C13.9967 18.3844 15.3026 19.6903 16.9136 19.6903C18.5246 19.6903 19.8306 18.3844 19.8306 16.7734C19.8306 15.1623 18.5246 13.8564 16.9136 13.8564C15.3026 13.8564 13.9967 15.1623 13.9967 16.7734Z" fill="white"/>
                            </svg>
                            </a></li>
                        <li>
                          <a href="#" target="_blank"><svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="16.7871" cy="16.5435" r="16.5" fill="#78C2DD"/>
                            <path d="M27.3959 16.8656C27.3959 10.9716 22.647 6.1936 16.7888 6.1936C10.9306 6.1936 6.18164 10.9716 6.18164 16.8656C6.18164 22.1921 10.0605 26.6073 15.1314 27.4079V19.9504H12.4382V16.8656H15.1314V14.5144C15.1314 11.8397 16.7151 10.3623 19.1378 10.3623C20.2985 10.3623 21.5122 10.5708 21.5122 10.5708V13.1971H20.1748C18.8572 13.1971 18.4461 14.0198 18.4461 14.8638V16.8656H21.3879L20.9177 19.9504H18.4461V27.4079C23.5171 26.6073 27.3959 22.1924 27.3959 16.8656Z" fill="white"/>
                            </svg>
                            </a></li>
                          <li>
                            <a href="#" target="_blank"><svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <circle cx="17.3867" cy="16.5435" r="16.5" fill="#78C2DD"/>
                              <path d="M26.4625 13.3414C26.4625 14.5847 25.4461 15.6101 24.1937 15.6101C22.9414 15.6101 21.925 14.5847 21.925 13.3414C21.925 14.5847 20.9086 15.6101 19.6562 15.6101C18.4039 15.6101 17.3875 14.5847 17.3875 13.3414C17.3875 14.5847 16.3711 15.6101 15.1187 15.6101C13.8664 15.6101 12.85 14.5847 12.85 13.3414C12.85 14.5847 11.8336 15.6101 10.5812 15.6101C9.3289 15.6101 8.3125 14.5847 8.3125 13.3414L9.57393 8.42273C9.57393 8.42273 9.8371 7.44263 10.7627 7.44263H24.0122C24.9379 7.44263 25.2011 8.42273 25.2011 8.42273L26.4625 13.3414ZM25.555 16.6991V23.7776C25.555 24.7759 24.7382 25.5926 23.74 25.5926H11.035C10.0367 25.5926 9.22 24.7759 9.22 23.7776V16.6991C9.81657 16.9454 10.4685 17.0266 11.1072 16.9339C11.746 16.8413 12.348 16.5784 12.85 16.1728C13.4762 16.6719 14.2657 16.9714 15.1187 16.9714C15.9809 16.9714 16.7704 16.6719 17.3875 16.1728C18.0137 16.6719 18.8032 16.9714 19.6562 16.9714C20.5184 16.9714 21.3079 16.6719 21.925 16.1728C22.5421 16.6719 23.3407 16.9714 24.1937 16.9714C24.6747 16.9714 25.1376 16.8716 25.555 16.6991ZM23.74 21.3546C23.74 21.1731 23.74 20.9825 23.6946 20.7829L23.6674 20.6377H20.9721V21.6995H22.6147C22.5602 21.8991 22.4876 22.0988 22.3334 22.2621C22.0339 22.5616 21.6255 22.7249 21.1899 22.7249C20.7362 22.7249 20.2915 22.5344 19.9648 22.2167C19.3386 21.5724 19.3386 20.5288 19.9829 19.8754C20.6091 19.2401 21.6437 19.2401 22.2971 19.8482L22.4241 19.9661L23.1864 19.1948L23.0412 19.0677C22.533 18.5958 21.8615 18.3326 21.1536 18.3326H21.1445C20.4095 18.3326 19.7198 18.614 19.2025 19.1222C18.6671 19.6485 18.3676 20.3382 18.3676 21.0551C18.3676 21.7811 18.6489 22.4527 19.1662 22.9518C19.7052 23.4779 20.4276 23.7741 21.1809 23.7776H21.199C21.925 23.7776 22.5693 23.5145 23.0412 23.0516C23.4677 22.616 23.74 21.9626 23.74 21.3546Z" fill="white"/>
                              </svg>
                              </a></li>
                      </ul>
                    </div>
                  </div>
              </nav>
          </div>
      </header>