<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from big-bang-studio.com/neptune/neptune-default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 26 Dec 2016 09:04:13 GMT -->
<head>
    <!-- Meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Title -->
    <title>Royal Gems</title>

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>vendor/bootstrap4/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>vendor/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>vendor/animate.css/animate.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>vendor/jscrollpane/jquery.jscrollpane.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>vendor/waves/waves.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>vendor/switchery/dist/switchery.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>vendor/morris/morris.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>vendor/jvectormap/jquery-jvectormap-2.0.3.css">

    <!-- Neptune CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/core.css">

    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <![endif]-->

<style>

    @import url('http://fonts.googleapis.com/css?family=Open+Sans:400,600,700');
    @import url('http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css');

    *, *:before, *:after {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    html, body {
        height: 100%;
    }

    body {
        font: 14px/1 'Open Sans', sans-serif;
        color: #555;
        background: #eee;
    }

    h1 {
        padding: 50px 0;
        font-weight: 400;
        text-align: center;
    }

    p {
        margin: 0 0 20px;
        line-height: 1.5;
    }

    main {
        min-width: 320px;
        max-width: 800px;
        padding: 50px;
        margin: 0 auto;
        background: #fff;
    }

    section {
        display: none;
        padding: 20px 0 0;
        border-top: 1px solid #ddd;
    }

    input {
        display: none;
    }

    label {
        display: inline-block;
        margin: 0 0 -1px;
        padding: 15px 25px;
        font-weight: 600;
        text-align: center;
        color: #bbb;
        border: 1px solid transparent;
    }

    label:before {
        font-family: fontawesome;
        font-weight: normal;
        margin-right: 10px;
    }

    /*label[for*='1']:before { content: '\f1cb'; }*/
    /*label[for*='2']:before { content: '\f17d'; }*/
    /*label[for*='3']:before { content: '\f16b'; }*/
    /*label[for*='4']:before { content: '\f1a9'; }*/

    label:hover {
        color: #888;
        cursor: pointer;
    }

    input:checked + label {
        color: #555;
        border: 1px solid #ddd;
        border-top: 2px solid deepskyblue;
        border-bottom: 1px solid #fff;
    }

    #tab1:checked ~ #content1,
    #tab2:checked ~ #content2,
    #tab3:checked ~ #content3,
    #tab4:checked ~ #content4 {
        display: block;
    }

    @media screen and (max-width: 650px) {
        label {
            font-size: 0;
        }
        label:before {
            margin: 0;
            font-size: 18px;
        }
    }

    @media screen and (max-width: 400px) {
        label {
            padding: 15px;
        }
    }
</style>

</head>
<body class="fixed-sidebar fixed-header skin-default content-appear">
<div class="wrapper">

    <!-- Preloader -->
    <div class="preloader"></div>

    <!-- Sidebar -->



    <?php $this->load->view('Menu');?>

    <!-- Sidebar second -->
    <div class="site-sidebar-second custom-scroll custom-scroll-dark">
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#tab-1" role="tab">Chat</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab-2" role="tab">Activity</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab-3" role="tab">Todo</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab-4" role="tab">Settings</a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="tab-1" role="tabpanel">
                <div class="sidebar-chat animated fadeIn">
                    <div class="sidebar-group">
                        <h6>Favorites</h6>
                        <a class="text-black" href="#">
                            <span class="sc-status bg-success"></span>
                            <span class="sc-name">John Doe</span>
                            <span class="sc-writing"> typing...<i class="ti-pencil"></i></span>
                        </a>
                        <a class="text-black" href="#">
                            <span class="sc-status bg-success"></span>
                            <span class="sc-name">Vance Osborn</span>
                        </a>
                        <a class="text-black" href="#">
                            <span class="sc-status bg-danger"></span>
                            <span class="sc-name">Wolfe Stevie</span>
                            <span class="tag tag-primary">7</span>
                        </a>
                        <a class="text-black" href="#">
                            <span class="sc-status bg-warning"></span>
                            <span class="sc-name">Jonathan Mel</span>
                        </a>
                        <a class="text-black" href="#">
                            <span class="sc-status bg-secondary"></span>
                            <span class="sc-name">Carleton Josiah</span>
                        </a>
                    </div>
                    <div class="sidebar-group">
                        <h6>Work</h6>
                        <a class="text-black" href="#">
                            <span class="sc-status bg-secondary"></span>
                            <span class="sc-name">Larry Hal</span>
                        </a>
                        <a class="text-black" href="#">
                            <span class="sc-status bg-success"></span>
                            <span class="sc-name">Ron Carran</span>
                            <span class="sc-writing"> typing...<i class="ti-pencil"></i></span>
                        </a>
                    </div>
                    <div class="sidebar-group">
                        <h6>Social</h6>
                        <a class="text-black" href="#">
                            <span class="sc-status bg-success"></span>
                            <span class="sc-name">Lucius Skyler</span>
                            <span class="tag tag-primary">3</span>
                        </a>
                        <a class="text-black" href="#">
                            <span class="sc-status bg-danger"></span>
                            <span class="sc-name">Landon Graham</span>
                        </a>
                    </div>
                </div>
                <div class="sidebar-chat-window animated fadeIn">
                    <div class="scw-header clearfix">
                        <a class="text-grey float-xs-left" href="#"><i class="ti-angle-left"></i> Back</a>
                        <div class="float-xs-right">
                            <strong>Jonathan Mel</strong>
                            <div class="avatar box-32">
                                <img src="img/avatars/5.jpg" alt="">
                                <span class="status bg-success top right"></span>
                            </div>
                        </div>
                    </div>
                    <div class="scw-item">
                        <span>Hello!</span>
                    </div>
                    <div class="scw-item self">
                        <span>Meeting at 16:00 in the conference room. Remember?</span>
                    </div>
                    <div class="scw-item">
                        <span>No problem. Thank's for reminder!</span>
                    </div>
                    <div class="scw-item self">
                        <span>Prepare to be amazed.</span>
                    </div>
                    <div class="scw-item">
                        <span>Good. Can't wait!</span>
                    </div>
                    <div class="scw-form">
                        <form>
                            <input class="form-control" type="text" placeholder="Type...">
                            <button class="btn btn-secondary" type="button"><i class="ti-angle-right"></i></button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="tab-2" role="tabpanel">
                <div class="sidebar-activity animated fadeIn">
                    <div class="notifications">
                        <div class="n-item">
                            <div class="media">
                                <div class="media-left">
                                    <div class="avatar box-48">
                                        <img class="b-a-radius-circle" src="img/avatars/1.jpg" alt="">
                                        <span class="n-icon bg-danger"><i class="ti-pin-alt"></i></span>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <div class="n-text"><a class="text-black" href="#">John Doe</a> <span class="text-muted">uploaded <a class="text-black" href="#">monthly report</a></div>
                                    <div class="text-muted font-90">12 minutes ago</div>
                                </div>
                            </div>
                        </div>
                        <div class="n-item">
                            <div class="media">
                                <div class="media-left">
                                    <div class="avatar box-48">
                                        <img class="b-a-radius-circle" src="img/avatars/3.jpg" alt="">
                                        <span class="n-icon bg-success"><i class="ti-comment"></i></span>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <div class="n-text"><a class="text-black" href="#">Vance Osborn</a> <span class="text-muted">commented </span> <a class="text-black" href="#">Project</a></div>
                                    <div class="n-comment my-0-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</div>
                                    <div class="text-muted font-90">3 hours ago</div>
                                </div>
                            </div>
                        </div>
                        <div class="n-item">
                            <div class="media">
                                <div class="media-left">
                                    <div class="avatar box-48">
                                        <img class="b-a-radius-circle" src="img/avatars/2.jpg" alt="">
                                        <span class="n-icon bg-danger"><i class="ti-email"></i></span>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <div class="n-text"><a class="text-black" href="#">Ron Carran</a> <span class="text-muted">send you files</span></div>
                                    <div class="row row-sm my-0-5">
                                        <div class="col-xs-4">
                                            <img class="img-fluid" src="img/photos-1/1.jpg" alt="">
                                        </div>
                                        <div class="col-xs-4">
                                            <img class="img-fluid" src="img/photos-1/2.jpg" alt="">
                                        </div>
                                        <div class="col-xs-4">
                                            <img class="img-fluid" src="img/photos-1/3.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="text-muted font-90">30 minutes ago</div>
                                </div>
                            </div>
                        </div>
                        <div class="n-item">
                            <div class="media">
                                <div class="media-left">
                                    <div class="avatar box-48">
                                        <img class="b-a-radius-circle" src="img/avatars/4.jpg" alt="">
                                        <span class="n-icon bg-primary"><i class="ti-plus"></i></span>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <div class="n-text"><a class="text-black" href="#">Larry Hal</a> <span class="text-muted">invited you to </span><a class="text-black" href="#">Project</a></div>
                                    <div class="text-muted font-90">10:58</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="tab-3" role="tabpanel">
                <div class="sidebar-todo animated fadeIn">
                    <div class="sidebar-group">
                        <h6>Important</h6>
                        <div class="st-item">
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Mock up</span>
                            </label>
                        </div>
                        <div class="st-item">
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" checked>
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Prototype iPhone</span>
                            </label>
                        </div>
                        <div class="st-item">
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Build final version</span>
                            </label>
                        </div>
                        <div class="st-item">
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Approval docs</span>
                            </label>
                        </div>
                    </div>
                    <div class="sidebar-group">
                        <h6>Secondary</h6>
                        <div class="st-item">
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" checked>
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Website redesign</span>
                            </label>
                        </div>
                        <div class="st-item">
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" checked>
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Skype call</span>
                            </label>
                        </div>
                        <div class="st-item">
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Blog post</span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="tab-4" role="tabpanel">
                <div class="sidebar-settings animated fadeIn">
                    <div class="sidebar-group">
                        <h6>Main</h6>
                        <div class="ss-item">
                            <div class="text-truncate">Anyone can register</div>
                            <div class="ss-checkbox"><input type="checkbox" class="js-switch" data-size="small" data-color="#3e70c9" checked></div>
                        </div>
                        <div class="ss-item">
                            <div class="text-truncate">Allow commenting</div>
                            <div class="ss-checkbox"><input type="checkbox" class="js-switch" data-size="small" data-color="#3e70c9"></div>
                        </div>
                        <div class="ss-item">
                            <div class="text-truncate">Allow deleting</div>
                            <div class="ss-checkbox"><input type="checkbox" class="js-switch" data-size="small" data-color="#3e70c9"></div>
                        </div>
                    </div>
                    <div class="sidebar-group">
                        <h6>Notificatiоns</h6>
                        <div class="ss-item">
                            <div class="text-truncate">Commits</div>
                            <div class="ss-checkbox"><input type="checkbox" class="js-switch" data-size="small" data-color="#3e70c9"></div>
                        </div>
                        <div class="ss-item">
                            <div class="text-truncate">Messages</div>
                            <div class="ss-checkbox"><input type="checkbox" class="js-switch" data-size="small" data-color="#3e70c9" checked></div>
                        </div>
                    </div>
                    <div class="sidebar-group">
                        <h6>Security</h6>
                        <div class="ss-item">
                            <div class="text-truncate">Daily backup</div>
                            <div class="ss-checkbox"><input type="checkbox" class="js-switch" data-size="small" data-color="#3e70c9" checked></div>
                        </div>
                        <div class="ss-item">
                            <div class="text-truncate">API Access</div>
                            <div class="ss-checkbox"><input type="checkbox" class="js-switch" data-size="small" data-color="#3e70c9" checked></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- Header -->
    <div class="site-header">
        <nav class="navbar navbar-light">
            <div class="navbar-left">
                <a class="navbar-brand" href="index.html">
                    <div class="logo"></div>
                </a>
                <div class="toggle-button dark sidebar-toggle-first float-xs-left hidden-md-up">
                    <span class="hamburger"></span>
                </div>
                <div class="toggle-button-second dark float-xs-right hidden-md-up">
                    <i class="ti-arrow-left"></i>
                </div>
                <div class="toggle-button dark float-xs-right hidden-md-up" data-toggle="collapse" data-target="#collapse-1">
                    <span class="more"></span>
                </div>
            </div>
            <div class="navbar-right navbar-toggleable-sm collapse" id="collapse-1">
                <div class="toggle-button light sidebar-toggle-second float-xs-left hidden-sm-down">
                    <span class="hamburger"></span>
                </div>
                <div class="toggle-button-second light float-xs-right hidden-sm-down">
                    <i class="ti-arrow-left"></i>
                </div>
                <ul class="nav navbar-nav float-md-right">
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" data-toggle="dropdown" aria-expanded="false">
                            <i class="ti-flag-alt"></i>
                            <span class="hidden-md-up ml-1">Tasks</span>
                            <span class="tag tag-success top">3</span>
                        </a>
                        <div class="dropdown-tasks dropdown-menu dropdown-menu-right animated fadeInUp">
                            <div class="t-item">
                                <div class="mb-0-5">
                                    <a class="text-black" href="#">First Task</a>
                                    <span class="float-xs-right text-muted">75%</span>
                                </div>
                                <progress class="progress progress-danger progress-sm" value="75" max="100">100%</progress>
                                <span class="avatar box-32">
											<img src="img/avatars/2.jpg" alt="">
										</span>
                                <a class="text-black" href="#">John Doe</a>, <span class="text-muted">5 min ago</span>
                            </div>
                            <div class="t-item">
                                <div class="mb-0-5">
                                    <a class="text-black" href="#">Second Task</a>
                                    <span class="float-xs-right text-muted">40%</span>
                                </div>
                                <progress class="progress progress-purple progress-sm" value="40" max="100">100%</progress>
                                <span class="avatar box-32">
											<img src="img/avatars/3.jpg" alt="">
										</span>
                                <a class="text-black" href="#">John Doe</a>, <span class="text-muted">15:07</span>
                            </div>
                            <div class="t-item">
                                <div class="mb-0-5">
                                    <a class="text-black" href="#">Third Task</a>
                                    <span class="float-xs-right text-muted">100%</span>
                                </div>
                                <progress class="progress progress-warning progress-sm" value="100" max="100">100%</progress>
                                <span class="avatar box-32">
											<img src="img/avatars/4.jpg" alt="">
										</span>
                                <a class="text-black" href="#">John Doe</a>, <span class="text-muted">yesterday</span>
                            </div>
                            <div class="t-item">
                                <div class="mb-0-5">
                                    <a class="text-black" href="#">Fourth Task</a>
                                    <span class="float-xs-right text-muted">60%</span>
                                </div>
                                <progress class="progress progress-success progress-sm" value="60" max="100">100%</progress>
                                <span class="avatar box-32">
											<img src="img/avatars/5.jpg" alt="">
										</span>
                                <a class="text-black" href="#">John Doe</a>, <span class="text-muted">3 days ago</span>
                            </div>
                            <a class="dropdown-more" href="#">
                                <strong>View all tasks</strong>
                            </a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" data-toggle="dropdown" aria-expanded="false">
                            <i class="ti-email"></i>
                            <span class="hidden-md-up ml-1">Notifications</span>
                            <span class="tag tag-danger top">12</span>
                        </a>
                        <div class="dropdown-messages dropdown-tasks dropdown-menu dropdown-menu-right animated fadeInUp">
                            <div class="m-item">
                                <div class="mi-icon bg-info"><i class="ti-comment"></i></div>
                                <div class="mi-text"><a class="text-black" href="#">John Doe</a> <span class="text-muted">commented post</span> <a class="text-black" href="#">Lorem ipsum dolor</a></div>
                                <div class="mi-time">5 min ago</div>
                            </div>
                            <div class="m-item">
                                <div class="mi-icon bg-danger"><i class="ti-heart"></i></div>
                                <div class="mi-text"><a class="text-black" href="#">John Doe</a> <span class="text-muted">liked post</span> <a class="text-black" href="#">Lorem ipsum dolor</a></div>
                                <div class="mi-time">15:07</div>
                            </div>
                            <div class="m-item">
                                <div class="mi-icon bg-purple"><i class="ti-user"></i></div>
                                <div class="mi-text"><a class="text-black" href="#">John Doe</a> <span class="text-muted">followed</span> <a class="text-black" href="#">Kate Doe</a></div>
                                <div class="mi-time">yesterday</div>
                            </div>
                            <div class="m-item">
                                <div class="mi-icon bg-danger"><i class="ti-heart"></i></div>
                                <div class="mi-text"><a class="text-black" href="#">John Doe</a> <span class="text-muted">liked post</span> <a class="text-black" href="#">Lorem ipsum dolor</a></div>
                                <div class="mi-time">3 days ago</div>
                            </div>
                            <a class="dropdown-more" href="#">
                                <strong>View all notifications</strong>
                            </a>
                        </div>
                    </li>
                    <li class="nav-item dropdown hidden-sm-down">
                        <a href="#" data-toggle="dropdown" aria-expanded="false">
									<span class="avatar box-32">
										<img src="img/avatars/1.jpg" alt="">
									</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right animated fadeInUp">
                            <a class="dropdown-item" href="#">
                                <i class="ti-email mr-0-5"></i> Inbox
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="ti-user mr-0-5"></i> Profile
                            </a>

                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"><i class="ti-help mr-0-5"></i> Help</a>
                            <a class="dropdown-item" href="#"><i class="ti-power-off mr-0-5"></i> Sign out</a>
                        </div>
                    </li>
                </ul>
                <ul class="nav navbar-nav">
                    <li class="nav-item hidden-sm-down">
                        <a class="nav-link toggle-fullscreen" href="#">
                            <i class="ti-fullscreen"></i>
                        </a>
                    </li>
                    <li class="nav-item dropdown hidden-sm-down">
                        <a class="nav-link" href="#" data-toggle="dropdown" aria-expanded="false">
                            <i class="ti-layout-grid3"></i>
                        </a>
                        <div class="dropdown-apps dropdown-menu animated fadeInUp">
                            <div class="a-grid">
                                <div class="row row-sm">
                                    <div class="col-xs-4">
                                        <div class="a-item">
                                            <a href="#">
                                                <div class="ai-icon"><img class="img-fluid" src="img/brands/dropbox.png" alt=""></div>
                                                <div class="ai-title">Dropbox</div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                        <div class="a-item">
                                            <a href="#">
                                                <div class="ai-icon"><img class="img-fluid" src="img/brands/github.png" alt=""></div>
                                                <div class="ai-title">Github</div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                        <div class="a-item">
                                            <a href="#">
                                                <div class="ai-icon"><img class="img-fluid" src="img/brands/wordpress.png" alt=""></div>
                                                <div class="ai-title">Wordpress</div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                        <div class="a-item">
                                            <a href="#">
                                                <div class="ai-icon"><img class="img-fluid" src="img/brands/gmail.png" alt=""></div>
                                                <div class="ai-title">Gmail</div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                        <div class="a-item">
                                            <a href="#">
                                                <div class="ai-icon"><img class="img-fluid" src="img/brands/drive.png" alt=""></div>
                                                <div class="ai-title">Drive</div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                        <div class="a-item">
                                            <a href="#">
                                                <div class="ai-icon"><img class="img-fluid" src="img/brands/dribbble.png" alt=""></div>
                                                <div class="ai-title">Dribbble</div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="dropdown-more" href="#">
                                <strong>View all apps</strong>
                            </a>
                        </div>
                    </li>
                </ul>
                <div class="header-form float-md-left ml-md-2">
                    <form>
                        <input type="text" class="form-control b-a" placeholder="Search for...">
                        <button type="submit" class="btn bg-white b-a-0">
                            <i class="ti-search"></i>
                        </button>
                    </form>
                </div>
            </div>
        </nav>
    </div>


    <div class="site-content">
        <!-- Content -->
        <div class="content-area py-1">
            <div class="container-fluid">
                <div class="row row-md">




                </div>


                <!-- from start -->

                <div class="content-area py-1">
                    <div class="container-fluid">



                        <div class="col-lg-12">
                            <div class="box box-block bg-white" >





                                    <input id="tab1" type="radio" name="tabs" checked>
                                    <label for="tab1">View</label>

                                    <input id="tab2" type="radio" name="tabs">
                                    <label for="tab2">Insert Stock</label>


                                    <section id="content1">
                                        <p>
                                            Bacon ipsum dolor sit amet beef venison beef ribs kielbasa. Sausage pig leberkas, t-bone sirloin shoulder bresaola. Frankfurter rump porchetta ham. Pork belly prosciutto brisket meatloaf short ribs.
                                        </p>
                                        <p>
                                            Brisket meatball turkey short loin boudin leberkas meatloaf chuck andouille pork loin pastrami spare ribs pancetta rump. Frankfurter corned beef beef tenderloin short loin meatloaf swine ground round venison.
                                        </p>
                                    </section>



                                <?php
                                //so you want to show the sidebar once submitted?
                                if(isset($_POST['psubmit'])){
                                   //echo $sidebar;
                                   // echo 1223232332;
                                    ?>
                                    <script>
                                        alert("hello dolly");
                                        var s = document.getElementById("content2");
                                        s.style.display="block";
                                    </script>
                                    <section id="content2">
                                        <?php $this->load->view('insertproduct');?>
                                    </section>
                                    <?php
                                }else {?>
                                <section id="content2">
                                    <?php $this->load->view('insertproduct');?>
                                </section>
                                    <?php

                                }
                                ?>

                            </div>
                        </div>




                    </div>
                </div>
                <!-- Footer -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row text-xs-center">
                            <div class="col-sm-4 text-sm-left mb-0-5 mb-sm-0">
                                2016 © Tech Cloud Ltd.
                            </div>
                            <div class="col-sm-8 text-sm-right">
                                <ul class="nav nav-inline l-h-2">
                                    <li class="nav-item"><a class="nav-link text-black" href="#">Privacy</a></li>
                                    <li class="nav-item"><a class="nav-link text-black" href="#">Terms</a></li>
                                    <li class="nav-item"><a class="nav-link text-black" href="#">Help</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>

        </div>
        <script type="text/javascript">

            var text_input = document.getElementById ('p_id');
            text_input.focus ();
            text_input.select ();

        </script>



        <!-- Vendor JS -->
        <script type="text/javascript" src="<?php echo base_url(); ?>vendor/jquery/jquery-1.12.3.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>vendor/tether/js/tether.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>vendor/bootstrap4/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>vendor/detectmobilebrowser/detectmobilebrowser.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>vendor/jscrollpane/jquery.mousewheel.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>vendor/jscrollpane/mwheelIntent.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>vendor/jscrollpane/jquery.jscrollpane.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>vendor/jquery-fullscreen-plugin/jquery.fullscreen-min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>vendor/waves/waves.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>vendor/switchery/dist/switchery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>vendor/flot/jquery.flot.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>vendor/flot/jquery.flot.resize.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>vendor/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>vendor/CurvedLines/curvedLines.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>vendor/TinyColor/tinycolor.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>vendor/sparkline/jquery.sparkline.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>vendor/raphael/raphael.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>vendor/morris/morris.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>vendor/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>vendor/jvectormap/jquery-jvectormap-world-mill.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>vendor/peity/jquery.peity.js"></script>

        <!-- Neptune JS -->
        <script type="text/javascript" src="<?php echo base_url(); ?>js/app.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/demo.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/index.js"></script>



        <script>

            function myfunc() {


                $("#p_from").submit(function(e) {

                    e.preventDefault();

                });

            )
        </script>



</body>

<!-- Mirrored from big-bang-studio.com/neptune/neptune-default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 26 Dec 2016 09:06:36 GMT -->
</html>