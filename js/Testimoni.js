function searchTable() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("searchInput");
    filter = input.value.toLowerCase();
    table = document.getElementById("emp-table");
    tr = table.getElementsByTagName("tr");

    for (i = 0; i < tr.length; i++) {
        tdNama = tr[i].getElementsByTagName("td")[2]; // Kolom nama
        tdKontak = tr[i].getElementsByTagName("td")[3]; // Kolom kontak
        tdSubject = tr[i].getElementsByTagName("td")[4]; // Kolom subject

        if (tdNama || tdKontak || tdSubject) {
            txtValueNama = tdNama.textContent || tdNama.innerText;
            txtValueKontak = tdKontak.textContent || tdKontak.innerText;
            txtValueSubject = tdSubject.textContent || tdSubject.innerText;

            if (
                txtValueNama.toLowerCase().includes(filter) ||
                txtValueKontak.toLowerCase().includes(filter) ||
                txtValueSubject.toLowerCase().includes(filter)
            ) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}
