(function() {
    const items = document.querySelectorAll(".item");
    const prev = document.querySelector(".prev");
    const next = document.querySelector(".next");

    if (items.length > 0) {
        const total = items.length;
        const lastItem = total - 1; //3
        let current = 0;

        items[0].classList.add("active");

        if (next) {
            next.addEventListener("click", (e) => {
                let nextIndex = current;
                current++;
                setActive(nextIndex, current);
            });
        }

        if (prev) {
            prev.addEventListener("click", (e) => {
                let prevIndex = current;
                current--;
                setActive(prevIndex, current);
            });
        }

        function setActive(prevIndex, nextIndex) {
            let active = current;

            if (nextIndex > lastItem) {
                active = 0;
                current = 0;
            }

            if (nextIndex < 0) {
                active = lastItem;
                current = lastItem;
            }

            if (items[prevIndex]) {
                items[prevIndex].classList.remove("active");
            }
            if (items[active]) {
                items[active].classList.add("active");
            }
        }
    }
})();
