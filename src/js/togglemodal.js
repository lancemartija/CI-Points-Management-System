const addModal = document.querySelector('#addmodal')
const editModal = document.querySelector('#editmodal')
const deleteModal = document.querySelector('#deletemodal')
const addBtn = document.querySelector('[data-add-button]')
const editBtn = document.querySelectorAll('[data-edit-button]')
const deleteBtn = document.querySelectorAll('[data-delete-button]')
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

deleteBtn.forEach((btn) => {
  btn.addEventListener('click', () => {
    deleteModal.classList.remove('hidden')
    deleteModal.classList.add('flex')
  })
})

closeBtn.forEach((btn) => {
  btn.addEventListener('click', () => {
    addModal.classList.add('hidden')
    addModal.classList.remove('flex')
    editModal.classList.add('hidden')
    editModal.classList.remove('flex')
    deleteModal.classList.add('hidden')
    deleteModal.classList.remove('flex')
  })
})

addModal.classList.add('hidden')
addModal.classList.remove('flex')
editModal.classList.add('hidden')
editModal.classList.remove('flex')
deleteModal.classList.add('hidden')
deleteModal.classList.remove('flex')
