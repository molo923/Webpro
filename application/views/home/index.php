<html>
    <head>
        <meta charset="utf-8">
        <title>HOME</title>
        <link href="<?php echo base_url('assets/css/style.css')?>" rel="stylesheet">
        <!-- Bootstrap CSS File -->
            <link href="<?php echo base_url('assets/lib/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    </head>
    <body>
        <section id="intro">
        <div class="intro-text">
            <h2>Hai, <?php echo $this->session->userdata("nama"); ?></h2>
            <p>Collect.Call.Earn</p>
            <!--=================
                UNTUK AGUNG
            =====================-->
            <a href="<?php echo base_url() ?>" class="btn-get-started scrollto">Jemput Sampah</a>
            <!--=================
                UNTUK FAUZAN
            =====================-->
            <a href="<?= base_url(); ?>timbulan_C" class="btn-get-started scrollto">Laporkan Timbulan Sampah</a>
        </div>
        </section><!-- #intro -->

  <main id="main">
    </body>
</html>
