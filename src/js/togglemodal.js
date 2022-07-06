const addModal = document.querySelector('#addmodal')
const editModal = document.querySelector('#editmodal')
const addBtn = document.querySelector('[data-add-button]')
const editBtn = document.querySelectorAll('[data-edit-button]')
const closeBtn = document.querySelectorAll('[data-close-button]')

addBtn.addEventListener('click', () => {
  addModal.classList.remove('hidden')
  addModal.classList.add('flex')
})

editBtn.forEach((btn) => {
  btn.addEventListener('click', () => {
    editModal.classList.remove('hidden')
    editModal.classList.add('flex')
  })
})

closeBtn.forEach((btn) => {
  btn.addEventListener('click', () => {
    addModal.classList.add('hidden')
    addModal.classList.remove('flex')
    editModal.classList.add('hidden')
    editModal.classList.remove('flex')
  })
})

addModal.classList.add('hidden')
addModal.classList.remove('flex')
editModal.classList.add('hidden')
editModal.classList.remove('flex')
