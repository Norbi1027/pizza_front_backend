//oldal betöltésekor a képsőbb betöltődő képek helyét már mutatja
let baseUrl = "http://localhost/pizza_front_backend/PizzaBackend/index.php?vevo";
document.addEventListener('DOMContentLoaded', function () {
    const insertButton = document.getElementById('create');
    const readButton = document.getElementById('read');
    const updateButton = document.getElementById('update');
    const deleteButton = document.getElementById('delete');
    const dolgozoForm = document.getElementById('dolgozoForm');
    const vevolista = document.getElementById('vevolista');
    var table = document.getElementById("ugyfellista");



    insertButton.addEventListener('click', async function () {
        let vnev = document.getElementById("vnev").value; 
        let vcim = document.getElementById("vcim").value; 

        let formData = new FormData();
        formData.append("vnev", vnev);
        formData.append("vcim", vcim);

        fetch(baseUrl, {
            method: "POST",
            body: formData
        })
            .then(response => {
                if (response.ok) {
                    console.log("Vevo sikeresen hozzáadva");
                } else {
                    console.error("Nem sikerült vevőt hozzáadni");
                }
            })
            .catch(error => {
                console.error("Error:", error);
            });
    });

     readButton.addEventListener("click", async function () {

        let options = {
            method: "GET",
            headers: {
                "Content-Type": "application/json"
            }
        };

        let response = await fetch(baseUrl, options);
        let data = await response.json();

        let tabla = `
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Név</th>
                        <th scope="col">Cím</th>
                    </tr>
                </thead>
                <tbody>
        `;
        data.forEach(element => {
            tabla += `<tr><td>${element.vazon}</td><td>${element.vnev}</td><td>${element.vcim}</td><td><button class="btn btn-primary pick" id="${element.vazon}">Pick</button></td></tr>`;
        });
        tabla += `
                </tbody>
            </table>`;

        table.innerHTML = tabla;

        const pickButtons = document.querySelectorAll(".pick");
        pickButtons.forEach(button => {
            button.addEventListener("click", function () {
                let azon = document.getElementById("vazon");
                let nev = document.getElementById("vnev");
                let cim = document.getElementById("vcim");

                // Find the corresponding data in the row
                let row = this.closest("tr");
                azon.value = row.querySelector("td:first-child").innerText;
                nev.value = row.querySelector("td:nth-child(2)").innerText;
                cim.value = row.querySelector("td:nth-child(3)").innerText;
            });
        });
    });

    updateButton.addEventListener("click", async function(){
         let object ={
            vazon :   document.getElementById("vazon").value,
            vnev :  document.getElementById("vnev").value,
            vcim :   document.getElementById("vcim").value
        }
        let baseUrl="http://localhost/pizza_front_backend/PizzaBackend/index.php?vevo/" + vazon;

        let body=JSON.stringify(object)
        let options={
            method: "PUT",
            mode: "cors",
            body: body
        };
       
        
        let response= await fetch(baseUrl, options);
    });

    deleteButton.addEventListener("click", async function () {
        let baseUrl = `http://localhost/pizza_front_backend/PizzaBackend/index.php?vevo/${document.getElementById("vazon").value}`;
        let options = {
            method: "DELETE",
        }
        response = await fetch(baseUrl, options);

    });


})