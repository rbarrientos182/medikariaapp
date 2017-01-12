@if(session('status'))
    <div class="alert alert-info alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <h4><i class="icon fa fa-info"></i> Mensaje: </h4>
      <ul class="list-unstyled">
          <li>{{session('status')}}</li>
      </ul>
    </div>
@endif
