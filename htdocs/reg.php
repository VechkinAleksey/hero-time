<! СКРИПТ: СТРАНИЦА РЕГЕСТРАЦИИ ВВОДИМ ДАННЫЕ И ОТПРАВЛЯЕМ НА СЕРВЕР ДЛЯ ВХОДА В ИГРУ>
<html>
<head>
<META http-equiv=content-type content="text/html; charset=utf8">
<LINK href="main.css" type=text/css rel=stylesheet>
<title> Моя игра </title>
<script>
function feedbackSubmit(){
   var cUserMail = document.regform.email.value;
   if (document.regform.nickname.value=="") {
      alert("Заполните ник персонажа!");
      document.regform.nickname.focus();
      return false;
   }
   if (document.regform.pass.value=="") {
      alert("Поле пароля не должно оставаться пустыми!");
      document.regform.pass.focus();
      return false;
   }

   if ( (cUserMail.indexOf("@") == -1) || (cUserMail.indexOf(".") == -1) ) {
      alert("Неправильно заполнено поле e-mail!");
      document.regform.email.focus();
      return false;
   }  

   if (document.regform.fio.value=="") {
      alert("Пожалуйста укажите ФИО!");
      document.regform.fio.focus();
      return false;
   }             

   if (document.regform.law.checked==false)
   {
      alert("Вам нужно ознакомиться с правилами клуба!");
      return false;
   }
   
   document.regform.submit();
  
}

</script>
</head>

<body>
<body background="img/f57AKB.jpg">
<CENTER>
  <form name=regform action="testreg.php" method=POST onSubmit="feedbackSubmit()">
    <p><br>
&nbsp;</p>
    <TABLE width=515 cellPadding=0 border=0 style="border-style: dashed; border-width: 1px" bgcolor="#FFE5B6">
    <TR>
    <TD width="72">Логин:<font color="#FF0000">*</font></TD>
    <TD width="204">
  <INPUT  name=nickname size="20"></TD>
    <TD width="98">Пароль:<font color="#FF0000">*</font></TD>
    <TD width="193"><INPUT type=password name=pass size="20"></TD>
    </TR>
    <TR>
    <TD width="72"><span lang="en-us">E-Mail</span><font color="#FF0000">*</font></TD>
    <TD width="204"><INPUT name=email size="20"></TD>
    <TD width="98">ФИО<font color="#FF0000">*</font></TD>
    <TD width="193"><INPUT name=fio size="37"></TD>
    </TR>
    <TR>
    <TD width="72">          
    Секретный вопрос<font color="#FF0000">*</font></p>
    </TD>
    <TD style="PADDING-BOTTOM: 10px" width="204">
        <select size="1" name="question">
          <option value="1">Любимое время года</option>
          <option value="2">Любимый напиток</option>
          <option value="3">Кличка домашнего животного</option>
        </select></i></TD>
    <TD style="PADDING-BOTTOM: 10px" width="98">Секретный ответ<font color="#FF0000">*</font></TD>
    <TD style="PADDING-BOTTOM: 10px" width="193">
  <INPUT name=answer size="37"></TD>
    </TR>
    <TR>
    <TD width="72">          
        Ваш пол:<font color="#FF0000">*</font><BR>
  &nbsp;</TD>
    <TD style="PADDING-BOTTOM: 10px" width="307" colspan="2">
  <INPUT TYPE="radio" NAME="gender" value="Мужской" style="cursor:hand" ID=A1 checked><LABEL FOR=A1> Мужской </LABEL>
  <INPUT TYPE="radio" NAME="gender" value="Женский" style="cursor:hand" ID=A2><LABEL FOR=A2> Женский</LABEL></TD>
    <TD style="PADDING-BOTTOM: 10px" width="193">&nbsp;</TD>
    </TR>
    <TR>
    <TD width="72">          
    Город:</TD>
    <TD style="PADDING-BOTTOM: 10px" width="204">
  <INPUT TYPE="text" NAME="city" size=20 maxlength=40></TD>
    </TR>
    <TR>
    <TD width="72">          
    Дата рождения:<font color="#FF0000">*</font></TD>
    <TD style="PADDING-BOTTOM: 10px" width="495" colspan="3">Число:&nbsp; <select size="1" name="day">
          <option value="1">01</option>
          <option value="2">02</option>
          <option value="3">03</option>
          <option value="4">04</option>
          <option value="5">05</option>
          <option value="6">06</option>
          <option value="7">07</option>
          <option value="8">08</option>
          <option value="9">09</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
          <option value="13">13</option>
          <option value="14">14</option>
          <option value="15">15</option>
          <option value="16">16</option>
          <option value="17">17</option>
          <option value="18">18</option>
          <option value="19">19</option>
          <option value="20">20</option>
          <option value="21">21</option>
          <option value="22">22</option>
          <option value="23">23</option>
          <option value="24">24</option>
          <option value="25">25</option>
          <option value="26">26</option>
          <option value="27">27</option>
          <option value="28">28</option>
          <option value="29">29</option>
          <option value="30">30</option>
          <option value="31">31</option>
        </select>&nbsp;&nbsp; Месяц:
  <select size="1" name="month">
          <option value="01">январь</option>
          <option value="02">февраль</option>
          <option value="03">март</option>
          <option value="04">апрель</option>
          <option value="05">май</option>
          <option value="06">июнь</option>
          <option value="07">июль</option>
          <option value="08">август</option>
          <option value="09">сентябрь</option>
          <option value="10">октябрь</option>
          <option value="11">ноябрь</option>
          <option value="12">декабрь</option>
        </select>&nbsp; Год: <select size="1" name="year">
          <option value="1960">1960</option>
          <option value="1961">1961</option>
          <option value="1962">1962</option>
          <option value="1963">1963</option>
          <option value="1964">1964</option>
          <option value="1965">1965</option>
          <option value="1966">1966</option>
          <option value="1967">1967</option>
          <option value="1968">1968</option>
          <option value="1969">1969</option>
          <option value="1970">1970</option>
          <option value="1971">1971</option>
          <option value="1972">1972</option>
          <option value="1973">1973</option>
          <option value="1974">1974</option>
          <option value="1975">1975</option>
          <option value="1976">1976</option>
          <option value="1977">1977</option>
          <option value="1978">1978</option>
          <option value="1979">1979</option>
          <option value="1980">1980</option>
          <option value="1981" selected>1981</option>
          <option value="1982">1982</option>
          <option value="1983">1983</option>
          <option value="1984">1984</option>
          <option value="1985">1985</option>
          <option value="1986">1986</option>
          <option value="1987">1987</option>
          <option value="1988">1988</option>
          <option value="1989">1989</option>
          <option value="1990">1990</option>
          <option value="1991">1991</option>
          <option value="1992">1992</option>
          <option value="1993">1993</option>
          <option value="1994">1994</option>
          <option value="1995">1995</option>
          <option value="1996">1996</option>
          <option value="1997">1997</option>
          <option value="1998">1998</option>
          <option value="1999">1999</option>
          <option value="2000">2000</option>
          
          <option value="2001">2001</option>
          <option value="2002">2002</option>
		  <option value="2003">2003</option>
	      <option value="2004">2004</option>
		  <option value="2005">2005</option>
		  <option value="2006">2006</option>
		  <option value="2007">2007</option>
		  <option value="2008">2008</option>
		   <option value="2009">2009</option>
		   <option value="2010">2010</option>
			 
		
				 
          
        </select></TD>
    </TR>
    
		   
 
    <TR>
    <TD width="567" colspan="4">          
        <br>
        <INPUT TYPE="checkbox" ID=A4 NAME="law" style="cursor:hand">
  <span lang="ru">Я ознакомился с <a href="law.html">правилами</a> игры </span>MMCLUB<br>
&nbsp;</TD>
    </TR>
    <TR>
    <TD width="72">          
    <INPUT class=SubmitButton type=button value=Регистрация name=reg onClick="feedbackSubmit()"></TD>
    <TD style="PADDING-BOTTOM: 10px" width="204">&nbsp;</TD>
    <TD style="PADDING-BOTTOM: 10px" width="98">&nbsp;</TD>
    <TD style="PADDING-BOTTOM: 10px" width="193">&nbsp;</TD>
	<TD style="PADDING-BOTTOM: 10px" width="1%"><A href="index.php">На главную</A>
    </TD>
    </TR>
    </TABLE>
</FORM>

</CENTER>
</body>
</html>