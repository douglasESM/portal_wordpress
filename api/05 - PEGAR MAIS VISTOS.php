<!-- INSTALE O PLUGIN WP-PostsViews -->

<?php if (function_exists('get_most_viewd')): ?>
    <ol>
        <?php get_most_viewd('post', 5); ?>
    <ol>
<?php endif; ?>
</div>