
    <style>
       
    </style>
<div class="grid_6 alpha">
    <div class="footer_widget first">
        <?php if (is_active_sidebar('first-footer-widget-area')) : ?>
            <?php dynamic_sidebar('first-footer-widget-area'); ?>
        <?php else : ?>
            <h4>Company About Us</h4>
             <p class="footer-para">orem ipsum dolor sit amet, consectetur adipiscing elit. Fusce dolor lorem, placerat et lorem ac, commodo mattis leo. Proin tincidunt sodales leo. Sed aliquet magna ut massa vestibulum faucibus. Fusce urna ex, sagittis ut tempus non, ultricies at diam.</p>
        <?php endif; ?>
    </div>
</div>
<div class="grid_6">
    <div class="footer_widget">
        <?php if (is_active_sidebar('second-footer-widget-area')) : ?>
            <?php dynamic_sidebar('second-footer-widget-area'); ?>
        <?php else : ?> 
            <h4>Latest News</h4>
            <p class="footer-para">orem ipsum dolor sit amet, consectetur adipiscing elit. Fusce dolor lorem, placerat et lorem ac, commodo mattis leo. Proin tincidunt sodales leo. Sed aliquet magna ut massa vestibulum faucibus. Fusce urna ex, sagittis ut tempus non, ultricies at diam.</p>
        <?php endif; ?> 
    </div>
</div>
<div class="grid_6">
    <div class="footer_widget">
        <?php if (is_active_sidebar('third-footer-widget-area')) : ?>
            <?php dynamic_sidebar('third-footer-widget-area'); ?>
        <?php else : ?>
            <h4>Quick Links</h4>
            <p>
            <ul style="font-size:15px">
                <li>Home</li>
                <li>About us</li>
                <li>our project</li>
                <li>Contact us</li>

            </ul>
        </p>
          <!--   <form class="searchform" action="#" method="get">
                <input onfocus="if (this.value == 'Search') {
                            this.value = '';
                        }" onblur="if (this.value == '') {
                                    this.value = 'Search';
                                }"  value="Search" type="text" name="s" id="s" />
                <input type="submit" value="" name="submit"/>
            </form> -->
        <?php endif; ?>
    </div>
</div>
<div class="grid_6 omega">
    <div class="footer_widget last">
        <?php if (is_active_sidebar('fourth-footer-widget-area')) : ?>
            <?php dynamic_sidebar('fourth-footer-widget-area'); ?>
        <?php else : ?>
            <h4>Contact</h4>
            <h5 style="color:white;margin-bottom: 2px;font-size:18px;"><!-- <i class="fa fa-building" aria-hidden="true"> --><span style="margin-left: 10px;">Address</span><!-- </i> --></h5>
            <p>Sanchee Enclave, Shop no. 2, Ground floor,
               Pimpri Chowk, Nana Peth</p>
               <h5 style="color:white;margin-bottom: 2px;font-size:18px;"><!-- <i class="fa fa-phone" aria-hidden="true"> --><span style="margin-left: 10px;">Contact No</span><!-- </i> --></h5>
               <p>(+91) 913-003-1117 /<br>
                 (+91) 913-004-1117</p>
                 <h5 style="color:white;margin-bottom: 2px;font-size:18px;"><!-- i class="fa fa-envelope " aria-hidden="true"><span style="margin-left: 10px;"> -->Email</span><!-- </i> --></h5>
                 <p>info@aviscoitsolutions.com</p>
        <?php endif; ?>
    </div>
</div>