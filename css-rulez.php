<?php
$w = isset($_GET['width']) ? intval($_GET['width']) : 10;
$h = isset($_GET['height']) ? intval($_GET['height']) : 10;
$r = isset($_GET['rule']) ? intval($_GET['rule']) : 90;
$rule = str_pad(decbin($r % 256), 8, 0, STR_PAD_LEFT);
?>

<style>
div{width:<?= $w * 20 ?>px}
input{margin:0;padding:0;width:20px;height:20px}
input:checked + input:checked + input:checked <?= str_repeat(' + input', $w - 1) ?> { -webkit-appearance:<?= strtr($rule[0], ['0'=>'none;pointer-events:none', '1'=>'checkbox;pointer-events:all']) ?> }
input:checked + input:checked + input         <?= str_repeat(' + input', $w - 1) ?> { -webkit-appearance:<?= strtr($rule[1], ['0'=>'none;pointer-events:none', '1'=>'checkbox;pointer-events:all']) ?> }
input:checked + input         + input:checked <?= str_repeat(' + input', $w - 1) ?> { -webkit-appearance:<?= strtr($rule[2], ['0'=>'none;pointer-events:none', '1'=>'checkbox;pointer-events:all']) ?> }
input:checked + input         + input         <?= str_repeat(' + input', $w - 1) ?> { -webkit-appearance:<?= strtr($rule[4], ['0'=>'none;pointer-events:none', '1'=>'checkbox;pointer-events:all']) ?> }
input         + input:checked + input         <?= str_repeat(' + input', $w - 1) ?> { -webkit-appearance:<?= strtr($rule[5], ['0'=>'none;pointer-events:none', '1'=>'checkbox;pointer-events:all']) ?> }
input         + input         + input:checked <?= str_repeat(' + input', $w - 1) ?> { -webkit-appearance:<?= strtr($rule[6], ['0'=>'none;pointer-events:none', '1'=>'checkbox;pointer-events:all']) ?> }
input         + input         + input         <?= str_repeat(' + input', $w - 1) ?> { -webkit-appearance:<?= strtr($rule[7], ['0'=>'none;pointer-events:none', '1'=>'checkbox;pointer-events:all']) ?> }
</style>
<div>
<?= str_repeat('<input type="checkbox">', $h * $w) ?>

</div>
