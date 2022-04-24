<?php
     $conn = mysqli_connect('localhost','root','','użytkownicy');
        
     if(!$conn){
     echo 'Nie udało się połączyć z bazą';
     }

     $query = 'INSERT INTO uzytkownicy (id, imie, nazwisko, pesel, data_urodzenia) VALUES ("","'.$_POST['imie'].'","'.$_POST['nazwisko'].'","'.$_POST['pesel'].'","'.$_POST['data_urodzenia'].'")';

     mysqli_query($conn, $query);

     mysqli_close($conn);

?>