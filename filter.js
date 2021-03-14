rows = document.querySelectorAll('tbody tr');

document.querySelectorAll('.dropdown-item.category').forEach(element => {
    element.addEventListener('click', event =>{
        let filterClass = event.target.dataset['f'];
        rows.forEach(element => {
            element.classList.remove('hidden');
            if (!element.classList.contains(filterClass)) {
                element.classList.add('hidden');
            }
        });
    })
});