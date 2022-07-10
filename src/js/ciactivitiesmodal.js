const addActivityBtn = document.querySelector('[data-add-button]')
const viewActivityBtn = document.querySelectorAll('[data-view-button]')
const editActivityBtn = document.querySelectorAll('[data-edit-button]')
const deleteActivityBtn = document.querySelectorAll('[data-delete-button]')
const closeActivityBtn = document.querySelectorAll('[data-close-button]')

const addActivityModal = document.querySelector('#addactivitymodal')
const viewActivityModal = document.querySelector('#viewactivitymodal')
const editActivityModal = document.querySelector('#editactivitymodal')
const deleteActivityModal = document.querySelector('#deleteactivitymodal')

const idField = document.querySelectorAll('#id')
const titleField = document.querySelectorAll('#title')
const dateField = document.querySelectorAll('#date')
const venueField = document.querySelectorAll('#venue')
const departmentField = document.querySelectorAll('#department')
const divisionField = document.querySelectorAll('#division')
const descriptionField = document.querySelectorAll('#description')
const typeField = document.querySelectorAll('#type')
const durationField = document.querySelectorAll('#duration')
const cipointsField = document.querySelectorAll('#cipoints')
const yearField = document.querySelectorAll('#year')
const semesterField = document.querySelectorAll('#semester')
const supervisorField = document.querySelectorAll('#supervisor')

addActivityBtn.addEventListener('click', () => {
  addActivityModal.classList.remove('hidden')
  addActivityModal.classList.add('flex')
})

viewActivityBtn.forEach((btn) => {
  btn.addEventListener('click', () => {
    let title = btn.getAttribute('data-title')
    let date = btn.getAttribute('data-date')
    let venue = btn.getAttribute('data-venue')
    let department = btn.getAttribute('data-department')
    let division = btn.getAttribute('data-division')
    let description = btn.getAttribute('data-description')
    let type = btn.getAttribute('data-type')
    let duration = btn.getAttribute('data-duration')
    let cipoints = btn.getAttribute('data-cipoints')
    let year = btn.getAttribute('data-year')
    let semester = btn.getAttribute('data-semester')
    let superivsor = btn.getAttribute('data-supervisor')

    titleField[0].value = title
    dateField[0].value = date
    venueField[0].value = venue
    departmentField[0].value = department
    divisionField[0].value = division
    descriptionField[0].value = description
    typeField[0].value = type
    durationField[0].value = duration
    cipointsField[0].value = cipoints
    yearField[0].value = year
    semesterField[0].value = semester
    supervisorField[0].value = superivsor

    viewActivityModal.classList.remove('hidden')
    viewActivityModal.classList.add('flex')
  })
})

editActivityBtn.forEach((btn) => {
  btn.addEventListener('click', () => {
    let id = btn.getAttribute('data-id')
    let title = btn.getAttribute('data-title')
    let date = btn.getAttribute('data-date')
    let venue = btn.getAttribute('data-venue')
    let department = btn.getAttribute('data-department')
    let division = btn.getAttribute('data-division')
    let description = btn.getAttribute('data-description')
    let type = btn.getAttribute('data-type')
    let duration = btn.getAttribute('data-duration')
    let cipoints = btn.getAttribute('data-cipoints')
    let year = btn.getAttribute('data-year')
    let semester = btn.getAttribute('data-semester')
    let superivsor = btn.getAttribute('data-supervisor')

    idField[0].value = id
    titleField[1].value = title
    dateField[1].value = date
    venueField[1].value = venue
    departmentField[1].value = department
    divisionField[1].value = division
    descriptionField[1].value = description
    typeField[1].value = type
    durationField[1].value = duration
    cipointsField[1].value = cipoints
    yearField[1].value = year
    semesterField[1].value = semester
    supervisorField[1].value = superivsor

    editActivityModal.classList.remove('hidden')
    editActivityModal.classList.add('flex')
  })
})

deleteActivityBtn.forEach((btn) => {
  btn.addEventListener('click', () => {
    let id = btn.getAttribute('data-id')

    idField[1].value = id

    deleteActivityModal.classList.remove('hidden')
    deleteActivityModal.classList.add('flex')
  })
})

closeActivityBtn.forEach((btn) => {
  btn.addEventListener('click', () => {
    addActivityModal.classList.add('hidden')
    addActivityModal.classList.remove('flex')
    viewActivityModal.classList.add('hidden')
    viewActivityModal.classList.remove('flex')
    editActivityModal.classList.add('hidden')
    editActivityModal.classList.remove('flex')
    deleteActivityModal.classList.add('hidden')
    deleteActivityModal.classList.remove('flex')
  })
})

addActivityModal.classList.add('hidden')
addActivityModal.classList.remove('flex')
viewActivityModal.classList.add('hidden')
viewActivityModal.classList.remove('flex')
editActivityModal.classList.add('hidden')
editActivityModal.classList.remove('flex')
deleteActivityModal.classList.add('hidden')
deleteActivityModal.classList.remove('flex')
