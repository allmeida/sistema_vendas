@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1>Dashboard</h1>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <center><h3>Você está logado!</h3></center>
                    <br>
                    <center><h3>Seja bem vindo!</h3></center>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
