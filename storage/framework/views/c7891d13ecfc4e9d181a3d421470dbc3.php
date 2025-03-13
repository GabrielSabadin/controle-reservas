

<?php echo $__env->make('top_bar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('content'); ?>
<div class="container mt-5 <?php echo e(session('user.username') == 'Mariele' ? 'mariele-theme' : ''); ?>">
    <div class="row justify-content-center">
        <div class="col-md-6 col-sm-8">
            <div class="card p-5 <?php echo e(session('user.username') == 'Mariele' ? 'mariele-card' : ''); ?>">
                
                <!-- Título -->
                <div class="text-center p-3">
                    <h2>Editar Reserva</h2>
                </div>

                <!-- Formulário -->
                <form action="<?php echo e(route('editarSubmit')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <input type="hidden" name="id" value="<?php echo e(old('id', request('id'))); ?>">

                    <!-- Finalidade -->
                    <div class="mb-3">
                        <label for="finalidade" class="form-label <?php echo e(session('user.username') == 'Mariele' ? 'mariele-label' : ''); ?>">Finalidade</label>
                        <input type="text" class="form-control <?php echo e(session('user.username') == 'Mariele' ? 'mariele-input' : ''); ?>" name="finalidade" value="<?php echo e(old('finalidade', request('finalidade'))); ?>" required>
                        <?php $__errorArgs = ['finalidade'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="text-danger"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <!-- Horário de Início -->
                    <div class="mb-3">
                        <label for="horario_inicio" class="form-label <?php echo e(session('user.username') == 'Mariele' ? 'mariele-label' : ''); ?>">Horário de Início</label>
                        <input type="time" class="form-control <?php echo e(session('user.username') == 'Mariele' ? 'mariele-input' : ''); ?>" name="horario_inicio" value="<?php echo e(old('horario_inicio', request('horario_inicio'))); ?>" required>
                        <?php $__errorArgs = ['horario_inicio'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="text-danger"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <!-- Horário de Fim -->
                    <div class="mb-3">
                        <label for="horario_fim" class="form-label <?php echo e(session('user.username') == 'Mariele' ? 'mariele-label' : ''); ?>">Horário de Fim</label>
                        <input type="time" class="form-control <?php echo e(session('user.username') == 'Mariele' ? 'mariele-input' : ''); ?>" name="horario_fim" value="<?php echo e(old('horario_fim', request('horario_fim'))); ?>" required>
                        <?php $__errorArgs = ['horario_fim'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="text-danger"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <!-- Interno/Externo -->
                    <div class="mb-3">
                        <label for="tipo" class="form-label <?php echo e(session('user.username') == 'Mariele' ? 'mariele-label' : ''); ?>">Tipo</label>
                        <select class="form-control <?php echo e(session('user.username') == 'Mariele' ? 'mariele-input' : ''); ?>" name="tipo" required>
                            <option value="">Selecione</option>
                            <option value="interno" <?php echo e(old('tipo', request('tipo')) == 'interno' ? 'selected' : ''); ?>>Interno</option>
                            <option value="externo" <?php echo e(old('tipo', request('tipo')) == 'externo' ? 'selected' : ''); ?>>Externo</option>
                        </select>
                        <?php $__errorArgs = ['tipo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="text-danger"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <!-- Observações -->
                    <div class="mb-3">
                        <label for="observacoes" class="form-label <?php echo e(session('user.username') == 'Mariele' ? 'mariele-label' : ''); ?>">Observações</label>
                        <textarea class="form-control <?php echo e(session('user.username') == 'Mariele' ? 'mariele-input' : ''); ?>" name="observacoes" rows="3"><?php echo e(old('observacoes', request('observacao'))); ?></textarea>
                        <?php $__errorArgs = ['observacoes'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="text-danger"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <!-- Botão de Atualizar -->
                    <div class="mb-3">
                        <button type="submit" class="btn w-100 <?php echo e(session('user.username') == 'Mariele' ? 'mariele-btn' : 'btn-primary'); ?>">Atualizar Reserva</button>
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
<div class="modal fade <?php echo e(session('user.username') == 'Mariele' ? 'mariele-modal' : ''); ?>" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content <?php echo e(session('user.username') == 'Mariele' ? 'mariele-modal-content' : ''); ?>">
            <div class="modal-header <?php echo e(session('user.username') == 'Mariele' ? 'mariele-modal-header' : ''); ?>">
                <h5 class="modal-title" id="deleteModalLabel">Confirmar Exclusão</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Tem certeza de que deseja excluir esta reserva? Esta ação não pode ser desfeita.
            </div>
            <div class="modal-footer">
                <form action="<?php echo e(route('apagarSubmit', ['id' => request()->id])); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="btn <?php echo e(session('user.username') == 'Mariele' ? 'btn-mariele-danger' : 'btn-danger'); ?>">Deletar</button>
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

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\reservas-sgbr-main\resources\views/editar.blade.php ENDPATH**/ ?>