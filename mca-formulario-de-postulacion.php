<?php
/**
 * Descomentar la redirección cuando finalice el periodo de postulación
 * El 24 de septiembre ya no debe estar disponible este formulario
 */

//header('Location: maestria-en-ciencias-agroalimentarias');
?>
<?php include_once('templates/head.php'); ?>
<title>Formulario de postulación MCA | UNAG</title>
<?php include_once('templates/header.php'); ?>
<main>
    <div class="bg-bread" style="background-image: url('images/bg-bread7.jpg');">
        <div class="bread-glass"></div>
    </div>
    <div class="uk-container uk-container-small">
        <h1 class="uk-heading-line"><span>Formulario de postulación</span></h1>
        <h3 class="uk-heading-bullet uk-margin-remove-bottom uk-margin-small-top"><span>Maestría en Ciencias Agroalimentarias</span></h3>
        <p class="uk-margin-remove-top">Para postularse, por favor complete el siguiente formulario. Campos con * son requeridos.</p>

        <div class="uk-margin-large-bottom">
            <ul data-uk-accordion>
                <li class="uk-open">
                    <a class="uk-accordion-title uk-padding-small fondo-verde-claro texto-verde" href="#">DATOS PERSONALES</a>
                    <div class="uk-accordion-content uk-padding fondo-verde-claro">
                        <div class="uk-grid-small" data-uk-grid>
                            <div class="uk-width-1-1 uk-width-1-4@s">
                                <label class="uk-form-label" for="apellido_paterno">Primer apellido *</label>
                                <div class="uk-form-controls">
                                    <input id="apellido_paterno" class="uk-input" type="text">
                                </div>
                            </div>
                            <div class="uk-width-1-1 uk-width-1-4@s">
                                <label class="uk-form-label" for="apellido_materno">Segundo apellido *</label>
                                <div class="uk-form-controls">
                                    <input id="apellido_materno" class="uk-input" type="text">
                                </div>
                            </div>
                            <div class="uk-width-1-1 uk-width-1-2@s">
                                <label class="uk-form-label" for="nombres">Nombres *</label>
                                <div class="uk-form-controls">
                                    <input id="nombres" class="uk-input" type="text">
                                </div>
                            </div>
                            <div class="uk-width-1-1 uk-width-1-4@s">
                                <label class="uk-form-label" for="identidad">Identidad *</label>
                                <div class="uk-form-controls">
                                    <input id="identidad" class="uk-input" type="tel" pattern="[0-9\-]+">
                                </div>
                            </div>
                            <div class="uk-width-1-1 uk-width-1-4@s">
                                <label class="uk-form-label" for="fnac">Fecha de nacimiento *</label>
                                <div class="uk-form-controls">
                                    <input id="fnac" class="uk-input" type="date">
                                </div>
                            </div>
                            <div class="uk-width-1-1 uk-width-1-4@s">
                                <label class="uk-form-label" for="edad">Edad *</label>
                                <div class="uk-form-controls">
                                    <input id="edad" class="uk-input" type="number">
                                </div>
                            </div>
                            <div class="uk-width-1-1 uk-width-1-4@s">
                                <label class="uk-form-label" for="genero">Género *</label>
                                <div class="uk-form-controls">
                                    <select id="genero" class="uk-select">
                                        <option disabled selected>Seleccionar</option>
                                        <option value="Femenino">Femenino</option>
                                        <option value="Masculino">Masculino</option>
                                    </select>
                                </div>
                            </div>
                            <div class="uk-width-1-1 uk-width-1-4@s">
                                <label class="uk-form-label" for="pais">País *</label>
                                <div class="uk-form-controls">
                                    <input id="pais" class="uk-input" type="text">
                                </div>
                            </div>
                            <div class="uk-width-1-1 uk-width-1-4@s">
                                <label class="uk-form-label" for="ciudad">Ciudad *</label>
                                <div class="uk-form-controls">
                                    <input id="ciudad" class="uk-input" type="text">
                                </div>
                            </div>
                            <div class="uk-width-1-1 uk-width-1-2@s">
                                <label class="uk-form-label" for="direccion">Dirección *</label>
                                <div class="uk-form-controls">
                                    <input id="direccion" class="uk-input" type="text">
                                </div>
                            </div>
                            <div class="uk-width-1-1 uk-width-1-4@s">
                                <label class="uk-form-label" for="telefono">Teléfono *</label>
                                <div class="uk-form-controls">
                                    <input id="telefono" class="uk-input" type="tel">
                                </div>
                            </div>
                            <div class="uk-width-1-1 uk-width-1-4@s">
                                <label class="uk-form-label" for="celular">Celular *</label>
                                <div class="uk-form-controls">
                                    <input id="celular" class="uk-input" type="tel">
                                </div>
                            </div>
                            <div class="uk-width-1-1 uk-width-1-2@s">
                                <label class="uk-form-label" for="correo">Correo electrónico *</label>
                                <div class="uk-form-controls">
                                    <input id="correo" class="uk-input" type="email">
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <a class="uk-accordion-title uk-padding-small fondo-verde-claro texto-verde" href="#">ANTECEDENTES ACADÉMICOS</a>
                    <div class="uk-accordion-content uk-padding fondo-verde-claro">
                        <div class="uk-grid-small" data-uk-grid>
                            <div class="uk-width-1-1 uk-width-1-2@s">
                                <label class="uk-form-label" for="universidad1">Universidad *</label>
                                <div class="uk-form-controls">
                                    <input id="universidad1" class="uk-input" type="text">
                                </div>
                            </div>
                            <div class="uk-width-1-1 uk-width-1-2@s">
                                <label class="uk-form-label" for="lugar1">País *</label>
                                <div class="uk-form-controls">
                                    <input id="lugar1" class="uk-input" type="text">
                                </div>
                            </div>
                            <div class="uk-width-1-1 uk-width-1-2@s">
                                <label class="uk-form-label" for="carrera1">Carrera *</label>
                                <div class="uk-form-controls">
                                    <input id="carrera1" class="uk-input" type="text">
                                </div>
                            </div>
                            <div class="uk-width-1-2 uk-width-1-4@s">
                                <label class="uk-form-label" for="anio_inicio1">Año de inicio *</label>
                                <div class="uk-form-controls">
                                    <input id="anio_inicio1" class="uk-input" type="number">
                                </div>
                            </div>
                            <div class="uk-width-1-2 uk-width-1-4@s">
                                <label class="uk-form-label" for="anio_termino1">Año de finalización *</label>
                                <div class="uk-form-controls">
                                    <input id="anio_termino1" class="uk-input" type="number">
                                </div>
                            </div>
                            <div class="uk-width-1-1">
                                <label class="uk-form-label" for="titulo1">Título obtenido *</label>
                                <div class="uk-form-controls">
                                    <input id="titulo1" class="uk-input" type="text">
                                </div>
                            </div>
                            <div class="uk-width-1-1">
                                <label class="uk-form-label" for="tesis1">Título de la Tesis o Trabajo de graduación *</label>
                                <div class="uk-form-controls">
                                    <textarea id="tesis1" class="uk-textarea" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="uk-width-1-1">
                                <h5 class="uk-heading-bullet uk-margin-large-top"><span>Si tiene otro título, indíquelo aquí</span></h5>
                            </div>
                            <div class="uk-width-1-1 uk-width-1-2@s">
                                <label class="uk-form-label" for="universidad2">Universidad</label>
                                <div class="uk-form-controls">
                                    <input id="universidad2" class="uk-input" type="text">
                                </div>
                            </div>
                            <div class="uk-width-1-1 uk-width-1-2@s">
                                <label class="uk-form-label" for="lugar2">País</label>
                                <div class="uk-form-controls">
                                    <input id="lugar2" class="uk-input" type="text">
                                </div>
                            </div>
                            <div class="uk-width-1-1 uk-width-1-2@s">
                                <label class="uk-form-label" for="carrera2">Carrera</label>
                                <div class="uk-form-controls">
                                    <input id="carrera2" class="uk-input" type="text">
                                </div>
                            </div>
                            <div class="uk-width-1-2 uk-width-1-4@s">
                                <label class="uk-form-label" for="anio_inicio2">Año inicio</label>
                                <div class="uk-form-controls">
                                    <input id="anio_inicio2" class="uk-input" type="number">
                                </div>
                            </div>
                            <div class="uk-width-1-2 uk-width-1-4@s">
                                <label class="uk-form-label" for="anio_termino2">Año término</label>
                                <div class="uk-form-controls">
                                    <input id="anio_termino2" class="uk-input" type="number">
                                </div>
                            </div>
                            <div class="uk-width-1-1">
                                <label class="uk-form-label" for="titulo2">Título obtenido</label>
                                <div class="uk-form-controls">
                                    <input id="titulo2" class="uk-input" type="text">
                                </div>
                            </div>
                            <div class="uk-width-1-1">
                                <label class="uk-form-label" for="tesis2">Tema de Tesis o Trabajo de graduación</label>
                                <div class="uk-form-controls">
                                    <textarea id="tesis2" class="uk-textarea" rows="5"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <a class="uk-accordion-title uk-padding-small fondo-verde-claro texto-verde" href="#">ANTECEDENTES PROFESIONALES</a>
                    <div class="uk-accordion-content uk-padding fondo-verde-claro">
                        <h5 class="uk-heading-bullet"><span>Instituciones en las que ha trabajado recientemente</span></h5>
                        <div class="uk-overflow-auto">
                            <table class="uk-table uk-table-small uk-table-divider">
                                <thead>
                                    <tr>
                                        <th>Institución</th>
                                        <th>Localidad</th>
                                        <th>Cargo</th>
                                        <th>Desde</th>
                                        <th>Hasta</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><input id="institucion1" class="uk-input" type="text"></td>
                                        <td><input id="localidad1" class="uk-input" type="text"></td>
                                        <td><input id="cargo1" class="uk-input" type="text"></td>
                                        <td><input id="desde1" class="uk-input" type="number"></td>
                                        <td><input id="hasta1" class="uk-input" type="number"></td>
                                    </tr>
                                    <tr>
                                        <td><input id="institucion2" class="uk-input" type="text"></td>
                                        <td><input id="localidad2" class="uk-input" type="text"></td>
                                        <td><input id="cargo2" class="uk-input" type="text"></td>
                                        <td><input id="desde2" class="uk-input" type="number"></td>
                                        <td><input id="hasta2" class="uk-input" type="number"></td>
                                    </tr>
                                    <tr>
                                        <td><input id="institucion3" class="uk-input" type="text"></td>
                                        <td><input id="localidad3" class="uk-input" type="text"></td>
                                        <td><input id="cargo3" class="uk-input" type="text"></td>
                                        <td><input id="desde3" class="uk-input" type="number"></td>
                                        <td><input id="hasta3" class="uk-input" type="number"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <h5 class="uk-heading-bullet"><span>Institución o empresa en la que trabaja actualmente</span></h5>
                        <div class="uk-grid-small" data-uk-grid>
                            <div class="uk-width-1-1 uk-width-2-3@s">
                                <label class="uk-form-label" for="institucion">Institución o empresa</label>
                                <div class="uk-form-controls">
                                    <input id="institucion" class="uk-input" type="text">
                                </div>
                            </div>
                            <div class="uk-width-1-1 uk-width-1-3@s">
                                <label class="uk-form-label" for="cargo">Cargo</label>
                                <div class="uk-form-controls">
                                    <input id="cargo" class="uk-input" type="text">
                                </div>
                            </div>
                            <div class="uk-width-1-1 uk-width-1-4@s">
                                <label class="uk-form-label" for="pais_trabajo">País</label>
                                <div class="uk-form-controls">
                                    <input id="pais_trabajo" class="uk-input" type="text">
                                </div>
                            </div>
                            <div class="uk-width-1-1 uk-width-1-4@s">
                                <label class="uk-form-label" for="ciudad_trabajo">Ciudad</label>
                                <div class="uk-form-controls">
                                    <input id="ciudad_trabajo" class="uk-input" type="text">
                                </div>
                            </div>
                            <div class="uk-width-1-1 uk-width-1-4@s">
                                <label class="uk-form-label" for="telefono_trabajo">Teléfono</label>
                                <div class="uk-form-controls">
                                    <input id="telefono_trabajo" class="uk-input" type="tel">
                                </div>
                            </div>
                            <div class="uk-width-1-1 uk-width-1-4@s">
                                <label class="uk-form-label" for="correo_trabajo">Correo electrónico</label>
                                <div class="uk-form-controls">
                                    <input id="correo_trabajo" class="uk-input" type="email">
                                </div>
                            </div>
                        </div>
                        <h5 class="uk-heading-bullet"><span>Referencias</span></h5>
                        <div class="uk-overflow-auto">
                            <table class="uk-table uk-table-small uk-table-divider">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Cargo</th>
                                        <th>Correo</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><input id="nombreR1" class="uk-input" type="text"></td>
                                        <td><input id="cargoR1" class="uk-input" type="text"></td>
                                        <td><input id="correoR1" class="uk-input" type="email"></td>
                                    </tr>
                                    <tr>
                                        <td><input id="nombreR2" class="uk-input" type="text"></td>
                                        <td><input id="cargoR2" class="uk-input" type="text"></td>
                                        <td><input id="correoR2" class="uk-input" type="email"></td>
                                    </tr>
                                    <tr>
                                        <td><input id="nombreR3" class="uk-input" type="text"></td>
                                        <td><input id="cargoR3" class="uk-input" type="text"></td>
                                        <td><input id="correoR3" class="uk-input" type="email"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </li>
                <li>
                    <a class="uk-accordion-title uk-padding-small fondo-verde-claro texto-verde" href="#">OTROS DATOS</a>
                    <div class="uk-accordion-content uk-padding fondo-verde-claro">
                        <h5 class="uk-heading-bullet"><span>Idiomas *</span></h5>
                        <div class="uk-grid-small uk-child-width-1-2 uk-child-width-1-5@s" data-uk-grid>
                            <div>
                                <label class="uk-form-label" for="espaniol">Español</label>
                                <div class="uk-form-controls">
                                    <select id="espaniol" class="uk-select">
                                        <option selected>No</option>
                                        <option value="Nativo">Nativo</option>
                                        <option value="Básico">Básico</option>
                                        <option value="Intermedio">Intermedio</option>
                                        <option value="Avanzado">Avanzado</option>
                                    </select>
                                </div>
                            </div>
                            <div>
                                <label class="uk-form-label" for="ingles">Inglés</label>
                                <div class="uk-form-controls">
                                    <select id="ingles" class="uk-select">
                                        <option selected>No</option>
                                        <option value="Nativo">Nativo</option>
                                        <option value="Básico">Básico</option>
                                        <option value="Intermedio">Intermedio</option>
                                        <option value="Avanzado">Avanzado</option>
                                    </select>
                                </div>
                            </div>
                            <div>
                                <label class="uk-form-label" for="frances">Francés</label>
                                <div class="uk-form-controls">
                                    <select id="frances" class="uk-select">
                                        <option selected>No</option>
                                        <option value="Nativo">Nativo</option>
                                        <option value="Básico">Básico</option>
                                        <option value="Intermedio">Intermedio</option>
                                        <option value="Avanzado">Avanzado</option>
                                    </select>
                                </div>
                            </div>
                            <div>
                                <label class="uk-form-label" for="aleman">Alemán</label>
                                <div class="uk-form-controls">
                                    <select id="aleman" class="uk-select">
                                        <option selected>No</option>
                                        <option value="Nativo">Nativo</option>
                                        <option value="Básico">Básico</option>
                                        <option value="Intermedio">Intermedio</option>
                                        <option value="Avanzado">Avanzado</option>
                                    </select>
                                </div>
                            </div>
                            <div>
                                <label class="uk-form-label" for="portugues">Portugués</label>
                                <div class="uk-form-controls">
                                    <select id="portugues" class="uk-select">
                                        <option selected>No</option>
                                        <option value="Nativo">Nativo</option>
                                        <option value="Básico">Básico</option>
                                        <option value="Intermedio">Intermedio</option>
                                        <option value="Avanzado">Avanzado</option>
                                    </select>
                                </div>
                            </div>
                            <div class="uk-hidden@s"></div>
                            <div class="uk-width-1-2 uk-width-1-5@s">
                                <label class="uk-form-label" for="otro_idioma">Otro idioma</label>
                                <div class="uk-form-controls">
                                    <input id="otro_idioma" class="uk-input" type="text" value="No">
                                </div>
                            </div>
                            <div class="uk-width-1-2 uk-width-1-5@s">
                                <label class="uk-form-label" for="nivel_otro_idioma">Nivel</label>
                                <div class="uk-form-controls">
                                    <select id="nivel_otro_idioma" class="uk-select">
                                        <option selected>No</option>
                                        <option value="Nativo">Nativo</option>
                                        <option value="Básico">Básico</option>
                                        <option value="Intermedio">Intermedio</option>
                                        <option value="Avanzado">Avanzado</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <h5 class="uk-heading-bullet"><span>Fuente de financiamiento para cursar la Maestría *</span></h5>
                        <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
                            <label><input class="uk-radio" type="radio" name="fuente" value="Propio"> Propio</label>
                            <label><input class="uk-radio" type="radio" name="fuente" value="Institución o Empresa"> Institución o Empresa</label>
                            <label><input class="uk-radio" type="radio" name="fuente" value="Beca"> Beca</label>
                        </div>
                        <h5 class="uk-heading-bullet"><span>Datos Complementarios *</span></h5>
                        <div class="uk-child-width-1-1" data-uk-grid>
                            <div>
                                <label class="uk-form-label" for="p1">¿Por qué ha decidido estudiar la Maestría en Ciencias Agroalimentarias?</label>
                                <div class="uk-form-controls">
                                    <textarea id="p1" class="uk-textarea" rows="5"></textarea>
                                </div>
                            </div>
                            <div>
                                <div class="uk-grid-small uk-child-width-1-1 uk-child-width-1-2@s" data-uk-grid>
                                    <div>
                                        <label class="uk-form-label" for="p2">¿Qué orientación de la Maestría le interesa cursar?</label>
                                        <div class="uk-form-controls">
                                            <select id="p2" class="uk-select">
                                                <option disabled selected>Seleccionar</option>
                                                <option value="Agroindustria">Agroindustria</option>
                                                <option value="Agronegocios">Agronegocios</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div>
                                        <label class="uk-form-label" for="p3">¿Qué tipo de Maestría le interesa cursar?</label>
                                        <div class="uk-form-controls">
                                            <select id="p3" class="uk-select">
                                                <option disabled selected>Seleccionar</option>
                                                <option value="Académica">Académica</option>
                                                <option value="Profesionalizante">Profesionalizante</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <label class="uk-form-label" for="p4">Resuma brevemente lo que usted espera del programa de Maestría en Ciencias Agroalimentarias.</label>
                                <div class="uk-form-controls">
                                    <textarea id="p4" class="uk-textarea" rows="5"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <a class="uk-accordion-title uk-padding-small fondo-verde-claro texto-verde" href="#">SUBIR DOCUMENTO PDF</a>
                    <div class="uk-accordion-content uk-padding fondo-verde-claro">
                        <h5 class="uk-heading-bullet uk-margin-remove-bottom"><span>Instrucciones</span></h5>
                        <p class="uk-margin-remove-top">Por favor agregue un sólo documento en formato PDF que contenga lo siguiente:</p>
                        <ul class="uk-list uk-list-square">
                            <li>Solicitud escrita de admisión al programa</li>
                            <li>Copia de título</li>
                            <li>Certificado de calificaciones</li>
                            <li>Ranking de egreso</li>
                            <li>Copia del documento de identidad</li>
                            <li>Hoja de vida</li>
                        </ul>
                        <p class="uk-margin-remove-top">Peso máximo del documento: 5 MB</p>
                        <div class="uk-margin">
                            <div class="uk-grid-small" data-uk-grid>
                                <div>
                                    <div data-uk-form-custom>
                                        <input id="pdf" type="file" accept="application/pdf">
                                        <button class="uk-button uk-button-default" type="button" tabindex="-1">Seleccionar</button>
                                    </div>
                                </div>
                                <div>
                                    <div id="pdfName"></div>
                                </div>
                            </div>

                            <!-- <div data-uk-form-custom="target: true">
                                <input id="pdf" type="file" accept="application/pdf">
                                <input class="uk-input uk-form-width-medium" type="text" placeholder="Seleccionar archivo" disabled>
                            </div>
                            <button class="uk-button uk-button-default">Seleccionar</button> -->
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div id="validacion" class="validacion uk-text-center"></div>
        <p class="uk-text-center uk-margin-large-bottom">
            <a id="postularme" href="#" target="_blank" class="pulseBtn">Enviar postulación</a>
        </p>
    </div>
</main>
<?php include_once('templates/footer.php'); ?>
<script src="scripts/validations-forms.js"></script>
<script src="scripts/mca-postulacion-v1.js"></script>
<?php include_once('templates/foot.php'); ?>