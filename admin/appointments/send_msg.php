<?php 
require_once('../../config.php');
if(isset($_GET['id']) && $_GET['id'] > 0){
    $qry = $conn->query("SELECT patient_id from `appointments` where id = '{$_GET['id']}' ");
    if($qry->num_rows > 0){
        foreach($qry->fetch_assoc() as $k => $v){
            $$k=$v;
        }
    }
    $qry2 = $conn->query("SELECT * FROM `patient_meta` where patient_id = '{$patient_id}' ");
    foreach($qry2->fetch_all(MYSQLI_ASSOC) as $row){
        $patient[$row['meta_field']] = $row['meta_value'];
    }
}
?>
<style>
#uni_modal .modal-content>.modal-footer{
    display:none;
}
#uni_modal .modal-body{
    padding-top:0 !important;
}
</style>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
                
            <div class="form-group">
                <label for="equipo" class="control-label">Mensaje a <?php echo $patient['contact'] ?></label>
                <textarea class="form-control" id="msg" rows="3" required></textarea>
            </div>

        </div>
        <div class="form-group d-flex justify-content-end w-100 form-group">
            <a id="btn-send-msg" href="https://wa.me/+52<?php echo $patient['contact'] ?>/?text=" target='_blank' class='btn btn-md btn-success'>Enviar</a>
            <button class="btn-light btn ml-2" id='msg-cancel' type="button" data-dismiss="modal">Cancelar</button>
        </div>
    </div>
</div>

<script>
    var url = $("#btn-send-msg").attr("href");

    $(document).on("keyup", "#msg", function() {
        $("#btn-send-msg").attr("href", url + $("#msg").val()); 
    });
</script>