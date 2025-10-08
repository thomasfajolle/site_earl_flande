// Lazy-loading de secours pour vieux navigateurs
document.addEventListener('DOMContentLoaded', () => {
  if ('loading' in HTMLImageElement.prototype) return;
  const imgs = document.querySelectorAll('img[loading="lazy"][data-src]');
  const swap = img => { img.src = img.dataset.src; img.removeAttribute('data-src'); };
  if ('IntersectionObserver' in window) {
    const io = new IntersectionObserver((entries) => {
      entries.forEach(e => { if (e.isIntersecting) { swap(e.target); io.unobserve(e.target); } });
    });
    imgs.forEach(img => io.observe(img));
  } else {
    imgs.forEach(swap);
  }
});
