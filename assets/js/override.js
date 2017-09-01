$(function(){

  //moment clock
  setInterval(function(){
    $('#clock').html(moment().format('D MMM YYYY H:mm:ss'));
  }, 1000);

});
