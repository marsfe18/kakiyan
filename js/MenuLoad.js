
var xhr = new XMLHttpRequest();
xhr.open('GET', 'MenuLoad.php', true);
xhr.onload = function () {
    if (xhr.readyState === 4 && xhr.status === 200) {
        var menuData = JSON.parse(xhr.responseText);
        // console.log(menuData);
        loadMenu(menuData);

    }

};

var loadMenu = function (menuData) {

    let container = document.getElementById('menuContainer');

    console.log(container);
    // Menghapus konten sebelumnya (jika ada)
    // container.innerHTML = '';
    var pilihan;

    // Iterasi melalui setiap data
    menuData.forEach(function (menu) {
        // Membuat elemen HTML
        var singleMenu = document.createElement('div');
        singleMenu.className = 'single-menu';
        singleMenu.setAttribute('data-value', menu.id);
        singleMenu.onclick = function () {
            showEditForm(this.getAttribute('data-value'));
        };

        console.log(menu.jenis);

        var image = document.createElement('img');
        image.className = 'img';
        image.src = "image/" + menu.gambar;
        image.alt = '';

        var menuContent = document.createElement('div');
        menuContent.className = 'menu-content';

        var title = document.createElement('h4');
        title.className = 'menu-title';
        title.textContent = menu.nama;

        var harga = document.createElement('span');
        harga.className = 'harga';
        harga.textContent = 'Rp ' + menu.harga + ',00';

        var deskripsi = document.createElement('p');
        deskripsi.className = 'deskripsi';
        deskripsi.textContent = menu.deskripsi;

        // Menambahkan elemen HTML ke dalam container
        menuContent.appendChild(title);
        menuContent.appendChild(harga);
        menuContent.appendChild(deskripsi);
        singleMenu.appendChild(image);
        singleMenu.appendChild(menuContent);
        pilihan = document.getElementById(menu.jenis);
        pilihan.appendChild(singleMenu);
    });
}

function filter(jenis) {
    // jenis = 'steak';
    var elements = document.querySelectorAll(".menu-sec");
    elements.forEach((element) => {
        if (jenis === 'all') {
            element.classList.remove("hide");
        } else {
            if (element.classList.contains(jenis)) {
                element.classList.remove("hide");
            } else {
                element.classList.add("hide");
            }
        }
    })
}

function search() {

    var input = document.getElementById('search').value;
    var elements = document.querySelectorAll('.menu-title');
    var barang = document.querySelectorAll('.single-menu');


    elements.forEach((element, index) => {
        console.log(element.innerText.toLowerCase().includes(input.toLowerCase()));

        if (element.innerText.toLowerCase().includes(input.toLowerCase())) {
            barang[index].classList.remove("hide2");
        } else {
            barang[index].classList.add("hide2");
        }
    })
}



function showEditForm(menuId) {
    console.log(menuId);
    document.getElementById('menuId').value = menuId;
    document.getElementById('editFormContainer').classList.remove('hide');
    document.getElementById('menuId2').value = document.getElementById('menuId').value;
}

// Fungsi untuk menyembunyikan pop-up form
function hideEditForm() {
    document.getElementById('editFormContainer').classList.add('hide');
}


xhr.send();

window.onload = () => {
    filter('all');
};
