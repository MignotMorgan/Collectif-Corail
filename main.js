let wheelMain = (e) => {
	e.preventDefault();
	let delta=e.deltaY
	// alert("scroll" + delta);
	/*window.scrollTo(delta, 0);*/
	document.documentElement.scrollLeft += delta;
	// console.log(document.documentElement.scrollLeft);
}
let screenWidth = document.documentElement.clientWidth;
let clickSlide = (e) => {
	let scrollLeft = Math.ceil(document.documentElement.scrollLeft/screenWidth)*screenWidth;

	if(document.documentElement.scrollLeft == scrollLeft)
		document.documentElement.scrollLeft += screenWidth;
	else
		document.documentElement.scrollLeft = scrollLeft;
}

window.onload=()=>{
	window.addEventListener("wheel", wheelMain);
}