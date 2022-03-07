<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';

// W kontrolerze niczego nie wysyła się do klienta.
// Wysłaniem odpowiedzi zajmie się odpowiedni widok.
// Parametry do widoku przekazujemy przez zmienne.

// 1. pobranie parametrów
//komentarz
$x = $_REQUEST ['x'];
$y = $_REQUEST ['y'];
$z = $_REQUEST ['z'];

// 2. walidacja parametrów z przygotowaniem zmiennych dla widoku

// sprawdzenie, czy parametry zostały przekazane
if ( ! (isset($x) && isset($y)  && isset($z))) {
	//sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
	$messages [] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
}

// sprawdzenie, czy potrzebne wartości zostały przekazane
if ( $x == "") {
	$messages [] = 'Nie podano kwoty';
}
if ( $y == "") {
	$messages [] = 'Nie podano liczby lat';
}
if ( $z == "") {
	$messages [] = 'Nie podano oprocentowania';
}

//nie ma sensu walidować dalej gdy brak parametrów
if (empty( $messages )) {

	// sprawdzenie, czy $x i $y są liczbami całkowitymi
	if (! is_numeric( $x )) {
		$messages [] = 'Pierwsza wartość nie jest liczbą całkowitą';
	}

	if (! is_numeric( $y )) {
		$messages [] = 'Druga wartość nie jest liczbą całkowitą';
	}
if (! is_numeric( $z )) {
		$messages [] = 'Druga wartość nie jest liczbą całkowitą';
	}
}

// 3. wykonaj zadanie jeśli wszystko w porządku

if (empty ( $messages )) { // gdy brak błędów

	$a = $x;
	$b = $y;
	$c = $z;

	//konwersja parametrów na int
	$a = intval($a);
	$b = intval($b);
	$c = intval($c);


	//wykonanie operacji

	$c=12*$c;
	$b=$b/100;

	$result = ($a*$b)/(12*(1-((12/(12+$b))**$c)));
  //$result= ($a*$b)/((12*(1-((12/((12+$b)**$c))))));



}
// 4. Wywołanie widoku z przekazaniem zmiennych
// - zainicjowane zmienne ($messages,$x,$y,$operation,$result)
//   będą dostępne w dołączonym skrypcie
include 'calc_view.php';
