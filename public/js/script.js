document.addEventListener("DOMContentLoaded", function() {
    // Dapatkan URL saat ini
    var currentUrl = window.location.href;

    // Dapatkan semua link di menu
    var menuLinks = document.querySelectorAll('.menu a');

    // Iterasi melalui semua link
    menuLinks.forEach(function(link) {
        // Jika href link sesuai dengan URL saat ini
        if (link.href === currentUrl) {
            // Tambahkan kelas "active" ke elemen <li> induk
            link.parentElement.classList.add('active');

            // Jika elemen <li> induk adalah bagian dari menu toggle, buka menu
            var parentMenuToggle = link.closest('.menu-toggle');
            if (parentMenuToggle) {
                parentMenuToggle.classList.add('active');
                var subMenu = parentMenuToggle.querySelector('.ml-menu');
                if (subMenu) {
                    subMenu.style.display = 'block';
                }
            }
        } else {
            // Hapus kelas "active" dari elemen <li> induk lainnya
            link.parentElement.classList.remove('active');
        }
    });
});
