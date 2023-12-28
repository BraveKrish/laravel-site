
// fetch all blog
    fetchAll();
    function fetchAll(){
        $.ajax({
            url: blogFetch,
            method: 'get',
            success: function(response){
                // console.log(response.data);
                $('#show_all_blog').html(response);
            }
            // ,
            // error: function(xhr, status, error) {
            //     console.error(error);
            // }
        });
    }

  // add blog ajax request
  $('#add_blog_form').submit(function(e) {
    e.preventDefault();
    // alert("hello");
    // all form data will be stored in fd constant
    const fd = new FormData(this);
    $('#add_blog_btn').text('Adding....');

    $.ajax({
        // url: "{{ route('blog.add') }}",
        url: blogAddUrl,
        method: 'post',
        data: fd,
        cache:false,
        processData: false,
        contentType:false,

        success:function(res){
            // console.log(res);
            // console.log(res.title);
            if(res.status == 200){
                Swal.fire(
                    'Added!',
                    'New Blog Added',
                    'success'
                );
                fetchAll();
            }
            $('#add_blog_btn').text('Add Blog');
            $('#add_blog_form')[0].reset();
            $('#addBlogModal').modal('hide');
        }

    });
  })










// var optionFeed = {
//     complete:function(response) {
//         console.log(response);
//         // console.log(response.responseJSON.blog_title);
//         $('#errors').hide();
//         if(!$.isEmptyObject(response.responseJSON.errors)) {
//            $('#errors').show();
//            $.each(response.responseJSON.errors, function(index, val) {
//              $('#errors').find('ul').append('<li><span>' + val + '</span></li>');
//            });

//         }else{

//         }
//     }
// }

// $('#blogModal').on('click','.blog-save',function(event){
//     $(this).parents('form').ajaxForm(optionFeed);
// });

// $(document).ready(function(){
//     $('#main_form').on('submit',function(event){
//         event.preventDefault();
//         // alert('Submit');
//         $.ajax({
//             // url: "{{ route('blog.add')}}",
//             url: $(this).attr('action'),
//             method:"POST",
//             data:new FormData(this),
//             processData:false,
//             dataType:'json',
//             contentType:false,
//             beforeSend:function(){
//                 $(document).find('span.error-text').text('');

//             },
//             success:function(data){
//                 // console.log(data); 
                
//                 if(data.status == 0){
//                     // $.each(data.error,function(prefix,val){
//                     //     console.log(prefix);
//                     //     $('span.'+prefix+'_error').text(val[0]);

//                     // });
//                     $.each(data.errors, function(key, value) {
//                         $('span.' + key + '_error').text(value[0]);
//                     });

//                 }else{
//                     $('#main_form')[0].reset();
//                     alert(data.msg);

//                 }

//             },
//             error: function(xhr, status, error) {
//                 // Handle server errors, including validation errors
//                 console.log(xhr.responseText); // Log the full response for debugging
//             }
//         });
//     });
// });


    // $(document).ready(function() {
    //     $("#main_form").on('submit',function(e) {
    //         e.preventDefault();
            

    //         let title = $("#blog_title").val();
    //         let desc = $("#description").val();
    //         let blog_category = $("#blog_category").val();
    //         let image = $("#image").val();

    //         $.ajax({
    //             url: "{{ route('blog.add')}}",
    //             method: 'post',
    //             // data:new FormData(this),
    //             data: {title:title, desc:desc, blog_category:blog_category, image:image},
                
    //             success:function(res){

    //             },
    //             error:function(err){
    //                 let error = err.responseJSON;
    //                 $.each(error.errors, function(index,value){
    //                     $('.errMsgContainer').append('<span class="text-danger">'+value+'</span>');
    //                 });
    //             }
    //         });
    //     });
    // });