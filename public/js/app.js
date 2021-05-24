if (localStorage.getItem('theme') == 'dark') {
    myFunction(true);
}

function myFunction(isDark) {
    if (isDark) {
        alert("Dark-Mode is on!")
        document.body.setAttribute('id', 'dark-mode');
        localStorage.setItem('theme', 'dark');
    } else {
        document.body.setAttribute('id', '');
        localStorage.removeItem('theme');
    }

}

