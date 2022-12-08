
<?php
if (!isset($_GET['submit']))  {
	echo "not authorized";
	exit;
}

$name= $_GET['name'];

$ginfo= isset($_GET['ginfo']);
$sinfo= isset($_GET['sinfo']);
$interview= isset($_GET['interview']);

$age= $_GET['age'];
$education= $_GET['education'];
$cv= $_GET['cvfile'];
$message= $_GET['message'];
$cdate= $_GET['cdate'];

echo "<b>Ονοματεπώνυμο: <l style =\"color:blue;\"> . $name . </l><br />";

echo "<b>Ηλικιακή κατηγορία: </b>";
$agearray = array ("A1"=>"<b><l style =\"color:blue;\">18-21</l></b><br />","A2"=>"<b><l style =\"color:blue;\">22-25</l></b><br />","A3"=>"<b><l style =\"color:blue;\">26-30</></b><br />","A4"=>"<b><l style =\"color:blue;\">Ανω των 30</></b><br />");
echo $agearray[$age];

echo "<b>Εκπαίδευση: </b>";
$eduarray = array ("NO"=>"<b><l style =\"color:blue;\">Λύκειο</l></b><br />","BACHELOR"=>"<b><l style =\"color:blue;\">Πτυχίο</l></b><br />","MASTER"=>"<b><l style =\"color:blue;\">Μεταπτυχιακό</></b><br />","PHD"=>"<b><l style =\"color:blue;\">Διδακτορικό</></b><br />");
echo $eduarray[$education];



echo "<b>Αρχείο Βιογραφικού: </b>" . $cv . "<br />";

echo "<b>Θέμα επικοινωνίας: </b><ul>";
if ($ginfo)
	echo "<b><li><l style =\"color:blue;\">Γενικές Πληροφορίες</></li></b><br />";
if ($sinfo)
	echo "<b><li><l style =\"color:blue;\">Ειδικές Πληροφορίες</></li></b><br />";
if ($interview)
	echo "<b><li><l style =\"color:blue;\">Συνέντευξη</l></li></b><br />";
echo "</ul>";


echo "Μηνυμα:<b><l style=\"color:blue;\">".strtoupper($message)."</l></b><br />";
echo "Ημερομηνία:<b><l style=\"color:blue;\">" . $cdate. "</b><br />";
$hlikia=2022-$cdate;
echo "Ηλικία: <b><l style=\"color:blue;\">" . $hlikia. "<br />";

echo '<form method="POST" action="Lab3.html">
    <input type="submit" name="submit" value="Aρχική Σελίδα"/>
  </form>';

?>
