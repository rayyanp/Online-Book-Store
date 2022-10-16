const btn=document.getElementById('submit');
btn.addEventListener('click',validIt);

const ccnum=document.getElementById('ccnum');
const m=document.getElementById('month');
const y=document.getElementById('year');
const cvv=document.getElementById('cvv');

function validIt(){
let a1, a2, a3, cardno = /^(?:5[1-5][0-9]{14})$/, cvvno= /^[0-9]{3,4}$/;
if(ccnum.value.match(cardno))
{a1 = 1;} else {alert('wrong number'); a1 = 0;}
let myDate = new Date();
if ((y.value>myDate.getFullYear())||((y.value==myDate.getFullYear())&&(m.value>myDate.getMonth())))
{a2 = 1;} else {alert('expired'); a2 = 0;}
if(cvv.value.match(cvvno))
{a3 = 1;} else {alert('wrong cvv'); a3 = 0;}
if((a1+a2+a3) == 3){
document.getElementById("hidden").value = '1';
}
else {
document.getElementById("hidden").value = '-1';
}
}
