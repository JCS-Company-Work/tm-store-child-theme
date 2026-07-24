// cognito-loader.js
(function () {
    // Get the script tag that loaded this file
    const currentScript = document.currentScript || document.querySelector('script[src*="cognito-loader.js"]');
    const formId = currentScript ? currentScript.getAttribute('data-form-id') : null;
    const cognitoKey = 'Sury_MZgpkuseG8RGriOkg'; // Your Cognito API key

    if (!formId) {
        console.error('Cognito Loader: data-form-id attribute is required');
        return;
    }

    let loaded = false;

    function loadCognito() {
        if (loaded) return;
        loaded = true;

        const mount = document.getElementById('cognito-form');
        if (!mount) {
            console.error('Cognito mount #cognito-form not found');
            return;
        }

        // Create the script tag where the form should render
        const s = document.createElement('script');
        s.src = 'https://www.cognitoforms.com/f/seamless.js';
        s.async = true;
        s.setAttribute('data-key', cognitoKey);
        s.setAttribute('data-form', formId);
        mount.appendChild(s);

        // Prefill once Cognito is ready
        const productUrl = window.location.origin + window.location.pathname;
        const urlParams = new URLSearchParams(window.location.search);

        // Parameters to exclude from queryString
        const excludeParams = ['base', 'veneer', 'colour', 'model'];

        // Build new query string excluding product params
        const filteredParams = new URLSearchParams();
        urlParams.forEach((value, key) => {
            if (!excludeParams.includes(key)) {
                filteredParams.append(key, value);
            }
        });

        const queryString = filteredParams.toString() 
            ? `?${filteredParams.toString()}` 
            : '';

        // Log values to console
        console.log('Product URL:', productUrl);
        console.log('Query String:', queryString);

        (function prefillWhenReady(attempt) {
            if (window.Cognito && typeof window.Cognito.prefill === 'function') {
                window.Cognito.prefill({ 
                    "ContactDetails": { 
                        "Product": productUrl,
                        "QueryString": queryString
                    } 
                });
                console.log('Cognito prefilled with:', { productUrl, queryString });
                return;
            }
            if (attempt < 60) setTimeout(() => prefillWhenReady(attempt + 1), 100);
        })(0);
    }

    // Trigger on first user interaction
    ['scroll', 'click', 'touchstart', 'keydown', 'mousemove'].forEach(evt => {
        window.addEventListener(evt, loadCognito, { once: true, passive: true });
    });

    // Fallback: load anyway after 5 seconds
    window.setTimeout(loadCognito, 5000);
})();