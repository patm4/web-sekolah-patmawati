

<?php $__env->startSection('title', 'Guru - SMK Negeri 1 Cijati'); ?>

<?php $__env->startSection('content'); ?>

<style>
    .guru-container {
        width: 90%;
        max-width: 1100px;
        margin: 50px auto;
    }

    .guru-header {
        text-align: center;
        margin-bottom: 40px;
    }

    .guru-header h1 {
        font-size: 36px;
        margin-bottom: 10px;
    }

    .guru-header p {
        color: #666;
        font-size: 17px;
    }

    .guru-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 25px;
    }

    .guru-card {
        background: white;
        padding: 25px;
        border-radius: 12px;
        text-align: center;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .guru-icon {
        width: 80px;
        height: 80px;
        margin: 0 auto 15px;
        border-radius: 50%;
        background: #0d6efd;
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 32px;
    }

    .guru-card h2 {
        font-size: 20px;
        margin: 10px 0;
    }

    .guru-card p {
        color: #666;
        margin: 0;
    }

    .jabatan {
        display: inline-block;
        margin-top: 12px;
        padding: 6px 12px;
        background: #e9f2ff;
        color: #0d6efd;
        border-radius: 20px;
        font-size: 14px;
    }
</style>


<div class="guru-container">

    <div class="guru-header">

        <h1>Guru dan Tenaga Kependidikan</h1>

        <p>
            Daftar guru dan tenaga kependidikan SMK Negeri 1 Cijati
        </p>

    </div>


    <div class="guru-grid">

        <?php $__currentLoopData = $gurus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $guru): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <div class="guru-card">

                <div class="guru-icon">
                    👤
                </div>

                <h2>
                    <?php echo e($guru->nama); ?>

                </h2>

                <p class="jabatan">
                    <?php echo e($guru->jabatan); ?>

                </p>

            </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\web-sekolah-patmawati\resources\views/guru.blade.php ENDPATH**/ ?>