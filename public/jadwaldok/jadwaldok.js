function showCategory(category) {
    document.querySelectorAll('.doctor-category').forEach(cat => {
        cat.style.display = 'none';
    });

    document.getElementById(category).style.display = 'block';
}
