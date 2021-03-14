
<?php $__env->startSection("titulo","Editar noticia"); ?>
<?php $__env->startSection('contenido_principal'); ?>

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Crear noticia</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Noticias</a></li>
              <li class="breadcrumb-item active">Editar noticia</li>
             
            </ol>
          </div>
          <div>  <a href="<?php echo e(route("admin.noticias.index")); ?>">Volver a lista de noticias</a></div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
 
    <!-- Default box -->
    <div class="card">
        <div class="card-header">
          <h3 class="card-title">Editar Noticia</h3>

          
        </div>
        <div class="card-body">
        <?php if(Session::has("exito")): ?>
            <p style="color: #87adff"><?php echo e(Session::get("exito")); ?></p>
        <?php endif; ?>
        <?php if(Session::has("error")): ?>
         <p style="color: #ff7070"><?php echo e(Session::get("error")); ?></p>
        <?php endif; ?>
         <form method="POST" action="<?php echo e(route("admin.noticias.update", $noticia->id)); ?>">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="form-group">
        <label>Título:</label>
        <input  class =" form-control" name="titulo" type="text" value="<?php echo e($noticia->titulo); ?>" required >
        </div>
        <div class="form-group">
        <label>Fecha:</label>
        <input class =" form-control" name="fecha" value="<?php echo e($noticia->fecha); ?>"type="date">
        </div>
        <div class="form-group">
        <label>Autor:</label>
        <input class =" form-control" name="autor" value="<?php echo e($noticia->autor); ?>" type="text">
        </div>
        <div class="form-group">
        <label>Cuerpo:</label>
        <textarea class =" form-control"  rows="5" name="cuerpo" ><?php echo e($noticia->cuerpo); ?></textarea>
        </div>
        <div class="form-group">
        <label>Foto:</label>
        <input class =" form-control"  name="foto" value="<?php echo e($noticia->foto); ?>" type="text">
        </div>
        <div class="form-group">
        <button type="submit" class="btn btn-primary">Actualizar noticia</button>
        </div>
    </form>
        
       
    </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Pie de la tabla de lista de noticias
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Manuel Ernesto\Desktop\Graficos Avanzados\ControladorMasBonito\resources\views/admin/noticias/edit.blade.php ENDPATH**/ ?>