function reset() {
  $(".wrapper").html("");
}
function getId(me) {

  var box = me.parent();
  var id = box.data('id');

  return id;
}

function getPagamenti() {
  reset();
  $.ajax({
    url: "pagamenti.php",
    method: "GET",
    success: function(data) {
      console.log(data);

      // $(".pagamenti ul").html("");
      printPagamenti(data);
    },
    error: function(errore) {
      console.log(errore);
    }
  });
}

function printPagamenti(data) {

  var source = $("#item-template").html();
  var template = Handlebars.compile(source);

  for (var i = 0; i < data.length; i++) {
    var d = data[i];
    var container = $(".wrapper." + d.status);
    var context = d;
    console.log(d);
    var html = template(context);
    container.append(html);
  }

}
function deleteme() {
  var id = getId($(this));

  $.ajax({
    url: 'delete-pagamenti.php',
    method: "GET",
    data: {id: id},

    success: function(data) {
    getPagamenti();
  },
  error: function() {}

  });
}
function addPagamento() {

  var me = $(this);
  var price = prompt("dimmi il prezzo");
  var status = 'accepted';
  if (me.hasClass('pending')) {
      status = 'pending';
  } else if (me.hasClass('rejected')) {
      status = 'rejected';
  };
  $.ajax({
    url: "insert-pagamenti.php",
    method: "GET",
    data: {
      status: status,
      price: price
    },
    success: function(data) {
      console.log(data);
      getPagamenti();
    },
    error: function () {}

  });
}
function updatePrice() {
  var id = getId($(this));

  var newPrice = prompt("dammi il nuovo prezzo");

  $.ajax({
    url: 'update-pagamenti.php',
    method: 'GET',
    data: {
      id: id,
      price: newPrice
    },
    success: function(data) {
      getPagamenti();
      console.log("pagamento" + id + "nuovo prezzo" + newPrice + ":" + data);
    },
    error:function () {

    }


  });
}



function init() {
    getPagamenti();
    $(document).on("click", ".delete", deleteme);
    $(document).on("click", ".add", addPagamento);
      $(document).on("click", ".update", updatePrice);

}

$(document).ready(init);
