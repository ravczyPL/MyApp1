<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona Główna</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="menu">
        <div class="menu-tab">Menu</div> <!-- Dodano zakładkę -->
        <ul>
            <li><a href="#">O mnie</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Kontakt</a></li>
        </ul>
    </div>

    <script>
        const menu = document.querySelector('.menu');

        document.addEventListener('mousemove', (e) => {
            if (e.clientX >= window.innerWidth - 10) { // Sprawdza, czy myszka jest blisko prawej krawędzi
                menu.classList.add('active');
            }
        });

        menu.addEventListener('mouseleave', () => {
            menu.classList.remove('active');
        });
    </script>
</body>
</html>