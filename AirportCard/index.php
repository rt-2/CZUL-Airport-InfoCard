<?php



    include_once(dirname(__FILE__).'/includes/definitions.inc.php');
    include_once(dirname(__FILE__).'/resources/airports.lib.inc.php');
    
    $icaoValid = true;

    $uncache_str = time();
    
	$icao = (isset($_GET['icao'])) ? strtoupper($_GET['icao']) : '';

    if (strlen($icao) !== 4) {
        $icaoValid = false;
        $name = "Error - Invalid";
    }


    if ($icaoValid)
    {
        $name = GetAirportName($icao);
    }



?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="UTF-8" />
    <title><?=$name?> | AirportCard</title>

	<link rel="stylesheet" type="text/css" href="assets/css/base.css?<?=$uncache_str?>">

</head>
<body>
    <div>
        <h1><?=$name?></h1>
    </div>

</body>
</html>
