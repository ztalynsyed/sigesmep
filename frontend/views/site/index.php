<?php

/* @var $this yii\web\View */

$this->title = 'SIGESTV- Movidelnor EP';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Bienvenido</h1>

        <!--  <p class="lead">You have successfully created your Yii-powered application.</p> -->

        <!-- <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p> -->
    </div>

    <div class="body-content">
        <div class="row">
            <div class="col-lg-4">
                <h2>Gestión de incidentes</h2>

                <p>En esta sección podrá realizar todo lo referente a gestión de incidentes.</p>

                <p><a class="btn btn-lg btn-success" href="/sigesmep/frontend/web/index.php?r=tab-incidentes">Acceder</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Novedades Operativas</h2>

                <p>En esta sección podrá realizar todo lo referente gestión de novedades operativas</p>

                <p><a class="btn btn-lg btn-success" href="/sigesmep/frontend/web/index.php?r=tab-novedades-operativas">Acceder</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Reportes</h2>

                <p>En esta sección encontrará todo lo referente a reportes</p>

                <p><a class="btn btn-lg btn-success" href="https://webserver1.movidelnor.gob.ec/syedcrv/common/reportes/run.php?project=admin&execute_mode=ADMIN&clear_session=1">Acceder</a></p>
            </div>

                
        </div>
        <br>
        <div class="row">
        <div class="col-lg-4">
                    <h2>Supervisión incidentes</h2>
                    
                    <p>Moderación de incidentes</p>

                <p><a class="btn btn-primary" href="/sigesmep/backend/web">Acceder</a></p>
                </div>

                <div class="col-lg-4">
                    <h2>Supervisión novedades</h2>
                    
                    <p>Moderación de novedades</p>

                <p><a class="btn btn-primary" href="/sigesmep/backend/web/index.php?r=site%2Flogin">Acceder</a></p>
                </div>

                <div class="col-lg-4">
                    <h2>Manuales de usuario</h2>
                    
                    <p>Revise y descarque los manuales de usuario del sistema</p>

                <p><a class="btn btn-primary" href="/sigesmep/frontend/web/docs/manualv2.pdf">Descargar Manual V2.0</a></p>
                </div>
         </div>
    </div>
</div>
