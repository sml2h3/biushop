@extends('admin.index')
    @section('content2')
        <div class="page-title">

            <div class="title-env">
                <h1 class="title">系统设置</h1>
                <p class="description">完成系统设置，使你的站点与众不同吧</p>
            </div>

            <div class="breadcrumb-env">

                <ol class="breadcrumb bc-1">
                    <li>
                        <a href="index"><i class="fa-home"></i>控制台</a>
                    </li>
                    <li class="active">
                        <strong>站点设置</strong>
                    </li>
                </ol>

            </div>

        </div>
        <div class="row">
                <div class="col-md-12">
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a href="#home" data-toggle="tab">
                                <span class="visible-xs"><i class="fa-home"></i></span>
                                <span class="hidden-xs">站点设置</span>
                            </a>
                        </li>
                        <li>
                            <a href="#profile" data-toggle="tab">
                                <span class="visible-xs"><i class="fa-user"></i></span>
                                <span class="hidden-xs">物流追踪</span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="home">
                            <form action="admin/setting" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <strong>网站名称:</strong>
                                    <input type="text" class="form-control" placeholder="网站名称">
                                    <p>网站名称，将显示在前台顶部欢迎信息等位置</p>
                                </div>
                                <div class="form-group">
                                    <strong>网站Logo:</strong>
                                    <input type="file" class="form-control">
                                    <p>默认网站LOGO,通用头部显示，最佳显示尺寸为240*60像素</p>
                                </div>
                                <div class="form-group">
                                    <strong>WAP手机端LOGO:</strong>
                                    <input type="file" class="form-control" placeholder="WAP手机端LOGO">
                                    <p>WAP手机端LOGO,通用头部显示，最佳显示尺寸为116*43像素</p>
                                </div>
                                <div class="form-group">
                                    <strong>微信二维码:</strong>
                                    <input type="file" class="form-control">
                                    <p>放在网站右上角顶部及首页底部右下角,最佳显示尺寸为66*66像素</p>
                                </div>
                                <div class="form-group">
                                    <strong>ICP证书号:</strong>
                                    <input type="text" class="form-control" placeholder="ICP证书号">
                                    <p>前台页面底部可以显示 ICP 备案信息，如果网站已备案，在此输入你的授权码，它将显示在前台页面底部，如果没有请留空</p>
                                </div>
                                <div class="form-group">
                                    <strong>平台客服联系电话:</strong>
                                    <input type="text" class="form-control" placeholder="平台客服联系电话">
                                    <p>商家中心右下侧显示，方便商家遇到问题时咨询，多个请用半角逗号 "," 隔开</p>
                                </div>
                                <div class="form-group">
                                    <strong>前台客服电话:</strong>
                                    <input type="text" class="form-control" placeholder="前台客服电话">
                                    <p>显示在网站的底部</p>
                                </div>
                                <dic class="form-group">
                                    <strong>电子邮件:</strong>
                                    <input type="text" class="form-control" placeholder="电子邮件">
                                    <p>商家中心右下侧显示，方便商家遇到问题时咨询</p>
                                </dic>
                                <div class="form-group">
                                    <strong>版权底部信息:</strong>
                                    <input type="text" class="form-control" placeholder="版权底部信息">
                                    <p>前台页面底部可以显示版权信息或第三方统计</p>
                                </div>
                                <div class="form-group">
                                    <strong>站点状态:</strong><br>
                                    <input type="checkbox" name="sitestatus" class="lcs_check" autocomplete="off" checked/>
                                    <p>可暂时将站点关闭，其他人无法访问，但不影响管理员访问后台</p>
                                </div>
                                <div class="form-group">
                                    <strong>关闭原因:</strong>
                                    <textarea class="form-control" placeholder="关闭原因"></textarea>
                                    <p>当网站处于关闭状态时，关闭原因将显示在前台</p>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary" type="submit">提交</button>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane" id="profile">
                            <div class="form-group">
                                <strong>是否启用物流跟踪功能:</strong><br><br>
                                <input type="checkbox" name="wuliu" class="lcs_check" autocomplete="off"/>
                                <p>开启后，可通过快递100实现物流跟踪查询</p>
                            </div>
                            <div class="form-group">
                                <strong>物流跟踪密钥:</strong>
                                <input type="text" class="form-control" placeholder="物流跟踪密钥"><br>
                                <button type="button" class="btn btn-info" onclick="javascript:window.open('http://www.kuaidi100.com/openapi/applyapi.shtml');">快递100物流申请秘钥</button>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <script>
        </script>
        @endsection