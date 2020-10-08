require('./bootstrap');

window.$ = require('jquery');

function getData() {
  $.ajax({
    url:'/api/employee',
    metod:'GET',
    success:function(emps) {
      var target = $('#target');

      for (var i = 0; i < emps.length; i++) {
        var emp = emps[i];
        var html = '<li>' + emp['firstname'] +' '+emp['lastname'] +'</li>'
        target.append(html)
      }
    },
    error:function(err) {
      console.log('err',err);
    }
  });
}

function init() {
  getData();
}

$(document).ready(init);
