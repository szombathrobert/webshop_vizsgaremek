<html>
<head>
    <title>GeeksforGeeks</title>
</head>
<body>
    <h1>My Article</h1>
    <ul>
        @foreach ($sweets as $sweet => $s)
            <li>{{ $s }}</li>
        @endforeach
    </ul>
</body>
</html>
