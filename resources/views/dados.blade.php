@extends('layouts.main_layout')

@include('top_bar')

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@section('content')
<div class="container mt-5 {{ session('user.email') == 'Mariele.sgarbossa17@gmail.com' ? 'mariele-theme' : '' }}">
    <div class="row justify-content-center">
        <div class="col-md-6 col-sm-8">
            <div class="card p-5 {{ session('user.email') == 'Mariele.sgarbossa17@gmail.com' ? 'mariele-card' : '' }}">
                
                <!-- Título -->
                <div class="text-center p-3">
                    <h2>Meus Dados</h2>
                </div>

                <!-- Formulário -->
                <form action="{{ route('dadosSubmit') }}" method="post">
                    @csrf
                    @method('PUT')

                    <!-- Nome -->
                    <div class="mb-3">
                        <label for="text_name" class="form-label {{ session('user.email') == 'Mariele.sgarbossa17@gmail.com' ? 'mariele-label' : '' }}">Nome</label>
                        <input type="text" class="form-control" name="text_name" value="{{ old('text_name', $usuario->name) }}" required>
                        @error('text_name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- E-mail -->
                    <div class="mb-3">
                        <label for="text_email" class="form-label {{ session('user.email') == 'Mariele.sgarbossa17@gmail.com' ? 'mariele-label' : '' }}">E-mail</label>
                        <input type="email" class="form-control" name="text_email" value="{{ old('text_email', $usuario->email) }}" required>
                        @error('text_email')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Senha -->
                    <div class="mb-3">
                        <label for="text_password" class="form-label {{ session('user.email') == 'Mariele.sgarbossa17@gmail.com' ? 'mariele-label' : '' }}">Nova Senha</label>
                        <input type="password" class="form-control" name="text_password">
                        @error('text_password')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Confirmar Senha -->
                    <div class="mb-3">
                        <label for="text_password_confirmation" class="form-label {{ session('user.email') == 'Mariele.sgarbossa17@gmail.com' ? 'mariele-label' : '' }}">Confirmar Senha</label>
                        <input type="password" class="form-control" name="text_password_confirmation">
                        @error('text_password_confirmation')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Botão -->
                    <div class="mb-3">
                        <button type="submit" class="btn w-100 {{ session('user.email') == 'Mariele.sgarbossa17@gmail.com' ? 'mariele-btn' : 'btn-primary' }}">Atualizar Dados</button>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
</div>

<style>
    .mariele-theme {
        background-color: #ff69b4 !important; /* Rosa forte */
        color: white;
        min-height: 100vh; /* Garante que a cor cubra toda a tela */
    }

    .mariele-theme body {
        background-color: #ff69b4 !important;
    }

    .mariele-theme .container {
        background-color: #ff69b4 !important;
    }

    .mariele-theme .calendar-container {
        background-color: #ff69b4 !important;
    }

    .mariele-theme .day-box {
        background-color: #ff85c0 !important; /* Rosa médio */
        color: #4b0082 !important;
        border: 2px solid #4b0082 !important; /* Borda roxa */
    }

    .mariele-theme .day-header {
        background-color: #ff69b4 !important;
        color: white !important;
    }

    .mariele-theme .reserved {
        background-color: #9400d3 !important; /* Roxo forte */
        color: white !important;
    }

    .mariele-theme .empty-box {
        background-color: #ff1493 !important; /* Rosa escuro */
    }

    /* Estilos para o card */
    .mariele-card {
        background-color: #ff85c0 !important; /* Rosa médio */
        color: white !important;
        border-radius: 10px !important;
    }

    /* Estilo para o botão "Atualizar Dados" */
    .mariele-btn {
        background-color: #9400d3 !important; /* Roxo forte */
        color: white !important;
        border-radius: 10px !important;
        border: none !important;
        transition: background-color 0.3s ease !important;
    }

    .mariele-btn:hover {
        background-color: #9932CC !important; /* Roxo médio */
    }

    /* Estilos para os campos de input */
    .form-control {
        border-radius: 10px !important;
        padding: 10px !important;
        border: 1px solid #4b0082 !important;
    }

    .form-control:focus {
        border-color: #9932CC !important;
        box-shadow: 0 0 5px rgba(153, 50, 204, 0.5) !important;
    }

    .form-label {
    color: white; /* Cor padrão para as labels */
}

    /* Estilo específico para labels quando for Mariele */
    .mariele-theme .form-label {
    color: #9400d3 !important; /* Roxo forte para o caso da Mariele */
}

    .text-danger {
        font-size: 0.85rem !important;
        color: #ff0000 !important;
    }

    /* Para o aviso de sucesso */
    .alert-success {
        background-color: #4CAF50 !important;
        color: white !important;
        border-radius: 10px !important;
    }

    /* Para o aviso de erro */
    .alert-danger {
        background-color: #f44336 !important;
        color: white !important;
        border-radius: 10px !important;
    }
</style>

@endsection
