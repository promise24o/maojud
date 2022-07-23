<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php if($page['theme'] == 1): ?>
        <link rel="stylesheet" href="<?= base_url() ?>assets/frontend/css/generic.css" />
    <?php elseif($page['theme'] == 2): ?>
        <link rel="stylesheet" href="<?= base_url() ?>assets/frontend/css/light.css" />
    <?php elseif($page['theme'] ==3): ?>
        <link rel="stylesheet" href="<?= base_url() ?>assets/frontend/css/dark.css" />
    <?php elseif($page['theme'] ==4): ?>
        <link rel="stylesheet" href="<?= base_url() ?>assets/frontend/css/glow.css" />
    <?php else: ?>
        <link rel="stylesheet" href="<?= base_url() ?>assets/frontend/css/neutral.css" />
    <?php endif; ?>

    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>assets/images/favicon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Maoju Online Store <?= $page_title ?></title>
</head>

<body>
    <header>
        <img width="100" class="heading" src="<?= base_url() ?>assets/images/favicon.png" alt="">
        <!-- <h1 class="heading">MAOJU <span>Online Store</span></h1> -->
        <nav></nav>
    </header>