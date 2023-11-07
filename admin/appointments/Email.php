<?php 
require_once('../../config.php');

$patient = []; // Inicializa un arreglo para evitar problemas si no se encuentra ningún pcleiaciente.

if(isset($_GET['id']) && $_GET['id'] > 0){
    $appointment_id = $_GET['id'];
    
    // Consulta la información de la cita
    $qry = $conn->query("SELECT patient_id FROM `appointments` WHERE id = '$appointment_id'");
    if($qry->num_rows > 0){
        $patient_id = $qry->fetch_assoc()['patient_id'];
        
        // Consulta la información del cliente a través de metadatos
        $qry2 = $conn->query("SELECT meta_field, meta_value FROM `patient_meta` WHERE patient_id = '$patient_id'");
        while ($row = $qry2->fetch_assoc()) {
            $patient[$row['meta_field']] = $row['meta_value'];
        }
    }
}
?>

<style>
#uni_modal .modal-content > .modal-footer {
    display: none;
}
#uni_modal .modal-body {
    padding-top: 0 !important;
}
</style>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="form-group">
                <label for="equipo" class="control-label">Mensaje a <?php echo isset($patient['email']) ? $patient['email'] : ''; ?></label>
            </div>
        </div>
        <div class="form-group d-flex justify-content-end w-100 form-group">
            <a id="btn-send-msg" href="https://mail.google.com/mail/?view=cm&fs=1&to=<?php echo isset($patient['email']) ? $patient['email'] : ''; ?>&su=Tu%20asunto" target="_blank" class="btn btn-md btn-success">Enviar</a>
            <button class="btn-light btn ml-2" id="msg-cancel" type="button" data-dismiss="modal">Cancelar</button>
        </div>
    </div>
</div>

