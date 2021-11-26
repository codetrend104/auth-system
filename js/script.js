var mymodal = document.getElementById("modelId")
var deleteData = document.getElementById("deletedata")

/* set atribiute for btn delete and show modal */
$(document).ready(function() {
    $(".deletbtne").hover(function() {
        $(this).attr({
            "data-bs-target": "#modelId",
            "data-bs-toggle": "modal",
        })

    })

})

/* set id with localstorage for get user id */
function deletefunc(event, number) {
    localStorage.setItem("id", number);
    console.log(number)
}

deleteData.addEventListener("click", function() {
    call()
})

/* when this function called send id to delte.php */
async function call() {
    try {
        let form = new FormData()
        form.append("id", localStorage.getItem("id"))
        let res = await axios.post("delete.php", form)
        location.reload()
    } catch (error) {
        console.log(error)
    }
}