<div id="root">

	<div class="header-wrap">
    	<div class="header">
        	<?php print render($page['title']); ?>
        	<?php print render($page['header']); ?>
    	</div>
	</div>
  <div class="nav-wrap">
    <div class="nav">
      <?php print render($page['nav']); ?>
    </div>
  </div>

	<div class="slide-show-wrap">
    	<div class="slide-show">

    	</div>
	</div>
	<div class="content-wrap">
    	<div class="content">
        	<?php print render($page['content']); ?>
    	</div>
	</div>

	<div class="side-bar-first-wrap">
    	<div class="side-bar-first">
        	<?php print render($page['sidebar_first']); ?>
    	</div>
	</div>

	<div class="footer-wrap">
    	<div class="footer">
        	<?php print render($page['footer']); ?>
    	</div>
	</div>

</div>
<!-- root -->
