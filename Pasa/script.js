const openNav = document.querySelector(".hamburger");
const closeNav = document.querySelector(".close");
const menu = document.querySelector(".menu");

const leftPosition = menu.getBoundingClientRect().left;
openNav.addEventListener("click", () => {
  if (leftPosition < 0) {
    menu.classList.add("show");
  }
});

closeNav.addEventListener("click", () => {
  if (leftPosition < 0) {
    menu.classList.remove("show");
  }
});


document.querySelector('.search').onclick = () =>{
    document.querySelector('#search-form').classList.toggle('active');
  }
  
  document.querySelector('#close').onclick = () =>{
    document.querySelector('#search-form').classList.remove('active');
  }

