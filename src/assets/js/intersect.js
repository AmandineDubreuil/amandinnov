console.log("hello intersect");

const observer = new IntersectionObserver((entries) => {
  for (const entry of entries) {
    if (entry.isIntersecting) {
        
      entry.target.animate(
        [
          { transform: "translateX(-50px)", opacity: 0 },
          { transform: "translateX(0px)", opacity: 1 },
        ],
        {
          duration: 500,
        }
      );
      observer.unobserve(entry.target)
    }
  }
});

observer.observe(document.querySelector(".conceptionDiv"));
observer.observe(document.querySelector(".utilisateurDiv"));
observer.observe(document.querySelector(".designDiv"));
observer.observe(document.querySelector(".ecouteDiv"));
observer.observe(document.querySelector(".optimisationDiv"));
  
