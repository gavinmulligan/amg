                <div style="clear: both;"></div>
            	<div id="footer">		
        			<div id="credit">
        				<p>&copy; Copyright <?php bloginfo('name'); ?>. All Rights Reserved.</p>
        			</div>
            	</div>
            </div>
        </div>
        </div></div></div></div>
    </div>

<?php if(get_option('woo_twitter') !== "") { ?>
<script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script>
<script type="text/javascript" src="http://twitter.com/statuses/user_timeline/<?php echo get_option('woo_twitter'); ?>.json?callback=twitterCallback2&amp;count=1"></script>
<?php } ?>

<?php wp_footer(); ?>

</body>
</html>
