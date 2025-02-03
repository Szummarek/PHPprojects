
document.addEventListener('DOMContentLoaded', function() {
	

	function drawTable(x,y) {
		const table = document.createElement("table");
		table.id = "table";
		const game = document.getElementById("game");
		game.appendChild(table);
		for (let i=1; i <= y; i++) {
					const tr = table.appendChild(document.createElement("tr"));
						for (let j=1; j <= x; j++) {
							const td = tr.appendChild(document.createElement("td"));
							td.classList.add("tdColor");
							td.setAttribute("data-color", "");
						}
		}
	}
	
	const startTime = new Date().getTime();

	drawTable(4,3);
	

	function addTables() { 
		const smallTable = document.getElementById("small");
		const mediumTable = document.getElementById("medium");
		const largeTable = document.getElementById("big");
		

		smallTable.addEventListener("click", function (){
			const colorsTabSmall = ["#b82c38", "#b82c6d", "#b82cb1", "#8e2cb8", "#4d2cb8", "#2c31b8", "#b82c38", "#b82c6d", "#b82cb1", "#8e2cb8", "#4d2cb8", "#2c31b8",];
			const getTable = document.getElementById("table");
			getTable.parentNode.removeChild(table)
			drawTable(4,3);
			GetCardsColor(colorsTabSmall);
			colorClick();
		})
		mediumTable.addEventListener("click", function (){
			const colorsTabMedium = ["#b82c38", "#b82c6d", "#b82cb1", "#8e2cb8", "#4d2cb8", "#2c31b8", "#2c6bb8", "#2c90b8", "#b82c38", "#b82c6d", "#b82cb1", "#8e2cb8", "#4d2cb8", "#2c31b8", "#2c6bb8", "#2c90b8"];
			const getTable = document.getElementById("table");
			getTable.parentNode.removeChild(table)
			drawTable(4,4);
			GetCardsColor(colorsTabMedium);
			colorClick();
		})

		largeTable.addEventListener("click", function (){
			const colorsTabLarge = ["#b82c38", "#b82c6d", "#b82cb1", "#8e2cb8", "#4d2cb8", "#2c31b8", "#2c6bb8", "#2c90b8", "#2cb8b1", "#2cb879", "#2cb83c", "#69b82c", "#9cb82c", "#b8642c", "#b8b32c", "#b82c38", "#b82c6d", "#b82cb1", "#8e2cb8", "#4d2cb8", "#2c31b8", "#2c6bb8", "#2c90b8", "#2cb8b1", "#2cb879", "#2cb83c", "#69b82c", "#9cb82c", "#b8642c", "#b8b32c" ];
			const getTable = document.getElementById("table");
			getTable.parentNode.removeChild(table)
			drawTable(6,5);
			GetCardsColor(colorsTabLarge);
			colorClick();
		})

	}
	
	addTables();
	

	function GetCardsColor(e) {
		const allTd = document.getElementsByTagName("td");
		for (let i=0; i < allTd.length; i++ ) {
				let randomColor = Math.floor(Math.random() * e.length);
				let tdColors = allTd[i].setAttribute("data-color", e[randomColor]);
				e.splice(randomColor, 1);
			} 
	}
	
	GetCardsColor(["#b82c38", "#b82c6d", "#b82cb1", "#8e2cb8", "#4d2cb8", "#2c31b8",   "#b82c38", "#b82c6d", "#b82cb1", "#8e2cb8", "#4d2cb8", "#2c31b8"]);
	

	function showColor(e) {
		const clicked = document.getElementsByName("clicked");
		const allTd = document.getElementsByTagName("td");

				if (e.target.closest("td").classList.contains("hidden")) {
					return;
				}

				if (clicked.length < 2) {
					const color = e.target.closest("td").getAttribute("data-color");

					e.target.closest("td").style.backgroundColor = color;
					e.target.closest("td").setAttribute("name", "clicked");
					}

				if (clicked.length == 2) {

					for ( let i=0; i < allTd.length; i++) { 
						allTd[i].removeEventListener("click", showColor);
					}
					setTimeout(function() {
						if (clicked[0].getAttribute("data-color") == clicked[1].getAttribute("data-color")) {
							for (let i=0; i < 2; i++) {
								clicked[i].classList.add("hidden");
							}

							if (document.getElementsByClassName("hidden").length == allTd.length) {
								result();
							}
						}
						for (let i=0; i < 2; i++) { 
							clicked[0].removeAttribute("style");
							clicked[0].removeAttribute("name");
						}

						for ( let i=0; i < allTd.length; i++) { 
							allTd[i].addEventListener("click", showColor);
						}					
					}, 		500);
				}
	}
	
	function result(){
		let result = document.getElementById("result");
		const endTime = new Date().getTime();
		const gameTime = (endTime - startTime) / 1000;
		result.innerHTML = "Udało ci się! Oto twój czas: "+gameTime+" s";

	}
	
	function colorClick() {
		const allTd = document.getElementsByTagName("td");
		for ( let i=0; i < allTd.length; i++) { 
			allTd[i].addEventListener("click", showColor) 
	}	}
	
	colorClick();	
	
});