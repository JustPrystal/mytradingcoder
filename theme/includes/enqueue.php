<?php
	add_action('wp_enqueue_scripts', 'my_register_script_method', 1);
	//Fix for slick
	function my_register_script_method () {
		wp_deregister_script('jquery');
		wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.6.0.min.js');
		wp_enqueue_script('jquery');
		wp_enqueue_script('slickjs', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js');
	}
	
	function enqueue_stuff() {

		$templatedir = get_template_directory_uri();
		$enqueList = [	
			[
				"name" => 'slick-theme.min.css', 
				"type" => 'css',
				"path" => 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css',
				"version" => '1.8.1'
			],
			[
				"name" => 'slick.min.css', 
				"type" => 'css',
				"path" => 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css',
				"version" => '1.8.1'
			],
			[
				"name" => 'style.css', 
				"type" => 'css',
				"path" => $templatedir . '/style.css',
				"version" => filemtime(get_theme_file_path('/style.css'))
			],
			// [
			// 	"name" => 'jquery.js', 
			// 	"type" => 'js',
			// 	"path" => 'https://code.jquery.com/jquery-3.3.1.min.js',
			// 	"version" => '3.3.1',
			// 	"loadInFooter" => false
			// ],
			// [
			// 	"name" => 'slick.js', 
			// 	"type" => 'js',
			// 	"path" => 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js',
			// 	"version" => '1.8.1',
			// 	"loadInFooter" => false
			// ],
			[
				"name" => 'custom.js', 
				"type" => 'js',
				"path" => $templatedir . '/custom.js',
				"version" => '1.0.0',
				"loadInFooter" => true
			]
		];
		
		foreach($enqueList as $asset) {	
			if ($asset['type'] === 'css') {
				wp_enqueue_style( 
					'mytradingcoder_'.$asset['name'],  	// handle
					$asset['path'], 			// src
					null, 						// deps
					$asset['version'] 			// ver
				);	
			}	
			if ($asset['type'] === 'js') {
				wp_enqueue_script( 
					'mytradingcoder_'.$asset['name'],  	// handle
					$asset['path'], 			// src
					array(), 					// deps
					$asset['version'], 			// ver
					$asset['loadInFooter']		// in footer
				);	
			}
		}
	} 
	
	add_action( 'wp_enqueue_scripts', 'enqueue_stuff' );
	
	
	// Function to defer or asynchronously load scripts for SEO Performance
	
	function js_async_attr($tag){	
		if (true == strpos($tag, 'defer') ) {
			 return str_replace( ' src', '  defer="defer" src', $tag ); 
		}
		return $tag;
	}
	add_filter( 'script_loader_tag', 'js_async_attr', 1 );


?>
