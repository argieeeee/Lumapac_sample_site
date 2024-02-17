<footer>
  <div class="footer_top">
    <div class="wrapper">
      <div class="contact_info">
        <h2>Heading<span>Sub</span></h2>
        <ul>
          <li>address</li>
          <li>contactPhone</li>
        </ul>
      </div>
    </div>
  </div>

  <div class="footer_btm">
    <div class="wrapper">
      <div class="footer_nav">
        <ul>
          <li><a href="">Home</a></li>
          <li><a href="">About Us</a></li>
          <li><a href="">Services</a></li>
          <li><a href="">Careers</a></li>
          <li><a href="">Resources</a></li>
          <li><a href="">Contact Us</a></li>
        </ul>
      </div>

      <div class="copyright">
        &copy; Copyright
        <?php
        $start_year = '2018';
        $current_year = date('Y');
        $copyright = ($current_year == $start_year) ? $start_year : $start_year.' - '.$current_year;
        echo $copyright;
        ?>
        <span class="footer_comp"><?php //echo get_bloginfo('name');?>CompanyName</span>
        <a href="XXXXXXXX" target="_blank">XXXXXXXXXXXXXXXXXXXXX</a>: <a href="http://proweaver.com" target="_blank">Proweaver</a>
      </div>
    </div>

    </div>
</footer>

<span class="back_top"></span>

    </div> <!-- End Clearfix -->
    </div> <!-- End Protect Me -->

    <!--?php get_includes('ie');?-->

    <!--
    Solved HTML5 & CSS IE Issues
    -->
    <script src="js/modernizr-custom-v2.7.1.min.js"></script>
    <script src="js/jquery-1.9.0.min.js"></script>

    <!--
    Solved Psuedo Elements IE Issues
    -->
    <script src="js/calcheight.js"></script>
    <!-- <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.skitter.min.js"></script> -->
    <script src="js/responsiveslides.min.js"></script>
    <script src="js/plugins.js"></script>

    <!--?php wp_footer(); ?-->

</body>
</html>
<!--Author: 538-->
