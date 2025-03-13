<?php echo $__env->make('top_bar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php if(session('success')): ?>
    <div class="alert alert-success">
        <?php echo e(session('success')); ?>

    </div>
<?php endif; ?>

<?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>

<?php $__env->startSection('content'); ?>
<div class="container mt-5 <?php echo e(session('user.username') == 'Mariele' ? 'mariele-theme' : ''); ?>">
    <div class="row justify-content-center">
        <div class="col-md-6 col-sm-8">
            <div class="card p-5 <?php echo e(session('user.username') == 'Mariele' ? 'mariele-card' : ''); ?>">
                
                <!-- Título -->
                <div class="text-center p-3">
                    <h2>Meus Dados</h2>
                </div>

                <!-- Formulário -->
                <form action="<?php echo e(route('dadosSubmit')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>

                    <!-- Nome -->
                    <div class="mb-3">
                        <label for="text_name" class="form-label <?php echo e(session('user.username') == 'Mariele' ? 'mariele-label' : ''); ?>">Nome</label>
                        <input type="text" class="form-control" name="text_name" value="<?php echo e(old('text_name', $usuario->name)); ?>" required>
                        <?php $__errorArgs = ['text_name'];
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

                    <!-- E-mail -->
                    <div class="mb-3">
                        <label for="text_email" class="form-label <?php echo e(session('user.username') == 'Mariele' ? 'mariele-label' : ''); ?>">E-mail</label>
                        <input type="email" class="form-control" name="text_email" value="<?php echo e(old('text_email', $usuario->email)); ?>" required>
                        <?php $__errorArgs = ['text_email'];
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

                    <!-- Senha -->
                    <div class="mb-3">
                        <label for="text_password" class="form-label <?php echo e(session('user.username') == 'Mariele' ? 'mariele-label' : ''); ?>">Nova Senha</label>
                        <input type="password" class="form-control" name="text_password">
                        <?php $__errorArgs = ['text_password'];
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

                    <!-- Confirmar Senha -->
                    <div class="mb-3">
                        <label for="text_password_confirmation" class="form-label <?php echo e(session('user.username') == 'Mariele' ? 'mariele-label' : ''); ?>">Confirmar Senha</label>
                        <input type="password" class="form-control" name="text_password_confirmation">
                        <?php $__errorArgs = ['text_password_confirmation'];
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

                    <!-- Botão -->
                    <div class="mb-3">
                        <button type="submit" class="btn w-100 <?php echo e(session('user.username') == 'Mariele' ? 'mariele-btn' : 'btn-primary'); ?>">Atualizar Dados</button>
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

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\reservas-sgbr-main\resources\views/dados.blade.php ENDPATH**/ ?>