let btnMenu = document.getElementById('btnMenu')
let menu = document.getElementById('menuMobile')

btnMenu.addEventListener('click', () => {
  menu.classList.add('active');
})

menu.addEventListener('click', () => {
  menu.classList.remove('active');
})
