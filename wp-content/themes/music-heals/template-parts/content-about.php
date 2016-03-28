<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */

?>

<div>
  <?php echo CFS()->get( 'tagline' ); ?>
  <!-- <span>About Us</span> -->
</div>

<!--  WHO WE ARE -->

<section>
  <div class="who-we-are-banner">
    <div class="who-we-are-content-box">
      <h1>Who we are</h1>

      <?php echo CFS()->get( 'who_we_are_copy' ); ?>

      <button type="button" class="donate-button">Give</button>
    </div>
  </div>
</section>

<!--  HOW WE HELP -->

<section>
  <div class="how-we-help-banner">
    <div class="how-we-help-content-box">
      <h1>How we help</h1>

      <?php echo CFS()->get( 'how_we_help_copy' ); ?>
    </div>
  </div>
</section>

<!--  PROGRAMS  -->

<section>
  <div class="programs-banner">
    <div class="programs-content-box">
      <h1>Programs</h1>

      <?php echo CFS()->get( 'programs_copy' ); ?>

      <button type="button" class="donate-button">Give</button>
    </div>
  </div>
</section>

<!--  SUCCESS STORIES-->

<section>
  <div class="success-stories-banner">

    <iframe src="https://player.vimeo.com/video/108250365"
            width="500" height="281"
            frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen>
    </iframe>

    <div class="success-stories-content-box">
      <h1>Success Stories</h1>

      <?php echo CFS()->get( 'success_stories_copy' ); ?>
    </div>
  </div>
</section>
