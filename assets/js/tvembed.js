/** script to embed site on touchscreens  */
document.addEventListener('DOMContentLoaded', () => {

    // Define the query parameter key and value to be added
    const tvParamKey = 'tvembed';
    const tvParamValue = 'embed-class';
    
    // Select all <a> elements within .menu and .products
    const links = document.querySelectorAll('.menu a, .products a');

    // Iterate over each link and update the href attribute
    links.forEach(link => {

        // Get the href attribute
        const href = link.getAttribute('href');
        
        // Skip links that are empty, anchors, or JavaScript
        if (!href || href.startsWith('#') || href.startsWith('javascript:')) return;

        // Create a URL object to update query params
        const url = new URL(href, window.location.origin);

        // Get the current value of the tvembed parameter, if it exists
        const currentValue = url.searchParams.get(tvParamKey);
        
        // Only add or update tvembed param if missing or has a different value
        if (currentValue !== tvParamValue) {
            url.searchParams.set(tvParamKey, tvParamValue);
        }

        // Write normalized relative URL back to <a>
        const newHref = url.pathname + url.search + url.hash;
        link.setAttribute('href', newHref);
    });
    
});