<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DimensionPH Online Center</title>

    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/navbar.css">
    <link rel="stylesheet" href="./css/hero.css">
    <link rel="stylesheet" href="./css/company.css">
    <link rel="stylesheet" href="./css/introduction.css">
    <link rel="stylesheet" href="./css/co-worker.css">
    <link rel="stylesheet" href="./css/contact-us.css">
    <link rel="stylesheet" href="./css/footer.css">

</head>
<body>
    <?php include './components/navbar.php'; ?>
    <?php include './components/hero.php'; ?>
    <?php include './components/company.php'; ?>
    <?php include './components/introduction.php'; ?>
    <?php include './components/co-worker.php'; ?>
    <?php include './components/contact-us.php'; ?>
    <?php include './components/footer.php'; ?>
</body>

<script>
    document.querySelectorAll('.scroll-link').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        
        const targetId = this.getAttribute('href');
        const targetPosition = document.querySelector(targetId).offsetTop;

        window.scrollTo({
            top: targetPosition,
            behavior: 'smooth'
        });
    });
});

</script>
</html>