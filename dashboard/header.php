<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Mera Interest</title>

    <!-- Favicon -->
    <link rel="icon" href="../img/core-img/favicon.ico">
    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="../css/jquery-ui.min.css">
    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" crossorigin="anonymous" />
    <link rel="stylesheet" href="../css/dashboard.css">
    <!-- Responsive Stylesheet -->
    <link rel="stylesheet" href="../css/responsive.css">
</head>
<body>
    <div class="main">
        <div class="header">
            <div class="header-wrapper">
                <a href="/" class="logo"><img src="../img/core-img/logo_icon.png" alt="Mera Interest logo"></a>
                <div class="main-nav">
                    <a href="index.php" class="<?php if($currentPage =='index'){echo 'router-link-active';}?>">
                        <span>Dashboard</span>
                    </a> 
                    <a href="fd.php" class="<?php if($currentPage =='fd'){echo 'router-link-active';}?>">
                        <span>FD's</span>
                    </a> 
                    <a href="recent-transaction.php" class="<?php if($currentPage =='recent'){echo 'router-link-active';}?>">
                        <span>Transaction</span>
                    </a> 
                    <a href="#" class="dropdown-label">
                        <span>Tools</span>
                    </a>   
                    <div class="dropdown-nav" style="display: none;">
                        <ul class="list-flat dropdown-nav-list">
                            <li>
                                <a target="_blank" href="#">
                                    <span class="icon icon-life-buoy"></span> FD Calculator
                                </a>
                            </li> 
                            <li>
                                <a target="_blank" href="#">
                                    <span class="icon icon-user-plus"></span> Loan on FD
                                </a>
                            </li> 
                        </ul>
                    </div>
                </div>
                <div class="right-nav">
                    <div class="user-nav perspective">
                        <a href="#" class="dropdown-label">
                            <div>
                                <div class="avatar" style="width: 25px; height: 25px; border-radius: 50%; text-align: center; vertical-align: middle; background-color: rgba(156, 39, 176, 0.1); font-size: 9px; font-weight: 300; color: rgb(156, 39, 176); line-height: 26px;">
                                    <span>RB</span>
                                </div>
                            </div> 
                            <span class="user-id">Rohit Bansal</span>
                        </a> 
                        <div class="dropdown-nav" style="display: none;">
                            <div class="dropdown-nav-header">
                                <a href="#" class="">
                                    <h4 class="username">Rohit Bansal</h4> 
                                    <div class="email">rohit@ollosoft.com</div>
                                </a>
                            </div> 
                            <hr> 
                            <ul class="list-flat dropdown-nav-list">
                                <li>
                                    <a href="profile.php" class="">
                                        <span class="icon icon-user"></span> My profile
                                    </a>
                                </li>
                                <hr>
                                <li>
                                    <a target="_blank" href="#">
                                        <span class="icon icon-life-buoy"></span> Support
                                    </a>
                                </li> 
                                <li>
                                    <a target="_blank" href="#">
                                        <span class="icon icon-user-plus"></span> Invite friends
                                    </a>
                                </li> 
                                <li>
                                    <a target="_blank" href="#">
                                        <span class="icon icon-help-circle"></span> Help
                                    </a>
                                </li> 
                                <li>
                                    <a target="_self" href="#">
                                        <span class="icon icon-exit"></span> Logout
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>