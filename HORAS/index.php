<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULARIO</title>
</head>
<body>
    <form id="form1" name="form1"  action="registrar.php" method="POST">
        <label form="fecha">FECHA:</label>
        <input name="fecha" type="date" required> 
        <br><br>
        <label form="destino">DESTINO:</label>
        <input name="destino" type="text"> 
        <br><br>
        <label form="entrada">ENTRADA:</label>
        <input name="entrada" type="time"> 
        <br><br>
        <label form="salida">SALIDA:</label>
        <input name="salida" type="time"> 
        <br><br>
        <label form="viaje">VIAJE:</label>
        <select name="viaje"> 
            <option value="NO">NO</option>
            <option value="SI">SI</option>
        </select>
        <br><br>
        <label form="festivo">FESTIVO:</label>
        <input name="festivo" type="radio" value="NO"> NO
        <input name="festivo" type="radio" value="SI"> SI
        <br><br>
        <label form="obra">OBRA:</label>
        <input name="obra" type="text"> 
        <br><br>
        <button type="submit">ENVIAR</button>
    </form>

    
</body>
</html>
