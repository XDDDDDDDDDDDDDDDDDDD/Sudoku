<!DOCTYPE html>
<html>
<head>
  <style>

    body{
      background-image: url("http://www.commacross.de/www/wp-content/uploads/2015/05/Tafel.jpg");
    }

    header{
      color: white;
      width: 1910px;
      border-bottom: 2px solid white;
    }

    footer{
      color: white;
    }

    input{
      width: auto;
    }

    .button{
      width: 120px;
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

    td, th {
    padding: 5px;
    }

    dd,dt{
    padding: 5px;
    }

    input[type=text]{
      width: auto;
    }

    form.register{
	padding: 8px 5px;
	font-size: 24px;
	border: 1px solid rgb(28, 108, 122);
	margin-bottom: 10px;
	text-shadow: 0 1px 1px rgba(0, 0, 0, 0.5);
	border-radius: 3px;
	box-shadow:
		0px 1px 6px 4px rgba(0, 0, 0, 0.07) inset,
		0px 0px 0px 3px rgb(254, 254, 254),
		0px 5px 3px 3px rgb(210, 210, 210);
	transition: all 0.2s linear;
    }

  </style>
<body>

  <header>
    <form style=" float: right; margin-top:15px;">
      <label for="uname">Username</label>
      <input type="text" id="uname" name=uname >
      <label for="pw">Password</label>
      <input type="password" id="pw" name=password>
      <button type="button"> Login </button>
      <article style="display: block">
        <a href="Registrieren.php" style="color: white " > Registrieren? </a>
        <a href="pwvergessen" style="color: white; margin-left:200px" > Passwort vergessen? </a>
      </article>
    </form>
    <div style="width: 1910px; border-bottom: 2px solid white;">
      <h1> Sudoku Online </h1>
    </div>
  </header>

  <ul>
    <li><a href="Start.php" class="active" href="#Start">Start</a></li>
    <li><a href="Profil.php"class="active" href="#Profil">Profil</a></li>
    <li><a href="Bestenliste"class="active" href="#Bestenliste">Bestenliste</a></li>
    <li><a href="Tutorial.php" class="active" href="#Tutorial">Regeln</a></li>
    <li><a href="Impressum.php" class="active" href="#Impressum">Impressum</a></li>
  </ul>

  <h3 style="color:white; font-size: 150%"> <ins> Registrieren </ins> </h3>

  <article style="float:left; margin-left: 10px">
    <section class="container"style="color: white; font-size: 130%">
      <form class="register"action="default" method="post">
        <table style="width:100%; text-align: left; font-size: 110%">
          <tr>
            <th> <label for="uname" >Username</label> </th>
            <td> <input type="text" id="uname" name=uname float:right> </td>
          </tr>
          <tr>
            <th> <label for="name" >Name   </label> </th>
            <td> <input type="text" id="name" name=name> </td>
          </tr>
          <tr>
            <th> Geschlecht </th>
            <td> <input type="radio" name="gender" value="männlich"> männlich
                 <input type="radio" name="gender" value="weiblich"> weiblich</td>
          </tr>
          <tr>
            <th> <label for="name" >Mail-Adresse </label> </th>
            <td> <input type="text" id="mail" name=mail> </td>
          </tr>
          <tr>
            <th> <label for="password" >Passwort </label> </th>
            <td> <input type="text" id="password" name=password> </td>
          </tr>
          <tr>
            <th> <label for="password_confirm" >Passwort wiederholen </label> </th>
            <td> <input type="text" id="password_confirm" name=password_confirm> </td>
          </tr>
        </table>
        <button type="button" style="margin-left: 200px"> Registrieren </button>
     </form>
    </section>
  </article>




  <footer style="margin-top:36%">
    Copyright &copy; Getschmann, Kracht, Kuessner </br>
    31789 Hameln Sudoku für Dummies GmbH </br>
    Email: Dummies.Hsw@google.com
  </footer>

</body>
</head>
</html>
