<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('css')
    <title>{{ $title ?? 'つぶやきアプリ' }}</title>
</head>
<body class="bg-gray-50">
    {{ $slot }}
</body>
</html>