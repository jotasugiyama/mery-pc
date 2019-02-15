$(function(){

  $sections = $('.section');

  $sections.on('click',function(){
    $sections.removeClass('addStyle');
    $(this).addClass('addStyle');
  });

})
