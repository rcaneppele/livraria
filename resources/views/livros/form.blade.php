@extends('template')

@section('title')
	Cadastro de Livro
@stop

@section('conteudo')
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title text-center">CADASTRO DE LIVRO</h3>
		</div>
		
		<div class="panel-body">
			<form action="/livros" method="post" class="form-horizontal">
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				
				@if(isset($livro))
					<input type="hidden" name="_method" value="put">
					<input type="hidden" name="id" value="{{$livro->id}}">
				@endif

				<fieldset>
					<legend>Dados do Livro</legend>

					<div class="form-group">
						<label for="nome" class="col-sm-2 control-label">Nome</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" id="nome" name="nome" value="{{$livro->nome or old('nome')}}">
						</div>
					</div>

					<div class="form-group">
						<label for="preco" class="col-sm-2 control-label">Preco</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" id="preco" name="preco" value="{{$livro->preco or old('preco')}}">
						</div>
					</div>

					<div class="form-group">
						<label for="isbn" class="col-sm-2 control-label">ISBN</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" id="isbn" name="isbn" value="{{$livro->isbn or old('isbn')}}">
						</div>
					</div>
				</fieldset>
				
				<button type="submit" class="btn btn-primary">
					<span class="glyphicon glyphicon-floppy-disk"></span> Gravar
				</button>

				<a class="btn btn-sm btn-default" href="/livros">Cancelar</a>
			</form>
		</div>
	</div>
@stop
