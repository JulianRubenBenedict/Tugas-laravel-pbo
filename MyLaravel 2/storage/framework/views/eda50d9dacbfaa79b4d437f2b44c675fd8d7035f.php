

<?php $__env->startSection('title', 'Portofolio'); ?>

<?php $__env->startSection('container'); ?>
<div class="container">
  <div class="row">
    <div class="col-10">
      <h1><span class="badge badge-secondary">Portofolio</span></h1>
      <div class="jumbotron jumbotron-fluid p-3 mb-2 bg-dark text-white rounded-bottom">

        <table align="center">
          <tr>
            <td align="center">
              <div class="card p-3 mb-2 bg-dark text-white" style="width: 18rem;">
                <img src="<?php echo e(URL ::to('/assets/men.jpeg')); ?>" class="card-img-top" width="200px">
                <div class="card-body p-3 mb-2 bg-light text-dark rounded-bottom">
                  <p class="card-text p-3 mb-2 bg-light text-dark">Membuat aplikasi Belajar Mengaji saat kelas X</p>
                </div>
              </div>
            </td>
            <td align="center">
              <div class="card p-3 mb-2 bg-dark text-white" style="width: 18rem;">
                <img src="<?php echo e(URL ::to('/assets/qwe.jpg')); ?>" class="card-img-top">
                <div class="card-body p-3 mb-2 bg-light text-dark rounded-bottom">
                  <p class="card-text p-3 mb-2 bg-light text-dark">Kunjingan Industri ke pt.spasi</p>
                </div>
              </div>
            </td>
            <td align="center">
              <div class="card p-3 mb-2 bg-dark text-white" style="width: 18rem;">
                <img src="<?php echo e(URL ::to('/assets/exp4.png')); ?>" class="card-img-top">
                <div class="card-body p-3 mb-2 bg-light text-dark rounded-bottom">
                  <p class="card-text p-3 mb-2 bg-light text-dark">Membuat design webite Pertama</p>
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td align="center">
              <div class="card p-3 mb-2 bg-dark text-white" style="width: 18rem;">
                <img src="<?php echo e(URL ::to('/assets/exp1.png')); ?>" class="card-img-top" width="200px">
                <div class="card-body p-3 mb-2 bg-light text-dark rounded-bottom">
                  <p class="card-text p-3 mb-2 bg-light text-dark">Membuat Form Input Master</p>
                </div>
              </div>
            </td>
            <td align="center">
              <div class="card p-3 mb-2 bg-dark text-white" style="width: 18rem;">
                <img src="<?php echo e(URL ::to('/assets/exp2.png')); ?>" class="card-img-top">
                <div class="card-body p-3 mb-2 bg-light text-dark rounded-bottom">
                  <p class="card-text p-3 mb-2 bg-light text-dark">Membuat aplikasi Starbhak Mart</p>
                </div>
              </div>
            </td>
            <td align="center">
              <div class="card p-3 mb-2 bg-dark text-white" style="width: 18rem;">
                <img src="<?php echo e(URL ::to('/assets/exp3.png')); ?>" class="card-img-top">
                <div class="card-body p-3 mb-2 bg-light text-dark rounded-bottom">
                  <p class="card-text p-3 mb-2 bg-light text-dark">Membuat Mockup dengan Adobe Xd</p>
                </div>
              </div>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\MyLaravel\resources\views/porto.blade.php ENDPATH**/ ?>