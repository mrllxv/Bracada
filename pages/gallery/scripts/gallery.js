
  document.addEventListener("DOMContentLoaded", function () {
    const expandButtons = document.querySelectorAll(".gallery__card-button--expand");
    const modal = document.getElementById("imageModal");
    const modalImage = document.getElementById("modalImage");
    const closeModal = document.getElementById("closeModal");
    const overlay = document.getElementById("modalOverlay");

    expandButtons.forEach(button => {
      button.addEventListener("click", function () {
        const img = this.nextElementSibling;
        if (img && img.tagName === "IMG") {
          modalImage.src = img.src;
          modal.classList.remove("hidden");
        }
      });
    });

    closeModal.addEventListener("click", () => {
      modal.classList.add("hidden");
      modalImage.src = "";
    });

    overlay.addEventListener("click", () => {
      modal.classList.add("hidden");
      modalImage.src = "";
    });
  });

