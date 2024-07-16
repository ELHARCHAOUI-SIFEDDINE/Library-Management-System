<?php
require_once('top.php');
require_once('config.php'); // Inclure le fichier de configuration de la base de données

// Récupérer les données de la base de données
$query = "SELECT * FROM books";
$result = mysqli_query($conn, $query);

// Compter le nombre de livres
$countQuery = "SELECT COUNT(*) AS total_books FROM books";
$countResult = mysqli_query($conn, $countQuery);
$countRow = mysqli_fetch_assoc($countResult);
$totalBooks = $countRow['total_books'];

// Compter le nombre d'utilisateurs
$userCountQuery = "SELECT COUNT(*) AS total_users FROM users";
$userCountResult = mysqli_query($conn, $userCountQuery);
$userCountRow = mysqli_fetch_assoc($userCountResult);
$totalUsers = $userCountRow['total_users'];
?>

<body id="page-top">

    <!-- Enveloppe de la page -->
    <div id="wrapper">

        <?php
        require_once('sidebar.php')
        ?>

        <!-- Contenu de la page -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Contenu principal -->
            <div id="content">

                <?php
                require_once('nav.php')
                ?>
                <!-- Début du contenu de la page -->
                <div class="container-fluid">

                    <!-- Titre de la page -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-2" style="margin-bottom: 1cm;">
                        <h1 class="h3 mb-0 text-gray-800">Tableau de Bord</h1>
                        <div>
                            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Générer un Rapport</a>
                        </div>
                    </div>

                    <!-- Ligne de cartes -->
                    <div class="row">

                        <!-- Exemple de carte des livres -->
                        <div class="col-xl-6 col-lg-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2" style="width: 100%;">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total des Livres</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $totalBooks; ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-book fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Exemple de carte des utilisateurs -->
                        <div class="col-xl-6 col-lg-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2" style="width: 100%;">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total des Utilisateurs</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $totalUsers; ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-users fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- Fin de la ligne de cartes -->

                </div>
                <!-- Fin du contenu de la page -->

            </div>
            <!-- Fin du contenu principal -->

        </div>
        <!-- Fin de l'enveloppe de contenu -->

    </div>
    <!-- Fin de l'enveloppe de la page -->

    <!-- JavaScript de Bootstrap -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript principal -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Scripts personnalisés pour toutes les pages -->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>