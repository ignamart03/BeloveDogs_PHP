<!DOCTYPE html>
<html>
<head>
    <title>Barra de Navegación</title>
    <style>
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
        }

        li {
            float: left;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover {
            background-color: #111;
        }
    </style>
</head>
<body>
    <nav class="navbar">
    <a href="/" class="mat-button" alt="Home">
        <div style="margin-left: 1.5rem; margin-right: 1.5rem;">
            <img src="../../favicon.ico">
        </div>
    </a>
    <ul class="nav-list">
        <li class="nav-item">
            <a href="/adopta" class="mat-button">Adopta</a>
        </li>
        <li class="nav-item">
            <a href="/login" class="mat-button">Login</a>
        </li>
        <li class="nav-item">
            <a href="/tienda" class="mat-button">Tienda</a>
        </li>
        <li class="nav-item">
            <a href="/quienes" class="mat-button">Quienes Somos</a>
        </li>
        <li class="nav-item">
            <a href="/ayuda" class="mat-button">Ayuda</a>
        </li>
        <li class="nav-item">
            <a href="/otros" class="mat-button">Conoce Otros Dueños</a>
        </li>
    </ul>
</nav>

</body>
</html>
