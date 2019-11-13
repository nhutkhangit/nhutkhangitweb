<?php
/* @var $this yii\web\View */
/* @var $cfs static[] */
/* @var $cfs static[] */
/* @var $carousel app\models\Carousel[] */

/* @var $cfs static[] */

use app\assets\SliderAsset;
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = Yii::$app->name;
?>
<meta property="og:url" content="http://nhutkhangit.xyz/">
<meta property="og:type" content="website">
<meta property="og:title" content="Home | Nhựt Khang IT">
<meta property="og:description" content="Wellcome to NhutKhangit.xyz!">
<meta property="og:image" content="https://venue-blog-prod.s3.amazonaws.com/blog/wp-content/uploads/2019/10/1-1024x576.jpg">
<div id="carousel3d">
    <carousel-3d :perspective="0" :space="200" :display="5" :controls-visible="true" :controls-prev-html="'❬'" :controls-next-html="'❭'" :controls-width="30" :controls-height="60" :clickable="true" :autoplay="true" :autoplay-timeout="5000">
        <slide :index="0">
            <img src="https://venue-blog-prod.s3.amazonaws.com/blog/wp-content/uploads/2019/10/1-1024x576.jpg">
        </slide>
        <slide :index="1">
            <img src="https://venue-blog-prod.s3.amazonaws.com/blog/wp-content/uploads/2019/10/1-1024x576.jpg">
        </slide>
        <slide :index="2">
            <img src="https://venue-blog-prod.s3.amazonaws.com/blog/wp-content/uploads/2019/10/1-1024x576.jpg">
        </slide>
        <slide :index="3">
            <img src="https://venue-blog-prod.s3.amazonaws.com/blog/wp-content/uploads/2019/10/1-1024x576.jpg">
        </slide>
        <slide :index="4">
            <img src="https://venue-blog-prod.s3.amazonaws.com/blog/wp-content/uploads/2019/10/1-1024x576.jpg">
        </slide>

    </carousel-3d>
</div>
<!--<script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script>-->
<!--<script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.7/vue.js'></script>-->
<!--<script src='https://rawgit.com/Wlada/vue-carousel-3d/master/dist/vue-carousel-3d.min.js'></script>-->
<script>new Vue({
    el: '#carousel3d',
    data: {
        slides: 7
    },
    components: {
        'carousel-3d': Carousel3d.Carousel3d,
        'slide': Carousel3d.Slide
    }
})
//# sourceURL=pen.js
</script><!--<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">--><!--    <div class="carousel-inner">--><!--        <div class="carousel-item active">--><!--            <img class="d-block w-100" src="https://venue-blog-prod.s3.amazonaws.com/blog/wp-content/uploads/2019/10/1-1024x576.jpg" alt="First slide">--><!--        </div>--><!--        <div class="carousel-item">--><!--            <img class="d-block w-100" src="https://venue-blog-prod.s3.amazonaws.com/blog/wp-content/uploads/2019/10/1-1024x576.jpg" alt="Second slide">--><!--        </div>--><!--        <div class="carousel-item">--><!--            <img class="d-block w-100" src="https://venue-blog-prod.s3.amazonaws.com/blog/wp-content/uploads/2019/10/1-1024x576.jpg" alt="Third slide">--><!--        </div>--><!--    </div>--><!--    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">--><!--        <span class="carousel-control-prev-icon" aria-hidden="true"></span>--><!--        <span class="sr-only">Previous</span>--><!--    </a>--><!--    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">--><!--        <span class="carousel-control-next-icon" aria-hidden="true"></span>--><!--        <span class="sr-only">Next</span>--><!--    </a>--><!--</div>-->

<div class="container">
    <div class="row">
        <div class="col-lg-8">
			<?php
			for ($i = 0; $i < 4; $i ++){
			?>
            <div class="date-posts">
                <div class="post-outer">
                    <div class="wrapfullpost">
                        <div class="post hentry">
                            <meta content="http://3.bp.blogspot.com/-xUiI8Gt_QyM/VmgGaFQcp3I/AAAAAAAAIrY/pmC0lS28CWI/s1600/btemplates-aquarium-by-francisco-oliveros.jpg" itemprop="image">
                            <a name="2219512222971299624"></a>
                            <h3 class="post-title entry-title" itemprop="headline">
                                <a href="https://greatmag-btemplates.blogspot.com/2016/07/demo-post-with-formatted-elements-and.html">Demo post with formatted elements and comments.</a>
                            </h3>
                            <div class="post-header-line-1"></div>
                            <div class="postmeta-primary">
                    <span class="meta_author post-author vcard">
                        <span class="fn" itemprop="author" itemscope="itemscope" itemtype="http://schema.org/Person">
                            <meta content="https://www.blogger.com/profile/11448038113626124391" itemprop="url">
                                <a class="g-profile" href="https://www.blogger.com/profile/11448038113626124391" rel="author" title="author profile" data-gapiscan="true" data-onload="true" data-gapiattached="true">
                                    <span itemprop="name">BTemplates</span>
                                </a>
                        </span>
                    </span>
                                <meta content="http://greatmag-btemplates.blogspot.com/2016/07/demo-post-with-formatted-elements-and.html" itemprop="url">
                                <span class="meta_date">
                        <a class="timestamp-link" href="https://greatmag-btemplates.blogspot.com/2016/07/demo-post-with-formatted-elements-and.html" rel="bookmark" title="permanent link">
                            <span class="published updated" itemprop="datePublished" title="2016-07-25T07:40:00-07:00">7:40 AM</span>
                        </a>
                    </span>
                                <span class="meta_categories">
                        <a href="https://greatmag-btemplates.blogspot.com/search/label/Blogger" rel="tag">Blogger</a>,
                        <a href="https://greatmag-btemplates.blogspot.com/search/label/Images" rel="tag">Images</a>,
                        <a href="https://greatmag-btemplates.blogspot.com/search/label/Tag" rel="tag">Tag</a>
                    </span>
                                <span class="meta_comments">
                        <a class="comment-link" href="https://greatmag-btemplates.blogspot.com/2016/07/demo-post-with-formatted-elements-and.html#comment-form" onclick="">3 comments</a>
                    </span>
                                <span class="item-control blog-admin pid-533320333">
                        <a href="https://www.blogger.com/post-edit.g?blogID=7691382490950740003&amp;postID=2219512222971299624&amp;from=pencil" title="Edit Post">
                            <img alt="" class="icon-action" height="18" src="https://img2.blogblog.com/img/icon18_edit_allbkg.gif" width="18">
                        </a>
                    </span>
                            </div>
                            <div class="post-body entry-content" id="post-body-2219512222971299624">
                                <div id="summary2219512222971299624">
                                    <img src="https://3.bp.blogspot.com/-xUiI8Gt_QyM/VmgGaFQcp3I/AAAAAAAAIrY/pmC0lS28CWI/s1600/btemplates-aquarium-by-francisco-oliveros.jpg" class="pbtthumbimg">
                                    <div> Aquarium. Photo by Francisco.GreatMag is the template number 4663 in BTemplates, where a total of 51 230 624 templates has been downloaded so far since 2008. This template was created by PBTemplates and is the 611th template published in BTemplates.com by this author.Download...</div>
                                </div>
                                <script type="text/javascript">
                                    createSummaryAndThumb("summary2219512222971299624");
                                </script>
                                <div class="pbtsharethisbutt">
                                    Share:
                                    <a href="https://www.facebook.com/share.php?v=4&amp;src=bm&amp;u=&amp;t=Demo post with formatted elements and comments." onclick="window.open(this.href,&quot;sharer&quot;,&quot;toolbar=0,status=0,width=626,height=436&quot;); return false;" rel="nofollow" target="_blank" title="Share this on Facebook"><i class="fa fa-facebook"></i></a><a href="https://twitter.com/home?status=Demo post with formatted elements and comments. -- " rel="nofollow" target="_blank" title="Tweet This!"><i class="fa fa-twitter"></i></a><a href="https://plus.google.com/share?url=" onclick="javascript:window.open(this.href,   &quot;&quot;, &quot;menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600&quot;);return false;" rel="nofollow" target="_blank" title="Share this on Google+"><i class="fa fa-google-plus"></i></a><a class="social-iconnbt" href="https://pinterest.com/pin/create/button/?source_url=&amp;media=http://3.bp.blogspot.com/-xUiI8Gt_QyM/VmgGaFQcp3I/AAAAAAAAIrY/pmC0lS28CWI/s1600/btemplates-aquarium-by-francisco-oliveros.jpg&amp;description=Demo post with formatted elements and comments." rel="nofollow" target="_blank" title="Share on Pinterest"><i class="fa fa-pinterest"></i></a>
                                </div>
                                <div class="readmore">
                                    <a href="/?page=detail&id=1">Read More</a>
                                </div>
                                <div style="clear: both;"></div>
                            </div>
                            <div class="post-footer">
                                <div class="post-footer-line post-footer-line-"></div>
                                <div class="post-footer-line post-footer-line-2"></div>
                                <div class="post-footer-line post-footer-line-3"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			<?php
			}
			?>
            <div class="blog-pager" id="blog-pager">
                <span id="blog-pager-older-link">
                    <a class="blog-pager-older-link" href="https://greatmag-btemplates.blogspot.com/search?updated-max=2016-07-25T07:40:00-07:00&amp;max-results=7" id="Blog1_blog-pager-older-link" title="Older Posts">Older Posts&nbsp;→</a>
                </span>
                <a class="home-link" href="https://greatmag-btemplates.blogspot.com/">Home</a>
            </div>
        </div>
        <div class="col-lg-4">
            <div id="rsidebar-wrapper">
                <div class="widget-container">
                    <div id="search" title="Type and hit enter">
                        <form action="https://greatmag-btemplates.blogspot.com/search/" id="searchform" method="get">
                            <input id="s" name="q" onblur="if (this.value == &quot{;
}&quot;) {this.value = &quot;Search&quot;;}" onfocus="if (this.value == &quot{;
}Search&quot;) {this.value = &quot;&quot;;}" type="text" value="Search">
                        </form>
                    </div>
                </div>
                <div class="widget HTML" data-version="1" id="HTML2">
                    <div class="widget-content">
                        <div id="fb-root" class=" fb_reset">
                            <div style="position: absolute; top: -10000px; width: 0px; height: 0px;">
                                <div>
                                    <iframe name="fb_xdm_frame_https" id="fb_xdm_frame_https" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tabindex="-1" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://staticxx.facebook.com/connect/xd_arbiter.php?version=44#channel=f24ff3216b286ec&amp;origin=https%3A%2F%2Fgreatmag-btemplates.blogspot.com" style="border: none;"></iframe>
                                </div>
                                <div></div>
                            </div>
                        </div>
                        <script>
                            (function (d, s, id) {
                                var js, fjs = d.getElementsByTagName(s)[0];
                                if (d.getElementById(id)) {
                                    return;
                                }
                                js = d.createElement(s);
                                js.id = id;
                                js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.5&appId=126286840742221";
                                fjs.parentNode.insertBefore(js, fjs);
                            }(document, 'script', 'facebook-jssdk'));
                        </script>
                        <div class="fb-page fb_iframe_widget" data-href="https://www.facebook.com/%E0%B9%96%DB%A3%DB%9CLNK%E0%B9%96%DB%A3%DB%9CChannel-293712208173779/?modal=admin_todo_tour" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="adapt_container_width=true&amp;app_id=126286840742221&amp;container_width=300&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Fbloggertemplates&amp;locale=es_LA&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false">
                            <span style="vertical-align: bottom; width: 300px; height: 196px;"><iframe name="f11b4ea9133d54" width="1000px" height="1000px" title="fb:page Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v2.5/plugins/page.php?adapt_container_width=true&amp;app_id=126286840742221&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter.php%3Fversion%3D44%23cb%3Df17a91462dbf774%26domain%3Dgreatmag-btemplates.blogspot.com%26origin%3Dhttps%253A%252F%252Fgreatmag-btemplates.blogspot.com%252Ff24ff3216b286ec%26relation%3Dparent.parent&amp;container_width=300&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Fbloggertemplates&amp;locale=es_LA&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false" style="border: none; visibility: visible; width: 300px; height: 196px;" class=""></iframe></span>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="tabs-widget-content tabs-widget-content-widget-themater_tabs-1432447472-id" id="widget-themater_tabs-1432447472-id1" style="display: block;">
                    <div class="sidebarpbt section" id="sidebartab1">
                        <div class="widget PopularPosts" data-version="1" id="PopularPosts1">
                            <div class="widget-content popular-posts">
                                <ul>
                                    <li>
                                        <div class="item-thumbnail-only">
                                            <div class="item-thumbnail">
                                                <a href="https://greatmag-btemplates.blogspot.com/2016/07/demo-post-with-formatted-elements-and.html" target="_blank">
                                                    <img alt="" border="0" src="//3.bp.blogspot.com/-xUiI8Gt_QyM/VmgGaFQcp3I/AAAAAAAAIrY/pmC0lS28CWI/w72-h72-p-k-no-nu/btemplates-aquarium-by-francisco-oliveros.jpg">
                                                </a>
                                            </div>
                                            <div class="item-title">
                                                <a href="https://greatmag-btemplates.blogspot.com/2016/07/demo-post-with-formatted-elements-and.html">Demo post with formatted elements and comments.</a>
                                            </div>
                                        </div>
                                        <div style="clear: both;"></div>
                                    </li>
                                    <li>
                                        <div class="item-thumbnail-only">
                                            <div class="item-thumbnail">
                                                <a href="https://greatmag-btemplates.blogspot.com/2016/07/images-in-this-template.html" target="_blank">
                                                    <img alt="" border="0" src="//3.bp.blogspot.com/-NB5XuDN1Ez8/VmgswVBbFMI/AAAAAAAAIsc/FLz68dJe2cU/w72-h72-p-k-no-nu/btemplates-china-by-francisco-oliveros.jpg">
                                                </a>
                                            </div>
                                            <div class="item-title">
                                                <a href="https://greatmag-btemplates.blogspot.com/2016/07/images-in-this-template.html">Images in this template.</a>
                                            </div>
                                        </div>
                                        <div style="clear: both;"></div>
                                    </li>
                                </ul>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>