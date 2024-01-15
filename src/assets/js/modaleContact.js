console.log("modaleContact");

/* affichage de la modale */
const modalContainer = document.querySelector(".modal-container");
const modalTriggers = document.querySelectorAll(".modal-trigger");

modalTriggers.forEach(trigger => trigger.addEventListener("click", toggleModal))

function toggleModal(){
    modalContainer.classList.toggle("active")
}

/* bouton envoyer de la modale contact */

const submitContact = document.getElementById('submitContact');

submitContact.addEventListener('click', () => {
  submitContact.classList.add('onclic');
  setTimeout(() => {
    submitContact.classList.remove('onclic');
    submitContact.classList.add('validate');
    setTimeout(() => {
      submitContact.classList.remove('validate');
    }, 1250);
  }, 2250);
});
