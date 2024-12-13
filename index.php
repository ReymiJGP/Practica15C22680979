<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <title>CiTIM Grupo XB</title>
    <link rel="stylesheet" href="css/css/problemaStem.css"/>
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <script>
        function calcula_() {
            // Datos del problema
            const K = 950; // Coeficiente de radiación en W/m²
            const horasSol = 10; // Horas de sol al día
            const diasMes = 31; // Días del mes de agosto
            const area = 3 * 2; // Área de la cristalera en m²

            // Cálculos
            const energiaWh = K * area * horasSol * diasMes; // Energía en Wh
            const energiaKcal = energiaWh * 0.860; // Conversión de Wh a Kcal (1 Wh = 0.860 Kcal)

            // Mostrar el resultado
            const resultadoDiv = document.getElementById("resultadoA");
            resultadoDiv.innerHTML = "La energía total es: " + energiaKcal.toFixed(2) + " Kcal.";
        }
    </script>
</head>
<body>
    <section class="wrapper">
        <header>
            <h1 class="logo">Estudiante: Reymi Jesús, No. de Control: C22680979</h1>
        </header>
        <section id="contenedor">
            <section class="problema">
                <h2>Problema: Cálculo de calor</h2>
                <p>Descripción:</p>
                <p>Calcula la cantidad de calor (en Kcal) que habrá entrado en una casa durante el mes de agosto si tiene una cristalera de 3 x 2m y no se han producido pérdidas en el vidrio. K = 950 W/m² y considera 10 horas de sol al día.</p>
            </section>
            <section class="esquemaProblema">
                <h2>Esquema</h2>
                <center>
                    <img class="imgProblema" src="images/Problema.jpg">
                </center>
            </section>
            <section class="formulas">
                <h2>Fórmulas</h2>
                <p> Q = K × T × S en Kcal </p>
                <p> 1 Wh = 0.860 Kcal </p>
            </section>
            <section class="datos">
                <h2>Datos:</h2>
                <ul>
                    <li> K = Coeficiente de radiación (950 W/m²) </li>
                    <li> t = Tiempo, en horas </li>
                    <li> S = Área, en m² </li>
                </ul>
            </section>
            <section class="calculos">
                <h2>Solución</h2>
                <button onclick="calcula_();">Presiona para calcular</button>
            </section>
            <section class="resultado">
                <h2>Resultado:</h2>
                <div id="resultadoA"></div>
            </section>
        </section>
        <footer class="pie">
            Creative Commons versión 3.0 SciSoft 2024
        </footer>
    </section>
</body>
</html>