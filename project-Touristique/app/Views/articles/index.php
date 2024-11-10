<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articles</title>
</head>
<body>

    <h1>List of Articles</h1>

    <ul>
        <?php foreach ($articles as $article): ?>
            <li>
                <strong><?= esc($article['title']) ?></strong>: <?= esc($article['content']) ?>
            </li>
        <?php endforeach; ?>
    </ul>

</body>
</html>
