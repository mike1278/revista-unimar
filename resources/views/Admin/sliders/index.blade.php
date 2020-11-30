@extends('layouts.admin')

@section('title') Sliders Inicio @endsection
@section('co-title') - Sliders Inicio @endsection
@section('btn-add') <a href="/admin/slider" class="btn btn-primary ml-auto">Agregar Slider</a> @endsection
@section('content')
<table class="table">
	<thead>
		<tr>
			<th scope="col">#</th>
			<th scope="col">Texto</th>
			<th scope="col">Imagen</th>
			<th scope="col">Fecha publicación</th>
			<th scope="col">Eliminar</th>
		</tr>
	</thead>
	<tbody>
		@foreach($sliders as $slider)
		<tr>
			<th scope="row">{{ $slider->id }}</th>
			<td>{{ $slider->text }}</td>
			<td>{{ $slider->image }}</td>
			<td>{{ $slider->created_at }}</td>
			<td><i class="fas fa-trash pointer" data-id="{{ $slider->id }}"></i></td>
		</tr>
		@endforeach
	</tbody>
</table>
@endsection
@section('script')
<script>
	$('.fa-trash').click(event=>{
		event.preventDefault();
		let id = event.currentTarget.getAttribute('data-id');
		toastr.info('Borrando','Espere hasta finalizar el borrado');
		axios.delete('/admin/sliders/'+id)
		.then(response=>{
            location.reload();
		}).catch(error=>{
			toastr.error('Ocurrio un error','Recargue la pagina y reintente');
		});
	});
</script>
@endsection