<?php require_once("elements/functions.php"); ?>
<?php require_once("header.php"); ?>
<div class="sct-main">
	<?php require_once("elements/menu-default.php"); ?>
	<?php require_once("elements/header-default.php"); ?>
	<div class="sct-body auto-height auto-width-force">
		<section class="sct-banner auto-height center-parent sct-bg auto-parallax target-inicio">
			<div class="container center-child">
				<div class="row">
					<div class="col-md-12">
						<div class="text-banner">
							<h1>Welison Menezes</h1>
							<h2>Web Designer e Programador</h2>
							<div class="action">
								<span class="btn btn-default big go-to hvr-buzz-out" data-anchor="contato">
									Olá, Fale Comigo
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="sct-about target-sobre-mim">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="text-about">
							<h2 class="title-main with-line">
								<span>Sobre Mim</span>
							</h2>
							<figure class="figure-circle">
								<img src="img/avatares/welison-menezes-avatar.jpg" alt="Welison Menezes - Web Designer e Programador">
							</figure>
							<div class="text">
								<p>
									Olá, sou um Desenvolvedor Web e Web Designer com mais de 6 anos de experiência, apaixonado pelo o que faço e pelo o que  produzo.
								</p>
								<p>
									Minha filosofia de trabalho é: <strong>Se é para fazer que faça bem feito</strong>. Por isso sempre procuro as melhores soluçoes para realizar um ótimo trabalho.
								</p>
								<p class="last">
									Meu foco principal é o desenvolvimento web. No entanto possuo talento para criação de layouts e peças gráficas.
									<a href="#contato" class="go-to" data-anchor="contato" title="Entre em contato">Entre em contato</a>.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="sct-skills auto-height center-parent sct-bg target-skills">
			<div class="container center-child">
				<div class="row">
					<div class="col-md-12">
						<h2 class="title-main">
							<span>Skills</span>
						</h2>
					</div>
				</div>
				<?php require_once("elements/skills-desktop.php"); ?>
				<?php require_once("elements/skills-mobile.php"); ?>
			</div>
		</section>
		<section class="sct-testimonials auto-height center-parent target-depoimentos">
			<div class="container center-child">
				<div class="row">
					<div class="col-md-12">
						<h2 class="title-main with-line">
							<span>Depoimentos</span>
						</h2>
						<div class="slick-testimony-wrap">
							<div class="slick-testimony">
								<?php foreach ($data_testimonials as $k => $v): ?>
								<div class="slick-testimony-item">
									<div class="testimony-box">
										<figure class="figure-circle">
											<img src="<?php echo $v['avatar']; ?>" alt="Avatar <?php echo $v['name']; ?>">
										</figure>
										<div class="who-testimony">
											<span class="name"><?php echo $v['name']; ?></span>
											<span class="role"><?php echo $v['role'] ;?></span>
										</div>
										<p><?php echo $v['testimony']; ?></p>
									</div>
								</div>
								<?php endforeach; ?>
							</div>
							<div class="slick-testimony-navigation"></div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="sct-cases auto-height center-parent target-cases">
			<div class="container center-child">
				<div class="row">
					<div class="col-md-12">
						<h2 class="title-main with-line">
							<span>Cases</span>
						</h2>
					</div>
				</div>
				<?php require_once("elements/cases-desktop.php"); ?>
				<?php require_once("elements/cases-mobile.php"); ?>
			</div>
		</section>
		<?php require_once("elements/footer-default.php"); ?>
	</div>
</div>
<?php require_once("footer.php"); ?>