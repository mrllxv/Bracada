const modal = document.getElementById("imageModal");
const modalImage = document.getElementById("modalImage");
const closeModal = document.getElementById("closeModal");
const overlay = document.getElementById("modalOverlay");

const expandButtons = document.querySelectorAll(
  ".gallery__card-button--expand"
);

expandButtons.forEach((button) => {
  button.addEventListener("click", () => {
    const imgSrc = button.getAttribute("data-image");
    modalImage.src = imgSrc;
    modal.classList.remove("hidden");
  });
});

closeModal.addEventListener("click", () => {
  modal.classList.add("hidden");
});

overlay.addEventListener("click", () => {
  modal.classList.add("hidden");
});
