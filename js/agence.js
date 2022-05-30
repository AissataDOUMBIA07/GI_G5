// function confirmation() {
//     var result = confirm("compte créer avec succès");
// }
// if (result){
//     alert ("merci a bientôt");
// }

document.getElementById("MyBtn").addEventListener("click", function() {
    alert("Logement a été bien ajouter!!!");
  });
// Animation des pages
// function myMove() {
//   let id = null;
//   const elem = document.getElementById("animate");   
//   let pos = 0;
//   clearInterval(id);
//   id = setInterval(frame, 2);
//   function frame() {
//     if (pos == 10) {
//       clearInterval(id);
//     } else {
//       pos++; 
//       elem.style.top = pos + "px"; 
//       elem.style.bottom = pos + "px"; 
//     }
//   }
// }

const menu = document.querySelectorAll('ul li');
const deux = document.querySelectorAll('.ok');
const tableau = document.querySelectorAll('.table-bordered');
const entete = document.querySelectorAll('thead');
const corps = document.querySelectorAll('tbody');

window.addEventListener('load', () => {
  const TL = gsap.timeline({paused:true});
  
  TL
  .From(menu, 1, {top: -50, opacity: 0, ease: "power2.out"}, 0.3)
  .From(btn1, 1, {opacity: 0, ease: "power2.out"}, 0.3, '-=1')
  .From(tableau, 1, {opacity: 0, ease: "power2.out"}, 0.3, '-=1')
  .From(entete, 1, {opacity: 0, ease: "power2.out"}, 0.3, '-=1')
  .From(coprs, 1, {opacity: 0, ease: "power2.out"}, 0.3, '-=1')

  TL.play();
})

