$(document).ready(function(){
    for (var i=2016;i>=1901;i--) {
        var year;
            year = "<option value="+i+">"+i+"</option>";
        $(".selYear").append(year);
    };
    for (var i=1;i<=12;i++) {
        var month;
            month = "<option value="+i+">"+i+"</option>";
        $(".selMonth").append(month);
    };
    for (var i=1;i<=31;i++) {
        var day;
            day = "<option value="+i+">"+i+"</option>";
        $(".selDay").append(day);
    };
    $('select').selectric();
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

 function fn_smsclick(at)
  {
    if(at == "Y"){
      // agreement_y 찾아서 checked="checked" 부여한다.
      var agreeY = document.getElementById("agreement_y");
      agreeY.setAttribute("checked", "checked");

      // agree_fake_y 찾아서 class 명을 rdo_on 으로 부여한다.
      var fakeY = document.getElementById("agree_fake_y");
      fakeY.setAttribute("class", "rdo_on");

      // agreement_n 찾아서 checked="checked" 삭제한다.
      var agreeN = document.getElementById("agreement_n");
      agreeN.removeAttribute("checked");

      // agree_fake_n 찾아서 class 명을 rdo_off 부여한다.
      var fakeN = document.getElementById("agree_fake_n");
      fakeN.setAttribute("class", "rdo_off");
    }
    else if(at == "N"){
      // agreement_y 찾아서 checked="checked" 삭제한다
      var agreeY = document.getElementById("agreement_y");
      agreeY.removeAttribute("checked");

      // agree_fake_y 찾아서 class 명을 rdo_off 로 부여한다.
      var fakeY = document.getElementById("agree_fake_y");
      fakeY.setAttribute("class", "rdo_off");

      // agreement_n 찾아서 checked="checked" 부여한다.
      var agreeN = document.getElementById("agreement_n");
      agreeN.setAttribute("checked", "checked");

      // agree_fake_n 찾아서 class 명을 rdo_on 부여한다.
      var fakeN = document.getElementById("agree_fake_n");
      fakeN.setAttribute("class", "rdo_on");
    }
  }

//라디오버튼 DM
 function fn_dmclick(at)
  {
    if(at == "H"){
      // agreement_y 찾아서 checked="checked" 부여한다.
      var dmH = document.getElementById("dm_house");
      dmH.setAttribute("checked", "checked");

      // agree_fake_y 찾아서 class 명을 rdo_on 으로 부여한다.
      var fakeH = document.getElementById("dm_fake_house");
      fakeH.setAttribute("class", "rdo_on");

      // agreement_n 찾아서 checked="checked" 삭제한다.
      var dmO = document.getElementById("dm_office");
      dmO.removeAttribute("checked");

      // agree_fake_n 찾아서 class 명을 rdo_off 부여한다.
      var fakeN = document.getElementById("dm_fake_office");
      fakeN.setAttribute("class", "rdo_off");
    }
    else if(at == "O"){
      // agreement_y 찾아서 checked="checked" 삭제한다
      var dmH = document.getElementById("dm_house");
      dmH.removeAttribute("checked");

      // agree_fake_y 찾아서 class 명을 rdo_off 로 부여한다.
      var fakeH = document.getElementById("dm_fake_house");
      fakeH.setAttribute("class", "rdo_off");

      // agreement_n 찾아서 checked="checked" 부여한다.
      var dmO = document.getElementById("dm_office");
      dmO.setAttribute("checked", "checked");

      // agree_fake_n 찾아서 class 명을 rdo_on 부여한다.
      var fakeO = document.getElementById("dm_fake_office");
      fakeO.setAttribute("class", "rdo_on");
    }
  }

//라디오버튼 Marry
 function fn_marryclick(marry)
  {
    if(marry == "Y"){
      // agreement_y 찾아서 checked="checked" 부여한다.
      var marryY = document.getElementById("marry_y");
      marryY.setAttribute("checked", "checked");

      // agree_fake_y 찾아서 class 명을 rdo_on 으로 부여한다.
      var fakeY = document.getElementById("marry_fake_y");
      fakeY.setAttribute("class", "rdo_on");

      // agreement_n 찾아서 checked="checked" 삭제한다.
      var marryN = document.getElementById("marry_n");
      marryN.removeAttribute("checked");

      // agree_fake_n 찾아서 class 명을 rdo_off 부여한다.
      var fakeN = document.getElementById("marry_fake_n");
      fakeN.setAttribute("class", "rdo_off");
      
      var line = document.getElementById("lineMarry");
      line.setAttribute("class", "showLine");
    }
    else if(marry == "N"){
      // agreement_y 찾아서 checked="checked" 삭제한다
      var marryY = document.getElementById("marry_y");
      marryY.removeAttribute("checked");

      // agree_fake_y 찾아서 class 명을 rdo_off 로 부여한다.
      var fakeY = document.getElementById("marry_fake_y");
      fakeY.setAttribute("class", "rdo_off");

      // agreement_n 찾아서 checked="checked" 부여한다.
      var marryN = document.getElementById("marry_n");
      marryN.setAttribute("checked", "checked");

      // agree_fake_n 찾아서 class 명을 rdo_on 부여한다.
      var fakeN = document.getElementById("marry_fake_n");
      fakeN.setAttribute("class", "rdo_on");
      
      var line = document.getElementById("lineMarry");
      line.setAttribute("class", "hideLine");
    }
  }