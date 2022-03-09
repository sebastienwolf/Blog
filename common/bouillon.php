<? if (isset($_SESSION['userType'])) {
                    $type = $_SESSION['userType'];
                    if ($type == "admin") {
                        echo '?> <li><a href="http://<?= $b ?>/index.php?page=accueil">Deconnexion</a></li>
                    <?php';
                    } elseif ($type == "utilisteur") {
                        echo '?><li><a href="http://<?= $b ?>/index.php?page=accueil">Deconnexion</a></li>
                    <?php';
                    }
                } else {
                    echo '?><li><a href="http://<?= $b ?>/index.php?page=connexionUser">CONNEXION</a></li>

                <?php';
                }
