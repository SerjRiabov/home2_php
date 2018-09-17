<?php
trait Size{
    public $width;
    public $height;
}
class Newspaper
{
    use Size;
    private $price;
    private $subscriptionPrice;
    public $title;
    public $pages;
    public $publisher;
    public $year;
    public $number;
    public $numsPerYear;
    public $isColor;

    public function getPrice($discount){
       return {$this->price}-{$this->price}*$discount/100;
    }
    public function setPrice($price)
    {
        $this->price = $price;
    }
    public function getSubscriptionPrice($discount,  $roomRate, $periodicityOutput)
    {
        if (($this->subscriptionPrice != 0) and (isset($this->subscriptionPrice ))){
    return  {$this->subscriptionPrice}-{$this->subscriptionPrice}*$discount / 100;

    }
    else{
        $this->subPrice = $roomRate * $periodicityOutput;
        $this->newSubscription = {$this->subPrice}-{$this->subPrice}*$discount / 100;
            return $this->newSubscription;
    }


    }

    public function setSubscriptionPrice($subscriptionPrice)
    {
        $this->subscriptionPrice = $subscriptionPrice;
    }
    public function info(){
        echo "<table>";
            echo "<tr>";
                echo "<td>price: </td>";
                echo "<td>$this->getPrice($discount)</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>subscriptionPrice: </td>";
                echo "<td>$this->subscriptionPrice </td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>title: </td>";
                echo "<td>$this->title </td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>pages: </td>";
                echo "<td>$this->pages</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>publisher: </td>";
                echo "<td>$this->publisher</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>year: </td>";
                echo "<td>$this->year</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>number: </td>";
                echo "<td>$this->number</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>numsPerYear: </td>";
                echo "<td>$this->numsPerYear</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>isColor: </td>";
                echo "<td>$this->isColor</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>size: </td>";
                echo "<td>$this->width, $this->height</td>";
            echo "</tr>";
        echo "</table>";
    }


}

class Book extends Newspaper{
        use Size;
        public $author;
        public $hardcover;
        public $genres=[];
    public function info(){
        echo "<table>";
        echo "<tr>";
        echo "<td>price: </td>";
        echo "<td>$this->getPrice($discount)</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>title: </td>";
        echo "<td>$this->title </td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>author: </td>";
        echo "<td>$this->author</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>pages: </td>";
        echo "<td>$this->pages</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>publisher: </td>";
        echo "<td>$this->publisher</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>year: </td>";
        echo "<td>$this->year</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>hardcover: </td>";
        echo "<td>$this->hardcover</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>genres: </td>";
        echo "<td>$this->getGenres()</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>size: </td>";
        echo "<td>$this->width, $this->height</td>";
        echo "</tr>";
        echo "</table>";
    }
    public function reserve(){
        echo "Hi, I am method reserve, class Book";
    }
    public function getGenres(){
        return implode(",", $genres);
    }
     }

class Magazine extends Book
{
    use Size;
    public function info(){
        echo "<table>";
        echo "<tr>";
        echo "<td>price: </td>";
        echo "<td>$this->getPrice($discount)</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>subscriptionPrice: </td>";
        echo "<td>$this->subscriptionPrice </td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>title: </td>";
        echo "<td>$this->title </td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>pages: </td>";
        echo "<td>$this->pages</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>publisher: </td>";
        echo "<td>$this->publisher</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>year: </td>";
        echo "<td>$this->year</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>number: </td>";
        echo "<td>$this->number</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>numsPerYear: </td>";
        echo "<td>$this->numsPerYear</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>size: </td>";
        echo "<td>$this->width, $this->height</td>";
        echo "</tr>";
        echo "</table>";
    }
    public function reserve(){
        echo "Hi, I am method reserve, class Magazine";
    }
}
class EMagazine extends Magazine
{
    use Size;
    public $fileSize;
    public function info(){
        echo "<table>";
        echo "<tr>";
        echo "<td>price: </td>";
        echo "<td>$this->getPrice($discount)</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>subscriptionPrice: </td>";
        echo "<td>$this->subscriptionPrice </td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>title: </td>";
        echo "<td>$this->title </td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>pages: </td>";
        echo "<td>$this->pages</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>publisher: </td>";
        echo "<td>$this->publisher</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>year: </td>";
        echo "<td>$this->year</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>number: </td>";
        echo "<td>$this->number</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>numsPerYear: </td>";
        echo "<td>$this->numsPerYear</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>fileSize: </td>";
        echo "<td>$this->fileSize</td>";
        echo "</tr>";
        echo "</table>";
    }
    public function preview(){
        echo "Hi, I am method preview, class EMagazine";
    }
}
class EBook extends EMagazine
{
    use Size;

    public function info($discount){
        echo "<table>";
        echo "<tr>";
        echo "<td>price: </td>";
        echo "<td>$this->getPrice($discount)</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>title: </td>";
        echo "<td>$this->title </td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>author: </td>";
        echo "<td>$this->author>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>pages: </td>";
        echo "<td>$this->pages>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>publisher: </td>";
        echo "<td>$this->publisher</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>year: </td>";
        echo "<td>$this->year</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>fileSize: </td>";
        echo "<td>$this->fileSize</td>";
        echo "</tr>";
        echo "</table>";
    }
    public function preview(){
        echo "Hi, I am method preview, class EBook";
    }
}

class PostStamp extends EBook
{
    use Size;
    public $country;
    public $series;
    public $denomination;
    public function info(){
        echo "<table>";
        echo "<tr>";
        echo "<td>price: </td>";
        echo "<td>$this->getPrice($discount)</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>title: </td>";
        echo "<td>$this->title </td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>country: </td>";
        echo "<td>$this->country>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>denomination: </td>";
        echo "<td>$this->denomination>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>series: </td>";
        echo "<td>$this->series</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>fileSize: </td>";
        echo "<td>$this->fileSize</td>";
        echo "</tr>";
        echo "</table>";
    }
}
class Postcard extends PostStamp
{
    use Size;
    public function info(){
        echo "<table>";
        echo "<tr>";
        echo "<td>price: </td>";
        echo "<td>$this->getPrice($discount)</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>title: </td>";
        echo "<td>$this->title </td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>country: </td>";
        echo "<td>$this->country>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>series: </td>";
        echo "<td>$this->series</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>size: </td>";
        echo "<td>$this->width, $this->height</td>";
        echo "</tr>";

        echo "</table>";
    }
}
class Calendar extends Postcard
{
    use Size;
    public $type;
    public function info(){
        echo "<table>";
        echo "<tr>";
        echo "<td>price: </td>";
        echo "<td>$this->getPrice($discount)</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>title: </td>";
        echo "<td>$this->title </td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>year: </td>";
        echo "<td>$this->year>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>type: </td>";
        echo "<td>$this->type</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>size: </td>";
        echo "<td>$this->width, $this->height</td>";
        echo "</tr>";

        echo "</table>";
    }
}
class Poster extends Calendar
{
    use Size;
    public function info(){
        echo "<table>";
        echo "<tr>";
        echo "<td>price: </td>";
        echo "<td>$this->getPrice($discount)</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>title: </td>";
        echo "<td>$this->title </td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>size: </td>";
        echo "<td>$this->width, $this->height</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>type: </td>";
        echo "<td>$this->type</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>series: </td>";
        echo "<td>$this->series>";
        echo "</tr>";
        echo "</table>";
    }
    public function customize(){
        echo "Hi, I am method customize, class Poster";
    }
}