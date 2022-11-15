<?php

use yii\bootstrap5\Html;
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="/TrainingApp/frontend/views/training/php.css" />
</head>

<body>
    
    <h2 class="course-title"><?php print_r($crs_name)?>Tutorial</h2>
    <div class="main-container">
        <div class="course-container">
            <?php
            // print_r($crs_name);exit;
            if ($crs_description) {
                $url = $crs_description['video_url'];
            } else {
                $url = $crs_description_data[0]['video_url'];
            }
            ?>
            <iframe width="760" height="330" class="embed-responsive-item" src="<?= $url; ?>" frameborder="0" allowfullscreen></iframe>
        </div>
        <div class="second-container">
            <?php
            foreach ($crs_description_data as $crs_description) {
                $description_data = $crs_description['description'];
                $video_url = $crs_description['video_url'];
                $cr_id = $crs_description['course_id'];
                $id = $crs_description['id'];
                echo Html::a($description_data, ['description', 'description_id' => $id/* , 'descr_video_url' => $video_url,'crsid'=>$cr_id */], ['class' => 'btn_des']);
                echo "<br/>";
            }
            
            ?>
        </div>
    </div>
</body>

</html>