<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Ejemplo HTML</title>
    <meta name="description" content="Este es un ejemplo de pagina web">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link href="public/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="public/css/style.css" rel="stylesheet" type="text/css" />
    <script src="public/js/jquery.js" type="text/javascript"></script>
</head>

<body class = "container-fluid">
    <nav class="navbar navbar-expand navbar-light bg-light">
        <div class="navbar-header">
            <a class="navbar-brand" href="?controlador=Index">
                <img class="small" alt="Logo" src="public/img/logo.png" height="50">
            </a>
        </div>
        <div>
            <ul class="nav navbar-nav">
                <li><a class="nav-item nav-link border-start border-end" href="?Controller=Index">Inicio</a></li>
                <li><a class="nav-item nav-link border-start border-end" href="?Controller=CleaningProduct&action=AddProductView">Registrar Producto</a></li>
                <li><a class="nav-item nav-link border-start border-end" href="?Controller=CleaningProduct&action=showProductView">Mostar Productos</a></li>
            </ul>
        </div>
    </nav>