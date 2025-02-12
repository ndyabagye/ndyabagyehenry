// This is all you.

// Dark mode toggle
document.addEventListener("DOMContentLoaded", function () {
	const themeToggleButton = document.getElementById("theme-toggle");
	const themeIcon = document.getElementById("theme-icon");
    const root = document.documentElement;
	
    // Function to set the theme
    function setTheme(theme) {
		if (theme === "dark") {
			root.classList.add("dark");
			localStorage.setItem("theme", "dark");
			themeIcon.textContent = "🌙"; // Moon icon for dark mode
        } else {
            root.classList.remove("dark");
			localStorage.setItem("theme", "light");
			themeIcon.textContent = "🌞"; // Sun icon for light mode
        }
    }
	
    // Check localStorage for theme preference
    const storedTheme = localStorage.getItem("theme");
    if (storedTheme) {
		setTheme(storedTheme);
    } else if (window.matchMedia("(prefers-color-scheme: dark)").matches) {
		setTheme("dark");
    }
	
    // Event listener for the toggle button
    themeToggleButton.addEventListener("click", function () {
		if (root.classList.contains("dark")) {
			setTheme("light");
        } else {
			setTheme("dark");
        }
    });
});
