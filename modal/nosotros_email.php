<!-- Modal -->
<div class="modal fade" id="email" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center">Envianos tu Solicitud</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="form_email" action="" method="POST">
            <input class="input_email" type="text" placeholder="Nombres y Apellidos" name="nombre" required="">
            <!-- <input class="input_email" type="text" placeholder="Correo" name="correo"> -->
            <input class="input_email" type="text" placeholder="asunto" name="asunto" required="">
            <textarea name="msg" placeholder="mensaje" class="textarea_email" required=""></textarea>
           <input class="input_email btn btn-info btn-sm"  type="submit">
        </form>
      </div>
     
    </div>
  </div>
</div>


