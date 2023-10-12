const menuHamburger = document.querySelector(".fa-bars")
const navLinks = document.querySelector(".nav-links")
const navLis = document.querySelectorAll(".nav-menu li.li-dropdown")

menuHamburger.addEventListener('click',()=>{
  navLinks.classList.toggle('mobile-menu')
  document.querySelector("body").classList.toggle('fixed')
})

navLinks.addEventListener('click',(e)=>{
  if(e.target.tagName == 'I') {
    if(e.target.parentNode.parentElement.classList.contains('li-dropdown')) {
      return
    }
  } else {
    if(e.target.parentElement.classList.contains('li-dropdown')) {
      return
    }
  }
  if(e.target.classList.contains('li-dropdown')) {
    return
  }
  navLinks.classList.remove('mobile-menu')
  document.querySelector("body").classList.remove('fixed')
})

navLis.forEach(navLi => {
  navLi.addEventListener('mouseleave',()=>{
    setTimeout(() => {
      navLi.children[0].classList.remove('show');
    }, 500);
  })
  navLi.addEventListener('mouseover',()=>{
    navLi.children[0].classList.add('show');
  })
});

window.onscroll = function() {
  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
    document.getElementById("back-to-top-btn").style.display = "block";
  } else {
    document.getElementById("back-to-top-btn").style.display = "none";
  }
};

document.getElementById("back-to-top-btn").addEventListener("click", function(){
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
});