<?php
function display_input_element($field)
{
	?>
    	<input type="text" name="<?php echo $field ; ?>" id="<?php echo $field ; ?>" value="<?php echo get_option($field); ?>" />
        Use <code><b><</b>?php echo get_option('<?php echo $field; ?>'); ?></code>   to show in theme
    <?php
}
function display_select_element($args) {
	$field = $args[0];
	?>
	
	<select name="<?php echo $field ; ?>">
	
		<?php 
		
		$current = get_option($field);
		$data[] = $args[1];
		foreach ($args[1] as $key => $value) {
			if ( $key == $current ) { $state = 'selected'; }else { $state = ' ';}
			?>
			<option value="<?php echo $key; ?>" <?php echo $state; ?>><?php echo $value; ?></option>
			<?php			
		} 
	
		?>
	</select>
	
	Use <code><b><</b>?php echo get_option('<?php echo $args[0]; ?>'); ?></code>   to show in theme
	<?php
}
function display_color_picker($data){ 
    $field = $data[0];
    $default_color = $data[1];
    $current_color = get_option($field);
    ?>
    
    <input type="text" name='<?php echo $field; ?>' value="<?php echo $current_color; ?>" class="my-color-field" data-default-color="<?php echo $default_color; ?>" />
    Use <code><b><</b>?php echo get_option('<?php echo $field; ?>'); ?></code>   to show in theme
    <?php
}

?>