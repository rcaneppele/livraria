@extends('template')

@section('title')
	Listagem de Livros
@stop

@section('conteudo')
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title text-center">LIVROS CADASTRADOS</h3>
		</div>
			
		<div class="panel-body">
			<a href="/livros/novo" class="btn btn-primary">
				<span class="glyphicon glyphicon-plus"></span> Novo
			</a>
			
			<div class="table-responsive">
				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th>ID</th>
							<th>NOME</th>
							<th>PREÇO</th>
							<th>ISBN</th>
							<th>AÇÕES</th>
						</tr>
					</thead>

					<tbody>
						@foreach($livros as $livro)
							<tr>
								<td>
									{{$livro->id}}
								</td>
								<td>
									{{$livro->nome}}
								</td>
								<td>
									{{$livro->preco}}
								</td>
								<td>
									{{$livro->isbn}}
								</td>
								<td>
									<a href="#" class="btn btn-info">
										<span class="glyphicon glyphicon-edit"></span> Editar
									</a>

									<form action="/livros" method="post" class="form-delete">
										<input type="hidden" name="_token" value="{{csrf_token()}}">
										<input type="hidden" name="_method" value="delete">
										<input type="hidden" name="id" value="{{$livro->id}}">

										<button type="submit" class="btn btn-danger">
											<span class="glyphicon glyphicon-trash"></span> Excluir
										</button>
									</form>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
@stop
