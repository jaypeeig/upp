$(function(){

  //moment clock
  setInterval(function(){
    $('#clock').html(moment().format('D MMM YYYY H:mm:ss'));
  }, 1000);

});

var pop_notify = function(options){
  var defaults = {
    icon: 'https://unsplash.it/77/77?image=177',
    title: "System Bot",
    message: ""
  };
  options = $.extend(defaults, options);
  var options2 = {
    type: 'minimalist',
    delay: 5000,
    icon_type: 'image',
    template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-{0}" role="alert">' +
      '<img data-notify="icon" class="img-circle pull-left">' +
      '<span data-notify="title">{1}</span>' +
      '<span data-notify="message">{2}</span>' +
    '</div>'
  };

  $.notify(options, options2);

}
