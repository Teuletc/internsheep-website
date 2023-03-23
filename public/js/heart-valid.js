
const changement = document.querySelector("changement");
const icon = document.querySelectorAll("i");

icon.forEach(function(icon) {
  icon.addEventListener("click", function() {
    if (icon.classList.contains("fa-regular")) {
      icon.classList.replace("fa-regular","fa-solid");
    } else {
      icon.classList.replace("fa-solid","fa-regular");
    }
  });
});
                