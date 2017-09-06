<?php 

$args = array (
    'post_type' => 'your_post',
);
$your_loop = new WP_Query ($args);

if($your_loop->have_posts()): while ($your_loop->have_posts()): $your_loop-> the_post();

$meta = get_post_meta($post->ID, 'your_fields',true);?>

<!-- contents of Your Post -->

<?php endwhile ; endif; wp_reset_postdate(); ?>

<h1>Title</h1>
<?php the_title();?>

<h1>Content</h1>
<?php the_content(); ?>

<h1>Excerpt</h1>
<?php the_excerpt(); ?>

<h1>Text Input</h1>
<?php echo $meta['text']; ?>

<h1>Textarea</h1>
<?php echo $meta['textarea']; ?>