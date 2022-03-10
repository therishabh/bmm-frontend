<div class="manage-list">
    <a href="#" class="makeup-artist-opener"><span><i class="fa fa-network-wired icon"></i> Manage Brands</span> <i class="fa fa-chevron-circle-down icon float-right"></i></a>
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link" href="salon-ho-manage-brand.php"><i class="fas fa-user icon"></i> Manage Brand</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="add-a-salon.php"><i class="fas fa-cut icon"></i> Add a Salon</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="salon-ho-bank-details.php"><i class="fa fa-university icon"></i> Bank Details</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="salon-ho-services.php"><i class="fa fa-cog icon"></i> Services</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="salon-ho-amenities.php"><i class="fa fa-hands icon"></i>Amenities </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="salon-ho-timings.php"><i class="far fa-clock icon"></i> Timings</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="salon-ho-manage-menu-card.php"><i class="fa fa-list icon"></i> Manage Menu Card</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="salon-ho-upload-documents.php"><i class="fa fa-file-alt icon"></i> Upload Documents</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="salon-ho-manage-pics.php"><i class="fa fa-users icon"></i>Manage Pics & Videos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#" onclick="salonLogout();"><i class="fas fa-power-off icon"></i> Log Out</a>
        </li>

    </ul>
</div>


<script>
    function salonLogout() {
        localStorage.removeItem('token');
        window.location.replace('../pro-login.php');
    }
</script>