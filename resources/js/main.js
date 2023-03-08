/* Navbar */
let navbar= document.querySelector('#navbar');

window.addEventListener('scroll', ()=>{
  let scrolled= window.scrollY;

  if(scrolled > 0){
    navbar.classList.add('bg-second', 'py-0');
  }else{
    navbar.classList.remove('bg-second', 'py-0');
  }
})

/* Our Work Numbers */
let firstNumber= document.querySelector('#firstNumber');
let secondNumber= document.querySelector('#secondNumber');
let thirdNumber= document.querySelector('#thirdNumber');
let fourthNumber= document.querySelector('#fourthNumber');

function createCounter(element, final){
  let counter= 0;

  let interval= setInterval(()=>{
    if (counter < final) {
      counter++;
      element.innerHTML= counter;
    }else{
      clearInterval(interval);
    }
  }, 1);
}

//blocco l'innumeramento automatico quando si intercetta la scrollbar con gli elementi
let isChecked= false;

let observer= new IntersectionObserver((entries)=>{
  entries.forEach(entry=>{
    if (entry.isIntersecting && isChecked== false) {
      createCounter(firstNumber, 1258);
      createCounter(secondNumber, 150);
      createCounter(thirdNumber, 1255);
      createCounter(fourthNumber, 1157);
      isChecked= true;
    }
  })
})

observer.observe(firstNumber);

/* Testimonials carousel */
let swiper = new Swiper(".mySwiper", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    coverflowEffect: {
      rotate: 50,
      stretch: 0,
      depth: 100,
      modifier: 1,
      slideShadows: true,
      scale: 0.5
    },
    pagination: {
      el: ".swiper-pagination",
    },
    loop: true
});