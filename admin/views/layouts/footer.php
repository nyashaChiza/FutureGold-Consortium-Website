<footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>FutureGold Consortium</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://nyashachiza.github.io/chizaResume/">+</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="http://localhost:9000/admin/assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="http://localhost:9000/admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="http://localhost:9000/admin/assets/vendor/chart.js/chart.min.js"></script>
  <script src="http://localhost:9000/admin/assets/vendor/echarts/echarts.min.js"></script>
  <script src="http://localhost:9000/admin/assets/vendor/quill/quill.min.js"></script>
  <script src="http://localhost:9000/admin/assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="http://localhost:9000/admin/assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="http://localhost:9000/admin/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="http://localhost:9000/admin/assets/js/main.js"></script>
<script>
  var quill = new Quill('#quill-editor', {
    modules: {
        toolbar: [
            [{ 'header': [1, 2, 3, 4, 5, 6, false] }],
            ['bold', 'italic', 'underline', 'strike'],
            ['link'],
            [{ 'script': 'sub'}, { 'script': 'super' }],
            [{ 'list': 'ordered'}, { 'list': 'bullet' }],
            ['clean']
        ]
    },
    placeholder: 'Compose an epic...',
    theme: 'snow'
});

$('form').submit(function() {
    $('#hidden_element').val(JSON.stringify(quill.getContents()));
    return true;
});
</script>
</body>

</html>