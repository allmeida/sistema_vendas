@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">
					<center><h1>Formulário</h1></center>
						<p align="right">
							<a href="{{ url('produtos') }}" class="btn btn-secondary -sm">
								Listagem de Produtos
							</a>
						</p>
				</div>

				<div class="alert alert-dark" role="alert">
					<center>Informe abaixo os dados do Produto</center>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
   