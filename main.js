let wheelMain = (e) => {
	e.preventDefault();
	let delta=e.deltaY
	// alert("scroll" + delta);
	/*window.scrollTo(delta, 0);*/
	document.documentElement.scrollLeft += delta;
	console.log(document.documentElement.scrollLeft);
}

window.onload=()=>{
	window.addEventListener("wheel", wheelMain);
}