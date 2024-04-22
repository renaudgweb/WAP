<?php
    header("Content-type: text/vnd.wap.wml");
    echo "<?xml version="1.0" encoding="UTF-8"?";

	date_default_timezone_set("UTC");
	$today = date("D M j G:i:s T Y");

    $copyright = "<p align='center' mode='wrap'>&copy; ". date("Y"); ." Renaud G.</p>"

	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, 'https://api.coingecko.com/api/v3/simple/price?ids=bitcoin%2Cethereum&vs_currencies=usd%2Ceur');
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	$response = curl_exec($curl);
	curl_close($curl);
	$data = json_decode($response, true);
?>

<!DOCTYPE wml PUBLIC "-//WAPFORUM//DTD WML 1.1//EN" "http://www.wapforum.org/DTD/wml_1.1.xml">

<wml>
    <card id="crypto" title="₿ & ⟠ prices">
        <p mode="wrap"><?php echo $today; ?><br/></p>

        <br/><p align="center">
            <img src="images/btc.wbmp" width="96" height="37" alt="btc-logo"/><br/>
        </p>
        <p mode="wrap"><i>BTC</i> : <b><?php echo $data['bitcoin']['usd']; ?></b> $<br/></p>
        <p mode="wrap"><i>BTC</i> : <b><?php echo $data['bitcoin']['eur']; ?></b> €<br/></p>

        <p align="center">
            <img src="images/eth.wbmp" width="96" height="32" alt="eth-logo"/><br/>
        </p>
        <p mode="wrap"><i>ETH</i> : <b><?php echo $data['ethereum']['usd']; ?></b> $<br/></p>
        <p mode="wrap"><i>ETH</i> : <b><?php echo $data['ethereum']['eur']; ?></b> €<br/></p>

        <br/><a href='index.wml'>Home</a><br/>
        <do name='main' type='prev' label="Home">
            <go href="index.wml"/>
        </do>
        <a href='iss.wml'>People in space</a><br/>
        <do name='iss' type='iss' label="People in space">
            <go href="iss.wml"/>
        </do>

        <br/><?php echo $copyright; ?>
    </card>
</wml>
