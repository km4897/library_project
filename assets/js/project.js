// Asking user to confirm before any button or link marked with data-confirm.
document.addEventListener("click", function (event) {
  const link = event.target.closest("[data-confirm]");
  if (link && !confirm(link.dataset.confirm)) event.preventDefault();
});

// Phone menu: the links are only collapsed once this script has run,
const nav = document.querySelector(".nav");
const toggle = document.querySelector(".nav-toggle");

if (nav && toggle) {
  nav.classList.add("has-toggle");
  toggle.addEventListener("click", function () {
    const open = nav.classList.toggle("is-open");
    toggle.setAttribute("aria-expanded", open ? "true" : "false");
  });
}
