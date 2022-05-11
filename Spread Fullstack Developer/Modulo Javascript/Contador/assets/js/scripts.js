var currentNumberWrapper = document.getElementById('currentNumber')
var increment = document.getElementById("increment")
var decrement = document.getElementById("decrement")

var currentNumber = 0;
contador = 0

increment.addEventListener("click",
    function increment(){   
            if(currentNumber < 10){
                currentNumber = currentNumber + 1; 
                currentNumberWrapper.innerHTML = currentNumber;
            }
        } 
);

decrement.addEventListener("click",
    function decrement(){
        if(currentNumber > -10){
            currentNumber = currentNumber - 1; 
            currentNumberWrapper.innerHTML = currentNumber; 
        }
    }
);