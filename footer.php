 </div><!-- /.row -->

 </div><!-- /.container -->

 <footer class="blog-footer">
     <p>Blog template built for <a href="http://getbootstrap.com">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
     <p><a href="#">Back to top</a></p>

     <?php $menuParameters = array(
            'menu' => 'primary_menu',
            'link_before'     => '<span class="text-dark font-weight-bold blog-nav-item navbar-default icon-bar" >',
            'link_after'      => '</span>',
            // 'before'        => '<nav class="tp-primary-header mui-top-home">',
            // 'after'     => '</nav>',
            'container_class'       => 'blog-nav-item ',
            'echo'            => false,
            'depth'           => 0,
        );

        echo strip_tags(wp_nav_menu($menuParameters), '<a><span><div>'); ?>
 </footer>
 <?php wp_footer(); ?>
 </body>

 </html>