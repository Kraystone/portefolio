<?php function backgroundAnimated(){ ?>
    <section class="background">

        <?php
        function resol()
        {
            $resol='<script type="text/javascript">
                        document.write(screen.height);
                    </script>';
            return $resol;
        }
        $var_resol=resol();
        echo $var_resol;
        echo "|";
        $var_resol_temp=intval($var_resol, 10);
        echo $var_resol_temp;
        for ($x = 0; $x <= 8; $x++){
            ?>
            <div class="row">
                <div>
                    &nbsp;
                    <i class="fas fa-graduation-cap"></i>
                    <i class="fas fa-code"></i>
                    <i class="fas fa-desktop"></i>
                    <i class="far fa-file-code"></i>
                    <i class="fas fa-database"></i>
                    <i class="fab fa-dev"></i>
                    <i class="fas fa-network-wired"></i>
                    <i class="fas fa-university"></i>
                    <i class="fab fa-linux"></i>
                    <i class="fab fa-windows"></i>
                    <i class="fas fa-graduation-cap"></i>
                    <i class="fas fa-terminal"></i>
                    <i class="fas fa-desktop"></i>
                    <i class="far fa-file-code"></i>
                    <i class="fas fa-database"></i>
                    <i class="fab fa-dev"></i>
                    <i class="fas fa-server"></i>
                    <i class="fas fa-code-branch"></i>
                    <i class="fas fa-book"></i>
                    &nbsp;
                </div>
                <div>
                    <i class="fas fa-graduation-cap"></i>
                    <i class="fas fa-code"></i>
                    <i class="fas fa-desktop"></i>
                    <i class="far fa-file-code"></i>
                    <i class="fas fa-database"></i>
                    <i class="fab fa-dev"></i>
                    <i class="fas fa-network-wired"></i>
                    <i class="fas fa-university"></i>
                    <i class="fab fa-linux"></i>
                    <i class="fab fa-windows"></i>
                    <i class="fas fa-graduation-cap"></i>
                    <i class="fas fa-terminal"></i>
                    <i class="fas fa-desktop"></i>
                    <i class="far fa-file-code"></i>
                    <i class="fas fa-database"></i>
                    <i class="fab fa-dev"></i>
                    <i class="fas fa-server"></i>
                    <i class="fas fa-shield-alt"></i>
                    <i class="fas fa-user-shield"></i>
                </div>
            </div>
            <?php
        }
        ?>
    </section>
<?php } ?>
