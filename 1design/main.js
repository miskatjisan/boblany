$(document).ready(function () {
    $("#searchInput").on("keyup", function () {
        var value = $(this).val();
        $("#dataTable tbody tr").filter(function () {
            var rowValue = parseInt($(this).find("td:first").text());
            if (value === "") {
                $(this).show(); // Show all rows when the search bar is empty
            } else {
                $(this).toggle(rowValue >= parseInt(value));
            }
        });
    });
});



// pagination
var currentPage = 1;
var rowsPerPage = 5;
var dataRows = document.querySelectorAll("#dataTable tbody tr");

function displayData(currentPage) {
  var start = (currentPage - 1) * rowsPerPage;
  var end = start + rowsPerPage;

  // Hide all rows
  for (var i = 0; i < dataRows.length; i++) {
    dataRows[i].style.display = "none";
  }

  // Show only the rows for the current page
  for (var i = start; i < end && i < dataRows.length; i++) {
    dataRows[i].style.display = "table-row";
  }
}

function setupPagination() {
  var pagination = document.getElementById("pagination");
  var pageCount = Math.ceil(dataRows.length / rowsPerPage);

  // Clear previous pagination
  pagination.innerHTML = "";

  // Generate pagination buttons
  for (var i = 1; i <= pageCount; i++) {
    var button = document.createElement("button");
    button.innerHTML = i;

    // Highlight the current page button
    if (i === currentPage) {
      button.classList.add("active");
    }

    // Set up click event for each button
    button.addEventListener("click", function() {
      currentPage = parseInt(this.innerHTML);
      displayData(currentPage);

      // Update active button
      var activeButton = document.getElementsByClassName("active");
      activeButton[0].classList.remove("active");
      this.classList.add("active");
    });

    pagination.appendChild(button);
  }
}

// Initial setup
displayData(currentPage);
setupPagination();



//color change

var leftInputs = document.querySelectorAll(".leftInput");
var rightInputs = document.querySelectorAll(".rightInput");
var colorInputs = document.querySelectorAll(".colorInput");

function compareInputs() {
  for (var i = 0; i < leftInputs.length; i++) {
    var leftValue = parseFloat(leftInputs[i].value.trim());
    var rightValue = parseFloat(rightInputs[i].value.trim());
    var colorInput = colorInputs[i];

    // Reset background color
    colorInput.style.backgroundColor = "";

    if (isNaN(leftValue) || isNaN(rightValue)) {
      colorInput.style.backgroundColor = "red";
    } else if (leftValue > rightValue) {
      colorInput.style.backgroundColor = "green";
    } else if (rightValue > leftValue) {
      colorInput.style.backgroundColor = "#0c14ee";
    } else {
      colorInput.style.backgroundColor = "green";
    }
  }
}

// Add event listeners to the input fields
for (var i = 0; i < leftInputs.length; i++) {
  leftInputs[i].addEventListener("input", compareInputs);
  rightInputs[i].addEventListener("input", compareInputs);
}

//drug and drop file 
$('.file-upload').file_upload();


