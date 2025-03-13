@extends('layouts.main_layout')

@include('top_bar')

@section('content')
<div class="container mt-5 {{ session('user.email') == 'Mariele.sgarbossa17@gmail.com' ? 'mariele-theme' : '' }}">
    <div class="row justify-content-center">
        <div class="col-md-6 col-sm-8">
            <div class="card p-5 {{ session('user.email') == 'Mariele.sgarbossa17@gmail.com' ? 'mariele-card' : '' }}">
                
                <!-- Título -->
                <div class="text-center p-3">
                    <h2>Editar Reserva</h2>
                </div>

                <!-- Formulário -->
                <form action="{{ route('editarSubmit') }}" method="post">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="id" value="{{ old('id', request('id')) }}">

                    <!-- Finalidade -->
                    <div class="mb-3">
                        <label for="finalidade" class="form-label {{ session('user.email') == 'Mariele.sgarbossa17@gmail.com' ? 'mariele-label' : '' }}">Finalidade</label>
                        <input type="text" class="form-control {{ session('user.email') == 'Mariele.sgarbossa17@gmail.com' ? 'mariele-input' : '' }}" name="finalidade" value="{{ old('finalidade', request('finalidade')) }}" required>
                        @error('finalidade')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Horário de Início -->
                    <div class="mb-3">
                        <label for="horario_inicio" class="form-label {{ session('user.email') == 'Mariele.sgarbossa17@gmail.com' ? 'mariele-label' : '' }}">Horário de Início</label>
                        <input type="time" class="form-control {{ session('user.email') == 'Mariele.sgarbossa17@gmail.com' ? 'mariele-input' : '' }}" name="horario_inicio" value="{{ old('horario_inicio', request('horario_inicio')) }}" required>
                        @error('horario_inicio')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Horário de Fim -->
                    <div class="mb-3">
                        <label for="horario_fim" class="form-label {{ session('user.email') == 'Mariele.sgarbossa17@gmail.com' ? 'mariele-label' : '' }}">Horário de Fim</label>
                        <input type="time" class="form-control {{ session('user.email') == 'Mariele.sgarbossa17@gmail.com' ? 'mariele-input' : '' }}" name="horario_fim" value="{{ old('horario_fim', request('horario_fim')) }}" required>
                        @error('horario_fim')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Interno/Externo -->
                    <div class="mb-3">
                        <label for="tipo" class="form-label {{ session('user.email') == 'Mariele.sgarbossa17@gmail.com' ? 'mariele-label' : '' }}">Tipo</label>
                        <select class="form-control {{ session('user.email') == 'Mariele.sgarbossa17@gmail.com' ? 'mariele-input' : '' }}" name="tipo" required>
                            <option value="">Selecione</option>
                            <option value="interno" {{ old('tipo', request('tipo')) == 'interno' ? 'selected' : '' }}>Interno</option>
                            <option value="externo" {{ old('tipo', request('tipo')) == 'externo' ? 'selected' : '' }}>Externo</option>
                        </select>
                        @error('tipo')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Observações -->
                    <div class="mb-3">
                        <label for="observacoes" class="form-label {{ session('user.email') == 'Mariele.sgarbossa17@gmail.com' ? 'mariele-label' : '' }}">Observações</label>
                        <textarea class="form-control {{ session('user.email') == 'Mariele.sgarbossa17@gmail.com' ? 'mariele-input' : '' }}" name="observacoes" rows="3">{{ old('observacoes', request('observacao')) }}</textarea>
                        @error('observacoes')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Botão de Atualizar -->
                    <div class="mb-3">
                        <button type="submit" class="btn w-100 {{ session('user.username') == 'Mariele' ? 'mariele-btn' : 'btn-primary' }}">Atualizar Reserva</button>
                    </div>

                    <!-- Botão de Excluir -->
                    <div class="mb-3">
                        <button type="button" class="btn btn-danger w-100" data-bs-toggle="modal" data-bs-target="#deleteModal">Excluir</button>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
</div>

<!-- Modal de Confirmação de Exclusão -->
<div class="modal fade {{ session('user.username') == 'Mariele' ? 'mariele-modal' : '' }}" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content {{ session('user.email') == 'Mariele.sgarbossa17@gmail.com' ? 'mariele-modal-content' : '' }}">
            <div class="modal-header {{ session('user.email') == 'Mariele.sgarbossa17@gmail.com' ? 'mariele-modal-header' : '' }}">
                <h5 class="modal-title" id="deleteModalLabel">Confirmar Exclusão</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Tem certeza de que deseja excluir esta reserva? Esta ação não pode ser desfeita.
            </div>
            <div class="modal-footer">
                <form action="{{ route('apagarSubmit', ['id' => request()->id]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn {{ session('user.username') == 'Mariele' ? 'btn-mariele-danger' : 'btn-danger' }}">Deletar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<style>
    /* Estilos para o tema Mariele */

.mariele-theme {
    background-color: #ff69b4 !important; /* Rosa forte */
    color: white;
    min-height: 100vh; /* Garante que a cor cubra toda a tela */
}

.mariele-theme .modal-content {
    background-color: #ff69b4 !important;
}

.mariele-theme .modal-content .btn {
    background-color: #4b0082 !important;
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

/* Estilo para o botão de deletar */
.mariele-modal .btn-danger {
    background-color: #ff1493 !important; /* Rosa escuro para o botão de exclusão */
    border-radius: 5px !important;
}

.mariele-modal .btn-danger:hover {
    background-color: #ff85c0 !important; /* Rosa claro no hover */
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
