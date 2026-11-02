<?php
/**
 * Elementor Widget: Trending Games & APK Cards Grid
 *
 * @package BGMI_APK_Pro
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Repeater;

class BGMI_Widget_Games_Grid extends Widget_Base {

    public function get_name() {
        return 'bgmi_games_grid';
    }

    public function get_title() {
        return esc_html__( 'Trending Games / APK Cards Grid', 'bgmi-apk-pro' );
    }

    public function get_icon() {
        return 'eicon-posts-grid';
    }

    public function get_categories() {
        return array( 'bgmi-apk-elements' );
    }

    public function get_keywords() {
        return array( 'grid', 'cards', 'games', 'apk', 'posts', 'downloads' );
    }

    protected function register_controls() {

        $this->start_controls_section(
            'section_layout',
            array(
                'label' => esc_html__( 'Grid Layout', 'bgmi-apk-pro' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            )
        );

        $this->add_control(
            'source_mode',
            array(
                'label'   => esc_html__( 'Cards Source', 'bgmi-apk-pro' ),
                'type'    => Controls_Manager::SELECT,
                'default' => 'posts',
                'options' => array(
                    'posts'  => esc_html__( 'WordPress Posts (Dynamic)', 'bgmi-apk-pro' ),
                    'custom' => esc_html__( 'Custom Curated Items (Manual)', 'bgmi-apk-pro' ),
                ),
            )
        );

        $this->add_control(
            'columns',
            array(
                'label'   => esc_html__( 'Columns', 'bgmi-apk-pro' ),
                'type'    => Controls_Manager::SELECT,
                'default' => '2',
                'options' => array(
                    '1' => '1 Column',
                    '2' => '2 Columns (Recommended)',
                    '3' => '3 Columns',
                ),
            )
        );

        $this->add_control(
            'posts_per_page',
            array(
                'label'     => esc_html__( 'Number of Posts', 'bgmi-apk-pro' ),
                'type'      => Controls_Manager::NUMBER,
                'default'   => 4,
                'min'       => 1,
                'max'       => 24,
                'condition' => array(
                    'source_mode' => 'posts',
                ),
            )
        );

        $this->end_controls_section();

        // Custom Items Repeater Section
        $this->start_controls_section(
            'section_custom_cards',
            array(
                'label'     => esc_html__( 'Custom Cards List', 'bgmi-apk-pro' ),
                'tab'       => Controls_Manager::TAB_CONTENT,
                'condition' => array(
                    'source_mode' => 'custom',
                ),
            )
        );

        $repeater = new Repeater();

        $repeater->add_control(
            'card_title',
            array(
                'label'   => esc_html__( 'Card Title', 'bgmi-apk-pro' ),
                'type'    => Controls_Manager::TEXT,
                'default' => esc_html__( 'Get BGMI 3.5 Apk + Obb Direct Download Link', 'bgmi-apk-pro' ),
            )
        );

        $repeater->add_control(
            'card_badge',
            array(
                'label'   => esc_html__( 'Badge Text', 'bgmi-apk-pro' ),
                'type'    => Controls_Manager::TEXT,
                'default' => esc_html__( 'Latest Update', 'bgmi-apk-pro' ),
            )
        );

        $repeater->add_control(
            'card_version',
            array(
                'label'   => esc_html__( 'Version Tag', 'bgmi-apk-pro' ),
                'type'    => Controls_Manager::TEXT,
                'default' => 'v3.5.0',
            )
        );

        $repeater->add_control(
            'card_image',
            array(
                'label'   => esc_html__( 'Banner Image', 'bgmi-apk-pro' ),
                'type'    => Controls_Manager::MEDIA,
                'default' => array(
                    'url' => get_template_directory_uri() . '/assets/images/bgmi-banner.jpg',
                ),
            )
        );

        $repeater->add_control(
            'card_size',
            array(
                'label'   => esc_html__( 'File Size', 'bgmi-apk-pro' ),
                'type'    => Controls_Manager::TEXT,
                'default' => '74 MB APK + 650 MB OBB',
            )
        );

        $repeater->add_control(
            'card_rating',
            array(
                'label'   => esc_html__( 'Rating', 'bgmi-apk-pro' ),
                'type'    => Controls_Manager::TEXT,
                'default' => '4.9/5',
            )
        );

        $repeater->add_control(
            'card_excerpt',
            array(
                'label'   => esc_html__( 'Excerpt / Summary', 'bgmi-apk-pro' ),
                'type'    => Controls_Manager::TEXTAREA,
                'default' => esc_html__( 'Stay up-to-date with the latest official Battlegrounds Mobile India v3.5 winter update! Download direct high-speed APK and OBB data files.', 'bgmi-apk-pro' ),
            )
        );

        $repeater->add_control(
            'card_url',
            array(
                'label'   => esc_html__( 'Post / Download URL', 'bgmi-apk-pro' ),
                'type'    => Controls_Manager::URL,
                'default' => array(
                    'url' => '#',
                ),
            )
        );

        $this->add_control(
            'custom_cards',
            array(
                'label'       => esc_html__( 'Cards', 'bgmi-apk-pro' ),
                'type'        => Controls_Manager::REPEATER,
                'fields'      => $repeater->get_fields(),
                'default'     => array(
                    array(
                        'card_title'   => esc_html__( 'Get BGMI 3.5 Apk + Obb Direct Download Link (Official)', 'bgmi-apk-pro' ),
                        'card_badge'   => esc_html__( 'Latest Update', 'bgmi-apk-pro' ),
                        'card_version' => 'v3.5.0',
                        'card_size'    => '74 MB APK + 650 MB OBB',
                        'card_rating'  => '4.9/5',
                        'card_excerpt' => esc_html__( 'Stay up-to-date with the latest official Battlegrounds Mobile India v3.5 winter update! Download direct high-speed APK and OBB data files.', 'bgmi-apk-pro' ),
                    ),
                    array(
                        'card_title'   => esc_html__( 'Download Free Fire India : Play Store, Launch & Rules', 'bgmi-apk-pro' ),
                        'card_badge'   => esc_html__( 'New Launch', 'bgmi-apk-pro' ),
                        'card_version' => 'v1.108',
                        'card_size'    => '420 MB',
                        'card_rating'  => '4.8/5',
                        'card_excerpt' => esc_html__( 'Free Fire India is officially ready for players! Check out the Google Play Store and App Store direct links, verification guidelines, and migration steps.', 'bgmi-apk-pro' ),
                    ),
                ),
                'title_field' => '{{{ card_title }}}',
            )
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();

        $cols = intval( $settings['columns'] );
        $grid_style = 'grid-template-columns: repeat(' . $cols . ', 1fr);';

        echo '<div class="posts-grid elementor-posts-grid" style="' . esc_attr( $grid_style ) . '">';

        if ( 'custom' === $settings['source_mode'] ) {
            // Render manual cards
            if ( ! empty( $settings['custom_cards'] ) ) {
                foreach ( $settings['custom_cards'] as $card ) {
                    $img_url = ! empty( $card['card_image']['url'] ) 
                        ? $card['card_image']['url'] 
                        : get_template_directory_uri() . '/assets/images/bgmi-banner.jpg';
                    $link = ! empty( $card['card_url']['url'] ) ? $card['card_url']['url'] : '#';
                    ?>
                    <article class="post-card">
                        <div class="post-thumbnail-wrap">
                            <?php if ( ! empty( $card['card_badge'] ) ) : ?>
                                <span class="card-badge"><?php echo esc_html( $card['card_badge'] ); ?></span>
                            <?php endif; ?>
                            <?php if ( ! empty( $card['card_version'] ) ) : ?>
                                <span class="card-version-tag"><?php echo esc_html( $card['card_version'] ); ?></span>
                            <?php endif; ?>
                            <a href="<?php echo esc_url( $link ); ?>">
                                <img src="<?php echo esc_url( $img_url ); ?>" alt="<?php echo esc_attr( $card['card_title'] ); ?>">
                            </a>
                        </div>
                        <div class="post-card-content">
                            <div class="post-meta-row">
                                <span><svg class="ui-icon" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"></path><polyline points="17 21 17 13 7 13 7 21"></polyline><polyline points="7 3 7 8 15 8"></polyline></svg> <?php echo esc_html( $card['card_size'] ); ?></span>
                                <span>•</span>
                                <span><svg class="ui-icon icon-star" width="13" height="13" viewBox="0 0 24 24" fill="#f59e0b" stroke="#f59e0b" stroke-width="1.5"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg> <?php echo esc_html( $card['card_rating'] ); ?></span>
                            </div>
                            <h2 class="post-card-title">
                                <a href="<?php echo esc_url( $link ); ?>"><?php echo esc_html( $card['card_title'] ); ?></a>
                            </h2>
                            <div class="post-card-excerpt">
                                <?php echo esc_html( $card['card_excerpt'] ); ?>
                            </div>
                            <div class="card-bottom-action">
                                <a href="<?php echo esc_url( $link ); ?>" class="btn-read-more"><?php esc_html_e( 'Read Guide &rarr;', 'bgmi-apk-pro' ); ?></a>
                                <a href="<?php echo esc_url( $link ); ?>#download-now" class="btn-download-quick"><svg class="ui-icon" width="13" height="13" viewBox="0 0 24 24" fill="currentColor"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg> <?php esc_html_e( 'Download', 'bgmi-apk-pro' ); ?></a>
                            </div>
                        </div>
                    </article>
                    <?php
                }
            }
        } else {
            // Render WP Posts
            $count = ! empty( $settings['posts_per_page'] ) ? intval( $settings['posts_per_page'] ) : 4;
            $query = new \WP_Query( array(
                'posts_per_page'      => $count,
                'post_status'         => 'publish',
                'ignore_sticky_posts' => 1,
            ) );

            if ( $query->have_posts() ) {
                while ( $query->have_posts() ) {
                    $query->the_post();
                    $version = get_post_meta( get_the_ID(), '_bgmi_version', true ) ?: 'v3.5.0';
                    $size    = get_post_meta( get_the_ID(), '_bgmi_size_apk', true ) ?: '74 MB';
                    $rating  = get_post_meta( get_the_ID(), '_bgmi_rating', true ) ?: '4.8';
                    ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class( 'post-card' ); ?>>
                        <div class="post-thumbnail-wrap">
                            <span class="card-badge"><?php esc_html_e( 'Verified APK', 'bgmi-apk-pro' ); ?></span>
                            <span class="card-version-tag"><?php echo esc_html( $version ); ?></span>
                            <a href="<?php the_permalink(); ?>">
                                <?php if ( has_post_thumbnail() ) : ?>
                                    <?php the_post_thumbnail( 'bgmi-card' ); ?>
                                <?php else : ?>
                                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/bgmi-banner.jpg' ); ?>" alt="<?php the_title_attribute(); ?>">
                                <?php endif; ?>
                            </a>
                        </div>
                        <div class="post-card-content">
                            <div class="post-meta-row">
                                <span><svg class="ui-icon" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg> <?php echo get_the_date( 'd M Y' ); ?></span>
                                <span>•</span>
                                <span><svg class="ui-icon" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"></path><polyline points="17 21 17 13 7 13 7 21"></polyline><polyline points="7 3 7 8 15 8"></polyline></svg> <?php echo esc_html( $size ); ?></span>
                                <span>•</span>
                                <span><svg class="ui-icon icon-star" width="13" height="13" viewBox="0 0 24 24" fill="#f59e0b" stroke="#f59e0b" stroke-width="1.5"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg> <?php echo esc_html( $rating ); ?></span>
                            </div>
                            <h2 class="post-card-title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h2>
                            <div class="post-card-excerpt">
                                <?php the_excerpt(); ?>
                            </div>
                            <div class="card-bottom-action">
                                <a href="<?php the_permalink(); ?>" class="btn-read-more"><?php esc_html_e( 'Read Guide &rarr;', 'bgmi-apk-pro' ); ?></a>
                                <a href="<?php the_permalink(); ?>#download-now" class="btn-download-quick"><svg class="ui-icon" width="13" height="13" viewBox="0 0 24 24" fill="currentColor"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg> <?php esc_html_e( 'Download', 'bgmi-apk-pro' ); ?></a>
                            </div>
                        </div>
                    </article>
                    <?php
                }
                wp_reset_postdata();
            } else {
                echo '<p style="color:#64748b;">' . esc_html__( 'No posts found.', 'bgmi-apk-pro' ) . '</p>';
            }
        }

        echo '</div>';
    }
}
