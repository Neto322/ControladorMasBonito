<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noticias</title>
</head>
<body>
    <h1>Noticias</h1>
    <?php $__currentLoopData = $noticias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $noticia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <h3><a href="<?php echo e(route("noticias.detalles",$noticia->id)); ?>"><?php echo e($noticia->titulo); ?></a></h3>
        <p><?php echo e($noticia->fecha); ?></p>
        <p><?php echo e($noticia->autor); ?></p>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</body>
</html><?php /**PATH C:\Users\Manuel Ernesto\Desktop\Graficos Avanzados\ControladorMasBonito\resources\views/noticias/lista.blade.php ENDPATH**/ ?>