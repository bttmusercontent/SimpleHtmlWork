<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= Sw::title(Config::get('name'), '&mdash;', Lang::text('aboutTitle'))?></title>
</head>
<body>
<a href="/">Home</a> &nbsp;&nbsp; | &nbsp;&nbsp; <a href="/about"><?= Lang::text('aboutMePage')?></a> &nbsp;&nbsp; | &nbsp;&nbsp; <a href="/contact"><?= Lang::text('contactMePage')?></a>
<h1><?= Lang::text('aboutH1')?></h1>
<p><?= Lang::text('aboutText')?></p>
</body>
</html>
