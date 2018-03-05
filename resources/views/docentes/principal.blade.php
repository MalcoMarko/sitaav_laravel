@extends('home')

@section('content')
<div id="vdocente" class="row">
	<div class="col-lg-12">
		<h1 class="page-header">DOCENTES</h1>
	</div>

	<div class="col-lg-7">
		<a href="#" class="btn btn-primary pull-right">Nuevo Docente</a>
	

		<table class="table table-hover table-striped">
			<thead>
				<tr>
					<th>Nombre</th>
					<th>Apepaterno</th>
					<th colspan="2">&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				<tr v-for="docente in tdocentes">
					<td>@{{docente.nombres}} </td>
					<td>@{{docente.apepaterno}} </td>
					<td>
						<a href="#" class="btn btn-warning btn-sm">Editar</a>
					</td>
					<td>
						<a href="#" class="btn btn-danger btn-sm" v-on:click.prevent="deleteTdocentes(docente)">Eliminar</a>
					</td>
				</tr>
			</tbody>
		</table>
	</div>

	<div class="col-lg-5">
		<pre>
			@{{ $data }}
		</pre>
	</div>
</div>


@endsection