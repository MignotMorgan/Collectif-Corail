const slides = document.querySelectorAll(".main__slide");

/**fonction de la roulette de la souris pour le scrolling horizontale */
let wheelMain = (e) => {
	e.preventDefault();
	let screenWidth = document.documentElement.clientWidth;
	let delta=screenWidth*0.2;//e.deltaY
	if(e.deltaY < 0)
		document.documentElement.scrollLeft -= delta;
	else
		document.documentElement.scrollLeft += delta;
}
/**fonction du défilement horizontale */
let scrollSlide = () => {
	let screenWidth = document.documentElement.clientWidth;
	let currentSlide = Math.ceil(document.documentElement.scrollLeft/screenWidth);
	if(currentSlide >= slides.length-1){
		document.documentElement.scrollLeft = 0;
	}
	else{
		let scrollLeft = currentSlide*screenWidth;
		if(document.documentElement.scrollLeft == scrollLeft)
			document.documentElement.scrollLeft += screenWidth;
		else
			document.documentElement.scrollLeft = scrollLeft;
	}

}
/** click du bouton inclus dans le footer. */
let clickSlide = (e) => {
	scrollSlide();
}
/** click du bouton rond */
const btn_circle = document.querySelector("#btn__img__arrow_circle");
const clickCircle = (e) => {
	/** supprime puis ajoute la class : "btn__img__arrow_circle_animation"  */
	btn_circle.classList.remove("btn__img__arrow_circle_animation");
	btn_circle.classList.add("btn__img__arrow_circle_animation");
	/**lance l'animation */
	btn_circle.style.webkitAnimationPlayState = 'running';
	/**stop l'animation après 2 secondes */
	let timer = setTimeout( () => {
		btn_circle.style.webkitAnimationPlayState = 'paused';
	}, 2000);
	scrollSlide();

}
/**évènement du chargement de la page. */
window.onload=()=>{
	window.addEventListener("wheel", wheelMain);
}