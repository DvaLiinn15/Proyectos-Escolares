<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #0f0f1a;
            color: #e0e0e0;
            line-height: 1.4; 
        }

        a {
            text-decoration: none;
            color: #00f0ff;
            transition: 0.3s;
        }

        a:hover {
            color: #00ffe0;
        }

        header {
            background-color: #0a0a12;
            padding: 10px 0; 
            text-align: center;
        }

        header h1 {
            font-size: 1.8rem; 
            color: #00f0ff;
        }

        nav ul {
            list-style: none;
            display: flex;
            justify-content: center;
            gap: 15px; 
            margin-top: 5px;
        }

        nav ul li a {
            font-weight: bold;
            font-size: 1rem;
        }

        .hero {
            background: url('https://source.unsplash.com/1600x600/?technology') no-repeat center center/cover;
            height: 25vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: #00f0ff;
        }

        .hero h2 {
            font-size: 1.8rem;
        }

        main {
            padding: 10px 10px; 
            text-align: center;
        }

        main h1 {
            font-size: 1.5rem;
            margin: 10px 0; 
            color: #00f0ff;
        }

        .services {
            padding: 10px 10px; 
            text-align: center;
        }

        .services h2 {
            font-size: 1.6rem;
            color: #00f0ff;
            margin: 10px 0; 
        }

        .service-cards {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 15px; 
        }

        .service-card {
            background-color: #121224;
            border: 1px solid #00f0ff33;
            padding: 15px;
            border-radius: 10px;
            width: 200px; 
            transition: transform 0.4s, box-shadow 0.4s;
        }

        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 0 12px #00f0ffaa;
        }

        .service-card h3 {
            color: #00f0ff;
            margin-bottom: 8px;
            font-size: 1.1rem;
        }

        .service-card p {
            color: #c0c0c0;
            font-size: 0.9rem;
        }

        .gif-container {
            margin: 15px 0; 
            display: flex;
            justify-content: center;
        }

        .gif-container img {
            max-width: 140px; 
            height: auto;
        }

        footer {
            background-color: #0a0a12;
            color: #00f0ff;
            padding: 10px;
            text-align: center;
            font-size: 0.8rem;
        }

        @media(max-width: 768px){
            nav ul {
                flex-direction: column;
                gap: 5px;
            }

            .service-cards {
                flex-direction: column;
                align-items: center;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>Mi Página Web</h1>
        <nav>
            <ul>
                <li><a href="{{ route('home') }}">Inicio</a></li>
                <li><a href="{{ route('nosotros') }}">Nosotros</a></li>
            </ul>
        </nav>
    </header>

    <section class="hero">
        <h2>@yield("encabezado")</h2>
    </section>

    <main>
        <h1>@yield("contenido")</h1>

        <section class="services">
            <h2>Servicios</h2>
            <div class="service-cards">
                <div class="service-card">
                    <h3>Desarrollo Web</h3>
                    <p>Creación de sitios web usando laravel para el desarrollo de aplicaciones web.</p>
                </div>
                <div class="service-card">
                    <h3>Ciberseguridad</h3>
                    <p>Hola,</p>
                </div>
                <div class="service-card">
                    <h3>Asistentes</h3>
                    <p>Implementación de guia para el desarrollo de aplicaciones web.</p>
                </div>
            </div>
        </section>

        <div class="gif-container">
            <img src="https://www.icegif.com/wp-content/uploads/2022/01/icegif-180.gif" alt="Among Us GIF">
        </div>
    </main>

    <footer>
        <p>&copy; 2025 Mi Página Web. Todos los derechos reservados.</p>
    </footer>
</body>
</html>