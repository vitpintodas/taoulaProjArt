export const changeDefi = () => {
    const toggleSection = (hashSplit) => {
        const activeDiv = document.querySelector("div.active");
        if (activeDiv) {
            activeDiv.classList.remove("active");
        }

        const divElement = document.querySelector(`${hashSplit}-section`);
        if (divElement) {
            divElement.classList.add("active");
        }
    };

    const handleHashChange = () => {
        const hash = window.location.hash;

        switch (hash) {
            // Utilisateur
            case "#defi-rapidite":
            case "#defi-tirage":
            case "#defi-selection":
            case "#defi-main":


                toggleSection(hash);
                break;

            default:
                // Page inconnue
                break;
        }

        const currentLink = document.querySelector(`a[href="${hash}"]`);
        const activeLinks = document.querySelectorAll("a.active");
        activeLinks.forEach((link) => {
            link.classList.remove("active");
        });

        if (currentLink) {
            currentLink.classList.add("active");
            const currentIndex = Array.from(
                currentLink.parentNode.parentNode.children
            ).indexOf(currentLink.parentNode);
            sessionStorage.setItem(
                "lastClickedLinkIndex",
                currentIndex.toString()
            );
        }
    };

    const handlePopstate = () => {
        handleHashChange();
    };

    window.addEventListener("hashchange", handleHashChange);
    window.addEventListener("popstate", handlePopstate);

    handleHashChange();
};
