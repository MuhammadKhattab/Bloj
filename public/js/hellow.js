$(document).ready( function() {
  // flash message
  $('div.alert').not('.alert-important').delay(3000).slideUp(300);

  // contact animation
  $('.anim-text').animate({marginLeft: "20px"}, 1500);

  // tags in form
  $('select').select2( {
    placeholder: "Choose a tag",
    tags:true
  });

  // drag and drop in about
  $( function() {
    $( "#draggable" ).draggable();

    $( "#droppable-explore" ).droppable({
      drop: function( event, ui ) {
        $( this )
          .addClass( "ui-state-highlight" )

        window.location.href = "http://localhost:8000/article";

      }
    });
  } );

  // submit in form
  $( function() {
    $( "#draggable" ).draggable();

    $( "#droppable-submit" ).droppable({
      drop: function( event, ui ) {
        $( this )
          .addClass( "ui-state-highlight" )

        document.getElementById("thaForm").submit();
      }
    });
  } );

});
