const  container = document.getElementById('container');

document.querySelectorAll('.hover\\:bg').forEach((div) => {
    div.addEventListener('mouseover', function() {
        container.style.backgroundImage = 'url(' + this.dataset.bg + ')';
    });
    div.addEventListener('mouseout', function() {
        container.style.backgroundImage = 'url(/assets/images/features/willaPodScietaLipa-4.jpg)';
    });
});