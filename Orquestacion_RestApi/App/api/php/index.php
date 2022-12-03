<html>
    <head>
    <img src="SEP.png" align="left" alt="imagen no disponible" WIDTH =174 HEIGHT =130 >
    <img src="ITL.png" align="right" alt="imagen no disponible" WIDTH =150 HEIGHT =130>
        <title>REST API DCBN</title>
        <center>
            <br>
        <p>
        <br>
        <FONT SIZE=5 color="red">REST API UTILIZANDO KUBERNETES</FONT> <br>
        <FONT SIZE=3>DÍAZ CERVERA BRIAN NOÉ | LABORATORIO PARA EL DESPLIEGUE DE APLICACIONES EMPRESARIALES</font>
        </p>
        </center>
        <meta charset="utf-8">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container-fluid">
            <?php

                $conn = mysqli_connect('db', 'root', 'test', "isc");

                $query = 'SELECT * From materias';
                $result = mysqli_query($conn, $query);

                echo '<table class="table table-striped">';
                echo '<br><br>';
                echo '<thead><tr><th></th><th>CLAVE</th><th>MATERIA</th><th>S</th><th>C</th></tr></thead>';
                
                while($value = $result->fetch_array(MYSQLI_ASSOC)){
                    echo '<tr>';
                    echo '<td><a href="#"><span class="glyphicon h"></span></a></td>';
                    foreach($value as $element){
                        echo '<td>' . $element . '</td>';
                    }

                    echo '</tr>';
                }
                echo '</table>';

                $result->close();
                mysqli_close($conn);
            ?>
        </div>
    </body>
</html>
