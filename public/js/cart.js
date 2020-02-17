$(document).ready(function() {

    $("#btnCart").click(function(e){
        e.preventDefault();
        let userID = $("#userID").val();

        $.ajax({
            url: 'index.php?page=getCart',
            method: 'POST',
            dataType: "json",
            data: {
                btnCart: true,
                userID: userID
            },
            success: function(data){
                console.log(data);
                printProducts(data);
            },
            error: function(xhr, status, statusText){
                console.error('----> ERROR <----');
                console.log(statusText);
            }
        })
    });



     $(document).on('click', '.deleteBtn', function(e){
        e.preventDefault();
        let cartID = $(this).data("id");
        

        $.ajax({
            url: 'index.php?page=deleteCart',
            method: 'POST',
            dataType: "json",
            data: {
                deleteBtn: true,
                cartID: cartID
            },
            success: function(data){
                refreshAmount();

                let alertDiv = document.querySelector('#successMessage');
                let message = document.querySelector('#msg');
                alertDiv.classList.remove('invisible');
                alertDiv.classList.add('alert-success');
                message.textContent = "Uspešno ste kupili proizvod!";
                setTimeout(function () {
                    alertDiv.classList.add('invisible')
                }, 2500);

                refreshView();
                refreshCartNumber();
                    
            },
            error: function(xhr, status, statusText){
                console.error('----> ERROR <----');
                console.log(statusText);

            }
        });
    });

});

function refreshAmount(){

    $.ajax({

        url: "index.php?page=getAmount",
        method: "POST",
        dataType: "json",
        success: function(data){
            let html="";
            for(let book of data){
            html += `<td class="lead font-weight-bold" style="font-size:20px">Ukupno: ${ (book.price == null) ? 0 : book.price } dinara</td>`;
            }
            $("#price").html(html);
        }

    })
}
     


function refreshView() {
     $.ajax({
            url: 'index.php?page=getAllCart',
            method: 'POST',
            dataType: "json",
            
            success: function(data){
                printProducts(data);
            },
            error: function(xhr, status, statusText){
                console.error('----> ERROR <----');
                console.log(statusText);
            }
        })
}


function refreshCartNumber(){

    $.ajax({
        url: 'index.php?page=getCartNumber',
        method: 'POST',
        dataType: "json",
        
        success: function(data){
            let html="";
            for(let book of data){
            html += `<i class="fas fa-shopping-cart"> (${ book.sum })</i>`;
            }
            $(".cartNumber").html(html);
            console.log(html);

        },
        error: function(xhr, status, statusText){
            console.error('----> ERROR <----');
            console.log(statusText);
        }
    })
}


function printProducts(data){

    let html="";
    for(let book of data){
        html += `<tr>
        <td><img class="w-25" src="${ book.imgSrc }" alt="${ book.imgAlt }"></td>
        <td class="lead" style="font-size:20px">${ book.name }</td>
        <td class="lead" style="font-size:20px">${ book.priceSite } dinara</td>
        <td><button type="button" class="btn btn-orange text-white deleteBtn" data-id="${ book.cartID }" role="button">Obriši</button></td>
        <td><button type="button" class="btn btn-orange text-white deleteBtn" data-id="${ book.cartID }" role="button">Kupite</button></td>
        </tr>`;
    }
    $("#table-cart").html(html);
}



