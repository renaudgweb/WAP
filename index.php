<?php
    header("Content-type: text/vnd.wap.wml");
    echo "<?xml version="1.0" encoding="UTF-8"?";

    $copyright = "<p align='center' mode='wrap'>&copy; ". date("Y"); ." Renaud G.</p>"
?>

<!DOCTYPE wml PUBLIC "-//WAPFORUM//DTD WML 1.1//EN" "http://www.wapforum.org/DTD/wml_1.1.xml">

<wml>
    <card id="main" title="Renaud G. Portail">
        <p align="center">
            <img src="images/logo.wbmp" width="50" height="50" alt="Logo"/><br/>
        </p>
        <p mode="wrap">Welcome to this sample WML page.<br/></p>

        <a href='cryptos.wml'>Cryptos prices</a><br/>
        <do name='crypto' type='crypto' label="Cryptos">
            <go href="cryptos.wml"/>
        </do>
        <a href='iss.wml'>People in space</a><br/>
        <do name='iss' type='iss' label="People in space">
            <go href="iss.wml"/>
        </do>

        <br/><?php echo $copyright; ?>
    </card>
</wml>
