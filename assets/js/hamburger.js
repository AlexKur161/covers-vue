$(document).ready(function(){
    const cross = document.querySelector('.cross');

	if (cross) {
		const nav = document.querySelector('nav.navigation');
		cross.addEventListener('click', function(e) {
			window.scrollBy({
				top: -100,
				behavior: 'smooth'
			});
			document.body.classList.toggle('locked');
			cross.classList.toggle('cross--active');
			nav.classList.toggle('active');
		});
	}
});