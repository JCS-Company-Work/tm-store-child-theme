document.addEventListener('DOMContentLoaded', function() {
             // Initialize first video immediately
             const firstContainer = document.querySelector('.video-container:not([data-lazy-load])');
             if (firstContainer) {
                 initializeVimeoPlayer(firstContainer);
             }
             
             // Set up lazy loading for other videos
             const lazyContainers = document.querySelectorAll('.video-container[data-lazy-load]');
             
             // Intersection Observer for lazy loading
             const observer = new IntersectionObserver((entries) => {
                 entries.forEach(entry => {
                     if (entry.isIntersecting) {
                         const container = entry.target;
                         const iframe = container.querySelector('iframe');
                         const dataSrc = iframe.getAttribute('data-src');
                         
                         if (dataSrc && !iframe.getAttribute('src')) {
                             // Load the video
                             iframe.setAttribute('src', dataSrc);
                             
                             // Initialize player after src is set
                             setTimeout(() => {
                                 initializeVimeoPlayer(container);
                             }, 100);
                             
                             // Stop observing this container
                             observer.unobserve(container);
                         }
                     }
                 });
             }, {
                 rootMargin: '200px' // Start loading 200px before video enters viewport
             });
             
             // Observe all lazy load containers
             lazyContainers.forEach(container => {
                 observer.observe(container);
             });
             
             // Initialize Vimeo player function
             function initializeVimeoPlayer(container) {
                 const iframe = container.querySelector('iframe');
                 const loadingScreen = container.querySelector('.loading-screen');
                 
                 // Check if iframe has src
                 if (!iframe.getAttribute('src')) {
                     return;
                 }
                 
                 const player = new Vimeo.Player(iframe);
                 
                 function hideLoader() {
                     loadingScreen.classList.add('hidden');
                     setTimeout(() => {
                         loadingScreen.classList.add('removed');
                     }, 500);
                 }
                 
                 player.on('play', function() {
                     hideLoader();
                 });
                 
                 player.on('timeupdate', function(data) {
                     if (data.seconds > 0) {
                         hideLoader();
                     }
                 });
                 
                 player.on('error', function(error) {
                     console.error('Video error:', error);
                     loadingScreen.innerHTML = '<p style="color: white;">Video failed to load</p>';
                 });
             }
         });