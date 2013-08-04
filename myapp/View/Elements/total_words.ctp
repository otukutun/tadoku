<?php if ($digits <= 3): ?>
<div class="row">
    <div class="col-lg-4"></div>
    <div class="col-lg-4" id="total_words"><?php echo h($total_words); ?></div>
    <div class="col-lg-4"></div>
</div>
<?php elseif ($digits <= 4): ?>
<div class="row">
    <div class="col-lg-3"></div>
    <div class="col-lg-6" id="total_words"><?php echo h($total_words); ?></div>
    <div class="col-lg-3"></div>
</div>
<?php elseif ($digits <= 7): ?>
<div class="row">
    <div class="col-lg-2"></div>
    <div class="col-lg-8" id="total_words"><?php echo h($total_words); ?></div>
    <div class="col-lg-2"></div>
</div>
<?php else: ?>
<div class="row">
    <div class="col-lg-1"></div>
    <div class="col-lg-8" id="total_words"><?php echo h($total_words); ?></div>
    <div class="col-lg-1"></div>
</div>
<?php endif; ?>

