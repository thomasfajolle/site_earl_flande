// Lazy-loading de secours pour vieux navigateurs
document.addEventListener('DOMContentLoaded', async () => {
  // Année dynamique
  const y = document.getElementById('year');
  if (y) y.textContent = new Date().getFullYear();

  // Construire la galerie côté client si on a un conteneur data-gallery
  const gallery = document.querySelector('[data-gallery]');
  if (gallery) {
    try {
      const res = await fetch('assets/img/galerie/images.json', { cache: 'no-store' });
      if (!res.ok) throw new Error('images.json introuvable');
      /** @type {{images: {src:string, alt?:string}[]}} */
      const data = await res.json();
      const imgs = Array.isArray(data.images) ? data.images : [];
      if (imgs.length === 0) {
        gallery.innerHTML = '<div class="card"><p>Aucune image pour le moment. Ajoutez vos photos dans <code>assets/img/galerie</code> et mettez à jour <code>images.json</code>.</p></div>';
      } else {
        const frag = document.createDocumentFragment();
        imgs.forEach(item => {
          const figure = document.createElement('figure');
          const img = document.createElement('img');
          img.loading = 'lazy';
          img.src = item.src;
          img.alt = item.alt || 'Photo';
          const caption = document.createElement('figcaption');
          caption.textContent = item.alt || item.src.split('/').pop().replace(/[-_]/g, ' ').replace(/\.[^.]+$/, '');
          figure.appendChild(img);
          figure.appendChild(caption);
          frag.appendChild(figure);
        });
        gallery.appendChild(frag);
      }
    } catch (e) {
      gallery.innerHTML = '<div class="card"><p>Impossible de charger la galerie. Vérifiez <code>assets/img/galerie/images.json</code>.</p></div>';
    }
  }
});
