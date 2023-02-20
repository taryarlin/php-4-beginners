</div>
<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<script src="//cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- <script src="https://cdn.tailwindcss.com"></script> -->
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
<script src="/js/tailwind.js"></script>


<?php if(isset($_SESSION['success'])) : ?>
<script>
    Swal.fire(
        'Success!',
        "<?= $_SESSION['success'] ?>",
        'success'
    )
</script>
<?php endif ?>

<script>
    $(document).ready(function() {
        setTimeout(() => {
            $('#error_message').fadeOut();

            $('#success_message').fadeOut();
        }, 5000);
    });
</script>
</body>
</html>

<?php
if (isset($_SESSION['errors'])) {
    unset($_SESSION['errors']);
}

if (isset($_SESSION['success'])) {
    unset($_SESSION['success']);
}
?>
