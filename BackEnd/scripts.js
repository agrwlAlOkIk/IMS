document.addEventListener("DOMContentLoaded", function() {
    fetchData();
});

function fetchData() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var data = JSON.parse(this.responseText);
            displayData(data);
        }
    };
    xhttp.open("GET", "fetchData.php", true);
    xhttp.send();
}

function displayData(data) {
    var container = document.getElementById("data-container");
    container.innerHTML = ""; // Clear previous data

    if (data.length === 0) {
        container.innerHTML = "<p>No data available</p>";
        return;
    }

    var table = document.createElement("table");
    var headerRow = table.insertRow();
    for (var key in data[0]) {
        if (data[0].hasOwnProperty(key)) {
            var headerCell = headerRow.insertCell();
            headerCell.textContent = key;
        }
    }

    data.forEach(function(rowData) {
        var row = table.insertRow();
        for (var key in rowData) {
            if (rowData.hasOwnProperty(key)) {
                var cell = row.insertCell();
                cell.textContent = rowData[key];
            }
        }
    });

    container.appendChild(table);
}
