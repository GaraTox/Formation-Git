<?php
$day = date("j F Y");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="VCIMenu.css"/>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<title></title>
</head>
<body>
 <header>
    <div class="row">
            <div class="col-2">
                <img src="DesignVideoClub/VCLogo.gif" alt="logo">
            </div>
            <div class="titre col-8 text-center">
                <h1>Video-Club</h1>
                <p>... et si on se faisait une toile, a la maison ?</p>
            </div>
            <div class="col-2" >
                <ul >
                    <li><?= $day ?></li>
                    <li>Admin</li>
                </ul>
            </div>
    </div>
    
 </header>
 <main>
    <div class="container">
        <DIV class="row">
          <div class="col-4">
            <?php include 'VCIListeMenu.php'; ?>
          </div>
        </DIV>
        
    </div>
 </main>
 <footer>

 </footer>
</body>
</html>
