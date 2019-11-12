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
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="https://venue-blog-prod.s3.amazonaws.com/blog/wp-content/uploads/2019/10/1-1024x576.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="https://venue-blog-prod.s3.amazonaws.com/blog/wp-content/uploads/2019/10/1-1024x576.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="https://venue-blog-prod.s3.amazonaws.com/blog/wp-content/uploads/2019/10/1-1024x576.jpg" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
