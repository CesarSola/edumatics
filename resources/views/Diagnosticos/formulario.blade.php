<!DOCTYPE html>
<html>
<head>
    <title>Formulario Diagnóstico</title>
    <style>

body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
    background-color: #f4f4f4;
    text-align: justify;
}
header {
    text-align: center;
    background-color: #0073e6;
    color: white;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

h1 {
    font-size: 2.5em;
    margin: 0;
}

h2 {
    font-size: 1.5em;
    margin: 0;
}

p {
    font-size: 1.2em;
    margin: 10px 0 0;
}

.table {
    width: 80%;
    border-collapse: collapse;
    margin: 20px 0;
    background-color: #fff;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    overflow: hidden;
}

.table thead {
    background-color: #0073e6;
    color: white;
    text-align: left;
}

.table th, .table td {
    padding: 12px 15px;
    border: 1px solid #ddd;
}

.table tbody tr:nth-child(even) {
    background-color: #f2f2f2;
}

.table tbody tr:hover {
    background-color: #e0e0e0;
}
form div {
    margin-bottom: 15px;
}

label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

input[type="text"],
input[type="email"],
textarea {
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

button {
    background-color: #0073e6;
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    background-color: #005bb5;
}

    #mensaje-evaluacion {
        display: none;
        margin-top: 20px;
        padding: 10px;
        border: 1px solid #000;
        text-align: center;
    }

    .evaluarse {
        background-color: #08ff4ee8;
        color: #000000;
        border-color: #c3e6cb;
    }

    .asesorarse {
        background-color: #fb2c2c;
        color: #000000;
        border-color: #f5c6cb;
    }
</style>
    </style>
</head>
<body>
    <header>
        <h1>AUTODIAGNÓSTICO</h1>
        <h2>EC0301</h2>
        <p>Diseño de cursos de formación de capital humano de manera presencial grupal, sus instrumentos de evaluación y manuales del curso.</p>
    </header>
    <div>


    <form id="formulario-diagnostico" action="{{ route('formulario.index') }}" method="POST">
        @csrf

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>La carta descriptiva elaborada: </th>
                        <th>SI</th>
                        <th>NO</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1. ¿Se presenta en formato digital y/o impreso?</td>
                        <td><input type="radio" name="q1" value="si" required></td>
                        <td><input type="radio" name="q1" value="no" required></td>
                    </tr>
                    <tr>
                        <td>2. ¿Indica el nombre del curso?</td>
                        <td><input type="radio" name="q2" value="si" required></td>
                        <td><input type="radio" name="q2" value="no" required></td>
                    </tr>
                    <tr>
                        <td>3. ¿Contiene el campo para registrar el nombre de la persona que diseñó el curso?</td>
                        <td><input type="radio" name="q3" value="si" required></td>
                        <td><input type="radio" name="q3" value="no" required></td>
                    </tr>
                    <tr>
                        <td>4. ¿Contiene el campo para registrar la(s) fecha(s) de impartición del curso?</td>
                        <td><input type="radio" name="q4" value="si" required></td>
                        <td><input type="radio" name="q4" value="no" required></td>
                    </tr>
                    <tr>
                        <td>5. ¿Describe los requisitos de ingreso de los participantes?</td>
                        <td><input type="radio" name="q5" value="si" required></td>
                        <td><input type="radio" name="q5" value="no" required></td>
                    </tr>
                    <tr>
                        <td>6. ¿Indica el número de participantes?</td>
                        <td><input type="radio" name="q6" value="si" required></td>
                        <td><input type="radio" name="q6" value="no" required></td>
                    </tr>
                    <tr>
                        <td>7. ¿Contiene los objetivos de aprendizaje?</td>
                        <td><input type="radio" name="q7" value="si" required></td>
                        <td><input type="radio" name="q7" value="no" required></td>
                    </tr>
                    <tr>
                        <td>8. ¿Especifica los momentos de capacitación?</td>
                        <td><input type="radio" name="q8" value="si" required></td>
                        <td><input type="radio" name="q8" value="no" required></td>
                    </tr>
                    <tr>
                        <td>9. ¿Describe el contenido del curso?</td>
                        <td><input type="radio" name="q9" value="si" required></td>
                        <td><input type="radio" name="q9" value="no" required></td>
                    </tr>
                    <tr>
                        <td>10. ¿Especifica las técnicas de instrucción?</td>
                        <td><input type="radio" name="q10" value="si" required></td>
                        <td><input type="radio" name="q10" value="no" required></td>
                    </tr>
                    <tr>
                        <td>11. ¿Especifica las técnicas grupales?</td>
                        <td><input type="radio" name="q11" value="si" required></td>
                        <td><input type="radio" name="q11" value="no" required></td>
                    </tr>
                    <tr>
                        <td>12. ¿Describe las actividades del proceso de instrucción-aprendizaje?</td>
                        <td><input type="radio" name="q12" value="si" required></td>
                        <td><input type="radio" name="q12" value="no" required></td>
                    </tr>
                    <tr>
                        <td>13. ¿Describe las estrategias de evaluación de los aprendizajes?</td>
                        <td><input type="radio" name="q13" value="si" required></td>
                        <td><input type="radio" name="q13" value="no" required></td>
                    </tr>
                    <tr>
                        <td>14. ¿Refiere los materiales didácticos a utilizar?</td>
                        <td><input type="radio" name="q14" value="si" required></td>
                        <td><input type="radio" name="q14" value="no" required></td>
                    </tr>
                    <tr>
                        <td>15. ¿Establece los tiempos programados para el desarrollo de las actividades?</td>
                        <td><input type="radio" name="q15" value="si" required></td>
                        <td><input type="radio" name="q15" value="no" required></td>
                    </tr>
                    <tr>
                        <td>16. ¿Se presenta sin errores ortográficos?</td>
                        <td><input type="radio" name="q16" value="si" required></td>
                        <td><input type="radio" name="q16" value="no" required></td>
                    </tr>
                    <!-- Añade más filas según sea necesario -->
                </tbody>
            </table>
            <br>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>El objetivo general del curso redactado: </th>
                        <th>SI</th>
                        <th>NO</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1. ¿Determina el sujeto de aprendizaje?</td>
                        <td><input type="radio" name="q17" value="si" required></td>
                        <td><input type="radio" name="q17" value="no" required></td>
                    </tr>
                    <tr>
                        <td>2. ¿Indica la conducta, producto, y/o actitud de aprendizaje a alcanzar por el participante?</td>
                        <td><input type="radio" name="q18" value="si" required></td>
                        <td><input type="radio" name="q18" value="no" required></td>
                    </tr>
                    <tr>
                        <td>3. ¿Especifica las condiciones de operación?</td>
                        <td><input type="radio" name="q19" value="si" required></td>
                        <td><input type="radio" name="q19" value="no" required></td>
                    </tr>
                    <tr>
                        <td>4. ¿Especifica los límites de tiempo, calidad, exactitud y/o criterio aceptable?</td>
                        <td><input type="radio" name="q20" value="si" required></td>
                        <td><input type="radio" name="q20" value="no" required></td>
                    </tr>
                    <!-- Añade más filas según sea necesario -->
                </tbody>
            </table>
            <br>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Los objetivos particulares y/o específicos elaborados:</th>
                        <th>SI</th>
                        <th>NO</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1. ¿Determinan el sujeto de aprendizaje?</td>
                        <td><input type="radio" name="q21" value="si" required></td>
                        <td><input type="radio" name="q21" value="no" required></td>
                    </tr>
                    <tr>
                        <td>2. ¿Indican la conducta, producto, y/o actitud de aprendizaje a alcanzar por el participante?</td>
                        <td><input type="radio" name="q22" value="si" required></td>
                        <td><input type="radio" name="q22" value="no" required></td>
                    </tr>
                    <tr>
                        <td>3. ¿Especifican las condiciones de operación?</td>
                        <td><input type="radio" name="q23" value="si" required></td>
                        <td><input type="radio" name="q23" value="no" required></td>
                    </tr>
                    <tr>
                        <td>4. ¿Especifican los límites de tiempo, calidad, exactitud y/o criterio aceptable?</td>
                        <td><input type="radio" name="q24" value="si" required></td>
                        <td><input type="radio" name="q24" value="no" required></td>
                    </tr>
                    <tr>
                        <td>5. ¿Son congruentes con los temas del curso?</td>
                        <td><input type="radio" name="q25" value="si"></td>
                        <td><input type="radio" name="q25" value="no"></td>
                    </tr>
                    <tr>
                        <td>6. ¿Son congruentes con las características de los participantes?</td>
                        <td><input type="radio" name="q26" value="si" required></td>
                        <td><input type="radio" name="q26" value="no" required></td>
                    </tr>
                    <!-- Añade más filas según sea necesario -->
                </tbody>
            </table>
            <br>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Los temas y subtemas definidos:</th>
                        <th>SI</th>
                        <th>NO</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1. ¿Son congruentes entre sí?</td>
                        <td><input type="radio" name="q27" value="si" required></td>
                        <td><input type="radio" name="q27" value="no" required></td>
                    </tr>
                    <tr>
                        <td>2. ¿Corresponden con los objetivos de aprendizaje?</td>
                        <td><input type="radio" name="q28" value="si" required></td>
                        <td><input type="radio" name="q28" value="no" required></td>
                    </tr>
                    <tr>
                        <td>3. ¿Se desarrollan en una secuencia de lo simple a lo complejo?</td>
                        <td><input type="radio" name="q29" value="si" required></td>
                        <td><input type="radio" name="q29" value="no" required></td>
                    </tr>
                    <!-- Añade más filas según sea necesario -->
                </tbody>
            </table>
            <br>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Las técnicas de instrucción seleccionadas:</th>
                        <th>SI</th>
                        <th>NO</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1. ¿Corresponden con los objetivos de aprendizaje?</td>
                        <td><input type="radio" name="q30" value="si" required></td>
                        <td><input type="radio" name="q30" value="no" required></td>
                    </tr>
                    <tr>
                        <td>2. ¿Corresponden con los requisitos de ingreso de los participantes?</td>
                        <td><input type="radio" name="q31" value="si" required></td>
                        <td><input type="radio" name="q31" value="no" required></td>
                    </tr>
                    <tr>
                        <td>3. ¿Corresponden con el número de participantes?</td>
                        <td><input type="radio" name="q32" value="si" required></td>
                        <td><input type="radio" name="q32" value="no" required></td>
                    </tr>
                    <!-- Añade más filas según sea necesario -->
                </tbody>
            </table>
            <br>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Las técnicas grupales seleccionadas:</th>
                        <th>SI</th>
                        <th>NO</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1. ¿Están planeadas para favorecer la dinámica secuencial del proceso instrucción-aprendizaje?</td>
                        <td><input type="radio" name="q33" value="si" required required></td>
                        <td><input type="radio" name="q33" value="no" required required></td>
                    </tr>
                    <tr>
                        <td>2. ¿Corresponden con el perfil del grupo?</td>
                        <td><input type="radio" name="q34" value="si" required required></td>
                        <td><input type="radio" name="q34" value="no" required required></td>
                    </tr>
                    <tr>
                        <td>3. ¿Corresponden con el número de participantes?</td>
                        <td><input type="radio" name="q35" value="si" required required></td>
                        <td><input type="radio" name="q35" value="no" required required></td>
                    </tr>
                    <!-- Añade más filas según sea necesario -->
                </tbody>
            </table>
            <br>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Las actividades del proceso de instrucción-aprendizaje definidas:</th>
                        <th>SI</th>
                        <th>NO</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1. ¿Corresponden con el nivel de ejecución de los objetivos?</td>
                        <td><input type="radio" name="q36" value="si" required></td>
                        <td><input type="radio" name="q36" value="no" required></td>
                    </tr>
                    <tr>
                        <td>2. ¿Son congruentes con los temas del curso?</td>
                        <td><input type="radio" name="q37" value="si" required></td>
                        <td><input type="radio" name="q37" value="no" required></td>
                    </tr>
                    <tr>
                        <td>3. ¿Corresponden con el perfil del grupo?</td>
                        <td><input type="radio" name="q38" value="si" required></td>
                        <td><input type="radio" name="q38" value="no" required></td>
                    </tr>
                    <tr>
                        <td>4. ¿Especifican el desarrollo de las técnicas empleadas?</td>
                        <td><input type="radio" name="q39" value="si" required></td>
                        <td><input type="radio" name="q39" value="no" required></td>
                    </tr>
                    <!-- Añade más filas según sea necesario -->
                </tbody>
            </table>
            <br>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Las estrategias de evaluación determinadas:</th>
                        <th>SI</th>
                        <th>NO</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1. ¿Corresponden con los objetivos de aprendizaje?</td>
                        <td><input type="radio" name="q40" value="si" required required></td>
                        <td><input type="radio" name="q40" value="no" required required></td>
                    </tr>
                    <tr>
                        <td>2. ¿Contienen los criterios de evaluación a utilizar?</td>
                        <td><input type="radio" name="q41" value="si" required required></td>
                        <td><input type="radio" name="q41" value="no" required required></td>
                    </tr>
                    <tr>
                        <td>3. ¿Contienen los instrumentos que se aplicarán en los tres momentos de la evaluación: Diagnóstica, formativa y sumativa?</td>
                        <td><input type="radio" name="q42" value="si" required required></td>
                        <td><input type="radio" name="q42" value="no" required required></td>
                    </tr>
                    <tr>
                        <td>4. ¿Mencionan los instrumentos a utilizar?</td>
                        <td><input type="radio" name="q43" value="si" required required></td>
                        <td><input type="radio" name="q43" value="no" required required></td>
                    </tr>
                    <tr>
                        <td>5. ¿Describen las evidencias que el participante deberá demostrar como resultado del aprendizaje?</td>
                        <td><input type="radio" name="q44" value="si" required required></td>
                        <td><input type="radio" name="q44" value="no" required required></td>
                    </tr>
                    <!-- Añade más filas según sea necesario -->
                </tbody>
            </table>
            <br>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Los materiales didácticos seleccionados:</th>
                        <th>SI</th>
                        <th>NO</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1. ¿Corresponden con las actividades de la carta descriptiva?</td>
                        <td><input type="radio" name="q45" value="si" required></td>
                        <td><input type="radio" name="q45" value="no" required></td>
                    </tr>
                    <tr>
                        <td>2. ¿Son congruentes con las características de los participantes?</td>
                        <td><input type="radio" name="q46" value="si" required></td>
                        <td><input type="radio" name="q46" value="no" required></td>
                    </tr>
                    <tr>
                        <td>3. ¿Corresponden con los temas del curso?</td>
                        <td><input type="radio" name="q47" value="si" required></td>
                        <td><input type="radio" name="q47" value="no" required></td>
                    </tr>
                    <!-- Añade más filas según sea necesario -->
                </tbody>
            </table>
            <br>
            <p>Con relación a este elemento usted obtiene los siguientes <strong>CONOCIMIENTOS</strong> </p>
            <br>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Temas</th>
                        <th>Nivel de Conocimiento</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1. Principios de las teorías del aprendizaje:</td>
                        <td>
                            <input type="radio" name="q48" value="si" required> SI
                            <input type="radio" name="q48" value="no" required> NO
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <ul>
                                <li>Conductismo</li>
                                <li> Cognitivismo</li>
                                <li>Constructivismo</li>
                                <li> Humanismo</li>
                            </ul>
                        </td>


                    </tr>


                    <tr>
                        <td>2. Principios de educación de adultos:</td>
                        <td>
                            <input type="radio" name="q49" value="si" required> SI
                            <input type="radio" name="q49" value="no" required> NO
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <ul>
                                <li> Necesidad de saber</li>
                                <li>  Disposición para aprender</li>
                                <li> Motivación para aprender</li>
                                <li>Recuperación de la experiencia</li>
                                <li>Desaprendizaje</li>
                                <li>Aplicación práctica en la vida real</li>
                            </ul>

                        </td>

                    </tr>

                    <tr>
                        <td>3. Descripción de técnicas instruccionales:</td>
                        <td>
                            <input type="radio" name="q50" value="si" required> SI
                            <input type="radio" name="q50" value="no" required> NO
                        </td>
                    </tr>
                    <tr>

                        <td>
                            <ul>
                                <li>Expositiva</li>
                                <li>Diálogo/discusión</li>
                                <li>Demostración/ejecución</li>
                            </ul>
                           </td>

                    </tr>


                    <tr>
                        <td>4. Descripción de técnicas grupales:</td>
                        <td>
                            <input type="radio" name="q51" value="si" required> SI
                            <input type="radio" name="q51" value="no" required> NO
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <ul>
                                <li>Rompehielo</li>
                                <li>Energetizante</li>
                                <li>Cierre</li>
                            </ul>
                           </td>


                </tbody>
            </table>
<br>
<p>Se pueden presentar los siguientes  <strong>ACTITUDES/HÁBITOS Y VALORES.</strong></p>
<br>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Usted presenta:</th>
                        <th>SI</th>
                        <th>NO</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1. Orden: La manera en que se presentan los temas y subtemas de lo simple a lo complejo.</td>
                        <td>
                            <input type="radio" name="q52" value="si" required> SI
                        </td>
                           <td>
                            <input type="radio" name="q52" value="no" required> NO

                           </td>


                    </tr>
                </tbody>
            </table>

            <br>
            <p>
                <strong>Elemento 2 de 3: Diseñar instrumentos para la evaluación de cursos de formación del capital humano de manera presencial grupal.</strong>
            </p>
            <p>
                Con relación a este elemento, ¿usted obtiene los siguientes PRODUCTOS?
            </p>
            <br>
            <table class="table">
                <thead>
                    <tr>
                        <th>Los instrumentos de evaluación elaborados:</th>
                        <th>SI</th>
                        <th>NO</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1. Indican el nombre del curso</td>
                        <td><input type="radio" name="q53" value="si" required> SI</td>
                        <td><input type="radio" name="q53" value="no" required> NO</td>
                    </tr>
                    <tr>
                        <td>2. Contienen espacio para registrar el nombre del instructor</td>
                        <td><input type="radio" name="q54" value="si" required> SI</td>
                        <td><input type="radio" name="q54" value="no" required> NO</td>
                    </tr>
                    <tr>
                        <td>3. Contienen espacio para registrar el nombre del participante</td>
                        <td><input type="radio" name="q55" value="si" required> SI</td>
                        <td><input type="radio" name="q55" value="no" required> NO</td>
                    </tr>
                    <tr>
                        <td>4. Contienen espacio para registrar la fecha de aplicación</td>
                        <td><input type="radio" name="q56" value="si" required> SI</td>
                        <td><input type="radio" name="q56" value="no" required> NO</td>
                    </tr>
                    <tr>
                        <td>5. Detallan las instrucciones de aplicación</td>
                        <td><input type="radio" name="q57" value="si" required> SI</td>
                        <td><input type="radio" name="q57" value="no" required> NO</td>
                    </tr>
                    <tr>
                        <td>6. Contienen los reactivos de evaluación</td>
                        <td><input type="radio" name="q58" value="si" required> SI</td>
                        <td><input type="radio" name="q58" value="no" required> NO</td>
                    </tr>
                    <tr>
                        <td>7. Incluyen las claves de respuestas para el evaluador y/o instructor</td>
                        <td><input type="radio" name="q59" value="si" required> SI</td>
                        <td><input type="radio" name="q59" value="no" required> NO</td>
                    </tr>
                    <tr>
                        <td>8. Corresponden con las estrategias de evaluación mencionadas en la carta descriptiva</td>
                        <td><input type="radio" name="q60" value="si" required> SI</td>
                        <td><input type="radio" name="q60" value="no" required> NO</td>
                    </tr>
                    <tr>
                        <td>9. Se presenta en formato digital y/o impreso</td>
                        <td><input type="radio" name="q61" value="si" required> SI</td>
                        <td><input type="radio" name="q61" value="no" required> NO</td>
                    </tr>
                    <tr>
                        <td>10. Se presentan sin errores ortográficos</td>
                        <td><input type="radio" name="q62" value="si" required> SI</td>
                        <td><input type="radio" name="q62" value="no" required> NO</td>
                    </tr>
                </tbody>
            </table>
            <br>
            <table class="table">
                <thead>
                    <tr>
                        <th>Las instrucciones de aplicación de los instrumentos de evaluación elaboradas:</th>
                        <th>SI</th>
                        <th>NO</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1. Establecen las condiciones de aplicación</td>
                        <td><input type="radio" name="q63" value="si" required> SI</td>
                        <td><input type="radio" name="q63" value="no" required> NO</td>
                    </tr>
                    <tr>
                        <td>2. Establecen los tiempos para la evaluación</td>
                        <td><input type="radio" name="q64" value="si" required> SI</td>
                        <td><input type="radio" name="q64" value="no" required> NO</td>
                    </tr>
                    <tr>
                        <td>3. Contienen las indicaciones para el participante</td>
                        <td><input type="radio" name="q65" value="si" required> SI</td>
                        <td><input type="radio" name="q65" value="no" required> NO</td>
                    </tr>
                    <tr>
                        <td>4. Contienen las indicaciones para el evaluador</td>
                        <td><input type="radio" name="q66" value="si" required> SI</td>
                        <td><input type="radio" name="q66" value="no" required> NO</td>
                    </tr>
                </tbody>
            </table>
            <br>
            <table class="table">
                <thead>
                    <tr>
                        <th>Los reactivos del instrumento de evaluación elaborados:</th>
                        <th>SI</th>
                        <th>NO</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1. Corresponden con los objetivos de aprendizaje</td>
                        <td><input type="radio" name="q67" value="si" required> SI</td>
                        <td><input type="radio" name="q67" value="no" required> NO</td>
                    </tr>
                    <tr>
                        <td>2. Son congruentes con el tipo de instrumento</td>
                        <td><input type="radio" name="q68" value="si" required> SI</td>
                        <td><input type="radio" name="q68" value="no" required> NO</td>
                    </tr>
                    <tr>
                        <td>3. Verifican una sola evidencia y/o característica</td>
                        <td><input type="radio" name="q69" value="si" required> SI</td>
                        <td><input type="radio" name="q69" value="no" required> NO</td>
                    </tr>
                    <tr>
                        <td>4. Son medibles</td>
                        <td><input type="radio" name="q70" value="si" required> SI</td>
                        <td><input type="radio" name="q70" value="no" required> NO</td>
                    </tr>
                    <tr>
                        <td>5. Indican su valor</td>
                        <td><input type="radio" name="q71" value="si" required> SI</td>
                        <td><input type="radio" name="q71" value="no" required> NO</td>
                    </tr>
                </tbody>
            </table>
            <br>
            <table class="table">
                <thead>
                    <tr>
                        <th>Las claves de respuestas para el evaluador elaboradas:</th>
                        <th>SI</th>
                        <th>NO</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1. Contienen las respuestas definidas como correctas</td>
                        <td><input type="radio" name="q72" value="si" required> SI</td>
                        <td><input type="radio" name="q72" value="no" required> NO</td>
                    </tr>
                    <tr>
                        <td>2. Indican la ponderación de cada reactivo</td>
                        <td><input type="radio" name="q73" value="si" required> SI</td>
                        <td><input type="radio" name="q73" value="no" required> NO</td>
                    </tr>
                    <tr>
                        <td>3. Señalan el puntaje total esperado</td>
                        <td><input type="radio" name="q74" value="si" required> SI</td>
                        <td><input type="radio" name="q74" value="no" required> NO</td>
                    </tr>
                </tbody>
            </table>
            <br>
            <table class="table">
                <thead>
                    <tr>
                        <th>El instrumento para la evaluación de satisfacción del curso diseñado:</th>
                        <th>SI</th>
                        <th>NO</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1. Contiene el espacio para registrar el nombre del curso</td>
                        <td><input type="radio" name="q75" value="si" required> SI</td>
                        <td><input type="radio" name="q75" value="no" required> NO</td>
                    </tr>
                    <tr>
                        <td>2. Contiene espacio para registrar el nombre del instructor</td>
                        <td><input type="radio" name="q76" value="si" required> SI</td>
                        <td><input type="radio" name="q76" value="no" required> NO</td>
                    </tr>
                    <tr>
                        <td>3. Enuncia las instrucciones generales de aplicación</td>
                        <td><input type="radio" name="q77" value="si" required> SI</td>
                        <td><input type="radio" name="q77" value="no" required> NO</td>
                    </tr>
                    <tr>
                        <td>4. Señala la escala de estimación del nivel de satisfacción del curso</td>
                        <td><input type="radio" name="q78" value="si" required> SI</td>
                        <td><input type="radio" name="q78" value="no" required> NO</td>
                    </tr>
                    <tr>
                        <td>5. Incluye los reactivos sobre las características del evento</td>
                        <td><input type="radio" name="q79" value="si" required> SI</td>
                        <td><input type="radio" name="q79" value="no" required> NO</td>
                    </tr>
                    <tr>
                        <td>6. Incluye los reactivos sobre el contenido del curso</td>
                        <td><input type="radio" name="q80" value="si" required> SI</td>
                        <td><input type="radio" name="q80" value="no" required> NO</td>
                    </tr>
                    <tr>
                        <td>7. Incluye los reactivos sobre los materiales didácticos empleados</td>
                        <td><input type="radio" name="q81" value="si" required> SI</td>
                        <td><input type="radio" name="q81" value="no" required> NO</td>
                    </tr>
                    <tr>
                        <td>8. Incluye los reactivos sobre el desempeño del instructor</td>
                        <td><input type="radio" name="q82" value="si" required> SI</td>
                        <td><input type="radio" name="q82" value="no" required> NO</td>
                    </tr>
                    <tr>
                        <td>9. Contiene espacios para el registro de comentarios</td>
                        <td><input type="radio" name="q83" value="si" required> SI</td>
                        <td><input type="radio" name="q83" value="no" required> NO</td>
                    </tr>
                </tbody>
            </table>
            <br>
            <p style="text-align: center;">
                Con relación a este elemento ¿usted obtiene los siguientes <strong>PRODUCTOS</strong>?
            </p>
            <table class="table">
                <thead>
                    <tr>
                        <th>Cuenta con conocimientos en los siguientes temas:</th>
                        <th>SI</th>
                        <th>NO</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1. Definición de validez y confiabilidad de los instrumentos de evaluación</td>
                        <td><input type="radio" name="q84" value="si" required> SI</td>
                        <td><input type="radio" name="q84" value="no" required> NO</td>
                    </tr>
                    <tr>
                        <td>2. Características de los siguientes tipos de instrumentos de evaluación:
                            <ul>
                                <li>De habilidades y destrezas</li>
                                <li>De conocimiento</li>
                            </ul>
                        </td>
                        <td><input type="radio" name="q85" value="si" required> SI</td>
                        <td><input type="radio" name="q85" value="no" required> NO</td>
                    </tr>
                </tbody>
            </table>

            ELEMENTO 3
<table class="table table-bordered">
    <thead>
        <tr>
            <th>El manual del participante elaborado:</th>
            <th>SI</th>
            <th>NO</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1. Incluye nombre del curso</td>
            <td><input type="radio" name="q86" value="si" required> SI</td>
            <td><input type="radio" name="q86" value="no" required> NO</td>
        </tr>
        <tr>
            <td>2. Menciona el nombre de la persona que diseñó el curso</td>
            <td><input type="radio" name="q87" value="si" required> SI</td>
            <td><input type="radio" name="q87" value="no" required> NO</td>
        </tr>
        <tr>
            <td>3. Contiene el índice del curso</td>
            <td><input type="radio" name="q88" value="si" required> SI</td>
            <td><input type="radio" name="q88" value="no" required> NO</td>
        </tr>
        <tr>
            <td>4. Contiene la presentación del manual</td>
            <td><input type="radio" name="q89" value="si" required> SI</td>
            <td><input type="radio" name="q89" value="no" required> NO</td>
        </tr>
        <tr>
            <td>5. Contiene la introducción</td>
            <td><input type="radio" name="q90" value="si" required> SI</td>
            <td><input type="radio" name="q90" value="no" required> NO</td>
        </tr>
        <tr>
            <td>6. Señala el objetivo general del curso acorde a la carta descriptiva</td>
            <td><input type="radio" name="q91" value="si" required> SI</td>
            <td><input type="radio" name="q91" value="no" required> NO</td>
        </tr>
        <tr>
            <td>7. Señala los objetivos particulares y/o específicos del curso acordes a la carta descriptiva</td>
            <td><input type="radio" name="q92" value="si" required> SI</td>
            <td><input type="radio" name="q92" value="no" required> NO</td>
        </tr>
        <tr>
            <td>8. Desglosa los temas</td>
            <td><input type="radio" name="q93" value="si" required> SI</td>
            <td><input type="radio" name="q93" value="no" required> NO</td>
        </tr>
        <tr>
            <td>9. Indica las fuentes de información documental o tomadas de la internet</td>
            <td><input type="radio" name="q94" value="si" required> SI</td>
            <td><input type="radio" name="q94" value="no" required> NO</td>
        </tr>
        <tr>
            <td>10. Se presenta en formato digital y/o impreso</td>
            <td><input type="radio" name="q95" value="si" required> SI</td>
            <td><input type="radio" name="q95" value="no" required> NO</td>
        </tr>
        <tr>
            <td>11. Se presenta sin errores ortográficos</td>
            <td><input type="radio" name="q96" value="si" required> SI</td>
            <td><input type="radio" name="q96" value="no" required> NO</td>
        </tr>
    </tbody>
</table>

<br>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>La presentación del manual del participante elaborada:</th>
            <th>SI</th>
            <th>NO</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1. Contiene la bienvenida al participante</td>
            <td><input type="radio" name="q97" value="si" required> SI</td>
            <td><input type="radio" name="q97" value="no" required> NO</td>
        </tr>
        <tr>
            <td>2. Ofrece recomendaciones acerca de la forma de utilizar el manual</td>
            <td><input type="radio" name="q98" value="si" required> SI</td>
            <td><input type="radio" name="q98" value="no" required> NO</td>
        </tr>
        <tr>
            <td>3. Describe la organización del manual</td>
            <td><input type="radio" name="q99" value="si" required> SI</td>
            <td><input type="radio" name="q99" value="no" required> NO</td>
        </tr>
    </tbody>
</table>


<br>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>La introducción del manual del participante desarrollada:</th>
            <th>SI</th>
            <th>NO</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1. Contiene un resumen de los temas</td>
            <td><input type="radio" name="q100" value="si" required> SI</td>
            <td><input type="radio" name="q100" value="no" required> NO</td>
        </tr>
        <tr>
            <td>2. Señala el beneficio que el curso aportará a los participantes</td>
            <td><input type="radio" name="q101" value="si" required> SI</td>
            <td><input type="radio" name="q101" value="no" required> NO</td>
        </tr>
        <tr>
            <td>3. Establece el enfoque didáctico del curso</td>
            <td><input type="radio" name="q102" value="si" required> SI</td>
            <td><input type="radio" name="q102" value="no" required> NO</td>
        </tr>
        <tr>
            <td>4. Es congruente con el objetivo de aprendizaje</td>
            <td><input type="radio" name="q103" value="si" required> SI</td>
            <td><input type="radio" name="q103" value="no" required> NO</td>
        </tr>
    </tbody>
</table>


<br>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Los temas desarrollados del manual del participante:</th>
            <th>SI</th>
            <th>NO</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1. Corresponden con la carta descriptiva</td>
            <td><input type="radio" name="q104" value="si" required> SI</td>
            <td><input type="radio" name="q104" value="no" required> NO</td>
        </tr>
        <tr>
            <td>2. Son congruentes con los objetivos de aprendizaje</td>
            <td><input type="radio" name="q105" value="si" required> SI</td>
            <td><input type="radio" name="q105" value="no" required> NO</td>
        </tr>
        <tr>
            <td>3. Mencionan los objetivos particulares y/o específicos</td>
            <td><input type="radio" name="q106" value="si" required> SI</td>
            <td><input type="radio" name="q106" value="no" required> NO</td>
        </tr>
        <tr>
            <td>4. Están desarrollados de lo simple a lo complejo</td>
            <td><input type="radio" name="q107" value="si" required> SI</td>
            <td><input type="radio" name="q107" value="no" required> NO</td>
        </tr>
        <tr>
            <td>5. Describen las actividades necesarias para el desarrollo del tema</td>
            <td><input type="radio" name="q108" value="si" required> SI</td>
            <td><input type="radio" name="q108" value="no" required> NO</td>
        </tr>
        <tr>
            <td>6. Contienen las síntesis y/o conclusiones del contenido de los temas</td>
            <td><input type="radio" name="q109" value="si" required> SI</td>
            <td><input type="radio" name="q109" value="no" required> NO</td>
        </tr>

        <tr>
            <td>7. Incluyen casos de estudio y/o ejemplos</td>
            <td><input type="radio" name="q110" value="si" required> SI</td>
            <td><input type="radio" name="q110" value="no" required> NO</td>
        </tr>
    </tbody>
</table>

<br>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Las fuentes de información documental o tomadas de la internet del manual del participante:</th>
            <th>SI</th>
            <th>NO</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1. Corresponden con los objetivos del curso</td>
            <td><input type="radio" name="q111" value="si" required> SI</td>
            <td><input type="radio" name="q111" value="no" required> NO</td>
        </tr>
        <tr>
            <td>2. Especifican el nombre del autor</td>
            <td><input type="radio" name="q112" value="si" required> SI</td>
            <td><input type="radio" name="q112" value="no" required> NO</td>
        </tr>
        <tr>
            <td>3. Señalan el año de publicación y/o la fecha de acceso al documento</td>
            <td><input type="radio" name="q113" value="si" required> SI</td>
            <td><input type="radio" name="q113" value="no" required> NO</td>
        </tr>
        <tr>
            <td>4. Indican el título de la obra</td>
            <td><input type="radio" name="q114" value="si" required> SI</td>
            <td><input type="radio" name="q114" value="no" required> NO</td>
        </tr>
        <tr>
            <td>5. Refieren la editorial y/o la URL</td>
            <td><input type="radio" name="q115" value="si" required> SI</td>
            <td><input type="radio" name="q115" value="no" required> NO</td>
        </tr>
        <tr>
            <td>6. Señalan el país de origen de la obra</td>
            <td><input type="radio" name="q116" value="si" required> SI</td>
            <td><input type="radio" name="q116" value="no" required> NO</td>
        </tr>
    </tbody>
</table>

<br>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>El manual del instructor elaborado:</th>
            <th>SI</th>
            <th>NO</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1. Incluye el nombre del curso</td>
            <td><input type="radio" name="q117" value="si" required> SI</td>
            <td><input type="radio" name="q117" value="no" required> NO</td>
        </tr>
        <tr>
            <td>2. Incluye el nombre de la persona que diseñó el curso</td>
            <td><input type="radio" name="q118" value="si" required> SI</td>
            <td><input type="radio" name="q118" value="no" required> NO</td>
        </tr>
        <tr>
            <td>3. Contiene el índice</td>
            <td><input type="radio" name="q119" value="si" required> SI</td>
            <td><input type="radio" name="q119" value="no" required> NO</td>
        </tr>
        <tr>
            <td>4. Cuenta con una introducción</td>
            <td><input type="radio" name="q120" value="si" required> SI</td>
            <td><input type="radio" name="q120" value="no" required> NO</td>
        </tr>
        <tr>
            <td>5. Incluye la carta descriptiva</td>
            <td><input type="radio" name="q121" value="si" required> SI</td>
            <td><input type="radio" name="q121" value="no" required> NO</td>
        </tr>
        <tr>
            <td>6. Describe los requerimientos del lugar de capacitación</td>
            <td><input type="radio" name="q122" value="si" required> SI</td>
            <td><input type="radio" name="q122" value="no" required> NO</td>
        </tr>
        <tr>
            <td>7. Contiene sugerencias para desarrollar los temas</td>
            <td><input type="radio" name="q123" value="si" required> SI</td>
            <td><input type="radio" name="q123" value="no" required> NO</td>
        </tr>
        <tr>
            <td>8. Incluye los instrumentos de evaluación</td>
            <td><input type="radio" name="q124" value="si" required> SI</td>
            <td><input type="radio" name="q124" value="no" required> NO</td>
        </tr>
        <tr>
            <td>9. Incluye la clave de respuestas de los cuestionarios</td>
            <td><input type="radio" name="q125" value="si" required> SI</td>
            <td><input type="radio" name="q125" value="no" required> NO</td>
        </tr>
        <tr>
            <td>10. Señala las fuentes de información documental y/o tomadas de la internet</td>
            <td><input type="radio" name="q126" value="si" required> SI</td>
            <td><input type="radio" name="q126" value="no" required> NO</td>
        </tr>
        <tr>
            <td>11. Se presenta digitalizado y/o impreso</td>
            <td><input type="radio" name="q127" value="si" required> SI</td>
            <td><input type="radio" name="q127" value="no" required> NO</td>
        </tr>
        <tr>
            <td>12. Se presenta sin errores ortográficos</td>
            <td><input type="radio" name="q128" value="si" required> SI</td>
            <td><input type="radio" name="q128" value="no" required> NO</td>
        </tr>
    </tbody>
</table>

<br>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>La introducción del manual del instructor elaborada:</th>
            <th>SI</th>
            <th>NO</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1. Explica el propósito del manual</td>
            <td><input type="radio" name="q129" value="si" required> SI</td>
            <td><input type="radio" name="q129" value="no" required> NO</td>
        </tr>
        <tr>
            <td>2. Expone la estructura del curso</td>
            <td><input type="radio" name="q130" value="si" required> SI</td>
            <td><input type="radio" name="q130" value="no" required> NO</td>
        </tr>
        <tr>
            <td>3. Expone la modalidad del curso</td>
            <td><input type="radio" name="q131" value="si" required> SI</td>
            <td><input type="radio" name="q131" value="no" required> NO</td>
        </tr>
    </tbody>
</table>

<br>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Los requerimientos del lugar de capacitación elaborados:</th>
            <th>SI</th>
            <th>NO</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1. Señalan las características del lugar de capacitación</td>
            <td><input type="radio" name="q132" value="si" required> SI</td>
            <td><input type="radio" name="q132" value="no" required> NO</td>
        </tr>
        <tr>
            <td>2. Mencionan el material de apoyo a utilizar</td>
            <td><input type="radio" name="q133" value="si" required> SI</td>
            <td><input type="radio" name="q133" value="no" required> NO</td>
        </tr>
        <tr>
            <td>3. Especifican el equipo necesario para desarrollar el curso</td>
            <td><input type="radio" name="q134" value="si" required> SI</td>
            <td><input type="radio" name="q134" value="no" required> NO</td>
        </tr>
        <tr>
            <td>4. Proporcionan las recomendaciones de uso del material de apoyo</td>
            <td><input type="radio" name="q135" value="si" required> SI</td>
            <td><input type="radio" name="q135" value="no" required> NO</td>
        </tr>
    </tbody>
</table>

<br>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Los temas del manual del instructor:</th>
            <th>SI</th>
            <th>NO</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1. Corresponden con los mencionados en la carta descriptiva</td>
            <td><input type="radio" name="q136" value="si" required> SI</td>
            <td><input type="radio" name="q136" value="no" required> NO</td>
        </tr>
        <tr>
            <td>2. Ofrecen sugerencias de los apoyos necesarios para la explicación de cada tema</td>
            <td><input type="radio" name="q137" value="si" required> SI</td>
            <td><input type="radio" name="q137" value="no" required> NO</td>
        </tr>
        <tr>
            <td>3. Describen las técnicas, actividades y/o ejemplos para el desarrollo de cada tema</td>
            <td><input type="radio" name="q138" value="si" required> SI</td>
            <td><input type="radio" name="q138" value="no" required> NO</td>
        </tr>
        <tr>
            <td>4. Describen formas, criterios y tiempos de evaluación para cada tema</td>
            <td><input type="radio" name="q139" value="si" required> SI</td>
            <td><input type="radio" name="q139" value="no" required> NO</td>
        </tr>
    </tbody>
</table>

<br>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Las fuentes de información documental y/o de internet del manual del instructor integradas:</th>
            <th>SI</th>
            <th>NO</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1. Corresponden con los objetivos del curso</td>
            <td><input type="radio" name="q140" value="si" required> SI</td>
            <td><input type="radio" name="q140" value="no" required> NO</td>
        </tr>
        <tr>
            <td>2. Especifican el nombre del autor</td>
            <td><input type="radio" name="q141" value="si" required> SI</td>
            <td><input type="radio" name="q141" value="no" required> NO</td>
        </tr>
        <tr>
            <td>3. Señalan el año de publicación y/o la fecha de acceso al documento</td>
            <td><input type="radio" name="q142" value="si" required> SI</td>
            <td><input type="radio" name="q142" value="no" required> NO</td>
        </tr>
        <tr>
            <td>4. Indican el título de la obra</td>
            <td><input type="radio" name="q143" value="si" required> SI</td>
            <td><input type="radio" name="q143" value="no" required> NO</td>
        </tr>
        <tr>
            <td>5. Refieren la editorial y/o la URL</td>
            <td><input type="radio" name="q144" value="si" required> SI</td>
            <td><input type="radio" name="q144" value="no" required> NO</td>
        </tr>
        <tr>
            <td>6. Señalan el país de origen de la obra</td>
            <td><input type="radio" name="q145" value="si" required> SI</td>
            <td><input type="radio" name="q145" value="no" required> NO</td>
        </tr>
    </tbody>
</table>


<br>
<input type="hidden" id="productos-total-input1" name="productos_total1" value="0">
<input type="hidden" id="productos-si-input1" name="productos_si1" value="0">
<input type="hidden" id="productos-no-input1" name="productos_no1" value="0">
<input type="hidden" id="productos-suma-input1" name="productos_suma1" value="0">

<input type="hidden" id="conocimientos-total-input1" name="conocimientos_total1" value="0">
<input type="hidden" id="conocimientos-si-input1" name="conocimientos_si1" value="0">
<input type="hidden" id="conocimientos-no-input1" name="conocimientos_no1" value="0">
<input type="hidden" id="conocimientos-suma-input1" name="conocimientos_suma1" value="0">

<input type="hidden" id="actitudes-total-input1" name="actitudes_total1" value="0">
<input type="hidden" id="actitudes-si-input1" name="actitudes_si1" value="0">
<input type="hidden" id="actitudes-no-input1" name="actitudes_no1" value="0">
<input type="hidden" id="actitudes-suma-input1" name="actitudes_suma1" value="0">

<input type="hidden" id="productos-total-input2" name="productos_total2" value="0">
<input type="hidden" id="productos-si-input2" name="productos_si2" value="0">
<input type="hidden" id="productos-no-input2" name="productos_no2" value="0">
<input type="hidden" id="productos-suma-input2" name="productos_suma2" value="0">

<input type="hidden" id="conocimientos-total-input2" name="conocimientos_total2" value="0">
<input type="hidden" id="conocimientos-si-input2" name="conocimientos_si2" value="0">
<input type="hidden" id="conocimientos-no-input2" name="conocimientos_no2" value="0">
<input type="hidden" id="conocimientos-suma-input2" name="conocimientos_suma2" value="0">

<input type="hidden" id="productos-total-input3" name="productos_total3" value="0">
<input type="hidden" id="productos-si-input3" name="productos_si3" value="0">
<input type="hidden" id="productos-no-input3" name="productos_no3" value="0">
<input type="hidden" id="productos-suma-input3" name="productos_suma3" value="0">

    <input type="hidden" id="num-si-input" name="num_si" value="">
    <input type="hidden" id="num-no-input" name="num_no" value="">
    <input type="hidden" id="porcentaje-si-input" name="porcentaje_si" value="">
    <input type="hidden" id="recomendacion-input" name="recomendacion" value="">


    <input type="hidden" id="current_date" name="current_date">

    <button type="button" class="primary" onclick="contabilizarTodasRespuestas2()">Enviar resultados</button>
    <br>

    <div id="decision-section" style="display: none;">
        <br>
        <label>¿Usted desea?</label>
        <br>
        <input type="radio" name="decision" value="Evaluarme" required> Evaluarme
        <br>
        <input type="radio" name="decision" value="Asesorarme" required> Asesorarme
        <br>
        <button type="submit" value="submit">Descarga y enviar resultados</button>

    </div>
    </form>
</div>

<br>
<h2>Tabla de Porcentaje</h2>
<table id="tabla-resultados" border="1">
    <thead>
        <tr>
            <th colspan="2">TABLA DE PORCENTAJE</th>
        </tr>
    </thead>
    <tbody id="resultados-body">
        <tr>
            <th>1. Cuente el número de respuestas afirmativas (Sí) que obtuvo y anótelas:</th>
            <td id="num-si">0</td>
        </tr>
        <tr>
            <th>2. Cuente el número de respuestas negativas (No) que obtuvo y anótelas:</th>
            <td id="num-no">0</td>
        </tr>
        <tr>
            <th>3. Verifique que la suma de las respuestas afirmativas (SI) y negativas (NO) sea igual al total de reactivos (145):</th>
            <td id="suma-total">0</td>
        </tr>
        <tr>
            <th>4. Divida las respuestas afirmativas que obtuvo entre el total de respuestas y multiplique por 100 para que su resultado sea en porcentaje:</th>
            <td id="porcentaje-si">0%</td>
        </tr>
    </tbody>
</table>
<br>
<div id="mensaje-evaluacion"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<table id="resultados" class="table table-bordered mt-5">
        <thead>
            <tr>
                <tr>
                    <th>Elemento 1 de 3: Diseñar cursos de formación del capital humano de manera presencial grupal.</th>
                    <th>TOTAL DE REACTIVOS</th>
                    <th>SI</th>
                    <th>NO</th>
                    <th>Total</th>
                </tr>
            </tr>
        </thead>
        <tbody>
            <td colspan="4">Aún no hay resultados.</td>
        </tbody>
    </table>
<table id="resultados1" class="table table-bordered mt-5">
    <thead>
        <tr>
            <th>Elemento 2 de 3: Diseñar cursos de formación del capital humano de manera presencial grupal.</th>
            <th>TOTAL DE REACTIVOS</th>
            <th>SI</th>
            <th>NO</th>
            <th>Total</th>
        </tr>
    </thead>
    <tbody>
       <td colspan="4">Aún no hay resultados.</td>
    </tbody>
</table>
<br>
<table id="resultados2" class="table table-bordered">
    <thead>
        <tr>
            <th>Elemento 3 de 3: Diseñar manuales del curso de formación del capital humano de manera presencial grupal</th>

            <th>TOTAL DE REACTIVOS</th>
            <th>SI</th>
            <th>NO</th>
            <th>Total</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td colspan="4">Aún no hay resultados.</td>
        </tr>
    </tbody>
</table>


<br>


<br>
<script>
    function contabilizarTodasRespuestas2() {

        contabilizarRespuestas();
        contabilizarRespuestas1();
        contabilizarRespuestas2();
        calcularResultados3();
        const currentDate = new Date().toISOString().split('T')[0]; // Formato YYYY-MM-DD
        document.getElementById('current_date').value = currentDate;
         document.getElementById('decision-section').style.display = 'block';
    }
</script>

<script>
    function contabilizarRespuestas() {
        const formulario = document.getElementById('formulario-diagnostico');
        const preguntas = formulario.querySelectorAll('input[type="radio"]:checked');
        const resultados = {
            productos: { total: 47, si: 0, no: 0 },
            conocimientos: { total: 4, si: 0, no: 0 },
            actitudes: { total: 1, si: 0, no: 0 }
        };

        preguntas.forEach(pregunta => {
            const name = pregunta.name;
            const value = pregunta.value;

            if (name.match(/^q\d+$/)) {
                const numeroPregunta = parseInt(name.replace('q', ''), 10);

                if (numeroPregunta >= 1 && numeroPregunta <= 47) {
                    if (value === 'si') {
                        resultados.productos.si++;
                    } else if (value === 'no') {
                        resultados.productos.no++;
                    }
                } else if (numeroPregunta >= 48 && numeroPregunta <= 51) {
                    if (value === 'si') {
                        resultados.conocimientos.si++;
                    } else if (value === 'no') {
                        resultados.conocimientos.no++;
                    }
                } else if (numeroPregunta === 52) {
                    if (value === 'si') {
                        resultados.actitudes.si++;
                    } else if (value === 'no') {
                        resultados.actitudes.no++;
                    }
                }
            }
        });

        const tbody = document.querySelector('#resultados tbody');
        tbody.innerHTML = `
            <tr>
                <td>Productos</td>
                <td>${resultados.productos.total}</td>
                <td>${resultados.productos.si}</td>
                <td>${resultados.productos.no}</td>
                <td>${resultados.productos.si + resultados.productos.no}</td>
            </tr>
            <tr>
                <td>Conocimientos</td>
                <td>${resultados.conocimientos.total}</td>
                <td>${resultados.conocimientos.si}</td>
                <td>${resultados.conocimientos.no}</td>
                <td>${resultados.conocimientos.si + resultados.conocimientos.no}</td>
            </tr>
            <tr>
                <td>Actitudes</td>
                <td>${resultados.actitudes.total}</td>
                <td>${resultados.actitudes.si}</td>
                <td>${resultados.actitudes.no}</td>
                <td>${resultados.actitudes.si + resultados.actitudes.no}</td>
            </tr>
        `;

            document.getElementById('productos-total-input1').value = resultados.productos.total;
            document.getElementById('productos-si-input1').value = resultados.productos.si;
            document.getElementById('productos-no-input1').value = resultados.productos.no;
            document.getElementById('productos-suma-input1').value = resultados.productos.si + resultados.productos.no;

            document.getElementById('conocimientos-total-input1').value = resultados.conocimientos.total;
            document.getElementById('conocimientos-si-input1').value = resultados.conocimientos.si;
            document.getElementById('conocimientos-no-input1').value = resultados.conocimientos.no;
            document.getElementById('conocimientos-suma-input1').value = resultados.conocimientos.si + resultados.conocimientos.no;

            document.getElementById('actitudes-total-input1').value = resultados.actitudes.total;
            document.getElementById('actitudes-si-input1').value = resultados.actitudes.si;
            document.getElementById('actitudes-no-input1').value = resultados.actitudes.no;
            document.getElementById('actitudes-suma-input1').value = resultados.actitudes.si + resultados.actitudes.no;
    }
</script>
<script>
    function contabilizarRespuestas1() {
        const formulario = document.getElementById('formulario-diagnostico');
        const preguntas = formulario.querySelectorAll('input[type="radio"]:checked');
        const resultados = {
            productos: { total: 31, si: 0, no: 0 },
            conocimientos: { total: 2, si: 0, no: 0 }
        };

        preguntas.forEach(pregunta => {
            const name = pregunta.name;
            const value = pregunta.value;

            if (name.match(/^q\d+$/)) {
                const numeroPregunta = parseInt(name.replace('q', ''), 10);

                if (numeroPregunta >= 53 && numeroPregunta <= 83) {
                    if (value === 'si') {
                        resultados.productos.si++;
                    } else if (value === 'no') {
                        resultados.productos.no++;
                    }
                } else if (numeroPregunta >= 84 && numeroPregunta <= 85) {
                    if (value === 'si') {
                        resultados.conocimientos.si++;
                    } else if (value === 'no') {
                        resultados.conocimientos.no++;
                    }
                }
            }
        });

        const tbody = document.querySelector('#resultados1 tbody');
        tbody.innerHTML = `
            <tr>
                <td>Productos</td>
                <td>${resultados.productos.total}</td>
                <td>${resultados.productos.si}</td>
                <td>${resultados.productos.no}</td>
                <td>${resultados.productos.si + resultados.productos.no}</td>
            </tr>
            <tr>
                <td>Conocimientos</td>
                <td>${resultados.conocimientos.total}</td>
                <td>${resultados.conocimientos.si}</td>
                <td>${resultados.conocimientos.no}</td>
                <td>${resultados.conocimientos.si + resultados.conocimientos.no}</td>
            </tr>
        `;

            document.getElementById('productos-total-input2').value = resultados.productos.total;
            document.getElementById('productos-si-input2').value = resultados.productos.si;
            document.getElementById('productos-no-input2').value = resultados.productos.no;
            document.getElementById('productos-suma-input2').value = resultados.productos.si + resultados.productos.no;

            document.getElementById('conocimientos-total-input2').value = resultados.conocimientos.total;
            document.getElementById('conocimientos-si-input2').value = resultados.conocimientos.si;
            document.getElementById('conocimientos-no-input2').value = resultados.conocimientos.no;
            document.getElementById('conocimientos-suma-input2').value = resultados.conocimientos.si + resultados.conocimientos.no;
    }


</script>
<script>
    function contabilizarRespuestas2() {
        const formulario = document.getElementById('formulario-diagnostico');
        const preguntas = formulario.querySelectorAll('input[type="radio"]:checked');
        const resultados = { productos: { total: 60, si: 0, no: 0 } };

        preguntas.forEach(pregunta => {
            const name = pregunta.name;
            const value = pregunta.value;

            if (name.match(/^q\d+$/)) {
                const numeroPregunta = parseInt(name.replace('q', ''), 10);

                if (numeroPregunta >= 86 && numeroPregunta <= 145) {
                    if (value === 'si') {
                        resultados.productos.si++;
                    } else if (value === 'no') {
                        resultados.productos.no++;
                    }
                }
            }
        });

        const tbody = document.querySelector('#resultados2 tbody');
        tbody.innerHTML = `
            <tr>
                <td>Productos</td>
                <td>${resultados.productos.total}</td>
                <td>${resultados.productos.si}</td>
                <td>${resultados.productos.no}</td>
                <td>${resultados.productos.si + resultados.productos.no}</td>
            </tr>
        `;
        document.getElementById('productos-total-input3').value = resultados.productos.total;
            document.getElementById('productos-si-input3').value = resultados.productos.si;
            document.getElementById('productos-no-input3').value = resultados.productos.no;
            document.getElementById('productos-suma-input3').value = resultados.productos.si + resultados.productos.no;
    }
</script>


<script>
function calcularResultados3() {
    const formulario = document.getElementById('formulario-diagnostico');
    const preguntas = formulario.querySelectorAll('input[type="radio"]:checked');
    const totalPreguntas = 145; // Total de preguntas es 145
    let numSi = 0;
    let numNo = 0;

    preguntas.forEach(pregunta => {
        if (pregunta.value === 'si') {
            numSi++;
        } else if (pregunta.value === 'no') {
            numNo++;
        }
    });

    if (numSi + numNo !== totalPreguntas) {
        alert('Debe seleccionar respuestas.');
        return;
    }

    const porcentajeSi = (numSi / totalPreguntas) * 100;

    // Actualizar los campos ocultos con el porcentaje y números calculados
    document.getElementById('num-si-input').value = numSi;
    document.getElementById('num-no-input').value = numNo;
    document.getElementById('porcentaje-si-input').value = porcentajeSi.toFixed(2) + '%';

    // Mostrar los resultados en la página
    document.getElementById('num-si').textContent = numSi;
    document.getElementById('num-no').textContent = numNo;
    document.getElementById('suma-total').textContent = totalPreguntas;
    document.getElementById('porcentaje-si').textContent = porcentajeSi.toFixed(2) + '%';

    // Mostrar el mensaje de evaluación o asesoría
    const mensaje = document.getElementById('mensaje-evaluacion');
    let recomendacion = '';
    if (porcentajeSi >= 90) {
        mensaje.textContent = "Le recomendamos: EVALUARSE";
        mensaje.className = 'evaluarse';
        recomendacion = 'EVALUARSE';
    } else {
        mensaje.textContent = "Le recomendamos: ASESORARSE";
        mensaje.className = 'asesorarse';
        recomendacion = 'ASESORARSE';
    }
    mensaje.style.display = 'block';

    // Almacenar la recomendación en el input oculto
    document.getElementById('recomendacion-input').value = recomendacion;
}

function contabilizarYEnviar() {
    calcularResultados3();
    document.getElementById('formulario-diagnostico').submit();
}

document.getElementById('calcular-btn').addEventListener('click', contabilizarYEnviar);

</script>
<script>
    document.getElementById('formulario-diagnostico').addEventListener('submit', function(event) {
        event.preventDefault(); // Previene el envío automático del formulario

        // Primero contabilizamos las respuestas
        contabilizarTodasRespuestas2();

        // Enviar el formulario manualmente
        const form = event.target;
        const formData = new FormData(form);

        fetch(form.action, {
            method: form.method,
            body: formData,
            headers: {
                'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
            }
        }).then(response => {
            if (response.ok) {
                return response.blob(); // Obtiene la respuesta como blob
            } else {
                console.error('Error en el envío del formulario');
            }
        }).then(blob => {
            // Crea un objeto URL para el blob y lo descarga
            const url = window.URL.createObjectURL(blob);
            const a = document.createElement('a');
            a.href = url;
            a.download = 'Autodiagnostico.docx'; // Cambia esto al nombre del archivo que desees
            document.body.appendChild(a);
            a.click();
            a.remove();
            window.URL.revokeObjectURL(url); // Libera el objeto URL

            // Redirigir después de la descarga
            window.location.href = "{{ route('usuarios.con-diagnosticos') }}";
        }).catch(error => {
            console.error('Error:', error);
        });
    });

</script>



</body>
</html>
