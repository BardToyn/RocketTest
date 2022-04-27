<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/styles/normalize.css">
    <link rel="stylesheet" href="src/styles/style.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"
/>
    <title>Тестовое Rocket</title>
</head>
<body>
    <?php include("src/modules/header.php"); ?>
    <?php include("src/modules/hero.php"); ?>
    <?php include("src/modules/services.php"); ?>
    <?php include("src/modules/ranking.php"); ?>
    <?php include("src/modules/footer.php"); ?>

    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script type="module">
        import Swiper from 'https://unpkg.com/swiper@8/swiper-bundle.esm.browser.min.js'
        const swiper = new Swiper(...)
    </script>
    <script src="src/script/swiper.js"></script>
</body>
</html>