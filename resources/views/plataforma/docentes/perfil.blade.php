@extends('layouts.paneladmin')
@section('content')
<style media="screen">
  .avatar{
    width: 50px;
    height: 50px;
  }
</style>
<div class="col">
  <div class="row" style="margin-top:2px;margin-rigth:2px;">
    <div class="col-md-2">
      <img src="{{asset('img/institucion/zorritos.jpg')}}" alt="foto de perfil" class="img-fluid" style="border:1px solid;border-radius:5px;">

      <h5><span class="badge badge-danger">{nombre docente}</span></h5>
      <h4 class="text-center">
        <a href="#" class="badge badge-info"><i class="fa fa-facebook-square"></i></a>
        <a href="#" class="badge badge-info"><i class="fa fa-youtube"></i></a>
        <a href="#" class="badge badge-info"><i class="fa fa-twitter-square"></i></a>
      </h4>
    </div>
    <div class="col-md-7" style="padding:3px;border:1px solid; border-radius:4px;">
      <h4><span class="badge badge-danger bg-sitaav">Descripcion</span></h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est, quae illo consectetur quod obcaecati laborum voluptatem totam asperiores mollitia, quaerat, praesentium atque earum eius, adipisci nisi culpa doloribus quia iste?</p>

      <h4>Datos Personales</h4>
      <ul>
        <li>Direccion Web: {}</li>
        <li>Celular: {}</li>
        <li>Ubicacion: {}</li>
      </ul>

      <h4><span class="badge badge-danger bg-sitaav">Comunicados institucionales</span></h4>

    </div>
    <div class="col-md-3">
      <div class="row">
        <div class="col-12">
          <select class="custom-select">
              <option value="0">nombre de un curso</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
          </select>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <ul class="list-group">
            <li class="list-group-item"><img src="http://www.aloge.eu/images/usuario.jpeg" alt="foto alumno" class="rounded-circle avatar"> Cras justo odio</li>
            <li class="list-group-item"><img src="http://www.aloge.eu/images/usuario.jpeg" alt="foto alumno" class="rounded-circle avatar"> Cras justo odio</li>
            <li class="list-group-item"><img src="http://www.aloge.eu/images/usuario.jpeg" alt="foto alumno" class="rounded-circle avatar"> Cras justo odio</li>
            <li class="list-group-item"><img src="http://www.aloge.eu/images/usuario.jpeg" alt="foto alumno" class="rounded-circle avatar"> Cras justo odio</li>
            <li class="list-group-item"><img src="http://www.aloge.eu/images/usuario.jpeg" alt="foto alumno" class="rounded-circle avatar"> Cras justo odio</li>
          </ul>

        </div>
      </div>

    </div>
  </div>
</div>
@endsection
