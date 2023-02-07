</div>
<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<script src="//cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
<script src="https://cdn.tailwindcss.com"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script> -->

<script>
    $(document).ready(function() {
        $('#data_table').DataTable();

        $('.summernote').summernote({
            height: 500,
        });
    });
</script>
</body>
</html>
