<?php



// è definita una classe ‘Movie’ => all’interno della classe sono dichiarate delle variabili d’istanza => all’interno della classe è definito un costruttore => all’interno della classe è definito almeno un metodo
// vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
// Bonus 1: Modificare la classe Movie in modo che accetti piú di un genere.
// Bonus 2: Creare un layout completo per stampare a schermo una lista di movies.

include __DIR__ . '/models/movie.php';
include __DIR__ . '/db.php';



// # Class declaration
// class Movie
// {
//     public $title;

//     public $year;

//     public $director;

//     public $timeDuration;

//     public $genre;

//     public $rating;


//     function __construct(
//         $_title,
//         $_year,
//         $_director,
//         $_timeDuration,
//         $genre,

//     ) {
//         $this->title = $_title;
//         $this->year = $_year;
//         $this->director = $_director;
//         $this->timeDuration = $_timeDuration;
//         $this->genre = $genre;
//     }

//     public function getTitle()
//     {
//         echo $this->title;
//     }

//     public function getYear()
//     {
//         echo $this->year;
//     }

//     public function getDirector()
//     {
//         echo $this->director;
//     }

//     public function getTimeDuration()
//     {
//         echo $this->timeDuration;
//     }

//     public function getGenre()
//     {
//         echo $this->genre;
//     }
// }

// # class istances
// $movie_1 = new Movie('Orgoglio e Pregiudizio', 2005, 'Joe Wright', '127 min', 'Drammatico/Romantico');
// $movie_2 = new Movie('Il giardino delle vergini suicide', 1999, 'Sofia Coppola', '97 min', 'Indipendente/Drammatico');
// $movie_3 = new Movie('Edward mani di forbice', 1990, 'Tim Burton', '105 min', 'Drammatico/Fantastico');
// $movie_4 = new Movie('Casper', 1995, 'Brad Silberling', '105 min', 'Fantastico/Per famiglie');

// # obj properties

// $movie_1->title = 'Orgoglio e Pregiudizio';
// $movie_1->year = 2005;
// $movie_1->director = 'Joe Wright';
// $movie_1->timeDuration = '127 min';
// $movie_1->genre = 'Drammatico/Romantico';


// $movie_2->title = 'Il giardino delle vergini suicide';
// $movie_2->year = 1999;
// $movie_2->director = 'Sofia Coppola';
// $movie_2->timeDuration = '97 min';
// $movie_2->genre = 'Indipendente/Drammatico';

// $movie_3->title = 'Edward mani di forbice';
// $movie_3->year = 1990;
// $movie_3->director = 'Tim Burton';
// $movie_3->timeDuration = '105 min';
// $movie_3->genre = 'Drammatico/Fantastico';

// $movie_4->title = 'Casper';
// $movie_4->year = 1995;
// $movie_4->director = 'Brad Silberling';
// $movie_4->timeDuration = '96 min';
// $movie_4->genre = 'Fantastico/Per famiglie';

// var_dump($movie_1);
// var_dump($movie_2);
// var_dump($movie_3);
// var_dump($movie_4);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <header>
        <h1 class="text-center text-white">MOVIES</h1>
    </header>

    <main class="bg-dark p-5">
        <div class="row row-cols-3 g-5">
            <?php foreach ($movies as $i => $movie) : ?>
                <div class="col">
                    <div class="card border-0 h-100">
                        <div class="card-body">
                            <h4>Title: <?= $movies[$i]->getTitle() ?></h5>
                                <h5>Genres:</h5>
                                <ul>
                                    <?php foreach ($movies[$i]->getGenres() as $genre) : ?>
                                        <li><?= $genre; ?></li>
                                    <?php endforeach; ?>
                                </ul>
                                <h5>Regista: <?= $movie->getDirector() ?>
                                <h5>Anno: <?= $movie->getYear() ?></h5>
                                <h5>Durata: <?= $movie->getTimeDuration() ?>

                            </h4>
                        </div>
                    </div>
                </div>

            <?php endforeach; ?>
        </div>

    </main>

</body>

</html>