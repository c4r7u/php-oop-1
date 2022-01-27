<?php
class Movie{
    public $title;
    public $time;
    public $genre;
   

    public function __construct($_title, $_year)
    {
        $this->title = $_title;
        $this->year = $_year;
    }

    public function getInfoMovie(){
        return ''.$this->title .' / '.$this->year;
    }
}

$movies = new Movie('Spider-Man: No Way Home', '2021');
$movies2 = new Movie('Il divo', '2008');
$movies3 = new Movie('Rush', '2013');
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
    <h2><?php echo $movies->getInfoMovie()?></h2>

    <h2><?php echo $movies2->getInfoMovie()?></h2>

    <h2><?php echo $movies3->getInfoMovie()?></h2>
</body>
</html>