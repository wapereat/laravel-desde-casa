<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>FORMULARIO</title>
        
        <!-- este link es para traer los css de boostramp y se debe poner debajo del title
        se descargo de la pagina>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        >-->
        <link rel="stylesheet" href="C:/xampp/htdocs/WilsonPT/public/assets/css/style.css" type="css" >
       <link rel="stylesheet" href="../../public/assets/css/style.css"  type="css">
    </head>
    
    <body>
        <form id="formulario">
            <p><label for="nombre"> Nombre:</label>
                <input type="text" name="NOMBRE" ID="NOMBRE" placeholder="WILSON">
            </p> 
            
            <p>  <label for="Edad"> Edad:</label> 
                 <input type="number" name="Edad" Id="edad">
                
            <p> <label for="pass"> Contraseña:</label>
                <input type="text" name="pass" id="pass"
                       placeholder="qwer123" pattern="[a-z](5)"
             
            </p>
            
            <p> <label for="fono">Teléfono: </label> 
                <input type="tel" name="fono" id="fono" 
                       placeholder="+34935551234"> </p> 
            
             <p> <label for="num">Número de portatiles: </label> 
                 <input type="number" name="num" id="num" min="2" max="20" 
                        step="2" placeholder="2"> </p> 
             
            <p> <label for="col">Color de los zapatos: </label> 
                <input type="color" name="col" id="col" value="#000000"> </p>
                           
             <p> <label for="buscar">Buscar: </label> 
                 <input type="search" name="buscar" id="buscar"> </p>    
             
             
                  <h1 class="titulo"> Bienvenido a mi pagina web</h1>
        <h1 id="logo"> Mi logo</h1>
        <ul>
          class <li>nombre: suescu</li>
            <li>nacionalidad: colombaiana</li>
            <li> Ciudad de nac: Medellin   </li>
             <li> Deparatement: antio   </li>
            
            
        </ul> 
            
        </form>
    </body>
    
</html>