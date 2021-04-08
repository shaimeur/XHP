var button = document.getElementById("enter");
var input = document.getElementById("userinput");
const ul = document.querySelector("ul");
const li = document.getElementsByTagName("li");

/*  For now the i element is not there we will create it */
const deleteButton = document.getElementsByTagName("i");

var clearButton = document.getElementById("clear");

// console.log(button);
// console.log(input);
// console.log(ul);
// console.log(li);
// console.log(deleteButton);
// console.log(clearButton);



/* Functions code here */
// function inputLength(x){
//     return x.length;
// }
// button.addEventListener('click',function(){
//    console.log(inputLength(input.value)) ;
// });
/*        Fin           */

// Function create element :


function createListElement(){
    var div = document.createElement("div");
    var li = document.createElement("li");
    var div2 = document.createElement("div2");
    div.classList.add("li-wrapper");
    div2.classList.add("div");
    ul.appendChild(div);
    li.innerText=input.value;
    ul.appendChild(li);
    ul.appendChild(div2);
    input.value ="";
}

button.addEventListener('click',function(){
    createListElement();
});

// Function delete  element :



addEventListener








/*        Fin           */

// clearButton.addEventListener("click", clearList);
// ul.addEventListener("click", strikeThrough);
// button.addEventListener("click", addListAfterClick);
// input.addEventListener("keypress", addListAfterKeypress);
// createDeleteButtonIcon();
// deleteParentNodeOnClick();