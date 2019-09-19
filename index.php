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
      <div class="box" data-id={{id}}>
        <p>{{price}}</p>
        <h4 class="delete">DELETE ME</h4>
        <h4 class="update">AGGIORNA IL PREZZO</h4>




      </div>
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

      <h2>PENDING <span class="add pending">+</span></h2>
      <div class="wrapper pending">
        </div>
      <h2>REJECTED <span class="add rejected">+</span></h2>
      <div class="wrapper rejected">
      </div>
      <h2>ACCEPTED <span class="add accepted">+</span></h2>
      <div class="wrapper accepted">
      </div>
    </div>
  </body>
</html>
