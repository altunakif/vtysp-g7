<?php include("fixed-part-head.php") ?>

<body class="fix-header card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
<?php include("fixed-part-header.php") ?>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
<?php include("fixed-part-left-sidebar.php") ?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Change Log</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item">pages</li>
                        <li class="breadcrumb-item active">Change Log</li>
                    </ol>
                </div>
                <div>
                    <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <p>[13.01.2024] Çalışanlarınızın görevleri sayfası eklendi</p>
                                <p>[11.01.2024] Projeleriniz sayfası eklendi</p>
                                <p>[09.01.2024] Çalışanlarınız sayfası eklendi</p>
                                <p>[08.01.2024] Kullanıcı Listesi sayfası eklendi</p>
                                <p>[04.01.2024] Project detail hazırlandı</p>
                                <p>[03.01.2024] reCAPTCHA eklendi</p>
                                <p>[02.01.2024] Görevleriniz sayfası yapıldı</p>
                                <p>[01.01.2024] Proje listesi sayfası yapıldı</p>
                                <p>[01.01.2024] Görev ekleme sayfası yapıldı</p>
                                <p>[30.12.2023] Proje ekleme sayfası yapıldı</p>
                                <p>[30.12.2023] Change Log sayfası eklendi</p>
                                <p>[30.12.2023] logout özelliği eklendi</p>
                                <p>[30.12.2023] pages-new-user sayfasında validation yapıldı, yönlendirme yapıldı</p>
                                <p>[30.12.2023] pages-login.php ve php/pages-login-control.php sayfaları tekrar düzenlendi</p>
                                <p>[29.12.2023] pages-login  sayfası tamamlandı</p>
                                <p>[29.12.2023] htaccess dosyası eklendi, dosya uzantıları gizlendi</p>
                                <p>[29.12.2023] pages-new-user  sayfası tamamlandı</p>
                                <p>[29.12.2023] Yeni kayıt ekleme sayfası hazırlandı</p>
                                <p>[29.12.2023] Logo değişikliği yapıldı</p>
                                <p>[29.12.2023] Veri tabanı karşlaştırma sütununu utf8_general_ci olarak değiştirdim</p>
                                <p>[28.12.2023] Cloudflare kurulumu yapıldı</p>
                                <p>[28.12.2023] Alanadı ve hosting hizmeti alındı</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
<?php include("fixed-part-right-sidebar.php") ?>
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
<?php include("fixed-part-footer.php") ?>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
<?php include("fixed-part-script.php") ?>
</body>

</html>
