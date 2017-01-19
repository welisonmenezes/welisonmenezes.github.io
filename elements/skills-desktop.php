<div class="row hide-768">
	<?php 
	foreach ($data_skills as $k => $v): 
		$twoLines = ($v['is-tow-lines']) ? 'two-lines' : '';
	?>
		<div class="col-md-2 col-sm-3">
			<div class="skill-chart">
				<span class="label <?php echo $twoLines; ?>"><?php echo $v['label'] ?></span>
				<div class="circle-chart" data-percent="<?php echo $v['value']; ?>"></div>
			</div>
		</div>
	<?php endforeach;?>
</div>