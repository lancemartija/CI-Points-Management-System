const addModal = document.querySelector('#addmodal') || ''
const addBtn = document.querySelector('[data-add-button]') || ''
const viewModal = document.querySelector('#viewmodal') || ''
const viewBtn = document.querySelectorAll('[data-view-button]') || ''
const editModal = document.querySelector('#editmodal') || ''
const editBtn = document.querySelectorAll('[data-edit-button]') || ''
const deleteModal = document.querySelector('#deletemodal') || ''
const deleteBtn = document.querySelectorAll('[data-delete-button]') || ''
const approveModal = document.querySelector('#approvemodal') || ''
const approveBtn = document.querySelectorAll('[data-approve-button]') || ''
const rejectModal = document.querySelector('#rejectmodal') || ''
const rejectBtn = document.querySelectorAll('[data-reject-button]') || ''
const closeBtn = document.querySelectorAll('[data-close-button]') || ''

if (addBtn !== '' && addModal !== '') {
  addBtn.addEventListener('click', () => {
    addModal.classList.remove('hidden')
    addModal.classList.add('flex')
  })

  if (addModal !== '') {
    addModal.classList.add('hidden')
    addModal.classList.remove('flex')
  }
}

if (viewBtn !== '') {
  viewBtn.forEach((btn) => {
    btn.addEventListener('click', () => {
      viewModal.classList.remove('hidden')
      viewModal.classList.add('flex')
    })
  })

  if (viewModal !== '') {
    viewModal.classList.add('hidden')
    viewModal.classList.remove('flex')
  }
}

if (editBtn !== '') {
  editBtn.forEach((btn) => {
    btn.addEventListener('click', () => {
      editModal.classList.remove('hidden')
      editModal.classList.add('flex')
    })
  })

  if (editModal !== '') {
    editModal.classList.add('hidden')
    editModal.classList.remove('flex')
  }
}

if (editBtn !== '') {
  deleteBtn.forEach((btn) => {
    btn.addEventListener('click', () => {
      deleteModal.classList.remove('hidden')
      deleteModal.classList.add('flex')
    })
  })

  if (deleteModal !== '') {
    deleteModal.classList.add('hidden')
    deleteModal.classList.remove('flex')
  }
}

if (approveBtn !== '') {
  approveBtn.forEach((btn) => {
    btn.addEventListener('click', () => {
      approveModal.classList.remove('hidden')
      approveModal.classList.add('flex')
    })
  })
}

if (rejectBtn !== '') {
  rejectBtn.forEach((btn) => {
    btn.addEventListener('click', () => {
      rejectModal.classList.remove('hidden')
      rejectModal.classList.add('flex')
    })
  })
}

if (closeBtn !== '') {
  closeBtn.forEach((btn) => {
    btn.addEventListener('click', () => {
      if (addModal !== '') {
        addModal.classList.add('hidden')
        addModal.classList.remove('flex')
      }
      if (viewModal !== '') {
        viewModal.classList.add('hidden')
        viewModal.classList.remove('flex')
      }
      if (editModal !== '') {
        editModal.classList.add('hidden')
        editModal.classList.remove('flex')
      }
      if (deleteModal !== '') {
        deleteModal.classList.add('hidden')
        deleteModal.classList.remove('flex')
      }
      if (approveModal !== '') {
        approveModal.classList.add('hidden')
        approveModal.classList.remove('flex')
      }
      if (rejectModal !== '') {
        rejectModal.classList.add('hidden')
        rejectModal.classList.remove('flex')
      }
    })
  })
}
