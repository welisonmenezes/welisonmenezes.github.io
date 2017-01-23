<?php 
function isMobile() {
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}

function getClassCases()
{
	if(isMobile())
	{
		return 'ani-child-click';
	}
	return 'ani-child-hover';
}

function printSocialLinks()
{
?>
	<ul class="ul-social ul-horizontal">
		<li>
			<a href="https://www.facebook.com/menezeswelison" target="_blank" title="Welison Menezes - Facebook">
				<span class="icon i-facebook"></span>
			</a>
		</li>
		<li class="last">
			<a href="https://br.linkedin.com/in/welison-menezes-53b79835" target="_blank" title="Welison Menezes - Linkedin">
				<span class="icon i-linkedin"></span>
			</a>
		</li>
	</ul>
<?php
}

$data_skills = array(
	array(
		'label' => 'html5/css3',
		'value' => '100',
		'is-tow-lines' => false
	),
	array(
		'label' => 'javascript<br>jquery',
		'value' => '100',
		'is-tow-lines' => true
	),
	array(
		'label' => 'php/mysql',
		'value' => '96',
		'is-tow-lines' => false
	),
	array(
		'label' => 'wordpress',
		'value' => '96',
		'is-tow-lines' => false
	),
	array(
		'label' => 'cakephp<br>codeigniter',
		'value' => '92',
		'is-tow-lines' => true
	),
	array(
		'label' => 'sass/compass',
		'value' => '89',
		'is-tow-lines' => false
	),
	array(
		'label' => 'photshop<br>illustrator',
		'value' => '89',
		'is-tow-lines' => true
	),
	array(
		'label' => 'git/github',
		'value' => '85',
		'is-tow-lines' => false
	),
	array(
		'label' => 'gruntjs/bower',
		'value' => '83',
		'is-tow-lines' => false
	),
	array(
		'label' => 'angularjs',
		'value' => '82',
		'is-tow-lines' => false
	),
	array(
		'label' => 'c#/asp.net mvc',
		'value' => '65',
		'is-tow-lines' => false
	),
	array(
		'label' => 'ruby<br>ruby on rails',
		'value' => '42',
		'is-tow-lines' => true
	)
);


$data_testimonials = array(
	array(
		'avatar' => 'img/avatares/claudio.jpg',
		'name' => 'Claudio Just',
		'role' => 'Managing Partner/Start-IDP',
		'testimony' => 'Welison é um profissional extremamente focado na execução e na entrega dos projetos. Super detalhista, teve excelente relação com o time de design da KAUS, um elo importante entre a criação e o desenvolvimento. Um grande profissional.'
	),
	array(
		'avatar' => 'img/avatares/eduardo.jpg',
		'name' => 'Eduardo Araujo',
		'role' => 'Co-fundador e Diretor de Comunicação/aPública',
		'testimony' => 'Muito bom profissional, boa pessoa, correto com horários e prazos. Um programador atento aos problemas do projeto como um todo e sempre sinaliza a melhor forma de desenvolver funcionalidades. Um profissional que não me preocupo com a fidelidade do layout apresentado. Muita boa a relação em entre psd e frontend.'
	),
	array(
		'avatar' => 'img/avatares/michel.jpg',
		'name' => 'Michel Santos',
		'role' => 'Designer Freelancer',
		'testimony' => 'Um ótimo profissional, com soluções criativas e extremamente seguras. Praticamente um raio-x entre o layout e o front-end. E a melhor parte, tudo dentro do prazo! Parceiro indispensável em meus projetos.'
	),
	array(
		'avatar' => 'img/avatares/luciano.jpg',
		'name' => 'Luciano R. de Albuquerque',
		'role' => 'Solutions Architect/YDreams Global',
		'testimony' => 'O Welison é um programador extremamente focado, essa é uma característica muito importante que o permite imersão total enquanto está codificando. Além disso, busca constantemente aprimorar seus conhecimentos estudando novas tecnologias.'
	),
	array(
		'avatar' => 'img/avatares/franco.jpg',
		'name' => 'Franco De Felice',
		'role' => 'Diretor de Arte/AMPFY',
		'testimony' => 'Eficiência e eficácia. Welison é um dos poucos profissionais de front-end que faz suas entregas com velocidade e qualidade. Contato para toda vida!'
	),
	array(
		'avatar' => 'img/avatares/fernando.jpg',
		'name' => 'Fernando Tannure',
		'role' => 'Owner and CTO/Aceleração Digital',
		'testimony' => 'O Welison é um profissional flexível e cheio de disposição para oferecer soluções. Ele sempre nos atendeu com atenção e entregou os projetos dentro das expectativas do cliente. A LV indica os seus serviços.'
	),
	array(
		'avatar' => 'img/avatares/rafael.jpg',
		'name' => 'Rafael Zago',
		'role' => 'Analista de Sistemas/EDF Norte Fluminense',
		'testimony' => 'O Welison é um profissional muito responsável, é muito competente com layouts responsivos e para ele nunca tem nada que não tenha como ser feito.'
	)
);


$data_cases = array(
	array(
		'image' => 'img/cases/case-7.jpg',
		'name' => 'Gabriel Medina',
		'desc' => 'Wordpress, Responsivo, HTML 5, CSS 3, PHP, JQuery',
		'link' => 'http://medina10.com.br/'
	),
	array(
		'image' => 'img/cases/case-2.jpg',
		'name' => 'SMG Brasil',
		'desc' => 'Wordpress, Responsivo, HTML 5, CSS 3, Ajax, PHP, JQuery',
		'link' => 'http://smgbrasil.com.br/'
	),
	array(
		'image' => 'img/cases/case-4.jpg',
		'name' => 'Amsterdam Sauer',
		'desc' => 'Wordpress, Responsivo, HTML 5, CSS 3, PHP, JQuery, Ajax',
		'link' => 'http://amsterdamsauer.com.br/'
	),
	array(
		'image' => 'img/cases/case-9.jpg',
		'name' => 'Marcus D\'Almeida',
		'desc' => 'Wordpress, Responsivo, HTML 5, CSS 3, PHP, JQuery',
		'link' => 'http://marcusdalmeida.com.br/'
	),
	array(
		'image' => 'img/cases/case-5.jpg',
		'name' => 'Agência Kaus',
		'desc' => 'Wordpress, Responsivo, HTML 5, CSS 3, Ajax, JQuery',
		'link' => 'http://www.kaus.com.br/'
	),
	array(
		'image' => 'img/cases/case-6.jpg',
		'name' => 'Tá.Na.Hora',
		'desc' => 'Wordpress, Responsivo, HTML 5, CSS 3, PHP, JQuery',
		'link' => 'http://ta-na-hora.com/'
	),
	array(
		'image' => 'img/cases/case-11.jpg',
		'name' => 'LeadPix',
		'desc' => 'Wordpress, Responsivo, HTML 5, CSS 3, PHP, JQuery',
		'link' => 'http://www.leadpix.com.br/'
	),
	array(
		'image' => 'img/cases/case-3.jpg',
		'name' => 'Antera GR',
		'desc' => 'Wordpress, Responsivo, HTML 5, CSS 3, Ajax, PHP, JQuery',
		'link' => 'http://www.anteragr.com.br/'
	),
	array(
		'image' => 'img/cases/case-1.jpg',
		'name' => 'TecWare',
		'desc' => 'Wordpress, Responsivo, HTML 5, CSS 3, PHP, JQuery',
		'link' => 'http://www.tecware.com.br/'
	),
	array(
		'image' => 'img/cases/case-10.jpg',
		'name' => 'Grinus',
		'desc' => 'Wordpress, Responsivo, HTML 5, CSS 3, PHP, JQuery',
		'link' => 'http://www.grinus.com.br/'
	)
);
?>