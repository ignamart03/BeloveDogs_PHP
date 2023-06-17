<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles/base.css">
    <link rel="stylesheet" href="styles/quienes.css">
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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <div class="bodyQ">
        <div id="textoQ">
            <h1>Quienes Somos</h1>
            <p>
                Este proyecto está formado por tres estudiantes de segundo año de desarrollo web en Madrid. 
                Cada uno de los miembros del equipo aporta todo su esfuerzo e ideas con el fin de llevar esta idea de negocio a que se convierta en una realidad. <br>
                Somos:
                <ul>
                    <li><i id="namesD">Jorge García </i>
                        <p>
                            Me introduje en el mundo de la informática y el desarrollo web influenciado por mis familiares. 
                            Estudié Ingeniería Informática en la Universidad Rey Juan Carlos, pero decidí dar un enfoque más orientado al ámbito laboral a mis estudios, por lo que opté por el Grado Superior de Desarrollo de Aplicaciones Web. 
                            Apasionado de los animales, puedo aportar varias ideas y puntos de vista interesantes para el desarrollo de nuestra idea. 
                            Cuento con un certificado C2  de inglés, por lo que no habrá ningún problema a la hora de traducir nuestra aplicación para que pueda disfrutarla un mayor número de personas.
                        </p>
                    </li>
                    <li><i id="namesD">Ignacio Martinez </i>
                        <p>
                        Desde siempre he tenido mucha curiosidad por el campo de la tecnología y la informática. 
                        Este interés me dio la motivación suficiente para estudiar un grado superior en Desarrollo de Aplicaciones Web. 
                        Soy especialmente bueno en el ámbito del “troubleshooting” y con un gran “sens” de equipo. 
                        Amante de las mascotas desde muy niño, estoy entusiasmado por formar parte de un proyecto así, y poder ayudar a muchos animales a nivel internacional. 
                        Gracias a mi certificado de inglés C1 de Cambridge English, no tendremos muchos problemas a la hora de expandir nuestro negocio. 
                        </p>
                    </li>
                    <li><i id="namesD">Daniel Villas </i>
                        <p>
                        Soy disciplinado y comprometido con el equipo. Me gusta que haya buen ambiente en el trabajo. 
                        Soy creativo y me gustan las nuevas experiencias. Siempre me ha gustado la informática y hace tiempo decidí que en mi futuro me dedicaría a ella. 
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
                Hoy en día, debido a la pandemia, se ha perdido mucho el contacto entre dueños de mascotas. Os presentamos nuestra idea, que revolucionará el mundo de los animales de compañía. BeloveDogs. El proyecto de final de grado es un portal web de adopción de animales que incluye una tienda online de productos para animales, eventos y una página para contactar con otros usuarios. Además, se ha desarrollado una aplicación móvil complementaria utilizando Android Studio.
                El portal web desarrollado en Angular proporciona una interfaz intuitiva y fácil de usar para los usuarios interesados en adoptar animales. La página principal muestra una lista de animales disponibles para su adopción, donde se muestran imágenes, descripciones y detalles relevantes de cada animal. Los usuarios pueden buscar animales específicos mediante filtros, como especie, raza, edad, etc. También pueden ver perfiles detallados de los animales, que incluyen información adicional como historial médico y requisitos de adopción.
                Nuestro proyecto también cuenta con una tienda online de productos para animales, donde los usuarios pueden comprar alimentos, juguetes, camas y otros productos relacionados con mascotas. Se implementa un carrito de compras y un proceso de pago seguro para que los usuarios puedan realizar sus compras de manera conveniente.
                Además, incluye una sección de eventos, donde se muestran actividades relacionadas con el cuidado de animales, charlas educativas y jornadas de adopción. Los usuarios pueden explorar los eventos próximos, obtener detalles sobre su ubicación, fecha y hora, y registrarse para asistir a ellos.
                El componente de interacción social se encuentra en la página de contacto, donde los usuarios pueden registrarse y conectarse con otros amantes de los animales. Pueden compartir experiencias, consejos y preguntas relacionadas con la adopción y el cuidado de animales. También se ofrece un sistema de mensajería interna para facilitar la comunicación entre los usuarios.
                La aplicación móvil desarrollada con Android Studio complementa el portal web y ofrece una experiencia optimizada para dispositivos móviles. Los usuarios pueden acceder a las mismas funcionalidades que se encuentran en el portal web, como buscar animales para adopción, comprar productos para animales en la tienda online, explorar eventos y conectarse con otros usuarios. Además, la aplicación móvil puede aprovechar las características específicas de los dispositivos móviles, como la geolocalización, para proporcionar información relevante sobre eventos y tiendas de animales cercanas.
                En resumen, el proyecto de final de grado desarrollado en Angular es un portal web de adopción de animales que también incluye una tienda online de productos para animales, eventos y una página de contacto para interactuar con otros usuarios. La aplicación móvil desarrollada con Android Studio ofrece una experiencia móvil complementaria, brindando acceso a las mismas funcionalidades del portal web y aprovechando las características específicas de los dispositivos móviles. Gracias al dinamismo de nuestra aplicación, no habría ninguna dificultad a la hora de aplicarla al mundo real.

                El bienestar y la protección de los animales son temas de gran importancia en la sociedad actual. Sin embargo, la problemática del abandono y la falta de adopción de animales domésticos persiste, generando graves consecuencias para ellos.
                En este contexto, se plantea el desarrollo de un Portal de Adopción de Animales como proyecto de final de grado, con el objetivo de promover la adopción responsable y brindar un espacio en línea que facilite la búsqueda y conexión entre animales en situación de abandono y posibles adoptantes. 
                Una de las principales justificaciones de este proyecto es la reducción del abandono animal. El abandono de animales domésticos es un problema grave que conlleva a su sufrimiento y a la sobrepoblación en refugios y centros de rescate. El portal de adopción permitirá difundir información sobre animales disponibles para adopción, sensibilizando a la población y fomentando la adopción responsable como alternativa al abandono.
                Además, el desarrollo de este portal contribuirá a mejorar el bienestar animal. Los animales que se encuentran en situación de abandono sufren condiciones precarias, maltrato y falta de cuidados adecuados. Al promover la adopción a través del portal, se les brindará la oportunidad de encontrar un hogar amoroso y recibir los cuidados necesarios para su bienestar.
                Otra justificación importante es la facilitación de la adopción responsable. El proceso de adopción de un animal puede ser complicado y requiere de tiempo y esfuerzo por parte de los interesados. El portal de adopción proporcionará un medio centralizado para que los posibles adoptantes accedan a información detallada sobre los animales disponibles, sus características, necesidades especiales y requisitos de adopción. Esto facilitará la búsqueda y selección de mascotas adecuadas a las preferencias y circunstancias de cada adoptante, promoviendo una adopción más responsable y duradera.
                Asimismo, el portal de adopción colaborará con refugios y organizaciones de rescate. Servirá como una plataforma colaborativa donde estos actores podrán registrar y promocionar a los animales bajo su cuidado. Esta colaboración permitirá una mayor visibilidad y alcance de las adopciones, al tiempo que se establecerá una red de apoyo entre los diferentes actores involucrados en la protección animal.
                Además de facilitar la adopción, el portal desempeñará un papel crucial en la concienciación y educación sobre la responsabilidad que conlleva tener una mascota. Se proporcionará información sobre la tenencia responsable, cuidados básicos, esterilización, vacunación y otros aspectos relevantes para garantizar el bienestar y la salud de los animales adoptados.
                En conclusión, el desarrollo de un Portal de Adopción de Animales como proyecto de final de grado tiene una relevancia significativa en la actualidad, dado el aumento de la problemática del abandono animal. Mediante la promoción de la adopción responsable y el fomento de la conciencia sobre el bienestar animal, el portal busca mejorar la calidad de vida de los animales en situación de abandono y brindar a las personas la oportunidad de encontrar una compañía amorosa y fiel.
            </p>
        </div>

        <div id="imagenes">
            <div class="imagen">
                <img src="images/mascota1.jpg" alt="Mascota 1">
            </div>

            <div class="imagen">
                <img src="images/mascota2.jpg" alt="Mascota 2">
            </div>

            <div class="imagen">
                <img src="images/mascota3.jpg" alt="Mascota 3">
            </div>
    </div>

  </div>
</body>

</html>