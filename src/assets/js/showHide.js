console.log("hello index.js");

const conception = document.querySelector("#conception");
const detailConception = document.querySelector("#detailConception");
const utilisateur = document.querySelector("#utilisateur");
const detailUtilisateur = document.querySelector("#detailUtilisateur");
const design = document.querySelector("#design");
const detailDesign = document.querySelector("#detailDesign");
const ecoute = document.querySelector("#ecoute");
const detailEcoute = document.querySelector("#detailEcoute");
const optimisation = document.querySelector("#optimisation");
const detailOptimisation = document.querySelector("#detailOptimisation");


const showDetailConception = () => {
  detailConception.classList.add("reveal-visible");
};
const hideDetailConception = () => {
    detailConception.classList.remove("reveal-visible");
  };
const showDetailUtilisateur = () => {
  detailUtilisateur.classList.add("reveal-visible");
};
const hideDetailUtilisateur = () => {
    detailUtilisateur.classList.remove("reveal-visible");
  };
const showDetailDesign = () => {
  detailDesign.classList.add("reveal-visible");
};
const hideDetailDesign = () => {
    detailDesign.classList.remove("reveal-visible");
  };
const showDetailEcoute = () => {
  detailEcoute.classList.add("reveal-visible");
};
const hideDetailEcoute = () => {
    detailEcoute.classList.remove("reveal-visible");
  };
const showDetailOptimisation = () => {
  detailOptimisation.classList.add("reveal-visible");
};
const hideDetailOptimisation = () => {
    detailOptimisation.classList.remove("reveal-visible");
  };

conception.addEventListener("mouseover", showDetailConception);
detailConception.addEventListener("mouseleave", hideDetailConception );
utilisateur.addEventListener("mouseover", showDetailUtilisateur);
detailUtilisateur.addEventListener("mouseleave", hideDetailUtilisateur );
design.addEventListener("mouseover", showDetailDesign);
detailDesign.addEventListener("mouseleave", hideDetailDesign );
ecoute.addEventListener("mouseover", showDetailEcoute);
detailEcoute.addEventListener("mouseleave", hideDetailEcoute );
optimisation.addEventListener("mouseover", showDetailOptimisation);
detailOptimisation.addEventListener("mouseleave", hideDetailOptimisation );
