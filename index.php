<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD de Imagenes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/646ac4fad6.js" crossorigin="anonymous"></script>
    <style>
        thead {
        background-color: #1c87c9;
        color: #ffffff;
      }
    </style>
</head>
<body>
    <h1 class="text-center text-secondary p-4">CRUD de imagenes con php y MySQL</h1>
    <?php 
        include "./modelo/conexion.php";
    ?>
    <div class="p-4">
        <table class="table table-hover w-100">
            <thead class="bg-primary text-white">
                <tr>
                    <th scope="col">C&Oacute;DIGO</th>
                    <th scope="col">IMAGEN</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>
                        <a href="" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                        <a href="" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>














<!-- 
        el dia de ayer se perdio 18 del capital generado
        hoy se aposto a:
        Al-nassr vs abha, atlas femenil vs mazatlan femenil y athletic club vs almeria 
        se apostaron 50 del capital, se busca ganar el parlay triple(3) un monto de 80
        capital al momento 350

        el sebeno es lo maximo

        sera que lo que me da ganas de dormir sea mi musica, osea como es que la musica que a mi me gusta tambien me aburre, donde se habia visto tal falta de madurez musical, estoy decepcionado conmigo mismo por esta aberracion llamada tener sueño por escuchar la musica que me gusta, no se suponia que me deberia de sentir bien y con muchas ganas de seguir
     -->