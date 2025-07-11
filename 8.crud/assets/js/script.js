document.addEventListener('DOMContentLoaded', () => { 
  const deleteBtn = document.querySelectorAll('.delete');
  Array.from(deleteBtn).forEach((el, _) => { 
    el.addEventListener('click', (e) => { 
      if (!confirm('Are you sure?')) {
        e.preventDefault();
      }
    })
  })
})