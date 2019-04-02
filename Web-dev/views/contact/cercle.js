$(function() {
  var jqA = $('#content li a');
  jqA.after('<span></span>');
  jqA.animate({ opacity: 0 }, 1);
  jqA.hover(function() {
    $(this).fadeTo(900, 1);
    $(this).next('span').fadeTo(300, 0.1);
  },
  function() {
    $(this).fadeTo(300, 0);
    $(this).next('span').fadeTo(200, 1);
  });
});
