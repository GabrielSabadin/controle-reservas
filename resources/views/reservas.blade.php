@extends('layouts.main_layout')

@include('top_bar')

@section('content')
<div class="container mt-4 {{ session('user.email') == 'Mariele.sgarbossa17@gmail.com' ? 'mariele-theme' : '' }}">
    <h3 class="text-center mb-4">Histórico de Reservas</h3>

    <!-- Tabela -->
    <div class="table-responsive">
        <table class="table table-bordered table-striped {{ session('user.email') == 'Mariele.sgarbossa17@gmail.com' ? 'mariele-theme-table' : '' }}">
            <thead>
                <tr>
                    <th>Finalidade</th>
                    <th>Data e Hora de Início</th>
                    <th>Data e Hora de Término</th>
                    <th>Interno/Externo</th>
                    <th>Responsável</th>
                    <th>Observação</th>
                    <th>Dia</th>
                    <th>Mês</th>
                    <th>Ano</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reservas as $reserva)
                <tr>
                    <td>{{ $reserva->finalidade }}</td>
                    <td>{{ $reserva->horario_inicio }}</td>
                    <td>{{ $reserva->horario_termino }}</td>
                    <td>{{ $reserva->local }}</td>
                    <td>{{ $reserva->user }}</td>
                    <td>{{ $reserva->observacao }}</td>
                    <td>{{ $reserva->dia_reserva }}</td>
                    <td>{{ $reserva->mes_reserva }}</td>
                    <td>{{ $reserva->ano_reserva }}</td>
                </tr>  
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<style>
    /* Centralizando a tabela */
    .table-responsive {
        max-width: 90%;
        margin: 0 auto;
        border-radius: 20px;
        overflow: hidden;
    }

    table {
        font-size: 0.9rem;
        text-align: center;
        border-radius: 20px;
    }

    th, td {
        vertical-align: middle;
    }

    /* Tema especial para a usuária Mariele */
    .mariele-theme {
        background-color: #ff69b4 !important;
        color: white;
        min-height: 100vh;
    }

    .mariele-theme .container {
        background-color: #ff69b4 !important;
    }

    /* Alterando o tema da tabela */
    .mariele-theme-table {
        background-color: #9400d3 !important; /* Roxo forte */
        color: white !important;
        border-radius: 10px;
    }

    /* Garantindo que todas as células fiquem roxas */
    .mariele-theme-table th,
    .mariele-theme-table td {
        background-color: #9400d3 !important; /* Roxo forte */
        color: white !important;
        border-color: #4B0082 !important; /* Bordas roxas escuras */
    }

    /* Cabeçalho da tabela */
    .mariele-theme-table thead {
        background-color: #800080 !important; /* Roxo escuro */
    }

    /* Efeito hover */
    .mariele-theme-table tbody tr:hover {
        background-color: #9932CC !important; /* Roxo médio */
        cursor: pointer;
    }

    /* Forçando o Bootstrap a respeitar os estilos */
    .table-striped tbody tr:nth-of-type(odd) {
        background-color: #7a0ba8 !important; /* Roxo mais claro */
    }

    .table-striped tbody tr:nth-of-type(even) {
        background-color: #9400d3 !important; /* Roxo forte */
    }

    /* Estilo para o cabeçalho da tabela */
    thead.table-dark {
        background-color: #343a40 !important;
        color: white !important;
    }

    th {
        font-weight: bold;
        padding: 12px 15px;
    }

    td {
        padding: 10px 15px;
    }

    /* Efeito de hover para as linhas */
    tbody tr:hover {
        background-color: #f1f1f1;
        cursor: pointer;
    }
</style>

@endsection
