<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= Sw::title(APP_NAME, '&mdash;', Lang::text('LangTitle'))?></title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,700" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="<?= Asset::file('css/style.css') ?>" />
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
</head>
<body>
<div id="notfound">
    <div class="notfound">
        <div class="notfound-404">
            <h1>4<span></span>4</h1>
        </div>
        <h2><?= Lang::text('LangH1') ?></h2>
        <p><?= Lang::text('LangText') ?></p>
        <a href="<?= APP_URL ?>"><?= Lang::text('LangButton') ?></a>
    </div>
</div>
</body>
</html>
