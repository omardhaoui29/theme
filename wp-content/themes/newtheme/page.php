<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>

  <article class="topcontent">
    <header>
     <h2><a href="<?php the_permalink(); ?>" title="MUSIC TUTORIAL"> <?php the_title(); ?></a> </h2>
       </header>
        <footer>
         <P class="post-info"><?php the_author_posts_link(); ?> | <?php the_date(); ?> </P>  
            </footer>
     <a href="<?php the_permalink(); ?>">
        <?php the_post_thumbnail('thumbnail'); ?>
        </a>
      <content>
          <p> 
     <?php the_content('Read More'); ?>
     </p>
    </content>
    <br>
    <hr>
    <?php comments_template(); ?>
    </article>

    <?php endwhile; ?>

    </div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>