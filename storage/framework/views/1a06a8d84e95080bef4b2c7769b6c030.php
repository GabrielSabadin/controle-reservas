<?php echo $__env->make('top_bar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('content'); ?>
<div class="container mt-4 <?php echo e(session('user.email') == 'Mariele.sgarbossa17@gmail.com' ? 'mariele-theme' : ''); ?>">
    <h3 class="text-center">
        <?php if(request('filtro') == 'ativas'): ?>
            Minhas Reservas Ativas
        <?php else: ?>
            Todas Minhas Reservas
        <?php endif; ?>
    </h3>

    <!-- Filtro de Reservas -->
    <div class="d-flex justify-content-center mb-4">
        <button id="allReservations" class="btn mx-2 <?php echo e(session('user.email') == 'Mariele.sgarbossa17@gmail.com' ? 'mariele-btn' : ''); ?>">Todas</button>
        <button id="activeReservations" class="btn mx-2 <?php echo e(session('user.email') == 'Mariele.sgarbossa17@gmail.com' ? 'mariele-btn' : ''); ?>">Ativas</button>
    </div>

    <!-- Tabela -->
    <div class="table-responsive">
        <table class="table table-bordered table-striped <?php echo e(session('user.email') == 'Mariele.sgarbossa17@gmail.com' ? 'mariele-theme-table' : ''); ?>" id="reservationTable">
            <thead>
                <tr>
                    <th>Finalidade</th>
                    <th>Hora de Início</th>
                    <th>Hora de Término</th>
                    <th>Interno/Externo</th>
                    <th>Responsável</th>
                    <th>Observação</th>
                    <th>Dia</th>
                    <th>Mês</th>
                    <th>Ano</th>
                </tr>
            </thead>
            <tbody id="reservationBody">
                <?php $__empty_1 = true; $__currentLoopData = $reservas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reserva): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td><?php echo e($reserva->finalidade); ?></td>
                        <td><?php echo e($reserva->horario_inicio); ?></td>
                        <td><?php echo e($reserva->horario_termino); ?></td>
                        <td><?php echo e($reserva->local); ?></td>
                        <td><?php echo e($reserva->user); ?></td>
                        <td><?php echo e($reserva->observacao); ?></td>
                        <td><?php echo e($reserva->dia_reserva); ?></td>
                        <td><?php echo e($reserva->mes_reserva); ?></td>
                        <td><?php echo e($reserva->ano_reserva); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan="9" class="text-center">Nenhuma reserva encontrada</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<style>
    /* Centralizando a tabela */
    .table-responsive {
        max-width: 90%;
        margin: 0 auto;
        border-radius: 20px !important;
        overflow: hidden !important;
    }

    table {
        font-size: 0.9rem !important;
        text-align: center !important;
        border-radius: 20px !important;
    }

    th, td {
        vertical-align: middle !important;
    }

    /* Estilo para o cabeçalho da tabela */
    thead.table-dark {
        background-color: #343a40 !important;
        color: white !important;
    }

    th {
        font-weight: bold !important;
        padding: 12px 15px !important;
    }

    td {
        padding: 10px 15px !important;
    }

    /* Efeito de hover para as linhas */
    tbody tr:hover {
        background-color: #f1f1f1 !important;
        cursor: pointer !important;
    }

    /* Estilos para os botões */
    .btn {
        font-weight: bold !important;
        padding: 8px 16px !important;
    }

    /* Tema de Mariele */
    .mariele-theme {
        background-color: #ff69b4 !important; /* Rosa forte */
        color: white !important;
        min-height: 100vh !important;
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

    /* Botões personalizados */
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

    /* Para o filtro "ativas" */
    .mariele-btn.active {
        background-color: #9932CC !important;
    }

    /* Alterando o estilo da tabela quando o tema de Mariele é aplicado */
    .mariele-theme-table {
        background-color: #9400d3 !important; /* Roxo forte */
        color: white !important;
        border-radius: 10px !important;
    }

    .mariele-theme-table th,
    .mariele-theme-table td {
        background-color: #9400d3 !important;
        color: white !important;
        border-color: #4B0082 !important; /* Bordas roxas escuras */
    }

    .mariele-theme-table thead {
        background-color: #800080 !important; /* Roxo escuro */
    }

    .mariele-theme-table tbody tr:hover {
        background-color: #9932CC !important; /* Roxo médio */
    }

    .table-striped tbody tr:nth-of-type(odd) {
        background-color: #7a0ba8 !important; /* Roxo mais claro */
    }

    .table-striped tbody tr:nth-of-type(even) {
        background-color: #9400d3 !important; /* Roxo forte */
    }
</style>

<script>
    document.getElementById("allReservations").addEventListener("click", function() {
        window.location.href = "<?php echo e(url('/minhas-reservas')); ?>?filtro=todas";
    });

    document.getElementById("activeReservations").addEventListener("click", function() {
        window.location.href = "<?php echo e(url('/minhas-reservas')); ?>?filtro=ativas";
    });
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\reservas-sgbr-main\resources\views/minhas.blade.php ENDPATH**/ ?>