<?php
/**
 * Template Name: Página de Agradecimento
 *
 * Este é um template personalizado para a página de agradecimento.
 *
 * @package SeuTema
 */

get_header(); // Inclui o cabeçalho do tema
?><head>
<link rel="stylesheet" href="style.css">
<style>
    .agradecimento-container {
        display: flex;
        flex-direction: column;
        text-align: center;
        padding: 50px;
        margin: 90px auto 50px;
        border-radius: 10px;
    }
    .agradecimentoimg{
        max-width: 300px;
        z-index: 3;
        margin: auto;
    }
    .videoposter{
        position: absolute;
        display: block;
        width: 100%;    
        max-width: 100vw;
        height: 930px;
        z-index:0;
        left: 0;
        top: 0;
        object-fit: cover;
    }
    .agradecimento-content{
        max-width: 550px;
        margin: auto;
        z-index: 3;
    }
    .agradecimento-container .overlay {
        background: linear-gradient(0deg, rgba(0, 0, 0, 0.75) 0%, rgba(0, 0, 0, 0.75) 100%)  no-repeat;    
        height: 930px;
    }
    .agradecimento-container h1 {
        display: flex;
        flex-direction: column;
        color: var(--Color-Neutral-white, #FFF);
        text-align: center;
        font-family: "Glacial Indifference";
        font-size: 48px;
        font-weight: 400;
        line-height: 90%; /* 43.2px */
    }
    .agradecimento-container span {
        color: var(--Color-Neutral-white, #FFF);
        text-align: center;
        font-family: "Eyesome Script";
        font-size: 96px;
        font-weight: 400;
        line-height: 110%;
    }
    .agradecimento-container p {
        color: var(--Color-Neutral-white, #FFF);
        text-align: center;
        font-family: 'Inter';
        font-size: 12px;
        font-weight: 600;
        line-height: 200%;
    }
    .agradecimento-container .btn-voltar {
        display: inline-block;
        margin-top: 20px;
        padding: 10px 20px;
        border-radius: 296px;
        background: var(--Color-Brand-secondary, #78C2DD);
        color: white;
        text-decoration: none;
        font-family: "Glacial Indifference";
        font-size: 16px;
        font-weight: 700;
        line-height: 120%; 
    }
    .agradecimento-container .btn-voltar:hover {
        background-color: #3E606C;
    }
</style>
</head>
<div class="agradecimento-container">
    <video class="videoposter" src="https://oliverscleaning.com/wp-content/uploads/2024/11/53abd497c3c48cc93bdff996fbd9be6a.mp4" autoplay playsinline muted loop></video>
    <div class="overlay overlay2"></div>
    <img src="./assets/oliver-logo.png" alt="clean kitchen" class="agradecimentoimg">
    <div class="agradecimento-content">
        <h1>Your form was successfully<span> submitted!</span></h1> <br>
        <p>We appreciate you reaching out and submitting the contact form! Your interest in our services means a lot to us. Our team will review your inquiry and get back to you shortly. If you have any other questions or need further help, please don't hesitate to ask!</p>
        <a href="<?php echo home_url(); ?>" class="btn-voltar">Back to home page!</a>
    </div>
</div>

<div class="areascontainer container">
            <div class="areastitle title aos-fade">
              <small>contact</small>
              <h2>Areas <br>We Serve</h2>
            </div>
            <img class="line" src="https://oliverscleaning.com/wp-content/uploads/2024/11/line.png" alt="">
            <div class="areas">
              <div class="mapcontainer">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d390979.66439410317!2d-83.0553823!3d40.04130245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88a3f1dac55da609%3A0xe814c3c4af087c85!2sOliver%C2%B4s%20Cleaning!5e0!3m2!1spt-BR!2sbr!4v1732734213605!5m2!1spt-BR!2sbr"  style="border:0;" allowfullscreen="false" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
              <div class="listareas">
                <ul>
                  <li>Bexley</li>
                  <li>Blacklick</li>
                  <li>Buckeye Lake</li>
                  <li>Canal Winchester</li>
                  <li>Clintonville</li>
                  <li>Columbus</li>
                  <li>Delaware</li>
                  <li>Galena</li>
                  <li>Gahanna</li>
                  <li>Galloway</li>
                  <li>Grove City</li>
                  <li>Groveport</li>
                  <li>Heaton</li>
                  <li>Hilliard</li>
                  <li>Johnstown</li>
                </ul><ul>
                  <li>Lancaster</li>
                  <li>Lewis Center</li>
                  <li>Marion</li>
                  <li>Marysville</li>
                  <li>Newark</li>
                  <li>New Albany</li>
                  <li>Pataskala</li>
                  <li>Pickerington</li>
                  <li>Plain City</li>
                  <li>Powell</li>
                  <li>Reynoldsburg</li>
                  <li>Sunbury</li>
                  <li>Upper Arlington</li>
                  <li>Westerville</li>
                  <li>Worthington</li>
                </ul>
              </div>
            </div>
            <div class="locationcontainer">
                <ul>
                    <li><h5><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                      <path d="M11.6221 6.29499C12.2641 6.29499 12.8799 6.55004 13.3338 7.00403C13.7878 7.45802 14.0429 8.07377 14.0429 8.71581C14.0429 9.03372 13.9803 9.34852 13.8586 9.64223C13.737 9.93593 13.5586 10.2028 13.3338 10.4276C13.1091 10.6524 12.8422 10.8307 12.5485 10.9524C12.2548 11.074 11.94 11.1366 11.6221 11.1366C10.98 11.1366 10.3643 10.8816 9.91028 10.4276C9.45629 9.9736 9.20124 9.35786 9.20124 8.71581C9.20124 8.07377 9.45629 7.45802 9.91028 7.00403C10.3643 6.55004 10.98 6.29499 11.6221 6.29499ZM11.6221 1.9375C13.4198 1.9375 15.1439 2.65164 16.4151 3.92282C17.6862 5.194 18.4004 6.91809 18.4004 8.71581C18.4004 13.7996 11.6221 21.3041 11.6221 21.3041C11.6221 21.3041 4.84375 13.7996 4.84375 8.71581C4.84375 6.91809 5.55789 5.194 6.82907 3.92282C8.10025 2.65164 9.82434 1.9375 11.6221 1.9375ZM11.6221 3.87416C10.338 3.87416 9.10649 4.38426 8.1985 5.29225C7.29051 6.20023 6.78041 7.43173 6.78041 8.71581C6.78041 9.68415 6.78041 11.6208 11.6221 18.1183C16.4637 11.6208 16.4637 9.68415 16.4637 8.71581C16.4637 7.43173 15.9536 6.20023 15.0456 5.29225C14.1376 4.38426 12.9062 3.87416 11.6221 3.87416Z" fill="#78C2DD"/>
                    </svg> Location</h5>
                    <p>Columbus, OH</p></li>
                    <li><h5><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                      <path d="M21.3041 5.95033C21.3041 4.88517 20.4326 4.01367 19.3675 4.01367H3.87416C2.809 4.01367 1.9375 4.88517 1.9375 5.95033V17.5703C1.9375 18.6355 2.809 19.507 3.87416 19.507H19.3675C20.4326 19.507 21.3041 18.6355 21.3041 17.5703V5.95033ZM19.3675 5.95033L11.6208 10.792L3.87416 5.95033H19.3675ZM19.3675 17.5703H3.87416V7.88699L11.6208 12.7286L19.3675 7.88699V17.5703Z" fill="#78C2DD"/>
                    </svg> Email</h5>
                    <p>oliverscleaningoh@gmail.com</p></li>
                    <li><h5><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                      <path d="M18.496 8.7081C20.239 10.4511 20.239 13.1624 18.496 15.0022L19.4643 15.9706C21.8851 13.7434 21.8851 10.0638 19.4643 7.73977L18.496 8.7081ZM17.4308 9.77326L16.4625 10.7416C16.9466 11.4194 16.9466 12.2909 16.4625 12.9688L17.4308 13.9371C18.5928 12.7751 18.5928 11.0321 17.4308 9.77326ZM13.5575 1.25195H3.87416C3.36053 1.25195 2.86793 1.45599 2.50473 1.81919C2.14154 2.18238 1.9375 2.67498 1.9375 3.18861V20.6186C1.9375 21.1322 2.14154 21.6248 2.50473 21.988C2.86793 22.3512 3.36053 22.5552 3.87416 22.5552H13.5575C14.0711 22.5552 14.5637 22.3512 14.9269 21.988C15.2901 21.6248 15.4941 21.1322 15.4941 20.6186V3.18861C15.4941 2.67498 15.2901 2.18238 14.9269 1.81919C14.5637 1.45599 14.0711 1.25195 13.5575 1.25195ZM13.5575 19.6502H3.87416V4.15694H13.5575V19.6502Z" fill="#78C2DD"/>
                    </svg> Phone</h5>
                    <p>(380) 223-4888</p></li>
                </ul>
            </div>
          </div>
<?php
get_footer(); // Inclui o rodapé do tema
?>
