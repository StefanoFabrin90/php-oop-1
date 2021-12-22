<!-- importo il mio file php= class -->
<?php
require_once __DIR__ . '/classes/movie.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <?php
        $movie1 = new Movies('title1', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Provident quidem facere assumenda quae delectus iusto rerum labore eligendi ea, placeat vel maiores repellendus sed alias possimus quia, ducimus laboriosam sint.', 5, 10, 'stefano');
        ?>

        <h2><?php echo $movie1->title; ?> </h2>
        <h3><?php echo $movie1->age; ?> :age</h3>
        <h4><?php echo $movie1->getDiscount(); ?>%</h4>
        <h5><?php echo $movie1->author; ?> author</h5>
        <p>
            <?php
            echo $movie1->getMovies();
            //var_dump($movie1)
            ?>
            ...</p>
    </div>
    <hr>
    <div>
        <?php
        $movie2 = new Movies('title2', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Provident quidem facere assumenda quae delectus iusto rerum labore eligendi ea, placeat vel maiores repellendus sed alias possimus quia, ducimus laboriosam sintLorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate minima dolore atque quo, ullam consectetur tenetur quisquam id eaque, necessitatibus vero dolor. Sit tenetur omnis tempore facilis est, hic quasi..', 60, 10,);
        ?>

        <h2><?php echo $movie2->title; ?></h2>
        <h3><?php echo $movie2->age; ?> :age</h3>
        <h4><?php echo $movie2->getDiscount(); ?>%</h4>
        <h5><?php echo $movie2->author; ?> author</h5>
        <p>
            <?php
            echo $movie1->getMovies(140);
            //var_dump($movie2)
            ?>
            ...</p>
    </div>
</body>

</html>