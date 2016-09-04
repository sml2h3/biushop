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
                        <a href="admin/index" class="logo-expanded">
                            <img src="{{asset('assets/images/logo@2x.png')}}" width="80" alt="" />
                        </a>

                        <a href="admin/index" class="logo-collapsed">
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
                                <a href="index">欢迎页面</a>
                            </li>
                            <li>
                                <a href="setting">站点设置</a>
                            </li>
                            <li>
                                <a href="users">会员管理</a>
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
            @yield('content2')
            <footer class="main-footer sticky footer-type-1">

                <div class="footer-inner">

                    <!-- Add your copyright text here -->
                    <div class="footer-text">
                        &copy; 2014
                        <strong>天津蚁尚科技有限公司</strong>
                        更多请咨询 <a href="http://www.esun61.com/" target="_blank" title="天津蚁尚科技有限公司">天津蚁尚科技有限公司</a>
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
    </div>
@endsection
