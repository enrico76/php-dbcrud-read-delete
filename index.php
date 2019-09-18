<!DOCTYPE html>
<html lang="" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- FONT: LATO -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <!-- FONT: FONTAWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">

    <!-- JS: JQUERY -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- JS: MOMENT -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment-with-locales.min.js"></script>

    <!-- JS: HANDLEBARS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.0/handlebars.min.js" charset="utf-8"></script>
    <!-- TEMPLATE: MESSAGE MENU -->
    <script id="item-template" type="text/x-handlebars-template">

    </script>

    <!-- CSS: MY STYLE -->
    <link rel="stylesheet" href="style.css">
    <!-- JS: MY SCRIPT -->
    <script src="script.js" charset="utf-8"></script>
    <!-- IMG: ICON -->
    <link rel="shortcut icon" href="img/me_icon.gif">
    <title>php-dbcrud-read-delete</title>
  </head>
  <body>
    <div class="container">
      <h2>REJECTED</h2>
      <div class="pagamenti" id="rejected">
        <ul></ul>

      </div>

    </div>
    <div class="container">
      <h2>PENDING</h2>
      <div class="pagamenti" id="pending">
        <ul></ul>

      </div>

    </div>
    <div class="container">
      <h2>ACCEPTED</h2>
      <div class="pagamenti" id="accepted">
        <ul></ul>

      </div>

    </div>
    <li class="item_pagamento" data-id={{id}}>
      id prenotazione: {{prenotazione_id}}
      id pagante: {{pagante_id}}
      somma: {{price}}

      <button class="bt-del" type="button" name="button"></button>

    </li>
  </body>
</html>
