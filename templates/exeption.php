

<?= '<p>' . $text . '</p>'; ?>

<?php 

echo '<p>' . $e->getMessage() . '</p>';
echo '<p>' . $e->getCode() . '</p>';
echo '<p>Файл в котором произошла ошибка: ' . $e->getFile() . '</p>';
echo '<p> Строка в которой произошла ошибка:' . $e->getLine() . '</p>';
