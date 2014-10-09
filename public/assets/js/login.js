$(document).ready(function(){
  $('input.help,textarea.help').formtips({
        tippedClass: 'tipped'
  });
});

/*"+window.location.hostname+"*/
function loginForm(){ 
    
    var url = location.protocol+"//"+window.location.host;
    var path = window.location.pathname;
    path = path.split('/');
    for(var i=0;i<(path.length-3);i++){
        url +=path[i]+'/';
    }
//alert(url)
    
  //$('#login-button').html("<img src='http://"+window.location.hostname+"/assets/img/loading.gif' alt=''/>Login");
  $('#login-button').html("<img src='"+url+"assets/img/loading.gif' alt=''/>Login");
  $('#username-label').html('Checking Username..');
  $('#password-label').html('Checking Password..');
  $('#username-check .loadingbar').fadeIn().animate({'width':'260px'},1000,function(){
    $(this).children('span').fadeIn();
  });
  $('#password-check .loadingbar').delay(500).fadeIn().animate({'width':'260px'},1000,function(){
    $(this).children('span').fadeIn(function(){
      $('#loginform').submit();
    });
  });
}

function baseURL(){
    var url = location.protocol+"//"+window.location.host;
    var path = window.location.pathname;
    path = path.split('/');
    for(var i=0;i<(path.length-1);i++){
        url +=path[i]+'/';
    }
    return url;
}