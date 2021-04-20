<!--   Core JS Files   -->
<script src="<?= base_url('assets/admin'); ?>/assets/js/core/jquery.3.2.1.min.js"></script>
<script src="<?= base_url('assets/admin'); ?>/assets/js/core/popper.min.js"></script>
<script src="<?= base_url('assets/admin'); ?>/assets/js/core/bootstrap.min.js"></script>

<!-- jQuery UI -->
<script src="<?= base_url('assets/admin'); ?>/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="<?= base_url('assets/admin'); ?>/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
 
<!-- jQuery Scrollbar -->
<script src="<?= base_url('assets/admin'); ?>/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>


<!-- Chart JS -->
<script src="<?= base_url('assets/admin'); ?>/assets/js/plugin/chart.js/chart.min.js"></script>

<!-- jQuery Sparkline -->
<script src="<?= base_url('assets/admin'); ?>/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

<!-- Chart Circle -->
<script src="<?= base_url('assets/admin'); ?>/assets/js/plugin/chart-circle/circles.min.js"></script>

<!-- Datatables -->
<script src="<?= base_url('assets/admin'); ?>/assets/js/plugin/datatables/datatables.min.js"></script>

<!-- Bootstrap Notify -->
<script src="<?= base_url('assets/admin'); ?>/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

<!-- jQuery Vector Maps -->
<script src="<?= base_url('assets/admin'); ?>/assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
<script src="<?= base_url('assets/admin'); ?>/assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

<!-- ckeditor -->
<!-- <script src="<?= base_url('assets/ckeditor'); ?>/ckeditor.js"></script> -->

<!-- Sweet Alert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script src="<?= base_url('assets/myjs/') ?>my.js"></script>

<!-- Atlantis JS -->
<script src="<?= base_url('assets/admin'); ?>/assets/js/atlantis.min.js"></script>
<script>
    $(function() {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('editor1',{
            height: 300,
            filebrowserUploadUrl: '<?= base_url() ?>assets/upload.php',
            filebrowserImageBrowseUrl: '<?= base_url() ?>assets/upload/'

        })
        $('.textarea').wysihtml5()
    })
</script>
<script>
    $(function() {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('editor2',{
            height: 300,
            filebrowserUploadUrl: '<?= base_url() ?>assets/upload.php',
            filebrowserImageBrowseUrl: '<?= base_url() ?>assets/upload/'

        })
        $('.textarea').wysihtml5()
    })
</script>

<script>
    $(document).ready(function() {
        $('#basic-datatables').DataTable({});

        $('#multi-filter-select').DataTable({
            "pageLength": 5,
            initComplete: function() {
                this.api().columns().every(function() {
                    var column = this;
                    var select = $('<select class="form-control"><option value=""></option></select>')
                        .appendTo($(column.footer()).empty())
                        .on('change', function() {
                            var val = $.fn.dataTable.util.escapeRegex(
                                $(this).val()
                            );

                            column
                                .search(val ? '^' + val + '$' : '', true, false)
                                .draw();
                        });

                    column.data().unique().sort().each(function(d, j) {
                        select.append('<option value="' + d + '">' + d + '</option>')
                    });
                });
            }
        });

        // Add Row
        $('#add-row').DataTable({
            "pageLength": 5,
        });

        var action = '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

        $('#addRowButton').click(function() {
            $('#add-row').dataTable().fnAddData([
                $("#addName").val(),
                $("#addPosition").val(),
                $("#addOffice").val(),
                action
            ]);
            $('#addRowModal').modal('hide');

        });
    });
</script>
<?php
if ($this->session->flashdata('simpan')) :
?>
    <script>
        $(document).ready(function() {
            Swal.fire({
                icon: 'success',
                title: 'Selamat',
                text: '<?= $this->session->flashdata('simpan'); ?>'
            })
        })
    </script>
<?php endif ?>

<?php
if ($this->session->flashdata('gagal')) :
?>
    <script>
        $(document).ready(function() {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            Toast.fire({
                icon: 'warning',
                title: '<?= $this->session->flashdata('gagal'); ?>'
            })
        })
    </script>
<?php endif ?>

<?php
if ($this->session->flashdata('berhasil')) :
?>
    <script>
        $(document).ready(function() {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                // background: '#CC080A',
                // text: 'white',
                showConfirmButton: false,
                timer: 3000,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            Toast.fire({
                icon: 'success',
                title: '<?= $this->session->flashdata('berhasil'); ?>'
            })
        })
    </script>
<?php endif ?>

<?php
if ($this->session->flashdata('error')) :
?>
    <script>
        $(document).ready(function() {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            Toast.fire({
                icon: 'error',
                title: '<?= $this->session->flashdata('error'); ?>'
            })
        })
    </script>
<?php endif ?>

<script>
    function logout() {
        Swal.fire({
            title: "Are you sure?",
            text: "You will return to the sign in page",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes",
            cancelButtonText: "No",
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = base_url + "Auth/logout";
            }
        });
    }
</script>
</body>

</html>