
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href=" https://cdn.jsdelivr.net/npm/intro.js@7.0.1/minified/introjs.min.css " rel="stylesheet">
</head>
<body>
    <br>
    <br>
    <div class='container'>
        <div class='row'>
            <div class='col-6'>
                <table class='table table-bordered table-striped' data-step='1' data-intro='En esta tabla podrá seleccionar alguna de nuestras ciudades mas recomendadas!!'>
                    <thead>
                        <tr style='text-align:center'>
                            <th colspan='2'>SELECCIÓN DE CUIDADES <code onclick='iniciarTour()' style='cursor: help;'>AYUDA</code></th> 
                        </tr>
                    </thead>
                    <tbody>
                        <tr style='text-align:center'>
                            <td>
                                <label for=""><b>Miami</b></label>
                            </td>
                            <td>
                                <input type="radio" name="chk_cuidad"  data-ciudad='miami'  onclick='enviarCiudad(this)'>
                            </td>
                        </tr>
                        <tr style='text-align:center'>
                            <td>
                                <label for=""><b>New York</b></label>
                            </td>
                            <td>
                                <input type="radio" name="chk_cuidad" data-ciudad='New York' onclick='enviarCiudad(this)'>
                            </td>
                        </tr>
                        <tr style='text-align:center'>
                            <td>
                                <label for=""><b>Orlando</b></label>
                            </td>
                            <td>
                                <input type="radio" name="chk_cuidad" data-ciudad='Orlando' onclick='enviarCiudad(this)'>
                            </td>
                        </tr>
                        <tr style='text-align:center'>
                            <td>
                                <label for=""><b>Bogota</b></label>
                            </td>
                            <td>
                                <input type="radio" name="chk_cuidad" data-ciudad='Bogotá' onclick='enviarCiudad(this)'>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class='col-6'>
                <table class='table table-dark table-striped table-bordered' data-step='2' data-intro='En esta tabla podrá ver los resultados de los factores determinantes de cada ciudad'>
                    <tr style='text-align:center'>
                        <td>estado del clima</td>
                        <td><label id='lbl_estado_clima'></label></td>
                    </tr>
                    <tr style='text-align:center'>
                        <td>Temperatura</td>
                        <td><label id='lbl_temperatura'></label></td>
                    </tr>
                    <tr style='text-align:center'>
                        <td>Sensación de humedad</td>
                        <td><label id='lbl_humedad'></label></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class='row'>
            <div class='col-12'>
                <div id='img_ciudad' style="text-align:center"></div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
			  integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g="
			  crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src=" https://cdn.jsdelivr.net/npm/intro.js@7.0.1/intro.min.js "></script>
<script src='js/main.js'></script>
</body>
</html>