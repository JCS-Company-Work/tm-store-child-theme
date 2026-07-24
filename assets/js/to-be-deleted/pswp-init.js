import PhotoSwipeLightbox from 'https://unpkg.com/photoswipe@5/dist/photoswipe-lightbox.esm.min.js';
import PhotoSwipe from 'https://unpkg.com/photoswipe@5/dist/photoswipe.esm.min.js';

class TailormadeGallery {
  constructor() {
    this.lightbox = null; // Will hold PhotoSwipeLightbox instance
  }

  /** ------------------------------------
   * Helper: Get actual image size
   * ------------------------------------ */
  async #getImageSize(src) {
    return new Promise((resolve) => {
      const img = new Image();
      img.onload = () => resolve({ width: img.naturalWidth, height: img.naturalHeight });
      img.onerror = () => resolve({ width: 1200, height: 800 }); // Fallback size
      img.src = src;
    });
  }

  /** ------------------------------------
   * Helper: Wrap <img> in <a> for PhotoSwipe
   * Adds required data attributes for PSWP
   * ------------------------------------ */
  async #wrapImage(img, galleryId, fullSrcOverride = null) {
    const fullSrc = fullSrcOverride || img.getAttribute('data-large_image') || img.src;
    const { width, height } = await this.#getImageSize(fullSrc);

    let link = img.closest('a');
    if (!link) {
      // Create anchor wrapper if not present
      link = document.createElement('a');
      img.parentNode.insertBefore(link, img);
      link.appendChild(img);
    }
    // Set PhotoSwipe attributes
    link.href = fullSrc;
    link.setAttribute('data-pswp-src', fullSrc);
    link.setAttribute('data-pswp-width', width);
    link.setAttribute('data-pswp-height', height);
    link.setAttribute('data-cropped', 'true');
    link.setAttribute('data-pswp-gallery', galleryId);
  }

  /** ------------------------------------
   * WP Block Galleries
   * Each block gallery gets a unique gallery ID
   * ------------------------------------ */
  #initWpBlockGalleries() {
    const galleries = document.querySelectorAll('.wp-block-gallery');
    galleries.forEach((gallery, index) => {
      const images = gallery.querySelectorAll('img');
      images.forEach((img) => {
        const setup = () => this.#wrapImage(img, 'wp-gallery-' + index);
        img.complete ? setup() : img.addEventListener('load', setup);
      });
    });
  }

  /** ------------------------------------
   * WooCommerce Gallery
   * Uses .woocommerce-product-gallery__wrapper as container
   * Excludes images inside .wapflayers-initial
   * ------------------------------------ */
  #initWooCommerceGallery() {
    const wrapper = document.querySelector('.woocommerce-product-gallery__wrapper');
    if (!wrapper) return;

    // Select images excluding .wapflayers-initial content
    const images = wrapper.querySelectorAll('img:not(.wapflayers-initial img)');

    images.forEach((img) => {
      const setup = () => this.#wrapImage(img, 'woocommerce-gallery');
      img.complete ? setup() : img.addEventListener('load', setup);
    });
  }

  /** ------------------------------------
   * WAPF Layers
   * Makes dynamic composite image clickable and updates anchor on change
   * ------------------------------------ */
  #initWapfGallery() {
    const wapfContainer = document.querySelector('.wapf-layers');
    if (!wapfContainer) return;

    // Wrap .wapf-layers in an anchor if not present
    let wapfAnchor = wapfContainer.closest('a');
    if (!wapfAnchor) {
      wapfAnchor = document.createElement('a');
      wapfAnchor.classList.add('wapf-lightbox-link');
      wapfContainer.parentNode.insertBefore(wapfAnchor, wapfContainer);
      wapfAnchor.appendChild(wapfContainer);
    }

    const updateWapfAnchor = async () => {
      // Find visible image in WAPF layers
      const visibleImg =
        wapfContainer.querySelector('.wapf-layer-image img:not([style*="display:none"])') ||
        wapfContainer.querySelector('.wapf-layer-image img');

      if (!visibleImg) return;

      // Get image source and dimensions
      const fullSrc = visibleImg.getAttribute('data-large_image') || visibleImg.src;
      const { width, height } = await this.#getImageSize(fullSrc);

      // Update anchor attributes for PhotoSwipe
      wapfAnchor.href = fullSrc;
      wapfAnchor.setAttribute('data-pswp-src', fullSrc);
      wapfAnchor.setAttribute('data-pswp-width', width);
      wapfAnchor.setAttribute('data-pswp-height', height);
      wapfAnchor.setAttribute('data-pswp-gallery', 'woocommerce-gallery');
    };

    // Initial setup
    updateWapfAnchor();

    // Watch for changes in WAPF layers (variation updates)
    const observer = new MutationObserver(updateWapfAnchor);
    observer.observe(wapfContainer, { attributes: true, childList: true, subtree: true });
  }

  /** ------------------------------------
   * PhotoSwipe Initialization
   * Handles all registered galleries
   * ------------------------------------ */
  #initLightbox() {
    this.lightbox = new PhotoSwipeLightbox({
      gallery: '.woocommerce-product-gallery__wrapper, .wp-block-gallery, .wapf-lightbox-link',
      children: 'a[data-pswp-src]',
      pswpModule: PhotoSwipe,
      gestureSettings: {
        mouse: {
          drag: true,
          pinch: false,
          click: true,
        },
      },
    });

    this.lightbox.init();
    console.log('PhotoSwipe initialized');
  }

  /** ------------------------------------
   * Public Method: Initialize Everything
   * ------------------------------------ */
  init() {
    this.#initWpBlockGalleries();
    this.#initWooCommerceGallery();
    this.#initWapfGallery();
    this.#initLightbox();
  }

  /** ------------------------------------
   * Optional: Refresh Method
   * For future dynamic updates (AJAX or SPA)
   * ------------------------------------ */
  refresh() {
    if (this.lightbox) {
      this.lightbox.destroy();
    }
    this.init();
  }
}

// Initialize after DOM is ready
document.addEventListener('DOMContentLoaded', () => {
  const tmGallery = new TailormadeGallery();
  tmGallery.init();
});
