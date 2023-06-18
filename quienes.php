<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BeloveDogs · About Us</title>
    <!-- Bootstrap CSS -->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles/base.css">
    <link rel="stylesheet" href="styles/quienes.css">
    <!-- Script -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body class="margin-top">
    <nav class="navbar navbar-expand-lg fixed-top">
        <a class="navbar-brand" href="home.php">
            <img src="favicon.ico" alt="Home" width="30" height="30">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="adopta.php">Adopta</a>
                </li>
                <li class="nav-item">
                    <?php if (!isset($_SESSION['username'])): ?>
                        <a class="nav-link" href="login.php">Login</a>
                    <?php endif; ?>
                    <?php if (isset($_SESSION['username'])): ?>
                        <a class="nav-link" href="logout.php">Logout</a>
                    <?php endif; ?>
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

    <div class="bodyQ">
        <div id="textoQ">
            <h1>Quiénes Somos</h1>
            <p>
                Este proyecto está formado por tres estudiantes de segundo año de desarrollo web en Madrid.
                Cada uno de los miembros del equipo aporta todo su esfuerzo e ideas con el fin de llevar esta idea de
                negocio a que se convierta en una realidad. <br>
                Somos:
            <ul>
                <li><i id="namesD">Jorge García </i>
                    <p>
                        Me introduje en el mundo de la informática y el desarrollo web influenciado por mis familiares.
                        Estudié Ingeniería Informática en la Universidad Rey Juan Carlos, pero decidí dar un enfoque más
                        orientado al ámbito laboral a mis estudios, por lo que opté por el Grado Superior de Desarrollo
                        de Aplicaciones Web.
                        Apasionado de los animales, puedo aportar varias ideas y puntos de vista interesantes para el
                        desarrollo de nuestra idea.
                        Cuento con un certificado C2 de inglés, por lo que no habrá ningún problema a la hora de
                        traducir nuestra aplicación para que pueda disfrutarla un mayor número de personas.
                    </p>
                </li>
                <li><i id="namesD">Ignacio Martínez </i>
                    <p>
                        Desde siempre he tenido mucha curiosidad por el campo de la tecnología y la informática.
                        Este interés me dio la motivación suficiente para estudiar un grado superior en Desarrollo de
                        Aplicaciones Web.
                        Soy especialmente bueno en el ámbito del “troubleshooting” y con un gran “sens” de equipo.
                        Amante de las mascotas desde muy niño, estoy entusiasmado por formar parte de un proyecto así, y
                        poder ayudar a muchos animales a nivel internacional.
                        Gracias a mi certificado de inglés C1 de Cambridge English, no tendremos muchos problemas a la
                        hora de expandir nuestro negocio.
                    </p>
                </li>
                <li><i id="namesD">Daniel Villas </i>
                    <p>
                        Soy disciplinado y comprometido con el equipo. Me gusta que haya buen ambiente en el trabajo.
                        Soy creativo y me gustan las nuevas experiencias. Siempre me ha gustado la informática y hace
                        tiempo decidí que en mi futuro me dedicaría a ella.
                        Los animales me gustan desde pequeño, de hecho, tengo dos gatos.
                        Me desenvuelvo fácilmente en inglés ya que llevo estudiando el idioma desde pequeño.
                        Es una idea innovadora y con gran potencial y estoy muy motivado para desarrollarla.
                    </p>
                </li>
            </ul>
            </p>
            <br>
            <h1> Qué es BeloveDogs </h1>
            <p>
                <ul>
                    <li>
                        <p>
                            El portal web desarrollado en PHP proporciona una interfaz intuitiva y fácil de usar para los usuarios
                            interesados en adoptar animales.
                        </p>
                    </li>

                    <li>
                        <p>
                        Incluye una sección de eventos, donde se muestran actividades relacionadas con el cuidado de
                        animales, charlas educativas y jornadas de adopción. Los usuarios pueden explorar los eventos próximos,
                        obtener detalles sobre su ubicación, fecha y hora, y registrarse para asistir a ellos.
                        </p>
                    </li>

                    <li>
                        <p>
                        El bienestar y la protección de los animales son temas de gran importancia en la sociedad actual. Sin
                        embargo, la problemática del abandono y la falta de adopción de animales domésticos persiste, generando
                        graves consecuencias para ellos.
                        </p>
                    </li>

                    <li>
                        <p>
                        Una de las principales justificaciones de este proyecto es la reducción del abandono animal. El abandono
                        de animales domésticos es un problema grave que conlleva a su sufrimiento y a la sobrepoblación en
                        refugios y centros de rescate. El portal de adopción permitirá difundir información sobre animales
                        disponibles para adopción, sensibilizando a la población y fomentando la adopción responsable como
                        alternativa al abandono.
                        </p>
                    </li>

                    <li>
                        <p>
                        Además, el desarrollo de este portal contribuirá a mejorar el bienestar animal. Los animales que se
                        encuentran en situación de abandono sufren condiciones precarias, maltrato y falta de cuidados
                        adecuados. Al promover la adopción a través del portal, se les brindará la oportunidad de encontrar un
                        hogar amoroso y recibir los cuidados necesarios para su bienestar.
                        </p>
                    </li>

                    <li>
                        <p>
                        Otra justificación importante es la facilitación de la adopción responsable. El proceso de adopción de
                        un animal puede ser complicado y requiere de tiempo y esfuerzo por parte de los interesados. El portal
                        de adopción proporcionará un medio centralizado para que los posibles adoptantes accedan a información
                        detallada sobre los animales disponibles, sus características, necesidades especiales y requisitos de
                        adopción. Esto facilitará la búsqueda y selección de mascotas adecuadas a las preferencias y
                        circunstancias de cada adoptante, promoviendo una adopción más responsable y duradera.
                        </p>
                    </li>

                    <li>
                        <p>
                        Además de facilitar la adopción, el portal desempeñará un papel crucial en la concienciación y educación
                        sobre la responsabilidad que conlleva tener una mascota. Se proporcionará información sobre la tenencia
                        responsable, cuidados básicos, esterilización, vacunación y otros aspectos relevantes para garantizar el
                        bienestar y la salud de los animales adoptados.
                        </p>
                    </li>
                </ul>
            </p>
            <br>
            <h1> ¿Y los amigos tan graciosos de las fotos?¿Quienes son? </h1>
            <p>
                Pues ni más ni menos que nuestras adorables mascotas. Los dos gatetes dormilones son Dumbo y Nieve, los
                amigos de Daniel.
                Al que tanto le gusta tomar el sol es Misu, colega de Jorge.
                Y el modelo de muebles de jardín tan bonito es JUAN, el mejor amigo de Ignacio. Y sí, es un perro
                modelo, nunca mejor dicho.
            </p>
        </div>

        <div id="imagenes">
            <div class="imagen">
                <img src="images/mascota1.jpg" alt="Mascota 1">
                <p id="img_txt">Dumbo y Nieve durmiendo en un día de invierno</p>
            </div>
            <br><br><br><br><br>
            <div class="imagen">
                <img src="images/mascota2.jpg" alt="Mascota 2">
                <p id="img_txt"> Dumbo y Nieve posando para la foto 📸</p>
            </div>
            <br><br><br><br><br>
            <div class="imagen">
                <img src="images/mascota3.jpg" alt="Mascota 3">
                <p id="img_txt">Como le gusta a Misu tomar el solecito e.e</p>
            </div>
            <br><br><br><br><br>
            <div class="imagen">
                <img src="images/juan.jpg" alt="Mascota 4">
                <p id="img_txt">Juan posando para una revista de decoración</p>
            </div>
            <br><br><br><br><br>
            <div class="imagen">
                <img src="images/juan_selfie.jpg" alt="Mascota 5">
                <p id="img_txt">Mira que selfie más chulo se ha hecho Juan</p>
            </div>
        </div>

    </div>
    <style>
        .bodyQ {
            display: flex;
        }

        #textoQ {
            flex: 1;
            padding: 50px;
        }

        h1 {
            font-size: 200%;
        }

        #namesD {
            font-size: 170%;
        }

        p {
            font-size: 150%;
        }

        #imagenes {
            display: flex;
            flex-direction: column;
            padding: 20px;
            margin-right: 5%;
            margin-top: 5%;
        }

        .imagen {
            margin-bottom: 20px;
        }

        .imagen img {
            max-width: 500px;
        }

        .imagen:hover {
            -ms-transform: scale(1.2);
            -moz-transform: scale(1.2);
            -webkit-transform: scale(1.2);
            -o-transform: scale(1.2);
            transform: scale(1.2);
            border-style: double;
            border-color: #e84855;
        }

        .imagen:hover #img_txt,
        .imagen:focus #img_txt {
            display: block;
        }

        #img_txt {
            display: none;
            font-size: 35px;
            color: #e84855;
            font-family: sans-serif;
            text-align: center;
            margin: auto;
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            height: 50px;
            cursor: pointer;
        }
    </style>
</body>

</html>