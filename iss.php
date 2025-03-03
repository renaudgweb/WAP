<?php
    header("Content-type: text/vnd.wap.wml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>";

	date_default_timezone_set("UTC");
	$today = date("D M j Y");

    $copyright = "<p align='center' mode='wrap'>&copy; ". date("Y") ." Renaud G.</p>";

	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, 'http://api.open-notify.org/astros.json');
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	$response = curl_exec($curl);
	curl_close($curl);
	$data = json_decode($response, true);
    $astronauts = $data['people'];
    $nb_astronautes = count($astronauts);
?>

<!DOCTYPE wml PUBLIC "-//WAPFORUM//DTD WML 1.1//EN" "http://www.wapforum.org/DTD/wml_1.1.xml">

<wml>
    <card id="iss" title="People in space">
        <p mode="wrap"><?php echo $today; ?><br/></p>

        <br/><p align="center">
            <img src="images/iss.wbmp" width="96" height="30" alt="iss-logo"/><br/>
        </p>
        <?php
            echo "<p mode='wrap'>There are <b>". $nb_astronautes. "</b> astronauts in space.<br/></p>";
            echo "<ul>";
            foreach ($astronauts as $astronaut) {
                echo "<li>". $astronaut['name'] . " (<i>". $astronaut['craft'] ."</i>)</li>";
            }
            echo "</ul>";
        ?>

        <br/><a href='index.wml'>Home</a><br/>
        <do name='main' type='prev' label="Home">
            <go href="index.wml"/>
        </do>
        <a href='cryptos.wml'>Cryptos prices</a><br/>
        <do name='crypto' type='crypto' label="Cryptos">
            <go href="cryptos.wml"/>
        </do>

        <br/><?php echo $copyright; ?>
    </card>
</wml>
