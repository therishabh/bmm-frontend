</div>
</body>
<script src="./includes/js/config.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<script src="./includes/js/custom.js"></script>
<script src="./includes/js/jquery.validate.min.js"></script>
<script src="./includes/js/zoom.js"></script>
<script src="./includes/js/jquery.toast.js"></script>
<script>
    $(function() {
        const token = localStorage.getItem("salonToken");
        if (token) {
            
        } else {
            window.location.replace('../');
        }
    });
</script>

</html>