// Toggle mobile menu
const menuBtn = document.getElementById("menu-btn");
const mobileMenu = document.getElementById("mobile-menu");

menuBtn.addEventListener("click", () => {
  mobileMenu.classList.toggle("hidden");
});

// Handle contact form submission
const contactForm = document.getElementById("contact-form");
const formMessage = document.getElementById("form-message");

contactForm.addEventListener("submit", (e) => {
  e.preventDefault();

  const name = contactForm.name.value.trim();
  const email = contactForm.email.value.trim();
  const message = contactForm.message.value.trim();

  if (!name || !email || !message) {
    formMessage.textContent = "Please fill in all fields.";
    formMessage.classList.remove("hidden", "text-green-600");
    formMessage.classList.add("text-red-600");
    return;
  }

  formMessage.textContent = "Thank you for your message! I'll get back to you soon.";
  formMessage.classList.remove("hidden", "text-red-600");
  formMessage.classList.add("text-green-600");

  contactForm.reset();
});

// Dark mode toggle logic
const darkModeToggle = document.getElementById("dark-mode-toggle");
const htmlElement = document.documentElement;
const iconSun = document.getElementById("icon-sun");
const iconMoon = document.getElementById("icon-moon");

// On load, check localStorage theme preference or system preference
function setInitialTheme() {
  const savedTheme = localStorage.getItem("theme");
  if (savedTheme === "light") {
    htmlElement.classList.remove("dark");
    iconSun.classList.add("hidden");
    iconMoon.classList.remove("hidden");
  } else if (savedTheme === "dark") {
    htmlElement.classList.add("dark");
    iconSun.classList.remove("hidden");
    iconMoon.classList.add("hidden");
  } else {
    // On no saved preference, default to system preference
    if (window.matchMedia("(prefers-color-scheme: dark)").matches) {
      htmlElement.classList.add("dark");
      iconSun.classList.remove("hidden");
      iconMoon.classList.add("hidden");
    } else {
      htmlElement.classList.remove("dark");
      iconSun.classList.add("hidden");
      iconMoon.classList.remove("hidden");
    }
  }
}

setInitialTheme();

darkModeToggle.addEventListener("click", () => {
  if (htmlElement.classList.contains("dark")) {
    htmlElement.classList.remove("dark");
    localStorage.setItem("theme", "light");
    iconSun.classList.add("hidden");
    iconMoon.classList.remove("hidden");
  } else {
    htmlElement.classList.add("dark");
    localStorage.setItem("theme", "dark");
    iconSun.classList.remove("hidden");
    iconMoon.classList.add("hidden");
  }
});
