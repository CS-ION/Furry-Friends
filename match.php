<?php
$fileContents = file('petData.txt');

$pets = array();
foreach ($fileContents as $line) {
  $data = explode(':', $line);
  $pet = array(
    'pet' => $data[2],
    'breed' => $data[3],
    'age' => $data[4],
    'gender' => $data[5],
    'get_along_dog' => $data[6],
    'get_along_cat' => $data[7],
    'get_along' => $data[8],
    'description' => $data[9],
    'name' => $data[10],
    'email' => $data[11],
  );
  $pets[] = $pet;
}

$matchingPets = array();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data1 = $_POST['pet'];
    $data2 = $_POST['breed'];
    $data3 = $_POST['age'];
    $data4 = $_POST['gender'];
    $data5 = $_POST['get_along'];
  foreach ($pets as $pet) {
    if ($pet['pet'] == $data1 && ($pet['breed'] == $data2 || $data2 == 'Does Not Matter')
        && ($pet['age'] == $data3 || $data3 == 'Does Not Matter') 
        && ($pet['gender'] == $data4 || $data4 == 'dnm') ) {
        $counter = 0;
        if ($pet['get_along_cat']==$data5){
            $counter++;
        }
        if ($pet['get_along_dog']==$data5){
            $counter++;
        }
        if ($pet['get_along']==$data5){
            $counter++;
        }
        if ($counter>=2 || $data5=='dnm'){
            $matchingPets[] = $pet;
        }
    }
  }
}

if (empty($matchingPets)){
    echo '<script>alert("No matches found unfortunately.")</script>';
    echo("<script>location.href = 'FindCatDog.php';</script>");
    exit;
}else {
    echo '<table class="matching-pets">';
    echo '<thead><tr><th>Pet</th><th>Breed</th><th>Age</th><th>Gender</th>
    <th>Compatibility with Dogs</th><th>Compatibility with Dogs</th><th>Compatibility with Children</th>
    <th>Description</th><th>Owner Name</th><th>Owner Email</th></tr></thead>';
    echo '<tbody>';
    foreach ($matchingPets as $pet) {
        echo '<tr>';
        echo '<td>' . $pet['pet'] . '</td>';
        echo '<td>' . $pet['breed'] . '</td>';
        echo '<td>' . $pet['age'] . '</td>';
        echo '<td>' . $pet['gender'] . '</td>';
        echo '<td>' . $pet['get_along_cat'] . '</td>';
        echo '<td>' . $pet['get_along_dog'] . '</td>';
        echo '<td>' . $pet['get_along'] . '</td>';
        echo '<td>' . $pet['description'] . '</td>';
        echo '<td>' . $pet['name'] . '</td>';
        echo '<td>' . $pet['email'] . '</td>';
        echo '</tr>';
    }
    echo '</tbody>';
    echo '</table>';
}

  
?>