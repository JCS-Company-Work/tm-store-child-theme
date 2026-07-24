// Get Shephard tooltip tour scripts

function startConfiguratorTour() {
  // Shepherd options (can style here if you like)
  const tour = new Shepherd.Tour({
    defaultStepOptions: {
      classes: 'shepherd-theme-arrows',
       modal: false,
       scrollTo: false,
      //scrollTo: { behavior: 'smooth', block: 'center' },
      cancelIcon: {
				enabled: true
	  }
    }
  });

  // Step 1: Top Colour
  tour.addStep({
    title: 'Choose Table Top Colour',
    text: 'Select a top colour from these surfaces.',
    attachTo: {
      element: '.obj-top-colour',
      on: 'bottom'
    },
    popperOptions: { modifiers: [{ name: 'offset', options: { offset: [50, 200] } }] },
    buttons: [
	  { text: 'End Tour', action: tour.cancel },
      { text: 'Next Step', action: tour.next }
    ]
  });

  // Step 2: Metal Edge Veneer is present
  if (document.querySelector('.obj-metal-edge-veneer')) {
  tour.addStep({
    title: 'Select Metal Edge Veneer',
    text: 'Select a metal veneer for the top edge.',
    attachTo: {
      element: '.obj-metal-edge-veneer',
      on: 'bottom-start'
    },
    scrollTo: { behavior: 'smooth', block: 'center' },
    buttons: [
      { text: 'Back', action: tour.back },
      { text: 'Next Step', action: tour.next }
    ]
  });
  }

  // Step 3: Base Colour
  tour.addStep({
    title: 'Choose Base Colour',
    text: 'Select a base colour.',
    attachTo: {
      element: '.obj-base',
      on: 'bottom-start'
    },
    scrollTo: { behavior: 'smooth', block: 'center' },
    buttons: [
      { text: 'Back', action: tour.back },
      { text: 'Next Step', action: tour.next }
    ]
  });

  // Step 4: Model Dropdown
  tour.addStep({
    title: 'Choose Your Required Model Size',
    text: 'Select a model size.',
   attachTo: {
      element: '.obj-model',
      on: 'bottom'
    },
   scrollTo: { behavior: 'smooth', block: 'center' },
    buttons: [
      { text: 'Back', action: tour.back },
      { text: 'Next Step', action: tour.next }
    ]
  });
  
    // Step 5: Model Dropdown
  /*tour.addStep({
    title: 'Order Swatch Samples',
    text: 'You can also order samples of your chosen colours.',
    attachTo: undefined,
   scrollTo: { behavior: 'smooth', block: 'center' },
    buttons: [
      { text: 'Back', action: tour.back },
      { text: 'Next', action: tour.next }
    ]
  });*/


  // Step 6: Drag to Rotate
  tour.addStep({
    title: 'Now have a play!',
    text: 'Now have a play! Try different colour combinations and drag the 3D model to view your bespoke creation. Then Add to Basket or order samples.',
    attachTo: {
    element: '#obj3dviewer', // <-- Replace with the selector for your canvas or 3D view
    on: 'bottom'
    },
    scrollTo: { behavior: 'smooth', block: 'center' },
    // Or if you want to highlight the center with no specific DOM element:
    //attachTo: undefined,
    //popperOptions: { modifiers: [{ name: 'offset', options: { offset: [0, 200] } }] },
    buttons: [
      //{ text: 'Back', action: tour.back },
	  { 
      text: 'Close Tour', 
      action() {
        dismissTour(); 
        return this.hide();
      } 
    }
      
    ]
  });

  // Initiate the tour and set shepherd tour key in local storage to ensure that it only loads once per session
  const shepherdKey = `shepherd-tour-${ShepherdData.sessionKey}`;

  // Find any existing shepherd-tour-* keys and remove if they don't match current session
  Object.keys(localStorage).forEach(key => {
      if (key.startsWith('shepherd-tour-') && key !== shepherdKey) {
          localStorage.removeItem(key);
      }
  });

  // helper to check the browser's localstorage
  function dismissTour(){
      if(!localStorage.getItem(shepherdKey)) {
          localStorage.setItem(shepherdKey, 'yes');
      }
  }

  // Dismiss the tour when the cancel icon is clicked. Do not show the tour on next page reload
  tour.on('cancel', dismissTour);

  // Initiate the tour
  if(!localStorage.getItem(shepherdKey)) {
      tour.start();
  }
}

// also add a "Show Me How" button to start the tour
document.querySelector('.show-tour-btn')?.addEventListener('click', startConfiguratorTour);

// call startConfiguratorTour() on page load for first-time users
startConfiguratorTour();
