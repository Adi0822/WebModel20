$(function() {
  var result = document.getElementById('result');
  $.get('Data.xml', function(xml) {
    debugger;
    console.log(xml);
    // This part is for displaying the xml that should be converted in this example
    var xmlAsString = xml.documentElement.innerHTML;
    result.textContent = xmlAsString;
  });
  $('#convert').click(function() {
    debugger;
    $.get('Data.xml', function(xml) {
      var json = $.xml2json(xml);
      console.log(json);
      // This part is for displaying the json result  in this example
      var jsonAsString = JSON.stringify(json, null, 2);
      result.innerHTML = jsonAsString;
    });
  });
});