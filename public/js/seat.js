const seats = document.querySelectorAll(".seat");
let selectedSeat;

seats.forEach((seat) =>
    seat.addEventListener("click", (e) => {
        if (selectedSeat) {
            selectedSeat.classList.remove("selected");
        }
        selectedSeat = e.target;
        selectedSeat.classList.add("selected");
        console.log(`Selected seat: ${selectedSeat.textContent}`);
        document.getElementById("seat-number").value = selectedSeat.textContent;
    })
);
