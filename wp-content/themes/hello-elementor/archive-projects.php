<?php
get_header();


$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = [
    'post_type' => 'projects',
    'posts_per_page' => 6,
    'paged' => $paged,
];
$query = new WP_Query($args);

if ($query->have_posts()) :
    while ($query->have_posts()) : $query->the_post();
        the_title('<h2>', '</h2>');
        the_excerpt();
    endwhile;

    echo '<div class="pagination">';
    echo paginate_links([
        'total' => $query->max_num_pages,
        'prev_text' => __('« Previous'),
        'next_text' => __('Next »'),
    ]);
    echo '</div>';
else :
    echo '<p>No projects found.</p>';
endif;

get_footer();