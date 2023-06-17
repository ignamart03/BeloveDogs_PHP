<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles/base.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="home.php">
            <img src="favicon.ico" alt="Home" width="30" height="30">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="adopta.php">Adopta</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="shop.php">Tienda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="quienes.php">Quienes Somos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ayuda.php">Ayuda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="otros.php">Conoce Otros Dueños</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="perfil.php">Perfil</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        <h2 class="mb-4">Tienda</h2>
        <div class="row">
            <!-- Bucle for para simplificar la generación de las imágenes en la página -->
            <?php 
            // Array de enlaces
            $enlaces = [
                'https://www.kiwoko.com/perros/accesorios-para-perros/juguetes-para-perros/summer-vibes-piscina-para-perros/SMV58901_M.html',
                'https://www.kiwoko.com/perros/accesorios-para-perros/julius-k9-idc-arnes-ergonomigo-negro-para-perros/JULJ16779_M.html',
                'https://www.kiwoko.com/peluches/fluffy-erizo-de-peluche-para-perros/FLF70448_M.html',
                'https://www.kiwoko.com/peluches/fluffy-canvas-cocodrilo-de-peluche-para-perros/FLF16447_M.html',
                'https://www.kiwoko.com/gatos/comida-para-gatos/maltas-y-hierbas/malta/criadores-malta-omega-3-y-6-para-gatos-y-perros/CRD32370_M.html',
                'https://www.kiwoko.com/gatos/higiene-para-gatos/areneros-y-bandejas/nova-clean-beta-toillete-arenero-para-gatos/NCL70697_M.html',
                'https://www.elcorteingles.es/mascotas/A18063756-pienso-para-gatos-esterilizados-senior-ultima-senior-10-pollo/?parentCategoryId=999.20999297013',
                'https://www.tiendanimal.es/kong-snake-teaser-peluche-para-gatos/KONJU03366_M.html',
                'https://www.miscota.es/perros/trixie/gulliver-transport-n-4-52x51x72-cm-gris-cl-gris-16100',
                'https://www.miscota.es/perros/vectra/pr-171992',
                'https://www.tiendanimal.es/salvaje-base-adultos-pollo-pienso-para-perros/SAB0991_M.html',
                'https://www.kiwoko.com/perros/comida-para-perros/pienso-seco-para-perros/pienso-natural/pienso-true-origins-pure-salmon-para-perros/TRU70969_M.html',
                'https://www.miscota.es/gatos/seresto/seresto-collar-32599',
                'https://www.elcorteingles.es/mascotas/MP_0012933_0006R-rascador-hamiform-para-gatos-gaya/?parentCategoryId=999.20999304013&color=Blanco%20%2F%20Gris',
                'https://www.elcorteingles.es/mascotas/A44191011-rascador-fred-and-rita-para-gatos-coche-amarillo-de-carton/?parentCategoryId=999.20999376013&color=Amarillo',
                'https://www.bigberthaoriginal.es/products/la-cama-del-gato-cama-para-gatos-pompon-vison?currency=EUR&utm_medium=cpc&utm_source=google&utm_campaign=Google+Shopping&gclid=CjwKCAjws7WkBhBFEiwAIi16877oemGl6W-sDXTC0h4PcFK_jWRDjGInzddj9FYSLgGBLULRVV10axoCtcMQAvD_BwE&variant=15155388547115'
            ];

            // Array de nombres de artículos
            $nombres = [
                'Piscina para perros',
                'Arnés K9',
                'Fluffy Erizo',
                'Fluffy Cocodrilo',
                'Malta Omega 3 y 6',
                'Nova Clean Beta',
                'Ultima Esterilizados (Pollo)',
                'Kong Snake Teaser',
                'Transportín para coche',
                'Antiparásitos Vectra',
                'Salvaje (Pollo)',
                'True Origins (Salmón)',
                'Seresto Antiparásitos',
                'Rascador Hamiform',
                'Rascador Fred & Rita',
                'La Cama Del Gato'
            ];

            for ($i = 1; $i <= 16; $i++): ?>
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="card">
                        <img src="images/<?php echo $i; ?>.jpg" class="card-img-top image-container" alt="Imagen <?php echo $i; ?>">
                        <div class="card-body">
                            <h5 class="card-title"> <?php echo $nombres[$i - 1]; ?></h5>
                            <a href="<?php echo $enlaces[$i - 1]; ?>" target="_blank" class="btn btn-primary">Ir a producto</a>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
    </div>
</body>

</html>