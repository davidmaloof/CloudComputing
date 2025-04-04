<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Formulario con CSS</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .formulario {
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        max-width: 300px;
        width: 100%;
    }

    .formulario h2 {
        margin-top: 0;
        font-size: 24px;
        text-align: center;
    }

    .formulario input[type="text"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
    }

    .formulario button {
        width: 100%;
        padding: 10px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .formulario button:hover {
        background-color: #45a049;
    }
</style>
</head>
<body>
<div class="formulario">


      <h2>Autenticación de usuario - DMF</h2>


    <form method="post" action="usoformulario.php">

        Usuario: <input type="text" name="campo1"><br>
        Password:<input type="text" name="campo2"><br>
        <button type="submit">Ingresar</button>
    </form>
    <br>

</div>
</body>
</html>
