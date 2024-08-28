import './bootstrap';
document.addEventListener('scroll', function() {
    var footer = document.querySelector('.animated-footer');
    var rect = footer.getBoundingClientRect();
    if (rect.top < window.innerHeight && rect.bottom >= 0) {
        footer.style.opacity = '1';
        footer.style.animationPlayState = 'running';
    }
});

