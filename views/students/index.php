<?php

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Students';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
<table class="table table-condensed">
<a href="<?php echo Url::to(['students/create']);?> ">Create</a>
    <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Patronymic</th>
        <th>Update</th>
        <th>Delete</th>
    </tr>
    <?php foreach ($students as $student) : ?>
    <tr>
        <td> <?php echo $student->id; ?></td>
        <td> <?php echo $student->name; ?></td>
        <td> <?php echo $student->surname; ?></td>
        <td> <?php echo $student->patronymic; ?></td>
        <td><a href="<?php echo Url::to(['students/update', 'id'=>$student->id]);?> ">Edit</a></td>
        <td><a href="<?php echo Url::to(['students/delete', 'id'=>$student->id]);?> ">Delete</a></td>

    </tr>
    <?php endforeach; ?>
    </table>
</div>
