function searchTable() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("searchInput");
    filter = input.value.toLowerCase();
    table = document.getElementById("emp-table");
    tr = table.getElementsByTagName("tr");
    console.log(input.value);

    for (i = 0; i < tr.length; i++) {
        tdNama = tr[i].getElementsByTagName("td")[2];
        tdEmail = tr[i].getElementsByTagName("td")[3];
        tdKodeBooking = tr[i].getElementsByTagName("td")[7];


        if (tdNama || tdEmail || tdKodeBooking) {

            txtValueNama = tdNama.textContent || tdNama.innerText;
            txtValueEmail = tdEmail.textContent || tdEmail.innerText;
            txtValueKodeBooking = tdKodeBooking.textContent || tdKodeBooking.innerText;

            if (
                txtValueNama.toLowerCase().includes(filter) ||
                txtValueEmail.toLowerCase().includes(filter) ||
                txtValueKodeBooking.toLowerCase().includes(filter)

            ) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}
