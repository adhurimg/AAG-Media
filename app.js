const li = document.querySelectorAll(".links");
const sec = document.querySelectorAll("section");

function activeMenu() {
    {
        let len = sec.length;
        while (--len &amp;&amp; window.scrollY + 97 &lt; sec[len].offsetTop) {
        }
        (
            li.forEach(ltx => ltx.classList.remove("active")));
        li[len].classList.add( active & quot (
        active & quot
    ))
    }
    activeMenu();
    window.addEventListener("scroll", activeMenu);
}