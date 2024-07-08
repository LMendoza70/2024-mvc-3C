<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUHH por ser siempre los mejores...</title>

</head>
<body>
    <header class="header">
        <h1>UTHH Por ser siempre los mejores...</h1>
        <nav class="navbar">
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="http://localhost/php-3c?C=alumnoController&M=index">Alumnos</a></li>
                <li><a href="#">Cursos</a></li>
                <li><a href="#">Login</a></li>
            </ul>
        </nav>
    </header>
    <section class="container">
        <?php include_once($vista); ?>
    </section>
    <footer class="footer">
        <h3>pie de pagina</h3>
    </footer>
</body>
</html>