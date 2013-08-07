<?php head(array('bodyclass' => 'exhibits')); ?>

<div class="exhibit-description">
	<?php echo $exhibit->description; ?>
</div>

<nav id="exhibit-pages">
    <ul>
        <?php set_exhibit_pages_for_loop_by_exhibit(); ?>
        <?php foreach (loop('exhibit_page') as $exhibitPage): ?>
        <?php echo exhibit_builder_page_summary($exhibitPage); ?>
        <?php endforeach; ?>
    </ul>
</nav>
 
<div id="exhibit-credits">	
	<h3>Credits</h3>
	<p><?php echo html_escape($exhibit->credits); ?></p>
</div>

<?php foot(); ?>
