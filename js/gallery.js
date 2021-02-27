let acc = document.getElementsByClassName("button-accordion");
let i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function () {
        /* Toggle between adding and removing the "active" class,
        to highlight the button that controls the panel */

        console.log(this.classList)

        if (this.classList.value != "button-accordion button-accordion--active") {
            document.getElementsByClassName("button-accordion button-accordion--active")
                .item(0).classList.remove("button-accordion--active")

            this.classList.toggle("button-accordion--active");
        }
    });
}