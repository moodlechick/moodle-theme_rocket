<?php
    <link rel="apple-touch-icon" href="<?php echo $OUTPUT->pix_url('apple-touch-icon-72x72', 'theme')?>"/>
	<div class="headerTable">
	<div class="header_left">
		<div id="logowrap">
			<div id="logo"></div>
		</div>
		<div id="toplinks">
			<?php echo $OUTPUT->blocks_for_region('toplinks') ?>
		</div>
	<div class="header_right">
		<div id="menuwrap">
		<div id="banner"></div>
	</div>
	</div>
	
		
				<div id="headerstrip">
					<div id="searchbox"><?php echo $OUTPUT->blocks_for_region('search') ?></div>
					<?php echo $PAGE->theme->settings->sitename; ?>
				</div>
				
            <div class="copyright"><?php echo $PAGE->theme->settings->copyright; ?></div>
            <?php
            echo $PAGE->theme->settings->footnote;
            echo $OUTPUT->login_info();