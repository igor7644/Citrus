$(document).ready(function () {

    $('.unapproved-comments').on('click', '.approve', function (e) {
        e.preventDefault();
        let id = $(this).attr('data-id');
        $.ajax({
           method: 'POST',
           url: 'core/Service/approve_comment.php',
           data: {id: id},
           success: function (data) {
               let text = '';
               let comments = JSON.parse(data);

               comments.forEach(function (comment) {
                   text+=`
                         <div class="col-md-8 offset-md-2 admin-comments">
                            <p><b>${comment.name}:</b> ${comment.comment}</p>
                            <button type="button" class="btn btn-success approve" data-id="${comment.id}">Approve</button>
                         </div> <hr>`;
               });
               $('.unapproved-comments').html(text);
           }
        });
    });

});