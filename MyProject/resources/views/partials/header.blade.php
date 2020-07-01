<header>
    <div class="header-container">
        <div class="header-logo">
            <img src="https://www.boolean.careers/images/common/logo.png" alt="Logo di Boolean Careers">
        </div>
        <div class="header-nav">
            <ul>
                <li class="{{ Request::route()->getName() == 'homepage' ? 'active' : ''}}"><a href="/">Home</a></li>
                <li class="{{ Request::route()->getName() == 'corso' ? 'active' : ''}}"><a href="/corso">Corso</a></li>
                <li>Dopo il corso</li>
                <li>Lezione gratuita</li>
                <li>Assumi i nostri studenti</li>
            </ul>
            <button>Candidati ora</button>
        </div>
    </div>
</header>