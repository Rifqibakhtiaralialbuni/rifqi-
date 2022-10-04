<?
class book {
public $judul;
public $pengarang;
public $penerbit;
public $tahun;
public function __construct($title,$author,$publisher,$year)
{




    $this->judul = $title;
$this->pengarang = $author;
$this->penerbit = $publisher;
$this->tahun = $year;
}
}
?>


<?
include_once'book.php';
class model {
public function getData()
{
return array(
new book('Pemrograman PHP & MySql','Bayu
Priyambadha','UB Press','2011'),
new book('Pemrograman Framework MVC dengan
PHP','Widhy','UB Press','2011'),
new book('Membangun Aplikasi Web dengan PHP dan
AJAX','Achmad Arwan','UB Press','2012'),
new book('Kolaborasi PHP, MVC dan AJAX','Bayu
Priyambadha','UB Press','2012')
);
}
}
?>