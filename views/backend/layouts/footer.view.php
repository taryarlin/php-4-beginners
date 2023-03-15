                </div>

                <footer class="content-footer footer bg-footer-theme">
                    <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                    <div class="mb-2 mb-md-0">
                        ©
                        <script>
                        document.write(new Date().getFullYear());
                        </script>
                        , made with ❤️ by
                        <a href="https://themeselection.com" target="_blank" class="footer-link fw-bolder">Burma Zay</a>
                    </div>
                    </div>
                </footer>

                <div class="content-backdrop fade"></div>
            </div>
        </div>
    </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="/assets/backend/vendor/libs/jquery/jquery.js"></script>
    <script src="/assets/backend/vendor/libs/popper/popper.js"></script>
    <script src="/assets/backend/vendor/js/bootstrap.js"></script>
    <script src="/assets/backend/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="/assets/backend/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="/assets/backend/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="/assets/backend/js/main.js"></script>

    <!-- Page JS -->
    <script src="/assets/backend/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <script src="//cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
  </body>
</html>

<?php
    if (isset($_SESSION['success'])) {
        unset($_SESSION['success']);
    }
?>
