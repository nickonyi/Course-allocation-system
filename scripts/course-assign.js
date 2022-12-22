// onchange event will occur when the user
// release the key and calls the function
// assigned to this event
function GetDetail(str) {
    if (str.length == 0) {
        document.getElementById("student_name").value = "";
        document.getElementById("student_email").value = "";
        document.getElementById("student_department").value = "";
        return;
    } else {

        // Creates a new XMLHttpRequest object
        var xmlhttp = new XMLHttpRequest();

        console.log(xmlhttp);
        xmlhttp.onreadystatechange = function() {

            // Defines a function to be called when
            // the readyState property changes
            if (this.readyState == 4 &&
                this.status == 200) {

                // Typical action to be performed
                // when the document is ready

                console.log(this.responseText);
                var myObj = JSON.parse(this.responseText);
                // Returns the response data as a
                // string and store this array in
                // a variable assign the value
                // received to first name input field
                console.log(myObj.length);

                const select = document.getElementById("lec-name");


                const option = document.createElement("option");
                option.value = myObj[1];
                option.innerHTML = myObj[0];


                select.appendChild(option);



            }
        };

        // xhttp.open("GET", "filename", true);
        xmlhttp.open("GET", "course-load.php?id=" + str, true);

        // Sends the request to the server
        xmlhttp.send();

    }
}