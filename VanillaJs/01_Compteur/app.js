// Votre script JS

var reset = document.querySelector(".reset");
var inc = document.querySelector(".increase");
var dec = document.querySelector(".decrease");
var score = document.querySelector("#value");
var counter = 0 ;
//start Add function

function addFunction(){
    
        counter++;
        score.innerText = counter;
};

inc.addEventListener('click',function(){
    addFunction();
});

// start dec function 

function lessFunction(){
    
    counter--;
    score.innerText = counter;
};
dec.addEventListener('click',function(){
    lessFunction();
});

// reset 

function zeroFunction(){
    counter = 0 ;
    score.innerText = counter;

};
reset.addEventListener('click',function(){
    zeroFunction();
});