<! СКРИПТ: ГЛАВНАЯ СТРАНИЦА С ЛОГИНОМ И ПАРОЛЁМ>
<! начало тег html (контейнер) документа, в котором заключены все элементы страницы 
включая теги head и body>
<html>
<! тег head предназначен для хранения других элементов, цель которых -
- помочь браузеру в работе с данными. Внутри так же находятся метатеги, которые используются для 
хранения информации предназначенной для браузеров и поисковых систем. Механизмы поисковых/с-м обращаются к
метатегам для получения описаний сайта, ключевых слов и других данных.
Содержание тега head не отображается на прямую на веб-странице, за исключением тега title устанавливающего
заголовок окна веб-страницы. В нутри head можно размешать: теги(элементы) - base, basefont, bgsound,
link, meta, script, style, title(всё это теги)>
<head>
	<! meta определяет метатеги, которые используются для хранения информации предназанченных для 
браузеров и п-вых/сис-м. Пример: для ключевых слов. Разрешается использоватся более чем один метатег,
все они размешаются в теге head. Структура: "имя=значение", которые определяются с помошью ключевыми
словами content, name или http-equiv.
http-equiv предназначен для конвертирования метатега в заголовок HTTP, content-type тип передаваемых данных
которые далее указываются как content="text/html(т.е как текс/html). charset=windows-1251 это кодировка
веб-страницы передаваемая браузеру. В итоги вся эта строчка это просто кодировка 1251, которая пережаётся 
браузеру.>
	<META http-equiv=content-type content="text/html; charset=utf8">
	<!тег link устанавливает связь с внешним доку-м вроде файла со стилями или со шрифтами. В отличии от тега
 а, тег link размещается всегда внутри контейнера head и не создаёт ссылку. href="main.css" путь к связываемому
файлу main.css, type=text/css MIME- тип данных подключаемого файла, rel=stylesheet определяет отношение
между текущим документом и файлом, на который делается ссылка.>
	<LINK href="main.css" type=text/css rel=stylesheet>

	<! тег который добавляет подсказку(слово) в заголовок окна веб-страницы>
	<title> Моя игра </title> <! открытие и закрытие тегов title (в заголовке будет написанно: Моя игра).>
	<script>
	function validate_form(){
		valid = true;
		
		if(document.indexform.login.value == ""){
			alert("Пожалуйста заполните поле 'Логин'.");
			valid = false;
		}
		if(document.indexform.pass.value == ""){
			alert("Пожалуйста заполните поле 'Пароль'.");
			valid = false;
		}
		return valid;
	}
	</script>
</head> <! закрытие тега head>

<!тег(элемент) body предназначен для хранения содержания веб-страниц(контента), отображаемого в окне 
браузера. К такой информации относится текст, изображения, теги, скрипты JS и тд.>
<body> <! открытие тега body>
<body background="img/f57AKB.jpg"> <!background антрибут определяет изображение под фон(100% ширина и высота).>
<CENTER> <!тег center выравнивает содержимое контейнера по центру относительно родительского элемента>
<!тег form устанавливает форму на веб-странице. Форма предназанчена для обмена данными между пользователем
и сервером. Форма не только отправляет данные на сервер, с помощью клиентских скриптов можно получить
доступ к любому элементу формы, изменить его и применить по своему усмотр-ю. >
 <form name="indexform" action="login.php" method="POST" onSubmit="return validate_form ( );">

<!<FORM name="og_in action=login.php method=post>

	<TABLE width= 400px cellSpacing=-400px cellPadding=10px  border=0px  style="border-style: dashed; border-width: 1px" bgcolor="#FFE5B6">
    <TR>
	<td>
	<h4 style="margin-left: 70px; margin-top: 0px">Моя игра-РПГ нового времени</h4>
    </td>
	</TR>
	 </TABLE>
	 
	 <TABLE width= 400px cellSpacing=1px cellPadding=1px  border=0px  style="border-style: dashed; border-width: 1px" bgcolor="#FFE5B6">
    <TR>
	<td>
	<h5 style="margin-left: 90px; margin-top: 0px">Добро пожаловать "Воин пустоши!"</h5>
    </td>
	</TR>
	 </TABLE>

    <TABLE width= 400px cellSpacing=-400px cellPadding=10px  border=0px  style="border-style: dashed; border-width: 1px" bgcolor="#FFE5B6">
	
    <TR>
	<TD><img border="0" src="img/logo.gif" width="150" height="100" style="margin-left: -0px; margin-top: -30px"></TD>
	<td><h4> Эта игра - мир постаппакалипсиса. Погрузись в атмосферу, которая будет настигать тебя снова и снова. Тебе остаётся либо-победить, либо-умерить!</h4>
    </td>
	</TR>
    <TR>
	<TD>Логин:</TD>
    <TD><INPUT  name=login></TD>
	  <TR>
	  <TD>Пароль:</TD>
    <TD><INPUT type=password name=pass>
	 </TD>
    </TR>
	
    <TR>
    <TD>          
    <INPUT class=loginButton type=submit value=Вход name=index onClick="return validate_form ( );"></p>
    </TD>
    <TD style="PADDING-BOTTOM: 10px" width="99%"><A href="reg.php">Зарегистрироваться</A>
    </TD>
    </TR>
	 </TABLE>
	 
	<TABLE width= 400px cellSpacing=-400px cellPadding=10px  border=0px  style="border-style: dashed; border-width: 1px" bgcolor="#FFE5B6">
    <TR>
	<td>
	<h4 style="margin-left: 120px; margin-top: 0px">Создатели игры </h4>
	<CENTER>
	<div class="footer">(C) 2016-2017 LukaGames</div></CENTER>
    </td>
	</TR>
	 </TABLE>
	
</FORM>

</CENTER>
</body>
</html>
