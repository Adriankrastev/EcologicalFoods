<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Еколаби ООД</title>
<link href="contactStyle.css" rel="stylesheet" type="text/css">
	
<link rel="icon" sizes="32x32" href="img/favicon-32x32.png">

</head>

<body>
<div id="wrapper">
	<header id="headder">
    <img id="right" src="img/apple-touch-icon.png" width="97" height="99" alt=""/> 
	<h1 id="heading">"Еколаби" ООД</h1>
	</header>
  <nav id="nav">
	<div class="button"><a href="index.html" target="_self"><strong>Начало</strong></a></div>
	  
	  <div class="button"><a href="aboutUs.html" target="_self"><strong>За фирмата</strong></a></div>
	  
	  <div class="button"><a href="catalog.html" target="_self"><strong>Каталог</strong></a></div>
	  
	  <div class="button"><a class="active" href="contact.php" target="_self"><strong>Контакт</strong></a></div>
	  
	  <div class="button"><a href="gallery.html" target="_self"><strong>Галерия</strong></a></div>
	  
	  <div class="button"><a href="promotion.html" target="_self"><strong>Промоция</strong></a></div>
	  
	  <div class="button"><a href="author.html" target="_self"><strong>Автор</strong></a></div>
	  
  </nav>
	
  <main id="main">
	<?php

// дефинираме променливи и задаваме празни стойности
$name = $email = $gender = $comment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $comment = test_input($_POST["comment"]);
  $gender = test_input($_POST["gender"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Вашето мнение е важно за нас!</h2>   
    <div id="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1949.9526908014527!2d24.325143847471665!3d42.20215048574838!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14acafe4d177b767%3A0x40f730e415bdb65b!2z0J_Qk9CY0Jw!5e0!3m2!1sbg!2sbg!4v1792254079824!5m2!1sbg!2sbg" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe></div>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  <label class="label">Име:</label> <input id="name1" name="name">
  <br><br>
  <label class="label">E-mail:</label>
  <input id="email" type="text" name="email">
  <br><br>
  <label class="label">Задайте въпрос:</label><br>
  <textarea class="text" name="comment" rows="5" cols="40"></textarea>
  <br><br>
  <label class="label">Пол:</label> 
  
  <input id="gender" name="gender" type="radio" required="required" value="female">
  <strong>Жена</strong>
  <input id="gender1" type="radio" name="gender" required="required" value="male">
  <strong>Мъж</strong>
  <input class="gender" type="radio" name="gender"  value="other">
  <strong>Друго</strong><br><br>
  <input id="submit" type="submit" name="submit" value="Изпрати">  
</form>

<?php
echo "<h2>Вие въведохте:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>

	</main>
  <footer id="footer">
	  
	<p id="size">Изработил: Адриан Иванов Кръстев 12а &copy; никой няма право да копира този сайт</p>
	  
    <div class="icon"><a href="https://www.tiktok.com/@worldmacins" target="_self"><img src="img/tiktok-icon-free-png.webp" width="50" height="50" alt="ticktock"/></a></div>
	  
  <div class="icon"><a href="https://www.instagram.com/adikr88/" target="_self"><img src="img/Instagram_icon.png" width="50" height="50" alt="insta"/></a></div>
	
<div class="icon"><a href="https://www.facebook.com/profile.php?id=100041481893271&locale=bg_BG" target="_self"><img src="img/Facebook_Logo_(2019).png" width="50" height="50" alt="facebook"/></a></div>
	  <div id="datetime"></div>

    <script>
        // Функция за обновяване на датата и часа
        function updateDateTime() {
            const now = new Date();
            document.getElementById('datetime').innerHTML = now.toLocaleString();
        }

        // Извикване на функцията веднага след зареждане на страницата
        updateDateTime();

        // Обновяване на датата и часа на всеки 1 секунда
        setInterval(updateDateTime, 1000);
    </script>
  </footer>
</div>
</body>
</html>
