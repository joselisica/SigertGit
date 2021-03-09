<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGERT EM-PLÄNER</title>
</head>
<body>
    <div class="content" style="width: 800px;margin:auto;">
        <img src="<?=base_url('images/background/logo.png')?>">
        <br> 
        <p>
            Vielen Dank für Ihr Interesse an unseren EM-Planern.  <br><br> 
            Wir haben Ihre Anfrage erhalten und werden uns dazu so schnell wie möglich bei Ihnen melden. <br><br>

            <b>Anfrage Nr°:</b> <?=$id?> <br> 	
            <b>Produktauswahl:</b> <?=$selectOne?> <br> 	
            <b>Anzahl:</b> <?=$anzahl?> <br> 		
            <b>Name:</b> <?=$name?> <br> 		
            <b>Firma:</b> <?=$firma?> <br> 		
            <b>Adresse:</b> <?=$strasse?> <br> 		
            <b>Plz:</b> <?=$plz?> <br> 			
            <b>Telefon:</b> <?=$telefon?> <br> 		
            <b>Email:</b> <?=$email?> <br>
            <b>Nachricht:</b> <p><?=$nachricht?></p> <br> <br> <br> 	
            
            <b>Ihr Produkt:</b> <?=$selectOne?> <br> <br>

            <img style="max-width:200px;" src="<?=base_url('images/gallery/EM_' . $selectOne . '_2021.jpg')?>">

            <br> <br>

            <p>Sollten Sie vorab noch Fragen haben, sind wir gern telefonisch unter <b>0531 80929-25</b> für Sie da.</p>


            Liebe Grüße aus Ihrem<br> 
            Druck- und Medienhaus<br> 
            Sigert GmbH<br> 
        </p>
    </div>
</body>
</html>