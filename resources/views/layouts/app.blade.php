<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Aplicação</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
    @yield('content')
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
