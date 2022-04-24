var imie = document.getElementById('imie');
var nazwisko = document.getElementById('nazwisko');
var pesel = document.getElementById('pesel');
var data = document.getElementById('data');
var button = document.querySelector('.button');


// Funkcja odpowiadająca za przycisk
function send(){
    if(imie.value.length == 0 || nazwisko.value.length == 0 || pesel.value.length == 0 || data.value.length == 0 || pesel.value.length != 11){
        alert('Błąd!');
    }
    else{
        alert('Sukces!');
    }
}

// Funkcja odpowiadająca za ustawianie daty zależnie od peselu
function autoDate(id){

        var peselV = document.getElementById(id).value;

        var arr = new Array();

        for(i=0; i<11; i++){

            arr[i] = parseInt(peselV.substring(i,i+1));
        
        }

        var year = 1900 + arr[0] * 10 + arr[1]; 

        if(arr[2] >= 2 && arr[2] < 8){
            year += Math.floor(arr[2]/2) * 100;
        }

        var month = (arr[2] % 2) * 10 + arr[3];

        if(arr[2] == 2 || arr[2] == 0 || arr[2] == 8){
            month.toString();
            month = '0' + month;
        }


        var day = arr[4] * 10 + arr[5];

        if(arr[4] == 0){
            day.toString();
            day = '0' + day;
        }

        data.value = year + '-' + month + '-' + day; 
    }