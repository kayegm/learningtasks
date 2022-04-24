function talkid(obj){
    if (obj.id === 'minion-1') {
        const myElement = document.getElementById('bob-talk');
            myElement.style.display = "block";
}  if (obj.id === 'minion-2'){
         const myElement = document.getElementById('kevin-talk');
            myElement.style.display = "block";       
} if (obj.id === 'minion-3'){
        const myElement = document.getElementById('stuart-talk');
    myElement.style.display = "block";
     }
}

function hideid(obj) {
   if (obj.id === 'minion-1') {
        const myElement = document.getElementById('bob-talk');
            myElement.style.display = "none";
 }  if (obj.id === 'minion-2') {
        const myElement = document.getElementById('kevin-talk');
            myElement.style.display = "none";
 } if (obj.id === 'minion-3'){
       const myElement = document.getElementById('stuart-talk');
            myElement.style.display = "none";
      }
}