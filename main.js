function init() {

getData();

}

function getData() {
  $.ajax({
  url: "getPagamenti.php",
  method: "GET",
  success: function(data) {
    console.log(data);
    for (var value of data) {
      $('#target').append('<li>' + value['status'] + ' ' + value['price'] + '</li>');
    }

  },
  error: function(error){
    console.log("error!!");
  }
});

}

$(document).ready(init);
