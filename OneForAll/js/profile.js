// <!-- Statement of Authorship “I, Ayub Ali, student number 000354446, certify that this material is my original work. No other person's work has been used without due acknowledgement and I have not made my work available to anyone else. -->

window.addEventListener("load", function(){



    function success(success){
        console.log("it work")
    }
    function delet(delet){
        window.location.href = "index.php";
    }


    let form = document.getElementById("colorForm");
    form.addEventListener("submit", function(event){
        event.preventDefault();

         let color = document.getElementById("colorProfile").value;
         let id = document.getElementById("userid").value;
         let idInt = parseInt(id,10);

        let url = "server/postColor.php";
        let params = "userid=" + idInt + "&colorProfile=" + color;
        console.log(params);
        fetch(url, {
            method: 'POST',
            credentials: 'include',
            headers:{"Content-Type":"application/x-www-form-urlencoded"},
            body:params
        })
        .then(response => console.log(response.text()))
        .then(success)

    });

    let dForm = document.getElementById("deleteForm");
    dForm.addEventListener("submit", function(event){
        event.preventDefault();
        let id = document.getElementById("userid").value;
        let idInt = parseInt(id,10);

        let url = "server/delete.php";
        let params = "userid=" + idInt;

        fetch(url, {
            method: 'POST',
            credentials: 'include',
            headers:{"Content-Type":"application/x-www-form-urlencoded"},
            body:params
        })
        .then(response => response.text())
        .then(delet)
    })


})