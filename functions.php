<!-- font -->
function meu_tema_enqueue_styles() {
    wp_enqueue_style(
        'meu-tema-fonts', 
        get_template_directory_uri() . '/style.css', 
        array(), 
        null
    );
}
add_action('wp_enqueue_scripts', 'meu_tema_enqueue_styles');
