<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if($noticia != NULL): ?><?php echo e($noticia->titulo); ?><?php else: ?> NO se encontro noticia <?php endif; ?></title>
</head>
<body>
    <a href="<?php echo e(route("admin.noticias.index")); ?>">Volver a lista de noticias</a>
    <?php if($noticia != NULL): ?>
        <h1><?php echo e($noticia->titulo); ?></h1>
        <p><?php echo e($noticia->fecha); ?></p>
        <h4><?php echo e($noticia->autor); ?></h4>
        <?php if($noticia->foto != NULL): ?>
            <img src="<?php echo e($noticia->foto); ?>" style="width:300px; height:auto;" />
        <?php endif; ?>
        <p><?php echo e($noticia->cuerpo); ?></p>
    <?php else: ?>
        <h1> lo sentimos noticia no encontrada </h1>
    <?php endif; ?>
</body>
</html><?php /**PATH C:\Users\Manuel Ernesto\Desktop\Graficos Avanzados\ControladorMasBonito\resources\views/admin/noticias/show.blade.php ENDPATH**/ ?>