@extends('layouts.admin')

@section('title') Usuarios @endsection
@section('co-title') - Usuarios @endsection
@section('content')
<table class="table">
	<thead>
		<tr>
			<th scope="col">#</th>
			<th scope="col">Nombre y Apellido</th>
			<th scope="col">Fecha publicación</th>
			<th scope="col">Eliminar</th>
		</tr>
	</thead>
	<tbody>
		@foreach($users as $user)
		<tr>
			<th scope="row">{{ $user->id }}</th>
			<td>{{ $user->name }} {{ $user->lastname }}</td>
			<td>{{ $user->email }}</td>
			<td>{{ $user->created_at }}</td>
			<td><i class="fas fa-trash pointer" data-id="{{ $user->id }}"></i></td>
		</tr>
		@endforeach
	</tbody>
</table>
{!! $users->render() !!}
@endsection
@section('script')
<script>
	$('.fa-trash').click(event=>{
		event.preventDefault();
		let id = event.currentTarget.getAttribute('data-id');
		toastr.info('Borrando','Espere hasta finalizar el borrado');
		axios.delete('/admin/users/'+id)
		.then(response=>{
            location.reload();
		}).catch(error=>{
			toastr.error('Ocurrio un error','Recargue la pagina y reintente');
		});
	});
</script>
@endsection