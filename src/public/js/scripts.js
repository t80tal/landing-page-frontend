const sliderSubContainer = document.querySelector(".slider-sub-container")
const navbarBadge = document.querySelector(".navbar-badge")
const logo = document.querySelector(".logo")
const navbarLinks = document.querySelectorAll(".navbar-link")

navbarLinks.forEach((link, index) => {
  link.addEventListener("click", () => {
    sliderSubContainer.style.transform = `translateX(${-100 * index}vw)`
    navbarLinks.forEach((navbarLink, index) => {
      navbarLink.classList.remove("active")
    })
    link.classList.add("active")
  })
})

navbarBadge.addEventListener("click", () => {
  window.location.href = "#offer"
})
logo.addEventListener("click", () => {
  window.location.href = "./"
})
