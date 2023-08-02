<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Consultas</title>
</head>
<body>
<?php
    include("menu.php");
    ?>
<div class= "especialidade">
    <h1>Busque a especialidade do seu médico aqui:</h1>
</div>

<div class="container text-center">
  <div class="row align-items-start">
    <div class="col">
     <a href="neurologista.php">    <button type="button" class="btn btn-secondary">Neurologista</button> </a> 
     <img src="imagens\simbolo2(neuro).jpg" alt="">
    </div>

    <div class="col">
      <a href="cardiologista.php">   <button type="button" class="btn btn-secondary">Cardiologista</button> </a>
      <img src="imagens\simbolo7(coração).jpg" alt="">
    </div>

    <div class="col">
     <a href="">   <button type="button" class="btn btn-secondary">Oftamologista</button> </a>
     <img src="imagens\simbolo4(olhos).jpg" alt="">
    </div>
  </div>
</div>

<br>
<br>
<br>

<div class="container text-center">
  <div class="row align-items-start">
    <div class="col">
     <a href="">  <button type="button" class="btn btn-secondary">Dentista</button> </a>
     <img src="imagens\simbolo6(dente).jpg" alt="">
    </div>

    <div class="col">
      <a  href="cadastro.php"> <button type="button" class="btn btn-secondary">Ginecologista</button> </a>
      <img src="imagens\simbolo12(ppk).jpg" alt="">
    </div>

    <div class="col">
     <a href="">    <button type="button" class="btn btn-secondary">Clínico geral</button> </a>
     <img src="imagens\simbolos1.jpg" alt="">
    </div>
  </div>
</div>
<!------colocar margin botton entre os espaços------>
<br>
<br>
<br>

<div class="container text-center">
  <div class="row align-items-start">
    <div class="col">
     <a href="">  <button type="button" class="btn btn-secondary">Nefrologista</button> </a>
     <img src="imagens\simbolo10(rim).jpg" alt="">
    </div>

    <div class="col">
      <a  href="cadastro.php"> <button type="button" class="btn btn-secondary">Otorrinolaringologista</button> </a>
      <img src="imagens\simbolo5(nariz).jpg" alt="">
    </div>

    <div class="col">
     <a href="">    <button type="button" class="btn btn-secondary">Pneumologista</button> </a>
     <img src="imagens\simbolo8(pulmão).jpg" alt="">
    </div>
  </div>
</div>









<br>
<br>
<br>
<center>
<button type="button" class="btn btn-primary btn-lg">Presencial</button>
<button type="button" class="btn btn-primary btn-lg">Teleconsulta</button>
</center>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</html>