var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
        var offers = JSON.parse(this.responseText);
        // console.log(offers);
        loadData(offers);

    }
};

xhttp.open('GET', 'OfferLoad.php', true);
xhttp.send();


function loadData(offers) {
    offers.forEach(function (offer) {
        var nama = offer.nama;
        var asli = offer.asli;
        var diskon = offer.diskon;
        var deskripsi = offer.deskripsi;
        var deskripsi2 = offer.deskripsi2;
        var gambar = offer.gambar;
        var promo = asli - diskon;

        var singleMenu = document.createElement('div');
        singleMenu.className = 'single-menu';

        singleMenu.setAttribute('data-value', offer.id);
        singleMenu.onclick = function () {
            showEditForm(this.getAttribute('data-value'));
        };

        var img = document.createElement('img');
        img.src = "image/" + gambar;
        singleMenu.appendChild(img);

        var menuContent = document.createElement('div');
        menuContent.className = 'menu-content';

        var menuTitle = document.createElement('h4');
        menuTitle.className = 'menu-title';
        menuTitle.innerHTML = nama;
        menuContent.appendChild(menuTitle);

        // Tombol Edit
        var editLink = document.createElement('a');
        editLink.href = 'FormOfferEdit.php?id=' + offer.id + '&nama=' + encodeURIComponent(offer.nama) + '&asli=' + offer.asli + '&diskon=' + offer.diskon + '&deskripsi2=' + encodeURIComponent(offer.deskripsi2) + '&deskripsi=' + encodeURIComponent(offer.deskripsi) + '&deskripsi2=' + encodeURIComponent(offer.deskripsi2);
        editLink.className = 'edit-link';
        var editButton = document.createElement('button');
        editButton.innerHTML = 'Edit';
        editButton.className = 'edit-button';
        editLink.appendChild(editButton);


        // Tombol Delete
        var deleteLink = document.createElement('a');
        deleteLink.href = 'Offer_delete.php?id=' + offer.id;
        deleteLink.className = 'delete-link';
        var deleteButton = document.createElement('button');
        deleteButton.innerHTML = 'Delete';
        deleteButton.className = 'delete-button';
        deleteLink.appendChild(deleteButton);


        if (promo > 0) {
            var span = document.createElement('span');
            span.innerHTML = 'Discount ' + (100 - (promo * 100 / asli)) + '%';
            menuContent.appendChild(span);

            var p1 = document.createElement('p');
            p1.innerHTML = deskripsi;
            menuContent.appendChild(p1);

            var p2 = document.createElement('p');
            p2.innerHTML = '<b>' + deskripsi2 + '</b>';
            menuContent.appendChild(p2);

            var p3 = document.createElement('p');
            p3.innerHTML = 'Harga Asli: <b style="font-size: 23px; color: black;">Rp ' + asli + '</b>';
            menuContent.appendChild(p3);

            var p4 = document.createElement('p');
            p4.innerHTML = 'Anda hemat: <b style="font-size: 30px; color: brown;">Rp ' + diskon + '</b>';
            menuContent.appendChild(p4);
        } else {
            var p = document.createElement('p');
            p.innerHTML = deskripsi;
            menuContent.appendChild(p);

            var p2 = document.createElement('p');
            p2.innerHTML = '<b>' + deskripsi2 + '</b>';
            menuContent.appendChild(p2);
        }

        menuContent.appendChild(editLink);
        menuContent.appendChild(deleteLink);
        singleMenu.appendChild(menuContent);
        document.querySelector('.tawaranpage').appendChild(singleMenu);
    });
}
