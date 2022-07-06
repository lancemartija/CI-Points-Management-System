const addBtn = document.querySelector('[data-add-button]')
const addModal = document.querySelector('#addmodal')
const closeBtn = document.querySelectorAll('[data-close-button]')

addBtn.addEventListener('click', () => {
  addModal.classList.remove('hidden')
  addModal.classList.add('flex')
})

closeBtn.forEach((btn) => {
  btn.addEventListener('click', () => {
    addModal.classList.add('hidden')
    addModal.classList.remove('flex')
  })
})

addModal.classList.add('hidden')
addModal.classList.remove('flex')
