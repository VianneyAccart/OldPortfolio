const btn = document.querySelector(".btn-toggle");
const theme = document.querySelector("#theme-link");

btn.addEventListener("click", function() {
  if (theme.getAttribute("href") == "light-theme.css") { // Si #theme-link contient "light-theme.css"...
    theme.href = "dark-theme.css"; // Modifier en "dark-theme.css"
    localStorage.setItem("theme", "dark");
    document.getElementById("link-toggle").className = "bi bi-brightness-high"; // Et changer l'icône
  } else {
    theme.href = "light-theme.css";
    localStorage.setItem("theme", "light");
    document.getElementById("link-toggle").className = "bi bi-moon";
  }
});

if(localStorage.getItem("theme") == "dark"){
  theme.href = "dark-theme.css";
  document.getElementById("link-toggle").className = "bi bi-brightness-high";
} else {
  theme.href = "light-theme.css";
  document.getElementById("link-toggle").className = "bi bi-moon";
};

