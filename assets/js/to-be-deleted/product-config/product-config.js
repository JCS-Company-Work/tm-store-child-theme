/**
 * ColourOptions class to manage the dynamic updating of available product options based on the selected top colour in the product configurator.
 * 
 * This class fetches the available options for each top colour from the server, listens for changes to the top colour selection, and updates the available options for the base and edge groups accordingly. It also handles setting the initial state of the configurator based on URL parameters or default selections in the HTML.
 * 
 * The mapping of available options for each top colour is defined in a Google Sheet and accessed via a custom REST API endpoint.
 */
class ColourOptions {

    constructor() {

		// Object to hold colour options data from server
        this.colourOptions = {};

		// Map option types to css classes
		this.optionToClass = {
			base: 'base',
			edge: 'metal-edge-veneer'
		};

		// Init functions
		this.init();

    }

	init() {
		this.fetchColourOptions();
		this.setConfigDrawerState();
	}

	/**
	 * Fetch colour options data from the server and initialize the configurator with the fetched data.
	 */
    fetchColourOptions = () => {

		// Fetch colour options data from the server
        fetch('/wp-json/tmco/v1/colour-options')
		.then(response => response.json())
		.then(data => {

			// Store fetched colour options in class property
			this.colourOptions = data;
			console.log('Fetched colour options:', this.colourOptions);
			
			// Initialize the configurator with the fetched colour options data
			this.addSwatchListeners();
			
			// Set initial options based on URL parameters or default selections in the HTML
			this.setInitalColours();

		})
		.catch(err => {

			// Log any errors that occur during the fetch operation
			console.error('Failed to fetch colour options:', err);
		});

    }

	/**
	 * Set up event listeners to open and close the configuration drawer.
	 * 
	 */
    setConfigDrawerState = () => {

		// Select elements from DOM
        const configWrapper = document.querySelector('#configurator');
        const configCloseButton = document.getElementById('configCloseButton');
        const configMask = document.getElementById('configMask');

		// Array of selectors that should open the drawer on click
        const optionSelectors = [
            '#option-top-colour',
            '#option-metal-edge-veneer',
            '#option-base',
            '#option-model'
        ];

		// Add click event listeners to elements that should open the drawer. 
        optionSelectors.forEach(sel => {
			document.querySelector(sel)?.addEventListener('click', function () {
				configWrapper.classList.add('config-open', this.id);
				configCloseButton.focus();
			});
        });

		// Add click event listeners to elements that should close the drawer
        [configCloseButton, configMask].forEach(el => {
            el?.addEventListener('click', () => {
                configWrapper.classList.value = 'configurator';
            });
        });

    }


    /**
     * Add click event listeners to swatches in the top colour group. 
     * When a swatch is clicked, update the available options for the other groups based on the selected colour.
     * 
     */
    addSwatchListeners = () => {

        // Find all individual swatches inside this group
        const swatches = document.querySelectorAll('.obj-top-colour .wapf-swatch');

        // Loop through each swatch inside the group
        swatches.forEach(swatch => {

            // Add a click event listener for when the user clicks on a swatch
            swatch.addEventListener('click', () => {

                // Extract swatch name from label    
                const swatchName = swatch.querySelector('label').textContent;

                // Set available options for other groups based on the selected swatch
                this.setColourOptions(swatchName);

            });
        });

    }

    /**
     * On page load, check if a colour is specified in the URL query parameters and set initial options accordingly.
     * 
     */
    setInitalColours = () => {

        // Check if colour is set in the URL as a query parameter (e.g., ?colour=arabescato)
        const urlParams = new URLSearchParams(window.location.search);
        const initialColour = urlParams.get('colour');

        // If an initial colour is specified set the available options accordingly
        if (initialColour) {
            this.setColourOptions(initialColour);
        } else {

            // This is the default state so set options accordiingly

            // Get checked top colour from DOM
            const checkedTopColour = document.querySelector('.obj-top-colour .wapf-checked');
            if (checkedTopColour) {
                const topColour = checkedTopColour.querySelector('label').textContent;
                this.setColourOptions(topColour);
            }

        }

    }

    /**
     * Set available options for base and edge groups based on the selected top colour swatch.
     * The mapping of available options for each swatch is defined in the colourOptions object.
     * @param {string} topColour - The name of the selected top colour swatch 
     */
    setColourOptions = (topColour) => {

        // If top colour is multi-word, convert spaces to underscores to match keys in colourOptions
        const formattedTopColour = topColour.toLowerCase().trim().replace(/\s+/g, '_');

		// Determine product type (solid, slim, edge, slim-edge) based on product category classes
		const productType = this.productType();

        // Set available bases and edges based on the swatch name
        const availableOptions = this.colourOptions[formattedTopColour][productType] || {};

		// Convert available options object to an array of [optionType, optionsArray] pairs for easier iteration
        const availableOptionsArr = Object.entries(availableOptions);

        // Update the options in the UI based on the available options for the selected top colour
        this.setDefaults(availableOptions);

        // Loop over available options and update the UI accordingly (e.g., show/hide or enable/disable options)
        availableOptionsArr.forEach(([optionType, optionsArray]) => {

            // Map option types to css classes
            const optionToClass = {
                base: 'base',
                edge: 'metal-edge-veneer'
            };

            // Find non-matching options in DOM and disable them
            const optionElements = document.querySelectorAll(`.obj-${optionToClass[optionType]} .wapf-swatch`);

            optionElements.forEach(el => {

                // Extract option name from label and compare with available options
                const label = el.querySelector('label').textContent.toLowerCase().trim();
                
				// Show/hide options
                el.style.display = optionsArray.includes(label) ? 'inline' : 'none';

            });

        });

    };

	/**
	 * Determine the product type based on product category classes.
	 * @returns {string} - The product type (e.g., 'solid', 'slim', 'edge', 'slim-edge')
	 */
	productType = () => {

		// Get product categories from body classes (e.g., product_cat-solid, product_cat-slim, etc.)
		const productCategories = document.querySelector('.product').className.split(' ').filter(c => c.startsWith('product_cat-')).map(c => c.replace('product_cat-', ''));

		// Determine product type based on categories
		const types = ['solid', 'slim', 'edge'];

		// Check which types are present in the product categories
		const matched = types.filter(type => productCategories.includes(type));

		// If only one type is matched, return that type; if both 'slim' and 'edge' are matched, return 'slim-edge'
		if (matched.length === 1) {
			return matched[0];
		}

		// If both 'slim' and 'edge' are present, return 'slim-edge'
		if (matched.length === 2 && matched.includes('slim') && matched.includes('edge')) {
			return 'slim-edge';
		}

	}

	/**
	 * Set default options for base and edge groups if the currently selected options are not available for the selected top colour.
	 * @param {Object} availableOptions - An object of available options for the selected top colour.
	 */
    setDefaults = (availableOptions) => {
        
		// Array of option types and their corresponding DOM classes
        const optionGroups = [
            { key: 'base', className: 'base' },
            { key: 'edge', className: 'metal-edge-veneer' }
        ];

	
        optionGroups.forEach(group => {

			// Get the currently checked option for this group from the DOM
            const checked = document.querySelector(`.obj-${group.className} .wapf-checked`);
            
			// Extract the label of the checked option and format it for comparison
			const checkedLabel = checked?.querySelector('label').textContent.toLowerCase().trim();
            
			// Get the list of available options for this group from the availableOptions object
			const availableList = availableOptions[group.key] || [];
            
			// Check if the currently checked option is in the list of available options
			const isAvailable = availableList.includes(checkedLabel);
            
			if (!isAvailable) {
            
				// Find the first available option in the DOM and select it
				const firstAvailable = Array.from(document.querySelectorAll(`.obj-${group.className} .wapf-swatch`)).find(el => {
                    const label = el.querySelector('label')?.textContent.toLowerCase().trim();
                    return availableList.includes(label);
                });

				// If an available option is found, click it to select it
                firstAvailable?.querySelector('input').click();

            }
        });
    }
}

// Init class
window.addEventListener('DOMContentLoaded', () =>  new ColourOptions());