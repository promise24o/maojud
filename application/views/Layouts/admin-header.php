<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Maojud - Online Shop <?= $page_title ?></title>

    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>assets/images/favicon.png">
    <link href="<?= base_url() ?>assets/vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/chartist/css/chartist.min.css">

    <link href="<?= base_url() ?>assets/vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/neon.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">

</head>

<body>

    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>


    <div id="main-wrapper">

        <div class="nav-header">
            <a href="<?= base_url('admin/dashboard') ?>" class="brand-logo">
                <img class="logo-abbr" src="<?= base_url() ?>assets/images/favicon.png" alt="">
                <img class="logo-compact" src="<?= base_url() ?>assets/images/favicon.png" alt="">
                <img class="brand-title" src="<?= base_url() ?>assets/images/logo-text.png" alt="">
            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>

        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
								<?= $page_title ?>                         </div>
                        </div>
                        <ul class="navbar-nav header-right">
							<li class="nav-item">
								<div class="input-group search-area d-lg-inline-flex d-none">
									<div class="input-group-append">
										<span class="input-group-text"><a href="javascript:void(0)"><i class="flaticon-381-search-2"></i></a></span>
									</div>
									<input type="text" class="form-control" placeholder="Search here..">
								</div>
							</li>

                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="javascript:void(0)" role="button" data-toggle="dropdown">
                                    <img src="<?= $this->crud_model->get_image_url('admin', $this->session->userdata('admin_id')) ?>" width="20" alt="">
									<div class="header-info">
										<span class="text-black"><?= $this->session->userdata('admin_name') ?></span>
										<p class="fs-12 mb-0">Super Admin</p>
									</div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="<?= base_url('logout') ?>" class="dropdown-item ai-icon" >
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>


        <div class="dlabnav">
            <div class="dlabnav-scroll">
                <ul class="metismenu" id="menu">
                    <li><a class="ai-icon" href="<?= base_url('admin/dashboard') ?>" aria-expanded="false">
                            <i class="flaticon-381-networking"></i>
                            <span class="nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li><a class="ai-icon" href="<?= base_url('admin/categories') ?>" aria-expanded="false">
                            <i class="flaticon-381-database"></i>
                            <span class="nav-text">Product Categories</span>
                        </a>                        
                    </li>
                    <li><a class="ai-icon" href="<?= base_url('admin/create_landing_page') ?>" aria-expanded="false">
                            <i class="flaticon-381-file-1"></i>
                            <span class="nav-text">Create Landing Page</span>
                        </a>                        
                    </li>
                    <li><a class="ai-icon" href="<?= base_url('admin/create_hero_page') ?>" aria-expanded="false">
                            <i class="flaticon-381-file-1"></i>
                            <span class="nav-text">Create Hero Page</span>
                        </a>                        
                    </li>
                    <li><a class="ai-icon" href="<?= base_url('admin/orders') ?>" aria-expanded="false">
                            <i class="flaticon-381-file-1"></i>
                            <span class="nav-text">View Orders</span>
                        </a>                        
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-folder-13"></i>
							<span class="nav-text">Emails</span>
						</a>
                        <ul aria-expanded="false" class="mm-collapse">
                            <li><a href="<?= base_url('admin/compose') ?>">Compose</a></li>
                            <li><a href="<?= base_url('admin/inbox') ?>">Inbox</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>