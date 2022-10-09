<?php

namespace ElementHelper\Widget;

use \Elementor\Controls_Manager;
use \Elementor\Repeater;
use \Elementor\Group_Control_Border;
use \Elementor\Group_Control_Box_Shadow;
use \Elementor\Group_Control_Image_Size;
use \Elementor\Group_Control_Typography;
use \Elementor\Core\Schemes\Typography;
use \Elementor\Utils;

defined( 'ABSPATH' ) || die();

class CF7 extends Element_El_Widget {

	/**
	 * Get widget name.
	 *
	 * Retrieve Element Helper widget name.
	 *
	 * @return string Widget name.
	 * @since 1.0.0
	 * @access public
	 *
	 */
	public function get_name() {
		return 'cf7';
	}

	/**
	 * Get widget title.
	 *
	 * @return string Widget title.
	 * @since 1.0.0
	 * @access public
	 *
	 */
	public function get_title() {
		return __( 'Contact Form 7', 'elementhelper' );
	}

	public function get_custom_help_url() {
		return 'http://elementor.sabber.com/widgets/contact-7-form/';
	}

	/**
	 * Get widget icon.
	 *
	 * @return string Widget icon.
	 * @since 1.0.0
	 * @access public
	 *
	 */
	public function get_icon() {
		return 'eicon-shortcode';
	}

	public function get_keywords() {
		return [ 'form', 'contact', 'cf7', 'contact form', 'gravity', 'ninja' ];
	}

	protected function register_content_controls() {
		$this->start_controls_section(
			'_section_design_title',
			[
				'label' => __( 'Design Style', 'elementhelper' ),
				'tab'   => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'design_style',
			[
				'label'              => __( 'Design Style', 'elementhelper' ),
				'type'               => Controls_Manager::SELECT,
				'options'            => [
					'style_1' => __( 'Style 1', 'elementhelper' ),
				],
				'default'            => 'style_1',
				'frontend_available' => true,
				'style_transfer'     => true,
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'_section_title',
			[
				'label' => __( 'Title & Desccription', 'elementhelper' ),
				'tab'   => Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'title',
			[
				'label'   => __( 'Title', 'elementhelper' ),
				'type'    => Controls_Manager::TEXTAREA,
				'dynamic' => [
					'active' => true,
				]
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'_section_cf7',
			[
				'label' => elh_element_is_cf7_activated() ? __( 'Contact Form 7', 'elementhelper' ) : __( 'Missing Notice', 'elementhelper' ),
				'tab'   => Controls_Manager::TAB_CONTENT,
			]
		);

		if ( ! elh_element_is_cf7_activated() ) {
			$this->add_control(
				'_cf7_missing_notice',
				[
					'type'            => Controls_Manager::RAW_HTML,
					'raw'             => sprintf(
						__( 'Hello %2$s, looks like %1$s is missing in your site. Please click on the link below and install/activate %1$s. Make sure to refresh this page after installation or activation.', 'elementhelper' ),
						'<a href="' . esc_url( admin_url( 'plugin-install.php?s=Contact+Form+7&tab=search&type=term' ) )
						. '" target="_blank" rel="noopener">Contact Form 7</a>',
						elh_element_get_current_user_display_name()
					),
					'content_classes' => 'elementor-panel-alert elementor-panel-alert-danger',
				]
			);

			$this->add_control(
				'_cf7_install',
				[
					'type' => Controls_Manager::RAW_HTML,
					'raw'  => '<a href="' . esc_url( admin_url( 'plugin-install.php?s=Contact+Form+7&tab=search&type=term' ) ) . '" target="_blank" rel="noopener">Click to install or activate Contact Form 7</a>',
				]
			);
			$this->end_controls_section();

			return;
		}

		$this->add_control(
			'form_id',
			[
				'label'       => __( 'Select Your Form', 'elementhelper' ),
				'type'        => Controls_Manager::SELECT,
				'label_block' => true,
				'options'     => [ '' => __( '', 'elementhelper' ) ] + \elh_element_get_cf7_forms(),
			]
		);

		$this->add_control(
			'html_class',
			[
				'label'       => __( 'HTML Class', 'elementhelper' ),
				'type'        => Controls_Manager::TEXT,
				'label_block' => true,
				'description' => __( 'Add CSS custom class to the form.', 'elementhelper' ),
			]
		);

		$this->end_controls_section();
	}

	protected function register_style_controls() {
		$this->start_controls_section(
			'_section_style_content',
			[
				'label' => __( 'Slide Content', 'elementhelper' ),
				'tab'   => Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'more_options',
			[
				'label'     => __( 'Additional Options', 'elementhelper' ),
				'type'      => Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

		$this->end_controls_section();
	}

	protected function render() {
		$settings = $this->get_settings_for_display();

//		if ( ! elh_element_is_cf7_activated() ) {
//			return;
//		}
		?>
		<?php if ( $settings['design_style'] === 'style_3' ):
			?>

		<?php else:
			?>
            <div class="contact-area pb-150 pb-xs-50">
                <div class="container">
	                <?php if ( $settings['title'] ) : ?>
                        <div class="row justify-content-center">
                            <div class="col-xl-7">
                                <h2 class="contact-title text-center" data-aos="fade-up" data-aos-delay="500"
                                    data-aos-duration="1000">
					                <?php echo elh_element_kses_intermediate( $settings['title'] ); ?>
                                </h2>
                            </div>
                        </div>
	                <?php endif; ?>
                    <div class="row justify-content-center">
                        <div class="col-xl-8">
                            <div class="contact-form" data-aos="fade-up" data-aos-delay="500"
                                 data-aos-duration="1000">
	                            <?php
	                            if ( ! empty( $settings['form_id'] ) ) {
		                            echo elh_element_do_shortcode( 'contact-form-7', [
			                            'id'         => $settings['form_id'],
			                            'html_class' => 'elh-cf7-form ' . elh_element_sanitize_html_class_param( $settings['html_class'] ),
		                            ] );
	                            }
	                            ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="t-shape-1">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/shape-14.png" alt="shape">
                </div>
                <div class="t-shape-2">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/shape-13.png" alt="shape">
                </div>
                <div class="t-shape-3">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/shape-12.png" alt="shape">
                </div>

                <div class="shape-1">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/shape/shape-7.png"  alt="shape">
                </div>
                <div class="shape-2">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/shape/shape-8.png"  alt="shape">
                </div>
            </div>

            <div class="welcome-area">
                <div class="welcome-overlay"></div>
                <div class="welcome-wrap">
                    <div class="icon">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/shape//shape-27.png" alt="">
                    </div>
                    <div class="text mt--30">
                        <p>
                            Thank you for reaching out. We'll be in touch within 24 hours
                            (and usually much sooner).
                        </p>
                        <a href="#" class="welcome-close">Ok</a>
                    </div>
                </div>
            </div>
		<?php endif; ?>


		<?php

	}
}
