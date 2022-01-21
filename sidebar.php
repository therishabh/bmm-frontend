<div id="body-wrapper">
    <section id="left-pannel">
        <ul>
            <li>
                <a href="dashboard.php" class="<?php echo (str_contains($_SERVER['REQUEST_URI'], "dashboard.php")) ? 'active' : ''; ?>">
                    <i class="fa fa-tachometer" aria-hidden="true"></i>
                    Dashboard
                </a>
            </li>
            <li>
                <a href="manage-profile.php" class="<?php echo (str_contains($_SERVER['REQUEST_URI'], "manage-profile.php")) ? 'active' : ''; ?>">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    Manage Profile
                </a>
            </li>
            <li>
                <a href="manage-booking.php" class="<?php echo (str_contains($_SERVER['REQUEST_URI'], "manage-booking.php")) ? 'active' : ''; ?>">
                    <i class="fa fa-book" aria-hidden="true"></i>
                    Manage Booking
                </a>
            </li>
            <li>
                <a href="manage-services.php" class="<?php echo (str_contains($_SERVER['REQUEST_URI'], "manage-services.php")) ? 'active' : ''; ?>">
                    <i class="fa fa-sliders" aria-hidden="true"></i>
                    Manage Services
                </a>
            </li>
            <li>
                <a href="manage-pricing.php" class="<?php echo (str_contains($_SERVER['REQUEST_URI'], "manage-pricing.php")) ? 'active' : ''; ?>">
                    <i class="fa fa-inr" aria-hidden="true"></i>
                    Manage Pricing
                </a>
            </li>
            <li>
                <a href="manage-amenities.php" class="<?php echo (str_contains($_SERVER['REQUEST_URI'], "manage-amenities.php")) ? 'active' : ''; ?>">
                    <i class="fa fa-cogs" aria-hidden="true"></i>
                    Manage Amenities
                </a>
            </li>
            <li>
                <a href="bank-info.php" class="<?php echo (str_contains($_SERVER['REQUEST_URI'], "bank-info.php")) ? 'active' : ''; ?>">
                    <i class="fa fa-university" aria-hidden="true"></i>
                    Bank Info
                </a>
            </li>
            <li>
                <a href="manage-timing.php" class="<?php echo (str_contains($_SERVER['REQUEST_URI'], "manage-timing.php")) ? 'active' : ''; ?>">
                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                    Manage Timing
                </a>
            </li>
            <li>
                <a href="manage-documents.php" class="<?php echo (str_contains($_SERVER['REQUEST_URI'], "manage-documents.php")) ? 'active' : ''; ?>">
                    <i class="fa fa-file" aria-hidden="true"></i>
                    Documents
                </a>
            </li>
            <li>
                <a href="gallery.php" class="<?php echo (str_contains($_SERVER['REQUEST_URI'], "gallery.php")) ? 'active' : ''; ?>">
                    <i class="fa fa-picture-o" aria-hidden="true"></i>
                    Gallery
                </a>
            </li>
        </ul>
    </section>