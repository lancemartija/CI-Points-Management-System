const viewUserBtn = document.querySelectorAll('[data-view-button]')
const editUserBtn = document.querySelectorAll('[data-edit-button]')
const deleteUserBtn = document.querySelectorAll('[data-delete-button]')

const idField = document.querySelectorAll('#id')
const yearField = document.querySelectorAll('#year')

viewUserBtn.forEach((btn) => {
  btn.addEventListener('click', () => {
    let year = btn.getAttribute('data-year')

    yearField[0].value = year
  })
})

editUserBtn.forEach((btn) => {
  btn.addEventListener('click', () => {
    let id = btn.getAttribute('data-id')
    let year = btn.getAttribute('data-year')

    idField[0].value = id
    yearField[1].value = year
  })
})

deleteUserBtn.forEach((btn) => {
  btn.addEventListener('click', () => {
    let id = btn.getAttribute('data-id')

    idField[1].value = id
  })
})
