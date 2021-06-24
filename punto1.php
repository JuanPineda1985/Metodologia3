<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title background="fondoedificio.jpg">Unidad Residencial DAJU</title>
    <link rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body background="fondopantalla.jpg">
    <header>
      <p>
        <h1>Unidad Residencial DAJU</h1> 
      </p>
      <hr>
    </header>
        <main>
              <div class="container">
                <form action="registrarProductos.php" method="POST">
                  <p>
                      <h1>Sistema de Pago</h1>
                  </p>
                    <form>
                      <div class="row">
                        <div class="col">
                          <input type="text" class="form-control" placeholder="Nombre del propietario" name="propietario" required>
                        </div>
                        <div class="col">
                          <input type="text" class="form-control" placeholder="Numero del Apartamento" name="apartamento" required>
                        </div>
                      </div>
                      <br>
                      <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>

                      <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                                            <br>
                      <br>   
                      <div class="col">
                        <input type="text" class="form-control" placeholder="Total a pagar" name="total" required>
                      </div>
                      <div class="col">
                            <label class="font-weight-bold"></label>
                            <input type="text" class="form-control" placeholder="N° de personas que viven en el apartamento" name="personas">
                      </div>
                      <br>
                      <br>    
                      <div class="col">
                          <label for="start">Fecha de Pago</label>
                          <input type="date" id="start" name="generacionf"
                              value="AAAA-MM-DD"
                              min="2021-01-01" max="2050-12-31">
                      </div>
                      <br>
                      <div class="col">
                          <label for="start">Fecha limite sin Recargo</label>
                          <input type="date" id="start" name="sinrecargo"
                              value="AAAA-MM-DD"
                              min="2021-01-01" max="2050-12-31">
                      </div>
                      <br>  
                      <div class="col">
                          <label for="start">Fecha limite con Recargo</label>
                          <input type="date" id="start" name="conrecargo"
                              value="AAAA-MM-DD"
                              min="2021-01-01" max="2050-12-31">
                      </div> 
                      <br>            
                      <br>
                          <button type="submit" class="btn btn-primary btn-lg" name="botonEnvio">Ingresar</button>
                          <button type="button" class="btn btn-secondary btn-lg" onclick="location.href='listaProductos.php'">Inventario</button>
                      </div>
                  </form>
              </div>
        </main>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
    </body>
    </html>