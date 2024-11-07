<!DOCTYPE html> 
<html lang="es"> 
    <head> 
        <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Send Email</title> 
    </head> 
<body> 
    <div class="send_email">
        <form action="seding.php" method="$_POST"> 
            <label for="to_elle">Para:</label> 
            <input type="email" id="to_elle" name="to_elle" required> 
            <br> 
            <label for="affair">Asunto:</label> 
            <input type="text" id="affair" name="affair" required> 
            <br> 
            <label for="message">Mensaje:</label> 
            <textarea id="message" name="message" rows="4" required> 
               <!--El "textarea" se suele usar para textos largos y este tipo 
               de caja es mejor para el envio-->
            </textarea> 
            <br> 
            <input type="submit" value="Enviar"> 
        </form> 
    </div>
    
</body> 
</html>