
<footer class="professional-footer bg-dark text-light">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <h5 class="footer-title mb-3"><?php bloginfo('name'); ?></h5>
                <p class="text-muted mb-3">Crafting exceptional custom furniture with quality materials and expert craftsmanship. Transform your space with our bespoke designs.</p>
                <div class="social-links">
                    <a href="#" class="text-light me-3"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-light me-3"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-light me-3"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-light"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 mb-4">
                <h6 class="footer-subtitle mb-3">Quick Links</h6>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="<?php echo home_url('/'); ?>" class="text-muted footer-link">Home</a></li>
                    <li class="mb-2"><a href="#" class="text-muted footer-link">About Us</a></li>
                    <li class="mb-2"><a href="#" class="text-muted footer-link">Products</a></li>
                    <li class="mb-2"><a href="#" class="text-muted footer-link">Custom Orders</a></li>
                    <li class="mb-2"><a href="#" class="text-muted footer-link">Gallery</a></li>
                </ul>
            </div>
            <div class="col-lg-2 col-md-6 mb-4">
                <h6 class="footer-subtitle mb-3">Services</h6>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="#" class="text-muted footer-link">Custom Design</a></li>
                    <li class="mb-2"><a href="#" class="text-muted footer-link">Restoration</a></li>
                    <li class="mb-2"><a href="#" class="text-muted footer-link">Delivery</a></li>
                    <li class="mb-2"><a href="#" class="text-muted footer-link">Installation</a></li>
                    <li class="mb-2"><a href="#" class="text-muted footer-link">Maintenance</a></li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <h6 class="footer-subtitle mb-3">Contact Info</h6>
                <div class="contact-info">
                    <p class="text-muted mb-2">
                        <i class="fas fa-map-marker-alt me-2"></i>
                        123 Furniture Street, Craft City, CC 12345
                    </p>
                    <p class="text-muted mb-2">
                        <i class="fas fa-phone me-2"></i>
                        <a href="tel:+1234567890" class="text-muted footer-link">(123) 456-7890</a>
                    </p>
                    <p class="text-muted mb-2">
                        <i class="fas fa-envelope me-2"></i>
                        <a href="mailto:info@example.com" class="text-muted footer-link">info@<?php echo parse_url(home_url(), PHP_URL_HOST); ?></a>
                    </p>
                    <p class="text-muted mb-0">
                        <i class="fas fa-clock me-2"></i>
                        Mon-Fri: 9AM-6PM, Sat: 10AM-4PM
                    </p>
                </div>
            </div>
        </div>
        <hr class="border-secondary my-4">
        <div class="row align-items-center">
            <div class="col-md-6">
                <p class="mb-0 text-muted">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
            </div>
            <div class="col-md-6 text-md-end">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item"><a href="#" class="text-muted footer-link small">Privacy Policy</a></li>
                    <li class="list-inline-item"><a href="#" class="text-muted footer-link small">Terms of Service</a></li>
                    <li class="list-inline-item"><a href="#" class="text-muted footer-link small">Sitemap</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
