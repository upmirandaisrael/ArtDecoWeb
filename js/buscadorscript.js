document.addEventListener('DOMContentLoaded', function() {
    const searchIcon = document.querySelector('.icon-second');
    const searchForm = document.getElementById('search-form');

    searchIcon.addEventListener('click', function() {
        if (searchForm.style.display === 'none' || searchForm.style.display === '') {
            searchForm.style.display = 'block';
        } else {
            searchForm.style.display = 'none';
        }
    });
});