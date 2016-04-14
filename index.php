<!DOCTYPE html>

<html>
<head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href='https://fonts.googleapis.com/css?family=Noto+Sans' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
      <link type="text/css" rel="stylesheet" href="stylesheet.css" />
      <title>
        Card Game
     </title>
</head>
<body>
	<div class="container">
	 <div class="jumbotron text-center">
	  <h1>Card Game</h1>
	  <h2>Try your luck in cards against the mighty computer!</h2>
	 </div>
	 <form class="form-horizontal" role="form">
			 <div class="form-group">
			  <div class="col-sm-4 col-sm-offset-2">
			  <label for="cardCount" class="control-label">How many cards do you want to deal?</label>
			  </div>
			  <div class="col-sm-2">
			   <select class="form-control" id="cardCount" disabled>
			    <?php
			     for( $i=1;$i<5;$i++ ) {
			       echo '<option>'.$i.'</option>';
			     }
			    ?>
			   </select>
			   <code>Defunct for now.</code>
			  </div>
			 </div>
			 <div class="form-group">
			  <div class="col-sm-1 col-sm-offset-2">
			   <input type="button" class="form-control btn btn-success" value="Start" onClick="start();">
			  </div>
			 </div>
	 </form>
  <div id="userCards">
   <h2>Your card</h2>
  </div>
  <div id="computerCards">
   <h2>Computer's card</h2>
  </div>
  <div id="result">
   
  </div>
	</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript" src="script.js"></script>
<script type="text/javascript" src="mvc-model.js"></script>
<script type="text/javascript">
//Test output
</script>
</body>
</html>