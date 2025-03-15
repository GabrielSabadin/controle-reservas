@extends('layouts.main_layout')

@include('top_bar')

@section('content')
<div class="container mt-5 {{ session('user.email') == 'Mariele.sgarbossa17@gmail.com' ? 'mariele-theme' : '' }}">
    
    <div class="row justify-content-center">
        <div class="col-md-6 col-sm-8">
            <div class="card p-5 {{ session('user.email') == 'Mariele.sgarbossa17@gmail.com' ? 'mariele-card' : '' }}">
                
                <!-- Título -->
                <div class="text-center p-3">
                    <h2>Adicionar Reserva</h2>
                </div>

                <!-- Formulário -->
                <form action="{{ route('adicionarBanco') }}" method="post">
                    @csrf
                    <input type="hidden" name="user_id" value="{{ session('user.id') }}">
                    <input type="hidden" name="day" value="{{ $day }}">
                    <input type="hidden" name="month" value="{{ $month }}">
                    <input type="hidden" name="year" value="{{ $year }}">

                    <!-- Finalidade -->
                    <div class="mb-3">
                        <label for="finalidade" class="form-label {{ session('user.email') == 'Mariele.sgarbossa17@gmail.com' ? 'mariele-label' : '' }}">Finalidade</label>
                        <input type="text" class="form-control" name="finalidade" value="{{ old('finalidade') }}" required>
                        @error('finalidade')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Horário de Início -->
                    <div class="mb-3">
                        <label for="horario_inicio" class="form-label {{ session('user.email') == 'Mariele.sgarbossa17@gmail.com' ? 'mariele-label' : '' }}">Horário de Início</label>
                        <input type="time" class="form-control" name="horario_inicio" value="{{ old('horario_inicio') }}" required>
                        @error('horario_inicio')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <!-- Horário de Fim -->
                    <div class="mb-3">
                        <label for="horario_fim" class="form-label {{ session('user.email') == 'Mariele.sgarbossa17@gmail.com' ? 'mariele-label' : '' }}">Horário de Fim</label>
                        <input type="time" class="form-control" name="horario_fim" value="{{ old('horario_fim') }}" required>
                        @error('horario_fim')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Interno/Externo -->
                    <div class="mb-3">
                        <label for="tipo" class="form-label {{ session('user.email') == 'Mariele.sgarbossa17@gmail.com' ? 'mariele-label' : '' }}">Tipo</label>
                        <select class="form-control" name="tipo" required>
                            <option value="">Selecione</option>
                            <option value="interno" {{ old('tipo') == 'interno' ? 'selected' : '' }}>Interno</option>
                            <option value="externo" {{ old('tipo') == 'externo' ? 'selected' : '' }}>Externo</option>
                        </select>
                        @error('tipo')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Observações -->
                    <div class="mb-3">
                        <label for="observacoes" class="form-label {{ session('user.email') == 'Mariele.sgarbossa17@gmail.com' ? 'mariele-label' : '' }}">Observações</label>
                        <textarea class="form-control" name="observacoes" rows="3">{{ old('observacoes') }}</textarea>
                        @error('observacoes')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Botão -->
                    <div class="mb-3">
                        <button type="submit" class="btn w-100 {{ session('user.email') == 'Mariele.sgarbossa17@gmail.com' ? 'mariele-btn' : 'btn-primary' }}">Adicionar Reserva</button>
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

    /* Estilo para os campos de input */
    .form-control {
        border-radius: 10px !important;
        padding: 10px !important;
        border: 1px solid #4b0082 !important;
    }

    .form-control:focus {
        border-color: #9932CC !important;
        box-shadow: 0 0 5px rgba(153, 50, 204, 0.5) !important;
    }

    /* Estilos para as labels */
    .form-label {
     
        color: white; /* Cor padrão para as labels */
    }

    /* Estilo específico para labels quando for Mariele */
    .mariele-theme .form-label {
        color: #9400d3 !important; /* Roxo forte para o caso da Mariele */
    }

    /* Estilos para o card */
    .mariele-card {
        background-color: #ff85c0 !important; /* Rosa médio */
        color: white !important;
        border-radius: 10px !important;
    }

    /* Estilo para o botão "Adicionar Reserva" */
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

    /* Estilo para a mensagem de erro */
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
