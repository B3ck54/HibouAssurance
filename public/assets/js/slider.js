let range = document.getElementById('g-range-value');
const showRangeValue = (ev) => {
  range.innerHTML = ev.target.value/100;
}

document.getElementById('myRange').addEventListener('input', (e) => {
  showRangeValue(e);
});


/* document.getElementById('myRange').addEventListener("input",(event)=>{showRangeValue(event)}) 
 */

/* const AfficheValeur = (event) => {
 // console.log(this.value)
  document.getElementById('g-range-value').textContent=event.target.value
}

document.getElementById('myRange').addEventListener("input",AfficheValeur) */