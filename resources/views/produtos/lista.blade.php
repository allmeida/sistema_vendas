@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">
					<center><h1>Produtos</h1></center>
						<p align="right">
							<a href="{{ url('produtos/novo') }}" class="btn btn-secondary">
								Novo Produto
							</a>
						</p>				
				</div>

				<div class="panel-body">
					<div class="alert alert-dark" role="alert">
						<center>Listagem de Produtos</center>
					</div>
					
					
				</div>
			</div>
		</div>
	</div>
</div>
@endsection