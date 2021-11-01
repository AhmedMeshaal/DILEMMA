
<nav>
    <a class="logo" href="/">DILEMMA</a>
    <div class="mobile-menu">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
    </div>
    <ul class="nav-list">
        <li><a href="/">Dashboard</a></li>
        <li><a href="/requests">Requests</a></li>
        <li><a href="/tagged/tags">Tags</a></li>
        <li><a href="/firms-list">Firms</a></li>

        <li><a href="/auth/showLoginForm" type="button" class="btn btn-info">Login</a></li>
    </ul>
</nav>

<script language="JavaScript">

    class MobileNavbar {
        constructor(mobileMenu, navList, navLinks) {
            this.mobileMenu = document.querySelector(mobileMenu);
            this.navList = document.querySelector(navList);
            this.navLinks = document.querySelectorAll(navLinks);
            this.activeClass = "active";

            this.handleClick = this.handleClick.bind(this);
        }

        animateLinks() {
            this.navLinks.forEach((link, index) => {
                link.style.animation
                    ? (link.style.animation = "")
                    : (link.style.animation = `navLinkFade 0.5s ease forwards ${
                        index / 7 + 0.3
                    }s`);
            });
        }

        handleClick() {
            this.navList.classList.toggle(this.activeClass);
            this.mobileMenu.classList.toggle(this.activeClass);
            this.animateLinks();
        }

        addClickEvent() {
            this.mobileMenu.addEventListener("click", this.handleClick);
        }

        init() {
            if (this.mobileMenu) {
                this.addClickEvent();
            }
            return this;
        }
    }

    const mobileNavbar = new MobileNavbar(
        ".mobile-menu",
        ".nav-list",
        ".nav-list li",
    );
    mobileNavbar.init();
</script>
