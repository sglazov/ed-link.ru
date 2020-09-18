<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Ed-Link.ru</title>

    <link sizes="57x57"   href="../assets/images/i/apple-icon-57x57.png"   rel="apple-touch-icon" />
    <link sizes="60x60"   href="../assets/images/i/apple-icon-60x60.png"   rel="apple-touch-icon" />
    <link sizes="72x72"   href="../assets/images/i/apple-icon-72x72.png"   rel="apple-touch-icon" />
    <link sizes="76x76"   href="../assets/images/i/apple-icon-76x76.png"   rel="apple-touch-icon" />
    <link sizes="114x114" href="../assets/images/i/apple-icon-114x114.png" rel="apple-touch-icon" />
    <link sizes="120x120" href="../assets/images/i/apple-icon-120x120.png" rel="apple-touch-icon" />
    <link sizes="144x144" href="../assets/images/i/apple-icon-144x144.png" rel="apple-touch-icon" />
    <link sizes="152x152" href="../assets/images/i/apple-icon-152x152.png" rel="apple-touch-icon" />
    <link sizes="180x180" href="../assets/images/i/apple-icon-180x180.png" rel="apple-touch-icon" />
    <link href="../assets/images/i/apple-icon-152x152.png" rel="apple-touch-icon" />

    <link sizes="192x192" href="../assets/images/i/favicon-192x192.png" rel="icon" type="image/png" />
    <link sizes="160x160" href="../assets/images/i/favicon-160x160.png" rel="icon" type="image/png" />
    <link sizes="96x96"   href="../assets/images/i/favicon-96x96.png"   rel="icon" type="image/png" />
    <link sizes="32x32"   href="../assets/images/i/favicon-32x32.png"   rel="icon" type="image/png" />
    <link sizes="16x16"   href="../assets/images/i/favicon-16x16.png"   rel="icon" type="image/png" />

    <link rel="shortcut icon" href="../assets/images/i/favicon.ico" type="image/x-icon" />
    <link rel="icon" href="../assets/images/i/favicon.ico" type="image/x-icon" />

    <meta name="msapplication-square70x70logo" content="../assets/images/i/smalltile.png" />
    <meta name="msapplication-square150x150logo" content="../assets/images/i/mediumtile.png" />
    <meta name="msapplication-wide310x150logo" content="../assets/images/i/widetile.png" />
    <meta name="msapplication-square310x310logo" content="../assets/images/i/largetile.png" />

    <meta name="theme-color" content="#FF9A00" />

    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />

    <meta name="application-name" content="" />
    <meta name="msapplication-tooltip" content="" />
    <meta name="msapplication-TileColor" content="#FF9A00" />
    <meta name="msapplication-starturl" content="" />
    <meta name="msapplication-tap-highlight" content="no" />
    <meta name="msapplication-TileImage" content="../assets/images/i/ms-icon-144x144.png" /

    <link rel="manifest" href="../manifest.json"/>
    <meta name="msapplication-config" content="../browserconfig.xml" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/styles/style.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <style type="text/css">
      body {
        font-weight: 400;
        font-size: 16px;
        padding: 16px 0;
      }
    </style>
  </head>
  <body class="order">

    <div class="container-fluid">

      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/" class="main-link"><i class="fas fa-home"></i> Ed-Link.ru</a></li>
          <li class="breadcrumb-item active" aria-current="page">Сообшения из формы контактов</li>
        </ol>
      </nav>

      <div class="table-responsive">
        <table cellspacing="0" border="0" width="100%" class="table table-bordered table-hover">
          <thead class="thead-dark">
          <tr>
            <th scope="col">Дата</th>
            <th scope="col">Представились</th>
            <th scope="col">Адрес электронной почты</th>
            <th scope="col">Что пишут</th>
          </tr>
          </thead>
          <tbody>
            <?
              $fileorder = './../php/log_orders.txt';
              if ( file_exists($fileorder) ) {
                include($fileorder);
              } else {
                echo '<tr class="is-empty"><td colspan="8"> Сообщений нет :—(</td></tr>';
              }
            ?>
          </tbody>
        </table>
      </div>

    </div>
  </body>
</html>
