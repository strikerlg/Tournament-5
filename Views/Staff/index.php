<? include 'header.php';?>



        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Bienvenue dans l'interface staff</h1>
                        <p>Nombre d'inscription ces 7 derniers jours : X.</p>
                        
                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Contracter le menu</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>


<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

<? include 'footer.php';?>
