<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('css/project-all.css') }}">
    @stack('styles')

    <title>Task Management System </title>
</head>

<body>
    <nav>
        <button id="burger">
            <div class="stick"></div>
            <div class="stick"></div>
            <div class="stick"></div>
        </button>

        <a href="{{ route('users.home') }}">
            Home
        </a>

        <a href="{{ route('auth.logout') }}">
            logout
        </a>
    </nav>

    <aside>
        <div id="logo">
            Task Management System
        </div>

        <div class="aside-group search">
            <label for="">Search</label>
            <input type="text">
            <hr>
        </div>

        <div class="aside-group">
            <label>Group</label>
            <ul>
                <li>
                    <button id="criar-projeto">
                        <svg width="18" height="18" fill="currentColor" class="bi bi-person-fill"
                            viewBox="0 0 16 16">
                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                        </svg>
                        Add person
                    </button>
                </li>
                <li>
                    <button>
                        <svg width="16" height="16" fill="currentColor" class="bi bi-people-fill"
                            viewBox="0 0 16 16">
                            <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                            <path fill-rule="evenodd"
                                d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z" />
                            <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />
                        </svg>
                        participants
                    </button>
                </li>
            </ul>
            <hr>
        </div>

        <div class="aside-group">
            <label>Filters</label>
            <ul>
                <li>
                    <button id="criar-projeto">
                        <svg width="16" height="16" fill="currentColor" class="bi bi-card-checklist"
                            viewBox="0 0 16 16">
                            <path
                                d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z" />
                            <path
                                d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0zM7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z" />
                        </svg>
                        My Task
                    </button>
                </li>
            </ul>
            <hr>
        </div>
    </aside>

    <main>
        @yield('conteudo')
    </main>

    <footer>
        <p>Task management systems <small>©</small> -
            {{ now()->year }}</p>
    </footer>

    <div id="filter"></div>

    @stack('scripts')
</body>

</html>
