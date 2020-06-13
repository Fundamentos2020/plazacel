<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PLAZACEL</title>
    <link rel="stylesheet" href="../css/main-index.css" type="text/css">
    <link rel="stylesheet" href="../css/header.css" type="text/css">
    <link rel="stylesheet" href="../css/fondo.css" type="text/css">
    <link rel="stylesheet" href="../css/footer.css" type="text/css">
    <link rel="stylesheet" href="../css/nivo-slider.css">
	<link rel="stylesheet" href="../css/mi-slider.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" type="text/javascript"></script>
    <script src="../js/jquery.nivo.slider.js"></script>
    


	<script type="text/javascript"> 
		$(window).on('load', function() {
		    $('#slider').nivoSlider(); 
		}); 
	</script>
</head>
    <body>
    <?php include("header.inc.php")?>
        <main>
        <div class="slider-wrapper theme-mi-slider">
		    <div id="slider" class="nivoSlider">     
                <img src="../assets/1.jpg" alt="" title="#htmlcaption1" />   
                <img src="../assets/1.jpg" alt="" title="#htmlcaption2" />      
                <img src="../assets/1.jpg" alt="" title="#htmlcaption3" />       
            </div>
            <?php include("main.inc.php")?> 
        </main>
        <?php include("footer.inc.php")?>
    </body>
</html>