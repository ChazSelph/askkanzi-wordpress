</div>
</main>

<footer class="footer">
      <div class="container">
             <h2 class="footer-title">
                <a href="<?php echo get_home_url(); ?>">Bonobo Hope International</a>
            </h2>

            <div class="social-container">
           <ul class="social-list list-inline py-3 mx-auto">
            <li class="list-inline-item"><a href="https://twitter.com/bonobo_hope"><i class="fab fa-twitter fa-fw"></i></a></li>
                    <li class="list-inline-item"><a href="https://www.instagram.com/bonobohope/"><i class="fab fa-instagram fa-fw"></i></a></li>
            <li class="list-inline-item"><a href="https://www.youtube.com/channel/UCmXSd5yIPNtqxszFSEgJUDA"><i class="fab fa-youtube fa-fw"></i>
            </a></li>
                    
                </ul> 
            </div>

            <div class="footer-disclaimer"><i>Bonobo Hope International is an NGO registered with the US Internal Revenue Service as a 501[c](3) non-profit organization (EIN# 45-3218086).</i><br><br>© 2013 - 2022 Bonobo Hope International</div>

            

                    <?php  

                        dynamic_sidebar('footer-1');
                    ?>      
                         

                <?php 
                    wp_footer();
                ?>

      </div>
    </footer>    


</body>
</html> 
