!function(t){"use strict";t("#sidebarToggle").click(function(e){e.preventDefault(),t("body").toggleClass("sidebar-toggled"),t(".sidebar").toggleClass("toggled")}),t("body.fixed-nav .sidebar").on("mousewheel DOMMouseScroll wheel",function(e){if(768<$window.width()){var o=e.originalEvent,t=o.wheelDelta||-o.detail;this.scrollTop+=30*(t<0?1:-1),e.preventDefault()}}),t(document).scroll(function(){100<t(this).scrollTop()?t(".scroll-to-top").fadeIn():t(".scroll-to-top").fadeOut()}),t(document).on("click","a.scroll-to-top",function(e){var o=t(this);t("html, body").stop().animate({scrollTop:t(o.attr("href")).offset().top},1e3,"easeInOutExpo"),e.preventDefault()})}(jQuery);



/****************ADMIN USER******************/ 




$(document).on('click', '.delete-btn', function(e){
    e.preventDefault();
    let userID = $(this).data("id");
    

    $.ajax({
        url: 'index.php?page=deleteUser',
        method: 'POST',
        dataType: "json",
        data: {
            deleteBtn: true,
            userID: userID
        },
        success: function(data){
            refreshUser();
           
                
        },
        error: function(xhr, status, statusText){
            console.error('----> ERROR <----');
            console.log(statusText);

        }
    });
});


function refreshUser(){

    $.ajax({

        url: "index.php?page=getUsers",
        method: "POST",
        dataType: "json",
        success: function(data){
            let html="";
            for(let user of data){
            html += `<tr>
            <td>${ user.userID }</td>
            <td>${ user.fullName }</td>
            <td>${ user.email }></td>
            <td>${ user.registerDate }></td>
            <td>
              
              <button class="btn btn-danger delete-btn" data-id="${ user.userID }">Delete</button>
            </td>
          </tr>`;
            }
            $(".user-table").html(html);
        }

    })
}



/****************ADMIN CONTACT******************/ 



$(document).on('click', '.delete-contact', function(e){
    e.preventDefault();
    let contactID = $(this).data("id");
    

    $.ajax({
        url: 'index.php?page=deleteContact',
        method: 'POST',
        dataType: "json",
        data: {
            deleteContact: true,
            contactID: contactID
        },
        success: function(data){
            refreshContact();
           
                
        },
        error: function(xhr, status, statusText){
            console.error('----> ERROR <----');
            console.log(statusText);

        }
    });
});


function refreshContact(){

    $.ajax({

        url: "index.php?page=getContact",
        method: "POST",
        dataType: "json",
        success: function(data){
            let html="";
            for(let contact of data){
            html += `<tr>
            <td>${ contact.contactID }</td>
            <td>${ contact.fullName }</td>
            <td>${ contact.email }</td>
            <td>${ contact.content }</td>
            <td>
              <button class="btn btn-danger delete-contact" data-id="${ contact.contactID }">Delete</button>
            </td>
          </tr>`;
            }
            $(".contact-table").html(html);
        }

    })
}




/****************ADMIN CATEGORIES******************/ 



$(document).on("click", ".insert-btn", function(e){
    e.preventDefault();

    let categoryName = $("#category").val();
    
    
    
  
    $.ajax({
        url: 'index.php?page=insertCategory',
        method: 'POST',
        dataType: "json",
        data: {
            categoryBtn: true,
            categoryName: categoryName
        },
        success: function(data){
            console.log(data);
            clearForm();

            refreshCategory();

        },
        error: function(xhr, status, statusText){
            console.error('----> ERROR <----');
            console.log(status);
            console.log(xhr);
            console.log(statusText);

        }
    });
});


$(document).on('click', '.delete-category', function(e){
    e.preventDefault();
    let categoryID = $(this).data("id");
    

    $.ajax({
        url: 'index.php?page=deleteCategory',
        method: 'POST',
        dataType: "json",
        data: {
            deleteCategory: true,
            categoryID: categoryID
        },
        success: function(data){

            refreshCategory();
                
        },
        error: function(xhr, status, statusText){
            console.error('----> ERROR <----');
            console.log(statusText);

        }
    });
});



$(document).on('click', '.update-category', function(e){
    e.preventDefault();
    

    let categoryID = $(this).data('id');

    

    $.ajax({
        url: 'index.php?page=getOneCategory', 
        method: 'POST',
        dataType: 'json', 
        data: {
            btn: true,
            categoryID: categoryID
        },
        success: function(data){

            fillForm(data);
        }, 
        error: function(xhr, status, statusText){
            console.error('----> ERROR <----');
            console.log(statusText);
        }
    })
});

$(".insert-btn").click(function(){
    let categoryID = $('#hdnID').val();
    let name = $("#category").val();




        $.ajax({
            url: 'index.php?page=updateCategory',
            method: 'POST',
            data: {
                updateCategory: true,
                categoryID: categoryID,
                name: name
            },
            dataType: 'json',
            success: function(data){

                clearForm();
                refreshCategory();

            }, 
            error: function(xhr, status, statusText){
                console.error('----> ERROR <----');
                console.log(statusText);
            }
        }) 
    })      


    function refreshCategory(){

        $.ajax({
            url: 'index.php?page=getCategory',
            method: 'POST',
            dataType: "json",
            
            success: function(data){
                
                printCategories(data);
    
            },
            error: function(xhr, status, statusText){
                console.error('----> ERROR <----');
                console.log(statusText);
            }
        })
    }

function fillForm(category){
    $("#hdnID").val(category.categoryID);
    $("#category").val(category.name);
    $(".insert-btn").html("Update");
}

function clearForm(){
    $("#hdnID").val("");
    $("#category").val("");
    $(".insert-btn").html("Insert");
}

/***********************ADMIN BOOKS**************************/ 


$(document).on("click", ".insert-book", function(e){
    e.preventDefault();

    let name = $("#name").val();
    let description = $("#description").val();
    let price = $("#price").val();
    let priceSite = $("#priceSite").val();
    let imgSrc = $("#imgSrc").val();
    let imgAlt = $("#imgAlt").val();

  
    $.ajax({
        url: 'index.php?page=insertBook',
        method: 'POST',
        dataType: "json",
        data: {
            bookBtn: true,
            name: name,
            description: description,
            price: price,
            priceSite: priceSite,
            imgSrc: imgSrc,
            imgAlt: imgAlt
        },
        success: function(data){
            clearForm();

            refreshBook();

        },
        error: function(xhr, status, statusText){
            console.error('----> ERROR <----');
            console.log(status);
            console.log(xhr);
            console.log(statusText);

        }
    });
});



$(document).on('click', '.delete-book', function(e){
    e.preventDefault();
    let bookID = $(this).data("id");
    

    $.ajax({
        url: 'index.php?page=deleteBook',
        method: 'POST',
        dataType: "json",
        data: {
            deleteBook: true,
            bookID: bookID
        },
        success: function(data){

            refreshBook();
                
        },
        error: function(xhr, status, statusText){
            console.error('----> ERROR <----');
            console.log(statusText);

        }
    });
});




$(document).on('click', '.update-book', function(e){
    e.preventDefault();
    

    let bookID = $(this).data('id');

    

    $.ajax({
        url: 'index.php?page=getOneBook', 
        method: 'POST',
        data: {
            bookBtn: true,
            bookID: bookID
        },
        dataType: 'json', 
        success: function(data){

            fillFormBook(data);
        }, 
        error: function(xhr, status, statusText){
            console.error('----> ERROR <----');
            console.log(statusText);
        }
    })
});

$(".insert-book").click(function(){
    let bookID = $("#hdnBookID").val();
    let name = $("#name").val();
    let description =  $("#description").val();
    let price =  $("#price").val();
    let priceSite =  $("#priceSite").val();
    let imgSrc = $("#imgSrc").val();
    let imgAlt = $("#imgAlt").val();




        $.ajax({
            url: 'index.php?page=updateBook',
            method: 'POST',
            dataType: 'json',
            data: {
                updateBook: true,
                bookID: bookID,
                name: name,
                description: description,
                price: price,
                priceSite: priceSite,
                imgSrc: imgSrc,
                imgAlt: imgAlt


            },
            success: function(data){

                clearFormBook();
                refreshBook();

            }, 
            error: function(xhr, status, statusText){
                console.error('----> ERROR <----');
                console.log(statusText);
            }
        }) 
    })      



function fillFormBook(book){
    $("#hdnBookID").val(book.bookID);
    $("#name").val(book.name);
    $("#description").val(book.description);
    $("#price").val(book.price);
    $("#priceSite").val(book.priceSite);
    $("#imgSrc").val(book.imgSrc);
    $("#imgAlt").val(book.imgAlt);


    $(".insert-book").html("Update");
}

function clearFormBook(){
    $("#hdnBookID").val("");
    $("#name").val("");
    $("#description").val("");
    $("#price").val("");
    $("#priceSite").val("");
    $("#imgSrc").val("");
    $("#imgAlt").val("");
    $(".insert-book").html("Insert");
}

function refreshBook(){

    $.ajax({
        url: 'index.php?page=getBooks',
        method: 'POST',
        dataType: "json",
        
        success: function(data){
            
            printBooks(data);

        },
        error: function(xhr, status, statusText){
            console.error('----> ERROR <----');
            console.log(statusText);
        }
    })
}








function printBooks(data) {
    let html="";
        for(let book of data){
        html += `<tr>
        <td>${ book.bookID }</td>
        <td>${ book.name }</td>
        <td>${ book.description }</td>
        <td>${ book.price } dinara</td>
        <td>${ book.priceSite } dinara</td>
        <td><img class="admin-img" src="${ book.imgSrc }" alt="${ book.imgAlt }"></td>
        <td>
        
          <button class="btn btn-danger delete-book" data-id="${ book.bookID }">Delete</button>
        <td><button class="btn btn-danger update-book" data-id="${ book.bookID }">Update</button></td>
          
        </td>
      </tr>
        `;
    }
        $(".book-table").html(html);
}




function printCategories(data) {
    let html="";
        for(let category of data){
        html += `<tr>
        <td>${ category.categoryID }</td>
        <td>${ category.name }</td>
        <td>
          <button class="btn btn-danger delete-category" data-id="${ category.categoryID }">Delete</button>
          <button class="btn btn-danger update-category" data-id="${ category.categoryID }">Update</button>

        </td>
      </tr> 
        `;
    }
        $(".category-table").html(html);
}
