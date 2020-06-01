<!-- DOCUMENTAÇÃO DE SCRIPTS EXTERNOS 
     http://codex.wordpress.org/Function_Reference/wp_enquete_script
     -->

     <!-- ENQUETE COM WP-POLLS -->
     <?php
        if (function_exists('vote_poll') && !in_pollarchive()): ?>
        <ul>
            <li><?php get_pull(); ?></li>
        </ul>

        <?php endif; ?>