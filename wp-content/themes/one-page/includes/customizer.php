<?php

/**
 * OnePage Theme Customizer
 *
 * @package onepage
 */

/**
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
class Onepage_Customizer {

    public static function Onepage_Register($wp_customize) {
        self::Onepage_Sections($wp_customize);
        self::Onepage_Controls($wp_customize);
    }

    public static function Onepage_Sections($wp_customize) {

        $wp_customize->add_setting('onepage_options[onepage_display_header_text]', array(
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'sanitize_text_field',
            'type' => 'option',
            'default' => false
        ));
        $wp_customize->add_control('onepage_display_header_text', array(
            'label' => __('Display Header Text?', 'one-page'),
            'description' => __('Check if you want to display header text in place of logo.', 'one-page'),
            'section' => 'title_tagline',
            'settings' => 'onepage_options[onepage_display_header_text]',
            'type' => 'checkbox'
        ));
//title_tagline
        /**
         * Sections shorting section
         */
        $wp_customize->add_section('onepage_sort_section', array(
                'title' => __('Sections Sorting', 'one-page'),
                'description' => __('Allows you to sorting of sections for OnePage Theme.', 'one-page'), //Descriptive tooltip
                'panel' => '',
                'priority' => '10',
                'capability' => 'edit_theme_options'
            )
        );
        /**
         * Header setting section
         */
        $wp_customize->add_panel('onepage_header_section', array(
                'title' => __('Header Section', 'one-page'),
                'description' => __('Allows you to change settings of header sections for OnePage Theme.', 'one-page'), //Descriptive tooltip
//            'priority' => '10',
                'capability' => 'edit_theme_options'
            )
        );
        /**
         * Header Section Panel
         */
        $wp_customize->add_section('header_setting_panel', array(
                'title' => __('Header Settings', 'one-page'),
                'description' => __('Allows you to set up header section for OnePage Theme.', 'one-page'), //Descriptive tooltip
                'priority' => '10',
                'panel' => 'onepage_header_section',
                'capability' => 'edit_theme_options'
            )
        );
        /**
         * Header top strip section
         */
        $wp_customize->add_section('header_top_setting_panel', array(
                'title' => __('Header Top Strip Settings', 'one-page'),
                'description' => __('Allows you to set up top strip details of header section for OnePage Theme.', 'one-page'), //Descriptive tooltip
                'priority' => '11',
                'panel' => 'onepage_header_section',
                'capability' => 'edit_theme_options'
            )
        );
        /**
         * Header section color
         */
        $wp_customize->add_section('header_color_setting_panel', array(
                'title' => __('Color Settings', 'one-page'),
                'description' => __('Allows you to set up color of header section for OnePage Theme.', 'one-page'), //Descriptive tooltip
                'priority' => '12',
                'panel' => 'onepage_header_section',
                'capability' => 'edit_theme_options'
            )
        );

        /**
         * Latest Post section panel
         * @return array
         */
        $wp_customize->add_panel('latestpost_setting_panel', array(
                'title' => __('Latest Post Section', 'one-page'),
                'description' => __('Allows you to...', 'one-page'),
                'priority' => '4',
                'capability' => 'edit_theme_options'
            )
        );
        /**
         * Latest Post heading section
         */
        $wp_customize->add_section('latestpost_heading_setting_section', array(
                'title' => __('Heading Settings', 'one-page'),
                'description' => __('Allows you to set up Latest Post headings.', 'one-page'), //Descriptive tooltip
                'panel' => 'latestpost_setting_panel',
                'priority' => '10',
                'capability' => 'edit_theme_options'
            )
        );

        $wp_customize->add_section('latestpost_content_setting_section', array(
                'title' => __('Content Settings', 'one-page'),
                'description' => __('Allows you to set up Latest Post content.', 'one-page'), //Descriptive tooltip
                'panel' => 'latestpost_setting_panel',
                'priority' => '10',
                'capability' => 'edit_theme_options'
            )
        );
        /**
         * Our Story section panel
         * @return array
         */
        $wp_customize->add_panel('story_setting_panel', array(
                'title' => __('Our Story Section', 'one-page'),
                'description' => __('Allows you to...', 'one-page'), //Descriptive tooltip
                'priority' => '3',
                'capability' => 'edit_theme_options'
            )
        );

        /**
         * Our Story heading section
         */
        $wp_customize->add_section('story_heading_setting_section', array(
                'title' => __('Heading Settings', 'one-page'),
                'description' => __('Allows you to set up Header text for Our Story Section.', 'one-page'), //Descriptive tooltip
                'panel' => 'story_setting_panel',
                'priority' => '3',
                'capability' => 'edit_theme_options'
            )
        );

        $wp_customize->add_section('story_setting_section', array(
                'title' => __('Content Settings', 'one-page'),
                'description' => __('Allows you to set content.', 'one-page'), //Descriptive tooltip
                'panel' => 'story_setting_panel',
                'priority' => '11',
                'capability' => 'edit_theme_options'
            )
        );

        /**
         * Team section panel
         * @return array
         */
        $wp_customize->add_panel('our_team_setting_panel', array(
                'title' => __('Team Section', 'one-page'),
                'description' => __('Allows you to setup team section', 'one-page'), //Descriptive tooltip
                'priority' => '4',
                'capability' => 'edit_theme_options'
            )
        );

        /**
         * Our Story heading section
         */
        $wp_customize->add_section('team_left_content_setting_section', array(
                'title' => __('Team title and content', 'one-page'),
                'description' => __('Allows you to set up Header and text for Team Section.', 'one-page'), //Descriptive tooltip
                'panel' => 'our_team_setting_panel',
                'priority' => '1',
                'capability' => 'edit_theme_options'
            )
        );

        $wp_customize->add_section('team_member1_setting_section', array(
                'title' => __('Team Member #1', 'one-page'),
                'description' => __('Allows you to set content.', 'one-page'), //Descriptive tooltip
                'panel' => 'our_team_setting_panel',
                'priority' => '2',
                'capability' => 'edit_theme_options'
            )
        );
        $wp_customize->add_section('team_member2_setting_section', array(
                'title' => __('Team Member #2', 'one-page'),
                'description' => __('Allows you to set content.', 'one-page'), //Descriptive tooltip
                'panel' => 'our_team_setting_panel',
                'priority' => '3',
                'capability' => 'edit_theme_options'
            )
        );
        $wp_customize->add_section('team_member3_setting_section', array(
                'title' => __('Team Member #3', 'one-page'),
                'description' => __('Allows you to set content.', 'one-page'), //Descriptive tooltip
                'panel' => 'our_team_setting_panel',
                'priority' => '4',
                'capability' => 'edit_theme_options'
            )
        );
        $wp_customize->add_section('team_member4_setting_section', array(
                'title' => __('Team Member #4', 'one-page'),
                'description' => __('Allows you to set content.', 'one-page'), //Descriptive tooltip
                'panel' => 'our_team_setting_panel',
                'priority' => '5',
                'capability' => 'edit_theme_options'
            )
        );



        /**
         * Quote section panel
         * @return array
         */
        $wp_customize->add_panel('quote_setting_panel', array(
                'title' => __('Quote Section', 'one-page'),
                'description' => __('Allows you to setup quote text', 'one-page'), //Descriptive tooltip
                'priority' => '5',
                'capability' => 'edit_theme_options'
            )
        );

        /**
         * Our Story heading section
         */
        $wp_customize->add_section('quote_setting_section', array(
                'title' => __('Quote Content', 'one-page'),
                'description' => __('Allows you to set up quote text', 'one-page'), //Descriptive tooltip
                'panel' => 'quote_setting_panel',
                'priority' => '1',
                'capability' => 'edit_theme_options'
            )
        );



        /**
         * Services section panel
         * @return array
         */
        $wp_customize->add_panel('services_setting_panel', array(
                'title' => __('Service Section', 'one-page'),
                'description' => __('Allows you to setup quote text', 'one-page'), //Descriptive tooltip
                'priority' => '6',
                'capability' => 'edit_theme_options'
            )
        );

        /**
         * Services Images section
         */
        $wp_customize->add_section('services_images_setting_section', array(
                'title' => __('Service Images', 'one-page'),
                'description' => __('Allows you to set up images', 'one-page'), //Descriptive tooltip
                'panel' => 'services_setting_panel',
                'priority' => '1',
                'capability' => 'edit_theme_options'
            )
        );

        /**
         * Services Element section
         */
        $wp_customize->add_section('services_element1_setting_section', array(
                'title' => __('Service #1 Element', 'one-page'),
                'description' => __('Allows you to set up element settings', 'one-page'), //Descriptive tooltip
                'panel' => 'services_setting_panel',
                'priority' => '1',
                'capability' => 'edit_theme_options'
            )
        );

        /**
         * Services Element section
         */
        $wp_customize->add_section('services_element2_setting_section', array(
                'title' => __('Service #2 Element', 'one-page'),
                'description' => __('Allows you to set up element settings', 'one-page'), //Descriptive tooltip
                'panel' => 'services_setting_panel',
                'priority' => '1',
                'capability' => 'edit_theme_options'
            )
        );

        /**
         * Services Element section
         */
        $wp_customize->add_section('services_element3_setting_section', array(
                'title' => __('Service #3 Element', 'one-page'),
                'description' => __('Allows you to set up element settings', 'one-page'), //Descriptive tooltip
                'panel' => 'services_setting_panel',
                'priority' => '1',
                'capability' => 'edit_theme_options'
            )
        );

        /**
         * Services Element section
         */
        $wp_customize->add_section('services_element4_setting_section', array(
                'title' => __('Service #4 Element', 'one-page'),
                'description' => __('Allows you to set up element settings', 'one-page'), //Descriptive tooltip
                'panel' => 'services_setting_panel',
                'priority' => '1',
                'capability' => 'edit_theme_options'
            )
        );

        /**
         * Subscribe section panel
         * @return array
         */
        $wp_customize->add_panel('subscribe_setting_panel', array(
                'title' => __('Subscribe Section', 'one-page'),
                'description' => __('Allows you to set up subscribe section header', 'one-page'), //Descriptive tooltip
                'priority' => '7',
                'capability' => 'edit_theme_options'
            )
        );
        /**
         * Subscribe section
         */
        $wp_customize->add_section('subscribe_setting_section', array(
                'title' => __('Subscribe Header', 'one-page'),
                'description' => __('set Subscribe Header', 'one-page'), //Descriptive tooltip
                'panel' => 'subscribe_setting_panel',
                'priority' => '1',
                'capability' => 'edit_theme_options'
            )
        );

        /**
         * Partners section panel
         * @return array
         */
        $wp_customize->add_panel('partners_setting_panel', array(
                'title' => __('Partners Section', 'one-page'),
                'description' => __('Allows you to set up partner section elements', 'one-page'), //Descriptive tooltip
                'priority' => '9',
                'capability' => 'edit_theme_options'
            )
        );
        /**
         * Partners section
         */
        $wp_customize->add_section('partners_setting_section', array(
                'title' => __('Partners Settings', 'one-page'),
                'description' => __('set partner section', 'one-page'), //Descriptive tooltip
                'panel' => 'partners_setting_panel',
                'priority' => '1',
                'capability' => 'edit_theme_options'
            )
        );

        /**
         * Testimonials section panel
         */
        $wp_customize->add_panel('testimonial_setting_panel', array(
                'title' => __('Testimonials Section', 'one-page'),
                'description' => __('Allows you to set up Testimonials Section.', 'one-page'), //Descriptive tooltip
                'priority' => '8',
                'capability' => 'edit_theme_options'
            )
        );

        /**
         * Testimonials heading section
         */
        $wp_customize->add_section('testimonial_heading_setting_section', array(
                'title' => __('Heading Settings', 'one-page'),
                'description' => __('Allows you to set up Testimonials section headings.', 'one-page'), //Descriptive tooltip
                'panel' => 'testimonial_setting_panel',
                'priority' => '10',
                'capability' => 'edit_theme_options'
            )
        );
        /**
         * Testimonials box#1
         */
        $wp_customize->add_section('testimonial_box1_setting_section', array(
                'title' => __('Testimonial #1', 'one-page'),
                'description' => __('Allows you to set up Testimonials#1 section content for OnePage Theme.', 'one-page'), //Descriptive tooltip
                'panel' => 'testimonial_setting_panel',
                'priority' => '11',
                'capability' => 'edit_theme_options'
            )
        );
        /**
         * Testimonials box#2
         */
        $wp_customize->add_section('testimonial_box2_setting_section', array(
                'title' => __('Testimonial #2', 'one-page'),
                'description' => __('Allows you to set up Testimonials#2 section content for OnePage Theme.', 'one-page'), //Descriptive tooltip
                'panel' => 'testimonial_setting_panel',
                'priority' => '12',
                'capability' => 'edit_theme_options'
            )
        );
        /**
         * Testimonials box#3
         */
        $wp_customize->add_section('testimonial_box3_setting_section', array(
                'title' => __('Testimonial #3', 'one-page'),
                'description' => __('Allows you to set up Testimonials#3 section content for OnePage Theme.', 'one-page'), //Descriptive tooltip
                'panel' => 'testimonial_setting_panel',
                'priority' => '13',
                'capability' => 'edit_theme_options'
            )
        );

        /**
         * Testimonials section panel
         */
        $wp_customize->add_panel('contactpage_setting_panel', array(
                'title' => __('Contact Section', 'one-page'),
                'description' => __('Allows you to set up Contact section.', 'one-page'), //Descriptive tooltip
                'priority' => '9',
                'capability' => 'edit_theme_options'
            )
        );

        /**
         * Contact Section
         */
        $wp_customize->add_section('contact_setting_section', array(
                'title' => __('Contact Settings', 'one-page'),
                'description' => __('Allows you to set up Contact heading and background image', 'one-page'), //Descriptive tooltip
                'panel' => 'contactpage_setting_panel',
                'priority' => '1',
                'capability' => 'edit_theme_options'
            )
        );

        /**
         * Footer section panel
         */
        $wp_customize->add_panel('page_footer_setting_panel', array(
                'title' => __('Footer Section', 'one-page'),
                'description' => __('Allows you to set up Footer elements.', 'one-page'), //Descriptive tooltip
                'priority' => '10',
                'capability' => 'edit_theme_options'
            )
        );

        /**
         * Footer Main Section
         */
        $wp_customize->add_section('pagefooter_setting_section', array(
                'title' => __('Footer Settings', 'one-page'),
                'description' => __('Allows you to set up Contact heading and background image', 'one-page'), //Descriptive tooltip
                'panel' => 'page_footer_setting_panel',
                'priority' => '1',
                'capability' => 'edit_theme_options'
            )
        );

        /**
         * Footer Social Section
         */
        $wp_customize->add_section('pagefooter_social_setting_section', array(
                'title' => __('Footer Social Media Settings', 'one-page'),
                'description' => __('Allows you to set up external social media links', 'one-page'), //Descriptive tooltip
                'panel' => 'page_footer_setting_panel',
                'priority' => '2',
                'capability' => 'edit_theme_options'
            )
        );

        /**
         * Footer section panel
         */
        $wp_customize->add_panel('page_header_setting_panel', array(
                'title' => __('Header Section', 'one-page'),
                'description' => __('Allows you to set up Header elements.', 'one-page'), //Descriptive tooltip
                'priority' => '1',
                'capability' => 'edit_theme_options'
            )
        );
        /**
         * Header Slider Section
         */
        $wp_customize->add_section('onepage_main_carousel_setting_section', array(
                'title' => __('Header Slider Settings', 'one-page'),
                'description' => __('Allows you to set up slider images', 'one-page'), //Descriptive tooltip
                'panel' => 'page_header_setting_panel',
                'priority' => '2',
                'capability' => 'edit_theme_options'
            )
        );
        $wp_customize->add_section('onepage_header_logo_setting_section', array(
                'title' => __('Header Logo', 'one-page'),
                'description' => __('Allows you to set up header logo', 'one-page'), //Descriptive tooltip
                'panel' => 'page_header_setting_panel',
                'priority' => '1',
                'capability' => 'edit_theme_options'
            )
        );




        /**
         * Pricing section panel
         * @return array
         */
        $wp_customize->add_panel('pricing_setting_panel', array(
                'title' => __('Pricing Section', 'one-page'),
                'description' => __('Allows you to set up pricing section for OnePage Theme.', 'one-page'), //Descriptive tooltip
//            'priority' => '11',
                'capability' => 'edit_theme_options'
            )
        );
        /**
         * Pricing color section
         */
        $wp_customize->add_section('pricing_section_color_setting', array(
                'title' => __('Color Settings', 'one-page'),
                'description' => __('Allows you to set up pricing section color for OnePage Theme.', 'one-page'), //Descriptive tooltip
                'panel' => 'pricing_setting_panel',
                'priority' => '14',
                'capability' => 'edit_theme_options'
            )
        );
        /**
         * Pricing heading section
         */
        $wp_customize->add_section('pricing_heading_setting_section', array(
                'title' => __('Heading Settings', 'one-page'),
                'description' => __('Allows you to set up pricing headings for OnePage Theme.', 'one-page'), //Descriptive tooltip
                'panel' => 'pricing_setting_panel',
                'priority' => '10',
                'capability' => 'edit_theme_options'
            )
        );
        /**
         * Pricing Box#1
         */
        $wp_customize->add_section('pricing_box1', array(
                'title' => __('Pricing Box #1', 'one-page'),
                'description' => __('Allows you to set up pricing box #1.', 'one-page'), //Descriptive tooltip
                'panel' => 'pricing_setting_panel',
                'priority' => '11',
                'capability' => 'edit_theme_options'
            )
        );
        /**
         * Pricing Box#2
         */
        $wp_customize->add_section('pricing_box2', array(
                'title' => __('Pricing Box #2', 'one-page'),
                'description' => __('Allows you to set up pricing box #2.', 'one-page'), //Descriptive tooltip
                'panel' => 'pricing_setting_panel',
                'priority' => '12',
                'capability' => 'edit_theme_options'
            )
        );
        /**
         * Pricing Box#3
         */
        $wp_customize->add_section('pricing_box3', array(
                'title' => __('Pricing Box #3', 'one-page'),
                'description' => __('Allows you to set up pricing box #3.', 'one-page'), //Descriptive tooltip
                'panel' => 'pricing_setting_panel',
                'priority' => '13',
                'capability' => 'edit_theme_options'
            )
        );
        /**
         * Team section panel
         * @return array
         */
        $wp_customize->add_panel('team_setting_panel', array(
                'title' => __('Team Section', 'one-page'),
                'description' => __('Allows you to set up pricing section for OnePage Theme.', 'one-page'), //Descriptive tooltip
//            'priority' => '11',
                'capability' => 'edit_theme_options'
            )
        );
        /**
         * Team color section
         */
        $wp_customize->add_section('team_section_color_setting', array(
                'title' => __('Color Settings', 'one-page'),
                'description' => __('Allows you to set up team section color for OnePage Theme.', 'one-page'), //Descriptive tooltip
                'panel' => 'team_setting_panel',
                'priority' => '15',
                'capability' => 'edit_theme_options'
            )
        );
        /**
         * Team heading section
         */
        $wp_customize->add_section('team_heading_setting_section', array(
                'title' => __('Heading Settings', 'one-page'),
                'description' => __('Allows you to set up team headings for OnePage Theme.', 'one-page'), //Descriptive tooltip
                'panel' => 'team_setting_panel',
                'priority' => '10',
                'capability' => 'edit_theme_options'
            )
        );
        /**
         * Team Member 1
         */
        $wp_customize->add_section('team_member1', array(
                'title' => __('Team Member #1', 'one-page'),
                'description' => __('Allows you to set up information of team member #1.', 'one-page'), //Descriptive tooltip
                'panel' => 'team_setting_panel',
                'priority' => '11',
                'capability' => 'edit_theme_options'
            )
        );
        /**
         * Team Member 2
         */
        $wp_customize->add_section('team_member2', array(
                'title' => __('Team Member #2', 'one-page'),
                'description' => __('Allows you to set up information of team member #2.', 'one-page'), //Descriptive tooltip
                'panel' => 'team_setting_panel',
                'priority' => '12',
                'capability' => 'edit_theme_options'
            )
        );
        /**
         * Team Member 3
         */
        $wp_customize->add_section('team_member3', array(
                'title' => __('Team Member #3', 'one-page'),
                'description' => __('Allows you to set up information of team member #3.', 'one-page'), //Descriptive tooltip
                'panel' => 'team_setting_panel',
                'priority' => '13',
                'capability' => 'edit_theme_options'
            )
        );
        /**
         * Team Member 4
         */
        $wp_customize->add_section('team_member4', array(
                'title' => __('Team Member #4', 'one-page'),
                'description' => __('Allows you to set up information of team member #4.', 'one-page'), //Descriptive tooltip
                'panel' => 'team_setting_panel',
                'priority' => '14',
                'capability' => 'edit_theme_options'
            )
        );
        /**
         * Contact section panel
         * @return array
         */
        $wp_customize->add_panel('contact_setting_panel', array(
                'title' => __('Contact Section', 'one-page'),
                'description' => __('Allows you to set up contact section for OnePage Theme.', 'one-page'), //Descriptive tooltip
//            'priority' => '11',
                'capability' => 'edit_theme_options'
            )
        );
        /**
         * Contact color section
         */
        $wp_customize->add_section('contact_section_color_setting', array(
                'title' => __('Color Settings', 'one-page'),
                'description' => __('Allows you to set up contact section color for OnePage Theme.', 'one-page'), //Descriptive tooltip
                'panel' => 'contact_setting_panel',
                'priority' => '12',
                'capability' => 'edit_theme_options'
            )
        );
        $wp_customize->add_section('contact_section_headings', array(
                'title' => __('Heading Settings', 'one-page'),
                'description' => __('Allows you to set up contact section headings for OnePage Theme', 'one-page'), //Descriptive tooltip
                'panel' => 'contact_setting_panel',
                'priority' => '10',
                'capability' => 'edit_theme_options'
            )
        );
        $wp_customize->add_section('contact_section_setting', array(
                'title' => __('Settings', 'one-page'),
                'description' => __('Allows you to set up contact section settings.', 'one-page'), //Descriptive tooltip
                'panel' => 'contact_setting_panel',
                'priority' => '11',
                'capability' => 'edit_theme_options'
            )
        );

        /**
         * Service section panel
         */
        $wp_customize->add_panel('service_setting_panel', array(
                'title' => __('Services Section', 'one-page'),
                'description' => __('Allows you to set up services section for OnePage Theme.', 'one-page'), //Descriptive tooltip
//            'priority' => '11',
                'capability' => 'edit_theme_options'
            )
        );

        /**
         * Service boxes headings section
         */
        $wp_customize->add_section('service_heading_setting_section', array(
                'title' => __('Heading Settings', 'one-page'),
                'description' => __('Allows you to set up service section headings for OnePage Theme.', 'one-page'), //Descriptive tooltip
                'panel' => 'service_setting_panel',
                'priority' => '10',
                'capability' => 'edit_theme_options'
            )
        );



        /**
         * Service Box #1 section
         */
        $wp_customize->add_section('service_box_one_setting_section', array(
                'title' => __('Box #1', 'one-page'),
                'description' => __('Allows you to set up service box #1 for OnePage Theme.', 'one-page'), //Descriptive tooltip
                'panel' => 'service_setting_panel',
                'priority' => '11',
                'capability' => 'edit_theme_options'
            )
        );
        /**
         * Service Box #2 section
         */
        $wp_customize->add_section('service_box_two_setting_section', array(
                'title' => __('Box #2', 'one-page'),
                'description' => __('Allows you to set up service box #2 for OnePage Theme.', 'one-page'), //Descriptive tooltip
                'panel' => 'service_setting_panel',
                'priority' => '12',
                'capability' => 'edit_theme_options'
            )
        );
        /**
         * Service Box #3 section
         */
        $wp_customize->add_section('service_box_three_setting_section', array(
                'title' => __('Box #3', 'one-page'),
                'description' => __('Allows you to set up service box #3 for OnePage Theme.', 'one-page'), //Descriptive tooltip
                'panel' => 'service_setting_panel',
                'priority' => '13',
                'capability' => 'edit_theme_options'
            )
        );
        /**
         * Service Box #4 section
         */
        $wp_customize->add_section('service_box_four_setting_section', array(
                'title' => __('Box #4', 'one-page'),
                'description' => __('Allows you to set up service box #4 for OnePage Theme.', 'one-page'), //Descriptive tooltip
                'panel' => 'service_setting_panel',
                'priority' => '14',
                'capability' => 'edit_theme_options'
            )
        );
        /**
         * Service boxes color section
         */
        $wp_customize->add_section('service_color_setting_section', array(
                'title' => __('Color Settings', 'one-page'),
                'description' => __('Allows you to set up service boxes color for OnePage Theme.', 'one-page'), //Descriptive tooltip
                'panel' => 'service_setting_panel',
                'priority' => '15',
                'capability' => 'edit_theme_options'
            )
        );

        /**
         * Page setup
         */
        $wp_customize->add_panel('page_setting_panel', array(
                'title' => __('Page Settings', 'one-page'),
                'description' => __('Allows you to set up pages for OnePage Theme.', 'one-page'), //Descriptive tooltip
//            'priority' => '11',
                'capability' => 'edit_theme_options'
            )
        );
        /**
         *  Pages animation section
         */
        $wp_customize->add_section('page_animation_setting', array(
                'title' => __('Animation Settings', 'one-page'),
                'description' => __('Allows you to set on/off animation of OnePage Theme.', 'one-page'), //Descriptive tooltip
                'panel' => 'page_setting_panel',
                'priority' => '10',
                'capability' => 'edit_theme_options'
            )
        );
        /**
         *  Pages color section
         */
        $wp_customize->add_section('page_color_setting', array(
                'title' => __('Color Settings', 'one-page'),
                'description' => __('Allows you to set up pages color for OnePage Theme.', 'one-page'), //Descriptive tooltip
                'panel' => 'page_setting_panel',
                'priority' => '10',
                'capability' => 'edit_theme_options'
            )
        );
    }

    public static function Onepage_Section_Content() {
        $section_content = array(
            'header_setting_panel' => array(
                'onepage_header_logo_img',
                'onepage_header_ad'
            ),
            'header_top_setting_panel' => array(
                'onepage_top_call_us',
                'onepage_top_call_us_icon',
                'onepage_fb_link',
                'onepage_tw_link',
                'onepage_g_plus_link',
                'onepage_rss_link',
                'onepage_pinterest_link',
                'onepage_ln_link',
            ),
            'header_color_setting_panel' => array(
                'onepage_header_bg_color',
                'onepage_header_logo_text_color',
                'onepage_header_strip_bg_color',
                'onepage_top_call_us_num_color',
                'onepage_top_call_us_icon_color',
                'onepage_menu_list_color',
                'onepage_menu_list_hover_bg_color',
                'onepage_menu_list_active_bg_color',
                'onepage_menu_list_hover_border_color'
            ),
            'onepage_sort_section' => array(
                'onepage_section_order'
            ),
            'slider_one_setting_section' => array(
                'onepage_slider_image_1',
                'onepage_slider_heading_1',
                'onepage_slider_subheading_1',
                'onepage_slider_button_text_1',
                'onepage_slider_button_link_1'
            ),
            'slider_two_setting_section' => array(
                'onepage_slider_image_2',
                'onepage_slider_heading_2',
                'onepage_slider_subheading_2',
                'onepage_slider_button_text_2',
                'onepage_slider_button_link_2'
            ),
            'slider_three_setting_section' => array(
                'onepage_slider_image_3',
                'onepage_slider_heading_3',
                'onepage_slider_subheading_3',
                'onepage_slider_button_text_3',
                'onepage_slider_button_link_3'
            ),
            'slider_four_setting_section' => array(
                'onepage_slider_image_4',
                'onepage_slider_heading_4',
                'onepage_slider_subheading_4',
                'onepage_slider_button_text_4',
                'onepage_slider_button_link_4'
            ),
            'slider_five_setting_section' => array(
                'onepage_slider_image_5',
                'onepage_slider_heading_5',
                'onepage_slider_subheading_5',
                'onepage_slider_button_text_5',
                'onepage_slider_button_link_5'
            ),
            'slider_transition_setting_section' => array(
                'onepage_slider_trans_1',
                'onepage_slider_trans_2',
                'onepage_slider_trans_3',
                'onepage_slider_trans_4',
                'onepage_slider_trans_5'
            ),
            'slider_overlay_setting_section' => array(
                'onepage_slider_overlay_1',
                'onepage_slider_overlay_2',
                'onepage_slider_overlay_3',
                'onepage_slider_overlay_4',
                'onepage_slider_overlay_5'
            ),
            /**
             * Service section
             */
            'service_heading_setting_section' => array(
                'onepage_service_section_heading',
                'onepage_service_section_sub_heading'
            ),
            'service_box_one_setting_section' => array(
                'onepage_service_box_icon_1',
                'onepage_service_box_heading_1',
                'onepage_service_box_desc_1'
            ),
            'service_box_two_setting_section' => array(
                'onepage_service_box_icon_2',
                'onepage_service_box_heading_2',
                'onepage_service_box_desc_2'
            ),
            'service_box_three_setting_section' => array(
                'onepage_service_box_icon_3',
                'onepage_service_box_heading_3',
                'onepage_service_box_desc_3'
            ),
            'service_box_four_setting_section' => array(
                'onepage_service_box_icon_4',
                'onepage_service_box_heading_4',
                'onepage_service_box_desc_4'
            ),
            'service_color_setting_section' => array(
                'onepage_service_box_bg_color',
                'onepage_service_section_heading_color',
                'onepage_service_section_sub_heading_color',
                'onepage_service_box_color_border_1',
                'onepage_service_box_color_icon_1',
                'onepage_service_box_color_border_2',
                'onepage_service_box_color_icon_2',
                'onepage_service_box_color_border_3',
                'onepage_service_box_color_icon_3',
                'onepage_service_box_color_border_4',
                'onepage_service_box_color_icon_4'
            ),
            /**
             * Blogs & News panel options
             */
            'blog__section_color_setting' => array(
                'onepage_blog_bg_color',
                'onepage_blog_section_heading_color',
                'onepage_blog_section_sub_heading_color',
                'onepage_blog_read_more_button_color'
            ),
            'blog_heading_setting_section' => array(
                'onepage_blog_main_heading',
                'onepage_blog_sub_heading'
            ),
            'blog_setting_section' => array(
                'onepage_blog_read_more_text',
                'onepage_blog_post_number'
            ),
            /**
             * Portfolio panel options
             */
            'portfolio_section_color_setting' => array(
                'onepage_portfolio_bg_color',
                'onepage_portfolio_section_heading_color',
                'onepage_portfolio_section_sub_heading_color',
                'onepage_portfolio_tab_color',
                'onepage_portfolio_active_tab_color',
                'onepage_portfolio_hexagon_hover_bg_color'
            ),
            'portfolio_heading_setting_section' => array(
                'onepage_portfolio_main_heading',
                'onepage_portfolio_sub_heading',
                'onepage_portfolio_tag'
            ),
            /**
             * Video panel options
             */
            'video_section_story_heading_setting_sectioncolor_setting' => array(
                'onepage_video_section_bg_color',
                'onepage_video_section_heading_color',
                'onepage_video_section_sub_heading_color'
            ),
            'story_heading_setting_section' => array(
                'onepage_story_heading'
            ),
            'latestpost_heading_setting_section' => [
                'onepage_latestpost_heading'
            ],
            'latestpost_content_setting_section' => [
                'onepage_latestpost_date',
                'onepage_latestpost_content',
                'onepage_latestpost_link',
                'onepage_latestpost_image'
            ],
            'team_left_content_setting_section' => [
                'onepage_team_title',
                'onepage_team_content'
            ],
            'team_member1_setting_section' => [
                'onepage_team1_image',
                'onepage_team1_name',
                'onepage_team1_job'
            ],
            'team_member2_setting_section' => [
                'onepage_team2_image',
                'onepage_team2_name',
                'onepage_team2_job'
            ],
            'team_member3_setting_section' => [
                'onepage_team3_image',
                'onepage_team3_name',
                'onepage_team3_job'
            ],
            'team_member4_setting_section' => [
                'onepage_team4_image',
                'onepage_team4_name',
                'onepage_team4_job'
            ],

            'quote_setting_section' => [
                'onepage_quote_header',
                'onepage_quote_content',
                'onepage_quote_footer',
                'onepage_quote_bg_image'
            ],

            'services_images_setting_section' => [
                'onepage_service_image1',
                'onepage_service_image2'
            ],

            'services_element1_setting_section' => [
                'service_element1_header',
                'service_element1_content',
                'service_element1_image',
            ],

            'services_element2_setting_section' => [
                'service_element2_header',
                'service_element2_content',
                'service_element2_image',
            ],

            'services_element3_setting_section' => [
                'service_element3_header',
                'service_element3_content',
                'service_element3_image',
            ],

            'services_element4_setting_section' => [
                'service_element4_header',
                'service_element4_content',
                'service_element4_image',
            ],

            'subscribe_setting_section' => [
                'subscribe_header',
            ],

            'partners_setting_section' => [
                'partners_header',
                'partners_image1',
                'partners_image2',
                'partners_image3',
                'partners_image4',
                'partners_image5',
                'partners_image6',
            ],

            'story_setting_section' => array(
                'onepage_story_iframe',
                'onepage_story_subtext'
            ),
            /**
             * Testiomnial panel options
             */
            'testimonial_color_setting_section' => array(
                'onepage_testimonial_section_bg_color',
                'onepage_testimonial_section_heading_color',
                'onepage_testimonial_section_sub_heading_color',
                'onepage_testimonial_section_content_border_color'
            ),
            'testimonial_heading_setting_section' => array(
                'onepage_testimonial_main_heading'
            ),
            'testimonial_box1_setting_section' => array(
                'onepage_testimonial_1_cel1_name',
                'onepage_testimonial_1_cel1_job',
                'onepage_testimonial_1_cel1_content',
                'onepage_testimonial_1_cel2_name',
                'onepage_testimonial_1_cel2_job',
                'onepage_testimonial_1_cel2_content'
            ),
            'testimonial_box2_setting_section' => array(
                'onepage_testimonial_2_cel1_name',
                'onepage_testimonial_2_cel1_job',
                'onepage_testimonial_2_cel1_content',
                'onepage_testimonial_2_cel2_name',
                'onepage_testimonial_2_cel2_job',
                'onepage_testimonial_2_cel2_content'
            ),
            'testimonial_box3_setting_section' => array(
                'onepage_testimonial_3_cel1_name',
                'onepage_testimonial_3_cel1_job',
                'onepage_testimonial_3_cel1_content',
                'onepage_testimonial_3_cel2_name',
                'onepage_testimonial_3_cel2_job',
                'onepage_testimonial_3_cel2_content'
            ),

            'contact_setting_section' => array(
                'onepage_contact_heading',
                'onepage_contact_background'
            ),
            'pagefooter_setting_section' => [
                'onepage_footer_logo',
                'onepage_footer_address',
                'onapage_footer_phone',
                'onepage_footer_email'
            ],
            'pagefooter_social_setting_section' => [
                'onepage_footer_social1',
                'onepage_footer_social1thumb',
                'onepage_footer_social2',
                'onepage_footer_social2thumb',
                'onepage_footer_social3',
                'onepage_footer_social3thumb',
                'onepage_footer_social4',
                'onepage_footer_social4thumb',
                'onepage_footer_social5',
                'onepage_footer_social5thumb'
            ],
            'onepage_header_logo_setting_section' => [
                'onepage_header_logo'
            ],
            'onepage_main_carousel_setting_section' => [
                'onepage_slide1_image',
                'onepage_slide2_image',
                'onepage_slide3_image',
                'onepage_slide4_image',
            ],


            /**
             * Pricing panel setting
             */
            'pricing_section_color_setting' => array(
                'onepage_pricing_bg_color',
                'onepage_pricing_section_heading_color',
                'onepage_pricing_section_sub_heading_color',
                'onepage_pricing_box1_bg_color',
                'onepage_pricing_box1_icon_border_color',
                'onepage_pricing_box2_bg_color',
                'onepage_pricing_box2_icon_border_color',
                'onepage_pricing_box3_bg_color',
                'onepage_pricing_box3_icon_border_color',
                'onepage_pricing_box_icon_color',
                'onepage_pricing_box_heading_color',
                'onepage_pricing_box_pricing_color',
                'onepage_pricing_box_pricing_bottom_border_color',
                'onepage_pricing_box_list_color',
                'onepage_pricing_box_button_color'
            ),
            'pricing_heading_setting_section' => array(
                'onepage_pricing_main_heading',
                'onepage_pricing_sub_heading'
            ),
            'pricing_box1' => array(
                'onepage_pricing_box1_icon',
                'onepage_pricing_box1_heading',
                'onepage_pricing_box1_price',
                'onepage_pricing_box1_feature1',
                'onepage_pricing_box1_feature2',
                'onepage_pricing_box1_feature3',
                'onepage_pricing_box1_feature4',
                'onepage_pricing_box1_feature5',
                'onepage_pricing_box1_button_text',
                'onepage_pricing_box1_button_link'
            ),
            'pricing_box2' => array(
                'onepage_pricing_box2_icon',
                'onepage_pricing_box2_heading',
                'onepage_pricing_box2_price',
                'onepage_pricing_box2_feature1',
                'onepage_pricing_box2_feature2',
                'onepage_pricing_box2_feature3',
                'onepage_pricing_box2_feature4',
                'onepage_pricing_box2_feature5',
                'onepage_pricing_box2_button_text',
                'onepage_pricing_box2_button_link'
            ),
            'pricing_box3' => array(
                'onepage_pricing_box3_icon',
                'onepage_pricing_box3_heading',
                'onepage_pricing_box3_price',
                'onepage_pricing_box3_feature1',
                'onepage_pricing_box3_feature2',
                'onepage_pricing_box3_feature3',
                'onepage_pricing_box3_feature4',
                'onepage_pricing_box3_feature5',
                'onepage_pricing_box3_button_text',
                'onepage_pricing_box3_button_link'
            ),
            /**
             * Team panel setting
             */
            'team_section_color_setting' => array(
                'onepage_team_bg_color',
                'onepage_team_section_heading_color',
                'onepage_team_section_sub_heading_color',
                'onepage_team_social_icons_bg_color',
                'onepage_team_member_designation_text_color'
            ),
            'team_heading_setting_section' => array(
                'onepage_team_main_heading',
                'onepage_team_sub_heading'
            ),
            'team_member1' => array(
                'onepage_member1_image_link',
                'onepage_member1_caption_text',
                'onepage_member1_name',
                'onepage_member1_designation',
                'onepage_member1_fb_link',
                'onepage_member1_g_plus_link',
                'onepage_member1_tw_link',
                'onepage_member1_ln_link'
            ),
            'team_member2' => array(
                'onepage_member2_image_link',
                'onepage_member2_caption_text',
                'onepage_member2_name',
                'onepage_member2_designation',
                'onepage_member2_fb_link',
                'onepage_member2_g_plus_link',
                'onepage_member2_tw_link',
                'onepage_member2_ln_link'
            ),
            'team_member3' => array(
                'onepage_member3_image_link',
                'onepage_member3_caption_text',
                'onepage_member3_name',
                'onepage_member3_designation',
                'onepage_member3_fb_link',
                'onepage_member3_g_plus_link',
                'onepage_member3_tw_link',
                'onepage_member3_ln_link'
            ),
            'team_member4' => array(
                'onepage_member4_image_link',
                'onepage_member4_caption_text',
                'onepage_member4_name',
                'onepage_member4_designation',
                'onepage_member4_fb_link',
                'onepage_member4_g_plus_link',
                'onepage_member4_tw_link',
                'onepage_member4_ln_link'
            ),
            /**
             * Contact panel settings
             */
            'contact_section_color_setting' => array(
                'onepage_contact_bg_color',
                'onepage_contact_section_heading_color',
                'onepage_contact_section_sub_heading_color',
                'onepage_contact_input_box_border_color',
                'onepage_contact_send_button_color',
                'onepage_contact_send_button_hover_color'
            ),
            'contact_section_headings' => array(
                'onepage_contact_main_heading',
                'onepage_contact_sub_heading'
            ),
            'contact_section_setting' => array(
                'onepage_contact_send_button_text',
                'onepage_contact_map_iframe'
            ),
            /**
             * Page animation settings
             */
            'page_animation_setting' => array(
                'onepage_animation_status',
            ),
            /**
             * Page color settings
             */
            'page_color_setting' => array(
                'pages_color_scheme',
                'pages_heading_color_scheme',
                'pages_text_color_scheme',
                'pages_anchor_hover_color',
                'pages_button_bg_color',
                'pages_button_hover_bg_color'
            )
        );
        return $section_content;
    }

    public static function Onepage_Settings() {

        $choices = array();
        $sections = onepage_sections();
        foreach ($sections as $key => $val) {
            $choices[$key] = $val['label'];
        }
        $onepage_settings = array(
            'onepage_header_logo_img' => array(
                'id' => 'onepage_options[onepage_header_logo_img]',
                'label' => __('Logo Image', 'one-page'),
                'description' => __('Upload logo image, this image will appears when <b>Display Header Text</b> option not checked.', 'one-page'),
                'type' => 'option',
                'setting_type' => 'image',
                'default' => ''
            ),
            'onepage_header_ad' => array(
                'id' => 'onepage_options[onepage_header_ad]',
                'label' => '',
                'description' => '',
                'type' => 'option',
                'setting_type' => 'ad',
                'default' => '',
                'image_url' => ONEPAGE_DIR_URI . 'assets/images/one-page-ad-1.png',
                'link_url' => esc_url('https://www.inkthemes.com/members/signup/vIOmPtHQ')
            ),
            'onepage_top_call_us_icon' => array(
                'id' => 'onepage_options[onepage_top_call_us_icon]',
                'label' => __('Call Us Icon', 'one-page'),
                'description' => sprintf(__('To display icons, Use bootstrap or font awesome icon code.
You can refer the codes from links below. %s', 'one-page') . '<br>' . esc_attr('Write icon class only. e.g, for bootstrap glyphicon&nbsp;write&nbsp;"glyphicon-eye-open" & for font awesome&nbsp;write&nbsp;"fa fa-book"'), '<a href="https://fortawesome.github.io/Font-Awesome/icons/">https://fortawesome.github.io/Font-Awesome/icons/</a>,<br/><a href="http://getbootstrap.com/components/">http://getbootstrap.com/components/</a>'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => 'fa fa-phone'
            ),
            'onepage_top_call_us' => array(
                'id' => 'onepage_options[onepage_top_call_us]',
                'label' => __('Call Us Number', 'one-page'),
                'description' => __('Write call us number', 'one-page'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => ''
            ),
            'onepage_header_bg_color' => array(
                'id' => 'onepage_options[onepage_header_bg_color]',
                'label' => __('Header Background Color', 'one-page'),
                'description' => __('Set header background color', 'one-page'),
                'type' => 'option',
                'setting_type' => 'color',
                'default' => '#ffffff'
            ),
            'onepage_header_logo_text_color' => array(
                'id' => 'onepage_options[onepage_header_logo_text_color]',
                'label' => __('Logo Text Color', 'one-page'),
                'description' => __('Set logo text color', 'one-page'),
                'type' => 'option',
                'setting_type' => 'color',
                'default' => '#272727'
            ),
            'onepage_header_strip_bg_color' => array(
                'id' => 'onepage_options[onepage_header_strip_bg_color]',
                'label' => __('Header Top Strip Background Color', 'one-page'),
                'description' => __('Set header top strip background color', 'one-page'),
                'type' => 'option',
                'setting_type' => 'color',
                'default' => '#444'
            ),
            'onepage_top_call_us_num_color' => array(
                'id' => 'onepage_options[onepage_top_call_us_num_color]',
                'label' => __('Call Us Text Color', 'one-page'),
                'description' => __('Set call us text color', 'one-page'),
                'type' => 'option',
                'setting_type' => 'color',
                'default' => '#ffffff'
            ),
            'onepage_top_call_us_icon_color' => array(
                'id' => 'onepage_options[onepage_top_call_us_icon_color]',
                'label' => __('Call Us Icon Color', 'one-page'),
                'description' => __('Set call us icon color', 'one-page'),
                'type' => 'option',
                'setting_type' => 'color',
                'default' => '#ffffff'
            ),
            'onepage_menu_list_color' => array(
                'id' => 'onepage_options[onepage_menu_list_color]',
                'label' => __('Menu List Color', 'one-page'),
                'description' => __('Set menu-list text color', 'one-page'),
                'type' => 'option',
                'setting_type' => 'color',
                'default' => '#272727'
            ),
            'onepage_menu_list_hover_bg_color' => array(
                'id' => 'onepage_options[onepage_menu_list_hover_bg_color]',
                'label' => __('Menu-list Hover Color', 'one-page'),
                'description' => __('Set menu-list hover background color', 'one-page'),
                'type' => 'option',
                'setting_type' => 'color',
                'default' => '#eee'
            ),
            'onepage_menu_list_active_bg_color' => array(
                'id' => 'onepage_options[onepage_menu_list_active_bg_color]',
                'label' => __('Active Menu-List Background Color', 'one-page'),
                'description' => __('Set active menu-list background color', 'one-page'),
                'type' => 'option',
                'setting_type' => 'color',
                'default' => '#ffcc81'
            ),
            'onepage_menu_list_hover_border_color' => array(
                'id' => 'onepage_options[onepage_menu_list_hover_border_color]',
                'label' => __('Menu-List Border Color', 'one-page'),
                'description' => __('Set menu-list border color', 'one-page'),
                'type' => 'option',
                'setting_type' => 'color',
                'default' => '#e39d37'
            ),
            /**
             * One-page section
             */
            'onepage_section_order' => array(
                'id' => 'onepage_options[onepage_sort]',
                'label' => __('Section Order', 'one-page'),
                'description' => __('Drag the section', 'one-page'),
                'type' => 'option',
                'setting_type' => 'sort',
                'choices' => $choices,
                'default' => onepage_sections_default()
            ),
            /**
             * Service section
             */
            'onepage_service_section_heading' => array(
                'id' => 'onepage_options[onepage_service_section_heading]',
                'label' => __('Main Heading', 'one-page'),
                'description' => __('Service Section main heading', 'one-page'),
                'type' => 'option',
                'setting_type' => 'textarea',
                'default' => ''
            ),
            'onepage_service_section_sub_heading' => array(
                'id' => 'onepage_options[onepage_service_section_sub_heading]',
                'label' => __('Sub Heading', 'one-page'),
                'description' => __('Service Section sub heading', 'one-page'),
                'type' => 'option',
                'setting_type' => 'textarea',
                'default' => ''
            ),
            'onepage_service_box_icon_1' => array(
                'id' => 'onepage_options[onepage_service_box_icon_1]',
                'label' => __('Box Icon', 'one-page'),
                'description' => sprintf(__('To display icons, Use bootstrap or font awesome icon code.
You can refer the codes from links below. %s', 'one-page') . '<br>' . esc_attr('Write icon class only. e.g, for bootstrap glyphicon&nbsp;write&nbsp;"glyphicon-eye-open" & for font awesome&nbsp;write&nbsp;"fa fa-book"'), '<a href="https://fortawesome.github.io/Font-Awesome/icons/">https://fortawesome.github.io/Font-Awesome/icons/</a>,<br/><a href="http://getbootstrap.com/components/">http://getbootstrap.com/components/</a>'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => 'glyphicon-paperclip'
            ),
            'onepage_service_box_heading_1' => array(
                'id' => 'onepage_options[onepage_service_box_heading_1]',
                'label' => __('Box Heading', 'one-page'),
                'description' => __('Enter heading for box', 'one-page'),
                'type' => 'option',
                'setting_type' => 'textarea',
                'default' => ''
            ),
            'onepage_service_box_desc_1' => array(
                'id' => 'onepage_options[onepage_service_box_desc_1]',
                'label' => __('Box Description', 'one-page'),
                'description' => __('Enter description for box', 'one-page'),
                'type' => 'option',
                'setting_type' => 'textarea',
                'default' => ''
            ),
            'onepage_service_box_icon_2' => array(
                'id' => 'onepage_options[onepage_service_box_icon_2]',
                'label' => __('Box Icon', 'one-page'),
                'description' => sprintf(__('To display icons, Use bootstrap or font awesome icon code.
You can refer the codes from links below. %s', 'one-page') . '<br>' . esc_attr('Write icon class only. e.g, for bootstrap glyphicon&nbsp;write&nbsp;"glyphicon-eye-open" & for font awesome&nbsp;write&nbsp;"fa fa-book"'), '<a href="https://fortawesome.github.io/Font-Awesome/icons/">https://fortawesome.github.io/Font-Awesome/icons/</a>,<br/><a href="http://getbootstrap.com/components/">http://getbootstrap.com/components/</a>'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => 'glyphicon-sunglasses'
            ),
            'onepage_service_box_heading_2' => array(
                'id' => 'onepage_options[onepage_service_box_heading_2]',
                'label' => __('Box Heading', 'one-page'),
                'description' => __('Enter heading for box', 'one-page'),
                'type' => 'option',
                'setting_type' => 'textarea',
                'default' => ''
            ),
            'onepage_service_box_desc_2' => array(
                'id' => 'onepage_options[onepage_service_box_desc_2]',
                'label' => __('Box Description', 'one-page'),
                'description' => __('Enter description for box', 'one-page'),
                'type' => 'option',
                'setting_type' => 'textarea',
                'default' => ''
            ),
            'onepage_service_box_icon_3' => array(
                'id' => 'onepage_options[onepage_service_box_icon_3]',
                'label' => __('Box Icon', 'one-page'),
                'description' => sprintf(__('To display icons, Use bootstrap or font awesome icon code.
You can refer the codes from links below. %s', 'one-page') . '<br>' . esc_attr('Write icon class only. e.g, for bootstrap glyphicon&nbsp;write&nbsp;"glyphicon-eye-open" & for font awesome&nbsp;write&nbsp;"fa fa-book"'), '<a href="https://fortawesome.github.io/Font-Awesome/icons/">https://fortawesome.github.io/Font-Awesome/icons/</a>,<br/><a href="http://getbootstrap.com/components/">http://getbootstrap.com/components/</a>'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => 'glyphicon-headphones'
            ),
            'onepage_service_box_heading_3' => array(
                'id' => 'onepage_options[onepage_service_box_heading_3]',
                'label' => __('Box Heading', 'one-page'),
                'description' => __('Enter heading for box', 'one-page'),
                'type' => 'option',
                'setting_type' => 'textarea',
                'default' => ''
            ),
            'onepage_service_box_desc_3' => array(
                'id' => 'onepage_options[onepage_service_box_desc_3]',
                'label' => __('Box Description', 'one-page'),
                'description' => __('Enter description for box', 'one-page'),
                'type' => 'option',
                'setting_type' => 'textarea',
                'default' => ''
            ),
            'onepage_service_box_icon_4' => array(
                'id' => 'onepage_options[onepage_service_box_icon_4]',
                'label' => __('Box Icon', 'one-page'),
                'description' => sprintf(__('To display icons, Use bootstrap or font awesome icon code.
You can refer the codes from links below. %s', 'one-page') . '<br>' . esc_attr('Write icon class only. e.g, for bootstrap glyphicon&nbsp;write&nbsp;"glyphicon-eye-open" & for font awesome&nbsp;write&nbsp;"fa fa-book"'), '<a href="https://fortawesome.github.io/Font-Awesome/icons/">https://fortawesome.github.io/Font-Awesome/icons/</a>,<br/><a href="http://getbootstrap.com/components/">http://getbootstrap.com/components/</a>'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => 'glyphicon-eye-open'
            ),
            'onepage_service_box_heading_4' => array(
                'id' => 'onepage_options[onepage_service_box_heading_4]',
                'label' => __('Box Heading', 'one-page'),
                'description' => __('Enter heading for box', 'one-page'),
                'type' => 'option',
                'setting_type' => 'textarea',
                'default' => ''
            ),
            'onepage_service_box_desc_4' => array(
                'id' => 'onepage_options[onepage_service_box_desc_4]',
                'label' => __('Box Description', 'one-page'),
                'description' => __('Enter description for box', 'one-page'),
                'type' => 'option',
                'setting_type' => 'textarea',
                'default' => ''
            ),
            'onepage_service_box_bg_color' => array(
                'id' => 'onepage_options[onepage_service_box_bg_color]',
                'label' => __('Background Color', 'one-page'),
                'description' => __('Set background color for the section', 'one-page'),
                'type' => 'option',
                'setting_type' => 'color',
                'default' => '#ffffff'
            ),
            'onepage_service_section_heading_color' => array(
                'id' => 'onepage_options[onepage_service_section_heading_color]',
                'label' => __('Main Heading Color', 'one-page'),
                'description' => __('Main heading color', 'one-page'),
                'type' => 'option',
                'setting_type' => 'color',
                'default' => '#272727'
            ),
            'onepage_service_section_sub_heading_color' => array(
                'id' => 'onepage_options[onepage_service_section_sub_heading_color]',
                'label' => __('Sub-Heading Color', 'one-page'),
                'description' => __('Sub-heading color', 'one-page'),
                'type' => 'option',
                'setting_type' => 'color',
                'default' => '#6D6C6C'
            ),
            'onepage_service_box_color_border_1' => array(
                'id' => 'onepage_options[onepage_service_box_color_border_1]',
                'label' => __('Box #1 Border Color', 'one-page'),
                'description' => __('Set border color of the icon', 'one-page'),
                'type' => 'option',
                'setting_type' => 'color',
                'default' => '#e6557c'
            ),
            'onepage_service_box_color_icon_1' => array(
                'id' => 'onepage_options[onepage_service_box_color_icon_1]',
                'label' => __('Box #1 Icon Color', 'one-page'),
                'description' => __('Set icon color', 'one-page'),
                'type' => 'option',
                'setting_type' => 'color',
                'default' => '#e6557c'
            ),
            'onepage_service_box_color_border_2' => array(
                'id' => 'onepage_options[onepage_service_box_color_border_2]',
                'label' => __('Box #2 Border Color', 'one-page'),
                'description' => __('Set border color of the icon', 'one-page'),
                'type' => 'option',
                'setting_type' => 'color',
                'default' => '#00b9db'
            ),
            'onepage_service_box_color_icon_2' => array(
                'id' => 'onepage_options[onepage_service_box_color_icon_2]',
                'label' => __('Box #2 Icon Color', 'one-page'),
                'description' => __('Set icon color', 'one-page'),
                'type' => 'option',
                'setting_type' => 'color',
                'default' => '#00b9db'
            ),
            'onepage_service_box_color_border_3' => array(
                'id' => 'onepage_options[onepage_service_box_color_border_3]',
                'label' => __('Box #3 Border Color', 'one-page'),
                'description' => __('Set border color of the icon', 'one-page'),
                'type' => 'option',
                'setting_type' => 'color',
                'default' => '#dcaf31'
            ),
            'onepage_service_box_color_icon_3' => array(
                'id' => 'onepage_options[onepage_service_box_color_icon_3]',
                'label' => __('Box #3 Icon Color', 'one-page'),
                'description' => __('Set icon color', 'one-page'),
                'type' => 'option',
                'setting_type' => 'color',
                'default' => '#dcaf31'
            ),
            'onepage_service_box_color_border_4' => array(
                'id' => 'onepage_options[onepage_service_box_color_border_4]',
                'label' => __('Box #4 Border Color', 'one-page'),
                'description' => __('Set border color of the icon', 'one-page'),
                'type' => 'option',
                'setting_type' => 'color',
                'default' => '#9792d4'
            ),
            'onepage_service_box_color_icon_4' => array(
                'id' => 'onepage_options[onepage_service_box_color_icon_4]',
                'label' => __('Box #4 Icon Color', 'one-page'),
                'description' => __('Set icon color', 'one-page'),
                'type' => 'option',
                'setting_type' => 'color',
                'default' => '#9792d4'
            ),
            /**
             * Blogs & News options
             */
            'onepage_blog_bg_color' => array(
                'id' => 'onepage_options[onepage_blog_bg_color]',
                'label' => __('Background Color', 'one-page'),
                'description' => __('Set background color for the section', 'one-page'),
                'type' => 'option',
                'setting_type' => 'color',
                'default' => '#1bbc9b'
            ),
            'onepage_blog_section_heading_color' => array(
                'id' => 'onepage_options[onepage_blog_section_heading_color]',
                'label' => __('Main Heading Color', 'one-page'),
                'description' => __('Main heading color', 'one-page'),
                'type' => 'option',
                'setting_type' => 'color',
                'default' => '#ffffff'
            ),
            'onepage_blog_section_sub_heading_color' => array(
                'id' => 'onepage_options[onepage_blog_section_sub_heading_color]',
                'label' => __('Sub-Heading Color', 'one-page'),
                'description' => __('Sub-heading color', 'one-page'),
                'type' => 'option',
                'setting_type' => 'color',
                'default' => '#ffffff'
            ),
            'onepage_blog_read_more_button_color' => array(
                'id' => 'onepage_options[onepage_blog_read_more_button_color]',
                'label' => __('Read More Button Color', 'one-page'),
                'description' => __('Set read more button\'s background color', 'one-page'),
                'type' => 'option',
                'setting_type' => 'color',
                'default' => '#f47264'
            ),
            'onepage_blog_main_heading' => array(
                'id' => 'onepage_options[onepage_blog_main_heading]',
                'label' => __('Main Heading', 'one-page'),
                'description' => __('Write main heading for the Blogs & News section', 'one-page'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => ''
            ),
            'onepage_blog_sub_heading' => array(
                'id' => 'onepage_options[onepage_blog_sub_heading]',
                'label' => __('Sub-Heading', 'one-page'),
                'description' => __('Write sub-heading for the Blogs & News section', 'one-page'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => ''
            ),
            'onepage_blog_read_more_text' => array(
                'id' => 'onepage_options[onepage_blog_read_more_text]',
                'label' => __('Read More Text', 'one-page'),
                'description' => __('Write your text for read more', 'one-page'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => ''
            ),
            'onepage_blog_post_number' => array(
                'id' => 'onepage_options[onepage_blog_post_number]',
                'label' => __('Number Of Posts', 'one-page'),
                'description' => __('Set number of post to show in Blogs & News section', 'one-page'),
                'type' => 'option',
                'setting_type' => 'number',
                'default' => '3'
            ),
            /**
             * Portfolio panel options
             */
            'onepage_portfolio_bg_color' => array(
                'id' => 'onepage_options[onepage_portfolio_bg_color]',
                'label' => __('Background Color', 'one-page'),
                'description' => __('Set background color for the section', 'one-page'),
                'type' => 'option',
                'setting_type' => 'color',
                'default' => '#fff'
            ),
            'onepage_portfolio_section_heading_color' => array(
                'id' => 'onepage_options[onepage_portfolio_section_heading_color]',
                'label' => __('Main Heading Color', 'one-page'),
                'description' => __('Main heading color', 'one-page'),
                'type' => 'option',
                'setting_type' => 'color',
                'default' => '#272727'
            ),
            'onepage_portfolio_section_sub_heading_color' => array(
                'id' => 'onepage_options[onepage_portfolio_section_sub_heading_color]',
                'label' => __('Sub-Heading Color', 'one-page'),
                'description' => __('Sub-heading color', 'one-page'),
                'type' => 'option',
                'setting_type' => 'color',
                'default' => '#6D6C6C'
            ),
            'onepage_portfolio_tab_color' => array(
                'id' => 'onepage_options[onepage_portfolio_tab_color]',
                'label' => __('Tab Item Color', 'one-page'),
                'description' => __('Set tab item color', 'one-page'),
                'type' => 'option',
                'setting_type' => 'color',
                'default' => '#9792d4'
            ),
            'onepage_portfolio_active_tab_color' => array(
                'id' => 'onepage_options[onepage_portfolio_active_tab_color]',
                'label' => __('Active Tab Color', 'one-page'),
                'description' => __('Set active tab color', 'one-page'),
                'type' => 'option',
                'setting_type' => 'color',
                'default' => '#f87a6c'
            ),
            'onepage_portfolio_hexagon_hover_bg_color' => array(
                'id' => 'onepage_options[onepage_portfolio_hexagon_hover_bg_color]',
                'label' => __('Image Hover Overlay Color', 'one-page'),
                'description' => __('Set image hover overlay color', 'one-page'),
                'type' => 'option',
                'setting_type' => 'alpha_color',
                'default' => 'rgba(0, 0, 0, 0.61)'
            ),
            'onepage_portfolio_main_heading' => array(
                'id' => 'onepage_options[onepage_portfolio_main_heading]',
                'label' => __('Main Heading', 'one-page'),
                'description' => __('Write main heading for the portfolio section', 'one-page'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => ''
            ),
            'onepage_portfolio_sub_heading' => array(
                'id' => 'onepage_options[onepage_portfolio_sub_heading]',
                'label' => __('Sub-Heading', 'one-page'),
                'description' => __('Write sub-heading for the portfolio section', 'one-page'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => ''
            ),
            'onepage_portfolio_tag' => array(
                'id' => 'onepage_options[onepage_portfolio_tag]',
                'label' => __('Portfolio Tag', 'one-page'),
                'description' => __('Select a post tag for the portfolio section', 'one-page'),
                'type' => 'option',
                'setting_type' => 'select',
                'default' => '',
                'choices' => onepage_portfolio_tag_list()
            ),
            /**
             * Video panel options
             */
            'onepage_video_section_bg_color' => array(
                'id' => 'onepage_options[onepage_video_section_bg_color]',
                'label' => __('Background Color', 'one-page'),
                'description' => __('Set background color for the section', 'one-page'),
                'type' => 'option',
                'setting_type' => 'color',
                'default' => '#00c1e4'
            ),
            'onepage_video_section_heading_color' => array(
                'id' => 'onepage_options[onepage_video_section_heading_color]',
                'label' => __('Main Heading Color', 'one-page'),
                'description' => __('Main heading color', 'one-page'),
                'type' => 'option',
                'setting_type' => 'color',
                'default' => '#ffffff'
            ),
            'onepage_video_section_sub_heading_color' => array(
                'id' => 'onepage_options[onepage_video_section_sub_heading_color]',
                'label' => __('Sub-Heading Color', 'one-page'),
                'description' => __('Sub-heading color', 'one-page'),
                'type' => 'option',
                'setting_type' => 'color',
                'default' => '#ffffff'
            ),
            'onepage_story_heading' => array(
                'id' => 'onepage_options[onepage_story_heading]',
                'label' => __('Main Heading', 'one-page'),
                'description' => __('Write main heading for the Story section', 'one-page'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => ''
            ),
            'onepage_latestpost_heading' => array(
                'id' => 'onepage_options[onepage_latestpost_heading]',
                'label' => __('Main Heading', 'one-page'),
                'description' => __('Write main heading for the Latest Post section', 'one-page'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => ''
            ),
            'onepage_latestpost_image' => array(
                'id' => 'onepage_options[onepage_latestpost_image]',
                'label' => __('Image', 'one-page'),
                'description' => __('Upload image for Latest Post section', 'one-page'),
                'type' => 'option',
                'setting_type' => 'image',
                'default' => ''
            ),
            'onepage_latestpost_date' => [
                'id' => 'onepage_options[onepage_latestpost_date]',
                'label' => __('Set Date', 'one-page'),
                'description' => __('Write main heading for the Latest Post section', 'one-page'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => ''
            ],
            'onepage_latestpost_content' => [
                'id' => 'onepage_options[onepage_latestpost_content]',
                'label' => __('Main Content', 'one-page'),
                'description' => __('Write main heading for the Latest Post section', 'one-page'),
                'type' => 'option',
                'setting_type' => 'editor',
                'default' => ''
            ],
            'onepage_latestpost_link' => [
                'id' => 'onepage_options[onepage_latestpost_link]',
                'label' => __('Find More Link', 'one-page'),
                'description' => __('Write main heading for the Latest Post section', 'one-page'),
                'type' => 'option',
                'setting_type' => 'link',
                'default' => '#'
            ],
            'onepage_team_title' => [
                'id' => 'onepage_options[onepage_team_title]',
                'label' => __('Set Date', 'one-page'),
                'description' => __('Write main heading for the Latest Post section', 'one-page'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => ''
            ],
            'onepage_team_content' => [
                'id' => 'onepage_options[onepage_team_content]',
                'label' => __('Set Team Content', 'one-page'),
                'description' => __('Write main heading for the Latest Post section', 'one-page'),
                'type' => 'option',
                'setting_type' => 'editor',
                'default' => ''
            ],


            'onepage_team1_name' => [
                'id' => 'onepage_options[onepage_team1_name]',
                'label' => __('Team Member Name', 'one-page'),
                'description' => __('', 'one-page'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => ''
            ],
            'onepage_team1_job' => [
                'id' => 'onepage_options[onepage_team1_job]',
                'label' => __('Team Member Job', 'one-page'),
                'description' => __('', 'one-page'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => ''
            ],
            'onepage_team1_image' => [
                'id' => 'onepage_options[onepage_team1_image]',
                'label' => __('Team Member Image', 'one-page'),
                'description' => __('', 'one-page'),
                'type' => 'option',
                'setting_type' => 'image',
                'default' => ''
            ],

            'onepage_team2_name' => [
                'id' => 'onepage_options[onepage_team2_name]',
                'label' => __('Team Member Name', 'one-page'),
                'description' => __('', 'one-page'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => ''
            ],
            'onepage_team2_job' => [
                'id' => 'onepage_options[onepage_team2_job]',
                'label' => __('Team Member Job', 'one-page'),
                'description' => __('', 'one-page'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => ''
            ],
            'onepage_team2_image' => [
                'id' => 'onepage_options[onepage_team2_image]',
                'label' => __('Team Member Image', 'one-page'),
                'description' => __('', 'one-page'),
                'type' => 'option',
                'setting_type' => 'image',
                'default' => ''
            ],

            'onepage_team3_name' => [
                'id' => 'onepage_options[onepage_team3_name]',
                'label' => __('Team Member Name', 'one-page'),
                'description' => __('', 'one-page'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => ''
            ],
            'onepage_team3_job' => [
                'id' => 'onepage_options[onepage_team3_job]',
                'label' => __('Team Member Job', 'one-page'),
                'description' => __('', 'one-page'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => ''
            ],
            'onepage_team3_image' => [
                'id' => 'onepage_options[onepage_team3_image]',
                'label' => __('Team Member Image', 'one-page'),
                'description' => __('', 'one-page'),
                'type' => 'option',
                'setting_type' => 'image',
                'default' => ''
            ],

            'onepage_team4_name' => [
                'id' => 'onepage_options[onepage_team4_name]',
                'label' => __('Team Member Name', 'one-page'),
                'description' => __('', 'one-page'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => ''
            ],
            'onepage_team4_job' => [
                'id' => 'onepage_options[onepage_team4_job]',
                'label' => __('Team Member Job', 'one-page'),
                'description' => __('', 'one-page'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => ''
            ],
            'onepage_team4_image' => [
                'id' => 'onepage_options[onepage_team4_image]',
                'label' => __('Team Member Image', 'one-page'),
                'description' => __('', 'one-page'),
                'type' => 'option',
                'setting_type' => 'image',
                'default' => ''
            ],


            'onepage_quote_header' => [
                'id' => 'onepage_options[onepage_quote_header]',
                'label' => __('Quote Header', 'one-page'),
                'description' => __('', 'one-page'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => ''
            ],
            'onepage_quote_content' => [
                'id' => 'onepage_options[onepage_quote_content]',
                'label' => __('Quote Main Content', 'one-page'),
                'description' => __('', 'one-page'),
                'type' => 'option',
                'setting_type' => 'editor',
                'default' => ''
            ],
            'onepage_quote_footer' => [
                'id' => 'onepage_options[onepage_quote_footer]',
                'label' => __('Quote Footer', 'one-page'),
                'description' => __('', 'one-page'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => ''
            ],

            'onepage_quote_bg_image' => [
                'id' => 'onepage_options[onepage_quote_bg_image]',
                'label' => __('Quote Background Image', 'one-page'),
                'description' => __('', 'one-page'),
                'type' => 'option',
                'setting_type' => 'image',
                'default' => ''
            ],

            'onepage_service_image1' => [
                'id' => 'onepage_options[onepage_service_image1]',
                'label' => __('Service First Image', 'one-page'),
                'description' => __('', 'one-page'),
                'type' => 'option',
                'setting_type' => 'image',
                'default' => ''
            ],

            'onepage_service_image2' => [
                'id' => 'onepage_options[onepage_service_image2]',
                'label' => __('Service Second Image', 'one-page'),
                'description' => __('', 'one-page'),
                'type' => 'option',
                'setting_type' => 'image',
                'default' => ''
            ],
            'service_element1_image' => [
                'id' => 'onepage_options[service_element1_image]',
                'label' => __('Service #1 Element Image', 'one-page'),
                'description' => __('Use font-awesome notation like "fa-gift"', 'one-page'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => ''
            ],
            'service_element1_header' => [
                'id' => 'onepage_options[service_element1_header]',
                'label' => __('Service #1 Element Header', 'one-page'),
                'description' => __('', 'one-page'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => ''
            ],
            'service_element1_content' => [
                'id' => 'onepage_options[service_element1_content]',
                'label' => __('Service #1 Element Content', 'one-page'),
                'description' => __('', 'one-page'),
                'type' => 'option',
                'setting_type' => 'editor',
                'default' => ''
            ],
            'service_element2_image' => [
                'id' => 'onepage_options[service_element2_image]',
                'label' => __('Service #2 Element Image', 'one-page'),
                'description' => __('Use font-awesome notation like "fa-gift"', 'one-page'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => ''
            ],
            'service_element2_header' => [
                'id' => 'onepage_options[service_element2_header]',
                'label' => __('Service #2 Element Header', 'one-page'),
                'description' => __('', 'one-page'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => ''
            ],
            'service_element2_content' => [
                'id' => 'onepage_options[service_element2_content]',
                'label' => __('Service #2 Element Content', 'one-page'),
                'description' => __('', 'one-page'),
                'type' => 'option',
                'setting_type' => 'editor',
                'default' => ''
            ],
            'service_element3_image' => [
                'id' => 'onepage_options[service_element3_image]',
                'label' => __('Service #3 Element Image', 'one-page'),
                'description' => __('Use font-awesome notation like "fa-gift"', 'one-page'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => ''
            ],
            'service_element3_header' => [
                'id' => 'onepage_options[service_element3_header]',
                'label' => __('Service #3 Element Header', 'one-page'),
                'description' => __('', 'one-page'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => ''
            ],
            'service_element3_content' => [
                'id' => 'onepage_options[service_element3_content]',
                'label' => __('Service #3 Element Content', 'one-page'),
                'description' => __('', 'one-page'),
                'type' => 'option',
                'setting_type' => 'editor',
                'default' => ''
            ],
            'service_element4_image' => [
                'id' => 'onepage_options[service_element4_image]',
                'label' => __('Service #4 Element Image', 'one-page'),
                'description' => __('Use font-awesome notation like "fa-gift"', 'one-page'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => ''
            ],
            'service_element4_header' => [
                'id' => 'onepage_options[service_element4_header]',
                'label' => __('Service #4 Element Header', 'one-page'),
                'description' => __('', 'one-page'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => ''
            ],
            'service_element4_content' => [
                'id' => 'onepage_options[service_element4_content]',
                'label' => __('Service #4 Element Content', 'one-page'),
                'description' => __('', 'one-page'),
                'type' => 'option',
                'setting_type' => 'editor',
                'default' => ''
            ],
            'subscribe_header' => [
                'id' => 'onepage_options[subscribe_header]',
                'label' => __('Subscribe Section Header', 'one-page'),
                'description' => __('', 'one-page'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => ''
            ],
            'partners_header' => [
                'id' => 'onepage_options[partners_header]',
                'label' => __('Partners Section Header', 'one-page'),
                'description' => __('', 'one-page'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => ''
            ],
            'partners_image1' => [
                'id' => 'onepage_options[partners_image1]',
                'label' => __('Partners Image #1', 'one-page'),
                'description' => __('', 'one-page'),
                'type' => 'option',
                'setting_type' => 'image',
                'default' => ''
            ],
            'partners_image2' => [
                'id' => 'onepage_options[partners_image2]',
                'label' => __('Partners Image #2', 'one-page'),
                'description' => __('', 'one-page'),
                'type' => 'option',
                'setting_type' => 'image',
                'default' => ''
            ],
            'partners_image3' => [
                'id' => 'onepage_options[partners_image3]',
                'label' => __('Partners Image #3', 'one-page'),
                'description' => __('', 'one-page'),
                'type' => 'option',
                'setting_type' => 'image',
                'default' => ''
            ],
            'partners_image4' => [
                'id' => 'onepage_options[partners_image4]',
                'label' => __('Partners Image #4', 'one-page'),
                'description' => __('', 'one-page'),
                'type' => 'option',
                'setting_type' => 'image',
                'default' => ''
            ],
            'partners_image5' => [
                'id' => 'onepage_options[partners_image5]',
                'label' => __('Partners Image #5', 'one-page'),
                'description' => __('', 'one-page'),
                'type' => 'option',
                'setting_type' => 'image',
                'default' => ''
            ],
            'partners_image6' => [
                'id' => 'onepage_options[partners_image6]',
                'label' => __('Partners Image #6', 'one-page'),
                'description' => __('', 'one-page'),
                'type' => 'option',
                'setting_type' => 'image',
                'default' => ''
            ],
            'onepage_testimonial_main_heading' => array(
                'id' => 'onepage_options[onepage_testimonial_main_heading]',
                'label' => __('Main Heading', 'one-page'),
                'description' => __('Write main heading for the testimonial section', 'one-page'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => ''
            ),
            'onepage_testimonial_1_cel2_name' => array(
                'id' => 'onepage_options[onepage_testimonial_1_cel2_name]',
                'label' => __('Cell #2 Right Section Name', 'one-page'),
                'description' => __('Upload Author Image for first testimonial', 'one-page'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => ''
            ),
            'onepage_testimonial_1_cel1_name' => array(
                'id' => 'onepage_options[onepage_testimonial_1_cel1_name]',
                'label' => __('Cell #1 Left Section Name', 'one-page'),
                'description' => __('Upload Author Image for first testimonial', 'one-page'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => ''
            ),
            'onepage_testimonial_1_cel1_job' => array(
                'id' => 'onepage_options[onepage_testimonial_1_cel1_job]',
                'label' => __('Cell #1 Left Section Job', 'one-page'),
                'description' => __('Upload Author Image for first testimonial', 'one-page'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => ''
            ),
            'onepage_testimonial_1_cel2_job' => array(
                'id' => 'onepage_options[onepage_testimonial_1_cel2_job]',
                'label' => __('Cell #2 Right Section Job', 'one-page'),
                'description' => __('', 'one-page'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => ''
            ),
            'onepage_testimonial_1_cel1_content' => array(
                'id' => 'onepage_options[onepage_testimonial_1_cel1_content]',
                'label' => __('Cell #1 Left Section Content', 'one-page'),
                'description' => __('', 'one-page'),
                'type' => 'option',
                'setting_type' => 'editor',
                'default' => ''
            ),
            'onepage_testimonial_1_cel2_content' => array(
                'id' => 'onepage_options[onepage_testimonial_1_cel2_content]',
                'label' => __('Cell #1 Right Section Content', 'one-page'),
                'description' => __('', 'one-page'),
                'type' => 'option',
                'setting_type' => 'editor',
                'default' => ''
            ),

            'onepage_testimonial_2_cel2_name' => array(
                'id' => 'onepage_options[onepage_testimonial_2_cel2_name]',
                'label' => __('Cell #2 Right Section Name', 'one-page'),
                'description' => __('Upload Author Image for first testimonial', 'one-page'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => ''
            ),
            'onepage_testimonial_2_cel1_name' => array(
                'id' => 'onepage_options[onepage_testimonial_2_cel1_name]',
                'label' => __('Cell #2 Left Section Name', 'one-page'),
                'description' => __('Upload Author Image for first testimonial', 'one-page'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => ''
            ),
            'onepage_testimonial_2_cel1_job' => array(
                'id' => 'onepage_options[onepage_testimonial_2_cel1_job]',
                'label' => __('Cell #2 Left Section Job', 'one-page'),
                'description' => __('Upload Author Image for first testimonial', 'one-page'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => ''
            ),
            'onepage_testimonial_2_cel2_job' => array(
                'id' => 'onepage_options[onepage_testimonial_2_cel2_job]',
                'label' => __('Cell #2 Right Section Job', 'one-page'),
                'description' => __('', 'one-page'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => ''
            ),
            'onepage_testimonial_2_cel1_content' => array(
                'id' => 'onepage_options[onepage_testimonial_2_cel1_content]',
                'label' => __('Cell #2 Left Section Content', 'one-page'),
                'description' => __('', 'one-page'),
                'type' => 'option',
                'setting_type' => 'editor',
                'default' => ''
            ),
            'onepage_testimonial_2_cel2_content' => array(
                'id' => 'onepage_options[onepage_testimonial_2_cel2_content]',
                'label' => __('Cell #2 Right Section Content', 'one-page'),
                'description' => __('', 'one-page'),
                'type' => 'option',
                'setting_type' => 'editor',
                'default' => ''
            ),

            'onepage_testimonial_3_cel2_name' => array(
                'id' => 'onepage_options[onepage_testimonial_3_cel2_name]',
                'label' => __('Cell #3 Right Section Name', 'one-page'),
                'description' => __('Upload Author Image for first testimonial', 'one-page'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => ''
            ),
            'onepage_testimonial_3_cel1_name' => array(
                'id' => 'onepage_options[onepage_testimonial_3_cel1_name]',
                'label' => __('Cell #3 Left Section Name', 'one-page'),
                'description' => __('Upload Author Image for first testimonial', 'one-page'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => ''
            ),
            'onepage_testimonial_3_cel1_job' => array(
                'id' => 'onepage_options[onepage_testimonial_3_cel1_job]',
                'label' => __('Cell #3 Left Section Job', 'one-page'),
                'description' => __('Upload Author Image for first testimonial', 'one-page'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => ''
            ),
            'onepage_testimonial_3_cel2_job' => array(
                'id' => 'onepage_options[onepage_testimonial_3_cel2_job]',
                'label' => __('Cell #3 Right Section Job', 'one-page'),
                'description' => __('', 'one-page'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => ''
            ),
            'onepage_testimonial_3_cel1_content' => array(
                'id' => 'onepage_options[onepage_testimonial_3_cel1_content]',
                'label' => __('Cell #3 Left Section Content', 'one-page'),
                'description' => __('', 'one-page'),
                'type' => 'option',
                'setting_type' => 'editor',
                'default' => ''
            ),
            'onepage_testimonial_3_cel2_content' => array(
                'id' => 'onepage_options[onepage_testimonial_3_cel2_content]',
                'label' => __('Cell #3 Right Section Content', 'one-page'),
                'description' => __('', 'one-page'),
                'type' => 'option',
                'setting_type' => 'editor',
                'default' => ''
            ),

            'onepage_contact_background' => array(
                'id' => 'onepage_options[onepage_contact_background]',
                'label' => __('Contact section Heading', 'one-page'),
                'description' => __('', 'one-page'),
                'type' => 'option',
                'setting_type' => 'image',
                'default' => ''
            ),
            'onepage_contact_heading' => array(
                'id' => 'onepage_options[onepage_contact_heading]',
                'label' => __('Contact Background Image', 'one-page'),
                'description' => __('', 'one-page'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => ''
            ),

            'onepage_footer_logo' => array(
                'id' => 'onepage_options[onepage_footer_logo]',
                'label' => __('Footer Logo', 'one-page'),
                'description' => __('', 'one-page'),
                'type' => 'option',
                'setting_type' => 'image',
                'default' => ''
            ),
            'onepage_footer_address' => array(
                'id' => 'onepage_options[onepage_footer_address]',
                'label' => __('Footer address', 'one-page'),
                'description' => __('', 'one-page'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => ''
            ),
            'onapage_footer_phone' => array(
                'id' => 'onepage_options[onapage_footer_phone]',
                'label' => __('Footer Phone', 'one-page'),
                'description' => __('', 'one-page'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => ''
            ),
            'onepage_footer_email' => array(
                'id' => 'onepage_options[onepage_footer_email]',
                'label' => __('Footer email', 'one-page'),
                'description' => __('', 'one-page'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => ''
            ),

            'onepage_footer_social1' => array(
                'id' => 'onepage_options[onepage_footer_social1]',
                'label' => __('Footer Social button #1 Link', 'one-page'),
                'description' => __('', 'one-page'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => ''
            ),
            'onepage_footer_social1thumb' => array(
                'id' => 'onepage_options[onepage_footer_social1thumb]',
                'label' => __('Footer Social button #1 font-awesome image code( ex: fa-instagram )', 'one-page'),
                'description' => __('', 'one-page'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => ''
            ),
            'onepage_footer_social2' => array(
                'id' => 'onepage_options[onepage_footer_social2]',
                'label' => __('Footer Social button #2 Link', 'one-page'),
                'description' => __('', 'one-page'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => ''
            ),
            'onepage_footer_social2thumb' => array(
                'id' => 'onepage_options[onepage_footer_onepage_footer_social2thumbemail]',
                'label' => __('Footer Social button #2 font-awesome image code( ex: fa-instagram )', 'one-page'),
                'description' => __('', 'one-page'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => ''
            ),
            'onepage_footer_social3' => array(
                'id' => 'onepage_options[onepage_footer_social3]',
                'label' => __('Footer Social button #3 Link', 'one-page'),
                'description' => __('', 'one-page'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => ''
            ),
            'onepage_footer_social3thumb' => array(
                'id' => 'onepage_options[onepage_footer_onepage_footer_social3thumbemail]',
                'label' => __('Footer Social button #3 font-awesome image code( ex: fa-instagram )', 'one-page'),
                'description' => __('', 'one-page'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => ''
            ),
            'onepage_footer_social4' => array(
                'id' => 'onepage_options[onepage_footer_social4]',
                'label' => __('Footer Social button #4 Link', 'one-page'),
                'description' => __('', 'one-page'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => ''
            ),
            'onepage_footer_social4thumb' => array(
                'id' => 'onepage_options[onepage_footer_onepage_footer_social4thumbemail]',
                'label' => __('Footer Social button #4 font-awesome image code( ex: fa-instagram )', 'one-page'),
                'description' => __('', 'one-page'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => ''
            ),
            'onepage_footer_social5' => array(
                'id' => 'onepage_options[onepage_footer_social5]',
                'label' => __('Footer Social button #5 Link', 'one-page'),
                'description' => __('', 'one-page'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => ''
            ),
            'onepage_footer_social5thumb' => array(
                'id' => 'onepage_options[onepage_footer_social5thumb]',
                'label' => __('Footer Social button #5 font-awesome image code( ex: fa-instagram )', 'one-page'),
                'description' => __('', 'one-page'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => ''
            ),
            'onepage_slide1_image' => array(
                'id' => 'onepage_options[onepage_slide1_image]',
                'label' => __('Header Slide #1 Image', 'one-page'),
                'description' => __('', 'one-page'),
                'type' => 'option',
                'setting_type' => 'image',
                'default' => ''
            ),
            'onepage_slide2_image' => array(
                'id' => 'onepage_options[onepage_slide2_image]',
                'label' => __('Header Slide #2 Image', 'one-page'),
                'description' => __('', 'one-page'),
                'type' => 'option',
                'setting_type' => 'image',
                'default' => ''
            ),
            'onepage_slide3_image' => array(
                'id' => 'onepage_options[onepage_slide3_image]',
                'label' => __('Header Slide #3 Image', 'one-page'),
                'description' => __('', 'one-page'),
                'type' => 'option',
                'setting_type' => 'image',
                'default' => ''
            ),
            'onepage_slide4_image' => array(
                'id' => 'onepage_options[onepage_slide4_image]',
                'label' => __('Header Slide #4 Image', 'one-page'),
                'description' => __('', 'one-page'),
                'type' => 'option',
                'setting_type' => 'image',
                'default' => ''
            ),
            'onepage_header_logo' => array(
                'id' => 'onepage_options[onepage_header_logo]',
                'label' => __('Header Logo', 'one-page'),
                'description' => __('', 'one-page'),
                'type' => 'option',
                'setting_type' => 'image',
                'default' => ''
            ),


            'onepage_story_iframe' => array(
                'id' => 'onepage_options[onepage_story_iframe]',
                'label' => __('Main Content', 'one-page'),
                'description' => __('Paste main content text which will be splitted in 2 columns', 'one-page'),
                'type' => 'option',
                'setting_type' => 'editor',
                'default' => ''
            ),
            'onepage_story_subtext' => array(
                'id' => 'onepage_options[onepage_story_subtext]',
                'label' => __('Content Sufix section', 'one-page'),
                'description' => __('Paste statistic data which are displayed at the end', 'one-page'),
                'type' => 'option',
                'setting_type' => 'editor',
                'default' => ''
            ),
            /**
             * Pricing panel setting
             */
            'onepage_pricing_bg_color' => array(
                'id' => 'onepage_options[onepage_pricing_bg_color]',
                'label' => __('Background Color', 'one-page'),
                'description' => __('Set background color for the section', 'one-page'),
                'type' => 'option',
                'setting_type' => 'color',
                'default' => '#f8a841'
            ),
            'onepage_pricing_section_heading_color' => array(
                'id' => 'onepage_options[onepage_pricing_section_heading_color]',
                'label' => __('Main Heading Color', 'one-page'),
                'description' => __('Main heading color', 'one-page'),
                'type' => 'option',
                'setting_type' => 'color',
                'default' => '#ffffff'
            ),
            'onepage_pricing_section_sub_heading_color' => array(
                'id' => 'onepage_options[onepage_pricing_section_sub_heading_color]',
                'label' => __('Sub-Heading Color', 'one-page'),
                'description' => __('Sub-heading color', 'one-page'),
                'type' => 'option',
                'setting_type' => 'color',
                'default' => '#ffffff'
            ),
            'onepage_pricing_box1_bg_color' => array(
                'id' => 'onepage_options[onepage_pricing_box1_bg_color]',
                'label' => __('Pricing box #1 Background Color', 'one-page'),
                'description' => __('Set pricing box #1 background color', 'one-page'),
                'type' => 'option',
                'setting_type' => 'color',
                'default' => '#1bbc9b'
            ),
            'onepage_pricing_box1_icon_border_color' => array(
                'id' => 'onepage_options[onepage_pricing_box1_icon_border_color]',
                'label' => __('Pricing Box #1 Icon Border Color', 'one-page'),
                'description' => __('Set pricing box #1 icon border color', 'one-page'),
                'type' => 'option',
                'setting_type' => 'color',
                'default' => '#3BD9BC'
            ),
            'onepage_pricing_box2_bg_color' => array(
                'id' => 'onepage_options[onepage_pricing_box2_bg_color]',
                'label' => __('Pricing Box #2 Background Color', 'one-page'),
                'description' => __('Set pricing box #2 background color', 'one-page'),
                'type' => 'option',
                'setting_type' => 'color',
                'default' => '#f47264'
            ),
            'onepage_pricing_box2_icon_border_color' => array(
                'id' => 'onepage_options[onepage_pricing_box2_icon_border_color]',
                'label' => __('Pricing box #2 Icon Border Color', 'one-page'),
                'description' => __('Set pricing box #2 icon border color', 'one-page'),
                'type' => 'option',
                'setting_type' => 'color',
                'default' => '#fc9387'
            ),
            'onepage_pricing_box3_bg_color' => array(
                'id' => 'onepage_options[onepage_pricing_box3_bg_color]',
                'label' => __('Pricing Box #3 Background Color', 'one-page'),
                'description' => __('Set pricing box #3 background color', 'one-page'),
                'type' => 'option',
                'setting_type' => 'color',
                'default' => '#1bbc9b'
            ),
            'onepage_pricing_box3_icon_border_color' => array(
                'id' => 'onepage_options[onepage_pricing_box3_icon_border_color]',
                'label' => __('Pricing Box #3 Icon Border Color', 'one-page'),
                'description' => __('Set pricing box #3 icon border color', 'one-page'),
                'type' => 'option',
                'setting_type' => 'color',
                'default' => '#3BD9BC'
            ),
            'onepage_pricing_box_icon_color' => array(
                'id' => 'onepage_options[onepage_pricing_box_icon_color]',
                'label' => __('Pricing Boxes Icon Color', 'one-page'),
                'description' => __('Set pricing boxes icon color', 'one-page'),
                'type' => 'option',
                'setting_type' => 'color',
                'default' => '#272727'
            ),
            'onepage_pricing_box_heading_color' => array(
                'id' => 'onepage_options[onepage_pricing_box_heading_color]',
                'label' => __('Pricing Box Heading Color', 'one-page'),
                'description' => __('Set pricing box heading color', 'one-page'),
                'type' => 'option',
                'setting_type' => 'color',
                'default' => '#fff'
            ),
            'onepage_pricing_box_pricing_color' => array(
                'id' => 'onepage_options[onepage_pricing_box_pricing_color]',
                'label' => __('Pricing Box Price Color', 'one-page'),
                'description' => __('Set pricing box price color', 'one-page'),
                'type' => 'option',
                'setting_type' => 'color',
                'default' => '#fff'
            ),
            'onepage_pricing_box_pricing_bottom_border_color' => array(
                'id' => 'onepage_options[onepage_pricing_box_pricing_bottom_border_color]',
                'label' => __('Pricing Box Bottom Border Color', 'one-page'),
                'description' => __('Set pricing box bottom border color', 'one-page'),
                'type' => 'option',
                'setting_type' => 'color',
                'default' => '#F8C841'
            ),
            'onepage_pricing_box_list_color' => array(
                'id' => 'onepage_options[onepage_pricing_box_list_color]',
                'label' => __('Pricing Box Feature Text Color', 'one-page'),
                'description' => __('Set Pricing box feature text color', 'one-page'),
                'type' => 'option',
                'setting_type' => 'color',
                'default' => '#fff'
            ),
            'onepage_pricing_box_button_color' => array(
                'id' => 'onepage_options[onepage_pricing_box_button_color]',
                'label' => __('Pricing Box Buttons Color', 'one-page'),
                'description' => __('Set pricing box buttons color', 'one-page'),
                'type' => 'option',
                'setting_type' => 'color',
                'default' => '#dfae45'
            ),
            'onepage_pricing_main_heading' => array(
                'id' => 'onepage_options[onepage_pricing_main_heading]',
                'label' => __('Main Heading', 'one-page'),
                'description' => __('Write main heading for the pricing section', 'one-page'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => ''
            ),
            'onepage_pricing_sub_heading' => array(
                'id' => 'onepage_options[onepage_pricing_sub_heading]',
                'label' => __('Sub-Heading', 'one-page'),
                'description' => __('Write sub-heading for the pricing section', 'one-page'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => ''
            ),
            'onepage_pricing_box1_icon' => array(
                'id' => 'onepage_options[onepage_pricing_box1_icon]',
                'label' => __('Pricing Box #1 Icon Code', 'one-page'),
                'description' => sprintf(__('To display icons, Use bootstrap or font awesome icon code.
You can refer the codes from links below. %s', 'one-page') . '<br>' . esc_attr('Write icon class only. e.g, for bootstrap glyphicon&nbsp;write&nbsp;"glyphicon-eye-open" & for font awesome&nbsp;write&nbsp;"fa fa-book"'), '<a href="https://fortawesome.github.io/Font-Awesome/icons/">https://fortawesome.github.io/Font-Awesome/icons/</a>,<br/><a href="http://getbootstrap.com/components/">http://getbootstrap.com/components/</a>'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => 'glyphicon-shopping-cart'
            ),
            'onepage_pricing_box1_heading' => array(
                'id' => 'onepage_options[onepage_pricing_box1_heading]',
                'label' => __('Pricing Box #1 Heading', 'one-page'),
                'description' => __('Write heading for the pricing box #1', 'one-page'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => 'Single Plan'
            ),
            'onepage_pricing_box1_price' => array(
                'id' => 'onepage_options[onepage_pricing_box1_price]',
                'label' => __('Pricing Box #1 Price', 'one-page'),
                'description' => __('Write price description for the pricing box #1', 'one-page'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => '$59'
            ),
            'onepage_pricing_box1_feature1' => array(
                'id' => 'onepage_options[onepage_pricing_box1_feature1]',
                'label' => __('Pricing Box #1 Feature1', 'one-page'),
                'description' => __('Write feature #1 for the pricing box #1', 'one-page'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => 'Unlimited Access'
            ),
            'onepage_pricing_box1_feature2' => array(
                'id' => 'onepage_options[onepage_pricing_box1_feature2]',
                'label' => __('Pricing Box #1 Feature2', 'one-page'),
                'description' => __('Write feature #2 for the pricing box #1', 'one-page'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => '20 GB Storage'
            ),
            'onepage_pricing_box1_feature3' => array(
                'id' => 'onepage_options[onepage_pricing_box1_feature3]',
                'label' => __('Pricing Box #1 Feature2', 'one-page'),
                'description' => __('Write feature #3 for the pricing box #1', 'one-page'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => '200 Cups of Coffee Free'
            ),
            'onepage_pricing_box1_feature4' => array(
                'id' => 'onepage_options[onepage_pricing_box1_feature4]',
                'label' => __('Pricing Box #1 Feature4', 'one-page'),
                'description' => __('Write feature #4 for the pricing box #1', 'one-page'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => '6 Months Support'
            ),
            'onepage_pricing_box1_feature5' => array(
                'id' => 'onepage_options[onepage_pricing_box1_feature5]',
                'label' => __('Pricing Box #1 Feature5', 'one-page'),
                'description' => __('Write feature #5 for the pricing box #1', 'one-page'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => 'Full Theme Access'
            ),
            'onepage_pricing_box1_button_text' => array(
                'id' => 'onepage_options[onepage_pricing_box1_button_text]',
                'label' => __('Pricing Box #1 Button Text', 'one-page'),
                'description' => __('Write pricing box #1 button text', 'one-page'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => __('View Theme', 'one-page')
            ),
            'onepage_pricing_box1_button_link' => array(
                'id' => 'onepage_options[onepage_pricing_box1_button_link]',
                'label' => __('Pricing Box #1 Button Link', 'one-page'),
                'description' => __('Write Pricing box #1 button link', 'one-page'),
                'type' => 'option',
                'setting_type' => 'link',
                'default' => '#'
            ),
            'onepage_pricing_box2_icon' => array(
                'id' => 'onepage_options[onepage_pricing_box2_icon]',
                'label' => __('Pricing Box #2 Icon Code', 'one-page'),
                'description' => sprintf(__('To display icons, Use bootstrap or font awesome icon code.
You can refer the codes from links below. %s', 'one-page') . '<br>' . esc_attr('Write icon class only. e.g, for bootstrap glyphicon&nbsp;write&nbsp;"glyphicon-eye-open" & for font awesome&nbsp;write&nbsp;"fa fa-book"'), '<a href="https://fortawesome.github.io/Font-Awesome/icons/">https://fortawesome.github.io/Font-Awesome/icons/</a>,<br/><a href="http://getbootstrap.com/components/">http://getbootstrap.com/components/</a>'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => 'glyphicon-hourglass'
            ),
            'onepage_pricing_box2_heading' => array(
                'id' => 'onepage_options[onepage_pricing_box2_heading]',
                'label' => __('Pricing Box #2 Heading', 'one-page'),
                'description' => __('Write heading for the pricing box #2', 'one-page'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => 'Multiple Plan'
            ),
            'onepage_pricing_box2_price' => array(
                'id' => 'onepage_options[onepage_pricing_box2_price]',
                'label' => __('Pricing Box #2 Price', 'one-page'),
                'description' => __('Write price description for the pricing box #2', 'one-page'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => '$99'
            ),
            'onepage_pricing_box2_feature1' => array(
                'id' => 'onepage_options[onepage_pricing_box2_feature1]',
                'label' => __('Pricing Box #2 Feature1', 'one-page'),
                'description' => __('Write feature #1 for the pricing box #2', 'one-page'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => 'Unlimited Access'
            ),
            'onepage_pricing_box2_feature2' => array(
                'id' => 'onepage_options[onepage_pricing_box2_feature2]',
                'label' => __('Pricing Box #2 Feature2', 'one-page'),
                'description' => __('Write feature #2 for the pricing box #2', 'one-page'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => '20 GB Storage'
            ),
            'onepage_pricing_box2_feature3' => array(
                'id' => 'onepage_options[onepage_pricing_box2_feature3]',
                'label' => __('Pricing Box #2 Feature2', 'one-page'),
                'description' => __('Write feature #3 for the pricing box #2', 'one-page'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => '200 Cups of Coffee Free'
            ),
            'onepage_pricing_box2_feature4' => array(
                'id' => 'onepage_options[onepage_pricing_box2_feature4]',
                'label' => __('Pricing Box #2 Feature4', 'one-page'),
                'description' => __('Write feature #4 for the pricing box #2', 'one-page'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => '6 Months Support'
            ),
            'onepage_pricing_box2_feature5' => array(
                'id' => 'onepage_options[onepage_pricing_box2_feature5]',
                'label' => __('Pricing Box #2 feature5', 'one-page'),
                'description' => __('Write feature #5 for the pricing box #2', 'one-page'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => 'Full Theme Access'
            ),
            'onepage_pricing_box2_button_text' => array(
                'id' => 'onepage_options[onepage_pricing_box2_button_text]',
                'label' => __('Pricing Box#2 Button Text', 'one-page'),
                'description' => __('Write Pricing box #2 button text', 'one-page'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => __('View Theme', 'one-page')
            ),
            'onepage_pricing_box2_button_link' => array(
                'id' => 'onepage_options[onepage_pricing_box2_button_link]',
                'label' => __('Pricing Box #2 Button Link', 'one-page'),
                'description' => __('Write Pricing box #2 button link', 'one-page'),
                'type' => 'option',
                'setting_type' => 'link',
                'default' => '#'
            ),
            'onepage_pricing_box3_icon' => array(
                'id' => 'onepage_options[onepage_pricing_box3_icon]',
                'label' => __('Pricing Box#3 Icon Code', 'one-page'),
                'description' => sprintf(__('To display icons, Use bootstrap or font awesome icon code.
You can refer the codes from links below. %s', 'one-page') . '<br>' . esc_attr('Write icon class only. e.g, for bootstrap glyphicon&nbsp;write&nbsp;"glyphicon-eye-open" & for font awesome&nbsp;write&nbsp;"fa fa-book"'), '<a href="https://fortawesome.github.io/Font-Awesome/icons/">https://fortawesome.github.io/Font-Awesome/icons/</a>,<br/><a href="http://getbootstrap.com/components/">http://getbootstrap.com/components/</a>'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => 'glyphicon-shopping-cart'
            ),
            'onepage_pricing_box3_heading' => array(
                'id' => 'onepage_options[onepage_pricing_box3_heading]',
                'label' => __('Pricing Box #3 Heading', 'one-page'),
                'description' => __('Write heading for the pricing box#3', 'one-page'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => 'Full Member'
            ),
            'onepage_pricing_box3_price' => array(
                'id' => 'onepage_options[onepage_pricing_box3_price]',
                'label' => __('Pricing Box #3 Price', 'one-page'),
                'description' => __('Write price description for the pricing box#3', 'one-page'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => '$250'
            ),
            'onepage_pricing_box3_feature1' => array(
                'id' => 'onepage_options[onepage_pricing_box3_feature1]',
                'label' => __('Pricing Box #3 Feature1', 'one-page'),
                'description' => __('Write feature #1 for the pricing box #3', 'one-page'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => 'Unlimited Access'
            ),
            'onepage_pricing_box3_feature2' => array(
                'id' => 'onepage_options[onepage_pricing_box3_feature2]',
                'label' => __('Pricing Box#3 Feature2', 'one-page'),
                'description' => __('Write feature #2 for the pricing box #3', 'one-page'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => '20 GB Storage'
            ),
            'onepage_pricing_box3_feature3' => array(
                'id' => 'onepage_options[onepage_pricing_box3_feature3]',
                'label' => __('Pricing Box#3 Feature3', 'one-page'),
                'description' => __('Write feature #3 for the pricing box #3', 'one-page'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => '200 Cups of Coffee Free'
            ),
            'onepage_pricing_box3_feature4' => array(
                'id' => 'onepage_options[onepage_pricing_box3_feature4]',
                'label' => __('Pricing Box #3 Feature4', 'one-page'),
                'description' => __('Write feature #4 for the pricing box #3', 'one-page'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => '6 Months Support'
            ),
            'onepage_pricing_box3_feature5' => array(
                'id' => 'onepage_options[onepage_pricing_box3_feature5]',
                'label' => __('Pricing Box #3 Feature5', 'one-page'),
                'description' => __('Write feature #5 for the pricing box #3', 'one-page'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => 'Full Theme Access'
            ),
            'onepage_pricing_box3_button_text' => array(
                'id' => 'onepage_options[onepage_pricing_box3_button_text]',
                'label' => __('Pricing Box #3 Button Text', 'one-page'),
                'description' => __('Write Pricing box #3 button text', 'one-page'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => __('View Theme', 'one-page')
            ),
            'onepage_pricing_box3_button_link' => array(
                'id' => 'onepage_options[onepage_pricing_box3_button_link]',
                'label' => __('Pricing Box #3 Button Link', 'one-page'),
                'description' => __('Write Pricing box #3 button link', 'one-page'),
                'type' => 'option',
                'setting_type' => 'link',
                'default' => '#'
            ),
            /**
             * Team panel setting
             */
            'onepage_team_bg_color' => array(
                'id' => 'onepage_options[onepage_team_bg_color]',
                'label' => __('Background Color', 'one-page'),
                'description' => __('Set background color for the section', 'one-page'),
                'type' => 'option',
                'setting_type' => 'color',
                'default' => '#ffffff'
            ),
            'onepage_team_section_heading_color' => array(
                'id' => 'onepage_options[onepage_team_section_heading_color]',
                'label' => __('Main Heading Color', 'one-page'),
                'description' => __('Main heading color', 'one-page'),
                'type' => 'option',
                'setting_type' => 'color',
                'default' => '#272727'
            ),
            'onepage_team_section_sub_heading_color' => array(
                'id' => 'onepage_options[onepage_team_section_sub_heading_color]',
                'label' => __('Sub-Heading Color', 'one-page'),
                'description' => __('Sub-heading color', 'one-page'),
                'type' => 'option',
                'setting_type' => 'color',
                'default' => '#6D6C6C'
            ),
            'onepage_team_social_icons_bg_color' => array(
                'id' => 'onepage_options[onepage_team_social_icons_bg_color]',
                'label' => __('Team Member Social Icon Background Color', 'one-page'),
                'description' => __('Set team member social icon background color', 'one-page'),
                'type' => 'option',
                'setting_type' => 'color',
                'default' => '#2bb6b6'
            ),
            'onepage_team_member_designation_text_color' => array(
                'id' => 'onepage_options[onepage_team_member_designation_text_color]',
                'label' => __('Team Member Designation Text Color', 'one-page'),
                'description' => __('Set team member designation text color', 'one-page'),
                'type' => 'option',
                'setting_type' => 'color',
                'default' => '#235e11'
            ),
            'onepage_team_main_heading' => array(
                'id' => 'onepage_options[onepage_team_main_heading]',
                'label' => __('Main Heading', 'one-page'),
                'description' => __('Write main heading for the team section', 'one-page'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => ''
            ),
            'onepage_team_sub_heading' => array(
                'id' => 'onepage_options[onepage_team_sub_heading]',
                'label' => __('Sub-Heading', 'one-page'),
                'description' => __('Write sub-heading for the team section', 'one-page'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => ''
            ),
            'onepage_member1_image_link' => array(
                'id' => 'onepage_options[onepage_member1_image_link]',
                'label' => __('Image', 'one-page'),
                'description' => __('Team member #1 image upload', 'one-page'),
                'type' => 'option',
                'setting_type' => 'image',
                'default' => ''
            ),
            'onepage_member1_caption_text' => array(
                'id' => 'onepage_options[onepage_member1_caption_text]',
                'label' => __('Team Member #1 Caption Text', 'one-page'),
                'description' => __('Write team member #1 caption text', 'one-page'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => ''
            ),
            'onepage_member1_name' => array(
                'id' => 'onepage_options[onepage_member1_name]',
                'label' => __('Team Member #1 Name', 'one-page'),
                'description' => __('Team member #1 name', 'one-page'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => ''
            ),
            'onepage_member1_designation' => array(
                'id' => 'onepage_options[onepage_member1_designation]',
                'label' => __('Team Member #1 Designation', 'one-page'),
                'description' => __('Team member #1 designation', 'one-page'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => ''
            ),
            'onepage_member1_fb_link' => array(
                'id' => 'onepage_options[onepage_member1_fb_link]',
                'label' => __('Team Member #1 Facebook Link', 'one-page'),
                'description' => __('Team member #1 facebook link', 'one-page'),
                'type' => 'option',
                'setting_type' => 'link',
                'default' => ''
            ),
            'onepage_member1_g_plus_link' => array(
                'id' => 'onepage_options[onepage_member1_g_plus_link]',
                'label' => __('Team Member #1 Google+ Link', 'one-page'),
                'description' => __('Team member #1 Google+ link', 'one-page'),
                'type' => 'option',
                'setting_type' => 'link',
                'default' => ''
            ),
            'onepage_member1_tw_link' => array(
                'id' => 'onepage_options[onepage_member1_tw_link]',
                'label' => __('Team Member #1 Twitter Link', 'one-page'),
                'description' => __('Team member #1 twitter link', 'one-page'),
                'type' => 'option',
                'setting_type' => 'link',
                'default' => ''
            ),
            'onepage_member1_ln_link' => array(
                'id' => 'onepage_options[onepage_member1_ln_link]',
                'label' => __('Team Member #1 LinkedIn Link', 'one-page'),
                'description' => __('Team member #1 linkedIn link', 'one-page'),
                'type' => 'option',
                'setting_type' => 'link',
                'default' => ''
            ),
            'onepage_member2_image_link' => array(
                'id' => 'onepage_options[onepage_member2_image_link]',
                'label' => __('Image', 'one-page'),
                'description' => __('Team Member #2 Image Upload', 'one-page'),
                'type' => 'option',
                'setting_type' => 'image',
                'default' => ''
            ),
            'onepage_member2_caption_text' => array(
                'id' => 'onepage_options[onepage_member2_caption_text]',
                'label' => __('Team Member #2 Caption Text', 'one-page'),
                'description' => __('Write team member #2 caption text', 'one-page'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => ''
            ),
            'onepage_member2_name' => array(
                'id' => 'onepage_options[onepage_member2_name]',
                'label' => __('Team Member #2 Name', 'one-page'),
                'description' => __('Team member #2 name', 'one-page'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => ''
            ),
            'onepage_member2_designation' => array(
                'id' => 'onepage_options[onepage_member2_designation]',
                'label' => __('Team Member #2 Designation', 'one-page'),
                'description' => __('Team member #2 designation', 'one-page'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => ''
            ),
            'onepage_member2_fb_link' => array(
                'id' => 'onepage_options[onepage_member2_fb_link]',
                'label' => __('Team Member #2 Facebook Link', 'one-page'),
                'description' => __('Team member #2 facebook link', 'one-page'),
                'type' => 'option',
                'setting_type' => 'link',
                'default' => ''
            ),
            'onepage_member2_g_plus_link' => array(
                'id' => 'onepage_options[onepage_member2_g_plus_link]',
                'label' => __('Team Member #2 Google+ Link', 'one-page'),
                'description' => __('Team member #2 Google+ link', 'one-page'),
                'type' => 'option',
                'setting_type' => 'link',
                'default' => ''
            ),
            'onepage_member2_tw_link' => array(
                'id' => 'onepage_options[onepage_member2_tw_link]',
                'label' => __('Team Member #2 Twitter Link', 'one-page'),
                'description' => __('Team member #2 twitter link', 'one-page'),
                'type' => 'option',
                'setting_type' => 'link',
                'default' => ''
            ),
            'onepage_member2_ln_link' => array(
                'id' => 'onepage_options[onepage_member2_ln_link]',
                'label' => __('Team Member #2 LinkedIn Link', 'one-page'),
                'description' => __('Team member #2 linkedIn link', 'one-page'),
                'type' => 'option',
                'setting_type' => 'link',
                'default' => ''
            ),
            'onepage_member3_image_link' => array(
                'id' => 'onepage_options[onepage_member3_image_link]',
                'label' => __('Image', 'one-page'),
                'description' => __('Team member #3 image upload', 'one-page'),
                'type' => 'option',
                'setting_type' => 'image',
                'default' => ''
            ),
            'onepage_member3_caption_text' => array(
                'id' => 'onepage_options[onepage_member3_caption_text]',
                'label' => __('Team Member #3 Caption Text', 'one-page'),
                'description' => __('Write team member #3 caption text', 'one-page'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => ''
            ),
            'onepage_member3_name' => array(
                'id' => 'onepage_options[onepage_member3_name]',
                'label' => __('Team Member #3 Name', 'one-page'),
                'description' => __('Team member #3 name', 'one-page'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => ''
            ),
            'onepage_member3_designation' => array(
                'id' => 'onepage_options[onepage_member3_designation]',
                'label' => __('Team Member #3 Designation', 'one-page'),
                'description' => __('Team member#3 designation', 'one-page'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => ''
            ),
            'onepage_member3_fb_link' => array(
                'id' => 'onepage_options[onepage_member3_fb_link]',
                'label' => __('Team Member #3 Facebook Link', 'one-page'),
                'description' => __('Team member #3 facebook link', 'one-page'),
                'type' => 'option',
                'setting_type' => 'link',
                'default' => ''
            ),
            'onepage_member3_g_plus_link' => array(
                'id' => 'onepage_options[onepage_member3_g_plus_link]',
                'label' => __('Team Member#3 Google+ Link', 'one-page'),
                'description' => __('Team member #3 Google+ link', 'one-page'),
                'type' => 'option',
                'setting_type' => 'link',
                'default' => ''
            ),
            'onepage_member3_tw_link' => array(
                'id' => 'onepage_options[onepage_member3_tw_link]',
                'label' => __('Team Member #3 Twitter Link', 'one-page'),
                'description' => __('Team member #3 twitter link', 'one-page'),
                'type' => 'option',
                'setting_type' => 'link',
                'default' => ''
            ),
            'onepage_member3_ln_link' => array(
                'id' => 'onepage_options[onepage_member3_ln_link]',
                'label' => __('Team Member #3 LinkedIn Link', 'one-page'),
                'description' => __('Team member #3 linkedIn link', 'one-page'),
                'type' => 'option',
                'setting_type' => 'link',
                'default' => ''
            ),
            'onepage_member4_image_link' => array(
                'id' => 'onepage_options[onepage_member4_image_link]',
                'label' => __('Image', 'one-page'),
                'description' => __('Team Member #4 Image Upload', 'one-page'),
                'type' => 'option',
                'setting_type' => 'image',
                'default' => ''
            ),
            'onepage_member4_caption_text' => array(
                'id' => 'onepage_options[onepage_member4_caption_text]',
                'label' => __('Team Member #4 Caption Text', 'one-page'),
                'description' => __('Write team member #4 caption text', 'one-page'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => ''
            ),
            'onepage_member4_name' => array(
                'id' => 'onepage_options[onepage_member4_name]',
                'label' => __('Team Member #4 Name', 'one-page'),
                'description' => __('Team member #4 name', 'one-page'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => ''
            ),
            'onepage_member4_designation' => array(
                'id' => 'onepage_options[onepage_member4_designation]',
                'label' => __('Team Member #4 Designation', 'one-page'),
                'description' => __('Team member #4 designation', 'one-page'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => ''
            ),
            'onepage_member4_fb_link' => array(
                'id' => 'onepage_options[onepage_member4_fb_link]',
                'label' => __('Team Member #4 Facebook Link', 'one-page'),
                'description' => __('Team member #4 facebook link', 'one-page'),
                'type' => 'option',
                'setting_type' => 'link',
                'default' => ''
            ),
            'onepage_member4_g_plus_link' => array(
                'id' => 'onepage_options[onepage_member4_g_plus_link]',
                'label' => __('Team Member #4 Google+ Link', 'one-page'),
                'description' => __('Team member #4 Google+ link', 'one-page'),
                'type' => 'option',
                'setting_type' => 'link',
                'default' => ''
            ),
            'onepage_member4_tw_link' => array(
                'id' => 'onepage_options[onepage_member4_tw_link]',
                'label' => __('Team Member #4 Twitter Link', 'one-page'),
                'description' => __('Team member #4 twitter link', 'one-page'),
                'type' => 'option',
                'setting_type' => 'link',
                'default' => ''
            ),
            'onepage_member4_ln_link' => array(
                'id' => 'onepage_options[onepage_member4_ln_link]',
                'label' => __('Team Member #4 LinkedIn Link', 'one-page'),
                'description' => __('Team member #4 linkedIn link', 'one-page'),
                'type' => 'option',
                'setting_type' => 'link',
                'default' => ''
            ),
            /**
             * Contact panel settings
             */
            'onepage_contact_bg_color' => array(
                'id' => 'onepage_options[onepage_contact_bg_color]',
                'label' => __('Background Color', 'one-page'),
                'description' => __('Set background color for the section', 'one-page'),
                'type' => 'option',
                'setting_type' => 'color',
                'default' => '9792d4'
            ),
            'onepage_contact_section_heading_color' => array(
                'id' => 'onepage_options[onepage_contact_section_heading_color]',
                'label' => __('Main Heading Color', 'one-page'),
                'description' => __('Main heading color', 'one-page'),
                'type' => 'option',
                'setting_type' => 'color',
                'default' => '#ffffff'
            ),
            'onepage_contact_section_sub_heading_color' => array(
                'id' => 'onepage_options[onepage_contact_section_sub_heading_color]',
                'label' => __('Sub-Heading Color', 'one-page'),
                'description' => __('Sub-heading color', 'one-page'),
                'type' => 'option',
                'setting_type' => 'color',
                'default' => '#ffffff'
            ),
            'onepage_contact_input_box_border_color' => array(
                'id' => 'onepage_options[onepage_contact_input_box_border_color]',
                'label' => __('Input Box Border Color', 'one-page'),
                'description' => __('Set Input box border color', 'one-page'),
                'type' => 'option',
                'setting_type' => 'color',
                'default' => '#6b8cca'
            ),
            'onepage_contact_send_button_color' => array(
                'id' => 'onepage_options[onepage_contact_send_button_color]',
                'label' => __('Contact Send Button Color', 'one-page'),
                'description' => __('Set contact send button color', 'one-page'),
                'type' => 'option',
                'setting_type' => 'color',
                'default' => '#f5783e'
            ),
            'onepage_contact_send_button_hover_color' => array(
                'id' => 'onepage_options[onepage_contact_send_button_hover_color]',
                'label' => __('Contact Send Button Hover Color', 'one-page'),
                'description' => __('Set contact send button hover color', 'one-page'),
                'type' => 'option',
                'setting_type' => 'color',
                'default' => '#000'
            ),
            'onepage_contact_main_heading' => array(
                'id' => 'onepage_options[onepage_contact_main_heading]',
                'label' => __('Main Heading', 'one-page'),
                'description' => __('Write main heading for the contact section', 'one-page'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => ''
            ),
            'onepage_contact_sub_heading' => array(
                'id' => 'onepage_options[onepage_contact_sub_heading]',
                'label' => __('Sub-Heading', 'one-page'),
                'description' => __('Write sub-heading for the contact section', 'one-page'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => ''
            ),
            'onepage_member1_image_link' => array(
                'id' => 'onepage_options[onepage_member1_image_link]',
                'label' => __('Image', 'one-page'),
                'description' => __('Team Member #1 Image Upload', 'one-page'),
                'type' => 'option',
                'setting_type' => 'image',
                'default' => ''
            ),
            'onepage_contact_send_button_text' => array(
                'id' => 'onepage_options[onepage_contact_send_button_text]',
                'label' => __('Send Button Text', 'one-page'),
                'description' => __('Write send button text for the contact section', 'one-page'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => ''
            ),
            'onepage_contact_map_iframe' => array(
                'id' => 'onepage_options[onepage_contact_map_iframe]',
                'label' => __('Map', 'one-page'),
                'description' => __('Paste iframe code of map for the contact section', 'one-page'),
                'type' => 'option',
                'setting_type' => 'editor',
                'default' => ''
            ),
            'onepage_fb_link' => array(
                'id' => 'onepage_options[onepage_fb_link]',
                'label' => __('Facebook Link', 'one-page'),
                'description' => __('Enter facebook link', 'one-page'),
                'type' => 'option',
                'setting_type' => 'link',
                'default' => ''
            ),
            'onepage_tw_link' => array(
                'id' => 'onepage_options[onepage_tw_link]',
                'label' => __('Twitter Link', 'one-page'),
                'description' => __('Enter twitter link', 'one-page'),
                'type' => 'option',
                'setting_type' => 'link',
                'default' => ''
            ),
            'onepage_g_plus_link' => array(
                'id' => 'onepage_options[onepage_g_plus_link]',
                'label' => __('Google+ Link', 'one-page'),
                'description' => __('Enter google+ link', 'one-page'),
                'type' => 'option',
                'setting_type' => 'link',
                'default' => ''
            ),
            'onepage_rss_link' => array(
                'id' => 'onepage_options[onepage_rss_link]',
                'label' => __('RSS Link', 'one-page'),
                'description' => __('Enter rss link', 'one-page'),
                'type' => 'option',
                'setting_type' => 'link',
                'default' => ''
            ),
            'onepage_pinterest_link' => array(
                'id' => 'onepage_options[onepage_pinterest_link]',
                'label' => __('Pinterest Link', 'one-page'),
                'description' => __('Enter pinterest link', 'one-page'),
                'type' => 'option',
                'setting_type' => 'link',
                'default' => ''
            ),
            'onepage_ln_link' => array(
                'id' => 'onepage_options[onepage_ln_link]',
                'label' => __('LinkedIn Link', 'one-page'),
                'description' => __('Enter linkedIn link', 'one-page'),
                'type' => 'option',
                'setting_type' => 'link',
                'default' => ''
            ),
            /**
             * Page animation settings
             */
            'onepage_animation_status' => array(
                'id' => 'onepage_options[onepage_animation_status]',
                'label' => __('Theme Animation On/Off Settings', 'one-page'),
                'description' => __('On/Off animation of the theme', 'one-page'),
                'type' => 'option',
                'setting_type' => 'radio',
                'default' => 'on',
                'choices' => array(
                    'on' => 'On (Default)',
                    'off' => 'Off'
                )
            ),
            'pages_color_scheme' => array(
                'id' => 'onepage_options[pages_color_scheme]',
                'label' => __('Pages Color', 'one-page'),
                'description' => __('This option allows you to set color scheme for all internal pages.', 'one-page'),
                'type' => 'option',
                'setting_type' => 'color',
                'default' => '#087f99'
            ),
            'pages_heading_color_scheme' => array(
                'id' => 'onepage_options[pages_heading_color_scheme]',
                'label' => __('Headings Color', 'one-page'),
                'description' => __('This option allows you to set color scheme for all headings on internal pages.', 'one-page'),
                'type' => 'option',
                'setting_type' => 'color',
                'default' => '#272727'
            ),
            'pages_text_color_scheme' => array(
                'id' => 'onepage_options[pages_text_color_scheme]',
                'label' => __('Text Color', 'one-page'),
                'description' => __('This option allows you to set color scheme for all text on internal pages.', 'one-page'),
                'type' => 'option',
                'setting_type' => 'color',
                'default' => '#524E4E'
            ),
            'pages_anchor_hover_color' => array(
                'id' => 'onepage_options[pages_anchor_hover_color]',
                'label' => __('Link Hover Color', 'one-page'),
                'description' => __('This option allows you to set link hover color scheme on internal page.', 'one-page'),
                'type' => 'option',
                'setting_type' => 'color',
                'default' => '#18bc9c'
            ),
            'pages_button_bg_color' => array(
                'id' => 'onepage_options[pages_button_bg_color]',
                'label' => __('Button Background Color', 'one-page'),
                'description' => __('This option allows you to set all buttons background color.', 'one-page'),
                'type' => 'option',
                'setting_type' => 'color',
                'default' => '#22b0cf'
            ),
            'pages_button_hover_bg_color' => array(
                'id' => 'onepage_options[pages_button_hover_bg_color]',
                'label' => __('Button Hover Background Color', 'one-page'),
                'description' => __('This option allows you to set button hover background color.', 'one-page'),
                'type' => 'option',
                'setting_type' => 'color',
                'default' => '#1D93AD'
            )
        );
        return $onepage_settings;
    }

    public static function Onepage_Controls($wp_customize) {
        $sections = self::Onepage_Section_Content();
        $settings = self::Onepage_Settings();
        foreach ($sections as $section_id => $section_content) {
            foreach ($section_content as $section_content_id) {
                switch ($settings[$section_content_id]['setting_type']) {
                    case 'image':
                        self::add_setting($wp_customize, $settings[$section_content_id]['id'], $settings[$section_content_id]['default'], $settings[$section_content_id]['type'], 'onepage_sanitize_url');
                        $wp_customize->add_control(new WP_Customize_Image_Control(
                            $wp_customize, $settings[$section_content_id]['id'], array(
                                'label' => $settings[$section_content_id]['label'],
                                'description' => $settings[$section_content_id]['description'],
                                'section' => $section_id,
                                'settings' => $settings[$section_content_id]['id']
                            )
                        ));
                        break;
                    case 'text':
                        self::add_setting($wp_customize, $settings[$section_content_id]['id'], $settings[$section_content_id]['default'], $settings[$section_content_id]['type'], 'onepage_sanitize_text');
                        $wp_customize->add_control(new WP_Customize_Control(
                            $wp_customize, $settings[$section_content_id]['id'], array(
                                'label' => $settings[$section_content_id]['label'],
                                'description' => $settings[$section_content_id]['description'],
                                'section' => $section_id,
                                'settings' => $settings[$section_content_id]['id'],
                                'type' => 'text'
                            )
                        ));
                        break;
                    case 'textarea':
                        self::add_setting($wp_customize, $settings[$section_content_id]['id'], $settings[$section_content_id]['default'], $settings[$section_content_id]['type'], 'onepage_sanitize_textarea');

                        $wp_customize->add_control(new WP_Customize_Control(
                            $wp_customize, $settings[$section_content_id]['id'], array(
                                'label' => $settings[$section_content_id]['label'],
                                'description' => $settings[$section_content_id]['description'],
                                'section' => $section_id,
                                'settings' => $settings[$section_content_id]['id'],
                                'type' => 'textarea'
                            )
                        ));
                        break;

                    case 'editor':
                        self::add_setting($wp_customize, $settings[$section_content_id]['id'], $settings[$section_content_id]['default'], $settings[$section_content_id]['type'], 'onepage_sanitize_editor');

                        $wp_customize->add_control(new WP_Customize_Control(
                            $wp_customize, $settings[$section_content_id]['id'], array(
                                'label' => $settings[$section_content_id]['label'],
                                'description' => $settings[$section_content_id]['description'],
                                'section' => $section_id,
                                'settings' => $settings[$section_content_id]['id'],
                                'type' => 'textarea'
                            )
                        ));
                        break;

                    case 'link':

                        self::add_setting($wp_customize, $settings[$section_content_id]['id'], $settings[$section_content_id]['default'], $settings[$section_content_id]['type'], 'onepage_sanitize_url');

                        $wp_customize->add_control(new WP_Customize_Control(
                            $wp_customize, $settings[$section_content_id]['id'], array(
                                'label' => $settings[$section_content_id]['label'],
                                'description' => $settings[$section_content_id]['description'],
                                'section' => $section_id,
                                'settings' => $settings[$section_content_id]['id'],
                                'type' => 'text'
                            )
                        ));

                        break;
                    case 'color':

                        self::add_setting($wp_customize, $settings[$section_content_id]['id'], $settings[$section_content_id]['default'], $settings[$section_content_id]['type'], 'onepage_sanitize_color');

                        $wp_customize->add_control(new WP_Customize_Color_Control(
                            $wp_customize, $settings[$section_content_id]['id'], array(
                                'label' => $settings[$section_content_id]['label'],
                                'description' => $settings[$section_content_id]['description'],
                                'section' => $section_id,
                                'settings' => $settings[$section_content_id]['id']
                            )
                        ));
                        break;
                    case 'alpha_color':

                        self::add_setting($wp_customize, $settings[$section_content_id]['id'], $settings[$section_content_id]['default'], $settings[$section_content_id]['type'], 'onepage_sanitize_rgba');

                        $wp_customize->add_control(new Inkthemes_Customize_Alpha_Color_Control(
                            $wp_customize, $settings[$section_content_id]['id'], array(
                                'label' => $settings[$section_content_id]['label'],
                                'description' => $settings[$section_content_id]['description'],
                                'section' => $section_id,
                                'settings' => $settings[$section_content_id]['id'],
                                'show_opacity' => true, // Optional.
                                'palette' => array(
                                    'rgb(150, 50, 220)',
                                    'rgba(50,50,50,0.8)',
                                    'rgba( 255, 255, 255, 0.2 )',
                                    '#00CC99' // Mix of color types = no problem
                                )
                            )
                        ));
                        break;

                    case 'number':

                        self::add_setting($wp_customize, $settings[$section_content_id]['id'], $settings[$section_content_id]['default'], $settings[$section_content_id]['type'], 'onepage_sanitize_number');

                        $wp_customize->add_control(new WP_Customize_Control(
                            $wp_customize, $settings[$section_content_id]['id'], array(
                                'label' => $settings[$section_content_id]['label'],
                                'description' => $settings[$section_content_id]['description'],
                                'section' => $section_id,
                                'settings' => $settings[$section_content_id]['id'],
                                'type' => 'text'
                            )
                        ));
                        break;

                    case 'select':

                        self::add_setting($wp_customize, $settings[$section_content_id]['id'], $settings[$section_content_id]['default'], $settings[$section_content_id]['type'], 'onepage_sanitize_select');

                        $wp_customize->add_control(new WP_Customize_Control(
                            $wp_customize, $settings[$section_content_id]['id'], array(
                                'label' => $settings[$section_content_id]['label'],
                                'description' => $settings[$section_content_id]['description'],
                                'section' => $section_id,
                                'settings' => $settings[$section_content_id]['id'],
                                'type' => 'select',
                                'choices' => $settings[$section_content_id]['choices']
                            )
                        ));
                        break;

                    case 'radio':

                        self::add_setting($wp_customize, $settings[$section_content_id]['id'], $settings[$section_content_id]['default'], $settings[$section_content_id]['type'], 'onepage_sanitize_radio');

                        $wp_customize->add_control(new WP_Customize_Control(
                            $wp_customize, $settings[$section_content_id]['id'], array(
                                'label' => $settings[$section_content_id]['label'],
                                'description' => $settings[$section_content_id]['description'],
                                'section' => $section_id,
                                'settings' => $settings[$section_content_id]['id'],
                                'type' => 'radio',
                                'choices' => $settings[$section_content_id]['choices']
                            )
                        ));
                        break;

                    case 'sort':
                        self::add_setting($wp_customize, $settings[$section_content_id]['id'], $settings[$section_content_id]['default'], $settings[$section_content_id]['type'], 'onepage_sanitize_sections');
                        $wp_customize->add_control(new Inkthemes_Customize_Control_Sortable_Checkboxes(
                            $wp_customize, $settings[$section_content_id]['id'], array(
                                'label' => $settings[$section_content_id]['label'],
                                'description' => $settings[$section_content_id]['description'],
                                'section' => $section_id,
                                'settings' => $settings[$section_content_id]['id'],
                                'type' => 'text',
                                'choices' => $settings[$section_content_id]['choices']
                            )
                        ));
                        break;

                    case 'ad':
                        self::add_setting($wp_customize, $settings[$section_content_id]['id'], $settings[$section_content_id]['default'], $settings[$section_content_id]['type'], 'onepage_sanitize_url');
                        $wp_customize->add_control(new Inkthemes_Customize_AD(
                            $wp_customize, $settings[$section_content_id]['id'], array(
                                'label' => $settings[$section_content_id]['label'],
                                'description' => $settings[$section_content_id]['description'],
                                'section' => $section_id,
                                'settings' => $settings[$section_content_id]['id'],
                                'type' => 'text',
                                'image_url' => isset($settings[$section_content_id]['image_url']) ? $settings[$section_content_id]['image_url'] : '',
                                'link_url' => isset($settings[$section_content_id]['link_url']) ? $settings[$section_content_id]['link_url'] : '',
                            )
                        ));
                        break;

                    default:
                        break;
                }
            }
        }
    }

    public static function add_setting($wp_customize, $setting_id, $default, $type, $sanitize_callback) {
        $wp_customize->add_setting($setting_id, array(
                'default' => $default,
                'capability' => 'edit_theme_options',
                'sanitize_callback' => array('Onepage_Customizer', $sanitize_callback),
                'type' => $type
            )
        );
    }

    /**
     * adds sanitization callback funtion : textarea
     * @package Onepage
     */
    public static function onepage_sanitize_textarea($value) {
        $value = wp_kses_post($value);
        return $value;
    }

    /**
     * adds sanitization callback funtion : url
     * @package Onepage
     */
    public static function onepage_sanitize_url($value) {
        $value = esc_url($value);
        return $value;
    }

    /**
     * adds sanitization callback funtion : text
     * @package Onepage
     */
    public static function onepage_sanitize_text($value) {
        $value = sanitize_text_field($value);
        return $value;
    }

    /**
     * adds sanitization callback funtion : editor
     * function to sanitize the html strings
     * Allowed only the WordPress allowed html tags and iframe html tag
     * @param string $value
     * @return string
     */
    public static function onepage_sanitize_editor($value) {
        $array = wp_kses_allowed_html('post');
        $allowedtags = array(
            'iframe' => array(
                'width' => array(),
                'height' => array(),
                'frameborder' => array(),
                'scrolling' => array(),
                'src' => array(),
                'marginwidth' => array(),
                'marginheight' => array()
            )
        );
        $data = array_merge($allowedtags, $array);
        $value = wp_kses($value, $data);
        return $value;
    }

    /**
     * adds sanitization callback funtion : email
     * @package Onepage
     */
    public static function onepage_sanitize_email($value) {
        $value = sanitize_email($value);
        return $value;
    }

    /**
     * adds sanitization callback funtion : number
     * @package Onepage
     */
    public static function onepage_sanitize_number($value) {
        $value = preg_replace("/[^0-9+ ]/", "", $value);
        return $value;
    }

    /**
     * adds sanitization callback funtion : number
     * @package onepage
     */
    public static function onepage_sanitize_color($value) {
        $value = sanitize_hex_color($value);
        return $value;
    }

    /**
     * adds sanitization callback funtion : select
     * @package onepage
     */
    public static function onepage_sanitize_select($value, $setting) {
        global $wp_customize;
        $control = $wp_customize->get_control($setting->id);
        if (array_key_exists($value, $control->choices)) {
            return $value;
        } else {
            return $setting->default;
        }
    }

    /**
     * adds sanitization callback funtion : radio
     * @package onepage
     */
    public static function onepage_sanitize_radio($value, $setting) {
        global $wp_customize;
        $control = $wp_customize->get_control($setting->id);
        if (array_key_exists($value, $control->choices)) {
            return $value;
        } else {
            return $setting->default;
        }
    }

    /**
     * Sanitize Sharing Services
     */
    public static function onepage_sanitize_sections($input) {

        /* Var */
        $output = array();

        /* Get valid services */
        $valid_sections = onepage_sections();

        /* Make array */
        $sections = explode(',', $input);

        /* Bail. */
        if (!$sections) {
            return null;
        }

        /* Loop and verify */
        foreach ($sections as $section) {

            /* Separate section and status */
            $section = explode(':', $section);

            if (isset($section[0]) && isset($section[1])) {
                if (array_key_exists($section[0], $valid_sections)) {
                    $status = $section[1] ? '1' : '0';
                    $output[] = trim($section[0] . ':' . $status);
                }
            }
        }

        return trim(esc_attr(implode(',', $output)));
    }

    /**
     * Sanitize RGBA colors
     *
     * @return string
     */
    public static function onepage_sanitize_rgba($value) {
        // If empty or an array return transparent
        if (empty($value) || is_array($value)) {
            return 'rgba(0,0,0,0)';
        }
        // If string does not start with 'rgba', then treat as hex
        // sanitize the hex color and finally convert hex to rgba
        if (false === strpos($value, 'rgba')) {
            return self::onepage_sanitize_color($value);
        }
        // By now we know the string is formatted as an rgba color so we need to further sanitize it.
        $value = str_replace(' ', '', $value);
        sscanf($value, 'rgba(%d,%d,%d,%f)', $red, $green, $blue, $alpha);
        return 'rgba(' . $red . ',' . $green . ',' . $blue . ',' . $alpha . ')';
    }

}

// Setup the Theme Customizer settings and controls...
add_action('customize_register', array('Onepage_Customizer', 'Onepage_Register'));

function inkthemes_registers() {

    /* CSS */
    wp_enqueue_style('one-page-sort-control', get_template_directory_uri() . '/assets/css/onepage_sort_control.css');

    /* JS */
    wp_enqueue_script('one-page-sort-control', get_template_directory_uri() . '/assets/js/onepage_sort_control.js', array('jquery', 'jquery-ui-sortable'), '', true);

    wp_register_script('one-page-customizer', get_template_directory_uri() . '/assets/js/onepage_customizer.js', array("jquery", "jquery-ui-core"), '', true);
    wp_enqueue_script('one-page-customizer');
    wp_localize_script('one-page-customizer', 'ink_advert', array(
            'pro_text' => __('View PRO version', 'one-page'),
            'pro_url' => esc_url('https://www.inkthemes.com/wp-themes/free-one-page-wordpress-theme/'),
            'support_text' => __('Need Help!', 'one-page'),
            'support_url' => esc_url('http://www.inkthemes.com/lets-connect/'),
            'documentation_text' => __('Documentation', 'one-page'),
            'documentation_url' => esc_url('https://www.inkthemes.com/one-page-wordpress-theme-tutorial/')
        )
    );
}

add_action('customize_controls_enqueue_scripts', 'inkthemes_registers');