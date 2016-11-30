$(document).ready(function(){
  //site menu
  $('.site_menu_lst > li > a').on('mouseenter focus', function(){
    $('.site_sub_menu').css('display','block');
    $('.site_menu_lst').addClass("site_menu_opn");
  });
  $('.site_menu_lst').mouseleave(function(){
    $('.site_sub_menu').css('display','none');
    $('.site_menu_lst').removeClass("site_menu_opn");
  });
  $('.site_menu_lst > li').on('mouseenter', function(){
    $(this).find('a').addClass('selected')
    .next('ul').find('a').addClass('selected');
  });
  $('.site_menu_lst > li').mouseleave(function(){
    $(this).find('a').removeClass('selected')
    .next('ul').find('a').removeClass('selected');
  });

  //subpage lnb
  $('.lnb li a').on('mouseenter focus', function(){
    $('.lnb li a.selected').removeClass('selected');
    $(this).addClass('selected');
  });
  $('.lnb').mouseleave(function(){
    $('.lnb li a.selected').removeClass('selected');
  });
});