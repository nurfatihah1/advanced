<?php

use yii\helpers\Html;
use yii\widgets\LinkPager;
?>

<h1>Countries</h1>
<ul>


	<li>
		<?= Html::encode("{$country->name} ({$country->code})") ?>:
		<?= $country->population ?>
	</li>


</ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>

