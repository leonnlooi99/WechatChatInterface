<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Wechat Chat Interface by Leonn</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.0.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link href='./style.css' rel='stylesheet' type='text/css'>
  </head>
  <body>
<style>

</style>
<div class="container-fluid-chat bg-light">
    <div class="container-fluid-nav">
        <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="#">Leonn</a>
        <div class="dropdown">
            <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="material-icons">menu</i>
            </a>
            <div class="dropdown-menu" style="right:0;left:initial;">
            </div>  
        </nav>
    </div>
    
    <div id="chatlog" class="container-fluid-chatlog">
    </div>

    <div class="container-fluid-message bg-light">
        <input onkeydown = "if (event.keyCode == 13) sendMSG()" id="chatMSG" style="height:38px;width:100%;padding-left:5px;padding-right:5px;">
    </div>
</div>


<script>
function sendMSG(){
    // Do your send message stuff.
    $('#chatMSG').val('');
}

function addChatleft(img,name,msg){
    $('#chatlog').prepend('<div class="clearfix"><div class="message-container-left"><div class="float-left"><img class="profile rounded" src="./img/'+img+'"></div><div class="message-left-name">'+name+'</div><div class="card bg-green message-left">'+msg+'</div></div></div>');
}
function addImageleft(img,name,src){
    $('#chatlog').prepend('<div class="clearfix"><div class="message-container-left"><div class="float-left"><img class="profile rounded" src="./img/'+img+'""></div><div class="message-left-name">'+name+'</div><img src="./img/'+src+'" style="width: 150px;float: left;"></div></div>');
}
function addChatright(img,name,msg){
    $('#chatlog').prepend('<div class="clearfix"><div class="message-container-right"><div class="float-right"><img class="profile rounded" src="./img/'+img+'""></div><div class="card bg-green message-right">'+msg+'</div></div></div>');
}
function addImageright(img,name,src){
    $('#chatlog').prepend('<div class="clearfix"><div class="message-container-right"><div class="float-right"><img class="profile rounded" src="./img/'+img+'""></div><img src="./img/'+src+'" width="150px;" style="width: 150px;float: right;"></div></div>');
}

addChatleft('profile.png','Leonn','hello guys!');
addChatleft('profile.png','Leonn','Here the demo for the wechat interface 7.0 by Leonn!');
addImageleft('profile.png','Leonn','profile.png')
addChatright('profile.png','Leonn','You also can send images');

</script>
