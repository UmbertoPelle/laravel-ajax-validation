require('./bootstrap');

window.$ = require('jquery');

function getData() {
  $.ajax({
    url:'/api/employee',
    metod:'GET',
    success:function(emps) {
      console.log('data', emps);
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
