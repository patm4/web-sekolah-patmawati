

<?php $__env->startSection('title', 'ekstrakurikulers - SMK Negeri 1 Cijati'); ?>

<?php $__env->startSection('content'); ?>

<style>
    .eskul-page {
        padding: 50px 30px;
        max-width: 1200px;
        margin: auto;
    }

    .eskul-title {
        text-align: center;
        margin-bottom: 40px;
    }

    .eskul-title h1 {
        font-size: 36px;
        color: #0d6efd;
        margin-bottom: 10px;
    }

    .eskul-title p {
        color: #666;
        font-size: 16px;
    }

    .eskul-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 25px;
    }

    .eskul-card {
        background: white;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0,0,0,0.12);
        transition: 0.3s;
    }

    .eskul-card:hover {
        transform: translateY(-5px);
    }

    .eskul-card img {
        width: 100%;
        height: 180px;
        object-fit: contain;
        display: block;
    }

    .eskul-content {
        padding: 20px;
    }

    .eskul-content h2 {
        margin-top: 0;
        margin-bottom: 10px;
        color: #0d6efd;
        font-size: 23px;
    }

    .eskul-content p {
        color: #555;
        line-height: 1.6;
        margin: 0;
    }

    .tidak-ada {
        text-align: center;
        padding: 40px;
        background: white;
        border-radius: 15px;
        color: #666;
    }
</style>

<div class="eskul-page">

    <div class="eskul-title">
        <h1>Ekstrakurikuler</h1>
        <p>
            Berbagai kegiatan ekstrakurikuler yang tersedia di SMK Negeri 1 Cijati
        </p>
    </div>

    <?php if(($ekstrakurikuler ?? collect())->count() > 0): ?>

        <div class="eskul-grid">

            <?php $__currentLoopData = $ekstrakurikulers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $eskul): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <div class="eskul-card">

                    <img
                        src="<?php echo e(asset('images/' . $eskul->logo)); ?>"
                        alt="<?php echo e($eskul->nama_ekskul); ?>"
                    >

                    <div class="eskul-content">

                        <h2><?php echo e($eskul->nama_ekskul); ?></h2>

                        <p>
                            <?php echo e($eskul->deskripsi); ?>

                        </p>

                    </div>

                </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>

    <?php else: ?>

        <div class="tidak-ada">
            <h2>Data ekstrakurikuler belum tersedia.</h2>
        </div>

    <?php endif; ?>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\web-sekolah-patmawati\resources\views/ekstrakurikuler.blade.php ENDPATH**/ ?>