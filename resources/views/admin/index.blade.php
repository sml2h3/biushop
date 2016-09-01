@extends('layouts.admin')
@section('content')
    <div class="settings-pane">

        <a href="#" data-toggle="settings-pane" data-animate="true">
            &times;
        </a>

        <div class="settings-pane-inner">

            <div class="row">

                <div class="col-md-4">

                    <div class="user-info">

                        <div class="user-image">
                            <a href="extra-profile.html">
                                <img src="{{asset('assets/images/user-2.png')}}" class="img-responsive img-circle" />
                            </a>
                        </div>

                        <div class="user-details">

                            <h3>
                                <a href="extra-profile.html">John Smith</a>

                                <!-- Available statuses: is-online, is-idle, is-busy and is-offline -->
                                <span class="user-status is-online"></span>
                            </h3>

                            <p class="user-title">Web Developer</p>

                            <div class="user-links">
                                <a href="extra-profile.html" class="btn btn-primary">Edit Profile</a>
                                <a href="extra-profile.html" class="btn btn-success">Upgrade</a>
                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-md-8 link-blocks-env">

                    <div class="links-block left-sep">
                        <h4>
                            <span>Notifications</span>
                        </h4>

                        <ul class="list-unstyled">
                            <li>
                                <input type="checkbox" class="cbr cbr-primary" checked="checked" id="sp-chk1" />
                                <label for="sp-chk1">Messages</label>
                            </li>
                            <li>
                                <input type="checkbox" class="cbr cbr-primary" checked="checked" id="sp-chk2" />
                                <label for="sp-chk2">Events</label>
                            </li>
                            <li>
                                <input type="checkbox" class="cbr cbr-primary" checked="checked" id="sp-chk3" />
                                <label for="sp-chk3">Updates</label>
                            </li>
                            <li>
                                <input type="checkbox" class="cbr cbr-primary" checked="checked" id="sp-chk4" />
                                <label for="sp-chk4">Server Uptime</label>
                            </li>
                        </ul>
                    </div>

                    <div class="links-block left-sep">
                        <h4>
                            <a href="#">
                                <span>Help Desk</span>
                            </a>
                        </h4>

                        <ul class="list-unstyled">
                            <li>
                                <a href="#">
                                    <i class="fa-angle-right"></i>
                                    Support Center
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa-angle-right"></i>
                                    Submit a Ticket
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa-angle-right"></i>
                                    Domains Protocol
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa-angle-right"></i>
                                    Terms of Service
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>

            </div>

        </div>

    </div>

    <div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->

        <!-- Add "fixed" class to make the sidebar fixed always to the browser viewport. -->
        <!-- Adding class "toggle-others" will keep only one menu item open at a time. -->
        <!-- Adding class "collapsed" collapse sidebar root elements and show only icons. -->
        <div class="sidebar-menu toggle-others fixed">

            <div class="sidebar-menu-inner">

                <header class="logo-env">

                    <!-- logo -->
                    <div class="logo">
                        <a href="dashboard-1.html" class="logo-expanded">
                            <img src="{{asset('assets/images/logo@2x.png')}}" width="80" alt="" />
                        </a>

                        <a href="dashboard-1.html" class="logo-collapsed">
                            <img src="{{asset('assets/images/logo-collapsed@2x.png')}}" width="40" alt="" />
                        </a>
                    </div>

                    <!-- This will toggle the mobile menu and will be visible only on mobile devices -->
                    <div class="mobile-menu-toggle visible-xs">
                        <a href="#" data-toggle="user-info-menu">
                            <i class="fa-bell-o"></i>
                            <span class="badge badge-success">7</span>
                        </a>

                        <a href="#" data-toggle="mobile-menu">
                            <i class="fa-bars"></i>
                        </a>
                    </div>

                    <!-- This will open the popup with user profile settings, you can use for any purpose, just be creative -->
                    <div class="settings-icon">
                        <a href="#" data-toggle="settings-pane" data-animate="true">
                            <i class="linecons-cog"></i>
                        </a>
                    </div>


                </header>



                <ul id="main-menu" class="main-menu">
                    <li>
                        <a href="manage">
                            <i class="linecons-cog"></i>
                            <span class="title">控制台</span>
                        </a>
                        <ul>
                            <li>
                                <a href="">欢迎页面</a>
                            </li>
                            <li>
                                <a href="">站点设置</a>
                            </li>
                            <li>
                                <a href="">会员管理</a>
                            </li>
                            <li>
                                <a href="">店铺管理</a>
                            </li>
                            <li>
                                <a href="">商品管理</a>
                            </li>
                            <li>
                                <a href="">实物订单</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="">
                            <i class="fa fa-desktop"></i>
                            <span class="title">站点</span>
                        </a>
                        <ul>
                            <li>
                                <a href="">站点设置</a>
                            </li>
                            <li>
                                <a href="">账号同步</a>
                            </li>
                            <li>
                                <a href="">上传设置</a>
                            </li>
                            <li>
                                <a href="">SEO设置</a>
                            </li>
                            <li>
                                <a href="">邮箱短信</a>
                            </li>
                            <li>
                                <a href="">支付方式</a>
                            </li>
                            <li>
                                <a href="">权限设置</a>
                            </li>
                            <li>
                                <a href="">快递公司</a>
                            </li>
                            <li>
                                <a href="">运单模板</a>
                            </li>
                            <li>
                                <a href="">地区管理</a>
                            </li>
                            <li>
                                <a href="">配送地区</a>
                            </li>
                            <li>
                                <a href="">清理缓存</a>
                            </li>
                            <li>
                                <a href="">数据备份</a>
                            </li>
                            <li>
                                <a href="">性能优化</a>
                            </li>
                            <li>
                                <a href="">搜索设置</a>
                            </li>
                            <li>
                                <a href="">操作日志</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="">
                            <i class="fa-cube"></i>
                            <span class="title">商品</span>
                        </a>
                        <ul>
                            <li>
                                <a href="">分类管理</a>
                            </li>
                            <li>
                                <a href="">品牌管理</a>
                            </li>
                            <li>
                                <a href="">商品管理</a>
                            </li>
                            <li>
                                <a href="">类型管理</a>
                            </li>
                            <li>
                                <a href="">规格管理</a>
                            </li>
                            <li>
                                <a href="">图片空间</a>
                            </li>
                            <li>
                                <a href="">频道管理</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="">
                            <i class="fa-home"></i>
                            <span class="title">店铺</span>
                        </a>
                        <ul>
                            <li>
                                <a href="">店铺管理</a>
                            </li>
                            <li>
                                <a href="#">店铺等级</a>
                            </li>
                            <li>
                                <a href="#">店铺分类</a>
                            </li>
                            <li>
                                <a href="#">二级域名</a>
                            </li>
                            <li>
                                <a href="#">店铺动态</a>
                            </li>
                            <li>
                                <a href="#">店铺帮助</a>
                            </li>
                            <li>
                                <a href="#">开店首页</a>
                            </li>
                            <li>
                                <a href="#">自营店铺</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="">
                            <i class="fa-users"></i>
                            <span class="title">会员</span>
                        </a>
                        <ul>
                            <li>
                                <a href="">会员管理</a>
                            </li>
                            <li>
                                <a href="">会员级别</a>
                            </li>
                            <li>
                                <a href="">经验值管理</a>
                            </li>
                            <li>
                                <a href="">积分管理</a>
                            </li>
                            <li>
                                <a href="">预存款</a>
                            </li>
                            <li>
                                <a href="">分享绑定</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="">
                            <i class="fa-shopping-cart"></i>
                            <span class="title">交易</span>
                        </a>
                        <ul>
                            <li>
                                <a href="">实物订单</a>
                            </li>
                            <li>
                                <a href="">虚拟订单</a>
                            </li>
                            <li>
                                <a href="">退款管理</a>
                            </li>
                            <li>
                                <a href="">退货管理</a>
                            </li>
                            <li>
                                <a href="">虚拟订单退款</a>
                            </li>
                            <li>
                                <a href="">咨询管理</a>
                            </li>
                            <li>
                                <a href="">举报管理</a>
                            </li>
                            <li>
                                <a href="">评价管理</a>
                            </li>
                            <li>
                                <a href="">投诉管理</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="">
                            <i class="fa-globe"></i>
                            <span class="title">网站</span>
                        </a>
                        <ul>
                            <li>
                                <a href="">文章分类</a>
                            </li>
                            <li>
                                <a href="">文章管理</a>
                            </li>
                            <li>
                                <a href="">会员协议</a>
                            </li>
                            <li>
                                <a href="">页面导航</a>
                            </li>
                            <li>
                                <a href="">广告管理</a>
                            </li>
                            <li>
                                <a href="">首页管理</a>
                            </li>
                            <li>
                                <a href="">推荐位</a>
                            </li>
                            <li>
                                <a href="">友情链接</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="">
                            <i class="fa-puzzle-piece"></i>
                            <span class="title">运营</span>
                        </a>
                        <ul>
                            <li>
                                <a href="">基本设置</a>
                            </li>
                            <li>
                                <a href="">抢购管理</a>
                            </li>
                            <li>
                                <a href="">虚拟抢购设置</a>
                            </li>
                            <li>
                                <a href="">限时折扣</a>
                            </li>
                            <li>
                                <a href="">满即送</a>
                            </li>
                            <li>
                                <a href="">优惠套装</a>
                            </li>
                            <li>
                                <a href="">推荐展位</a>
                            </li>
                            <li>
                                <a href="">代金劵</a>
                            </li>
                            <li>
                                <a href="">结算管理</a>
                            </li>
                            <li>
                                <a href="">虚拟订单管理</a>
                            </li>
                            <li>
                                <a href="">活动管理</a>
                            </li>
                            <li>
                                <a href="">兑换礼品</a>
                            </li>
                            <li>
                                <a href="">红包管理</a>
                            </li>
                            <li>
                                <a href="">平台客服</a>
                            </li>
                            <li>
                                <a href="">平台充值卡</a>
                            </li>
                            <li>
                                <a href="">物流自提服务站</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="">
                            <i class="fa-pie-chart"></i>
                            <span class="title">统计</span>
                        </a>
                        <ul>
                            <li>
                                <a href="">概述及设置</a>
                            </li>
                            <li>
                                <a href="">行业分析</a>
                            </li>
                            <li>
                                <a href="">会员统计</a>
                            </li>
                            <li>
                                <a href="">店铺统计</a>
                            </li>
                            <li>
                                <a href="">销量分析</a>
                            </li>
                            <li>
                                <a href="">商品分析</a>
                            </li>
                            <li>
                                <a href="">营销分析</a>
                            </li>
                            <li>
                                <a href="">售后分析</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="">
                            <i class="fa-smile-o"></i>
                            <span class="title">二手</span>
                        </a>
                        <ul>
                            <li>
                                <a href="">SEO设置</a>
                            </li>
                            <li>
                                <a href="">分类管理</a>
                            </li>
                            <li>
                                <a href="">首页分类管理</a>
                            </li>
                            <li>
                                <a href="">闲置物品管理</a>
                            </li>
                            <li>
                                <a href="">地区管理</a>
                            </li>
                            <li>
                                <a href="">二手页面幻灯</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="">
                            <i class="fa-mobile"></i>
                            <span class="title">手机端</span>
                        </a>
                        <ul>
                            <li>
                                <a href="">首页编辑</a>
                            </li>
                            <li>
                                <a href="">专题设置</a>
                            </li>
                            <li>
                                <a href="">分类图片设置</a>
                            </li>
                            <li>
                                <a href="">下载设置</a>
                            </li>
                            <li>
                                <a href="">手机支付</a>
                            </li>
                            <li>
                                <a href="">意见反馈</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="">
                            <i class="fa-file-text-o"></i>
                            <span class="title">CMS</span>
                        </a>
                        <ul>
                            <li>
                                <a href="">CMS管理</a>
                            </li>
                            <li>
                                <a href="">首页管理</a>
                            </li>
                            <li>
                                <a href="">文章管理</a>
                            </li>
                            <li>
                                <a href="">文章分类</a>
                            </li>
                            <li>
                                <a href="">画报管理</a>
                            </li>
                            <li>
                                <a href="">画报分类</a>
                            </li>
                            <li>
                                <a href="">专题管理</a>
                            </li>
                            <li>
                                <a href="">导航管理</a>
                            </li>
                            <li>
                                <a href="">标签管理</a>
                            </li>
                            <li>
                                <a href="">评论管理</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="">
                            <i class="fa-shopping-cart"></i>
                            <span class="title">圈子</span>
                        </a>
                        <ul>
                            <li>
                                <a href="">圈子设置</a>
                            </li>
                            <li>
                                <a href="">成员头衔管理</a>
                            </li>
                            <li>
                                <a href="">圈子分类管理</a>
                            </li>
                            <li>
                                <a href="">圈子管理</a>
                            </li>
                            <li>
                                <a href="">圈子话题管理</a>
                            </li>
                            <li>
                                <a href="">圈子成员管理</a>
                            </li>
                            <li>
                                <a href="">圈子举报管理</a>
                            </li>
                            <li>
                                <a href="">圈子首页管理</a>
                            </li>
                            <li>
                                <a href="">更新圈子缓存</a>
                            </li>
                        </ul>
                    </li>
                </ul>

            </div>

        </div>

        <div class="main-content">

            <!-- User Info, Notifications and Menu Bar -->
            <nav class="navbar user-info-navbar" role="navigation">

                <!-- Left links for user info navbar -->
                <ul class="user-info-menu left-links list-inline list-unstyled">

                    <li class="hidden-sm hidden-xs">
                        <a href="#" data-toggle="sidebar">
                            <i class="fa-bars"></i>
                        </a>
                    </li>

                    <li class="dropdown hover-line">
                        <a href="#" data-toggle="dropdown">
                            <i class="fa-envelope-o"></i>
                            <span class="badge badge-green">15</span>
                        </a>

                        <ul class="dropdown-menu messages">
                            <li>

                                <ul class="dropdown-menu-list list-unstyled ps-scrollbar">

                                    <li class="active"><!-- "active" class means message is unread -->
                                        <a href="#">
											<span class="line">
												<strong>Luc Chartier</strong>
												<span class="light small">- yesterday</span>
											</span>

                                            <span class="line desc small">
												This ain’t our first item, it is the best of the rest.
											</span>
                                        </a>
                                    </li>

                                    <li class="active">
                                        <a href="#">
											<span class="line">
												<strong>Salma Nyberg</strong>
												<span class="light small">- 2 days ago</span>
											</span>

                                            <span class="line desc small">
												Oh he decisively impression attachment friendship so if everything.
											</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
											<span class="line">
												Hayden Cartwright
												<span class="light small">- a week ago</span>
											</span>

                                            <span class="line desc small">
												Whose her enjoy chief new young. Felicity if ye required likewise so doubtful.
											</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
											<span class="line">
												Sandra Eberhardt
												<span class="light small">- 16 days ago</span>
											</span>

                                            <span class="line desc small">
												On so attention necessary at by provision otherwise existence direction.
											</span>
                                        </a>
                                    </li>

                                    <!-- Repeated -->

                                    <li class="active"><!-- "active" class means message is unread -->
                                        <a href="#">
											<span class="line">
												<strong>Luc Chartier</strong>
												<span class="light small">- yesterday</span>
											</span>

                                            <span class="line desc small">
												This ain’t our first item, it is the best of the rest.
											</span>
                                        </a>
                                    </li>

                                    <li class="active">
                                        <a href="#">
											<span class="line">
												<strong>Salma Nyberg</strong>
												<span class="light small">- 2 days ago</span>
											</span>

                                            <span class="line desc small">
												Oh he decisively impression attachment friendship so if everything.
											</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
											<span class="line">
												Hayden Cartwright
												<span class="light small">- a week ago</span>
											</span>

                                            <span class="line desc small">
												Whose her enjoy chief new young. Felicity if ye required likewise so doubtful.
											</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
											<span class="line">
												Sandra Eberhardt
												<span class="light small">- 16 days ago</span>
											</span>

                                            <span class="line desc small">
												On so attention necessary at by provision otherwise existence direction.
											</span>
                                        </a>
                                    </li>

                                </ul>

                            </li>

                            <li class="external">
                                <a href="blank-sidebar.html">
                                    <span>All Messages</span>
                                    <i class="fa-link-ext"></i>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown hover-line">
                        <a href="#" data-toggle="dropdown">
                            <i class="fa-bell-o"></i>
                            <span class="badge badge-purple">7</span>
                        </a>

                        <ul class="dropdown-menu notifications">
                            <li class="top">
                                <p class="small">
                                    <a href="#" class="pull-right">Mark all Read</a>
                                    You have <strong>3</strong> new notifications.
                                </p>
                            </li>

                            <li>
                                <ul class="dropdown-menu-list list-unstyled ps-scrollbar">
                                    <li class="active notification-success">
                                        <a href="#">
                                            <i class="fa-user"></i>

                                            <span class="line">
												<strong>New user registered</strong>
											</span>

                                            <span class="line small time">
												30 seconds ago
											</span>
                                        </a>
                                    </li>

                                    <li class="active notification-secondary">
                                        <a href="#">
                                            <i class="fa-lock"></i>

                                            <span class="line">
												<strong>Privacy settings have been changed</strong>
											</span>

                                            <span class="line small time">
												3 hours ago
											</span>
                                        </a>
                                    </li>

                                    <li class="notification-primary">
                                        <a href="#">
                                            <i class="fa-thumbs-up"></i>

                                            <span class="line">
												<strong>Someone special liked this</strong>
											</span>

                                            <span class="line small time">
												2 minutes ago
											</span>
                                        </a>
                                    </li>

                                    <li class="notification-danger">
                                        <a href="#">
                                            <i class="fa-calendar"></i>

                                            <span class="line">
												John cancelled the event
											</span>

                                            <span class="line small time">
												9 hours ago
											</span>
                                        </a>
                                    </li>

                                    <li class="notification-info">
                                        <a href="#">
                                            <i class="fa-database"></i>

                                            <span class="line">
												The server is status is stable
											</span>

                                            <span class="line small time">
												yesterday at 10:30am
											</span>
                                        </a>
                                    </li>

                                    <li class="notification-warning">
                                        <a href="#">
                                            <i class="fa-envelope-o"></i>

                                            <span class="line">
												New comments waiting approval
											</span>

                                            <span class="line small time">
												last week
											</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="external">
                                <a href="#">
                                    <span>View all notifications</span>
                                    <i class="fa-link-ext"></i>
                                </a>
                            </li>
                        </ul>
                    </li>

                </ul>


                <!-- Right links for user info navbar -->
                <ul class="user-info-menu right-links list-inline list-unstyled">

                    <li class="search-form"><!-- You can add "always-visible" to show make the search input visible -->

                        <form method="get" action="extra-search.html">
                            <input type="text" name="s" class="form-control search-field" placeholder="Type to search..." />

                            <button type="submit" class="btn btn-link">
                                <i class="linecons-search"></i>
                            </button>
                        </form>

                    </li>

                    <li class="dropdown user-profile">
                        <a href="#" data-toggle="dropdown">
                            <img src="{{asset('assets/images/user-4.png')}}" alt="user-image" class="img-circle img-inline userpic-32" width="28" />
                            <span>
								Arlind Nushi
								<i class="fa-angle-down"></i>
							</span>
                        </a>

                        <ul class="dropdown-menu user-profile-menu list-unstyled">
                            <li>
                                <a href="#edit-profile">
                                    <i class="fa-edit"></i>
                                    New Post
                                </a>
                            </li>
                            <li>
                                <a href="#settings">
                                    <i class="fa-wrench"></i>
                                    Settings
                                </a>
                            </li>
                            <li>
                                <a href="#profile">
                                    <i class="fa-user"></i>
                                    Profile
                                </a>
                            </li>
                            <li>
                                <a href="#help">
                                    <i class="fa-info"></i>
                                    Help
                                </a>
                            </li>
                            <li class="last">
                                <a href="extra-lockscreen.html">
                                    <i class="fa-lock"></i>
                                    Logout
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" data-toggle="chat">
                            <i class="fa-comments-o"></i>
                        </a>
                    </li>
                </ul>
            </nav>
            @yield('content2')
            <footer class="main-footer sticky footer-type-1">

                <div class="footer-inner">

                    <!-- Add your copyright text here -->
                    <div class="footer-text">
                        &copy; 2014
                        <strong>Xenon</strong>
                        More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a>
                    </div>


                    <!-- Go to Top Link, just add rel="go-top" to any link to add this functionality -->
                    <div class="go-up">

                        <a href="#" rel="go-top">
                            <i class="fa-angle-up"></i>
                        </a>

                    </div>

                </div>

            </footer>
        </div>


        <!-- start: Chat Section -->
        <div id="chat" class="fixed">

            <div class="chat-inner">


                <h2 class="chat-header">
                    <a href="#" class="chat-close" data-toggle="chat">
                        <i class="fa-plus-circle rotate-45deg"></i>
                    </a>

                    Chat
                    <span class="badge badge-success is-hidden">0</span>
                </h2>

                <script type="text/javascript">
                    // Here is just a sample how to open chat conversation box
                    jQuery(document).ready(function($)
                    {
                        var $chat_conversation = $(".chat-conversation");

                        $(".chat-group a").on('click', function(ev)
                        {
                            ev.preventDefault();

                            $chat_conversation.toggleClass('is-open');

                            $(".chat-conversation textarea").trigger('autosize.resize').focus();
                        });

                        $(".conversation-close").on('click', function(ev)
                        {
                            ev.preventDefault();
                            $chat_conversation.removeClass('is-open');
                        });
                    });
                </script>


                <div class="chat-group">
                    <strong>Favorites</strong>

                    <a href="#"><span class="user-status is-online"></span> <em>Catherine J. Watkins</em></a>
                    <a href="#"><span class="user-status is-online"></span> <em>Nicholas R. Walker</em></a>
                    <a href="#"><span class="user-status is-busy"></span> <em>Susan J. Best</em></a>
                    <a href="#"><span class="user-status is-idle"></span> <em>Fernando G. Olson</em></a>
                    <a href="#"><span class="user-status is-offline"></span> <em>Brandon S. Young</em></a>
                </div>


                <div class="chat-group">
                    <strong>Work</strong>

                    <a href="#"><span class="user-status is-busy"></span> <em>Rodrigo E. Lozano</em></a>
                    <a href="#"><span class="user-status is-offline"></span> <em>Robert J. Garcia</em></a>
                    <a href="#"><span class="user-status is-offline"></span> <em>Daniel A. Pena</em></a>
                </div>


                <div class="chat-group">
                    <strong>Other</strong>

                    <a href="#"><span class="user-status is-online"></span> <em>Dennis E. Johnson</em></a>
                    <a href="#"><span class="user-status is-online"></span> <em>Stuart A. Shire</em></a>
                    <a href="#"><span class="user-status is-online"></span> <em>Janet I. Matas</em></a>
                    <a href="#"><span class="user-status is-online"></span> <em>Mindy A. Smith</em></a>
                    <a href="#"><span class="user-status is-busy"></span> <em>Herman S. Foltz</em></a>
                    <a href="#"><span class="user-status is-busy"></span> <em>Gregory E. Robie</em></a>
                    <a href="#"><span class="user-status is-busy"></span> <em>Nellie T. Foreman</em></a>
                    <a href="#"><span class="user-status is-busy"></span> <em>William R. Miller</em></a>
                    <a href="#"><span class="user-status is-idle"></span> <em>Vivian J. Hall</em></a>
                    <a href="#"><span class="user-status is-offline"></span> <em>Melinda A. Anderson</em></a>
                    <a href="#"><span class="user-status is-offline"></span> <em>Gary M. Mooneyham</em></a>
                    <a href="#"><span class="user-status is-offline"></span> <em>Robert C. Medina</em></a>
                    <a href="#"><span class="user-status is-offline"></span> <em>Dylan C. Bernal</em></a>
                    <a href="#"><span class="user-status is-offline"></span> <em>Marc P. Sanborn</em></a>
                    <a href="#"><span class="user-status is-offline"></span> <em>Kenneth M. Rochester</em></a>
                    <a href="#"><span class="user-status is-offline"></span> <em>Rachael D. Carpenter</em></a>
                </div>

            </div>

            <!-- conversation template -->
            <div class="chat-conversation">

                <div class="conversation-header">
                    <a href="#" class="conversation-close">
                        &times;
                    </a>

                    <span class="user-status is-online"></span>
                    <span class="display-name">Arlind Nushi</span>
                    <small>Online</small>
                </div>

                <ul class="conversation-body">
                    <li>
                        <span class="user">Arlind Nushi</span>
                        <span class="time">09:00</span>
                        <p>Are you here?</p>
                    </li>
                    <li class="odd">
                        <span class="user">Brandon S. Young</span>
                        <span class="time">09:25</span>
                        <p>This message is pre-queued.</p>
                    </li>
                    <li>
                        <span class="user">Brandon S. Young</span>
                        <span class="time">09:26</span>
                        <p>Whohoo!</p>
                    </li>
                    <li class="odd">
                        <span class="user">Arlind Nushi</span>
                        <span class="time">09:27</span>
                        <p>Do you like it?</p>
                    </li>
                </ul>

                <div class="chat-textarea">
                    <textarea class="form-control autogrow" placeholder="Type your message"></textarea>
                </div>

            </div>

        </div>
        <!-- end: Chat Section -->


    </div>
@endsection
