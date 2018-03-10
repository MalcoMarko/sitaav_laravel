@extends('layouts.paneladmin')
@section('content')
<div class="col-6">
  <div class="row">
    <div class="col-5" class="bg-sitaav">
      <h4><i class="fas fa-calendar-alt"></i> CALENDARIZACION</h4>
    </div>
    <div class="row" style="border: 1px solid; border-radius: 10px;border-color: #874442 ; padding: 10px; text-align: center; margin-right: 35px">
      <div class="row">
        <h1 style="background-color: #bd362f; border-radius: 10px; color:#f4f8f9" id="Adia">14-feb-2018</h1>
        <input type="hidden" name="Aid0" id="Aid0" value="">
      </div>
      <br>
      <div class="row" style="background-color: #b6bdbdd9; border-radius: 10px; margin-right:10px; margin-left: 10px">
        <div class="row">
            <div class="col-sm-12">
            <div class="col-lg-6" style="color: aliceblue; background: #07405d;   border-radius:10px; margin-top: 10px; margin-left: 10px">
              <h4 style="margin: 4px; margin-left: 10px" id="Acelebracion"> Dia del Amor y la amistad</h4>
            </div>
          </div>
          <div class="col-sm-12" style="margin-top: 25px; margin-right:10px" >
            <div class="col-md-3">
              <img src="http://media.gettyimages.com/vectors/abstract-tree-with-education-icons-vector-id180517338?s=170667a&w=1007" class="img img-responsive" id="Aimagen">
            </div>
            <div class="col-md-8" style="text-align: justify; padding-bottom: : 15px; padding-right: 15px" id="Acontenido">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </div>
          </div>
        </div>

      </div>
      <br>

    </div>

</div>
<div class="col-6">
  <div class="row" style="margin-top: 15px">
    <div class="row">
        <div class="col-lg-6 titularesh4">
          <h4><i class="fas fa-calendar-alt"></i> Eventos Institucionales</h4>
        </div>
      </div><br>
      <table class="table table-striped">
        <tr>
          <th>#</th>
          <th>Dia</th>
          <th>Celebracion</th>
          <th>ver</th>
          <th></th>
        </tr>
        <tbody id="agendas" style="text-align: left;">
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
        </tbody>
      </table>
    <div id="misEventos" class="col-md-12" >

    </div>
  </div>
</div>

<div class="row">
  <div class="col-lg-6 titularesh4">
    <h4><i class="fas fa-calendar-alt"></i> INGRESAR MI AGENDA</h4>
  </div>
</div><br>

  <div class="row" style="border: 1px solid; border-radius: 10px;border-color: blue ; padding: 10px; text-align: center;">
    <form class="form-horizontal" action="javascript:save_new()" id="feedbackForm">
      <input type="hidden" name="Aid1" id="Aid1" value="">
    <div class="form-group">
      <label for="dia" class="col-sm-4 control-label">Seleccione Dia</label>
      <div class="col-sm-6">
        <input type="date" class="form-control" id="dia" required>
      </div>
    </div>
    <div class="form-group">
      <label for="celebracion" class="col-sm-4 control-label">Celebracion</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" id="celebracion" required placeholder="Celebracion">
      </div>
    </div>
    <div class="form-group">
      <div class="form-group">
        <label for="contenido" class="col-sm-4 control-label">Descripcion</label>
        <div class="col-sm-6">
          <textarea class="form-control" rows="6" id="contenido"></textarea>
        </div>
      </div>
    </div>
    <div class="form-group">
      <div class="form-group">
        <label for="imagen" class="col-sm-4 control-label">URL Imagen</label>
        <div class="col-sm-6">
        <input type="text" class="form-control" id="imagen" placeholder="https://......">

        </div>
      </div>
    </div>
    <div class="form-group">
    <div class="col-sm-offset-4 col-sm-10">
    <button type="submit" class="btn btn-danger">Guardar</button>
    <button type="reset" class="btn btn-danger" id="cancelar">Cancelar</button>
    </div>
    </div>
  </form>
  </div>
@endsection
