@extends('layouts.default')
  @section('head-title')<title>Medikaria | Perfil de Usuario</title>@show
@section('section-title')
  <section class="content-header">
      <h1>
          Perfil
          <small></small>
      </h1>
      <ol class="breadcrumb">
          <li class="#"><i class="fa fa-home"></i> Inicio</li>
          <li class="active"><i class="fa fa-user"></i> Perfil</li>
      </ol>
  </section>


@stop
@section('content')

        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="box box-primary">
              <div class="box-body box-profile">
                <img class="profile-user-img img-responsive img-circle" src="{{ asset('components/lte/img/userRoberto.jpg') }}" alt="User profile picture">

                <h3 class="profile-username text-center">{{ $currentUser->nombre }}</h3>

                <p class="text-muted text-center">Médico</p>

                <ul class="list-group list-group-unbordered">
                  <li class="list-group-item">
                    <b>No de Pacientes</b> <a class="pull-right">1,322</a>
                  </li>
                  <li class="list-group-item">
                    <b>Consultas</b> <a class="pull-right">543</a>
                  </li>
                  <li class="list-group-item">
                    <b>Recetas Expedidas</b> <a class="pull-right">13,287</a>
                  </li>
                </ul>

                <!--<a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>-->
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->

            <!-- About Me Box -->
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Acerca de mí</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <strong><i class="fa fa-hospital-o margin-r-5"></i> Hospital</strong>

                <p class="text-muted">Los Angeles</p>

                <hr>
                <strong><i class="fa fa-mobile margin-r-5"></i> Celular</strong>

                <p class="text-muted">
                  2221123318
                </p>

                <hr>

                <strong><i class="fa fa-map-marker margin-r-5"></i> Dirección</strong>

                <p class="text-muted">Privada Santa Lucila 31-301, Cutlancingo, Puebla</p>

                <hr>

                <strong><i class="fa fa-file-text margin-r-5"></i> Cédula Profesional</strong>

                <p class="text-muted">12313BA</p>

                <hr>

                <strong><i class="fa fa-file-text-o margin-r-5"></i> RFC</strong>

                <p "text-muted">BABR140985</p>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="nav-tabs-custom">
              <ul class="nav nav-tabs">
                <li class="active"><a href="#activity" data-toggle="tab">Actividad</a></li>
                <li><a href="#timeline" data-toggle="tab">Línea de Tiempo</a></li>
                <li><a href="#settings" data-toggle="tab">Ajustes</a></li>
              </ul>
              <div class="tab-content">
                <div class="active tab-pane" id="activity">
                  <!-- Post -->
                  <div class="post">
                  </div>
                  <!-- /.post -->
                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="timeline">
                  <!-- The timeline -->
                  <ul class="timeline timeline-inverse">
                    <!-- timeline time label -->
                    <li class="time-label">
                          <span class="bg-red">
                            10 Feb. 2014
                          </span>
                    </li>
                    <!-- /.timeline-label -->
                    <!-- timeline item -->
                    <li>
                      <i class="fa fa-envelope bg-blue"></i>

                      <div class="timeline-item">
                        <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

                        <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

                        <div class="timeline-body">
                          Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                          weebly ning heekya handango imeem plugg dopplr jibjab, movity
                          jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                          quora plaxo ideeli hulu weebly balihoo...
                        </div>
                        <div class="timeline-footer">
                          <a class="btn btn-primary btn-xs">Read more</a>
                          <a class="btn btn-danger btn-xs">Delete</a>
                        </div>
                      </div>
                    </li>
                    <!-- END timeline item -->
                    <!-- timeline item -->
                    <li>
                      <i class="fa fa-user bg-aqua"></i>

                      <div class="timeline-item">
                        <span class="time"><i class="fa fa-clock-o"></i> 5 mins ago</span>

                        <h3 class="timeline-header no-border"><a href="#">Sarah Young</a> accepted your friend request
                        </h3>
                      </div>
                    </li>
                    <!-- END timeline item -->
                    <!-- timeline item -->
                    <li>
                      <i class="fa fa-comments bg-yellow"></i>

                      <div class="timeline-item">
                        <span class="time"><i class="fa fa-clock-o"></i> 27 mins ago</span>

                        <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>

                        <div class="timeline-body">
                          Take me to your leader!
                          Switzerland is small and neutral!
                          We are more like Germany, ambitious and misunderstood!
                        </div>
                        <div class="timeline-footer">
                          <a class="btn btn-warning btn-flat btn-xs">View comment</a>
                        </div>
                      </div>
                    </li>
                    <!-- END timeline item -->
                    <!-- timeline time label -->
                    <li class="time-label">
                          <span class="bg-green">
                            3 Jan. 2014
                          </span>
                    </li>
                    <!-- /.timeline-label -->
                    <!-- timeline item -->
                    <li>
                      <i class="fa fa-camera bg-purple"></i>

                      <div class="timeline-item">
                        <span class="time"><i class="fa fa-clock-o"></i> 2 days ago</span>

                        <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>

                        <div class="timeline-body">
                          <img src="http://placehold.it/150x100" alt="..." class="margin">
                          <img src="http://placehold.it/150x100" alt="..." class="margin">
                          <img src="http://placehold.it/150x100" alt="..." class="margin">
                          <img src="http://placehold.it/150x100" alt="..." class="margin">
                        </div>
                      </div>
                    </li>
                    <!-- END timeline item -->
                    <li>
                      <i class="fa fa-clock-o bg-gray"></i>
                    </li>
                  </ul>
                </div>
                <!-- /.tab-pane -->

                <div class="tab-pane" id="settings">
                  <form class="form-horizontal">
                    <div class="form-group">
                      <label for="inputName" class="col-sm-2 control-label">Hospital</label>

                      <div class="col-sm-10">
                        <select class="form-control select2" name="hospital" id="inputHospital" >
                          <option selected="selected">Alabama</option>
                          <option>Alaska</option>
                          <option>California</option>
                          <option>Delaware</option>
                          <option>Tennessee</option>
                          <option>Texas</option>
                          <option>Washington</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputName" class="col-sm-2 control-label">Nombre</label>

                      <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputName" placeholder="Nombre">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail" class="col-sm-2 control-label">Celular</label>

                      <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail" placeholder="Celular">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputName" class="col-sm-2 control-label">Dirección</label>

                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputName" placeholder="Dirección">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputExperience" class="col-sm-2 control-label">Cédula Profesional</label>

                      <div class="col-sm-10">
                        <textarea class="form-control" id="inputExperience" placeholder="Cédula Profesional"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputSkills" class="col-sm-2 control-label">RFC</label>

                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputSkills" placeholder="RFC">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputSkills" class="col-sm-2 control-label">Subir Foto de Perfil</label>
                      <div class="col-sm-10">
                        <input type="file" id="exampleInputFile">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-danger">Editar Ajustes</button>
                      </div>
                    </div>
                  </form>
                </div>
                <!-- /.tab-pane -->
              </div>
              <!-- /.tab-content -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
@stop
