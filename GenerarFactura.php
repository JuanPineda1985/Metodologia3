<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="StyleFactura.css">
    <title>Sistema de Pago</title>
</head>
<body>
    <section class="form-register">
        <h4>Generación de Factura</h4>
    <form action="registrarProductos.php" method="POST">
        <input type="text" class="form-control" name="propietario" placeholder="Nombre del Propietario" required>
        <input type="text" class="form-control" name="apartamento" placeholder="Numero del Apartamento" required>
        <input type="text" class="form-control" name="direccion" placeholder="Direccion del Responsable" required>
        <input type="text" class="form-control" name="telefono" placeholder="Telefono del Responsable" required>
        <input type="text" class="form-control" name="email" placeholder="email del Responsable" required>
        <input type="text" class="form-control" name="total" placeholder="total a Pagar">
        <input type="text" class="form-control" name="personas" placeholder="Numero de Personas en el Inmueble">
    <br>
    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="estado">
        <option selected>Estado de la Propiedad</option>
        <option value="alquilado">Alquilado</option>
        <option value="habitado por propietario">Habitado por el propietario</option>
        <option value="desocupado">Desocupado</option>    
    </select>
    <br>
    <br>
    <div class="row mt-3">
        <label for="start">Fecha generacion factura</label>
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
    <button type="submit" class="btn btn-primary btn-lg" name="botonEnvio">Generar Factura</button>
        <button type="button" class="btn btn-secondary btn-lg" onclick="location.href='listaProductos.php'">Lista de Apartamentos</button>
    </section>
        
</body>
</html>