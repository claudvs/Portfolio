     <footer class="page-footer grey darken-3">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Redes Sociales</h5>
                <div class="socialMedia">
                    <ul>
                        <li>
                            <a href="#" class="facebook">
                            </a>
                        </li>
                        <li>
                            <a href="#" class="twitter">
                            </a>
                        </li>
                        <li>
                            <a href="#" class="instagram">
                            </a>
                        </li>
                    </ul>
                </div>
              </div>
              <div class="col l4 offset-l2 s12 footer-menu">
                <?php if(has_nav_menu('primary')):?>
                            <?php wp_nav_menu(
                            array(
                             'theme_location' => 'primary',   
                            'container' => 'nav',
                            'items_wrap' => '<ul id="nav-mobile" class="grey darken-3 right hide-on-med-and-down"">%3$s</ul>',
                            )); ?>                   
                    <?php endif;?>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2014 Copyright
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>











        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url')?>/js/jquery-1.11.3.min.js"></script>
  
            
        <script src="<?php bloginfo('template_url')?>/js//plugins.js"></script>
             <script type="text/javascript" src="<?php bloginfo('template_url')?>/js/parallax.min.js"></script>
             <script type="text/javascript" src="<?php bloginfo('template_url')?>/js/materialize.min.js"></script> 

        <script src="<?php bloginfo('template_url')?>/js/main.js"></script>
 
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>

<?php wp_footer(); ?>

</body>
</html>
