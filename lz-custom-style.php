<?php 

	$tea_cafe_custom_style = '';

	// Logo Size
	$tea_cafe_logo_top_padding = get_theme_mod('tea_cafe_logo_top_padding');
	$tea_cafe_logo_bottom_padding = get_theme_mod('tea_cafe_logo_bottom_padding');
	$tea_cafe_logo_left_padding = get_theme_mod('tea_cafe_logo_left_padding');
	$tea_cafe_logo_right_padding = get_theme_mod('tea_cafe_logo_right_padding');

	if( $tea_cafe_logo_top_padding != '' || $tea_cafe_logo_bottom_padding != '' || $tea_cafe_logo_left_padding != '' || $tea_cafe_logo_right_padding != ''){
		$tea_cafe_custom_style .=' .logo {';
			$tea_cafe_custom_style .=' padding-top: '.esc_attr($tea_cafe_logo_top_padding).'px; padding-bottom: '.esc_attr($tea_cafe_logo_bottom_padding).'px; padding-left: '.esc_attr($tea_cafe_logo_left_padding).'px; padding-right: '.esc_attr($tea_cafe_logo_right_padding).'px;';
		$tea_cafe_custom_style .=' }';
	}

	// Header Image
	$header_image_url = tea_cafe_banner_image( $image_url = '' );
	if( $header_image_url != ''){
		$tea_cafe_custom_style .=' #inner-pages-header {';
			$tea_cafe_custom_style .=' background-image: url('. esc_url( $header_image_url ).'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed;';
		$tea_cafe_custom_style .=' }';
	} else {
		$tea_cafe_custom_style .=' #inner-pages-header {';
			$tea_cafe_custom_style .=' background: radial-gradient(circle at center, rgba(0,0,0,0) 0%, #000000 100%); ';
		$tea_cafe_custom_style .=' }';
	}

	$tea_cafe_slider_hide_show = get_theme_mod('tea_cafe_slider_hide_show',false);
	if( $tea_cafe_slider_hide_show == true){
		$tea_cafe_custom_style .=' .page-template-custom-home-page #inner-pages-header {';
			$tea_cafe_custom_style .=' display:none;';
		$tea_cafe_custom_style .=' }';
	}

	//site title tagline
	$tea_cafe_site_title_color = get_theme_mod('tea_cafe_site_title_color');
	if ( $tea_cafe_site_title_color != '') {
		$tea_cafe_custom_style .=' h1.site-title a, p.site-title a{';
			$tea_cafe_custom_style .=' color:'.esc_attr($tea_cafe_site_title_color).';';
		$tea_cafe_custom_style .=' }';
	}

	$tea_cafe_site_tagline_color = get_theme_mod('tea_cafe_site_tagline_color');
	if ( $tea_cafe_site_tagline_color != '') {
		$tea_cafe_custom_style .=' p.site-description{';
			$tea_cafe_custom_style .=' color:'.esc_attr($tea_cafe_site_tagline_color).';';
		$tea_cafe_custom_style .=' }';
	}

	//slider css
	$tea_cafe_slider_title_color = get_theme_mod('tea_cafe_slider_title_color');
	if ( $tea_cafe_slider_title_color != '') {
		$tea_cafe_custom_style .=' #slider h2{';
			$tea_cafe_custom_style .=' color:'.esc_attr($tea_cafe_slider_title_color).';';
		$tea_cafe_custom_style .=' }';
	}

	$tea_cafe_slider_text_color = get_theme_mod('tea_cafe_slider_text_color');
	if ( $tea_cafe_slider_text_color != '') {
		$tea_cafe_custom_style .=' #slider p{';
			$tea_cafe_custom_style .=' color:'.esc_attr($tea_cafe_slider_text_color).';';
		$tea_cafe_custom_style .=' }';
	}

	$tea_cafe_slider_btn_color = get_theme_mod('tea_cafe_slider_btn_color');
	$tea_cafe_slider_btnbg_color = get_theme_mod('tea_cafe_slider_btnbg_color');
	if ( $tea_cafe_slider_btn_color != '') {
		$tea_cafe_custom_style .=' #slider .sbtn2{';
			$tea_cafe_custom_style .=' color:'.esc_attr($tea_cafe_slider_btn_color).'; background-color:'.esc_attr($tea_cafe_slider_btnbg_color).';';
		$tea_cafe_custom_style .=' }';
	}

	$tea_cafe_slider_np_color = get_theme_mod('tea_cafe_slider_np_color');
	$tea_cafe_slider_npbdr_color = get_theme_mod('tea_cafe_slider_npbdr_color');
	if ( $tea_cafe_slider_np_color != '') {
		$tea_cafe_custom_style .=' #slider .carousel-control-prev-icon i, #slider .carousel-control-next-icon i{';
			$tea_cafe_custom_style .=' color:'.esc_attr($tea_cafe_slider_np_color).'; border-color:'.esc_attr($tea_cafe_slider_npbdr_color).';';
		$tea_cafe_custom_style .=' }';
	}