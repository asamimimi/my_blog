// ハンバーガー
const humbtn = document.querySelector('.mobile-menu-icon');

const body = document.querySelector('body');

humbtn.addEventListener('click', function () {
    body.classList.toggle('menu-open');
});

document.querySelectorAll(".header__navItem a").forEach(function (el) {
    el.addEventListener("click", function () {
        body.classList.remove("menu-open");
    });
});
// / 追従メニューの関数
const header = document.querySelector('.header');

const getScrolled = () => {
    const scrolled = window.scrollY;
    if (scrolled > 0) {
        header.classList.add('fixed');
    } if ((scrolled === 0)) {
        header.classList.remove('fixed');
    }
}

// 画面をスクロールをしたら発火
document.addEventListener('scroll', getScrolled)



