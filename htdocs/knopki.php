<html>
<head>
<style type="text/css">
   .knopka1{ 
   
    width: 16px; 
	height: 24px;
    background: #fff; 
    padding: 5px; 
    padding-right: 20px; 
    border: solid 1px black;  	
   }
    .modalwin { 
                height: 300px;  
                width: 400px;
                border: 3px outset gray; 
                background: wheat;
                top: 20%; /* отступ сверху */
                right: 0;
                left: 0;
                font-size: 14px; 
                margin: 0 auto;
                z-index:2; /* поверх всех */
                display: none;  /* сначала невидим */
                position: fixed; /* фиксированное позиционирование, окно стабильно при прокрутке */
                padding: 15px;
                border: 1px solid #383838;
            }
            #shadow { 
                position: fixed;
                width:100%;
                height:100%;
                z-index:1; /* поверх всех  кроме окна*/
                background:#000;
                opacity: 0.5; /*прозрачность*/
                left:0;
                top:0;
            }
			
  </style>

  <script type="text/javascript">
            function showModalWin() {
 
                var darkLayer = document.createElement('div'); // слой затемнения
                darkLayer.id = 'shadow'; // id чтобы подхватить стиль
                document.body.appendChild(darkLayer); // включаем затемнение
 
                var modalWin = document.getElementById('popupWin'); // находим наше "окно"
                modalWin.style.display = 'block'; // "включаем" его
 
                darkLayer.onclick = function () {  // при клике на слой затемнения все исчезнет
                    darkLayer.parentNode.removeChild(darkLayer); // удаляем затемнение
                    modalWin.style.display = 'none'; // делаем окно невидимым
                    return false;
                };
            }
        </script>
      </head>
  <body >
<div id="mes"></div>
<div style="position:absolute; left:1320px;top:550px;bottom:0px;right:0px;">

  <div class="knopka1">
  
</div> 
</div>

<!<a href="hero.php" target="_top " ><!<img src="img/znajhi/ruksak.png" style="position:absolute; left: 1320px;top:550px;bottom:0px;right:0px;">
<!<a href="pr1.php" target="_top " ><!<img src="img/znajhi/ruksak.png" style="position:absolute; left: 1370px;top:550px;bottom:0px;right:0px;">
</a>

<form>
		<!<img src="img/znajhi/ruksak.png" style="position:absolute; left: 1320px;top:550px;bottom:0px;right:0px;">
            <!<input type="button"  value="Вызвать окно" onclick="showModalWin()">
			<!<input type="image " name="picture" src="img/znajhi/ruksak.png" onclick="showModalWin()">
			<a href="#" onclick="showModalWin();">
			<img src="img/znajhi/ruksak.png" style="position:absolute; left: 1320px;top:550px;bottom:0px;right:0px name="send" border="0"/>
			</a>
        </form>
 <!-- Наше модальное всплывающее окно -->
        <div style="position:absolute; left: 50px;top:150px;bottom:0px;right:0px;" id="popupWin" class="modalwin">
		<div style="position:absolute; left: 2px;top:-65px;bottom:0px;right:0px;">
		<?php
		include "hero.php";
		?>
		
		
			</div>
        </div>
		<form>
		<img src="img/znajhi/vukl.png" style="position:absolute; left: 1577px;top:548px;bottom:0px;right:0px name="send" border="0"/>
		 </form>
		
</body>

</html>