<?php
/**
 * Checkbox field class.
 */
class RWMB_Checkbox_Field extends RWMB_Input_Field
{
	/**
	 * Enqueue scripts and styles.
	 */
	public static function admin_enqueue_scripts()
	{
		wp_enqueue_style( 'rwmb-checkbox', RWMB_CSS_URL . 'checkbox.css', array(), RWMB_VER );
	}

	/**
	 * Get field HTML
	 *
	 * @param mixed $meta
	 * @param array $field
	 * @return string
	 */
	public static function html( $meta, $field )
	{
		$attributes = self::get_attributes( $field, 1 );
		$output     = sprintf(
			'<input %s %s>',
			self::render_attributes( $attributes ),
			checked( ! empty( $meta ), 1, false )
		);
		if ( $field['desc'] )
		{
			$output = "<label id='{$field['id']}_description' class='description'>$output {$field['desc']}</label>";
		}
		return $output;
	}

	/**
	 * Show end HTML markup for fields
	 *
	 * @param mixed $meta
	 * @param array $field
	 *
	 * @return string
	 */
	public static function end_html( $meta, $field )
	{
		$button = $field['clone'] ? call_user_func( array( RW_Meta_Box::get_class_name( $field ), 'add_clone_button' ), $field ) : '';

		// Closes the container
		$html = "{$button}</div>";

		return $html;
	}

	/**
	 * Get the attributes for a field.
	 *
	 * @param array $field
	 * @param mixed $value
	 * @return array
	 */
	public static function get_attributes( $field, $value = null )
	{
		$attributes         = parent::get_attributes( $field, $value );
		$attributes['type'] = 'checkbox';
		$attributes['list'] = false;

		return $attributes;
	}

	/**
	 * Set the value of checkbox to 1 or 0 instead of 'checked' and empty string
	 * This prevents using default value once the checkbox has been unchecked
	 *
	 * @link https://github.com/rilwis/meta-box/issues/6
	 *
	 * @param mixed $new
	 * @param mixed $old
	 * @param int   $post_id
	 * @param array $field
	 *
	 * @return int
	 */
	public static function value( $new, $old, $post_id, $field )
	{
		return empty( $new ) ? 0 : 1;
	}

	/**
	 * Output the field value
	 * Display 'Yes' or 'No' instead of '1' and '0'
	 *
	 * Note: we don't echo the field value directly. We return the output HTML of field, which will be used in
	 * rwmb_the_field function later.
	 *
	 * @use self::get_value()
	 * @see rwmb_the_value()
	 *
	 * @param  array    $field   Field parameters
	 * @param  array    $args    Additional arguments. Rarely used. See specific fields for details
	 * @param  int|null $post_id Post ID. null for current post. Optional.
	 *
	 * @return string HTML output of the field
	 */
	public static function the_value( $field, $args = array(), $post_id = null )
	{
		$value = self::get_value( $field, $args, $post_id );
		return $value ? __( 'Yes', 'meta-box' ) : __( 'No', 'meta-box' );
	}
}