@extends('layouts.admin')

@section('title') Articulos @endsection
@section('co-title') - Articulos @endsection
@section('btn-add') <a href="/admin/article" class="btn btn-primary ml-auto">Agregar Articulo</a> @endsection
@section('content')
<table class="table">
	<thead>
		<tr>
			<th scope="col">#</th>
			<th scope="col">Titulo</th>
			<th scope="col">Imagen</th>
			<th scope="col">Fecha publicación</th>
			<th scope="col">Modificar</th>
			<th scope="col">Eliminar</th>
		</tr>
	</thead>
	<tbody>
		@foreach($articles as $article)
		<tr>
			<th scope="row">{{ $article->id }}</th>
			<td>{{ $article->title }}</td>
			<td>{{ $article->image }}</td>
			<td>{{ $article->created_at }}</td>
			<td><i class="fas fa-edit pointer"></i></td>
			<td><i class="fas fa-trash pointer" data-id="{{ $article->id }}"></i></td>
		</tr>
		@endforeach
	</tbody>
</table>
{!! $articles->render() !!}
@endsection
@section('script')
<script>
	$('.fa-trash').click(event=>{
		event.preventDefault();
		let id = event.currentTarget.getAttribute('data-id');
		toastr.info('Borrando','Espere hasta finalizar el borrado');
		axios.delete('/admin/article/'+id)
		.then(response=>{
            location.reload();
		}).catch(error=>{
			toastr.error('Ocurrio un error','Recargue la pagina y reintente');
		});
	});
</script>
@endsection