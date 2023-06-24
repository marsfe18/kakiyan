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
        image.src = 'image/' + menu.gambar;
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

        // Tombol Edit
        var editLink = document.createElement('a');
        editLink.href =
            'FormMenuEdit.php?menuId=' +
            menu.id +
            '&editNama=' +
            encodeURIComponent(menu.nama) +
            '&editJenis=' +
            menu.jenis +
            '&editHarga=' +
            menu.harga +
            '&editDeskripsi=' +
            encodeURIComponent(menu.deskripsi);
        editLink.className = 'edit-link';
        var editButton = document.createElement('button');
        editButton.innerHTML = 'Edit';
        editButton.className = 'edit-button';
        editLink.appendChild(editButton);

        // Tombol Delete
        var deleteLink = document.createElement('a');
        deleteLink.href = 'Menu_delete.php?id=' + menu.id;
        deleteLink.className = 'delete-link';
        var deleteButton = document.createElement('button');
        deleteButton.innerHTML = 'Delete';
        deleteButton.className = 'delete-button';
        deleteLink.appendChild(deleteButton);

        // Menambahkan elemen HTML ke dalam container
        menuContent.appendChild(title);
        menuContent.appendChild(harga);
        menuContent.appendChild(deskripsi);
        menuContent.appendChild(editLink);
        menuContent.appendChild(deleteLink);
        singleMenu.appendChild(image);
        singleMenu.appendChild(menuContent);
        pilihan = document.getElementById(menu.jenis);
        pilihan.appendChild(singleMenu);
    });
};


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

xhr.send();

window.onload = () => {
    filter('all');
};
