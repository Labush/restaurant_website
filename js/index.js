/****https://github.com/Labush/JS****/

const burger = document.querySelector('.burger')
const nav = document.querySelector('nav')

burger.addEventListener('click', () => {
  nav.classList.toggle('open')
  burger.classList.toggle('open')
})

document.querySelector('.content').addEventListener('click', () => {
  nav.classList.remove('open')
  burger.classList.remove('open')
})

