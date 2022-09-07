var contents = document.querySelectorAll('.switch');
var navBtns = document.querySelectorAll('.nav-item');

console.log(contents,navBtns);

for (let i = 0; i < contents.length; i++) {

    activeBtn = navBtns[i];
    activeContent = contents[i];

    navBtns[i].onclick = () => {
        contents[0].classList.remove('active');
        navBtns[0].classList.remove('active');

        activeBtn.classList.remove('active');
        activeContent.classList.remove('active');
        contents[i].classList.toggle('active');
        navBtns[i].classList.toggle('active');

        activeBtn = navBtns[i];
        activeContent = contents[i];
    }
}