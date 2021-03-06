const links = document.querySelectorAll('.link');
const contacts = document.getElementById('contacts');
console.log(links)

links.forEach(element => {
    element.addEventListener("click", function(){
        scrollTo(contacts.getBoundingClientRect());
    });
});

