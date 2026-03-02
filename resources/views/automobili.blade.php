<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Z1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h3>Automobili:</h3>
    <ul class="list-group">
        @foreach($auti as $auto)
            <li class="list-group-item">{{ $auto }}</li>
        @endforeach
    </ul>
</div>
</body>
</html>