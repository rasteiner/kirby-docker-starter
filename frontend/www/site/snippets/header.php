<?php 

/*
Preload font example:
$preload[] = [
    'url' => url('assets/fonts/Montserrat-latin.woff2'),
    'type' => 'font',
    'crossorigin' => true,
];
*/

?>
<!DOCTYPE html>
<html lang="it-CH">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $page->title() ?> - <?= $site->title() ?></title>
    <?php if (isset($preload) && is_array($preload)): ?>
        <?php foreach ($preload as $item): ?>
            <?php if (isset($item['url']) && isset($item['type'])): ?>
                <link rel="preload" <?= attr(['href' => $item['url'], 'as' => $item['type'], 'crossorigin' => $item['crossorigin'] ?? null]) ?>>
            <?php endif; ?>
        <?php endforeach; ?>
    <?php endif; ?>
    <?= css(['assets/css/main.css']) ?>
    <?= cssTpl() ?>
    <?= js(['assets/js/main.js'], ['type' => 'module']) ?>
    <?= jsTpl(['type' => 'module']) ?>
</head>
<body>
