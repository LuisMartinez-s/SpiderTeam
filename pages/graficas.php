<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (isset($_SESSION["usuario"])) {
    include('includes/encabezado-admin.php');
} else {
    include('includes/encabezado.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
        google.load('visualization', '1.0', {
            'packages': ['corechart']
        });
        google.setOnLoadCallback(dibujar);

        function dibujar() {
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Carrera');
            data.addColumn('number', 'visitas');
            data.addRows(
                [
                    ['Ing. Sistemas', 7],
                    ['Ing. Civil', 2],
                    ['Ing. Bioquimica', 3],
                    ['Ing. Gestión Empresarial', 5],
                    ['Ing. Quimica', 1],
                    ['Ing. Mecatronica', 4]
                ]);
            var opciones = {
                'title': 'Visitas por carrera',
                pieHole: 0.2,
            };
            var grafica = new google.visualization.PieChart(document.getElementById('charts'));
            grafica.draw(data, opciones);
        } //dibujar
    </script>
</head>

<body>
    <section class="feature_area section_gap_top">
        <div class="container">
           
            <input class="form-control" type="text" id="buscador" placeholder="Buscar por carrera">
            <button class="btn btn-info mt-2" id="botonBuscar">Buscar</button>
            <h2 class="text-center">Solicitudes de visitas recibidas</h2>
            <table class="table table-striped mt-2" >
            <thead class="thead-dark" >
                <tr>
                    <th scope="col">Carrera</th>
                    <th class="text-center"scope="col">Solicitudes</th>
                </tr>
              
            </thead>
            <tbody id="resultado">
            </tbody>

            </table>
            <h3 class="mt-4 text-center">Gráfico de solicitudes</h3>
            <div class="" id="charts" style="width:900px; height:500px;"></div>
        </div>
        </div>

        <script>
            const visitas = [
                {carrera: 'Ing. Sistemas',solicitudes: 7},
                {carrera: 'Ing. Civil',solicitudes: 2},
                {carrera: 'Ing. Bioquimica',solicitudes: 3},
                {carrera: 'Ing. Gestión Empresarial',solicitudes: 5},
                {carrera: 'Ing. Quimica', solicitudes: 1}, 
                {carrera: 'Ing. Mecatronica',solicitudes: 4}
            ];

            const buscador = document.querySelector('#buscador');
            const botonBuscar = document.querySelector('#botonBuscar');
            const resultado = document.querySelector('#resultado');
           
            const filtrar = () => {
                //console.log(buscador.value);
                resultado.innerHTML = '';
                const texto = buscador.value.toLowerCase();
                for (let visita of visitas) {
                    let carrera = visita.carrera.toLowerCase();
                    if (carrera.indexOf(texto) !== -1) {
                        resultado.innerHTML +=
                            `
                 
                    <td >${visita.carrera}</td> 
                    <td class="text-center">${visita.solicitudes}</td>
                 
                    `
                    } //if
                } //for
                if (resultado.innerHTML === '') {
                    resultado.innerHTML +=
                        `
                    <td colspan="2">No se encontró solicitud</td>
                    `
                }
              
            } //filtrar
            botonBuscar.addEventListener('click', filtrar);
            buscador.addEventListener('keyup',filtrar);
            filtrar();
        </script>
</body>

</html>

