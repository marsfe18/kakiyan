// jshint esversion: 6
const authorSearch = document.getElementById('authorSearch');
    authorSearch.addEventListener('keyup', e =>{
    let currentValue = e.target.value.toLowerCase();
    let authors = document.querySelectorAll('h4.menu-title');
    authors.forEach(author => {
        if(author.textContent.toLowerCase().includes(currentValue)){
            author.parentNode.parentNode.parentNode.style.display = 'block';
        } else{
            author.parentNode.parentNode.parentNode.style.display = 'none';
        }
    });
});