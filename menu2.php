<?php
    if(!isset($_SESSION)) {
    session_start();
}  
?>

<div class="container1">
  <div class="image-wrapper">
  <a href="index.php"><img src="img/logot.png" alt="Logotipo"></a>
  
  </div>
  <div class="image-wrapper">
    <img src="img/brasill.png" alt="Bandeira do Brasil">
  </div>
</div>



<nav class="navbar navbar-dark ">
  <div class="container-fluid">
  <?php  
        $logado = '<a href="#"><i class="bi bi-person-check"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-check" viewBox="0 0 16 16">
        <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514ZM11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"/>
        <path d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Z"/></svg>
        </i></a>';

        $nlogado ='<a href="user/login.php"><i class="bi bi-person"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
      </svg>
      </i></a>';
      if (isset ($_SESSION["login_nome"])){
        echo $logado;
      } else {
        echo $nlogado;
      }
      ?>  
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end " tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
      <img class="b" src="img/logot.png" alt="Logo" width="155" class="d-inline-block">
         <div class="container">
    
  </div>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Página Principal</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="page/posto.php">Unidades próximas</a>
          </li>
      
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="page/farmacia.php">Farmácia</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="page/info_doencas.php">Info doenças</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="user/minhaconta.php">Minha conta</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>