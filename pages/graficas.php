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

    </script>
</head>

<body>
    <section class="feature_area section_gap_top">
        <div class="container">

            <input class="form-control" type="text" id="buscador" placeholder="Buscar por carrera">
            <button class="btn btn-info mt-2" id="botonBuscar">Buscar</button>

            <br>
            <br>

            <select name="buscadorPeriodo" id="buscadorPeriodo" class="form-control" onchange="llenarSelect()">
                <option disabled selected>-Seleccione un periodo-</option>
                <option>ENE-JUN/2020</option>
                <option>AGO-DIC/2020</option>
                <option>VERANO 2020</option>
                <option>ENE-JUN/2020</option>
                <option>AGO-DIC/2021</option>
            </select>
            <button class="btn btn-info mt-2" id="botonBuscarPeriodo">Buscar</button>



            <h2 class="text-center">Solicitudes de visitas recibidas</h2>
            <table class="table table-striped mt-2">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Carrera</th>
                        <th class="text-center" scope="col">Solicitudes</th>
                        <th class="text-center" scope="col">Periodo</th>
                    </tr>

                </thead>
                <tbody id="resultado">
                </tbody>

            </table>
            <hr class="my-4">
            <h3 class="mt-4 text-center">Gráfico de solicitudes</h3>
            <div class="" id="charts" style="width:900px; height:500px;"></div>
        </div>
        </div>

        <script>
            const visitas = [{
                    carrera: 'Ing. Sistemas',
                    solicitudes: 7,
                    periodo: 'AGO-DIC/2020'
                },
                {
                    carrera: 'Ing. Civil',
                    solicitudes: 2,
                    periodo: 'AGO-DIC/2020'
                },
                {
                    carrera: 'Ing. Bioquimica',
                    solicitudes: 3,
                    periodo: 'AGO-DIC/2020'
                },
                {
                    carrera: 'Ing. Gestión Empresarial',
                    solicitudes: 5,
                    periodo: 'ENE-JUN/2020'
                },
                {
                    carrera: 'Ing. Quimica',
                    solicitudes: 1,
                    periodo: 'ENE-JUN/2020'
                },
                {
                    carrera: 'Ing. Mecatronica',
                    solicitudes: 4,
                    periodo: 'VERANO/2020'
                }
            ];

            const buscador = document.querySelector('#buscador');
            const botonBuscar = document.querySelector('#botonBuscar');
            const resultado = document.querySelector('#resultado');

            var buscadorP = document.querySelector('#buscadorPeriodo');
            const botonBuscarP = document.querySelector('#botonBuscarPeriodo');
            const resultadoP = document.querySelector('#resultadoP');

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
                    <td class="text-center">${visita.periodo}</td>
                 
                    `
                    } //if
                } //for
                if (resultado.innerHTML === '') {
                    resultado.innerHTML +=
                        `
                    <td colspan="3">No se encontró solicitud</td>
                    `
                }

            } //filtrar
            function llenarSelect() {

                resultado.innerHTML = '';
                const texto = buscadorP.value.toLowerCase();
                for (let visita of visitas) {
                    let carrera = visita.periodo.toLowerCase();
                    if (carrera.indexOf(texto) !== -1) {
                        resultado.innerHTML +=
                            `
                 
                    <td >${visita.carrera}</td> 
                    <td class="text-center">${visita.solicitudes}</td>
                    <td class="text-center">${visita.periodo}</td>
                 
                    `
                    } //if
                } //for
                if (resultado.innerHTML === '') {
                    resultado.innerHTML +=
                        `
                    <td colspan="3">No se encontró solicitud</td>
                    `
                }

            } //buscador periodo
            botonBuscar.addEventListener('click', filtrar);
            buscador.addEventListener('keyup', filtrar);
            botonBuscarP.addEventListener('click', llenarSelect);

            filtrar();
            ///graficas
           
            google.load('visualization', '1.0', {
                'packages': ['corechart']
            });
            google.setOnLoadCallback(dibujar);

            function dibujar(arrVisitas) {
               arrVisitas=visitas
                console.log(visitas);
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
</body>

</html>