  <?php
include 'india.php';
?> 	
<!doctype html>
<html lang="en">
  <head>
    <title>Covid-19 Tracker</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
  
    <link href="https://fonts.googleapis.com/css2?family=Arvo:wght@700&family=Dosis:wght@400;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;900&display=swap" rel="stylesheet">
  </head>
  <body>
<div class="container-fluid bg-light p-5 text-center my-3">
 <h1>Total Cases in INDIA</h1>
<a href="index.php">Global Tracker</a>
</div>


<div class="container my-5">
    <div class="row text-center">
        <div class="col-6 text-warning py-2">
            <h5>Confirmed</h5>
            <?php echo $livedata['statewise'][0]['confirmed'];?>
        </div>
	<div class="col-6 text-info py-2">
            <h5>Active</h5>
            <?php echo $livedata['statewise'][0]['active'];?>
        </div>	
        <div class="col-6 text-success py-2">
            <h5>Recovered</h5>
            <?php echo $livedata['statewise'][0]['recovered'];?>
        </div>
        <div class="col-6 text-danger py-2">
            <h5>Deceased</h5>
            <?php echo $livedata['statewise'][0]['deaths'];?>
        </div>
    </div>
</div>
 
	<div class="container-fluid">		     
      <div class="table-responsive">
          <table class="table">
           <thead class="thead-dark">
            <tr>
              <th scope="col">Last updated time</th>
              <th scope="col">State</th>
              <th scope="col">Confirmed</th>
              <th  scope="col">Active</th>
              <th scope="col">Recovered</th>
              <th scope="col">Deaths</th>
	</tr>
	</thead>
<?php
	$i=1;
       while($i<$numstates){
?>
    <tr>
        <td> <?php echo $livedata['statewise'][$i]['lastupdatedtime'] ?></td>
        <td> <?php echo $livedata['statewise'][$i]['state'] ?></td>
        <td > <?php echo $livedata['statewise'][$i]['confirmed'] ?></td>
        <td > <?php echo $livedata['statewise'][$i]['active']  ?></td>
        <td > <?php echo $livedata['statewise'][$i]['recovered'] ?></td>
        <td> <?php echo $livedata['statewise'][$i]['deaths'] ?></td>
    </tr>

    <?php
        $i++;
        }

    ?>

          </table>
      <footer class="footer mt-auto py-3 bg-light">
  <div class="container text-center">
    <span class="text-muted">designed and developed by: <a href="https://manishraypurkar.github.io/portfolio%20project/index.html">MANISH ANIL RAYPURKAR</a></span>
<p class="text-muted">Data Sources:
<a href="https://api.covid19india.org/data.json">https://api.covid19india.org</a>
<a href="https://pomber.github.io/covid19/timeseries.json">https://pomber.github.io/covid19/timeseries.json</a>
</p>
  </div>
</footer>
  </body>
</html>