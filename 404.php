<?php get_header(); ?>
<div class="container-404">
    <div class="page-heading">Oh! What?? 404?</div>
    <img src="http://source.unsplash.com/640x480/?cats" alt="cats">
    <h3>Sorry frind, I think you're lost. Plz try the following links.</h3>
    <ul>
        <li><a href="<?= site_url('/blog') ;?>">Blog</a></li>
        <li><a href="<?= site_url('/projects') ;?>">Projects List</a></li>
        <li><a href="<?= site_url('/about') ;?>">About Me</a></li>
        <li><a href="<?= site_url('') ;?>">Home Page</a></li>
    </ul>
</div>

<?php get_footer(); ?>