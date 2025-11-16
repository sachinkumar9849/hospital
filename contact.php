<?php
include 'layout/header.php';
?>
<div data-elementor-type="wp-page" data-elementor-id="44" class="elementor elementor-44">
    <div class="elementor-element elementor-element-86d7557 e-flex e-con-boxed e-con e-parent e-lazyloaded"
        data-id="86d7557" data-element_type="container"
        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
        <div class="e-con-inner">
            <div class="elementor-element elementor-element-fe0e4cf e-flex e-con-boxed e-con e-child" data-id="fe0e4cf"
                data-element_type="container">
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-c47bb30 at-heading-animation at-animation-heading-style-3 elementor-widget elementor-widget-heading"
                        data-id="c47bb30" data-element_type="widget"
                        data-settings="{&quot;ekit_we_effect_on&quot;:&quot;none&quot;}"
                        data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h1 class="elementor-heading-title elementor-size-default" style="perspective: 400px;">
                                Contact Us
                            </h1>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-6a0381f elementor-widget elementor-widget-elementskit-breadcrumb animated fadeInUp"
                        data-id="6a0381f" data-element_type="widget"
                        data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:100,&quot;ekit_we_effect_on&quot;:&quot;none&quot;}"
                        data-widget_type="elementskit-breadcrumb.default">
                        <div class="elementor-widget-container">
                            <div class="ekit-wid-con">
                                <ol class="ekit-breadcrumb">
                                    <li class="ekit_breadcrumbs_start"><a href="index.php">Home</a></li>
                                    <li class="brd_sep"> » </li>
                                    <li>Contact Us</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- BANNER END   -->

    <div class="padding">
        <div class="container">
            <div class="contact-info">
                <h2>Get In Touch</h2>
                <p>We'd love to hear from you. Send us a message and we'll respond as soon as possible.</p>

                <div class="info-item">
                    <div class="info-icon">📧</div>
                    <div class="info-text">
                        <h4 style="
    color: #cfdbff;
">EMAIL</h4>
                        <p>hello@company.com</p>
                    </div>
                </div>

                <div class="info-item">
                    <div class="info-icon">📞</div>
                    <div class="info-text">
                        <h4 style="
    color: #cfdbff;
">PHONE</h4>
                        <p>+1 (555) 123-4567</p>
                    </div>
                </div>

                <div class="info-item">
                    <div class="info-icon">📍</div>
                    <div class="info-text">
                        <h4 style="
    color: #cfdbff;
">LOCATION</h4>
                        <p>123 Business St, City, ST 12345</p>
                    </div>
                </div>
            </div>

            <div class="contact-form">
                <h2>Send Message</h2>
                <form>
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" id="name" name="name" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" required>
                    </div>

                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" id="subject" name="subject" required>
                    </div>

                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" required></textarea>
                    </div>

                    <button type="submit" class="submit-btn">Send Message</button>
                </form>
            </div>
        </div>
    </div>




</div>

<?php
include 'layout/footer.php';
?>