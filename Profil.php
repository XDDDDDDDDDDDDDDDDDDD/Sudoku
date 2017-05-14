<?PHP session_start(); ?>
<!DOCTYPE html>
<html>
<head>


  <style>
  

    body{
       background-image: url("pictures/Tafel.jpg");
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
	  
    .dropdown-content {
      display: none;
      position: absolute;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
    }

    .dropdown-content a {
      color: white;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
      text-align: left;
    }

    .dropdown-content a:hover {background-color: black}

    .dropdown:hover .dropdown-content {
      display: block;
    }
	  

    td, th {
    padding: 5px;
    }

    dd,dt{
    padding: 5px;
    }
	
	

 
	
  </style>
  

<body>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	
	
  
  <?PHP
  
  
		include_once('header/headerLogout.html');
  
		if($_SESSION['verifiziert']==false)
		{
			include('header/headerVeri.html');
		}
		
		include('navigationbar.html');
  
  ?>

  
  
  
  <h3 style="color:white; font-size: 150%"> <ins> Profil </ins> </h3>
<!-- Zeigt die Persönlichen Daten des Spielers an -->
  <article style="float:left; margin-left: 10px">
    <h3 style="color:green; font-size:120%"> <ins> Persönliche Daten </ins>
    </h3>
    <section style="color: white; width:400px">
      <table style="width:auto; text-align: left; font-size: 110%">
        <tr>
          <th> Name </th>
          <td> <?php echo htmlspecialchars($_SESSION['name']); ?> </td>
        </tr>
        <tr>
          <th> Username </th>
          <td> <?php echo htmlspecialchars($_SESSION['nutzername']); ?> </td>
        </tr>
        <tr>
          <th> Geschlecht </th>
          <td> <?php echo $_SESSION['geschlecht']; ?> </td>
        </tr>
        <tr>
          <th> Mail Adresse </th>
          <td> <?php echo htmlspecialchars($_SESSION['email']); ?> </td>
          <td>  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#emailModal">E-Mail ändern</button> </td>
        </tr>
        <tr>
          <th> Status </th>
          <td> <textarea rows="5" cols="30" disabled="active" style="background-color: rgba(18, 18, 18, 0)"> <?php echo htmlspecialchars($_SESSION['status']); ?> </textarea> </td>
          <td> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#statusModal">Status ändern</button>  </td>
        </tr>
      </table>
    </section>
  </article>
  
 
  
  <!-- Popup  zum Ändern der E-Mail-->
	<div class="modal fade" id="emailModal" tabindex="-1" role="dialog" aria-labelledby="emailModalLabel">
  <div class="modal-dialog" role="document">
  <form method="POST" action="emailSetzen.php">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="emailModalLabel">E-Mail Adresse ändern</h4>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="neueMail" class="control-label" align="margin">neue E-Mail Adresse:</label>
            <input class="form-control" name="neueMail" id="neueMail";></input>
          </div>
        </form>
      </div>	
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Abbrechen</button>
        <button type="submit" class="btn btn-primary" name="aendern" id="aendern" data-submit="modal">E-Mail ändern</button>
      </div>
    </div>
	</form>
  </div>
</div>


<script>

$('#emailModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) //Button der das Modal auslößt
  var modal = $(this)
})


</script>

  
  <!-- Popup  zum Ändern des Status-->
	<div class="modal fade" id="statusModal" tabindex="-1" role="dialog" aria-labelledby="statusModalLabel">
  <div class="modal-dialog" role="document">
  <form method="POST" action="statusSetzen.php">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="statusModalLabel">Status ändern</h4>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="statusText" class="control-label" align="margin">Status:</label>
            <textarea class="form-control" name="statusText" id="statusText" maxlength='255';> <?PHP echo htmlspecialchars($_SESSION['status']); ?> </textarea>
          </div>
        </form>
      </div>	
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Abbrechen</button>
        <button type="submit" class="btn btn-primary" name="aendern" id="aendern" data-submit="modal">Status ändern</button>
      </div>
    </div>
	</form>
  </div>
</div>


  
<script>

$('#statusModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) //Button der das Modal auslößt
  var modal = $(this)
})


</script>
  
  

<!-- Zeigt die Spielerstatistiken an -->
  <article style="float:right; margin-right: 600px">
    <h3 style="color:green; font-size:120%">
       <ins> Spieler Statistik </ins>
    </h3>
<!-- Zeigt Elo und Rang des Spielers an -->
    <section style="color: white; font-size:110% ">
      <p> Du spielst seit <?php echo $_SESSION['datum']; ?>. </p>
      <table style="width:100%; text-align:left">
        <tr>
          <th> ELO: </th>
          <td> <?php echo $_SESSION['Elo']; ?> </td>
        </tr>
        <tr>
          <th> Rang: </th>
          <td> 30 </td>
        </tr>
      </table>
<!-- Zeigt die Anzahl der gewonnenen Spiele in den einzelnen Schwierigkeitsgraden an. -->
      <dl>
        <dt> Gewonnene Spiele: </dt>
        <dd>
          <table style="width:100%; text-align:left">
            <tr>
              <th> leicht </th>
              <td> <?php echo $_SESSION['gewSpieleLeicht']; ?> </td>
            </tr>
            <tr>
              <th> mittel </th>
              <td> <?php echo $_SESSION['gewSpieleMittel']; ?> </td>
            </tr>
            <tr>
              <th> schwer </th>
              <td> <?php echo $_SESSION['gewSpieleSchwer']; ?> </td>
            </tr>
            <tr>
              <th> extrem </th>
              <td> <?php echo $_SESSION['gewSpieleExtrem']; ?> </td>
            </tr>
          </table>
        </dd>
      </dl>

<!-- Zeigt die Durchschnittszeiten des Spielers in den einzelnen Schwierigkeitsgraden an. -->
      <dl>
        <dt> Beste Zeiten: </dt>
        <dd>
          <table style="width:100%; text-align:left">
            <tr>
              <th> leicht </th>
              <td> <?php echo $_SESSION['zeitLeicht']; ?> </td>
            </tr>
            <tr>
              <th> mittel </th>
              <td> <?php echo $_SESSION['zeitMittel']; ?> </td>
            </tr>
            <tr>
              <th> schwer </th>
              <td> <?php echo $_SESSION['zeitSchwer']; ?> </td>
            </tr>
            <tr>
              <th> extrem </th>
              <td> <?php echo $_SESSION['zeitExtrem']; ?> </td>
            </tr>
          </table>
        </dd>
      </dl>


    </section>
  </article>


  <footer style="position: absolute; bottom: 5px">
    Copyright &copy; Getschmann, Kracht, Kuessner </br>
    31789 Hameln Sudoku für Dummies GmbH </br>
    Email: Dummies.Hsw@google.com
  </footer>

</body>
</head>
</html>
