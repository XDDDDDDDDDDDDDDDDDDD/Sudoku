<!DOCTYPE html>
<html>
<head>
  <style>

    body{
      background-image: url("http://www.commacross.de/www/wp-content/uploads/2015/05/Tafel.jpg");
    }

    header{
      color: white;
    }

    footer{
      color: white;
    }

    input{
      width: auto;
    }

    .button{
      width: 120px;
      margin-left: 65px;
      margin-top: 5px;
      display: block;
    }

    ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    }

    li {
    float: left;
    }

    li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    }

    li a:hover {
    background-color: #111;
    }

    div.difficulty {
    margin: 5px;
    border: 1px solid #ccc;
    margin-left: 40%;
    width: 180px;
    }

    div.difficulty:hover {
    border: 1px solid #777;
    }

    div.difficulty img {
    width: 100%;
    height: auto;
    }

    div.desc {
    padding: 15px;
    text-align: center;
    }

    article {

    }
	
	.disabled {
    pointer-events:none; //This makes it not clickable
    opacity:0.6;         //This grays it out to look disabled
	}





  </style>
<body>

<?PHP
	
	session_start();
	
	$act;
	
	if(isset($_SESSION['eingeloggt']) && $_SESSION['eingeloggt'])
	{
		include('header/headerLogout.html');
		$act='active';
		
		if($_SESSION['verifiziert']==false)
		{
			include('header/headerVeri.html');
		}
		
	}
	else
	{
		include('header/headerLogin.php');
		$act='disabled';
		
	}
	

	
  
?> 
  


  <ul>
    <li><a href="Start.php" class="active" href="#Start">Start</a></li>
    <li><a href="Profil.php"class=<?PHP echo $act; ?> href="#Profil">Profil</a></li>
    <li><a href="Bestenliste"class="active" href="#Bestenliste">Bestenliste</a></li>
    <li><a href="Tutorial.php" class="active" href="#Regeln">Regeln</a></li>
    <li><a href="Impressum.php" class="active" href="#Impressum">Impressum</a></li>
  </ul>

  <article style="float:left; margin-left:30%; margin-top:60px">
    <div class="difficulty">
      <a target="_blank" href="Leicht">
        <img src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcRsOUswpN22OQbjuhfnP-SZb4-B4zam9kVu1Al1T5QDie4ItXTH" alt="Trolltunga Norway" width="400" height="400">
      </a>
      <div class="desc" style="color:white">Leicht</div>
    </div>
  </article>

  <article style="float:right; margin-right:30%; margin-top:60px">
    <div class="difficulty">
      <a target="_blank" href="Mittel">
        <img src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcRsOUswpN22OQbjuhfnP-SZb4-B4zam9kVu1Al1T5QDie4ItXTH" alt="Forest" width="400" height="400">
      </a>
      <div class="desc" style="color:white">Mittel</div>
    </div>
  </article>

  <article style="float:left; display:block; margin-left:30%; margin-top:20px">
    <div class="difficulty">
      <a target="_blank" href="Schwer">
        <img src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcRsOUswpN22OQbjuhfnP-SZb4-B4zam9kVu1Al1T5QDie4ItXTH" alt="Northern Lights" width="400" height="400">
      </a>
      <div class="desc" style="color:white">Schwer</div>
    </div>
  </article>

  <article style="float:right; display:block; margin-right:30%; margin-top:20px">
    <div class="difficulty">
      <a target="_blank" href="Extrem">
        <img src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcRsOUswpN22OQbjuhfnP-SZb4-B4zam9kVu1Al1T5QDie4ItXTH" alt="Mountains" width="400" height="400">
      </a>
      <div class="desc" style="color:white">Extrem</div>
    </div>
  </article>

  <footer style="margin-top:39%">
    Copyright &copy; Getschmann, Kracht, Kuessner </br>
    31789 Hameln Sudoku für Dummies GmbH </br>
    Email: Dummies.Hsw@google.com
  </footer>

</body>
</head>
</html>
