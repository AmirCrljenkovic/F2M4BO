let games = document.getElementsByClassName("box")





let goodFilter = document.getElementById("checkbox-good");

goodFilter.onchange = function () {
    if (goodFilter.checked === true) {
        for (let i = 0; i < games.length; i++){
            if (games[i].dataset.category === "good") {
                games[i].style.display = "block"
            }

        }
    }
    else {
        for (let i = 0; i < games.length; i++){
            if (games[i].dataset.category === "good") {
                games[i].style.display = "none"
            }

        }
      }
}

let badFilter = document.getElementById("checkbox-bad");

badFilter.onchange = function () {
    if (badFilter.checked === true) {
        for (let i = 0; i < games.length; i++){
            if (games[i].dataset.category === "bad") {
                games[i].style.display = "block"
            }

        }
    }
    else {
        for (let i = 0; i < games.length; i++){
            if (games[i].dataset.category === "bad") {
                games[i].style.display = "none"
            }

        }
    }
}




