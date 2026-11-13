document.addEventListener('DOMContentLoaded', () => {
    const toggle = document.querySelector('[data-mobile-nav-toggle]');
    const nav = document.querySelector('[data-mobile-nav]');
    const openIcon = document.querySelector('[data-mobile-nav-open-icon]');
    const closeIcon = document.querySelector('[data-mobile-nav-close-icon]');

    if (!toggle || !nav) {
        return;
    }

    const setOpen = (open) => {
        nav.classList.toggle('hidden', !open);
        openIcon?.classList.toggle('hidden', open);
        closeIcon?.classList.toggle('hidden', !open);
    };

    toggle.addEventListener('click', () => {
        setOpen(nav.classList.contains('hidden'));
    });

    nav.querySelectorAll('a').forEach((link) => {
        link.addEventListener('click', () => setOpen(false));
    });
});

document.addEventListener('DOMContentLoaded', () => {
    const lightbox = document.querySelector('[data-lightbox]');

    if (!lightbox) {
        return;
    }

    const image = lightbox.querySelector('[data-lightbox-image]');
    const title = lightbox.querySelector('[data-lightbox-title]');
    const counter = lightbox.querySelector('[data-lightbox-counter]');
    const prevButton = lightbox.querySelector('[data-lightbox-prev]');
    const nextButton = lightbox.querySelector('[data-lightbox-next]');

    let images = [];
    let index = 0;

    const render = () => {
        image.src = images[index];
        image.alt = images[index] ? `${title.textContent} — photo ${index + 1}` : '';
        counter.textContent = `${index + 1} / ${images.length}`;
    };

    const open = (root, startIndex) => {
        images = JSON.parse(root.dataset.images || '[]');

        if (!images.length) {
            return;
        }

        index = Math.min(Math.max(startIndex, 0), images.length - 1);
        title.textContent = root.dataset.title || '';
        lightbox.classList.remove('hidden');
        lightbox.classList.add('flex');
        document.body.classList.add('overflow-hidden');
        render();
    };

    const close = () => {
        lightbox.classList.add('hidden');
        lightbox.classList.remove('flex');
        document.body.classList.remove('overflow-hidden');
        image.src = '';
    };

    const step = (delta) => {
        if (!images.length) {
            return;
        }

        index = (index + delta + images.length) % images.length;
        render();
    };

    document.querySelectorAll('[data-gallery-root]').forEach((root) => {
        root.querySelectorAll('[data-gallery-open]').forEach((trigger) => {
            trigger.addEventListener('click', () => {
                open(root, parseInt(trigger.dataset.index || '0', 10));
            });
        });
    });

    lightbox.querySelectorAll('[data-lightbox-close]').forEach((button) => {
        button.addEventListener('click', close);
    });

    prevButton?.addEventListener('click', () => step(-1));
    nextButton?.addEventListener('click', () => step(1));

    lightbox.addEventListener('click', (event) => {
        if (event.target === lightbox) {
            close();
        }
    });

    document.addEventListener('keydown', (event) => {
        if (lightbox.classList.contains('hidden')) {
            return;
        }

        if (event.key === 'Escape') {
            close();
        } else if (event.key === 'ArrowLeft') {
            step(-1);
        } else if (event.key === 'ArrowRight') {
            step(1);
        }
    });
});

document.addEventListener('DOMContentLoaded', () => {
    const modal = document.querySelector('[data-team-modal]');

    if (!modal) {
        return;
    }

    const photo = modal.querySelector('[data-team-photo]');
    const name = modal.querySelector('[data-team-name]');
    const position = modal.querySelector('[data-team-position]');
    const biography = modal.querySelector('[data-team-bio]');
    const contacts = modal.querySelector('[data-team-contacts]');

    const mailIcon = '<svg class="size-4 shrink-0 text-gold-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" /></svg>';
    const phoneIcon = '<svg class="size-4 shrink-0 text-gold-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" /></svg>';
    const linkClasses = 'flex items-center gap-3 rounded-xl border border-navy-100 bg-cream-50 px-4 py-3 text-sm font-medium text-navy-800 transition hover:border-gold-500';

    const contactRow = (href, icon, label) => {
        const anchor = document.createElement('a');
        anchor.href = href;
        anchor.className = linkClasses;
        anchor.innerHTML = icon;
        const text = document.createElement('span');
        text.className = 'break-all';
        text.textContent = label;
        anchor.appendChild(text);

        return anchor;
    };

    const open = (member) => {
        photo.src = member.photo;
        photo.alt = member.name || 'JP Hexagon team member';
        name.textContent = member.name || 'JP Hexagon Services Ltd';
        position.textContent = member.position || 'Team Member';
        position.classList.toggle('hidden', !member.position);
        biography.textContent = member.biography || 'Full profile coming soon.';

        contacts.replaceChildren();
        (member.emails || []).forEach((email) => {
            contacts.appendChild(contactRow(`mailto:${email}`, mailIcon, email));
        });
        (member.phones || []).forEach((phone) => {
            contacts.appendChild(contactRow(`tel:${phone}`, phoneIcon, phone));
        });
        contacts.classList.toggle('hidden', !contacts.children.length);

        modal.classList.remove('hidden');
        modal.classList.add('flex');
        document.body.classList.add('overflow-hidden');
    };

    const close = () => {
        modal.classList.add('hidden');
        modal.classList.remove('flex');
        document.body.classList.remove('overflow-hidden');
        photo.src = '';
    };

    document.querySelectorAll('[data-team-open]').forEach((trigger) => {
        trigger.addEventListener('click', () => {
            open(JSON.parse(trigger.dataset.member || '{}'));
        });
    });

    modal.querySelectorAll('[data-team-close]').forEach((button) => {
        button.addEventListener('click', close);
    });

    modal.addEventListener('click', (event) => {
        if (event.target === modal) {
            close();
        }
    });

    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape' && !modal.classList.contains('hidden')) {
            close();
        }
    });
});
