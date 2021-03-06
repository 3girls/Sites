<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge,chrome=1">
        <title>DataCollector</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/bootstrap.css">
        <!-- MetisMenu CSS -->
        <link rel="stylesheet" href="bower_components/metisMenu/dist/metisMenu.min.css">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="dist/css/sb-admin-2.css">
        <!-- Morris Charts CSS -->
        <link rel="stylesheet" href="bower_components/morrisjs/morris.css">
        <!-- Custom Fonts -->
        <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
        <script src="js/admin_myinfo_validation.js"></script>
        <!--Repond.js for IE 8 or less only-->
        <!--[if (lt IE 9) & (IEMobile)]>
        <script src="js/vendor/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <div id="wrapper">

              <!-- Navigation -->
              <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                  <div class="navbar-header">
                      <a class="navbar-brand" href="_index.html">
                        <img src="img/logo.png" alt="DataCollector" width="180">
                      </a>
                  </div>
                  <!-- /.navbar-header -->

                  <ul class="nav navbar-top-links navbar-right">
                      <!-- /.dropdown -->
                      <li class="dropdown">
                          <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                              <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                          </a>
                          <ul class="dropdown-menu dropdown-user">
                              <li><a href="admin_myinfo.php"><i class="fa fa-gear fa-fw"></i> 회원정보</a>
                              </li>
                              <li class="divider"></li>
                              <li><a href="_login.html"><i class="fa fa-sign-out fa-fw"></i> 로그아웃</a>
                              </li>
                          </ul>
                          <!-- /.dropdown-user -->
                      </li>
                      <!-- /.dropdown -->
                  </ul>
                  <!-- /.navbar-top-links -->

                  <div class="navbar-default sidebar" role="navigation">
                      <div class="sidebar-nav navbar-collapse">
                          <ul class="nav" id="side-menu">
                              <li>
                                  <a href="#"><i class="fa fa-search fa-fw"></i> 회원검색</a>
                              </li>
                              <li>
                                  <a href="#"><i class="fa fa-tasks fa-fw"></i> 태스크 관리<span class="fa arrow"></span></a>
                                  <ul class="nav nav-second-level">
                                      <li>
                                        <a href="#">태스크1 <span class="fa arrow"></span></a>
                                        <ul class="nav nav-third-level">
                                            <li>
                                                <a href="#">제출자 관리</a>
                                            </li>
                                            <li>
                                                <a href="#">원본데이터 타입 관리</a>
                                            </li>
                                            <li>
                                                <a style="font-size:12px; color:gray;" href="#">파싱데이터시퀀스파일 수: 3</a>
                                            </li>
                                            <li>
                                                <a style="font-size:12px; color:gray;" href="#">튜플 수: 123</a>
                                            </li>
                                        </ul>
                                      </li>
                                      <li>
                                        <a href="#"><i class="fa fa-plus-circle fa-fw"></i> 태스크 추가하기</a>
                                      </li>
                                  </ul>
                                  <!-- /.nav-second-level -->
                              </li>
                              <li>
                                  <a href="#"><i class="fa fa-users fa-fw"></i> 회원 관리<span class="fa arrow"></span></a>
                                  <ul class="nav nav-second-level">
                                      <li>
                                          <a href="#">제출자</a>
                                      </li>
                                      <li>
                                          <a href="#">평가자</a>
                                      </li>
                                  </ul>
                                  <!-- /.nav-second-level -->
                              </li>
                          </ul>
                      </div>
                      <!-- /.sidebar-collapse -->
                  </div>
                  <!-- /.navbar-static-side -->
              </nav>

              <div id="page-wrapper">
                  <div class="row">
                      <div class="col-lg-12">
                          <h1 class="page-header"><i class="fa fa-gear fa-fw"></i> 회원정보</h1>
                      </div>
                      <!-- /.col-lg-12 -->
                      <div class="page-contents col-lg-3">
                      </div>
                      <div class="page-contents col-lg-6">
                        <div class="panel panel-default">
                          <!--
                          <div class="panel-heading">
                            회원정보
                          </div>
                        -->
                          <div class="panel-body">
                            <form class="form-inline" action="admin_myinfo_validation.php" method="post" onsubmit="return CheckSignupForm()">
                              <table class="table table-bordered">
                                <tbody>
                                  <tr>
                                    <th>아이디</th>
                                    <td>admin</td>
                                  </tr>
                                  <tr>
                                    <th>비밀번호</th>
                                    <td>
                                      <input class="form-control" type="password" name="PW" id="PW" required maxlength="15"
                                       placeholder="수정할 비밀번호">
                                       <p style="color:#d9534f;" id="pw_msg"></p> <!--pw_msg-->             
                                    </td>
                                  </tr>
                                  <tr>
                                    <th>비밀번호 확인</th>
                                    <td>
                                      <input class="form-control" type="password" name="PW_check" id="PW_check" required maxlength="15"
                                       placeholder="비밀번호 확인">
                                       <p style="color:#d9534f;" id="pwrecheck_msg"></p> <!--pwrecheck_msg-->
                                    </td>
                                  </tr>
                                  <tr>
                                    <th>회원유형</th>
                                    <td>관리자</td>
                                  </tr>
                                  <tr>
                                    <th>이름</th>
                                    <td>-</td>
                                  </tr>
                                  <tr>
                                    <th>성별</th>
                                    <td>-</td>
                                  </tr>
                                  <tr>
                                    <th>생년월일</th>
                                    <td>-</td>
                                  </tr>
                                  <tr>
                                    <th>이메일</th>
                                    <td><input class="form-control" type="email" name="Email" id="Email" maxlength="35"
                                       placeholder="이메일 수정"></td>
                                  </tr>
                                  <tr>
                                    <th>휴대폰</th>
                                    <td><input class="form-control" type="number" name="Phone" id="Phone" maxlength="11"
                                       placeholder="휴대폰 번호 수정"></td>
                                  </tr>
                                </tbody>
                              </table>
                              <div style="text-align: center;">
                                <button class="btn btn-info" type="submit" name="button">수정하기</button>
                              </div>
                            </form>
                          </div>
                        </div>
 <!--                       <div style="text-align:center; padding-top:14px; padding-bottom:0; margin-bottom:0;">
                          <p><a href="">회원탈퇴 하시겠습니까?</a></p>
                        </div>
-->
                      </div>
                      <!-- /.col-lg-6 -->
                  </div>
                  <!-- /.row -->
              </div>
              <!-- /#page-wrapper -->

          </div>
          <!-- /#wrapper -->
        <footer role="contentinfo">
          <p><small>Copyright &copy; 3girls</small></p>
        </footer>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.3.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
