document.addEventListener("DOMContentLoaded", function() {
    const menuBtn = document.getElementById("menu-btn");
    const closeBtn = document.getElementById("close-btn");
    const dropdownMenu = document.getElementById("dropdown-menu");

    menuBtn.addEventListener("click", function() {
        dropdownMenu.classList.toggle("active");
    });

    closeBtn.addEventListener("click", function() {
        dropdownMenu.classList.remove("active");
    });
});

document.addEventListener('DOMContentLoaded', function() {
    var video = document.querySelector('.video');
    var playButton = document.querySelector('.play-button');
    var thumbnail = document.querySelector('.thumbnail');

    // Mulai video secara otomatis
    video.play();

    // Sembunyikan thumbnail ketika video dimulai
    video.addEventListener('play', function() {
        thumbnail.style.display = 'none';
        video.style.display = 'block';
    });

    playButton.addEventListener('click', function() {
        if (video.paused) {
            video.play();
            playButton.style.display = 'none'; // Sembunyikan tombol play saat video diputar
        } else {
            video.pause();
        }
    });

    video.addEventListener('ended', function() {
        playButton.style.display = 'block'; // Tampilkan tombol play setelah video selesai diputar
    });
});

document.addEventListener('DOMContentLoaded', function() {
    var dashboardTitle = document.getElementById('dashboard-title');
    var titleText = document.title;
    dashboardTitle.textContent = titleText;
});

function toggleSidebar() {
    var sidebar = document.querySelector('.sidebar');
    var mainContent = document.querySelector('.main-content');
    
    if (sidebar.style.width === '250px') {
        sidebar.style.width = '50px';
        mainContent.style.marginLeft = '50px';
    } else {
        sidebar.style.width = '250px';
        mainContent.style.marginLeft = '250px';
    }
}

$(document).ready( function () {
    $('#myTable').DataTable();
});

document.getElementById('minata').addEventListener('change', function() {
    var selectedValue = this.value;
    var dllInput = document.getElementById('dllInputA');

    if (selectedValue === 'DLL') {
        dllInput.style.display = 'block';
    } else {
        dllInput.style.display = 'none';
    }
});

document.getElementById('minatb').addEventListener('change', function() {
    var selectedValue = this.value;
    var dllInput = document.getElementById('dllInputB');

    if (selectedValue === 'DLL') {
        dllInput.style.display = 'block';
    } else {
        dllInput.style.display = 'none';
    }
});

function toggleSidebar() {
    const sidebar = document.querySelector('.sidebar');
    sidebar.classList.toggle('minimized');
  }
