<?php
$PageName="الأكاديمية صوماليلاند";
include 'header.php';
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
    <head>
        <meta charset="utf-8" />
        <meta name="Description" content=" " />
        <meta name="Keywords" content="" />
        <meta name="author" content="" />

        <title>بريد العملاء</title>
        <link rel="stylesheet" href="css/bootstrap.css" />
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/font-awesome.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="shortcut icon" href="images/system.ico" type="image/x-icon" />
    </head>

    <body>
        <div class="container-fluid">
            <div class="row">
               
                <nav class="navbar navbar-default navbar-fixed-top custom-navbar" role="navigation">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button class="navbar-toggle btn custom-btn collapsed" data-toggle="collapse" data-target="#navbar-collapsed-menu">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <div>
                                 <h4>
                                    <a href="index.php" class="navbar-nav fa fa-book" class="navbar navbar-light bg-light" style="padding: 10px; text-decoration: none;font-size:30px" style="font-size: 1px;">
                                        الأكاديمية صوماليلاند
                                    </a>
                                </h4>
                            </div>
                        </div>

                        <div id="navbar-collapsed-menu" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav navbar-right">
                                <li >
                                    <a href="index.php"> الرئيسية</a>
                                </li>
                                <li>
                                    <a href="ministry_project.php">الوزارة التعليم</a>
                                </li>
                                <li>
                                    <a href="english/page-login.php" target="_blank" class="hidden-xs hidden-sm">المدارس</a>
                                </li>
                                <li>
                                    <a href="english/page-login.php" target="_blank" class="hidden-xs hidden-sm">المعاهد</a>
                                </li>
                                <li>
                                    <a href="english/page-login.php" target="_blank" class="hidden-xs hidden-sm">الجامعات</a>
                                </li>
                                <li class="active">
                                    <a href="contact.php">البريد </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>

            <br />
            <br />
            <br />
            <br />

            <div class="row">
                <div id="banner" class="container-fluid col-xs-12">
                    <div id="banner-img" style="background-image: url(images/banner-about.jpg);">
                        <div class="overlay">
                            <h3 class="title1 text-center custom-title hidden-sm hidden-md hidden-lg hidden-xl hidden-xxl">
                                <br />
                             بريد العملاء 
                            </h3>

                            <h2 class="title1 text-center custom-title hidden-xs">
                              بريد العملاء 
                            </h2>
                        </div>
                    </div>
                </div>
            </div>

            <br />

            <div class="row">
                <div class="col-xs-12">
                    <div class="text-center">
                         <h3 class="title1 text-center custom-title hidden-sm hidden-md hidden-lg hidden-xl hidden-xxl">
                                <br />
                               الرسالة
                            </h3>

                            <h2 class="title1 text-center custom-title hidden-xs">
                               الرسالة
                            </h2>
                    </div>
                </div>
            </div>

            <br />
            <div class="row">
                <div class="container">
                    <div class="col-xs-12 text-center"></div>
                    <div class="col-xs-12 col-md-12">
                        <form action="https://formspree.io/f/xjvdnowr" method="post" id="contact-us" class="form">
                            <div class="form-group col-sm-4">
                                <input type="text" name="Customer" id="Customer" autocomplete="off" placeholder="اسم العميل" required class="form-control custom-form-control input-lg uc-text" />
                            </div>
                            <div class="form-group col-sm-4">
                                <input
                                    type="text"
                                    name="Mobile"
                                    id="Mobile"
                                    autocomplete="off"
                                    placeholder="رقم الجوال"
                                     maxlength="15"
                                    required
                                    class="form-control custom-form-control input-lg uc-text"
                                    oninput="this.value=this.value.replace(/[^0-9.]/g,'').replace(/(\..*)\./g,'$1');"
                                />
                            </div>

                           
                            <div class="form-group col-sm-4">
                                <input
                                    type="text"
                                    name="WhatsApp"
                                    id="WhatsApp"
                                    autocomplete="off"
                                    placeholder="رقم الواتساب"
                                    maxlength="15"
                                    require
                                    class="form-control custom-form-control input-lg uc-text"
                                    oninput="this.value=this.value.replace(/[^0-9.]/g,'').replace(/(\..*)\./g,'$1');"
                                />
                            </div>
                             <div class="form-group col-sm-12">
                                <input type="text" name="Subject" id="Subject" autocomplete="off" placeholder=" عنوان الموضوع " required class="form-control custom-form-control input-lg uc-text" />
                            </div>
                            <div class="form-group col-sm-12">
                                <input type="email" name="Email" id="Email" autocomplete="off" placeholder="عنوان البريد الإلكتروني " required class="form-control custom-form-control input-lg uc-text" />
                            </div>
                           
                        

                           

                            <div class="form-group col-sm-12">
                                <textarea name="Message" id="Message" required autocomplete="off" placeholder="معلومات الرسالة" cols="30" rows="5" class="form-control custom-form-control input-lg uc-text"></textarea>
                            </div>
                            <div class="form-group col-md-12 text-center">
                                <input type="submit" name="submit" value=" إرسل الرسالة " onclick="ValidateEmail(email)" class="send-btn btn custom-btn btn-primary custom-btn-main" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <?php
include 'footer.php';
?>