<html>
    <head>
        <style>
            img{
                margin-right: 20px;
                margin-top: 20px;
            }
          
        </style>
        <title>
            <?php echo e(__('Barcode')); ?> - #<?php echo e($group['id']); ?>

        </title>
    </head>
    <body>
        <?php for($i = 0; $i < $number; $i++): ?>
            <img src="data:image/png;base64,<?php echo e($barcode_image); ?>" alt="barcode"  width="200"/>
        <?php endfor; ?>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\extreme-vet\resources\views/pdf/barcode.blade.php ENDPATH**/ ?>