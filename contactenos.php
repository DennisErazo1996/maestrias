<?php include_once('templates/head.php'); ?>
<title>Contáctenos | UNAG</title>
<?php include_once('templates/header.php'); ?>
<main>
    <div class="bg-bread" style="background-image: url('images/bg-bread4.jpg');">
        <div class="bread-glass"></div>
    </div>
    <div class="uk-container uk-margin-large-bottom">
        <h1 class="uk-heading-line uk-margin-large-bottom"><span>Contáctenos</span></h1>
        <div class="uk-grid uk-grid-match" data-uk-grid>
            <div class="uk-width-1-1 uk-width-1-2@s">
                <div class="fondo-verde texto-blanco uk-padding">
                    <div class="uk-margin-medium-bottom">
                        <h4 class="uk-margin-remove-bottom texto-verde-oscuro uk-text-bold">Nuestra ubicación</h4>
                        <p class="uk-margin-remove-top uk-margin-remove-bottom uk-text-left">Barrio El Espino, municipio de Catacamas, departamento de Olancho.</p>
                        <a href="https://goo.gl/maps/yTrTjt23apHLa64k6" target="_blank" class="uk-link-reset"><span class="uk-margin-small-right uk-icon" uk-icon="location"><svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="location"><path fill="none" stroke="#000" stroke-width="1.01" d="M10,0.5 C6.41,0.5 3.5,3.39 3.5,6.98 C3.5,11.83 10,19 10,19 C10,19 16.5,11.83 16.5,6.98 C16.5,3.39 13.59,0.5 10,0.5 L10,0.5 Z"></path><circle fill="none" stroke="#000" cx="10" cy="6.8" r="2.3"></circle></svg></span> Ver Google Maps</a>
                    </div>
                    
                    <div  class="uk-margin-medium-bottom">
                        <h4 class="uk-margin-remove-bottom texto-verde-oscuro uk-text-bold">Teléfono</h4>
                        <a class="uk-link-reset" href="tel:50427994133"><span class="uk-margin-small-right uk-icon" data-uk-icon="receiver"></span> +504 2799-4133</a>
                    </div>
                    
                    <div>
                        <h4 class="uk-margin-remove-bottom texto-verde-oscuro uk-text-bold">Correos</h4>
                        <a class="uk-link-reset" href="mailto:coordinacionmca@unag.edu.hn"><span class="uk-margin-small-right uk-icon" data-uk-icon="mail"></span> Maestría en Ciencias Agroalimentarias</a><br>
                        <a class="uk-link-reset" href="mailto:coordinacionmgpas@unag.edu.hn"><span class="uk-margin-small-right uk-icon" data-uk-icon="mail"></span> Maestría en Gestión de la Producción Animal Sostenible</a><br>
                        <a class="uk-link-reset" href="mailto:coordinacionmrnps@unag.edu.hn"><span class="uk-margin-small-right uk-icon" data-uk-icon="mail"></span> Maestría en Recursos Naturales y Producción Sostenible</a><br>
                        <a class="uk-link-reset" href="mailto:coordinacionmagro4_0@unag.edu.hn"><span class="uk-margin-small-right uk-icon" data-uk-icon="mail"></span> Máster en Agro 4.0</a><br>
                        <a class="uk-link-reset" href="mailto:coordinacionmabioagro@unag.edu.hn"><span class="uk-margin-small-right uk-icon" data-uk-icon="mail"></span> Máster en Biotecnología Agroalimentaria</a><br>
                        <a class="uk-link-reset" href="mailto:doctoradociagro@unag.edu.hn"><span class="uk-margin-small-right uk-icon" data-uk-icon="mail"></span> Doctorado en Ciencias Agrarias</a>
                    </div>
                </div>
            </div>
            <div class="uk-width-1-1 uk-width-expand@s">
                <div class="uk-margin-small-bottom">
                    <h4 class="texto-verde-oscuro uk-text-bold">Déjenos un mensaje</h4>
                </div>
                <div class="uk-margin-small-bottom">
                    <label class="uk-form-label" for="nombre">Nombre y apellido</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="nombre" type="text">
                    </div>
                </div>
                <div class="uk-margin-small-bottom uk-grid uk-grid-small uk-child-width-1-1 uk-child-width-1-2@s" data-uk-grid>
                    <div>
                        <label class="uk-form-label" for="correo">Correo electrónico</label>
                        <div class="uk-form-controls">
                            <input class="uk-input" id="correo" type="email">
                        </div>
                    </div>
                    <div>
                        <label class="uk-form-label" for="telefono">Teléfono o celular</label>
                        <div class="uk-form-controls">
                            <input class="uk-input" id="telefono" type="tel">
                        </div>
                    </div>
                </div>
                <div class="uk-margin-small-bottom">
                    <label class="uk-form-label" for="maestria">Estoy interesado(a) en recibir más información de la</label>
                    <div class="uk-form-controls">
                        <select class="uk-select" id="maestria">
                            <option value="x" selected disabled>Seleccionar</option>
                            <option value="Maestría en Ciencias Agroalimentarias">Maestría en Ciencias Agroalimentarias</option>
                            <option value="Maestría en Gestión de la Producción Animal Sostenible">Maestría en Gestión de la Producción Animal Sostenible</option>
                            <option value="Maestría en Recursos Naturales y Producción Sostenible">Maestría en Recursos Naturales y Producción Sostenible</option>
                            <option value="Máster en Agro 4.0">Máster en Agro 4.0</option>
                            <option value="Máster en Biotecnología Agroalimentaria">Máster en Biotecnología Agroalimentaria</option>
                            <option value="Doctorado en Ciencias Agrarias">Doctorado en Ciencias Agrarias</option>
                        </select>
                    </div>
                </div>
                <div class="uk-margin-small-bottom">
                    <label class="uk-form-label" for="mensaje">Mensaje</label>
                    <div class="uk-form-controls">
                        <textarea class="uk-textarea" id="mensaje"></textarea>
                    </div>
                </div>
                <div class="uk-margin-small-bottom"><div class="validacion"></div></div>
                <div class="uk-margin-small-bottom">
                    <button id="enviarMail" class="uk-button uk-button-default fondo-verde texto-blanco">Enviar</button>
                </div>
            </div>
        </div>
    </div>
</main>
<?php include_once('templates/footer.php'); ?>
<script src="scripts/validations-forms.js"></script>
<script src="scripts/contactenos.js"></script>
<?php include_once('templates/foot.php'); ?>