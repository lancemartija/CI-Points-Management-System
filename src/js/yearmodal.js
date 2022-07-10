const addYearBtn = document.querySelector('[data-add-button]')
const viewYearBtn = document.querySelectorAll('[data-view-button]')
const editYearBtn = document.querySelectorAll('[data-edit-button]')
const deleteYearBtn = document.querySelectorAll('[data-delete-button]')
const closeYearBtn = document.querySelectorAll('[data-close-button]')

const addYearModal = document.querySelector('#addyearmodal')
const viewYearModal = document.querySelector('#viewyearmodal')
const editYearModal = document.querySelector('#edityearmodal')
const deleteYearModal = document.querySelector('#deleteyearmodal')

const idField = document.querySelectorAll('#id')
const yearField = document.querySelectorAll('#year')

addYearBtn.addEventListener('click', () => {
  addYearModal.classList.remove('hidden')
  addYearModal.classList.add('flex')
})

viewYearBtn.forEach((btn) => {
  btn.addEventListener('click', () => {
    let year = btn.getAttribute('data-year')

    yearField[0].value = year

    viewYearModal.classList.remove('hidden')
    viewYearModal.classList.add('flex')
  })
})

editYearBtn.forEach((btn) => {
  btn.addEventListener('click', () => {
    let id = btn.getAttribute('data-id')
    let year = btn.getAttribute('data-year')

    idField[0].value = id
    yearField[1].value = year

    editYearModal.classList.remove('hidden')
    editYearModal.classList.add('flex')
  })
})

deleteYearBtn.forEach((btn) => {
  btn.addEventListener('click', () => {
    let id = btn.getAttribute('data-id')

    idField[1].value = id

    deleteYearModal.classList.remove('hidden')
    deleteYearModal.classList.add('flex')
  })
})

closeYearBtn.forEach((btn) => {
  btn.addEventListener('click', () => {
    addYearModal.classList.add('hidden')
    addYearModal.classList.remove('flex')
    viewYearModal.classList.add('hidden')
    viewYearModal.classList.remove('flex')
    editYearModal.classList.add('hidden')
    editYearModal.classList.remove('flex')
    deleteYearModal.classList.add('hidden')
    deleteYearModal.classList.remove('flex')
  })
})

addYearModal.classList.add('hidden')
addYearModal.classList.remove('flex')
viewYearModal.classList.add('hidden')
viewYearModal.classList.remove('flex')
editYearModal.classList.add('hidden')
editYearModal.classList.remove('flex')
deleteYearModal.classList.add('hidden')
deleteYearModal.classList.remove('flex')
