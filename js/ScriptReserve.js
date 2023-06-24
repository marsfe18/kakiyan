//Script Reservasi
// jshint esversion: 6

function getUniqueValuesFromColumn() {

    var unique_col_values_dict = {};

    let allFilters = document.querySelectorAll(".table-filter");
    allFilters.forEach((filter_i) => {
        let col_index = filter_i.parentElement.getAttribute("abbr");
        // alert(col_index)
        const rows = document.querySelectorAll("#emp-table > tbody > tr");

        rows.forEach((row) => {
            let cell_value = row.querySelector("td:nth-child("+col_index+")").innerHTML;
            // if the col index is already present in the dict
            if (col_index in unique_col_values_dict) {
                // if the cell value is already present in the array
                if (unique_col_values_dict[col_index].includes(cell_value)) {
                    // alert(cell_value + " is already present in the array : " + unique_col_values_dict[col_index])
                } else {
                    unique_col_values_dict[col_index].push(cell_value);
                    // alert("Array after adding the cell value : " + unique_col_values_dict[col_index])
                }
            } else {
                unique_col_values_dict[col_index] = new Array(cell_value);
            }
        });

    });

    updateSelectOptions(unique_col_values_dict);

}

// Add <option> tags to the desired columns based on the unique values

function updateSelectOptions(unique_col_values_dict) {
    let allFilters = document.querySelectorAll(".table-filter");

    allFilters.forEach((filter_i) => {
        let col_index = filter_i.parentElement.getAttribute('abbr');

        unique_col_values_dict[col_index].forEach((i) => {
            filter_i.innerHTML = filter_i.innerHTML + `\n<option value="${i}">${i}</option>`;
        });

    });
}


// Create filter_rows() function

// filter_value_dict {2 : Value selected, 4:value, 5: value}

function filter_rows() {
    let allFilters = document.querySelectorAll(".table-filter");
    var filter_value_dict = {};

    allFilters.forEach((filter_i) => {
        let col_index = filter_i.parentElement.getAttribute('abbr');

        let value = filter_i.value;
        if (value != "all") {
            filter_value_dict[col_index] = value;
        }
    });

    var col_cell_value_dict = {};

    const rows = document.querySelectorAll("#emp-table tbody tr");
    rows.forEach((row) => {
        var display_row = true;

        allFilters.forEach((filter_i) => {
            let col_index = filter_i.parentElement.getAttribute('abbr');
            col_cell_value_dict[col_index] = row.querySelector("td:nth-child(" + col_index+ ")").innerHTML;
        });

        var col_i;
        for (col_i in filter_value_dict) {
            if (col_cell_value_dict[col_i].indexOf(filter_value_dict[col_i]) == -1 && (filter_value_dict[col_i] != "all")) {
                display_row = false;
                break;
            }
        }
        if (display_row == true) {
            row.style.display = "table-row";

        } else {
            row.style.display = "none";
        }
    });
}
filter_rows();

