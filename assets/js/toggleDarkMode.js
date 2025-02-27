document.addEventListener("DOMContentLoaded", () => {
  const toggleButton = document.getElementById("dark-mode-toggle");

  // Check if dark mode was previously enabled
  if (localStorage.getItem("darkMode") === "enabled") {
    document.body.classList.add("dark-mode");
  }

  toggleButton.addEventListener("click", () => {
    if (document.body.classList.contains("dark-mode")) {
      document.body.classList.remove("dark-mode");
      localStorage.setItem("darkMode", "disabled");
    } else {
      document.body.classList.add("dark-mode");
      localStorage.setItem("darkMode", "enabled");
    }
  });
});
