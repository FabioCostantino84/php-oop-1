<!-- 

Oggi pomeriggio ripassate i primi concetti di classe, variabili e metodi d’istanza che abbiamo visto stamattina e create un file index.php in cui:

// è definita una classe ‘Movie’ => all’interno della classe sono dichiarate delle variabili d’istanza => all’interno della classe è definito un costruttore => all’interno della classe è definito almeno un metodo

// vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà

Bonus 1: Modificare la classe Movie in modo che accetti piú di un genere.

Bonus 2: Creare un layout completo per stampare a schermo una lista di movies.

Facciamo attenzione all’organizzazione del codice, suddividendolo in appositi file e cartelle. Possiamo ad esempio organizzare il codice

// creando un file dedicato ai dati (tipo le array di oggetti) che potremmo chiamare db.php

// mettendo ciascuna classe nel proprio file e magari raggruppare tutte le classi in una cartella dedicata che possiamo chiamare Models/

// organizzando il layout dividendo la struttura ed i contenuti in file e parziali dedicati.

 -->

<?php

class Movie
{
    // Variabili d'istanza
    public $image;

    public $title;

    public $genre;

    public $year;

    // Costruttore
    public function __construct($image, $title, $genre, $year)
    {
        $this->image = $image;
        $this->title = $title;
        $this->genre = $genre;
        $this->year = $year;
    }

    // Metodo per visualizzare le informazioni

    // ESEMPIO 1: singoli metodi per le info 
    /* public function viewTitle()
    {
        return $this->title;
        echo "Titolo: " . $this->title;
        echo "Genere: " . $this->genre;
        echo "Anno di uscita: " . $this->year;
    }
    public function viewGenre()
    {
        return $this->genre;
        echo "Titolo: " . $this->title;
        echo "Genere: " . $this->genre;
        echo "Anno di uscita: " . $this->year;
    }
    public function viewYear()
    {
        return $this->year;
        echo "Titolo: " . $this->title;
        echo "Genere: " . $this->genre;
        echo "Anno di uscita: " . $this->year;
    } */

    // ESEMPIO 2: singolo metodo per più info
    public function viewInfo()
    {
        echo "Locandina: <img src='{$this->image}' alt='{$this->title}'>"."<br>";
        echo "Titolo: " . $this->title . "<br>";
        echo "Genere: " . $this->genre . "<br>";
        echo "Anno di uscita: " . $this->year . "<br>";
        echo "<br>";
    }

    
}


// Istanza di due oggetti
$movie1 = new Movie("https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.posterlounge.it%2Fp%2F705265.html&psig=AOvVaw0PCalJb3fekx-AVCW8V6zu&ust=1697830103032000&source=images&cd=vfe&ved=0CBEQjRxqFwoTCJD7iJTsgoIDFQAAAAAdAAAAABBL", "Top Gun", "Azione", 1986);
$movie2 = new Movie("https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.mymovies.it%2Ffilm%2F2009%2Favatar%2Fposter%2F&psig=AOvVaw0jvgSMPEMB8zsE1vpPuRS7&ust=1697830029649000&source=images&cd=vfe&ved=0CBEQjRxqFwoTCPCNi_LrgoIDFQAAAAAdAAAAABAE", "Avtar", "Fantasy", 2009);

// ESEMPIO 2: Stampa più info in modo semplice
/* echo "Informazioni sui film:<br>"; */
$movie1->viewInfo();
$movie2->viewInfo();

// ESEMPIO 1: Stampa delle informazioni
/* echo "Titolo: " . $movie1->viewTitle();
echo "Genere: " . $movie1->viewGenre();
echo "Anno di uscita: ". $movie1->viewYear();
echo "<br>";
echo "Titolo: " . $movie2->viewTitle();
echo "Genere: " . $movie2->viewGenre();
echo "Anno di uscita: ". $movie2->viewYear(); */

?>