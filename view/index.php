<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Document</title>
    <link type="text/css" rel="stylesheet" href="index.css">
</head>
<style>
    <?php include 'index.css'; ?>
</style>

<body>
    <div class="topContainer">
        <?php if ($username !== null) : ?>
            <div class="menu">
                <a class="tasks" href="/?controller=tasks">Tasks</a>
                <p>Hello <?= $username ?>. <a href='?action=logout'>Log out</a></p>
            </div>

        <?php else : ?>
            <a class="auth" href="/?controller=security">Sign In</a>
        <?php endif; ?>
        <div class="header"><?= $pageHeader ?></div>
    </div>
</body>