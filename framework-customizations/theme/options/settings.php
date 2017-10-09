<?php

$options = array(
    'common-bg' => array(
      'type' => 'upload',
      'label' => __('Landing Background', 'unyson'),
      'desc' => __('Please select an image for common bg', 'unyson'),
  	),
    'logo-text'  => array( 
    'type'  => 'text',
    'value' => 'STRIP',
    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
    'label' => __('Logo', '{domain}'),
		'desc'  => __('Type the logo title', '{domain}'),							    			    										        	
		),
		'header-color' => array(
		    'type'  => 'color-picker',
		    'value' => '#CC9900',
		    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
		    // palette colors array
		    'palettes' => array( '#ba4e4e', '#0ce9ed', '#941940' ),
		    'label' => __('Header BG color', '{domain}'),
		    'desc'  => __('Choose the color for header', '{domain}'),
		),
	  'footer-bg-image' => array(
	      'type' => 'upload',
	      'label' => __('Footer BG Image', 'unyson'),
	      'desc' => __('Please select an image for the footer', 'unyson'),
			),	
    'copyright'  => array( 
		    'type'  => 'text',
		    'value' => 'Copyright © 2016 Company Name',
		    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
		    'label' => __('Copyright', '{domain}'),						    			    										        	
		),
		'section1_tab' => array(
		    'type' => 'tab',
		    'options' => array(
		        'section1-bg-image' => array(
					      'type' => 'upload',
					      'label' => __('BG Image', 'unyson'),
					      'desc' => __('Please select an image for bg', 'unyson'),
  						),
				    'section1-header1'  => array( 
						    'type'  => 'text',
						    'value' => 'Introduction',
						    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
						    'label' => __('Header 1', '{domain}'),
								'desc'  => __('Type the header', '{domain}'),							    			    										        	
						),	
				    'section1-text1'  => array(
						    'type'  => 'wp-editor',
						    'value' => 'Strip HTML5 template is another Bootstrap responsive layout for any kind of purpose. Please help us by telling your friends about templatemo. Praesent consectetur dictum massa eu tincidunt. Nulla facilisi. Nam tincidunt nec diam eget sollicitudin. Morbi nec felis rutrum, faucibus odio sed, ullamcorper risus. Sed id condimentum neque, at iaculis ex. Praesent faucibus viverra ante id auctor. Pellentesque at risus ut arcu blandit consectetur.',
						    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
						    'label' => __('Text 1', '{domain}'),
						    'desc'  => __('Type the first block of text', '{domain}'),
						    'size' => 'small', // small, large
						    'editor_height' => 300,
						    'wpautop' => true,
						    'editor_type' => false, // tinymce, html
						),	
				    'section1-header2'  => array( 
						    'type'  => 'text',
						    'value' => 'Our Mission',
						    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
						    'label' => __('Header 2', '{domain}'),
								'desc'  => __('Type the header', '{domain}'),							    			    										        	
						),	
				    'section1-text2'  => array(
						    'type'  => 'wp-editor',
						    'value' => 'We provide 100% free responsive Bootstrap themes for everyone. No credit link is required to use our templates. Nulla ligula odio, consesquat sec justo ut, dictum tempus eros. Duis finibus pulvinar felis, at sollicitudin ante. Aliquam sed augue dui.',
						    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
						    'label' => __('Text 2', '{domain}'),
						    'desc'  => __('Type the second block of text', '{domain}'),
						    'size' => 'small', // small, large
						    'editor_height' => 300,
						    'wpautop' => true,
						    'editor_type' => false, // tinymce, html
						),													        
    ),
	    'title' => __('Section 1', '{domain}'),
	    'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
		),

		'section2_tab' => array(
		    'type' => 'tab',
		    'options' => array(
		        'section2-bg-image' => array(
					      'type' => 'upload',
					      'label' => __('BG Image', 'unyson'),
					      'desc' => __('Please select an image for bg', 'unyson'),
  						),
		        'section2-image' => array(
					      'type' => 'upload',
					      'label' => __('Image', 'unyson'),
					      'desc' => __('Please select an image for this section', 'unyson'),
  						),		        
				    'section2-header1'  => array( 
						    'type'  => 'text',
						    'value' => 'Our Services',
						    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
						    'label' => __('Header', '{domain}'),
								'desc'  => __('Type the header', '{domain}'),							    			    										        	
						),	
				    'section2-text1'  => array(
						    'type'  => 'wp-editor',
						    'value' => 'Praesent consectetur dictum massa eu tincidunt. Nulla facilisi. Nam tincidunt nex diam eget sollicitudin. Quisque tincidunt ex sit amet metus ultricies, sed lobortis purus finibus.',
						    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
						    'label' => __('Text 1', '{domain}'),
						    'desc'  => __('Type the first block of text', '{domain}'),
						    'size' => 'small', // small, large
						    'editor_height' => 300,
						    'wpautop' => true,
						    'editor_type' => false, // tinymce, html
						),		
				    'section2-text2'  => array(
						    'type'  => 'wp-editor',
						    'value' => 'Morbi nex felis rutrum, faucibus odio sed, ullamcorper risus. Sed id condimentum nequq, at iaculis ex. Praesent faucibus viverra ante id auctor. Pellentesque at risus ut arcu blandit consectetur.',
						    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
						    'label' => __('Text 2', '{domain}'),
						    'desc'  => __('Type the second block of text', '{domain}'),
						    'size' => 'small', // small, large
						    'editor_height' => 300,
						    'wpautop' => true,
						    'editor_type' => false, // tinymce, html
						),													        
    ),
	    'title' => __('Section 2', '{domain}'),
	    'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
		),		

		'section3_tab' => array(
		    'type' => 'tab',
		    'options' => array(
		        'section3-bg-image' => array(
					      'type' => 'upload',
					      'label' => __('BG Image', 'unyson'),
					      'desc' => __('Please select an image for bg', 'unyson'),
  						),
		        'section3-image' => array(
					      'type' => 'upload',
					      'label' => __('Image', 'unyson'),
					      'desc' => __('Please select an image for this section', 'unyson'),
  						),		        
				    'section3-header1'  => array( 
						    'type'  => 'text',
						    'value' => 'About our company',
						    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
						    'label' => __('Header', '{domain}'),
								'desc'  => __('Type the header', '{domain}'),							    			    										        	
						),	
				    'section3-text1'  => array(
						    'type'  => 'wp-editor',
						    'value' => 'Praesent consectetur dictum massa eu tincidunt. Nulla facilisi. Nam tincidunt nex diam eget sollicitudin. Quisque tincidunt ex sit amet metus ultricies, sed lobortis purus finibus.',
						    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
						    'label' => __('Text 1', '{domain}'),
						    'desc'  => __('Type the first block of text', '{domain}'),
						    'size' => 'small', // small, large
						    'editor_height' => 300,
						    'wpautop' => true,
						    'editor_type' => false, // tinymce, html
						),		
				    'section3-text2'  => array(
						    'type'  => 'wp-editor',
						    'value' => 'Morbi nex felis rutrum, faucibus odio sed, ullamcorper risus. Sed id condimentum nequq, at iaculis ex. Praesent faucibus viverra ante id auctor. Pellentesque at risus ut arcu blandit consectetur.',
						    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
						    'label' => __('Text 2', '{domain}'),
						    'desc'  => __('Type the second block of text', '{domain}'),
						    'size' => 'small', // small, large
						    'editor_height' => 300,
						    'wpautop' => true,
						    'editor_type' => false, // tinymce, html
						),													        
    ),
	    'title' => __('Section 3', '{domain}'),
	    'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
		),		

		'section4_tab' => array(
		    'type' => 'tab',
		    'options' => array(
		        'section4-bg-image' => array(
					      'type' => 'upload',
					      'label' => __('BG Image', 'unyson'),
					      'desc' => __('Please select an image for bg', 'unyson'),
  						),	        
				    'section4-header1'  => array( 
						    'type'  => 'text',
						    'value' => 'Send a message',
						    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
						    'label' => __('Header 1', '{domain}'),
								'desc'  => __('Type the first header', '{domain}'),							    			    										        	
						),		
				    'section4-header2'  => array( 
						    'type'  => 'text',
						    'value' => 'Contact Us',
						    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
						    'label' => __('Header 2', '{domain}'),
								'desc'  => __('Type the second header', '{domain}'),							    			    										        	
						),
				    'section4-text1'  => array(
						    'type'  => 'wp-editor',
						    'value' => 'Quisque tincidunt ex sit amet metus ultricies, sed lobortis purus finibus. Morbi nex felis rutrum, faucibus odio sed, ullamcorper risus. Sed id condimentum nequq, at iaculis',
						    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
						    'label' => __('Text', '{domain}'),
						    'desc'  => __('Type the second block of text', '{domain}'),
						    'size' => 'small', // small, large
						    'editor_height' => 300,
						    'wpautop' => true,
						    'editor_type' => false, // tinymce, html
						),		
						'address' => array(
						    'type'  => 'textarea',
						    'value' => '110-220 Praesent consectetur, Dictum massa 10550',
						    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
						    'label' => __('Label', '{domain}'),
						    'desc'  => __('Description', '{domain}'),
						    'help'  => __('Help tip', '{domain}'),
						),	
				    'phone'  => array( 
						    'type'  => 'text',
						    'value' => '010-020-0340',
						    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
						    'label' => __('Phone', '{domain}'),
								'desc'  => __('Type your phone number', '{domain}'),							    			    										        	
						),
				    'email'  => array( 
						    'type'  => 'text',
						    'value' => 'info@company.com',
						    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
						    'label' => __('Email', '{domain}'),
								'desc'  => __('Type your email', '{domain}'),							    			    										        	
						),
    ),
	    'title' => __('Section 4', '{domain}'),
	    'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
		),	
);

?>
