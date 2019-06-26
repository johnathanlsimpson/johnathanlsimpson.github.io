<template id="tech">
	<?php ob_start(); ?>
	<span class="text--pill">{tech}</span>
	<?php $template_pill = ob_get_clean(); ?>
</template>

<template id="image">
	<?php ob_start(); ?>
	<div class="slide__image {image_class}" style="background-image: url({image_url});"></div>
	<?php $template_image = ob_get_clean(); ?>
</template>

<template id="slide">
	<?php ob_start(); ?>
	<article class="slide__wrapper {slide_class}">
		<section class="slide__container slide__text {text_class}">
			<a class="slide__title text--spaced a--filled a--alt-filled a--attention" href="{url}" target="_blank">
				{name}<l>{name_last_char}</l>
			</a>
			
			<span class="slide__title text--spaced">
				{name}<l>{name_last_char}</l>
			</span>
			
			<div class="slide__summary">
				<p class="text--secondary">
					<span class="text--background">{description}</span>
					{techs}
				</p>
			</div>
		</section>
		
		<section class="slide__container slide__images {images_class}">
			<div class="images__container">
				{images}
			</div>
			
			<a class="a--circled a--filled text--primary text--spaced" href="{read_url}" target="_blank">
				Rea<l>d</l>
			</a>
		</section>
	</article>
	<?php $template_slide = ob_get_clean(); ?>
</template>

<template id="page">
	<?php ob_start(); ?>
	<div class="section page__wrapper" data-anchor="{page_name}">
		{slides}
	</div>
	<?php $template_page = ob_get_clean(); ?>
</template>

<?php
	function render($template, $input = []) {
		$output = $template;
		
		foreach($input as $key => $value) {
			$output = str_replace('{'.$key.'}', $value, $output);
		}
		
		$output = preg_replace('/'.'{.+?}'.'/', '', $output);
		
		return $output;
	}
?>



<!-- vk.gy -->
<article class="slide slide--vkgy">
	<section class="work__container work__images middled">
		<div class="work__images-container">
			<div class="work__image" style="background-image:url(images/img-vkgy.jpg); grid-column: 1 / span 18; grid-row: 3 / span 18;"></div>
		</div>
	</section>

	<section class="work__container work__details middled">
		<a class="work__title text--spaced a--filled a--alt-filled a--attention" href="https://vk.gy/" target="_blank">
			vk.g<l>y</l>
		</a>

		<div class="work__summary">
			<p class="work__description text--secondary">
				<span class="work__description-bg">Developed custom PHP/SQL CMS with custom frontend, as lead developer and designer for multi-lingual library of band information.</span>
				<span class="work__tech">PHP7</span>
				<span class="work__tech">SQL</span>
				<span class="work__tech">JS ES6</span>
				<span class="work__tech">jQuery</span>
				<span class="work__tech">HTML5</span>
				<span class="work__tech">CSS3</span>
				<span class="work__tech">cron</span>
				<span class="work__tech">Git</span>
				<span class="work__tech">CL</span>
			</p>
		</div>

		<a class="a--circled a--filled text--primary text--spaced" href="https://medium.com/@johnathan.l.simpson/work-vk-gy-c0286afa81be" target="_blank">Rea<l>d</l></a>
	</section>
</article>