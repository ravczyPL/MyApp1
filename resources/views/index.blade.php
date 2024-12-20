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
        const menuPosition = 'left'; // Zmienna określająca położenie ('left' lub 'right')
    </script>
    <div class="menu" id="menu">
        <div class="menu-tab">Menu</div>
        <ul class="menu-list">
            @foreach($menuItems->where('parent_id', null) as $parentItem)
                <li class="menu-item">
                    <a href="{{ $parentItem->url }}">{{ $parentItem->title }}</a>
                    @if($menuItems->where('parent_id', $parentItem->id)->count())
                        <ul class="submenu-list">
                            @foreach($menuItems->where('parent_id', $parentItem->id) as $childItem)
                                <li class="submenu-item">
                                    <a href="{{ $childItem->url }}">{{ $childItem->title }}</a>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </li>
            @endforeach
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