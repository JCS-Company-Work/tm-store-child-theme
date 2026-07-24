/**
 * product-renders-init.js
 *
 * This is the initialization script for the 3D product viewer.
 * 
 * It imports the ProductRenders class module, creates an instance
 * targeting the '#obj3dviewer' container element, and calls its
 * init() method once the DOM content is fully loaded.
 * 
 * This file should be enqueued as a module script in WordPress,
 * enabling clean separation between your class definition and 
 * page-specific initialization logic.
 */

import ProductRenders from './classes/ProductRenders.js?vers=250725-7';

document.addEventListener('DOMContentLoaded', () => {
  // Create a new ProductRenders instance targeting the container with ID 'obj3dviewer'
  const viewer = new ProductRenders('#obj3dviewer');
console.log(viewer);
  // Initialize the viewer (sets up scene, loads model, etc.)
  viewer.init();
});