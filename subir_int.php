
                        <?php
                   require "parte superior.php";
                ?>
                       
    <div class="container">
        <h1>Subir Ofico de Aprobacion Redes Internas</h1>
        <form action="subir_documento_int.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nombre">Nombre del archivo:</label>
                <input type="text" class="form-control" name="nombre" required>
            </div>
            <div class="form-group">
                <label for="NoOficio">NoOficio</label>
                <input type="text" class="form-control" name="NoOficio" required>
            </div>
            <div class="form-group">
                <label for="archivo">Archivo:</label>
                <input type="file" class="form-control-file" name="archivo" required>
            </div>
            <button type="submit" class="btn btn-primary">Subir Archivo</button>
        </form>
    </div>
</div>
</main>

</div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="assets/demo/chart-area-demo.js"></script>
<script src="assets/demo/chart-bar-demo.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
<script src="assets/demo/datatables-demo.js"></script>
<script src="js/datatables-simple-demo.js"></script>
<script src="js/scripts.js"></script>
<script>
    $(document).ready(function() {
        $('#sidebarToggle').on('click', function() {
            $('body').toggleClass('sb-sidenav-toggled');
        });
    });
</script>
</body>
</html>


