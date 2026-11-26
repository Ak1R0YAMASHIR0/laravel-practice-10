<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Мой первый проект на Laravel</title>
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }

        body {
            min-height: 100vh;
            padding: 72px 18px 32px;
            font-family: "Segoe UI", system-ui, -apple-system, sans-serif;
            color: #1f2937;
            background: #f8fafc;
        }

        .wrap { max-width: 760px; margin: 0 auto; }

        .badge {
            display: inline-block;
            margin-bottom: 14px;
            padding: 5px 12px;
            border-radius: 999px;
            background: #e8eefc;
            color: #1d4ed8;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .02em;
        }

        h1 {
            margin-bottom: 12px;
            font-size: 32px;
            line-height: 1.2;
            color: #111827;
        }

        .lead {
            margin-bottom: 26px;
            font-size: 16px;
            line-height: 1.6;
            color: #4b5563;
        }

        .grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 12px;
            margin-bottom: 26px;
        }

        .card {
            padding: 16px 18px;
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            background: #fff;
            box-shadow: 0 1px 2px rgba(16, 24, 40, .05);
        }

        .label {
            display: block;
            margin-bottom: 6px;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: .08em;
            text-transform: uppercase;
            color: #6b7280;
        }

        code {
            display: inline-block;
            padding: 3px 7px;
            border-radius: 6px;
            background: #eff6ff;
            color: #1d4ed8;
            font-family: Consolas, monospace;
            font-size: 13.5px;
            overflow-wrap: anywhere;
        }

        .hint {
            display: block;
            margin-top: 7px;
            font-size: 13.5px;
            line-height: 1.45;
            color: #6b7280;
        }

        footer {
            display: flex;
            flex-wrap: wrap;
            gap: 10px 16px;
            padding-top: 18px;
            border-top: 1px solid #e5e7eb;
            font-size: 13px;
            color: #6b7280;
        }
    </style>
</head>
<body>
    <div class="wrap">
        <span class="badge">Практическая работа №10</span>

        <h1>Привет! Это мой проект на Laravel.</h1>
        <p class="lead">
            Я создал его через Composer, запустил встроенный сервер и изменил эту
            приветственную страницу в файле welcome.blade.php.
        </p>

        <div class="grid">
            <div class="card">
                <span class="label">Маршруты</span>
                <code>routes/web.php</code>
                <span class="hint">Маршрут GET / возвращает представление welcome.</span>
            </div>
            <div class="card">
                <span class="label">Контроллеры</span>
                <code>app/Http/Controllers/Controller.php</code>
                <span class="hint">Базовый класс, от которого наследуются контроллеры.</span>
            </div>
            <div class="card">
                <span class="label">Представления</span>
                <code>resources/views/welcome.blade.php</code>
                <span class="hint">Blade-шаблон этой страницы с изменённым текстом.</span>
            </div>
        </div>

        <footer>
            <span>Laravel Framework {{ app()->version() }}</span>
            <span>PHP {{ PHP_VERSION }}</span>
        </footer>
    </div>
</body>
</html>
