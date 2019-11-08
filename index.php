<!DOCTYPE html>
 <html>
 <head>
    <title>Carregando Notificações no site</title>
        <script src="jquery.min.js"></script>     
        <script type="text/javascript">
            
        function atualizarNotificacoes() {
            var url="get.php?";
            jQuery("#notificacoes").load(url);
        }
        setInterval("atualizarNotificacoes()", 500);
        </script>   
 </head>
 <body>

    <p>Notificações:<p> <div id="notificacoes"></div> 
 </body>
 </html>