<?php

# Class declaration
class Movie
{
    public $title;

    public $year;

    public $director;

    public $timeDuration;

    public $genres;


    function __construct(
        $_title,
        $_year,
        $_director,
        $_timeDuration,
        $_genres,

    ) {
        $this->setTitle($_title);
        $this->setYear($_year);
        $this->setDirector($_director);
        $this->setTimeDuration($_timeDuration);
        $this->setGenres($_genres);
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($_title)
    {
        $this->title = $_title;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function setYear($_year)
    {
        $this->year = $_year;
    }

    public function getDirector()
    {
        return $this->director;
    }

    public function setDirector($_director)
    {
        $this->director = $_director;
    }

    public function getTimeDuration()
    {
        return $this->timeDuration;
    }

    public function setTimeDuration($_timeDuration)
    {
        $this->timeDuration = $_timeDuration;
    }

    public function getGenres()
    {
        return $this->genres;
    }

    public function setGenres($_genres)
    {
        $this->genres = $_genres;
    }
}