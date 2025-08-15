hamburgerNav = () => {
    // Menghilangkan dan memunculkan navigasi mobile
    const menu = document.getElementById('mobile-nav');
    menu.classList.toggle("hidden");

    // Ini untuk perubahan dari tiga garis jadi silang euy (bismillah)
    const firstBar = document.getElementById('bar-hamburger-1');
    const secondBar = document.getElementById('bar-hamburger-2');
    const thirdBar = document.getElementById('bar-hamburger-3');
    firstBar.classList.toggle("rotate-45");
    firstBar.classList.toggle("origin-top-left");
    secondBar.classList.toggle("hidden");
    thirdBar.classList.toggle("-rotate-45");
    thirdBar.classList.toggle("origin-bottom-left");
} 



joinFunction = (event) => {
    event.preventDefault();

    const userName = document.getElementById('name').value;
    const userPhone = document.getElementById('phone').value;
    const userEmail = document.getElementById('email').value;
    const userAddress = document.getElementById('address').value;
    
    if (!userName || !userPhone || !userEmail || !userAddress) {
        alert("Please fill in all fields first!");
    } else {
    
        document.getElementById('popup-join').style.display = "flex";
        document.getElementById('popup-name').innerHTML = userName;
    }

    

    localStorage.setItem('name', userName);
    localStorage.setItem('phone', userPhone);
    localStorage.setItem('email', userEmail);
    localStorage.setItem('address', userAddress);
}


closeJoinFunction = () => {
    document.getElementById('popup-join').style.display = "none";
}



scrollPercentage = () => {
    const scrollElement = document.getElementById('scroll-percentage');
    const scrollTop = window.scrollY || document.documentElement.scrollTop;
    const scrollHeight = document.documentElement.scrollHeight - window.innerHeight;
    const scrolled = (scrollTop / scrollHeight) * 100;
    scrollElement.style.width = scrolled + "%";
}

accFunction = (event) => {
    event.preventDefault();

    const inputEmail = document.getElementById('emailAcc').value;
    const inputPhone = document.getElementById('phoneAcc').value;
    const storedEmail = localStorage.getItem('email');
    const storedPhone = localStorage.getItem('phone');

    if (!inputEmail || !inputPhone) {
        alert("Please fill in all fields first!");
    } else {
        if (inputEmail === storedEmail && inputPhone === storedPhone) {
            document.getElementById('popup-acc').style.display = "none";
        } else {
            alert("Incorrect email or phone number!");
        }
    }
}