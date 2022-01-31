const active = document.getElementsByClassName("checkbox-filter__link");
var i;

for (i = 0; i < active.length; i++) {
    active[i].addEventListener("click", function() {
        this.classList.toggle("opp");

    });
}

