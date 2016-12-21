 <head>
        <meta charset="UTF-8">
        <title>Простое модальное окно</title>
        <style>
            .modalwin { 
                height: 400px;  
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
    <body style="text-align: center">
        <h1> Веб-страница </h1>
        <form>
		<!<img src="img/znajhi/ruksak.png" style="position:absolute; left: 1320px;top:550px;bottom:0px;right:0px;">
            <!<input type="button"  value="Вызвать окно" onclick="showModalWin()">
			<!<input type="image " name="picture" src="img/znajhi/ruksak.png" onclick="showModalWin()">
			<a href="#" onclick="showModalWin();">
			<img src="img/znajhi/ruksak.png" name="send" border="0"/>
			</a>
        </form>
         
        <!-- Наше модальное всплывающее окно -->
        <div style="text-align: center" id="popupWin" class="modalwin">
		<?php
		include "hero.php";
		?>
		<a href="hero.php" >
			
        </div>
    </body>