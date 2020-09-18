<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="imagetoolbar" content="no" />
    <meta name="msthemecompatible" content="no" />
    <meta name="cleartype" content="on" />
    <meta name="HandheldFriendly" content="True" />

    <meta name="format-detection" content="telephone=no" />
    <meta name="format-detection" content="address=no" />

    <meta name="google" value="notranslate" />

    <link href="/assets/styles/css.css?t=<?= $config['css']; ?>" rel="stylesheet" />

    <title><?= $meta['title']; ?></title>

    <?php if ( $meta['description'] ): ?>
        <meta name="description"
              content="<?= $meta['description']; ?>"/>
    <?php endif; ?>

    <?php if ( $meta['keywords'] ): ?>
        <meta name="keywords"
              content="<?= $meta['keywords']; ?>"/>
    <?php endif; ?>

    <script src="/assets/scripts/jquery-3.3.1.min.js"></script>
    <script src="/assets/scripts/contacts.js"></script>
</head>
<body id="body">
    <div id="page-wrapper">
        <div id="page">
<?php require( __DIR__ . "/header.php" ); ?>