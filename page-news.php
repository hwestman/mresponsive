<?php
/*
Template Name: Page - Nyheter
*/  

get_header(); ?>


<?php get_template_part( 'template-content-header-normal'); ?> 

<div id="sidebar" class="sidebar-left">
  <div id="sidebar-padding">
  
    <div class="news-navbar">


        <div class="sidebar-menu-container">


        <div class="sidebar-menu-header">
            <h3 class="sidebar-menu-title">Alternativer</h3>
            <button class="sidebar-menu-toggle">
                <span class="toggle-button-stroke"></span>
                <span class="toggle-button-stroke"></span>
                <span class="toggle-button-stroke"></span>
            </button>
        </div> <!-- .sidebar-menu-header -->

                <ul class="sidebar-menu">
                <li class="submenu-toggle">
                  <li class="news-nav-item">
                    <a href="" class="news-nav-item-link">2015</a>
                  </li>
                  <li class="news-nav-item">
                     <a href="" class="news-nav-item-link">2014</a>
                  </li>
                </ul> <!-- .sidebar-menu -->
        </div> <!-- .sidebar-menu-container -->


    </div> <!-- #news-navbar-->
  </div> <!-- #sidebar-padding -->
</div> <!-- #sidebar -->


        <div id="content-sidebar" class="content-right" >

        <div id="content-padding">
          <div class="news-archive-single-container">
            <a class="news-archive-thumbnail-link" href="">
              <img src="<?php echo get_stylesheet_directory_uri() ?>/img/test_news_image.jpg"> 
            </a>
            <div class="news-archive-single-content">
              <a class="news-archive-heading-link" href="">
                <h2>Super lang  asd asdasd kalk alsldasd asdas </h2>
              </a>
              <span class="news-archive-meta">Publisert den 24. mai 2015</span>
              <a class="news-archive-excerpt-link" href="">
                <p>Donec sollicitudin molestie malesuada. Cras ultricies ligula sed magna dictum porta. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quis lorem ut libero malesuada feugiat. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Nulla quis lorem ut libero malesuada feugiat. Nulla quis […]</p>
              </a>
            </div>
          </div>
        </div>

        <div id="content-padding">
          <div class="news-archive-single-container">
            <a class="news-archive-thumbnail-link" href="">
              <img src="<?php echo get_stylesheet_directory_uri() ?>/img/test_news_image.jpg"> 
            </a>
            <div class="news-archive-single-content">
              <a class="news-archive-heading-link" href="">
                <h2>Super lang  asd asdasd kalk alsldasd asdas </h2>
              </a>
              <span class="news-archive-meta">Publisert den 24. mai 2015</span>
              <a class="news-archive-excerpt-link" href="">
                <p>Donec sollicitudin molestie malesuada. Cras ultricies ligula sed magna dictum porta. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quis lorem ut libero malesuada feugiat. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Nulla quis lorem ut libero malesuada feugiat. Nulla quis […]</p>
              </a>
            </div>
          </div>
        </div>

        <div id="content-padding">
          <div class="news-archive-single-container">
            <a class="news-archive-thumbnail-link" href="">
              <img src="<?php echo get_stylesheet_directory_uri() ?>/img/test_news_image.jpg"> 
            </a>
            <div class="news-archive-single-content">
              <a class="news-archive-heading-link" href="">
                <h2>Super lang  asd asdasd kalk alsldasd asdas </h2>
              </a>
              <span class="news-archive-meta">Publisert den 24. mai 2015</span>
              <a class="news-archive-excerpt-link" href="">
                <p>Donec sollicitudin molestie malesuada. Cras ultricies ligula sed asd adsi asdoa aa s Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quis lorem ut libero malesuada feugiat. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Nulla quis lorem ut libero malesuada feugiat. Nulla quis […]</p>
              </a>
            </div>
          </div>
        </div>

        </div> <!-- #content-sidebar -->



</div>

<div id="sidebar-background" class="sidebar-background-left">
  
</div> <!-- #content -->


  <div class="push"></div> <!-- .push must be inside #wrapper -->

</div> <!-- #wrapper -->

<?php
get_footer();