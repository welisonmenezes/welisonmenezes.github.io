<div class="row no-padding row-cases hide-768">
<?php foreach ($data_cases as $k => $v): ?>
	<div class="col-cases">
		<div class="case-box height-parent ani-child-hover <?php //echo getClassCases(); ?>">
			<figure>
				<img src="<?php echo $v['image']; ?>" alt="<?php echo $v['name']; ?>">
			</figure>
			<div class="hover height-child center-parent">
				<div class="content text-cases center-child">
					<h2><?php echo $v['name']; ?></h2>
					<p><?php echo $v['desc']; ?></p>
					<div class="action">
						<a href="<?php echo $v['link']; ?>" target="_blank" class="btn btn-default small hvr-buzz-out" title="Ver Site">
							Ver Site <span class="icon a-link"></span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php endforeach; ?>
</div>