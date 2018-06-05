<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 12.04.2018
 * Time: 21:19
 */

function arinatheme_scripts()
{
    wp_enqueue_style('main-css', get_template_directory_uri() . '/css/main.css');
    wp_enqueue_style( 'my-style', get_stylesheet_uri() );
    wp_enqueue_script('jquery');
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('font-black-han-sans', '//fonts.googleapis.com/css?family=Black+Han+Sans');
    wp_enqueue_style('font-poppins', '//fonts.googleapis.com/css?family=Poppins');
    wp_enqueue_style('slickslider-css', get_template_directory_uri() . '/slick-1.8.0/slick/slick.css');
    wp_enqueue_script('slickslider-min-js', get_template_directory_uri() . '/slick-1.8.0/slick/slick.min.js');
    wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js');
}

add_action('wp_enqueue_scripts', 'arinatheme_scripts');

if (!function_exists('arinatheme_setup')) :

    function arinatheme_setup()
    {
        load_theme_textdomain('arinatheme', get_template_directory() . '/languages');
        add_theme_support('automatic-feed-links');
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));
        add_theme_support('customize-selective-refresh-widgets');
        add_theme_support('custom-logo', array(
            'height' => 250,
            'width' => 250,
            'flex-width' => true,
            'flex-height' => true,
        ));
    }
endif;

add_action('after_setup_theme', 'arinatheme_setup');

function arinatheme_widgets_init()
{
    register_sidebar(array(
        'name' => esc_html__('Sidebar', 'arinathem'),
        'id' => 'sidebar-1',
        'description' => esc_html__('Add widgets here.', 'arinathem'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
    /*Add my widgets*/
    register_sidebar( array(
        'name' => __('Tech list'),
        'id' => 'tech-list-sidebar',
        'description' => __('Appears in the tech section'),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ) );
    register_sidebar( array(
        'name' => __('Phone number'),
        'id' => 'phone-number-sidebar',
        'description' => __('Appears in the footer'),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ) );
    register_sidebar( array(
        'name' => __('EMail'),
        'id' => 'email-sidebar',
        'description' => __('Appears in the footer'),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ) );
    register_sidebar( array(
        'name' => __('Read my Blog'),
        'id' => 'projects-sidebar',
        'description' => __('Appears in the right sidebar'),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
}

add_action('widgets_init', 'arinatheme_widgets_init');

function wbp_custom_new_menu()
{
    register_nav_menus(array(
            'header-nav-menu' => _('Header nav menu'),
            'footer-socials-menu' => _('Footer social links'),
        )
    );
}

add_action('init', 'wbp_custom_new_menu');

function arina_theme_customize_register($wp_customize)
{

    /*Header section*/

    $wp_customize->add_section('header_section', array(
        'title' => __('Header section settings', 'arinatheme'),
        'priority' => 40,
    ));

    $wp_customize->add_setting('header_image', array(
        'default' => __('', 'arinatheme'),
        'transport' => 'refresh',
    ));
    $wp_customize->add_setting('header_image_alt', array(
        'default' => __('Arina Maslova', 'arinatheme'),
        'transport' => 'refresh',
    ));
    $wp_customize->add_setting('header_heading', array(
        'default' => __('Name', 'arinatheme'),
        'transport' => 'refresh',
    ));
    $wp_customize->add_setting('header_subheading', array(
        'default' => __('Position', 'arinatheme'),
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'header_image',
            array(
                'label'      => __( 'Upload an image', 'arinatheme' ),
                'section'    => 'header_section',
                'settings'   => 'header_image',
            )
        )
    );
    $wp_customize->add_control('header_image_alt', array(
        'label' => __('Image caption', 'arinatheme'),
        'section' => 'header_section',
        'settings' => 'header_image_alt',
        'type' => 'text',
    ));
    $wp_customize->add_control('header_heading', array(
        'label' => __('My name', 'arinatheme'),
        'section' => 'header_section',
        'settings' => 'header_heading',
        'type' => 'text',
    ));
    $wp_customize->add_control('header_subheading', array(
        'label' => __('My position', 'arinatheme'),
        'section' => 'header_section',
        'settings' => 'header_subheading',
        'type' => 'text',
    ));

    /*Strengths section*/

    $wp_customize->add_section('strengths_section', array(
        'title' => __('Strengths section settings', 'arinatheme'),
        'priority' => 40,
    ));

    $wp_customize->add_setting('strengths_heading', array(
        'default' => __('Heading', 'arinatheme'),
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('strengths_heading', array(
        'label' => __('Main heading in section', 'arinatheme'),
        'section' => 'strengths_section',
        'settings' => 'strengths_heading',
        'type' => 'text',
    ));

    /*Projects section*/

    $wp_customize->add_section('projects_section', array(
        'title' => __('Projects section settings', 'arinatheme'),
        'priority' => 40,
    ));

    $wp_customize->add_setting('projects_heading', array(
        'default' => __('Heading', 'arinatheme'),
        'transport' => 'refresh',
    ));
    $wp_customize->add_setting('project_button', array(
        'default' => __('Button', 'arinatheme'),
        'transport' => 'refresh',
    ));
    $wp_customize->add_setting('project_button_url', array(
        'default' => __('Button url', 'arinatheme'),
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('projects_heading', array(
        'label' => __('Main heading in section', 'arinatheme'),
        'section' => 'projects_section',
        'settings' => 'projects_heading',
        'type' => 'text',
    ));
    $wp_customize->add_control('project_button', array(
        'label' => __('Main heading in section', 'arinatheme'),
        'section' => 'projects_section',
        'settings' => 'project_button',
        'type' => 'text',
    ));
    $wp_customize->add_control('project_button_url', array(
        'label' => __('Main heading in section', 'arinatheme'),
        'section' => 'projects_section',
        'settings' => 'project_button_url',
        'type' => 'text',
    ));

    /*Tech section*/

    $wp_customize->add_section('tech_section', array(
        'title' => __('Tech section settings', 'arinatheme'),
        'priority' => 40,
    ));

    $wp_customize->add_setting('tech_heading', array(
        'default' => __('Heading', 'arinatheme'),
        'transport' => 'refresh',
    ));
    $wp_customize->add_setting('tech_background', array(
        'default' => __('', 'arinatheme'),
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('tech_heading', array(
        'label' => __('Main heading in section', 'arinatheme'),
        'section' => 'tech_section',
        'settings' => 'tech_heading',
        'type' => 'text',
    ));
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'tech_background',
            array(
                'label'      => __( 'Upload an image', 'arinatheme' ),
                'section'    => 'tech_section',
                'settings'   => 'tech_background',
            )
        )
    );

    /*Blog section*/

    $wp_customize->add_section('blog_section', array(
        'title' => __('Blog section settings', 'arinatheme'),
        'priority' => 40,
    ));

    $wp_customize->add_setting('blog_heading', array(
        'default' => __('Heading', 'arinatheme'),
        'transport' => 'refresh',
    ));
    $wp_customize->add_setting('blog_button', array(
        'default' => __('Button', 'arinatheme'),
        'transport' => 'refresh',
    ));
    $wp_customize->add_setting('blog_button_url', array(
        'default' => __('Button url', 'arinatheme'),
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('blog_heading', array(
        'label' => __('Main heading in section', 'arinatheme'),
        'section' => 'blog_section',
        'settings' => 'blog_heading',
        'type' => 'text',
    ));
    $wp_customize->add_control('blog_button', array(
        'label' => __('Blog Button', 'arinatheme'),
        'section' => 'blog_section',
        'settings' => 'blog_button',
        'type' => 'text',
    ));
    $wp_customize->add_control('blog_button_url', array(
        'label' => __('Blog Button url', 'arinatheme'),
        'section' => 'blog_section',
        'settings' => 'blog_button_url',
        'type' => 'text',
    ));

    /*My Joy section*/

    $wp_customize->add_section('pets_section', array(
        'title' => __('My Joy section settings', 'arinatheme'),
        'priority' => 40,
    ));

    $wp_customize->add_setting('pets_heading', array(
        'default' => __('Heading', 'arinatheme'),
        'transport' => 'refresh',
    ));
    $wp_customize->add_setting('pets_image', array(
        'default' => __('', 'arinatheme'),
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('pets_heading', array(
        'label' => __('Main heading in section', 'arinatheme'),
        'section' => 'pets_section',
        'settings' => 'pets_heading',
        'type' => 'text',
    ));
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'pets_image',
            array(
                'label'      => __( 'Upload an image', 'arinatheme' ),
                'section'    => 'pets_section',
                'settings'   => 'pets_image',
            )
        )
    );

    /* Footer section */
    $wp_customize->add_section('footer_section', array(
        'title' => __('Footer section settings', 'arinatheme'),
        'priority' => 40,
    ));

    $wp_customize->add_setting('footer_logo', array(
        'default' => __('', 'arinatheme'),
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'footer_logo',
            array(
                'label'      => __( 'Upload an image', 'arinatheme' ),
                'section'    => 'footer_section',
                'settings'   => 'footer_logo',
            )
        )
    );

    /* Single Project page */
    $wp_customize->add_section('project_section', array(
        'title' => __('Single Project page', 'arinatheme'),
        'priority' => 43,
    ));
    $wp_customize->add_setting('project_view_link_title', array(
        'default' => __('Project link title', 'arinatheme'),
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('project_view_link_title', array(
        'label' => __('Main heading in section', 'arinatheme'),
        'section' => 'project_section',
        'settings' => 'project_view_link_title',
        'type' => 'text',
    ));

}

add_action('customize_register', 'arina_theme_customize_register');

/* Change MORE read button*/

function modify_read_more_link() {
    return '<span class="more-link">...</span>';
}
add_filter( 'the_content_more_link', 'modify_read_more_link' );

/* Ajax connecting*/

function true_load_posts(){

    $args = unserialize( stripslashes( $_POST['query'] ) );
    $args['paged'] = $_POST['page'] + 1; // следующая страница
    $args['post_status'] = 'publish';

    // обычно лучше использовать WP_Query, но не здесь
    query_posts( $args );
    // если посты есть
    if( have_posts() ) :

        // запускаем цикл
        while( have_posts() ): the_post();

            get_template_part('template-parts/content', 'blog');

        endwhile;

    endif;
    die();
}

add_action('wp_ajax_loadmore', 'true_load_posts');
add_action('wp_ajax_nopriv_loadmore', 'true_load_posts');
