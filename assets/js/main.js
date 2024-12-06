/*
* APP: 1.0.0
*//*
const btn = document.getElementById("submit");
btn.addEventListener("click", e => {
    e.preventDefault();
    const name = document.getElementById("name").value;
    const email = document.getElementById("email").value;
    const password = document.getElementById("password").value;

    const data = {
        name: name,
        email: email,
        password: password,
        submit: "submit"
    };

    const postData = JSON.stringify(data);

    const xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            if (this.responseText == "done") {
                document.getElementById("msg").innerText = "Please login";
            } else {
                document.getElementById("msg").innerHTML = this.responseText;
            }
        }
    };

    xhr.open("POST", "./php/script.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    // xhr.send("name="+name+"&email="+email+"&password="+password+"&submit=submit");
    xhr.send(postData);
}); */
alert('i');