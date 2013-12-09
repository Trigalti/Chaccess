
$( document ).ready(function() {

  $.ajaxSetup({
      // Disable caching of AJAX responses
      cache: false
  });

  /* Get tags from checkbox */

    $( '#create-checklist' ).submit(function( event ) {
    //console.log("submit:");
        var tagList = []; // create empty (json) object
        $('input[type=checkbox]').each(function(){
            if (this.checked) {
                var $this = $(this);
                tagList.push($this.attr("id"));
            }
        
            event.preventDefault();
        });

        var projectName = $('#insertname').val();

        var tags = JSON.stringify(tagList);
        var projectName = JSON.stringify(projectName);

        
        $.ajax({        
           type: "POST",
           url: "read_checkboxes.php",
           data: { tags : tags, projectName : projectName
           }, 
           success: function(result) {
                
               var myTags = result; 
               var currentTodoID = result.listID;
               console.log(currentTodoID);
               $('.checklist').html(myTags);
           }


      }); 
  
  });

/* Get checkboxes from todo list */

  $( '#home' ).on( "click", ".check-todo", function() {
    var rbtn = $(this).find("input");
    if(rbtn.is(':checked')){
      var $this = $(this);
      
      var currentTodoID = $this.attr("id"); 
      var currentTodoID = JSON.stringify(currentTodoID);

      var listID2 = $('.projectname').attr('id');

      console.log(listID2);
      console.log(currentTodoID);


      $.ajax({
        type: "POST",
        url: "update_checklist.php",
        data: {  currentTodoID : currentTodoID
        },
        success: function(data) {

            var currentTodoID = data;

            $('.testingunit').html(currentTodoID);
            ///console.log(idlala);

        }

        });

    }

  }); 

});
