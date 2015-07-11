<div class="row tags">
    <div class="large-12 columns">
        <strong>Skills / Tech:</strong>
        <small><?php foreach ($experience['Tag'] as $k => $tag): ?><?php if ($k > 0): ?>, <?php endif; ?><span data-count="<?php echo h($tag['occurrence']); ?>"><?php echo h($tag['name']); ?></span><?php endforeach; ?></small>
    </div>
</div>