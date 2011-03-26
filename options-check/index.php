<?php
/**
 * This theme is purely for the purpose of testing to see if theme options are working.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

		<div id="container">
			<div id="content" role="main">
            
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<h2 class="entry-title">Options Check Theme</h2>
            
            <div class="entry-content">
            
            <p>Use of_of_get_option($id,$default) to return option values.</p>
            
            <h3>Basic Options</h3>
            
            <dl>
            <dt>type: text (mini)</dt>
            <dd>of_get_option('example_text_mini'): <?php echo of_get_option('example_text_mini', 'no entry'); ?></dd>
            </dl>
            
            <dl>
            <dt>type: text</dt>
            <dd>of_get_option('example_text'): <?php echo of_get_option('example_text', 'no entry'); ?></dd>
            </dl>
            
            <dl>
            <dt>type: textarea</dt>
            <dd>of_get_option('example_textarea'): <?php echo of_get_option('example_textarea', 'no entry' ); ?></dd>
            </dl>
            
            <dl>
            <dt>type: select (mini)</dt>
            <dd>of_get_option('example_select'): <?php echo of_get_option('example_select', 'no entry' ); ?></dd>
            </dl>
            
            <dl>
            <dt>type: select2 (wide)</dt>
            <dd>of_get_option('example_select_wide'): <?php echo of_get_option('example_select_wide', 'no entry' ); ?></dd>
            </dl>
            
            <dl>
            <dt>type: radio</dt>
            <dd>of_get_option('example_radio'): <?php echo of_get_option('example_radio', 'no entry' ); ?></dd>
            </dl>
            
            <dl>
            <dt>type: checkbox</dt>
            <dd>of_get_option('example_checkbox'): <?php echo of_get_option('example_checkbox', 'no entry' ); ?></dd>
            </dl>
            
             <hr/>
            
            <h3>Advanced Options</h3>
            
            <dl>
            <dt>type: uploader</dt>
            <dd>of_get_option('example_uploader'): <?php echo of_get_option('example_uploader', 'no entry'); ?></dd>
            <?php if ( of_get_option('example_uploader') ) { ?>
            <img src="<?php echo of_get_option('example_uploader'); ?>" />
			<?php } ?>
            </dl>
            
            <dl>
            <dt>type: image</dt>
            <dd>of_get_option('images'): <?php echo of_get_option('example_images', 'no entry' ); ?></dd>
            </dl>
            
            <dl>
            <dt>type: multicheck</dt>
            <dd>of_get_option('multicheck'):
            <?php $multicheck = of_get_option('example_multicheck', 'none' ); ?>
			<?php echo $multicheck; ?>
            </dd>
            </dl>
            
            <p>You can get the value of all items in the checkbox array:</p>
            <ul>
            <?php
			if ( is_array($multicheck) ) {
				foreach ($multicheck as $key => $value) {
					echo '<li>' . $key . ' = ' . $value . '</li>';
				}
			}
			?>
            </ul>
            
            <p>You can also get an individual checkbox value if you know what you are looking for.  In this example, I'll check for "three", which is an item I sent in the array for checkboxes:</p>
            
            <p>The value of the multicheck box "one" of example_multicheck is: 
            
            <?php
            if (isset($multicheck['one']) ) {
				echo $multicheck['one'];
			} else {
				echo 'no entry';
			}
			?>
            </p>
            
            
            <dl>
            <dt>type: background</dt>
            <dd>of_get_option('background'):
            <?php $background = of_get_option('example_background', false );
            if ($background != 'false') {
				if ($background['image']) {
					echo '<span style="display: block; height: 200px; width: 200px; background:url('.$background['image']. ') "></span>';
					echo '<ul>';
					foreach ($background as $i=>$param){
						echo '<li>'.$i . ' = ' . $param.'</li>';
				}
				echo '</ul>';
				} else {
					echo '<span style="display: inline-block; height: 20px; width: 20px; background:'.$background['color']. ' "></span>';
					echo '<ul>';
					echo '<li>'.$background['color'].'</li>';
					echo '</ul>';
				}	
            } else {
            	echo "no entry";
            }; ?>
            </span>
            </dd>
            </dl>
            
            <dl>
            <dt>type: colorpicker</dt>
            <dd>of_get_option('colorpicker'):
            <span style="color:<?php echo of_get_option('example_colorpicker', '#000' ); ?>">
			<?php echo of_get_option('example_colorpicker', 'no entry' ); ?>
            </span>
            </dd>
            </dl>
            
            <dl>
            <dt>type: typography</dt>
            <dd>of_get_option('typography'):
            <?php $typography = of_get_option('example_typography', false );
            if ($typography !='false') {
				echo '<span style="font:'.$typography['size'] . ' ' . $typography['face']. ' ' . $typography['style'] . '; color:'.$typography['color'].';">Some sample text in your style</span>';
				echo '<ul>';
				foreach ($typography as $i=>$param){
				echo '<li>'.$i . ' = ' . $param.'</li>';
				}
				echo '</ul>';
				} else {
				echo "no entry";
            }; ?>
            </span>
            </dd>
            </dl>
            
            </div>
			
			</div><!-- #content -->
		</div><!-- #container -->
        
<?php get_footer(); ?>