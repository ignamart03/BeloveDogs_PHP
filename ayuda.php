<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles/base.css">
    <link rel="stylesheet" href="styles/ayuda.css">
    <script type="text/javascript" src="scripts/ayuda.js"></script>
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

    <br>
    <div class="ayudaS">
        <i>
            ¿No sabes bien como funciona BeloveDogs? Mira a ver si alguna de estas preguntas frecuentes soluciona tus dudas.
            Si no es así, prueba a contactar con nosotros a través de nuestro correo electrónico o nuestra cuenta de Instagram;
            o hazle unapregunta más concreta a nuestro ChatBot.
        </i>
    </div>

    <br><br>
    <h1>Preguntas Frecuentes</h1>
    <br><br>

  <div class="caja" onclick="toggleDropdown(this)">
    <p>¿Qué es esta web?</p>
        <div class="dropdown">
            <p>
                BeloveDogs ofrece a los usuarios una plataforma en la cual encontar varios servicios sobre mascotas. Entre ellos se encuentran
                un portal de adopción, una tienda, eventos relacionados con el mundo de las mascotas y una plataforma social. <br>
                BeloveDogs es un proyecto escolar
            </p>
        </div>
  </div>
  
  <div class="caja" onclick="toggleDropdown(this)">
    <p>¿Cómo funciona?</p>
        <div class="dropdown">
            <p>
                En BeloveDogs encontraras, por ejemplo, los artículos más destacados y mejor valorados de distintas webs de compra.
                También esta conectada con distintas protectoras de animales, para que puedas encontrar a tu compañero ideal sin necesidad de buscar entre todas las plataformas.
                BeloveDogs intenta conectar a los distintos usuarios a traves de su plataforma social. Así encontrarás gente con quien salir a pasear a tu perro, o alguien que pueda ayudarte con tus dudas.
            </p>
        </div>
  </div>

  <div class="caja" onclick="toggleDropdown(this)">
    <p>¿Es gratis? ¿Tengo que pagar algo?</p>
        <div class="dropdown">
            <p>
                Nuestra web es totalmente gratuita. Puedes registrarte y navegar sin pagar absolutamente nada.
                No obstante, tenemos un apartado de Donaciones para los que quieran ayudarnos a crecer. *Sin implementar*.
            </p>
        </div>
  </div>

  <div class="caja" onclick="toggleDropdown(this)">
    <p>¿Qué condiciones hay para adoptar?</p>
        <div class="dropdown">
            <p>
                Las condiciones para la adopción las pondrá cada autor. Al fin y al cabo, es la persona propietaria del animal.
                Nuestra página web simplemente muestra todo el listado de mascotas en adopción para intentar dar acogida al mayor número de animales posible. 
                Nosotros no somos responsables de las conversaciones o tratos que se lleven a cabo fuera de la página web.
            </p>
        </div>
  </div>

  <div class="caja" onclick="toggleDropdown(this)">
    <p>¿Puedo enseñaros mi mascota?</p>
        <div class="dropdown">
            <p>
            ¡Por supuesto! Si tienes mascotas adoptadas y quieres que la gente las conozca, ¡envíanos fotos!
            Nos las puedes enviar a través de tu correo a <b>belovedogs_official@gmail.com</b> o por Instagram como <b>@belovedogs_official</b> y nos encargaremos de mostrarlas en nuestras Redes Sociales.
            ¡No olvides contarnos la historia de cómo la(s) llegasteis a conocer!
            </p>
        </div>
  </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>