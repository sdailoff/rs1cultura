<?php include('../layout/header.php'); ?>
<div class="container jumbotron_body">
    <div class="col-xs-12 text-center">
        <h4>Formulario de carga de información en los puntos de testeo de la RS I</h4>
    </div>
</div>
<div class="overlay"></div>
</section>
<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
<section class="container">
    <main class="container g-12">
        <form class="needs-validation" novalidate>
            <section class="row" style="border-bottom: 2px solid #dbdbdb; padding-top:1.5em; padding-bottom:1.5em;">
                <h4 class="mb-3">ESTABLECIMIENTO</h4>
                <div class="col-md-4 mb-3">
                    <label for="place" class="form-label">Lugar</label>
                    <input type="text" class="form-control" id="place" placeholder="" value="Bahía Blanca" required>
                    <div class="invalid-feedback">
                        Requerido.
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <label for="establishment" class="form-label">Establecimiento</label>
                    <select class="form-select" id="establishment" required>
                        <option value="">Elegir punto</option>
                        <option>CPA</option>
                        <option>Puerto</option>
                    </select>
                    <div class="invalid-feedback">
                        Seleccione un establecimiento válido.
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="date" class="form-label">Fecha</label>
                    <input type="date" style="text-align: center;" class="form-control" id="date" placeholder="" value="" required>
                    <div class="invalid-feedback">
                        Requerido.
                    </div>
                </div>
            </section>

            <section class="row" style="border-bottom: 2px solid #dbdbdb; padding-top:1.5em; padding-bottom:1.5em;">
                <h4 class="mb-3">IDENTIFICACIÓN DE CASO</h4>
                <div class="col-md-6 mb-3">
                    <label for="firstName" class="form-label">Apellido y nombre</label>
                    <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                    <div class="invalid-feedback">
                        Requerido.
                    </div>
                </div>

                <div class="col-md-3 mb-3">
                    <label for="lastName" class="form-label">DNI</label>
                    <input type="number" class="form-control" id="lastName" placeholder="" value="" required>
                    <div class="invalid-feedback">
                        Requerido.
                    </div>
                </div>

                <div class="col-md-3 mb-3">
                    <label for="nationality" class="form-label">Nacionalidad</label>
                    <input type="text" class="form-control" id="nationality" placeholder="" value="" required>
                    <div class="invalid-feedback">
                        Requerido.
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="gender" class="form-label">Género</label>
                    <select class="form-select" id="gender" required>
                        <option value="">Elegir género</option>
                        <option>Femenino</option>
                        <option>Masculino</option>
                        <option>No binarie</option>
                        <option>Otro género</option>
                    </select>
                    <div class="invalid-feedback">
                        Requerido.
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <label for="dateBirth" class="form-label">Fecha de nacimiento</label>
                    <input type="date" style="text-align: center;" class="form-control" id="dateBirth" placeholder="" value="" required>
                    <div class="invalid-feedback">
                        Requerido.
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <label for="socialWork" class="form-label">Obra social</label>
                    <select class="form-select" id="socialWork" required>
                        <option value="">Elegir cobertura</option>
                        <option>Sin cobertura</option>
                        <option>IOMA</option>
                        <option>Otra OOSS del Estado (PAMI, IOSFA, etc.)</option>
                        <option>Otra cobertura (OOSS, prepaga, etc.)</option>
                    </select>
                    <div class="invalid-feedback">
                        Requerido.
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="address" class="form-label">Dirección</label>
                    <input type="text" class="form-control" id="address" placeholder="" value="" required>
                    <div class="invalid-feedback">
                        Requerido.
                    </div>
                </div>

                <div class="col-md-3 mb-3">
                    <label for="location" class="form-label">Localidad</label>
                    <input type="text" class="form-control" id="location" placeholder="" value="" required>
                    <div class="invalid-feedback">
                        Requerido.
                    </div>
                </div>

                <div class="col-md-3 mb-3">
                    <label for="postalCode" class="form-label">CP</label>
                    <input type="number" class="form-control" id="postalCode" placeholder="" value="" required>
                    <div class="invalid-feedback">
                        Requerido.
                    </div>

                </div>
                <div class="col-md-6 mb-3">
                    <label for="phone" class="form-label">Número de teléfono</label>
                    <div class="input-group has-validation">
                        <span class="input-group-text">+54 9</span>
                        <input type="number" class="form-control" id="phone" placeholder="SIN 0, NI 15">
                        <div class="invalid-feedback">
                            Requerido.
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="email" class="form-label">Correo electrónico <span class="text-muted">(Preferentemente)</span></label>
                    <input type="email" class="form-control" id="email" placeholder="you@example.com">
                    <div class="invalid-feedback">
                        Requerido.
                    </div>
                </div>
            </section>
            <section class="row" style="border-bottom: 2px solid #dbdbdb; padding-top:1.5em; padding-bottom:1.5em;">
                <h4 class="mb-3">CLASIFICACIÓN</h4>

                <div class="col-md-2 form-check mb-3">
                    <input id="suspicious" name="caseClassification" type="radio" class="form-check-input" required>
                    <label class="form-check-label" for="suspicious">Caso sospechoso<br>(Sintomático)</label>
                </div>
                <div class="col-md-2 form-check mb-3">
                    <input id="clinic" name="caseClassification" type="radio" class="form-check-input" required>
                    <label class="form-check-label" for="clinic">Criterio clínico <br> (Anosmia)</label>
                </div>

                <div class="col-md-2 form-check mb-3">
                    <input id="epidemiological" name="caseClassification" type="radio" class="form-check-input" required>
                    <label class="form-check-label" for="epidemiological">Criterio epidemiológico (Contacto Estrecho)</label>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="col-md-3">
                        <input id="asymptomaticR" name="caseClassification" type="radio" class="form-check-input" required>
                        <label class="form-check-label" for="asymptomaticR">Asintomáticx</label>    
                    </div>
                    <div class="col-md-9">
                        <select class="form-select" id="asymptomatic">
                            <option value="">Elegir tipo</option>
                            <option>Derivado CeTeC</option>
                            <option>Viajerx</option>
                            <option>Otro tipo</option>
                        </select>
                        <div class="invalid-feedback">
                            Requerido.
                        </div>

                    </div>


                </div>


                <h5 class="mb-3">Si corresponde, indicar:</h5>
                <div class="col-md-3">
                    <label for="dateInitSymptoms" class="form-label">Fecha de inicio <br> de síntomas</label>
                    <input type="date" style="text-align: center;" class="form-control" id="dateInitSymptoms" placeholder="" value="">
                    <div class="invalid-feedback">
                        Requerido.
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="dateLastContact" class="form-label">Fecha de último <br> contacto estrecho</label>
                    <input type="date" style="text-align: center;" class="form-control" id="dateLastContact" placeholder="" value="">
                    <div class="invalid-feedback">
                        Requerido.
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="firstCaseData" class="form-label">Nombre y/o DNI de la <br> persona caso índice</label>
                    <input type="text" class="form-control" id="firstCaseData" placeholder="" value="">
                    <div class="invalid-feedback">
                        Requerido.
                    </div>
                </div>
            </section>
            <section class="row" style="border-bottom: 2px solid #dbdbdb; padding-top:1.5em; padding-bottom:1.5em;">
                <h4 class="mb-3">INFORMACIÓN CLÍNICA</h4>

                <div class="row col-md-12">
                    <h4 class="mb-3">Vacunación COVID</h4>
                        <div class="col-md-3">
                        <label for="firstVaccineLab" class="form-label">Vacuna 1° Dosis</label>
                        <select class="form-select" id="firstVaccineLab" required>
                            <option value="">Elegir vacuna</option>
                            <option>No vacunadx/Pendiente</option>
                            <option>Sputnik V</option>
                            <option>Astrazeneca/COVISHIELD</option>
                            <option>Sinopharm</option>
                            <option>Moderna</option>
                            <option>CanSino</option>
                            <option>Pfizer</option>
                        </select>
                        <div class="invalid-feedback">
                            Requerido.
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="secondVaccineLab" class="form-label">Vacuna 2° Dosis</label>
                        <select class="form-select" id="secondVaccineLab" required>
                            <option value="">Elegir vacuna</option>
                            <option>No vacunadx/Pendiente</option>
                            <option>Sputnik V</option>
                            <option>Astrazeneca/COVISHIELD</option>
                            <option>Sinopharm</option>
                            <option>Moderna</option>
                            <option>CanSino</option>
                            <option>Pfizer</option>
                        </select>
                        <div class="invalid-feedback">
                            Requerido.
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="enrolled" class="form-label">¿Inscripto en campaña?</label>
                        <select class="form-select" id="enrolled">
                            <option value="">Seleccione</option>
                            <option>Si</option>
                            <option>No</option>
                        </select>
                        <div class="invalid-feedback">
                            Requerido.
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <label for="dateLastDose" class="form-label">Fecha de última dosis</label>
                        <input type="date" style="text-align: center;" class="form-control" id="dateLastDose" placeholder="" value="">
                        <div class="invalid-feedback">
                            Requerido.
                        </div>
                    </div>
                </div>

                <div class="row col-md-12 mt-4">
                    <h4 class="mb-3">Síntomas</h4>
                    <div class="col-md-3 form-check">
                        <input id="fewFever" name="symptoms" type="checkbox" class="form-check-input">
                        <label class="form-check-label" for="fewFever">Fiebre menor a 38°</label>
                    </div>
                    <div class="col-md-3 form-check">
                        <input id="cough" name="symptoms" type="checkbox" class="form-check-input">
                        <label class="form-check-label" for="cough">Tos</label>
                    </div>
                    <div class="col-md-3 form-check">
                        <input id="anosmia" name="symptoms" type="checkbox" class="form-check-input">
                        <label class="form-check-label" for="anosmia">Anosmia</label>
                    </div>
                    <div class="col-md-3 form-check">
                        <input id="vomits" name="symptoms" type="checkbox" class="form-check-input">
                        <label class="form-check-label" for="vomits">Vómitos</label>
                    </div>

                    <div class="col-md-3 form-check">
                        <input id="hightFever" name="symptoms" type="checkbox" class="form-check-input">
                        <label class="form-check-label" for="hightFever">Fiebre mayor a 38°</label>
                    </div>
                    <div class="col-md-3 form-check">
                        <input id="odynophagia" name="symptoms" type="checkbox" class="form-check-input">
                        <label class="form-check-label" for="odynophagia">Odinofagia</label>
                    </div>
                    <div class="col-md-3 form-check">
                        <input id="dysgeusia" name="symptoms" type="checkbox" class="form-check-input">
                        <label class="form-check-label" for="dysgeusia">Disgeusia</label>
                    </div>
                    <div class="col-md-3 form-check">
                        <input id="dyspnoea" name="symptoms" type="checkbox" class="form-check-input">
                        <label class="form-check-label" for="dyspnoea">Disnea</label>
                    </div>

                    <div class="col-md-3 form-check">
                        <input id="headache" name="symptoms" type="checkbox" class="form-check-input">
                        <label class="form-check-label" for="headache">Cefalea</label>
                    </div>
                    <div class="col-md-3 form-check">
                        <input id="myalgia" name="symptoms" type="checkbox" class="form-check-input">
                        <label class="form-check-label" for="myalgia">Mialgias</label>
                    </div>
                    <div class="col-md-3 form-check">
                        <input id="diarrhea" name="symptoms" type="checkbox" class="form-check-input">
                        <label class="form-check-label" for="diarrhea">Diarrea</label>
                    </div>
                    <div class="col-md-3 form-check">
                        <input id="rhinitis" name="symptoms" type="checkbox" class="form-check-input">
                        <label class="form-check-label" for="rhinitis">Rinitis/Congestión</label>
                    </div>
                    <div class="col-md-12 mt-3">
                        <div class="input-group has-validation">
                            <span class="input-group-text" for="otherSymptoms">Otros</span>
                            <input type="text" class="form-control" id="otherSymptoms" placeholder="Otros síntomas">
                        </div>
                    </div>
                </div>

                <div class="row col-md-12 mt-4">
                    <h4 class="mb-3">Condiciones previas / Co-morbilidades</h4>
                    <div class="row mb-3">
                        <div class="col-md-3 form-check">
                            <input id="pregnant" name="comorbidities" type="checkbox" class="form-check-input">
                            <label class="form-check-label" for="pregnant">Gestante</label>
                        </div>
                        <div class="col-md-3 form-check">
                            <input id="puerperal" name="comorbidities" type="checkbox" class="form-check-input">
                            <label class="form-check-label" for="puerperal">Puerperio</label>
                        </div>
                    </div>

                    <div class="col-md-3 form-check">
                        <input id="obesity" name="comorbidities" type="checkbox" class="form-check-input">
                        <label class="form-check-label" for="obesity">Obesidad /SP</label>
                    </div>
                    <div class="col-md-3 form-check">
                        <input id="asthma" name="comorbidities" type="checkbox" class="form-check-input">
                        <label class="form-check-label" for="asthma">Asma</label>
                    </div>
                    <div class="col-md-3 form-check">
                        <input id="heartFailure" name="comorbidities" type="checkbox" class="form-check-input">
                        <label class="form-check-label" for="heartFailure">Insuf. Cardíaca</label>
                    </div>
                    <div class="col-md-3 form-check">
                        <input id="liverDisease" name="comorbidities" type="checkbox" class="form-check-input">
                        <label class="form-check-label" for="liverDisease">Enf. Hepática</label>
                    </div>

                    <div class="col-md-3 form-check">
                        <input id="FAH" name="comorbidities" type="checkbox" class="form-check-input">
                        <label class="form-check-label" for="FAH">HTA</label>
                    </div>
                    <div class="col-md-3 form-check">
                        <input id="COPD" name="comorbidities" type="checkbox" class="form-check-input">
                        <label class="form-check-label" for="COPD">EPOC</label>
                    </div>
                    <div class="col-md-3 form-check">
                        <input id="renalInsufficiency" name="comorbidities" type="checkbox" class="form-check-input">
                        <label class="form-check-label" for="renalInsufficiency">Insuf. Renal</label>
                    </div>
                    <div class="col-md-3 form-check">
                        <input id="neurologicalDisease" name="comorbidities" type="checkbox" class="form-check-input">
                        <label class="form-check-label" for="neurologicalDisease">Enf. Neurológica</label>
                    </div>

                    <div class="col-md-3 form-check">
                        <input id="diabetes" name="comorbidities" type="checkbox" class="form-check-input">
                        <label class="form-check-label" for="diabetes">Diabetes</label>
                    </div>
                    <div class="col-md-3 form-check">
                        <input id="smoker" name="comorbidities" type="checkbox" class="form-check-input">
                        <label class="form-check-label" for="smoker">Fumador</label>
                    </div>
                    <div class="col-md-3 form-check">
                        <input id="oncologicalDisease" name="comorbidities" type="checkbox" class="form-check-input">
                        <label class="form-check-label" for="oncologicalDisease">Enf. Oncológica</label>
                    </div>
                    <div class="col-md-3 form-check">
                        <input id="immunosuppression" name="comorbidities" type="checkbox" class="form-check-input">
                        <label class="form-check-label" for="immunosuppression">Inmunosupresión</label>
                    </div>
                    <div class="col-md-12 mt-3">
                        <div class="input-group has-validation">
                            <span class="input-group-text">Otras</span>
                            <input type="text" class="form-control" id="otherDisease" placeholder="Otras enfermerdades">
                        </div>
                    </div>
                </div>
            </section>
            <section class="row" style="border-bottom: 2px solid #dbdbdb; padding-top:1.5em; padding-bottom:1.5em;">
                <h4 class="mb-3">CONTACTOS ESTRECHOS (Personas con las que estuvo en contacto desde 48hs. antes del inicio de los síntomas)</h4>
                <h5 class="mb-3">Priorizar no convivientes de riesgo.</h5>

                <div class="col-sm-6 mb-1">
                    <label for="firstName" class="form-label">Apellido y nombre</label>
                    <input type="text" class="form-control" id="nameCC1" placeholder="Nombre 1° contacto estrecho" value="">
                </div>
                <div class="col-sm-3 mb-1">
                    <label for="lastName" class="form-label">DNI</label>
                    <input type="number" class="form-control" id="documentCC1" placeholder="DNI 1° contacto estrecho" value="">
                </div>
                <div class="col-sm-3 mb-1">
                    <label for="lastName" class="form-label">Teléfono</label>
                    <input type="number" class="form-control" id="phoneCC1" placeholder="Teléfono 1° contacto estrecho" value="">
                </div>
                <div class="col-sm-6 mb-1">
                    <input type="text" class="form-control" id="nameCC2" placeholder="Nombre 2° contacto estrecho" value="">
                </div>
                <div class="col-sm-3 mb-1">
                    <input type="number" class="form-control" id="documentCC2" placeholder="DNI 2° contacto estrecho" value="">
                </div>
                <div class="col-sm-3 mb-1">
                    <input type="number" class="form-control" id="phoneCC2" placeholder="Teléfono 2° contacto estrecho" value="">
                </div>

                <div class="col-sm-6 mb-1">
                    <input type="text" class="form-control" id="nameCC3" placeholder="Nombre 3° contacto estrecho" value="">
                </div>
                <div class="col-sm-3 mb-1">
                    <input type="number" class="form-control" id="documentCC3" placeholder="DNI 3° contacto estrecho" value="">
                </div>
                <div class="col-sm-3 mb-1">
                    <input type="number" class="form-control" id="phoneCC3" placeholder="Teléfono 3° contacto estrecho" value="">
                </div>
                <div class="col-sm-6 mb-1">
                    <input type="text" class="form-control" id="nameCC4" placeholder="Nombre 4° contacto estrecho" value="">
                </div>
                <div class="col-sm-3 mb-1">
                    <input type="number" class="form-control" id="documentCC4" placeholder="DNI 4° contacto estrecho" value="">
                </div>
                <div class="col-sm-3 mb-1">
                    <input type="number" class="form-control" id="phoneCC4" placeholder="Teléfono 4° contacto estrecho" value="">
                </div>

                <div class="col-sm-6">
                    <input type="text" class="form-control" id="nameCC5" placeholder="Nombre 5° contacto estrecho" value="">
                </div>
                <div class="col-sm-3">
                    <input type="number" class="form-control" id="documentCC5" placeholder="DNI 5° contacto estrecho" value="">
                </div>
                <div class="col-sm-3">
                    <input type="number" class="form-control" id="phoneCC5" placeholder="Teléfono 5° contacto estrecho" value="">
                </div>

                <!-- +++++++ hasta acá llegué +++++++++++ -->
            </section>
            <button class="w-50 center-block mt-4 btn-primary btn-lg" type="submit">Grabar</button>
        </form>
    </main>
</section>

<script src="assets/dist/js/bootstrap.bundle.min.js"></script>

<script>
    (function() {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function(form) {
                form.addEventListener('submit', function(event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
    })()
</script>


<?php
include("../layout/footer.php");
?>