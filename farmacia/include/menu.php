<head>

  <meta charset="utf 8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/icon/font-awesome.min.css">
  <link rel="stylesheet" href="css/icon/ka-f.fontawesome.v5.15.4.free.min.css">
  <script src="js/bootstrap_js/bootstrap.min.js"></script>
  <script src="js/sweetalert.min.js"></script>
  <header>
    
    
  <!-- inicio de navbar -->
    <div class="container pt-5">
    <h1>Famacia Esperanza</h1>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
      <div class="container-fluid">
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a id="inventario" class="nav-link" aria-current="page" href="inventario.php">Inventario</a>
            </li>
            <li class="nav-item">
              <a id="inventario" class="nav-link" aria-current="page" href="registro_producto.php">Registro</a>
            </li>
          </ul>
          <!-- <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form> -->
        </div>
      </div>
    </nav>
    
</div>
  </header>
  <script>//====================  pequenio escript de javascript =====================================
    var section = "<?= $section; ?>"; //variable que obtine el valor de la variable de php $section
    var msg = "<?= $msg; ?>";  //variable que obtine el valor de la variable de php $msg
    

    if (section == "admin_inventario") //si la seccion o pagina es = a admin_inventario
      document.getElementById("inventario").classList.add("active");// busca el id en html y le agrega una clase css
    else if (section == "registro_producto") //sino, entonces la seccion o pagina es = a admin_registro_producto
      document.getElementById("navbarDropdown").classList.add("active");// busca el id en html y le agrega una clase css

    if(msg!="null")// si y solo si la variable msg es diferente de null
      swal("INFO", msg, "info")// mensaje de cuadro del dialogo
      .then(function(val){// se ejecuta al cerrar el cuadro del dialogo
          history.pushState(null,"","?");//quita el get de la url
      });
  </script>

</head>