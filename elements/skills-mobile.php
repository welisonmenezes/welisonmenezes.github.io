<div class="row show-768">
	<div class="col-md-12">
		<div class="slick-skills">
			<?php 
			foreach ($data_skills as $k => $v): 
				$twoLines = ($v['is-tow-lines']) ? 'two-lines' : '';
			?>
				<div class="slick-skills-item">
					<div class="skill-chart">
						<span class="label <?php echo $twoLines; ?>"><?php echo $v['label'] ?></span>
						<div class="circle-chart" data-percent="<?php echo $v['value']; ?>"></div>
					</div>
				</div>
			<?php endforeach;?>
		</div>
		<div class="slick-skills-navigation"></div>
	</div>
</div>