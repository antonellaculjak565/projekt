<?php
$xml = simplexml_load_file("dogadaji.xml");
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Projekt</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-md">
        <a class="navbar-brand" href="index.html"><img src="slike/logo.png" style="height: 100px;"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.html">Početna</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="diskografija.php">Diskografija</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="dogadaji.php">Događaji</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <main class="container-md">
      <br>
      <section>
		<?php foreach ($xml->dogadaj as $dogadaj): ?>
		    <div class="card">
		        <div class="card-body">
		            <p><?php echo date("d/m/Y", strtotime($dogadaj->datum)); ?> | <?php echo $dogadaj->lokacija; ?></p>
		        </div>
		    </div><br>
		<?php endforeach; ?>
      </section>
    </main><br>
    <footer class="bg-body-tertiary" style="text-align: center; padding: 50px;">
      @Antonella Čuljak 2024.
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>