    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <?php
        
            //Cap .05
            //Podemos enviar (e receber) dados pela SUPER GLOBAL $_GET, Usando a tag
            //<a href=>;
            //ou pelos formularios com o metodo="get"
            //esses dados sao mostrados exibidos na URL da pagina

            echo "
            <h1> LISTA DE TREINAMENTOS:<h1/>
            <h3>Escolha o seu curso<h3/>
            <a href=\"16_get_02.php?curso=php&valor=1500\"> 
            PHP-------1.500,00</a><br/>
            <a href=\"16_get_02.php?curso=mysql&valor=1500\"> 
            MySql-------1.200,00</a><br/>
            <a href=\"16_get_02.php?curso=vba&valor=1500\"> 
            VBA-------1.100,00</a><br/>
            ";



        ?>
    </body>
    </html>