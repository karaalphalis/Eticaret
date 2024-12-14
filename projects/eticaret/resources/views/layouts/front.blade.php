<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield("title")</title>
    @stack("css")
</head>
<body>
@yield("body")

@stack("js")
</body>
</html>
