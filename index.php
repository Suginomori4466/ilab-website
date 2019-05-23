<?php
    // 現在の相対パスを取得
    $path = dirname(__FILE__) .'/';

    // ディレクトリ一覧の取得
    $dirs = scandir($path);

    // 表示させないディレクトリ配列
    $excludes = array(
        '.',
        '..',
        'css',
        'test',
        'test2',
    );

    // リンク表示
    echo '<ul>',"\n";
    foreach ($dirs AS $dir) {

        // 特定のディレクトリの場合は表示させない
        if (in_array($dir, $excludes)) {
            continue;
        }

        if ((is_dir($dir) === true)) {
            echo '<li>';
            echo '<a href="./' . $dir . '">';
            echo $dir;
            echo '</a></li>'."\n";
        }
    }
    echo '</ul>',"\n";
?>
