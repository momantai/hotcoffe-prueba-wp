<div class="next-or-prev">
    <?php if (get_previous_posts_link()): ?>
        <a class="buttons-next-prev" href="<?php previous_posts(); ?>"><- Previus Page</a>
    <?php else: ?>
        <div class="no-previous"></div>
    <?php endif; ?>
    
    <?php if (get_next_posts_link()): ?>
        <a class="buttons-next-prev" href="<?php next_posts(); ?>">Next Page -></a>
    <?php else: ?>
        <div class="no-next"></div>
    <?php endif; ?>
</div>