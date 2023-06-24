function searchTable() {
    var input, filter, dateInput, table, tr, td, i, txtValue;
    input = document.getElementById("searchInput");
    dateInput = document.getElementById('searchDate');
    filter = input.value.toLowerCase();
    table = document.getElementById("emp-table");
    tr = table.getElementsByTagName("tr");
    console.log(dateInput.value);
    if (input.value === '') {
        filter = '1234';
    }

    for (i = 0; i < tr.length; i++) {
        var tdNama = tr[i].getElementsByTagName("td")[2];
        var tdEmail = tr[i].getElementsByTagName("td")[3];
        var tdKodeBooking = tr[i].getElementsByTagName("td")[7];
        var tdDate = tr[i].getElementsByTagName('td')[0];

        if (tdNama || tdEmail || tdKodeBooking || tdDate) {
            txtValueNama = tdNama.textContent || tdNama.innerText;
            txtValueEmail = tdEmail.textContent || tdEmail.innerText;
            txtValueKodeBooking = tdKodeBooking.textContent || tdKodeBooking.innerText;
            txtValueDate = tdDate.textContent || tdDate.innerText;

            var dateValue = dateInput.value;
            var dateMatch = (dateValue !== "") && (txtValueDate === dateValue);

            if (
                txtValueNama.toLowerCase().includes(filter) ||
                txtValueEmail.toLowerCase().includes(filter) ||
                txtValueKodeBooking.toLowerCase().includes(filter) ||
                dateMatch
            ) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}
