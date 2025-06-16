@extends('template')
@section('titulo', 'Cadastro de usuários')

@section('conteudo')
    <div class="container mt-5">
        <h1 class="text-center">Cadastro</h1>
        <form action="/addusuario" method="POST">
            @csrf
            
                <div class="mb-3">
                    <label class="form-label">Nome</label>
                    <input type="text" class="form-control" id="fnome" name="fnome" required>
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" id="femail" name="femail" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Senha</label>
                    <input type="password" class="form-control" id="fsenha" name="fsenha" required>
                </div>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>
@endsection