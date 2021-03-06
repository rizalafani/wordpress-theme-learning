
        
        <?php get_sidebar() ?>
        
        <div class="cleaner"></div>
    </div> <!-- end of main -->
    
    <div id="tooplate_footer_wrapper">
        <div id="tooplate_footer">
            
            <div class="col_w280">
                <h5>Pages</h5>
                <ul class="tooplate_list">
                     <li>
                        <a href="<?php echo esc_url(home_url('/')) ?>">
                            Home
                        </a>
                    </li>
                    <?php
                        foreach(get_pages() as $page){
                    ?>
                    <li>
                        <a href="<?php echo get_page_link($page->ID) ?>">
                            <?php echo $page->post_title ?>
                        </a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
            
            <div class="col_w280">
                <h5>Partners</h5>
                <ul class="tooplate_list">
                    <li><a href="index.html">Aenean ac tellus nec</a></li>
                    <li><a href="index.html">Maecenas vestibulum</a></li>
                    <li><a href="index.html">Ut eget tellus eget</a></li>
                    <li><a href="index.html">Curabitur ut lectus</a></li>
                    <li><a href="index.html">Vivamus vel augue vel</a></li>
                    <li><a href="index.html">Praesent varius tempor</a></li>
                </ul>
            </div>
            
            <div class="col_w280 last_col">
                <h5>About Us</h5>
                <p>Aliquam venenatis nisl a lacus facilisis accumsan. Ut id tellus a velit adipiscing condimentum ornare nec lectus. Nam ut dui sit amet metus sagittis bibendum quis in odio. Quisque sit amet erat a lorem condimentum placerat. Duis dignissim, justo vel consequat vulputate, neque nibh gravida nisi, et posuere mauris turpis dapibus quam.</p>
            </div>
        
            <div class="cleaner"></div>
        </div>
        
        <div id="tooplate_copyright">
        
            Copyright © 2048 <a href="#">Company Name</a> - Design: <a href="http://www.tooplate.com">tooplate</a>
            
        </div>
    </div>
</div> <!-- end of wrapper -->
    
</body>
</html>