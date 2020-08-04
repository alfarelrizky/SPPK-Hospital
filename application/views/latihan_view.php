<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('particals/header.php') ?>
</head>

<body class="sb-nav-fixed">
    <?php $this->load->view('particals/navbar.php') ?>
    <div id="layoutSidenav">
        <?php $this->load->view('particals/sidebar.php') ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">LIST DATA PASIEN</h1>
                    <?php
                    if (!empty($this->session->userdata('reg'))) {
                        if ($this->session->userdata('reg') == 'ok') {
                            echo    "<div class='alert alert-success' role='alert'>
                                        Selamat Datang ". $this->session->userdata('nama'). " <em>ingat ID Login Kamu <b>".$this->session->userdata('id')."</b></em>
                                    </div>";
                        }
                        $this->session->set_userdata('reg', '');
                    }
                    ?>
                    <?php $this->load->view('particals/breadcrumb.php'); ?>
                    <?php $this->load->view('particals/content.php'); ?>
                </div>
            </main>
            <?php $this->load->view('particals/footer.php'); ?>
        </div>
    </div>
    <?php $this->load->view('particals/js.php'); ?>
</body>

</html>