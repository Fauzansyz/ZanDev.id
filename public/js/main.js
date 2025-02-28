const popup = document.getElementById('popup');
const openBtn = document.getElementById('open');
const closeBtn = document.getElementById('close');

openBtn.addEventListener("click", () => {
    popup.classList.add("active");
});

closeBtn.addEventListener("click", () => {
    popup.classList.remove("active");
});