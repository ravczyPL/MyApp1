<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona Główna</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <script>
        const menuPosition = 'left'; // Zmienna określająca położenie menu ('left' lub 'right')
    </script>
    <div class="menu" id="menu">
        <div class="menu-tab">Menu</div>
        <ul class="menu-list">
            <li class="menu-item">
                <a href="#">O mnie</a>
                <ul class="submenu-list">
                    <li class="submenu-item"><a href="#">Podmenu 1</a></li>
                    <li class="submenu-item"><a href="#">Podmenu 2</a></li>
                    <li class="submenu-item"><a href="#">Podmenu 3</a></li>
                </ul>
            </li>
            <li class="menu-item"><a href="#">Blog</a></li>
            <li class="menu-item"><a href="#">Kontakt</a></li>
        </ul>
    </div>

    <script>
        const menu = document.getElementById('menu');

        // Ustawienie odpowiedniej klasy na podstawie zmiennej menuPosition
        if (menuPosition === 'right') {
            menu.classList.add('right');
        } else if (menuPosition === 'left') {
            menu.classList.add('left');
        }

        document.addEventListener('mousemove', (e) => {
            if (menuPosition === 'right' && e.clientX >= window.innerWidth - 10) {
                menu.classList.add('active');
            } else if (menuPosition === 'left' && e.clientX <= 10) {
                menu.classList.add('active');
            }
        });

        menu.addEventListener('mouseleave', () => {
            menu.classList.remove('active');
        });
    </script>
</body>
</html>