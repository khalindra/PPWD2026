const typingText = document.getElementById('typing-text');

if (typingText) {
    const names = ['Khalindra Maulita Syafitri', 'Web Developer', 'Mahasiswa SI'];
    let nameIndex = 0;
    let charIndex = 0;
    let isDeleting = false;

    function typeEffect() {
        const currentName = names[nameIndex];

        if (isDeleting) {
            typingText.textContent = currentName.substring(0, charIndex - 1);
            charIndex--;
        } else {
            typingText.textContent = currentName.substring(0, charIndex + 1);
            charIndex++;
        }

        let delay = isDeleting ? 50 : 100;

        if (!isDeleting && charIndex === currentName.length) {
            delay = 2000; 
            isDeleting = true;
        } else if (isDeleting && charIndex === 0) {
            isDeleting = false;
            nameIndex = (nameIndex + 1) % names.length;
            delay = 500;
        }

        setTimeout(typeEffect, delay);
    }

    typeEffect();
}

const projects = [
    {
        title: 'Website Profil',
        desc: 'Website profil interaktif dengan HTML, CSS, dan JS dasar.',
        image: 'images/profil.jpg',
        link: 'profil.html',
    },
    {
        title: 'Kalkulator Fitur',
        desc: 'Aplikasi kalkulator interaktif berbasis web.',
        image: 'images/kalkulator.jpg',
        link: 'kalkulator.html'
    }
];

const projectGrid = document.getElementById('project-grid');

if (projectGrid) {
    projects.forEach(project => {
        const card = document.createElement('div');
        card.className = 'project-card';
        card.innerHTML = `
            <img src="${project.image}" alt="${project.title}">
            <h3>${project.title}</h3>
            <p>${project.desc}</p>
        `;

        card.addEventListener('click', () => {
            if (project.link) {
                window.location.href = project.link;
            } else {
                alert('Anda Memilih Proyek : ${project.title}');
            }
        });

        projectGrid.appendChild(card);
    });
}

const themeToggleBtn = document.getElementById('theme-toggle');

if (themeToggleBtn) {
    if (localStorage.getItem('theme') === 'dark') {
        document.body.classList.add('dark-mode');
        themeToggleBtn.textContent = '☀️ Mode Terang';
    }

    themeToggleBtn.addEventListener('click', () => {
        document.body.classList.toggle('dark-mode');
        
        if (document.body.classList.contains('dark-mode')) {
            themeToggleBtn.textContent = '☀️ Mode Terang';
            localStorage.setItem('theme', 'dark');
        } else {
            themeToggleBtn.textContent = '🌙 Mode Gelap';
            localStorage.setItem('theme', 'light');
        }
    });
}

const contactForm = document.getElementById('contact-form');
const formFeedback = document.getElementById('form-feedback');

if (contactForm) {
    contactForm.addEventListener('submit', (e) => {
        e.preventDefault();

        const name = document.getElementById('name').value.trim();
        const email = document.getElementById('email').value.trim();
        const message = document.getElementById('message').value.trim();

        if (name === '' || email === '' || message === '') {
            formFeedback.style.color = 'red';
            formFeedback.textContent = '❌ Harap isi semua bidang formulir!';
            return;
        }

        formFeedback.style.color = 'green';
        formFeedback.textContent = `✅ Terima kasih, ${name}! Pesan Anda berhasil terkirim.`;
        contactForm.reset();
    });
}