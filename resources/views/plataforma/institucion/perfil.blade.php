@extends('layouts.paneladmin')
@section('content')
<div class="col">
  <div class="row" style="margin-top:2px;margin-rigth:2px;">
    <div class="col-md-2">
      <img src="{{asset('img/institucion/zorritos.jpg')}}" alt="foto de perfil" class="img-fluid" style="border:1px solid;border-radius:5px;">

      <h5><span class="badge badge-danger">{nombre institucion}</span></h5>
      <h4 class="text-center">
        <a href="#" class="badge badge-info"><i class="fa fa-facebook-square"></i></a>
        <a href="#" class="badge badge-info"><i class="fa fa-youtube"></i></a>
        <a href="#" class="badge badge-info"><i class="fa fa-twitter-square"></i></a>
      </h4>
    </div>
    <div class="col-md-10" style="padding:3px;border:1px solid; border-radius:4px;">
      <h3><span class="badge badge-danger">Misión</span></h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est, quae illo consectetur quod obcaecati laborum voluptatem totam asperiores mollitia, quaerat, praesentium atque earum eius, adipisci nisi culpa doloribus quia iste?</p>

      <h3><span class="badge badge-danger">Visión</span></h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A vel, dolorem eaque corporis provident rem soluta nesciunt necessitatibus velit quos numquam expedita qui quas doloremque, beatae saepe eius, commodi amet.</p>
      <h4>Datos Institucionales</h4>
      <ul>
        <li>Direccion Web: {}</li>
        <li>Celular: {}</li>
        <li>Ubicacion: {}</li>
      </ul>
    </div>
  </div>
</div>
@endsection
