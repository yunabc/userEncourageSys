<?php
class SpecialTest extends SpecialPage{


    public function __construct(){
        parent::__construct('Test', 'test');
    }

    protected function getGroupName() {

        return 'pages';
    }

    public function execute($par) {

        global $wgOut;

        $wgOut->addModules( 'ext.test.test.css' );
        $wgOut->addModules( 'ext.test.test.js' );
// <i class="user-sex female"></i>
        $html = <<<EOF
        <!-- 将这段话添加到heade结束标签之前  开始-->
        <script type="text/javascript">
             window.addEventListener('DOMContentLoaded', function (){
                  document.addEventListener('touchstart', function (){return false}, true)
             }, true);

        </script>
        <!-- 将这段话添加到heade结束标签之前  结束-->
        <div class=" personal-info fn-clear col-sm-12">
            <div class="fn-clear">
            <div class="col-sm-10 info-r fn-clear">
                <div class="info-user  fn-clear">
                    <div>
                         <a href="javascript:;" class="user-login"><img src="http://share-ued.enjoyf.com/UED/%E6%9D%8E%E7%BA%A2%E8%89%B3/pc%E7%AB%AF/%E4%B8%AA%E4%BA%BA%E4%B8%AD%E5%BF%83%EF%BC%88%E5%93%8D%E5%BA%94%E5%BC%8F%EF%BC%89/images/user-int-logo.png" alt="">
                        </a>
                        <div class="user-intro-con">
                            <cite class="user-des fn-clear">
                                <font class="nickname">admin</font>
                                <a href="javascript:;" class="link-set">设置</a>
                            </cite>
                            <a href="javascript:;" class="user-intr">一句话介绍下自己吧！</a>
                        </div>
                    </div>
                </div>
                <a href="javascript:;" class="info-edit-num ">
                    <cite class="count-num">
                        <font><i>0</i>次</font>
                        总共编辑
                    </cite>
                    <cite class="day-num">
                        <font><i>0</i>次</font>
                        今日编辑
                    </cite>
                </a>
            
            </div>
            <div class="col-sm-2 look-con fn-clear">
                <a href="javascript:;" class="follow-num"><i>0</i>关注</a>
                <a href="javascript:;" class="fans-num"><i>0</i>粉丝</a>
                <a href="javascript:;" class="zan-num un-link"><i>0</i>被赞</a>
                <a href="javascript:;" class="dis-num un-link"><i>0</i>被评</a>
            </div>
            </div>
        </div>
        <div class="">
            <div  class="col-md-9">
                <div id="main" class="pag-hor-20 tab-box">
                     <div class="trends-nav fn-clear tab-tit">
                        <a href="javascript:;" class="on" >我的WIKI<i></i></a>
                        <a href="javascript:;">我的动态<i></i></a>
                        <a href="javascript:;">好友动态<i></i></a>
                    </div>
                    <div class="tab-con">
                        <!--我的WIKI 开始-->
                        <div class="trends-con on">
                            <div class="no-date">您还没有关注，贡献或管理任何WIKI</div>
                            <!--管理WIKI  开始-->
                            <div class="manage-list">
                                <h3 class="list-tit glwiki-tit"><i></i>管理Wiki</h3>
                                <ul class="manage-item  fn-clear">
                                    <li class="col-sm-4">
                                        <a href="javascript:;" class="fn-clear">
                                            <b class="manager web-hide">管理员</b>
                                            <div class="col-sm-12">
                                                 <cite>
                                                    <img src="http://share-ued.enjoyf.com/UED/%E6%9D%8E%E7%BA%A2%E8%89%B3/pc%E7%AB%AF/%E4%B8%AA%E4%BA%BA%E4%B8%AD%E5%BF%83%EF%BC%88%E5%93%8D%E5%BA%94%E5%BC%8F%EF%BC%89/img/wiki-icon.png" alt="">
                                                    <i>管理员</i>
                                                </cite>
                                            </div>
                                            <div class="manager-text col-sm-12">
                                                <font>坦克大战WIKI</font>
                                                <span>页面总数量：40,302 </span>
                                                <span>编辑总次数：2,800  </span>
                                            </div>
                                            <i class="count-icon web-hide"></i>
                                            <div class="web-hide add-edit">
                                                <span>关注人数：40,302 </span>
                                                <span>编辑人数：2,800  </span>
                                                <span>昨日编辑：2,800  </span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="col-sm-4">
                                       <a href="javascript:;" class="fn-clear">
                                            <b class="manager web-hide">管理员</b>
                                            <div class="col-sm-12">
                                                 <cite>
                                                    <img src="http://share-ued.enjoyf.com/UED/%E6%9D%8E%E7%BA%A2%E8%89%B3/pc%E7%AB%AF/%E4%B8%AA%E4%BA%BA%E4%B8%AD%E5%BF%83%EF%BC%88%E5%93%8D%E5%BA%94%E5%BC%8F%EF%BC%89/img/wiki-icon.png" alt="">
                                                    <i>管理员</i>
                                                </cite>
                                            </div>
                                            <div class="manager-text col-sm-12">
                                                <font>坦克大战WIKI</font>
                                                <span>页面总数量：40,302 </span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="col-sm-4">
                                        <a href="javascript:;" class="fn-clear">
                                            <b class="manager web-hide">管理员</b>
                                            <div class="col-sm-12">
                                                 <cite>
                                                    <img src="http://share-ued.enjoyf.com/UED/%E6%9D%8E%E7%BA%A2%E8%89%B3/pc%E7%AB%AF/%E4%B8%AA%E4%BA%BA%E4%B8%AD%E5%BF%83%EF%BC%88%E5%93%8D%E5%BA%94%E5%BC%8F%EF%BC%89/img/wiki-icon.png" alt="">
                                                    <i>管理员</i>
                                                </cite>
                                            </div>
                                            <div class="manager-text col-sm-12">
                                                <font>坦克大战WIKI</font>
                                                <span>页面总数量：40,302 </span>
                                                <span>编辑总次数：2,800  </span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <div class="more-con">
                                    <a href="javascript:;">点击加载更多...</a>
                                </div>
                            </div>
                            <!--管理WIKI 结束-->
                            <!--贡献的wiki  开始 -->
                            <div class="tj-list " >
                                <h3 class="list-tit gxwiki-tit"><i></i>贡献的wiki</h3>
                                <ul class="list-item fn-clear ">
                                    <li class="col-sm-4">
                                        <a href="javascript:;">
                                            <cite>
                                                <img src="http://share-ued.enjoyf.com/UED/%E6%9D%8E%E7%BA%A2%E8%89%B3/pc%E7%AB%AF/%E4%B8%AA%E4%BA%BA%E4%B8%AD%E5%BF%83%EF%BC%88%E5%93%8D%E5%BA%94%E5%BC%8F%EF%BC%89/img/wiki-icon.png" alt="img">
                                            </cite>
                                            <span>
                                                <font>克鲁赛德战记WIKI</font>
                                                <b>贡献总数：40,000</b>
                                                <b>昨日编辑：1,000</b>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="col-sm-4">
                                        <a href="javascript:;">
                                            <cite>
                                                 <img src="http://share-ued.enjoyf.com/UED/%E6%9D%8E%E7%BA%A2%E8%89%B3/pc%E7%AB%AF/%E4%B8%AA%E4%BA%BA%E4%B8%AD%E5%BF%83%EF%BC%88%E5%93%8D%E5%BA%94%E5%BC%8F%EF%BC%89/img/wiki-icon.png" alt="img">
                                            </cite>
                                            <span>
                                                <font>克鲁赛德战记WIKI</font>
                                                <b>贡献总数：40,000</b>
                                                <b>昨日编辑：1,000</b>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="col-sm-4">
                                        <a href="javascript:;">
                                            <cite>
                                                <img src="http://share-ued.enjoyf.com/UED/%E6%9D%8E%E7%BA%A2%E8%89%B3/pc%E7%AB%AF/%E4%B8%AA%E4%BA%BA%E4%B8%AD%E5%BF%83%EF%BC%88%E5%93%8D%E5%BA%94%E5%BC%8F%EF%BC%89/img/wiki-icon.png" alt="img">
                                            </cite>
                                            <span>
                                                <font>克鲁赛德战记WIKI</font>
                                                <b>贡献总数：40,000</b>
                                                <b>昨日编辑：1,000</b>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="col-sm-4">
                                        <a href="javascript:;">
                                            <cite>
                                                <img src="http://share-ued.enjoyf.com/UED/%E6%9D%8E%E7%BA%A2%E8%89%B3/pc%E7%AB%AF/%E4%B8%AA%E4%BA%BA%E4%B8%AD%E5%BF%83%EF%BC%88%E5%93%8D%E5%BA%94%E5%BC%8F%EF%BC%89/img/wiki-icon.png" alt="img">
                                            </cite>
                                            <span>
                                                <font>克鲁赛德战记WIKI</font>
                                                <b>贡献总数：40,000</b>
                                                <b>昨日编辑：1,000</b>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="col-sm-4">
                                        <a href="javascript:;">
                                            <cite>
                                                 <img src="http://share-ued.enjoyf.com/UED/%E6%9D%8E%E7%BA%A2%E8%89%B3/pc%E7%AB%AF/%E4%B8%AA%E4%BA%BA%E4%B8%AD%E5%BF%83%EF%BC%88%E5%93%8D%E5%BA%94%E5%BC%8F%EF%BC%89/img/wiki-icon.png" alt="img">
                                            </cite>
                                            <span>
                                                <font>克鲁赛德战记WIKI</font>
                                                <b>贡献总数：40,000</b>
                                                <b>昨日编辑：1,000</b>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="col-sm-4">
                                        <a href="javascript:;">
                                            <cite>
                                                <img src="http://share-ued.enjoyf.com/UED/%E6%9D%8E%E7%BA%A2%E8%89%B3/pc%E7%AB%AF/%E4%B8%AA%E4%BA%BA%E4%B8%AD%E5%BF%83%EF%BC%88%E5%93%8D%E5%BA%94%E5%BC%8F%EF%BC%89/img/wiki-icon.png" alt="img">
                                            </cite>
                                            <span>
                                                <font>克鲁赛德战记WIKI</font>
                                                <b>贡献总数：40,000</b>
                                                <b>昨日编辑：1,000</b>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="col-sm-4">
                                        <a href="javascript:;">
                                            <cite>
                                                 <img src="http://share-ued.enjoyf.com/UED/%E6%9D%8E%E7%BA%A2%E8%89%B3/pc%E7%AB%AF/%E4%B8%AA%E4%BA%BA%E4%B8%AD%E5%BF%83%EF%BC%88%E5%93%8D%E5%BA%94%E5%BC%8F%EF%BC%89/img/wiki-icon.png" alt="img">
                                            </cite>
                                            <span>
                                                <font>克鲁赛德战记WIKI</font>
                                                <b>贡献总数：40,000</b>
                                                <b>昨日编辑：1,000</b>
                                            </span>
                                        </a>
                                    </li>
                                   <li class="col-sm-4">
                                        <a href="javascript:;">
                                            <cite>
                                                <img src="http://share-ued.enjoyf.com/UED/%E6%9D%8E%E7%BA%A2%E8%89%B3/pc%E7%AB%AF/%E4%B8%AA%E4%BA%BA%E4%B8%AD%E5%BF%83%EF%BC%88%E5%93%8D%E5%BA%94%E5%BC%8F%EF%BC%89/img/wiki-icon.png" alt="img">
                                            </cite>
                                            <span>
                                                <font>克鲁赛德战记WIKI</font>
                                                <b>贡献总数：40,000</b>
                                                <b>昨日编辑：1,000</b>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="col-sm-4">
                                        <a href="javascript:;">
                                            <cite>
                                                 <img src="http://share-ued.enjoyf.com/UED/%E6%9D%8E%E7%BA%A2%E8%89%B3/pc%E7%AB%AF/%E4%B8%AA%E4%BA%BA%E4%B8%AD%E5%BF%83%EF%BC%88%E5%93%8D%E5%BA%94%E5%BC%8F%EF%BC%89/img/wiki-icon.png" alt="img">
                                            </cite>
                                            <span>
                                                <font>克鲁赛德战记WIKI</font>
                                                <b>贡献总数：40,000</b>
                                                <b>昨日编辑：1,000</b>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!--贡献的wiki  结束 -->
                            <!--关注的wiki  开始 -->
                            <div class="tj-list ">
                                <h3 class="list-tit gzwiki-tit"><i></i>关注的wiki</h3>
                                <ul class="list-item fn-clear row">
                                    <li class="col-sm-4">
                                        <a href="javascript:;">
                                            <cite>
                                                <img src="http://share-ued.enjoyf.com/UED/%E6%9D%8E%E7%BA%A2%E8%89%B3/pc%E7%AB%AF/%E4%B8%AA%E4%BA%BA%E4%B8%AD%E5%BF%83%EF%BC%88%E5%93%8D%E5%BA%94%E5%BC%8F%EF%BC%89/img/wiki-icon.png" alt="img">
                                            </cite>
                                            <span>
                                                <font>克鲁赛德战记WIKI</font>
                                                <b>页面总数：40,000</b>
                                                <b>昨日编辑：1,000</b>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="col-sm-4">
                                        <a href="javascript:;">
                                            <cite>
                                                 <img src="http://share-ued.enjoyf.com/UED/%E6%9D%8E%E7%BA%A2%E8%89%B3/pc%E7%AB%AF/%E4%B8%AA%E4%BA%BA%E4%B8%AD%E5%BF%83%EF%BC%88%E5%93%8D%E5%BA%94%E5%BC%8F%EF%BC%89/img/wiki-icon.png" alt="img">
                                            </cite>
                                            <span>
                                                <font>克鲁赛德战记WIKI</font>
                                                <b>页面总数：40,000</b>
                                                <b>昨日编辑：1,000</b>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="col-sm-4">
                                        <a href="javascript:;">
                                            <cite>
                                                <img src="http://share-ued.enjoyf.com/UED/%E6%9D%8E%E7%BA%A2%E8%89%B3/pc%E7%AB%AF/%E4%B8%AA%E4%BA%BA%E4%B8%AD%E5%BF%83%EF%BC%88%E5%93%8D%E5%BA%94%E5%BC%8F%EF%BC%89/img/wiki-icon.png" alt="img">
                                            </cite>
                                            <span>
                                                <font>克鲁赛德战记WIKI</font>
                                                <b></b>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="col-sm-4">
                                        <a href="javascript:;">
                                            <cite>
                                                 <img src="http://share-ued.enjoyf.com/UED/%E6%9D%8E%E7%BA%A2%E8%89%B3/pc%E7%AB%AF/%E4%B8%AA%E4%BA%BA%E4%B8%AD%E5%BF%83%EF%BC%88%E5%93%8D%E5%BA%94%E5%BC%8F%EF%BC%89/img/wiki-icon.png" alt="img">
                                            </cite>
                                            <span>
                                                <font>克鲁赛德战记WIKI</font>
                                                <b>页面总数：40,000</b>
                                                <b>昨日编辑：1,000</b>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="col-sm-4">
                                        <a href="javascript:;">
                                            <cite>
                                                <img src="http://share-ued.enjoyf.com/UED/%E6%9D%8E%E7%BA%A2%E8%89%B3/pc%E7%AB%AF/%E4%B8%AA%E4%BA%BA%E4%B8%AD%E5%BF%83%EF%BC%88%E5%93%8D%E5%BA%94%E5%BC%8F%EF%BC%89/img/wiki-icon.png" alt="img">
                                            </cite>
                                            <span>
                                                <font>克鲁赛德战记WIKI</font>
                                                <b></b>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="col-sm-4">
                                        <a href="javascript:;">
                                            <cite>
                                                 <img src="http://share-ued.enjoyf.com/UED/%E6%9D%8E%E7%BA%A2%E8%89%B3/pc%E7%AB%AF/%E4%B8%AA%E4%BA%BA%E4%B8%AD%E5%BF%83%EF%BC%88%E5%93%8D%E5%BA%94%E5%BC%8F%EF%BC%89/img/wiki-icon.png" alt="img">
                                            </cite>
                                            <span>
                                                <font>克鲁赛德战记WIKI</font>
                                                <b>页面总数：40,000</b>
                                                <b>昨日编辑：1,000</b>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!--关注的wiki  结束 -->
                            <!--热门WIKI推荐 开始-->
                            <div class="tj-list " >
                                <h3 class="list-tit hotwiki-tit"><i></i>热门WIKI推荐</h3>
                                <ul class="list-item fn-clear row">
                                    <li class="col-md-4">
                                        <a href="javascript:;">
                                            <cite>
                                                <img src="http://share-ued.enjoyf.com/UED/%E6%9D%8E%E7%BA%A2%E8%89%B3/pc%E7%AB%AF/%E4%B8%AA%E4%BA%BA%E4%B8%AD%E5%BF%83%EF%BC%88%E5%93%8D%E5%BA%94%E5%BC%8F%EF%BC%89/img/wiki-icon.png" alt="img">
                                            </cite>
                                            <span>
                                                <font>克鲁赛德战记WIKI</font>
                                                <b>页面总数：40,000</b>
                                                <b>昨日编辑：1,000</b>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="col-md-4">
                                        <a href="javascript:;">
                                            <cite>
                                                 <img src="http://share-ued.enjoyf.com/UED/%E6%9D%8E%E7%BA%A2%E8%89%B3/pc%E7%AB%AF/%E4%B8%AA%E4%BA%BA%E4%B8%AD%E5%BF%83%EF%BC%88%E5%93%8D%E5%BA%94%E5%BC%8F%EF%BC%89/img/wiki-icon.png" alt="img">
                                            </cite>
                                            <span>
                                                <font>克鲁赛德战记WIKI</font>
                                                <b>页面总数：40,000</b>
                                                <b>昨日编辑：1,000</b>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="col-md-4">
                                        <a href="javascript:;">
                                            <cite>
                                                <img src="http://share-ued.enjoyf.com/UED/%E6%9D%8E%E7%BA%A2%E8%89%B3/pc%E7%AB%AF/%E4%B8%AA%E4%BA%BA%E4%B8%AD%E5%BF%83%EF%BC%88%E5%93%8D%E5%BA%94%E5%BC%8F%EF%BC%89/img/wiki-icon.png" alt="img">
                                            </cite>
                                            <span>
                                                <font>克鲁赛德战记WIKI</font>
                                                <b></b>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <cite>
                                                 <img src="http://share-ued.enjoyf.com/UED/%E6%9D%8E%E7%BA%A2%E8%89%B3/pc%E7%AB%AF/%E4%B8%AA%E4%BA%BA%E4%B8%AD%E5%BF%83%EF%BC%88%E5%93%8D%E5%BA%94%E5%BC%8F%EF%BC%89/img/wiki-icon.png" alt="img">
                                            </cite>
                                            <span>
                                                <font>克鲁赛德战记WIKI</font>
                                                <b>页面总数：40,000</b>
                                                <b>昨日编辑：1,000</b>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <cite>
                                                <img src="http://share-ued.enjoyf.com/UED/%E6%9D%8E%E7%BA%A2%E8%89%B3/pc%E7%AB%AF/%E4%B8%AA%E4%BA%BA%E4%B8%AD%E5%BF%83%EF%BC%88%E5%93%8D%E5%BA%94%E5%BC%8F%EF%BC%89/img/wiki-icon.png" alt="img">
                                            </cite>
                                            <span>
                                                <font>克鲁赛德战记WIKI</font>
                                                <b></b>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <cite>
                                                 <img src="http://share-ued.enjoyf.com/UED/%E6%9D%8E%E7%BA%A2%E8%89%B3/pc%E7%AB%AF/%E4%B8%AA%E4%BA%BA%E4%B8%AD%E5%BF%83%EF%BC%88%E5%93%8D%E5%BA%94%E5%BC%8F%EF%BC%89/img/wiki-icon.png" alt="img">
                                            </cite>
                                            <span>
                                                <font>克鲁赛德战记WIKI</font>
                                                <b>页面总数：40,000</b>
                                                <b>昨日编辑：1,000</b>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <cite>
                                                <img src="http://share-ued.enjoyf.com/UED/%E6%9D%8E%E7%BA%A2%E8%89%B3/pc%E7%AB%AF/%E4%B8%AA%E4%BA%BA%E4%B8%AD%E5%BF%83%EF%BC%88%E5%93%8D%E5%BA%94%E5%BC%8F%EF%BC%89/img/wiki-icon.png" alt="img">
                                            </cite>
                                            <span>
                                                <font>克鲁赛德战记WIKI</font>
                                                <b></b>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <cite>
                                                 <img src="http://share-ued.enjoyf.com/UED/%E6%9D%8E%E7%BA%A2%E8%89%B3/pc%E7%AB%AF/%E4%B8%AA%E4%BA%BA%E4%B8%AD%E5%BF%83%EF%BC%88%E5%93%8D%E5%BA%94%E5%BC%8F%EF%BC%89/img/wiki-icon.png" alt="img">
                                            </cite>
                                            <span>
                                                <font>克鲁赛德战记WIKI</font>
                                                <b>页面总数：40,000</b>
                                                <b>昨日编辑：1,000</b>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <cite>
                                                <img src="http://share-ued.enjoyf.com/UED/%E6%9D%8E%E7%BA%A2%E8%89%B3/pc%E7%AB%AF/%E4%B8%AA%E4%BA%BA%E4%B8%AD%E5%BF%83%EF%BC%88%E5%93%8D%E5%BA%94%E5%BC%8F%EF%BC%89/img/wiki-icon.png" alt="img">
                                            </cite>
                                            <span>
                                                <font>克鲁赛德战记WIKI</font>
                                                <b></b>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <cite>
                                                 <img src="http://share-ued.enjoyf.com/UED/%E6%9D%8E%E7%BA%A2%E8%89%B3/pc%E7%AB%AF/%E4%B8%AA%E4%BA%BA%E4%B8%AD%E5%BF%83%EF%BC%88%E5%93%8D%E5%BA%94%E5%BC%8F%EF%BC%89/img/wiki-icon.png" alt="img">
                                            </cite>
                                            <span>
                                                <font>克鲁赛德战记WIKI</font>
                                                <b>页面总数：40,000</b>
                                                <b>昨日编辑：1,000</b>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <cite>
                                                <img src="http://share-ued.enjoyf.com/UED/%E6%9D%8E%E7%BA%A2%E8%89%B3/pc%E7%AB%AF/%E4%B8%AA%E4%BA%BA%E4%B8%AD%E5%BF%83%EF%BC%88%E5%93%8D%E5%BA%94%E5%BC%8F%EF%BC%89/img/wiki-icon.png" alt="img">
                                            </cite>
                                            <span>
                                                <font>克鲁赛德战记WIKI</font>
                                                <b></b>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <cite>
                                                <img src="http://share-ued.enjoyf.com/UED/%E6%9D%8E%E7%BA%A2%E8%89%B3/pc%E7%AB%AF/%E4%B8%AA%E4%BA%BA%E4%B8%AD%E5%BF%83%EF%BC%88%E5%93%8D%E5%BA%94%E5%BC%8F%EF%BC%89/img/wiki-icon.png" alt="img">
                                            </cite>
                                            <span>
                                                <font>克鲁赛德战记WIKI</font>
                                                <b></b>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <cite>
                                                <img src="http://share-ued.enjoyf.com/UED/%E6%9D%8E%E7%BA%A2%E8%89%B3/pc%E7%AB%AF/%E4%B8%AA%E4%BA%BA%E4%B8%AD%E5%BF%83%EF%BC%88%E5%93%8D%E5%BA%94%E5%BC%8F%EF%BC%89/img/wiki-icon.png" alt="img">
                                            </cite>
                                            <span>
                                                <font>克鲁赛德战记WIKI</font>
                                                <b></b>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <cite>
                                                <img src="http://share-ued.enjoyf.com/UED/%E6%9D%8E%E7%BA%A2%E8%89%B3/pc%E7%AB%AF/%E4%B8%AA%E4%BA%BA%E4%B8%AD%E5%BF%83%EF%BC%88%E5%93%8D%E5%BA%94%E5%BC%8F%EF%BC%89/img/wiki-icon.png" alt="img">
                                            </cite>
                                            <span>
                                                <font>克鲁赛德战记WIKI</font>
                                                <b></b>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <cite>
                                                <img src="http://share-ued.enjoyf.com/UED/%E6%9D%8E%E7%BA%A2%E8%89%B3/pc%E7%AB%AF/%E4%B8%AA%E4%BA%BA%E4%B8%AD%E5%BF%83%EF%BC%88%E5%93%8D%E5%BA%94%E5%BC%8F%EF%BC%89/img/wiki-icon.png" alt="img">
                                            </cite>
                                            <span>
                                                <font>克鲁赛德战记WIKI</font>
                                                <b></b>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="more-con">
                                    <a href="javascript:;">点击加载更多...</a>
                                </div>
                            </div>
                            <!--热门WIKI推荐 结束-->
                        </div>
                        <!--我的动态 开始-->
                        <div class="my-trends-con" >
                            <ul class="my-trends-list">
                                <li>
                                    <p>
                                        <i>我</i>编辑了页面<a href="javascript:;">坦克指挥官页面</a>
                                        <b class="time-stamp">2016年1月28日 18:27</b>
                                    </p>
                                </li>
                                 <li>
                                    <p>
                                        <i>我</i>编辑了页面<a href="javascript:;">坦克指挥官页面</a>
                                        <b class="time-stamp">2016年1月28日 18:27</b>
                                    </p>
                                </li>
                                 <li>
                                    <p>
                                        <i>我</i>编辑了页面<a href="javascript:;">坦克指挥官页面</a>
                                        <b class="time-stamp">2016年1月28日 18:27</b>
                                    </p>
                                </li>
                            </ul>
                        </div>
                        <!-- 好友动态 开始-->
                        <div class="friend-trends-con" >
                            <ul class="friend-trends-list">
                                <li class="fn-clear">
                                    <div class="user-img">
                                         <cite>
                                            <img src="http://share-ued.enjoyf.com/UED/%E6%9D%8E%E7%BA%A2%E8%89%B3/pc%E7%AB%AF/%E4%B8%AA%E4%BA%BA%E4%B8%AD%E5%BF%83%EF%BC%88%E5%93%8D%E5%BA%94%E5%BC%8F%EF%BC%89/img/user-icon-l.jpg" alt="img">
                                        </cite>
                                    </div>
                                    <div class="col-sm-12 user-text">
                                        <p ><i class="user-name">用户昵称</i>编辑了页面<a href="javascript:;">全民飞机大战</a><b class="time-stamp">2016年1月28日 18:27</b></p>
                                    </div>
                                </li>
                                <li class="fn-clear">
                                    <div class="user-img">
                                         <cite>
                                            <img src="http://share-ued.enjoyf.com/UED/%E6%9D%8E%E7%BA%A2%E8%89%B3/pc%E7%AB%AF/%E4%B8%AA%E4%BA%BA%E4%B8%AD%E5%BF%83%EF%BC%88%E5%93%8D%E5%BA%94%E5%BC%8F%EF%BC%89/img/user-icon-l.jpg" alt="img">
                                        </cite>
                                    </div>
                                    <div class="col-sm-12 user-text">
                                        <p ><i class="user-name">用户昵称</i>编辑了页面<a href="javascript:;">全民飞机大战</a><b class="time-stamp">2016年1月28日 18:27</b></p>
                                    </div>
                                </li>
                                <li class="fn-clear">
                                    <div class="user-img">
                                         <cite>
                                            <img src="http://share-ued.enjoyf.com/UED/%E6%9D%8E%E7%BA%A2%E8%89%B3/pc%E7%AB%AF/%E4%B8%AA%E4%BA%BA%E4%B8%AD%E5%BF%83%EF%BC%88%E5%93%8D%E5%BA%94%E5%BC%8F%EF%BC%89/img/user-icon-l.jpg" alt="img">
                                        </cite>
                                    </div>
                                    <div class="col-sm-12 user-text">
                                        <p ><i class="user-name">用户昵称</i>编辑了页面<a href="javascript:;">全民飞机大战</a><b class="time-stamp">2016年1月28日 18:27</b></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 web-hide ">
                <div id="sidebar">
                    <!--大神推荐  开始-->
                     <div class="int-tj fn-clear pag-hor-20">
                        <h3>大神推荐 <cite class="change-icon fn-right"><i></i>换一换</cite></h3>
                        <ul class="int-tj-list">
                            <li >
                                <cite><img src="http://share-ued.enjoyf.com/UED/%E6%9D%8E%E7%BA%A2%E8%89%B3/pc%E7%AB%AF/%E4%B8%AA%E4%BA%BA%E4%B8%AD%E5%BF%83%EF%BC%88%E5%93%8D%E5%BA%94%E5%BC%8F%EF%BC%89/images/user-int-logo.png" alt="img"></cite>
                                <span class="">
                                    <font>昵称</font>
                                    <b>自我描述</b>
                                </span>
                                <i class="followed">已关注</i>
                            </li>
                            <li >
                                <cite><img src="http://share-ued.enjoyf.com/UED/%E6%9D%8E%E7%BA%A2%E8%89%B3/pc%E7%AB%AF/%E4%B8%AA%E4%BA%BA%E4%B8%AD%E5%BF%83%EF%BC%88%E5%93%8D%E5%BA%94%E5%BC%8F%EF%BC%89/images/user-int-logo.png" alt="img"></cite>
                                <span class="">
                                    <font>昵称大法师是打发斯蒂芬</font>
                                    <b>自我描述</b>
                                </span>
                                <i>关注</i>
                            </li>
                            <li >
                                <cite><img src="http://share-ued.enjoyf.com/UED/%E6%9D%8E%E7%BA%A2%E8%89%B3/pc%E7%AB%AF/%E4%B8%AA%E4%BA%BA%E4%B8%AD%E5%BF%83%EF%BC%88%E5%93%8D%E5%BA%94%E5%BC%8F%EF%BC%89/images/user-int-logo.png" alt="img"></cite>
                                <span class="">
                                    <font>昵称大法师是打发斯蒂芬</font>
                                    <b>自我描述</b>
                                </span>
                                <i>关注</i>
                            </li>
                            <li >
                                <cite><img src="http://share-ued.enjoyf.com/UED/%E6%9D%8E%E7%BA%A2%E8%89%B3/pc%E7%AB%AF/%E4%B8%AA%E4%BA%BA%E4%B8%AD%E5%BF%83%EF%BC%88%E5%93%8D%E5%BA%94%E5%BC%8F%EF%BC%89/images/user-int-logo.png" alt="img"></cite>
                                <span class="">
                                    <font>昵称大法师是打发斯蒂芬</font>
                                    <b>自我描述撒旦发生的房间打飞机</b>
                                </span>
                                <i>关注</i>
                            </li>
                        </ul>
                    </div>
                    <!--大神推荐  结束-->
                    <!--我的关注  开始-->
                    <div class="fans-box fn-clear pag-hor-20">
                        <h3>我的关注<a href="javascript:;" class="fn-right">更多</a></h3>
                        <div class="row fans-con">
                            <a href="javascript:;" class="col-sm-3">
                                <cite>
                                    <img src="http://share-ued.enjoyf.com/UED/%E6%9D%8E%E7%BA%A2%E8%89%B3/pc%E7%AB%AF/%E4%B8%AA%E4%BA%BA%E4%B8%AD%E5%BF%83%EF%BC%88%E5%93%8D%E5%BA%94%E5%BC%8F%EF%BC%89/img/user-icon-l.jpg" alt="img">
                                </cite>
                                <font>用户名称啦啊</font>
                            </a>
                            <a href="javascript:;" class="col-sm-3">
                                <cite>
                                    <img src="http://share-ued.enjoyf.com/UED/%E6%9D%8E%E7%BA%A2%E8%89%B3/pc%E7%AB%AF/%E4%B8%AA%E4%BA%BA%E4%B8%AD%E5%BF%83%EF%BC%88%E5%93%8D%E5%BA%94%E5%BC%8F%EF%BC%89/img/user-icon-l.jpg" alt="img">
                                </cite>
                                <font>用户名称啦啊</font>
                            </a>
                            <a href="javascript:;" class="col-sm-3">
                                <cite>
                                    <img src="http://share-ued.enjoyf.com/UED/%E6%9D%8E%E7%BA%A2%E8%89%B3/pc%E7%AB%AF/%E4%B8%AA%E4%BA%BA%E4%B8%AD%E5%BF%83%EF%BC%88%E5%93%8D%E5%BA%94%E5%BC%8F%EF%BC%89/img/user-icon-l.jpg" alt="img">
                                </cite>
                                <font>用户名称啦啊</font>
                            </a>
                            <a href="javascript:;" class="col-sm-3">
                                <cite>
                                    <img src="http://share-ued.enjoyf.com/UED/%E6%9D%8E%E7%BA%A2%E8%89%B3/pc%E7%AB%AF/%E4%B8%AA%E4%BA%BA%E4%B8%AD%E5%BF%83%EF%BC%88%E5%93%8D%E5%BA%94%E5%BC%8F%EF%BC%89/img/user-icon-l.jpg" alt="img">
                                </cite>
                                <font>用户名称啦啊</font>
                            </a>
                             <a href="javascript:;" class="col-sm-3">
                                <cite>
                                    <img src="http://share-ued.enjoyf.com/UED/%E6%9D%8E%E7%BA%A2%E8%89%B3/pc%E7%AB%AF/%E4%B8%AA%E4%BA%BA%E4%B8%AD%E5%BF%83%EF%BC%88%E5%93%8D%E5%BA%94%E5%BC%8F%EF%BC%89/img/user-icon-l.jpg" alt="img">
                                </cite>
                                <font>用户名称啦啊</font>
                            </a>
                            <a href="javascript:;" class="col-sm-3">
                                <cite>
                                    <img src="http://share-ued.enjoyf.com/UED/%E6%9D%8E%E7%BA%A2%E8%89%B3/pc%E7%AB%AF/%E4%B8%AA%E4%BA%BA%E4%B8%AD%E5%BF%83%EF%BC%88%E5%93%8D%E5%BA%94%E5%BC%8F%EF%BC%89/img/user-icon-l.jpg" alt="img">
                                </cite>
                                <font>用户名称啦啊</font>
                            </a>
                             <a href="javascript:;" class="col-sm-3">
                                <cite>
                                    <img src="http://share-ued.enjoyf.com/UED/%E6%9D%8E%E7%BA%A2%E8%89%B3/pc%E7%AB%AF/%E4%B8%AA%E4%BA%BA%E4%B8%AD%E5%BF%83%EF%BC%88%E5%93%8D%E5%BA%94%E5%BC%8F%EF%BC%89/img/user-icon-l.jpg" alt="img">
                                </cite>
                                <font>用户名称啦啊</font>
                            </a>
                            <a href="javascript:;" class="col-sm-3">
                                <cite>
                                    <img src="http://share-ued.enjoyf.com/UED/%E6%9D%8E%E7%BA%A2%E8%89%B3/pc%E7%AB%AF/%E4%B8%AA%E4%BA%BA%E4%B8%AD%E5%BF%83%EF%BC%88%E5%93%8D%E5%BA%94%E5%BC%8F%EF%BC%89/img/user-icon-l.jpg" alt="img">
                                </cite>
                                <font>用户</font>
                            </a>
                        </div>
                    </div>
                    <!--我的关注  结束-->
                    <!--我的粉丝  开始-->
                    <div class="fans-box fn-clear pag-hor-20">
                        <h3>我的粉丝<a href="javascript:;" class="fn-right">更多</a></h3>
                        <div class="row fans-con">
                            <a href="javascript:;" class="col-sm-3">
                                <cite>
                                    <img src="http://share-ued.enjoyf.com/UED/%E6%9D%8E%E7%BA%A2%E8%89%B3/pc%E7%AB%AF/%E4%B8%AA%E4%BA%BA%E4%B8%AD%E5%BF%83%EF%BC%88%E5%93%8D%E5%BA%94%E5%BC%8F%EF%BC%89/img/user-icon-l.jpg" alt="img">
                                </cite>
                                <font>用户名称啦啊</font>
                            </a>
                            <a href="javascript:;" class="col-sm-3">
                                <cite>
                                    <img src="http://share-ued.enjoyf.com/UED/%E6%9D%8E%E7%BA%A2%E8%89%B3/pc%E7%AB%AF/%E4%B8%AA%E4%BA%BA%E4%B8%AD%E5%BF%83%EF%BC%88%E5%93%8D%E5%BA%94%E5%BC%8F%EF%BC%89/img/user-icon-l.jpg" alt="img">
                                </cite>
                                <font>用户名称啦啊</font>
                            </a>
                            <a href="javascript:;" class="col-sm-3">
                                <cite>
                                    <img src="http://share-ued.enjoyf.com/UED/%E6%9D%8E%E7%BA%A2%E8%89%B3/pc%E7%AB%AF/%E4%B8%AA%E4%BA%BA%E4%B8%AD%E5%BF%83%EF%BC%88%E5%93%8D%E5%BA%94%E5%BC%8F%EF%BC%89/img/user-icon-l.jpg" alt="img">
                                </cite>
                                <font>用户名称啦啊</font>
                            </a>
                            <a href="javascript:;" class="col-sm-3">
                                <cite>
                                    <img src="http://share-ued.enjoyf.com/UED/%E6%9D%8E%E7%BA%A2%E8%89%B3/pc%E7%AB%AF/%E4%B8%AA%E4%BA%BA%E4%B8%AD%E5%BF%83%EF%BC%88%E5%93%8D%E5%BA%94%E5%BC%8F%EF%BC%89/img/user-icon-l.jpg" alt="img">
                                </cite>
                                <font>用户名称啦啊</font>
                            </a>
                             <a href="javascript:;" class="col-sm-3">
                                <cite>
                                    <img src="http://share-ued.enjoyf.com/UED/%E6%9D%8E%E7%BA%A2%E8%89%B3/pc%E7%AB%AF/%E4%B8%AA%E4%BA%BA%E4%B8%AD%E5%BF%83%EF%BC%88%E5%93%8D%E5%BA%94%E5%BC%8F%EF%BC%89/img/user-icon-l.jpg" alt="img">
                                </cite>
                                <font>用户名称啦啊</font>
                            </a>
                            <a href="javascript:;" class="col-sm-3">
                                <cite>
                                    <img src="http://share-ued.enjoyf.com/UED/%E6%9D%8E%E7%BA%A2%E8%89%B3/pc%E7%AB%AF/%E4%B8%AA%E4%BA%BA%E4%B8%AD%E5%BF%83%EF%BC%88%E5%93%8D%E5%BA%94%E5%BC%8F%EF%BC%89/img/user-icon-l.jpg" alt="img">
                                </cite>
                                <font>用户名称啦啊</font>
                            </a>
                             <a href="javascript:;" class="col-sm-3">
                                <cite>
                                    <img src="http://share-ued.enjoyf.com/UED/%E6%9D%8E%E7%BA%A2%E8%89%B3/pc%E7%AB%AF/%E4%B8%AA%E4%BA%BA%E4%B8%AD%E5%BF%83%EF%BC%88%E5%93%8D%E5%BA%94%E5%BC%8F%EF%BC%89/img/user-icon-l.jpg" alt="img">
                                </cite>
                                <font>用户名称啦啊</font>
                            </a>
                            <a href="javascript:;" class="col-sm-3">
                                <cite>
                                    <img src="http://share-ued.enjoyf.com/UED/%E6%9D%8E%E7%BA%A2%E8%89%B3/pc%E7%AB%AF/%E4%B8%AA%E4%BA%BA%E4%B8%AD%E5%BF%83%EF%BC%88%E5%93%8D%E5%BA%94%E5%BC%8F%EF%BC%89/img/user-icon-l.jpg" alt="img">
                                </cite>
                                <font>用户</font>
                            </a>
                        </div>
                    </div>
                    <!--我的粉丝  结束-->
                </div>
            </div>
        </div>


        <div class="mask-login">
            <div class="login-box fn-clear">
                <h1>账号登陆</h1>
                <i class="close-icon">关闭</i>
                <form action="" class="">
                    <div>
                        <label for="tel">手机号：</label>
                        <input type="text" id="tel" placeholder="仅支持中国大陆"> 
                    </div>
                    <div>
                        <label for="password">密&nbsp;&nbsp;&nbsp;码： </label>
                        <input type="text" id="password">
                    </div>
                    <div class="text-remeber fn-clear">
                        <input id="check-1" type="checkbox" name="check-1" checked="checked">
                        <label for="check-1"><i></i>记住我</label>
                        <a href="javascript:;" class="link-rem fn-right">忘记密码</a>
                    </div>
                    <button class="login-btn">登陆</button>
                    <div class="third-login">
                        <p>或</p>
                        <a href="javascript:;" class="third-icon qq-icon"><i></i></a>
                        <a href="javascript:;" class="third-icon sina-icon"><i></i></a>
                    </div>
                </form>
                <a href="javascript:;" class="fn-right">没有账号？去注册</a>
            </div>
        </div>


EOF;
        $wgOut->addHTML( $html );
    }
}