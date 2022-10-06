const btnClose = document.getElementById('btn-close');
const modal = document.getElementById('modal')
btnClose.addEventListener("click", () => {
  modal.classList.toggle("open");
})

